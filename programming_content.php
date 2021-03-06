<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Programming</title>
   <link rel="icon" href="img/TECHnological_logo.jpg" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css" />
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <!-- themify CSS -->
    <link rel="stylesheet" href="css/themify-icons.css" />
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css" />
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css" />
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css" />
  </head>

<body>
<?php
$conn=mysqli_connect('localhost','root','','technological');
if(mysqli_connect_errno())
{
	echo"sorry can't connect database";
}
else
{
	
	$query="select * from problems_programming";
	$results=$conn->query($query);
	$num_results=$results->num_rows;
	echo'<style>td{padding:10px;}table,td{border:2px solid black;}table{border-collapse:collapse;margin-left:3%;margin-top:5%; padding:100px;}</style><table>';
	for($i=0;$i<$num_results;$i++)
	{
		$row=$results->fetch_assoc();
		echo'<tr><td><font color="red">Problem Id:</font>'.$row['problem_id'].'</td><td><font color="red">Problem Statement:</font>'.$row['problem_statement'].'<br><font color="red">Languages Allowed:</font>'.$row['languages_allowed'].'</td></tr>';
	}
	echo'</table>';
}


?>
    <!-- our_service start-->
   <section class="our_service">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-xl-4">
            <div class="single_feature">
              <div class="single_service">
                <span>01</span>
                <h4>
                  Watch Video Lecture's <br />
                  
                </h4>
                <p>
                  We Provide basic as well as advance video Lectures on famous programming languages.
                </p>
                <ul>
                  <li><a href="#">C Programming</a></li>
                  <li><a href="#">C++ Programming</a></li>
                  <li><a href="#">Core Java Programming</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-4">
            <div class="single_feature">
              <div class="single_service">
                <span>02</span>
                <h4>Code Practice</h4>
                <p>
				Improve your coding skills with our <br>'Code Practice' module developed by experts by keeping in view the latest market demands. 
                </p>
                <ul>
                  <li><a href="#">Beginners Level</a></li>
                  <li><a href="#">Medium Level</a></li>
                  <li><a href="#">Advance Level</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-4">
            <div class="single_feature">
              <div class="single_service">
                <span>03</span>
                <h4>Ask us</h4>
                <p>
                  Clear your doubt's.
                </p>
                <ul>
                  <li><a href="#">Mail us</a></li>
                  <li><a href="#">Put Comment</a></li> 
               </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- our_service part end-->

    <!-- our_project part start-->
    <section class="our_project section_padding" id="portfolio">
      <div class="container">
        <div class="row justify-content-between align-items-center">
          <div class="col-lg-4">
            <div class="section_tittle">
              <p>latest technologies</p>
              <h2>Fact's</h2>
            </div>
          </div>
          <div class="col-lg-5 col-md-6">
            <div class="filters portfolio-filter project_menu_item">
              <ul>
                <li class="active" data-filter="*">Artificial Intelligence</li>
                <li data-filter=".machine_learning">Machine Learning</li>
                <li data-filter=".rebuild">Neural Networks</li>
              </ul>
            </div>
          <div class="col-lg-3 col-md-6">
            <div class="more_btn d-none d-md-block">
              <a href="#" class="more_btn_iner">more projects</a>
            </div>
          </div>
        </div>
		
        <div class="filters-content">
          <div class="row justify-content-between portfolio-grid">
            <div class="col-lg-6 col-sm-6 all buildings">
              <div class="single_our_project">
                <div class="single_offer">
                  <img src="img/project_1.png" alt="offer_img_1" />
                  <div class="hover_text">
                    <p>Web development</p>
                    <a href="#"><h2>Web design & development</h2></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-sm-6 all rebuild">
              <div class="single_our_project">
                <div class="single_offer">
                  <img src="img/project_2.png" alt="offer_img_1" />
                  <div class="hover_text">
                    <p>Web design</p>
                    <a href="#"><h2>Web design & development</h2></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <img src="img/animate_icon/icon_2.png" class="animation_icon_2" alt="">
    </section>
    <!-- our_project part end-->

    <!-- about part start-->
    <section class="creative padding_bottom">
      <div class="container-fluid">
        <div class="row align-items-center justify-content-start">
          <div class="col-md-6 col-xl-6">
            <div class="creative_img">
              <img src="img/creative_img.jpg" class="one" alt="image can't loaded" />
            </div>
          </div>
          <div class="col-md-6 col-xl-4">
            <div class="creative_part_text">
              
              
				<h1>Technology is changing each day, Are you changing with it?</h1>
              
             
              <a
                href="https://www.youtube.com/watch?v=tDiJnd7SM2Y"
                class="popup-youtube"
                ><i class="ti-control-play"></i> See what we believe</a
              >
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- about part end-->

    <!--::review_part end::-->
    <div class="review_part padding_bottom" id="testimonial">
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-7">
            <div class="section_tittle text-center">
              <p>Content Developers</p>
              <h2>What we Do?</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="review_part_text owl-carousel">
              <div class="singler_eview_part">
                <div class="client_info">
                  <img src="img/client_1.png" alt="" />
                  <h4>Paras gulati</h4>
                  <p>Creator and Founder of TECHnological</p>
                </div>
                <p>
                </p>
              </div>
			  
              <div class="singler_eview_part">
                <div class="client_info">
                  <img src="img/client_2.png" alt="" />
                  <h4>Rishabh Gupta</h4>
                  <p>Content manager of TECHnological</p>
                </div>
                <p>
                 
                </p>
              </div>
			  <!--
              <div class="singler_eview_part">
                <div class="client_info">
                  <img src="img/client_1.png" alt="" />
                  <h4>Justine Miller</h4>
                  <p>Web developer at Envato</p>
                </div>
                <p>
                  “There winged grass midst moving earth seed herb fifth you
                  multiply you divide cattle stars first cattle was had spirit
                  you're thing, night darkness. Which itself stars creature.
                </p>
              </div>
              <div class="singler_eview_part">
                <div class="client_info">
                  <img src="img/client_2.png" alt="" />
                  <h4>Danny Jonson</h4>
                  <p>Creative director at Apple</p>
                </div>
                <p>
                  “There winged grass midst moving earth seed herb fifth you
                  multiply you divide cattle stars first cattle was had spirit
                  you're thing, night darkness. Which itself stars creature.
                </p>-->
              </div>
            </div>
          </div>
        </div>
      </div>
      <img src="img/animate_icon/icon_3.png" class="animation_icon_3" alt="">
    </div>
    <!--::review_part end::-->

    <!--::cta_part start::-->
    <div class="cta_part">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-7">
            <div class="cta_iner">
              <h1>Let’s create something awesome together</h1>
              <a href="#" class="btn_1">Join Us !</a>
            </div>
          </div>
        </div>
      </div>
    </div>
   
</body>
</html>