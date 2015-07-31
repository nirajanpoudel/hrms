<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Mailers\AppMailer;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
   public function register(){
   		return view('auth.register');
   }
   public function postRegister(Request $request,AppMailer $mailer){
   		$input = $request->all();
   		$user = User::create($input);

   		$mailer->sendEmailConfirmationTo($user);
   		session()->flash('message','Please Confirm Your Email Address');
   		return redirect()->back();

   }

   public function confirm($token){

   	$user = User::whereToken($token)->first();

   	$user->verified = true;
   	$user->token = null;
   	$user->save();

	session()->flash('message','You are Now Verified Please Login');
	return redirect('login');

   }


   public function login(){

   		return view('auth.login');
   }

   public function postLogin(Request $request){

   		if(\Auth::attempt(['email'=>$request->input('email'),
   			'password'=>$request->input('password'),
   			'verified'=>true
   			])){

   			session()->flash('message','logged In');
   			return redirect()->intendent('/');
   		}
   		session()->flash('message','Try Out');
   		return redirect()->back();
   }
}
