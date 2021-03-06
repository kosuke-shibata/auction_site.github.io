<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    
    public function getPaginateByLimit(int $limit_count = 9)
    {
        // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    protected $fillable = [
        'title', 'body', 'price', 'image_path', 'user_id', 'file_path'    
    ];
    
    
    public function user() {
        return $this->belongsto('App\User');
    }
    
    
    // public function work_files() {
    //     return $this->hasMany('App\WorkFile');
    // }
    
    public function order() {
        return $this->hasOne('App\Order');
    }
    
    public function cart() {
        return $this->hasMany('App\Cart');
    }
    
    public function purchase_history() {
        return $this->hasOne('App\PurchaseHistory');
    }
    
    
}
