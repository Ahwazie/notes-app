<?php

namespace App\Http\Controllers;
use App\Models\Note;

use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notes = auth()->user()->notes()->get() ?? collect();
        return view('notes.index', compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('notes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);
    
        $note = new Note();
        $note->user_id = auth()->id();
        $note->title = $request->title;
        $note->content = $request->content;
        $note->save();
    
        return redirect()->route('notes.index')->with('success', 'Note created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $note = Note::findOrFail($id); // Fetch the note with the given $id or fail with a 404 error
        return view('notes.show', compact('note'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $note = auth()->user()->notes()->findOrFail($id);
        return view('notes.edit', compact('note'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);
    
        $note = auth()->user()->notes()->findOrFail($id);
        $note->update($request->all());
    
        return redirect()->route('notes.index')->with('success', 'Note updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $note = auth()->user()->notes()->findOrFail($id);
        $note->delete();

        return redirect()->route('notes.index')->with('success', 'Note deleted successfully');
    }
}
