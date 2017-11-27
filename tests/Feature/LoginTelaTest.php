<?php

namespace Tests\Feature;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LoginTelaTest extends TestCase
{
   
   public function test_create_user_using_form_login()
   {
   		 
   		 $this->get('/login')->assertStatus(200);
   		 
   }
}