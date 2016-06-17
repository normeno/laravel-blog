<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'avatar', 'role', 'web', 'twitter', 'facebook', 'biography'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    /**
     * Encrypt Password
     *
     * @param $password
     */
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    /**
     * Upload Avatar File
     *
     * @param $avatar
     */
    public function setAvatarAttribute($avatar)
    {
        if(!empty($avatar) && is_file($avatar)) {
            $this->attributes['avatar'] = Carbon::now()->second.$avatar->getClientOriginalName();
            $name = Carbon::now()->second.$avatar->getClientOriginalName();
            \Storage::disk('local')->put($name, \File::get($avatar));
        }
    }
}
