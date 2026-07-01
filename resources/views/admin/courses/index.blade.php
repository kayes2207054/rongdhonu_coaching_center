@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="card shadow-sm border-0">
        <div class="card-header bg-white d-flex justify-content-between align-items-center py-3">
            <h4 class="mb-0 text-primary"><i class="bi bi-book"></i> Courses</h4>
            <a href="{{ route('courses.create') }}" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Add Course</a>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Duration</th>
                            <th>Fee</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($courses as $course)
                        <tr>
                            <td>
                                @if($course->image)
                                    <img src="{{ asset('storage/'.$course->image) }}" alt="Course" class="rounded" width="60" height="40" style="object-fit: cover;">
                                @else
                                    <div class="bg-secondary rounded d-flex align-items-center justify-content-center text-white" style="width:60px; height:40px;"><i class="bi bi-image"></i></div>
                                @endif
                            </td>
                            <td>{{ $course->title }}</td>
                            <td>{{ $course->duration }}</td>
                            <td>{{ $course->fee ? '$'.$course->fee : 'Free' }}</td>
                            <td>
                                <a href="{{ route('courses.edit', $course) }}" class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil"></i></a>
                                <form action="{{ route('courses.destroy', $course) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr><td colspan="5" class="text-center text-muted">No courses found.</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
