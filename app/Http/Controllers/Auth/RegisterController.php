<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index()
    {
        return view('auth.register');
    }

    

    public function store( Request $request)
    
    {

        // dd($request->only('email', 'password'));

        // $this->validate($request,[

        //     'name'=>'required|max:255',
        //     'username'=>'required|min:5|max:30',
        //     'email'=>'required|email|max:100',
        //     'password'=>'required|confirmed',
        //     'profile_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);
        $request->validate([
             
            'name'=>'required|max:255',
            'username'=>'required|min:5|max:30',
            'email'=>'required|email|max:100',
            'password'=>'required|confirmed',
            'profile_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input=$request->all();
        $input['password']= Hash::make($request->password);
        if ($image = $request->file('profile_image')) {
            $imageDestinationPath = 'uploads/users/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($imageDestinationPath, $profileImage);
            $input['profile_image'] = "$profileImage";
        }
       
      
        User::create($input);

        // User::create([
        //     'name' => $request->name,
        //     'username' => $request->username, 
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        // ]);

      

        //sign in
    
        auth()->attempt($request->only('email', 'password'));
        
        return redirect()->route('dashboard');
}
}
