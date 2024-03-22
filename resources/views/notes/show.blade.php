<link rel="stylesheet" href="{{ asset('css/show.css') }}">
@extends('layouts.app')

@section('content')
<div class="show-container">
    <div class="note-display">
        <h2 class="note-title">{{ $note->title }}</h2>
        <p class="note-content">{{ $note->content }}</p>
        <div class="note-actions">
            <a href="{{ route('notes.edit', $note) }}" class="button edit">Edit</a>
            <a href="{{ route('notes.index') }}" class="button back">Back</a>
            <a href="#" class="button delete" onclick="confirmDeletion()">Del</a>
        </div>
    </div>
</div>

<form id="delete-note-form" action="{{ route('notes.destroy', $note) }}" method="POST" style="display: none;">
    @csrf
    @method('DELETE')
</form>

<script>
function confirmDeletion() {
    if (confirm('Are you sure you want to delete this note?')) {
        document.getElementById('delete-note-form').submit();
    }
}
</script>
@endsection

