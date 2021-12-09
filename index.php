<html lang="en" dir="ltr">
<head>
    <meta charest="utf-8">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <title>Ceylon - Sri lankan travel guide website</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>
<body>
    <header>
        <a href="#" class="brand">CEYLON</a>
        <div class="menu-btn"></div>
        <div class="navigation">
            <div class="navigation-items">
                <a href="#">Home</a>
                <a href="#">Gallery</a>
                <a href="#">Explore</a>
                <a href="#">About</a>
                <a href="#">Market Place</a>
            </div>
        </div>
    </header>
<section class="home">
    <video class="video-slide active" src="images/1.mp4" autoplay muted loop></video>
    <video class="video-slide" src="images/2.mp4" autoplay muted loop></video>
    <video class="video-slide" src="images/3.mp4" autoplay muted loop></video>
    <video class="video-slide" src="images/4.mp4" autoplay muted loop></video>
    <video class="video-slide" src="images/5.mp4" autoplay muted loop></video>
    <div class="content active">
        <h1>Beautiful<br><span>Beaches</span></h1>
        <p>Sri Lanka is a beautiful island surrounded by oceans. It has some of the most beautiful beaches and is a major tourist attraction. A large number of foreigners come to Sri Lanka every year to surf, dive, see coral reefs and watch bluewales.</p>
        <a href="3">Read More</a>
    </div>
    <div class="content">
        <h1>Meditation<br><span>Centers</span></h1>
        <p>As Sri Lanka is a Buddhist country, meditation has a special place in the world. There are many advanced meditation techniques used in Sri Lanka. Another fascinating feature of foreigners.</p>
        <a href="3">Read More</a>
    </div>
    <div class="content">
        <h1>Beautiful<br><span>Destinations</span></h1>
        <p>Another interesting feature of Sri Lanka is the mountainous upcountry roads and the beautiful scenery on either side. It is very beautiful and attracts a lot of tourists.</p>
        <a href="3">Read More</a>
    </div>
    <div class="content">
        <h1>Beautiful<br><span>lakes</span></h1>
        <p>Sri Lanka has been a self-sufficient government since ancient times, a large number of lakes and rivers have been built throughout the country. These are of very ancient value and are believed to have been built about 1000 years ago.</p>
        <a href="3">Read More</a>
    </div>
    <div class="content">
        <h1>Adventure<br><span>Mountaineering</span></h1>
        <p>Sri Lanka consists of beautiful and large mountain ranges. Both locals and foreigners love to climb mountains in Sri Lanka. That's because of the ease and beauty of the place.</p>
        <a href="3">Read More</a>
    </div>
    <div class="media-icons">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-Youtube"></i></a>
    </div>
    <div class="slider-navigation">
        <div class="nav-btn active"></div>
        <div class="nav-btn"></div>
        <div class="nav-btn"></div>
        <div class="nav-btn"></div>
        <div class="nav-btn"></div>
    </div>
</section>
<script type="text/javascript">
    //javascript for responsive navigation menu
    const menuBtn = document.querySelector(".menu-btn");
    const navigation = document.querySelector(".navigation");

    menuBtn.addEventListener("click", () => {
        menuBtn.classList.toggle("active");
        navigation.classList.toggle("active");
    });

    //javascript for video slider navigation
    const btns = document.querySelectorAll(".nav-btn");
    const slides = document.querySelectorAll(".video-slide");
    const contents = document.querySelectorAll(".content");

    var sliderNav = function (manual) {
        btns.forEach((btn) => {
            btn.classList.remove("active");
        });

        slides.forEach((slide) => {
            slide.classList.remove("active");
        });

        contents.forEach((content) => {
            content.classList.remove("active");
        });

        btns[manual].classList.add("active");
        slides[manual].classList.add("active");
        contents[manual].classList.add("active");
    }

    btns.forEach((btn, i) => {
        btn.addEventListener("click", () => {
            sliderNav(i);
        });

    });
</script>

</body>
</html>

