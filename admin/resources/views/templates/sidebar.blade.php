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
      font-family: 'Inter', sans-serif;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      background-color: #D8C8FB;
    }

    .sidebar {
      height: 100vh;
      background-color: #BF8AE9;
      color: #FFF;
      padding-top: 20px;
      position: fixed;
      width: 250px;
      font-size: 14px;
    }

    .sidebar img {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
      border: 3px solid black;
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

    .content {
      margin-left: 250px;
      padding: 20px;
      flex: 1;
    }

    .dashboard-container {
      border: 2px solid #9c27b0;
      border-radius: 10px;
    }

    .dashboard-container img {
      width: 100%;
      height: auto;
      max-height: 300px;
      object-fit: cover;
      border-radius: 10px;
    }

    .dashboard-overlay {
      text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
    }

    .footer {
      background-color: #AD45FF;
      color: white;
      text-align: center;
      padding: 10px 0;
      position: sticky;
      bottom: 0;
      width: 100%;
    }
  </style>
</head>

<body>
  <!-- Sidebar -->
  <div class="sidebar">
    <div class="text-center py-4">
      <img src="{{ asset('images/bcg.jpg')}}" alt="Admin Photo">
      <h5 class="text-center text-white">Admin</h5>
    </div>
    <h3 class="text-center"><a href="{{'welcome'}}">Dashboard</a></h3>
    <hr>
    <ul class="list-unstyled">
      <li><a href="{{ ('users') }}">Tabel User</a></li>
      <li><a href="{{ ('buku')}}">Tabel Daftar Buku</a></li>
      <li><a href="{{ ('pinjam_buku')}}">Tabel Pinjam Buku</a></li>
      <li><a href="{{ ('pengajuan') }}">Tabel Pengajuan Peminjaman</a></li>
      <li><a href="{{('feedback')}}">Feedback</a></li>
    </ul>
    <hr>
    <ul class="list-unstyled">
      <li><a href="{{ route('admin.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        Logout
    </a>
    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    
    </li>
    </ul>
  </div>