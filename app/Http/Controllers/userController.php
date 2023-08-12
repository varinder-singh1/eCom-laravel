<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use PHPUnit\Event\Code\Throwable;
class userController extends Controller
{
    //
    function login(Request $req){
       $user = User::where(['email'=>$req->email])->first();
      $hash = Hash::check($req->password,$user->passwoord);
 $pass = $req->password;

 
       if(!$user || !($req->password==$user->password))
       {

              return "username or password is incorect ";
       }
       else{
        $req->session()->put('user',$user);
        return redirect('/');
       }
    }
}
