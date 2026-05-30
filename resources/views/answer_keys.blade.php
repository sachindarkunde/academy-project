@include('includes.header')

<!-- Answer Keys Section -->
<section id="answer-keys" class="section">
    <div class="container">

        <div class="section-title" data-aos="fade-up">
            <h2>Answer Keys</h2>
            <p>Get instant access to our latest answer keys for your exam preparation</p>
        </div>

        <div class="row gy-4 justify-content-center" data-aos="fade-up" data-aos-delay="200">

            @forelse($answerKeys as $key)
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="card shadow-sm border-0 w-100">
                        <div class="card-body d-flex flex-column justify-content-between p-4">
                            <div class="text-center mb-3">
                                <i class="bi bi-file-earmark-pdf-fill" style="font-size: 3rem; color: #dc3545;"></i>
                            </div>
                            <h5 class="card-title text-center">{{ $key->title }}</h5>
                            <div class="d-grid mt-4">
                                <a href="{{ asset('storage/' . $key->file_path) }}" class="btn btn-danger" download>
                                    <i class="bi bi-download"></i> Download PDF
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center">
                    <div class="alert alert-warning" role="alert">
                        No answer keys available right now. Please check back later!
                    </div>
                </div>
            @endforelse

        </div>

    </div>
</section>
<!-- End Answer Keys Section -->

@include('includes.footer')
