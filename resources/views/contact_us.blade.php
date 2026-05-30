@include('includes.header')
<main class="main">

  <!-- Page Title -->
  <div class="page-title" data-aos="fade">
    <div class="heading">
      <div class="container">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-8">
            <h1>Contact Us</h1>
            <p class="mb-0">
              Get in touch with Gagan Bharari Academy — Rajgurunagar’s most trusted coaching institute for Police Bharti, MPSC, Talathi, and Army recruitment exams. We're here to guide you on your path to a successful government career.
            </p>
          </div>
        </div>
      </div>
    </div>
    <nav class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="{{ url('/') }}">Home</a></li>
          <li class="current">Contact</li>
        </ol>
      </div>
    </nav>
  </div><!-- End Page Title -->

  <!-- Contact Section -->
  <section id="contact" class="contact section">

    <!-- Google Maps -->
    <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
      <iframe style="border:0; width: 100%; height: 300px;" 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3588.7922306374967!2d73.88752477497168!3d18.86017548230045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdd358d24e2af91%3A0x2b32128d44634318!2sGaganBharari%20Academy!5e1!3m2!1sen!2sin!4v1744820733099!5m2!1sen!2sin" 
        frameborder="0" allowfullscreen="" loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div><!-- End Google Maps -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row gy-4">

        <!-- Contact Info -->
        <div class="col-lg-4">
          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
            <i class="bi bi-geo-alt flex-shrink-0"></i>
            <div>
              <h3>Address</h3>
              <p>Shivdhan Plaza, Thigal Sthal, Pune-Nashik Highway, Talkhed, Rajgurunagar, Pune, Maharashtra 410505</p>
            </div>
          </div>

          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
            <i class="bi bi-telephone flex-shrink-0"></i>
            <div>
              <h3>Call Us</h3>
              <p>+91 98234 43025</p>
            </div>
          </div>

          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
            <i class="bi bi-envelope flex-shrink-0"></i>
            <div>
              <h3>Email Us</h3>
              <p>info@gaganbharariacademy.com</p>
            </div>
          </div>
        </div><!-- End Contact Info -->

        <!-- Contact Form -->
        <div class="col-lg-8">
          <form action="{{ route('contact.store') }}" method="POST" class="php-email-form" data-aos="fade-up" data-aos-delay="200" id="contact-form">
              @csrf
              <div class="row gy-4">
                  <div class="col-md-6">
                      <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                  </div>

                  <div class="col-md-6">
                      <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                  </div>

                  <div class="col-md-12">
                      <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                  </div>

                  <div class="col-md-12">
                      <textarea name="message" rows="6" class="form-control" placeholder="Message" required></textarea>
                  </div>

                  <div class="col-md-12 text-center">
                      <!-- <div class="loading">Loading</div>
                      <div class="error-message"></div>
                      <div class="sent-message">Your message has been sent. Thank you!</div> -->
                      <button type="submit">Send Message</button>
                  </div>
              </div>
          </form>
        </div><!-- End Contact Form -->

      </div>
    </div>

  </section><!-- /Contact Section -->

</main>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('contact-form');
    const submitButton = form.querySelector('button[type="submit"]');
    const originalButtonText = submitButton.innerHTML;

    form.addEventListener('submit', async function (e) {
        e.preventDefault(); // Prevent normal form submit
        submitButton.disabled = true;
        submitButton.innerHTML = 'Submitting...';

        const name = form.querySelector('input[name="name"]').value.trim();
        const email = form.querySelector('input[name="email"]').value.trim();
        const subject = form.querySelector('input[name="subject"]').value.trim();
        const message = form.querySelector('textarea[name="message"]').value.trim();

        // Check for missing fields and show alert immediately
        if (name === '' || email === '' || subject === '' || message === '') {
            Swal.fire({
                icon: 'warning',
                title: 'All fields are required',
                text: 'Please fill in all the fields.',
            });
            submitButton.disabled = false;
            submitButton.innerHTML = originalButtonText;
            return;
        }

        // Show loading message immediately
        Swal.fire({
            icon: 'info',
            title: 'Processing...',
            text: 'Please wait while we submit your message.',
            showConfirmButton: false,
            didOpen: () => {
                Swal.showLoading(); // Display loading spinner right away
            }
        });

        try {
            const response = await fetch("/contact/store", {
                method: "POST",
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                },
                body: JSON.stringify({
                    name: name,
                    email: email,
                    subject: subject,
                    message: message,
                })
            });

            // Check if the response is OK
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }

            const data = await response.json();
            if (data.status === 'success') {
                Swal.fire({
                    icon: 'success',
                    title: 'Message Sent Successfully!',
                    text: data.message,
                    showConfirmButton: false,
                    timer: 2500, // Auto-close the success message after 2.5 seconds
                });
                form.reset(); // Reset the form
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Failed',
                    text: data.message || 'There was an issue with your submission. Please try again.',
                    showConfirmButton: false,
                    timer: 2500,
                });
            }
        } catch (error) {
            console.error('Error:', error);
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Something went wrong. Please try again later.',
                showConfirmButton: false,
                timer: 2500,
            });
        } finally {
            submitButton.disabled = false;
            submitButton.innerHTML = originalButtonText;
        }
    });
});
</script>


@include('includes.footer')
