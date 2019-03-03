<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    protected $table = 'applicant';
    protected $guarded = ['id'];

    public function address(){
        return $this->hasOne(Address::class);
    }

    public function bankInfo(){
        return $this->hasOne(BankInfo::class);
    }

    public function family(){
        return $this->hasOne(Family::class);
    }

    public function qualification(){
        return $this->hasOne(Qualification::class);
    }
}
