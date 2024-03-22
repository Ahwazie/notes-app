<!-- Link to your custom stylesheet -->
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@extends('layouts.app')

@section('content')
<div class="notes-page-container">
    <h1 class="notes-title">My Notes 📝</h1>
    <a href="{{ route('notes.create') }}" class="create-note-button">➕ Create New Note</a>

    <div class="notes-grid">
        @forelse($notes as $note)
            <div class="note-card">
                <h2 class="note-card-title">{{ $note->title }}</h2>
                <p class="note-card-content">{{ Str::limit($note->content, 100) }}</p>
                <div class="note-card-actions">
                    <a href="{{ route('notes.show', $note) }}" class="view-note-button">View</a>
                    <a href="{{ route('notes.edit', $note) }}" class="edit-note-button">Edit</a>
                    <!-- Delete button as a link -->
                    <a href="javascript:void(0)" class="note-button delete-button" 
                     onclick="if (confirm('Are you sure you want to delete this note?')) { 
                     event.preventDefault(); 
                     document.getElementById('delete-form-{{ $note->id }}').submit(); 
            }">
    Del
</a>


                    <!-- Delete form -->
                    <form id="delete-form-{{ $note->id }}" action="{{ route('notes.destroy', $note) }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </div>
            </div>
        @empty
            <p>No notes available. Start by creating a new note.</p>
        @endforelse
    </div>
</div>
@endsection

<script src="{{ asset('js/scroll.js') }}"></script>


