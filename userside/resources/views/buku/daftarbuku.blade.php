@include('templates.navbar')

    <div class="content">
        <div class="search-bar">
          <input type="text" placeholder="Search Book">
          <button>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
              <path d="M10 2a8 8 0 015.27 13.71l4 4a1 1 0 01-1.42 1.42l-4-4A8 8 0 1110 2zm0 2a6 6 0 100 12 6 6 0 000-12z" fill="black" />
            </svg>
          </button>
        </div>
      </div>
      
      
    
    <main>
        <!-- Carousel Section -->
        @foreach ($buku as $item)
        <div class="container my-0 ">
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="card">
                    @if($item->gambar)
                                <img src="{{ asset('storage/' . $item->gambar) }}" alt="Gambar Buku" width="100">
                            @else
                                <span>No Image</span>
                            @endif
                        <div class="card-body text-center">
                            <p class="book-author">{{ $item->penulis }}</p>
                            <h5 class="book-title">{{ $item->judul }}</h5>
                            <button class="btn" id="detail">Detail</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        
        
        
            <!-- Add more book cards as needed -->
        </div>
    </div>
    </main>
    <footer>
        <p>Created by GreenBook.co.id &copy; 2024</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
