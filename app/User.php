<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    // use Authenticatable;
    //use SoftDeletes;
    public function role_type()
    {
        return $this->hasOne(Role::class , 'id' , 'role_id');
    }
    protected $softDelete = true;
    public   $rules = [
        'name' => 'required',
        'mobile' => 'required|digit:10',
        'rank' =>'required',
        'dob' => 'required',
        'aadhar' =>'required',
    ];
    protected $fillable = ['name','email','password','confirm_password'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function rules()
    {
        return [
             'name' => 'required|max: 255',
             'email' => 'required|email|max: 255',
         ];
    }
    public function messages()
    {
        return [
       'required' => 'The :attribute field is required.',
       'email' => 'The :attribute must use a valid email address',
       ];
    }
}
