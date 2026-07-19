@extends('layouts.public')

@section('content')

<!-- Hero Section -->
<section id="home" class="hero-section">
    <div class="container position-relative" style="z-index: 2;">
        <span class="hero-badge shadow-sm"><i class="bi bi-award-fill text-warning me-2"></i> Celebrating 38+ Years of Educational Excellence</span>
        <h1 class="display-3 fw-extrabold mb-4 text-white">Shaping Bright Futures & Empowering Success</h1>
        <p class="lead mb-5 mx-auto text-white-50" style="max-width: 720px; font-size: 1.25rem;">Providing unmatched academic guidance, top-tier faculty, and a supportive environment for every aspiring student since 1986.</p>
        <div class="d-flex justify-content-center gap-3">
            <a href="#courses" class="btn btn-light btn-lg px-4 py-3 rounded-pill fw-bold shadow-sm text-primary"><i class="bi bi-book me-2"></i>Explore Courses</a>
            <a href="#contact" class="btn btn-outline-light btn-lg px-4 py-3 rounded-pill fw-bold"><i class="bi bi-envelope me-2"></i>Get in Touch</a>
        </div>
    </div>
</section>

<!-- About Section (Since 1986) -->
<section id="about" class="section-padding bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Education" class="img-fluid rounded-4 shadow-lg">
                </div>
            </div>
            <div class="col-md-6 ps-lg-5">
                <span class="text-primary fw-bold text-uppercase tracking-wider small">About Our Institution</span>
                <h2 class="fw-bold text-dark mt-1 mb-3">A Legacy of Academic Excellence Since 1986</h2>
                <p class="text-muted leading-relaxed">For over three decades, Rongdhonu Coaching Center has been the benchmark of academic success in Khulna. We started with a mission to ignite curiosity and foster deep analytical thinking in young minds.</p>
                <p class="text-muted leading-relaxed">Our experienced faculty members employ interactive learning methodologies, continuous evaluations, and dedicated mentoring to help students excel in board and competitive examinations.</p>
                <div class="row g-3 mt-3">
                    <div class="col-4">
                        <div class="p-3 bg-white rounded-3 shadow-sm text-center border-start border-4 border-primary">
                            <h3 class="text-primary fw-bold mb-0">38+</h3>
                            <span class="text-muted small">Years Exp.</span>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="p-3 bg-white rounded-3 shadow-sm text-center border-start border-4 border-success">
                            <h3 class="text-success fw-bold mb-0">50k+</h3>
                            <span class="text-muted small">Alumni</span>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="p-3 bg-white rounded-3 shadow-sm text-center border-start border-4 border-info">
                            <h3 class="text-info fw-bold mb-0">100+</h3>
                            <span class="text-muted small">Teachers</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Courses Section -->
<section id="courses" class="section-padding">
    <div class="container">
        <h2 class="section-title">Our Featured Courses</h2>
        <div class="row g-4">
            @php $courses = \App\Models\Course::latest()->take(6)->get(); @endphp
            @forelse($courses as $course)
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0 transition-hover">
                    @if($course->image)
                        <img src="{{ asset('storage/'.$course->image) }}" class="card-img-top" alt="{{ $course->title }}" style="height: 210px; object-fit: cover;">
                    @else
                        <div class="bg-gradient bg-primary text-white d-flex justify-content-center align-items-center" style="height: 210px;">
                            <i class="bi bi-journal-bookmark-fill display-3"></i>
                        </div>
                    @endif
                    <div class="card-body p-4">
                        <span class="badge bg-primary-subtle text-primary mb-2">Academic</span>
                        <h5 class="card-title fw-bold text-dark mb-2">{{ $course->title }}</h5>
                        <p class="card-text text-muted small">{{ Str::limit($course->description, 110) }}</p>
                    </div>
                    <div class="card-footer bg-white border-0 d-flex justify-content-between align-items-center px-4 pb-4">
                        <span class="badge bg-light text-dark border"><i class="bi bi-clock me-1 text-primary"></i> {{ $course->duration }}</span>
                        <span class="fw-bold fs-5 text-success">{{ $course->fee ? '$'.$course->fee : 'Free' }}</span>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center text-muted py-5">
                <i class="bi bi-journal-x fs-1 text-secondary mb-2 d-block"></i>
                No courses available at the moment.
            </div>
            @endforelse
        </div>
    </div>
</section>

<!-- Teachers Section -->
<section id="teachers" class="section-padding bg-light">
    <div class="container">
        <h2 class="section-title">Our Dedicated Faculty</h2>
        <div class="row g-4 justify-content-center">
            @php $teachers = \App\Models\Teacher::latest()->take(4)->get(); @endphp
            @forelse($teachers as $teacher)
            <div class="col-md-3 col-sm-6">
                <div class="card border-0 shadow-sm text-center h-100 py-4 teacher-card">
                    <div class="mb-3 mx-auto overflow-hidden rounded-circle" style="width: 120px; height: 120px;">
                        @if($teacher->image)
                            <img src="{{ asset('storage/'.$teacher->image) }}" width="120" height="120" style="object-fit: cover;">
                        @else
                            <div class="bg-primary text-white rounded-circle d-flex justify-content-center align-items-center mx-auto shadow" style="width: 120px; height: 120px;">
                                <i class="bi bi-person-circle fs-1"></i>
                            </div>
                        @endif
                    </div>
                    <div class="card-body p-2">
                        <h5 class="fw-bold text-dark mb-1">{{ $teacher->name }}</h5>
                        <span class="badge bg-info-subtle text-info fw-semibold">{{ $teacher->designation }}</span>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center text-muted py-4">No teachers profiles added yet.</div>
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
