<?php
require('dbconn.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cuet library website</title>

    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
    />

    <!-- font awesome cdn link  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="cs/style.css" />
  </head>
  <body>
    <!-- header section starts  -->

    <header class="header">
      <div class="header-1">
        <a href="#" class="logo"><img src="https://cuet.ac.bd/frontend/images/cuetlogo.png" wight="20px" height="50px"></img>Cuet Central Library</a>

        <form action="" class="search-form">
          <input
            type="search"
            name=""
            placeholder="search here..."
            id="search-box"
          />
          <label for="search-box" class="fas fa-search"></label>
        </form>

        <div class="icons">
          <div id="search-btn" class="fas fa-search"></div>
          <a href="#" class="fas fa-heart"></a>
          <a href="#" class="fas fa-shopping-cart"></a>
          <div id="login-btn" class="fas fa-user"></div>
        </div>
      </div>

      <div class="header-2">
        <nav class="navbar">
          <a href="#home">home</a>
          <a href="about.html">About</a>
          <a href="#featured">Available_books</a>
          <a href="#arrivals">Arrivals</a>
          <a href="#reviews">Library Authority</a>
          <a href="#blogs">E-Resources</a>
        </nav>
      </div>
    </header>

    <!-- header section ends -->

    <!-- bottom navbar  -->

    <nav class="bottom-navbar">
      <a href="#home" class="fas fa-home"></a>
      <a href="#featured" class="fas fa-list"></a>
      <a href="#arrivals" class="fas fa-tags"></a>
      <a href="#reviews" class="fas fa-comments"></a>
      <a href="#blogs" class="fas fa-blog"></a>
    </nav>

    <!-- login form  -->

    <div class="login-form-container">
      <div id="close-login-btn" class="fas fa-times"></div>

      <form action="">
        <h3>sign in</h3>
        <!-- <span>username</span> -->
        <input
          type="email"
          name=""
          class="box"
          placeholder="enter your email"
          id=""
        />
        <!-- <span>password</span> -->
        <input
          type=""
          name=""
          class="box"
          placeholder="enter your password"
          id=""
        />
        <div class="checkbox">
          <input type="checkbox" name="" id="remember-me" />
          <label for="remember-me"> remember me</label>
        </div>
        <input type="submit" value="sign in" class="btn" />
        <p>forget password ? <a href="#">click here</a></p>
        <p>don't have an account ? <a href="#">create one</a></p>
      </form>
    </div>

    <!-- home section starts  -->

    <section class="home" id="home">
      <div class="row">
        <div class="content">
          <h3>Sharpen Your Knowledge</h3>
          <p>
            “I have always imagined that Paradise will be a Kind of a Library’’
            - Jorge Luis Borges
          </p>
          <a href="index.php" class="btn">Tap to Login</a>
        </div>

        <div class="swiper books-slider">
          <div class="swiper-wrapper">
            <a href="#" class="swiper-slide"
              ><img src="image/bbookk-1.jpg" alt=""
            /></a>
            <a href="#" class="swiper-slide"
              ><img src="image/bbookk-13.jpg" alt=""
            /></a>
            <a href="#" class="swiper-slide"
              ><img src="image/s-10.jpg" alt=""
            /></a>
            <a href="#" class="swiper-slide"
              ><img src="image/bbookk-14.jpg" alt=""
            /></a>
            <a href="#" class="swiper-slide"
              ><img src="image/bbookk-12.jpg" alt=""
            /></a>
            <a href="#" class="swiper-slide"
              ><img src="image/s-1.jpg" alt=""
            /></a>
          </div>
          <img src="image/stand.png" class="stand" alt="" />
        </div>
      </div>
    </section>

    <!-- home section ends -->

    <section>
      <div class="puspo">
        <button type="button">
          <span></span><a href="#deal">Library Hour</a>
        </button>
        <button type="button">
          <span></span><a href="#newsletter">Suggestions</a>
        </button>
      </div>
    </section>
    
    <!-- arrivals section starts  -->

    <section class="arrivals" id="arrivals">
      <h1 class="heading"><span>new_arrivals</span></h1>

      <div class="swiper arrivals-slider">
        <div class="swiper-wrapper">
          <a href="#" class="swiper-slide box">
            <div class="image">
              <img src="image/s-10.jpg" alt="" />
            </div>
            <div class="content">
              <h3>new!</h3>
              <div class="price">3.08 MB</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>

                <i class="fas fa-star-half-alt"></i>
                <i class="far fa-star"></i>
              </div>
            </div>
          </a>

          <a href="#" class="swiper-slide box">
            <div class="image">
              <img src="image/s-9.jpg" alt="" />
            </div>
            <div class="content">
              <h3>new!</h3>
              <div class="price">322 KB</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
            </div>
          </a>

          <a href="#" class="swiper-slide box">
            <div class="image">
              <img src="image/s-8.jpg" alt="" />
            </div>
            <div class="content">
              <h3>new!</h3>
              <div class="price">12.05 MB</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
              </div>
            </div>
          </a>

          <a href="#" class="swiper-slide box">
            <div class="image">
              <img src="image/s-7.jpg" alt="" />
            </div>
            <div class="content">
              <h3>new!</h3>
              <div class="price">741 KB</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
              </div>
            </div>
          </a>

          <a href="#" class="swiper-slide box">
            <div class="image">
              <img src="image/s-6.jpg" alt="" />
            </div>
            <div class="content">
              <h3>new!</h3>
              <div class="price">2.01 MB</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
              </div>
            </div>
          </a>
        </div>
      </div>

      <div class="swiper arrivals-slider">
        <div class="swiper-wrapper">
          <a href="#" class="swiper-slide box">
            <div class="image">
              <img src="image/s-5.jpg" alt="" />
            </div>
            <div class="content">
              <h3>new!</h3>
              <div class="price">829 KB</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
              </div>
            </div>
          </a>

          <a href="#" class="swiper-slide box">
            <div class="image">
              <img src="image/s-4.jpg" alt="" />
            </div>
            <div class="content">
              <h3>new!</h3>
              <div class="price">3.79 MB</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>

                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <i class="far fa-star"></i>
              </div>
            </div>
          </a>

          <a href="#" class="swiper-slide box">
            <div class="image">
              <img src="image/s-3.jpg" alt="" />
            </div>
            <div class="content">
              <h3>new!</h3>
              <div class="price">12 MB</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
            </div>
          </a>

          <a href="#" class="swiper-slide box">
            <div class="image">
              <img src="image/s-2.jpg" alt="" />
            </div>
            <div class="content">
              <h3>new!</h3>
              <div class="price">913 KB</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
              </div>
            </div>
          </a>

          <a href="#" class="swiper-slide box">
            <div class="image">
              <img src="image/s-1.jpg" alt="" />
            </div>
            <div class="content">
              <h3>new!</h3>
              <div class="price">5 MB</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
            </div>
          </a>
        </div>
      </div>
    </section>

    <!-- arrivals section ends -->
    <!-- featured section starts  -->

    <section class="featured" id="featured">
      <h1 class="heading"><span>Available_books</span></h1>

      <div class="swiper featured-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide box">
            <!-- <div class="icons">
              <a href="#" class="fas fa-search"></a>
              <a href="#" class="fas fa-heart"></a>
              <a href="#" class="fas fa-eye"></a>
            </div> -->
            <div class="image">
              <img src="image/bbookk-15.jpg" alt="" />
            </div>
            <div class="content">
              <h3>1.57 MB</h3>
              <div class="price">906,495 Downloads </div>
              <a href="image/c.pdf" class="btn">view</a>
            </div>
          </div>

          <div class="swiper-slide box">
            <!-- <div class="icons">
              <a href="#" class="fas fa-search"></a>
              <a href="#" class="fas fa-heart"></a>
              <a href="#" class="fas fa-eye"></a>
            </div> -->
            <div class="image">
              <img src="image/bbookk-19.png" alt="" />
            </div>
            <div class="content">
              <h3>2.74 MB</h3>
              <div class="price">888,545 Downloads</div>
              <a href="image/md.pdf" class="btn">view</a>
            </div>
          </div>

          <div class="swiper-slide box">
            <!-- <div class="icons">
              <a href="#" class="fas fa-search"></a>
              <a href="#" class="fas fa-heart"></a>
              <a href="#" class="fas fa-eye"></a>
            </div> -->
            <div class="image">
              <img src="image/bbookk-20.jpg" alt="" />
            </div>
            <div class="content">
              <h3>2.03 MB</h3>
              <div class="price">173,394 Downloads </div>
              <a href="image/v.pdf" class="btn">view</a>
            </div>
          </div>

          <div class="swiper-slide box">
            <!-- <div class="icons">
              <a href="#" class="fas fa-search"></a>
              <a href="#" class="fas fa-heart"></a>
              <a href="#" class="fas fa-eye"></a>
            </div> -->
            <div class="image">
              <img src="image/bbookk-17.jpg" alt="" />
            </div>
            <div class="content">
              <h3>3.04 MB</h3>
              <div class="price">505,969 Downloads </div>
              <a href="image/co.pdf" class="btn">view</a>
            </div>
          </div>

          <div class="swiper-slide box">
            <!-- <div class="icons">
              <a href="#" class="fas fa-search"></a>
              <a href="#" class="fas fa-heart"></a>
              <a href="#" class="fas fa-eye"></a>
            </div> -->
            <div class="image">
              <img src="image/bbookk-14.jpg" alt="" />
            </div>
            <div class="content">
              <h3>258 KB</h3>
              <div class="price">617,277 Downloads </div>
              <a href="image/i.pdf" class="btn">view</a>
            </div>
          </div>

          <div class="swiper-slide box">
            <!-- <div class="icons">
              <a href="#" class="fas fa-search"></a>
              <a href="#" class="fas fa-heart"></a>
              <a href="#" class="fas fa-eye"></a>
            </div> -->
            <div class="image">
              <img src="image/bbookk-1.jpg" alt="" />
            </div>
            <div class="content">
              <h3>1022 KB</h3>
              <div class="price">308,722 Downloads</div>
              <a href="image/d.pdf" class="btn">view</a>
            </div>
          </div>
          <!-- <span>$20.99</span> -->
          <div class="swiper-slide box">
            <!-- <div class="icons">
              <a href="#" class="fas fa-search"></a>
              <a href="#" class="fas fa-heart"></a>
              <a href="#" class="fas fa-eye"></a>
            </div> -->
            <div class="image">
              <img src="image/bbookk-11.png" alt="" />
            </div>
            <div class="content">
              <h3>3.65 MB</h3>
              <div class="price">474,906 Downloads </div>
              <a href="image/j.pdf" class="btn">view</a>
            </div>
          </div>

          <div class="swiper-slide box">
            <!-- <div class="icons">
              <a href="#" class="fas fa-search"></a>
              <a href="#" class="fas fa-heart"></a>
              <a href="#" class="fas fa-eye"></a>
            </div> -->
            <div class="image">
              <img src="image/puu1.jpg" alt="" />
            </div>
            <div class="content">
              <h3>13.27 MB</h3>
              <div class="price">209,592 Downloads </div>
              <a href="image/ch.pdf" class="btn">view</a>
            </div>
          </div>

          <div class="swiper-slide box">
            <!-- <div class="icons">
              <a href="#" class="fas fa-search"></a>
              <a href="#" class="fas fa-heart"></a>
              <a href="#" class="fas fa-eye"></a>
            </div> -->
            <div class="image">
              <img src="image/puu2.jpg" alt="" />
            </div>
            <div class="content">
              <h3>6.23 MB</h3>
              <div class="price">188,168 Downloads</div>
              <a href="image/cc.pdf" class="btn">view</a>
            </div>
          </div>

          <div class="swiper-slide box">
            <!-- <div class="icons">
              <a href="#" class="fas fa-search"></a>
              <a href="#" class="fas fa-heart"></a>
              <a href="#" class="fas fa-eye"></a>
            </div> -->
            <div class="image">
              <img src="image/bbookk-12.jpg" alt="" />
            </div>
            <div class="content">
              <h3>714 KB</h3>
              <div class="price">87,991 Downloads </div>
              <a href="image/m.pdf" class="btn">view</a>
            </div>
          </div>
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </section>

    <!-- featured section ends -->

    
    <!-- newsletter section starts -->

    <section class="newsletter" id="newsletter">
      <form action="">
        <h3>Any suggestions</h3>
        <input
          type="email"
          name=""
          placeholder="enter your email"
          id=""
          class="box"
        />
        <input
          type="password"
          name=""
          placeholder=" enter your student id"
          id=""
          class="box"
        />
        <input
          type="text"
          name=""
          placeholder=" comment......"
          id=""
          class="boxx"
        />
        <input type="submit" value="Submit" class="btn" />
      </form>
    </section>

    <!-- newsletter section ends -->
    


    <!-- deal section starts  -->

    <section class="deal" id="deal">
      <div id="lhour" class="content">
        <h2><u>Library Hours & Holidays</u></h2>

        <div class="details">
          <address>
            <strong><u>General Section</u></strong>
          </address>
          <address>Sunday-Thrusday: 9am-5pm</address>
          <address>
            <strong><u>Reading & Reference Section</u></strong>
          </address>
          <address>Sunday-Thrusday: 9am-8pm</address>
          <address>Weekly Holiday: Friday & Saturday</address>
          <address>Govt Holiday: Closed</address>
        </div>
      </div>

      <div class="image">
        <img src="image/deal-img.jpg" alt="" />
      </div>
    </section>

    <!-- deal section ends -->

    <!-- reviews section starts  -->

    <section class="reviews" id="reviews">
      <h1 class="heading"><span>Library_authority</span></h1>

      <div class="swiper reviews-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide box">
            <img src="image/rk.jpg" alt="" />
            <h3>Dr.Md.Rezaul Karim</h3>

            <p>Email:karim@cuet.ac.bd</p>
            <p>Faculty of Engineering & Technology</p>
          </div>

          <div class="swiper-slide box">
            <img src="image/ms.png" alt="" />
            <h3>Dr. Mohammed Moshiul Hoque</h3>
            <p>Email:moshiul_240@cuet.ac.bd</p>
            <p>Professor, Dept. of Computer Science</p>
          </div>

          <div class="swiper-slide box">
            <img src="image/rr.jpg" alt="" />
            <h3>Dr.Md.Rabiul Alam</h3>
            <p>Email:rabiulalam@cuet.ac.bd</p>
            <p>Professor, Dept. of Computer Science</p>
          </div>
          <div class="swiper-slide box">
            <img src="image/rz.jpg" alt="" />
            <h3>Md. Atiqul Islam Rizvi</h3>
            <p>Email:atiqul.rizvi@cuet.ac.bd</p>
            <p>Lecturer, Dept. of Computer Science</p>
          </div>

          <div class="swiper-slide box">
            <img src="image/a.jpg" alt="" />
            <h3>Dr. Asaduzzaman</h3>
            <p>Email:asad@cuet.ac.bd</p>
            <p>Professor, Dept. of Computer Science</p>
          </div>

          <div class="swiper-slide box">
            <img src="image/d.jpg" alt="" />
            <h3>Dr. Kaushik Deb</h3>
            <p>Email:debkaushik99@cuet.ac.bd</p>
            <p>Professor, Dept. of Computer Science</p>
          </div>
        </div>
      </div>
    </section>

    <!-- deal section starts  -->

    <!-- <section class="deal">
      <div class="content">
        <h3>deal of the day</h3>
        <h1>upto 50% off</h1>
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde
          perspiciatis in atque dolore tempora quaerat at fuga dolorum natus
          velit.
        </p>
        <a href="#" class="btn">shop now</a>
      </div>

      <div class="image">
        <img src="image/deal-img.jpg" alt="" />
      </div>
    </section> -->

    <!-- deal section ends -->

    <!-- reviews section starts  -->

    <!-- <section class="reviews" id="reviews">
      <h1 class="heading"><span>client's reviews</span></h1>

      <div class="swiper reviews-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide box">
            <img src="image/pic-1.png" alt="" />
            <h3>john deo</h3>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Aspernatur nihil ipsa placeat. Aperiam at sint, eos ex similique
              facere hic.
            </p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
          </div>

          <div class="swiper-slide box">
            <img src="image/pic-2.png" alt="" />
            <h3>john deo</h3>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Aspernatur nihil ipsa placeat. Aperiam at sint, eos ex similique
              facere hic.
            </p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
          </div>

          <div class="swiper-slide box">
            <img src="image/pic-3.png" alt="" />
            <h3>john deo</h3>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Aspernatur nihil ipsa placeat. Aperiam at sint, eos ex similique
              facere hic.
            </p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
          </div>
          <div class="swiper-slide box">
            <img src="image/pic-4.png" alt="" />
            <h3>john deo</h3>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Aspernatur nihil ipsa placeat. Aperiam at sint, eos ex similique
              facere hic.
            </p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
          </div>

          <div class="swiper-slide box">
            <img src="image/pic-5.png" alt="" />
            <h3>john deo</h3>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Aspernatur nihil ipsa placeat. Aperiam at sint, eos ex similique
              facere hic.
            </p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
          </div>

          <div class="swiper-slide box">
            <img src="image/pic-6.png" alt="" />
            <h3>john deo</h3>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Aspernatur nihil ipsa placeat. Aperiam at sint, eos ex similique
              facere hic.
            </p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <!-- reviews section ends -->

    <!-- blogs section starts  -->

    <section class="blogs" id="blogs">
      <h1 class="heading"><span>E_Journals</span></h1>

      <div class="swiper blogs-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide box">
            <div class="image">
              <img src="image/oxford.jpg" style="width: 100%" alt="" />
            </div>
            <div class="content">
              <h3>OXFORD UNIVERSITY PRESS</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio,
                odio.
              </p>
              <a href="https://academic.oup.com/journals" class="btn">Visit</a>
            </div>
          </div>

          <div class="swiper-slide box">
            <div class="image">
              <img src="image/ieee.jpeg" alt="" />
            </div>
            <div class="content">
              <h3>IEEE</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio,
                odio.
              </p>
              <a href="https://www.ieee.org/" class="btn">Vsit</a>
            </div>
          </div>

          <div class="swiper-slide box">
            <div class="image">
              <img src="image/sssp.jpg" alt="" />
            </div>
            <div class="content">
              <h3>Springer</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio,
                odio.
              </p>
              <a
                href="https://www.springernature.com/gp/products/journals"
                class="btn"
                >Visit</a
              >
            </div>
          </div>

          <div class="swiper-slide box">
            <div class="image">
              <img src="image/ASCE.jpg" alt="" />
            </div>
            <div class="content">
              <h3>ASCE</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio,
                odio.
              </p>
              <a href="https://www.asce.org/" class="btn">Visit</a>
            </div>
          </div>

          <div class="swiper-slide box">
            <div class="image">
              <img src="image/ASME.jpg" alt="" />
            </div>
            <div class="content">
              <h3>ASME</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio,
                odio.
              </p>
              <a href="https://www.asme.org/" class="btn">Visit</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- blogs section ends -->

    <!-- footer section starts  -->

    <section class="footer">
      <div class="box-container">
        <div class="box">
          <h3>our locations</h3>

          <a
            href="https://www.google.com/maps/place/CUET+Central+Library/@22.4624529,91.9731303,15z/data=!4m5!3m4!1s0x0:0xbdefbf0fb257d1a1!8m2!3d22.462467!4d91.9732615"
          >
            <i class="fas fa-map-marker-alt"></i>Central Library, CUET</a
          >
        </div>

        <div class="box">
          <h3>quick links</h3>
          <a href="#home"> <i class="fas fa-arrow-right"></i> home </a>
          <a href="about.html"> <i class="fas fa-arrow-right"></i> about </a>
          <a href="#featured">
            <i class="fas fa-arrow-right"></i> Available_books
          </a>
          <a href="#arrivals"> <i class="fas fa-arrow-right"></i> Arrivals </a>
          <a href="#reviews">
            <i class="fas fa-arrow-right"></i> Library Authority
          </a>
          <a href="#blogs"> <i class="fas fa-arrow-right"></i> E-Resources </a>
        </div>

        <div class="box">
          <h3>contact info</h3>
          <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
          <a href="#"> <i class="fas fa-phone"></i> +880-31-714946 </a>
          <a href="#">
            <i class="fas fa-envelope"></i> Central_library@cuet.ac.bd
          </a>
          <a href="https://mapcarta.com/N4634235836/Map">
            <img src="image/mpp.png" class="map" alt=""
          /></a>
        </div>
      </div>

      <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
      </div>

      <div class="credit">Central Library, CUET | all rights reserved!</div>
    </section>

    <div class="loader-container">
      <img src="image/loader-img.gif" alt="" />
    </div>

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- -- custom js file link  -- -->
    <script src="js/script.js"></script>
  </body>
</html>
