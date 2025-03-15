<?php
session_start();
$photo = isset($_SESSION['photo']) ? $_SESSION['photo'] : "default.jpg";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum Vitae</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgb(50, 60, 102);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgb(255, 252, 252);
            width: 90%;
            max-width: 600px;
            text-align: left;
            position: relative;
        }
        h2, h3 {
            color: rgb(0, 0, 0);
            border-bottom: 2px solid #1e3a8a;
            padding-bottom: 5px;
            text-align: center;
        }
        .section {
            margin-bottom: 20px;
        }
        .box {
            background: #ddd;
            padding: 10px;
            border-radius: 5px;
            font-weight: bold;
        }
        .content p {
            margin: 5px 0;
            font-size: 16px;
        }
        .contact p {
            font-weight: bold;
        }
        .photo-container {
            text-align: center;
            margin-bottom: 20px;
        }
        .photo-container img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #1e3a8a;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Curriculum Vitae</h2>

        <!-- Menampilkan pas foto -->
        <div class="photo-container">
            <img src="<?php echo htmlspecialchars($photo); ?>" alt="Pas Foto">
        </div>

        <div id="biografi" class="section">
            <h3>About Me</h3>
            <div class="content">
                <p><strong>Nama Lengkap:</strong> <?php echo htmlspecialchars($_SESSION['nama'] ?? 'Data tidak tersedia'); ?></p>
                <p><strong>Tempat, tanggal lahir:</strong> <?php echo htmlspecialchars($_SESSION['tempat_lahir'] ?? 'Data tidak tersedia'); ?>, <?php echo htmlspecialchars($_SESSION['tanggal_lahir'] ?? 'Data tidak tersedia'); ?></p>
            </div>
        </div>

        <div id="pendidikan" class="section">
            <h3>Education</h3>
            <div class="content">
                <p><strong>SD:</strong> <?php echo htmlspecialchars($_SESSION['pendidikan_sd'] ?? 'Data tidak tersedia'); ?></p>
                <p><strong>SMP:</strong> <?php echo htmlspecialchars($_SESSION['pendidikan_smp'] ?? 'Data tidak tersedia'); ?></p>
                <p><strong>SMA:</strong> <?php echo htmlspecialchars($_SESSION['pendidikan_sma'] ?? 'Data tidak tersedia'); ?></p>
                <p><strong>SMA:</STRONG> <?PHP echo htmlspecialchars($_SESSION['pendidikan_kuliah'] ?? 'Data tidak tersedia'); ?></p>
            </div>
        </div>

        <div id="skills" class="section">
            <h3>Skills</h3>
            <div class="content">
                <p><?php echo htmlspecialchars($_SESSION['skill_1'] ?? 'Data tidak tersedia'); ?></p>
                <p><?php echo htmlspecialchars($_SESSION['skill_2'] ?? 'Data tidak tersedia'); ?></p>
            </div>
        </div>

        <div id="kontak" class="section contact">
            <h3>Contact</h3>
            <div class="content">
                <p>WhatsApp: <?php echo htmlspecialchars($_SESSION['whatsapp'] ?? 'Data tidak tersedia'); ?></p>
                <p>Instagram: <?php echo htmlspecialchars($_SESSION['instagram'] ?? 'Data tidak tersedia'); ?></p>
                <p>Email: <?php echo htmlspecialchars($_SESSION['email'] ?? 'Data tidak tersedia'); ?></p>
            </div>
        </div>
    </div>
</body>
</html>
