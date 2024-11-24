@include('templates.sidebar')

  <!-- Content -->
  <div class="content">
    <div class="container">
      <div class="text-start mb-3">
        <h4 class="fw-bold">Selamat Datang, Admin!</h4>
      </div>
      <div class="dashboard-container position-relative overflow-hidden rounded">
        <img src="{{ asset('images/bcg.jpg')}}" alt="Background Image">
        <div class="dashboard-overlay position-absolute top-50 start-50 translate-middle text-white">
          <h1 class="fw-bold">Dashboard</h1>
        </div>
      </div>
    </div>
  </div>

@include('templates.footer')
