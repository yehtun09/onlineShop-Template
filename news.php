<?php
include('header.php');
$directoryURI = $_SERVER['REQUEST_URI'];
?>

<main>
  <section class="news1">
    <!-- news hero -->
    <div class="abouthero py-4 d-flex align-items-center">
      <div class="container py-2">
        <div class="row">
          <div class="col-md-12">
            <h2 class="text-center text-dark">News</h2>
            <p class="text-center fs-6"><i class="bi bi-house-door px-1"></i>Home >> News</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="news2 mt-5 pt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="mb-5">
            <img src="img/news1.png" class="card-img-top p-2" alt="...">
            <div class="card-body">
              <h4 class="card-title py-3 fw-bold">3 Indian ocean islands for winter sun</h4>
              <h6 class="card-title py-3"> <span class="text-primary">Skin Care</span> | May 5, 2023</h6>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
                in culpa qui officia deserunt mollit anim id est laborum.</p>
              <a href="newsdetails.php" class="text-decoration-none">Read More >></a>
            </div>
          </div>

          <div class="mb-5">
            <img src="img/skin2.png" class="card-img-top p-2" alt="...">
            <div class="card-body">
              <h4 class="card-title py-3 fw-bold">Because it matters..</h4>
              <h6 class="card-title py-3"> <span class="text-primary">Skin Care</span> | May 5, 2023</h6>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
                in culpa qui officia deserunt mollit anim id est laborum.</p>
              <a href="newsdetails.php" class="text-decoration-none ">Read More >></a>
            </div>
          </div>

          <div class="mb-5">
            <img src="img/skin3.png" class="card-img-top p-2" alt="...">
            <div class="card-body">
              <h4 class="card-title py-3 fw-bold">Everything Your Body Needs...</h4>
              <h6 class="card-title py-3"> <span class="text-primary">Skin Care</span> | May 5, 2023</h6>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
                in culpa qui officia deserunt mollit anim id est laborum.</p>
              <a href="newsdetails.php" class="text-decoration-none ">Read More >></a>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <nav>
                <ul class="pagination justify-content-center">
                  <li class="page-item">
                    <a class="page-link-1 prev" href="#">Previous</a>
                  </li>
                  <li class="page-item"><a class="page-link-1 active" href="#">1</a></li>
                  <li class="page-item"><a class="page-link-1" href="#">2</a></li>
                  <li class="page-item"><a class="page-link-1" href="#">3</a></li>
                  <li class="page-item"><a class="page-link-1" href="#">4</a></li>
                  <li class="page-item"><a class="page-link-1" href="#">5</a></li>
                  <li class="page-item"><a class="page-link-1" href="#">6</a></li>
                  <li class="page-item"><a class="page-link-1" href="#">7</a></li>
                  <li class="page-item">
                    <a class="page-link-1 next" href="#">Next</a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
        <div class="col-md-4 px-lg-5">
          <h5 class="fw-bolder">Categories</h5>
          <hr class="fw-bold">
          <div class="row pt-3">
            <a href="#" class="text-decoration-none text-dark single-title">Laser Machine</a>
            <div class="d-flex px-5 py-2">
              <h6 class="flex-grow-1">Fine MEC</h6>
              <h6>(3)</h6>
            </div>
            <div class="d-flex px-5 py-2">
              <h6 class="flex-grow-1">LTRA</h6>
              <h6>(1)</h6>
            </div>
            <div class="d-flex px-5 py-2">
              <h6 class="flex-grow-1">ELESYS</h6>
              <h6>(6)</h6>
            </div>
          </div>
          <div class="row pt-3">
            <a href="#" class="text-decoration-none text-dark single-title">Aesthetics Machines</a>
          </div>
          <div class="row py-3">
            <a href="#" class="text-decoration-none text-dark single-title">Aesthetics Products</a>
            <div class="d-flex px-5 py-3">
              <h6 class="flex-grow-1">Filler</h6>
              <h6>(3)</h6>
            </div>
            <div class="d-flex px-5 py-2">
              <h6 class="flex-grow-1">Skin Booster</h6>
              <h6>(3)</h6>
            </div>
            <div class="d-flex px-5 py-2">
              <h6 class="flex-grow-1">Mask</h6>
              <h6>(2)</h6>
            </div>
            <div class="d-flex px-5 py-2">
              <h6 class="flex-grow-1">REVS Repairing Serum 30 ml</h6>
              <h6>(1)</h6>
            </div>
          </div>
          <h5 class="fw-bolder">Recent Posts</h5>
          <hr>
          <div class="card mb-3 border-0" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="img/mini product.png" class="img-fluid" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <span class="text-muted">Laser Machines</span>
                  <h6 class="card-text">Hairbr Removal Laser <br> Allie 2</h6>
                </div>
              </div>
            </div>
          </div><br>
          <div class="card mb-3 border-0" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="img/brown-bear-cushion 2.png" class="img-fluid" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <span>Aesthetics Products</span>
                  <h6 class="card-text">REVS Repairing Serum</h6>
                </div>
              </div>
            </div>
          </div><br>
          <div class="card mb-3 border-0" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="img/mini product(1).png" class="img-fluid" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <span>Aesthetics Machines</span>
                  <h6 class="card-text">HDM <br> (Hybird Micro Wave)</h6>
                </div>
              </div>
            </div>
          </div>
          <h5 class="fw-bolder">Brand by Taps</h5>
          <hr>
          <input type="radio" class="btn-check" name="options" id="option1" autocomplete="off" checked>
          <label style="border-radius: 30px;
              border: 1px solid var(--foundation-gray-gray-400, #E0E1E1); padding: 5px 20px; " for="option1">LTRA</label>

          <input type="radio" class="btn-check" name="options" id="option1" autocomplete="off" checked>
          <label style="border-radius: 30px;
                border: 1px solid var(--foundation-gray-gray-400, #E0E1E1); padding: 5px 20px;  " for="option1">Fine
            MEC</label><br><br>

          <input type="radio" class="btn-check" name="options" id="option1" autocomplete="off" checked>
          <label style="border-radius: 30px;
                border: 1px solid var(--foundation-gray-gray-400, #E0E1E1); padding: 5px 20px; " for="option1">ELESYS</label>

          <input type="radio" class="btn-check" name="options" id="option1" autocomplete="off" checked>
          <label style="border-radius: 30px;
                border: 1px solid var(--foundation-gray-gray-400, #E0E1E1); padding: 5px 20px; " for="option1">Medro</label>

          <input type="radio" class="btn-check" name="options" id="option1" autocomplete="off" checked>
          <label style="border-radius: 30px;
                border: 1px solid var(--foundation-gray-gray-400, #E0E1E1); padding: 5px 20px; " for="option1">REANZEN</label>
        </div>
      </div>
    </div>
  </section>

  <section class="news2 mt-5 pt-5">

  </section>
</main>

<?php include('footer.php'); ?>