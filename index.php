<?php
include "head.php";
include'admin/dist/operations/connection.php';
?>

<body>
    <?php
    include "navbar.php";
    ?>

    <section>
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/eduworks.jpeg" class="d-block w-100" alt="..." height="400px">
                </div>
                <div class="carousel-item">
                    <img src="images/slide1.jpeg" class="d-block w-100 " alt="..." height="400px">
                </div>
                <div class="carousel-item">
                    <img src="images/slide4.png" class="d-block w-100" alt="..." height="400px">
                </div>
                <div class="carousel-item">
                    <img src="images/slide2.png" class="d-block w-100" alt="..." height="400px">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>


    <section class="ftco-section ftco-no-pt ftc-no-pb mt-md-5 mb-2">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-5 py-3 order-md-last wrap-about d-flex align-items-stretch justify-content-mid">
                    <div class="img" style="background-image: url(images/course-8.jpg);"></div>
                </div>
                <div class="col-md-7 wrap-about pr-md-4 ftco-animate text-justify">
                    <h2 class="mb-3 font-weight-lighter">About Eduworks</h2>
                    <p>Eduworks Educational Initiatives, is involved into sales, marketing & distribution of Educational Solutions (Competitions, Soft skill Training Programs, Cutting Edge Technology Training Programs, E-Learning Contents, eCampus Solutions etc.) to Institutions like Schools, Universities, Engineering Colleges, Management Colleges, etc. throughout Madhya Pradesh & Chhattisgarh & in near future plan to have offices PAN India; over the years we have worked with leading companies in diversified sectors, in E-learning, Software Services, Training, Campus Placement etc. to name a few.
                    </p>
                    <p>Eduworks has continually taken a lead role in setting new standards in the sales, marketing & distribution of IT solutions and value-add services. We cater to the requirement of Institution, Corporate, Government and Individual clients. Today, Eduworks has multiple product lines which are the most in-demand products.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-services ftco-no-pb ftco-no-pt mt-5 container">
        <h2 class="mb-4 ftco-animate font-weight-lighter" align="center">Our Services</h2>
        <div class="row no-gutters">

            <div class="col-md-4 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-warning hoverable">
                <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-security"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Website development</h3>
                        <p>We love what we do and we do what our clients love & work with great clients all over the world to create thoughtful and purposeful websites.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-primary hoverable">
                <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-jigsaw"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Campus Recruitment & Internship</h3>
                        <p>Facing your interview or gaining confidence at a workplace, let it be anything, all you need is a professional Soft Skills Training to make you interview ready or work ready.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-info hoverable">
                <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-reading"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Train and hire module</h3>
                        <p>Acquiring the right talent is the most important key to growth. Hiring was - and still is - the most important thing we do.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 d-flex services align-self-stretch py-5 px-4 mt-md-5 ftco-animate bg-success hoverable">
                <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-books"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Communication & Softskill training</h3>
                        <p>Facing your interview or gaining confidence at a workplace, let it be anything, all you need is a professional Soft Skills Training to make you interview ready or work ready.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 d-flex services align-self-stretch py-5 px-4 mt-md-5 ftco-animate bg-danger hoverable">
                <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-diploma"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Resume Building</h3>
                        <p>Our team of professionals who have expertise in recruiting,
                            interviewing, content, typography, and design will ensure that
                            you get a resume that is significantly better than your previous one.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 d-flex services align-self-stretch py-5 px-4 mt-md-5 ftco-animate bg-secondary hoverable">
                <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-education"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">E-learning Portal</h3>
                        <p>Think out of the box and create a learning experience where the learner can interact with the content and their brains.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <h2 class="mb-5 mt-5 ftco-animate font-weight-lighter" align="center">Our Acheivements</h2>
    <section class="ftco-animate">
        <div id="carouselExample" class="carousel slide container" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExample" data-slide-to="1"></li>
                <li data-target="#carouselExample" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/resume.png" class="d-block w-100" alt="..." height="400px">
                </div>
                <div class="carousel-item">
                    <img src="images/softskill.png" class="d-block w-100" alt="..." height="400px">
                </div>
                <div class="carousel-item">
                    <img src="images/trainhirre.png" class="d-block w-100" alt="..." height="400px">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <section class="testimony-section mt-5">
        <div class="container">
            <div class="text-center ftco-animate">
                <h2 class="mb-4 font-weight-lighter">What Student Says About Us</h2>
            </div>

            <div class="row ftco-animate justify-content-center">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel">
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                <div class="user-img mr-4" style="background-image: url(images/user.png)">
                                </div>
                                <div class="text ml-2">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                    <p>Eduwork help me to prepare for my campus Placements</p>
                                    <p class="name">User</p>
                                    <span class="position">Student</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                <div class="user-img mr-4" style="background-image: url(images/user.png)">
                                </div>
                                <div class="text ml-2">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                    <p>Eduwork provide me the best internship program and help me to learn</p>
                                    <p class="name">user</p>
                                    <span class="position">Student</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                <div class="user-img mr-4" style="background-image: url(images/user.png)">
                                </div>
                                <div class="text ml-2">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                    <p>Eduwork helps me to improve my soft skills and communication</p>
                                    <p class="name">user</p>
                                    <span class="position">Student</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <?php
    include "footer.php";
    ?>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>
            <!-- Button trigger modal -->


            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <?php
                    $sql="SELECT * FROM `data`";
                    $result = mysqli_query($con, $sql);
                     ?>
                    <div class="owl-carousel owl-theme">
                      <?php while($row=mysqli_fetch_assoc($result)){ ?>
                        <div class="item">
                          <img class="img-responsive w-100" src="admin/dist/operations/images/<?= $row['image'] ?>" alt="">
                        </div>
                      <?php } ?>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript">
        $(window).on('load',function(){
            $('#exampleModal').modal('show');
        });
    </script>
    <script>
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        }
    }
})
</script>
</body>

</html>
