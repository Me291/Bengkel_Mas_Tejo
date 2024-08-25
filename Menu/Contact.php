<?php
require '../Database/dpesan.php';

if (isset($_POST['Kirim'])) {
    // Menghindari serangan SQL injection dengan membersihkan data yang diterima
    $data = [
        'First_Name' => mysqli_real_escape_string($conn, $_POST['First_Name']),
        'Last_Name' => mysqli_real_escape_string($conn, $_POST['Last_Name']),
        'Email' => mysqli_real_escape_string($conn, $_POST['Email']),
        'No_Telepon' => mysqli_real_escape_string($conn, $_POST['No_Telepon']),
        'Pesan' => mysqli_real_escape_string($conn, $_POST['Pesan'])
    ];

    // Memanggil fungsi kirim_pesan dengan data yang sudah dibersihkan
    if (kirim_pesan($data) > 0) {
        echo "<script>
		alert('Pesan Berhasil Ditambahkan!');
		</script>";
        echo "<meta http-equiv='refresh' content='1;url=../Home.php'>";
    } else {
        // Menampilkan pesan error jika terjadi kesalahan saat menambahkan pesan
        echo "<script>
		alert('Gagal menambahkan pesan: " . mysqli_error($conn) . "');
		</script>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contact</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../CSS/Contact.css">
    <!-- Fontawesome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
</head>

<body>


    <section class="contact-section">
        <div class="contact-bg">
            <h3>Bengkel Mas Tejo</h3>
            <h2>contact us</h2>
            <div class="line">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <p class="text">Apakah motor Anda membutuhkan perawatan berkala atau perbaikan? Kami siap membantu! Hubungi
                kami sekarang untuk mendapatkan layanan profesional dan andal untuk motor Anda.</p>
            <a href="../Home.php" class="btn btn-primary mt-4">Home</a>
        </div>


        <div class="contact-body">
            <div class="contact-info">
                <div>
                    <span><i class="fas fa-mobile-alt"></i></span>
                    <span>Phone No.</span>
                    <span class="text">+62764235718</span>
                </div>
                <div>
                    <span><i class="fas fa-envelope-open"></i></span>
                    <span>E-mail</span>
                    <span class="text">tejo@company.com</span>
                </div>
                <div>
                    <span><i class="fas fa-map-marker-alt"></i></span>
                    <span>Address</span>
                    <span class="text">Kuningan, Jakarta Selatan</span>
                </div>
                <div>
                    <span><i class="fas fa-clock"></i></span>
                    <span>Opening Hours</span>
                    <span class="text">Setiap Hari - (09.00 to 17:00 PM)</span>
                </div>
            </div>

            <div class="contact-form">
                <form action="" method="post">
                    <div>
                        <input type="text" class="form-control" placeholder="First Name" name="First_Name" required>
                        <input type="text" class="form-control" placeholder="Last Name" name="Last_Name">
                    </div>
                    <div>
                        <input type="email" class="form-control" placeholder="E-mail" required name="Email">
                        <input type="text" class="form-control" placeholder="Phone" name="No_Telepon">
                    </div>
                    <textarea rows="5" placeholder="Message" class="form-control" required name="Pesan"></textarea>
                    <input type="submit" class="send-btn" value="send message" name="Kirim">
                </form>
                <div>
                    <img src="../Image/contact-png.png" alt="">
                </div>
            </div>

            <!-- Button kembali ke home -->
        </div>

        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d223700.1490386933!2d-97.11558670486288!3d28.829485511234168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864266db2e2dac3b%3A0xeee20d566f63267d!2sVictoria%2C%20TX%2C%20USA!5e0!3m2!1sen!2snp!4v1604921178092!5m2!1sen!2snp"
                width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0"></iframe>
        </div>

        <div class="contact-footer">
            <h3>Follow Us</h3>
            <div class="social-links">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
                <a href="#" class="fab fa-youtube"></a>
            </div>
        </div>
    </section>
</body>

</html>