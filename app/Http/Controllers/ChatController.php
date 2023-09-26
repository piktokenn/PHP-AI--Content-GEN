<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreChatRequest;
use App\Http\Requests\UpdateChatRequest;
use App\Models\Chat;
use App\Models\Message;
use App\Traits\ChatTrait;
use Carbon\Carbon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use League\Csv as CSV;
use League\Csv\CannotInsertRecord;

class ChatController extends Controller
{
    use ChatTrait;

    /**
     * List the Chats.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $searchBy = in_array($request->input('search_by'), ['name']) ? $request->input('search_by') : 'name';
        $favorite = $request->input('favorite');
        $sortBy = in_array($request->input('sort_by'), ['id', 'name']) ? $request->input('sort_by') : 'id';
        $sort = in_array($request->input('sort'), ['asc', 'desc']) ? $request->input('sort') : 'desc';
        $perPage = in_array($request->input('per_page'), [10, 25, 50, 100]) ? $request->input('per_page') : config('settings.paginate');

        $chats = Chat::where('user_id', $request->user()->id)
            ->when($search, function ($query) use ($search, $searchBy) {
                return $query->searchName($search);
            })
            ->when(isset($favorite) && is_numeric($favorite), function ($query) use ($favorite) {
                return $query->ofFavorite($favorite);
            })
            ->orderBy($sortBy, $sort)
            ->paginate($perPage)
            ->appends(['search' => $search, 'search_by' => $searchBy, 'favorite' => $favorite, 'sort_by' => $sortBy, 'sort' => $sort, 'per_page' => $perPage]);

        return view('chats.container', ['view' => 'list', 'chats' => $chats]);
    }

    /**
     * Show the create Chat form.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('chats.container', ['view' => 'new']);
    }

    /**
     * Show the edit Chat form.
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Request $request, $id)
    {
        $chat = Chat::where([['id', '=', $id], ['user_id', '=', $request->user()->id]])->firstOrFail();

        return view('chats.container', ['view' => 'edit', 'chat' => $chat]);
    }

    /**
     * Show the Chat.
     */
    public function show(Request $request, $id)
    {
        $chat = Chat::where([['id', $id]])->firstOrFail();

        $search = $request->input('search');
        $searchBy = in_array($request->input('search_by'), ['result']) ? $request->input('search_by') : 'result';
        $role = $request->input('role');
        $sortBy = in_array($request->input('sort_by'), ['id']) ? $request->input('sort_by') : 'id';
        $sort = in_array($request->input('sort'), ['asc', 'desc']) ? $request->input('sort') : 'desc';
        $perPage = in_array($request->input('per_page'), [10, 25, 50, 100]) ? $request->input('per_page') : config('settings.paginate');

        $messages = Message::where('chat_id', $chat->id)
            ->when($search, function ($query) use ($search, $searchBy) {
                return $query->searchResult($search);
            })
            ->when($role, function ($query) use ($role) {
                return $query->ofRole($role);
            })
            ->orderBy($sortBy, $sort)
            ->paginate($perPage)
            ->appends(['search' => $search, 'search_by' => $searchBy, 'role' => $role, 'sort_by' => $sortBy, 'sort' => $sort, 'per_page' => $perPage]);

        if (!$request->user() || $request->user()->id != $chat->user_id && $request->user()->role == 0) {
            abort(403);
        }

        return view('chats.container', ['view' => 'show', 'chat' => $chat, 'messages' => $messages]);
    }

    /**
     * Store the Chat.
     *
     * @param StoreChatRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreChatRequest $request)
    {
        $this->chatStore($request);

        return redirect()->route('chats')->with('success', __(':name has been created.', ['name' => $request->input('name')]));
    }

    /**
     * Update the Chat.
     *
     * @param UpdateChatRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateChatRequest $request, $id)
    {
        $chat = Chat::where([['id', '=', $id], ['user_id', '=', $request->user()->id]])->firstOrFail();

        $this->chatUpdate($request, $chat);

        return back()->with('success', __('Settings saved.'));
    }

    /**
     * Delete the Chat.
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Request $request, $id)
    {
        $chat = Chat::where([['id', '=', $id], ['user_id', '=', $request->user()->id]])->firstOrFail();

        $chat->delete();

        return redirect()->route('chats')->with('success', __(':name has been deleted.', ['name' => $chat->name]));
    }

    /**
     * Export the Chat.
     *
     * @param Request $request
     * @param $id
     * @return Application|ResponseFactory|Response
     * @throws CannotInsertRecord
     */
    public function export(Request $request, $id)
    {
        if ($request->user()->cannot('dataExport', ['App\Models\User'])) {
            abort(403);
        }

        $chat = Chat::where([['id', $id]])->firstOrFail();

        $now = Carbon::now();
        $search = $request->input('search');
        $searchBy = in_array($request->input('search_by'), ['result']) ? $request->input('search_by') : 'result';
        $role = $request->input('role');
        $sortBy = in_array($request->input('sort_by'), ['id']) ? $request->input('sort_by') : 'id';
        $sort = in_array($request->input('sort'), ['asc', 'desc']) ? $request->input('sort') : 'desc';

        $chat = Chat::where([['id', $id]])->firstOrFail();

        $messages = Message::where([['user_id', '=', $request->user()->id], ['chat_id', '=', $chat->id]])
            ->when($search, function ($query) use ($search, $searchBy) {
                return $query->searchResult($search);
            })
            ->when($role, function ($query) use ($role) {
                return $query->ofRole($role);
            })
            ->orderBy($sortBy, $sort)
            ->get();

        $content = CSV\Writer::createFromFileObject(new \SplTempFileObject);

        // Generate the header
        $content->insertOne([__('Type'), __('Chat')]);
        $content->insertOne([__('Date'), $now->tz($request->user()->timezone ?? config('app.timezone'))->format(__('Y-m-d')) . ' ' . $now->tz($request->user()->timezone ?? config('app.timezone'))->format('H:i:s') . ' (' . $now->tz($request->user()->timezone ?? config('app.timezone'))->getOffsetString() . ')']);
        $content->insertOne([__('URL'), $request->fullUrl()]);
        $content->insertOne([__(' ')]);

        // Generate the content
        $content->insertOne([__('ID'), __('Name'), __('Result'), __('Words'), __('Role'), __('Updated at'), __('Created at')]);
        foreach ($messages as $message) {
            $content->insertOne([$message->id, $message->name, $message->result, $message->words, $message->role == 'user' ? $message->user->name : config('settings.ai_assistant_name'), $message->updated_at->tz($request->user()->timezone ?? config('app.timezone'))->format(__('Y-m-d')), $message->created_at->tz($request->user()->timezone ?? config('app.timezone'))->format(__('Y-m-d'))]);
        }

        return response((string) $content, 200, [
            'Content-Type' => 'text/csv',
            'Content-Transfer-Encoding' => 'binary',
            'Content-Disposition' => 'attachment; filename="' . formatTitle([__('Chat'), config('settings.title')]) . '.csv"',
        ]);
    }
}
