<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
    protected $table = 'qualification';
    protected $guarded = ['id'];
    public $timestamps = false;
    protected $fillable = ['sscGroup', 'sscRoll', 'sscGpa', 'sscYear', 'sscBoard', 'hscGroup', 'hscRoll', 'hscGpa', 'hscYear', 'hscBoard', 'gradGroup', 'gradRoll', 'gradGpa',
        'gradYear', 'gradUni', 'postgradGroup', 'postgradRoll', 'postgradGpa', 'postgradYear', 'postgradUni', 'presentClass', 'prYear', 'lastDegree', 'lastDegreeYear', 'yearSemester',
        'lastSemester', 'subject', 'semester', 'presentYear', 'institution', 'instituteAddress', 'certificateImageId', 'studentshipImageId', 'applicant_id'];

    public function applicant(){
        return $this->belongsTo(Applicant::class);
    }
}
