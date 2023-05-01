<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;



class UsersController extends Controller

{

  
  public function userlist()

  {
  
   $records=Users::paginate(4);
   return view('admin/users/userlist',['Users'=>$records]);

  
  
  }

  public function login()

  {
  
   
    return view('admin/users/login' );

  
  }


  public function register()

  {
    
    return view('admin/users/register' );


  }


    public function storeregister()
    {
      $validator=validator::make(request()->all() ,
          [
            'UserName'=>'required|min:5|max:15',
            'Password'=>'required',
            

          ]);
          

          if($validator->fails())
          {

                return redirect()->back()->withErrors($validator);
          }




      Users::create([


        'UserName'=> request('UserName'),
        'Password'=> request('Password'),
        'FirstName'=> request('FirstName'),
        'LastName'=> request('LastName'),
       ]);

       return redirect('admin/users/register');



       
//            $users= new Users();

//           $users->UserName=request('UserName');
//           $users->Password=request('Password');
//           $users->FirstName=request('FirstName');
//           $users->LastName=request('LastName');
//           $users->save();

//            dd(request()->all());

//      });


      
         
    }
  
}
