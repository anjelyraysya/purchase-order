<!-- resources/views/purchase_orders/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Purchase Orders</title>
    <!-- Link AdminLTE CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
    <!-- Link Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Link Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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



/* Memperkecil ukuran tombol tetapi menambah lebar */
.btn-sm {
    padding: 10px 20px; /* Padding untuk ukuran tombol */
    font-size: 12px;    /* Ukuran font tetap kecil */
    border-radius: 5px; /* Sedikit membulatkan sudut tombol */
    transition: all 0.3s ease; /* Efek transisi saat hover */
}

/* Atur ikon agar lebih kecil */
.btn-sm i {
    font-size: 14px; /* Ukuran ikon lebih sesuai */
    margin-right: 5px; /* Jarak antara ikon dan teks */
}

/* Menambahkan jarak antar tombol secara vertikal (atas-bawah) */
td .btn {
    display: block; /* Agar tombol tampil vertikal */
    width: 100px; /* Lebar tombol yang sama untuk kedua tombol */
    margin: 5px 0; /* Jarak atas dan bawah antar tombol */
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

/* Tambahkan efek hover untuk tombol agar lebih stylish */
.btn-sm:hover {
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); /* Efek bayangan saat hover */
    transform: translateY(-2px); /* Efek mengangkat saat hover */
}

/* Efek fokus untuk tombol */
.btn-sm:focus {
    outline: none; /* Menghapus outline default */
    box-shadow: 0px 0px 10px rgba(0, 123, 255, 0.5); /* Efek glowing saat fokus */
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
    background-color: #ff4c4c; /* Bright red background */
    color: #fff; /* White text color for better contrast */
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
    background-color: #ff4c4c; /* Bright red for header background */
    color: #fff; /* White text color for header */
    padding: 0.75rem; /* Padding for header cells */
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
    background-color: #ffb3b3; /* Light red background on hover */
}

/* Responsive adjustments */
@media (max-width: 576px) {
    .card {
        margin: 1rem; /* Add margin for smaller screens */
    }
}







/* Modal background dan konten */
.modal-content {
    background: linear-gradient(135deg, #ffcccc 0%, #ffffff 100%); /* Gradasi warna merah muda ke putih */
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    padding: 0;
    overflow: hidden;
    transition: transform 0.4s ease, opacity 0.4s ease;
}

/* Header modal */
.modal-header {
    background-color: #ff0000; /* Warna merah */
    color: #ffffff;
    border-bottom: none;
    border-radius: 15px 15px 0 0;
    padding: 20px;
    text-align: center;
    font-family: 'Arial', sans-serif;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.modal-header i {
    margin-right: 12px;
    font-size: 1.8rem;
}

.modal-title {
    font-size: 2rem; /* Ukuran judul lebih besar */
    font-weight: bold;
    letter-spacing: 1px;
}

/* Body modal */
.modal-body {
    color: #333333;
    line-height: 1.6;
    padding: 30px;
    font-size: 1.1rem;
    font-family: 'Segoe UI', sans-serif;
}

/* Hover style untuk tautan */
.modal-body a {
    color: #ff0000; /* Warna tautan merah */
    text-decoration: none;
    font-weight: 600;
    transition: color 0.3s ease, transform 0.3s ease; /* Tambahkan efek transform saat hover */
}

.modal-body a:hover {
    color: #c70000; /* Warna saat hover lebih gelap */
    transform: scale(1.05); /* Efek pembesaran */
    text-decoration: underline;
}

/* Footer modal */
.modal-footer {
    display: flex;
    justify-content: flex-end;
    padding: 20px;
    background-color: #ffcccc; /* Warna latar belakang cerah merah muda */
    border-radius: 0 0 15px 15px;
    box-shadow: inset 0 -1px 5px rgba(0, 0, 0, 0.1); /* Bayangan dalam */
}

/* Gaya untuk tombol */
.modal-footer .btn {
    color: white;
    border: none; /* Hapus border default */
    border-radius: 25px; /* Bentuk tombol lebih halus */
    padding: 12px 30px;
    font-size: 1.1rem;
    font-family: 'Poppins', sans-serif;
    margin-left: 10px;
    transition: background-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
}

/* Warna untuk tombol */
.btn-simpan {
    background-color: #28a745; /* Hijau untuk tombol Simpan */
}

.btn-simpan:hover {
    background-color: #218838; /* Warna lebih gelap saat hover */
}

.btn-perbarui {
    background-color: #007bff; /* Biru untuk tombol Perbarui */
}

.btn-perbarui:hover {
    background-color: #0069d9; /* Warna lebih gelap saat hover */
}

.btn-batal {
    background-color: #dc3545; /* Merah untuk tombol Batal */
}

.btn-batal:hover {
    background-color: #c82333; /* Warna lebih gelap saat hover */
}

.btn-hapus {
    background-color: #ffc107; /* Kuning untuk tombol Hapus */
}

.btn-hapus:hover {
    background-color: #e0a800; /* Warna lebih gelap saat hover */
}

.btn-tutup {
    background-color: #6c757d; /* Abu-abu untuk tombol Tutup */
}

.btn-tutup:hover {
    background-color: #5a6268; /* Warna lebih gelap saat hover */
}

/* Tombol close di header */
.modal-header .btn-close {
    background: none; /* Hapus background */
    border: none; /* Hapus border */
    color: #ffffff;
    font-size: 1.6rem;
    opacity: 0.9;
    transition: opacity 0.3s ease;
}

.modal-header .btn-close:hover {
    opacity: 1;
    color: #ffcccc; /* Warna merah muda terang saat hover */
}

/* Animasi modal saat muncul */
.modal.fade .modal-dialog {
    transform: scale(0.9);
    opacity: 0;
}

.modal.show .modal-dialog {
    transform: scale(1);
    opacity: 1;
    transition: transform 0.4s ease, opacity 0.4s ease;
}

/* Gaya kotak bayangan dan animasi halus */
.modal-dialog {
    transition: all 0.3s ease-in-out;
    margin: 30px auto;
}

/* Responsif untuk tampilan lebih kecil */
@media (max-width: 576px) {
    .modal-content {
        padding: 0;
    }
    .modal-header {
        padding: 15px;
    }
    .modal-body {
        padding: 15px;
        font-size: 1rem;
    }
    .modal-footer .btn {
        padding: 10px 20px;
        font-size: 1rem;
    }
}




#searchPurchaseOrder {
    border: 2px solid #007bff; /* Blue border */
    border-radius: 4px; /* Slightly rounded corners */
}

#searchPurchaseOrder:focus {
    border-color: #0056b3; /* Darker blue on focus */
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5); /* Subtle glow effect */
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
        <p>Name: contohnamamemberbaru</p>
        <p>Email: namamemberru@example.com</p>
        <form action="http://localhost:8000/logout" method="POST" id="logoutForm" style="display: inline;">
            @csrf <!-- Token CSRF untuk keamanan -->
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>
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
      <a href="{{ url('products') }}" class="nav-link">
      <i class="nav-icon fas fa-box-open"></i> <!-- Icon yang lebih mirip produk -->
      <p>Products</p>
    </a>
</li>
    </ul>
</li>
<!-- Purchase Orders Submenu -->
<li class="nav-item">
    <a href="{{ url('admin/purchase-orders') }}" class="nav-link active bg-info text-white"> <!-- Menandakan Purchase Orders sebagai aktif -->
        <i class="nav-icon fas fa-shopping-cart"></i> <!-- Icon untuk Purchase Orders -->
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
                    <h1 class="m-0">Daftar Purchase Orders</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Purchase Orders</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12 d-flex justify-content-between align-items-center">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#addPurchaseOrderModal">
                        <i class="fas fa-plus"></i> Tambah Purchase Order
                    </button>
                    <div class="ml-2 d-flex align-items-center">
                        <label for="searchPurchaseOrder" class="mr-2 mb-0">Search:</label>
                        <input type="text" id="searchPurchaseOrder" placeholder="Search..." class="form-control" style="width: 250px; height: 38px;">
                        <button id="searchButton" class="btn btn-info ml-2">Cari</button> <!-- Search button -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Daftar Purchase Orders</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered" id="purchaseOrderTable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama Pembelian</th>
                                        <th>Jumlah Pembelian</th>
                                        <th>Tanggal</th>
                                        <th>Material ID</th>
                                        <th>Supplier ID</th>
                                        <th>Deskripsi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Baris purchase order akan ditambahkan di sini -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

        <!-- Footer -->
        <footer class="main-footer">
            <strong>&copy; <span id="currentYear"></span> Anjely Raysya.</strong> Semua hak dilindungi.
        </footer>
    </div>

  <!-- Modal Tambah Purchase Order -->
<div class="modal fade" id="addPurchaseOrderModal" tabindex="-1" role="dialog" aria-labelledby="addPurchaseOrderModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addPurchaseOrderModalLabel">
                    <i class="fas fa-plus"></i> Tambah Purchase Order
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="addPurchaseOrderForm">
                    <div class="form-group">
                        <label for="orderName">Nama Pembelian</label>
                        <input type="text" class="form-control" id="orderName" required>
                    </div>
                    <div class="form-group">
                        <label for="orderQuantity">Jumlah Pembelian</label>
                        <input type="number" class="form-control" id="orderQuantity" required>
                    </div>
                    <div class="form-group">
                        <label for="orderDate">Tanggal</label>
                        <input type="date" class="form-control" id="orderDate" required>
                    </div>
                    <div class="form-group">
                        <label for="materialId">Material ID</label>
                        <input type="text" class="form-control" id="materialId" required>
                    </div>
                    <div class="form-group">
                        <label for="supplierId">Supplier ID</label>
                        <input type="text" class="form-control" id="supplierId" required>
                    </div>
                    <div class="form-group">
                        <label for="orderDescription">Deskripsi</label>
                        <textarea class="form-control" id="orderDescription" required></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    <i class="fas fa-times"></i> Tutup
                </button>
                <button type="button" class="btn btn-primary" id="saveOrderButton">
                    <i class="fas fa-save"></i> Simpan
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit Purchase Order -->
<div class="modal fade" id="editPurchaseOrderModal" tabindex="-1" role="dialog" aria-labelledby="editPurchaseOrderModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editPurchaseOrderModalLabel">
                    <i class="fas fa-edit" style="margin-right: 5px;"></i> Edit Purchase Order
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editPurchaseOrderForm">
                    <div class="form-group">
                        <label for="editOrderName">Nama Pembelian</label>
                        <input type="text" class="form-control" id="editOrderName" required>
                    </div>
                    <div class="form-group">
                        <label for="editOrderQuantity">Jumlah Pembelian</label>
                        <input type="number" class="form-control" id="editOrderQuantity" required>
                    </div>
                    <div class="form-group">
                        <label for="editOrderDate">Tanggal</label>
                        <input type="date" class="form-control" id="editOrderDate" required>
                    </div>
                    <div class="form-group">
                        <label for="editMaterialId">Material ID</label>
                        <input type="text" class="form-control" id="editMaterialId" required>
                    </div>
                    <div class="form-group">
                        <label for="editSupplierId">Supplier ID</label>
                        <input type="text" class="form-control" id="editSupplierId" required>
                    </div>
                    <div class="form-group">
                        <label for="editOrderDescription">Deskripsi</label>
                        <textarea class="form-control" id="editOrderDescription" required></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    <i class="fas fa-times-circle"></i> Tutup
                </button>
                <button type="button" class="btn btn-primary" id="updateOrderButton">
                    <i class="fas fa-save"></i> Perbarui
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Toast Notification -->
<div class="toast" id="successToast" style="position: absolute; top: 20px; right: 20px; z-index: 1050;" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header bg-success text-white">
        <strong class="me-auto">Notifikasi</strong>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body" id="toastBody">
        Data purchase order berhasil disimpan!
    </div>
</div>

<div class="toast" id="editToast" style="position: absolute; top: 80px; right: 20px; z-index: 1050;" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header bg-info text-white">
        <strong class="me-auto">Notifikasi</strong>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body" id="editToastBody">
        Data purchase order berhasil diperbarui!
    </div> 
</div>

<div class="toast" id="deleteToast" style="position: absolute; top: 140px; right: 20px; z-index: 1050;" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header bg-danger text-white">
        <strong class="me-auto">Notifikasi</strong>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body" id="deleteToastBody">
        Data purchase order berhasil dihapus!
    </div>
</div>

<!-- Modal Konfirmasi Hapus -->
<div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmDeleteModalLabel">
                    <i class="fas fa-trash-alt" style="margin-right: 5px;"></i> Konfirmasi Hapus
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus data purchase order ini?
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">
            <i class="fas fa-times-circle"></i> Batal
            </button>
            <button type="button" class="btn btn-danger" id="confirmDeleteButton">
            <i class="fas fa-trash-alt"></i> Hapus
            </button>

            </div>
        </div>
    </div>
</div>

<!-- Script JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>
<script>


$(document).ready(function () {
    // Inisialisasi purchase orders dari localStorage
    let purchaseOrders = JSON.parse(localStorage.getItem('purchaseOrders')) || [];

    // Function to save purchase orders to localStorage
    function savePurchaseOrders() {
        localStorage.setItem('purchaseOrders', JSON.stringify(purchaseOrders));
    }

    // Function to display the purchase orders in the table
    function renderPurchaseOrders() {
        const orderTableBody = $('#purchaseOrderTable tbody');
        orderTableBody.empty();
        purchaseOrders.forEach(order => {
            orderTableBody.append(`
                <tr>
                    <td>${order.id}</td>
                    <td>${order.purchaseName}</td>
                    <td>${order.quantity}</td>
                    <td>${order.date}</td>
                    <td>${order.materialId}</td>
                    <td>${order.supplierId}</td>
                    <td>${order.description}</td>
                    <td>
                        <button class="btn btn-warning btn-sm edit-order" data-id="${order.id}">
                            <i class="fas fa-edit"></i> Edit
                        </button>
                        <button class="btn btn-danger btn-sm delete-order" data-id="${order.id}">
                            <i class="fas fa-trash-alt"></i> Hapus
                        </button>
                    </td>
                </tr>
            `);
        });
    }

    // Display purchase orders when the page loads
    renderPurchaseOrders();

    // Save new purchase order
    $('#saveOrderButton').click(function () {
        const newOrder = {
            id: purchaseOrders.length ? purchaseOrders[purchaseOrders.length - 1].id + 1 : 1,
            purchaseName: $('#orderName').val(),
            quantity: $('#orderQuantity').val(),
            date: $('#orderDate').val(),
            materialId: $('#materialId').val(),
            supplierId: $('#supplierId').val(),
            description: $('#orderDescription').val()
        };
        purchaseOrders.push(newOrder);
        savePurchaseOrders(); // Save to localStorage
        renderPurchaseOrders();
        $('#addPurchaseOrderModal').modal('hide');

        // Clear the input fields
        $('#orderName').val('');
        $('#orderQuantity').val('');
        $('#orderDate').val('');
        $('#materialId').val('');
        $('#supplierId').val('');
        $('#orderDescription').val('');

        $('#successToast').toast('show');
    });

    // Edit purchase order
    $(document).on('click', '.edit-order', function () {
        const orderId = $(this).data('id');
        const order = purchaseOrders.find(o => o.id === orderId);
        $('#editOrderName').val(order.purchaseName);
        $('#editOrderQuantity').val(order.quantity);
        $('#editOrderDate').val(order.date);
        $('#editMaterialId').val(order.materialId);
        $('#editSupplierId').val(order.supplierId);
        $('#editOrderDescription').val(order.description);
        $('#editPurchaseOrderModal').modal('show');
        $('#updateOrderButton').data('id', orderId); // Store ID in button
    });

    // Update purchase order
    $('#updateOrderButton').click(function () {
        const orderId = $(this).data('id');
        const orderIndex = purchaseOrders.findIndex(o => o.id === orderId);
        purchaseOrders[orderIndex] = {
            id: orderId,
            purchaseName: $('#editOrderName').val(),
            quantity: $('#editOrderQuantity').val(),
            date: $('#editOrderDate').val(),
            materialId: $('#editMaterialId').val(),
            supplierId: $('#editSupplierId').val(),
            description: $('#editOrderDescription').val()
        };
        savePurchaseOrders(); // Save to localStorage
        renderPurchaseOrders();
        $('#editPurchaseOrderModal').modal('hide');
        $('#editToast').toast('show');
    });

    // Delete purchase order
    $(document).on('click', '.delete-order', function () {
        const orderId = $(this).data('id');
        $('#confirmDeleteModal').modal('show');
        $('#confirmDeleteButton').data('id', orderId);
    });

    // Confirm delete
    $('#confirmDeleteButton').click(function () {
        const orderId = $(this).data('id');
        purchaseOrders = purchaseOrders.filter(o => o.id !== orderId);
        savePurchaseOrders(); // Save to localStorage
        renderPurchaseOrders();
        $('#confirmDeleteModal').modal('hide');
        $('#deleteToast').toast('show');
    });
});











 // Event listener for search button
 document.getElementById('searchBtn').addEventListener('click', function(event) {
    event.preventDefault(); // Prevent the default anchor behavior
    $('#searchModal').modal('show'); // Show the search modal
});

// Event listener for profile button
document.getElementById('profileBtn').addEventListener('click', function(event) {
    event.preventDefault(); // Prevent the default anchor behavior
    $('#profileModal').modal('show'); // Show the profile modal
});

// Event listener for logout button
document.querySelector('.btn-danger').addEventListener('click', function(event) {
    event.preventDefault(); // Prevent the default anchor behavior
    alert('Logging out...'); // You can replace this with actual logout functionality
    // Example: Redirect to logout URL
    window.location.href = '/logout';  // Ganti dengan URL logout sistem Anda
});

// Dropdown toggle for Notifications
$('.dropdown-toggle').dropdown();

// Optional: Close the modal when the user clicks the 'X' button
document.querySelectorAll('.close').forEach(function(closeButton) {
    closeButton.addEventListener('click', function() {
        $('.modal').modal('hide'); // Hide any open modal
    });
});


// Event listener for search button
document.getElementById('searchBtn').addEventListener('click', function(event) {
    event.preventDefault(); // Prevent the default anchor behavior
    $('#searchModal').modal('show'); // Show the search modal
});

// Event listener for search submit button
document.getElementById('searchSubmit').addEventListener('click', function() {
    // Ambil nilai input pencarian
    let query = document.getElementById('searchInput').value;
    
    // Jika input kosong, tampilkan pesan error
    if (!query) {
        alert("Please enter a search term!");
        return;
    }

    // Proses pencarian dan tampilkan hasil
    let searchResults = document.getElementById('searchResults');
    
    // Bersihkan hasil sebelumnya
    searchResults.innerHTML = '';

    // Tampilkan hasil (contoh)
    searchResults.innerHTML = `
      <h4>Search Results for "${query}":</h4>
      <ul>
        <li>Result 1 for "${query}"</li>
        <li>Result 2 for "${query}"</li>
        <li>Result 3 for "${query}"</li>
      </ul>
    `;

    // Tutup modal
    $('#searchModal').modal('hide');
});

// Event listener for profile button
document.getElementById('profileBtn').addEventListener('click', function(event) {
    event.preventDefault(); // Prevent the default anchor behavior
    $('#profileModal').modal('show'); // Show the profile modal
});

// Event listener for logout button
document.querySelector('.btn-danger').addEventListener('click', function(event) {
    event.preventDefault(); // Prevent the default anchor behavior
    alert('Logging out...'); // You can replace this with actual logout functionality
    // Example: Redirect to logout URL
    window.location.href = '/logout';  // Ganti dengan URL logout sistem Anda
});

// Dropdown toggle for Notifications
$('.dropdown-toggle').dropdown();

// Optional: Close the modal when the user clicks the 'X' button
document.querySelectorAll('.close').forEach(function(closeButton) {
    closeButton.addEventListener('click', function() {
        $('.modal').modal('hide'); // Hide any open modal
    });
});

// Set initial zoom level
let zoomLevel = 1;

// Function to zoom in
document.getElementById('zoomIn').addEventListener('click', function() {
    zoomLevel += 0.1; // Increase zoom level by 0.1
    document.body.style.transform = `scale(${zoomLevel})`; // Apply zoom
    document.body.style.transformOrigin = '0 0'; // Set the origin for the zoom
});

// Function to zoom out
document.getElementById('zoomOut').addEventListener('click', function() {
    zoomLevel -= 0.1; // Decrease zoom level by 0.1
    if (zoomLevel < 0.1) zoomLevel = 0.1; // Prevent zooming out too much
    document.body.style.transform = `scale(${zoomLevel})`; // Apply zoom
    document.body.style.transformOrigin = '0 0'; // Set the origin for the zoom
});

// Function to reset zoom
document.getElementById('resetZoom').addEventListener('click', function() {
    zoomLevel = 1; // Reset zoom level to 1
    document.body.style.transform = 'scale(1)'; // Reset the zoom
    document.body.style.transformOrigin = '0 0'; // Set the origin for the zoom
});




// JavaScript untuk fitur pencarian menu sidebar
document.querySelector('.form-control-sidebar').addEventListener('input', function() {
    let searchValue = this.value.toLowerCase(); // Ambil nilai input pencarian dan ubah ke huruf kecil
    let menuItems = document.querySelectorAll('.nav-item'); // Ambil semua elemen menu

    // Loop melalui setiap item menu
    menuItems.forEach(function(item) {
        // Ambil teks dari item menu
        let text = item.textContent.toLowerCase();

        // Periksa apakah teks item cocok dengan nilai pencarian
        if (text.includes(searchValue)) {
            // Jika cocok, tampilkan item
            item.style.display = '';
        } else {
            // Jika tidak cocok, sembunyikan item
            item.style.display = 'none';
        }
    });
});





document.addEventListener('DOMContentLoaded', function() {
    // Menambahkan event listener untuk submenu
    var treeviewMenu = document.querySelectorAll('.has-treeview > a');
    treeviewMenu.forEach(function(menu) {
        menu.addEventListener('click', function(e) {
            e.preventDefault();

            // Toggle untuk menampilkan atau menyembunyikan submenu dengan animasi cepat dan kuat
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

            // Menambahkan class 'active' untuk menu yang diklik dengan efek brutal
            document.querySelectorAll('.nav-item a').forEach(function(item) {
                item.classList.remove('active');
            });
            this.classList.add('active');

            // Efek brutal shaking untuk item aktif
            this.style.animation = 'shakeBrutal 1s ease-in-out 2';
        });
    });

    // Efek brutal highlight saat klik link di sidebar
    var navLinks = document.querySelectorAll('.nav-link');
    navLinks.forEach(function(link) {
        link.addEventListener('click', function() {
            navLinks.forEach(function(nav) {
                nav.classList.remove('active-highlight');
            });
            this.classList.add('active-highlight');

            // Efek brutal dengan skala besar, rotasi, dan bouncing
            this.style.transition = 'transform 0.3s, background-color 0.3s, color 0.3s';
            this.style.backgroundColor = '#ff69b4'; // Warna pink saat klik
            this.style.color = '#ffffff';
            this.style.transform = 'scale(2) rotate(30deg)';

            // Tambahkan efek bouncing brutal
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





document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchPurchaseOrder');
    const searchButton = document.getElementById('searchButton');
    const purchaseOrderTable = document.getElementById('purchaseOrderTable');
    const tableBody = purchaseOrderTable.getElementsByTagName('tbody')[0];

    // Function to search through the table rows
    function searchTable() {
        const searchTerm = searchInput.value.toLowerCase();
        const tableRows = tableBody.getElementsByTagName('tr');

        // Loop through all table rows and toggle visibility based on search term
        for (let i = 0; i < tableRows.length; i++) {
            const row = tableRows[i];
            const rowData = row.innerText.toLowerCase();
            if (rowData.includes(searchTerm)) {
                row.style.display = ''; // Show the row if it matches the search term
            } else {
                row.style.display = 'none'; // Hide the row if it does not match
            }
        }
    }

    // Add event listener for input to search as the user types
    searchInput.addEventListener('input', searchTable);

    // Add event listener for button click to trigger the search
    searchButton.addEventListener('click', searchTable);
});

</script>
