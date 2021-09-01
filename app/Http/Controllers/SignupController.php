<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('checkUser')->only(['addUser']);
    // }

    public function showForm()
    {
        echo route('users.about',['name'=>'aman', 'age'=>29]);
        // echo route('test',['name'=>'aman', 'age'=>29]);
        echo route('test',['name'=>'aman', 'age'=>29]);


    	// dd(url('/test-2'));
$data = ['name' => 'aman', 'age' => 39];

 // 1st method 
        // return view('signup',$data);
//2nd method 
    	// return view('signup')->with('name','deep');
//3rd method
        $name = 'abc';
        $age = 29;
        //3rd method
        return view('signup', compact('data','name','age'));
        // return view('signup');

    }
    public function addUser(Request $y){
    	// dd($y->name);
    
    	dd("Student Name is : ".$y->name,"Student class is : ".$y->class,"Student age is : ".$y->age,"Student email is : ". $y->email);
    	


    }


//required function 
    public function myfun(Request $req, $name="abc",$age=29){

        echo "<h2>Required Executed:</h2>";
         return "<B>Hello</B> :". $name. "<B>  <br>Your Age is: </B> " .$age;
    	// dd($name , $age);
    }

//optional function 
     public function myfun2($name='aman',$age=29){
        // dd($name , $age);
        echo "<h2>Optional executed :</h2>";
        return "<B>Hello</B> :". $name. "<B>  <br>Your Age is: </B> " .$age;
    }
    // public function get_input(Request $x){
    //             // dd($x->name);
    //      dd(Request::input('name'));
        
    
      


    // }


        public function get_input(Request $request){
            // $data =[$request->name, $request->email];
          // return $data;
                print_r("<h2> Name : ".$request->name. "</h2><br>").
                print_r("<h2> Email : ".$request->email. "</h2><br>").
                print_r("<h2> Website : ".$request->website. "</h2><br>").
                print_r("<h2> Comment : ".$request->comment. "</h2><br>").
                print_r("<h2> Gender : ".$request->gender. "</h2><br>");
              // return redirect('/output')
                // print_r("<h2>".$request->male. "</h2><br>");

    // return redirect()->back()->with('sucess', 'Information printed sucessfull');
     

                    die;
                    
}

}