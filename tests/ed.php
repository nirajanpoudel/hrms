<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User;
class AuthTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic functional test example.
     *
     * @return void
     */
    // public function testBasicExample()
    // {
    //     $this->visit('/')
    //          ->see('Laravel 5');
    // }
    public function  test_a_user_may_register_for_an_account_but_must_confirm_their_email_address(){

        $this->visit('register')
        ->type('jhn','name')
        ->type('j@example.com','email')
        ->type('password','password')
        ->press('Register');
        $this->see('Please Confirm your Email')
        ->seeInDatabase('users',['name'=>'jhn','verified'=>0]);

        $user = User::whereName('jhn')->first();
      //  $this->login($user)->see('Could Not Sign In');
        $this->visit("register/confirm/{$user->token}")
        ->see('You are Now Verified Please Login')
        ->seeInDatabase('users',['name'=>'jhn','verified'=>1]);
    }

    public function test_a_user_may_login(){
        $this->login()->see("logged In");
    }
    public function login($user=null){
        $user = $user ?: factory(App\User::class)->create(['password'=>'password']);
        return $this->visit('login')
                    ->type($user->email,'email')
                    ->type($user->password,'password')
                    ->press('Sign In');
    }


}
