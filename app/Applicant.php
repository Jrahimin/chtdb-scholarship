<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    protected $table = 'applicant';
    protected $guarded = ['id'];
    public $timestamps = false;
    protected $fillable = ['applicantname', 'applicantnameBang', 'gender', 'quota', 'dob', 'appMobile', 'email', 'nid', 'bid',
        'community', 'personImageID', 'signImageID', 'quotaImageId', 'quota_father_nid_image_id', 'quota_relation', 'point', 'financial_year', 'created_at'];

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
