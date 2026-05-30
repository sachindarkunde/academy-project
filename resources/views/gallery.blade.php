@include('includes.header')
 <main class="main">

    <!-- Page Title -->
	<div class="page-title" data-aos="fade">
	  <div class="heading">
	    <div class="container">
	      <div class="row d-flex justify-content-center text-center">
	        <div class="col-lg-8">
	          <h1>Our Gallery</h1>
	          <p class="mb-0">
	            Take a glimpse into the vibrant learning environment of Gagan Bharari Academy. From Police Bharti training camps to MPSC classroom sessions, student achievements, and cultural activities — our gallery showcases the dedication, discipline, and success stories of students preparing for Maharashtra's top government exams.
	          </p>
	        </div>
	      </div>
	    </div>
	  </div>
	  <nav class="breadcrumbs">
	    <div class="container">
	      <ol>
	        <li><a href="{{ url('/') }}">Home</a></li>
	        <li class="current">Gallery</li>
	      </ol>
	    </div>
	  </nav>
	</div><!-- End Page Title -->

    <!-- Events Section -->
	<section id="events" class="events section">
	  <div class="container" data-aos="fade-up">
	    <div class="row">
	      @foreach($galleries as $gallery)
	        <div class="col-md-4 d-flex align-items-stretch">
	          <div class="card">
	            <div class="card-img">
	              <img src="{{ asset('storage/' . $gallery->image) }}" alt="Gallary images">
	            </div>
	            {{-- Removed content block as requested --}}
	          </div>
	        </div>
	      @endforeach
	    </div>
	  </div>
	</section><!-- /Events Section -->


  </main>
@include('includes.footer')
