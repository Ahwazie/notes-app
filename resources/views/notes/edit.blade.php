

@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/edit.css') }}">
<div class="container mt-4">
    <div class="row">
        <div class="col-12">
            <a href="{{ url()->previous() }}" class="btn btn-custom-back mb-3">
                ← Back
            </a>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header custom-header">Edit Note</div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="First" required>
                        </div>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea class="form-control" id="content" name="content" rows="4" required>I am first time ever user here lol test saja kalau panjang apa jadi ah kalau mcm 2 perenggan kah apa jadi ni yo</textarea>
                        </div>
                        <button type="submit" class="btn btn-custom-save float-right">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


