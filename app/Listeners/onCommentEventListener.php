<?php

namespace App\Listeners;

use App\Events\onComment;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use DB;
class onCommentEventListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  onComment  $event
     * @return void
     */
    public function handle(onComment $event)
    {
        $comment = $event->getComment();
        $price = DB::table('stocks')->where('name', $comment->article->category->title)->first()->price;
        $comment->comment = $comment->comment.' (price: '.$price.') ';
        $comment->save();
    }
}
