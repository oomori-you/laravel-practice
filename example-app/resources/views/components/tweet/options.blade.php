@if($myTweet)
<details class="tweet-option relative text-gray-500">
    <summary>
        <svg></svg>
    </summary>

    <div class="bg-white rounded shadow-md absolute right-0 w-24 z-20 pt-1 pb-1">
        <div>
            <a href="{{ route('tweet.update.index', ['tweetId' => $tweetId]) }}"
            class="flex items-center pt-1 pb-1 pl-3 pr-3 hover:bg-gray-100">
                <svg></svg>
                <span>編集</span>
            </a>
        </div>
    </div>
    <div>
        <form
            action="{{ route('tweet.delete', ['tweetId' => $tweetId]) }}"
            method="post"
            onclick="return confirm('削除してもよろしいですか?');">
            @method('DELETE')
            @csrf

            <button type="submit" class="flex items-center w-full pt-1 pb-1 pl-3 pr-3 hover:bg-gray-100">
                <svg></svg>
                <span>削除</span>
            </button>
        </form>
    </div>
</details>
@endif

@once
@push('css')
    <style>
        .tweet-option > summary {
            list-style: none;
            cursor: pointer;
        }
        .tweet-option[open] > summary::before {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 10;
            display: block;
            content: " ";
            background: transparent;
        }
    </style>
@endpush
@endonce
