<?php

namespace App\Service;

use App\Models\Tweet;

class TweetService
{
    public function getTweets()
    {
        return Tweet::orderBy('created_at', 'desc')->get();
    }

    public function checkOwnTweet(int $userId, int $tweetId): bool
    {
        $tweet = Tweet::where('id', $tweetId)->first();
        if (!$tweet) {
            return false;
        }

        return $tweet->user_id === $userId;
    }
}
