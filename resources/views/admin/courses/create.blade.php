@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="card shadow-sm border-0" style="max-width: 800px; margin: auto;">
        <div class="card-header bg-white py-3">
            <h4 class="mb-0 text-primary"><i class="bi bi-journal-plus"></i> Add Course</h4>
        </div>
        <div class="card-body p-4">
            <form action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Course Title *</label>
                    <input type="text" name="title" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Description *</label>
                    <textarea name="description" class="form-control" rows="4" required></textarea>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Duration *</label>
                        <input type="text" name="duration" class="form-control" placeholder="e.g. 6 Months" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Fee</label>
                        <input type="number" step="0.01" name="fee" class="form-control">
                    </div>
                </div>
                <div class="mb-4">
                    <label class="form-label">Course Image</label>
                    <input type="file" name="image" class="form-control" accept="image/*">
                </div>
                <div class="text-end">
                    <a href="{{ route('courses.index') }}" class="btn btn-secondary me-2">Cancel</a>
                    <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
