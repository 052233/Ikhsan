<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/my-login.css">
    <style>
        .container {
            background-color: rgb(255, 254, 254);
            box-shadow: inset
            color(srgb red green blue)
        }
    </style>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lobster&display=swap');
      </style>
</head>
<body>
    <div class="container-fluid ">
        <nav class="navbar navbar-expand-lg navbar-light stikcy-top"  style="background-color: #e3f2fd; ">
            <a class="navbar-brand" href="#" style="font-family: Lobster;">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse"  id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    Konten
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">ChatGPT</a>
                    <a class="dropdown-item" href="#">Instragam Threads</a>
                    <a class="dropdown-item" href="#">X</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>
              </ul>
              <a href="register.html" target="_blank" class="ml-2 btn btn-outline-success">Daftar</a>
              <a href="index.html" target="_blank" class="btn btn-outline-success">Masuk</a>
            </div>
          </nav>
    </div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col align-self-center">
                    <h2 style="font-family: Lobster;">Hai! <br> Selamat Datang di Website Saya</h2>
                    <p class="mt-3 mb-4">Website ini berisi hal-hal yang menarik di internet</p>
                    <a href="#" class="btn btn-primary" onclick="return confirm('Apakah Anda yakin?')" target="_blank">Mulai Melihat</a>
                </div><br>
                <div class="col d-none d-lg-block d-md-block d-xl-block"><img width="100%" src="Untitled.png" alt="Pemandangan"></div>
            </div>
        </div>
    <br>
    <div class="card-deck">
      <div class="card">
        <img src="https://static.vecteezy.com/system/resources/previews/021/059/827/non_2x/chatgpt-logo-chat-gpt-icon-on-white-background-free-vector.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><a href="https://openai.com/blog/chatgpt">ChatGPT</a></h5>
          <p class="card-text">ChatGPT adalah model berbasis bahasa yang dapat digunakan untuk berbagai tujuan, termasuk jawaban pertanyaan, generasi teks, penerjemahan, pengenalan teks, dan banyak lagi. Hal ini membuatnya berguna dalam berbagai aplikasi dan industri.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card">
        <img src="https://www.fortuneidn.com/_next/image?url=https%3A%2F%2Fimage.fortuneidn.com%2Fpost%2F20230707%2Fscreenshot-1896-a430e06de5ce438d499c2e4063d60fd6-32c8c7af36e5f159934d7e3592ae584d.png%3Fwidth%3D414%26height%3D276%26format%3Dwebp&w=828&q=75" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><a href="https://www.threads.net/login">Instragam Threads</a></h5>
          <p class="card-text">Threads adalah platform media sosial dan layanan jejaring sosial Amerika yang dimiliki dan dioperasikan oleh Meta Platforms. Aplikasi ini menawarkan pengguna untuk memposting dan berbagi teks, gambar, dan video, serta berinteraksi dengan postingan pengguna lain melalui balasan, repost, dan like. Profil pada Threads terhubung ke akun Instagram, mengharuskan pengguna memiliki nama pengguna yang sama di kedua layanan tersebut.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card">
        <img src="https://upload.wikimedia.org/wikipedia/commons/9/95/Twitter_new_X_logo.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><a href="https://about.twitter.com/en">X</a></h5>
          <p class="card-text">Pada tahun 2022, Elon Musk membuat berita dengan mengumumkan bahwa dia akan membeli saham mayoritas di Twitter dan akan melakukan perubahan signifikan pada platform tersebut. Salah satu perubahan yang diumumkan adalah mengganti nama Twitter menjadi "X". Ini adalah bagian dari rencananya untuk mengganti nama sosial media tersebut menjadi sesuatu yang lebih pendek dan simpel.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
        
    </section>
    <script src="./js/jquery-3.7.1.min.js"></script>
    <script src="./js/bootstrap.js"></script>
    <script src="./js/my-login.js"></script>
    
</body>
</html>