<!-- resources/views/logout.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Logout - AdminLTE</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/css/adminlte.min.css">
    <style>
        body {
            background-color: #f4f6f9;
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .logout-box {
            width: 400px;
            padding: 20px;
            background: #fff;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            text-align: center;
            animation: fadeIn 0.5s ease;
            border: 1px solid #dc3545; /* Border merah untuk konfirmasi */
        }

        .logout-logo {
            margin-bottom: 15px;
            animation: bounce 1s infinite; /* Animasi bounce pada logo */
        }

        .logout-logo img {
            width: 80px; /* Lebar logo lebih kecil */
            height: auto; /* Pastikan aspek rasio terjaga */
        }

        .logout-logo a {
            color: #007bff;
            font-size: 24px; /* Ukuran teks yang lebih kecil untuk kesesuaian */
            font-weight: bold;
            text-decoration: none;
            display: block; /* Membuat teks berada di baris baru */
            margin-top: 10px; /* Jarak antara logo dan teks */
        }

        .card-header {
            background-color: #dc3545;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            color: #fff;
            padding: 15px 0;
        }

        .card-body {
            padding: 20px;
        }

        .btn {
            width: 100%;
            border-radius: 4px;
            font-weight: bold;
            padding: 10px;
            display: flex;
            align-items: center; /* Center icons and text vertically */
            justify-content: center; /* Center icons and text horizontally */
        }

        .btn-logout {
            background-color: #dc3545;
            border-color: #dc3545;
            transition: background-color 0.3s;
        }

        .btn-logout:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }

        .btn-cancel {
            background-color: #6c757d;
            border-color: #6c757d;
            transition: background-color 0.3s;
        }

        .btn-cancel:hover {
            background-color: #5a6268;
            border-color: #545b62;
        }

        .btn i {
            margin-right: 8px; /* Jarak antara ikon dan teks */
        }

        /* Animasi */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-10px);
            }
            60% {
                transform: translateY(-5px);
            }
        }
    </style>
</head>
<body class="hold-transition logout-page">
<div class="logout-box">
    <div class="logout-logo">
        <!-- Logo SVG -->
        <img src="https://adminlte.io/themes/v3/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">
        <a href="#"><b>Admin</b>LTE</a> <!-- Teks berada di bawah logo -->
    </div>
    <div class="card">
        <div class="card-header">
            <h3>Konfirmasi Logout</h3>
        </div>
        <div class="card-body">
            <p>Apakah Anda yakin ingin keluar dari akun ini?</p>
            <button type="button" class="btn btn-logout mb-3" data-toggle="modal" data-target="#confirmLogoutModal">
                <i class="fas fa-power-off"></i> Logout
            </button>
            <a href="#" class="btn btn-cancel" onclick="stayOnPage();">
                <i class="fas fa-ban"></i> Batal
            </a>
        </div>
    </div>
</div>

<!-- Modal Konfirmasi Logout -->
<div class="modal fade" id="confirmLogoutModal" tabindex="-1" role="dialog" aria-labelledby="confirmLogoutModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmLogoutModalLabel">Konfirmasi Logout</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Anda akan keluar dari akun ini. Apakah Anda yakin?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <form action="{{ route('logout') }}" method="POST" id="logoutForm" style="display: inline;">
                    @csrf
                    <button type="submit" class="btn btn-logout">
                        <i class="fas fa-power-off"></i> Logout
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
<script>
    // Tetap di halaman logout
    function stayOnPage() {
        alert("Logout dibatalkan. Anda akan tetap berada di halaman ini.");
    }

    // Mengarahkan ke halaman login setelah logout
    $(document).ready(function() {
        $('#logoutForm').on('submit', function(e) {
            e.preventDefault(); // Mencegah pengiriman form default
            // Simulasi logout, bisa tambahkan logika lain sesuai kebutuhan
            window.location.href = 'http://localhost:8000/login#'; // Arahkan ke halaman login
        });
    });
</script>
</body>
</html>
