  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width,initial-scale=1.0" maximum-scale=1, user-scalable="no">
      <title>RUMAHKURSUS</title>
      <!--Style CSS yang Digunakan Website Ini-->
      <link rel="stylesheet" href="asset/css/style.css">
      <!--Framework CSS Bootstrap untuk Memperindah Tampilan-->
      <link rel="stylesheet" href="asset/css/bootstrap/bootstrap.css">
      <link rel="stylesheet" href="asset/css/bootstrap/bootstrap-theme.min.css">
      <link rel="stylesheet" href="asset/css/font-awesome/css/font-awesome.min.css">
      <link rel="stylesheet" href="asset/css/owlcarousel/owl.carousel.css">
      <link rel="stylesheet" href="asset/css/owlcarousel/owl.theme.css">
      <link rel="stylesheet" href="asset/css/fonts/glyphicons-halflings-regular.eot">
      <link rel="stylesheet" href="https://necolas.github.io/normalize.css/5.0.0/normalize.css">
      <link href="https://fonts.googleapis.com/css?family=Hammersmith+One|Raleway" rel="stylesheet">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
      <script src="asset/js/bootstrap.min.js"></script>
  	<style>

  .carousel-control.left,.carousel-control.right {
  	background:none;
  }
  	</style>
    </head>
    <body class="back">
      <!--Ini Bagian Header-->
      <nav class="navbar navbar-default" role="navigation">
      <div class="container"  id="wrapper-banner">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header" >
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">RUMAHKURSUS</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="about.php">Tentang</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kategori <span class="caret"></span></a>
            <ul class="dropdown-menu multi-level">
              <li class="dropdown-submenu"><a href="#">Bimbel</a></li>
              <li><a href="#">Musik</a></li>
              <li><a href="#">Komputer</a></li>
              <li role="separator" class="divider"></li>
              <li class="dropdown-submenu">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Olahraga</a>
                <ul class="dropdown-menu">
                  <li><a tabindex="-1" href="#">Sepak Bola</a></li>
                  <li><a tabindex="-1" href="#">Tenis Meja</a></li>
                  <li><a tabindex="-1" href="#">Basket</a></li>
                  <li><a tabindex="-1" href="#">Futsal</a></li>
                </ul>
              </li>
              <li role="separator" class="divider"></li>
              <li><a href="#">lainnya</a></li>
            </ul>
          </li>
        </ul>
      <div class="col-md-5">
  		<div class="input-group cari">
  			<input type="text" class="form-control" placeholder="Cari.....">
  			<span class="input-group-btn">
  				<button class="btn btn-default" type="button">Cari</button>
  			</span>
  		</div><!-- /input-group -->
  	  </div><!-- /.col-lg-6 -->
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Masuk</b> <span class="caret"></span></a>
  			<ul id="login-dp" class="dropdown-menu">
  				<li>
  					 <div class="row">
  							<div class="col-md-12">
  								Login dengan
  								<div class="social-buttons">
  									<a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
  									<a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
  								</div>
                                  atau
  								 <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
  										<div class="form-group">
  											 <label class="sr-only" for="exampleInputEmail2">Alamat Email</label>
  											 <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
  										</div>
  										<div class="form-group">
  											 <label class="sr-only" for="exampleInputPassword2">Password</label>
  											 <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                               <div class="help-block text-right"><a href="">Lupa Password ?</a></div>
  										</div>
  										<div class="form-group">
  											 <button type="submit" class="btn btn-primary btn-block">Masuk</button>
  										</div>
  								 </form>
  								 <div class="checkbox" align="right">
  										<input type="checkbox"><p>Biarkan saya tetap masuk
  									</p>
  								 </div>
  							</div>
  							<div class="bottom text-center">
  								Pengguna Baru ? <a href="login.php"><b>Daftar</b></a>
  							</div>
  					 </div>
  				</li>
  			</ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
      <!--Bagian Header Selesai-->
