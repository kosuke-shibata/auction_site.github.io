<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkFile extends Model
{
    protected $fillable = [
        'file', 'work_id' 
    ];

    public function work() {
        return $this->belongsto('App\Work');
    }
}
