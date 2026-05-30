    <footer id="footer" class="footer position-relative light-background">
        <div class="container footer-top">
          <div class="row gy-4">
            <div class="col-lg-4 col-md-6 footer-about">
              <a href="index.html" class="logo d-flex align-items-center">
                <span class="sitename">Gagan Bharari Academy</span>
              </a>
              <div class="footer-contact pt-3">
                <p>Shivdhan Plaza Thigal Sthal,</p>
                <p>Pune - Nashik Hwy,</p>
                <p>Talkhed, Rajgurunagar, Pune, Maharashtra 410505</p>
                <p class="mt-3"><strong>Phone:</strong> <span>098234 43025</span></p>
                <p><strong>Email:</strong> <span>info@gaganbharariacademy.com</span></p>
              </div>
              <div class="social-links d-flex mt-4">
                <a href="" target="_blank"><i class="bi bi-twitter-x"></i></a>
                <a href="" target="_blank"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/gaganbharari_academy/"><i class="bi bi-instagram" target="_blank"></i></a>
                <a href="" target="_blank"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/about') }}">About us</a></li>
                <li><a href="{{ url('/services') }}">Services</a></li>
                <li><a href="{{ url('/blogs') }}">Blogs</a></li>
                <li><a href="{{ url('/contact-us') }}">Contact us</a></li>
              </ul>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
              <h4>Our Services</h4>
              <ul>
                <li><a href="{{ url('/services') }}">Police Bharti</a></li>
                <li><a href="{{ url('/services') }}">Army recruitment</a></li>
                <li><a href="{{ url('/services') }}">Forest Guard</a></li>
                <li><a href="{{ url('/services') }}">Talathi Bharti</a></li>
                <li><a href="{{ url('/services') }}">MPSC Foundation</a></li>
              </ul>
            </div>

            <div class="col-lg-4 col-md-12 footer-newsletter">
              <h4>Our Newsletter</h4>
              <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>

              <form id="newsletter-form" class="php-email-form" action="{{ route('newsletter.store') }}"  method="POST">
                @csrf
                <div class="newsletter-form">
                  <input type="email" name="email" id="newsletter-email" required placeholder="Enter your email">
                  <input type="submit" value="Subscribe">
                </div>
                <!-- <div class="loading" style="display:none;">Loading</div> -->
                <!-- <div class="error-message" style="display:none;"></div>
                <div class="sent-message" style="display:none;">Your subscription request has been sent. Thank you!</div> -->
              </form>
            </div>


          </div>
        </div>

        <div class="container copyright text-center mt-4">
          <p>© <span>Copyright</span> <strong class="px-1 sitename">Gagan Bharari Academy</strong> <span>All Rights Reserved</span></p>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you've purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
            Designed by <a href="https://gregarious-boba-70b663.netlify.app/" target="_blank">Sachin Darkunde</a>
          </div>
        </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

   <!-- Preloader -->
   <div id="preloader"></div>

   <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- sweetalert CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Get in Touch Modal -->
    <div class="modal fade" id="enquiryModal" tabindex="-1" aria-labelledby="enquiryModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <form id="enquiryForm">
          @csrf
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="enquiryModalLabel">Get in Touch</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

              <div class="mb-3">
                <label for="enquiry-message" class="form-label">Your Message <code>*</code></label>
                <textarea class="form-control" id="enquiry-message" name="message" rows="4" readonly></textarea>
              </div>

              <div class="mb-3">
                <label for="mobile" class="form-label">Mobile Number <code>*</code></label>
                <input type="text" class="form-control" id="mobile" name="mobile" required>
              </div>

              <div class="mb-3">
                <label for="email" class="form-label">Email ID <code>*</code></label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success" id="sendEnquiryBtn">Send Message</button>
            </div>
          </div>
        </form>
      </div>
    </div>


  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const enquiryButtons = document.querySelectorAll('.enquiry-btn');
      const modal = new bootstrap.Modal(document.getElementById('enquiryModal'));
      const enquiryMessage = document.getElementById('enquiry-message');
      const sendEnquiryBtn = document.getElementById('sendEnquiryBtn');

      let selectedService = '';

      enquiryButtons.forEach(button => {
        button.addEventListener('click', function () {
          selectedService = this.getAttribute('data-service');
          enquiryMessage.value = `Hi, I am interested in ${selectedService} and need more information about it. Please contact me.`;
          modal.show();
        });
      });

      sendEnquiryBtn.addEventListener('click', async function () {
        const mobile = document.getElementById('mobile').value.trim();
        const email = document.getElementById('email').value.trim();
        const message = enquiryMessage.value.trim();
        const originalButtonText = sendEnquiryBtn.innerHTML;

        if (mobile === '' || email === '') {
          Swal.fire({
            icon: 'warning',
            title: 'Fields Missing',
            text: 'Please fill all the fields before submitting.',
          });
          return;
        }

        // Show immediate feedback that the form is being processed
        sendEnquiryBtn.disabled = true;
        sendEnquiryBtn.innerHTML = 'Submitting...';

        Swal.fire({
          icon: 'info',
          title: 'Processing...',
          text: 'Please wait while we submit your enquiry.',
          showConfirmButton: false,
          didOpen: () => {
            Swal.showLoading(); // Display loading spinner immediately
          }
        });

        const payload = {
          service: selectedService,
          message: message,
          mobile: mobile,
          email: email,
        };

        try {
          const response = await fetch("{{ route('enquiry.store') }}", {
            method: "POST",
            headers: {
              "Content-Type": "application/json",
              "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            },
            body: JSON.stringify(payload)
          });

          const data = await response.json();

          if (data.status === 'success') {
            Swal.fire({
              icon: 'success',
              title: 'Enquiry Submitted',
              text: 'Thank you! Your enquiry has been submitted successfully.',
            }).then(() => {
              modal.hide();
              // Clear the form fields if you want
              document.getElementById('mobile').value = '';
              document.getElementById('email').value = '';
              enquiryMessage.value = '';
            });
          } else {
            Swal.fire({
              icon: 'error',
              title: 'Submission Failed',
              text: 'Failed to submit enquiry. Please try again.',
            });
          }
        } catch (error) {
          console.error('Error:', error);
          Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Something went wrong. Please try later.',
          });
        } finally {
          sendEnquiryBtn.disabled = false;
          sendEnquiryBtn.innerHTML = originalButtonText;
        }
      });
    });
  </script>



    <!-- submit subscription form -->
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const form = document.getElementById('newsletter-form');
      const submitButton = form.querySelector('input[type="submit"]');

      form.addEventListener('submit', async function (e) {
        e.preventDefault();

        const email = document.getElementById('newsletter-email').value.trim();
        const originalButtonText = submitButton.value;

        if (email === '') {
          Swal.fire({
            icon: 'warning',
            title: 'Email Required',
            text: 'Please enter your email address.',
          });
          return;
        }

        // Disable submit button and show "Subscribing..."
        submitButton.disabled = true;
        submitButton.value = 'Subscribing...';

        // Show immediate success/failure message
        Swal.fire({
          icon: 'info',
          title: 'Processing...',
          text: 'Please wait while we process your subscription.',
          showConfirmButton: false,
          didOpen: () => {
            Swal.showLoading();  // Display the loading spinner immediately
          }
        });

        try {
          const response = await fetch('/newsletter/store', { // <-- Direct URL
            method: 'POST',
            headers: {
              'Content-Type': 'application/json',
              'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            },
            body: JSON.stringify({ email: email })
          });

          const data = await response.json();

          if (data.status === 'success') {
            Swal.fire({
              icon: 'success',
              title: 'Subscribed!',
              text: data.message || 'You have successfully subscribed to our newsletter.',
            });
            form.reset();
          } else {
            Swal.fire({
              icon: 'error',
              title: 'Failed',
              text: data.message || 'Subscription failed. Please try again.',
            });
          }

        } catch (error) {
          console.error('Error:', error);
          Swal.fire({
            icon: 'error',
            title: 'Server Error',
            text: 'Something went wrong. Please try again later.',
          });
        } finally {
          // Enable submit button and restore its text
          submitButton.disabled = false;
          submitButton.value = originalButtonText;
        }
      });
    });
  </script>






</body>
</html>