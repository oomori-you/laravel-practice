<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use App\Models\Tweet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): \Illuminate\Contracts\View\View
    {
        $tweets = Tweet::orderBy('created_at', 'DESC')->get();
        return
            View::make('tweet.index')
                ->with('tweets', $tweets);
    }
}
