<?php
if ($_POST) {
    $bilangan1 = $_POST['input_bilangan1'];
    $bilangan2 = $_POST['input_bilangan2'];
    $bilangan3 = $_POST['input_bilangan3'];
    $nama = $_POST['input_nama'];
    $email = $_POST['input_email'];
    $error_bilangan1 = "";
    $error_bilangan2 = "";
    $error_bilangan3 = "";
    $error_nama = "";
    $error_email = "";
    $error = false;

    if ($nama == "") {
        $error_nama = "Input nama tidak boleh kosong";
        $error = true;
    } elseif (is_numeric($nama)) {
        $error_nama = "Input nama tidak boleh berupa angka";
        $error = true;
    }
    if ($email == "") {
        $error_email = "Input email tidak boleh kosong";
        $error = true;
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_email = "Input email tidak valid";
        $error = true;
    }

    if ($bilangan1 == "") {
        $error_bilangan1 = "Input bilangan 1 tidak boleh kosong";
        $error = true;
    } elseif (!is_numeric($bilangan1)) {
        $error_bilangan1 = "Input bilangan 1 harus berupa angka";
        $error = true;
    }

    if ($bilangan2 == "") {
        $error_bilangan2 = "Input bilangan 2 tidak boleh kosong";
        $error = true;
    } elseif (!is_numeric($bilangan2)) {
        $error_bilangan2 = "Input bilangan 2 harus berupa angka";
        $error = true;
    }

    if ($bilangan3 == "") {
        $error_bilangan3 = "Input bilangan 3 tidak boleh kosong";
        $error = true;
    } elseif (!is_numeric($bilangan3)) {
        $error_bilangan3 = "Input bilangan 3 harus berupa angka";
        $error = true;
    }

    if ($error == false) {
        $rata2 = ($bilangan1 + $bilangan2 + $bilangan3) / 3;
        header("Location: http://localhost/JWD_A_Tugas_4/index.php?rata2=" . urlencode("Rata - rata = " . $rata2) . "&input_bilangan1=" . urlencode($bilangan1) . "&input_bilangan2=" . urlencode($bilangan2) . "&input_bilangan3=" . urlencode($bilangan3) . "&input_nama=" . urlencode($nama) . "&input_email=" . urlencode($email));
        exit();
    } else {
        header("Location: http://localhost/JWD_A_Tugas_4/index.php?error_bilangan1=" . urlencode($error_bilangan1) . "&error_bilangan2=" . urlencode($error_bilangan2) . "&error_bilangan3=" . urlencode($error_bilangan3) . "&error_nama=" . urlencode($error_nama) . "&error_email=" . urlencode($error_email) . "&input_bilangan1=" . urlencode($bilangan1) . "&input_bilangan2=" . urlencode($bilangan2) . "&input_bilangan3=" . urlencode($bilangan3) . "&input_nama=" . urlencode($nama) . "&input_email=" . urlencode($email));
        exit();
    }
}
?>