<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\validator;
use App\Models\Users;
use App\Http\Controllers\UsersController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
  


// Route::get('/about', function () {
//     return view('about');
// });





// Route::get('/db', function () {

//     $users=DB::table('Users')->insert([
//         'Role_ID'=>'2',
//         'UserName'=>'leyli' ,
//         'Password' =>'456',
//         'FirstName'=>'leily',
//         'LastName'=> 'mosavi',
//         'UserState'=>'active',
//     ]);

// });




   
// Route::get('/db', function () {

//     $users=DB::table('Users')->where('Username','mahzad123')->update([

//         'Role_ID'=>'2',
//         'UserName'=>'leyli' ,
//         'Password' =>'456',
//         'FirstName'=>'leily',
//         'LastName'=> 'mosavi',
//         'UserState'=>'active',
//     ]);

// });
 



// Route::get('/db', function () {

//     $users=DB::table('Users')->where('Username','mahzad123')->delete();

// });



Route::prefix('admin')->group(function (){

      Route::get('/users/login', function (){
        
        return view('admin.users.login');

    });

  

    Route::get('/users/register', function (){

        // $users=Users::all();
        // dd($users);


        return view('admin.users.register');
           
     });
 

 // Route::post('/users/register', 'UsersController@register');
    Route::post('/users/register', [UsersController::class,'register']);

    Route::get('users/list', function () {

        $records=DB::table('Users')->orderby('UserID','desc')->get();
        return view(' admin.users.userlist',["users"=>$records]);
    });

    
//     Route::delete('/delete/{id}', function ($id){


//         $users=Users::find($id);
//         $users=>delete();
//         delete::flash('message','رکورد حذف شد')
//         return redirect('admin/users/list');

//  });
});

