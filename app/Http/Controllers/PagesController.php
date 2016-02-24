<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    //
    public function index()
    {
    	return view('pages.index'); 
    }

    public function foobar()
    {
    	//dd(6%3); 

    	$nums = []; 

    	for ($i=1; $i <= 100 ; $i++) { 
    		
    		if($i%3 == 0 && $i%5 ==0)
    		{
    			//echo "\n"."foobar"; 
    			array_push($nums,"foobar"); 
    		}elseif($i%3 ==0)
    		{
    			//echo "foo";  
    			array_push($nums,"foo");   		
    		}	
    		elseif($i%5 == 0)
    		{
    			//echo "bar"; 
    			array_push($nums,"bar"); 
    		}

    		array_push($nums,$i); 
    		
    	}

    	dd($nums); 
    }
}
