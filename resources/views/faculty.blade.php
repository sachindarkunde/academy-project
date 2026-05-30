@include('includes.header')
 <main class="main">

    <!-- Page Title -->
	<div class="page-title" data-aos="fade">
	  <div class="heading">
	    <div class="container">
	      <div class="row d-flex justify-content-center text-center">
	        <div class="col-lg-8">
	          <h1>Our Expert Faculty</h1>
	          <p class="mb-0">
	            Meet the dedicated and experienced faculty members of Gagan Bharari Academy — the backbone of our success. Our trainers are subject matter experts in competitive exam preparation for Police Bharti, MPSC, Army Recruitment, Talathi Bharti, and more. With a student-first approach and proven strategies, our team ensures you receive top-quality coaching tailored for Maharashtra's government exams.
	          </p>
	        </div>
	      </div>
	    </div>
	  </div>
	  <nav class="breadcrumbs">
	    <div class="container">
	      <ol>
	        <li><a href="{{ url('/') }}">Home</a></li>
	        <li class="current">Faculty</li>
	      </ol>
	    </div>
	  </nav>
	</div><!-- End Page Title -->


    <!-- faculty Section -->
	<section id="trainers" class="section trainers">
	   <div class="container">
	      <div class="row gy-5">
	      @foreach($faculties as $key => $faculty)
	         <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="{{ 100 * ($key + 1) }}">
	          	<div class="member-img">
		            <img src="{{ asset('storage/' . $faculty->faculty_image) }}" class="img-fluid" alt="{{ $faculty->name }}">
		            <!-- <div class="social">
		                <a href="#"><i class="bi bi-twitter-x"></i></a>
		                <a href="#"><i class="bi bi-facebook"></i></a>
		                <a href="#"><i class="bi bi-instagram"></i></a>
		                <a href="#"><i class="bi bi-linkedin"></i></a>
		            </div> -->
	          	</div>
		         <div class="member-info text-center">
		            <h4>{{ $faculty->faculty_name }}</h4>
		            <span>{{ $faculty->faculty_experience }}</span>
		            <p>{{ $faculty->faculty_description }}</p>
		         </div>
	         </div><!-- End Team Member -->
	      @endforeach
	      </div>
	   </div>
	</section><!-- /faculty Section -->


  </main>
@include('includes.footer')
