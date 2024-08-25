<?php
session_start();
include ('../../Connection/Koneksi.php');

// Periksa apakah data user ada di sesi
if (!isset($_SESSION['data_karyawan'])) {
    echo "<script>
            alert('Akses Ditolak. Anda Harus Login Terlebih Dahulu');
            window.location.href = '../Admin.php'; // Mengalihkan ke halaman login
          </script>";
    exit(); // Menghentikan eksekusi skrip
}



// Periksa apakah parameter 'id' diset
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Persiapkan statement untuk menghapus data user
    $stmt = $conn->prepare("DELETE FROM `data_user` WHERE `id` = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();

    // Alihkan setelah penghapusan
    header("Location: User.php");
    exit;
}

// Jika tidak ada id yang diset, mungkin akan ada tindakan lain di sini
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="../CSS/Main.css" />

    <!----===== Boxicons CSS ===== -->
    <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />

    <title>User</title>
</head>

<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="https://images.unsplash.com/photo-1553736277-055142d018f0?q=80&w=1958&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="" />
                </span>

                <div class="text logo-text">
                    <span class="name">Tegar</span>
                    <span class="profession">Karyawan</span>
                </div>
            </div>

            <i class="bx bx-chevron-right toggle"></i>
        </header>

        <div class="menu-bar">
            <div class="menu">
                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="Dashboard.php">
                            <i class="bx bx-home-alt icon"></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="User.php">
                            <i class='bx bx-user-plus icon'></i>
                            <span class="text nav-text">User</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="Pesan.php">
                            <i class='bx bx-chat icon'></i>
                            <span class="text nav-text">Pesan</span>
                        </a>
                    </li>


                    <li class="nav-link">
                        <a href="Data Karyawan.php">
                            <i class="bx bx-user-pin icon"></i>
                            <span class="text nav-text">Data Karyawan</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="Data Profile.php">
                            <i class="bx bx-image-alt icon"></i>
                            <span class="text nav-text">Profil Karyawan</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="Data Service Now.php">
                            <i class='bx bx-wrench icon'></i>
                            <span class="text nav-text">Service</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="Antrian.php">
                            <i class='bx bx-user-voice icon'></i>
                            <span class="text nav-text">Antrian</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="Tampil User.php">
                            <i class='bx bx-money-withdraw icon'></i>
                            <span class="text nav-text">Pembayaran</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="Payment.php">
                            <i class='bx bx-credit-card-alt bx-flip-horizontal icon'></i>
                            <span class="text nav-text">Info Pembayaran</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="../../Database/Logout Karyawan.php">
                        <i class="bx bx-log-out icon"></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>
            </div>
        </div>
    </nav>

    <section class="home">
        <section class="main">
            <div class="users">
                <div class="card">
                    <img src="1.webp">
                    <h4>Tegar</h4>
                    <p>Admin</p>
                    <div class="per">
                        <table>
                            <tr>
                                <td><span>85%</span></td>
                                <td><span>87%</span></td>
                            </tr>
                            <tr>
                                <td>Month</td>
                                <td>Year</td>
                            </tr>
                        </table>
                    </div>
                    <!-- Tambahkan kelas unik ke tombol -->
                    <button class="card-button">Profile</button>
                </div>
                <div class="card">
                    <img src="1.webp">
                    <h4>Tegar</h4>
                    <p>Admin</p>
                    <div class="per">
                        <table>
                            <tr>
                                <td><span>85%</span></td>
                                <td><span>87%</span></td>
                            </tr>
                            <tr>
                                <td>Month</td>
                                <td>Year</td>
                            </tr>
                        </table>
                    </div>
                    <!-- Tambahkan kelas unik ke tombol -->
                    <button class="card-button">Profile</button>
                </div>
                <div class="card">
                    <img src="1.webp">
                    <h4>Tegar</h4>
                    <p>Admin</p>
                    <div class="per">
                        <table>
                            <tr>
                                <td><span>85%</span></td>
                                <td><span>87%</span></td>
                            </tr>
                            <tr>
                                <td>Month</td>
                                <td>Year</td>
                            </tr>
                        </table>
                    </div>
                    <!-- Tambahkan kelas unik ke tombol -->
                    <button class="card-button">Profile</button>
                </div>
                <div class="card">
                    <img src="1.webp">
                    <h4>Tegar</h4>
                    <p>Admin</p>
                    <div class="per">
                        <table>
                            <tr>
                                <td><span>85%</span></td>
                                <td><span>87%</span></td>
                            </tr>
                            <tr>
                                <td>Month</td>
                                <td>Year</td>
                            </tr>
                        </table>
                    </div>
                    <!-- Tambahkan kelas unik ke tombol -->
                    <button class="card-button">Profile</button>
                </div>
                <div class="card">
                    <img src="1.webp">
                    <h4>Tegar</h4>
                    <p>Admin</p>
                    <div class="per">
                        <table>
                            <tr>
                                <td><span>85%</span></td>
                                <td><span>87%</span></td>
                            </tr>
                            <tr>
                                <td>Month</td>
                                <td>Year</td>
                            </tr>
                        </table>
                    </div>
                    <!-- Tambahkan kelas unik ke tombol -->
                    <button class="card-button">Profile</button>
                </div>
            </div>

            <section class="attendance">
                <div class="attendance-list">
                    <h2>Informasi Data User</h2>
                    <form action="" method="post">
                        <div class="search_wrap search_wrap_1">
                            <div class="search_box">
                                <input type="text" class="input" name="keyword" placeholder="search..." />
                                <button type="submit" name="cari" class="btn btn_common">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Konfirmasi Password</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Jumlah data per halaman
                            $limit = 5;

                            // Tentukan halaman saat ini
                            $page = isset($_GET['page']) ? $_GET['page'] : 1;

                            // Hitung offset
                            $offset = ($page - 1) * $limit;

                            // Inisialisasi nomor urut data
                            $nomor = ($page - 1) * $limit + 1;

                            // Query pencarian
                            if (isset($_POST['cari'])) {
                                $keyword = $_POST['keyword'];
                                $search_query = "SELECT * FROM data_user 
                                WHERE Nama LIKE '%$keyword%' 
                                OR Email LIKE '%$keyword%' 
                                OR Password LIKE '%$keyword%' 
                                OR Konfirmasi_Password LIKE '%$keyword%' 
                                LIMIT $offset, $limit";

                                $count_query = "SELECT COUNT(*) AS total FROM data_user 
                                WHERE Nama LIKE '%$keyword%' 
                                OR Email LIKE '%$keyword%' 
                                OR Password LIKE '%$keyword%' 
                                OR Konfirmasi_Password LIKE '%$keyword%'";

                            } else {
                                // Query tanpa pencarian
                                $search_query = "SELECT * FROM data_user LIMIT $offset, $limit";
                                $count_query = "SELECT COUNT(*) AS total FROM data_user";
                            }

                            // Eksekusi query pencarian
                            $result = $conn->query($search_query);

                            // Hitung total baris data karyawan
                            $total_rows = $conn->query($count_query)->fetch_assoc()['total'];

                            // Hitung total halaman
                            $total_pages = ceil($total_rows / $limit);
                            ?>
                            <?php while ($pecah = $result->fetch_assoc()) { ?>
                                <tr>
                                    <td><?php echo $nomor; ?></td>
                                    <td><?php echo $pecah['Nama']; ?></td>
                                    <td><?php echo $pecah['Email']; ?></td>
                                    <td><?php echo $pecah['Password']; ?></td>
                                    <td><?php echo $pecah['Konfirmasi_Password']; ?></td>
                                    <td>
                                        <button class="edit-btn"
                                            onclick="window.location.href='../Update/Update Data User.php?halaman=ubah_service&Id=<?php echo htmlspecialchars($pecah['id']); ?>'">Edit</button>
                                        <button class="delete-btn"
                                            onclick="hapusUser(<?php echo $pecah['id'] ?>)">Hapus</button>
                                    </td>
                                </tr>
                                <?php $nomor++;
                            } ?>
                        </tbody>
                        <script>
                            // Fungsi untuk konfirmasi penghapusan di client side
                            function hapusUser(id) {
                                if (confirm('Apakah Anda yakin ingin menghapus User ini?')) {
                                    window.location.href = 'User.php?id=' + id;
                                }
                            }
                        </script>
                    </table>
                    <div class="pagination">
                        <a href="?page=1" class="button" <?php if ($page <= 1) {
                            echo 'disabled';
                        } ?> id="startBtn">
                            <i class="fa-solid fa-angles-left"></i>
                        </a>
                        <a href="<?php if ($page > 1) {
                            echo "?page=" . ($page - 1);
                        } ?>" class="button prevNext <?php if ($page <= 1) {
                             echo 'disabled';
                         } ?>" id="prev">
                            <i class="fa-solid fa-angle-left"></i>
                        </a>
                        <div class="links">
                            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                                <a href="?page=<?php echo $i; ?>" class="link <?php if ($page == $i) {
                                       echo 'active';
                                   } ?>"><?php echo $i; ?></a>
                            <?php endfor; ?>
                        </div>
                        <a href="<?php if ($page < $total_pages) {
                            echo "?page=" . ($page + 1);
                        } ?>" class="button prevNext <?php if ($page >= $total_pages) {
                             echo 'disabled';
                         } ?>" id="next">
                            <i class="fa-solid fa-angle-right"></i>
                        </a>
                        <a href="?page=<?php echo $total_pages; ?>" class="button" <?php if ($page >= $total_pages) {
                               echo 'disabled';
                           } ?> id="endBtn">
                            <i class="fa-solid fa-angles-right"></i>
                        </a>
                    </div>
            </section>
        </section>
        <script src="../Js/Main.js"></script>
        <script>
            function hapusUser(id) {
                if (confirm('Apakah Anda yakin ingin menghapus User ini?')) {
                    window.location.href = 'User.php?halaman=hapus%20User&id=' + id;
                }
            }
        </script>
</body>

</html>

</html>

</html>

</html>