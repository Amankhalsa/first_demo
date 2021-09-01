<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Student;
use App\Models\Course;
use App\Models\User;
use App\Models\Role;

use Validator;
use DB;
use Illuminate\Support\Carbon;

class dbpost extends Controller
{
    //

  public  function mac_view(){
//ORM method 
      $get_data = Student::Latest()->paginate(5);
   
    return view('/mac',compact('get_data'));
 
  }

  // ORM way to insert data by request 
    public function db_add(Request $request){
        $request->validate( [
            'name' => 'required|max:100',
            'email' => 'required|email',
            'phone' => 'required|digits:10',
            'number' => 'required|integer'],

            //for Custom message 
[            'name.required' => 'Please input student name']);

        //$validator = Validator::make($request->all(), ['name' => 'required']);

        // if($validator->fails()) {

        //     return redirect()->back()->withErrors($validator);
        // }



 		Student::insert([
            'Name' => $request->name,
            'Email' => $request->email,
            'Roll' => $request->number,
            'Phone' => $request->phone

        ]);

 // $result = 
    //Query builder method to insert data in DB
        //   DB::table('student')->insert([
        //        'Name' => $request->name,
        //     'Email' => $request->email,
        //     'Roll' => $request->number,
        //     'Phone' => $request->phone
        // ]);

        return redirect()->route('view_data')->with('sucess', 'Data inserted sucessfull');
    }

//================================================================================
// My Crud Methods ;
public function my_del(){

            Student::where('id',2)->delete();
        return redirect()->back();

}


    public function edited(Request $request){
   
  Student::where('id', $request->id)->update([
               
             'Name' => $request->name,
            'Roll' => $request->number,
            'Phone' => $request->phone
        ]);
  
     return redirect()->route('view_data')->with('update', 'Data Updated sucessfull');
}

public function aman_view($id){
    $get_show  = Student::findOrFail($id);
    return view('update',compact('get_show'));

}


public function sam_del(Request $request){
    Student::where('id', $request->id)->delete();

    return redirect()->back()->with('update', 'Data Deleted sucessfull');

}



//================================================================================

    public function rec_data()
    {
        //query builder
        //$data = DB::table('student')->get();
        // $data=DB::table('student')
        // //->where('roll',3)
        // ->first();

        //eloquont
        //$data = Post::select('Name','Roll')->where('roll',3)->first();
    $data = Post::findOrFail(22);
    // search box query 
//        $data = Post::where('name','like','%'.$request->query.'%')->get();
        return $data;
        // return $data->Roll.$data->Name;

    }

    public function update_data(){
//query builder
        // $result = DB::table('student')->where('id',18)->update([
        //     'Name' => 'banana',
        //     'Email' => 'b@b.com'
        // ]);

        //orm

        $result = Post::where('id',1)->update([
                'title' => 'hi'
        ]);
        return $result;
    
    }

    public function delete(){

        //qb
        // $result = DB::table('posts')->where('id',1)->delete();

//orm
        $result = Post::where('id',2)->delete();
        return $result;
    }


//=====================post methods=======================
//featch method 
public function post_fm(){
    
    $Post_data = Post::all();
   
    return view('post_form',compact('Post_data'));
}

//insert method
public function db_post_store( Request $request){

    Post::insert([

        'title'=>$request->title,
        'description'=>$request->description

    ]);
return redirect()->back()->with('postdata', 'Post data inserted sucessfull');

}

//Update method 
      public function post_edit(Request $req){
        Post::where('id', $req->id)->update([
              'title'=> $req->title,
                'description' => $req->description
        ]);
        return redirect()->route('post_myfom')->with('update', 'Data Updated sucessfull');

}
// Fill data  method 
public function db_fill($id){
        $post_fill= Post::findOrFail($id);
    return view('post_update',compact('post_fill'));
    
}



//Delete method 
public function db_delet(Request $request){
      Post::where('id', $request->id)->delete();

    return redirect()->back()->with('update', 'Data Deleted sucessfull');

}
//=====================post methods=======================

//=================== startQuery buildr ==================
//join two table by query builder

public function qbRelation(){
// =======================Query builder way ==================
  
    // $data = DB::table('students')

    // ->join('courses','students.id','=','courses.student_id')
 
  //  ->join('attendances', ' students.id', '=', 'attendances.student_id')
    // ->where('students.id')
    // ->select('courses.*','students.Name')


    // ->get();


//ORM way  to show data in course page ==========================
 
        $data = Student::all();
    return view('cources',compact('data'));
}

public function co_reg($id){

          $reg_fill= Student::findOrFail($id);
    return view('course_reg',compact('reg_fill'));

}

public function course_reg(Request $request){


    DB::table('courses')
    ->join('courses','students.id','=','courses.student_id')->insert([
               'student_id' => $request->id,
               'student_name' => $request->name,
               'course_name' => $request->course
           
        ]);
    return redirect()->route('qb_rel')->with('update', 'Course inserted sucessfull');

}



public function cor_del(Request $request){
    Course::where('id', $request->id)->delete();

    return redirect()->back()->with('update', 'Data Deleted sucessfull');

}
//======================== end Query buildr ======================

//================= ORM Methods start ==============================

// One to one 
public function course_add($sid){

$data = Student::find($sid)->course;
return $data;

    
}


 public function orm_view(){

    $orm_get_data= Course::all();
   // dd($orm_get_data->first()->student);    
    return view('orm_relation',compact('orm_get_data'));
 }

 
 public function orm_view2(){

    $orm_get_= Student::all();
   // dd($orm_get_data->first()->student);    
    return view('orm_relation2',compact('orm_get_'));
 }
// public function course_many($sid){

// $data = Student::find($sid)->courses;


// return $data;
// }



public function chd_to_pr($id){
    $data = Course::find($id)->student;
    return $data;
}

//================= ORM Methods end ==============================



public function user_role(){

//    $user = User::find(1);
$role = Role::find(1);
    //return $user->roles; //->first()->name;
return $role->users;
}
}
