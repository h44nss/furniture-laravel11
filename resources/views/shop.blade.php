<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="author" content="Untree.co" />
    <link rel="shortcut icon" href="favicon.png" />

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
    <link href="css/tiny-slider.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <title>Akang Furniture</title>
</head>

<body>
    <!-- Start Header/Navigation -->
    <nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">
        <div class="container">
            <a class="navbar-brand" href="index.html">Akang Furniture<span>.</span></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni"
                aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsFurni">
                <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/index">Home</a>
                    </li>
                    <li class="active">
                        <a class="nav-link" href="/shop">Shop</a>
                    </li>
                    <li><a class="nav-link" href="/about">About us</a></li>
                    <li><a class="nav-link" href="/services">Services</a></li>
                    <li><a class="nav-link" href="/blog">Design</a></li>
                    <li><a class="nav-link" href="/contact">Contact us</a></li>
                </ul>

                <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                    <li>
                        <a class="nav-link" href="#"><img src="images/user.svg" /></a>
                    </li>
                    <li>
                        <a class="nav-link" href="/cart"><img src="images/cart.svg" /></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Header/Navigation -->

    <!-- Start Search-Bar -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="{{ route('search') }}" method="GET" class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                        name="query" />
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>
    <!--End Start Search-Bar -->

    <!-- Start Hero Section -->
    <!--  <div class="hero">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-5">
            <div class="intro-excerpt">
              <h1>Shop</h1>
            </div>
          </div>
          <div class="col-lg-7"></div>
        </div>
      </div>
    </div> -->
    <!-- End Hero Section -->

    <!-- Start dropdown menu -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <!-- Dropdown Menu -->
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Select Category
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item category" data-category="kursi" href="#">Chairs</a></li>
                        <li><a class="dropdown-item category" data-category="meja" href="#">Tables</a></li>
                        <li><a class="dropdown-item category" data-category="Sofa" href="#">Sofas</a></li>
                        <li><a class="dropdown-item category" data-category="Kasur" href="#">Beds</a></li>
                        <li><a class="dropdown-item category" data-category="Lemari" href="#">Cabinet</a></li>
                    </ul>
                </div>

                <!-- Tempat Menampilkan Produk -->
                <div id="product-list" class="row mt-4">
                    <!-- Produk akan dimuat di sini -->
                </div>
            </div>
        </div>
    </div>
    <!-- End dropdown menu -->


    <div class="untree_co-section product-section before-footer-section">
        <div class="container">
            <div class="row" id="product-list" style="display: flex; flex-wrap: wrap;">
                @foreach ($products as $product)
                    <!-- Start Column 1 -->
                    <div class="col-12 col-md-4 col-lg-3 mb-5">
                        <a class="product-item" href="/cart">
                            <img src="{{ asset('storage/' . $product->gambar_product) }}"
                                class="img-fluid product-thumbnail" alt="{{ $product->nama_product }}" />
                            <h3 class="product-title">{{ $product->nama_product }}</h3>
                            <strong class="product-price"><strong>Rp {{ $product->harga_product }}</strong></strong>

                            <span class="icon-cross">
                                <img src="images/cross.svg" class="img-fluid">
                            </span>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- End Column 1 -->



    <!-- Start Footer Section -->
    <footer class="footer-section">
        <div class="container relative">
            <div class="sofa-img">
                <img src="images/sofa.png" alt="Image" class="img-fluid" />
            </div>

            <div class="row">
                <div class="col-lg-8">
                    <div class="subscription-form">
                        <h3 class="d-flex align-items-center">
                            <span class="me-1"><img src="images/envelope-outline.svg" alt="Image"
                                    class="img-fluid" /></span><span>Subscribe to Newsletter</span>
                        </h3>

                        <form action="#" class="row g-3">
                            <div class="col-auto">
                                <input type="text" class="form-control" placeholder="Enter your name" />
                            </div>
                            <div class="col-auto">
                                <input type="email" class="form-control" placeholder="Enter your email" />
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-primary">
                                    <span class="fa fa-paper-plane"></span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row g-5 mb-5">
                <div class="col-lg-4">
                    <div class="mb-4 footer-logo-wrap">
                        <a href="#" class="footer-logo">Akang Furniture<span>.</span></a>
                    </div>
                    <p class="mb-4">
                        Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio
                        quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
                        vulputate velit imperdiet dolor tempor tristique. Pellentesque
                        habitant
                    </p>

                    <ul class="list-unstyled custom-social">
                        <li>
                            <a href="#"><span class="fa fa-brands fa-facebook-f"></span></a>
                        </li>
                        <li>
                            <a href="#"><span class="fa fa-brands fa-twitter"></span></a>
                        </li>
                        <li>
                            <a href="#"><span class="fa fa-brands fa-instagram"></span></a>
                        </li>
                        <li>
                            <a href="#"><span class="fa fa-brands fa-linkedin"></span></a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-8">
                    <div class="row links-wrap">
                        <div class="col-6 col-sm-6 col-md-3">
                            <ul class="list-unstyled">
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Contact us</a></li>
                            </ul>
                        </div>

                        <div class="col-6 col-sm-6 col-md-3">
                            <ul class="list-unstyled">
                                <li><a href="#">Support</a></li>
                                <li><a href="#">Knowledge base</a></li>
                                <li><a href="#">Live chat</a></li>
                            </ul>
                        </div>

                        <div class="col-6 col-sm-6 col-md-3">
                            <ul class="list-unstyled">
                                <li><a href="#">Jobs</a></li>
                                <li><a href="#">Our team</a></li>
                                <li><a href="#">Leadership</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>

                        <div class="col-6 col-sm-6 col-md-3">
                            <ul class="list-unstyled">
                                <li><a href="#">Nordic Chair</a></li>
                                <li><a href="#">Kruzo Aero</a></li>
                                <li><a href="#">Ergonomic Chair</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border-top copyright">
                <div class="row pt-4">
                    <div class="col-lg-6">
                        <p class="mb-2 text-center text-lg-start">
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            . All Rights Reserved. &mdash; Designed with love by Akang
                            Furniture
                            <!-- License information: https://untree.co/license/ -->
                        </p>
                    </div>

                    <div class="col-lg-6 text-center text-lg-end">
                        <ul class="list-unstyled d-inline-flex ms-auto">
                            <li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer Section -->

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/custom.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".category").click(function(e) {
                e.preventDefault(); // Mencegah reload halaman

                let kategori = $(this).data("category");
                console.log("Kategori dipilih:", kategori); // Debugging

                $.ajax({
                    url: "/products/filter/" + kategori,
                    type: "GET",
                    dataType: "json",
                    success: function(response) {
                        console.log("Produk diterima dari server:", response); // Debugging

                        let productList = $("#product-list");
                        productList
                    .empty(); // 🔥 Kosongkan daftar produk sebelum menampilkan yang baru

                        if (response.length > 0) {
                            response.forEach(function(product) {
                                // Pastikan gambar dari storage Laravel
                                let imageUrl = product.gambar_product ?
                                    `/storage/${product.gambar_product}` :
                                    "/storage/default.jpg"; // Default jika gambar tidak ada

                                let price = product.harga_product ?
                                    product.harga_product.toLocaleString() :
                                    "Harga tidak tersedia";

                                let productHTML = `
                            <div class="col-12 col-md-4 col-lg-3 mb-4">
                                <a class="product-item" href="/cart">
                                    <img src="${imageUrl}" class="img-fluid product-thumbnail" alt="${product.nama_product}">
                                    <h3 class="product-title">${product.nama_product}</h3>
                                    <strong class="product-price">Rp ${price}</strong>

                                    <span class="icon-cross">
                                        <img src="images/cross.svg" class="img-fluid">
                                    </span>
                                </a>
                            </div>
                        `;
                                productList.append(productHTML);
                            });
                        } else {
                            productList.append(
                                "<p class='text-center'>Produk tidak ditemukan.</p>");
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error("AJAX Error:", status, error);
                    }
                });
            });
        });
    </script>

</body>

</html>
