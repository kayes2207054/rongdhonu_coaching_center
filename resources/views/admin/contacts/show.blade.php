@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="card shadow-sm border-0" style="max-width: 800px; margin: auto;">
        <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
            <h4 class="mb-0 text-primary"><i class="bi bi-envelope-open"></i> View Message</h4>
            <a href="{{ route('contacts.index') }}" class="btn btn-sm btn-secondary"><i class="bi bi-arrow-left"></i> Back</a>
        </div>
        <div class="card-body p-4">
            <div class="mb-3 border-bottom pb-2">
                <strong>From:</strong> {{ $contact->name }} ({{ $contact->email }})
                <br>
                <strong>Date:</strong> {{ $contact->created_at->format('d M, Y h:i A') }}
            </div>
            <div class="mb-3 border-bottom pb-2">
                <strong>Subject:</strong> {{ $contact->subject ?? 'No Subject' }}
            </div>
            <div class="mb-3">
                <strong>Message:</strong>
                <p class="mt-2 text-muted" style="white-space: pre-wrap;">{{ $contact->message }}</p>
            </div>
        </div>
        <div class="card-footer bg-white text-end">
            <form action="{{ route('contacts.destroy', $contact) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?');">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger"><i class="bi bi-trash"></i> Delete Message</button>
            </form>
        </div>
    </div>
</div>
@endsection
