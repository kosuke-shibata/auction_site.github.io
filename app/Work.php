<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    
    protected $fillable = [
        'title', 'body', 'user_id'    
    ];
    
    
    public function user() {
        return $this->belongsto('App\User');
    }
    
    public function work_images() {
        return $this->hasMany('App\WorkImage');
    }
    
    public function work_files() {
        return $this->hasMany('App\WorkFile');
    }
    
    public function order() {
        return $this->hasOne('App\Order');
    }
    
    public function cart() {
        return $this->hasOne('App\Cart');
    }
    
    public function purchase_history() {
        return $this->hasOne('App\PurchaseHistory');
    }
    
    
}
