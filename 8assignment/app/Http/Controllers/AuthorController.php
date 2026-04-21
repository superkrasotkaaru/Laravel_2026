<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'surname' => 'required|string',
            'birthdate' => 'required|date'
        ]);

        Author::create($request->all());

        return redirect('/authors');
    }
}
