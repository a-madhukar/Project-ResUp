<?php


namespace App;
use App\Skill;
use App\BasicInfo;
use App\Summary; 
use App\Project;
use App\Experience;  
use App\Qualification;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    //
    protected $fillable = [
    	'name'
    ];

    //relationships
    public function basicInfo()
    {
    	return $this->hasOne(BasicInfo::class,'resume_id'); 
    }

     //relationships
    public function summary()
    {
        return $this->hasOne(Summary::class,'resume_id'); 
    }

    public function experiences()
    {
    	return $this->hasOne(Experience::class,'resume_id'); 
    }

    public function projects()
    {
    	return $this->hasOne(Project::class,'resume_id'); 
    }

     public function qualifications()
    {
    	return $this->hasOne(Qualification::class,'resume_id'); 
    }
     public function skills()
    {
        return $this->hasOne(Skill::class,'resume_id'); 
    }
}
