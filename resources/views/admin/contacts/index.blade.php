@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="card shadow-sm border-0">
        <div class="card-header bg-white py-3">
            <h4 class="mb-0 text-primary"><i class="bi bi-envelope"></i> Contact Messages</h4>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Name</th>
                            <th>Subject</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($contacts as $contact)
                        <tr class="{{ $contact->is_read ? '' : 'fw-bold bg-light' }}">
                            <td>
                                @if($contact->is_read)
                                    <span class="badge bg-secondary">Read</span>
                                @else
                                    <span class="badge bg-success">New</span>
                                @endif
                            </td>
                            <td>{{ $contact->created_at->format('d M, Y h:i A') }}</td>
                            <td>{{ $contact->name }} <br><small class="text-muted">{{ $contact->email }}</small></td>
                            <td>{{ Str::limit($contact->subject ?? $contact->message, 30) }}</td>
                            <td>
                                <a href="{{ route('contacts.show', $contact) }}" class="btn btn-sm btn-outline-info"><i class="bi bi-eye"></i> View</a>
                                <form action="{{ route('contacts.destroy', $contact) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr><td colspan="5" class="text-center text-muted">No messages found.</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
