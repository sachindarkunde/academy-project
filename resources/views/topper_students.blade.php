@include('includes.header')
 <section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h1 class="fw-bold">Our Toppers</h1>
            <p class="text-dark">Celebrating Success at Gagan Bharari Academy</p>
        </div>

        <div class="row g-4">
            @foreach($topperStudents as $student)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card h-100 shadow-sm border-0 text-center p-3 topper-card"
                    	data-bs-toggle="modal" 
                        data-bs-target="#testimonialModal"
                        data-name="{{ $student->name }}"
                        data-course="{{ $student->course_name }}"
                        data-testimonial="{{ $student->testimonial }}"
                        data-photo="{{ asset('storage/' . $student->photo) }}" style="cursor: pointer;" >
                       @if($student->photo)
                            <img src="{{ asset('storage/' . $student->photo) }}" class="rounded-circle mx-auto d-block mb-3" alt="{{ $student->name }}" style="width: 120px; height: 120px; object-fit: cover;">
                        @else
                            <img src="{{ asset('images/default-profile.png') }}" class="rounded-circle mx-auto d-block mb-3" alt="Default Student" style="width: 120px; height: 120px; object-fit: cover;">
                        @endif
                        <div class="card-body p-0">
                            <h5 class="card-title fw-bold mb-2">{{ $student->name }}</h5>
                            <h6 class="card-subtitle text-muted mb-2">{{ $student->course_name }}</h6>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>
<!-- Modal -->
<div class="modal fade" id="testimonialModal" tabindex="-1" aria-labelledby="testimonialModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-3">
            <div class="modal-header border-0">
                <h5 class="modal-title Text-dark" id="testimonialModalLabel">Student Testimonial</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <img id="studentPhoto" src="" alt="Student Photo" class="rounded-circle mb-3" style="width: 100px; height: 100px; object-fit: cover;">
                <h5 id="studentName" class="fw-bold mb-1"></h5>
                <h6 id="studentCourse" class="text-muted mb-3"></h6>
                <p id="studentTestimonial" class="small"></p>
            </div>
        </div>
    </div>
</div>
<!-- Script for dynamic modal content -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const topperCards = document.querySelectorAll('.topper-card');
        topperCards.forEach(card => {
            card.addEventListener('click', function () {
                const name = this.getAttribute('data-name');
                const course = this.getAttribute('data-course');
                const testimonial = this.getAttribute('data-testimonial');
                const photo = this.getAttribute('data-photo');

                document.getElementById('studentName').textContent = name;
                document.getElementById('studentCourse').textContent = course;
                document.getElementById('studentTestimonial').textContent = testimonial;
                document.getElementById('studentPhoto').src = photo;
            });
        });
    });
</script>

@include('includes.footer')
