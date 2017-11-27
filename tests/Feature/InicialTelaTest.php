<?php

namespace Tests\Feature;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class IncialTelaTest extends TestCase
{
   
   public function test_create_user_using_form_inicial()
   {
   		 $this->get('/')->assertStatus(200);
   		 
   }
}