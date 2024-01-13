<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Link bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- Link css eksternal -->
  <link rel="stylesheet" href="style.css">

  <!-- Font Google -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@500&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
  <title>Dasar komputasi</title>
</head>

<body id="home">

  <!-- Awal navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark shadow-lg sticky-sm-top">
    <div class="container">
      <a class="navbar-brand" href="#home">Garasi Channa</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <!-- justify-content-end agar navbar berada di kanan -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#product">Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#buku_tamu">Buku tamu</a>
          </li>
          <div class="jam_digital" id="jam_digital">
            <div class="kotak">
              <p id="jam"></p>
              <p class="caption">jam</p>
            </div>
            <div class="kotak">
              <p id="menit"></p>
              <p class="caption">menit</p>
            </div>
            <div class="kotak">
              <p id="detik"></p>
              <p class="caption">detik</p>
            </div>
          </div>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Akhir navbar -->

  <!-- content -->
  <div class="hero">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mt-5">
          <h1>Garasi Channa menyediakan berbagai ikan channa ekspor yang berkualitas</h1>
          <p>Dapatkan ikan dengan kualitas terbaik!!!</p>
          <div class="sosial mb-2">
            <!-- instagram -->
            <a href="https://www.instagram.com/yayan_gantenggg/"><svg xmlns="http://www.w3.org/2000/svg" height="30"
                width="30"
                viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path
                  d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
              </svg></a>

            <!-- Facebook -->
            <a href="https://www.facebook.com/yayan.rifan.96"><svg xmlns="http://www.w3.org/2000/svg" height="29"
                width="29"
                viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path
                  d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z" />
              </svg></a>


            <!-- whatsapp -->
            <a href="https://wa.me/+6283123951548"><svg xmlns="http://www.w3.org/2000/svg" height="30" width="30"
                viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path
                  d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
              </svg></a>


          </div>
          <a href="#product" class="btn btn-home">Selengkapnya</a>
        </div>
        <div class="col-lg-6">
          <img src="img/pclr.png" width="500px" style="margin-top: -25px;">
        </div>
      </div>
    </div>
  </div>
  <!-- Akhir content -->

  <!-- Awal About -->
  <div class="section-title" id="about" style="padding-top: 70px;">
    <h2 class="text-center">ABOUT</h2>
  </div>
  <div class="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-5" style="margin-top: 60px;">
          <img src="img/toko.jpg" width="400px" style="margin-top: -25px; border-radius: 15px; ">
        </div>
        <div class="col-lg-7 mt-3" style="text-align: justify;">
          <p>Selamat datang di <span>GARASI CHANNA</span>, sumber informasi terpercaya untuk para pecinta ikan Channa!
            Kami berkomitmen untuk memberikan pengetahuan mendalam tentang ikan Channa atau sering disebut sebagai
            snakehead fish, keluarga ikan air tawar yang menakjubkan.</p>
          <h3>Apa yang Kami Tawarkan?</h3>
          <ol type="1">
            <li>Kami menawarkan koleksi terbaik ikan Channa yang dipilih dengan cermat untuk memastikan kesehatan,
              keindahan, dan keunikan setiap spesies. Mulai dari Channa aurantimaculata hingga Channa micropeltes,
              setiap ikan memiliki kecantikan dan karakteristiknya sendiri.</li>
            <li>Kami menawarkan ikan Channa berkualitas tinggi dengan harga yang terjangkau. Kami percaya bahwa pecinta
              ikan Channa harus dapat menikmati keindahan dan keunikan ikan ini tanpa harus mengeluarkan biaya yang
              tidak masuk akal</li>
            <li>Kepuasan pelanggan adalah prioritas utama kami. Kami memberikan jaminan kepuasan pelanggan yang mencakup
              pengembalian uang atau penggantian jika ada masalah dengan pesanan Anda. Kami percaya bahwa setiap pembeli
              harus merasa aman dan senang dengan pembelian mereka.</li>
            <li>Kami bukan hanya toko, tetapi juga menjadi bagian dari komunitas pecinta ikan Channa. Bergabunglah
              dengan forum diskusi kami, ikuti kontes, dan temukan teman-teman baru yang memiliki minat serupa. Kami
              percaya bahwa berbagi pengalaman dapat memperkaya hobi ikan Anda.</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- Akhir About -->

  <!-- Awal product -->

  <div class="section-title" id="product" style="padding-top: 70px;">
    <h2 class="text-center">PRODUCT</h2>
  </div>
  <section style="background-color: #eee;">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">
          <div class="card">
            <div class="d-flex justify-content-between p-3">
              <p class="lead mb-0">Channa Andrao</p>
            </div>
            <img src="img/andrao3.jpg" class="card-img-top" alt="andrao" />
            <div class="card-body">
              <div class="d-flex justify-content-between mb-3">
                <h5 class="mb-0">Harga</h5>
                <h5 class="text-dark mb-0">Rp.90.000</h5>
              </div>
              <div class="d-flex mb-2">
                <a href="andrao.html" class="btn btn-danger" style="margin-right: 3px;">Detail Product <svg
                    xmlns="http://www.w3.org/2000/svg" height="17" width="18"
                    viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path fill="#ffffff"
                      d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z" />
                  </svg></a>
                <a href="#" class="btn btn-success">Beli <svg xmlns="http://www.w3.org/2000/svg" height="14" width="16"
                    viewBox="0 0 576 512"
                    style="margin-top:-3px; margin-left:3px"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path fill="#ffffff"
                      d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
                  </svg></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">
          <div class="card">
            <div class="d-flex justify-content-between p-3">
              <p class="lead mb-0">Channa Marulioides</p>
            </div>
            <img src="img/maru5.jpg" class="card-img-top" alt="maru" />
            <div class="card-body">
              <div class="d-flex justify-content-between mb-3">
                <h5 class="mb-0">Harga</h5>
                <h5 class="text-dark mb-0">Rp.150.000</h5>
              </div>
              <div class="d-flex mb-2">
                <a href="maru.html" class="btn btn-danger" style="margin-right: 3px;">Detail Product <svg
                    xmlns="http://www.w3.org/2000/svg" height="17" width="18"
                    viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path fill="#ffffff"
                      d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z" />
                  </svg></a>
                <a href="#" class="btn btn-success">Beli <svg xmlns="http://www.w3.org/2000/svg" height="14" width="16"
                    viewBox="0 0 576 512"
                    style="margin-top:-3px; margin-left:3px"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path fill="#ffffff"
                      d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
                  </svg></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">
          <div class="card">
            <div class="d-flex justify-content-between p-3">
              <p class="lead mb-0">Channa Pulchra</p>
            </div>
            <img src="img/pulchra1.jpg" class="card-img-top" alt="pulchra" />
            <div class="card-body">
              <div class="d-flex justify-content-between mb-3">
                <h5 class="mb-0">Harga</h5>
                <h5 class="text-dark mb-0">Rp.100.000</h5>
              </div>
              <div class="d-flex mb-2">
                <a href="pulchra.html" class="btn btn-danger" style="margin-right: 3px;">Detail Produk <svg
                    xmlns="http://www.w3.org/2000/svg" height="17" width="18"
                    viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path fill="#ffffff"
                      d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z" />
                  </svg></a>
                <a href="#" class="btn btn-success">Beli <svg xmlns="http://www.w3.org/2000/svg" height="14" width="16"
                    viewBox="0 0 576 512"
                    style="margin-top:-3px; margin-left:3px"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path fill="#ffffff"
                      d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
                  </svg></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-lg-4 mb-4 mb-lg-0 mt-4">
          <div class="card">
            <div class="d-flex justify-content-between p-3">
              <p class="lead mb-0">Channa Auranti</p>
            </div>
            <img src="img/auranti.jpg" class="card-img-top" alt="auranti" />
            <div class="card-body">
              <div class="d-flex justify-content-between mb-3">
                <h5 class="mb-0">Harga</h5>
                <h5 class="text-dark mb-0">Rp.1.500.000</h5>
              </div>
              <div class="d-flex mb-2">
                <a href="auranti.html" class="btn btn-danger" style="margin-right: 3px;">Detail Product <svg
                    xmlns="http://www.w3.org/2000/svg" height="17" width="18"
                    viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path fill="#ffffff"
                      d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z" />
                  </svg></a>
                <a href="#" class="btn btn-success">Beli <svg xmlns="http://www.w3.org/2000/svg" height="14" width="16"
                    viewBox="0 0 576 512"
                    style="margin-top:-3px; margin-left:3px"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path fill="#ffffff"
                      d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
                  </svg></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-lg-4 mb-4 mb-lg-0 mt-4">
          <div class="card">
            <div class="d-flex justify-content-between p-3">
              <p class="lead mb-0">Channa Limbata</p>
            </div>
            <img src="img/limbata.jpg" height="352px" class="card-img-top" alt="limbata" />
            <div class="card-body">
              <div class="d-flex justify-content-between mb-3">
                <h5 class="mb-0">Harga</h5>
                <h5 class="text-dark mb-0">Rp.50.000</h5>
              </div>
              <div class="d-flex mb-2">
                <a href="limbata.html" class="btn btn-danger" style="margin-right: 3px;">Detail Product <svg
                    xmlns="http://www.w3.org/2000/svg" height="17" width="18"
                    viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path fill="#ffffff"
                      d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z" />
                  </svg></a>
                <a href="#" class="btn btn-success">Beli <svg xmlns="http://www.w3.org/2000/svg" height="14" width="16"
                    viewBox="0 0 576 512"
                    style="margin-top:-3px; margin-left:3px"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path fill="#ffffff"
                      d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
                  </svg></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-lg-4 mb-4 mb-lg-0 mt-4">
          <div class="card">
            <div class="d-flex justify-content-between p-3">
              <p class="lead mb-0">Channa Asiatica</p>
            </div>
            <img src="img/asiatica.jpg" height="352px" class="card-img-top" alt="pulchra" />
            <div class="card-body">
              <div class="d-flex justify-content-between mb-3">
                <h5 class="mb-0">Harga</h5>
                <h5 class="text-dark mb-0">Rp.200.000</h5>
              </div>
              <div class="d-flex mb-2">
                <a href="asiatica.html" class="btn btn-danger" style="margin-right: 3px;">Detail Product <svg
                    xmlns="http://www.w3.org/2000/svg" height="17" width="18"
                    viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path fill="#ffffff"
                      d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z" />
                  </svg></a>
                <a href="#" class="btn btn-success">Beli <svg xmlns="http://www.w3.org/2000/svg" height="14" width="16"
                    viewBox="0 0 576 512"
                    style="margin-top:-3px; margin-left:3px"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path fill="#ffffff"
                      d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
                  </svg></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Akhir product -->

  <!-- Awal buku tamu -->
  <div class="container">
    <div class="section-title" id="buku_tamu" style="padding-top: 70px;">
      <h2 class="text-center">Buku Tamu</h2>
    </div>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="mb-3">
      <label for="nama">Masukan Nama :</label><br>
      <input class="form-control" type="text" name="nama" autocomplete="off">
      <label for="no_hp">Masukan NO HP :</label><br>
      <input class="form-control" type="number" name="no_hp" autocomplete="off">
      <label for="email">Masukan Email :</label><br>
      <input class="form-control" type="email" name="email" autocomplete="off">
      <label for="jenis_kelamin">Jenis Kelamin :</label><br>
      <input type="radio" name="jenis_kelamin" value="Laki-Laki"> Laki-Laki
      <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan <br>
      <label for="kritik_saran">Kritik dan Saran :</label><br>
      <textarea name="kritik_saran" class="form-control">
      </textarea>
      <div class="mt-2">
        <button type="submit" onclick="kirim()" class="btn btn-success">Kirim</button>
        <button type="reset" class="btn btn-danger" onclick="resetkan()">Reset</button>
      </div>
    </form>
  </div>
  <!-- Akhir buku tamu -->

  <!-- Awal Hasil Inputan -->
  <div class="container">
    <div class="section-title" id="hasil_inputan" style="padding-top: 70px;">
      <h2 class="text-center">Hasil Inputan</h2>
    </div>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="mb-3">
      <label for="nama">Nama &emsp; &emsp; &emsp; &nbsp; &nbsp;: &nbsp; </label>
      <?php
      if (isset($_POST['nama'])) {
        $nama = $_POST['nama'];
        echo "$nama";
      }
      ?>
      <br>
      <label>NO HP &emsp; &emsp; &emsp; &nbsp; &nbsp;: &nbsp; </label>
      <?php
      if (isset($_POST['no_hp'])) {
        $no_hp = $_POST['no_hp'];
        echo "$no_hp";
      }
      ?>
      <br>
      <label>Email &emsp; &emsp; &emsp; &nbsp; &nbsp; &nbsp;: &nbsp; </label>
      <?php
      if (isset($_POST['email'])) {
        $email = $_POST['email'];
        echo "$email";
      }
      ?>
      <br>
      <label>Jenis Kelamin &emsp; &nbsp; &nbsp;: &nbsp; </label>
      <?php
      if (isset($_POST['jenis_kelamin'])) {
        $jenis_kelamin = $_POST['jenis_kelamin'];
        echo "$jenis_kelamin";
      }
      ?>
      <br>
      <label>Kritik dan Saran &emsp;: &nbsp; </label>
      <?php
      if (isset($_POST['kritik_saran'])) {
        $kritik_saran = $_POST['kritik_saran'];
        echo "$kritik_saran";
      }
      ?>
      <br>
      <button type="submit" class="btn btn-primary" onclick="bersih()">Bersihkan</button>
    </form>
  </div>
  <!-- Akhir Hasil Inputan -->

  <!-- Awal footer -->
  <footer style="background-color: #eee;">
    <h5 class="text-center mb-0 mt-5 p-3">&copy;Copyright 2024 || Yayan Rif'an Awaludin || DasarKomputasi</h5>
  </footer>
  <!-- Akhir footer -->





  <!-- Script Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

  <script>
    function kirim() {
      alert("Data anda berhasil di kirim! \n lihat ke bagian hasil inputan");
    }
    function resetkan() {
      alert("Data anda berhasil di reset!");
    }
    function bersih() {
      alert("Data anda berhasil di bersihkan!");
    }

    //script waktu
    var tgl = new Date();

    window.setTimeout("waktu()", 1000);
    function waktu() {
      var waktu = new Date();
      setTimeout("waktu()", 1000);
      document.getElementById("jam").innerHTML = waktu.getHours();
      document.getElementById("menit").innerHTML = waktu.getMinutes();
      document.getElementById("detik").innerHTML = waktu.getSeconds();
    }
  </script>

</body>

</html>