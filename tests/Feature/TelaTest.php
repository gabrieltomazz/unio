<?php

namespace Tests\Feature;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TelaTest extends TestCase
{
   
   public function test_create_user_using_form()
   {
   		 //$this->get('/')->assertStatus(200);
   		 $this->get('/register')->assertStatus(200);
   		 $this->get('/login')->assertStatus(200);
   		 //$this->get('/logout')->assertStatus(200);
   		 //$this->get('/alunos')->assertStatus(200);
   		 //$this->get('//projetos/departamento/{departamento_id}')->assertStatus(200);
   		 //$this->get('/home')->assertStatus(200);

   }
}
