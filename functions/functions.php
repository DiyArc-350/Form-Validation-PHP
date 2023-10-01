<?php
    // err
    $error_nama = "";
    $error_email = "";
    $error_agama = "";
    $error_gender = "";
    $error_telp = "";
    $error_alamat = "";
    $error_gD = "";
    $error_usia = "";
    $error_ttl = "";

    // write
    $wNama = "";
    $wGender = "";
    $wAgama = "";
    $wEmail = "";
    $wTelp = "";
    $wAlamat = "";
    $wGD = "";
    $wUsia = "";
    $wTtl = "";

    // data
    $nama = "";
    $email = "";
    $agama = "";
    $gender = "";
    $telp = "";
    $alamat = "";
    $gD = "";
    $usia = "";
    $ttl ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $agama = strtolower($_POST["agama"]);
    $gender = substr($_POST["gender"], 0, 1);
    $ttl = $_POST["ttl"];
    $gD = $_POST["gD"];
    $usia = $_POST["usia"];
    $alamat = $_POST["alamat"];
    $email = htmlspecialchars($_POST["email"]);
    $telp = $_POST["telp"];

    // Validasi nama 
    if (empty($nama)) {
        $error_nama = "Nama tidak boleh kosong";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $nama)) {
        $error_nama = "Inputan hanya boleh huruf dan spasi";
    } elseif (!empty($nama) && preg_match("/^[a-zA-Z ]*$/", $nama)) {
        $nama = ucwords($nama);
        //
        $wNama = "
            <div class='row'>
            <div class='col left'>
                <p>Nama</p>
            </div>
            <div class='col-9 right'>
                <p>: $nama</p>
            </div>
            </div>
            ";
    }

    // validasi agama
    $agama = ucwords($agama);
    $liAgama = array("Islam", "Protestan", "Katolik", "Hindu", "Budha", "Konghucu");
    if (in_array($agama, $liAgama)) {
        $wAgama = "
            <div class='row'>
            <div class='col left'>
                <p>Agama</p>
            </div>
            <div class='col-9 right'>
                <p>: $agama</p>
            </div>
            </div>
            ";
    } elseif (!in_array($agama, $liAgama) && !empty($agama)) {
        $error_agama = "Islam/ Protestan/ Katolik/ Hindu/ Budha/ Konghucu";
    }

    // validasi gender
    $liGender = array("P", "L");
    $gender = strtoupper($gender);
    if (in_array($gender, $liGender)) {
        $wGender = "
            <div class='row'>
            <div class='col left'>
                <p>Gender</p>
            </div>
            <div class='col-9 right'>
                <p>: $gender</p>
            </div>
            </div>
            ";
    } elseif (empty($gender)) {
        $error_gender = "Wajid di isi!";
    } elseif (!in_array(strtoupper($gender), $liGender)) {
        $error_gender = "Kau Pikir ini di Thailand?";
    }

    // Validasi ttl
    if (empty($ttl)) {
        $error_ttl = "Tanggal lahir tidak boleh kosong";
    } elseif (!empty($ttl)){
        $ttl = ucwords($ttl);
        $wTtl = "
            <div class='row'>
            <div class='col left'>
                <p>TTL</p>
            </div>
            <div class='col-9 right'>
                <p>: $ttl</p>
            </div>
            </div>
            ";
    }

    // validasi gol darah
    $ligD = array("A", "B", "AB", "O");
    $gD = strtoupper($gD);
    if (in_array($gD, $ligD)) {
        $wGD = "
            <div class='row'>
            <div class='col left'>
                <p>Gol Darah</p>
            </div>
            <div class='col-9 right'>
                <p>: $gD</p>
            </div>
            </div>
            ";
    } elseif (empty($gD)) {
        $error_gD = "Wajid di isi!";
    } elseif (!in_array(strtoupper($gD), $ligD)) {
        $error_gD = "A / B / AB / O";
    }

    // validasi usia
    if (is_numeric($usia)) {
        $wUsia = "
            <div class='row'>
            <div class='col left'>
                <p>Usia</p>
            </div>
            <div class='col-9 right'>
                <p>: $usia</p>
            </div>
            </div>
            ";
    } elseif (empty($usia)) {
        $error_usia = "Wajib di isi!";
    } elseif (!is_numeric($usia)) {
        $error_usia = 'Mohon gunakan angka';
    }

    // Validasi alamat
    if (empty($alamat)) {
        $error_alamat = "alamat tidak boleh kosong";
    } elseif (strlen($alamat) > 101) {
        $error_alamat = "Maksimal 100 karakter";
    } elseif (!empty($alamat)) {
        $wAlamat = "
            <div class='row'>
            <div class='col left'>
                <p>Alamat</p>
            </div>
            <div class='col-9 right'>
                <p>: $alamat</p>
            </div>
            </div>
            ";
    }

    // validasi emali
    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $wEmail = "
            <div class='row'>
            <div class='col left'>
                <p>Email</p>
            </div>
            <div class='col-9 right'>
                <p>: $email</p>
            </div>
            </div>
            ";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($email)) {
        $error_email = "Format email salah";
    } else {
        $error_email = "Wajib di isi!";
    }

    // validasi no telp
    if (is_numeric($telp)) {
        $wTelp = "
            <div class='row'>
            <div class='col left'>
                <p>Telp</p>
            </div>
            <div class='col-9 right'>
                <p>: $telp</p>
            </div>
            </div>
            ";
    } elseif (empty($telp)) {
        $error_telp = "Wajib di isi!";
    } elseif (!is_numeric($telp)) {
        $error_telp = 'Nomor HP hanya boleh angka';
    }
}
?>
