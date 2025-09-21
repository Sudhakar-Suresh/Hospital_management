<?php

if(isset($_POST['submit']))
{
echo "<script>alert('Your information succesfully submitted');</script>";
echo "<script>window.location.href ='index.php'</script>";

} ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Care Website</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <header class="header">

        <a href="index.php" class="logo"> <i class="fas fa-tooth"></i> HealthCare 24/7 </a>
        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#services">services</a>
            <a href="#team">team</a>
            <a href="#blog">blog</a>
        </nav>
        <a href="login.php" class="btn"> Login</a>
        <div id="menu-btn" class="fas fa-bars"></div>

    </header>

    <!-- header end -->

    <!-- home -->

    <section class="home" id="home">

        <div class="content">
            <h3>make your smile shine</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti, dolores. Ad rerum eum assumenda mollitia autem quo nulla, consequatur quisquam est? Dolorem fugiat fugit amet dolores provident velit eos est.</p>
            <a href="login.php" class="btn">make appointment</a>
        </div>


    </section>

    <!-- home end -->

    <!-- about us section-->

    <section class="about" id="about">

        <h1 class="heading"> about us </h1>

        <div class="row">

            <div class="image">
                <img src="img/about.webp" alt="">
            </div>

            <div class="content">
                <h3>our clinic is made for you to be smiling all the time</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate inventore explicabo recusandae cumque dolor voluptas nihil.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate inventore explicabo recusandae cumque dolor voluptas nihil.</p>
                <a href="#" class="btn">read more</a>
            </div>

        </div>

    </section>


    <!-- about end -->


    <!-- services -->

    <section class="services" id="services">

        <h1 class="heading"> our services</h1>

        <div class="box-container">

            <div class="box">
                <img src="img/services-1.webp" alt="">
                <h3>online schedule</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis in excepturi.</p>
            </div>

            <div class="box">
                <img src="img/services-2.webp" alt="">
                <h3>cosmetic feeling</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis in excepturi.</p>
            </div>

            <div class="box">
                <img src="img/services-3.webp" alt="">
                <h3>oral hygiene experts</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis in excepturi.</p>
            </div>

        </div>

    </section>

    <!-- services end-->

    <!-- team section -->

    <section class="team" id="team">

        <h1 class="heading"> our team</h1>

        <div class="swiper team-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="img/team-1.jpg" alt="">
                        <div class="share">
                            <a href="#" class="fab fa-facebook-f"></a>
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-instagram"></a>
                            <a href="#" class="fab fa-linkedin"></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>john lacy</h3>
                        <span>genral surgeon</span>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="img/team-2.jpg" alt="">
                        <div class="share">
                            <a href="#" class="fab fa-facebook-f"></a>
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-instagram"></a>
                            <a href="#" class="fab fa-linkedin"></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>john lacy</h3>
                        <span>genral surgeon</span>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="img/team-3.jpg" alt="">
                        <div class="share">
                            <a href="#" class="fab fa-facebook-f"></a>
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-instagram"></a>
                            <a href="#" class="fab fa-linkedin"></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>john lacy</h3>
                        <span>genral surgeon</span>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="img/team-4.jpg" alt="">
                        <div class="share">
                            <a href="#" class="fab fa-facebook-f"></a>
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-instagram"></a>
                            <a href="#" class="fab fa-linkedin"></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>john lacy</h3>
                        <span>genral surgeon</span>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <!-- team section ends -->

    

    <!-- blog -->

    <section class="blog" id="blog">

        <h1 class="heading">our blogs</h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="img/blog-1.jpg" alt="">
                </div>
                <div class="content">
                    <a href="#" class="link">Diease</a>
                    <div class="icons">
                        <a href="#"> <i class="fas fa-calendar"></i> 04th september, 2022 </a>
                        <a href="#"> <i class="fas fa-user"></i> by admin</a>
                    </div>
                    <h3>the most common problems?</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. At cum atque sed veniam sunt, maxime natus excepturi maiores voluptatum.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="img/blog-2.jpg" alt="">
                </div>
                <div class="content">
                    <a href="#" class="link">Diease</a>
                    <div class="icons">
                        <a href="#"> <i class="fas fa-calendar"></i> 04th september, 2022 </a>
                        <a href="#"> <i class="fas fa-user"></i> by admin</a>
                    </div>
                    <h3>the most common problems?</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. At cum atque sed veniam sunt, maxime natus excepturi maiores voluptatum.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="img/blog-3.jpg" alt="">
                </div>
                <div class="content">
                    <a href="#" class="link">Diease</a>
                    <div class="icons">
                        <a href="#"> <i class="fas fa-calendar"></i> 04th september, 2022 </a>
                        <a href="#"> <i class="fas fa-user"></i> by admin</a>
                    </div>
                    <h3>the most common problems?</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. At cum atque sed veniam sunt, maxime natus excepturi maiores voluptatum.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

        </div>

    </section>

    <!-- blog ends -->

    <!-- footer -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>address</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa ex placeat.</p>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div>
            </div>

            <div class="box">
                <h3>e-mail</h3>
                <a href="#" class="link">ninjashub4@gmail.com</a>
                <a href="#" class="link">ninjashub4@gmail.com</a>
            </div>

            <div class="box">
                <h3>call us</h3>
                <p>+61 (0) 3 2587 4569</p>
                <p>+61 (0) 3 2587 4569</p>
            </div>

            <div class="box">
                <h3>opening hours</h3>
                <p>monday - friday : 8:00 - 24:00 <br>
                   saturday : 9:00 - 24:00    
                </p>
            </div>

        </div>

    </section>





    <!-- footer ends -->

















    <!-- swiper js link  -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>
</html>