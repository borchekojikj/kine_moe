<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Comment;
use App\Models\Discussion;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Laravel\Ui\Presets\React;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $userId = Auth::id(); // Get the authenticated user's ID
        $discussionId = $request->discussion_id;
        // $data = $request->all();
        // Create a new comment
        $comment = Comment::create([
            'comment' => $request->comment,
            'discussion_id' => $discussionId,
            'content_id' => $request->content_id,
            'user_id' => $userId,
            'created_at' => Carbon::now(),
            'updated_at' => null,
        ]);

        $dataActiviy = [
            'user_id' => $userId,
            'action' => 'Commented on ' . Discussion::find($discussionId)->title . " discussion.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        Activity::create($dataActiviy);
        // Fetch all comments for the discussion with their associated users
        $comments = Comment::where('discussion_id', $request->discussion_id)
            ->with('user') // Eager load the 'user' relationship
            ->get();

        // Return JSON response
        return response()->json([
            'success' => true,
            // 'test' => $data,
            'comments' => $comments,
            // 'new_comment' => $comment, // Optionally send the newly created comment
        ]);
    }

    public function destroy(Request $request, string $id)
    {

        // $discussionId = $request->discussion_id;
        $comment = Comment::find($id);
        $discussionId = $comment->discussion->id;
        $comment->delete();
        $comments = Comment::where('discussion_id', $request->discussion_id)
            ->with('user') // Eager load the 'user' relationship
            ->get();


        $userId =  $comment->user->id;
        $dataActiviy = [
            'user_id' => $userId,
            'action' => 'Deleted comment with id ' . Discussion::find($discussionId)->title . " discussion.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        Activity::create($dataActiviy);

        return response()->json([
            'success' => true,
            'comments' => $comments,
            'user' => $userId,
        ]);
    }


    public function reportComment(Request $request)
    {

        $commentId = $request->comment_id;
        $userId = Auth::user()->id;
        $comment = Comment::find($commentId);
        $data = [
            'comment' => $comment->comment,
            'report_owner' => $userId,
            'comment_owner' => $comment->user_id,
            'comment_id' => $comment->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

        ];
        DB::table('comment_reports')->insert($data);


        $dataActiviy = [
            'user_id' => $userId,
            'action' => 'Reported commen ' . '"' . $comment->comment . '"',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        Activity::create($dataActiviy);

        return response()->json([
            'success' => true,
            'data' => $data,
            'message' => 'Comment has been reported.'

        ]);
    }
}
