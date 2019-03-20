<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class NotasTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function it_loads_the_notes_page()
    {
        $this->get('/')
             ->assertStatus(200)
             ->assertSee('Gestor de Notas');
    }

    /** @test */
    function it_loads_the_note_detail()
    {
        $this->get('/notas/1')
             ->assertStatus(200)
             ->assertSee('Nota: 1');
    }
}
