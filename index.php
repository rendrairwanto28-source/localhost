<?php


?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog Home</title>

    <!-- Bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f8fafc;
        }

        .hero {
            padding: 100px 0;
            background:
                linear-gradient(
                    rgba(0,0,0,.45),
                    rgba(0,0,0,.45)
                ),
                url("https://images.unsplash.com/photo-1499750310107-5fef28a66643");
            background-size: cover;
            background-position: center;
            color: white;
        }

        .post-card {
            transition: .2s;
        }

        .post-card:hover {
            transform: translateY(-5px);
        }

        .post-img {
            height: 220px;
            object-fit: cover;
        }

        .sidebar-card {
            border: none;
            border-radius: 14px;
        }

        footer {
            background: #111827;
        }
    </style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg bg-white shadow-sm">
    <div class="container">

        <a class="navbar-brand fw-bold">
            BLOGKU
        </a>

        <button
            class="navbar-toggler"
            data-bs-toggle="collapse"
            data-bs-target="#nav">

            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link active">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link">
                        Artikel
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link">
                        Tentang
                    </a>
                </li>

            </ul>

        </div>

    </div>
</nav>


<!-- HERO -->
<section class="hero">

    <div class="container text-center">

        <h1 class="display-4 fw-bold">
            Cerita, Insight & Inspirasi
        </h1>

        <p class="lead mt-3">
            Tempat berbagi artikel teknologi, produktivitas,
            dan pengalaman.
        </p>

        <button class="btn btn-light btn-lg mt-3">
            Mulai Membaca
        </button>

    </div>

</section>


<!-- CONTENT -->
<section class="py-5">

<div class="container">

<div class="row">

<!-- MAIN -->
<div class="col-lg-8">

<h2 class="fw-bold mb-4">
Artikel Terbaru
</h2>

<div class="row g-4">

<!-- CARD -->
<div class="col-md-6">

<div class="card post-card border-0 shadow-sm">

<img
src="https://picsum.photos/600/400?1"
class="card-img-top post-img">

<div class="card-body">

<span class="badge bg-primary mb-2">
Teknologi
</span>

<h5>
Belajar Laravel untuk Pemula
</h5>

<p class="text-muted">
Panduan sederhana membangun aplikasi modern.
</p>

<a href="#" class="btn btn-outline-dark">
Baca →
</a>

</div>

</div>

</div>


<div class="col-md-6">

<div class="card post-card border-0 shadow-sm">

<img
src="https://picsum.photos/600/400?2"
class="card-img-top post-img">

<div class="card-body">

<span class="badge bg-success mb-2">
Produktivitas
</span>

<h5>
Cara Mengatur Waktu Kerja
</h5>

<p class="text-muted">
Tips menjaga fokus dan konsistensi.
</p>

<a href="#" class="btn btn-outline-dark">
Baca →
</a>

</div>

</div>

</div>


<div class="col-md-6">

<div class="card post-card border-0 shadow-sm">

<img
src="https://picsum.photos/600/400?3"
class="card-img-top post-img">

<div class="card-body">

<span class="badge bg-danger mb-2">
Programming
</span>

<h5>
Kenapa Clean Code Penting
</h5>

<p class="text-muted">
Menulis kode yang mudah dipelihara.
</p>

<a href="#" class="btn btn-outline-dark">
Baca →
</a>

</div>

</div>

</div>


<div class="col-md-6">

<div class="card post-card border-0 shadow-sm">

<img
src="https://picsum.photos/600/400?4"
class="card-img-top post-img">

<div class="card-body">

<span class="badge bg-warning text-dark mb-2">
Lifestyle
</span>

<h5>
Work Life Balance
</h5>

<p class="text-muted">
Tetap produktif tanpa burnout.
</p>

<a href="#" class="btn btn-outline-dark">
Baca →
</a>

</div>

</div>

</div>

</div>

</div>


<!-- SIDEBAR -->
<div class="col-lg-4">

<div class="card sidebar-card shadow-sm mb-4">

<div class="card-body">

<h5>Cari Artikel</h5>

<div class="input-group">

<input
class="form-control"
placeholder="Cari...">

<button class="btn btn-dark">
Cari
</button>

</div>

</div>

</div>


<div class="card sidebar-card shadow-sm">

<div class="card-body">

<h5>Kategori</h5>

<div class="d-flex flex-wrap gap-2">

<span class="badge bg-primary">
Teknologi
</span>

<span class="badge bg-success">
Produktivitas
</span>

<span class="badge bg-danger">
Programming
</span>

<span class="badge bg-warning text-dark">
Lifestyle
</span>

</div>

</div>

</div>

</div>

</div>

</div>

</section>


<!-- FOOTER -->
<footer class="text-white py-4">

<div class="container text-center">

© 2026 Blogku —
dibuat dengan Bootstrap 5.3

</div>

</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>