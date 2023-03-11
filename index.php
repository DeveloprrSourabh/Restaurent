
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
   <?php include "header.php";?>
    <!-- Body Start -->
    <div class="body">
      <!-- First Box Start -->
      <div id="carouselExampleIndicators" class="carousel slide">
        <div class="slider-indicat"  id="slider-indicator">
          <div class="slider-indicat2  carousel-indicators">
            <button id="btn_slider" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="" aria-label="Slide 1">
              <div class="inner_dot"></div>
            </button>
            <button id="btn_slider" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2" class="">
              <div class="inner_dot"></div>
            </button>
            <button id="btn_slider" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3" class="active" aria-current="true">
              <div class="inner_dot"></div>
            </button>
          </div>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item">
            <div id="main-content" class="bodystart">
              <div id="bg_img" class="container-fluid">
                <div id="uperbx" class="header-container row">
                  <div class="hader-col col-6">
                    <h1 class="body-heading">Good Food Made Easy</h1>
                    <h2 class="body-subheading">Are You Hungry?</h2>
                    <p class="body-paragraph"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit illo voluptates iusto, distinctio minus in libero itaque. Deleniti labore vero nobis, iusto id sit debitis odio veritatis ea temporibus ratione. </p>
                    <button class=" btn">LEARN MORE</button>
                  </div>
                  <div class="body-col col-6">
                    <div class="circle-img">
                      <img class="food-img" src="assets/images/leaf-circle2.png">
                    </div>
                    <img src="assets/images/food-3-1.png" alt="" class="first-food" />
                  </div>  
                  <div class="d-flex">
                   <div class="slider-col col-4">
                      <div class="slider-col-div">
                   <img src="assets/images/food-3-1.png" alt="" class="slider-col-img" />
                        <div class="slider-caption">
                          <div class="ftwsati">PREV</div>
                          <div class="slider-heading">Tastes Like a Paradise</div>
                        </div>
                      </div>
                    </div>
                    <div class="slider-col col-4">
                      <div class="slider-col-div">
                   <img src="assets/images/food-3-1.png" alt="" class="slider-col-img" />
                        <div class="slider-caption">
                          <div class="ftwsati">NEXT</div>
                          <div class="slider-heading">Tastes Like a Paradise</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div id="main-content" class="bodystart">
              <div id="bg_img" class="container-fluid">
                <div id="uperbx" class="header-container row">
                  <div class="bcolst col-6">
                    <h1 class="body-heading">Tastes Like a Paradise</h1>
                    <h2 class="body-subheading">Today Special Menu</h2>
                    <p class="body-paragraph"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit illo voluptates iusto, distinctio minus in libero itaque. Deleniti labore vero nobis, iusto id sit debitis odio veritatis ea temporibus ratione. </p>
                    <button class=" btn">LEARN MORE</button>
                  </div>
                  <div class="body-col col-6">
                    <div class="circle-img">
                      <img class="food-img" src="assets/images/leaf-circle2.png">
                    </div>
                    <img src="assets/images/food-3-1.png" alt="" class="first-food" />
                  </div>
                   <div class="d-flex">
                   <div class="slider-col col-4">
                      <div class="slider-col-div">
                   <img src="assets/images/food-3-1.png" alt="" class="slider-col-img" />
                        <div class="slider-caption">
                          <div class="ftwsati">PREV</div>
                          <div class="slider-heading">Tastes Like a Paradise</div>
                        </div>
                      </div>
                    </div>
                    <div class="slider-col col-4">
                      <div class="slider-col-div">
                   <img src="assets/images/food-3-1.png" alt="" class="slider-col-img" />
                        <div class="slider-caption">
                          <div class="ftwsati">NEXT</div>
                          <div class="slider-heading">Tastes Like a Paradise</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item active">
            <div id="main-content" class="bodystart">
              <div id="bg_img" class="container-fluid">
                <div id="uperbx" class="header-container row">
                  <div class="hader-col col-6">
                    <h1 class="body-heading">Special Dinner for You</h1>
                    <h2 class="body-subheading">Delicious Food</h2>
                    <p class="body-paragraph"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit illo voluptates iusto, distinctio minus in libero itaque. Deleniti labore vero nobis, iusto id sit debitis odio veritatis ea temporibus ratione. </p>
                    <button class=" btn">LEARN MORE</button>
                  </div>
                  <div class="body-col col-6">
                    <div class="circle-img">
                      <img class="food-img" src="//elementor.zozothemes.com/restaurt/wp-content/uploads/sites/58/2022/10/leaf-circle2.png">
                    </div>
                    <img src="https://elementor.zozothemes.com/restaurt/wp-content/uploads/sites/58/2022/11/food-3-1.png" alt="" class="first-food" />
                  </div>
                   <div class="d-flex">
                   <div class="slider-col col-4">
                      <div class="slider-col-div">
                   <img src="assets/images/food-3-1.png" alt="" class="slider-col-img" />
                        <div class="slider-caption">
                          <div class="ftwsati">PREV</div>
                          <div class="slider-heading">Tastes Like a Paradise</div>
                        </div>
                      </div>
                    </div>
                    <div class="slider-col col-4">
                      <div class="slider-col-div">
                   <img src="assets/images/food-3-1.png" alt="" class="slider-col-img" />
                        <div class="slider-caption">
                          <div class="ftwsati">NEXT</div>
                          <div class="slider-heading">Tastes Like a Paradise</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- First Box End -->
      <!-- Second Box Start -->
      <div class=" conainer bodystart">
        <div class=" gt justify-content-center row">
          <div class="hader-col col-6">
            <div class="tw2fcap">
              <div class="plsalg">
                <span class="tw2fc">25</span>
                <span class="pls">+</span>
              </div>
              <div class="hdline"></div>
              <span class="tw2fc1">
                <h4 class="twh4">Years Of Experience</h4>
              </span>
            </div>
            <div class="slider-col-img1">
              <img class="setimgs" src="assets/images/about-imgres1-1.jpg">
            </div>
          </div>
          <div class="bcolst3 col-6">
            <div class="tw2fsstr">
              <h3 class="twh3">About Us</h3>
              <h1 class="twh1">Enjoy an Exceptional Journey of Taste</h1>
              <div class="d-flex py-4">
                <div class="hlm0"></div>
                <div class="hlm1"></div>
              </div>
              <div class="lmline"></div>
            </div>
            <p class="twp">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta explicabo. </p>
            <div class="dis">
              <div class="likcol">
                <div class="tefcols">
                  <i class="fa-regular fa-square-check"></i>
                  <span class="twspn"> Project Quality Management Plan </span>
                </div>
                <div class="tefcols">
                  <i class="fa-regular fa-square-check"></i>
                  <span class="twspn"> The Ability to Delegate Tasks </span>
                </div>
                <div class="tefcols">
                  <i class="fa-regular fa-square-check"></i>
                  <span class="twspn"> It might be a finished or unfinished </span>
                </div>
              </div>
              <div class="anthertw">
                <di class="hdline1">
              </div>
              <div class="teimgw">
                <img class="twsign" src="assets/images/signature-pics.png">
                <div class="ceotw">CEO and Founder</div>
              </div>
            </div>
            <button class=" btn">LEARN MORE</button>
          </div>
        </div>
      </div>
      <!-- Second Box End -->
      <!-- Third Box Start -->
      <div class="bodystart">
        <div class="third_box">
          <div class="Third_sheading">Our Process</div>
          <h1 class="Third_heading">Healthy & Improves Your Mood</h1>
          <div class="d-flex py-4 justify-content-center">
            <div class="hlm"></div>
            <div class="hlm0"></div>
            <div class="hlm1"></div>
          </div>
        </div>
        <div id="bars" class="row main_container justify-content-between container">
          <!-- First_col Start-->
          <div class="col-md-4  first_col">
            <div class="  fr_colimg">
              <img class="thr_colig" src="assets/images/restaurant-1.png">
              <h2 class="clean_bar">Clean Bar</h2>
              <p class="p_bar">Lorem Ipsum is simply dummy text of the printing typesetting industry ipsum.</p>
            </div>
            <div class="img_thrd">
              <img class="btm_img" src="assets/images/clean-bar-1.jpg">
            </div>
          </div>
          <!-- First_col End -->
          <!-- Second_col Start-->
          <div class="col-md-4 first_col">
            <div class="fr_colimg">
              <img class="thr_colig" src="assets/images/r-icons-5.png">
              <h2 class="clean_bar">Clean Bar</h2>
              <p class="p_bar">Lorem Ipsum is simply dummy text of the printing typesetting industry ipsum.</p>
            </div>
            <div class="img_thrd">
              <img class="btm_img" src="assets/images/great-chefs-1.jpg">
            </div>
          </div>
          <!-- Second_col End -->
          <!-- Thid_col Start-->
          <div class="col-md-4 first_col">
            <div class="fr_colimg">
              <img class="thr_colig" src="assets/images/r-icons-6.png">
              <h2 class="clean_bar">Clean Bar</h2>
              <p class="p_bar">Lorem Ipsum is simply dummy text of the printing typesetting industry ipsum.</p>
            </div>
            <div class="img_thrd">
              <img class="btm_img" src="assets/images/healthy-foods1-1.jpg">
            </div>
          </div>
          <!-- Thirds_col End -->
        </div>
        <div class="last_div">
          <div class="px-0 givepd container">
            <div class="fdiv">
              <img class="fimg" src="assets/images/meat-1-1-pwvftov0oevxravsmeoqvlhq2qbgpb6hp2zlxoppyg.png">
              <div class="fdiv_heading">
                <h5 class="fdiv_h5"> We Have 25+ Years of Experience, Give Better Quality Results </h5>
                <p class="fdiv_p"> Perspiciatis unde omnis iste natus error sit voluptatem laudantium, totam rem, eaque ipsa quae </p>
              </div>
              <button class=" btn">CONTACT US</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Third Box End -->
    </div>
    <!-- Forth Box Start -->
    <div class="bodystart">
      <div class="f-start">
        <div class="container">
          <div class="row pding">
            <div class="f_col col-6">
              <div class="get_tc"> Get In Touch </div>
              <h2 class="f_h2"> Find Us Here. Make Real <h2 class="f_h2 pb-5"> Results Happen. </h2>
                <div class="d-flex py-4 justify-content-center">
                  <div class="hlm"></div>
                  <div class="hlm0"></div>
                  <div class="hlm1"></div>
                </div>
              </h2>
              <div class="f_star">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-half-stroke"></i>
              </div>
              <div class="trust"> Trust Score 4.5 (Based on 1,200 reviews) </div>
              <div class="display-inline emoji">
                <i class="fa-regular smile fa-face-smile"></i>
                <span class="emoji_p"> READ FEEDBACK </spans>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Forth Box End -->
    <!-- Fifth Start -->
    <div class=" fifth_div">
      <div id="bgig" class="container">
        <div class="ffth">From Our Menu</div>
        <div class="d_food">Delicious Food Forever</div>
        <div class="d-flex py-4 justify-content-center">
          <div class="hlm"></div>
          <div class="hlm0"></div>
          <div class="hlm1"></div>
        </div>
        <div class="row ffth_row">
          <!-- first-col start -->
          <div class="rowset col-6">
            <!-- First start -->
            <div class="fl_col">
              <div class="uper">
                <img class="ffth_img" src="assets/images/r-product15-1-1-pwvft0f80dahxegpr9wwji7dnq6vnd6xfimx7lmjno.jpg">
                <div class="adiv">
                  <a href="" class="ffth_h2"> Raw Scallops from Erquy </a>
                  <p class="ffth_p"> Candied Jerusalem artichokes, truffle </p>
                </div>
              </div> &nbsp;&nbsp; <div class="horiz_line"></div>
              <div class="cost">$32.08</div>
            </div>
            <!-- first end -->
            <!-- 2nd start -->
            <div class="fl_col">
              <div class="uper">
                <img class="ffth_img" src="assets/images/r-product6-1-1-pwvfszhdtj97lsi2wri9z0fx2cbifo373dzfqbnxtw.jpg">
                <div class="adiv">
                  <a href="" class="ffth_h2"> Raw Scallops from Erquy </a>
                  <p class="ffth_p"> Candied Jerusalem artichokes, truffle </p>
                </div>
              </div> &nbsp;&nbsp; <div class="horiz_line"></div>
              <div class="cost">$18.08</div>
            </div>
            <!-- 2nd End -->
            <!-- 3rd start -->
            <div class="fl_col">
              <div class="uper">
                <img class="ffth_img" src="assets/images/r-product22-1-1-pwvft1d277bs90fclsbj3zyu9428v2anrnaeovl5hg.jpg">
                <div class="adiv">
                  <a href="" class="ffth_h2"> Raw Scallops from Erquy </a>
                  <p class="ffth_p"> Candied Jerusalem artichokes, truffle </p>
                </div>
              </div> &nbsp;&nbsp; <div class="horiz_line"></div>
              <div class="cost">$24.18</div>
            </div>
            <!-- 3rd End -->
            <!-- 4th start -->
            <div class="fl_col">
              <div class="uper">
                <img class="ffth_img" src="assets/images/r-product8-1-1-pwvfszhdtj97lsi2wri9z0fx2cbifo373dzfqbnxtw.jpg">
                <div class="adiv">
                  <a href="" class="ffth_h2"> Raw Scallops from Erquy </a>
                  <p class="ffth_p"> Candied Jerusalem artichokes, truffle </p>
                </div>
              </div> &nbsp;&nbsp; <div class="horiz_line"></div>
              <div class="cost">$30.09</div>
            </div>
            <!-- 4th End -->
          </div>
          <!-- first-col end -->
          <!-- second-col Start -->
          <div class="rowset col-6">
            <!-- First start -->
            <div class="fl_col">
              <div class="uper">
                <img class="ffth_img" src="assets/images/r-product9-1-1-pwvfszhdtj97lsi2wri9z0fx2cbifo373dzfqbnxtw.jpg">
                <div class="adiv">
                  <a href="" class="ffth_h2"> Raw Scallops from Erquy </a>
                  <p class="ffth_p"> Candied Jerusalem artichokes, truffle </p>
                </div>
              </div> &nbsp;&nbsp; <div class="horiz_line"></div>
              <div class="cost">$22.08</div>
            </div>
            <!-- first end -->
            <!-- 2nd start -->
            <div class="fl_col">
              <div class="uper">
                <img class="ffth_img" src="assets/images/r-product15-1-1-pwvft0f80dahxegpr9wwji7dnq6vnd6xfimx7lmjno.jpg">
                <div class="adiv">
                  <a href="" class="ffth_h2"> Raw Scallops from Erquy </a>
                  <p class="ffth_p"> Candied Jerusalem artichokes, truffle </p>
                </div>
              </div> &nbsp;&nbsp; <div class="horiz_line"></div>
              <div class="cost">$32.03</div>
            </div>
            <!-- 2nd End -->
            <!-- 3rd start -->
            <div class="fl_col">
              <div class="uper">
                <img class="ffth_img" src="assets/images/r-product26-1-1-pwvft2awe1d2kmdzgaq5ohqauhxm2ree3rxw65jrb8.jpg">
                <div class="adiv">
                  <a href="" class="ffth_h2"> Raw Scallops from Erquy </a>
                  <p class="ffth_p"> Candied Jerusalem artichokes, truffle </p>
                </div>
              </div> &nbsp;&nbsp; <div class="horiz_line"></div>
              <div class="cost">$12.80</div>
            </div>
            <!-- 3rd End -->
            <!-- 4th start -->
            <div class="fl_col">
              <div class="uper">
                <img class="ffth_img" src="assets/images/r-product30-1-1-pwvft2awe1d2kmdzgaq5ohqauhxm2ree3rxw65jrb8.jpg">
                <div class="adiv">
                  <a href="" class="ffth_h2"> Raw Scallops from Erquy </a>
                  <p class="ffth_p"> Candied Jerusalem artichokes, truffle </p>
                </div>
              </div> &nbsp;&nbsp; <div class="horiz_line"></div>
              <div class="cost">$32.08</div>
            </div>
            <!-- 4th End -->
          </div>
          <!-- second-col End -->
        </div>
      </div>
      <div class="d-flex ffth_last">
        <span class="hrline1"></span>
        <div class="wnter">During winter daily from <span class="timing">8:30 am</span> to <span class="timing"> 9.00 pm</span>
        </div>
        <span class="hrline2"></span>
      </div>
      <div class="ffth_btn">
        <button class="btn lst_btn">BROWSE MENUS</button>
      </div>
    </div>
    </div>
    <!-- Fifth End -->
    <!-- sixth Box Start -->
    <div class="sxth">
      <div class="sxth_str">
        <div class="container sxthcont">
          <div class="sxth_sheading">Make an Reserve</div>
          <h1 class="sxth_h1">Online Reservation </h1>
          <div class="d-flex py-4 justify-content-center">
            <div class="hlm"></div>
            <div class="hlm0"></div>
            <div class="hlm1"></div>
          </div>
        </div>
        <div class="sxth-alg">
          <div class="container form frm">
            <div class="dsin">
              <div class="row">
                <div id="main_col" class="col-6">
                  <form class="frm" action="#" method="post">
                    <img class="klimg" src="assets/images/arow-right-2.png">
                    <input placeholder="Name" type="text" id="fname" name="fname">
                    <input placeholder="Phone" type="number" id="phone" name="phone">
                    <input placeholder="1 Persons" type="text" id="person" name="person">
                    <input placeholder="10/2/2023" type="date" id="date" name="date">
                    <input placeholder="Name" type="text" id="fname" name="fname">
                    <select id="cars" name="cars">
                      <option value="volvo">06:00 pm</option>
                      <option value="saab">07:00 pm</option>
                      <option value="fiat">08:00 pm</option>
                      <option value="audi">10:00 pm</option>
                    </select>
                    <button id="bbtn" class=" btn">BOOK A TABLE</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- Client Counting Start -->
          <div class="count">
            <div class="str_count">
              <div id="spc_count" class=" d-flex container">
                <!-- First Count -->
                <div class="all_count">
                  <img class="bg-img" src="assets/images/counter-3.png">
                  <div class="plsalg">
                    <span id="demo" class="tw2fc">25</span>
                    <span class="pls">+</span>
                  </div>
                  <div class="countjs">
                    <h5 class="title_count">Years of Foundation</h5>
                  </div>
                </div>
                <!-- Second Count -->
                <div class="all_count">
                  <img class="bg-img2" src="assets/images/counter-2.png">
                  <div class="plsalg">
                    <span class="tw2fc">10</span>
                    <span class="pls">k</span>
                  </div>
                  <div class="countjs">
                    <h5 class="title_count">Satisfied Clients</h5>
                  </div>
                </div>
                <!-- Thrid Count -->
                <div class="all_count">
                  <img class="bg-img3" src="assets/images/counter-1.png">
                  <div class="plsalg">
                    <span class="tw2fc">540</span>
                    <span class="pls">+</span>
                  </div>
                  <div class="countjs">
                    <h5 class="title_count">Global Reach</h5>
                  </div>
                </div>
                <!-- Fourth Count -->
                <div class="all_count">
                  <img class="bg-img4" src="assets/images/counter-4.png">
                  <div class="plsalg">
                    <span class="tw2fc">175</span>
                    <span class="pls">+</span>
                  </div>
                  <div class="countjs">
                    <h5 class="title_count">Awards Winning</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Client Counting Start End -->
        </div>
      </div>
    </div>
    <!-- Sixth Box End -->
    <!-- Seventh Box Start -->
    <div class="bodystart svthBody">
      <div class="svth">
        <div class="container">
          <div class="svth_head">
            <h6 class="svthh6"> Amazing Team </h6>
            <h1 class="svthh1"> Meet Our Chefs </h1>
            <div class="d-flex py-4 justify-content-center">
              <div class="hlm"></div>
              <div class="hlm0"></div>
              <div class="hlm1"></div>
            </div>
          </div>
          <!-- Slider Start -->
          <div id="carouselExampleFade" class="carousel slide carousel-fade">
            <div class="nxt carousel-inner">
              <div class="d-flex  justify-content-center carousel-item active">
                <div class="chef-bg-color">
                  <img src="assets/images/team-2  -1-1.jpg" class="d-block pdi " alt="...">
                  <div class="name_c">
                    <h2 class="chef">Danniel</h2>
                    <p class="chef_p">HEAD CHEF</p>
                  </div>
                </div>
                <div class="chef-bg-color">
                  <img src="assets/images/team-2-1-1.jpg" class="d-block pdi" alt="...">
                  <div class="name_c">
                    <h2 class="chef">Jake</h2>
                    <p class="chef_p">Main CHEF</p>
                  </div>
                </div>
                <div class="chef-bg-color">
                  <img src="assets/images/team-2-1-1.jpg" class="d-block pdi" alt="...">
                  <div class="name_c">
                    <h2 class="chef">William</h2>
                    <p class="chef_p"> CHEF</p>
                  </div>
                </div>
              </div>
              <div class="d-flex nxt justify-content-center carousel-item active">
                <div class="chef-bg-color">
                  <img src="assets/images/team-7-1.jpg" class="d-block pdi " alt="...">
                  <div class="name_c">
                    <h2 class="chef">Miller Ethan</h2>
                    <p class="chef_p"> CHEF</p>
                  </div>
                </div>
                <div class="chef-bg-color">
                  <img src="assets/images/team-6-1-1.jpg" class="d-block pdi" alt="...">
                  <div class="name_c">
                    <h2 class="chef">Katie</h2>
                    <p class="chef_p">Restaurent Manager</p>
                  </div>
                </div>
                <div class="chef-bg-color">
                  <img src="assets/images/team-1-1-1.jpg" class="d-block pdi" alt="...">
                  <div class="name_c">
                    <h2 class="chef">Danniel</h2>
                    <p class="chef_p">Cleaner Head</p>
                  </div>
                </div>
              </div>
              <div class="d-flex nxt justify-content-center carousel-item active">
                <div class="chef-bg-color">
                  <img src="assets/images/team-5-1-1.jpg" class="d-block pdi " alt="...">
                  <div class="name_c">
                    <h2 class="chef">Danniel</h2>
                    <p class="chef_p">HEAD CHEF</p>
                  </div>
                </div>
                <div class="chef-bg-color">
                  <img src="assets/images/team-2-1-1.jpg" class="d-block pdi" alt="...">
                  <div class="name_c">
                    <h2 class="chef">Danniel</h2>
                    <p class="chef_p">HEAD CHEF</p>
                  </div>
                </div>
                <div class="chef-bg-color">
                  <img src="assets/images/team-5-1-1.jpg" class="d-block pdi" alt="...">
                  <div class="name_c">
                    <h2 class="chef">Danniel</h2>
                    <p class="chef_p">HEAD CHEF</p>
                  </div>
                </div>
              </div>
            </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
          </div>
          <!-- Slider End -->
        </div>
      </div>
    </div>
    <!-- Seventh Box End -->
    <!-- Eighth Box Start -->
    <div class"eith">
      <div class="eithstr">
        <div class="container">
          <div class="row ethrow">
            <div class="col-5 sahi">
              <div class="colstrth">
                <p class="ethp"> Find Location </p>
                <h1 class="athh1"> Locations of Restaurants All Over the World </h1>
                <div class="d-flex py-4 ">
                  <div class="hlm0"></div>
                  <div class="hlm1"></div>
                </div>
                <p class="ethp2"> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta explicabo. </p>
                <button class=" btn">LEARN MORE</button>
              </div>
            </div>
            <div id="no" class="col-7">
              <div class="d-flex colstrth2">
                <div class="mainlc1" class="itag1">
                  <a class="hovr" href="">
                    <img class="lction" src="assets/images/location.png">
                  </a>
                  <div class="hover1">
                    <div class="strhovevr">
                      <h3 class="resthv">Restaurt Branch</h3>
                      <p class="reshvp"> 4517 Washington Ave. Manchester, Kentucky 39495 </p>
                    </div>
                  </div>
                </div>
                <div class="mainlc2" class="itag1">
                  <a class="hovr" href="">
                    <img class="lction" src="assets/images/location.png">
                  </a>
                  <div class="hover">
                    <div class="strhovevr">
                      <h3 class="resthv">Restaurt Branch</h3>
                      <p class="reshvp"> 4517 Washington Ave. Manchester, Kentucky 39495 </p>
                    </div>
                  </div>
                </div>
                <div class="mainlc3" class="itag1">
                  <a class="hovr" href="">
                    <img class="lction" src="assets/images/location.png">
                  </a>
                  <div class="hover">
                    <div class="strhovevr">
                      <h3 class="resthv">Restaurt Branch</h3>
                      <p class="reshvp"> 4517 Washington Ave. Manchester, Kentucky 39495 </p>
                    </div>
                  </div>
                </div>
                <div class="mainlc4" class="itag1">
                  <a class="hovr3" href="">
                    <img class="lction" src="assets/images/location.png">
                  </a>
                  <div class="hover3">
                    <div class="strhovevr">
                      <h3 class="resthv">Restaurt Branch</h3>
                      <p class="reshvp"> 4517 Washington Ave. Manchester, Kentucky 39495 </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Eighth Box End -->
        <!-- Nineth Box Start -->
        <div class="bodystart nine-box">
          <div class="bxnine">
            <div class="">
              <div class="svth_head">
                <h6 class="svthh6"> Our Blog </h6>
                <h1  class="svthh1"> Latest Posts </h1>
                <div class="d-flex py-4 justify-content-center">
                  <div class="hlm"></div>
                  <div class="hlm0"></div>
                  <div class="hlm1"></div>
                </div>
              </div>
              <div class="d-flex ddm justify-content-center">
                <a class="dsize" href="">
                  <div class="card">
                    <img class="card-img-top" src="assets/images/blog-img-pya1a69rg5uf3lsynqi4om2tyeyyuvoj4s1lfd01c8.jpg" alt="Card image cap" />
                    <div class="carb">
                      <div class="top_head">Daily Menu</div>
                      <a href="#">
                        <h4 class="cartxt">Things to know when choosing Foods</h4>
                      </a>
                      <p class="carti">Read More</p>
                    </div>
                  </div>
                </a>
                <a class="dsize" href="">
                  <div class="card">
                    <img class="card-img-top" src="assets/images/blog-img-pya1a69rg5uf3lsynqi4om2tyeyyuvoj4s1lfd01c8.jpg" alt="Card image cap" />
                    <div class="carb">
                      <div class="top_head">Daily Menu</div>
                      <a href="#">
                        <h4 class="cartxt">Things to know when choosing Foods</h4>
                      </a>
                      <p class="carti">Read More</p>
                    </div>
                  </div>
                </a>
                <a class="dsize" href="">
                  <div class="card">
                    <img class="card-img-top" src="assets/images/blog-img-pya1a69rg5uf3lsynqi4om2tyeyyuvoj4s1lfd01c8.jpg" alt="Card image cap" />
                    <div class="carb">
                      <div class="top_head">Daily Menu</div>
                      <a href="#">
                        <h4 class="cartxt">Things to know when choosing Foods</h4>
                      </a>
                      <p class="carti">Read More</p>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- Nineth Box End -->
        <?php include 'footer.php' ?>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>

