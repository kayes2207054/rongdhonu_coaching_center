@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="card shadow-sm border-0" style="max-width: 800px; margin: auto;">
        <div class="card-header bg-white py-3">
            <h4 class="mb-0 text-primary"><i class="bi bi-pencil-square"></i> Edit Result</h4>
        </div>
        <div class="card-body p-4">
            <form action="{{ route('results.update', $result) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Student Name *</label>
                        <input type="text" name="student_name" class="form-control" value="{{ $result->student_name }}" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Student ID</label>
                        <input type="text" name="student_id" class="form-control" value="{{ $result->student_id }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Exam Name *</label>
                        <input type="text" name="exam_name" class="form-control" value="{{ $result->exam_name }}" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Marks</label>
                        <input type="number" step="0.01" name="marks" class="form-control" value="{{ $result->marks }}">
                    </div>
                </div>
                <div class="mb-4">
                    <label class="form-label">Result File (PDF/Image)</label>
                    <input type="file" name="file_path" class="form-control" accept=".pdf,.jpg,.png">
                    @if($result->file_path)
                        <div class="mt-2">
                            <a href="{{ asset('storage/'.$result->file_path) }}" target="_blank">Current File</a>
                        </div>
                    @endif
                </div>
                <div class="text-end">
                    <a href="{{ route('results.index') }}" class="btn btn-secondary me-2">Cancel</a>
                    <button type="submit" class="btn btn-primary"><i class="bi bi-check-circle"></i> Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
