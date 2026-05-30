@include('includes.header')
<section id="upcoming-batches" class="section upcoming-batches">
  <div class="container" data-aos="fade-up">

    <!-- Section Title -->
    <div class="section-title text-center">
      <h2>Upcoming Batches</h2>
      <p class="text-dark">Get ready to join our new batches!</p>
    </div>

    <div class="row gy-4">
      @foreach($batches as $batch)
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
          <div class="card shadow-sm rounded p-3 w-100">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">{{ $batch->batch_name }}</h5>
              <ul class="list-unstyled mt-3 mb-4">
                <li><strong>Duration:</strong> {{ $batch->batch_duration }}</li>
                <li><strong>Launch Date:</strong> {{ \Carbon\Carbon::parse($batch->batch_launch_date)->format('d M Y') }}</li>
                <li><strong>Timing:</strong> {{ $batch->batch_timing }}</li>
              </ul><hr>
              <div class="mt-auto ">
                <a href="javascript:void(0)" 
                   class="btn btn-sm btn-primary themecolorbutton" 
                   onclick="openEnrollModal('{{ $batch->batch_name }}')">Enroll Now
                </a>
              </div>
            </div>
          </div>
        </div>
      @endforeach

      @if($batches->isEmpty())
        <div class="col-12 text-center">
          <p>No upcoming batches available at the moment. Stay tuned!</p>
        </div>
      @endif
    </div>

  </div>
</section>

<!-- Enroll Now Modal -->
<div class="modal fade" id="enrollNowModal" tabindex="-1" aria-labelledby="enrollNowModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="enrollForm" method="POST" action="{{ route('enroll.store') }}">
        @csrf
        <div class="modal-header">
          <h5 class="modal-title" id="enrollNowModalLabel">Enroll for Batch</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
          <div class="mb-3">
            <label for="message" class="form-label">Your Message <code>*</code></label>
            <textarea class="form-control" id="message" name="message" rows="3" readonly></textarea>
          </div>

          <div class="mb-3">
            <label for="phone" class="form-label">Phone Number <code>*</code></label>
            <input type="text" class="form-control" id="phone" name="phone" required>
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email Address <code>*</code></label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>

        </div>

        <div class="modal-footer">
          <button type="button" id="submitEnrollmentBtn" class="btn btn-primary themecolorbutton" onclick="submitEnrollment()">Submit Enrollment
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
<script>
  function openEnrollModal(batchName) {
      var message = "I want to enroll in the '" + batchName + "' batch.";
      document.getElementById('message').value = message;
      var enrollModal = new bootstrap.Modal(document.getElementById('enrollNowModal'));
      enrollModal.show();
  }
</script>
<script>
  function submitEnrollment() {
    var formData = {
      message: document.getElementById('message').value,
      phone: document.getElementById('phone').value,
      email: document.getElementById('email').value,
      _token: '{{ csrf_token() }}' // CSRF token
    };
    const submitBtn = document.getElementById('submitEnrollmentBtn');

    // Check for missing fields and show warning immediately
    if (formData.phone === '' || formData.email === '') {
      Swal.fire({
        icon: 'warning',
        title: 'Fields Missing',
        text: 'Please fill all the fields before submitting.',
      });
      return;
    }

    // Show immediate feedback for the user (button disabling and loading text)
    submitBtn.disabled = true;
    submitBtn.innerText = 'Submitting...';

    // Show the "Processing..." modal or SweetAlert
    Swal.fire({
      icon: 'info',
      title: 'Processing...',
      text: 'Please wait while we submit your details.',
      showConfirmButton: false,
      didOpen: () => {
        Swal.showLoading(); // Display loading spinner immediately
      }
    });

    // Send form data to the server
    fetch('{{ route('enroll.store') }}', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'Accept': 'application/json',
        'X-Requested-With': 'XMLHttpRequest',
      },
      body: JSON.stringify(formData)
    })
    .then(response => {
      if (!response.ok) {
        throw new Error('Something went wrong');
      }
      return response.json();
    })
    .then(data => {
      // Handle response and reset the UI
      submitBtn.disabled = false;
      submitBtn.innerText = 'Submit Enrollment';

      // Hide the modal
      var enrollModal = bootstrap.Modal.getInstance(document.getElementById('enrollNowModal'));
      enrollModal.hide();

      // Clear the form
      document.getElementById('enrollForm').reset();

      // Show success SweetAlert
      Swal.fire({
        icon: 'success',
        title: 'Thank you!',
        text: 'Thank you for contacting us. We will get back to you shortly.',
        showConfirmButton: false,
        timer: 2500
      });
    })
    .catch(error => {
      // Handle errors
      console.error(error);
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Something went wrong! Please try again later.',
      });
    });
  }
</script>




@include('includes.footer')
