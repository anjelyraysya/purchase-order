<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Product</title>
    <!-- Link AdminLTE CSS -->
    <!-- Menyertakan file CSS AdminLTE versi 3.1 untuk memberikan tampilan antarmuka admin yang modern dan interaktif -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">

    <!-- Link Font Awesome -->
    <!-- Menyertakan pustaka ikon Font Awesome versi 5.15.3, yang memungkinkan penggunaan ikon vektor seperti ikon plus, pensil, dll. -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Link Bootstrap CSS -->
    <!-- Menyertakan file CSS Bootstrap versi 4.5.2 untuk mendukung layout responsif dan elemen antarmuka siap pakai seperti tombol, form, modal, dll. -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Link Bootstrap Icons -->
    <!-- Menyertakan pustaka Bootstrap Icons yang menyediakan ikon-ikon untuk elemen visual di dalam proyek, seperti ikon plus, pensil, dan lainnya -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- SweetAlert2: Library untuk menampilkan notifikasi yang menarik dan interaktif -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Menambahkan animate.css untuk efek animasi pada elemen halaman -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>



    <style>
        body {
            background-color: #f4f6f9; /* Background color */
        }

        .content-wrapper {
            margin-top: 20px;
        }

        .main-footer {
            text-align: center;
            padding: 10px;
            position: fixed;
            width: 100%;
            bottom: 0;
            background-color: #f8f9fa;
        }
        

        .card {
            margin-bottom: 20px;
            cursor: pointer;
        }
         /* General badge style */
        .navbar-badge {
         font-size: 8px; /* Set a smaller font size for badge numbers */
         font-weight: bold; /* Keep the numbers bold for visibility */
         padding: 2px 5px; /* Keep the badges compact */
         line-height: 1; /* Keep the text centered */
         min-width: 15px; /* Ensure badge has minimum width */
         min-height: 15px; /* Ensure badge has minimum height */
         border-radius: 50%; /* Make the badge circular */
         display: inline-block; /* Ensure it's inline for placement */
         text-align: center; /* Center the text inside */
         vertical-align: middle; /* Vertically center text */
    }

        /* Specific styling for notification badge (number 3) */
        .badge-danger {
         background-color: #dc3545; /* Keep the background color for notification */
         font-size: 8px; /* Adjust the font size for the number 3 */
    }

         /* Specific styling for warning badge (number 5) */
         .badge-warning {
         background-color: #ffc107; /* Keep the background color for warnings */
         font-size: 8px; /* Adjust the font size for the number 5 */
    }

         /* Optional: Adjust the icon size if needed */
         .nav-link i {
          font-size: 18px; /* Adjust icon size for better visibility */
    }

         /* Adjust font size for navbar links */
          .navbar-nav .nav-link {
           font-size: 15px; /* Make sure navbar links remain readable */
    }

        /* Modal content font adjustments */
          .modal-title {
           font-size: 18px; /* Ensure modal titles stand out */
    }

          .modal-body p {
           font-size: 15px; /* Keep modal text comfortable to read */
    }


        /* Default state of submenu: hidden */
         .nav-treeview {
           display: none;
    }

        /* When the parent menu item is hovered, show the submenu */
         .nav-item.has-treeview:hover > .nav-treeview {
           display: block;
           margin-left: 20px; /* Optional for better indentation */
    }

        /* Styling for submenu items */
            .nav-treeview .nav-item {
               padding-left: 20px; /* Optional for better indentation */
   }

        /* Adjust icons when hovering over parent */
            .nav-item.has-treeview:hover > a > p > i.right {
             transform: rotate(90deg);
             transition: transform 0.3s ease;
    }


    .full-width-card {
    width: 100%; /* Ensures the card takes the full width of its container */
    border: 1px solid #dee2e6; /* Light gray border for the card */
    border-radius: 0.25rem; /* Slightly rounded corners */
    margin: 0; /* Removes default margin */
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Adds a subtle shadow for depth */
}

.table {
    width: 100%; /* Ensures the table takes the full width of the card */
    margin-bottom: 1rem; /* Adds some space at the bottom */
}

.table th, .table td {
    vertical-align: middle; /* Centers content vertically */
    text-align: center; /* Centers content horizontally */
}

/* Optional: Style for table header */
.table thead th {
    background-color: #007bff; /* Blue background for the header */
    color: white; /* White text for header */
    font-weight: bold; /* Makes header text bold */
}

/* Optional: Style for alternating row colors */
.table tbody tr:nth-child(even) {
    background-color: #f2f2f2; /* Light gray background for even rows */
}




/* Ensure that the content wrapper takes full width */
.content-wrapper {
    width: 200%; /* Allow it to expand to full width */
    padding: 0; /* Remove padding to use the full width of the screen */
}

/* Make sure the container is fluid and utilizes the full width */
.container-fluid {
    width: 100%; /* Full width for the container */
    padding-left: 0; /* Remove padding to use full width */
    padding-right: 0;
}

/* Set the card to full width */
.card {
    width: 100%; /* Make card full width */
}


/* Adjust card body padding */
.card-body {
    padding: 1rem; /* Adjust padding as necessary */
}

/* Additional styling to remove any default margins or paddings */
.card {
    margin: 0; /* Remove margin around the card */
}



/* Full-width navbar */
.main-header.navbar {
    width: 200%; /* Full width for the navbar */
    padding: 0 15px; /* Optional: Add horizontal padding if desired */
}



/* Memperkecil ukuran tombol tetapi menambah lebar */
.btn-sm {
    padding: 10px 20px; /* Padding lebih besar untuk tombol lebih lebar */
    font-size: 12px;    /* Ukuran font tetap kecil */
    border-radius: 5px; /* Sedikit membulatkan sudut tombol */
}

/* Atur ikon agar lebih kecil */
.btn-sm i {
    font-size: 14px; /* Ukuran ikon lebih sesuai */
    margin-right: 5px; /* Jarak antara ikon dan teks */
}

/* Menambahkan jarak antar tombol secara vertikal (atas-bawah) */
td .btn {
    display: block; /* Agar tombol tampil vertikal */
    width: 100%; /* Lebar tombol penuh sesuai kolom */
    margin-bottom: 15px; /* Jarak antar tombol lebih besar */
}

/* Menyamakan ukuran tombol dengan lebar yang lebih besar */
.equal-btn {
    min-width: 100px; /* Ukuran minimal tombol lebih besar */
    text-align: center; /* Teks di tengah */
    padding: 10px 20px; /* Padding untuk membuat tombol lebih besar */
    display: block; /* Tampilkan tombol sebagai blok vertikal */
    margin-bottom: 10px; /* Jarak antar tombol secara vertikal */
}

/* Style tambahan untuk warna tombol */
.btn-warning {
    background-color: #ffc107;
    border-color: #ffc107;
    color: #fff; /* Warna teks putih untuk kontras */
}

.btn-danger {
    background-color: #dc3545;
    border-color: #dc3545;
    color: #fff; /* Warna teks putih untuk kontras */
}






/* Style for the card */
.card {
    border: 1px solid #d2d6de; /* Light gray border color */
    border-radius: 0.5rem; /* Rounded corners */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow */
    margin-bottom: 1.5rem; /* Spacing below the card */
}

/* Header style */
.card-header {
    background-color: #a64bdc; /* Vibrant purple background color */
    color: #fff; /* White text color */
    padding: 1rem; /* Padding for header */
    border-top-left-radius: 0.5rem; /* Rounded corners for header */
    border-top-right-radius: 0.5rem; /* Rounded corners for header */
}

/* Table styles */
.table {
    margin: 0; /* Remove margin */
    border-collapse: collapse; /* Ensure no space between borders */
}

/* Table header styles */
.table thead th {
    background-color: #a64bdc; /* Vibrant purple for header background */
    color: #fff; /* White text color for header */
    padding: 0.75rem; /* Padding for header cells */
    border: 1px solid #8e3bb7; /* Darker purple border for header cells */
}

/* Table cell styles */
.table tbody td {
    padding: 0.75rem; /* Padding for body cells */
    border: 1px solid #d2d6de; /* Light gray border for cells */
}

/* Action button styles */
.table tbody td:last-child {
    text-align: center; /* Center align the action buttons */
}

/* Add hover effect on rows */
.table tbody tr:hover {
    background-color: #e9d1f0; /* Light pastel purple background on hover */
}

/* Responsive adjustments */
@media (max-width: 576px) {
    .card {
        margin: 1rem; /* Add margin for smaller screens */
    }
}






/* Styling the modal container */
.modal-content {
    padding: 30px; /* Increased padding for more space */
    border-radius: 12px; /* More rounded corners */
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2); /* Stronger shadow for depth */
    background: linear-gradient(135deg, #ffffff, #f9f9f9); /* Gradient background for a soft look */
}

/* Styling the title */
.modal-title {
    text-align: center; /* Center the title */
    font-size: 26px; /* Larger font size for the title */
    margin-bottom: 20px; /* Space below title */
    color: #333; /* Dark color for better readability */
    font-weight: 600; /* Bold title */
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
}

/* Styling the form groups */
.form-group {
    margin-bottom: 25px; /* More space between form groups */
}

.form-group label {
    display: block;
    font-weight: 500; /* Medium weight for labels */
    margin-bottom: 8px; /* Space below labels */
    color: #444; /* Slightly darker for better readability */
    text-align: left; /* Align labels to the left */
    font-size: 16px; /* Adjusted font size for labels */
}

/* Input and textarea styles */
.form-group input, 
.form-group textarea {
    width: 100%;
    padding: 10px; /* Standard padding for inputs */
    border: 1px solid #ccc; /* Border styling */
    border-radius: 15px; /* Consistent rounded corners */
    box-sizing: border-box;
    font-size: 16px; /* Consistent font size for inputs */
}

/* Responsive adjustments */
@media (max-width: 600px) {
    .form-group input, 
    .form-group textarea {
        font-size: 14px; /* Adjust font size for mobile */
        padding: 8px; /* Adjust padding for mobile */
    }
    
    .modal-footer button {
        padding: 10px 16px; /* Adjust button padding for mobile */
        font-size: 14px; /* Adjust button font size for mobile */
    }
}

</style>

</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">

     <!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Search Menu -->
        <li class="nav-item">
            <a class="nav-link" href="#" id="searchBtn" role="button">
                <i class="fas fa-search"></i>
            </a>
        </li>
        <!-- Notifications Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="fas fa-bell"></i>
                <span class="badge badge-danger navbar-badge">3</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-header">3 Notifications</span>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-envelope mr-2"></i> 1 new message
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-users mr-2"></i> 2 friend requests
                </a>
            </div>
        </li>
        <!-- Warnings Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="fas fa-exclamation-circle"></i>
                <span class="badge badge-warning navbar-badge">5</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-header">5 Warnings</span>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-exclamation-triangle mr-2"></i> System Alert
                </a>
            </div>
        </li>
       <!-- Options Menu -->
<li class="nav-item dropdown">
    <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="fas fa-cog"></i>
    </a>
    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <span class="dropdown-header">Zoom Settings</span>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item" id="zoomIn">
            <i class="fas fa-search-plus mr-2"></i> Zoom In
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item" id="zoomOut">
            <i class="fas fa-search-minus mr-2"></i> Zoom Out
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item" id="resetZoom">
            <i class="fas fa-compress mr-2"></i> Reset Zoom
        </a>
    </div>
</li>
        <!-- Profile Menu -->
        <li class="nav-item">
            <a class="nav-link" href="#" id="profileBtn" role="button">
                <i class="fas fa-user-circle"></i>
            </a>
        </li>
    </ul>
</nav>

<!-- Search Modal -->
<div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="searchModalLabel">Search</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="text" id="searchInput" class="form-control" placeholder="Type your search here...">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="searchSubmit">Search</button>
      </div>
    </div>
  </div>
</div>

<!-- Tempat untuk hasil pencarian -->
<div id="searchResults" class="mt-3"></div>


<!-- Profile Modal -->
<div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="profileModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="profileModalLabel">Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Name : namamemberbaru</p>
        <p>Email : memberru@example.com</p>
        <button type="button" class="btn btn-danger">Logout</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="#" class="brand-link">
                <img src="https://adminlte.io/themes/v3/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">
                <span class="brand-text font-weight-light">AdminLTE Dashboard</span>
            </a>
         
            
            <a href="#" class="brand-link">
  <!-- Avatar Gambar -->
  <img src="https://randomuser.me/api/portraits/women/6.jpg" alt="Avatar Perempuan Hijab 1" class="brand-image img-circle elevation-3" width="33" height="33">
  <span class="brand-text font-weight-light">Anjely Raysya</span>
</a>

<!-- Search Bar with Transparent Border -->
<div class="sidebar-search" style="border-top: 1px solid transparent; padding-top: 10px;">
  <form class="form-inline">
    <div class="input-group">
      <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
      <div class="input-group-append">
        <button class="btn btn-sidebar">
          <i class="fas fa-search"></i>
        </button>
      </div>
    </div>
  </form>
</div>

        <div class="sidebar">
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
           <!-- Item Menu Dashboard -->
           <li class="nav-item">
                <a href="{{ url('admin/dashboard') }}" class="nav-link"> <!-- Menandakan Dashboard tanpa aktif -->
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Dashboard</p>
                </a>
            </li>
             <!-- Master Data Menu with Submenus -->
<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-database"></i>
        <p>
            Master Data
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <!-- User Submenu -->
        <li class="nav-item">
            <a href="{{ url('admin/users') }}" class="nav-link">
                <i class="nav-icon fas fa-user"></i> <!-- Icon untuk Users -->
                <p>Users</p>
            </a>
        </li>
        <!-- Supplier Submenu -->
        <li class="nav-item">
            <a href="{{ url('admin/suppliers') }}" class="nav-link">
                <i class="nav-icon fas fa-truck"></i> <!-- Icon untuk Suppliers -->
                <p>Suppliers</p>
            </a>
        </li>
        <!-- Material Submenu -->
        <li class="nav-item">
            <a href="{{ url('admin/materials') }}" class="nav-link">
                <i class="nav-icon fas fa-boxes"></i> <!-- Icon untuk Materials -->
                <p>Materials</p>
            </a>
        </li>
       <!-- Product Submenu -->
<li class="nav-item">
    <a href="{{ url('products') }}" class="nav-link active bg-info text-white"> <!-- Menandakan Products sebagai aktif -->
        <i class="nav-icon fas fa-box-open"></i> <!-- Icon untuk Products -->
        <p>Products</p>
    </a>
</li>
    </ul>
</li>
<li class="nav-item">
    <a href="{{ url('admin/purchase-orders') }}" class="nav-link">
        <i class="nav-icon fas fa-shopping-cart"></i>
        <p>Purchase Orders</p>
    </a>
</li>
            <!-- Labels Section -->
            <li class="nav-header">LABELS</li>

<!-- Warning Label -->
<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-exclamation-circle text-warning"></i> <!-- Icon untuk Warning -->
        <p class="text">Warning</p>
    </a>
</li>

<!-- Important Label -->
<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-exclamation-triangle text-danger"></i> <!-- Icon untuk Important -->
        <p class="text">Important</p>
    </a>
</li>

<!-- Information Label -->
<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-info-circle text-info"></i> <!-- Icon untuk Information -->
        <p class="text">Information</p>
    </a>
</li>
        </ul>
    </nav>
</div>
        </aside>


   <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Daftar Produk</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Products</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <button class="btn btn-primary" data-toggle="modal" data-target="#addProductModal">
                    <i class="fas fa-plus"></i> Tambah Produk
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Daftar Produk</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <table class="table table-bordered">
                            <thead>
                                  <tr>
                                      <th>ID</th>
                                      <th>Judul</th>
                                      <th>Deskripsi</th>
                                      <th>Kategori</th>
                                      <th>Harga</th>
                                      <th>Diskon (%)</th>
                                      <th>Rating</th>
                                      <th>Stok</th>
                                      <th>Gambar</th> <!-- Kolom untuk gambar -->
                                      <th>Tags</th>
                                      <th>SKU</th>
                                      <th>Berat</th>
                                      <th>Lebar</th>
                                      <th>Tinggi</th>
                                      <th>Kedalaman</th>
                                      <th>Informasi Garansi</th>
                                      <th>Informasi Pengiriman</th>
                                      <th>Status Ketersediaan</th>
                                      <th>Kebijakan Pengembalian</th>
                                      <th>Kuota Pesanan Minimum</th>
                                      <th>Dibuat Pada</th>
                                      <th>Diperbarui Pada</th>
                                      <th>Barcode</th>
                                      <th>Kode QR</th>
                                      <th>Aksi</th>
                                    </tr>
                                </thead>
                                        <tbody id="productTableBody">
                                        <!-- Produk akan ditampilkan di sini -->
                                       </tbody>
                                </table>


 


<!-- Add Product Modal -->
<div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="addProductModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="addProductModalLabel">
            <i class="bi bi-plus-circle"></i> <!-- Ikon Plus -->
            <i class="bi bi-box-seam"></i> <!-- Ikon Box atau produk -->
            Tambah Produk
            </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form for adding new product -->
                <form id="addProductForm">
                    <div class="form-group">
                        <label for="productTitle">Judul</label>
                        <input type="text" class="form-control" id="productTitle" required>
                    </div>
                    <div class="form-group">
                        <label for="productDescription">Deskripsi</label>
                        <textarea class="form-control" id="productDescription" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="productCategory">Kategori</label>
                        <input type="text" class="form-control" id="productCategory" required>
                    </div>
                    <div class="form-group">
                        <label for="productPrice">Harga</label>
                        <input type="number" class="form-control" id="productPrice" required>
                    </div>
                    <div class="form-group">
                        <label for="productDiscount">Diskon (%)</label>
                        <input type="number" class="form-control" id="productDiscount" required>
                    </div>
                    <div class="form-group">
                        <label for="productRating">Rating</label>
                        <input type="number" class="form-control" id="productRating" required>
                    </div>
                    <div class="form-group">
                        <label for="productStock">Stok</label>
                        <input type="number" class="form-control" id="productStock" required>
                    </div>
                    <div class="form-group">
                        <label for="productImage">Gambar</label>
                        <input type="file" class="form-control" id="productImage">
                    </div>
                    <div class="form-group">
                        <label for="productTags">Tags</label>
                        <input type="text" class="form-control" id="productTags">
                    </div>
                    <div class="form-group">
                        <label for="productSKU">SKU</label>
                        <input type="text" class="form-control" id="productSKU">
                    </div>
                    <div class="form-group">
                        <label for="productWeight">Berat</label>
                        <input type="number" class="form-control" id="productWeight">
                    </div>
                    <div class="form-group">
                        <label for="productWidth">Lebar</label>
                        <input type="number" class="form-control" id="productWidth">
                    </div>
                    <div class="form-group">
                        <label for="productHeight">Tinggi</label>
                        <input type="number" class="form-control" id="productHeight">
                    </div>
                    <div class="form-group">
                        <label for="productDepth">Kedalaman</label>
                        <input type="number" class="form-control" id="productDepth">
                    </div>
                    <div class="form-group">
                        <label for="productWarrantyInfo">Informasi Garansi</label>
                        <input type="text" class="form-control" id="productWarrantyInfo">
                    </div>
                    <div class="form-group">
                        <label for="productShippingInfo">Informasi Pengiriman</label>
                        <input type="text" class="form-control" id="productShippingInfo">
                    </div>
                    <div class="form-group">
                        <label for="productAvailabilityStatus">Status Ketersediaan</label>
                        <input type="text" class="form-control" id="productAvailabilityStatus">
                    </div>
                    <div class="form-group">
                        <label for="productReturnPolicy">Kebijakan Pengembalian</label>
                        <input type="text" class="form-control" id="productReturnPolicy">
                    </div>
                    <div class="form-group">
                        <label for="productMinOrderQuota">Kuota Pesanan Minimum</label>
                        <input type="number" class="form-control" id="productMinOrderQuota">
                    </div>
                    <div class="form-group">
                        <label for="productCreatedAt">Dibuat Pada</label>
                        <input type="datetime-local" class="form-control" id="productCreatedAt">
                    </div>
                    <div class="form-group">
                        <label for="productUpdatedAt">Diperbarui Pada</label>
                        <input type="datetime-local" class="form-control" id="productUpdatedAt">
                    </div>
                    <div class="form-group">
                        <label for="productBarcode">Barcode</label>
                        <input type="text" class="form-control" id="productBarcode" placeholder="Masukkan barcode" oninput="generateQRCode()">
                    </div>
                    <div class="form-group">
                        <label for="qrImage">Gambar untuk QR Code</label>
                        <input type="file" class="form-control" id="qrImage">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">
            <i class="bi bi-x-circle"></i> Close
            </button>
            <button type="submit" class="btn btn-primary" form="addProductForm">
            <i class="bi bi-save"></i> Simpan Produk
            </button>
        </div>
        </div>
    </div>
</div>
 







<!-- Script JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>




<script>



$(document).ready(function() {
    
    // Data dimensi tambahan untuk produk
const productDimensions = [
    { createdAt: "2024-05-23T08:56:21.618Z", updatedAt: "2024-05-23T08:56:21.618Z", barcode: "9164035109868", width: 23.17, height: 14.43, depth: 28.01 },
    { createdAt: "2024-05-23T08:56:21.618Z", updatedAt: "2024-05-23T08:56:21.618Z", barcode: "2817839095220", width: 12.42, height: 8.63, depth: 29.13 },
    { createdAt: "2024-05-23T08:56:21.618Z", updatedAt: "2024-05-23T08:56:21.618Z", barcode: "0516267971277", width: 24.16, height: 10.7, depth: 11.07 },
    { createdAt: "2024-05-23T08:56:21.619Z", updatedAt: "2024-05-23T08:56:21.619Z", barcode: "9444582199406", width: 14.37, height: 13.94, depth: 14.6 },
    { createdAt: "2024-05-23T08:56:21.619Z", updatedAt: "2024-05-23T08:56:21.619Z", barcode: "3212847902461", width: 8.11, height: 10.89, depth: 29.06 },
    { createdAt: "2024-05-23T08:56:21.619Z", updatedAt: "2024-05-23T08:56:21.619Z", barcode: "2210136215089", width: 11.53, height: 14.44, depth: 6.81 },
    { createdAt: "2024-05-23T08:56:21.619Z", updatedAt: "2024-05-23T08:56:21.619Z", barcode: "1435582999795", width: 21.27, height: 28, depth: 11.89 },
    { createdAt: "2024-05-23T08:56:21.619Z", updatedAt: "2024-05-23T08:56:21.619Z", barcode: "0887083199279", width: 21.51, height: 7, depth: 26.51 },
    { createdAt: "2024-05-23T08:56:21.619Z", updatedAt: "2024-05-23T08:56:21.619Z", barcode: "1939383392674", width: 17, height: 24.57, depth: 13.3 },
    { createdAt: "2024-05-23T08:56:21.620Z", updatedAt: "2024-05-23T08:56:21.620Z", barcode: "8232190382069", width: 22.28, height: 17.81, depth: 27.18 },
    { createdAt: "2024-05-23T08:56:21.620Z", updatedAt: "2024-05-23T08:56:21.620Z", barcode: "7113807059215", width: 28.75, height: 26.88, depth: 24.47 },
    { createdAt: "2024-05-23T08:56:21.620Z", updatedAt: "2024-05-23T08:56:21.620Z", barcode: "0426785817074", width: 20.97, height: 19.11, depth: 25.81 },
    { createdAt: "2024-05-23T08:56:21.620Z", updatedAt: "2024-05-23T08:56:21.620Z", barcode: "2913244159666", width: 25.43, height: 20.2, depth: 24.95 },
    { createdAt: "2024-05-23T08:56:21.620Z", updatedAt: "2024-05-23T08:56:21.620Z", barcode: "0726316339746", width: 16.59, height: 21.46, depth: 29.07 },
    { createdAt: "2024-05-23T08:56:21.620Z", updatedAt: "2024-05-23T08:56:21.620Z", barcode: "7839797529453", width: 7.32, height: 22.64, depth: 12.37 },
    { createdAt: "2024-05-23T08:56:21.620Z", updatedAt: "2024-05-23T08:56:21.620Z", barcode: "2517819903837", width: 8.29, height: 5.58, depth: 12.41 },
    { createdAt: "2024-05-23T08:56:21.620Z", updatedAt: "2024-05-23T08:56:21.620Z", barcode: "8335515097879", width: 23.35, height: 13.48, depth: 26.4 },
    { createdAt: "2024-05-23T08:56:21.620Z", updatedAt: "2024-05-23T08:56:21.620Z", barcode: "5503491330693", width: 15.4, height: 13.97, depth: 25.13 },
    { createdAt: "2024-05-23T08:56:21.620Z", updatedAt: "2024-05-23T08:56:21.620Z", barcode: "0966223559510", width: 15.96, height: 29.24, depth: 26.25 },
    { createdAt: "2024-05-23T08:56:21.620Z", updatedAt: "2024-05-23T08:56:21.620Z", barcode: "6707669443381", width: 8.18, height: 27.45, depth: 27.88 },
    { createdAt: "2024-05-23T08:56:21.620Z", updatedAt: "2024-05-23T08:56:21.620Z", barcode: "2597004869708", width: 11.04, height: 20.5, depth: 8.18 },
    { createdAt: "2024-05-23T08:56:21.620Z", updatedAt: "2024-05-23T08:56:21.620Z", barcode: "7957222289508", width: 29.39, height: 29.77, depth: 20.54 },
    { createdAt: "2024-05-23T08:56:21.620Z", updatedAt: "2024-05-23T08:56:21.620Z", barcode: "7095702028776", width: 12.3, height: 10.99, depth: 15.53 },
    { createdAt: "2024-05-23T08:56:21.620Z", updatedAt: "2024-05-23T08:56:21.620Z", barcode: "4250692197342", width: 20.14, height: 8.4, depth: 10.01 },
    { createdAt: "2024-05-23T08:56:21.620Z", updatedAt: "2024-05-23T08:56:21.620Z", barcode: "7583442707568", width: 7.32, height: 14.31, depth: 21.38 },
    { createdAt: "2024-05-23T08:56:21.620Z", updatedAt: "2024-05-23T08:56:21.620Z", barcode: "8400326844874", width: 18.67, height: 21.17, depth: 25.26 },
    { createdAt: "2024-05-23T08:56:21.620Z", updatedAt: "2024-05-23T08:56:21.620Z", barcode: "0668665656044", width: 26.53, height: 27.11, depth: 6.63 },
    { createdAt: "2024-05-23T08:56:21.620Z", updatedAt: "2024-05-23T08:56:21.620Z", barcode: "9603960319256", width: 17.66, height: 24.49, depth: 25.98 },
    { createdAt: "2024-05-23T08:56:21.620Z", updatedAt: "2024-05-23T08:56:21.620Z", barcode: "8546824122355", width: 8.97, height: 12.26, depth: 15.05 },
    { createdAt: "2024-05-23T08:56:21.620Z", updatedAt: "2024-05-23T08:56:21.620Z", barcode: "3325493172934", width: 27.3, height: 7.48, depth: 15.08 }
];














   // Fungsi untuk menampilkan produk di tabel
function displayProducts(products) {
    const tableBody = $('#productTableBody');
    tableBody.empty(); // Hapus data yang sudah ada

    products.forEach((product, index) => {
        // Tambahkan data dimensi ke produk jika tersedia
        const dimensions = productDimensions[index % productDimensions.length]; // Menggunakan data dimensi berdasarkan indeks
        product.width = dimensions.width;
        product.height = dimensions.height;
        product.depth = dimensions.depth;

        // Menambahkan properti tambahan
        product.createdAt = new Date().toISOString(); // Menggunakan tanggal saat ini
        product.updatedAt = new Date().toISOString(); // Menggunakan tanggal saat ini
        product.barcode = Math.floor(Math.random() * 10000000000000);

        const qrCodeImageUrl = product.qrCode || `https://api.qrserver.com/v1/create-qr-code/?data=${product.id}&size=100x100`;

        tableBody.append(`
            <tr data-id="${product.id}">
                <td>${product.id || 'Tidak Ada ID'}</td>
                <td>${product.title || 'Tidak Ada Judul'}</td>
                <td>${product.description || 'Tidak Ada Deskripsi'}</td>
                <td>${product.category || 'Tidak Ada Kategori'}</td>
                <td>${product.price !== undefined ? product.price : 'Tidak Ada Harga'}</td>
                <td>${product.discountPercentage !== undefined ? product.discountPercentage : 'Tidak Ada Diskon'}</td>
                <td>${product.rating !== undefined ? product.rating : 'Tidak Ada Rating'}</td>
                <td>${product.stock !== undefined ? product.stock : 'Tidak Ada Info Stok'}</td>
                <td><img src="${product.thumbnail || 'https://via.placeholder.com/50'}" alt="${product.title || 'Tidak Ada Gambar'}" style="width: 50px; height: auto;"></td>
                <td>${product.tags ? product.tags.join(", ") : 'Tidak Ada Tag'}</td>
                <td>${product.sku || 'Tidak Ada SKU'}</td>
                <td>${product.weight || 'Tidak Ada Berat'}</td>
                <td>${product.width || 'Tidak Ada Lebar'}</td>
                <td>${product.height || 'Tidak Ada Tinggi'}</td>
                <td>${product.depth || 'Tidak Ada Kedalaman'}</td>
                <td>${product.warrantyInformation || 'Tidak Ada Info Garansi'}</td>
                <td>${product.shippingInformation || 'Tidak Ada Info Pengiriman'}</td>
                <td>${product.availabilityStatus || 'Tidak Ada Info Ketersediaan'}</td>
                <td>${product.returnPolicy || 'Tidak Ada Kebijakan Pengembalian'}</td>
                <td>${product.minimumOrderQuantity || 'Tidak Ada Kuota Minimum'}</td>
                <td>${product.createdAt || 'Tidak Ada Tanggal Pembuatan'}</td>
                <td>${product.updatedAt || 'Tidak Ada Tanggal Pembaruan'}</td>
                <td>${product.barcode || 'No Barcode'}</td>
                <td><img src="${qrCodeImageUrl}" alt="QR Code" style="width: 100px; height: auto;"></td>
                <td>
                <!-- Tombol Edit dengan ikon pensil -->
                <button class="btn btn-warning btn-sm edit-product equal-btn" data-id="${product.id}">
                <i class="fas fa-edit"></i> Edit
                </button>
                <!-- Tambahkan jarak antar tombol dengan margin -->
                <button class="btn btn-danger btn-sm delete-product equal-btn" data-id="${product.id}">
                <i class="fas fa-trash-alt"></i> Hapus
                </button>
            </td>
            </tr>
        `);
    });
}

// Fungsi untuk mengambil data produk dari API
function fetchProducts() {
    $.ajax({
        url: 'https://dummyjson.com/products',
        method: 'GET',
        success: function(response) {
            displayProducts(response.products);
        },
        error: function() {
            alert('Gagal mengambil data produk.');
        }
    });
}

// Fungsi untuk menghapus produk
function deleteProduct(productId) {
    // Tampilkan konfirmasi menggunakan SweetAlert
    Swal.fire({
        title: 'Apakah Anda yakin?',
        text: "Produk ini akan dihapus!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Hapus!',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            // Hapus produk dari tampilan
            $(`tr[data-id="${productId}"]`).remove();
            Swal.fire(
                'Dihapus!',
                'Produk telah berhasil dihapus.',
                'success'
            );
        }
    });
}

// Event listener untuk tombol hapus
$(document).on('click', '.delete-product', function() {
    const productId = $(this).data('id'); // Ambil ID produk dari tombol
    deleteProduct(productId);
});

// Ambil data dari API saat halaman dimuat
fetchProducts();

// Menampilkan tahun saat ini di footer
$("#currentYear").text(new Date().getFullYear());





// Fungsi untuk mengedit produk
async function editProduct(productId) {
    const row = $(`tr[data-id="${productId}"]`);
    const currentTitle = row.find('td:nth-child(2)').text();
    const currentDescription = row.find('td:nth-child(3)').text();
    const currentCategory = row.find('td:nth-child(4)').text();
    const currentPrice = row.find('td:nth-child(5)').text();
    const currentDiscount = row.find('td:nth-child(6)').text();
    const currentRating = row.find('td:nth-child(7)').text();
    const currentStock = row.find('td:nth-child(8)').text();
    const currentThumbnailSrc = row.find('td:nth-child(9) img.thumbnail').attr('src');
    const currentTags = row.find('td:nth-child(10)').text();
    const currentSKU = row.find('td:nth-child(11)').text();
    const currentWeight = row.find('td:nth-child(12)').text();
    const currentWidth = row.find('td:nth-child(13)').text();
    const currentHeight = row.find('td:nth-child(14)').text();
    const currentDepth = row.find('td:nth-child(15)').text();
    const currentWarrantyInfo = row.find('td:nth-child(16)').text();
    const currentShippingInfo = row.find('td:nth-child(17)').text();
    const currentAvailabilityStatus = row.find('td:nth-child(18)').text();
    const currentReturnPolicy = row.find('td:nth-child(19)').text();
    const currentMinOrderQuota = row.find('td:nth-child(20)').text();
    const currentCreatedAt = row.find('td:nth-child(21)').text();
    const currentUpdatedAt = row.find('td:nth-child(22)').text();
    const currentBarcode = row.find('td:nth-child(23)').text();
    const currentQrCodeSrc = row.find('td:nth-child(24) img.qr-code').attr('src');

    const { value: formValues } = await Swal.fire({
        title: 'Edit Produk',
        html: `
            <div class="form-group">
                <label>Judul</label>
                <input id="swal-input-title" class="swal2-input" placeholder="Judul" value="${currentTitle}">
            </div>
            <div class="form-group">
                <label>Deskripsi</label>
                <input id="swal-input-description" class="swal2-input" placeholder="Deskripsi" value="${currentDescription}">
            </div>
            <div class="form-group">
                <label>Kategori</label>
                <input id="swal-input-category" class="swal2-input" placeholder="Kategori" value="${currentCategory}">
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input id="swal-input-price" class="swal2-input" placeholder="Harga" value="${currentPrice}">
            </div>
            <div class="form-group">
                <label>Diskon</label>
                <input id="swal-input-discount" class="swal2-input" placeholder="Diskon" value="${currentDiscount}">
            </div>
            <div class="form-group">
                <label>Rating</label>
                <input id="swal-input-rating" class="swal2-input" placeholder="Rating" value="${currentRating}">
            </div>
            <div class="form-group">
                <label>Stok</label>
                <input id="swal-input-stock" class="swal2-input" placeholder="Stok" value="${currentStock}">
            </div>
            <div class="form-group">
                <label>Tags</label>
                <input id="swal-input-tags" class="swal2-input" placeholder="Tags" value="${currentTags}">
            </div>
            <div class="form-group">
                <label>SKU</label>
                <input id="swal-input-sku" class="swal2-input" placeholder="SKU" value="${currentSKU}">
            </div>
            <div class="form-group">
                <label>Berat</label>
                <input id="swal-input-weight" class="swal2-input" placeholder="Berat" value="${currentWeight}">
            </div>
            <div class="form-group">
                <label>Lebar</label>
                <input id="swal-input-width" class="swal2-input" placeholder="Lebar" value="${currentWidth}">
            </div>
            <div class="form-group">
                <label>Tinggi</label>
                <input id="swal-input-height" class="swal2-input" placeholder="Tinggi" value="${currentHeight}">
            </div>
            <div class="form-group">
                <label>Kedalaman</label>
                <input id="swal-input-depth" class="swal2-input" placeholder="Kedalaman" value="${currentDepth}">
            </div>
            <div class="form-group">
                <label>Info Garansi</label>
                <input id="swal-input-warranty" class="swal2-input" placeholder="Info Garansi" value="${currentWarrantyInfo}">
            </div>
            <div class="form-group">
                <label>Info Pengiriman</label>
                <input id="swal-input-shipping" class="swal2-input" placeholder="Info Pengiriman" value="${currentShippingInfo}">
            </div>
            <div class="form-group">
                <label>Status Ketersediaan</label>
                <input id="swal-input-availability" class="swal2-input" placeholder="Status Ketersediaan" value="${currentAvailabilityStatus}">
            </div>
            <div class="form-group">
                <label>Kebijakan Pengembalian</label>
                <input id="swal-input-return" class="swal2-input" placeholder="Kebijakan Pengembalian" value="${currentReturnPolicy}">
            </div>
            <div class="form-group">
                <label>Kuota Pesanan Minimum</label>
                <input id="swal-input-minorder" class="swal2-input" placeholder="Kuota Pesanan Minimum" value="${currentMinOrderQuota}">
            </div>
            <div class="form-group">
                <label>Tanggal Dibuat</label>
                <input id="swal-input-created" class="swal2-input" placeholder="Tanggal Dibuat" value="${currentCreatedAt}">
            </div>
            <div class="form-group">
                <label>Tanggal Diperbarui</label>
                <input id="swal-input-updated" class="swal2-input" placeholder="Tanggal Diperbarui" value="${currentUpdatedAt}">
            </div>
            <div class="form-group">
                <label>Barcode</label>
                <input id="swal-input-barcode" class="swal2-input" placeholder="Barcode" value="${currentBarcode}">
            </div>
            <div class="form-group">
                <label>Thumbnail</label>
                <input id="swal-input-thumbnail" type="file" class="swal2-input" accept="image/*">
                <img id="thumbnail-preview" src="${currentThumbnailSrc}" style="width: 100px; margin-top: 10px;">
            </div>
            <div class="form-group">
                <label>Kode QR</label>
                <input id="swal-input-qrcode" type="file" class="swal2-input" accept="image/*">
                <img id="qrcode-preview" src="${currentQrCodeSrc}" style="width: 100px; margin-top: 10px;">
            </div>`,
        focusConfirm: false,
        preConfirm: () => {
            return {
                title: document.getElementById('swal-input-title').value,
                description: document.getElementById('swal-input-description').value,
                category: document.getElementById('swal-input-category').value,
                price: document.getElementById('swal-input-price').value,
                discount: document.getElementById('swal-input-discount').value,
                rating: document.getElementById('swal-input-rating').value,
                stock: document.getElementById('swal-input-stock').value,
                tags: document.getElementById('swal-input-tags').value,
                sku: document.getElementById('swal-input-sku').value,
                weight: document.getElementById('swal-input-weight').value,
                width: document.getElementById('swal-input-width').value,
                height: document.getElementById('swal-input-height').value,
                depth: document.getElementById('swal-input-depth').value,
                warranty: document.getElementById('swal-input-warranty').value,
                shipping: document.getElementById('swal-input-shipping').value,
                availability: document.getElementById('swal-input-availability').value,
                returnPolicy: document.getElementById('swal-input-return').value,
                minOrder: document.getElementById('swal-input-minorder').value,
                created: document.getElementById('swal-input-created').value,
                updated: document.getElementById('swal-input-updated').value,
                barcode: document.getElementById('swal-input-barcode').value,
                thumbnail: document.getElementById('swal-input-thumbnail').files[0],
                qrCode: document.getElementById('swal-input-qrcode').files[0],
            }
        }
    });

    // Setelah input form diterima
    if (formValues) {
        // Perbarui sel di tabel dengan nilai yang baru
        row.find('td:nth-child(2)').text(formValues.title);
        row.find('td:nth-child(3)').text(formValues.description);
        row.find('td:nth-child(4)').text(formValues.category);
        row.find('td:nth-child(5)').text(formValues.price);
        row.find('td:nth-child(6)').text(formValues.discount);
        row.find('td:nth-child(7)').text(formValues.rating);
        row.find('td:nth-child(8)').text(formValues.stock);
        row.find('td:nth-child(10)').text(formValues.tags);
        row.find('td:nth-child(11)').text(formValues.sku);
        row.find('td:nth-child(12)').text(formValues.weight);
        row.find('td:nth-child(13)').text(formValues.width);
        row.find('td:nth-child(14)').text(formValues.height);
        row.find('td:nth-child(15)').text(formValues.depth);
        row.find('td:nth-child(16)').text(formValues.warranty);
        row.find('td:nth-child(17)').text(formValues.shipping);
        row.find('td:nth-child(18)').text(formValues.availability);
        row.find('td:nth-child(19)').text(formValues.returnPolicy);
        row.find('td:nth-child(20)').text(formValues.minOrder);
        row.find('td:nth-child(21)').text(formValues.created);
        row.find('td:nth-child(22)').text(formValues.updated);
        row.find('td:nth-child(23)').text(formValues.barcode);

        // Perbarui gambar thumbnail dan qr-code jika ada file baru yang diunggah
        if (formValues.thumbnail) {
            const thumbnailReader = new FileReader();
            thumbnailReader.onload = function (e) {
                row.find('td:nth-child(9) img.thumbnail').attr('src', e.target.result);
            };
            thumbnailReader.readAsDataURL(formValues.thumbnail);
        }

        if (formValues.qrCode) {
            const qrCodeReader = new FileReader();
            qrCodeReader.onload = function (e) {
                row.find('td:nth-child(24) img.qr-code').attr('src', e.target.result);
            };
            qrCodeReader.readAsDataURL(formValues.qrCode);
        }

        // Tampilkan notifikasi sukses
        Swal.fire('Berhasil!', 'Data produk berhasil diperbarui.', 'success');
    } else {
        Swal.fire('Dibatalkan', 'Perubahan tidak disimpan', 'info');
    }
}


// Event listener for file input changes to show previews
$(document).on('change', '#swal-input-thumbnail', function() {
    const file = this.files[0];
    const reader = new FileReader();
    reader.onload = function(e) {
        $('#thumbnail-preview').attr('src', e.target.result);
    };
    reader.readAsDataURL(file);
});

$(document).on('change', '#swal-input-qrcode', function() {
    const file = this.files[0];
    const reader = new FileReader();
    reader.onload = function(e) {
        $('#qrcode-preview').attr('src', e.target.result);
    };
    reader.readAsDataURL(file);
});





// Event listener untuk tombol edit
$(document).on('click', '.edit-product', function() {
    const productId = $(this).data('id');
    editProduct(productId);
});



// Event listener untuk tombol hapus
$(document).on('click', '.delete-product', function() {
    const productId = $(this).data('id');
    deleteProduct(productId);
});



    // Menampilkan tahun saat ini di footer
    $("#currentYear").text(new Date().getFullYear());
});























































// Fungsi untuk mengambil data dari form dan menambahkan produk
document.getElementById("addProductForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Mencegah refresh halaman

    // Ambil data produk dari form
    let productTitle = document.getElementById("productTitle").value;
    let productDescription = document.getElementById("productDescription").value;
    let productCategory = document.getElementById("productCategory").value;
    let productPrice = document.getElementById("productPrice").value;
    let productDiscount = document.getElementById("productDiscount").value;
    let productRating = document.getElementById("productRating").value;
    let productStock = document.getElementById("productStock").value;
    let productImage = document.getElementById("productImage").files[0]; // Ambil file gambar
    let productTags = document.getElementById("productTags").value;
    let productSKU = document.getElementById("productSKU").value;
    let productWeight = document.getElementById("productWeight").value;
    let productWidth = document.getElementById("productWidth").value;
    let productHeight = document.getElementById("productHeight").value;
    let productDepth = document.getElementById("productDepth").value;
    let productWarrantyInfo = document.getElementById("productWarrantyInfo").value;
    let productShippingInfo = document.getElementById("productShippingInfo").value;
    let productAvailabilityStatus = document.getElementById("productAvailabilityStatus").value;
    let productReturnPolicy = document.getElementById("productReturnPolicy").value;
    let productMinOrderQuota = document.getElementById("productMinOrderQuota").value;
    let productCreatedAt = document.getElementById("productCreatedAt").value;
    let productUpdatedAt = document.getElementById("productUpdatedAt").value;
    let productBarcode = document.getElementById("productBarcode").value;

    // QR code generation dummy (Replace this with actual QR code generation if needed)
    let productQRCode = "GeneratedQRCode";

    // Tambahkan data produk ke dalam tabel
    let productTableBody = document.getElementById("productTableBody");

    // Hitung jumlah baris yang ada untuk menentukan ID otomatis
    let productIdCounter = productTableBody.rows.length + 1; // Otomatis mengikuti jumlah baris

    let newRow = productTableBody.insertRow();
    newRow.dataset.id = productIdCounter; // Menyimpan ID di atribut data-id

    newRow.innerHTML = `
        <td>${productIdCounter}</td>
        <td>${productTitle}</td>
        <td>${productDescription}</td>
        <td>${productCategory}</td>
        <td>${productPrice}</td>
        <td>${productDiscount}</td>
        <td>${productRating}</td>
        <td>${productStock}</td>
        <td><img src="${URL.createObjectURL(productImage)}" alt="Gambar Produk" class="thumbnail" width="50"></td>
        <td>${productTags}</td>
        <td>${productSKU}</td>
        <td>${productWeight}</td>
        <td>${productWidth}</td>
        <td>${productHeight}</td>
        <td>${productDepth}</td>
        <td>${productWarrantyInfo}</td>
        <td>${productShippingInfo}</td>
        <td>${productAvailabilityStatus}</td>
        <td>${productReturnPolicy}</td>
        <td>${productMinOrderQuota}</td>
        <td>${productCreatedAt}</td>
        <td>${productUpdatedAt}</td>
        <td>${productBarcode}</td>
        <td><img src="${URL.createObjectURL(productImage)}" alt="QR Code" class="qr-code" width="50"></td>
        <td>
            <button class="btn btn-warning btn-sm edit-product" data-id="${productIdCounter}">
                <i class="fas fa-edit"></i> Edit
            </button>
            <button class="btn btn-danger btn-sm delete-product" data-id="${productIdCounter}">
                <i class="fas fa-trash-alt"></i> Hapus
            </button>
        </td>
    `;

    // Notifikasi produk berhasil ditambahkan
    Swal.fire({
        icon: 'success',
        title: 'Berhasil!',
        text: 'Produk berhasil ditambahkan!',
        showConfirmButton: false,
        timer: 1500
    });

    // Reset form
    document.getElementById("addProductForm").reset();
    $('#addProductModal').modal('hide');
});

// Fungsi untuk menghapus baris produk
function deleteProduct(button) {
    let row = button.parentNode.parentNode;

    // Tampilkan konfirmasi menggunakan SweetAlert
    Swal.fire({
        title: 'Apakah Anda yakin?',
        text: "Produk ini akan dihapus!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Hapus!',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            // Jika dikonfirmasi, hapus baris
            row.parentNode.removeChild(row);

            // Update ulang nomor ID setelah penghapusan
            updateProductIds();

            // Notifikasi produk berhasil dihapus
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: 'Produk berhasil dihapus! Klik OK untuk melanjutkan.',
                showConfirmButton: true,
            });
        }
    });
}

// Fungsi untuk memperbarui ID produk setelah penghapusan
function updateProductIds() {
    let productTableBody = document.getElementById("productTableBody");
    let rows = productTableBody.rows;

    for (let i = 0; i < rows.length; i++) {
        rows[i].cells[0].innerText = i + 1; // Set ID sesuai urutan baris
    }
}










document.addEventListener('DOMContentLoaded', function() {
    // Menu Search
    const searchBtn = document.getElementById('searchBtn');
    const searchModal = new bootstrap.Modal(document.getElementById('searchModal'));
    const searchSubmit = document.getElementById('searchSubmit');
    const searchInput = document.getElementById('searchInput');
    const searchResults = document.getElementById('searchResults');

    searchBtn.addEventListener('click', function() {
        searchModal.show();
        // Tambahkan animasi ketika modal muncul
        document.getElementById('searchModal').classList.add('animate__animated', 'animate__fadeInDown');
    });

    searchSubmit.addEventListener('click', function() {
        const query = searchInput.value;
        searchResults.innerHTML = `<p class="animate__animated animate__fadeIn">Results for "${query}"</p>`;
        searchModal.hide();
    });

    // Notifications Menu
    const notificationBell = document.querySelector('.fa-bell');
    notificationBell.addEventListener('click', function() {
        const notificationDropdown = this.nextElementSibling;
        notificationDropdown.classList.toggle('show');
        notificationDropdown.classList.toggle('animate__animated');
        notificationDropdown.classList.toggle('animate__fadeIn');
    });

    // Warnings Menu
    const warningBell = document.querySelector('.fa-exclamation-circle');
    warningBell.addEventListener('click', function() {
        const warningDropdown = this.nextElementSibling;
        warningDropdown.classList.toggle('show');
        warningDropdown.classList.toggle('animate__animated');
        warningDropdown.classList.toggle('animate__fadeIn');
    });

    // Settings (Zoom In, Zoom Out, Reset Zoom)
    const zoomIn = document.getElementById('zoomIn');
    const zoomOut = document.getElementById('zoomOut');
    const resetZoom = document.getElementById('resetZoom');

    let zoomLevel = 1;

    zoomIn.addEventListener('click', function() {
        zoomLevel += 0.1;
        document.body.style.transform = `scale(${zoomLevel})`;
        document.body.style.transition = 'transform 0.3s';
    });

    zoomOut.addEventListener('click', function() {
        zoomLevel = Math.max(0.1, zoomLevel - 0.1);
        document.body.style.transform = `scale(${zoomLevel})`;
        document.body.style.transition = 'transform 0.3s';
    });

    resetZoom.addEventListener('click', function() {
        zoomLevel = 1;
        document.body.style.transform = `scale(${zoomLevel})`;
        document.body.style.transition = 'transform 0.3s';
    });

    // Profile Modal (Logout)
    const profileBtn = document.getElementById('profileBtn');
    const profileModal = new bootstrap.Modal(document.getElementById('profileModal'));

    profileBtn.addEventListener('click', function() {
        profileModal.show();
        // Tambahkan animasi ketika modal muncul
        document.getElementById('profileModal').classList.add('animate__animated', 'animate__fadeInUp');
    });

    // Logout Button
    const logoutBtn = document.querySelector('.btn-danger');
    logoutBtn.addEventListener('click', function() {
        Swal.fire({
            title: 'Are you sure?',
            text: "You will be logged out.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, log me out!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Logged Out!',
                    'You have successfully logged out.',
                    'success'
                ).then(() => {
                    // Redirect ke halaman logout
                    window.location.href = '/logout';
                });
            }
        });
    });
});








document.addEventListener('DOMContentLoaded', function() {
    // Mengambil elemen input pencarian dan elemen-elemen menu
    const searchInput = document.querySelector('.form-control-sidebar');
    const menuItems = document.querySelectorAll('.nav-sidebar .nav-item');

    // Fungsi untuk menyaring item menu berdasarkan pencarian
    function filterMenuItems(query) {
        menuItems.forEach(function(item) {
            const text = item.textContent.toLowerCase();
            if (text.includes(query.toLowerCase())) {
                item.style.display = ''; // Tampilkan item
            } else {
                item.style.display = 'none'; // Sembunyikan item
            }
        });
    }

    // Event listener untuk pencarian
    searchInput.addEventListener('input', function() {
        const query = searchInput.value;
        filterMenuItems(query);
    });

    // Animasi halaman saat mengklik item menu
    menuItems.forEach(function(item) {
        item.addEventListener('click', function(event) {
            event.preventDefault(); // Cegah perilaku default
            
            const targetUrl = item.querySelector('a').getAttribute('href');
            const mainContent = document.querySelector('.content-wrapper'); // Elemen konten utama
            
            // Menambahkan kelas animasi untuk efek transisi
            mainContent.classList.add('animate__animated', 'animate__fadeOut'); // Animasi keluar
            mainContent.style.backgroundColor = '#FF4081'; // Warna latar belakang saat keluar
            mainContent.style.transition = 'background-color 0.5s ease'; // Transisi warna latar belakang
            
            mainContent.addEventListener('animationend', function() {
                // Mengubah URL setelah animasi selesai
                window.location.href = targetUrl;
            }, { once: true }); // Hanya jalankan satu kali

            // Mengatur latar belakang saat konten baru dimuat
            window.onload = function() {
                mainContent.style.backgroundColor = '#4CAF50'; // Warna latar belakang saat masuk
                mainContent.classList.add('animate__animated', 'animate__fadeIn'); // Animasi masuk
            };
        });
    });

    // Menambahkan event listener untuk submenu
    var treeviewMenu = document.querySelectorAll('.has-treeview > a');
    treeviewMenu.forEach(function(menu) {
        menu.addEventListener('click', function(e) {
            e.preventDefault();

            // Toggle untuk menampilkan atau menyembunyikan submenu dengan animasi cepat
            var parentLi = this.parentElement;
            var submenu = parentLi.querySelector('ul');

            if (submenu) {
                if (submenu.style.maxHeight) {
                    submenu.style.maxHeight = null; // Menutup submenu
                    submenu.style.transition = 'max-height 0.5s ease-out, background-color 0.5s ease-out';
                    submenu.style.backgroundColor = "#ff004c"; // Efek warna saat tutup
                } else {
                    submenu.style.maxHeight = submenu.scrollHeight + "px"; // Membuka submenu
                    submenu.style.transition = 'max-height 0.7s ease-in, background-color 0.7s ease-in';
                    submenu.style.backgroundColor = "#00ff87"; // Efek warna saat buka
                }
            }

            // Menambahkan class 'active' untuk menu yang diklik
            document.querySelectorAll('.nav-item a').forEach(function(item) {
                item.classList.remove('active');
            });
            this.classList.add('active');

            // Efek shaking untuk item aktif
            this.style.animation = 'shakeBrutal 1s ease-in-out 2';
        });
    });

    // Efek highlight saat klik link di sidebar
    var navLinks = document.querySelectorAll('.nav-link');
    navLinks.forEach(function(link) {
        link.addEventListener('click', function() {
            navLinks.forEach(function(nav) {
                nav.classList.remove('active-highlight');
            });
            this.classList.add('active-highlight');

            // Efek dengan skala besar, rotasi, dan bouncing
            this.style.transition = 'transform 0.3s, background-color 0.3s, color 0.3s';
            this.style.backgroundColor = '#ff69b4'; // Warna pink saat klik
            this.style.color = '#ffffff';
            this.style.transform = 'scale(2) rotate(30deg)';

            // Tambahkan efek bouncing
            setTimeout(() => {
                this.style.transform = 'scale(1.8) rotate(-30deg)';
            }, 300);

            setTimeout(() => {
                this.style.transform = 'scale(2.5) rotate(15deg)';
            }, 600);

            setTimeout(() => {
                this.style.transform = 'scale(1) rotate(0deg)';
                this.style.backgroundColor = 'transparent'; // Mengembalikan warna normal
                this.style.color = ''; // Mengembalikan warna teks normal
            }, 1200); // Mengembalikan ukuran dan rotasi normal setelah 1.2 detik
        });
    });
});

// Tambahkan keyframes untuk animasi shakeBrutal
const style = document.createElement('style');
style.innerHTML = `
@keyframes shakeBrutal {
    0%, 100% { transform: translateX(0); }
    25% { transform: translateX(-10px); }
    50% { transform: translateX(10px); }
    75% { transform: translateX(-5px); }
}
`;
document.head.appendChild(style);


</script>
