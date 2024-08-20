<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Comment;
use App\Models\Discussion;
use App\Models\Engagement;
use Carbon\Carbon;
use GuzzleHttp\RetryMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Ui\Presets\React;

class DiscussionController extends Controller
{
    public function index()
    {
        return view('discussion.view-discussions');
    }

    public function show(Request $request)
    {

        $discussionId = $request->discussion_id;

        // Fetch comments for the given discussion ID with associated users
        $comments = Comment::where('discussion_id', $discussionId)
            ->with('user') // Assuming 'user' is the relation in your Comment model
            ->get();

        return response()->json([
            'success' => true,
            'data' =>    $comments,
        ]);
    }
    public function store(Request $request)
    {
        $userId = Auth::user()->id;
        $data = [
            'title' => $request->title,
            'content_id' => $request->content_id,
            'user_id' => $userId,
            'description' => $request->description,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];


        $dataActiviy = [
            'user_id' => $userId,
            'action' => 'Created Discussion',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        Activity::create($dataActiviy);
        Discussion::create($data);

        return response()->json([
            'success' => true,

        ]);
    }

    public function discussionLike(string $id)
    {
        $data = [
            'discussion_id' => $id,
            'user_id' =>  Auth::user()->id,
            'user_reaction' => true,
            'created_at' => Carbon::now()
        ];

        Engagement::create($data);
        return back();
    }


    public function discussionDislike(string $id)
    {
        $data = [
            'discussion_id' => $id,
            'user_id' =>  Auth::user()->id,
            'user_reaction' => false,
            'created_at' => Carbon::now()
        ];

        Engagement::create($data);
        return back();
    }

    public function removeReaction(string $id)
    {
        // Retrieve the engagement for the authenticated user and the given discussion ID
        $engagement = Engagement::where('discussion_id', $id)
            ->where('user_id', Auth::id())
            ->first();

        // Check if the engagement exists
        if ($engagement) {
            $engagement->delete();
        }

        return back();
    }
}
