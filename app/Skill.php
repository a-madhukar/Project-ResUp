<?php

namespace App;
use App\Resume; 
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    //
    protected $fillable = [
    	'resume_id',
    	'name'
    ]; 

     //relationships
    public function getResume()
    {
    	return $this->belongsTo(Resume::class,'resume_id'); 
    }
}
