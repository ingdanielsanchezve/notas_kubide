<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notes;

class NotasController extends Controller
{
    function index(){

        return view('notas', ['notas' => Notes::orderBy('note_is_favorite', 'desc')->get()]);

    }

    function showFavorites(){

        return view('notas', ['notas' => Notes::where('note_is_favorite', true)->get()]);

    }

    function showNoFavorites(){

        return view('notas', ['notas' => Notes::where('note_is_favorite', false)->get()]);

    }

    public function show($id){
        return view('nota', ['nota' => Notes::findOrFail($id)]);
    }

    public function showEdit($id){
        return view('editar_nota', ['nota' => Notes::findOrFail($id)]);
    }

    function delete($id){

        Notes::findOrFail($id)->delete();

        return view('notas', ['notas' => Notes::orderBy('note_is_favorite', 'desc')->get()]);

    }

    function setNoteIsFavorite($id){

        $nota = Notes::find($id);

        if($nota->note_is_favorite){
            $nota->note_is_favorite = false;
        }else{
            $nota->note_is_favorite = true;
        }
        
        $nota->save();

        return view('notas', ['notas' => Notes::orderBy('note_is_favorite', 'desc')->get()]);

    }


}
