<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    /**
     * Display list of all characters.
     */
    public function index()
    {
        $characters = Character::latest()->get();
        return view('characters.index', compact('characters'));
    }

    /**
     * Show the form to create a new character.
     */
    public function create()
    {
        return view('characters.create');
    }

    /**
     * Save the new character to the database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'power'    => 'required|string|max:255',
            'universe' => 'required|string|max:255',
        ]);

        Character::create($request->all());

        return redirect()->route('characters.index')
                         ->with('success', 'Character created successfully');
    }

    /**
     * Show the form to edit an existing character.
     */
    public function edit(Character $character)
    {
        return view('characters.edit', compact('character'));
    }

    /**
     * Update the character in the database.
     */
    public function update(Request $request, Character $character)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'power'    => 'required|string|max:255',
            'universe' => 'required|string|max:255',
        ]);

        $character->update($request->all());

        return redirect()->route('characters.index')
                         ->with('success', 'Character updated successfully');
    }

    /**
     * Delete the character from the database.
     */
    public function destroy(Character $character)
    {
        $character->delete();

        return redirect()->route('characters.index')
                         ->with('success', 'Character deleted successfully');
    }
}
