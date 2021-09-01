<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;
use App\Http\Middleware\VerifyUser;
use App\Http\Controllers\PostController;
use App\Http\Controllers\dbpost;
use App\Http\Controllers\Storage;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/cont', function () {
    return view('contact');
});
Route::get('/inherit', function () {
    return view('inherit');
});

Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/iphone-contactus', function () {
    return view('contact_us');
})->name('contact_us');

Route::get('/database', function () {
    return view('db_store');
})->name('dbstore');



//========================= Student Crud Start =========================
// update page showing by this 


// ->middleware('empty_input')
Route::post('/store',[dbpost::class,'db_add'])->name('store');
//showing data in option del 
Route::get('/updatedata/{id}', [dbpost::class,'aman_view'])->name('Updata2');


Route::post('/my_del', [dbpost::class,'my_del'])->name('my_del');


Route::post('/data_updated', [dbpost::class,'edited'])->name('new_up');

Route::post('/deleted', [dbpost::class,'sam_del'])->name('sammy_dell');

Route::post('/Course_del', [dbpost::class,'cor_del'])->name('Course_delete');


//========================= Student Crud End =========================


//Today session =====================================================
Route::get('/getdata', [dbpost::class,'rec_data'])->name('fatchdata');

Route::get('/update', [dbpost::class,'update_data'])->name('updatedata');
Route::get('/delete', [dbpost::class,'delete'])->name('deletedata');
//Data update method 

//Today session =====================================================


// ===========================Start Post routes ===========================
Route::get('/post_form', [dbpost::class,'post_fm'])->name('post_myfom');
//DB post for add in data base entry 
Route::post('/dbpost', [dbpost::class,'db_post_store'])->name('db_post');

//Db update 
Route::get('/updating/{id}', [dbpost::class,'db_fill'])->name('db_up_data');
//Db edit
Route::post('/db_edit', [dbpost::class,'post_edit'])->name('dbedit');
//delete method 
Route::post('/db_deleted', [dbpost::class,'db_delet'])->name('db_dell');
// ===========================end Post routes ===========================

// ===========================Quesry builder route ===========================

Route::get('/querybuilder_relation', [dbpost::class,'qbRelation'])->name('qb_rel');
//Register 
Route::get('/Register/{id}', [dbpost::class,'co_reg'])->name('co_reg');

Route::post('/reg_stration',[dbpost::class,'course_reg'])->name('rg_in');
// ===========================Quesry builder route ===========

// ============ start ORM DB routes for relationship======= 

//One to one route
Route::get('/course_add/{id}', [dbpost::class,'course_add'])->name('Course_ad');
// view page ORM 1
Route::get('/orm_rel_view', [dbpost::class,'orm_view'])->name('orm_rel');

//ORM 2 
Route::get('/orm_rel_', [dbpost::class,'orm_view2'])->name('orm');


//one to many 
Route::get('/course_add_many/{id}', [dbpost::class,'course_many'])->name('Course_add');


Route::get('/child_to_p/{id}', [dbpost::class,'chd_to_pr'])->name('inverse_rel');

// ============ end ORM DB routes for relationship ======= 
// many to many route 
Route::get('/roles', [dbpost::class,'user_role'])->name('userrole');
// ============ end ORM DB routes for relationship ======= 

//Sessions routes 
Route::get('/storage/cokies', [Storage::class,'setData']);

Route::get('/get/cookies', [Storage::class,'getData']);

Route::get('/session/set', [Storage::class,'set_Data']);

Route::get('/session/get', [Storage::class,'get_Data']);

//Sessions routes 




Route::get('/valid', function () {
    return view('validation');
});
Route::post('/output', [SignupController::class,'get_input']);
// ->middleware('empty_input')

// Route::get('/output', function () {
//   echo " Thanks";

// });


Route::get('/mylink', function () {
    return view('mylink');
})->name('test2');

Route::get('/my_test', function () {
echo "<h1> Your have not permission to access this page</h1><br><h2>Try Again </h2>";

});
// Route::view('/about', 'about');  

//static 

//Required  parameter :
Route::get('/test/{name}/{age}',[SignupController::class,'myfun'])->name('test');



// Route::get('/test2/{name}/{age}',[SignupController::class,'myfun'])->name('test2');


//Optional parameter :
Route::get('/test/{name?}/{age?}',[SignupController::class,'myfun2']);

// ->name('test')
Route::get('/test-2', [SignupController::class,'myfun'] ); //->middleware('checkUser');


Route::post('/user-detail', [SignupController::class,'addUser']);
// Route::get('/create-user', [SignupController::class, 'addUser'] );



// unique name
// middleware group define method 

Route::name('users.')->group( function() {
	Route::view('about', 'about')->name('about');  

});
	Route::get('/sign-up', [SignupController::class,'showForm']);

// middleware group define method 

Route::middleware('checkUser')->group( function(){
	//
});
// middleware group define method 
Route::group(['middleware'=>'checkUser', 'prefix'=>'abc'],function(){

	// Route::get('/sign-up', [SignupController::class,'showForm']);


});
 //7 method of controller 
 Route::resource('posts', PostController::class);
Auth::routes();
   
Route::get('/mac', [dbpost::class,'mac_view'])->name('view_data');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/sign-up', [SignupController::class,'showForm']);
    Route::get('profile', function() {
        return Auth::user()->name;

    });
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
