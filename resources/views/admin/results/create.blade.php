@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="card shadow-sm border-0" style="max-width: 800px; margin: auto;">
        <div class="card-header bg-white py-3">
            <h4 class="mb-0 text-primary"><i class="bi bi-file-earmark-plus"></i> Add Result</h4>
        </div>
        <div class="card-body p-4">
            <form action="{{ route('results.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Student Name *</label>
                        <input type="text" name="student_name" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Student ID</label>
                        <input type="text" name="student_id" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Exam Name *</label>
                        <input type="text" name="exam_name" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Marks</label>
                        <input type="number" step="0.01" name="marks" class="form-control">
                    </div>
                </div>
                <div class="mb-4">
                    <label class="form-label">Result File (PDF/Image)</label>
                    <input type="file" name="file_path" class="form-control" accept=".pdf,.jpg,.png">
                </div>
                <div class="text-end">
                    <a href="{{ route('results.index') }}" class="btn btn-secondary me-2">Cancel</a>
                    <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
