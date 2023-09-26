<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('templates')->where('slug', '=', 'blog-paragraph')->update(['icon' => 'paragraph']);

        DB::table('templates')->where('slug', '=', 'paragraph')->update(['icon' => 'subject']);

        DB::table('templates')->where('slug', '=', 'social-post-caption')->update(['icon' => 'chat-caption']);

        Schema::table('plans', function (Blueprint $table) {
            $table->text('description')->nullable(false)->change();
        });

        DB::table('templates')->where('slug', '=', 'pain-agitate-solution')->update(['prompt' => 'Generate in the :language language, a Pain-Agitate-Solution for a product called: :product. The product is about: :description.']);

        DB::table('templates')->where('slug', '=', 'twitter-thread')->update(['prompt' => 'Generate in the :language language, a social media biography based on the following keywords: :keywords. The voice tone is: :tone.', 'slug' => 'social-media-bio', 'name' => 'Social media bio', 'description' => 'Generate social media biographies, based on keywords.', 'icon' => 'account-box']);

        DB::table('templates')->where('slug', '=', 'tweet')->update(['prompt' => 'Generate in the :language language, a social media quote about: :description.', 'slug' => 'social-media-quote', 'name' => 'Social media quote', 'description' => 'Generate engaging social media quotes, based on description.', 'icon' => 'chat-quote']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
