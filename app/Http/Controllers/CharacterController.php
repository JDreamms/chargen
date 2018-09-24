<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Character;

class CharacterController extends Controller
{
    public function displayCharacter($id)
    {
        $character = Character::find($id);
        return view('character.view', compact(['id', 'character']));
    }
}
