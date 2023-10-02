<?php include('header.php'); ?>

<main>

    <div class="container">
        <div class="row">
            <div class="modal fade" id="exampleModal-1" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header text-dark " style="background-color: #FECCCF;">
                            <div class="row mx-auto text-center p-2 ">
                                <h6 class="modal-title fs-5 text-center mx-5 px-5 fw-bolder title"
                                    id="exampleModalLabel"> <i class="bi bi-bag-check mx-2"></i>Product Details</h6>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <section class="py-5">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-5 border-dark border-md-end">
                                                <div class="d-flex justify-content-center">
                                                    <div class="">
                                                        <img src="img/productedit1.png" class="img-fluid w-100"
                                                            alt="...">
                                                    </div>
                                                    <!-- <div class="flex-grow-1 ms-3">
                        <h5 class="title fs-6 fw-bolder">Printed Hawaii Shirt Brutus</h5>
                        <h6 class="title fs-6 fw-bolder mb-2">Ks. 12600</h6>
                        <p>Product Code: <span class="mx-4">0012</span></p>
                        <p class="mt-1">Reward Point: <span class="mx-4">1000</span></p>
                        <p>Quantity: <span class="mx-4">2</span></p>

                    </div> -->
                                                </div>
                                            </div>

                                            <div class="col-md-7">
                                                <h4 class="title fs-4 fw-bolder pb-3">MIIN Laser</h4>
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <h5 class="title fs-6 fw-bolder mb-2">Q-switched Nd:YAG laser
                                                        </h5>
                                                        <!-- <h6 class="title fs-6 fw-bolder mb-2">Ks. 12600</h6> -->
                                                        <!-- <p class="mb-2">Module: <span class="mx-4">Long Pulsed Nd:YAG Laser</span></p>
                    <p class="mt-1 mb-2">Wavelength: <span class="mx-4">1000</span></p>
                    <p>Quantity: <span class="mx-4">2</span></p> -->
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            Wavelength  
                                                                        </td>
                                                                        <td>
                                                                            1064/532nm <br> 1064 Single<span
                                                                                class="float-end me-5">
                                                                                < 10ns</span> <br> 532 <span
                                                                                        class="float-end me-5">
                                                                                        < 10ns</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            Pulse Duration (nm) <span
                                                                                class="float-end"> </span>
                                                                        </td>
                                                                        <td>
                                                                            Quasi <span class="float-end me-5">350 us</span>
                                                                            <br> 1064 Double <span class="float-end me-5">
                                                                                < 10ns</span> <br> MIIN (Multi Pulse)
                                                                                    <span class="float-end me-5">
                                                                                        < 25 ns </span> <br> 1064 Single
                                                                                            <span class="float-end me-5">1.4
                                                                                                J</span> <br> 532 <span
                                                                                                class="float-end me-5">
                                                                                                0.5 J</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            Pulse Energy (Max) <span
                                                                                class="float-end"> </span>
                                                                        </td>
                                                                        <td>
                                                                            Quasi <span class="float-end me-5">3.5 J</span>
                                                                            <br> 1064 Double <span class="float-end me-5">2.5
                                                                                J</span> <br> MIIN<span
                                                                                class="float-end me-5">
                                                                                3.0 J
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-nowrap">
                                                                            Repetition Rate <span
                                                                                class="float-end"> </span>
                                                                        </td>
                                                                        <td>Single, 1~10Hz</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-nowrap">
                                                                            Beam Delivery System
                                                                        </td>
                                                                        <td>
                                                                            Articulated arm with handpiece
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-nowrap">
                                                                            Aiming Beam  
                                                                        </td>
                                                                        <td>
                                                                            Laser diode, 633nm/3mW
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-nowrap">
                                                                            Cooling System<span
                                                                                class="float-end"> </span>
                                                                        </td>
                                                                        <td>
                                                                            Internal water to air heat exchanger
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-nowrap">
                                                                            Electrical Power <span
                                                                                class="float-end"> </span>
                                                                        </td>
                                                                        <td>
                                                                            100-240 VAC, 50~60Hz (Free Voltage)
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-nowrap">
                                                                            Dimension(mm)<span
                                                                                class="float-end"> </span>
                                                                        </td>
                                                                        <td>
                                                                            320(W) x 820(L) x 880(H)
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-nowrap">
                                                                            Weight(kg)  
                                                                        </td>
                                                                        <td>
                                                                            75kg
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="fine1">
        <!-- about us hero -->
        <div class="abouthero py-4 d-flex align-items-center">
            <div class="container py-2">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-center text-dark">Products</h2>
                        <p class="text-center fs-6"><i class="bi bi-house-door px-1"></i>Home >> Products >> Laser
                            Machines >> LTRA</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include('sidebar.php'); ?>



    <!-- #region -->
    <div class="col-md-9">
        <?php include('sortby.php'); ?>

        <div class="row">
            <div class="col-md-4 col-12">

                <div class="position-relative hovereffect">
                    <img src="img/productedit1.png" alt="" class="w-100 mb-3">
                    <div class="position-absolute top-0 m-3">
                        <!-- <a href="#" class="btn btn-info btn-sm text-white text-uppercase">Sales</a>
              <a href="#" class="btn btn-dark text-uppercase btn-sm">Out of stock</a> -->
                    </div>
                    <div class="overlay">
                        <div class="row ">
                            <div class="col-md-2 ">
                                <a class="info p-2" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal-1"><i
                                        class="bi bi-search"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <img src="img/productedit1.png" alt="" class="w-100 mb-3"> -->
                <!-- <p class="text-muted">Laser Machines</p> -->
                <h4 class="title fs-6">MIIN</h4>
                <h5 class="fs-6">Q-switched Nd:YAG Laser</h5>
            </div>


        </div>

    </div>

    </div>
    </div>
</main>

<?php include('footer.php'); ?>