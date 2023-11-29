//ambil element yang dibutuhkan
let keyword = document.getElementById('keyword');
let tombolCari = document.getElementById('tombol-cari');
let container = document.getElementById('container');

//tambahkan event ketika keyword diketik
keyword.addEventListener('keyup', function(){

  //buat object ajax
  let xhr = new XMLHttpRequest();

  //cek kesiapan ajax
  xhr.onreadystatechange = function(){
    if (xhr.readyState == 4 && xhr.status == 200) {
      container.innerHTML = xhr.responseText;
    }
  }

  //eksekusi ajax
  xhr.open('GET', 'ajax/mahasiswa.php?keyword=' + keyword.value, true);
  xhr.send();
})
