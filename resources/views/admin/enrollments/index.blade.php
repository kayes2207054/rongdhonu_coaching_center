@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold mb-0">Course Enrollments</h2>
</div>

<div class="card shadow-sm border-0">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th class="ps-4 py-3">Student Name</th>
                        <th class="py-3">Contact</th>
                        <th class="py-3">Course</th>
                        <th class="py-3">Date</th>
                        <th class="py-3">Status</th>
                        <th class="pe-4 py-3 text-end">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($enrollments as $enrollment)
                    <tr>
                        <td class="ps-4 py-3 fw-semibold text-dark">{{ $enrollment->name }}</td>
                        <td class="py-3 text-muted">
                            <div><i class="bi bi-envelope me-1"></i> {{ $enrollment->email }}</div>
                            <div><i class="bi bi-telephone me-1"></i> {{ $enrollment->phone }}</div>
                        </td>
                        <td class="py-3">
                            <span class="badge bg-light text-dark border">{{ $enrollment->course->title ?? 'Deleted Course' }}</span>
                        </td>
                        <td class="py-3 text-muted">{{ $enrollment->created_at->format('M d, Y h:i A') }}</td>
                        <td class="py-3">
                            @if($enrollment->status == 'Pending')
                                <span class="badge bg-warning text-dark">Pending</span>
                            @elseif($enrollment->status == 'Approved')
                                <span class="badge bg-success">Approved</span>
                            @else
                                <span class="badge bg-danger">Rejected</span>
                            @endif
                        </td>
                        <td class="pe-4 py-3 text-end">
                            <form action="{{ route('enrollments.update', $enrollment) }}" method="POST" class="d-inline">
                                @csrf
                                @method('PUT')
                                <div class="btn-group btn-group-sm">
                                    <button type="submit" name="status" value="Approved" class="btn btn-outline-success" {{ $enrollment->status == 'Approved' ? 'disabled' : '' }} title="Approve"><i class="bi bi-check-circle"></i></button>
                                    <button type="submit" name="status" value="Rejected" class="btn btn-outline-danger" {{ $enrollment->status == 'Rejected' ? 'disabled' : '' }} title="Reject"><i class="bi bi-x-circle"></i></button>
                                </div>
                            </form>
                            
                            <form action="{{ route('enrollments.destroy', $enrollment) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this enrollment?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-secondary ms-1" title="Delete"><i class="bi bi-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center py-5 text-muted">
                            <i class="bi bi-inbox fs-1 d-block mb-3"></i>
                            No enrollments found.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
