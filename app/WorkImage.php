<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkImage extends Model
{
    protected $fillable = [
        'image', 'work_id' 
    ];

    public function work() {
        return $this->belongsto('App\Work');
    }
}
