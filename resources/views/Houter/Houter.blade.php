<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('storage/css/style.css') }}">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <title>Houter</title>
</head>
<body>
    @include('Houter.sections.SectionHeader')
    @include('Houter.sections.SectionList')
    @include('Houter.sections.SectionInfo')
    @include('Houter.sections.SectionAbout')
    @include('Houter.sections.SectionBlog')
    @include('Houter.sections.SectionFooter')

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script type="text/javascript">
        $('.slider-show-house').slick({
            dots: false,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            slidesToScroll: 1,
            centerMode: true,
            variableWidth: true,
            arrow: false,
        });
        $(".prev-btn").click(function () {
            $(".slider-show-house").slick("slickPrev");
        });

        $(".next-btn").click(function () {
            $(".slider-show-house").slick("slickNext");
        });
        $('.variable-width').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            centerMode: true,
            variableWidth: true,
            opacity: 0.5,
        });
        document.addEventListener("DOMContentLoaded", function() {
            showListHouse();
        });
        function showListHouse() {
            const x = document.getElementById("carouselExample");
            const y = document.getElementById("carouselExample2");
            const z = document.getElementById("carouselExample3");


            // If the radio button with id 'house-classify1' is checked
            if (document.getElementById("house-classify1").checked) {
                // Set the display of 'carouselExample' and 'slide-change' to 'block'
                x.style.display = "block";

                // Set the display of 'carouselExample2', 'carouselExample3', 'slide-change2', and 'slide-change3' to 'none'
                y.style.display = "none";
                z.style.display = "none";
            }

            if (document.getElementById("house-classify2").checked) {
                // Set the display of 'carouselExample2' and 'slide-change2' to 'block'
                y.style.display = "block";

                // Set the display of 'carouselExample', 'carouselExample3', 'slide-change', and 'slide-change3' to 'none'
                x.style.display = "none";
                z.style.display = "none";

            }

            if (document.getElementById("house-classify3").checked) {
                // Set the display of 'carouselExample3' and 'slide-change3' to 'block'
                z.style.display = "block";

                // Set the display of 'carouselExample', 'carouselExample2', 'slide-change', and 'slide-change2' to 'none'
                x.style.display = "none";
                y.style.display = "none";

            }
        }
    </script>
</body>
</html>
