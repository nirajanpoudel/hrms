<?php
namespace App\Mailers;


use Illuminate\Contracts\Mail\Mailer;
use App\User;
class AppMailer {

	public $mailer;
	public $from  = 'admin@example.com';
	public $to;
	public $view;
	public $data = [];

	public function __construct(Mailer $mailer){
		$this->mailer =$mailer;
	}

	public function SendEmailConfirmationTo(User $user){
		$this->to = $user->email;
		$this->view = 'email.confirm';
		$this->data = compact('user');
		$this->deliver();
	}
	public function deliver(){
		$this->mailer->send($this->view,$this->data,function($message){
			$message->from($this->from,'Administrator')
			->to($this->to );
		});
	}

}