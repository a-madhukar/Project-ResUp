<?php

namespace App;
use App\Resume; 
use Illuminate\Database\Eloquent\Model;

class BasicInfo extends Model
{
    //

    protected $fillable = [
    	'resume_id',
		'full_name',
		'phone_number',
		'twitter_handle',
		'personal_website',
		'email_address',
		'linkedin_url',
		'skype_username',
    ]; 

    //relationships
    public function getResume()
    {
    	return $this->belongsTo(Resume::class,'resume_id'); 
    }

}
