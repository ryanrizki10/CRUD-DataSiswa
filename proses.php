<?php
    // Di cek apakah ada interaksi dengan metode POST, yang nama interaksinya itu adalah 'aksi'. Jika ada, maka value dari nilai aksi itu apa? Jika edit maka, akan memproses edit data. Jika nilainya add, maka akan tambah data.

    if(isset($_POST['aksi'])){
        if($_POST['aksi'] == 'add'){
            echo 'Tambah Data <a href="index.php">[Home]</a>';
        } else if($_POST['aksi'] == 'edit'){
            echo 'Edit Data <a href="index.php">[Home]</a>';
        }
    }

    if(isset($_GET['hapus'])){
        echo 'Hapus Data <a href="index.php">[Home]</a>';
    }


?>