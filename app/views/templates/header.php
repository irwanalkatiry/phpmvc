<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$data['judul'];?></title>
    <link rel="stylesheet" href="<?=BASEURL;?>/css/bootstrap.css">
    <script src="<?=BASEURL;?>/js/jquery.js"></script>
</head>
<body>
  
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="<?=BASEURL;?>">PhpMVC</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?=BASEURL;?>/home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=BASEURL;?>/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=BASEURL;?>/Mahasiswa">Mahasiswa</a>
        </li>
    </div>
  </div>
</nav>