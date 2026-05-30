@include('includes.header')
<main class="main">

   <!-- Page Title -->
	<div class="page-title" data-aos="fade">
	  <div class="heading">
	    <div class="container">
	      <div class="row d-flex justify-content-center text-center">
	        <div class="col-lg-8">
	          <h1>Our Services</h1>
	          <p class="mb-0">
	            Explore a range of government exam coaching programs at Gagan Bharari Academy. We offer expert-led training for Police Bharti, Army Recruitment, MPSC Foundation, Talathi Bharti, Forest Guard exams, and more — tailored for students across Maharashtra. Our goal is to help you succeed in every step of your competitive journey.
	          </p>
	        </div>
	      </div>
	    </div>
	  </div>
	  <nav class="breadcrumbs">
	    <div class="container">
	      <ol>
	        <li><a href="{{ url('/') }}">Home</a></li>
	        <li class="current">Services</li>
	      </ol>
	    </div>
	  </nav>
	</div><!-- End Page Title -->

    <!-- Courses Section -->
    <section id="courses" class="courses section">

      <div class="container">

        <div class="row">

			@foreach($services as $service)
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5 {{ !$loop->first ? '' : '' }} {{ $loop->iteration > 2 ? 'mt-lg-0' : '' }}" data-aos="zoom-in" data-aos-delay="{{ 100 * $loop->iteration }}">
                        <div class="course-item d-flex flex-column h-100">
                            <img src="{{ asset('storage/' . $service->image) }}" class="img-fluid" alt="{{ $service->title }}">
                            <div class="course-content d-flex flex-column flex-grow-1">
                                <h3><a href="#">{{ $service->title }}</a></h3>
                                <p class="description">{{ $service->description }}</p>
                                <div class="trainer mt-auto d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn category enquiry-btn" data-service="{{ $service->title }}">Enquiry</button>
                                </div>
                            </div>
                        </div>
                </div> <!-- End Course Item-->
              @endforeach

        </div>

      </div>

    </section><!-- /Courses Section -->

  </main>
@include('includes.footer')
