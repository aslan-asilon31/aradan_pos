<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="{{ asset('') }}frontend/assets/img/favicon.png" type="image/x-icon">

    <!--=============== REMIX ICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{ asset('') }}frontend/assets/css/styles.css">

    <title>Ogani</title>


    <style>
    
        .search-product{
            width:100%;
        }
        
        input[type="text"],
        textarea {
            border: none;
            outline: none !important;
            border-bottom: 1px solid #ccc; /* You can adjust the color and thickness of the outline */
        }

        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

            /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

            /* The Close Button */
            .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            }

            .close:hover,
            .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;


        }
</style>


</head>

<body>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>

    <form action="product_search.html">
        <label for="">Search Product : </label>
        <input type="" class="search-product" name="search-product" value="" placeholder="Search Product ...">
        <button type="submit">Search</button>        
    </form>
  </div>

</div>

    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">
                <i class="ri-leaf-line nav__logo-icon"></i> Ogani
            </a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#home" class="nav__link active-link">Home</a>
                    </li>
                    <li class="nav__item">
                        <a href="#about" class="nav__link">About</a>
                    </li>
                    <li class="nav__item">
                        <a href="#products" class="nav__link">Products</a>
                    </li>
                    <li class="nav__item">
                        <a href="#faqs" class="nav__link">FAQs</a>
                    </li>
                    <li class="nav__item">
                        <a href="#contact" class="nav__link">Contact Us</a>
                    </li>
                    <li class="nav__item before_login" >
                        <div class="profile">
                            <div class="user">
                                <h3 id="dropdown-profile-name"> <span id="dropdown-profile-name"></span> </h3>
                                <p class="" ></p>
                            </div>
                            <div class="img-box">
                                <img src="{{ asset('avatar-3d/anonymous.png') }}" alt="some user image">
                            </div>
                        </div>
                        <div class="menu">
                            <ul>
                                <li><a href="/login-new"><i class="ph-bold ph-user"></i>&nbsp;Login</a></li>
                                <li><a href="/register"><i class="ph-bold ph-envelope-simple"></i>&nbsp;Register</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav__item">
                        <i class="ri-file-search-line" id="myBtn"></i>
                    </li>
                    

                </ul>

                <div class="nav__close" id="nav-close">
                    <i class="ri-close-line"></i>
                </div>
            </div>

            <div class="nav__btns">
                <!-- Theme change button -->
                <i class="ri-moon-line change-theme" id="theme-button"></i>

                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-menu-line"></i>
                </div>
            </div>
        </nav>
    </header>

    <main class="main">
        <!--==================== HOME ====================-->
        <section class="home" id="home">
            <div class="home__container container grid">
                <img src="{{ asset('') }}frontend/assets/img/home.png" alt="" class="home__img">

                <div class="home__data">
                    <h1 class="home__title">
                        Plants will make <br> your life better
                    </h1>
                    <p class="home__description">
                        Create incredible plant design for your offices or apastaments.
                        Add fresness to your new ideas.
                    </p>
                    <a href="#about" class="button button--flex">
                        Explore <i class="ri-arrow-right-down-line button__icon"></i>
                    </a>
                </div>

                <div class="home__social">
                    <span class="home__social-follow">Follow Us</span>

                    <div class="home__social-links">
                        <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
                            <i class="ri-facebook-fill"></i>
                        </a>
                        <a href="https://www.instagram.com/" target="_blank" class="home__social-link">
                            <i class="ri-instagram-line"></i>
                        </a>
                        <a href="https://twitter.com/" target="_blank" class="home__social-link">
                            <i class="ri-twitter-fill"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== ABOUT ====================-->
        <section class="about section container" id="about">
            <div class="about__container grid">
                <img src="{{ asset('') }}frontend/assets/img/about.png" alt="" class="about__img">

                <div class="about__data">
                    <h2 class="section__title about__title">
                        Who we really are & <br> why choose us
                    </h2>

                    <p class="about__description">
                        We have over 4000+ unbiased reviews and our customers
                        trust our plant process and delivery service every time
                    </p>

                    <div class="about__details">
                        <p class="about__details-description">
                            <i class="ri-checkbox-fill about__details-icon"></i>
                            We always deliver on time.
                        </p>

                        <p class="about__details-description">
                            <i class="ri-checkbox-fill about__details-icon"></i>
                            We give you guides to protect and care for your plants.
                        </p>

                        <p class="about__details-description">
                            <i class="ri-checkbox-fill about__details-icon"></i>
                            We always come over for a check-up after sale.
                        </p>

                        <p class="about__details-description">
                            <i class="ri-checkbox-fill about__details-icon"></i>
                            100% money back guaranteed.
                        </p>
                    </div>

                    <a href="#" class="button--link button--flex">
                        Shop Now <i class="ri-arrow-right-down-line button__icon"></i>
                    </a>
                </div>
            </div>
        </section>

        <!--==================== STEPS ====================-->
        <section class="steps section container">
            <div class="steps__bg">
                <h2 class="section__title-center steps__title">
                    Steps to start your <br> plants off right
                </h2>

                <div class="steps__container grid">
                    <div class="steps__card">
                        <div class="steps__card-number">01</div>
                        <h3 class="steps__card-title">Choose Plant</h3>
                        <p class="steps__card-description">
                            We have several varieties plants you can choose from.
                        </p>
                    </div>

                    <div class="steps__card">
                        <div class="steps__card-number">02</div>
                        <h3 class="steps__card-title">Place an order</h3>
                        <p class="steps__card-description">
                            Once your order is set, we move to the next step which is the shipping.
                        </p>
                    </div>

                    <div class="steps__card">
                        <div class="steps__card-number">03</div>
                        <h3 class="steps__card-title">Get plants delivered</h3>
                        <p class="steps__card-description">
                            Our delivery process is easy, you receive the plant direct to your door.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== PRODUCTS ====================-->
        <section class="product section container" id="products">
            <h2 class="section__title-center">
                Check out our <br> products
            </h2>

            <p class="product__description">
                Here are some selected plants from our showroom, all are in excellent
                shape and has a long life span. Buy and enjoy best quality.
            </p>

            <div class="product__container grid">
                <article class="product__card">
                    <div class="product__circle"></div>

                    <img src="{{ asset('') }}frontend/assets/img/product1.png" alt="" class="product__img">

                    <h3 class="product__title">Cacti Plant</h3>
                    <span class="product_price">$19.99</span>

                    <button class="button--flex product__button">
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </article>

                <article class="product__card">
                    <div class="product__circle"></div>

                    <img src="{{ asset('') }}frontend/assets/img/product2.png" alt="" class="product__img">

                    <h3 class="product__title">Cactus Plant</h3>
                    <span class="product_price">$11.99</span>

                    <button class="button--flex product__button">
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </article>

                <article class="product__card">
                    <div class="product__circle"></div>

                    <img src="{{ asset('') }}frontend/assets/img/product3.png" alt="" class="product__img">

                    <h3 class="product__title">Aloe Vera Plant</h3>
                    <span class="product_price">$7.99</span>

                    <button class="button--flex product__button">
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </article>

                <article class="product__card">
                    <div class="product__circle"></div>

                    <img src="{{ asset('') }}frontend/assets/img/product4.png" alt="" class="product__img">

                    <h3 class="product__title">Succulent Plant</h3>
                    <span class="product_price">$5.99</span>

                    <button class="button--flex product__button">
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </article>

                <article class="product__card">
                    <div class="product__circle"></div>

                    <img src="{{ asset('') }}frontend/assets/img/product5.png" alt="" class="product__img">

                    <h3 class="product__title">Succulent Plant</h3>
                    <span class="product_price">$10.99</span>

                    <button class="button--flex product__button">
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </article>

                <article class="product__card">
                    <div class="product__circle"></div>

                    <img src="{{ asset('') }}frontend/assets/img/product6.png" alt="" class="product__img">

                    <h3 class="product__title">Green Plant</h3>
                    <span class="product_price">$8.99</span>

                    <button class="button--flex product__button">
                        <i class="ri-shopping-bag-line"></i>
                    </button>
                </article>
            </div>
        </section>

        <!--==================== QUESTIONS ====================-->
        <section class="questions section" id="faqs">
            <h2 class="section__title-center questions__title container">
                Some common questions <br> were often asked
            </h2>

            <div class="questions__container container grid">
                <div class="questions__group">
                    <div class="questions__item">
                        <header class="questions__header">
                            <i class="ri-add-line questions__icon"></i>
                            <h3 class="questions__item-title">
                                My flowers are falling off or dying?
                            </h3>
                        </header>

                        <div class="questions__content">
                            <p class="questions__description">
                                Plants are easy way to add color energy and transform your
                                space but which planet is for you. Choosing the right plant.
                            </p>
                        </div>
                    </div>

                    <div class="questions__item">
                        <header class="questions__header">
                            <i class="ri-add-line questions__icon"></i>
                            <h3 class="questions__item-title">
                                What causes leaves to become pale?
                            </h3>
                        </header>

                        <div class="questions__content">
                            <p class="questions__description">
                                Plants are easy way to add color energy and transform your
                                space but which planet is for you. Choosing the right plant.
                            </p>
                        </div>
                    </div>

                    <div class="questions__item">
                        <header class="questions__header">
                            <i class="ri-add-line questions__icon"></i>
                            <h3 class="questions__item-title">
                                What causes brown crispy leaves?
                            </h3>
                        </header>

                        <div class="questions__content">
                            <p class="questions__description">
                                Plants are easy way to add color energy and transform your
                                space but which planet is for you. Choosing the right plant.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="questions__group">
                    <div class="questions__item">
                        <header class="questions__header">
                            <i class="ri-add-line questions__icon"></i>
                            <h3 class="questions__item-title">
                                How do i choose a plant?
                            </h3>
                        </header>

                        <div class="questions__content">
                            <p class="questions__description">
                                Plants are easy way to add color energy and transform your
                                space but which planet is for you. Choosing the right plant.
                            </p>
                        </div>
                    </div>

                    <div class="questions__item">
                        <header class="questions__header">
                            <i class="ri-add-line questions__icon"></i>
                            <h3 class="questions__item-title">
                                How do I change the pots?
                            </h3>
                        </header>

                        <div class="questions__content">
                            <p class="questions__description">
                                Plants are easy way to add color energy and transform your
                                space but which planet is for you. Choosing the right plant.
                            </p>
                        </div>
                    </div>

                    <div class="questions__item">
                        <header class="questions__header">
                            <i class="ri-add-line questions__icon"></i>
                            <h3 class="questions__item-title">
                                Why are gnats flying around my plant?
                            </h3>
                        </header>

                        <div class="questions__content">
                            <p class="questions__description">
                                Plants are easy way to add color energy and transform your
                                space but which planet is for you. Choosing the right plant.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== CONTACT ====================-->
        <section class="contact section container" id="contact">
            <div class="contact__container grid">
                <div class="contact__box">
                    <h2 class="section__title">
                        Reach out to us today <br> via any of the given <br> information
                    </h2>

                    <div class="contact__data">
                        <div class="contact__information">
                            <h3 class="contact__subtitle">Call us for instant support</h3>
                            <span class="contact__description">
                                <i class="ri-phone-line contact__icon"></i>
                                +999 888 777
                            </span>
                        </div>

                        <div class="contact__information">
                            <h3 class="contact__subtitle">Write us by mail</h3>
                            <span class="contact__description">
                                <i class="ri-mail-line contact__icon"></i>
                                user@email.com
                            </span>
                        </div>
                    </div>
                </div>

                <form action="" class="contact__form">
                    <div class="contact__inputs">
                        <div class="contact__content">
                            <input type="email" placeholder=" " class="contact__input">
                            <label for="" class="contact__label">Email</label>
                        </div>

                        <div class="contact__content">
                            <input type="text" placeholder=" " class="contact__input">
                            <label for="" class="contact__label">Subject</label>
                        </div>

                        <div class="contact__content contact__area">
                            <textarea name="message" placeholder=" " class="contact__input"></textarea>
                            <label for="" class="contact__label">Message</label>
                        </div>
                    </div>

                    <button class="button button--flex">
                        Send Message
                        <i class="ri-arrow-right-up-line button__icon"></i>
                    </button>
                </form>
            </div>
        </section>
    </main>

    <!--==================== FOOTER ====================-->
    <footer class="footer section">
        <div class="footer__container container grid">
            <div class="footer__content">
                <a href="#" class="footer__logo">
                    <i class="ri-leaf-line footer__logo-icon"></i> Ogani
                </a>

                <h3 class="footer__title">
                    Subscribe to our newsletter <br> to stay update
                </h3>

                <div class="footer__subscribe">
                    <input type="email" placeholder="Enter your email" class="footer__input">

                    <button class="button button--flex footer__button">
                        Subsribe
                        <i class="ri-arrow-right-up-line button__icon"></i>
                    </button>
                </div>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Our Address</h3>

                <ul class="footer__data">
                    <li class="footer__information">1234 - Peru</li>
                    <li class="footer__information">La Libertad - 43210</li>
                    <li class="footer__information">123-456-789</li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Contact Us</h3>

                <ul class="footer__data">
                    <li class="footer__information">+999 888 777</li>

                    <div class="footer__social">
                        <a href="https://www.facebook.com/" class="footer__social-link">
                            <i class="ri-facebook-fill"></i>
                        </a>
                        <a href="https://www.instagram.com/" class="footer__social-link">
                            <i class="ri-instagram-line"></i>
                        </a>
                        <a href="https://twitter.com/" class="footer__social-link">
                            <i class="ri-twitter-fill"></i>
                        </a>
                    </div>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">
                    We accept all credit cards
                </h3>

                <div class="footer__cards">
                    <img src="{{ asset('') }}frontend/assets/img/card1.png" alt="" class="footer__card">
                    <img src="{{ asset('') }}frontend/assets/img/card2.png" alt="" class="footer__card">
                    <img src="{{ asset('') }}frontend/assets/img/card3.png" alt="" class="footer__card">
                    <img src="{{ asset('') }}frontend/assets/img/card4.png" alt="" class="footer__card">
                </div>
            </div>
        </div>

        <p class="footer__copy">&#169; AslanAsilon. All rigths reserved</p>
    </footer>

    <!--=============== SCROLL UP ===============-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-fill scrollup__icon"></i>
    </a>

    <!--=============== SCROLL REVEAL ===============-->
    <script src="{{ asset('') }}frontend/assets/js/scrollreveal.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="{{ asset('') }}frontend/assets/js/main.js"></script>


    <script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</body>

</html>