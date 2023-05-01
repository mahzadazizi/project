<?php



namespace App\Http\Controllers;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
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




      // Users::create([


      //   'UserName'=> request('UserName'),
      //   'Password'=> request('Password'),
      //   'FirstName'=> request('FirstName'),
      //   'LastName'=> request('LastName'),
      //  ]);
     
        
      //  session::put("message","اطلاعات ثبت شد");
      //  return redirect('admin/users/userlist');



       
           $users= new Users();

          $users->UserName=request('UserName');
          $users->Password=request('Password');
          $users->FirstName=request('FirstName');
          $users->LastName=request('LastName');
          $users->save();

        
    
        if ($users)
        Session::put(['message','اطلاعات با موفقیت ثبت شد ']);
        return redirect('admin/users/userlist');
    
      }
  
}
