@include('includes.header')
<main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>About Us<br></h1>
              <p class="mb-0"> Gagan Bharari Academy is a leading government exam coaching institute based in Rajgurunagar, Pune. We specialize in preparing students for competitive exams like Police Bharti, Army Recruitment, MPSC Foundation, Talathi Bharti, and Forest Guard Exams. Our mission is to provide affordable, high-quality education and to empower youth from rural and semi-urban areas to achieve success in Maharashtra's top recruitment drives.</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
            <ol>
		        <li><a href="{{ url('/') }}">Home</a></li>
		        <li class="current">About Us</li>
	      	</ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

   <!-- About Us Section -->
	<section id="about-us" class="section about-us">
	  <div class="container">
	    <div class="row gy-4">

	      <!-- Image -->
	      <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
	        <img src="assets/img/about-3.jpg" class="img-fluid" alt="Gagan Bharari Academy - Training Students for Government Exams">
	      </div>

	      <!-- Content -->
	      <div class="col-lg-6 order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
	        <h3>Empowering Aspirants for Government Jobs Across Maharashtra</h3>
	        <p class="fst-italic">
	         	Gagan Bharari Academy, located in Rajgurunagar, Pune, is a trusted coaching institute for aspirants preparing for Maharashtra state-level government exams. We specialize in guiding students through Police Bharti, Army Recruitment, MPSC, Talathi Bharti, and Forest Guard selection processes.
	        </p>
	        <ul>
	          <li><i class="bi bi-check-circle"></i> <span>Experienced and dedicated faculty with real-time exam expertise.</span></li>
	          <li><i class="bi bi-check-circle"></i> <span>Updated study materials and rigorous test series for every course.</span></li>
	          <li><i class="bi bi-check-circle"></i> <span>Affordable fees with a focus on quality education for rural and semi-urban youth.</span></li>
	        </ul>
	        <p>
	          Since our inception, Gagan Bharari Academy has successfully helped hundreds of students achieve their dream careers in public services. Our academy focuses on both academic excellence and physical readiness — ensuring a 360° approach to government job preparation.
	        </p>
	      </div>

	    </div>
	  </div>
	</section>
	<!-- /About Us Section -->


    <!-- Counts Section -->
    <section id="counts" class="section counts light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Students</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="64" data-purecounter-duration="1" class="purecounter"></span>
              <p>Courses</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1" class="purecounter"></span>
              <p>Events</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1" class="purecounter"></span>
              <p>Trainers</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Counts Section -->



  <!-- Testimonials Section -->
	<section id="testimonials" class="testimonials section">

	  <!-- Section Title -->
	  <div class="container section-title" data-aos="fade-up">
	    <h2>Testimonials</h2>
	    <p>What are they saying</p>
	  </div><!-- End Section Title -->

	  <div class="container" data-aos="fade-up" data-aos-delay="100">

	    <div class="swiper init-swiper">
	      <script type="application/json" class="swiper-config">
	        {
	          "loop": true,
	          "speed": 600,
	          "autoplay": {
	            "delay": 5000
	          },
	          "slidesPerView": "auto",
	          "pagination": {
	            "el": ".swiper-pagination",
	            "type": "bullets",
	            "clickable": true
	          },
	          "breakpoints": {
	            "320": {
	              "slidesPerView": 1,
	              "spaceBetween": 40
	            },
	            "1200": {
	              "slidesPerView": 2,
	              "spaceBetween": 20
	            }
	          }
	        }
	      </script>

	      <div class="swiper-wrapper">

	        @foreach($testimonials as $testimonial)
	        <div class="swiper-slide">
	          <div class="testimonial-wrap">
	            <div class="testimonial-item">
	              <img src="{{ asset('storage/' . $testimonial->photo) }}" class="testimonial-img" alt="{{ $testimonial->name }}">
	              <h3>{{ $testimonial->name }}</h3>
	              <h4>{{ $testimonial->designation ?? 'Student' }}</h4>
	              <div class="stars">
	                @for($i = 0; $i < 5; $i++)
	                  <i class="bi bi-star-fill"></i>
	                @endfor
	              </div>
	              <p>
	                <i class="bi bi-quote quote-icon-left"></i>
	                <span>{{ $testimonial->testimonial }}</span>
	                <i class="bi bi-quote quote-icon-right"></i>
	              </p>
	            </div>
	          </div>
	        </div><!-- End testimonial item -->
	        @endforeach

	      </div>
	      <div class="swiper-pagination"></div>
	    </div>

	  </div>

	</section><!-- /Testimonials Section -->


  </main>
@include('includes.footer')
