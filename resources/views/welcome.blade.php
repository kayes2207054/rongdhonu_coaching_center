@extends('layouts.public')

@section('content')

<!-- Hero Section -->
<section id="home" class="hero-section">
    <div class="container position-relative z-index-2">
        <div class="row align-items-center min-vh-100 py-5">
            <div class="col-lg-6 text-center text-lg-start mb-5 mb-lg-0">
                <span class="badge bg-primary bg-opacity-25 text-white rounded-pill px-3 py-2 mb-4 border border-light border-opacity-25 shadow-sm" style="backdrop-filter: blur(4px);">
                    <i class="bi bi-star-fill text-warning me-1"></i> Top Rated Coaching Center
                </span>
                <h1 class="display-3 fw-bold mb-4 lh-sm text-white drop-shadow">Empowering Your <br><span class="text-accent">Bright Future</span></h1>
                <p class="lead mb-5 opacity-75 fs-5 pe-lg-5">Join over 50,000 successful students. Expert guidance, premium study materials, and a proven track record since 1986.</p>
                <div class="d-flex gap-3 justify-content-center justify-content-lg-start flex-wrap">
                    <a href="#courses" class="btn btn-primary btn-lg px-5 py-3 shadow-lg rounded-pill fw-bold"><i class="bi bi-rocket-takeoff-fill me-2"></i> Explore Courses</a>
                    <a href="#contact" class="btn btn-outline-light btn-lg px-5 py-3 rounded-pill fw-bold" style="border-width: 2px;">Contact Us</a>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1 d-none d-md-block">
                <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Students learning" class="img-fluid rounded-4 shadow-lg border border-4 border-white w-100" style="object-fit: cover; height: 500px;">
                    
                    <!-- Floating Stat 1 -->
                    <div class="position-absolute glass-card p-3 shadow-lg animate-float" style="bottom: -30px; left: -40px; width: 200px;">
                        <div class="d-flex align-items-center">
                            <div class="bg-primary rounded-circle p-2 me-3 shadow d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">
                                <i class="bi bi-people-fill fs-4 text-white"></i>
                            </div>
                            <div>
                                <h4 class="mb-0 fw-bold">50k+</h4>
                                <small class="text-white opacity-75 fw-medium">Active Students</small>
                            </div>
                        </div>
                    </div>

                    <!-- Floating Stat 2 -->
                    <div class="position-absolute glass-card p-3 shadow-lg animate-float-delayed" style="top: -20px; right: -20px; width: 180px;">
                        <div class="d-flex align-items-center">
                            <div class="bg-accent rounded-circle p-2 me-3 shadow d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">
                                <i class="bi bi-award-fill fs-4 text-white"></i>
                            </div>
                            <div>
                                <h4 class="mb-0 fw-bold">35+</h4>
                                <small class="text-white opacity-75 fw-medium">Years Exp.</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Wave Shape Divider -->
    <div class="wave-bottom">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
        </svg>
    </div>
</section>

<!-- About Section -->
<section id="about" class="section-padding bg-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                <div class="position-absolute top-0 start-0 w-100 h-100 bg-primary rounded-4 opacity-10" style="transform: translate(-20px, 20px);"></div>
                <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Education" class="img-fluid rounded-4 shadow-lg position-relative w-100" style="object-fit: cover; height: 500px;">
                <!-- Floating Badge -->
                <div class="position-absolute bottom-0 end-0 bg-white p-4 rounded-4 shadow-lg m-4 text-center border-start border-4 border-primary d-none d-md-block">
                    <h2 class="fw-bold text-primary mb-0 display-5">35+</h2>
                    <p class="text-muted fw-bold mb-0">Years of<br>Excellence</p>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="d-flex align-items-center mb-3">
                    <div class="bg-primary bg-opacity-10 p-2 rounded-circle me-3">
                        <i class="bi bi-book-half text-primary fs-4"></i>
                    </div>
                    <h6 class="text-primary fw-bold text-uppercase mb-0 tracking-wide">About Our Institute</h6>
                </div>
                <h2 class="fw-bold text-dark mb-4 display-6">A Legacy of Excellence in Education</h2>
                <p class="text-muted fs-5 mb-4 lh-lg">For over three decades, Rongdhonu Coaching Center has been the cornerstone of academic success in our community. We started with a vision to provide unparalleled guidance to ambitious students.</p>
                
                <ul class="list-unstyled mb-5">
                    <li class="d-flex align-items-center mb-3">
                        <i class="bi bi-check-circle-fill text-accent fs-4 me-3"></i>
                        <span class="fs-5 fw-medium text-dark">Expert Faculty Members</span>
                    </li>
                    <li class="d-flex align-items-center mb-3">
                        <i class="bi bi-check-circle-fill text-accent fs-4 me-3"></i>
                        <span class="fs-5 fw-medium text-dark">Modern Digital Classrooms</span>
                    </li>
                    <li class="d-flex align-items-center">
                        <i class="bi bi-check-circle-fill text-accent fs-4 me-3"></i>
                        <span class="fs-5 fw-medium text-dark">Comprehensive Study Materials</span>
                    </li>
                </ul>
                <a href="#courses" class="btn btn-outline-primary btn-lg rounded-pill px-5 fw-bold border-2">Discover More <i class="bi bi-arrow-right ms-2"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- Statistics Section -->
<section class="py-5 bg-primary text-white position-relative" style="background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);">
    <div class="container py-4 position-relative z-index-1">
        <div class="row g-4 text-center">
            <div class="col-md-3 col-6">
                <i class="bi bi-mortarboard-fill display-4 mb-3 opacity-75"></i>
                <h2 class="display-4 fw-bold mb-1 stat-counter" data-target="50000">0</h2>
                <p class="fs-5 fw-medium opacity-75 mb-0">Happy Students</p>
            </div>
            <div class="col-md-3 col-6">
                <i class="bi bi-person-video3 display-4 mb-3 opacity-75"></i>
                <h2 class="display-4 fw-bold mb-1 stat-counter" data-target="{{ \App\Models\Teacher::count() > 0 ? \App\Models\Teacher::count() : 100 }}">0</h2>
                <p class="fs-5 fw-medium opacity-75 mb-0">Expert Teachers</p>
            </div>
            <div class="col-md-3 col-6">
                <i class="bi bi-journal-richtext display-4 mb-3 opacity-75"></i>
                <h2 class="display-4 fw-bold mb-1 stat-counter" data-target="{{ \App\Models\Course::count() > 0 ? \App\Models\Course::count() : 50 }}">0</h2>
                <p class="fs-5 fw-medium opacity-75 mb-0">Premium Courses</p>
            </div>
            <div class="col-md-3 col-6">
                <i class="bi bi-award-fill display-4 mb-3 opacity-75"></i>
                <h2 class="display-4 fw-bold mb-1 stat-counter" data-target="35">0</h2>
                <p class="fs-5 fw-medium opacity-75 mb-0">Years of Success</p>
            </div>
        </div>
    </div>
    
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const counters = document.querySelectorAll('.stat-counter');
            const speed = 200;
            const animate = (counter) => {
                const updateCount = () => {
                    const target = +counter.getAttribute('data-target');
                    const count = +counter.innerText;
                    const inc = target / speed;
                    if (count < target) {
                        counter.innerText = Math.ceil(count + inc);
                        setTimeout(updateCount, 15);
                    } else {
                        counter.innerText = target + (target == 50000 ? '+' : '');
                    }
                };
                updateCount();
            };
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        animate(entry.target);
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.5 });
            
            counters.forEach(counter => observer.observe(counter));
        });
    </script>
</section>

<!-- Courses Section -->
<section id="courses" class="section-padding bg-light-gray">
    <div class="container">
        <div class="text-center mb-5">
            <h6 class="text-accent fw-bold text-uppercase mb-2 tracking-wide"><i class="bi bi-book-half me-2"></i>What We Offer</h6>
            <h2 class="display-5 fw-bold text-dark">Our Premium Courses</h2>
        </div>
        
        <div class="row g-4 mt-2">
            @php $courses = \App\Models\Course::latest()->take(6)->get(); @endphp
            @forelse($courses as $course)
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 overflow-hidden transition-hover border-0 rounded-4 shadow-sm bg-white course-card">
                    <div class="position-relative overflow-hidden group">
                        @if($course->image)
                            <img src="{{ asset('storage/'.$course->image) }}" class="w-100 transition-hover-image" alt="{{ $course->title }}" style="height: 240px; object-fit: cover;">
                        @else
                            <div class="bg-primary bg-opacity-10 w-100 d-flex justify-content-center align-items-center text-primary transition-hover-image" style="height: 240px;">
                                <i class="bi bi-journal-bookmark-fill display-1 opacity-50"></i>
                            </div>
                        @endif
                        <div class="position-absolute top-0 end-0 m-3 z-index-2">
                            <span class="badge bg-white text-primary shadow-lg px-4 py-2 rounded-pill fw-bold fs-6">{{ $course->fee ? '$'.$course->fee : 'Free' }}</span>
                        </div>
                    </div>
                    <div class="card-body p-4 position-relative z-index-2 bg-white d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="badge bg-soft-blue text-primary rounded-pill px-3 py-2 fw-medium"><i class="bi bi-clock me-1"></i> {{ $course->duration }}</span>
                            <span class="text-warning"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></span>
                        </div>
                        <h4 class="card-title fw-bold text-dark mb-3">{{ $course->title }}</h4>
                        <p class="card-text text-muted mb-4 flex-grow-1">{{ Str::limit($course->description, 100) }}</p>
                        
                        <div class="d-flex align-items-center justify-content-between border-top pt-4 mt-auto">
                            <div class="d-flex align-items-center">
                                <div class="bg-light rounded-circle d-flex align-items-center justify-content-center me-2 text-primary" style="width: 40px; height: 40px;">
                                    <i class="bi bi-person-fill fs-5"></i>
                                </div>
                                <span class="fw-bold text-dark small">Expert Teacher</span>
                            </div>
                            <a href="#contact" class="btn btn-outline-primary rounded-pill px-4 btn-sm fw-bold">Enroll Now</a>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center text-muted py-5">
                <i class="bi bi-inbox display-1 text-light mb-3"></i>
                <h4>No courses available at the moment.</h4>
            </div>
            @endforelse
        </div>
    </div>
</section>

<!-- Teachers Section -->
<section id="teachers" class="section-padding bg-white">
    <div class="container">
        <div class="text-center mb-5">
            <h6 class="text-accent fw-bold text-uppercase mb-2 tracking-wide"><i class="bi bi-people-fill me-2"></i>Our Faculty</h6>
            <h2 class="display-5 fw-bold text-dark">Meet Our Experts</h2>
        </div>
        
        <div class="row g-4 mt-2 justify-content-center">
            @php $teachers = \App\Models\Teacher::latest()->take(4)->get(); @endphp
            @forelse($teachers as $teacher)
            <div class="col-lg-3 col-md-6">
                <div class="card border-0 shadow-sm transition-hover text-center h-100 rounded-4 bg-light-gray">
                    <div class="card-body p-5">
                        <div class="mb-4 mx-auto position-relative d-inline-block">
                            <div class="position-absolute top-50 start-50 translate-middle bg-primary rounded-circle" style="width: 140px; height: 140px; opacity: 0.1;"></div>
                            @if($teacher->image)
                                <img src="{{ asset('storage/'.$teacher->image) }}" class="rounded-circle shadow position-relative z-index-2 transition-hover-image" width="120" height="120" style="object-fit: cover; border: 4px solid white;">
                            @else
                                <div class="bg-primary text-white rounded-circle d-flex justify-content-center align-items-center mx-auto shadow position-relative z-index-2 transition-hover-image" style="width: 120px; height: 120px; border: 4px solid white;">
                                    <i class="bi bi-person display-3"></i>
                                </div>
                            @endif
                        </div>
                        <h4 class="fw-bold mb-1 text-dark">{{ $teacher->name }}</h4>
                        <p class="text-primary fw-medium mb-3">{{ $teacher->designation }}</p>
                        <div class="d-flex justify-content-center gap-2 mt-3">
                            <a href="#" class="btn btn-light text-primary rounded-circle shadow-sm" style="width: 40px; height: 40px; padding: 8px;"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="btn btn-light text-info rounded-circle shadow-sm" style="width: 40px; height: 40px; padding: 8px;"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="btn btn-light text-danger rounded-circle shadow-sm" style="width: 40px; height: 40px; padding: 8px;"><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center text-muted py-5">No teachers profiles added yet.</div>
            @endforelse
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section id="testimonials" class="section-padding bg-dark position-relative" style="background: var(--dark) url('https://www.transparenttextures.com/patterns/cubes.png');">
    <div class="container position-relative z-index-2">
        <div class="text-center mb-5">
            <h6 class="text-accent fw-bold text-uppercase mb-2 tracking-wide"><i class="bi bi-chat-quote-fill me-2"></i>Reviews</h6>
            <h2 class="display-5 fw-bold text-white">What Our Students Say</h2>
        </div>
        
        <div class="row g-4 mt-2">
            <!-- Dummy Testimonial 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="card bg-white border-0 rounded-4 h-100 p-4 transition-hover shadow-lg">
                    <div class="text-warning mb-3 fs-5">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p class="fs-5 fst-italic mb-4 text-muted lh-base">"The teachers here are amazing. They provided me with the best guidance and study materials. I couldn't have achieved my goals without them!"</p>
                    <div class="d-flex align-items-center mt-auto border-top pt-3">
                        <img src="https://ui-avatars.com/api/?name=Sarah+J&background=10B981&color=fff" class="rounded-circle me-3 shadow-sm" width="50" alt="Sarah J">
                        <div>
                            <h6 class="fw-bold text-dark mb-0">Sarah Jenkins</h6>
                            <small class="text-primary fw-medium">University Student</small>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Dummy Testimonial 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="card bg-white border-0 rounded-4 h-100 p-4 transition-hover shadow-lg">
                    <div class="text-warning mb-3 fs-5">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p class="fs-5 fst-italic mb-4 text-muted lh-base">"Rongdhonu Coaching Center changed my life. The premium courses and expert faculty helped me score top marks in my exams."</p>
                    <div class="d-flex align-items-center mt-auto border-top pt-3">
                        <img src="https://ui-avatars.com/api/?name=David+M&background=2563EB&color=fff" class="rounded-circle me-3 shadow-sm" width="50" alt="David M">
                        <div>
                            <h6 class="fw-bold text-dark mb-0">David Miller</h6>
                            <small class="text-primary fw-medium">Medical Student</small>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Dummy Testimonial 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="card bg-white border-0 rounded-4 h-100 p-4 transition-hover shadow-lg">
                    <div class="text-warning mb-3 fs-5">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p class="fs-5 fst-italic mb-4 text-muted lh-base">"The digital classrooms and interactive sessions make learning so much easier. Highly recommended for any serious student."</p>
                    <div class="d-flex align-items-center mt-auto border-top pt-3">
                        <img src="https://ui-avatars.com/api/?name=Emily+R&background=4F46E5&color=fff" class="rounded-circle me-3 shadow-sm" width="50" alt="Emily R">
                        <div>
                            <h6 class="fw-bold text-dark mb-0">Emily Rose</h6>
                            <small class="text-primary fw-medium">Engineering Student</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Notices and Results Section -->
<section id="notices" class="section-padding bg-white">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6">
                <h3 class="fw-bold mb-4"><i class="bi bi-megaphone-fill text-primary me-2"></i> Latest Updates</h3>
                <div class="card border-0 shadow-sm overflow-hidden">
                    <div class="list-group list-group-flush">
                        @php $notices = \App\Models\Notice::latest('date')->take(5)->get(); @endphp
                        @forelse($notices as $notice)
                            <div class="list-group-item p-4 border-bottom border-light hover-bg-light transition-all">
                                <div class="d-flex w-100 justify-content-between align-items-start mb-2">
                                    <h5 class="mb-0 fw-bold text-dark">{{ $notice->title }}</h5>
                                    <span class="badge bg-light text-primary border px-3 py-2 rounded-pill">{{ \Carbon\Carbon::parse($notice->date)->format('M d, Y') }}</span>
                                </div>
                                <p class="mb-3 text-muted">{{ Str::limit($notice->content, 100) }}</p>
                                @if($notice->attachment)
                                    <a href="{{ asset('storage/'.$notice->attachment) }}" target="_blank" class="btn btn-sm btn-outline-primary rounded-pill px-3"><i class="bi bi-download me-1"></i> Download File</a>
                                @endif
                            </div>
                        @empty
                            <div class="list-group-item p-5 text-center text-muted">No recent updates available.</div>
                        @endforelse
                    </div>
                </div>
            </div>
            
            <div id="results" class="col-lg-6">
                <h3 class="fw-bold mb-4"><i class="bi bi-trophy-fill text-accent me-2"></i> Top Achievers</h3>
                <div class="card shadow-sm border-0 overflow-hidden">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle mb-0 text-center">
                                <thead class="table-light">
                                    <tr>
                                        <th class="py-3 text-start ps-4">Student</th>
                                        <th class="py-3">Exam</th>
                                        <th class="py-3 text-accent">Marks</th>
                                        <th class="py-3 pe-4">Result</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $results = \App\Models\Result::latest()->take(5)->get(); @endphp
                                    @forelse($results as $result)
                                        <tr>
                                            <td class="fw-medium text-dark text-start ps-4 py-3">{{ $result->student_name }}</td>
                                            <td class="text-muted py-3">{{ $result->exam_name }}</td>
                                            <td class="fw-bold text-accent fs-5 py-3">{{ $result->marks ?? '-' }}</td>
                                            <td class="pe-4 py-3">
                                                @if($result->file_path)
                                                    <a href="{{ asset('storage/'.$result->file_path) }}" target="_blank" class="btn btn-sm btn-light text-primary rounded-circle shadow-sm" style="width: 32px; height: 32px; padding: 4px;"><i class="bi bi-file-earmark-pdf-fill"></i></a>
                                                @else
                                                    <span class="text-muted">-</span> 
                                                @endif
                                            </td>
                                        </tr>
                                    @empty
                                        <tr><td colspan="4" class="p-5 text-muted">No results published yet.</td></tr>
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
<section id="contact" class="section-padding bg-light-gray">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7 text-center mb-5">
                <h2 class="section-title mb-3">Get In Touch</h2>
                <p class="text-muted fs-5">Have questions about our programs or admissions? Send us a message and our team will get back to you shortly.</p>
            </div>
            <div class="col-lg-8">
                <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
                    <div class="card-body p-5">
                        @if(session('success'))
                            <div class="alert alert-success border-0 bg-success text-white rounded-3 shadow-sm">{{ session('success') }}</div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger border-0 bg-danger text-white rounded-3 shadow-sm">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ url('/contact') }}" method="POST">
                            @csrf
                            <div class="row g-4 mb-4">
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold text-dark">Full Name <span class="text-danger">*</span></label>
                                    <input type="text" name="name" class="form-control form-control-lg bg-light border-0" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold text-dark">Email Address <span class="text-danger">*</span></label>
                                    <input type="email" name="email" class="form-control form-control-lg bg-light border-0" required>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label class="form-label fw-semibold text-dark">Subject</label>
                                <input type="text" name="subject" class="form-control form-control-lg bg-light border-0">
                            </div>
                            <div class="mb-5">
                                <label class="form-label fw-semibold text-dark">Message <span class="text-danger">*</span></label>
                                <textarea name="message" class="form-control form-control-lg bg-light border-0" rows="5" required></textarea>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg rounded-pill shadow-sm py-3 fs-5"><i class="bi bi-send-fill me-2"></i> Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
