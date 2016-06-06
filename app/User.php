<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'avatar', 'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

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
    public function setAvatarAttribute($avatar){
        $this->attributes['avatar'] = Carbon::now()->second.$avatar->getClientOriginalName();
        $name = Carbon::now()->second.$avatar->getClientOriginalName();
        \Storage::disk('local')->put($name, \File::get($avatar));
  }
}
