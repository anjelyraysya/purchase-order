<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Users</title>
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



/* Style for the card */
.card {
    border: 1px solid #d2d6de; /* Light gray border color */
    border-radius: 0.5rem; /* Rounded corners */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow */
}

/* Header style */
.card-header {
    background-color: #17a2b8; /* Light blue background color */
    color: white; /* Header text color */
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
    background-color: #17a2b8; /* Light blue for header background */
    color: white; /* Header text color */
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
    background-color: #d1ecf1; /* Very light blue background on hover */
}

/* Responsive adjustments */
@media (max-width: 576px) {
    .card {
        margin: 1rem; /* Add margin for smaller screens */
    }
}




/* Modal background dan konten */
.modal-content {
    background: linear-gradient(135deg, #e0f7fa 0%, #b2ebf2 100%); /* Gradasi warna biru muda */
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    padding: 0;
    overflow: hidden;
    transition: transform 0.4s ease, opacity 0.4s ease;
}

/* Header modal */
.modal-header {
    background-color: #039be5; /* Warna biru muda */
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
    color: #039be5; /* Warna tautan biru muda */
    text-decoration: none;
    font-weight: 600;
    transition: color 0.3s ease, transform 0.3s ease; /* Tambahkan efek transform saat hover */
}

.modal-body a:hover {
    color: #0277bd; /* Warna saat hover lebih gelap */
    transform: scale(1.05); /* Efek pembesaran */
    text-decoration: underline;
}

/* Footer modal */
.modal-footer {
    display: flex;
    justify-content: flex-end;
    padding: 20px;
    background-color: #e0f7fa; /* Warna latar belakang cerah biru muda */
    border-radius: 0 0 15px 15px;
    box-shadow: inset 0 -1px 5px rgba(0, 0, 0, 0.1); /* Bayangan dalam */
}

/* Gaya untuk tombol produk */
.modal-footer .btn-produk {
    background-color: #4caf50; /* Warna hijau cerah untuk tombol Produk */
    color: white;
    border: none; /* Hapus border default */
    border-radius: 25px; /* Bentuk tombol lebih halus */
    padding: 12px 30px;
    font-size: 1.1rem;
    font-family: 'Poppins', sans-serif;
    margin-left: 10px;
    transition: background-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
}

.modal-footer .btn-produk:hover {
    background-color: #388e3c; /* Warna hijau lebih gelap saat hover */
    transform: scale(1.05);
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); /* Bayangan saat hover */
}

/* Gaya untuk tombol pesanan pembelian */
.modal-footer .btn-pesanan {
    background-color: #f44336; /* Warna merah untuk tombol Pesanan Pembelian */
    color: white;
    border: none; /* Hapus border default */
    border-radius: 25px; /* Bentuk tombol lebih halus */
    padding: 12px 30px;
    font-size: 1.1rem;
    font-family: 'Poppins', sans-serif;
    margin-left: 10px;
    transition: background-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
}

.modal-footer .btn-pesanan:hover {
    background-color: #c62828; /* Warna merah lebih gelap saat hover */
    transform: scale(1.05);
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); /* Bayangan saat hover */
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
    color: #80deea; /* Warna biru terang saat hover */
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
                <a href="{{ url('admin/users') }}" class="nav-link active bg-info text-white"> <!-- Menandakan Users sebagai aktif -->
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
                            <h1 class="m-0">Daftar Pengguna</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Users</li>
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
    <button class="btn btn-primary" data-toggle="modal" data-target="#addUserModal">
        <i class="fas fa-plus"></i> Tambah Pengguna
    </button>
</div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Daftar Pengguna</h3>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered" id="userTable">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nama</th>
                                                <th>Alamat</th>
                                                <th>Email</th>
                                                <th>Nomor Handphone</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Baris pengguna akan ditambahkan di sini -->
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

   <!-- Modal Tambah User -->
<div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="addUserModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addUserModalLabel">
                    <i class="fas fa-plus"></i> Tambah User
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="addUserForm">
                    <div class="form-group">
                        <label for="userName">Nama</label>
                        <input type="text" class="form-control" id="userName" required>
                    </div>
                    <div class="form-group">
                        <label for="userAddress">Alamat</label>
                        <textarea class="form-control" id="userAddress" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="userEmail">Email</label>
                        <input type="email" class="form-control" id="userEmail" required>
                    </div>
                    <div class="form-group">
                        <label for="userPhone">Nomor Handphone</label>
                        <input type="text" class="form-control" id="userPhone" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">
    <i class="fas fa-times"></i> Tutup
</button>
<button type="button" class="btn btn-primary" id="saveUserButton">
    <i class="fas fa-save"></i> Simpan
</button>

            </div>
        </div>
    </div>
</div>

<!-- Modal Edit User -->
<div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="editUserModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editUserModalLabel">
                    <i class="fas fa-edit"></i> Edit User
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editUserForm">
                    <div class="form-group">
                        <label for="editUserName">Nama</label>
                        <input type="text" class="form-control" id="editUserName" required>
                    </div>
                    <div class="form-group">
                        <label for="editUserAddress">Alamat</label>
                        <textarea class="form-control" id="editUserAddress" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="editUserEmail">Email</label>
                        <input type="email" class="form-control" id="editUserEmail" required>
                    </div>
                    <div class="form-group">
                        <label for="editUserPhone">Nomor Handphone</label>
                        <input type="text" class="form-control" id="editUserPhone" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">
            <i class="fas fa-times"></i> Tutup
            </button>
            <button type="button" class="btn btn-primary" id="updateUserButton">
            <i class="fas fa-sync-alt"></i> Perbarui
            </button>

            </div>
        </div>
    </div>
</div>

<!-- Toast Notifications -->
<div class="toast" id="userSuccessToast" style="position: absolute; top: 20px; right: 20px; z-index: 1050;" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header bg-success text-white">
        <strong class="me-auto">Notifikasi</strong>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
        Data user berhasil disimpan!
    </div>
</div>

<div class="toast" id="userEditToast" style="position: absolute; top: 80px; right: 20px; z-index: 1050;" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header bg-info text-white">
        <strong class="me-auto">Notifikasi</strong>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
        Data user berhasil diperbarui!
    </div>
</div>

<div class="toast" id="userDeleteToast" style="position: absolute; top: 140px; right: 20px; z-index: 1050;" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header bg-danger text-white">
        <strong class="me-auto">Notifikasi</strong>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
        Data user berhasil dihapus!
    </div>
</div>

<!-- Modal Konfirmasi Hapus -->
<div class="modal fade" id="confirmDeleteUserModal" tabindex="-1" aria-labelledby="confirmDeleteUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmDeleteUserModalLabel">
                    <i class="fas fa-trash-alt"></i> Konfirmasi Hapus User
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            Apakah Anda yakin ingin menghapus data user ini?
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">
            <i class="fas fa-times"></i> Batal
            </button>
            <button type="button" class="btn btn-danger" id="confirmDeleteUserButton">
            <i class="fas fa-trash-alt"></i> Hapus
            </button>

            </div>
        </div>
    </div>
</div>

    <!-- Script jQuery, Bootstrap, dan AdminLTE -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>

    <script>
    $(document).ready(function () {
    let users = [
        { id: 1, name: 'Misbah Munir', address: 'Jalan Mawar No. 12, Jakarta', email: 'misbahmu@example.com', phone: '08123456789' },
        { id: 2, name: 'Calla Hanum', address: 'Jalan Melati No. 28, Bandung', email: 'callalu@example.com', phone: '08234567890' },
        { id: 3, name: 'Maudy Ayunda', address: 'Jalan Cemara No. 30, Depok', email: 'ayundama@example.com', phone: '08567890123' },
        { id: 4, name: 'Prilly Latuconsina', address: 'Jalan Cempaka No. 60, Yogyakarta', email: 'prillylatu@example.com', phone: '08789012345' },
        { id: 5, name: 'Najwa Shihab', address: 'Jalan Matahari No. 77, Surabaya', email: 'najwashihab@example.com', phone: '08890123456' }
    ];

    function renderUserTable() {
        const tbody = $('#userTable tbody');
        tbody.empty();
        users.forEach(user => {
            tbody.append(`
                <tr>
                    <td>${user.id}</td>
                    <td>${user.name}</td>
                    <td>${user.address}</td>
                    <td>${user.email}</td>
                    <td>${user.phone}</td>
                    <td>
                        <button class="btn btn-warning btn-sm edit-user-button" data-id="${user.id}">
                            <i class="fas fa-edit"></i> Edit
                        </button>
                        <button class="btn btn-danger btn-sm delete-user-button" data-id="${user.id}">
                            <i class="fas fa-trash-alt"></i> Hapus
                        </button>
                    </td>
                </tr>
            `);
        });
    }

    function showToast(toastId) {
        $(toastId).toast('show');
    }

    $('#saveUserButton').on('click', function () {
        const name = $('#userName').val();
        const address = $('#userAddress').val();
        const email = $('#userEmail').val();
        const phone = $('#userPhone').val();
        const id = users.length ? users[users.length - 1].id + 1 : 1;

        users.push({ id, name, address, email, phone });
        renderUserTable();
        $('#addUserModal').modal('hide');
        showToast('#userSuccessToast');
    });

    $(document).on('click', '.edit-user-button', function () {
        const userId = $(this).data('id');
        const user = users.find(u => u.id === userId);

        $('#editUserName').val(user.name);
        $('#editUserAddress').val(user.address);
        $('#editUserEmail').val(user.email);
        $('#editUserPhone').val(user.phone);
        $('#updateUserButton').data('id', userId);
        $('#editUserModal').modal('show');
    });

    $('#updateUserButton').on('click', function () {
        const userId = $(this).data('id');
        const name = $('#editUserName').val();
        const address = $('#editUserAddress').val();
        const email = $('#editUserEmail').val();
        const phone = $('#editUserPhone').val();

        const user = users.find(u => u.id === userId);
        user.name = name;
        user.address = address;
        user.email = email;
        user.phone = phone;

        renderUserTable();
        $('#editUserModal').modal('hide');
        showToast('#userEditToast');
    });

    $(document).on('click', '.delete-user-button', function () {
        const userId = $(this).data('id');
        $('#confirmDeleteUserButton').data('id', userId);
        $('#confirmDeleteUserModal').modal('show');
    });

    $('#confirmDeleteUserButton').on('click', function () {
        const userId = $(this).data('id');
        users = users.filter(u => u.id !== userId);
        renderUserTable();
        $('#confirmDeleteUserModal').modal('hide');
        showToast('#userDeleteToast');
    });

    renderUserTable();
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

</script>

</body>
</html>
