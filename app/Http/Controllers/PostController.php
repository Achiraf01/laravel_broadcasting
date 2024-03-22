<?php

namespace App\Http\Controllers;

use App\Events\PostCreatedEvent;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $event = new PostCreatedEvent(['titre' => 'Peter']);
        // event($event);// Renvoi l'évènement à tous les utilisateurs
        broadcast($event)->toOthers(); // Renvoyer l'évènement à tous les utilisateurs sauf celui qui l'a envoyé
    }
}
