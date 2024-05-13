<?php
include('includes/dbconnection.php');
session_start();
error_reporting(0);

  ?>
<!doctype html>
<html lang="en">
  <head>
    
    <title>College Enquiry||Home Page</title>
    <!-- web fonts -->
    <link href="//fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <!-- //web fonts -->
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
  </head>
  <body>


<?php include('includes/header.php');?>
<section class="w3l-main-slider" id="home">
  <!-- main-slider -->
  <div class="companies20-content">
   
    <div class="owl-one owl-carousel owl-theme">
      <div class="item">
        <li>
          <div class="slider-info banner-view bg bg2" data-selector=".bg.bg2">
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg mx-auto text-center">
                  <h5>Better Education For A Better World</h5>
                 <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" href="contact.php">Contact Now</a>
                </div>
                
              </div>
            </div>
          </div>
        </li>
      </div>
      <div class="item">
        <li>
          <div class="slider-info  banner-view banner-top1 bg bg2" data-selector=".bg.bg2">
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg mx-auto text-center">
                  <h5>Explore The World Of Our Graduates</h5>
                  <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" href="contact.php">Contact Now</a>
                </div>
              </div>
            </div>
          </div>
        </li>
      </div>
      <div class="item">
        <li>
          <div class="slider-info banner-view banner-top2 bg bg2" data-selector=".bg.bg2">
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg mx-auto text-center">
                  <h6><b>Handing Over NAAC Peer Team Exit Meeting Report</b></h6>
                 <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" href="contact.php">Contact Now</a>
                </div>
              </div>
            </div>
          </div>
        </li>
      </div>
      <div class="item">
        <li>
          <div class="slider-info banner-view banner-top3 bg bg2" data-selector=".bg.bg2">
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg mx-auto text-center">
                  <h6><b>Mangalore University Level Best College Magazine Award 3rd Place</b></h6>
                  <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" href="services.html">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </li>
      </div>

      


    </div>
  </div>

</div>


  <script src="assets/js/owl.carousel.js"></script>
  <!-- script for -->
  <script>
    $(document).ready(function () {
      $('.owl-one').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        responsiveClass: true,
        autoplay: false,
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: false,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          480: {
            items: 1,
            nav: false
          },
          667: {
            items: 1,
            nav: true
          },
          1000: {
            items: 1,
            nav: true
          }
        }
      })
    })
  </script>
  <!-- //script -->
  <!-- /main-slider -->
</section>

<!-- features-4 block -->
<section class="w3l-index1" id="about">
	<div class="calltoaction-20  py-5 editContent">
		<div class="container py-md-3">
		
			<div class="calltoaction-20-content row">
				<div class="column center-align-self col-lg-6 pr-lg-5">
					<h5 class="editContent">Welcome To Our Campus</h5>
                    <?php

$ret=mysqli_query($con,"select * from tblpage where PageType='aboutus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
					<p class="more-gap editContent" style="text-align:justify"><?php  echo $row['PageDescription'];?></p>
						<?php } ?>
							<a class="btn btn-secondary btn-theme2 mt-3" href="about.php"> Read More</a>
				</div>
				<div class="column ccont-left col-lg-6">
					<img src="assets/images/gf2.jpg" class="img-responsive" alt="">
				</div>
			</div>
		</div>
	</div>
</section>
<!-- features-4 block -->
<section class="services-12" id="course">
	<div class="form-12-content">
		<div class="container">
			<div class="grid grid-column-2 ">
				
				<div class="column1">
					<div class="heading">
						<h3 class="head text-white">Apply for Addmission</h3>
						<h4>Limited Seat Available</h4>
						<p class="my-3 text-white" style="text-align:justify"> Student support activities are being conducted in a well-defined manner under the auspices of NSS, Sports, and other associations. They have won prizes at the University and the State level competitions, and have represented the college at the National level camps and training programmes.The college has good teaching faculty consisting of 98 dedicated teachers out of which 27 are Permanent teachers. Three teachers of our college have received state level NSS awards. One of them has also received Indira Gandhi NSS National Award for the remarkable achievements as University NSS Co-coordinator. Almost all the P.G Departments are well furnished and working independently with computer and internet facility..</p>
					  </div>
					</div>
					<div class="column2">
						<a class="btn btn-secondary btn-theme2 mt-3" href="user/login.php"> Apply Here</a>
					</div>
			</div>
		</div>
	</div>
</section>

<section class="w3l-price-2" id="news">
    <div class="price-main py-5">
        <div class="container py-md-3">
             <div class="pricing-style-w3ls row py-md-5">
              <div class="pricing-chart col-lg-12">
                <h3 class="">Latest Notices</h3> <?php $query=mysqli_query($con,"select * from tblnotice ORDER BY ID DESC LIMIT 1");
while ($row=mysqli_fetch_array($query)) {
?>
                <div class="tatest-top mt-md-5 mt-4">
                        <div class="price-box btn-layout bt6">
                            <div class="grid grid-column-2">
                                    <div class="column-6">
                                            <img src="assets/images/g9.jpg" alt="" class="img-fluid">
                                        </div>
                                <div class="column1">
                                   
                                    <div class="job-info">
                                       
                                        <h6 class="pricehead"><?php echo $row['Title'];?></h6>
                                        <h5><?php echo $row['CreationDate'];?></h5>
                                        <p><?php echo $row['Decription'];?></p>
                                        
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    
                    </div>
                   <?php } ?>
                    </div>
                 
            </div>
        </div>
    </div>
</section>
<!-- grids block 5 -->
<?php include('includes/footer.php');?>
<script src="assets/js/jquery-3.3.1.min.js"></script>
<!-- //footer-28 block -->
</section>
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
  integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
  integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
  integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>

<!-- Template JavaScript -->
<script src="assets/js/all.js"></script>
<!-- Smooth scrolling -->
<!-- <script src="assets/js/smoothscroll.js"></script> -->
<script src="assets/js/owl.carousel.js"></script>

<!-- script for -->
<script>
  $(document).ready(function () {
    $('.owl-one').owlCarousel({
      loop: true,
      margin: 0,
      nav: true,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        480: {
          items: 1,
          nav: false
        },
        667: {
          items: 1,
          nav: true
        },
        1000: {
          items: 1,
          nav: true
        }
      }
    })
  })
</script>
<!-- //script -->

</body>

</html>
<!-- // grids block 5 -->