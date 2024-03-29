<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'address';
    protected $guarded = ['id'];
    public $timestamps = false;

    public function applicant(){
        return $this->belongsTo(Applicant::class);
    }
}
