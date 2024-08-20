<?php

// namespace App\Livewire;

// use App\Models\Artist;
// use App\Models\Category;
// use Livewire\Component;
// use Livewire\WithFileUploads;
// use App\Models\Student;
// use App\Models\User;
// use Illuminate\Support\Facades\Hash;

// class MultiStepForm extends Component
// {
//     use WithFileUploads;
//     public $first_name;
//     public $last_name;
//     public $gender;
//     public $age;
//     public $description;
//     public $email;
//     public $username;
//     public $password;
//     public $culture = [];
//     public $interests = [];
//     public $explore_style;
//     public $recommendations = [];
//     public $notifications = [];
//     public $sub_plan;
//     public $privacy;
//     public $terms;

//     public $role;

//     public $totalSteps = 11;
//     public $currentStep = 1;


//     public function mout()
//     {

//         $this->currentStep = 1;
//     }



//     public function render()
//     {
//         $categories = Category::all();
//         return view('livewire.multi-step-form', compact('categories'));
//     }

//     public function increaseStep()
//     {
//         $this->resetErrorBag();
//         $this->validateData();
//         $this->currentStep++;
//         if ($this->currentStep > $this->totalSteps) {
//             $this->currentStep = $this->totalSteps;
//         }
//     }

//     public function decreaseStep()
//     {
//         $this->resetErrorBag();
//         $this->currentStep--;
//         if ($this->currentStep < 1) {
//             $this->currentStep = 1;
//         }
//     }

//     public function validateData()
//     {

//         if ($this->currentStep == 1) {
//             $this->validate([

//                 'email' => 'required|email|unique:users',
//                 'password' => 'required',

//             ]);
//         } elseif ($this->currentStep == 2) {
//             $this->validate([

//                 'role' => [
//                     'required',
//                     // function ($attribute, $value, $fail) {
//                     //     if ($value != 2 && $value != 3) {
//                     //         $fail($attribute . ' must be either 2 or 3.');
//                     //     }
//                     // },
//                 ],

//             ]);
//         } elseif ($this->currentStep == 3) {
//             $this->validate([
//                 'interests' => 'required|array|min:1|max:3'
//             ]);
//         } elseif ($this->currentStep == 4) {
//             $this->validate([
//                 'explore_style' => 'required|min:1'
//             ]);
//         } elseif ($this->currentStep == 5) {
//             $this->validate([
//                 'sub_plan' => 'required'
//             ]);
//         } elseif ($this->currentStep == 6) {
//             $this->validate([
//                 'first_name' => 'required|string',
//                 'username' => 'required|string',
//                 'last_name' => 'required|string',
//                 'gender' => 'required',
//                 'age' => 'required|digits:2',
//                 'description' => 'required'
//             ]);
//         } elseif ($this->currentStep == 7) {
//             $this->validate([
//                 'culture' =>  'required|array|min:1|max:3'
//             ]);
//         } elseif ($this->currentStep == 8) {
//             $this->validate([
//                 'recommendations' =>  'required|array|min:1|max:3'
//             ]);
//         } elseif ($this->currentStep == 9) {
//             $this->validate([
//                 'notifications' =>  'required|array|min:1|max:3'
//             ]);
//         } elseif ($this->currentStep == 10) {
//             $this->validate([
//                 'privacy' =>  'required'
//             ]);
//         }
//     }
//     public function register()
//     {
//         $this->resetErrorBag();
//         $userValues = array(
//             "email" => $this->email,
//             "password" => Hash::make($this->password),
//             "username" => $this->last_name,

//             "first_name" => $this->first_name,
//             "last_name" => $this->last_name,

//             "gender" => $this->gender,
//             "age" => $this->age,
//             "privacy" => $this->privacy,
//             'role' => $this->role,
//             'sub_plan' => $this->sub_plan,




//         );

//         $artitsValues = [
//             "culture" => json_encode($this->culture),
//             "recommendations" => json_encode($this->recommendations),
//             "notifications" => json_encode($this->notifications),
//             'interests' => json_encode($this->interests),
//             'explore_style' => $this->explore_style,
//             'description' => $this->description,
//         ];
//         User::insert($userValues);
//         Artist::insert($artitsValues);
//         return redirect()->route('home');
//         // if ($this->currentStep == 4) {
//         //     $this->validate([
//         //         'cv' => 'required|mimes:doc,docx,pdf|max:1024',
//         //         'terms' => 'accepted'
//         //     ]);
//         // }

//         // $cv_name = 'CV_' . $this->cv->getClientOriginalName();
//         // $upload_cv = $this->cv->storeAs('students_cvs', $cv_name);

//         // if ($upload_cv) {
//         //     $values = array(
//         //         "first_name" => $this->first_name,
//         //         "last_name" => $this->last_name,
//         //         "gender" => $this->gender,
//         //         "email" => $this->email,
//         //         "phone" => $this->phone,
//         //         "country" => $this->country,
//         //         "city" => $this->city,
//         //         "frameworks" => json_encode($this->frameworks),
//         //         "description" => $this->description,
//         //         "cv" => $cv_name,
//         //     );

//         //     User::insert($values);
//         //     //   $this->reset();
//         //     //   $this->currentStep = 1;
//         //     $data = ['name' => $this->first_name . ' ' . $this->last_name, 'email' => $this->email];
//         //     return redirect()->route('registration.success', $data);
//         // }
//     }
// }




namespace App\Livewire;

use App\Models\Artist;
use App\Models\Category;
use App\Models\Culture;
use App\Models\Interest;
use App\Models\Notification;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Hash;
use Livewire\WithPagination;
use App\Models\User;
use App\Models\UserInfo;
use Illuminate\Support\Facades\Auth;
use Ramsey\Uuid\Type\Integer;

class MultiStepForm extends Component
{
    use WithFileUploads;
    use WithPagination;

    public $first_name;
    public $last_name;
    public $gender;
    public $age;
    public $description;
    public $email;
    public $username;
    public $password;
    public $culture = [];
    public $interests = [];
    public $explore_style;
    public $recommendations = [];
    public $notifications = [];
    public $sub_plan;
    public $privacy;
    public $terms;

    public $role;

    public $totalSteps = 10;
    public $currentStep = 1;

    // public $perPage = 10;
    // public $currentPage = 1;
    // public $currentCulturePage = 1;
    // public $currentInterestPage = 1;




    public $loadedCategories = [];
    public $categoriesPerPage = 5; // Number of categories to load per "Show More"
    public $totalCategories;


    public $loadedInterests = [];
    public $interestsPerPage = 5; // Number of interests to load per "Show More"
    public $totalInterests;

    public $loadedCultures = [];
    public $culturesPerPage = 5; // Adjust this number as needed
    public $totalCultures;


    public $notificationsDB;

    public function mount()
    {
        $this->totalCategories = Category::count();
        $this->loadMoreCategories();

        $this->totalInterests = Interest::count();
        $this->loadMoreInterests();


        $this->totalCultures = Culture::count();
        $this->loadMoreCultures();

        $this->notificationsDB = Notification::all();
    }

    public function loadMoreCategories()
    {
        $newCategories = Category::skip(count($this->loadedCategories))->take($this->categoriesPerPage)->get();
        $this->loadedCategories = array_merge($this->loadedCategories, $newCategories->toArray());
    }


    public function loadMoreInterests()
    {
        $newInterests = Interest::skip(count($this->loadedInterests))->take($this->interestsPerPage)->get();
        $this->loadedInterests = array_merge($this->loadedInterests, $newInterests->toArray());
    }


    public function loadMoreCultures()
    {


        $newCultures = Culture::skip(count($this->loadedCultures))->take($this->culturesPerPage)->get();
        $this->loadedCultures = array_merge($this->loadedCultures, $newCultures->toArray());
    }


    public function render()
    {
        // $categories = Category::paginate($this->perPage, ['*'], 'page', $this->currentPage);
        // $cultures = Culture::paginate($this->perPage, ['*'], 'page', $this->currentCulturePage);
        // $interestsDB = Interest::paginate($this->perPage, ['*'], 'page', $this->currentInterestPage);
        // $cultures = Culture::all();
        // $interestsDB = Interest::all();
        return view('livewire.multi-step-form'); //, compact('categories', 'cultures', 'interestsDB')
    }

    public function increaseStep()
    {
        $this->resetErrorBag();
        $this->validateData();
        $this->currentStep++;
        if ($this->currentStep > $this->totalSteps) {
            $this->currentStep = $this->totalSteps;
        }
    }

    public function decreaseStep()
    {
        $this->resetErrorBag();
        $this->currentStep--;
        if ($this->currentStep < 1) {
            $this->currentStep = 1;
        }
    }

    public function validateData()
    {

        if ($this->currentStep == 1) {
            $this->validate([

                'email' => 'required|email|unique:users',
                'password' => 'required',

            ]);
        } elseif ($this->currentStep == 2) {
            $this->validate([

                'role' => [
                    'required',
                    // function ($attribute, $value, $fail) {
                    //     if ($value != 2 && $value != 3) {
                    //         $fail($attribute . ' must be either 2 or 3.');
                    //     }
                    // },
                ],

            ]);
        } elseif ($this->currentStep == 3) {
            $this->validate([
                'interests' => 'required|array|min:1|max:3'
            ]);
        } elseif ($this->currentStep == 4) {
            $this->validate([
                'explore_style' => 'required|min:1'
            ]);
        } elseif ($this->currentStep == 5) {
            $this->validate([
                'sub_plan' => 'required'
            ]);
        } elseif ($this->currentStep == 6) {
            $this->validate([
                'first_name' => 'required|string',
                'username' => 'required|string',
                'last_name' => 'required|string',
                'gender' => 'required',
                'age' => 'required|digits:2',
                'description' => 'required'
            ]);
        } elseif ($this->currentStep == 7) {
            $this->validate([
                'culture' =>  'required|array|min:1|max:3'
            ]);
        } elseif ($this->currentStep == 8) {
            $this->validate([
                'recommendations' =>  'required|array|min:1|max:3'
            ]);
        } elseif ($this->currentStep == 9) {
            $this->validate([
                'notifications' =>  'required|array|min:1|max:3'
            ]);
        } elseif ($this->currentStep == 10) {
            $this->validate([
                'privacy' =>  'required'
            ]);
        }
    }
    public function register()
    {
        $this->resetErrorBag();
        // $userValues = array(
        //     "email" => $this->email,
        //     "password" => Hash::make($this->password),
        //     "username" => $this->last_name,

        //     "first_name" => $this->first_name,
        //     "last_name" => $this->last_name,

        //     "gender" => $this->gender,
        //     "age" => $this->age,
        //     "privacy" => $this->privacy,
        //     'role' => $this->role,
        //     'sub_plan' => $this->sub_plan,




        // );




        // User::insert($userValues);
        $categories = $this->recommendations;
        $interests = $this->interests;
        $cultures = $this->culture;

        if ($this->currentStep == $this->totalSteps) {

            $user = User::create([
                "email" => $this->email,
                "password" => Hash::make($this->password),
                "username" => $this->username, // Ensure to use the correct field
                "first_name" => $this->first_name,
                "last_name" => $this->last_name,
                "gender" => $this->gender,
                "age" => $this->age,
                "privacy" => $this->privacy,
                'role' => $this->role,
                'sub_plan' => $this->sub_plan,
            ]);

            $artitsValues = [
                // "culture" => json_encode($this->culture),
                // "recommendations" => json_encode($this->recommendations),
                "notifications" => json_encode($this->notifications),
                // 'interests' => json_encode($this->interests),
                'user_id' => $user->id,
                'explore_style' => $this->explore_style,
                'description' => $this->description,
            ];
            UserInfo::insert($artitsValues);

            foreach ($categories as $categoryID) {
                $category = Category::find($categoryID);
                $user->categories()->attach($category);
            }
            foreach ($interests as $interestID) {
                $interest = Interest::find($interestID);
                $user->interests()->attach($interest);
            }
            foreach ($cultures as $cultureID) {
                $culture = Culture::find($cultureID);
                $user->cultures()->attach($culture);
            }
            return redirect()->route('login');
        }
    }
}
