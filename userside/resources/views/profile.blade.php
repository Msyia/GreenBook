<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GreenBook</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="profil_page.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="LOGO-BG.png" alt="logo" style="height: 60px" />
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
                <div class="d-flex  ms-auto" id="profile">
                  <span class="username me-2">Salma</span>
                  <img src="profil.png" alt="User" />
              </div>
            </div>
        </div>
    </nav>
    
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="sidebar bg-light border-end ">
            <div class="d-flex flex-column ">
                <h5 class="text-dark fw-bold mb-0 profile-title p-3">Profile</h5>
                <hr style="margin-left:0px;">
                    <ul class="nav flex-column">
                        <li class="nav-item mb-3">
                            <a href="#" class="nav-link text-dark ">
                                 <i class="bi bi-bookmark icon-bold"></i> Borrowed
                             </a>
                         </li>
                      <li class="nav-item mb-3">
                        <a href="#" class="nav-link text-dark">
                    <i class="bi bi-heart icon-bold fw-bold"></i> Favorite
                 </a>
            </li>
        </ul>

                <hr style="margin-left:0px;">
                <button class="btn text-dark fw-bold" onclick="logout()"style="
                 font-family: 'Inter', sans-serif; font-weight: 500; font-size: 16px; 
                line-height: 24px; letter-spacing: 0.5px; text-align: left; padding: 0; margin-left: 17px;">
                <i class="bi bi-box-arrow-left" style="margin-right: 8px;"></i> Log Out
        </button>

            </div>
        </div>

        <!-- Content -->
        <div class="container-fluid p-4">
            <div class="card mx-auto shadow-sm" style="max-width: 600px;">
                <button class="back-button">
                    <span class="arrow">←</span> Profil
                </button>
                <div class="card-body text-center">
                    <!-- Profile Picture -->
                    <div class="profile-pic mx-auto mb-3">
                        <img src="profil.png" class="rounded-circle" alt="Profile Picture">
                    </div>
                    <p class="user-info text-muted">User Id : <span id="userId">1234567</span></p>


                    <!-- Profile Info -->
                    <form id="profileForm">
                        <div class="mb-3">
                            <label for="userName" class="form-label">User Name</label>
                            <input type="text" class="form-control" id="userName" value="User Name" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" value="user@gmail.com" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Handphone Number</label>
                            <input type="text" class="form-control" id="phone" value="089786666xxx" readonly>
                        </div>
                        <button type="button" class="btn btn-dark w-100" onclick="editProfile()">Edit Profile</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <footer>
        Created by GreenBook.co.id © 2024
      </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="profil_page.js"></script>
</body>
</html>
