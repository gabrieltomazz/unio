<?php

namespace Tests\Feature;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AlunosTelaTest extends TestCase
{
   
   public function test_create_user_using_form_inicial_alunos()
   {
   		$this->get('/alunos/departamento/{departamento_id}')->assertStatus(200);   		 
   }
}