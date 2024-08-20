<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Category;
use App\Models\Content;
use App\Models\Culture;
use App\Models\Discussion;
use App\Models\Engagement;
use App\Models\Interest;
use App\Models\Privacy;
use App\Models\Report;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Notifications\Action;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Xylis\FakerCinema\Provider\Movie;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboardHome()
    {
        $contents = Content::all();
        $engagements = Engagement::all();
        $data = DB::table('site_settings')->get()->first();
        $discussions = Discussion::all();




        return view('dashboard-home', compact('contents', 'discussions', 'engagements', 'data'));
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $discussions = Discussion::all();
        $contents = Content::all();

        return view('home', compact('contents', 'discussions'));
    }

    public function show(string $id)
    {
    }

    public function dashboard()
    {
        $sevenDaysAgo = Carbon::now()->subDays(7);
        $users = User::all();
        $movieCount = Content::all()->where('content_type', 1)->count();
        $reports = Report::all();
        $suspended_users = User::all()->where('status', 2);
        $discussionsLastWeek = Discussion::where('created_at', '>=', $sevenDaysAgo)->get();
        $activities = Activity::orderBy('created_at', 'desc')->get();
        $engagementsLastWeek = Engagement::where('created_at', '>=', $sevenDaysAgo)->get();
        $comment_reports = DB::table('comment_reports')->get();
        return view('dashboard', compact('movieCount', 'reports', 'suspended_users', 'discussionsLastWeek', 'engagementsLastWeek', 'activities', 'comment_reports', 'users'));
    }


    public function viewAnalytics()
    {

        $startDate = Carbon::now()->subDays(7)->toDateString();
        $endDate = Carbon::now()->toDateString();

        $engagementsByDate = DB::table('engagements')
            ->select(
                DB::raw('DATE(created_at) as date'),
                DB::raw('SUM(CASE WHEN user_reaction = 1 THEN 1 ELSE 0 END) as positive_reactions'),
                DB::raw('SUM(CASE WHEN user_reaction = 0 THEN 1 ELSE 0 END) as negative_reactions')
            )
            ->whereBetween('created_at', [$startDate, $endDate])
            ->groupBy(DB::raw('DATE(created_at)'))
            ->get();
        $movies = Content::all()->where('content_type', 1);
        $series = Content::all()->where('content_type', 2);
        $podcasts =  Content::all()->where('content_type', 3);

        $breadcrumbs = [
            'artists' =>  User::where('role', 3)->count(),
            'regular' => User::where('role', 2)->count(),
            'discussions' => Discussion::count(),
            'engagements' =>  Engagement::count(),
        ];

        return view('analytics.view-analytics', compact('movies', 'series', 'podcasts', 'engagementsByDate', 'breadcrumbs'));
    }

    public function userProfile()
    {
        $interests = Interest::all();
        $cultures = Culture::all();
        $categories = Category::all();
        $user = Auth::user();
        $privacy_options = Privacy::all();
        return view('users.user-profile', compact('user', 'interests', 'cultures', 'categories', 'privacy_options'));
    }



    public function updateUser(Request $request)
    {
        $userId = Auth::user()->id;

        $user = User::findOrFail($userId);
        $test = $request->username;
        // Update user's data
        $user->username = $request->username;
        $user->first_name = $request->first_name;
        $user->age = $request->age;
        $user->gender = $request->gender;
        $user->email = $request->email;
        $user->privacy = $request->privacy;
        $user->save();

        $dataActiviy = [
            'user_id' => $userId,
            'action' => 'Updated his Profile Infos.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        Activity::create($dataActiviy);

        if (isset($request->interests)) {
            // Handle updating user interests
            $user->interests()->sync($request->interests);
        }

        if (isset($request->cultures)) {
            // Handle updating user interests
            $user->cultures()->sync($request->cultures);
        }

        if (isset($request->categories)) {
            // Handle updating user interests
            $user->categories()->sync($request->categories);
        }


        // Return JSON response
        return response()->json([
            'success' => true,
            'data' => $user,
            'message' => 'Data updated successfully'
        ]);
    }
}
