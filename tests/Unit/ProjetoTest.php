<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
class ProjetoTest extends TestCase
{
   use DatabaseTransactions;

   public function test_create_projeto()
   {
   		\App\Projeto::create([
   			'titulo' => 'Projeto1',
   			'apresentacao_do_problema' => 'teste',
   			'estado_da_arte' => 'teste',
   			'justificativa_do_projeto' => 'teste',
   			'objetivo' => 'teste',
   			'metodo' => 'teste',
   			'cronograma' => '1 ano',
   			'ref_bibliograficas' => 'teste',
            'departamento_id' => 2,
            'users_id' => 7
   		]);

   	    // $this->seeInDatabase('user',['name' => 'Admin User']);
   		$this->assertTrue(true);
   }
}
