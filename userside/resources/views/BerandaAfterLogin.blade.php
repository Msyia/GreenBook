<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Green Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/beranda.css') }}">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&display=swap" rel="stylesheet">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{('dashboard')}}">
                <img src="{{asset('images/LOGO-BG.png')}}" alt="logo" style="height: 60px" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav me-auto">
                    <a class="nav-link active" aria-current="page" href="{{('')}}">Home</a>
                    <a class="nav-link" href="{{('buku')}}">Daftar Buku</a>
                    <a class="nav-link" href="faq.html">FAQ</a>
                </div>
                <div class="d-flex  ms-auto" id="profile">
                    <!-- <span class="username me-3 mt-2">Salma</span> -->
                    <a href="{{('profile')}}"><button class="btn" type="button" data-bs-toggle="offcanvas" style="background-color:none;">
                        <img src="{{ asset('images/beranda.png') }}" alt="User" /></a>
                </div>
            </div>
        </div>
    </nav>



    <!-- Search Container with Full-Width Background -->
    <div class="search-container" style="background-image: url('{{ asset('images/beranda.png') }}');">
        <div class="search-bar">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search Book" aria-label="Search Book" />
                <button class="btn search-icon-btn" type="button" id="button-search">
                    <i class="bi bi-search"></i>
                </button>
            </div>
        </div>
    </div>

    <div class="daftar-buku-section">
        <h2 class="daftar-buku-title">DAFTAR BUKU</h2>
        <div class="carousel-container">
            <!-- Book Cards -->
            <div class="book-card">
                <img src="tentang_tubuhmu.png" alt="Book 1" />
                <p class="book-author">Dr. Gia Pratama</p>
                <p class="book-title">Tentang Tubuhmu</p>
            </div>
            <div class="book-card">
                <img src="diet_kopi_susu.png" alt="Book 2" />
                <p class="book-author">Dr. Dion Haryadi</p>
                <p class="book-title">Diet Kopi Susu</p>
            </div>
            <div class="book-card">
                <img src="kamu_gak_sendiri.png" alt="Book 3" />
                <p class="book-author">Syahid Muhammad</p>
                <p class="book-title">Kamu Gak sendiri</p>
            </div>
            <div class="book-card">
                <img src="24_amalan_nabi.png" alt="Book 4" />
                <p class="book-author">Khalid Al Husainan </p>
                <p class="book-title">24 Jam Amalan Nabi</p>
            </div>
            <div class="book-card">
                <img src="cantik_itu_luka.png" alt="Book 5" />
                <p class="book-author">Eka Kurniawan</p>
                <p class="book-title">Cantik Itu Luka</p>
            </div>
            <div class="book-card">
                <img src="3756_MDPL.png" alt="Book 5" />
                <p class="book-author">Rurwina Sari</p>
                <p class="book-title">3756_MDPL</p>
            </div>
            <div class="book-card">
                <img src="lumpu.png" alt="Book 4" />
                <p class="book-author">Tere Liye </p>
                <p class="book-title">Lumpu</p>
            </div>
            <div class="book-card">
                <img src="mengapa_langit_berwarna_biru.png" alt="Book 5" />
                <p class="book-author">Ruth Owen</p>
                <p class="book-title">Mengapa Langit Berwarna Biru</p>
            </div>
            <div class="book-card">
                <img src="tulah_desa rimau.png" alt="Book 5" />
                <p class="book-author">Guntur Alam</p>
                <p class="book-title">Tulah Desa Rimau</p>
            </div>
            <!-- Add more book cards as needed -->
        </div>
    </div>


    <div class="faq-section">
        <h2 class="text-center">
            <h2 class="faq-title">FAQ</h2>
            <p class="text-center">
            <p class="faq-text">Frequently Ask Question</p>
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
        <img src="{{asset('images/penerbit.png')}}" alt="daftar penerbit">
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
                    <form action="{{ route('feedback.store') }}" method="POST">
                        @csrf <!-- Token CSRF wajib -->
                        <div class="mb-3">
                            <input type="text" name="nama" class="form-control" placeholder="Nama" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="mb-3">
                            <textarea name="feedback" class="form-control" rows="3" placeholder="Kritik dan Saran" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-dark">Send</button>
                    </form>
                </div>

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