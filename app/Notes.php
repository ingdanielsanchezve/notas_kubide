<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{

    protected  $primaryKey = 'note_id';
    
    protected $fillable = ['note_text', 'note_is_favorite'];
}
