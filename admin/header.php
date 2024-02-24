<!doctype HTML>
<html>
<head>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SMK Negeri 2 Kisaran</title>
  <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../bootstrap/css/dataTables.bootstrap.min.css" rel="stylesheet">
  <link href="../bootstrap/css/styles.css" rel="stylesheet">
  <script src="../bootstrap/plugins/ckeditor/ckeditor.js"></script>
  <style>
    body {
      padding-top: 60px;
    }
  </style>
</head>
<body>
    
	<!-- Awal script Navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle Nav</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">SMK NEGERI 2 KISARAN</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li class="active">
							<a href="index.php"><span class="glyphicon glyphicon-home"></span> HOME <span class="sr-only">(current)</span></a>
						</li>
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-tasks"></span> DATA <span class="caret"></span>
              </a>
                <ul class="dropdown-menu">
                  <li><a href="tampil-siswa.php">SISWA</a></li>
                  <li><a href="tampil-guru.php">GURU</a></li>
                </ul>
              </li>
            <li>
							<a href="tampil-pendaftaran.php"><span class="glyphicon glyphicon-user"></span> PENDAFTARAN SISWA BARU</a>
						</li>
            <li>
							<a href="contact.php"><span class="glyphicon glyphicon-envelope"></span> KONTAK PESAN</a>
						</li>

            <li>
							<a href="tampil-user.php"><span class="glyphicon glyphicon-user"></span> USER</a>
						</li>

            <li><a href="../logout.php"><span class="glyphicon glyphicon-log-out"></span> LOGOUT</a></li>
             
          </li>
          </ul>
        </div>
      </div>
    </nav><!-- Akhir script Navbar -->