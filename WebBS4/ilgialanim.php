<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="stilAlan.css"> 
    <link rel="stylesheet" href="stilFooter.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/19cdc3d7ad.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>İlgi Alanım</title>
  </head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #14233c;">
        <a class="navbar-brand " href="index.html">
        <img src="images/logo.jpg" alt="Ana Sayfa" title="Ana Sayfa">      
        <span class="text text-right hidden-xs"><p>Mahmut Can</p></span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto ">
            <li class="nav-item">
                <a class="nav-link text-white mr-3 fas fa-home" href="index.html"><p> &nbspAnasayfa</p></a>
            </li>

            <li class="nav-item">
                <a class="nav-link ml-3 text-white fas fa-graduation-cap" href="egitim.html"><p> &nbspEğitim</p></a>
            </li>

            <li class="nav-item">
                <a class="nav-link ml-3 text-white fas fa-city" href="sehir.html"> <p>  &nbspŞehrim</p></a>
            </li>

            <li class="nav-item">
                <a class="nav-link ml-3 text-white fas fa-archway" href="miras.html"> <p> &nbspMirasımız</p></a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link ml-3 text-success fas fa-dollar-sign" href="ilgialanim.php"> <p> &nbspİlgi Alanım</p></a>
            </li>

            <li class="nav-item">
                <a class="nav-link ml-3 text-white fas fa-phone-square-alt" href="iletisim.html"> <p> &nbspİletişim</p></a>
            </li>
            <li class="nav-item" >
              <a class="nav-link ml-3 text-primary fas fa-sign-in-alt" href="login.php"> <p> &nbspGiriş Yap</p></a>
          </li> 
          </ul>
        </div>
      </nav>
</header>
   
<div class="container kur">
<?php
    $JSON = json_decode(file_get_contents('https://api.genelpara.com/embed/doviz.json'), true);
?>
<div class="timeline">
<ul>
    <li>
        <h4>USD</h4><br>
        <p>Alış: <?php echo $JSON['USD']['alis']; ?></p>
        <p>Fiyat: <?php echo $JSON['USD']['satis']; ?></p>
        <p>Değişim: <?php echo $JSON['USD']['degisim']; ?></p>
    </li>
    <li>
        <h4>EUR</h4><br>
        <p>Alış: <?php echo $JSON['EUR']['alis']; ?></p>
        <p>Fiyat: <?php echo $JSON['EUR']['satis']; ?></p>
        <p>Değişim: <?php echo $JSON['EUR']['degisim']; ?></p>
    </li>
    <li>
        <h4>GBP</h4><br>
        <p>Alış: <?php echo $JSON['GBP']['alis']; ?></p>
        <p>Fiyat: <?php echo $JSON['GBP']['satis']; ?></p>
        <p>Değişim: <?php echo $JSON['GBP']['degisim']; ?></p>
    </li>
    <li>
        <h4>CHF</h4><br>
        <p>Alış: <?php echo $JSON['CHF']['alis']; ?></p>
        <p>Fiyat: <?php echo $JSON['CHF']['satis']; ?></p>
        <p>Değişim: <?php echo $JSON['CHF']['degisim']; ?></p>
    </li>
    <li>
        <h4>CAD</h4><br>
        <p>Alış: <?php echo $JSON['CAD']['alis']; ?></p>
        <p>Fiyat: <?php echo $JSON['CAD']['satis']; ?></p>
        <p>Değişim: <?php echo $JSON['CAD']['degisim']; ?></p>
    </li>
</ul>
</div>
</div>







<footer class="footer-foot">
  <div class="footer-right">
  <a href="https://www.instagram.com/mahmutcanbayrm7/?hl=tr"><i class="fa fa-instagram"></i></a>
  <a href="https://twitter.com/mhmtcnbyrm7"><i class="fa fa-twitter"></i></a>
  <a href="https://www.linkedin.com/in/mahmut-can-bayram-551192195/"><i class="fa fa-linkedin"></i></a>
  <a href="https://github.com/mcanb7"><i class="fa fa-github"></i></a>
  </div>
  <div class="footer-left">
  <p class="footer-links">
  <a href="index.html">Ana Sayfa</a>
  ·
  <a href="egitim.html">Eğitim</a>
  ·
  <a href="sehir.html">Şehrim</a>
  ·
  <a href="miras.html">Mirasımız</a>
  ·
  <a href="iletisim.html">İletişim</a>
  </p>
  <p>© 2021 Tüm Hakları Saklıdır.<br>Mahmut Can BAYRAM</p>
  </div>
  </footer>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>