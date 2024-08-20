<?php

namespace App\Http\Controllers;

use App\Models\Badge;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BadgeController extends Controller
{


    public function getAllBadges(Request $request)
    {
        // Get the authenticated user's ID
        $userId = $request->user_id;
        // Retrieve the badges for the user


        $userBadges = DB::table('badges_users')
            ->where('user_id', $userId)
            ->join('badges', 'badges_users.badge_id', '=', 'badges.id')
            ->select('badges_users.*', 'badges.title as badge_title')
            ->get();


        $subquery = DB::table('badges_users')
            ->where('user_id', $userId)
            ->select('badge_id');

        // Query to find badges that the user does not have
        $missingBadges = DB::table('badges')
            ->whereNotIn('id', $subquery)
            ->get();

        return response()->json([
            'success' => true,
            'userBadges' => $userBadges,
            'missingBadges' => $missingBadges,
            'user_id' => $userId,
        ]);
    }

    public function addBadge(Request $request)
    {
        $userId = $request->user_id;
        $badgeId = $request->badge_id;

        DB::table('badges_users')->insert([
            'user_id' => $userId,
            'badge_id' => $badgeId,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now() // Including updated_at for consistency
        ]);

        return response()->json([
            'success' => true,

        ]);
    }

    public function deleteBadge(string $id)
    {
        DB::table('badges_users')
            ->where('id', $id) // Assuming $id is the ID of the record you want to delete
            ->delete();

        return response()->json([
            'success' => true,

        ]);
    }
}
