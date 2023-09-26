@section('site_title', formatTitle([config('settings.title'), __(config('settings.tagline'))]))

@extends('layouts.app')

@section('head_content')

@endsection

@section('content')
<div class="flex-fill">
    <div class="bg-base-0 position-relative pt-5 pt-sm-6">
        <div class="container position-relative z-1">
            <div class="row py-sm-5">
                <div class="col-12 text-center text-break">
                    <h1 class="display-4 mb-0 font-weight-bold">
                        {{ __('AI powered content generator') }}
                    </h1>

                    <p class="text-muted font-weight-normal my-4 font-size-xl">
                        {{ __('Create unique and engaging content that will increase conversions and drive sales.') }}
                    </p>

                    <div class="pt-2 d-flex flex-column flex-sm-row justify-content-center">
                        <a href="{{ config('settings.registration') ? route('register') : route('login') }}" class="btn btn-primary btn-lg font-size-lg align-items-center mt-3">{{ __('Get started') }}</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="position-relative z-0 mt-5 mt-sm-0">
            <div class="container">
                <div class="position-absolute top-0 right-0 bottom-0 left-0 z-1 bg-fade-0"></div>
                <div class="row position-relative d-flex justify-content-center">
                    <div class="position-relative col-12">
                        <img src="{{ (config('settings.dark_mode') == 1 ? asset('img/hero_dark.png') : asset('img/hero.png')) }}" class="img-fluid shadow-lg border-top-left-radius-2xl border-top-right-radius-2xl image-rendering-optimize-contrast" data-theme-dark="{{ asset('img/hero_dark.png') }}" data-theme-light="{{ asset('img/hero.png') }}" width="1512" height="700" data-theme-target="src" alt="{{ config('settings.title') }}">
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-base-0 container position-relative pt-5 pb-5 pb-md-7 z-1 overflow-hidden">
            <div class="row m-n4 m-lg-n5">
                <div class="col-12 col-lg-4 p-4 p-lg-5 d-flex">
                    <div class="d-flex position-relative text-primary width-4 height-4 align-items-center justify-content-center flex-shrink-0 {{ (__('lang_dir') == 'rtl' ? 'ml-3' : 'mr-3') }} mt-1">
                        @include('icons.psychology', ['class' => 'fill-current width-4 height-4'])
                    </div>
                    <div>
                        <div class="d-block w-100 d-inline-block">
                            <span class="font-weight-bold">
                                {{ __('Intelligent') }}.
                            </span>
                            <span class="text-muted">
                                {{ __('Advanced document and image generator.') }}
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4 p-4 p-lg-5 d-flex">
                    <div class="d-flex position-relative text-primary width-4 height-4 align-items-center justify-content-center flex-shrink-0 {{ (__('lang_dir') == 'rtl' ? 'ml-3' : 'mr-3') }} mt-1">
                        @include('icons.tune', ['class' => 'fill-current width-4 height-4'])
                    </div>
                    <div>
                        <div class="d-block w-100 d-inline-block">
                            <span class="font-weight-bold">
                                {{ __('Flexible') }}.
                            </span>
                            <span class="text-muted">
                                {{ __('Custom templates and chat behavior.') }}
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4 p-4 p-lg-5 d-flex">
                    <div class="d-flex position-relative text-primary width-4 height-4 align-items-center justify-content-center flex-shrink-0 {{ (__('lang_dir') == 'rtl' ? 'ml-3' : 'mr-3') }} mt-1">
                        @include('icons.language', ['class' => 'fill-current width-4 height-4'])
                    </div>
                    <div>
                        <div class="d-block w-100 d-inline-block">
                            <span class="font-weight-bold">
                                {{ __('Multilingual') }}.
                            </span>
                            <span class="text-muted">
                                {{ __('Prompts and results in multiple languages.') }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-base-1 overflow-hidden">
        <div class="container py-5 py-md-7 position-relative z-1">
            <div class="row mx-n5">
                <div class="col-12 col-lg-6 px-5">
                    <div class="row">
                        <div class="col-12 text-center {{ (__('lang_dir') == 'rtl' ? 'text-lg-right' : 'text-lg-left') }}">
                            <h2 class="h2 mb-3 font-weight-bold">{{ __('Content writing') }}</h2>
                            <div class="m-auto">
                                <p class="text-muted font-weight-normal font-size-lg mb-0">{{ __('Harness the power of artificial intelligence and transform the way you produce unique content.') }}</p>
                            </div>
                        </div>

                        <div class="col-12 pt-4 mt-4">
                            <div class="d-flex flex-row">
                                <div class="d-flex width-12 height-12 position-relative align-items-center justify-content-center flex-shrink-0 {{ (__('lang_dir') == 'rtl' ? 'ml-3' : 'mr-3') }}">
                                    <div class="position-absolute bg-primary opacity-10 top-0 right-0 bottom-0 left-0 border-radius-2xl"></div>
                                    @include('icons.document', ['class' => 'fill-current width-6 height-6 text-primary'])
                                </div>
                                <div class="{{ (__('lang_dir') == 'rtl' ? 'mr-1' : 'ml-1') }}">
                                    <div class="d-block w-100"><div class="h5 mt-0 mb-1 d-inline-block font-weight-bold">{{ __('Documents') }}</div></div>
                                    <div class="d-block w-100 text-muted">{{ __('Generate original content for your website, marketing, and social activities.') }}</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 pt-4 mt-4">
                            <div class="d-flex flex-row">
                                <div class="d-flex width-12 height-12 position-relative align-items-center justify-content-center flex-shrink-0 {{ (__('lang_dir') == 'rtl' ? 'ml-3' : 'mr-3') }}">
                                    <div class="position-absolute bg-primary opacity-10 top-0 right-0 bottom-0 left-0 border-radius-2xl"></div>
                                    @include('icons.chat', ['class' => 'fill-current width-6 height-6 text-primary'])
                                </div>
                                <div class="{{ (__('lang_dir') == 'rtl' ? 'mr-1' : 'ml-1') }}">
                                    <div class="d-block w-100"><div class="h5 mt-0 mb-1 d-inline-block font-weight-bold">{{ __('Chats') }}</div></div>
                                    <div class="d-block w-100 text-muted">{{ __('Receive immediate answers to your questions in an interactive manner.') }}</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 pt-4 mt-4">
                            <div class="d-flex flex-row">
                                <div class="d-flex width-12 height-12 position-relative align-items-center justify-content-center flex-shrink-0 {{ (__('lang_dir') == 'rtl' ? 'ml-3' : 'mr-3') }}">
                                    <div class="position-absolute bg-primary opacity-10 top-0 right-0 bottom-0 left-0 border-radius-2xl"></div>
                                    @include('icons.headphones', ['class' => 'fill-current width-6 height-6 text-primary'])
                                </div>
                                <div class="{{ (__('lang_dir') == 'rtl' ? 'mr-1' : 'ml-1') }}">
                                    <div class="d-block w-100"><div class="h5 mt-0 mb-1 d-inline-block font-weight-bold">{{ __('Transcriptions') }}</div></div>
                                    <div class="d-block w-100 text-muted">{{ __('Extract the contents of audio files and turn them into fully editable documents.') }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 position-relative px-5 mt-5 mt-lg-0">
                    <div class="position-relative">
                        <div class="position-absolute top-0 right-0 bottom-0 left-0 bg-primary opacity-10 border-radius-2xl" style="transform: translate(1rem, 1rem);"></div>

                        <div class="card border-0 shadow-lg border-radius-2xl overflow-hidden cursor-default">
                            <div class="card-body">
                                <div class="list-group list-group-flush my-n3">
                                    <div class="list-group-item px-0">
                                        <div class="row align-items-center">
                                            <div class="col d-flex text-truncate">
                                                <div class="text-truncate">
                                                    <div class="d-flex align-items-center">
                                                        <div class="d-flex align-items-center {{ (__('lang_dir') == 'rtl' ? 'ml-3' : 'mr-3') }}" data-tooltip="true" title="{{ __('Freestyle') }}">
                                                            @include('icons.draw', ['class' => 'fill-current width-4 height-4 text-' . categoryColor('custom')])
                                                        </div>

                                                        <div class="text-truncate {{ (__('lang_dir') == 'rtl' ? 'ml-2' : 'mr-2') }}">
                                                            <div class="text-primary text-truncate" dir="ltr">{{ __('Document') }}</div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <div class="width-4 flex-shrink-0 {{ (__('lang_dir') == 'rtl' ? 'ml-3' : 'mr-3') }}"></div>
                                                        <div class="text-muted text-truncate small">
                                                            <span class="text-muted">{{ __('Artificial Intelligence is a rapidly developing field of computer science and engineering that focuses on creating intelligent machines that can think and act like humans.') }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto d-flex">
                                                <div class="form-row">
                                                    <div class="col">
                                                        <div class="btn d-flex align-items-center btn-sm text-primary cursor-default">@include('icons.more-horiz', ['class' => 'fill-current width-4 height-4'])&#8203;</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card border-0 shadow-lg border-radius-2xl overflow-hidden cursor-default mt-3">
                            <div class="card-body">
                                <div class="list-group list-group-flush my-n3">
                                    <div class="list-group-item px-0">
                                        <div class="row align-items-center">
                                            <div class="col d-flex text-truncate">
                                                <div class="text-truncate">
                                                    <div class="d-flex align-items-center">
                                                        <div class="d-flex align-items-center {{ (__('lang_dir') == 'rtl' ? 'ml-3' : 'mr-3') }}" data-tooltip="true" title="{{ __('Paragraph') }}">
                                                            @include('icons.subject', ['class' => 'fill-current width-4 height-4 text-' . categoryColor('content')])
                                                        </div>

                                                        <div class="text-truncate {{ (__('lang_dir') == 'rtl' ? 'ml-2' : 'mr-2') }}">
                                                            <div class="text-primary text-truncate" dir="ltr">{{ __('Paragraph') }}</div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <div class="width-4 flex-shrink-0 {{ (__('lang_dir') == 'rtl' ? 'ml-3' : 'mr-3') }}"></div>
                                                        <div class="text-muted text-truncate small">
                                                            <span class="text-muted">{{ __('Machine learning is a type of artificial intelligence that allows computers to learn and improve on their own without being explicitly programmed.') }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto d-flex">
                                                <div class="form-row">
                                                    <div class="col">
                                                        <div class="btn d-flex align-items-center btn-sm text-primary cursor-default">@include('icons.more-horiz', ['class' => 'fill-current width-4 height-4'])&#8203;</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card border-0 shadow-lg border-radius-2xl overflow-hidden cursor-default mt-3">
                            <div class="card-body">
                                <div class="list-group list-group-flush my-n3">
                                    <div class="list-group-item px-0">
                                        <div class="row align-items-center">
                                            <div class="col d-flex text-truncate">
                                                <div class="text-truncate">
                                                    <div class="d-flex align-items-center">
                                                        <div class="d-flex align-items-center {{ (__('lang_dir') == 'rtl' ? 'ml-3' : 'mr-3') }}" data-tooltip="true" title="{{ __('Advertisement') }}">
                                                            @include('icons.ads-click', ['class' => 'fill-current width-4 height-4 text-' . categoryColor('marketing')])
                                                        </div>

                                                        <div class="text-truncate {{ (__('lang_dir') == 'rtl' ? 'ml-2' : 'mr-2') }}">
                                                            <div class="text-primary text-truncate" dir="ltr">{{ __('Advertisement') }}</div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <div class="width-4 flex-shrink-0 {{ (__('lang_dir') == 'rtl' ? 'ml-3' : 'mr-3') }}"></div>
                                                        <div class="text-muted text-truncate small">
                                                            <span class="text-muted">{{ __('Are you a blogger or journalist struggling to keep up with the demand for content?') }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto d-flex">
                                                <div class="form-row">
                                                    <div class="col">
                                                        <div class="btn d-flex align-items-center btn-sm text-primary cursor-default">@include('icons.more-horiz', ['class' => 'fill-current width-4 height-4'])&#8203;</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card border-0 shadow-lg border-radius-2xl overflow-hidden cursor-default mt-3">
                            <div class="card-body">
                                <div class="list-group list-group-flush my-n3">
                                    <div class="list-group-item px-0">
                                        <div class="row align-items-center">
                                            <div class="col d-flex text-truncate">
                                                <div class="text-truncate">
                                                    <div class="d-flex align-items-center">
                                                        <div class="d-flex align-items-center {{ (__('lang_dir') == 'rtl' ? 'ml-3' : 'mr-3') }}" data-tooltip="true" title="{{ __('Paragraph') }}">
                                                            @include('icons.reviews', ['class' => 'fill-current width-4 height-4 text-' . categoryColor('website')])
                                                        </div>

                                                        <div class="text-truncate {{ (__('lang_dir') == 'rtl' ? 'ml-2' : 'mr-2') }}">
                                                            <div class="text-primary text-truncate" dir="ltr">{{ __('Review') }}</div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <div class="width-4 flex-shrink-0 {{ (__('lang_dir') == 'rtl' ? 'ml-3' : 'mr-3') }}"></div>
                                                        <div class="text-muted text-truncate small">
                                                            <span class="text-muted">{{ __('I recently had the opportunity to try out an innovative tool that has completely revolutionized the way I create content.') }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto d-flex">
                                                <div class="form-row">
                                                    <div class="col">
                                                        <div class="btn d-flex align-items-center btn-sm text-primary cursor-default">@include('icons.more-horiz', ['class' => 'fill-current width-4 height-4'])&#8203;</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card border-0 shadow-lg border-radius-2xl overflow-hidden cursor-default mt-3">
                            <div class="card-body">
                                <div class="list-group list-group-flush my-n3">
                                    <div class="list-group-item px-0">
                                        <div class="row align-items-center">
                                            <div class="col d-flex text-truncate">
                                                <div class="text-truncate">
                                                    <div class="d-flex align-items-center">
                                                        <div class="d-flex align-items-center {{ (__('lang_dir') == 'rtl' ? 'ml-3' : 'mr-3') }}" data-tooltip="true" title="{{ __('Hashtags') }}">
                                                            @include('icons.tag', ['class' => 'fill-current width-4 height-4 text-' . categoryColor('social')])
                                                        </div>

                                                        <div class="text-truncate {{ (__('lang_dir') == 'rtl' ? 'ml-2' : 'mr-2') }}">
                                                            <div class="text-primary text-truncate" dir="ltr">{{ __('Hashtags') }}</div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <div class="width-4 flex-shrink-0 {{ (__('lang_dir') == 'rtl' ? 'ml-3' : 'mr-3') }}"></div>
                                                        <div class="text-muted text-truncate small">
                                                            <span class="text-muted">{{ __('#DeepLearning #CognitiveComputing #MachineLearning #FutureTech') }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto d-flex">
                                                <div class="form-row">
                                                    <div class="col">
                                                        <div class="btn d-flex align-items-center btn-sm text-primary cursor-default">@include('icons.more-horiz', ['class' => 'fill-current width-4 height-4'])&#8203;</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-base-0 overflow-hidden">
        <div class="container py-5 py-md-7 position-relative z-1">
            <div class="row mx-n5">
                <div class="col-12 col-lg-6 px-5 order-1 order-lg-2">
                    <div class="row">
                        <div class="col-12 text-center {{ (__('lang_dir') == 'rtl' ? 'text-lg-right' : 'text-lg-left') }}">
                            <h2 class="h2 mb-3 font-weight-bold">{{ __('Media creation') }}</h2>
                            <div class="mx-auto mb-4">
                                <p class="text-muted font-weight-normal font-size-lg mb-0">
                                    {{ __('Turn ideas into images that will increase conversions and boost engagement.') }}
                                </p>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 mt-4">
                            <div class="d-flex">
                                <div class="d-flex position-relative text-primary width-8 height-8 align-items-center justify-content-center flex-shrink-0 {{ (__('lang_dir') == 'rtl' ? 'ml-3' : 'mr-3') }}">
                                    <div class="position-absolute bg-primary opacity-10 top-0 right-0 bottom-0 left-0 border-radius-lg"></div>
                                    @include('icons.view-in-ar', ['class' => 'fill-current width-4 height-4'])
                                </div>
                                <div>
                                    <div class="d-block w-100"><div class="my-1 d-inline-block font-weight-bold font-size-lg">{{ __('3D render') }}</div></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 mt-4">
                            <div class="d-flex">
                                <div class="d-flex position-relative text-primary width-8 height-8 align-items-center justify-content-center flex-shrink-0 {{ (__('lang_dir') == 'rtl' ? 'ml-3' : 'mr-3') }}">
                                    <div class="position-absolute bg-primary opacity-10 top-0 right-0 bottom-0 left-0 border-radius-lg"></div>
                                    @include('icons.dashboard', ['class' => 'fill-current width-4 height-4'])
                                </div>
                                <div>
                                    <div class="d-block w-100"><div class="my-1 d-inline-block font-weight-bold font-size-lg">{{ __('Abstract') }}</div></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 mt-4">
                            <div class="d-flex">
                                <div class="d-flex position-relative text-primary width-8 height-8 align-items-center justify-content-center flex-shrink-0 {{ (__('lang_dir') == 'rtl' ? 'ml-3' : 'mr-3') }}">
                                    <div class="position-absolute bg-primary opacity-10 top-0 right-0 bottom-0 left-0 border-radius-lg"></div>
                                    @include('icons.rabbit', ['class' => 'fill-current width-4 height-4'])
                                </div>
                                <div>
                                    <div class="d-block w-100"><div class="my-1 d-inline-block font-weight-bold font-size-lg">{{ __('Cartoon') }}</div></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 mt-4">
                            <div class="d-flex">
                                <div class="d-flex position-relative text-primary width-8 height-8 align-items-center justify-content-center flex-shrink-0 {{ (__('lang_dir') == 'rtl' ? 'ml-3' : 'mr-3') }}">
                                    <div class="position-absolute bg-primary opacity-10 top-0 right-0 bottom-0 left-0 border-radius-lg"></div>
                                    @include('icons.wallpaper', ['class' => 'fill-current width-4 height-4'])
                                </div>
                                <div>
                                    <div class="d-block w-100"><div class="my-1 d-inline-block font-weight-bold font-size-lg">{{ __('Digital art') }}</div></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 mt-4">
                            <div class="d-flex">
                                <div class="d-flex position-relative text-primary width-8 height-8 align-items-center justify-content-center flex-shrink-0 {{ (__('lang_dir') == 'rtl' ? 'ml-3' : 'mr-3') }}">
                                    <div class="position-absolute bg-primary opacity-10 top-0 right-0 bottom-0 left-0 border-radius-lg"></div>
                                    @include('icons.account-box', ['class' => 'fill-current width-4 height-4'])
                                </div>
                                <div>
                                    <div class="d-block w-100"><div class="my-1 d-inline-block font-weight-bold font-size-lg">{{ __('Illustration') }}</div></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 mt-4">
                            <div class="d-flex">
                                <div class="d-flex position-relative text-primary width-8 height-8 align-items-center justify-content-center flex-shrink-0 {{ (__('lang_dir') == 'rtl' ? 'ml-3' : 'mr-3') }}">
                                    <div class="position-absolute bg-primary opacity-10 top-0 right-0 bottom-0 left-0 border-radius-lg"></div>
                                    @include('icons.select-all', ['class' => 'fill-current width-4 height-4'])
                                </div>
                                <div>
                                    <div class="d-block w-100"><div class="my-1 d-inline-block font-weight-bold font-size-lg">{{ __('Pixel art') }}</div></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 mt-4">
                            <div class="d-flex">
                                <div class="d-flex position-relative text-primary width-8 height-8 align-items-center justify-content-center flex-shrink-0 {{ (__('lang_dir') == 'rtl' ? 'ml-3' : 'mr-3') }}">
                                    <div class="position-absolute bg-primary opacity-10 top-0 right-0 bottom-0 left-0 border-radius-lg"></div>
                                    @include('icons.photo-camera', ['class' => 'fill-current width-4 height-4'])
                                </div>
                                <div>
                                    <div class="d-block w-100"><div class="my-1 d-inline-block font-weight-bold font-size-lg">{{ __('Photography') }}</div></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 mt-4">
                            <div class="d-flex">
                                <div class="d-flex position-relative text-primary width-8 height-8 align-items-center justify-content-center flex-shrink-0 {{ (__('lang_dir') == 'rtl' ? 'ml-3' : 'mr-3') }}">
                                    <div class="position-absolute bg-primary opacity-10 top-0 right-0 bottom-0 left-0 border-radius-lg"></div>
                                    @include('icons.draw', ['class' => 'fill-current width-4 height-4'])
                                </div>
                                <div>
                                    <div class="d-block w-100"><div class="my-1 d-inline-block font-weight-bold font-size-lg">{{ __('Sketch') }}</div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6 px-5 position-relative order-2 order-lg-1 mt-5 mt-lg-0">
                    <div class="position-relative">
                        <div>
                            <div class="row m-n4 position-relative">
                                <div class="col-3 p-4">
                                    <div class="position-absolute top-0 right-0 bottom-0 left-0 bg-primary opacity-10 border-radius-2xl z-0 m-4" style="transform: translate(-1rem, 1rem);"></div>
                                    <img src="{{ asset('img/media_1.png') }}" width="256" height="256" class="img-fluid image-rendering-optimize-contrast position-relative border-radius-2xl shadow-lg z-1" title="{{ __('Matte painting') }}" alt={{ __('Matte painting') }} data-tooltip="true" loading="lazy">
                                </div>
                                <div class="col-3 p-4">
                                    <div class="position-absolute top-0 right-0 bottom-0 left-0 bg-primary opacity-10 border-radius-2xl z-0 m-4" style="transform: translate(-1rem, 1rem);"></div>
                                    <img src="{{ asset('img/media_2.png') }}" width="256" height="256" class="img-fluid image-rendering-optimize-contrast position-relative border-radius-2xl shadow-lg z-1" title="{{ __('Black & white portrait') }}" alt={{ __('Black & white portrait') }} data-tooltip="true" loading="lazy">
                                </div>
                                <div class="col-3 p-4">
                                    <div class="position-absolute top-0 right-0 bottom-0 left-0 bg-primary opacity-10 border-radius-2xl z-0 m-4" style="transform: translate(-1rem, 1rem);"></div>
                                    <img src="{{ asset('img/media_3.png') }}" width="256" height="256" class="img-fluid image-rendering-optimize-contrast position-relative border-radius-2xl shadow-lg z-1" title="{{ __('Computer motherboard') }}" alt={{ __('Computer motherboard') }} data-tooltip="true" loading="lazy">
                                </div>
                                <div class="col-3 p-4">
                                    <div class="position-absolute top-0 right-0 bottom-0 left-0 bg-primary opacity-10 border-radius-2xl z-0 m-4" style="transform: translate(-1rem, 1rem);"></div>
                                    <img src="{{ asset('img/media_4.png') }}" width="256" height="256" class="img-fluid image-rendering-optimize-contrast position-relative border-radius-2xl shadow-lg z-1" title="{{ __('Red flowers') }}" alt={{ __('Red flowers') }} data-tooltip="true" loading="lazy">
                                </div>
                                <div class="col-3 p-4">
                                    <div class="position-absolute top-0 right-0 bottom-0 left-0 bg-primary opacity-10 border-radius-2xl z-0 m-4" style="transform: translate(-1rem, 1rem);"></div>
                                    <img src="{{ asset('img/media_5.png') }}" width="256" height="256" class="img-fluid image-rendering-optimize-contrast position-relative border-radius-2xl shadow-lg z-1" title="{{ __('City night lights') }}" alt={{ __('City night lights') }} data-tooltip="true" loading="lazy">
                                </div>
                                <div class="col-3 p-4">
                                    <div class="position-absolute top-0 right-0 bottom-0 left-0 bg-primary opacity-10 border-radius-2xl z-0 m-4" style="transform: translate(-1rem, 1rem);"></div>
                                    <img src="{{ asset('img/media_6.png') }}" width="256" height="256" class="img-fluid image-rendering-optimize-contrast position-relative border-radius-2xl shadow-lg z-1" title="{{ __('Honey bee') }}" alt={{ __('Honey bee') }} data-tooltip="true" loading="lazy">
                                </div>
                                <div class="col-3 p-4">
                                    <div class="position-absolute top-0 right-0 bottom-0 left-0 bg-primary opacity-10 border-radius-2xl z-0 m-4" style="transform: translate(-1rem, 1rem);"></div>
                                    <img src="{{ asset('img/media_7.png') }}" width="256" height="256" class="img-fluid image-rendering-optimize-contrast position-relative border-radius-2xl shadow-lg z-1" title="{{ __('Colorful umbrellas') }}" alt={{ __('Colorful umbrellas') }} data-tooltip="true" loading="lazy">
                                </div>
                                <div class="col-3 p-4">
                                    <div class="position-absolute top-0 right-0 bottom-0 left-0 bg-primary opacity-10 border-radius-2xl z-0 m-4" style="transform: translate(-1rem, 1rem);"></div>
                                    <img src="{{ asset('img/media_8.png') }}" width="256" height="256" class="img-fluid image-rendering-optimize-contrast position-relative border-radius-2xl shadow-lg z-1" title="{{ __('White cat') }}" alt={{ __('White cat') }} data-tooltip="true" loading="lazy">
                                </div>
                                <div class="col-3 p-4">
                                    <div class="position-absolute top-0 right-0 bottom-0 left-0 bg-primary opacity-10 border-radius-2xl z-0 m-4" style="transform: translate(-1rem, 1rem);"></div>
                                    <img src="{{ asset('img/media_9.png') }}" width="256" height="256" class="img-fluid image-rendering-optimize-contrast position-relative border-radius-2xl shadow-lg z-1" title="{{ __('Brown cake') }}" alt={{ __('Brown cake') }} data-tooltip="true" loading="lazy">
                                </div>
                                <div class="col-3 p-4">
                                    <div class="position-absolute top-0 right-0 bottom-0 left-0 bg-primary opacity-10 border-radius-2xl z-0 m-4" style="transform: translate(-1rem, 1rem);"></div>
                                    <img src="{{ asset('img/media_10.png') }}" width="256" height="256" class="img-fluid image-rendering-optimize-contrast position-relative border-radius-2xl shadow-lg z-1" title="{{ __('Autumn leaves') }}" alt={{ __('Autumn leaves') }} data-tooltip="true" loading="lazy">
                                </div>
                                <div class="col-3 p-4">
                                    <div class="position-absolute top-0 right-0 bottom-0 left-0 bg-primary opacity-10 border-radius-2xl z-0 m-4" style="transform: translate(-1rem, 1rem);"></div>
                                    <img src="{{ asset('img/media_11.png') }}" width="256" height="256" class="img-fluid image-rendering-optimize-contrast position-relative border-radius-2xl shadow-lg z-1" title="{{ __('Green olives') }}" alt={{ __('Green olives') }} data-tooltip="true" loading="lazy">
                                </div>
                                <div class="col-3 p-4">
                                    <div class="position-absolute top-0 right-0 bottom-0 left-0 bg-primary opacity-10 border-radius-2xl z-0 m-4" style="transform: translate(-1rem, 1rem);"></div>
                                    <img src="{{ asset('img/media_12.png') }}" width="256" height="256" class="img-fluid image-rendering-optimize-contrast position-relative border-radius-2xl shadow-lg z-1" title="{{ __('Blue car') }}" alt={{ __('Blue car') }} data-tooltip="true" loading="lazy">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-base-1">
        <div class="container position-relative py-5 py-md-7 d-flex flex-column z-1">
            <h2 class="h2 mb-3 font-weight-bold text-center">{{ __('Templates') }}</h2>
            <div class="m-auto text-center">
                <p class="text-muted font-weight-normal font-size-lg mb-0">{{ __('Over :number templates to automate content creation.', ['number' => floor(count($templates) / 10) * 10]) }}</p>
            </div>

            <div class="row position-relative">
                <div class="position-absolute top-0 right-0 bottom-0 left-0 z-1 bg-fade-1"></div>
                @foreach($templates->take(20) as $template)
                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3 mt-4 mt-sm-5 @if($loop->index > 6) d-none d-sm-flex @endif">
                        <div class="d-flex align-items-center">
                            <div class="d-flex position-relative text-primary width-8 height-8 align-items-center justify-content-center flex-shrink-0 {{ (__('lang_dir') == 'rtl' ? 'ml-3' : 'mr-3') }}">
                                <div class="position-absolute bg-primary opacity-10 top-0 right-0 bottom-0 left-0 border-radius-lg"></div>
                                @include('icons.' . $template->icon, ['class' => 'fill-current width-4 height-4'])
                            </div>
                            <div>
                                <div class="d-block w-100"><div class="d-inline-block font-weight-bold">{{ __($template->name) }}</div></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="bg-base-0 overflow-hidden">
        <div class="container position-relative py-5 py-md-7 d-flex flex-column z-1">
            <h2 class="h2 mb-3 font-weight-bold text-center">{{ __('Multilingual') }}</h2>
            <div class="m-auto text-center">
                <p class="text-muted font-weight-normal font-size-lg mb-0">{{ __('Ability to understand and generate content in over :number languages.', ['number' => 30]) }}</p>
            </div>

            <div class="row no-gutters mt-5 mx-lg-n5">
                <div class="col px-lg-5">
                    <!-- Germany -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 480" style="width: 2rem; height: 1.5rem; transform: rotate(-17deg); {{ (__('lang_dir') == 'rtl' ? 'left' : 'right') }}: 4rem; top: 3rem; filter: blur(.17rem);" class="position-absolute"><path d="m0,320h640v160H0v-160Z" style="fill:#ffce00;"/><path d="m0,0h640v160H0V0Z"/><path d="m0,160h640v160H0v-160Z" style="fill:#d00;"/></svg>

                    <!-- UK -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 480" style="width: 3rem; height: 2.25rem; transform: rotate(13deg); {{ (__('lang_dir') == 'rtl' ? 'left' : 'right') }}: 4rem; top: 9.5rem; filter: blur(.17rem);" class="position-absolute"><path d="m0,0h640v480H0V0Z" style="fill:#012169;"/><path d="m75,0l244,181L562,0h78v62l-240,179,240,178v61h-80l-240-179-239,179H0v-60l239-178L0,64V0h75Z" style="fill:#fff;"/><path d="m424,281l216,159v40l-271-199h55Zm-184,20l6,35L54,480H0l240-179ZM640,0v3l-249,188,2-44L590,0h50ZM0,0l239,176h-60L0,42V0Z" style="fill:#c8102e;"/><path d="m241,0v480h160V0h-160ZM0,160v160h640v-160H0Z" style="fill:#fff;"/><path d="m0,193v96h640v-96H0ZM273,0v480h96V0h-96Z" style="fill:#c8102e;"/></svg>

                    <!-- Romania -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 480" style="width: 2.5rem; height: 1.875rem; transform: rotate(-3deg); {{ (__('lang_dir') == 'rtl' ? 'left' : 'right') }}: 4rem; top: 16.5rem; filter: blur(.17rem);" class="position-absolute"><path d="m0,0h213.3v480H0V0Z" style="fill:#00319c; fill-rule:evenodd;"/><path d="m213.3,0h213.4v480h-213.4V0Z" style="fill:#ffde00; fill-rule:evenodd;"/><path d="m426.7,0h213.3v480h-213.3V0Z" style="fill:#de2110; fill-rule:evenodd;"/></svg>

                    <!-- Norway -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 480" style="width: 2.4rem; height: 1.8rem; transform: rotate(-5deg); {{ (__('lang_dir') == 'rtl' ? 'left' : 'right') }}: 13.75rem; top: 6rem; filter: blur(.17rem);" class="position-absolute"><path d="m0,0h640v480H0V0Z" style="fill:#ed2939;"/><path d="m180,0h120v480h-120V0Z" style="fill:#fff;"/><path d="m0,180h640v120H0v-120Z" style="fill:#fff;"/><path d="m210,0h60v480h-60V0Z" style="fill:#002664;"/><path d="m0,210h640v60H0v-60Z" style="fill:#002664;"/></svg>

                    <!-- United States -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 480" style="width: 2.1rem; height: 1.575rem; transform: rotate(-5deg); {{ (__('lang_dir') == 'rtl' ? 'left' : 'right') }}: 14.25rem; top: 13.5rem; filter: blur(.17rem);" class="position-absolute"><path d="m0,0h912v36.94H0V0Zm0,73.88h912v36.94H0v-36.94Zm0,73.78h912v37.03H0v-37.03Zm0,73.88h912v36.94H0v-36.94Zm0,73.88h912v36.94H0v-36.94Zm0,73.78h912v36.94H0v-36.94Zm0,73.87h912v36.94H0v-36.94Z" style="fill:#bd3d44; fill-rule:evenodd;"/><path d="m0,36.94h912v36.94H0v-36.94Zm0,73.88h912v36.84H0v-36.84Zm0,73.78h912v36.94H0v-36.94Zm0,73.88h912v36.94H0v-36.94Zm0,73.87h912v36.94H0v-36.94Zm0,73.78h912v36.94H0v-36.94Z" style="fill:#fff; fill-rule:evenodd;"/><path d="m0,0h364.78v258.47H0V0Z" style="fill:#192f5d; fill-rule:evenodd;"/><path d="m30.38,11.06l3.37,10.22h10.69l-8.63,6.28,3.28,10.31-8.72-6.37-8.63,6.28,3.28-10.22-8.72-6.28h10.87l3.19-10.22Zm60.84,0l3.28,10.22h10.78l-8.72,6.28,3.28,10.31-8.62-6.37-8.72,6.28,3.28-10.22-8.62-6.28h10.69l3.37-10.22Zm60.75,0l3.38,10.22h10.59l-8.62,6.28,3.28,10.31-8.72-6.37-8.62,6.28,3.28-10.22-8.72-6.28h10.78l3.38-10.22Zm60.84,0l3.28,10.22h10.78l-8.72,6.28,3.38,10.31-8.72-6.37-8.72,6.28,3.38-10.22-8.72-6.28h10.69l3.38-10.22Zm60.75,0l3.38,10.22h10.69l-8.63,6.28,3.28,10.31-8.72-6.37-8.63,6.28,3.28-10.22-8.63-6.28h10.69l3.28-10.22Zm60.84,0l3.28,10.22h10.78l-8.72,6.28,3.38,10.31-8.72-6.37-8.72,6.28,3.38-10.22-8.72-6.28h10.78l3.28-10.22ZM60.84,36.94l3.28,10.22h10.78l-8.72,6.28,3.19,10.22-8.44-6.28-8.72,6.28,3.09-10.22-8.44-6.28h10.69l3.28-10.22Zm60.75,0l3.38,10.22h10.69l-8.72,6.28,3.38,10.22-8.72-6.28-8.72,6.28,3.37-10.22-8.72-6.28h10.78l3.28-10.22Zm60.84,0l3.28,10.22h10.78l-8.72,6.28,3.28,10.22-8.62-6.28-8.72,6.28,3.28-10.22-8.62-6.28h10.69l3.38-10.22Zm60.75,0l3.38,10.22h10.69l-8.72,6.28,3.38,10.22-8.72-6.28-8.62,6.28,3.28-10.22-8.72-6.28h10.87l3.19-10.22Zm60.84,0l3.28,10.22h10.78l-8.72,6.28,3.28,10.22-8.63-6.28-8.72,6.28,3.28-10.22-8.63-6.28h10.69l3.38-10.22ZM30.38,62.72l3.37,10.41h10.69l-8.63,6.28,3.28,10.22-8.72-6.38-8.63,6.38,3.28-10.31-8.72-6.28h10.87l3.19-10.31Zm60.84,0l3.28,10.31h10.78l-8.72,6.28,3.28,10.22-8.62-6.38-8.72,6.38,3.28-10.31-8.62-6.28h10.69l3.37-10.22Zm60.75,0l3.38,10.31h10.59l-8.62,6.28,3.28,10.22-8.72-6.38-8.62,6.38,3.28-10.31-8.72-6.28h10.78l3.38-10.22Zm60.84,0l3.28,10.31h10.78l-8.72,6.28,3.38,10.22-8.72-6.38-8.72,6.38,3.38-10.31-8.72-6.28h10.69l3.38-10.22Zm60.75,0l3.38,10.31h10.69l-8.63,6.28,3.28,10.22-8.72-6.38-8.63,6.38,3.28-10.31-8.63-6.28h10.69l3.28-10.22Zm60.84,0l3.28,10.31h10.78l-8.72,6.28,3.38,10.22-8.72-6.38-8.72,6.38,3.38-10.31-8.72-6.28h10.78l3.28-10.22ZM60.84,88.59l3.28,10.22h10.78l-8.72,6.28,3.28,10.31-8.62-6.38-8.72,6.28,3.28-10.22-8.63-6.28h10.69l3.37-10.22Zm60.75,0l3.38,10.22h10.69l-8.72,6.28,3.38,10.31-8.72-6.38-8.72,6.28,3.37-10.22-8.72-6.28h10.78l3.28-10.22Zm60.84,0l3.28,10.22h10.78l-8.72,6.28,3.28,10.31-8.62-6.38-8.72,6.28,3.28-10.22-8.62-6.28h10.69l3.38-10.22Zm60.75,0l3.38,10.22h10.69l-8.63,6.28,3.28,10.31-8.72-6.38-8.62,6.28,3.28-10.22-8.72-6.28h10.87l3.19-10.22Zm60.84,0l3.28,10.22h10.78l-8.72,6.28,3.28,10.31-8.63-6.38-8.72,6.28,3.28-10.22-8.63-6.28h10.69l3.38-10.22ZM30.38,114.47l3.37,10.22h10.69l-8.63,6.28,3.28,10.31-8.72-6.38-8.63,6.28,3.28-10.22-8.72-6.28h10.87l3.19-10.22Zm60.84,0l3.28,10.22h10.78l-8.72,6.28,3.28,10.22-8.62-6.28-8.72,6.28,3.28-10.22-8.62-6.28h10.69l3.37-10.22Zm60.75,0l3.38,10.22h10.59l-8.62,6.28,3.28,10.31-8.72-6.38-8.62,6.28,3.28-10.22-8.72-6.28h10.78l3.38-10.22Zm60.84,0l3.28,10.22h10.78l-8.72,6.28,3.38,10.31-8.72-6.38-8.72,6.28,3.38-10.22-8.72-6.28h10.69l3.38-10.22Zm60.75,0l3.38,10.22h10.69l-8.63,6.28,3.28,10.31-8.72-6.38-8.63,6.28,3.28-10.22-8.63-6.28h10.69l3.28-10.22Zm60.84,0l3.28,10.22h10.78l-8.72,6.28,3.38,10.31-8.72-6.38-8.72,6.28,3.38-10.22-8.72-6.28h10.78l3.28-10.22Zm-273.56,25.87l3.28,10.22h10.78l-8.72,6.28,3.28,10.22-8.62-6.38-8.72,6.38,3.28-10.31-8.63-6.28h10.69l3.37-10.12Zm60.75,0l3.38,10.22h10.69l-8.72,6.28,3.38,10.22-8.72-6.38-8.72,6.38,3.37-10.31-8.72-6.28h10.78l3.28-10.12Zm60.84,0l3.28,10.22h10.78l-8.72,6.28,3.28,10.22-8.62-6.38-8.72,6.38,3.28-10.31-8.62-6.28h10.69l3.38-10.12Zm60.75,0l3.38,10.22h10.69l-8.63,6.28,3.28,10.22-8.72-6.38-8.62,6.38,3.28-10.31-8.72-6.28h10.87l3.19-10.12Zm60.84,0l3.28,10.22h10.78l-8.72,6.28,3.28,10.22-8.63-6.38-8.72,6.38,3.28-10.31-8.63-6.28h10.69l3.38-10.12ZM30.38,166.12l3.37,10.31h10.69l-8.63,6.28,3.28,10.13-8.72-6.28-8.63,6.28,3.28-10.22-8.72-6.28h10.87l3.19-10.22Zm60.84,0l3.28,10.31h10.78l-8.72,6.28,3.37,10.13-8.72-6.28-8.72,6.28,3.37-10.22-8.72-6.28h10.69l3.38-10.22Zm60.75,0l3.38,10.31h10.59l-8.62,6.28,3.28,10.13-8.72-6.28-8.62,6.28,3.28-10.22-8.72-6.28h10.78l3.38-10.22Zm60.84,0l3.28,10.31h10.78l-8.72,6.28,3.38,10.13-8.72-6.28-8.72,6.28,3.38-10.22-8.72-6.28h10.69l3.38-10.22Zm60.75,0l3.38,10.31h10.69l-8.63,6.28,3.28,10.13-8.72-6.28-8.63,6.28,3.28-10.22-8.63-6.28h10.69l3.28-10.22Zm60.84,0l3.28,10.31h10.78l-8.72,6.28,3.38,10.13-8.72-6.28-8.72,6.28,3.38-10.22-8.72-6.28h10.78l3.28-10.22Zm-273.56,25.88l3.28,10.22h10.78l-8.72,6.28,3.28,10.31-8.62-6.38-8.72,6.28,3.28-10.22-8.63-6.28h10.69l3.37-10.22Zm60.75,0l3.38,10.22h10.69l-8.72,6.28,3.38,10.31-8.72-6.38-8.72,6.28,3.37-10.22-8.72-6.28h10.78l3.28-10.22Zm60.84,0l3.28,10.22h10.78l-8.72,6.28,3.28,10.31-8.62-6.38-8.72,6.28,3.28-10.22-8.62-6.28h10.69l3.38-10.22Zm60.75,0l3.38,10.22h10.69l-8.63,6.28,3.28,10.31-8.72-6.38-8.62,6.28,3.28-10.22-8.72-6.28h10.87l3.19-10.22Zm60.84,0l3.28,10.22h10.78l-8.72,6.28,3.28,10.31-8.63-6.38-8.72,6.28,3.28-10.22-8.63-6.28h10.69l3.38-10.22ZM30.38,217.87l3.37,10.22h10.69l-8.63,6.28,3.28,10.22-8.72-6.28-8.63,6.28,3.28-10.31-8.72-6.28h10.87l3.19-10.13Zm60.84,0l3.28,10.22h10.78l-8.72,6.28,3.37,10.22-8.72-6.28-8.72,6.28,3.37-10.31-8.72-6.28h10.69l3.38-10.13Zm60.75,0l3.38,10.22h10.59l-8.44,6.28,3.28,10.22-8.72-6.28-8.62,6.28,3.28-10.31-8.72-6.28h10.78l3.19-10.13Zm60.84,0l3.28,10.22h10.78l-8.72,6.28,3.38,10.22-8.72-6.28-8.72,6.28,3.38-10.31-8.72-6.28h10.69l3.38-10.13Zm60.75,0l3.38,10.22h10.69l-8.63,6.28,3.28,10.22-8.72-6.28-8.63,6.28,3.28-10.31-8.63-6.28h10.69l3.28-10.13Zm60.84,0l3.28,10.22h10.78l-8.72,6.28,3.38,10.22-8.72-6.28-8.72,6.28,3.38-10.31-8.72-6.28h10.78l3.28-10.13Z" style="fill:#fff; fill-rule:evenodd;"/></svg>

                    <!-- Brazil -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 480" style="width: 1.8rem; height: 1.35rem; transform: rotate(6deg); {{ (__('lang_dir') == 'rtl' ? 'left' : 'right') }}: 23rem; top: 9.5rem; filter: blur(.17rem);" class="position-absolute"><path d="m0,0h640v480H0V0Z" style="fill:#229e45; fill-rule:evenodd;"/><path d="m321.4,436l301.5-195.7L319.6,44,17.1,240.7l304.3,195.3Z" style="fill:#f8e509; fill-rule:evenodd;"/><path d="m452.8,240c0,70.3-57.1,127.3-127.6,127.3-70.36-.11-127.31-57.24-127.2-127.6.11-70.36,57.24-127.31,127.6-127.2,70.32.11,127.26,57.18,127.2,127.5Z" style="fill:#2b49a3; fill-rule:evenodd;"/><path d="m283.3,316.3l-4-2.3-4,2,.9-4.5-3.2-3.4,4.5-.5,2.2-4,1.9,4.2,4.4.8-3.3,3m86,26.3l-3.9-2.3-4,2,.8-4.5-3.1-3.3,4.5-.5,2.1-4.1,2,4.2,4.4.8-3.4,3.1m-36.2-30l-3.4-2-3.5,1.8.8-3.9-2.8-2.9,4-.4,1.8-3.6,1.6,3.7,3.9.7-3,2.7m87-8.5l-3.4-2-3.5,1.8.8-3.9-2.7-2.8,3.9-.4,1.8-3.5,1.6,3.6,3.8.7-2.9,2.6m-87.3-22l-4-2.2-4,2,.8-4.6-3.1-3.3,4.5-.5,2.1-4.1,2,4.2,4.4.8-3.4,3.2m-104.6-35l-4-2.2-4,2,1-4.6-3.3-3.3,4.6-.5,2-4.1,2,4.2,4.4.8-3.3,3.1m13.3,57.2l-4-2.3-4,2,.9-4.5-3.2-3.3,4.5-.6,2.1-4,2,4.2,4.4.8-3.3,3.1m132-67.3l-3.6-2-3.6,1.8.8-4-2.8-3,4-.5,1.9-3.6,1.7,3.8,4,.7-3,2.7m-6.7,38.3l-2.7-1.6-2.9,1.4.6-3.2-2.2-2.3,3.2-.4,1.5-2.8,1.3,3,3,.5-2.2,2.2m-142.2,50.4l-2.7-1.5-2.7,1.3.6-3-2.1-2.2,3-.4,1.4-2.7,1.3,2.8,3,.6-2.3,2m200.2,15.3l-2.2-1.1-2.2,1,.5-2.3-1.7-1.6,2.4-.3,1.2-2,1,2,2.5.5-1.9,1.5" style="fill:#ffffef; fill-rule:evenodd;"/><path d="m219.3,287.6l-2.7-1.5-2.7,1.3.6-3-2.1-2.2,3-.4,1.4-2.7,1.3,2.8,3,.6-2.3,2" style="fill:#ffffef; fill-rule:evenodd;"/><path d="m219.3,287.6l-2.7-1.5-2.7,1.3.6-3-2.1-2.2,3-.4,1.4-2.7,1.3,2.8,3,.6-2.3,2m42.3,3l-2.6-1.4-2.7,1.3.6-3-2.1-2.2,3-.4,1.4-2.7,1.3,2.8,3,.5-2.3,2.1m-4.8,17l-2.6-1.5-2.7,1.4.6-3-2.1-2.3,3-.4,1.4-2.7,1.3,2.8,3,.6-2.3,2m87.4-22.2l-2.6-1.6-2.8,1.4.6-3-2-2.3,3-.3,1.4-2.7,1.2,2.8,3,.5-2.2,2.1m-25.1,3l-2.7-1.5-2.7,1.4.6-3-2-2.3,3-.3,1.4-2.8,1.2,2.9,3,.5-2.2,2.1m-68.8-5.8l-1.7-1-1.7.8.4-1.9-1.3-1.4,1.9-.2.8-1.7.8,1.8,1.9.3-1.4,1.3m167.8,45.4l-2.6-1.5-2.7,1.4.6-3-2.1-2.3,3-.4,1.4-2.7,1.3,2.8,3,.6-2.3,2m-20.8,6l-2.2-1.4-2.3,1.2.5-2.6-1.7-1.8,2.5-.3,1.2-2.3,1,2.4,2.5.4-1.9,1.8m10.4,2.3l-2-1.2-2.1,1,.4-2.3-1.6-1.7,2.3-.3,1.1-2,1,2,2.3.5-1.7,1.6m29.1-22.8l-2-1-2,1,.5-2.3-1.6-1.7,2.3-.3,1-2,1,2.1,2.1.4-1.6,1.6m-38.8,41.8l-2.5-1.4-2.7,1.2.6-2.8-2-2,3-.3,1.3-2.5,1.2,2.6,3,.5-2.3,1.9m.6,14.2l-2.4-1.4-2.4,1.3.6-2.8-1.9-2,2.7-.4,1.2-2.5,1.1,2.6,2.7.5-2,2m-19-23.1l-1.9-1.2-2,1,.4-2.2-1.5-1.7,2.2-.2,1-2,1,2,2.2.4-1.6,1.6m-17.8,2.3l-2-1.2-2,1,.5-2.2-1.6-1.7,2.3-.2,1-2,1,2,2.1.4-1.6,1.6m-30.4-24.6l-2-1.1-2,1,.5-2.3-1.6-1.6,2.2-.3,1-2,1,2,2.2.5-1.6,1.5m3.7,57l-1.6-.9-1.8.9.4-2-1.3-1.4,1.9-.2.9-1.7.8,1.8,1.9.3-1.4,1.3m-46.2-86.6l-4-2.3-4,2,.9-4.5-3.2-3.3,4.5-.6,2.2-4,1.9,4.2,4.4.8-3.3,3.1" style="fill:#ffffef; fill-rule:evenodd;"/><path d="m444.4,285.8c2.48-6.43,4.42-13.05,5.8-19.8-67.8-59.5-143.3-90-238.7-83.7-3.46,6.7-6.31,13.69-8.5,20.9,113-10.8,196,39.2,241.4,82.6h0Z" style="fill:#fff; fill-rule:evenodd;"/><path d="m216.5,191.3c0-1.5.3-2.6.7-3.6.35-.71.82-1.35,1.4-1.9.51-.52,1.13-.93,1.8-1.2,1-.3,2-.5,3-.5,2.1,0,3.7.8,5,2,1.25,1.54,1.83,3.53,1.6,5.5,0,2.2-.7,4-2,5.3-1.35,1.25-3.17,1.87-5,1.7-1.81.02-3.54-.7-4.8-2-1.24-1.47-1.86-3.38-1.7-5.3Z" style="fill:#309e3a;"/><path d="m219.4,191.3c0,1.5.3,2.7,1,3.6.7.8,1.6,1.3,2.8,1.3,1.05.07,2.08-.33,2.8-1.1.7-.8,1-2,1.1-3.7,0-1.6-.2-2.8-1-3.6-.66-.82-1.65-1.29-2.7-1.3-1.06-.03-2.09.41-2.8,1.2-.8.8-1.1,2-1.2,3.6h0Z" style="fill:#f7ffff;"/><path d="m233,198.5l.2-14h6c1.5,0,2.5.2,3.2.5.7.2,1.2.7,1.6,1.3s.6,1.4.6,2.3c0,.96-.35,1.89-1,2.6-.74.69-1.69,1.12-2.7,1.2l1.5,1.2c.4.4.9,1.2,1.5,2.3l1.7,2.8h-3.4l-2-3.2-1.4-2c-.24-.28-.55-.48-.9-.6-.45-.13-.93-.2-1.4-.2h-.6v5.8h-2.9Z" style="fill:#309e3a;"/><path d="m236,190.5h2c1.4,0,2.3,0,2.6-.2.3,0,.6-.3.8-.5s.3-.7.3-1c0-.6-.1-1-.4-1.2-.2-.3-.6-.5-1-.6h-2l-2.3-.1v3.6Z" style="fill:#fff;"/><path d="m249,185.2l5.2.3c1.1,0,2,.1,2.6.3.78.28,1.47.77,2,1.4.58.7.99,1.52,1.2,2.4.3.9.4,2,.3,3.3,0,1.02-.17,2.03-.5,3-.4,1-1,1.8-1.7,2.4-.58.48-1.27.82-2,1-.6.2-1.5.2-2.5.2l-5.3-.3.7-14h0Z" style="fill:#309e3a;"/><path d="m251.7,187.7l-.5,9.3h3.8c.5,0,.9-.2,1.2-.5.3-.3.6-.7.8-1.3.2-.6.4-1.5.4-2.6l-.1-2.5c-.14-.53-.42-1.01-.8-1.4-.33-.33-.75-.58-1.2-.7-.76-.17-1.53-.27-2.3-.3h-1.3Z" style="fill:#fff;"/><path d="m317.6,210.2l3.3-13.6,4.4,1,3.2,1c.7.4,1.3,1,1.6,1.9.4.8.4,1.7.2,2.8-.2.8-.5,1.5-1,2-.74.89-1.84,1.4-3,1.4-.7,0-1.7-.2-3-.5l-1.7-.5-1.2,5.2-2.8-.7h0Z" style="fill:#309e3a;"/><path d="m323,199.6l-.8,3.8,1.5.4c1,.2,1.8.4,2.2.3.8-.11,1.44-.71,1.6-1.5,0-.5,0-.9-.2-1.3-.22-.41-.57-.72-1-.9l-1.9-.5-1.3-.3h-.1Z" style="fill:#fff;"/><path d="m330.6,214.1l4.7-13.2,5.5,2c1.5.5,2.4,1,3,1.4.5.5.9,1,1,1.8s.2,1.5,0,2.3c-.4,1-1,1.7-1.8,2.2-.8.4-1.8.5-3,.3.4.5.8,1,1,1.6l.8,2.7.6,3.1-3.1-1.1-1-3.6c-.18-.81-.42-1.62-.7-2.4-.13-.31-.34-.59-.6-.8-.2-.3-.6-.5-1.3-.7l-.5-.2-2,5.6-2.6-1h0Z" style="fill:#309e3a;"/><path d="m336,207.4l1.9.7c1.3.5,2.1.7,2.5.7.3,0,.6,0,.9-.3.3-.2.5-.5.6-.9.2-.4.2-.8,0-1.2-.15-.39-.43-.71-.8-.9l-2-.7-2-.7-1.2,3.3h.1Z" style="fill:#fff;"/><path d="m347,213.6c.34-1.17.92-2.26,1.7-3.2.51-.6,1.12-1.11,1.8-1.5.62-.35,1.3-.59,2-.7,1,0,2,0,3.1.4,1.81.45,3.34,1.65,4.2,3.3.8,1.6.8,3.5.2,5.7-.49,1.89-1.72,3.51-3.4,4.5-1.5.9-3.3,1-5.2.4-1.8-.46-3.33-1.66-4.2-3.3-.81-1.77-.88-3.78-.2-5.6h0Z" style="fill:#309e3a;"/><path d="m349.8,214.4c-.4,1.5-.5,2.8,0,3.8s1.2,1.6,2.3,2c1,.3,2,.2,3-.4,1-.5,1.6-1.6,2.1-3.2.5-1.5.5-2.7,0-3.7-.4-.96-1.21-1.69-2.2-2-1-.34-2.09-.23-3,.3-1,.6-1.7,1.6-2.2,3.2h0Z" style="fill:#fff;"/><path d="m374.3,233.1l6.4-12.4,5.3,2.7c1,.48,1.91,1.12,2.7,1.9.5.5.8,1.1.8,1.9s0,1.5-.4,2.2c-.38.9-1.1,1.62-2,2-1,.2-2,.2-3.1-.2.4.6.6,1.2.8,1.7.2.6.3,1.5.4,2.8l.2,3.2-3-1.5-.4-3.7c-.05-.84-.15-1.67-.3-2.5-.07-.37-.24-.72-.5-1l-1.2-.7-.5-.3-2.7,5.2-2.5-1.3h0Z" style="fill:#309e3a;"/><path d="m380.5,227.2l1.9,1c1.2.6,2,1,2.3,1s.7,0,1-.2c.3-.1.5-.4.7-.8.2-.4.3-.8.2-1.2-.12-.4-.37-.75-.7-1-.59-.36-1.19-.69-1.8-1l-2-1-1.6,3.2Z" style="fill:#fff;"/><path d="m426.1,258.7c.65-1.03,1.5-1.91,2.5-2.6.67-.43,1.42-.74,2.2-.9.73-.15,1.47-.15,2.2,0,1,.2,1.9.6,2.8,1.2,1.57.98,2.66,2.58,3,4.4.3,1.7-.2,3.6-1.4,5.5-1,1.65-2.62,2.84-4.5,3.3-1.81.39-3.7,0-5.2-1.1-1.57-.98-2.66-2.58-3-4.4-.3-1.8.2-3.6,1.4-5.4Z" style="fill:#309e3a;"/><path d="m428.6,260.3c-1,1.3-1.3,2.5-1.1,3.6.15,1.02.73,1.94,1.6,2.5,1,.7,2,.9,3,.6s2-1,2.9-2.4,1.3-2.6,1.1-3.6c-.1-1-.7-1.9-1.6-2.6s-2-.8-3-.5c-1,.2-2,1-3,2.4h.1Z" style="fill:#fff;"/><path d="m301.8,204.5l2.3-9.8,7.2,1.7-.3,1.6-5.3-1.2-.5,2.2,4.9,1.1-.4,1.7-4.9-1.2-.6,2.7,5.5,1.3-.4,1.6-7.5-1.7h0Z" style="fill:#309e3a;"/></svg>
                </div>

                <div class="col-auto px-lg-5 text-center">
                    <div class="font-size-2xl mb-0 font-weight-bold opacity-40">Hola!</div>
                    <div class="font-size-3xl mb-0 font-weight-bold opacity-60">Salut!</div>
                    <div class="font-size-4xl mb-0 font-weight-bold opacity-80">Hello!</div>
                    <div class="font-size-5xl mb-0 font-weight-bold">Bonjour!</div>
                    <div class="font-size-4xl mb-0 font-weight-bold opacity-80">Привет!</div>
                    <div class="font-size-3xl mb-0 font-weight-bold opacity-60">Hallo!</div>
                    <div class="font-size-2xl mb-0 font-weight-bold opacity-40">你好!</div>
                </div>

                <div class="col px-lg-5">
                    <!-- France -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 480" style="width: 2.5rem; height: 1.875rem; transform: rotate(9deg); {{ (__('lang_dir') == 'rtl' ? 'right' : 'left') }}: 4rem; top: 2.5rem; filter: blur(.17rem);" class="position-absolute"><path d="m0,0h640v480H0V0Z" style="fill:#fff; fill-rule:evenodd;"/><path d="m0,0h213.3v480H0V0Z" style="fill:#00267f; fill-rule:evenodd;"/><path d="m426.7,0h213.3v480h-213.3V0Z" style="fill:#f31830; fill-rule:evenodd;"/></svg>

                    <!-- Belgium -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 480" style="width: 2.9rem; height: 2.175rem; transform: rotate(-2deg); {{ (__('lang_dir') == 'rtl' ? 'right' : 'left') }}: 4rem; top: 9.5rem; filter: blur(.17rem);" class="position-absolute"><path d="m0,0h213.3v480H0V0Z" style="fill-rule:evenodd;"/><path d="m213.3,0h213.4v480h-213.4V0Z" style="fill:#ffd90c; fill-rule:evenodd;"/><path d="m426.7,0h213.3v480h-213.3V0Z" style="fill:#f31830; fill-rule:evenodd;"/></svg>

                    <!-- India -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 480" style="width: 2.5rem; height: 1.875rem; transform: rotate(9deg); {{ (__('lang_dir') == 'rtl' ? 'right' : 'left') }}: 4rem; top: 17rem; filter: blur(.17rem);" class="position-absolute"><path d="m0,0h640v160H0V0Z" style="fill:#f93;"/><path d="m0,160h640v160H0v-160Z" style="fill:#fff;"/><path d="m0,320h640v160H0v-160Z" style="fill:#128807;"/><circle cx="320" cy="240" r="64" style="fill:#008;"/><circle cx="320" cy="240" r="56" style="fill:#fff;"/><circle cx="320" cy="240" r="11.2" style="fill:#008;"/><g id="b"><g id="c"><g id="d"><g id="e"><circle cx="375.52" cy="247.33" r="2.88" style="fill:#008;"/><path d="m320,296l1.92-33.6-1.92-16-1.92,16,1.92,33.6Z" style="fill:#008;"/></g><g id="f"><circle cx="371.73" cy="261.45" r="2.88" style="fill:#008;"/><path d="m305.51,294.09l10.55-31.96,2.29-15.95-6,14.96-6.84,32.95Z" style="fill:#008;"/></g></g><g id="g"><g id="h"><circle cx="364.42" cy="274.11" r="2.88" style="fill:#008;"/><path d="m292,288.5l18.46-28.14,6.34-14.82-9.66,12.9-15.14,30.06Z" style="fill:#008;"/></g><g id="i"><circle cx="354.08" cy="284.44" r="2.88" style="fill:#008;"/><path d="m280.4,279.6l25.12-22.4,9.96-12.67-12.67,9.96-22.4,25.12Z" style="fill:#008;"/></g></g></g><g id="j"><g id="k"><g id="l"><circle cx="341.41" cy="291.75" r="2.88" style="fill:#008;"/><path d="m271.5,268l30.06-15.14,12.9-9.66-14.82,6.34-28.14,18.46Z" style="fill:#008;"/></g><g id="m"><circle cx="327.29" cy="295.53" r="2.88" style="fill:#008;"/><path d="m265.91,254.49l32.95-6.84,14.96-6-15.95,2.29-31.96,10.55Z" style="fill:#008;"/></g></g><g id="n"><g id="o"><circle cx="312.67" cy="295.52" r="2.88" style="fill:#008;"/><path d="m264,240l33.6,1.92,16-1.92-16-1.92-33.6,1.92Z" style="fill:#008;"/></g><g id="p"><circle cx="298.55" cy="291.73" r="2.88" style="fill:#008;"/><path d="m265.91,225.51l31.96,10.55,15.95,2.29-14.96-6-32.95-6.84Z" style="fill:#008;"/></g></g></g></g><g id="q"><g id="r"><g id="s"><g id="t"><circle cx="285.89" cy="284.42" r="2.88" style="fill:#008;"/><path d="m271.5,212l28.14,18.46,14.82,6.34-12.9-9.66-30.06-15.14Z" style="fill:#008;"/></g><g id="u"><circle cx="275.56" cy="274.08" r="2.88" style="fill:#008;"/><path d="m280.4,200.4l22.4,25.12,12.67,9.96-9.96-12.67-25.12-22.4Z" style="fill:#008;"/></g></g><g id="v"><g id="w"><circle cx="268.25" cy="261.41" r="2.88" style="fill:#008;"/><path d="m292,191.5l15.14,30.06,9.66,12.9-6.34-14.82-18.46-28.14Z" style="fill:#008;"/></g><g id="x"><circle cx="264.47" cy="247.29" r="2.88" style="fill:#008;"/><path d="m305.51,185.91l6.84,32.95,6,14.96-2.29-15.95-10.55-31.96Z" style="fill:#008;"/></g></g></g><g id="y"><g id="z"><g id="aa"><circle cx="264.48" cy="232.67" r="2.88" style="fill:#008;"/><path d="m320,184l-1.92,33.6,1.92,16,1.92-16-1.92-33.6Z" style="fill:#008;"/></g><g id="ab"><circle cx="268.27" cy="218.55" r="2.88" style="fill:#008;"/><path d="m334.49,185.91l-10.55,31.96-2.29,15.95,6-14.96,6.84-32.95Z" style="fill:#008;"/></g></g><g id="ac"><g id="ad"><circle cx="275.58" cy="205.89" r="2.88" style="fill:#008;"/><path d="m348,191.5l-18.46,28.14-6.34,14.82,9.66-12.9,15.14-30.06Z" style="fill:#008;"/></g><g id="ae"><circle cx="285.92" cy="195.56" r="2.88" style="fill:#008;"/><path d="m359.6,200.4l-25.12,22.4-9.96,12.67,12.67-9.96,22.4-25.12Z" style="fill:#008;"/></g></g></g></g><g id="af"><g id="ag"><g id="ah"><g id="ai"><circle cx="298.59" cy="188.25" r="2.88" style="fill:#008;"/><path d="m368.5,212l-30.06,15.14-12.9,9.66,14.82-6.34,28.14-18.46Z" style="fill:#008;"/></g><g id="aj"><circle cx="312.71" cy="184.47" r="2.88" style="fill:#008;"/><path d="m374.09,225.51l-32.95,6.84-14.96,6,15.95-2.29,31.96-10.55Z" style="fill:#008;"/></g></g><g id="ak"><g id="al"><circle cx="327.33" cy="184.48" r="2.88" style="fill:#008;"/><path d="m376,240l-33.6-1.92-16,1.92,16,1.92,33.6-1.92Z" style="fill:#008;"/></g><g id="am"><circle cx="341.45" cy="188.27" r="2.88" style="fill:#008;"/><path d="m374.09,254.49l-31.96-10.55-15.95-2.29,14.96,6,32.95,6.84Z" style="fill:#008;"/></g></g></g><g id="an"><g id="ao"><g id="ap"><circle cx="354.11" cy="195.58" r="2.88" style="fill:#008;"/><path d="m368.5,268l-28.14-18.46-14.82-6.34,12.9,9.66,30.06,15.14Z" style="fill:#008;"/></g><g id="aq"><circle cx="364.44" cy="205.92" r="2.88" style="fill:#008;"/><path d="m359.6,279.6l-22.4-25.12-12.67-9.96,9.96,12.67,25.12,22.4Z" style="fill:#008;"/></g></g><g id="ar"><g id="as"><circle cx="371.75" cy="218.59" r="2.88" style="fill:#008;"/><path d="m348,288.5l-15.14-30.06-9.66-12.9,6.34,14.82,18.46,28.14Z" style="fill:#008;"/></g><g id="at"><circle cx="375.53" cy="232.71" r="2.88" style="fill:#008;"/><path d="m334.49,294.09l-6.84-32.95-6-14.96,2.29,15.95,10.55,31.96Z" style="fill:#008;"/></g></g></g></g></svg>

                    <!-- China -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 480" style="width: 2.1rem; height: 1.575rem; transform: rotate(-5deg); {{ (__('lang_dir') == 'rtl' ? 'right' : 'left') }}: 14rem; top: 5.5rem; filter: blur(.17rem);" class="position-absolute"><path d="m0,0h640v480H0V0Z" style="fill:#de2910;"/><path id="b" d="m76.8,177.6L120,48l43.2,129.6L48,98.4h144l-115.2,79.2Z" style="fill:#ffde00;"/><path id="c" d="m264.17,50.48l-44.46,9.85,29.65-34.56-2.91,46.51-24.67-41.17,42.38,19.37Z" style="fill:#ffde00;"/><path id="d" d="m309.04,107.35l-44.8-8.16,40.74-20.35-20.72,41.74-6.77-47.52,31.55,34.29Z" style="fill:#ffde00;"/><path id="e" d="m302.5,187.12l-37.57-25.72,45.49-1.97-35.94,29.66,13.2-46.15,14.82,44.18Z" style="fill:#ffde00;"/><path id="f" d="m245.99,239.24l-24.72-38.24,42.72,15.76-44.61,13.48,30-37.47-3.39,46.48Z" style="fill:#ffde00;"/></svg>

                    <!-- Italy -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 480" style="width: 2.4rem; height: 1.8rem; transform: rotate(-7deg); {{ (__('lang_dir') == 'rtl' ? 'right' : 'left') }}: 14rem; top: 13.5rem; filter: blur(.17rem);" class="position-absolute"><path d="m0,0h640v480H0V0Z" style="fill:#fff; fill-rule:evenodd;"/><path d="m0,0h213.3v480H0V0Z" style="fill:#009246; fill-rule:evenodd;"/><path d="m426.7,0h213.3v480h-213.3V0Z" style="fill:#ce2b37; fill-rule:evenodd;"/></svg>

                    <!-- Australia -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 480" style="width: 2.1rem; height: 1.575rem; transform: rotate(5deg); {{ (__('lang_dir') == 'rtl' ? 'right' : 'left') }}: 23rem; top: 9.5rem; filter: blur(.17rem);" class="position-absolute"><path id="b" d="m0,0h640v480H0V0Z" style="fill:#006;"/><path id="c" d="m299.8,392.5l-43.7,3.8,6,43.4-30.1-31.7-30.1,31.7,6-43.4-43.7-3.8,37.7-22.3-24.3-36.5,41,15.5,13.4-41.7,13.5,41.7,41-15.5-24.3,36.5m224.4,62.3l-10.6-15.8,17.8,6.7,5.8-18.1,5.8,18.1,17.8-6.7-10.5,15.8,16.4,9.7-19,1.7,2.6,18.9-13-13.9-13.2,13.9,2.6-18.9-19-1.6m16.4-291.9l-10.5-15.8,17.8,6.7,5.8-18.1,5.8,18.1,17.8-6.7-10.5,15.8,16.4,9.8-19,1.6,2.6,18.9-13-13.8-13.2,13.7,2.6-18.8-19-1.6m-89.3,104.8l-10.5-15.8,17.8,6.7,5.8-18.1,5.9,18.1,17.8-6.7-10.6,15.8,16.4,9.7-19,1.7,2.7,18.9-13.2-13.9-13,13.9,2.5-18.9-19-1.6m216.3-38l-10.7-15.8,17.8,6.7,5.8-18.1,5.9,18.1,17.8-6.7-10.5,15.8,16.3,9.7-19,1.7,2.6,18.8-13-13.8-13.2,13.8,2.6-18.8-19-1.7m-22.1,73.5l-10.3,6.5,2.9-11.9-9.3-7.8,12.1-1,4.6-11.2,4.7,11.3,12.1.9-9.3,7.8,2.9,11.9" style="fill:#fff; fill-rule:evenodd;"/><path id="d" d="m0,0h320v240H0V0Z" style="fill:#006;"/><path id="e" d="m37.5,0l122,90.5L281,0h39v31l-120,89.5,120,89v30.5h-40l-120-89.5-119.5,89.5H0v-30l119.5-89L0,32V0h37.5Z" style="fill:#fff;"/><path id="f" d="m212,140.5l108,79.5v20l-135.5-99.5h27.5Zm-92,10l3,17.5L27,240H0l120-89.5ZM320,0v1.5l-124.5,94,1-22L295,0h25ZM0,0l119.5,88h-30L0,21V0Z" style="fill:#c8102e;"/><path id="g" d="m120.5,0v240h80V0h-80ZM0,80v80h320v-80H0Z" style="fill:#fff;"/><path id="h" d="m0,96.5v48h320v-48H0ZM136.5,0v240h48V0h-48Z" style="fill:#c8102e;"/></svg>
                </div>
            </div>
        </div>
    </div>

    @if(paymentProcessors())
        <div class="bg-base-1">
            <div class="container py-5 py-md-7 position-relative z-1">
                <div class="text-center">
                    <h2 class="h2 mb-3 font-weight-bold text-center">{{ __('Pricing') }}</h2>
                    <div class="m-auto">
                        <p class="text-muted font-weight-normal font-size-lg mb-0">{{ __('Simple pricing plans for everyone and every budget.') }}</p>
                    </div>
                </div>

                @include('shared.pricing')

                <div class="d-flex justify-content-center">
                    <a href="{{ route('pricing') }}" class="btn btn-outline-primary py-2 mt-5">{{ __('Learn more') }}<span class="sr-only"> {{ mb_strtolower(__('Pricing')) }}</span></a>
                </div>
            </div>
        </div>
    @else
        <div class="bg-base-1">
            <div class="container position-relative text-center py-5 py-md-7 d-flex flex-column z-1">
                <div class="flex-grow-1">
                    <div class="badge badge-pill badge-success mb-3 px-3 py-2">{{ __('Join us') }}</div>
                    <div class="text-center">
                        <h4 class="mb-3 font-weight-bold">{{ __('Ready to get started?') }}</h4>
                        <div class="m-auto">
                            <p class="font-weight-normal text-muted font-size-lg mb-0">{{ __('Create an account in seconds.') }}</p>
                        </div>
                    </div>
                </div>

                <div><a href="{{ config('settings.registration') ? route('register') : route('login') }}" class="btn btn-primary btn-lg font-size-lg mt-5">{{ __('Get started') }}</a></div>
            </div>
        </div>
    @endif
</div>
@endsection
