<!DOCTYPE html>
<html lang="id" translate="no">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Flanet Kreatif</title>
<meta name="description" content="komunitas koding yang kreatif">
<meta name="keywords" content="insha allah bermanfaat">
<meta name="author" content="Kelompok 5">
<link rel="stylesheet" href="assets/styles/style.css">
</head>
<body>
<header role="banner" aria-label="logo">
<div>
<a href="index.html">
<img src="assets/image/logo.jpg" alt="logo flanet kreatif">
</a>
</div>
<div id="head"></div>
</header>
<main role="main" aria-label="menu utama">
<p id="menu"></p>
<section role="region" aria-label="konten">
<div>
<article id="konten">
<h2>Saran</h2>
<?php
$tanggal= "<p> " . date("d-m-y,h:i");
if ($_POST["submit"] == "kirim")
{
$nama = " <br> " . $_POST["nama"];
$telepon = " <br> " . $_POST["telepon"];
$komentar = " <br> " . $_POST["komentar"] . " </p> ";
$file=fopen("saran.txt","a");
fwrite($file,$tanggal);
fwrite($file,$nama);
fwrite($file,$telepon);
fwrite($file,$komentar);
fclose($file);
echo "Terimakasih! saran anda telah kami simpan.";
}
?>
</article>
</div>
<aside>
<article>
<h2>Website Flanet Kreatif</h1>
<p>
Kreatif mengekspresikan logika didalam coding
</p>
<figure>
<img src="assets/image/logo.jpg" alt="logo flanet kreatif">
<figcaption>Logo</figcaption>
</figure>
</article>
</aside>
</section>
<footer role="contentinfo" aria-label="footer">
<p>
design by Kelompok 5
</p>
<nav>
<a href='#konten'>kembali ke atas</a>
<a href='index.html'>Halaman Utama</a>
</nav>
<p>
copyright 2020 flanet kreatif. All rights reserved.
</p>
</footer>
<script src="assets/js/app.js"></script>
</body>
</html>