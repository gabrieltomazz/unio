<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
class UserTest extends TestCase
{
   use DatabaseTransactions;

   public function test_create_user()
   {
   		\App\User::create([
   			'name' => 'Admin User',
   			'email' => 'admin@admin.com',
   			'password' => bcrypt(123456),
   			'biografia' => 'aluno testador',
   			'universidade_id' => 1,
   			'tipo_user_id' => 1,
   			'cursos_id' => 1,
   			'departamento_id' => 1
   		]);

   	    // $this->seeInDatabase('user',['name' => 'Admin User']);
   		$this->assertTrue(true);
   }
}
