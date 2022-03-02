<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'user_id', 'work_id' 
    ];
    
    public function user() {
        return $this->belongsto('App\User');
    }
    
    public function work() {
        return $this->belongsto('App\Work');
    }
}
