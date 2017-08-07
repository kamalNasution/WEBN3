<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PTPN 3</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link href="css/prettyPhoto.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" />

  <style>
  .dropdown-submenu {
    position: relative;
  }

  .dropdown-submenu .dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -1px;
  }
  body { padding-top: 70px; }
  </style>
  <!-- =======================================================
  Theme Name: Company
  Theme URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
  Author: BootstrapMade
  Author URL: https://bootstrapmade.com
  ======================================================= -->

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery-2.1.1.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/functions.js"></script>
</head>
<body>
   <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="navbar-brand">
            <a href="/"><h1><span>PTP</span>N3</h1></a>
          </div>
        </div>

        <div class="navbar-collapse collapse">
          <div class="menu">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation"><a href="/" class="active">Home</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tentang Kami <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="/sejarah">Sejarah Perusahaan</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="/komisaris">Komisaris & Direksi</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="/visi">Visi & Misi</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bisnis Kami <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="/perkebunan">Perkebunan</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="/pabrik">Pabrik</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="/pabrik">Produk</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="http://www.seimangkeisez.com/f1.asp?lang=i">Kawasan Ekonomi Khusus</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Anak Perusahaan</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Keberlanjutan<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Kebijakan Keberlanjutan</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Sistem Manajemen PTPN III</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Sertifikasi</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="/pengaduan">Keluhan/Pengaduan</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Media<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="/berita">Berita</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="/galeri">Galeri</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Artikel</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>
<body class="text-muted">
  <h1 class="text-center text-success">Pabrik</h1>
  <div class="container section">
  <!-- Peta -->
  <div id="map" style="width:100%;height:500px"></div>

  <script>
  function myMap() {
    var locations = [
      ['Kebun Sei Kebara', 1.739231, 100.253792, 4],
      ['Kebun Sei Baruhur', 1.776200, 100.254793, 5],
      ['Kebun Torgamba', 1.712423, 100.288031, 3],
      ['Kebun Sei Daun', 1.711933, 100.324045, 2],
      ['Kebun Sei Meranti', 1.650223, 100.413712, 1]
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 8,
      center: new google.maps.LatLng(1.677003, 100.287712),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
  }
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCXlMlJRqNqVCdaDuoTA3CNx_6pHpihXcg&callback=myMap"></script>

  <table class="table table-condensed">
    <thead>
      <tr>
        <th>Nama</th>
        <th>Afdeling</th>
        <th>Komoditi</th>
      </tr>
    </thead>

    <tbody>
      <tr>
        <td>Sei Meranti</td>
        <td>10</td>
        <td>Sawit</td>
      </tr>
      <tr>
        <td>Sei Daun</td>
        <td>10</td>
        <td>Sawit</td>
      </tr>
      <tr>
        <td>Torgamba</td>
        <td>10</td>
        <td>Sawit</td>
      </tr>
    </tbody>
  </table>
</div>

<!-- <section id="conatcat-info">
<div class="container">
<div class="row">
<div class="col-sm-8">
<div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
<div class="pull-left">
<i class="fa fa-phone"></i>
</div>
<div class="media-body">
<h2>Have a question or need a custom quote?</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation +0123 456 70 80</p>
</div>
</div>
</div>
</div> -->
<!-- </div><!--/.container-->
<!-- </section><!--/#conatcat-info-->
    <div class="footer">
    <div class="container">
      <div class="social-icon">
        <div class="col-md-4">
          <ul class="social-network">
            <li><a href="https://www.facebook.com/PTPN3-743963078977697/" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://twitter.com/ptpn3_km?lang=en" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="https://www.linkedin.com/company-beta/2602704/" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
          </ul>
        </div>
      </div>

      <div class="col-md-4 col-md-offset-4">
        <div class="copyright">
          &copy; PT Perkebunan Nusantara III (PERSERO) 2017
          <div class="credits">
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information   : https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Company
          -->
        </div>
      </div>
    </div>
  </div>

  <div class="pull-right">
    <a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
  </div>
</div>

</body>
</html>