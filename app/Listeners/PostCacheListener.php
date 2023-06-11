<?php

namespace App\Listeners;

use App\Models\Post;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class PostCacheListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(object $event): void
    {

        info('event fired');

        cache()->forget('posts');

        // info(cache('posts'));

        $posts = Post::all();

        cache()->forever('posts', $posts);

        // info(cache('articles'));

    }
}
