
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <title>Bootstrap Example</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link rel="stylesheet" media="screen and (max-width: 800px)" type="text/css" href="assets/css/responsive.css" />
    <link rel="stylesheet" media="screen and (max-width: 650px)" type="text/css" href="assets/css/responsive2.css" />
    <link rel="stylesheet" media="screen and (max-width: 400px)" type="text/css" href="assets/css/responsive3.css" />
  </head>
  <body>
<?php
echo '
 <!-- Navbar Start -->
    <nav id="head_color" class="navbar navbar-expand-lg">
      <div class=" pdins container">
        <a id="nbr" class="navbar-brand" href="index.php">
          <img style="width: 10rem" src="assets/images/res-logo-light-350.png" />
        </a>
        <i id="srch1" style="display:none;" class="fa-solid fa-magnifying-glass"></i>
        <!-- <button class="navbar-toggler bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span style="color:white" class="navbar-toggler-icon"><i class="fas fa-bars mt-2
               " style="color:#fff;font-size: 22px;"></i></span></button> -->
        <a id="offtoggle" class=" navbar-toggler btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
          <i class="fas toggle-bar fa-bars mt-2"></i>
        </a>
        <div  class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
          <div class="offcanvas-header">
            <a id="nbr1" class="navbar-brand" href="#">
              <img class="logo-img" src="assets/images/res-logo-light-350.png">
            </a>
            <button type="button" class=" close_btn fa-solid fa-xmark" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <div class="navbar_start">
              <div class="nav_item">
                <!-- first-menu start -->
                <div class="nav_link">
                  <div class="nav_content">
                    <div class="nav_content" type="" data-bs-toggle="collapse" data-bs-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
                      <a class="head_nav" href="#">Home</a>
                    </div>
                    
                    <div class="nav_content" type="" data-bs-toggle="collapse" data-bs-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
                      <i class="zmm-dropdown-toggle drop_down fa-solid fa-plus"></i>
                    </div>
                  </div>
                  <div  class="d-flex flex-column">
                    <div class="collapse" id="collapseExample1">
                      <ul class="menu-item">
                        <li class="sub-item">
                          <a class="head_nav" href="#">Home Default</a>
                        </li>
                        <li class="sub-item">
                          <a class="head_nav" href="#">Home 1</a>
                        </li>
                        <li class="sub-item">
                          <a class="head_nav" href="#">Home 2</a>
                        </li>
                        <li class="sub-item">
                          <a class="head_nav" href="#">Home 3</a>
                        </li>
                        <li class="sub-item">
                          <a class="head_nav" href="#">Home 4</a>
                        </li>
                        <li class="sub-item">
                          <a class="head_nav" href="#">Home Cafe</a>
                        </li>
                        <li class="sub-item">
                          <a class="head_nav" href="#">Home Seafood</a>
                        </li>
                        <li class="sub-item">
                          <a class="head_nav" href="#">Home Barbecue</a>
                        </li>
                        <li class="sub-item">
                          <a class="head_nav" href="#">Home Bar</a>
                        </li>
                        <li class="sub-item">
                          <a class="head_nav" href="#">Home Food Truck</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- first-menu end -->
                <!-- second-menu start -->
                <div class="nav_link">
                  <div class="nav_content">
                    <div class="nav_content" type="" data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
                      <a class="head_nav" href="#">Pages</a>
                    </div>
                    <div class="nav_content" type="" data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
                      <i  class="zmm-dropdown-toggle drop_down fa-solid fa-plus"></i>
                    </div>
                  </div>
                  <div  class="d-flex flex-column">
                    <div class="collapse" id="collapseExample2">
                      <ul class="menu-item">
                        <li class="sub-item">
                          <a class="head_nav" href="#">Landing Page</a>
                        </li>
                        <li class="sub-item">
                          <a class="head_nav" href="#">About Us</a>
                        </li>
                        <li class="sub-item">
                          <a class="head_nav" href="#">Our Team</a>
                        </li>
                        <li class="sub-item">
                          <a class="head_nav" href="#">Faq</a>
                        </li>
                        <li class="sub-item">
                          <a class="head_nav" href="#">Our Services</a>
                        </li>
                        <li class="sub-item">
                          <a class="head_nav" href="#">Shop</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- second-menu end -->
                <!-- third-menu start -->
                <div class="nav_link">
                  <div class="nav_content">
                    <div class="nav_content" type="" data-bs-toggle="collapse" data-bs-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample">
                      <a class="head_nav" href="#">Menus</a>
                    </div>
                    <div class="nav_content" type="" data-bs-toggle="collapse" data-bs-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample">
                      <i class="zmm-dropdown-toggle drop_down fa-solid fa-plus"></i>
                    </div>
                  </div>
                  <div class="d-flex flex-column">
                    <div class="collapse" id="collapseExample3">
                      <ul class="menu-item">
                        <li class="sub-item">
                          <a class="head_nav" href="#">Reservations Form</a>
                        </li>
                        <li class="sub-item">
                          <a class="head_nav" href="#">Reservations 2</a>
                        </li>
                        <li class="sub-item">
                          <a class="head_nav" href="#">Our Menus</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- third-menu end -->
                <!-- fourth-menu start -->
                <div class="nav_link">
                  <div class="nav_content">
                    <div class="nav_content" type="" data-bs-toggle="collapse" data-bs-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample">
                      <a class="head_nav" href="#">Portfolio</a>
                    </div>
                    <div class="nav_content" type="" data-bs-toggle="collapse" data-bs-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample">
                      <i  class="zmm-dropdown-toggle drop_down fa-solid fa-plus"></i>
                    </div>
                  </div>
                  <div  class="d-flex flex-column">
                    <div class="collapse" id="collapseExample4">
                      <ul class="menu-item">
                        <li class="sub-item">
                          <a class="head_nav" href="#">Portfolio Grid</a>
                        </li>
                        <li class="sub-item">
                          <a class="head_nav" href="#">Portfolio Masonry</a>
                        </li>
                        <li class="sub-item">
                          <a class="head_nav" href="#">Portfolio Slider</a>
                        </li>
                        <li class="sub-item">
                          <a class="head_nav" href="#">Portfolio Slider 2</a>
                        </li>
                        <li class="sub-item">
                          <a class="head_nav" href="#">Portfolio Single</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- fourth-menu end -->
                <!-- fifth-menu start -->
                <div class="nav_link">
                  <div class="nav_content">
                    <div class="nav_content" type="" data-bs-toggle="collapse" data-bs-target="#collapseExample5" aria-expanded="false" aria-controls="collapseExample">
                      <a class="head_nav" href="#">Blog</a>
                    </div>
                    <div class="nav_content" type="" data-bs-toggle="collapse" data-bs-target="#collapseExample5" aria-expanded="false" aria-controls="collapseExample">
                      <i  class="zmm-dropdown-toggle drop_down fa-solid fa-plus"></i>
                    </div>
                  </div>
                  <div  class="d-flex flex-column">
                    <div class="collapse" id="collapseExample5">
                      <ul class="menu-item">
                        <li class="sub-item">
                          <a class="head_nav" href="#">Blog Grid</a>
                        </li>
                        <li class="sub-item">
                          <a class="head_nav" href="#">Blog Grid Overlay</a>
                        </li>
                        <li class="sub-item">
                          <a class="head_nav" href="#">Blog List</a>
                        </li>
                        <li class="sub-item">
                          <a class="head_nav" href="#">Blog Single</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- fifth-menu end -->
                <!-- sixth-menu start -->
                <div class="nav_link">
                  <div class="nav_content">
                    <div class="nav_content" type="" data-bs-toggle="collapse" data-bs-target="#collapseExample6" aria-expanded="false" aria-controls="collapseExample">
                      <a class="head_nav" href="#">Contact Us</a>
                    </div>
                    <div class="nav_content" type="" data-bs-toggle="collapse" data-bs-target="#collapseExample6" aria-expanded="false" aria-controls="collapseExample">
                      <i  class="zmm-dropdown-toggle drop_down fa-solid fa-plus"></i>
                    </div>
                  </div>
                  <div  class="d-flex flex-column">
                    <div class="collapse" id="collapseExample6">
                      <ul class="menu-item">
                        <li class="sub-item">
                          <a class="head_nav" href="#">contact Us 1</a>
                        </li>
                        <li class="sub-item">
                          <a class="head_nav" href="#">contact Us 1</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- sixth-menu end -->
              </div>
              <div class="nav-item-inner">
                <form action="" method="get">
                  <div class="d-flex">
                    <input class="form-control1" type="text" placeholder="Search for...">
                    <span class="input-btn">
                      <i class="fa-solid fa-arrow-right"></i>
                    </span>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav  me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <ul class="nhvr">
              <a class=" nhvr1 nav-link" aria-current="page" href="#">HOME</a>
              <!-- Start Hover -->
              <div class="jnvhr">
                <div class="set_bg">
                  <div class="mrgn container">
                    <!-- second row start -->
                    <ul class="rowise">
                      <li class="liwise">
                        <div class="lidiv">
                          <a href="#">
                            <img class="imgli" src="assets/images/home-1.jpg">
                          </a>
                          <h5 class="hover_heading"> Home 1 <h5>
                        </div>
                      </li>
                      <li class="liwise">
                        <div class="lidiv">
                          <a href="#">
                            <img class="imgli" src="assets/images/home-2.jpg">
                          </a>
                          <h5 class="hover_heading"> Home 2 <h5>
                        </div>
                      </li>
                      <li class="liwise">
                        <div class="lidiv">
                          <a href="#">
                            <img class="imgli" src="assets/images/home-3.jpg">
                          </a>
                          <h5 class="hover_heading"> Home 3 <h5>
                        </div>
                      </li>
                      <li class="liwise">
                        <div class="lidiv">
                          <a href="#">
                            <img class="imgli" src="assets/images/home-4.jpg">
                          </a>
                          <h5 class="hover_heading"> Home 4 <h5>
                        </div>
                      </li>
                      <li class="liwise">
                        <div class="lidiv">
                          <a href="#">
                            <img class="imgli" src="assets/images/home-5.jpg">
                          </a>
                          <h5 class="hover_heading"> Home 5 <h5>
                        </div>
                      </li>
                    </ul>
                    <ul class="rowise">
                      <li class="liwise">
                        <div class="lidiv">
                          <a href="#">
                            <img class="imgli" src="assets/images/home-6.jpg">
                          </a>
                          <h5 class="hover_heading"> Home 6 <h5>
                        </div>
                      </li>
                      <li class="liwise">
                        <div class="lidiv">
                          <a href="#">
                            <img class="imgli" src="assets/images/home-bbq.jpg">
                          </a>
                          <h5 class="hover_heading"> Home 7 <h5>
                        </div>
                      </li>
                      <li class="liwise">
                        <div class="lidiv">
                          <a href="#">
                            <img class="imgli" src="assets/images/home-2.jpg">
                          </a>
                          <h5 class="hover_heading"> Home 8 <h5>
                        </div>
                      </li>
                      <li class="liwise">
                        <div class="lidiv">
                          <a href="#">
                            <img class="imgli" src="assets/images/home-bbq.jpg">
                          </a>
                          <h5 class="hover_heading"> Home 9 <h5>
                        </div>
                      </li>
                      <li class="liwise">
                        <div class="lidiv">
                          <a href="#">
                            <img class="imgli" src="assets/images/home-6.jpg">
                          </a>
                          <h5 class="hover_heading"> Home blog<h5>
                        </div>
                      </li>
                    </ul>
                    <!-- second row end -->
                  </div>
                </div>
              </div>
              <!-- End Hover -->
            </ul>
          </li>
          <li class="nav-item">
            <ul class="nvhr2">
              <a class="nav-link" href="#">PAGES</a>
              <!-- hover start -->
              <div class="jnvhr2">
                <ul class="dropdown-content">
                  <li class="menus-item">
                    <a class="hover-item" href="#">Landing Page</a>
                  </li>
                  <li class="menus-item">
                    <a class="hover-item" href="#">About Us</a>
                  </li>
                  <li class="menus-item">
                    <a class="hover-item" href="#">Our Team</a>
                  </li>
                  <li class="menus-item">
                    <a class="hover-item" href="#">Faq</a>
                  </li>
                  <li class="menus-item">
                    <a class="hover-item" href="#">Our Services</a>
                  </li>
                  <li class="menus-item">
                    <a class="hover-item" href="#">Shop</a>
                  </li>
                </ul>
              </div>
              <!-- hover end -->
            </ul>
          </li>
          <li class="nav-item">
            <ul class="nvhr2">
              <a class="nav-link" href="#">MENUS</a>
              <!-- hover start -->
              <div class="jnvhr2">
                <ul class="dropdown-content">
                  <li class="menus-item">
                    <a class="hover-item" href="#">Landing Page</a>
                  </li>
                  <li class="menus-item">
                    <a class="hover-item" href="#">About Us</a>
                  </li>
                  <li class="menus-item">
                    <a class="hover-item" href="#">Our Team</a>
                  </li>
                  <li class="menus-item">
                    <a class="hover-item" href="#">Faq</a>
                  </li>
                  <li class="menus-item">
                    <a class="hover-item" href="#">Our Services</a>
                  </li>
                  <li class="menus-item">
                    <a class="hover-item" href="#">Shop</a>
                  </li>
                </ul>
              </div>
              <!-- hover end -->
            </ul>
          </li>
          <li class="nav-item">
            <ul class="nvhr2">
              <a class="nav-link" href="#">PORTFOLIO</a>
              <!-- hover start -->
              <div class="jnvhr2">
                <ul class="dropdown-content">
                  <li class="menus-item">
                    <a class="hover-item" href="#">Landing Page</a>
                  </li>
                  <li class="menus-item">
                    <a class="hover-item" href="#">About Us</a>
                  </li>
                  <li class="menus-item">
                    <a class="hover-item" href="#">Our Team</a>
                  </li>
                  <li class="menus-item">
                    <a class="hover-item" href="#">Faq</a>
                  </li>
                  <li class="menus-item">
                    <a class="hover-item" href="#">Our Services</a>
                  </li>
                  <li class="menus-item">
                    <a class="hover-item" href="#">Shop</a>
                  </li>
                </ul>
              </div>
              <!-- hover end -->
            </ul>
          </li>
          <li class="nav-item">
            <ul class="nvhr2">
              <a class="nav-link" href="#">BLOG</a>
              <!-- hover start -->
              <div class="jnvhr2">
                <ul class="dropdown-content">
                  <li class="menus-item">
                    <a class="hover-item" href="#">Landing Page</a>
                  </li>
                  <li class="menus-item">
                    <a class="hover-item" href="#">About Us</a>
                  </li>
                  <li class="menus-item">
                    <a class="hover-item" href="#">Our Team</a>
                  </li>
                  <li class="menus-item">
                    <a class="hover-item" href="#">Faq</a>
                  </li>
                  <li class="menus-item">
                    <a class="hover-item" href="#">Our Services</a>
                  </li>
                  <li class="menus-item">
                    <a class="hover-item" href="#">Shop</a>
                  </li>
                </ul>
              </div>
              <!-- hover end -->
            </ul>
          </li>
          <li class="nav-item">
            <a  class="nav-link1 d-flex" href="#"> <span class="nav-span">CONTACT</span>  &nbsp <i id="srch" class="fa-solid fa-magnifying-glass"></i>
            </a>
          </li>
          <div class="hline"></div>
        </ul>
        <form id="span1" class="d-flex " role="search">
          <span class="span">
            <div class="vline1"></div>
            <div class="vline2"></div>
            <div class="vline3"></div>
          </span>
          <button id="btns" class="btn1" type="submit">

         <a href="signin.php">
          
          Signup /  Signin
          </a>
          </button>
        </form>
      </div>
      </div>
    </nav>
    <!-- Navbar End -->
    ';
?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>

