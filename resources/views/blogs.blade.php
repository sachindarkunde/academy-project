@include('includes.header')

<main class="main">
  <!-- Page Title -->
  <div class="page-title" data-aos="fade">
    <div class="heading">
      <div class="container">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-8">
            <h1>Latest Blog Articles</h1>
            <p class="mb-0">
              Stay updated with expert insights, exam tips, preparation strategies, and academy news. Explore informative blogs written to guide aspirants preparing for Police Bharti, MPSC, Army recruitment, and other Maharashtra government exams.
            </p>
          </div>
        </div>
      </div>
    </div>
    <nav class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="{{ url('/') }}">Home</a></li>
          <li class="current">Blog</li>
        </ol>
      </div>
    </nav>
  </div><!-- End Page Title -->

  <!-- Blog Section (Dynamic Cards) -->
  <section id="events" class="events section">
    <div class="container" data-aos="fade-up">
      <div class="row">
        @foreach($blogs as $blog)
          <div class="col-md-4 d-flex align-items-stretch mb-5">
            <div class="card blog-card h-100 d-flex flex-column"
                 data-title="{{ $blog->title }}" 
                 data-content="{{ strip_tags($blog->content) }}" 
                 data-image="{{ asset('storage/' . $blog->image) }}" 
                 data-published="{{ $blog->published_at }}">
              <div class="card-img">
                <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}">
              </div>
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">{{ $blog->title }}</h5>
                <p class="fst-italic text-center">{{ $blog->published_at }}</p>
                <p class="card-text">{{ \Illuminate\Support\Str::limit(strip_tags($blog->content), 120) }}</p>

                <!-- Spacer to push the button to bottom -->
                <div class="mt-auto text-center">
                  <button class="btn btn-primary view-details themecolorbutton">View Details</button>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section><!-- /Blog Section -->

  <!-- Blog Modal -->
  <div class="modal fade" id="blogModal" tabindex="-1" aria-labelledby="blogModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header  text-white">
          <h5 class="modal-title fw-bold" id="blogModalLabel"></h5>
          <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img id="blogImage" src="" class="img-fluid mb-4 rounded" alt="Blog Image"><br>
          <b class="text-dark" id="blogPublished"></b>
          <p id="blogContent" class="mt-2"></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- /Blog Modal -->

</main>

@include('includes.footer')

<!-- Add this script after footer -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const blogCards = document.querySelectorAll('.blog-card');
    const blogModal = new bootstrap.Modal(document.getElementById('blogModal'));

    blogCards.forEach(card => {
      const viewBtn = card.querySelector('.view-details');

      viewBtn.addEventListener('click', function () {
        document.getElementById('blogModalLabel').innerText = card.dataset.title;
        document.getElementById('blogImage').src = card.dataset.image;
        document.getElementById('blogImage').alt = card.dataset.title;
        document.getElementById('blogPublished').innerText = `Published on: ${card.dataset.published}`;
        document.getElementById('blogContent').innerText = card.dataset.content;

        blogModal.show();
      });
    });
  });
</script>
