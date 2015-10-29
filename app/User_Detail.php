<?php

namespace Vik;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;


class User_Detail extends Model
{
   // use Authenticatable, Authorizable, CanResetPassword;
    protected $table = 'user_profile';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id,','first_name', 'last_name'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    //protected $hidden = ['password', 'remember_token'];

}
