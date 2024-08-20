<?php
// User model (User.php)
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'email', 'password', 'username', 'first_name', 'last_name', 'gender', 'age', 'privacy', 'role', 'sub_plan', 'status'
    ];

    public $timestamps = false; // Disable timestamps

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function subscription()
    {
        return $this->belongsTo(Subscription::class, 'sub_plan');
    }
    public function user_privacy()
    {
        return $this->belongsTo(Privacy::class, 'privacy');
    }

    public function user_role()
    {
        return $this->belongsTo(Role::class, 'role');
    }

    public function interests()
    {
        return $this->belongsToMany(Interest::class);
    }

    public function cultures()
    {
        return $this->belongsToMany(Culture::class);
    }

    public function isAdmin()
    {
        if ($this->role === 1) {
            return true;
        } else {
            return false;
        }
    }

    public function badges()
    {
        return $this->hasMany(Badge::class);
    }

    public function engagements()
    {
        return $this->hasMany(Engagement::class);
    }

    public function discussions()
    {
        return $this->hasMany(Discussion::class);
    }


    public function activities()
    {
        return $this->hasMany(Activity::class);
    }
}
