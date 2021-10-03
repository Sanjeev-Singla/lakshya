<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Website\UserRequest;

class UserController extends Controller
{    
    /**
     * register
     *
     * @param  mixed $request
     * @return void
     */
    public function register(Request $request)
    {
        # If request is post then regiter user
        if ($request->isMethod('post')) {
            # validation
            $request->validate(UserRequest::register());
            
            # Making new entry to the users table
            $user = \App\Models\User::create($request->all());
            
            # checking user is register or not accordingly flashing the message
            if ($user) {
                return back()->with('success','Registered successfully.');
            }else{
                return back()->with('error','Unable to register.');
            }

        }
        # if request is not post then render the register page 
        return view('website.pages.register');
    }
    
    /**
     * signin
     *
     * @param  mixed $request
     * @return void
     */
    public function signin(Request $request)
    {
        # If request is post then regiter user
        if ($request->isMethod('post')) {
            # validation
            $request->validate(UserRequest::signin());
            # Making new entry to the users table
            if (\Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                return  \Redirect::route('website.home');
            }else{
                return \Redirect::route("website.signin")->withSuccess('Opps! Invalid Credentials.');
            }
        }
        # if request is not post then render the register page 
        return view('website.pages.signin');
    }
    
    /**
     * changePassword
     *
     * @param  mixed $request
     * @return void
     */
    public function changePassword(Request $request)
    {
        if ($request->isMethod('post')) {
            # validation
			$request->validate(UserRequest::change_password());
            # Getting user details
            $user = \App\Models\User::where('id', \Auth::user()->id)->first();
            # check password
            if (!\Hash::check($request->current_password, $user->password)) {
                return redirect()->route("website.change-password")->with('error','Invalid Current Password!');
            }
            # updating user password
            $user->password = $request->new_password;
            $user->save();

            return redirect()->route("website.change-password")->with('success','Password Changed Successfully!');
		}
		return view('website.pages.changePassword');
    }

    /**
     * logout
     *
     * @param  mixed $request
     * @return void
     */
    public function logout(Request $request) {
        \Auth::logout();
        return \Redirect::route("website.signin")->withSuccess('Logout successfully.');
    }
    
}
