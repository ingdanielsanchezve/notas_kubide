<?php

namespace Tests\Feature;

use \App\Notes;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class NotasTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function it_loads_the_notes_page()
    {

        factory(Notes::class)->create([
            'note_text' => 'Esta es la primera nota creada',
            'note_is_favorite' => true
        ]);

        $this->get('/')
             ->assertStatus(200)
             ->assertSee('Gestor de Notas')
             ->assertSee('Esta es la primera nota creada');
    }

    /** @test */
    function it_loads_the_note_detail()
    {

        $nota = factory(Notes::class)->create([
            'note_text' => 'Nota de prueba para ver el detalle'
        ]);

        $this->get('/notas/'.$nota->note_id)
             ->assertStatus(200)
             ->assertSee('Nota de prueba para ver el detalle');
    }

    /** @test */
    function it_creates_a_new_note()
    {
        $this->post('/notas', [
            'note_text' => 'Esta es una nota para pruebas unitarias'
        ])->assertRedirect(route('notas.index'));

        $this->assertDatabaseHas('notes', [
            'note_text' => 'Esta es una nota para pruebas unitarias'
        ]);
    }
}
