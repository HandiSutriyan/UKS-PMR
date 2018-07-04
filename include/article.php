<?php
  if (isset($_GET['uks'])){
    include "pages/uks.php";
  }else if(isset($_GET['obat'])){
    include "pages/obat.php";
  }else if(isset($_GET['doras'])){
    include "pages/doras.php";
  }
  else{
    ?>

<div class="container-fluid featured hidden-xs">
    <div class="container">
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-sm-4 ">
          <div class="gambar">
            <img src="gambar/care.png" class="img-responsive">
          </div>
          <div class="col-md-4"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="col-sm-12 text-center title">
      <h2>Apa saja pelayanan Kami?</h2>
    </div>
    <div class="row services">
      <div class="col-sm-4 text-center">
        <div class="panel panel-default">
          <div class="panel-body">
             <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
            <h3>Data Obat</h3>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
            <p><a href="index.php?obat">Learn More &raquo;</a></p>
          </div>
        </div>
       
      </div>
      <div class="col-sm-4 text-center">
        <div class="panel panel-default">
          <div class="panel-body">
             <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
            <h3>UKS</h3>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
            <p><a href="index.php?uks">Learn More &raquo;</a></p>
          </div>
        </div>
      </div>
      <div class="col-sm-4 text-center">
        <div class="panel panel-default">
          <div class="panel-body">
             <span class="glyphicon glyphicon-tint" aria-hidden="true"></span>
            <h3>Donor Darah</h3>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
            <p><a href="index.php?doras">Learn More &raquo;</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
       <p> <h3>Didukung oleh:</h3></p>
       <img src="gambar/sponsor.png" class="img-responsive sponsor">
       
      </div>
      <div class="col-sm-4 ">
        <h3>Kontak kami:</h3>
        <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
        <span class="phone">Call Us: (021)4585-0387</span><br>
        <span class="glyphicon glyphicon-file" aria-hidden="true"></span>
        <span class="phone">Blog: <a target="_blank" href="http://www.pmrstemsago.blogspot.com"> www.pmrstemsago.blogspot.com</a></span><br>
         <span class="glyphicon glyphicon-camera" aria-hidden="true"></span>
        <span class="phone">Instagram: <a target="_blank" href="http://www.pmrstemsago.blogspot.com"> @pmrstemsago</a></span>
      </div>
    </div>
  </div>
  <?php
  }
?>