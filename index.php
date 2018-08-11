<!DOCTYPE html>
<html lang="en">
  <head>
    <title>SWAAD SADAN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="fonts/SAMAN.TTF" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700|Raleway" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
      
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style> 
    @font-face {
      font-family: fontSaman;
      src: url(fonts/SAMAN.TTF);
    }
    </style>

    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body data-spy="scroll" data-target="#site-navbar" data-offset="200">
      
      <div class="icon-bar">
  <a href="#" class="facebook"><i class="fa fa-facebook"></i></a> 
  <a href="#" class="twitter"><i class="fa fa-twitter"></i></a> 
  <a href="#" class="google"><i class="fa fa-google"></i></a> 
  <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
  <a href="#" class="youtube"><i class="fa fa-youtube"></i></a> 
</div>
    
    <nav class="navbar navbar-expand-lg navbar-dark site_navbar bg-dark site-navbar-light" id="site-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html" style="font-size: 30px">swaad-sadan</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#site-nav" aria-controls="site-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="site-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="#section-home" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="#section-about" class="nav-link">About</a></li>
            <li class="nav-item"><a href="#section-order" class="nav-link">Order food</a></li>
            <li class="nav-item"><a href="#section-menu" class="nav-link">Menu</a></li>
            <li class="nav-item"><a href="#section-news" class="nav-link">Why Swaad Sadan</a></li>
            <li class="nav-item"><a href="#section-gallery" class="nav-link">Gallery</a></li>
            <li class="nav-item"><a href="#section-contact" class="nav-link">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->

    <section class="site-cover" style="background-image: url(images/back.png);" id="section-home">
      <div class="container">
          
        <div class="row align-items-center justify-content-center text-center site-vh-100">
          <div class="col-md-12">
            <h1 class="site-heading site-animate mb-3">Welcome To SWAAD SADAN</h1>
            <h2 class="h5 site-subheading mb-5 site-animate">Exclusive Homemade Traditional North Indian Cuisine</h2>    
              <p><a href="#" target="_blank" class="btn btn-outline-white btn-lg site-animate" data-toggle="modal" data-target="#reservationModal"><b>Order Now</b></a></p>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
    
    <section class="site-section" id="section-about">
      <div class="container">
        <div class="row">
          <div class="col-md-5 site-animate mb-5">
            <h4 class="site-sub-title">Our Story</h4>
            <h2 class="site-primary-title display-4">Welcome</h2>
            <p style="font-size: 20px">We have significant experience in the catering, events and hospitality industry and have a reputation for delivering great delicious hygienic homemade food.</p>

            <p class="mb-4" style="font-size: 20px">Swaad Sadan operates from a home premise in Chennai. Our kitchen has been growing steadily and building its reputation for good, honest, generous homemade exclusive North Indian food. Always willing to go that extra mile and provide people with exactly what they would like.</p>
            
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-6 site-animate img" data-animate-effect="fadeInRight">
            <img src="images/about_img_1.jpg" alt="Free Template by colorlib.com" class="img-fluid">
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
    

    <section class="site-section bg-light" id="section-order">
      <div class="container">
        
        <div class="row">
          <div class="col-md-12 text-center mb-5 site-animate">
            <h4 class="site-sub-title">Order Now</h4>
            <h2 class="display-4">Order your next food</h2>
            <div class="row justify-content-center">
              <div class="col-md-7">
                <p class="lead">Purely homemade North Indian balanced diet/ food DAY </p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="site-owl">

              <div class="item">
                <div class="media d-block mb-6 text-center site-media site-animate border-0">
                  <img src="images/order_lunch.JPG" alt="Free Template by colorlib.com" class="img-fluid">
                  <div class="media-body p-md-5 p-4">
                    <h5 class="mt-0 h4">Order your next Lunch </h5>
                      <h5 class="text-primary menu-price">11:00 AM - 04:00 PM</h5>
                    
                        <?php 
                    include('connect.php');    
                    
                            if(function_exists('date_default_timezone_set'))
                            {
                                date_default_timezone_set("Asia/Kolkata");
                            }
                      
                        $sql=mysqli_query($con,"SELECT * FROM `menu` WHERE `day` = '". date ("l")."'");
                        $data=mysqli_fetch_array($sql);
                      ?>      
                    <p class="mb-4" style="font-size: 20px">    
                        <?php echo $data['lunch']?>
                      </p>

                    <p class="mb-0"><a href="#" target="_blank" data-toggle="modal" data-target="#reservationModal" class="btn btn-primary btn-sm">Order Now!</a></p>
                  </div>
                </div>
              </div>
              </div>
            </div>
            
            
            <div class="col-md-6">
            <div class="site-owl">
                
              <div class="item">
                <div class="media d-block mb-6 text-center site-media site-animate border-0">
                  <img src="images/order_dinner.JPG" alt="Free Template by colorlib.com" class="img-fluid">
                  <div class="media-body p-md-5 p-4">
                    <h5 class="mt-0 h4">Order your next Dinner </h5>
                      <h5 class="text-primary menu-price">07:00 PM - 11:00 PM</h5>
                    <p class="mb-4" style="font-size: 20px">
                        <?php echo $data['dinner']?>
                      </p>

                    <p class="mb-0"><a href="#" target="_blank" data-toggle="modal" data-target="#reservationModal" class="btn btn-primary btn-sm">Order Now!</a></p>
                  </div>
                </div>
              </div>
                </div>
                </div>

            </div>
          </div>
          
    </section>
    <!-- END section -->

    <section class="site-section" id="section-menu">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center mb-5 site-animate">
            <h2 class="display-4">Delicious Menu</h2>
            <div class="row justify-content-center">
              <div class="col-md-7">
                <p class="lead">Swaad Sadan menu has something that will satisfy all our customers. Purely homemade North Indian balanced diet / food</p>
              </div>
            </div>
          </div>

          <div class="col-md-12 text-center">

            <ul class="nav site-tab-nav nav-pills mb-5" id="pills-tab" role="tablist">
              <li class="nav-item site-animate">
                <a class="nav-link active" id="pills-lunch-tab" data-toggle="pill" href="#pills-lunch" role="tab" aria-controls="pills-lunch" aria-selected="true">Lunch</a>
              </li>
              <li class="nav-item site-animate">
                <a class="nav-link" id="pills-dinner-tab" data-toggle="pill" href="#pills-dinner" role="tab" aria-controls="pills-dinner" aria-selected="false">Dinner</a>
              </li>
            </ul>

            <div class="tab-content text-left">
              <div class="tab-pane fade show active" id="pills-lunch" role="tabpanel" aria-labelledby="pills-lunch-tab">
                <div class="row">
                  <div class="col-md-6 site-animate">
                    <div class="media menu-item">
                      <img class="mr-3" src="images/gallery1.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                      <div class="media-body">
                        <h5 class="mt-0">Roti</h5>
                        <p style="font-size: 19px">A total of 4 piece of fresh and home made Roti or Poori will be delivered.</p>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/gallery10.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                      <div class="media-body">
                        <h5 class="mt-0">Dry Vegitable</h5>
                        <p style="font-size: 19px">Different types of Dry vegitables like Bhindi Masala, Mutter Patta Gobhi, Bhindi Sabzi, Aloo Shimla Mirch, Aloo Baingan, Aloo Zeera, Aloo payaz are available.</p>
                      </div>
                    </div>
                      
                    <div class="media menu-item">
                      <img class="mr-3" src="images/gallery6.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                      <div class="media-body">
                        <h5 class="mt-0">Rice</h5>
                        <p style="font-size: 19px">Types of available rice are Jeera rice, Ghee Rice, Pulao, Veg Briyani.</p>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/gallery8.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                      <div class="media-body">
                        <h5 class="mt-0">Sweet</h5>
                        <p style="font-size: 19px">Lunch must end with some sweets like Gulab Jamun, Balushahi, Pineapple Kesari, Meethi Boondi.</p>
                      </div>
                    </div>

                  </div>
                  <div class="col-md-6 site-animate">
                    <div class="media menu-item">
                      <img class="mr-3" src="images/salad.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                      <div class="media-body">
                        <h5 class="mt-0">Salad</h5>
                        <p style="font-size: 19px">Indian food never starts wihtout the salad and a daily salad will aid our intake of healthy fats.</p>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/gallery3.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                      <div class="media-body">
                        <h5 class="mt-0">Gravy Vegitable</h5>
                        <p style="font-size: 19px">Different types of Gravy vegitable like Mix veg, Aloo tamatar, Dum aloo, Besan/Gatte ki sabzi, Kofta curry, Lauki Chana dal, Kala chana masala are available.</p>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/gallery12.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                      <div class="media-body">
                        <h5 class="mt-0">Dal</h5>
                        <p style="font-size: 19px">Types of available Dal are Palak Dal, Moong Dal, Dhaba Dal, Chana Dal Tadka, Green Dal, Dal Tadka.</p>
                      </div>
                    </div>
                      
                      <div class="media menu-item">
                      <img class="mr-3" src="images/surprise.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                      <div class="media-body">
                        <h5 class="mt-0">Surprise</h5>
                        <p style="font-size: 19px">Surprises is something which everyone loves and are excited to know what they get in it and this is something we have in the thali for you.</p>
                      </div>
                    </div>
                      
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-dinner" role="tabpanel" aria-labelledby="pills-dinner-tab">
                <div class="row">
                  <div class="col-md-6 site-animate">

                    <div class="media menu-item">
                      <img class="mr-3" src="images/gallery1.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                      <div class="media-body">
                        <h5 class="mt-0">Roti</h5>
                        <p style="font-size: 19px">A total of 4 piece of fresh and home made Roti or Poori will be delivered.</p>
                        
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/gallery10.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                      <div class="media-body">
                        <h5 class="mt-0">Dry Vegitable</h5>
                        <p style="font-size: 19px">Different Types of dry vegitables like Aloo Patta Gobhi, Aloo Mutter, Egg Curry/Shahi Kofta, Aloo Beans, Aloo Gobhi, Mix Veg, Chicken/Kofta Curry are available.</p>
                        
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/gallery6.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                      <div class="media-body">  
                        <h5 class="mt-0">Rice</h5>
                        <p style="font-size: 19px">Types of available rice are Plain Rice, Veg Briyani, Ghee rice, Jeera rice.</p>
                        
                      </div>
                    </div>
                      
                      <div class="media menu-item">
                      <img class="mr-3" src="images/gallery8.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                      <div class="media-body">
                        <h5 class="mt-0">Sweet</h5>
                        <p style="font-size: 19px">Dinner must end with some sweets like Pineapple Kesari, Gulab Jamun, Balushahi,</p>
                        
                      </div>
                    </div>

                  </div>
                  <div class="col-md-6 site-animate">

                    <div class="media menu-item">
                      <img class="mr-3" src="images/salad.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                      <div class="media-body">
                        <h5 class="mt-0">salad</h5>
                        <p style="font-size: 19px">Indian food never starts wihtout the salad and a daily salad will aid our intake of healthy fats.</p>
                        
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/gallery9.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                      <div class="media-body">
                        <h5 class="mt-0">Gravy Vegitable</h5>
                        <p style="font-size: 19px">Different types of gravy vegitable like Mutter Paneer, Baingan Tamatar, Egg curry/Shahi Kofta, Chana Masala, Kadhai Paneer, Rajma, Chicken/Kofta currey are available.</p>
                        
                      </div>
                    </div>
                      
                      <div class="media menu-item">
                      <img class="mr-3" src="images/gallery12.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                      <div class="media-body">
                        <h5 class="mt-0">Dal</h5>
                        <p style="font-size: 19px">Types of available Dal are Dhaba Dal, Dal tadka, Green Dal, Moong Dal, Chana Dal tadka, Rajma, Masoor Dal.</p>
                        
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/surprise.jpg" class="img-fluid" alt="Free Template by colorlib.com">
                      <div class="media-body">
                        <h5 class="mt-0">Surprise</h5>
                        <p style="font-size: 19px">Surprises is something which everyone loves and are excited to know what they get in it and this is something we have in the thali for you.</p>
                        
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
    <!-- END section -->

    <section class="site-section bg-light" id="section-news">
      <div class="container">

        <div class="row">
          <div class="col-md-12 text-center mb-5 site-animate">
            <h2 class="display-4">Why Swaad Sadan</h2>
            <div class="row justify-content-center">
              <div class="col-md-7">
                <p class="lead">A healthy diet is a solution to many of our health-care problems.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="media d-block mb-4 text-center site-media site-animate">
              <img src="images/homemade.jpg" alt="Free Template by colorlib.com" class="img-fluid">
              <div class="media-body p-md-5 p-4">
                <h5 class="mt-0 h4">Home Made Food</h5>
                <p>Traditional North Indian food. Well experienced North Indian cooks. We don't use any added preservatives.</p>

                <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Read More</a></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="media d-block mb-4 text-center site-media site-animate">
              <img src="images/low_cost.jpg" alt="Free Template by colorlib.com" class="img-fluid">
              <div class="media-body p-md-5 p-4">
                <h5 class="mt-0 h4">Less Cost</h5>
                <p class="mb-4">Cost effective compared to others in the market. Delivered at your door step- saves time. </p>

                <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Read More</a></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="media d-block mb-4 text-center site-media site-animate">
              <img src="images/hygienic.jpg" alt="Free Template by colorlib.com" class="img-fluid">
              <div class="media-body p-md-5 p-4">
                <h5 class="mt-0 h4">Hygienic Food</h5>
                <p class="mb-4">Good quality and Healthy ingredients.  Hygienically prepared. We never close our kitchen.</p>

                <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Read More</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="site-section" id="section-gallery">
      <div class="container">
        <div class="row site-custom-gutters">

          <div class="col-md-12 text-center mb-5 site-animate">
            <h2 class="display-4">Gallery</h2>
            <div class="row justify-content-center">
              <div class="col-md-7">
                <p class="lead">We believe in giving our customer finest quality ingredients cooked under hygienic conditions at a reasonable price.</p>
              </div>
            </div>
          </div>

          <div class="col-md-3 site-animate">
            <a href="images/gallery1.jpg" class="site-thumbnail image-popup">
              <img src="images/gallery1.jpg" alt="Free Template by colorlib.com" class="img-fluid">
            </a>
          </div>
          <div class="col-md-3 site-animate">
            <a href="images/gallery2.jpg" class="site-thumbnail image-popup">
              <img src="images/gallery2.jpg" alt="Free Template by colorlib.com" class="img-fluid">
            </a>
          </div>
          <div class="col-md-3 site-animate">
            <a href="images/gallery3.jpg" class="site-thumbnail image-popup">
              <img src="images/gallery3.jpg" alt="Free Template by colorlib.com" class="img-fluid">
            </a>
          </div>

          <div class="col-md-3 site-animate">
            <a href="images/gallery4.jpg" class="site-thumbnail image-popup">
              <img src="images/gallery4.jpg" alt="Free Template by colorlib.com" class="img-fluid">
            </a>
          </div>
          <div class="col-md-3 site-animate">
            <a href="images/gallery5.jpg" class="site-thumbnail image-popup">
              <img src="images/gallery5.jpg" alt="Free Template by colorlib.com" class="img-fluid">
            </a>
          </div>
          <div class="col-md-3 site-animate">
            <a href="images/gallery6.jpg" class="site-thumbnail image-popup">
              <img src="images/gallery6.jpg" alt="Free Template by colorlib.com" class="img-fluid">
            </a>
          </div>
          <div class="col-md-3 site-animate">
            <a href="images/gallery7.jpg" class="site-thumbnail image-popup">
              <img src="images/gallery7.jpg" alt="Free Template by colorlib.com" class="img-fluid">
            </a>
          </div>
          <div class="col-md-3 site-animate">
            <a href="images/gallery8.jpg" class="site-thumbnail image-popup">
              <img src="images/gallery8.jpg" alt="Free Template by colorlib.com" class="img-fluid">
            </a>
          </div>
          <div class="col-md-3 site-animate">
            <a href="images/gallery9.jpg" class="site-thumbnail image-popup">
              <img src="images/gallery9.jpg" alt="Free Template by colorlib.com" class="img-fluid">
            </a>
          </div>
          <div class="col-md-3 site-animate">
            <a href="images/gallery10.jpg" class="site-thumbnail image-popup">
              <img src="images/gallery10.jpg" alt="Free Template by colorlib.com" class="img-fluid">
            </a>
          </div>
          <div class="col-md-3 site-animate">
            <a href="images/gallery11.jpg" class="site-thumbnail image-popup">
              <img src="images/gallery11.jpg" alt="Free Template by colorlib.com" class="img-fluid">
            </a>
          </div>
          <div class="col-md-3 site-animate">
            <a href="images/gallery12.jpg" class="site-thumbnail image-popup">
              <img src="images/gallery12.jpg" alt="Free Template by colorlib.com" class="img-fluid">
            </a>
          </div>

        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="site-section bg-light" id="section-contact">
      <div class="container">
        <div class="row">

          <div class="col-md-12 text-center mb-5 site-animate">
            <h2 class="display-4">Get In Touch</h2>
            <div class="row justify-content-center">
              <div class="col-md-7">
                <p class="lead">Reach us to order your regular meal on Monthly basis at a very attractive price</p>
              </div>
            </div>
          </div>

          <div class="col-md-7 mb-5 site-animate">
            <form action="" method="post">
              <div class="form-group">
                <label for="name" class="sr-only">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
              </div>
              <div class="form-group">
                <label for="email" class="sr-only">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
              </div>
              <div class="form-group">
                <label for="message" class="sr-only">Message</label>
                <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Write your message" required></textarea>
              </div>
              <div class="form-group">
                <input type="submit" name="send" class="btn btn-primary btn-lg" value="Send Message">
              </div>
            </form>
              
              <?php 
           include('connect.php');
           if(isset($_POST['send']))
           {
               $name=$_REQUEST['name'];
               $email=$_REQUEST['email'];
               $message=$_REQUEST['message'];
               
               $sql="INSERT INTO `feedback`(`name`, `email`, `message`) VALUES ('".$name."','".$email."','".$message."')";
               $res = mysqli_query($con,$sql);
               if($res>=1){
                   echo "<script>
                   alert('Thank-you for your valuable feedback');
                   </script>";
               }
               else{
                   echo "<script> alert('Feedback not sent');
                   window.location.href='#';
                   </script>";
               }
           }
           ?>
              
              
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-4 site-animate">
            <p><img src="images/order_lunch.JPG" alt="" class="img-fluid"></p>
            <p class="text-black">
              Address: <br> SJT SWAAD SADAN HOSPITALITY PVT LTD  <br>
                            1125, Block1, Osian Chlorophyll, Porur By Pass Service Rd, Porur, 
                            Chennai - 600 116. <br> <br>
              Phone: <br> 8686551551 / 7358296998 / 6383769990 /  9430664767<br> <br>
              Email: <br> <a href="mailto:info@swaad-sadan.com">info@swaad-sadan.com</a>
                     <br> <a href="mailto:care@swaad-sadan.com">care@swaad-sadan.com</a>
            </p>

          </div>
          
        </div>
      </div>
    </section>
    <div id="map"></div>
    <!-- END section -->
    

    <footer class="site-footer site-bg-dark site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-4 site-animate">
                <h2 class="site-heading-2" style="font-size: 24px">About Us</h2>
                <p style="font-size: 21px">Swaad Sadan operates from a home premise in Chennai. Our kitchen has been growing steadily and building its reputation for good, honest, generous homemade exclusive North Indian food.</p>
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-3 site-animate">
                <div class="site-footer-widget mb-4">
                  <h2 class="site-heading-2" style="font-size: 22px">The Restaurant</h2>
                  <ul class="list-unstyled">
                    <li><a href="#section-home" class="py-2 d-block">Home</a></li>
                    <li><a href="#section-order" class="py-2 d-block">Your next Food</a></li>
                    <li><a href="#section-gallery" class="py-2 d-block">Gallery</a></li>
                    <li><a href="#section-contact" class="py-2 d-block">Contact us</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-2 site-animate">
                 <div class="site-footer-widget mb-4">
                  <h2 class="site-heading-2" style="font-size: 22px">Useful links</h2>
                  <ul class="list-unstyled">
                    <li><a href="#section-home" class="py-2 d-block">Feeling hungry?</a></li>
                    <li><a href="#section-menu" class="py-2 d-block">Delicious Menu</a></li>
                    <li><a href="#section-menu" class="py-2 d-block">Lunch</a></li>
                    <li><a href="#section-menu" class="py-2 d-block">Dinner</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-2 site-animate">
                 <div class="site-footer-widget mb-4">
                  <h2 class="site-heading-2" style="font-size: 22px">Useful links</h2>
                  <ul class="list-unstyled">
                    <li><a href="#section-about" class="py-2 d-block">About us</a></li>
                    <li><a href="#section-home" class="py-2 d-block">Home</a></li>
                    <li><a href="#section-home" class="py-2 d-block">Order now</a></li>
                    <li><a href="#section-news" class="py-2 d-block">Why swaad-sadan</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
         
        </div>
        <div class="row site-animate">
           <div class="col-md-12 text-center">
            <div class="site-footer-widget mb-4">
              <ul class="site-footer-social list-unstyled ">
                <li class="site-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="site-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="site-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-12 text-center">
            <p>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy; 2018 All rights reserved | Made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://fnplus.xyz" target="_blank">FnPlus</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>

    
    

    <!-- Modal -->
    <div class="modal fade" id="reservationModal" tabindex="-1" role="dialog" aria-labelledby="reservationModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-12">
                <div class="bg-image" style="background-image: url(images/food_delivery.jpg);"></div>
              </div>
              <div class="col-lg-12 p-5">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <small>CLOSE </small><span aria-hidden="true">&times;</span>
                </button>
                <h1 class="mb-4">Order your food now</h1>  
                <form action="#" method="post">
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="m_fullname">Full Name</label>
                      <input type="text" class="form-control" id="m_fullname" name="m_fullname" required>
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="m_number">Whatsapp Number</label>
                      <input type="text" class="form-control" id="m_number" name="m_number" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="m_email">Email</label>
                      <input type="email" class="form-control" id="m_email" name="m_email" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="m_people">How Many People</label>
                      <input type="text" class="form-control" id="m_people" name="m_people" required>
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="m_date">Date</label>
                      <input type="text" class="form-control" id="m_date" name="m_date" required>
                    </div>
                  </div>

                  <div class="row">
                    
                    <div class="col-md-6 form-group">
                      <label for="m_meal">Meal</label>
                      <select name="m_meal" id="m_meal" class="form-control">
                        <option value="Lunch">Lunch</option>
                        <option value="Dinner">Dinner</option>
                      </select>
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="m_preference">Preference</label>
                        <select name="m_preference" id="m_preference" class="form-control">
                        <option value="Lunch">Veg.</option>
                        <option value="Dinner">Non Veg.</option>
                      </select>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="m_address">Address</label>
                      <textarea class="form-control" id="m_address" name="m_address" cols="30" rows="7" required></textarea>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <input type="submit" class="btn btn-primary btn-lg btn-block" name="submit" value="Order Now" id="submit">
                    </div>
                  </div>

                </form>
                  
                  <?php 
                if(isset($_POST['submit'])){
                    $to = "abhishekuniyal09@gmail.com"; // this is your Email address
                    $from = $_POST['m_email'];
                    $name = $_POST['m_fullname'];
                    $number = $_POST['m_number'];
                    $people = $_POST['m_people'];
                    $date = $_POST['m_date'];
                    $meal = $_POST['m_meal'];
                    $preference = $_POST['m_preference'];
                    $address = $_POST['m_address'];
                    $subject = "New Order";
                    $message = " New order is there: " . "\n\n" . "Name: "  . $fullname . "\n" . "Number: "  . $number
                        . "\n" . "Email: "  . $from . "\n" . "No. of plates: "  . $people . "\n" . "Date: "  . $date
                        . "\n" . "Meal: "  . $meal . "\n" . "Preference: "  . $preference . "\n" . "Address: "  . $address;
                    
                    $headers = "From:" . $from;
                    mail($to,$subject,$message,$headers);
                    
                    }
                  ?>
           
           <?php 
           include('connect.php');
           if(isset($_POST['submit']))
           {
               $name=$_REQUEST['m_fullname'];
               $email=$_REQUEST['m_email'];
               $number=$_REQUEST['m_number'];
               $people=$_REQUEST['m_people'];
               $date=$_REQUEST['m_date'];
               $meal=$_REQUEST['m_meal'];
               $preference=$_REQUEST['m_preference'];
               $address=$_REQUEST['m_address'];
               
               $sql="INSERT INTO `orders`(`name`, `number`, `email`, `no_of_order`, `date`, `meal`, `preference`, `address`) VALUES ('".$name."','".$number."','".$email."','".$people."','".$date."','".$meal."','".$preference."','".$address."')";
               $res = mysqli_query($con,$sql);
               if($res>=1){
                   echo "<script>
                   alert('Your order is placed successfully.');
                   window.location.href='index.php';
                   </script>";
               }
               else{
                   echo "<script> alert('Failed to place your order. Please try later.');
                   window.location.href='#';
                   </script>";
               }
           }
           ?>
                  
                  
                  
                  
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>

    <!-- END Modal -->

    <!-- loader -->
    <div id="site-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>

    <!--Start of Tawk.to Script-->
  <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5b583932df040c3e9e0bf09c/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
  </script>
  <!--End of Tawk.to Script-->
  </body>
</html>