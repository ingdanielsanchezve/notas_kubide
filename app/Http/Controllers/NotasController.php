<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notes;

class NotasController extends Controller
{
    function index(){

        return view('notas', ['notas' => Notes::orderBy('created_at', 'desc')->get()]);

    }

    public function show($id){

        return view('nota', ['nota' => Notes::findOrFail($id)]);

    }

    function showFavorites(){

        return view('notas', ['notas' => Notes::where('note_is_favorite', true)->get()]);

    }

    function showNoFavorites(){

        return view('notas', ['notas' => Notes::where('note_is_favorite', false)->get()]);

    }

    public function showEdit($id){

        return view('editar_nota', ['nota' => Notes::findOrFail($id)]);
        
    }    

    function create(Request $request){

        $data = request()->validate([
            'note_text' => 'required'
        ], [
            'note_text.required' => 'Ingrese el texto de la nota'
        ]); 

        Notes::create(['note_text' => $data['note_text']]);
        
        return redirect()->route('notas.index');

    }

    function updateNotes(Request $request){

        $nota = Notes::find($request->note_id);

        if($nota){
            $nota->note_text = $request->note_text;
        }
        
        $nota->save();

        return redirect()->route('notas.index');

    }

    function setNoteIsFavorite($id){

        $nota = Notes::find($id);

        if($nota->note_is_favorite){
            $nota->note_is_favorite = false;
        }else{
            $nota->note_is_favorite = true;
        }
        
        $nota->save();

        return redirect()->route('notas.index');

    }

    function delete($id){

        Notes::findOrFail($id)->delete();

        return redirect()->route('notas.index');

    }


}
