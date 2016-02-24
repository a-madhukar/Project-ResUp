<?php

namespace App;
use App\Resume;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $fillable = [
		'resume_id',
		'title',
		'description',
	]; 

	//relationships
    public function getResume()
    {
    	return $this->belongsTo(Resume::class,'resume_id'); 
    }

}
