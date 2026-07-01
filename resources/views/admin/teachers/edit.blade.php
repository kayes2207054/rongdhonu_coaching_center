@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="card shadow-sm border-0" style="max-width: 800px; margin: auto;">
        <div class="card-header bg-white py-3">
            <h4 class="mb-0 text-primary"><i class="bi bi-pencil-square"></i> Edit Teacher</h4>
        </div>
        <div class="card-body p-4">
            <form action="{{ route('teachers.update', $teacher) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Name *</label>
                        <input type="text" name="name" class="form-control" value="{{ $teacher->name }}" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Designation *</label>
                        <input type="text" name="designation" class="form-control" value="{{ $teacher->designation }}" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" value="{{ $teacher->email }}">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Phone</label>
                        <input type="text" name="phone" class="form-control" value="{{ $teacher->phone }}">
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Bio / Description</label>
                    <textarea name="bio" class="form-control" rows="4">{{ $teacher->bio }}</textarea>
                </div>
                <div class="mb-4">
                    <label class="form-label">Profile Image</label>
                    <input type="file" name="image" class="form-control" accept="image/*">
                    @if($teacher->image)
                        <div class="mt-2">
                            <img src="{{ asset('storage/'.$teacher->image) }}" width="60" class="rounded">
                        </div>
                    @endif
                </div>
                <div class="text-end">
                    <a href="{{ route('teachers.index') }}" class="btn btn-secondary me-2">Cancel</a>
                    <button type="submit" class="btn btn-primary"><i class="bi bi-check-circle"></i> Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
