<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $user = User::get();
        // return $user;
        
        return view('pages.users.user', compact('user'));
    }


    public function create(){
    
       //view add user page
        
        return view('pages.users.addUser');
    }


    public function store(Request $request){

        
        $user_img = $request->file('User_Image')->getClientOriginalName();
        $request->file('User_Image')->storeAs('public/userimage',$user_img);
        var_dump($request->file('upload_file'));
        

        //inster user 
        $user = new user();
        $user->job_id = $request->job_id;
        $user->name   = $request->name;
        $user->email  = $request->email ;
        $user->phone = $request->phone;
        $user->job_title = $request->job_title;
        $user->User_Image = $user_img;
        $user->password = Hash::make($request->password); 
        $user->role = $request->role;
        $user->save();

        return redirect('users');

    }

    public function edit($id){

        $user=User::find($id);
        if(! $user){

            return redirect('users');
        }
            
        return view('pages.users.updateUser', compact('user'));

    }

    public function update(Request $request, $id)
    {
        

        // Update User
        $user = User::findOrFail($id);
        $user->job_id = $request->job_id;

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->job_title = $request->job_title;
        // $user->User_Image = $user_img;
        if ($request->hasFile('User_Image')) {
            $user_img = $request->file('User_Image')->getClientOriginalName();
            $request->file('User_Image')->storeAs('public/userimage',$user_img);
            $user->User_Image = $user_img;
        }
        $user->save();

        return redirect('users');


        }
        public function destroy($id){

            $user = User::find($id);
            $user->delete();
            return back()->with('success','User deleted successfully' );
            // return redirect('users');
    }







    

    

}




