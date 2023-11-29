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
        $gambar = htmlspecialchars($data["gambar"]);
        
        //query insert data
        $query = "INSERT INTO mahasiswa
            VALUES
            ('','$nama', '$nrp', '$email', '$jurusan', '$gambar')
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
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
        $gambar = htmlspecialchars($data["gambar"]);
        
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