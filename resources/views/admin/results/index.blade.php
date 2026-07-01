@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="card shadow-sm border-0">
        <div class="card-header bg-white d-flex justify-content-between align-items-center py-3">
            <h4 class="mb-0 text-primary"><i class="bi bi-card-checklist"></i> Results</h4>
            <a href="{{ route('results.create') }}" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Add Result</a>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Student ID</th>
                            <th>Name</th>
                            <th>Exam Name</th>
                            <th>Marks</th>
                            <th>File</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($results as $result)
                        <tr>
                            <td>{{ $result->student_id ?? 'N/A' }}</td>
                            <td>{{ $result->student_name }}</td>
                            <td>{{ $result->exam_name }}</td>
                            <td>{{ $result->marks ?? 'N/A' }}</td>
                            <td>
                                @if($result->file_path)
                                    <a href="{{ asset('storage/'.$result->file_path) }}" target="_blank" class="btn btn-sm btn-outline-info"><i class="bi bi-file-earmark-text"></i> View</a>
                                @else
                                    <span class="text-muted">None</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('results.edit', $result) }}" class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil"></i></a>
                                <form action="{{ route('results.destroy', $result) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr><td colspan="6" class="text-center text-muted">No results found.</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
