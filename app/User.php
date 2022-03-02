<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'introduce', 'portfolio', 'sns', 'image_path', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'credit'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function works() {
        return $this->hasMany('App\Work');
    }
    
    public function order() {
        return $this->hasOne('App\Order');
    }
    
    public function cart() {
        return $this->hasOne('App\Cart');
    }
    
    public function purchase_history() {
        return $this->hasOne('App\P');
    }
}
