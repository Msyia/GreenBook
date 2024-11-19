<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Footer di Bawah Halaman</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }


    .content {
        flex: 1;
            margin-left: 250px;
            padding: 20px;
            width: 100%;
        }

    .sidebar {
            height: 100vh;
            background-color: #BF8AE9;
            color: #BF8AE9;
            padding-top: 20px;
            position: fixed;
            width: 250px;
        }

        .sidebar img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid;
            border-color: black;
            /* Opsional: Menambahkan border putih */
        }

        .sidebar a {
            color: white;
            padding: 10px;
            text-decoration: none;
            display: block;
        }

        .sidebar a:hover {
            background-color: #9b5acf;
        }

    /* Footer Styles */
    .footer {
      background-color: #AD45FF;
      color: white;
      text-align: center;
      padding: 10px 0;
    }
  </style>
</head>
<body>
 
<div class="sidebar ">
        
        <div class="text-center py-4">
            <img
                src="https://via.placeholder.com/80"
                alt="Admin Photo"
                class="rounded-circle mb-3">
                <h5 class="text-center text-white">Sidebar</h5>
        </div>
       <h3 class="text-center text-white"><a href="#">Dashboard</a></h3> 
       <hr> 
       <a href="#">Profil</a>
        <a href="#">Settings</a>
        <a href="#">Logout</a>
    </div>

    <div class="content">
        <h1>Konten Utama</h1>
        <p>Ini adalah halaman konten utama yang akan ditampilkan di sebelah kanan sidebar.</p>
    </div>

  <div class="footer">
    <p>© 2024 Your Company. All rights reserved.</p>
  </div>

  <script>
    function toggleSidebar() {
      const sidebar = document.getElementById('sidebar');
      sidebar.classList.toggle('active');
    }
  </script>
</body>
</html>
