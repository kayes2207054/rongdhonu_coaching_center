@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="fw-bold text-dark"><i class="bi bi-speedometer2"></i> Admin Dashboard</h3>
        <span class="text-muted">{{ date('l, d F Y') }}</span>
    </div>
    
    <div class="row g-4 mb-4">
        <div class="col-md-3">
            <div class="card border-0 shadow-sm text-center py-4 bg-primary text-white h-100">
                <i class="bi bi-person-badge display-4 mb-2"></i>
                <h2 class="fw-bold mb-0">{{ \App\Models\Teacher::count() }}</h2>
                <span class="text-uppercase small fw-semibold">Teachers</span>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm text-center py-4 bg-success text-white h-100">
                <i class="bi bi-book display-4 mb-2"></i>
                <h2 class="fw-bold mb-0">{{ \App\Models\Course::count() }}</h2>
                <span class="text-uppercase small fw-semibold">Courses</span>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm text-center py-4 bg-info text-white h-100">
                <i class="bi bi-megaphone display-4 mb-2"></i>
                <h2 class="fw-bold mb-0">{{ \App\Models\Notice::count() }}</h2>
                <span class="text-uppercase small fw-semibold">Notices</span>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm text-center py-4 bg-warning text-dark h-100">
                <i class="bi bi-card-checklist display-4 mb-2"></i>
                <h2 class="fw-bold mb-0">{{ \App\Models\Result::count() }}</h2>
                <span class="text-uppercase small fw-semibold">Results</span>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-md-6">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white border-bottom-0 pt-4 pb-0">
                    <h5 class="fw-bold text-dark"><i class="bi bi-envelope"></i> Unread Messages</h5>
                </div>
                <div class="card-body">
                    <div class="list-group list-group-flush">
                        @php $unreadContacts = \App\Models\Contact::where('is_read', false)->latest()->take(5)->get(); @endphp
                        @forelse($unreadContacts as $contact)
                            <a href="{{ route('contacts.show', $contact) }}" class="list-group-item list-group-item-action border-0 px-0">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-1 fw-bold text-primary">{{ $contact->name }}</h6>
                                    <small class="text-muted">{{ $contact->created_at->diffForHumans() }}</small>
                                </div>
                                <p class="mb-1 small text-muted text-truncate">{{ $contact->subject ?? $contact->message }}</p>
                            </a>
                        @empty
                            <div class="text-center text-muted py-3">No unread messages.</div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white border-bottom-0 pt-4 pb-0">
                    <h5 class="fw-bold text-dark"><i class="bi bi-lightning-charge"></i> Quick Links</h5>
                </div>
                <div class="card-body">
                    <div class="d-grid gap-3">
                        <a href="{{ route('courses.create') }}" class="btn btn-outline-success text-start"><i class="bi bi-plus-circle me-2"></i> Add New Course</a>
                        <a href="{{ route('notices.create') }}" class="btn btn-outline-info text-start"><i class="bi bi-plus-circle me-2"></i> Publish Notice</a>
                        <a href="{{ route('results.create') }}" class="btn btn-outline-warning text-start"><i class="bi bi-plus-circle me-2"></i> Upload Result</a>
                        <a href="{{ url('/') }}" target="_blank" class="btn btn-outline-secondary text-start"><i class="bi bi-box-arrow-up-right me-2"></i> Visit Public Site</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
