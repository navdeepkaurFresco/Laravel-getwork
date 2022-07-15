<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }


    public function login(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        $credentials = $request->only('email', 'password');
       
        $data=User::where(['email'=>$credentials['email']])->first();
  
        if(!empty($data)){
           $password = Crypt::decryptString($data->password);
           if($password === $credentials['password']){
            Session::put('login',['username'=>$data->name,'email'=>$data->email,'role'=>$data->role]);
            if($data->is_active == 1){
                if($data->role == 1){
                    return redirect('admin-dashboard')->with('success','Login Successfully..!');
                }elseif($data->role == 2){
                    return redirect('dashboard')->with('success','Login Successfully..!');
                }elseif($data->role == 3){
                    return redirect('dashboard')->with('success','Login Successfully..!');
                }else{
                    return redirect('dashboard')->with('success','Login Successfully..!');
                }
               
            }else{
                // $request->session()->flash('message','Your account is deactivated, please contact with your admin...!',);
                return redirect('/')->with('error','Your account is deactivated, please contact with your admin...!');
            }
           }else{
            // $request->session()->flash('message','Your password is incorrect...!');
            return redirect('/')->with('error','Your password is incorrect...!');
           }
        }else{
            // $request->session()->flash('message','User not exist...!');
            return redirect('/')->with('error','User not exist...!');
        }
     
        
    }
    
}
