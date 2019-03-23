<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    protected $table = 'family';
    protected $guarded = ['id'];
    public $timestamps = false;

    public function applicant(){
        return $this->belongsTo(Applicant::class);
    }
}
