<!doctype html>

<head>
<link rel="stylesheet" href="css/stylehalamanutama.css">

<title>SATYA</title>

<script>
        (function() {
  
  function Slideshow( element ) {
    this.el = document.querySelector( element );
    this.init();
  }
  
  Slideshow.prototype = {
    init: function() {
      this.wrapper = this.el.querySelector( ".slider-wrapper" );
      this.slides = this.el.querySelectorAll( ".slide" );
      this.previous = this.el.querySelector( ".slider-previous" );
      this.next = this.el.querySelector( ".slider-next" );
      this.index = 0;
      this.total = this.slides.length;
      this.timer = null;
      
      this.action();
      this.stopStart(); 
    },
    _slideTo: function( slide ) {
      var currentSlide = this.slides[slide];
      currentSlide.style.opacity = 1;
      
      for( var i = 0; i < this.slides.length; i++ ) {
        var slide = this.slides[i];
        if( slide !== currentSlide ) {
          slide.style.opacity = 0;
        }
      }
    },
    action: function() {
      var self = this;
      self.timer = setInterval(function() {
        self.index++;
        if( self.index == self.slides.length ) {
          self.index = 0;
        }
        self._slideTo( self.index );
        
      }, 4000);
    },
    stopStart: function() {
      var self = this;
      self.el.addEventListener( "mouseover", function() {
        clearInterval( self.timer );
        self.timer = null;
        
      }, false);
      self.el.addEventListener( "mouseout", function() {
        self.action();
        
      }, false);
    }
    
    
  };
  
  document.addEventListener( "DOMContentLoaded", function() {
    
    var slider = new Slideshow( "#main-slider" );
    
  });
  
  
})();

</script>

</head>
<body>

<nav class="fixednav">
  <ul>
      <li><a href="#index">HOME</a></li>
      <li><a href="#proyek">PROYEK</a></li>
      <li><a href="#tim">TIM</a></li>
    </ul>
</nav>

<div class="parallax">
  <div id="group1" class="parallax__group">
    <div id="index" class="parallax__layer parallax__layer--base">

      <div class="title"  >
        <h1 class="judul" align="center" style="color: #ffffff">SATYA</h1>
        <br>
        <hr style="margin-left: 450px; margin-right: 450px">
        <br>
        <h2 class="subjudul" align="center" style="color: #ffffff">"Bahasa Tradisional Yang Asik"</h2>
        <br>
        <a class="mulai" href="/satya-login/public/kuis">MULAI</a>
      </div>
    </div>

    <div class="parallax__layer parallax__layer--back" style="width: 100%; height: 100%;" >
      <div class="slider" id="main-slider">
        <!-- outermost container element -->
            <div class="slider-wrapper">
              <!-- innermost wrapper element -->
              <img src="gambar/bg.jpg" alt="First" class="slide" style="width: 100%; height: 70%;"/>
              <!-- slides -->
              <img src="gambar/main.jpg" alt="Second" class="slide" style="width: 100%; height: 70%;" />
              <img src="gambar/anak.jpg" alt="Third" class="slide" style="width: 100%; height: 70%;"/>
            </div>
      </div>  
    </div>
  </div>


  <div id="group2" class="parallax__group">


    <div class="parallax__layer parallax__layer--base" style="background-color: #ffffff">

      <br>
      <br>
      <div id="proyek">

        <p class="deskripsiproyek">
          SATYA adalah aplikasi web untuk belajar bahasa daerah. Dalam aplikasi SATYA ini, terdapat pilihan bahasa daerah yang beraneka ragam, user dapat memilih bahasa yang ingin mereka pelajari. Dalam setiap bahasa yang ingin dipelajari, terdapat sejumlah variasi sistem belajar. Di awal pelajaran pengguna akan mempelajari kata-kata yang relatif lebih mudah untuk diingat seperti mengingat kosakata yang kerap digunakan. Apabila pengguna telah lulus dalam level yang telah dipilih, maka pengguna akan mendapatkan reward dan akan naik ke level selanjutnya. Dengan menggunakan SATYA, belajar bahasa daerah akan menjadi lebih menyenangkan. :))


        </p>
        <br>
        <div align="center">
        <a href="#index">
          <img style="width: 20px; height: 20px;" src="gambar/up.png">
        </a>
        </div>
      </div>

      <br>
      <br>
      <br>

      <div id="tim">
      <hr class= "line">
      <h1 class= "tim" > Tim Kami </h1>
      <h2 class= "klik" > Klik foto untuk melihat profil kami </h2>
      <!-- <div id="tim">
        <h2 class="judul" align="center" style="color: #000000">Tim Kami</h2>
        <br>
        <h5 align="center" style="color: silver; font-weight: bold; ">Klik Foto Untuk Melihat Profil</h5>
        <br>
        <hr> -->


        <div align="center" style="margin-left: 100px; margin-right: 100px">

          <a href="profil_yudha.html">
          <img  id="yudha" class="tombolprofil"  src="gambar/foto_yudha.jpg" alt="foto profil"></a>
          <a href="profil_satya.html">
          <img id="satya" class="tombolprofil"  src="gambar/foto_satya.jpeg" alt="foto profil"></a>
          <a href="profil_julia.html">
          <img id="julia" class="tombolprofil"  src="gambar/foto_julia.jpg" alt="foto profil"></a>
          <a href="profil_nadya.html">
          <img id="nadya" class="tombolprofil"  src="gambar/foto_nadya.jpg" alt="foto profil"></a>
          <a href="profil_riries.html">
          <img id="riries" class="tombolprofil"  src="gambar/RDG_formal.jpg" alt="foto profil"></a>
          <div align="center">
          <a href="profil_oca.html">
          <img id="oca" class="tombolprofil"  src="gambar/PPOCA.png" alt="foto profil"></a>
          <a href="profilyonif.html">
          <img id="yonif" class="tombolprofil"  src="gambar/fotoyonif.png" alt="foto profil"></a>
          <a href="profil_sheldy.html">
          <img class="tombolprofil"  src="gambar/foto_sheldy.JPG" alt="foto profil"></a>
        </div>

           <div align="center">
        <a href="#index">
          <img style="width: 20px; height: 20px;" src="gambar/up.png">
        </a>

        </div>
        </div>

      </div>
    </div>

  </div>
</body>
