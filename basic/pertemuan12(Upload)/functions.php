<?php 
//koneksi ke database
    $conn = mysqli_connect("localhost", "root", "", "phpdasar");

    function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;

    }

    function tambah($data){
            global $conn;//ini untuk mengakses $coon di global scope
            //ambil data dari tiap elemen form
            //htmlspecialchars untuk membatasi user memasukan data dan tidak bisa menjalankan code html/css/js
            $nrp = htmlspecialchars($data["nrp"]);
            $nama = htmlspecialchars($data["nama"]);
            $email = htmlspecialchars($data["email"]);
            $jurusan = htmlspecialchars($data["jurusan"]);

            //upload gambar
            $gambar = upload();
            if(!$gambar){
                return false;
            }

            //query insert data
            $query = "INSERT INTO mahasiswa
                VALUES
                ('','$nama', '$nrp', '$email', '$jurusan', '$gambar')
                ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
        }

    function upload(){

        $namaFile = $_FILES['gambar']['name'];
        $ukuranFile = $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];
        $tempName = $_FILES['gambar']['tmp_name'];

        //cek apakah tidak ada gambar yang diupload
        if($error === 4){
            echo "<script> 
                    alert('pilih gambar terlebih dahulu!');
                    </script>";
            return false; //ini conect dengan function tambah. jadi jika ini gagal maka function tambah juga gagal
        }

        //cek apakah yang diupload adalah gambar
        $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
        $ekstensiGambar = explode(".", $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));
        if(!in_array($ekstensiGambar, $ekstensiGambarValid)){
            echo "<script> 
                    alert('yang Anda upload bukan gambar!');
                    </script>";
            return false;
        }

        //cek jika ukurannya terlalu besar
        if($ukuranFile > 1000000){
            echo "<script> 
                    alert('ukuran gambar terlalu besar!');
                    </script>";
            return false;
        }

        //generate nama gambar baru 
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;

        //lolos pengecekkan, gambar siap diupload
        move_uploaded_file($tempName, 'img/' . $namaFileBaru);
        return $namaFileBaru;
    }

    function hapus($id){
        global $conn;
        mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
        return mysqli_affected_rows($conn);//ini untuk mengetahui nilai function hapus > 0 atau nilai function < 0
}


    function ubah($data){
        global $conn;//ini untuk mengakses $coon di global scope
        //ambil data dari tiap elemen form
        //htmlspecialchars untuk membatasi user memasukan data dan tidak bisa menjalankan code html/css/js
        $id = $data["id"];
        $nrp = htmlspecialchars($data["nrp"]);
        $nama = htmlspecialchars($data["nama"]);
        $email = htmlspecialchars($data["email"]);
        $jurusan = htmlspecialchars($data["jurusan"]);
        $gambarLama = htmlspecialchars($data["gambarLama"]);
        
        //cek apakah user pilih gambar baru atau tidak
        if( $_FILES['gambar']['error'] === 4){
            $gambar = $gambarLama;
        }else{
            $gambar = upload();
        }
        
            
        //query insert data
        $query = "UPDATE mahasiswa SET
                    nrp = '$nrp',
                    nama = '$nama',
                    email = '$email',
                    jurusan = '$jurusan',
                    gambar = '$gambar'
                WHERE id = $id
                    ";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }


function cari($keyword){
    $query = "SELECT * FROM mahasiswa
                WHERE
                nama LIKE '%$keyword%' OR
                nrp LIKE '%$keyword%' OR
                email LIKE '%$keyword%'OR
                jurusan LIKE '%$keyword%'
            ";
    return query($query);
}

?>