@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="card shadow-sm border-0" style="max-width: 800px; margin: auto;">
        <div class="card-header bg-white py-3">
            <h4 class="mb-0 text-primary"><i class="bi bi-pencil-square"></i> Edit Course</h4>
        </div>
        <div class="card-body p-4">
            <form action="{{ route('courses.update', $course) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label">Course Title *</label>
                    <input type="text" name="title" class="form-control" value="{{ $course->title }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Description *</label>
                    <textarea name="description" class="form-control" rows="4" required>{{ $course->description }}</textarea>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Duration *</label>
                        <input type="text" name="duration" class="form-control" value="{{ $course->duration }}" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Fee</label>
                        <input type="number" step="0.01" name="fee" class="form-control" value="{{ $course->fee }}">
                    </div>
                </div>
                <div class="mb-4">
                    <label class="form-label">Course Image</label>
                    <input type="file" name="image" class="form-control" accept="image/*">
                    @if($course->image)
                        <div class="mt-2">
                            <img src="{{ asset('storage/'.$course->image) }}" width="100" class="rounded">
                        </div>
                    @endif
                </div>
                <div class="text-end">
                    <a href="{{ route('courses.index') }}" class="btn btn-secondary me-2">Cancel</a>
                    <button type="submit" class="btn btn-primary"><i class="bi bi-check-circle"></i> Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
