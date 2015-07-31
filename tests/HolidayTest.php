<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User;
class HolidayTest extends TestCase
{

	public function test_on_index(){
		$this->visit('holidays')->call('GET','holidays');
	}

	

}