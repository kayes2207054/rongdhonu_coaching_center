@extends('layouts.public')

@section('content')

<!-- Hero Section -->
<section id="home" class="hero-section">
    <div class="container position-relative z-index-2">
        <div class="row align-items-center min-vh-100 py-5">
            <div class="col-lg-6 text-center text-lg-start mb-5 mb-lg-0">
                <span class="badge bg-primary bg-opacity-25 text-white rounded-pill px-3 py-2 mb-4 border border-light border-opacity-25 shadow-sm" style="backdrop-filter: blur(4px);">
                    <i class="bi bi-award-fill text-warning me-1"></i> Celebrating 38+ Years of Educational Excellence
                </span>
                <h1 class="display-3 fw-bold mb-4 lh-sm text-white drop-shadow">Shaping Bright Futures & <br><span class="text-accent">Empowering Success</span></h1>
                <p class="lead mb-5 opacity-75 fs-5 pe-lg-5">Providing unmatched academic guidance, top-tier faculty, and a supportive environment for every aspiring student since 1986.</p>
                <div class="d-flex gap-3 justify-content-center justify-content-lg-start flex-wrap">
                    <a href="#courses" class="btn btn-primary btn-lg px-5 py-3 shadow-lg rounded-pill fw-bold"><i class="bi bi-rocket-takeoff-fill me-2"></i> Explore Courses</a>
                    <a href="#contact" class="btn btn-outline-light btn-lg px-5 py-3 rounded-pill fw-bold" style="border-width: 2px;"><i class="bi bi-envelope-fill me-2"></i> Contact Us</a>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1 d-none d-md-block">
                <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Students learning interactively in a classroom" class="img-fluid rounded-4 shadow-lg border border-4 border-white w-100" style="object-fit: cover; height: 480px;">
                    
                    <!-- Floating Stat 1 -->
                    <div class="position-absolute glass-card p-3 shadow-lg animate-float" style="bottom: -25px; left: -30px; width: 200px; z-index: 3;">
                        <div class="d-flex align-items-center">
                            <div class="bg-primary rounded-circle p-2 me-3 shadow d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">
                                <i class="bi bi-people-fill fs-4 text-white"></i>
                            </div>
                            <div>
                                <h4 class="mb-0 fw-bold">50k+</h4>
                                <small class="text-white opacity-75 fw-medium">Successful Alumni</small>
                            </div>
                        </div>
                    </div>

                    <!-- Floating Stat 2 -->
                    <div class="position-absolute glass-card p-3 shadow-lg animate-float-delayed" style="top: -20px; right: -20px; width: 180px; z-index: 3;">
                        <div class="d-flex align-items-center">
                            <div class="bg-accent rounded-circle p-2 me-3 shadow d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">
                                <i class="bi bi-trophy-fill fs-4 text-white"></i>
                            </div>
                            <div>
                                <h4 class="mb-0 fw-bold">38+</h4>
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

<!-- About Section (Cleaned & Unified) -->
<section id="about" class="section-padding bg-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                <div class="position-absolute top-0 start-0 w-100 h-100 bg-primary rounded-4 opacity-10" style="transform: translate(-15px, 15px);"></div>
                <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Students engaged in coaching lesson" class="img-fluid rounded-4 shadow-lg position-relative w-100" style="object-fit: cover; height: 480px;">
                
                <!-- Floating Badge -->
                <div class="position-absolute bottom-0 end-0 bg-white p-4 rounded-4 shadow-lg m-4 text-center border-start border-4 border-primary d-none d-md-block">
                    <h2 class="fw-extrabold text-primary mb-0 display-5">38+</h2>
                    <p class="text-muted fw-bold mb-0">Years of<br>Excellence</p>
                </div>
            </div>
            
            <div class="col-lg-5 offset-lg-1">
                <div class="d-flex align-items-center mb-3">
                    <div class="bg-primary bg-opacity-10 p-2 rounded-circle me-3">
                        <i class="bi bi-book-half text-primary fs-4"></i>
                    </div>
                    <span class="text-primary fw-bold text-uppercase tracking-wider small">About Our Institution</span>
                </div>
                
                <h2 class="fw-bold text-dark mb-4 display-6">A Legacy of Academic Excellence Since 1986</h2>
                <p class="text-muted fs-5 mb-3 lh-lg">For over three decades, Rongdhonu Coaching Center has been the cornerstone of academic success in Khulna. We started with a mission to ignite curiosity, foster analytical thinking, and empower students to reach their highest potential.</p>
                
                <ul class="list-unstyled mb-4">
                    <li class="d-flex align-items-center mb-3">
                        <i class="bi bi-check-circle-fill text-accent fs-5 me-3"></i>
                        <span class="fs-6 fw-semibold text-dark">Expert & Experienced Faculty Members</span>
                    </li>
                    <li class="d-flex align-items-center mb-3">
                        <i class="bi bi-check-circle-fill text-accent fs-5 me-3"></i>
                        <span class="fs-6 fw-semibold text-dark">Interactive & Modern Digital Classrooms</span>
                    </li>
                    <li class="d-flex align-items-center mb-3">
                        <i class="bi bi-check-circle-fill text-accent fs-5 me-3"></i>
                        <span class="fs-6 fw-semibold text-dark">Comprehensive & Continuously Updated Study Materials</span>
                    </li>
                    <li class="d-flex align-items-center">
                        <i class="bi bi-check-circle-fill text-accent fs-5 me-3"></i>
                        <span class="fs-6 fw-semibold text-dark">Personalized Mentorship & Exam Evaluation</span>
                    </li>
                </ul>

                <div class="row g-3 mb-4">
                    <div class="col-4">
                        <div class="p-3 bg-light rounded-3 text-center border-start border-4 border-primary shadow-sm">
                            <h3 class="text-primary fw-bold mb-0">38+</h3>
                            <span class="text-muted small fw-medium">Years Exp.</span>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="p-3 bg-light rounded-3 text-center border-start border-4 border-success shadow-sm">
                            <h3 class="text-success fw-bold mb-0">50k+</h3>
                            <span class="text-muted small fw-medium">Alumni</span>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="p-3 bg-light rounded-3 text-center border-start border-4 border-info shadow-sm">
                            <h3 class="text-info fw-bold mb-0">100+</h3>
                            <span class="text-muted small fw-medium">Teachers</span>
                        </div>
                    </div>
                </div>

                <a href="#courses" class="btn btn-primary btn-lg rounded-pill px-5 fw-bold shadow-sm">Discover Courses <i class="bi bi-arrow-right ms-2"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- Statistics Counter Section -->
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
                <h2 class="display-4 fw-bold mb-1 stat-counter" data-target="38">0</h2>
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
                    const inc = Math.max(1, Math.ceil(target / speed));
                    if (count < target) {
                        counter.innerText = Math.min(target, count + inc);
                        setTimeout(updateCount, 15);
                    } else {
                        counter.innerText = target + (target >= 50000 ? '+' : '');
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
            }, { threshold: 0.4 });
            
            counters.forEach(counter => observer.observe(counter));
        });
    </script>
</section>

<!-- Courses Section -->
<section id="courses" class="section-padding bg-light-gray">
    <div class="container">
        <div class="text-center mb-5">
            <h6 class="text-accent fw-bold text-uppercase mb-2 tracking-wide"><i class="bi bi-book-half me-2"></i>What We Offer</h6>
            <h2 class="display-5 fw-bold text-dark">Our Featured Courses</h2>
            <p class="text-muted fs-5 col-lg-6 mx-auto">Explore our structured academic programs tailored for success in school, board, and competitive examinations.</p>
        </div>
        
        <div class="row g-4">
            @php $courses = \App\Models\Course::latest()->take(6)->get(); @endphp
            @forelse($courses as $course)
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 rounded-4 shadow-sm bg-white course-card transition-hover overflow-hidden">
                    <div class="position-relative overflow-hidden group">
                        @if($course->image)
                            <img src="{{ asset('storage/'.$course->image) }}" class="w-100 transition-hover-image" alt="{{ $course->title }}" style="height: 230px; object-fit: cover;">
                        @else
                            <div class="bg-primary bg-opacity-10 w-100 d-flex justify-content-center align-items-center text-primary transition-hover-image" style="height: 230px;">
                                <i class="bi bi-journal-bookmark-fill display-1 opacity-50"></i>
                            </div>
                        @endif
                        <div class="position-absolute top-0 end-0 m-3 z-index-2">
                            <span class="badge bg-white text-primary shadow px-3 py-2 rounded-pill fw-bold fs-6">{{ $course->fee ? '৳ ' . number_format($course->fee) : 'Free' }}</span>
                        </div>
                    </div>
                    <div class="card-body p-4 d-flex flex-column">
                        <div class="mb-2">
                            <span class="badge bg-primary bg-opacity-10 text-primary fw-semibold px-3 py-1 rounded-pill">Academic Program</span>
                        </div>
                        <h4 class="card-title fw-bold text-dark mb-3">{{ $course->title }}</h4>
                        <p class="card-text text-muted mb-4 flex-grow-1 lh-relaxed">{{ Str::limit($course->description, 110) }}</p>
                    </div>
                    <div class="card-footer bg-white border-top border-light d-flex justify-content-between align-items-center px-4 py-3">
                        <span class="badge bg-soft-blue text-primary rounded-pill px-3 py-2 fw-medium"><i class="bi bi-clock me-1"></i> {{ $course->duration }}</span>
                        <button type="button" class="btn btn-outline-primary rounded-pill px-4 btn-sm fw-bold enroll-btn" data-course-id="{{ $course->id }}" data-course-title="{{ $course->title }}" data-bs-toggle="modal" data-bs-target="#enrollModal">Enroll Now</button>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center text-muted py-5">
                <i class="bi bi-journal-x display-1 text-secondary opacity-50 mb-3"></i>
                <h4 class="fw-semibold">No courses available at the moment.</h4>
                <p>Please check back soon for updated course schedules.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>

<!-- Teachers / Faculty Section -->
<section id="teachers" class="section-padding bg-white">
    <div class="container">
        <div class="text-center mb-5">
            <h6 class="text-accent fw-bold text-uppercase mb-2 tracking-wide"><i class="bi bi-people-fill me-2"></i>Our Faculty</h6>
            <h2 class="display-5 fw-bold text-dark">Our Dedicated Experts</h2>
            <p class="text-muted fs-5 col-lg-6 mx-auto">Learn from experienced educators passionate about mentoring and guiding students toward excellence.</p>
        </div>
        
        <div class="row g-4 justify-content-center">
            @php $teachers = \App\Models\Teacher::orderByRaw('image IS NULL')->latest()->take(8)->get(); @endphp
            @forelse($teachers as $teacher)
            <div class="col-lg-3 col-md-6">
                <div class="card border-0 shadow-sm transition-hover text-center h-100 rounded-4 bg-light py-4 px-3">
                    <div class="mb-4 mx-auto position-relative d-inline-block">
                        <div class="position-absolute top-50 start-50 translate-middle bg-primary rounded-circle" style="width: 130px; height: 130px; opacity: 0.1;"></div>
                        @if($teacher->image)
                            <img src="{{ asset('storage/'.$teacher->image) }}" class="rounded-circle shadow position-relative z-index-2 transition-hover-image" width="120" height="120" alt="{{ $teacher->name }}" style="object-fit: cover; border: 4px solid white;">
                        @else
                            <div class="bg-primary text-white rounded-circle d-flex justify-content-center align-items-center mx-auto shadow position-relative z-index-2 transition-hover-image" style="width: 120px; height: 120px; border: 4px solid white;">
                                <i class="bi bi-person display-3"></i>
                            </div>
                        @endif
                    </div>
                    <div class="card-body p-2">
                        <h5 class="fw-bold mb-2 text-dark">{{ $teacher->name }}</h5>
                        <span class="badge bg-primary bg-opacity-10 text-primary fw-semibold px-3 py-2 rounded-pill mb-3">{{ $teacher->designation }}</span>
                        <div class="d-flex justify-content-center gap-2 mt-2">
                            <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" class="btn btn-light text-primary rounded-circle shadow-sm" style="width: 38px; height: 38px; padding: 7px;" aria-label="{{ $teacher->name }} Facebook Profile" title="Facebook"><i class="bi bi-facebook"></i></a>
                            <a href="https://twitter.com" target="_blank" rel="noopener noreferrer" class="btn btn-light text-info rounded-circle shadow-sm" style="width: 38px; height: 38px; padding: 7px;" aria-label="{{ $teacher->name }} Twitter Profile" title="Twitter"><i class="bi bi-twitter-x"></i></a>
                            <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="btn btn-light text-primary rounded-circle shadow-sm" style="width: 38px; height: 38px; padding: 7px;" aria-label="{{ $teacher->name }} LinkedIn Profile" title="LinkedIn"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center text-muted py-5">
                <i class="bi bi-person-x display-1 text-secondary opacity-50 mb-3"></i>
                <h4 class="fw-semibold">No faculty profiles available right now.</h4>
            </div>
            @endforelse
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section id="testimonials" class="section-padding bg-dark position-relative" style="background: var(--dark);">
    <div class="container position-relative z-index-2">
        <div class="text-center mb-5">
            <h6 class="text-accent fw-bold text-uppercase mb-2 tracking-wide"><i class="bi bi-chat-quote-fill me-2"></i>Reviews</h6>
            <h2 class="display-5 fw-bold text-white">What Our Students Say</h2>
            <p class="text-white-50 fs-5 col-lg-6 mx-auto">Read inspiring stories from students who achieved academic success with us.</p>
        </div>
        
        <div class="row g-4">
            <!-- Testimonial 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="card bg-white border-0 rounded-4 h-100 p-4 transition-hover shadow-lg">
                    <div class="text-warning mb-3 fs-5">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p class="fs-6 fst-italic mb-4 text-muted lh-base">"The teachers at Rongdhonu are amazing. They provided me with clear concept clarity and structured study materials. I couldn't have achieved top marks without their mentorship!"</p>
                    <div class="d-flex align-items-center mt-auto border-top pt-3">
                        <img src="https://ui-avatars.com/api/?name=Sarah+J&background=10B981&color=fff" class="rounded-circle me-3 shadow-sm" width="48" height="48" alt="Sarah Jenkins">
                        <div>
                            <h6 class="fw-bold text-dark mb-0">Sarah Jenkins</h6>
                            <small class="text-primary fw-medium">KUET Student</small>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Testimonial 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="card bg-white border-0 rounded-4 h-100 p-4 transition-hover shadow-lg">
                    <div class="text-warning mb-3 fs-5">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p class="fs-6 fst-italic mb-4 text-muted lh-base">"Rongdhonu Coaching Center truly elevated my academic journey. The weekly model tests prepared me thoroughly for competitive exams."</p>
                    <div class="d-flex align-items-center mt-auto border-top pt-3">
                        <img src="https://ui-avatars.com/api/?name=Tanvir+A&background=2563EB&color=fff" class="rounded-circle me-3 shadow-sm" width="48" height="48" alt="Tanvir Ahmed">
                        <div>
                            <h6 class="fw-bold text-dark mb-0">Tanvir Ahmed</h6>
                            <small class="text-primary fw-medium">Medical Candidate</small>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Testimonial 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="card bg-white border-0 rounded-4 h-100 p-4 transition-hover shadow-lg">
                    <div class="text-warning mb-3 fs-5">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p class="fs-6 fst-italic mb-4 text-muted lh-base">"The interactive sessions and personal care from faculty members made difficult topics easy to grasp. Highly recommended for all students!"</p>
                    <div class="d-flex align-items-center mt-auto border-top pt-3">
                        <img src="https://ui-avatars.com/api/?name=Emily+R&background=4F46E5&color=fff" class="rounded-circle me-3 shadow-sm" width="48" height="48" alt="Emily Rose">
                        <div>
                            <h6 class="fw-bold text-dark mb-0">Emily Rose</h6>
                            <small class="text-primary fw-medium">Engineering Aspirant</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Notices & Results Section -->
<section id="notices" class="section-padding bg-white">
    <div class="container">
        <div class="row g-5">
            <!-- Notices Column -->
            <div class="col-lg-6">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h3 class="fw-bold text-dark mb-0"><i class="bi bi-megaphone-fill text-primary me-2"></i> Latest Updates</h3>
                    <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill fw-semibold">Announcements</span>
                </div>
                <div class="card border-0 shadow-sm overflow-hidden rounded-4">
                    <div class="list-group list-group-flush">
                        @php $notices = \App\Models\Notice::latest('date')->take(5)->get(); @endphp
                        @forelse($notices as $notice)
                            <div class="list-group-item p-4 border-bottom border-light hover-bg-light transition-all">
                                <div class="d-flex w-100 justify-content-between align-items-start mb-2 gap-2">
                                    <h5 class="mb-0 fw-bold text-dark fs-6">{{ $notice->title }}</h5>
                                    <span class="badge bg-light text-primary border px-3 py-2 rounded-pill fw-medium shrink-0"><i class="bi bi-calendar3 me-1"></i> {{ \Carbon\Carbon::parse($notice->date)->format('M d, Y') }}</span>
                                </div>
                                <p class="mb-3 text-muted small lh-relaxed">{{ Str::limit($notice->content, 120) }}</p>
                                @if($notice->attachment)
                                    <a href="{{ asset('storage/'.$notice->attachment) }}" target="_blank" class="btn btn-sm btn-outline-primary rounded-pill px-3 fw-semibold"><i class="bi bi-download me-1"></i> Download Notice PDF</a>
                                @endif
                            </div>
                        @empty
                            <div class="list-group-item p-5 text-center text-muted">
                                <i class="bi bi-bell-slash fs-1 text-secondary opacity-50 d-block mb-2"></i>
                                No recent updates available.
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
            
            <!-- Results Column -->
            <div id="results" class="col-lg-6">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h3 class="fw-bold text-dark mb-0"><i class="bi bi-trophy-fill text-accent me-2"></i> Top Achievers</h3>
                    <span class="badge bg-success bg-opacity-10 text-success px-3 py-2 rounded-pill fw-semibold">Published Results</span>
                </div>
                <div class="card shadow-sm border-0 overflow-hidden rounded-4">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle mb-0 text-center">
                                <thead class="table-light">
                                    <tr>
                                        <th class="py-3 text-start ps-4">Student</th>
                                        <th class="py-3">Exam Title</th>
                                        <th class="py-3 text-accent">Marks</th>
                                        <th class="py-3 pe-4">File</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $results = \App\Models\Result::latest()->take(5)->get(); @endphp
                                    @forelse($results as $index => $result)
                                        <tr>
                                            <td class="fw-semibold text-dark text-start ps-4 py-3">
                                                <div class="d-flex align-items-center gap-2">
                                                    @if($index == 0)
                                                        <i class="bi bi-award-fill text-warning fs-5" title="1st Rank"></i>
                                                    @elseif($index == 1)
                                                        <i class="bi bi-award-fill text-secondary fs-5" title="2nd Rank"></i>
                                                    @elseif($index == 2)
                                                        <i class="bi bi-award-fill text-danger fs-5" title="3rd Rank"></i>
                                                    @else
                                                        <i class="bi bi-check-circle text-primary fs-6"></i>
                                                    @endif
                                                    <span>{{ $result->student_name }}</span>
                                                </div>
                                            </td>
                                            <td class="text-muted py-3 small">{{ $result->exam_name }}</td>
                                            <td class="fw-bold text-accent fs-6 py-3">{{ $result->marks ?? '-' }}</td>
                                            <td class="pe-4 py-3">
                                                @if($result->file_path)
                                                    <a href="{{ asset('storage/'.$result->file_path) }}" target="_blank" class="btn btn-sm btn-light text-primary rounded-circle shadow-sm" style="width: 34px; height: 34px; padding: 5px;" title="View Result Document"><i class="bi bi-file-earmark-pdf-fill"></i></a>
                                                @else
                                                    <span class="text-muted small">-</span>
                                                @endif
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="p-5 text-muted text-center">
                                                <i class="bi bi-clipboard-x fs-1 text-secondary opacity-50 d-block mb-2"></i>
                                                No results published yet.
                                            </td>
                                        </tr>
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

<!-- Contact & Admissions Section -->
<section id="contact" class="section-padding bg-light-gray">
    <div class="container">
        <div class="text-center mb-5">
            <h6 class="text-primary fw-bold text-uppercase mb-2 tracking-wide"><i class="bi bi-envelope-heart-fill me-2"></i>Get In Touch</h6>
            <h2 class="display-5 fw-bold text-dark">Contact & Admission Inquiry</h2>
            <p class="text-muted fs-5 col-lg-6 mx-auto">Have questions regarding courses, admission requirements, or batch schedules? Reach out to us today.</p>
        </div>
        
        <div class="row g-4 justify-content-center">
            <!-- Contact Info Cards -->
            <div class="col-lg-4">
                <div class="d-flex flex-column gap-3">
                    <div class="card border-0 shadow-sm p-4 rounded-4 bg-white">
                        <div class="d-flex align-items-start gap-3">
                            <div class="bg-primary bg-opacity-10 p-3 rounded-3 text-primary shrink-0">
                                <i class="bi bi-geo-alt-fill fs-3"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold text-dark mb-1">Campus Location</h5>
                                <p class="text-muted small mb-0 lh-relaxed">Main Campus, KUET Road, Fulbarigate, Khulna, Bangladesh</p>
                            </div>
                        </div>
                    </div>

                    <div class="card border-0 shadow-sm p-4 rounded-4 bg-white">
                        <div class="d-flex align-items-start gap-3">
                            <div class="bg-success bg-opacity-10 p-3 rounded-3 text-success shrink-0">
                                <i class="bi bi-telephone-fill fs-3"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold text-dark mb-1">Phone Numbers</h5>
                                <p class="text-muted small mb-1">+880 1700-000000</p>
                                <p class="text-muted small mb-0">+880 1800-000000</p>
                            </div>
                        </div>
                    </div>

                    <div class="card border-0 shadow-sm p-4 rounded-4 bg-white">
                        <div class="d-flex align-items-start gap-3">
                            <div class="bg-info bg-opacity-10 p-3 rounded-3 text-info shrink-0">
                                <i class="bi bi-envelope-fill fs-3"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold text-dark mb-1">Email Address</h5>
                                <p class="text-muted small mb-1">info@rongdhonu.edu.bd</p>
                                <p class="text-muted small mb-0">admissions@rongdhonu.edu.bd</p>
                            </div>
                        </div>
                    </div>

                    <div class="card border-0 shadow-sm p-4 rounded-4 bg-white">
                        <div class="d-flex align-items-start gap-3">
                            <div class="bg-warning bg-opacity-10 p-3 rounded-3 text-warning shrink-0">
                                <i class="bi bi-clock-fill fs-3"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold text-dark mb-1">Office Hours</h5>
                                <p class="text-muted small mb-0">Saturday - Thursday: 8:00 AM - 8:00 PM</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-lg-8">
                <div class="card shadow-lg border-0 rounded-4 overflow-hidden bg-white">
                    <div class="card-body p-4 p-md-5">
                        @if(session('success'))
                            <div class="alert alert-success border-0 bg-success text-white rounded-3 shadow-sm mb-4 d-flex align-items-center">
                                <i class="bi bi-check-circle-fill fs-4 me-2"></i>
                                <span>{{ session('success') }}</span>
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger border-0 bg-danger text-white rounded-3 shadow-sm mb-4">
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
                                    <label for="contact_name" class="form-label fw-semibold text-dark">Full Name <span class="text-danger">*</span></label>
                                    <input type="text" id="contact_name" name="name" class="form-control form-control-lg bg-light border" required placeholder="John Doe">
                                </div>
                                <div class="col-md-6">
                                    <label for="contact_email" class="form-label fw-semibold text-dark">Email Address <span class="text-danger">*</span></label>
                                    <input type="email" id="contact_email" name="email" class="form-control form-control-lg bg-light border" required placeholder="john@example.com">
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="contact_subject" class="form-label fw-semibold text-dark">Subject</label>
                                <input type="text" id="contact_subject" name="subject" class="form-control form-control-lg bg-light border" placeholder="Course details inquiry">
                            </div>
                            <div class="mb-4">
                                <label for="contact_message" class="form-label fw-semibold text-dark">Message <span class="text-danger">*</span></label>
                                <textarea id="contact_message" name="message" class="form-control form-control-lg bg-light border" rows="5" required placeholder="Write your query or message here..."></textarea>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg rounded-pill shadow-sm py-3 fs-5 fw-bold"><i class="bi bi-send-fill me-2"></i> Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Enrollment Modal -->
<div class="modal fade" id="enrollModal" tabindex="-1" aria-labelledby="enrollModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg rounded-4 overflow-hidden">
            <div class="modal-header bg-primary text-white border-0 py-3">
                <h5 class="modal-title fw-bold" id="enrollModalLabel"><i class="bi bi-mortarboard-fill me-2"></i>Course Enrollment</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <form action="{{ route('enroll.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="course_id" id="enroll_course_id">
                    
                    <div class="mb-3">
                        <label for="enroll_course_title" class="form-label fw-bold text-muted small">Selected Course</label>
                        <input type="text" id="enroll_course_title" class="form-control bg-light border-0 fw-bold text-primary" readonly>
                    </div>
                    
                    <div class="mb-3">
                        <label for="enroll_name" class="form-label fw-bold text-muted small">Full Name <span class="text-danger">*</span></label>
                        <input type="text" id="enroll_name" name="name" class="form-control bg-light border" required placeholder="Enter your full name">
                    </div>
                    
                    <div class="mb-3">
                        <label for="enroll_email" class="form-label fw-bold text-muted small">Email Address <span class="text-danger">*</span></label>
                        <input type="email" id="enroll_email" name="email" class="form-control bg-light border" required placeholder="Enter your email address">
                    </div>
                    
                    <div class="mb-4">
                        <label for="enroll_phone" class="form-label fw-bold text-muted small">Phone Number <span class="text-danger">*</span></label>
                        <input type="text" id="enroll_phone" name="phone" class="form-control bg-light border" required placeholder="Enter your phone number">
                    </div>
                    
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary rounded-pill py-3 fw-bold shadow-sm fs-5"><i class="bi bi-check-circle-fill me-2"></i> Confirm Enrollment</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const enrollBtns = document.querySelectorAll('.enroll-btn');
        const courseIdInput = document.getElementById('enroll_course_id');
        const courseTitleInput = document.getElementById('enroll_course_title');

        enrollBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const courseId = btn.getAttribute('data-course-id');
                const courseTitle = btn.getAttribute('data-course-title');
                if (courseIdInput) courseIdInput.value = courseId;
                if (courseTitleInput) courseTitleInput.value = courseTitle;
            });
        });
    });
</script>

@endsection

