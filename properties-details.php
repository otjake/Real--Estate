<?php include ("include/header.php");?>


<!-- BREADCRUMBS AREA START -->
<!--        <div class="breadcrumbs-area bread-bg-1 bg-opacity-black-70">-->
<!--            <div class="container">-->
<!--                <div class="row">-->
<!--                    <div class="col-12">-->
<!--                        <div class="breadcrumbs">-->
<!--                            <h2 class="breadcrumbs-title">Properties Details</h2>-->
<!--                            <ul class="breadcrumbs-list">-->
<!--                                <li><a href="index.php">Home</a></li>-->
<!--                                <li><a href="properties.html">Properties</a></li>-->
<!--                                <li>Properties Details</li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
        <!-- BREADCRUMBS AREA END -->

        <!-- Start page content -->
        <section id="page-content" class="page-wrapper">

            <!-- PROPERTIES DETAILS AREA START -->
            <div class="properties-details-area pt-115 pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 ">
                            <!-- pro-details-image -->
                            <div id="carouselExampleIndicators" class="carousel slide mb-30" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <a href="images/single-property/big/1.jpg" data-lightbox="image-1" data-title="Sheltek Properties - 1">
                                        <img class="d-block w-100" src="images/single-property/big/1.jpg" alt="First slide">
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="images/single-property/big/2.jpg" data-lightbox="image-1" data-title="Sheltek Properties - 2">
                                        <img class="d-block w-100" src="images/single-property/big/2.jpg" alt="Second slide">
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="images/single-property/big/3.jpg" alt="Third slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                            <!-- pro-details-short-info -->
                            <div class="pro-details-short-info mb-60">
                                <div class="row">
                                    <div class="col-sm-12 col-xs-12">
                                        <div class="pro-details-condition">
                                            <h5>Condition</h5>
                                            <div class="pro-details-condition-inner bg-gray">
                                                <ul class="condition-list">
                                                    <li>Area 450 sqft</li>
                                                    <li>Bedroom 5</li>
                                                    <li>Bathroom 3</li>
                                                    <li>Garage 2</li>
                                                    <li>Kitchen 2</li>
                                                    <li>$52,350</li>
                                                </ul>
                                                <p><img src="images/icons/location.png" alt="">568 E 1st Ave, Ney
                                                    Jersey, USA</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- pro-details-description -->
                            <div class="pro-details-description mb-50">
                                <p><span data-placement="top" data-toggle="tooltip" data-original-title="The name you can trust" class="tooltip-content">Sheltek</span> is ipsum dolor sit amet, consectetur
                                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna iqua. Ut
                                    enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut quipx ea
                                    codo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolo</p>
                                <p>Sheltek is the Best should be the consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore lore magna iqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex eacm emod tempor incididunt ut
                                    labore lore magna iqua. Ut enim ad minim veniamco laboris nisi ut aliqu</p>
                                <p>Sheltek is the Best should be the consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore lore magna iqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex eacm</p>
                            </div>


                        </div>
                        <div class="col-lg-4">
                            <!-- widget-search-property -->
                            <aside class="widget widget-search-property mb-30">
                                <h5>Make Request for Property</h5>

                                <div class="leave-review">
                                        <h5>Please fill your contact details</h5>
                                        <form action="#">
                                            <input type="text" name="name" placeholder="Your name">
                                            <input type="email" name="email" placeholder="Email here">
                                            <input type="email" name="mobile" placeholder="Phone number here">
                                            <textarea placeholder="Fill with any added detail you require"></textarea>
                                            <button type="button" class="submit-btn-1">SUBMIT REQUEST</button>
                                        </form>
                                </div>
                            </aside>
                            <!-- widget-featured-property -->
                            <aside class="widget widget-featured-property mb-30">
                                <h5>Inspect Property</h5>
                                <div class="leave-review">
                                    <h5>Please fill your contact detais</h5>
                                    <form action="#">
                                        <input type="text" name="name" placeholder="Your name">
                                        <input type="email" name="email" placeholder="Email here">
                                        <input type="email" name="mobile" placeholder="Phone number here">
                                        <div>
                                        <label>Date you would be available for Inspection</label>
                                        <input type="date" class="form-control" name="date" placeholder="mm/dd/yyyy" >
                                        </div>
                                        <textarea placeholder="Fill with any added detail you require"></textarea>
                                        <button type="button" class="submit-btn-1">REQUEST FOR INSPECTION</button>
                                    </form>
                                </div>
                            </aside>

                        </div>
                    </div>
                </div>
            </div>
            <!-- PROPERTIES DETAILS AREA END -->

            <?php include ("include/footer.php");?>
