<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');
        $response->assertStatus(200); // code 200 a página tá ok

		$this->get('/home')->assertStatus(302); //302 Movido Temporariamente é o código ou status que informa
												//sobre o redirecionamento de uma página ou documento web.		
	    $this->get('/login')->assertSuccessful(); // o mesmo que code 200
	   
	   $credentials = array(
            'email' => 'admin@unio.com',
            'password' => 'teste',
        );

        
       $this->post('/login', $credentials)->assertRedirect('/home');
	  
	   $this->get('/projetos')->assertStatus(200); // acesso à página ok
	   $this->get('/projetos')->assertSee('Projetos por Departamento')->assertDontSee('Bla Bla');; // procura a string na página
	   
	   $this->get('/logout')->assertStatus(302);
	   $this->get('/projetos')->assertStatus(302); // redireciona porque tá deslogado
	   
	   $this->get('/projetos')->assertRedirect('/login'); // ao tentar acessar a página 'projetos' sem estar 
														// logado será redirecionado para 'login'
														
												//		->assertSee('Projetos por Departamento');
    }
	
}
