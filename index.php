<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/mystyle.css">
    <title>Project 4</title>
</head>

<body>

    <main>
        <input type="button" value="Refresh" onclick="refreshPage()">
        <h1>Form Menghitung Rata - Rata</h1>

        <form action="proses.php" method="post">
            <label for="input_nama">Nama :</label>
            <input type="text" name="input_nama" id="input_nama"
                value="<?php echo isset($_GET['input_nama']) ? $_GET['input_nama'] : ''; ?>">
            <?php
            if (isset($_GET['error_nama'])) {
                echo "<p class='error_message'>" . $_GET['error_nama'] . "</p>";
            }
            ?>
            <label for="input_email">Email :</label>
            <input type="email" name="input_email" id="input_email"
                value="<?php echo isset($_GET['input_email']) ? $_GET['input_email'] : ''; ?>">
            <?php
            if (isset($_GET['error_email'])) { // Perbaikan di sini: menggunakan 'error_email' untuk pesan validasi email
                echo "<p class='error_message'>" . $_GET['error_email'] . "</p>";
            }
            ?>
            <label for="input_bilangan1">Bilangan 1 :</label>
            <input type="text" name="input_bilangan1" id="input_bilangan1"
                value="<?php echo isset($_GET['input_bilangan1']) ? $_GET['input_bilangan1'] : ''; ?>">
            <?php
            if (isset($_GET['error_bilangan1'])) {
                echo "<p class='error_message'>" . $_GET['error_bilangan1'] . "</p>";
            }
            ?>
            <label for="input_bilangan2">Bilangan 2 :</label>
            <input type="text" name="input_bilangan2" id="input_bilangan2"
                value="<?php echo isset($_GET['input_bilangan2']) ? $_GET['input_bilangan2'] : ''; ?>">
            <?php
            if (isset($_GET['error_bilangan2'])) {
                echo "<p class='error_message'>" . $_GET['error_bilangan2'] . "</p>";
            }
            ?>
            <label for="input_bilangan3">Bilangan 3 :</label>
            <input type="text" name="input_bilangan3" id="input_bilangan3"
                value="<?php echo isset($_GET['input_bilangan3']) ? $_GET['input_bilangan3'] : ''; ?>">
            <?php
            if (isset($_GET['error_bilangan3'])) {
                echo "<p class='error_message'>" . $_GET['error_bilangan3'] . "</p>";
            }
            ?>
            <input type="submit" value="Submit">
        </form>
        <?php
        if (isset($_GET['rata2'])) {
            echo "<p>" . $_GET['rata2'] . "</p>";
        }
        ?>
    </main>
    <script>
        function refreshPage() {
            window.location.href = "http://localhost/JWD_A_Tugas_4/index.php";
        }

    </script>
</body>

</html>