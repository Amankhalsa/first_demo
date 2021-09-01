<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Cookie;

class Storage extends Controller
{
	public function setData()
	{
		// forever for 5 year
		// Cookie::queue(Cookie::forever('localFile', 'my name is aman'));
		// for One min 
		Cookie::queue('localFile', 'my name is aman',1);
		return 'done';
	}

	public function getData()
	{
		// cookie del
		Cookie::queue(Cookie::forget('localFile')); 
		// cookie get
		return Cookie::get('localFile', 'default value');
	}  

//sesstion methods:
	public function set_Data(){
		$a = ['apple', 'banana', 'orange'];
		Session::put('my_data', $a);
		return 'done';
	}  

	public function get_Data(){

		Session::forget('my_data');
		dd(Session::has('my_data'));

		return Session::get('my_data', 'def v');
		// return 'my_data';
		
	}  
}
