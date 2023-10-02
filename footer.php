<footer>
  <!-- place footer here -->
  <!-- partners -->
  <div class="container mt-3 py-5">
    <div class="row">
      <div class="d-flex flex-wrap align-items-center justify-content-center">
        <div class="p-2 flex-lg-fill"><img src="img/ltra.png" alt=""></div>
        <div class="p-2 flex-lg-fill"><img src="img/finemec.png" alt=""></div>
        <div class="p-2 flex-lg-fill"><img src="img/image 25.png" alt=""></div>
        <div class="p-2 flex-lg-fill"><img src="img/image 26.png" alt=""></div>
        <div class="p-2 flex-lg-fill"><img src="img/image 27.png" alt=""></div>
      </div>
    </div>
  </div>

  <section class="footer2 mt-5">
    <div class="container text-white">
      <div class="row col-reverse">
        <div class="col-lg-3 col-md-3 pt-md-5 pt-3 pb-lg-4 pb-md-3 pb-2 ps-lg-5 m-ps offset-md-1 border-end border-secondary">
          <h5 class="mb-lg-3 mb-1 title">Quick Link</h5>
          <ul style="list-style: none; padding: 12px;" class="m-flex">
            <li class="mb-2">
              <a href="index.php" class="text-decoration-none text-white">
                Home
              </a>
            </li>
            <li class="mb-2">
              <a href="about.php" class="text-decoration-none text-white">
                About Us </a>
            </li>
            <li class="mb-2">
              <a href="fine.php" class="text-decoration-none text-white">
                Products
              </a>
            </li>
            <li class="mb-2">
              <a href="contactus.php" class="text-decoration-none text-white">
                Contact Us
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-8">
          <div class="row h-100">
            <div class="col-md-6 pt-5 pb-lg-4 pb-md-3 pb-2 border-end border-secondary">
              <div class="row text-center">
                <a href="index.php"><img src="img/footerlogo.png" alt="" class="w-50"></a><br>
                <div class="py-3">
                  <a href="https://www.facebook.com/profile.php?id=100092676763984&mibextid=ZbWKwL" target="_blank" class="p-2"><img src="img/facebook1.png" alt=""></a>
                  <a href="http://twitter.com" target="_blank" class="p-2"><img src="img/twitter1.png" alt=""></a>
                  <a href="http://instagram.com" target="_blank" class="p-2"><img src="img/instagram1.png" alt=""></a>
                  <a href="http://youtube.com" target="_blank" class="p-2"><img src="img/youtube1.png" alt=""></a>
                </div>

              </div>
            </div>
            <div class="col-md-6 pt-md-5 pt-3 pb-lg-4 pb-md-3 pb-2 m-ps">
              <div class="row">
                <div class="col-lg-10 col-md-11 mx-auto t-br">
                  <div class="d-flex mx-auto">
                    <div>
                      <i class="bi bi-geo-alt me-3"></i>
                    </div>
                    <div>
                      <p> No.14, Zaykabar 3 street, Zaykabar <br>
                        Industrial Park Ward,
                        Mingalardone <br> Township, Yangon</p>
                    </div>
                  </div>
                  <div class="d-flex mx-auto">
                    <div>
                      <img src="img/phonelogo.svg" alt="" class="me-3">
                    </div>
                    <div>
                      <p> +959 765433401
                    </div>
                  </div>
                  <div class="d-flex mx-auto">
                    <div>
                      <i class="bi bi-envelope me-3"></i>
                    </div>
                    <div>
                      <p>info@ssjtmyanmar.com</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</footer>
<!-- Bootstrap JavaScript Libraries -->

<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script> -->
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/wow.js"></script>

<script>
  new WOW().init();

  $(".owl-carousel").owlCarousel({
    loop: false,
    rewind: true,
    margin: 20,
    responsiveClass: true,
    nav: true,
    dots: false,
    autoplay: false,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1,
        nav: false,
        autoplay: true,
      },
      600: {
        items: 2,
      },
      1000: {
        items: 4
      },
    },
    navText: [
      '  <img src="img/chevron-right.png" alt="" class="btn-arrow"> ',
      ' <img src="img/chevron-left.png" alt="" class="btn-arrow">'
    ]
  });
</script>



</body>

</html>