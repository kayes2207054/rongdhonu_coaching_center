@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="card shadow-sm border-0" style="max-width: 800px; margin: auto;">
        <div class="card-header bg-white py-3">
            <h4 class="mb-0 text-primary"><i class="bi bi-pencil-square"></i> Edit Notice</h4>
        </div>
        <div class="card-body p-4">
            <form action="{{ route('notices.update', $notice) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label">Notice Title *</label>
                    <input type="text" name="title" class="form-control" value="{{ $notice->title }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Notice Date *</label>
                    <input type="date" name="date" class="form-control" value="{{ $notice->date }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Content *</label>
                    <textarea name="content" class="form-control" rows="5" required>{{ $notice->content }}</textarea>
                </div>
                <div class="mb-4">
                    <label class="form-label">Attachment (PDF/Image)</label>
                    <input type="file" name="attachment" class="form-control" accept=".pdf,.doc,.docx,.jpg,.png">
                    @if($notice->attachment)
                        <div class="mt-2">
                            <a href="{{ asset('storage/'.$notice->attachment) }}" target="_blank">Current Attachment</a>
                        </div>
                    @endif
                </div>
                <div class="text-end">
                    <a href="{{ route('notices.index') }}" class="btn btn-secondary me-2">Cancel</a>
                    <button type="submit" class="btn btn-primary"><i class="bi bi-check-circle"></i> Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
