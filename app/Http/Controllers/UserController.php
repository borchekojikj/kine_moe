<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Badge;
use App\Models\Category;
use App\Models\Culture;
use App\Models\Interest;
use App\Models\Privacy;
use App\Models\Report;
use App\Models\Role;
use App\Models\Subscription;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        $interests  = Interest::all();
        $cultures  = Culture::all();
        $categories  = Category::all();
        $subscriptions  = Subscription::all();
        $privacy_options  = Privacy::all();
        $role_options = Role::where('title', '!=', 'admin')->get();
        $badges  = Badge::all();

        return view('users.view-users', compact('users', 'interests', 'cultures', 'subscriptions', 'privacy_options', 'role_options', 'categories', 'badges'));
    }


    public function viewArtistUsers()
    {
        $users = User::all()->where('role', '3');
        $interests  = Interest::all();
        $cultures  = Culture::all();
        $categories  = Category::all();
        $subscriptions  = Subscription::all();
        $privacy_options  = Privacy::all();
        $role_options = Role::where('title', '!=', 'admin')->get();

        return view('users.view-artist-users', compact('users', 'interests', 'cultures', 'subscriptions', 'privacy_options', 'role_options', 'categories'));
    }

    public function viewRegularUsers()
    {
        $users = User::all()->where('role', '2');
        $interests  = Interest::all();
        $cultures  = Culture::all();
        $categories  = Category::all();
        $subscriptions  = Subscription::all();
        $privacy_options  = Privacy::all();
        $role_options = Role::where('title', '!=', 'admin')->get();

        return view('users.view-regular-users', compact('users', 'interests', 'cultures', 'subscriptions', 'privacy_options', 'role_options', 'categories'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $data = $request->all();

        $userId = $data['id'];

        $categories =  $data['categories'];
        $interests = $data['interests'];
        $cultures =  $data['cultures'];
        $user = User::find($userId);

        $userData = [
            "email" => $data['email'],
            "username" => $data['username'],
            "first_name" => $data['first_name'],
            "last_name" => $data['last_name'],
            "gender" => $data['gender'],
            "age" => $data['age'],
            "privacy" => $data['privacy'],
            'role' => $data['role'],
            'sub_plan' => $data['sub_plan'],
        ];


        $user->update($userData);
        DB::table('category_user')->where('user_id', $userId)->delete();
        foreach ($categories as $categoryID) {
            $category = Category::find($categoryID);
            $user->categories()->attach($category);
        }

        DB::table('interest_user')->where('user_id', $userId)->delete();
        foreach ($interests as $interestID) {
            $interest = Interest::find($interestID);
            $user->interests()->attach($interest);
        }

        DB::table('culture_user')->where('user_id', $userId)->delete();
        foreach ($cultures as $cultureID) {
            $culture = Culture::find($cultureID);
            $user->cultures()->attach($culture);
        }


        return response()->json([
            'success' => true,
            'data' => $data,
            'message' => 'User has been updated.',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update()
    {
        return response('test', 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);

        $user->delete();

        return redirect()->back()->with('status', 'User has been deleted successfully.');
    }

    public function suspandUser(string $id, string $report_id)
    {
        $user = User::findOrFail($id);
        $report = Report::findOrFail($report_id);

        DB::table('user_messages')->insert([
            'user_id' => $user->id,
            'message' => 'Your account has been suspended.',
            'created_at' => now(), // If you have a created_at field
            'updated_at' => now(), // If you have an updated_at field
        ]);
        $report->delete();
        $user->status = 2;

        $user->save();

        $dataActiviy = [
            'user_id' => $user->id,
            'action' => 'User has been Suspended.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        Activity::create($dataActiviy);



        return back()->with('status', 'User has been Suspended.');
    }
    public function removeSuspension(string $id)
    {
        $user = User::findOrFail($id);
        $user->status = 1;
        $user->save();
        $dataActiviy = [
            'user_id' => $user->id,
            'action' => 'User suspension has been lifted.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        Activity::create($dataActiviy);


        return back();
    }


    public function deleteMessage(Request $request)
    {
        $message_id = $request->message_id;

        DB::table('user_messages')
            ->where('id', $message_id)
            ->delete();

        return response()->json([
            'success' => true,
        ]);
    }


    public function awardPoints(Request $request)
    {
        $userId = $request->user_id;
        $points = $request->points;
        $user = User::find($userId);

        $user->points += $points;

        $user->save();

        return back()->with('status', 'User Points updated Successfully');
    }
}
