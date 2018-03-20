<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\User;
 
class AuthController extends Controller
{

    
    public function do_register(Request $request)
    {
        
            $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
        
        if ($validator->fails())
         {
                return redirect()->back()->withErrors($validator)->withInput();
        }
        $request['ip_address'] = request()->ip();
       
        $user = User::create(request(['name', 'email', 'password','ip_address']));
        
        auth()->login($user);
        
        return redirect()->to('/profile');
    }
    
        public function do_login()
    {
        if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again'
            ]);
        }
        
        return redirect()->to('/profile');
    }
    
    public function destroy()
    {
        auth()->logout();
        
        return redirect()->to('/');
    }
    
        public function user_update_info(Request $request)
    {
     
            $validator = Validator::make($request->all(), [
            'name' => 'required',
            'password' => 'required|min:6|confirmed',
        ]);
        
               if ($validator->fails())
         {
        
        return redirect("profile")->withErrors($validator);
        }
       
    $user = auth()->user();
    $user->name = $request['name'];
    $user->setPasswordAttribute($request['password']);
    $user->ip_address = request()->ip();
   

    $user->save();

    
    return redirect()->back();
       
     
        
    }

}