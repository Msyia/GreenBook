<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ADMIN PAGE</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'inter', sans-serif;
      font-style: bold;
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
      font-size: 14px;
    }

    .sidebar img {
      background-image: url("{{ asset ('images/LOGO.png')}}");
      width: 120px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
      border: 3px solid;
      border-color: black;
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

    .footer {
      background-color: #AD45FF;
      color: white;
      text-align: center;
      padding: 10px 0;
    }
  </style>
</head>

<body>
  <div class="sidebar">
    <div class="text-center py-4">
      <img
        src="https://via.placeholder.com/80"
        alt="Admin Photo"
        class="rounded-circle mb-3">
      <h5 class="text-center text-white">Sidebar</h5>
    </div>
    <h3 class="text-center text-white"><a href="#">Dashboard</a></h3>
    <hr style="color: white;">

   <ul>
    <li>
    <a href="#">Tabel User</a>
    <a href="#">Tabel Daftar Buku</a>
    <a href="#">Tabel Pinjam Buku</a>
    <a href="#">Tabel Pengajuan Peminjaman</a>
    <a href="#">FeedBack</a>
    </li>
   </ul>

    <hr style="color: white;">
    <ul>
    <li>
    <a href="#">Logout</a>
    </li>
    </ul>
  </div>

  <div class="content">

  </div>