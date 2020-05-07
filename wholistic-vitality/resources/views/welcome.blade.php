<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <section id="welcome">
            <div class="welcome-menu">
              <div class="logo">
                <img src="/img/logo.png" alt="logo">
              </div>
              <div class="menu">
                <div class="menu-title">
                  Menu
                </div>
                <ul class="links">
                  <li>
                    <a href="#">Menu</a>
                  </li>
                  <li>
                    <a href="#">Wait List</a>
                  </li>
                  <li>
                    <a href="#">Gift Cards</a>
                  </li>
                  <li>
                    <a href="#">Offers</a>
                  </li>
                </ul>
              </div>
              <div class="social-icons">
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
              </div>
              <div class="location">
                <div class="address">
                  1300 Bey Street, <br>
                  Miami, Florida 11367
                </div>
                <div class="phone-number">
                  <a href="tel:7182198652">718-219-8652</a>
                </div>
              </div>
            </div>
            <div class="welcome-jumbo">
              <div class="status">NEW</div>
              <h1>Wholistic Vitality</h1>
              <img class="wholistic" src="https://www.myhomevitality.com/wp-content/uploads/2017/10/24139166_10155261424437887_1324964857_o-2.png" class="wellbeing" alt="logo">
            </div>
          </section>
          <section id="information">
            <div class="health-image">
              <img src="img/bamboo.jpg" alt="">
            </div>
            <div class="info">
              <h2>Your Health is Your Wealth</h2>
              <div class="paragraphs">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem libero pariatur sit neque maiores minima quasi ab, alias quo tempora? Quaerat facilis, neque dolorum autem saepe quae quo non dignissimos.
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem libero pariatur sit neque maiores minima quasi ab, alias quo tempora? Quaerat facilis, neque dolorum autem saepe quae quo non dignissimos.
                </p>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem libero pariatur sit neque maiores minima quasi ab, alias quo tempora? Quaerat facilis, neque dolorum autem saepe quae quo non dignissimos.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem libero pariatur sit neque maiores minima quasi ab, alias quo tempora? Quaerat facilis, neque dolorum autem saepe quae quo non dignissimos.
              </p>
              </div>
              <a href="#" class="about-link">
                <span>Learn more about our services</span>
                <div class="circle-right">
                  <i class="fa fa-chevron-right" aria-hidden="true"></i>
                </div>
              </a>
            </div>
          </section>
          <section id="service-preview">
            <h2>We have everything you need to empower yourself</h2>
            <div class="button-rounded">
              View Services
            </div>
            <div class="service-slider">
              <div class="slide">
                <div class="background">
      
                </div>
                <div class="content">
                  <div class="service-title">
                    Nutrition
                  </div>
                  <p class="service-description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint consequuntur iure dolore ducimus nesciunt nihil nobis molestias velit voluptate est ipsam sed quod, provident voluptates iste voluptatibus omnis quae animi.
                  </p>
                </div>
                <div class="service-image">
                  <img src="https://www.myhomevitality.com/wp-content/uploads/2017/10/24139166_10155261424437887_1324964857_o-2.png" alt="Service">
                </div>
              </div>
              <div class="slide">
                <div class="background">
      
                </div>
                <div class="content">
                  <div class="service-title">
                    Nutrition
                  </div>
                  <p class="service-description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint consequuntur iure dolore ducimus nesciunt nihil nobis molestias velit voluptate est ipsam sed quod, provident voluptates iste voluptatibus omnis quae animi.
                  </p>
                </div>
                <div class="service-image">
                  <img src="https://www.myhomevitality.com/wp-content/uploads/2017/10/24139166_10155261424437887_1324964857_o-2.png" alt="Service">
                </div>
              </div>
              <div class="slide">
                <div class="background">
      
                </div>
                <div class="content">
                  <div class="service-title">
                    Nutrition
                  </div>
                  <p class="service-description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint consequuntur iure dolore ducimus nesciunt nihil nobis molestias velit voluptate est ipsam sed quod, provident voluptates iste voluptatibus omnis quae animi.
                  </p>
                </div>
                <div class="service-image">
                  <img src="https://www.myhomevitality.com/wp-content/uploads/2017/10/24139166_10155261424437887_1324964857_o-2.png" alt="Service">
                </div>
              </div>
              <div class="slide">
                <div class="background">
      
                </div>
                <div class="content">
                  <div class="service-title">
                    Nutrition
                  </div>
                  <p class="service-description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint consequuntur iure dolore ducimus nesciunt nihil nobis molestias velit voluptate est ipsam sed quod, provident voluptates iste voluptatibus omnis quae animi.
                  </p>
                </div>
                <div class="service-image">
                  <img src="https://www.myhomevitality.com/wp-content/uploads/2017/10/24139166_10155261424437887_1324964857_o-2.png" alt="Service">
                </div>
              </div>
              <div class="slide">
                <div class="background">
      
                </div>
                <div class="content">
                  <div class="service-title">
                    Nutrition
                  </div>
                  <p class="service-description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint consequuntur iure dolore ducimus nesciunt nihil nobis molestias velit voluptate est ipsam sed quod, provident voluptates iste voluptatibus omnis quae animi.
                  </p>
                </div>
                <div class="service-image">
                  <img src="https://www.myhomevitality.com/wp-content/uploads/2017/10/24139166_10155261424437887_1324964857_o-2.png" alt="Service">
                </div>
              </div>
            </div>
          </section>
          <!-- <script src="/js/dist/vendors~FirstComp.js"></script>
          <script src="/js/dist/FirstComp.js"></script>
          <script src="/js/dist/main.js"></script> -->
    </body>
</html>
