<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Green Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css"
        rel="stylesheet" />
    <link rel="stylesheet" href="beranda.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="LOGO.png" alt="logo" style="height: 60px" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav me-auto">
                    <a class="nav-link active" aria-current="page" href="beranda.html">Home</a>
                    <a class="nav-link" href="daftarbuku.html">Daftar Buku</a>
                    <a class="nav-link" href="faq.html">FAQ</a>
                </div>
                <div class="d-flex">
                    <button class="btn btn-outline-secondary me-2" type="button">Sign In</button>
                    <button class="btn btn-success" type="button">Register</button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Search Container with Full-Width Background -->
    <div class="search-container">
        <div class="search-bar">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search Book" aria-label="Search Book" />
                <button class="btn search-icon-btn" type="button" id="button-search">
                    <i class="bi bi-search"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Carousel Section -->
    <div class="daftar-buku-section">
        <h2 class="daftar-buku-title">DAFTAR BUKU</h2>
        <div class="carousel-container">
            <!-- Book Cards -->
            <div class="book-card">
                <img src="cover1.png" alt="Book 1" />
                <p class="book-author">Author 1</p>
                <p class="book-title">Book Title 1</p>
            </div>
        </div>
    </div>


    <div class="faq-section">
        <h2 class="text-center">FAQ</h2>
        <p class="text-center">Frequently Ask Question</p>
        <div class="accordion" id="faqAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne" style="font-weight: bold;">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Berapa lama masa pinjam buku di perpustakaan
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Masa peminjaman buku di perpustakaan adalah selama 7 hari. Jika melebihi batas waktu tersebut, akan dikenakan denda per minggu sesuai kebijakan perpustakaan. Untuk menghindari denda, pastikan buku dikembalikan tepat waktu atau lakukan perpanjangan jika diperlukan.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo" style="font-weight: bold;">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Bagaimana cara menghindari keterlambatan Buku
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Pastikan untuk mencatat tanggal pengembalian dan melakukan perpanjangan jika diperlukan. Anda juga bisa mengaktifkan notifikasi pengingat dari perpustakaan.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree" style="font-weight: bold;">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Bagaimana cara mendaftar menjadi anggota perpustakaan digital?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Anda bisa mendaftar secara online melalui situs perpustakaan kami dengan mengisi formulir dan melengkapi data diri.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour" style="font-weight: bold;">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Apa yang harus saya lakukan jika saya lupa kata sandi akun perpustakaan?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Silakan gunakan fitur lupa kata sandi pada halaman login untuk mereset kata sandi Anda.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive" style="font-weight: bold;">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Bisakah saya memperpanjang masa peminjaman e-book?
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Ya, masa peminjaman e-book bisa diperpanjang melalui akun perpustakaan Anda.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="penerbit-section" style="align-items: center;">
        <h2 class="penerbit-title">PENERBIT</h2>
        <img src="penerbit.png" alt="daftar penerbit">
    </div>


    <footer class="footer mt-auto py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>Hubungi Kami! <br> <span class="green-text"><img src="LOGo-BG.png" alt="" style="width: 150px;"></span></h5>
                    <p>Perpustakaan peminjaman terdekat Anda! <br> JL. Alih Bahasa Nusantara No 12</p>
                    <p>Keep in touch with us....</p>
                    <div class="social-icons">
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-whatsapp"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <h5>Ada Masukan Untuk Kami?</h5>
                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Nama" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" rows="3" placeholder="Kritik dan Saran"></textarea>
                        </div>
                        <button type="submit" class="btn btn-dark">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </footer>
        <div class="footer-bottom text-center py-2">
            <p>Created by GreenBook.co.id © 2024</p>
        </div>
  



    <!-- Bootstrap JS with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
