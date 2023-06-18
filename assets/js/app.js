var idbulan=["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];
var idhari=["Minggu","Senin","Selasa","Rabu","Kamis","Jum&#39;at","Sabtu"];
var date=new Date();
var tahun=date.getFullYear();
var bulan=date.getMonth();
var tanggal=date.getDate();
var hari=date.getDay();
var jam=date.getHours();
var menit=date.getMinutes();
var sekarang="<h1>Selamat Datang</h1>"+"<p>Saat ini anda berkunjung pada<br>"+idhari[hari]+", "+tanggal+" "+idbulan[bulan]+" "+tahun+"<br>jam "+jam+":"+menit+".</p>";
var menu="<a href='#konten'>loncat ke konten</a><br>"
+"<a href='aplikasi/index.html'>Aplikasi</a><br>"
+"<a href='artikel/index.html'>Artikel</a><br>"
+"<a href='galeri/index.html'>Galeri</a><br>"
+"<a href='tentang.html'>Tentang Kami</a>";
var galeri="Perulangan (Looping)<br>oleh kelompok5<br><a href='../file/persentasi_perulangan_kelompok5.pptx' download='Persentasi'>Download Persentasi</a>"
+"<br><a href='../file/makalah_perulangan_kelompok5.docx' download='Makalah'>Download Makalah</a>"
+"<br>Disusun oleh:<br><ul><li>Ahmad Sufi Zulfikar</li><li>Jejen Juanda</li><li>Novita Sary Tiara</li><li>Suardi</li><li>Tirto Purwadi</li></ul>"
+"Blind Coding ID<br>oleh Jejen Juanda<br><a href='../galeri/001.html'>Lihat</a>";
document.getElementById("head").innerHTML = sekarang;
document.getElementById("menu").innerHTML = menu;
document.getElementById("galeri").innerHTML = galeri;