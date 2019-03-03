<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
    protected $table = 'qualification';
    protected $guarded = ['id'];

    public function applicant(){
        return $this->belongsTo(Applicant::class);
    }
}
