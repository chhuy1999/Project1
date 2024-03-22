<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <title>Document</title>
</head>
<body>
<div class="slider slider-for">
    <div>
        <h3>1</h3>
    </div>
    <div>
        <h3>2</h3>
    </div>
    <div>
        <h3>3</h3>
    </div>
    <div>
        <h3>4</h3>
    </div>
    <div>
        <h3>5</h3>
    </div>
</div>
<div class="slider slider-nav">
    <div>
        <h3>1</h3>
    </div>
    <div>
        <h3>2</h3>
    </div>
    <div>
        <h3>3</h3>
    </div>
    <div>
        <h3>4</h3>
    </div>
    <div>
        <h3>5</h3>
    </div>
</div>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script type="text/javascript">
    // $(document).ready(function(){
    //         $('.your-class').slick({
    //             setting-name: setting-value
    //     });
    // });
    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: true,
        centerMode: true,
        focusOnSelect: true
    });
</script>
</body>
</html>
