<?php

namespace App;
use App\Resume;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    //
	protected $fillable = [
		'resume_id',
		'company_name',
		'company_location',
		'duration',
		'role',
		'responsibilities',
	]; 

	//relationships
    public function getResume()
    {
    	return $this->belongsTo(Resume::class,'resume_id'); 
    }

}
