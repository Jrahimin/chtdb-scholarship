<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankInfo extends Model
{
    protected $table = 'bank_info';
    protected $guarded = ['id'];

    public function applicant(){
        return $this->belongsTo(Applicant::class);
    }
}
