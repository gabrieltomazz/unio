<?php

namespace Tests\Feature;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RegisterTest extends TestCase
{
   
   public function test_create_user_using_form_reg()
   {
   		 
   		 $this->get('/register')->assertStatus(200);
   		 
   }
}