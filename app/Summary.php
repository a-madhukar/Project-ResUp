<?php

namespace App;
use App\Resume; 
use Illuminate\Database\Eloquent\Model;

class Summary extends Model
{
    //
    protected $fillable = [
    	'resume_id',
    	'summary'
    ]; 

    //relationships
    public function getResume()
    {
    	return $this->belongsTo(Resume::class,'resume_id'); 
    }

}
