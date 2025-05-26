<?php
# KONTROL MENU PROGRAM
if ($_GET) {
    // jika mendapatkan variabel URL ?page
    switch ($_GET['page']) {
        case '':
            if (!file_exists("main.php")) die("Empty Main Page!");
            include "main.php";
            break;

        case 'matakuliah-Data':
            if (!file_exists("matakuliah_data.php")) die("Sorry Empty Page!");
            include "matakuliah_data.php";
            break;

        case 'matakuliah-Add':
            if (!file_exists("matakuliah_data.php")) die("Sorry Empty Page!");
            include "matakuliah_add.php";
            break;

        case 'dosen-Data':
            if (!file_exists("dosen_data.php")) die("Sorry Empty Page!");
            include "dosen_data.php";
            break;

        case 'dosen-Add':
            if (!file_exists("dosen_add.php")) die("Sorry Empty Page!");
            include "dosen_add.php";
            break;

        case 'Mahasiswa-Data':
            if (!file_exists("mahasiswa_data.php")) die("Sorry Empty Page!");
            include "mahasiswa_data.php";
            break;

        case 'Mahasiswa-Add':
            if (!file_exists("mahasiswa_add.php")) die("Sorry Empty Page!");
            include "mahasiswa_add.php";
            break;

        default:
            if (!file_exists("main.php")) die("Empty Main Page!");
            include "main.php";
            break;
    }
} else {
    // Jika tidak mendapatkan variabel URL : ?page
    if (!file_exists("main.php")) die("Empty Main Page!");
    include "main.php";
}
