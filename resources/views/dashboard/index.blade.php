<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminLTE Dashboard</title>
    <!-- Link AdminLTE CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
    <!-- Link Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Link Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f4f6f9;
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
        .nav-pills .nav-link {
            color: #ffffff;
        }
        .nav-pills .nav-link.active {
            background-color: #007bff;
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




.modal-content {
    border-radius: 10px; /* Rounded corners */
}

.modal-header {
    background-color: #007bff; /* Bootstrap primary color */
    color: white; /* Text color */
}

.modal-footer {
    border-top: none; /* Remove border */
}

.modal-body {
    font-size: 1.1em; /* Slightly larger font */
}





/* Modal background dan konten */
.modal-content {
    background-color: #ffffff;
    border-radius: 12px;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    padding: 0;
    overflow: hidden;
    transition: transform 0.4s ease, opacity 0.4s ease;
}

/* Header modal */
.modal-header {
    background-color: #0069d9;
    color: #fff;
    border-bottom: none;
    border-radius: 12px 12px 0 0;
    padding: 15px 20px;
    text-align: center;
    font-family: 'Roboto', sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
}

.modal-header i {
    margin-right: 12px;
    font-size: 1.5rem;
}

.modal-title {
    font-size: 1.7rem;
    font-weight: 700;
    letter-spacing: 0.5px;
}

/* Body modal */
.modal-body {
    color: #4a4a4a;
    line-height: 1.8;
    padding: 25px;
    font-size: 1.1rem;
    font-family: 'Open Sans', sans-serif;
}

/* Hover style untuk tautan */
.modal-body a {
    color: #0069d9;
    text-decoration: none;
    font-weight: 600;
    transition: color 0.3s ease;
}

.modal-body a:hover {
    color: #0056b3;
    text-decoration: underline;
}

/* Footer modal */
.modal-footer {
    display: flex;
    justify-content: flex-end;
    padding: 15px;
    background-color: #e0e0e0; /* Warna latar belakang cerah */
    background-image: linear-gradient(145deg, #e0e0e0, #ffffff); /* Tambahkan gradasi warna */
    border-radius: 0 0 12px 12px;
    box-shadow: inset 0 3px 10px rgba(0, 0, 0, 0.1); /* Tambahkan bayangan dalam */
}

.modal-footer .btn {
    background-color: #28a745;
    color: white;
    border-radius: 30px;
    padding: 10px 20px;
    font-size: 1.1rem;
    font-family: 'Poppins', sans-serif;
    margin-left: 10px;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.modal-footer .btn:hover {
    background-color: #218838;
    transform: scale(1.05);
}

/* Tombol close di header */
.modal-header .btn-close {
    color: #fff;
    font-size: 1.4rem;
    opacity: 0.8;
    position: absolute;
    right: 20px;
    top: 15px;
    transition: opacity 0.3s ease;
}

.modal-header .btn-close:hover {
    opacity: 1;
    color: #ffcccc;
}

/* Animasi modal saat muncul */
.modal.fade .modal-dialog {
    transform: scale(0.8);
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
        padding: 8px 16px;
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
        <p>Name : contohnamamemberbaru</p>
        <p>Email : namamemberru@example.com</p>
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
    <a href="{{ url('admin/dashboard') }}" class="nav-link active bg-info text-white"> <!-- Menandakan Dashboard sebagai aktif -->
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

        <!-- Content Wrapper -->
        <div class="content-wrapper">
            <!-- Content Header -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard Overview</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

           
           <!-- Modal -->
    <div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="infoModalLabel">Informasi</h5>
                    <button type="button" class="btn-close" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="modalBody">
                    <!-- Konten modal akan diisi melalui JavaScript -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

            <!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3 id="totalUsers">80</h3>
                        <p>Total Users</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3 id="totalSuppliers">50</h3>
                        <p>Total Suppliers</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-industry"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3 id="totalMaterials">120</h3>
                        <p>Total Materials</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3 id="totalOrders">75</h3>
                        <p>Purchase Orders</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- New section for Total Products -->
            <div class="col-lg-3 col-6">
                <div class="small-box" style="background-color: #6f42c1; color: white;"> <!-- Purple color for products -->
                    <div class="inner">
                        <h3 id="totalProducts">150</h3> <!-- Initial count for total products -->
                        <p>Total Products</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-box"></i> <!-- Icon for products -->
                    </div>
                    <a href="#" class="small-box-footer" style="color: white;">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

   
<!-- Modal -->
<div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="infoModalLabel">Informasi</h5>
                <!-- Tombol silang (X) -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="modalBody">
                <!-- Informasi tambahan akan ditampilkan di sini -->
            </div>
            <div class="modal-footer">
                <!-- Menambahkan tombol tutup -->
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>




<div class="container mt-3">
  <div class="row">
    <!-- Sales Area and Donut Charts -->
    <div class="col-lg-7 mb-4 pr-2"> <!-- Increased right padding for more space -->
      <div class="card h-100" style="background: linear-gradient(to bottom, #FFC107, #FFEB3B);"> <!-- Deep yellow to light yellow gradient -->
        <div class="card-header">
          <h3 class="card-title text-dark">Sales</h3> <!-- Dark text for contrast -->
        </div>
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <div class="chart" style="flex: 1; margin-right: 10px;"> <!-- Flex for sales area chart -->
              <canvas id="salesAreaChart" style="height: 250px;"></canvas>
            </div>
            <div class="chart" style="width: 150px;"> <!-- Fixed width for donut chart -->
              <canvas id="salesDonutChart" style="height: 150px;"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Visitors Chart -->
    <div class="col-lg-5 mb-4 pl-0"> <!-- Remove left padding from the column -->
      <div class="card h-100" style="background: linear-gradient(to bottom, #B22222, #FF6F61, #FFB6C1, #FFC0CB);"> <!-- Dark red to light coral to pink gradient -->
        <div class="card-header">
          <h3 class="card-title text-white">Visitors</h3> <!-- White text for contrast -->
        </div>
        <div class="card-body">
          <div class="chart">
            <canvas id="visitorsChart" style="height: 350px;"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Chat and Sales Graph -->
  <div class="row g-3"> <!-- Adding g-3 for spacing between columns -->
    <!-- Direct Chat Section -->
    <div class="col-md-6"> 
      <div class="card direct-chat direct-chat-primary h-100" style="background-color: #007BFF; color: white;"> <!-- Background biru formal -->
        <div class="card-header" style="background-color: #0056b3; color: white;"> <!-- Header lebih gelap -->
          <h3 class="card-title">Direct Chat</h3>
          <div class="card-tools">
            <span data-toggle="tooltip" title="4 Pesan Baru" class="badge badge-light">4</span>
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Kontak" data-widget="chat-pane-toggle">
              <i class="fas fa-comments"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body" style="background-color: rgba(173, 216, 230, 0.5);"> <!-- Background biru muda -->
          <div class="direct-chat-messages">
            <!-- Messages here -->
            <div class="direct-chat-msg">
              <div class="direct-chat-infos clearfix">
                <span class="direct-chat-name float-left">Dimas Pratama</span>
                <span class="direct-chat-timestamp float-right">23 Jan 14:00</span>
              </div>
              <img src="https://adminlte.io/themes/v3/dist/img/user1-128x128.jpg" alt="Avatar Laki-laki 1" class="direct-chat-img">
              <div class="direct-chat-text" style="color: #333;">
                Hai, apakah kamu punya pembaruan tentang proyek itu?
              </div>
            </div>
            <div class="direct-chat-msg right">
              <div class="direct-chat-infos clearfix">
                <span class="direct-chat-name float-right">Lina Melati</span>
                <span class="direct-chat-timestamp float-left">23 Jan 14:05</span>
              </div>
              <img src="https://adminlte.io/themes/v3/dist/img/user3-128x128.jpg" alt="Avatar Perempuan 3" class="direct-chat-img">
              <div class="direct-chat-text" style="color: #333;">
                Ya, saya baru saja menyelesaikannya dan mengirimkannya kepadamu.
              </div>
            </div>
            <div class="direct-chat-msg">
              <div class="direct-chat-infos clearfix">
                <span class="direct-chat-name float-left">Rani Salsabila</span>
                <span class="direct-chat-timestamp float-right">23 Jan 14:10</span>
              </div>
              <img src="https://adminlte.io/themes/v3/dist/img/user7-128x128.jpg" alt="Avatar Perempuan User 7" class="direct-chat-img">
              <div class="direct-chat-text" style="color: #333;">
                Saya sudah menerima laporannya juga, bagus sekali!
              </div>
            </div>
            <div class="direct-chat-msg right">
              <div class="direct-chat-infos clearfix">
                <span class="direct-chat-name float-right">Aryan Akira</span>
                <span class="direct-chat-timestamp float-left">23 Jan 14:15</span>
              </div>
              <img src="https://adminlte.io/themes/v3/dist/img/user2-160x160.jpg" alt="Avatar Laki-laki 2" class="direct-chat-img">
              <div class="direct-chat-text" style="color: #333;">
                Bagus, saya akan meninjau dan kembali segera.
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer">
          <form action="#" method="post">
            <div class="input-group">
              <input type="text" name="message" placeholder="Ketik Pesan ..." class="form-control">
              <span class="input-group-append">
                <button type="button" class="btn btn-light">Kirim</button> <!-- Tombol biru muda -->
              </span>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Sales Graph Section -->
    <div class="col-md-6"> 
      <div class="card h-100" style="background-color: rgba(0, 128, 128, 1);">
        <div class="card-header">
          <h3 class="card-title" style="color: white;">Sales Graph</h3>
        </div>
        <div class="card-body" style="background-color: rgba(224, 255, 255, 0.8);">
          <div class="chart">
            <canvas id="salesGraph" width="600" height="400" style="height: 400px; width: 600px;"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row mt-3" style="background-color: #f8f9fa;"> <!-- Menambahkan warna latar belakang -->
    <!-- To Do List Box -->
    <div class="col-md-6 mb-3">
        <div class="card h-100">
            <div class="card-header p-3 bg-info">
                <h3 class="card-title">To Do List</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body p-3" style="background-color: #e0f7fa;"> <!-- Menambahkan warna latar belakang pada body card -->
                <ul class="todo-list" id="todo-list">
                    <li class="list-group-item">
                        <input type="checkbox">
                        <span class="text">Baca email terbaru</span>
                        <small class="badge badge-danger"><i class="far fa-clock"></i> 5 menit</small>
                    </li>
                    <li class="list-group-item">
                        <input type="checkbox">
                        <span class="text">Selesaikan laporan harian</span>
                        <small class="badge badge-info"><i class="far fa-clock"></i> 1 jam</small>
                    </li>
                    <li class="list-group-item">
                        <input type="checkbox">
                        <span class="text">Revisi tugas presentasi</span>
                        <small class="badge badge-warning"><i class="far fa-clock"></i> 2 jam</small>
                    </li>
                    <li class="list-group-item">
                        <input type="checkbox">
                        <span class="text">Buat catatan rapat</span>
                        <small class="badge badge-success"><i class="far fa-clock"></i> 30 menit</small>
                    </li>
                    <li class="list-group-item">
                        <input type="checkbox">
                        <span class="text">Perbarui jadwal kerja</span>
                        <small class="badge badge-primary"><i class="far fa-clock"></i> 15 menit</small>
                    </li>
                    <li class="list-group-item">
                        <input type="checkbox">
                        <span class="text">Siapkan dokumen presentasi</span>
                        <small class="badge badge-danger"><i class="far fa-clock"></i> 2 jam</small>
                    </li>
                    <li class="list-group-item">
                        <input type="checkbox">
                        <span class="text">Susun agenda rapat</span>
                        <small class="badge badge-info"><i class="far fa-clock"></i> 1 jam</small>
                    </li>
                    <li class="list-group-item">
                        <input type="checkbox">
                        <span class="text">Update media sosial</span>
                        <small class="badge badge-warning"><i class="far fa-clock"></i> 10 menit</small>
                    </li>
                </ul>
            </div>
            <div class="card-footer clearfix bg-info">
                <button type="button" class="btn btn-primary float-right" id="add-task-btn">Tambah Tugas</button>
            </div>
        </div>
    </div>

    <!-- Calendar Section -->
    <div class="col-md-6 mb-3">
        <div class="card h-100">
            <div class="card-header bg-primary">
                <h3 class="card-title">Calendar</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div> 
            <div class="card-body" style="background-color: #e0f7fa;"> <!-- Menambahkan warna latar belakang pada body card -->
                <div id="calendar"></div> <!-- Calendar container -->
            </div>
        </div>
    </div>
</div>

    <!-- Link FullCalendar JS and CSS -->
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js"></script>

    <!-- Link jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Link Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <!-- Link AdminLTE JS -->
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>
    <!-- ChartJS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>

document.getElementById('add-task-btn').addEventListener('click', function () {
    let taskText = prompt("Masukkan tugas baru:");
    if (taskText) {
        let li = document.createElement('li');
        li.innerHTML = `<input type="checkbox"><span class="text"> ${taskText}</span><small class="badge badge-secondary"><i class="far fa-clock"></i> Baru</small>`;
        li.setAttribute('draggable', 'true');
        document.getElementById('todo-list').appendChild(li);
        enableDragAndDrop(); // Enable drag and drop for the new task
    }
});

// Drag and drop functionality for To-Do List
function enableDragAndDrop() {
    let tasks = document.querySelectorAll('#todo-list li');
    tasks.forEach(task => {
        task.addEventListener('dragstart', function (e) {
            e.dataTransfer.setData('text/html', e.target.outerHTML);
            e.dataTransfer.setData('task-id', e.target.dataset.taskId);
            e.target.classList.add('dragging');
        });

        task.addEventListener('dragover', function (e) {
            e.preventDefault();
        });

        task.addEventListener('drop', function (e) {
            e.preventDefault();
            let draggingTask = document.querySelector('.dragging');
            let dropPosition = e.target.closest('li');
            if (draggingTask && dropPosition && draggingTask !== dropPosition) {
                dropPosition.insertAdjacentHTML('beforebegin', e.dataTransfer.getData('text/html'));
                draggingTask.remove();
                enableDragAndDrop();
            }
        });

        task.addEventListener('dragend', function (e) {
            e.target.classList.remove('dragging');
        });
    });
}

enableDragAndDrop(); // Initial enable drag and drop for existing tasks

// Calendar functionality with events
document.addEventListener('DOMContentLoaded', function () {
    let calendarEl = document.getElementById('calendar');
    let calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth', // Tipe tampilan kalender awal
        headerToolbar: { // Toolbar di atas kalender
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay' // Pilihan tampilan
        },
        editable: true, // Membolehkan event diubah atau dipindahkan
        selectable: true, // Membolehkan seleksi event
        events: [ // Daftar acara yang akan ditampilkan di kalender
            {
                title: 'Meeting dengan klien',
                start: '2024-01-05T10:30:00',
                end: '2024-01-05T12:30:00',
                backgroundColor: '#f56954', // Warna background
                borderColor: '#f56954', // Warna border
            },
            {
                title: 'Presentasi Proyek',
                start: '2024-01-10T09:00:00',
                backgroundColor: '#f39c12',
                borderColor: '#f39c12',
            },
            {
                title: 'Libur Tahun Baru',
                start: '2024-01-01', // Hanya membutuhkan tanggal tanpa jam
                backgroundColor: '#00a65a',
                borderColor: '#00a65a',
            },
            {
                title: 'Rapat Tim',
                start: '2024-01-15T13:00:00',
                backgroundColor: '#3c8dbc',
                borderColor: '#3c8dbc',
            },
            {
                title: 'Libur Nasional',
                start: '2024-02-17',
                backgroundColor: '#00c0ef',
                borderColor: '#00c0ef',
            },
            {
                title: 'Workshop',
                start: '2024-03-25T09:00:00',
                backgroundColor: '#605ca8',
                borderColor: '#605ca8',
            }
        ]
    });
    calendar.render(); // Render kalender
});





       // Example data for the sales chart with more pronounced fluctuations
const labels = ['2020', '2021', '2022', '2023', '2024', '2025', '2026', '2027', '2028'];
const salesData = {
    labels: labels,
    datasets: [{
        label: 'Sales ($)',
        data: [15000, 18000, 22000, 16000, 28000, 24000, 30000, 23000, 35000], // Fluctuating sales data
        borderColor: 'rgba(75, 192, 192, 1)', // Teal line color
        backgroundColor: 'rgba(75, 192, 192, 0.2)', // Teal fill color
        borderWidth: 2, // Thickness of the line
        fill: true // Fill under the line
    }]
};

const config = {
    type: 'line',
    data: salesData,
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'top', // Legend position at the top
            },
            title: {
                display: true,
                text: 'Sales Over the Years' // Chart title
            }
        },
        scales: {
            y: {
                beginAtZero: true, // Start Y-axis at zero
                title: {
                    display: true,
                    text: 'Sales ($)' // Label for Y-axis
                }
            },
            x: {
                title: {
                    display: true,
                    text: 'Year' // Label for X-axis
                }
            }
        }
    },
};

// Render the chart
const salesGraph = new Chart(
    document.getElementById('salesGraph'),
    config
);

   // Ambil elemen yang dibutuhkan
const messageInput = document.querySelector('input[name="message"]');
const chatMessages = document.querySelector('.direct-chat-messages');
const sendButton = document.querySelector('.btn-light');

// Fungsi untuk mengirim pesan
function sendMessage() {
  const messageText = messageInput.value.trim();

  // Hanya kirim pesan jika input tidak kosong
  if (messageText) {
    // Buat elemen pesan baru
    const messageElement = document.createElement('div');
    messageElement.classList.add('direct-chat-msg');

    // Tambahkan informasi pengirim dan waktu
    const timeStamp = new Date().toLocaleString([], { hour: '2-digit', minute: '2-digit' });
    messageElement.innerHTML = `
      <div class="direct-chat-infos clearfix">
        <span class="direct-chat-name float-left">Kamu</span>
        <span class="direct-chat-timestamp float-right">${timeStamp}</span>
      </div>
     <img src="https://adminlte.io/themes/v3/dist/img/user4-128x128.jpg" alt="Avatar Perempuan User 4" class="direct-chat-img">
      <div class="direct-chat-text" style="color: #333;">${messageText}</div>
    `;

    // Tambahkan pesan ke dalam daftar pesan
    chatMessages.appendChild(messageElement);

    // Kosongkan input
    messageInput.value = '';

    // Gulir ke bawah untuk menunjukkan pesan terbaru
    chatMessages.scrollTop = chatMessages.scrollHeight;
  }
}

// Tambahkan event listener untuk tombol kirim
sendButton.addEventListener('click', sendMessage);







  
  $(function() {
  // Sales Area Chart
  const ctxSalesArea = document.getElementById('salesAreaChart').getContext('2d');
  const salesAreaChart = new Chart(ctxSalesArea, {
    type: 'line',
    data: {
      labels: ['January', 'February', 'March', 'April', 'May', 'June'], // X-axis labels
      datasets: [{
        label: 'Sales Amount',
        data: [30, 70, 45, 60, 90, 120], // Sales data
        borderColor: 'rgba(75, 192, 192, 1)', // Line color
        backgroundColor: 'rgba(75, 192, 192, 0.2)', // Area fill color
        fill: true // Fill the area under the line
      }]
    },
    options: {
      responsive: true,
      scales: {
        y: {
          beginAtZero: true, // Start Y-axis at 0
          title: {
            display: true,
            text: 'Sales ($)' // Y-axis title
          }
        },
        x: {
          title: {
            display: true,
            text: 'Months' // X-axis title
          }
        }
      }
    }
  });

  // Sales Donut Chart
  const ctxSalesDonut = document.getElementById('salesDonutChart').getContext('2d');
  const salesDonutChart = new Chart(ctxSalesDonut, {
    type: 'doughnut',
    data: {
      labels: ['Product A', 'Product B', 'Product C'], // Categories
      datasets: [{
        label: 'Sales Distribution',
        data: [300, 50, 100], // Sales data
        backgroundColor: [
          'rgba(255, 99, 132, 0.6)', // Color for Product A
          'rgba(54, 162, 235, 0.6)', // Color for Product B
          'rgba(255, 206, 86, 0.6)'  // Color for Product C
        ],
        borderColor: 'rgba(255, 255, 255, 1)', // Border color
        borderWidth: 1 // Border width
      }]
    },
    options: {
      responsive: true // Make the chart responsive
    }
  });

  // Visitors Chart (Bar Chart)
  const ctxVisitors = document.getElementById('visitorsChart').getContext('2d');
  const visitorsChart = new Chart(ctxVisitors, {
    type: 'bar',
    data: {
      labels: ['Online Visitors', 'Sales'], // X-axis labels
      datasets: [{
          label: 'Number of Visitors',
          data: [120, 90], // Example data
          backgroundColor: 'rgba(54, 162, 235, 0.6)', // Color for Online Visitors
          borderColor: 'rgba(54, 162, 235, 1)', // Border color for Online Visitors
          borderWidth: 1 // Border width for Online Visitors
        },
        {
          label: 'Sales',
          data: [70, 60], // Example data
          backgroundColor: 'rgba(255, 99, 132, 0.6)', // Color for Sales
          borderColor: 'rgba(255, 99, 132, 1)', // Border color for Sales
          borderWidth: 1 // Border width for Sales
        }
      ]
    },
    options: {
      responsive: true,
      scales: {
        y: {
          beginAtZero: true, // Start Y-axis at 0
          title: {
            display: true,
            text: 'Counts' // Y-axis title
          }
        },
        x: {
          title: {
            display: true,
            text: 'Metrics' // X-axis title
          }
        }
      }
    }
  });
});







$(document).ready(function() {
    $('.small-box-footer').on('click', function(e) {
        e.preventDefault(); // Mencegah link default

        let info = '';
        let title = '';
        let link = '';

        // Tentukan informasi yang akan ditampilkan di modal berdasarkan box yang diklik
        const boxId = $(this).closest('.small-box').find('.inner h3').attr('id');
        
        if (boxId === 'totalUsers') {
            title = '<i class="fas fa-user"></i> Total Pengguna';
            info = '<strong>Total Pengguna:</strong> 1500 pengguna terdaftar di sistem.<br><br>' +
                   '<strong>Rincian:</strong><br>' +
                   '- Pengguna aktif: 1200<br>' +
                   '- Pengguna tidak aktif: 300<br>' +
                   '- Pengguna baru bulan ini: 100<br>' +
                   '- Pengguna premium: 250<br>';
            link = 'https://example.com/users';
        } else if (boxId === 'totalSuppliers') {
            title = '<i class="fas fa-truck"></i> Total Pemasok';
            info = '<strong>Total Pemasok:</strong> 100 pemasok terdaftar.<br><br>' +
                   '<strong>Rincian:</strong><br>' +
                   '- Pemasok aktif: 80<br>' +
                   '- Pemasok tidak aktif: 20<br>' +
                   '- Pemasok baru bulan ini: 5<br>' +
                   '- Rata-rata waktu respons: 24 jam<br>';
            link = 'https://example.com/suppliers';
        } else if (boxId === 'totalMaterials') {
            title = '<i class="fas fa-boxes"></i> Total Bahan';
            info = '<strong>Total Bahan:</strong> 200 jenis bahan tersedia.<br><br>' +
                   '<strong>Rincian:</strong><br>' +
                   '- Bahan tersedia: 150<br>' +
                   '- Bahan dalam pemesanan: 50<br>' +
                   '- Bahan baru ditambahkan bulan ini: 10<br>' +
                   '- Rata-rata stok per bahan: 20 unit<br>';
            link = 'https://example.com/materials';
        } else if (boxId === 'totalOrders') {
            title = '<i class="fas fa-shopping-cart"></i> Total Pesanan';
            info = '<strong>Total Pesanan:</strong> 750 pesanan diproses.<br><br>' +
                   '<strong>Rincian:</strong><br>' +
                   '- Pesanan berhasil: 700<br>' +
                   '- Pesanan gagal: 50<br>' +
                   '- Pesanan baru bulan ini: 150<br>' +
                   '- Rata-rata waktu pengiriman: 3 hari<br>';
            link = 'https://example.com/purchase-orders';
        } else if (boxId === 'totalProducts') {
            title = '<i class="fas fa-box-open"></i> Total Produk';
            info = '<strong>Total Produk:</strong> 300 produk tersedia.<br><br>' +
                   '<strong>Rincian:</strong><br>' +
                   '- Produk aktif: 250<br>' +
                   '- Produk tidak aktif: 50<br>' +
                   '- Produk baru ditambahkan bulan ini: 20<br>' +
                   '- Rata-rata penjualan per produk: 30 unit/bulan<br>';
            link = 'https://example.com/products';
        }

        // Isi modal dengan informasi yang sesuai
        $('#infoModalLabel').html(title);
        $('#modalBody').html(info + '<br><i class="fas fa-info-circle"></i> Untuk informasi lebih lanjut, kunjungi <a href="' + link + '" target="_blank">tautan ini</a>.');

        // Tampilkan modal
        $('#infoModal').modal('show');
    });

    // Event untuk tombol close pada modal
    $('#infoModal .btn-close, #infoModal .btn-secondary').on('click', function() {
        $('#infoModal').modal('hide'); // Menutup modal
    });

    // Event untuk tombol "More Info"
    $('#modalMoreInfo').on('click', function() {
        alert('Ini bisa diarahkan ke informasi lebih lanjut.'); // Perbarui sesuai kebutuhan
    });

    // Event untuk menutup modal saat tombol Escape ditekan
    $(document).on('keydown', function(e) {
        if (e.key === 'Escape') {
            console.log('Tombol Escape diklik'); // Log ke konsol
            $('#infoModal').modal('hide'); // Menutup modal
        }
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






  </script>
</body>
</html>