<?php

namespace App;
use App\Resume;
use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
    //
	protected $fillable = [
		'resume_id',
		'name',
		'institution_name',
		'institution_location',
		'graduation_date',
		'cgpa',
	];

	//relationships
    public function getResume()
    {
    	return $this->belongsTo(Resume::class,'resume_id'); 
    }

}
