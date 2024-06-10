<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use App\Service\TweetService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, TweetService $tweetService): \Illuminate\Contracts\View\View
    {
        $tweets = $tweetService->getTweets();
        return
            View::make('tweet.index')
                ->with('tweets', $tweets);
    }
}
