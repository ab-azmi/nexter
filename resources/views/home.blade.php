<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nexter &ndash; your home, your freedom</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,400i|Nunito:300,300i">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <link rel="shortcut icon" type="image/png" href="/img/favicon.png">
</head>
<body class="container">
    <div class="sidebar">
        <button class="nav__btn"></button>
    </div>
    <header class="header">
        <img src="/img/logo.png" alt="logo" class="header__logo">
        <h3 class="heading-3">Your own home:</h3>
        <h1 class="heading-1">The Ultimate Personal Freedom</h1>
        <button class="btn header__btn">View Our Properties</button>
        <div class="header__seenon-text">Seen on</div>
        <div class="header__seenon-logos">
            <img src="/img/logo-bbc.png" alt="">
            <img src="/img/logo-forbes.png" alt="">
            <img src="/img/logo-techcrunch.png" alt="">
            <img src="/img/logo-bi.png" alt="">
        </div>
    </header>
    <div class="realtors">
        <h3 class="heading-3">Top 3 Realtors</h3>
        <div class="realtors__list">
            <img src="/img/realtor-1.jpeg" alt="" class="realtors__img">
            <div class="realtors__details">
                <h4 class="heading-4 heading-4--light">Erik Feinmann</h4>
                <p class="realtors__sold">254 houses sold</p>
            </div>

            <img src="/img/realtor-2.jpeg" alt="" class="realtors__img">
            <div class="realtors__details">
                <h4 class="heading-4 heading-4--light">Peter Parker</h4>
                <p class="realtors__sold">169 houses sold</p>
            </div>

            <img src="/img/realtor-3.jpeg" alt="" class="realtors__img">
            <div class="realtors__details">
                <h4 class="heading-4 heading-4--light">Stephen Hulk</h4>
                <p class="realtors__sold">333 houses sold</p>
            </div>
        </div>
    </div>
    <div class="features">
        <div class="feature">
            <svg class="feature__icon">
                <use xlink:href="/img/sprite.svg#icon-global"></use>
            </svg>
            <h4 class="heading-4 heading-4--dark">World's best luxury homes</h4>
            <p class="feature__text">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur distinctio necessitatibus pariatur voluptatibus.
            </p>
        </div>
        <div class="feature">
            <svg class="feature__icon">
                <use xlink:href="/img/sprite.svg#icon-trophy"></use>
            </svg>
            <h4 class="heading-4 heading-4--dark">Only the best properties</h4>
            <p class="feature__text">
                Voluptatum mollitia quae. Vero ipsum sapiente molestias accusamus rerum sed a eligendi aut quia.
            </p>
        </div>
        <div class="feature">
            <svg class="feature__icon">
                <use xlink:href="/img/sprite.svg#icon-map-pin"></use>
            </svg>
            <h4 class="heading-4 heading-4--dark">All homes in top locations</h4>
            <p class="feature__text">
               Tenetur distinctio necessitatibus pariatur voluptatibus quidem consequatur harum.
            </p>
        </div>
        <div class="feature">
            <svg class="feature__icon">
                <use xlink:href="/img/sprite.svg#icon-key"></use>
            </svg>
            <h4 class="heading-4 heading-4--dark">New home in one week</h4>
            <p class="feature__text">
                Vero ipsum sapiente molestias accusamus rerum. Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            </p>
        </div>
        <div class="feature">
            <svg class="feature__icon">
                <use xlink:href="/img/sprite.svg#icon-presentation"></use>
            </svg>
            <h4 class="heading-4 heading-4--dark">Top 1% realtors</h4>
            <p class="feature__text">
                Quidem consequatur harum, voluptatum mollitia quae. Tenetur distinctio necessitatibus pariatur voluptatibus.
            </p>
        </div>
        <div class="feature">
            <svg class="feature__icon">
                <use xlink:href="/img/sprite.svg#icon-lock"></use>
            </svg>
            <h4 class="heading-4 heading-4--dark">Secure payments on nexter</h4>
            <p class="feature__text">
               Pariatur voluptatibus quidem consequatur harum, voluptatum mollitia quae.
            </p>
        </div>
    </div>
    <div class="story__pictures">
        <img src="/img/story-1.jpeg" alt="couple" class="story__img--1">
        <img src="/img/story-2.jpeg" alt="new house" class="story__img--2">
    </div>
    <div class="story__content">
        <h3 class="heading-3 mb-sm">Happy Customers</h3>
        <h2 class="heading-2 heading-2--dark mb-md">
            &ldquo; The best decision of our live &rdquo;
        </h2>
        <p class="story__text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae distinctio explicabo provident, illum voluptates dignissimos eveniet repellat, vitae atque aliquam incidunt neque! Corporis nemo a vero enim, similique est eaque!
        </p>
        <button class="btn">Find your own home</button>
    </div>
    <div class="homes">
        <div class="home">
            <img src="/img/house-1.jpeg" alt="hpuse 1" class="home__img">
            <svg class="home__like">
                <use xlink:href="/img/sprite.svg#icon-heart-full"></use>
            </svg>
            <h5 class="home__name">Bautiful Family House</h5>
            <div class="home__location">
                <svg class="home__like">
                    <use xlink:href="/img/sprite.svg#icon-map-pin"></use>
                </svg>
                <p>USA</p>
            </div>
            <div class="home__rooms">
                <svg class="home__like">
                    <use xlink:href="/img/sprite.svg#icon-profile-male"></use>
                </svg>
                <p>5 Rooms</p>
            </div>
            <div class="home__area">
                <svg class="home__like">
                    <use xlink:href="/img/sprite.svg#icon-expand"></use>
                </svg>
                <p>669 m<sup>2</sup></p>
            </div>
            <div class="home__price">
                <svg class="home__like">
                    <use xlink:href="/img/sprite.svg#icon-key"></use>
                </svg>
                <p>$1,200,000</p>
            </div>
            <button class="btn home__btn">contact realtors</button>
        </div>
        <div class="home">
            <img src="/img/house-2.jpeg" alt="hpuse 2" class="home__img">
            <svg class="home__like">
                <use xlink:href="/img/sprite.svg#icon-heart-full"></use>
            </svg>
            <h5 class="home__name">The Worst House</h5>
            <div class="home__location">
                <svg class="home__like">
                    <use xlink:href="/img/sprite.svg#icon-map-pin"></use>
                </svg>
                <p>Vietnam</p>
            </div>
            <div class="home__rooms">
                <svg class="home__like">
                    <use xlink:href="/img/sprite.svg#icon-profile-male"></use>
                </svg>
                <p>2 Rooms</p>
            </div>
            <div class="home__area">
                <svg class="home__like">
                    <use xlink:href="/img/sprite.svg#icon-expand"></use>
                </svg>
                <p>120 m<sup>2</sup></p>
            </div>
            <div class="home__price">
                <svg class="home__like">
                    <use xlink:href="/img/sprite.svg#icon-key"></use>
                </svg>
                <p>$400,000</p>
            </div>
            <button class="btn home__btn">contact realtors</button>
        </div>
        <div class="home">
            <img src="/img/house-3.jpeg" alt="hpuse 3" class="home__img">
            <svg class="home__like">
                <use xlink:href="/img/sprite.svg#icon-heart-full"></use>
            </svg>
            <h5 class="home__name">Modern Expensive Shit</h5>
            <div class="home__location">
                <svg class="home__like">
                    <use xlink:href="/img/sprite.svg#icon-map-pin"></use>
                </svg>
                <p>Finland</p>
            </div>
            <div class="home__rooms">
                <svg class="home__like">
                    <use xlink:href="/img/sprite.svg#icon-profile-male"></use>
                </svg>
                <p>8 Rooms</p>
            </div>
            <div class="home__area">
                <svg class="home__like">
                    <use xlink:href="/img/sprite.svg#icon-expand"></use>
                </svg>
                <p>1111 m<sup>2</sup></p>
            </div>
            <div class="home__price">
                <svg class="home__like">
                    <use xlink:href="/img/sprite.svg#icon-key"></use>
                </svg>
                <p>$3,200,000</p>
            </div>
            <button class="btn home__btn">contact realtors</button>
        </div>
        <div class="home">
            <img src="/img/house-4.jpeg" alt="hpuse 4" class="home__img">
            <svg class="home__like">
                <use xlink:href="/img/sprite.svg#icon-heart-full"></use>
            </svg>
            <h5 class="home__name">House full of bitches</h5>
            <div class="home__location">
                <svg class="home__like">
                    <use xlink:href="/img/sprite.svg#icon-map-pin"></use>
                </svg>
                <p>China</p>
            </div>
            <div class="home__rooms">
                <svg class="home__like">
                    <use xlink:href="/img/sprite.svg#icon-profile-male"></use>
                </svg>
                <p>12 Rooms</p>
            </div>
            <div class="home__area">
                <svg class="home__like">
                    <use xlink:href="/img/sprite.svg#icon-expand"></use>
                </svg>
                <p>2200 m<sup>2</sup></p>
            </div>
            <div class="home__price">
                <svg class="home__like">
                    <use xlink:href="/img/sprite.svg#icon-key"></use>
                </svg>
                <p>$9,200,000</p>
            </div>
            <button class="btn home__btn">contact realtors</button>
        </div>
        <div class="home">
            <img src="/img/house-5.jpeg" alt="hpuse 5" class="home__img">
            <svg class="home__like">
                <use xlink:href="/img/sprite.svg#icon-heart-full"></use>
            </svg>
            <h5 class="home__name">Childish House</h5>
            <div class="home__location">
                <svg class="home__like">
                    <use xlink:href="/img/sprite.svg#icon-map-pin"></use>
                </svg>
                <p>Nigeria</p>
            </div>
            <div class="home__rooms">
                <svg class="home__like">
                    <use xlink:href="/img/sprite.svg#icon-profile-male"></use>
                </svg>
                <p>6 Rooms</p>
            </div>
            <div class="home__area">
                <svg class="home__like">
                    <use xlink:href="/img/sprite.svg#icon-expand"></use>
                </svg>
                <p>1200 m<sup>2</sup></p>
            </div>
            <div class="home__price">
                <svg class="home__like">
                    <use xlink:href="/img/sprite.svg#icon-key"></use>
                </svg>
                <p>$300,000</p>
            </div>
            <button class="btn home__btn">contact realtors</button>
        </div>
        <div class="home">
            <img src="/img/house-6.jpeg" alt="hpuse 6" class="home__img">
            <svg class="home__like">
                <use xlink:href="/img/sprite.svg#icon-heart-full"></use>
            </svg>
            <h5 class="home__name">Whatever House</h5>
            <div class="home__location">
                <svg class="home__like">
                    <use xlink:href="/img/sprite.svg#icon-map-pin"></use>
                </svg>
                <p>UK</p>
            </div>
            <div class="home__rooms">
                <svg class="home__like">
                    <use xlink:href="/img/sprite.svg#icon-profile-male"></use>
                </svg>
                <p>2 Rooms</p>
            </div>
            <div class="home__area">
                <svg class="home__like">
                    <use xlink:href="/img/sprite.svg#icon-expand"></use>
                </svg>
                <p>469 m<sup>2</sup></p>
            </div>
            <div class="home__price">
                <svg class="home__like">
                    <use xlink:href="/img/sprite.svg#icon-key"></use>
                </svg>
                <p>$900,000</p>
            </div>
            <button class="btn home__btn">contact realtors</button>
        </div>
    </div>
    <section class="gallery">
        <figure class="gallery__item gallery__item--1"><img src="/img/gal-1.jpeg" alt="img 1" class="gallery__img"></figure>
        <figure class="gallery__item gallery__item--2"><img src="/img/gal-2.jpeg" alt="img 2" class="gallery__img"></figure>
        <figure class="gallery__item gallery__item--3"><img src="/img/gal-3.jpeg" alt="img 3" class="gallery__img"></figure>
        <figure class="gallery__item gallery__item--4"><img src="/img/gal-4.jpeg" alt="img 4" class="gallery__img"></figure>
        <figure class="gallery__item gallery__item--5"><img src="/img/gal-5.jpeg" alt="img 5" class="gallery__img"></figure>
        <figure class="gallery__item gallery__item--6"><img src="/img/gal-6.jpeg" alt="img 6" class="gallery__img"></figure>
        <figure class="gallery__item gallery__item--7"><img src="/img/gal-7.jpeg" alt="img 7" class="gallery__img"></figure>
        <figure class="gallery__item gallery__item--8"><img src="/img/gal-8.jpeg" alt="img 8" class="gallery__img"></figure>
        <figure class="gallery__item gallery__item--9"><img src="/img/gal-9.jpeg" alt="img 9" class="gallery__img"></figure>
        <figure class="gallery__item gallery__item--10"><img src="/img/gal-10.jpeg" alt="img 10" class="gallery__img"></figure>
        <figure class="gallery__item gallery__item--11"><img src="/img/gal-11.jpeg" alt="img 11" class="gallery__img"></figure>
        <figure class="gallery__item gallery__item--12"><img src="/img/gal-12.jpeg" alt="img 12" class="gallery__img"></figure>
        <figure class="gallery__item gallery__item--13"><img src="/img/gal-13.jpeg" alt="img 13" class="gallery__img"></figure>
        <figure class="gallery__item gallery__item--14"><img src="/img/gal-14.jpeg" alt="img 14" class="gallery__img"></figure>
    </section>
    <footer class="footer">
        <ul class="nav">
            <li class="nav__item"><a href="#" class="nav__link">Find your dream house</a></li>
            <li class="nav__item"><a href="#" class="nav__link">Request proposal</a></li>
            <li class="nav__item"><a href="#" class="nav__link">Download Home planner</a></li>
            <li class="nav__item"><a href="#" class="nav__link">Contact</a></li>
            <li class="nav__item"><a href="#" class="nav__link">Submit your property</a></li>
            <li class="nav__item"><a href="#" class="nav__link">Come work with us</a></li>
        </ul>
        <p class="copyright">
            &copy; Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla corporis rerum minima culpa illum odio, quae quos illo perspiciatis. Doloribus eaque architecto eos neque? Recusandae repellendus qui iste necessitatibus excepturi!
        </p>
    </footer>
</body>
</html>