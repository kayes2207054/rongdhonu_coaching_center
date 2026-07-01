@extends('layouts.public')

@section('content')

<!-- Hero Section -->
<section id="home" class="hero-section">
    <div class="container">
        <h1 class="display-4 fw-bold mb-4">Welcome to Rongdhonu Coaching Center</h1>
        <p class="lead mb-5">Providing quality education and shaping bright futures since 1986.</p>
        <a href="#courses" class="btn btn-light btn-lg px-4 rounded-pill shadow-sm">Explore Courses</a>
    </div>
</section>

<!-- About Section (Since 1986) -->
<section id="about" class="section-padding bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Education" class="img-fluid rounded shadow">
            </div>
            <div class="col-md-6">
                <h2 class="fw-bold text-primary mb-3">Since 1986</h2>
                <h3 class="mb-4">A Legacy of Excellence in Education</h3>
                <p class="text-muted">For over three decades, Rongdhonu Coaching Center has been the cornerstone of academic success in our community. We started with a vision to provide unparalleled guidance to ambitious students.</p>
                <p class="text-muted">Our experienced faculty, modern teaching methods, and student-centric approach have consistently yielded top results in board and competitive exams.</p>
                <div class="d-flex gap-4 mt-4">
                    <div><h4 class="text-primary fw-bold">35+</h4><span class="text-muted">Years Exp.</span></div>
                    <div><h4 class="text-primary fw-bold">50k+</h4><span class="text-muted">Alumni</span></div>
                    <div><h4 class="text-primary fw-bold">100+</h4><span class="text-muted">Expert Teachers</span></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Courses Section -->
<section id="courses" class="section-padding">
    <div class="container">
        <h2 class="section-title">Our Courses</h2>
        <div class="row g-4">
            @php $courses = \App\Models\Course::latest()->take(6)->get(); @endphp
            @forelse($courses as $course)
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0 transition-hover">
                    @if($course->image)
                        <img src="{{ asset('storage/'.$course->image) }}" class="card-img-top" alt="{{ $course->title }}" style="height: 200px; object-fit: cover;">
                    @else
                        <div class="bg-secondary text-white d-flex justify-content-center align-items-center" style="height: 200px;">
                            <i class="bi bi-journal-text fs-1"></i>
                        </div>
                    @endif
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-primary">{{ $course->title }}</h5>
                        <p class="card-text text-muted small">{{ Str::limit($course->description, 100) }}</p>
                    </div>
                    <div class="card-footer bg-white border-0 d-flex justify-content-between align-items-center pb-3">
                        <span class="badge bg-info text-dark"><i class="bi bi-clock"></i> {{ $course->duration }}</span>
                        <span class="fw-bold text-success">{{ $course->fee ? '$'.$course->fee : 'Free' }}</span>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center text-muted">No courses available at the moment.</div>
            @endforelse
        </div>
    </div>
</section>

<!-- Teachers Section -->
<section id="teachers" class="section-padding bg-light">
    <div class="container">
        <h2 class="section-title">Our Expert Teachers</h2>
        <div class="row g-4 justify-content-center">
            @php $teachers = \App\Models\Teacher::latest()->take(4)->get(); @endphp
            @forelse($teachers as $teacher)
            <div class="col-md-3 col-sm-6">
                <div class="card border-0 shadow-sm text-center h-100 py-4">
                    <div class="mb-3 mx-auto">
                        @if($teacher->image)
                            <img src="{{ asset('storage/'.$teacher->image) }}" class="rounded-circle shadow" width="120" height="120" style="object-fit: cover;">
                        @else
                            <div class="bg-primary text-white rounded-circle d-flex justify-content-center align-items-center mx-auto shadow" style="width: 120px; height: 120px;">
                                <i class="bi bi-person fs-1"></i>
                            </div>
                        @endif
                    </div>
                    <div class="card-body p-0">
                        <h5 class="fw-bold mb-1">{{ $teacher->name }}</h5>
                        <p class="text-muted small mb-0">{{ $teacher->designation }}</p>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center text-muted">No teachers profiles added yet.</div>
            @endforelse
        </div>
    </div>
</section>

<!-- Notices and Results Section -->
<section id="notices" class="section-padding">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6">
                <h3 class="fw-bold mb-4 border-bottom pb-2 border-primary"><i class="bi bi-megaphone text-primary"></i> Latest Notices</h3>
                <div class="list-group list-group-flush shadow-sm rounded">
                    @php $notices = \App\Models\Notice::latest('date')->take(5)->get(); @endphp
                    @forelse($notices as $notice)
                        <div class="list-group-item list-group-item-action p-3">
                            <div class="d-flex w-100 justify-content-between mb-1">
                                <h6 class="mb-0 fw-bold text-dark">{{ $notice->title }}</h6>
                                <small class="text-muted">{{ \Carbon\Carbon::parse($notice->date)->format('d M') }}</small>
                            </div>
                            <p class="mb-1 text-muted small">{{ Str::limit($notice->content, 80) }}</p>
                            @if($notice->attachment)
                                <a href="{{ asset('storage/'.$notice->attachment) }}" target="_blank" class="badge bg-secondary text-decoration-none mt-1"><i class="bi bi-paperclip"></i> View Attachment</a>
                            @endif
                        </div>
                    @empty
                        <div class="list-group-item p-4 text-center text-muted">No recent notices.</div>
                    @endforelse
                </div>
            </div>
            
            <div id="results" class="col-md-6">
                <h3 class="fw-bold mb-4 border-bottom pb-2 border-success"><i class="bi bi-trophy text-success"></i> Recent Results</h3>
                <div class="card shadow-sm border-0">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover mb-0 text-center">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Name</th>
                                        <th>Exam</th>
                                        <th>Marks</th>
                                        <th>File</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $results = \App\Models\Result::latest()->take(5)->get(); @endphp
                                    @forelse($results as $result)
                                        <tr>
                                            <td>{{ $result->student_name }}</td>
                                            <td>{{ $result->exam_name }}</td>
                                            <td class="fw-bold text-success">{{ $result->marks ?? '-' }}</td>
                                            <td>
                                                @if($result->file_path)
                                                    <a href="{{ asset('storage/'.$result->file_path) }}" target="_blank" class="btn btn-sm btn-outline-success"><i class="bi bi-download"></i></a>
                                                @else
                                                    - 
                                                @endif
                                            </td>
                                        </tr>
                                    @empty
                                        <tr><td colspan="4" class="p-4 text-muted">No results published yet.</td></tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="section-padding bg-light">
    <div class="container">
        <h2 class="section-title">Contact Us</h2>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow border-0">
                    <div class="card-body p-5">
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        <form action="{{ url('/contact') }}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Your Name *</label>
                                    <input type="text" name="name" class="form-control" required>
                                </div>
                                <div class="col-md-6 mt-3 mt-md-0">
                                    <label class="form-label fw-bold">Your Email *</label>
                                    <input type="email" name="email" class="form-control" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Subject</label>
                                <input type="text" name="subject" class="form-control">
                            </div>
                            <div class="mb-4">
                                <label class="form-label fw-bold">Message *</label>
                                <textarea name="message" class="form-control" rows="5" required></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-lg px-5 rounded-pill"><i class="bi bi-send"></i> Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
