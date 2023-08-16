<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AnuncioCreateViewTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testCreateViewIsVisible()
    {
        $response = $this->get('/anuncios/create');

        $response->assertStatus(200);
        $response->assertSee('Criar Novo Anuncio');
        $response->assertSee('Nome:');
        $response->assertSee('Descrição:');
        $response->assertSee('Criar Anúncio');
    }
}
