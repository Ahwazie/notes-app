@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/create.css') }}">

<div class="create-container">
    <a href="{{ url()->previous() }}" class="back-button">⟵ Back</a>
    <div class="form-container">
        <h1 class="form-header">Create a New Note</h1>
        <form method="POST" action="{{ route('notes.store') }}" class="note-form">
            @csrf
            <div class="form-field">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-input" name="title" id="title" required>
            </div>
            <div class="form-field">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-textarea" name="content" id="content" rows="4" required></textarea>
            </div>
            <button type="submit" class="submit-button">Save Note</button>
        </form>
    </div>
</div>
@endsection
