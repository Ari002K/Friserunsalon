
<!-- PHP INCLUDES -->

<?php

    include "connect.php";
    include "Includes/templates/header.php";
    include "Includes/templates/navbar.php";

?>

    <!-- HOME SECTION -->

    <section class="home-section" id="home-section">
    <div class="home-section-content">
    <div id="home-section-carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#home-section-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#home-section-carousel" data-slide-to="1"></li>
            <li data-target="#home-section-carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <!-- FIRST SLIDE -->
            <div class="carousel-item active">
                <img class="d-block w-100" src="Design/images/barbershop_image_1.jpg" alt="First slide">
                <div class="carousel-caption d-md-block">
                    <h3>Klassische Schnitte, zeitloser Stil.</h3>
                </div>
            </div>
            <!-- SECOND SLIDE -->
            <div class="carousel-item">
                <img class="d-block w-100" src="Design/images/barbershop_image_2.jpg" alt="Second slide">
                <div class="carousel-caption d-md-block">
                    <h3>Der Ort für echte Gentlemen.</h3>
                </div>
            </div>
            <!-- THIRD SLIDE -->
            <div class="carousel-item">
                <img class="d-block w-100" src="Design/images/barbershop_image_3.jpg" alt="Third slide">
                <div class="carousel-caption d-md-block">
                    <h3>Traditionelle Handwerkskunst für moderne Männer.</h3>
                </div>
            </div>
        </div>
        <!-- PREVIOUS & NEXT -->
        <a class="carousel-control-prev" href="#home-section-carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#home-section-carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

	</section>

    <!-- ABOUT SECTION -->



    <!-- SERVICES SECTION -->

    <section class="services_section" id="services">
        <div class="container">
            <div class="section_heading">
                <h2>Unsere Services</h2>
                <div class="heading-line"></div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 padd_col_res">
                    <div class="service_box">
                        <i class="bs bs-scissors-1"></i>
                        <h3>Haarschnitt</h3>
                        <p></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 padd_col_res">
                    <div class="service_box">
                        <i class="bs bs-razor-2"></i>
                        <h3>Bartrasur</h3>
                        <p></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 padd_col_res" >
                    <div class="service_box">
                        <i class="bs bs-brush"></i>
                        <h3>Glatrasur</h3>
                        <p></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 padd_col_res">
                    <div class="service_box">
                        <i class="bs bs-hairbrush-1"></i>
                        <h3>Haare färben</h3>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BOOKING SECTION -->

    <section class="book_section" id="booking">
        <div class="book_bg"></div>
        <div class="map_pattern"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-6">
                    <form action="appointment.php" method="post" id="appointment_form" class="form-horizontal appointment_form">
                        <div class="book_content">
                            <h2 style="color: white;">Buchung</h2>
                            <p style="color: #999;">
                                Buchen Sie jetzt ihren Termin um Wartezeit zu vermeiden<br>
                            </p>
                        </div>
                       

                        <!-- SUBMIT BUTTON -->

                        <button id="app_submit" class="default_btn" type="submit">
                           Buche deinen Termin!
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- GALLERY SECTION -->

    <section class="gallery-section" id="gallery">
    <div class="section_heading">
    <h2 style="color: black;">Gallerie</h2>
    <div class="heading-line"></div>
</div>

        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/images/portfolio-1.jpg');">    </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/images/portfolio-2.jpg');"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/images/portfolio-3.jpg');"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/images/portfolio-4.jpg');"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/images/portfolio-5.jpg');"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/images/portfolio-6.jpg');"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/images/portfolio-7.jpg');"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/images/portfolio-8.jpg');"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TEAM SECTION -->

    <section id="team" class="team_section">
    <div class="container" style="display: flex; flex-direction: column; align-items: center;">
        <div class="section_heading ">
            <h2 style="color: black;">Unser Team</h2>
            <div class="heading-line"></div>
        </div>
        <div style="flex: 1; height: 400px; width: 100%; display: flex; justify-content: center;">
            <img src="Design/images/team.jpg" alt="Team Member" style="max-width: 100%; max-height: 100%; object-fit: contain;">
        </div>
        <ul class="team_members row"> 
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 padd_col_res">
                    <div class="team_member text-center ml-5">
                    </div>
                </div>
            </div>
        </ul>   
    </div>
</section>








    <!-- PRICING SECTION  -->

    <section class="pricing_section" id="pricing">

        <!-- START GET CATEGORIES  PRICES FROM DATABASE -->

            <?php

                $stmt = $con->prepare("Select * from service_categories");
                $stmt->execute();
                $categories = $stmt->fetchAll();

            ?>

        <!-- END -->

        <div class="container">
            <div class="section_heading">
                <h2 style="color: black;">Unsere Preise</h2>
                <div class="heading-line"></div>
            </div>
            <div class="row">
                <?php

                    foreach($categories as $category)
                    {
                        $stmt = $con->prepare("Select * from services where category_id = ?");
                        $stmt->execute(array($category['category_id']));
                        $totalServices =  $stmt->rowCount();
                        $services = $stmt->fetchAll();

                        if($totalServices > 0)
                        {
                        ?>

                            <div class="col-lg-4 col-md-6 sm-padding">
                                <div class="price_wrap">
                                    <h3><?php echo $category['category_name'] ?></h3>
                                    <ul class="price_list">
                                        <?php

                                            foreach($services as $service)
                                            {
                                                ?>

                                                    <li>
                                                        <h4><?php echo $service['service_name'] ?></h4>
                                                        <p><?php echo $service['service_description'] ?></p>
                                                        <span class="price">€<?php echo $service['service_price'] ?></span>
                                                    </li>

                                                <?php
                                            }

                                        ?>
                                        
                                    </ul>
                                </div>
                            </div>

                        <?php
                        }
                    }

                ?>
                
            </div>
        </div>
    </section>

   

    <!-- WIDGET SECTION / FOOTER -->

    <section class="widget_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer_widget">
                    <h2 class="text-white">Classmen Barbershop</h2>

                        <p>
                        </p>
                        <ul class="widget_social">
                            <li><a href="https://www.facebook.com/people/ClassMen-Barber-Shop/100057060955516/" data-toggle="tooltip" title="Facebook"><i class="fab fa-facebook-f fa-2x"></i></a></li>
                            <li><a href="https://www.facebook.com/people/ClassMen-Barber-Shop/100057060955516/" data-toggle="tooltip" title="Instagram"><i class="fab fa-instagram fa-2x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                     <div class="footer_widget">
                        <h3>Adresse</h3>
                        <p>
                            Classmen Barbershop Linz
                        </p>
                        <p>
                            Scharitzerstraße 25a
                            <p>4020 Linz</p>
                            <a href="tel:+436605081747">0660 5081747</a>

                        </p>
                     </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer_widget">
                        <h3>
                            Öffnungszeiten
                        </h3>
                        <ul class="opening_time">
                            <li>Montag - Freitag 08:30 - 18:45</li>
                            <li>Samstag 08:30 - 17:00</li>
                            <li>Sonntag und Feiertag geschlossen</li>
   
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer_widget">
                       
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER  -->

    !-- JavaScript-Code -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>