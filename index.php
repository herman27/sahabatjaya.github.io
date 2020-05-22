<!DOCTYPE php>
<head>
    <link rel="stylesheet" type="text/css" href="css/cssModel.css">
    <title>Program UTS</title></head>
<body>
    <div class="header">
        <?php include"html/header2.html";?>
    </div>
    <ul>
    <li>
        <a href="index.php?page=home">Home</a></li>
        <li class="dropdown"><a href="#" class="dropbtn">About</a>
        <div class="dropdown-content">
            <a href="index.php?page=sejarah">Sejarah</a>
			<a href="index.php?page=visimisi">Visi dan Misi</a>
			<a href="index.php?page=tujuan">Tujuan</a>
			<a href="index.php?page=profil">Profil</a>
        </div>
    </li>
    <li>
        <a href="index.php?page=gallery">Gallery</a></li>
        <li><a href="index.php?page=kontak">Contact</a></li>
        <li class="login"><a href="index.php?page=login" style="float:right">Login</a>
    </ul>
    </div>
    <?php
    include"html/teksberjalan.html";?>
</div>
</div>
<div class="row">
    <div class="leftcolumn">
        <div class="card">
            <?php
            $page=(isset($_GET['page']))?$_GET['page']:"main";
            switch ($page){
                case 'home': include "html/home.html";break;
                case 'about': include "html/about.html";break;
                case 'sosmed': include "html/sosmed.html";break;
                case 'teksberjalan': include "html/teksberjalan.html";break;
                case 'sejarah': include "html/sejarah.html";break;
                case 'visimisi': include "html/visimisi.html";break;
                case 'tujuan': include "html/tujuan.html";break;
                case 'gallery': include "html/gallery.html";break;
                case 'profil': include "html/profil.html";break;
                case 'kontak': include "html/kontak.html";break;
                case 'lokasi': include "html/lokasi.html";break;
                case 'login': include "html/login.html";break;
                case 'main': 
                default:include'html/error.html';
            }?>
        </div>
        </div>
    <div class="rightcolumn">
       <div class="card">
           <?php
        include"html/lokasi.html";?>
</div>
<div class="card">
<?php
include"html/sosmed.html";?>
</div>
</div>
</div>
<div class="footer">
<?php
include"html/footer.html";?>
</div>
</body>
