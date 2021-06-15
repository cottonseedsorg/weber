<?php 
require('functions.php');
$iiip = get_client_ip();
$rrp = trim($iiip);
$url="http://ip-api.com/json/".$rrp;
    $ch=curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    $result=curl_exec($ch);
    curl_close($ch);
    $result=json_decode($result, true);
    $country='';
        $countryCode='';
        $region='';
        $regionName='';
        $city='';
        $zip='';
        $lat='';
        $lon='';
        $timezone='';
        $isp='';
        $org='';
        $as='';
        $ip='';
        
    if($result['status']='success'){
        $country=$result['country'];
        $countryCode=$result['countryCode'];
        $region=$result['region'];
        $regionName=$result['regionName'];
        $city=$result['city'];
        $zip=$result['zip'];
        $lat=$result['lat'];
        $lon=$result['lon'];
        $timezone=$result['timezone'];
        $isp=$result['isp'];
        $org=$result['org'];
        $as=$result['as'];
        $ip=$result['query'];
    }
    if ($countryCode=='IN'){
      $india='yes';
      $tag = 'Rs.';
      $static = '5000';
      $static_original = '8000';
      $dynamic = '10,000';
      $dynamic_original = '18,000';
      $ecom = '15,000';
      $ecom_original = '30,000';
    }else{
      $india='no';
      $tag = '$';
      $static = '68';
      $static_original = '109';
      $dynamic = '136';
      $dynamic_original = '245';
      $ecom = '204';
      $ecom_original = '409';
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Weber Websites</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description"
        content="Weber Websites by CottonSeeds . Most premium and best website builder ever , with dedicated developers . We make premium and quality websites for you at very low cost with a dedicated developer for you." />
    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="Weber Websites" />
    <!-- website name -->
    <meta property="og:site" content="https://weber.cottonseeds.org" />
    <!-- website link -->
    <meta property="og:title" content="Weber Websites" />
    <!-- title shown in the actual shared post -->
    <meta property="og:description"
        content="Weber Websites by CottonSeeds . Most premium and best website builder ever , with dedicated developers . We make premium and quality websites for you at very low cost with a dedicated developer for you." />
    <!-- description shown in the actual shared post -->
    <meta property="og:image" content="weber-og.jpg" />
    <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="https://weber.cottonseeds.org/" />
    <!-- where do you want your post to link to -->
    <meta property="og:type" content="website" />

    <meta name="keywords"
        content="Weber, cottonseeds, websites , features , weber graphics, weber websites, websites builders, graphic designers" />
    <!-- og end -->
    <!-- favicons  -->
    <link rel="apple-touch-icon" sizes="57x57" href="favicons/apple-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="60x60" href="favicons/apple-icon-60x60.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="favicons/apple-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="favicons/apple-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="favicons/apple-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="favicons/apple-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="favicons/apple-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="favicons/apple-icon-152x152.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-icon-180x180.png" />
    <link rel="icon" type="image/png" sizes="192x192" href="favicons/android-icon-192x192.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="96x96" href="favicons/favicon-96x96.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png" />
    <link rel="manifest" href="favicons/manifest.json" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="msapplication-TileImage" content="favicons/ms-icon-144x144.png" />
    <meta name="theme-color" content="#ffffff" />
    <!-- favicon end -->
    <link rel="shortcut icon" type="image/png" href="weber.png" />
    <meta name="theme-color" content="#3a9fff" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <!-- jest  -->
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
    <!-- <link rel='stylesheet'
        href='https://raw.githubusercontent.com/kartik-v/bootstrap-star-rating/master/css/star-rating.min.css'> -->
    <!-- jest  -->
    <link rel="stylesheet" href="./style.css?v=5" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-199370291-1">
    </script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-199370291-1');
    </script>
</head>

<body>
    <!-- partial:index.partial.html -->


    <header class="header">
        <div class="container header__container">
            <div class="header__logo">
                <img class="header__img" alt='weber websites logo' src="weber.svg" />
                <h1 class="header__title">
                    Weber<span class="header__light"> Websites</span>
                </h1>
            </div>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <div class="header__menu">
                <nav id="navbar" class="header__nav collapse">
                    <ul class="header__elenco">
                        <li class="header__el">
                            <a href="#" class="header__link scroll">Home</a>
                        </li>
                        <li class="header__el">
                            <a href="#pricing" class="header__link scroll">Pricing</a>
                        </li>
                        <li class="header__el">
                            <a href="#success" class="header__link scroll">Success stories</a>
                        </li>
                        <!-- <li class="header__el"><a href="#" class="header__link">Blog</a></li> -->
                        <li class="header__el">
                            <a href="#contact" class="header__link scroll">Contact us</a>
                        </li>
                        <li class="header__el header__el--blue">
                            <a href="#contact" class="btn btn--white scroll">Contact →</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <div class="sect sect--padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="site">
                        <h3 class="site__title">
                            Fast paced way to grow your business
                        </h3>
                        <h5 class="site__subtitle">Manage business like a boss</h5>
                        <div class="site__box-link">
                            <a class="btn btn--width" href="#pricing">Pricing</a>
                            <a class="btn btn--revert btn--width" href="graphics">Graphics</a>
                        </div>
                        <img class="site__img" alt='weber laptop website'
                            src="https://image.ibb.co/c7grYb/image3015.png" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sect sect--padding-bottom" id="pricing">
        <div class="container">
            <div class="row row--center">
                <h3 class="row__title">Pricing</h3>
                <h5 class="row__sub">What fits your business the best?</h5>
            </div>
            <div class="row row--center row--margin">
                <!-- firatn -->
                <div itemscope itemtype="https://schema.org/Product"
                    class="col-md-4 col-sm-4 price-box price-box--purple">
                    <div class="price-box__wrap">
                        <svg class="price-box__img static" itemprop="image" itemscope
                            itemtype="http://schema.org/image"></svg>
                        <h3 itemprop="name" class="price-box__title">Static</h3>
                        <p itemprop="description" class="price-box__people">Simple Front-End website</p>
                        <span>
                            <h2 class="price-box__discount" content="<?php echo $static; ?>">
                                <span itemprop="priceCurrency" class="price-box__dollar"><?php echo $tag; ?></span><span
                                    itemprop="price" content='<?php echo $static; ?>'><?php echo $static; ?></span><span
                                    class="price-box__discount--light">/lifetime</span>
                            </h2>
                            <h3 itemprop="highPrice" class="price-box__price">
                                <span itemprop="priceCurrency">
                                    <?php echo $tag; ?></span><?php echo $static_original; ?>
                            </h3>
                        </span>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="star-rating" itemprop="aggregateRating" itemscope
                                    itemtype="https://schema.org/AggregateRating">
                                    <span class="fa fa-star" data-rating="1"></span>
                                    <span class="fa fa-star" data-rating="2"></span>
                                    <span class="fa fa-star" data-rating="3"></span>
                                    <span class="fa fa-star" data-rating="4"></span>
                                    <span class="fa fa-star" data-rating="5"></span>
                                    <input itemprop="ratingValue" type="hidden" name="rating" class="rating-value"
                                        content='5' value="5">
                                    <span itemprop="reviewCount" content='89'></span>
                                    <span itemprop="brand" itemscope itemtype="http://schema.org/Brand">
                                        <span itemprop="name" content='weber'></span>
                                    </span>
                                    </span>
                                    <link itemprop="availability" href="https://schema.org/InStock" />
                                </div>
                            </div>
                        </div>
                        <p class="price-box__feat">Features</p>
                        <ul itemprop="features" class="price-box__list">
                            <li class="price-box__list-el">Dedicated Developer</li>
                            <li class="price-box__list-el">GIT Access</li>
                            <li class="price-box__list-el">Free Hosting</li>
                            <li class="price-box__list-el">
                                Free Cottonseeds.org Sub Domain
                            </li>
                        </ul>
                        <div class="price-box__btn">
                            <a class="btn btn--purple btn--width" href="#contact">Start now</a>
                        </div>
                        <!-- </div> -->
                    </div>
                </div>
                <!-- second -->
                <div itemscope itemtype="https://schema.org/Product"
                    class="col-md-4 col-sm-4 price-box price-box--violet">
                    <div class="price-box__wrap">
                        <svg class="price-box__img dynamic" itemprop="image" itemscope
                            itemtype="http://schema.org/image"></svg>
                        <h3 itemprop="name" class="price-box__title">Dynamic</h3>
                        <p itemprop="description" class="price-box__people">Great Dynamic Website</p>
                        <span>
                            <h2 class="price-box__discount">
                                <span itemprop="priceCurrency" class="price-box__dollar"><?php echo $tag; ?></span><span
                                    itemprop="price"
                                    content='<?php echo $dynamic; ?>'><?php echo $dynamic; ?></span><span
                                    class="price-box__discount--light">/lifetime</span>
                            </h2>
                            <h3 itemprop="highPrice" class="price-box__price">
                                <span itemprop="priceCurrency">
                                    <?php echo $tag; ?></span><?php echo $dynamic_original; ?>
                            </h3>
                        </span>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="star-rating" itemprop="aggregateRating" itemscope
                                    itemtype="https://schema.org/AggregateRating">
                                    <span class="fa fa-star" data-rating="1"></span>
                                    <span class="fa fa-star" data-rating="2"></span>
                                    <span class="fa fa-star" data-rating="3"></span>
                                    <span class="fa fa-star" data-rating="4"></span>
                                    <span class="fa fa-star" data-rating="5"></span>
                                    <input itemprop="ratingValue" type="hidden" name="rating" class="rating-value"
                                        content='5' value="5">
                                    <span itemprop="reviewCount" content='89'></span>
                                    <span itemprop="brand" itemscope itemtype="http://schema.org/Brand">
                                        <span itemprop="name" content='weber'></span>
                                    </span>
                                    <link itemprop="availability" href="https://schema.org/InStock" />
                                </div>
                            </div>
                        </div>
                        <p class="price-box__feat">Features</p>
                        <ul itemprop="features" class="price-box__list">
                            <li class="price-box__list-el">Dedicated Developer</li>
                            <li class="price-box__list-el">GIT Access</li>
                            <li class="price-box__list-el">Backend Technologies</li>
                            <li class="price-box__list-el">
                                Free Cottonseeds.org Sub Domain
                            </li>
                            <li class="price-box__list-el">
                                Free Maintanance for 6 months
                            </li>
                        </ul>
                        <div class="price-box__btn">
                            <a class="btn btn--violet btn--width" href="#contact">Start now</a>
                        </div>
                    </div>
                </div>

                <!-- terzo -->
                <div itemscope itemtype="https://schema.org/Product"
                    class="col-md-4 col-sm-4 price-box price-box--blue">
                    <div class="price-box__wrap">
                        <svg class="price-box__img ecommerce" itemprop="image" itemscope
                            itemtype="http://schema.org/image"></svg>
                        <h3 itemprop="name" class="price-box__title">E-commerce</h3>
                        <p itemprop="description" class="price-box__people">Powerful E-commerce Website</p>
                        <span>
                            <h2 class="price-box__discount">
                                <span itemprop="priceCurrency" class="price-box__dollar"><?php echo $tag; ?></span><span
                                    itemprop="price" content='<?php echo $ecom; ?>'><?php echo $ecom; ?></span><span
                                    class="price-box__discount--light">/lifetime</span>
                            </h2>
                            <h3 iitemprop="highPrice" class="price-box__price">
                                <span itemprop="priceCurrency"> <?php echo $tag; ?>
                                </span><?php echo $ecom_original; ?>
                            </h3>
                        </span>
                        <!-- rating- -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="star-rating" itemprop="aggregateRating" itemscope
                                    itemtype="https://schema.org/AggregateRating">
                                    <span class="fa fa-star" data-rating="1"></span>
                                    <span class="fa fa-star" data-rating="2"></span>
                                    <span class="fa fa-star" data-rating="3"></span>
                                    <span class="fa fa-star" data-rating="4"></span>
                                    <span class="fa fa-star" data-rating="5"></span>
                                    <input itemprop="ratingValue" type="hidden" name="rating" class="rating-value"
                                        content='5' value="5">
                                    <span itemprop="reviewCount" content='89'></span>
                                    <span itemprop="brand" itemscope itemtype="http://schema.org/Brand">
                                        <span itemprop="name" content='weber'></span>
                                    </span>
                                    <link itemprop="availability" href="https://schema.org/InStock" />
                                </div>
                            </div>
                        </div>
                        <!-- rating end  -->
                        <p class="price-box__feat">Features</p>
                        <ul itemprop="features" class="price-box__list">
                            <li class="price-box__list-el">Dedicated Developer</li>
                            <li class="price-box__list-el">GIT Access</li>
                            <li class="price-box__list-el">Backend Technologies</li>
                            <li class="price-box__list-el">
                                Free Cottonseeds.org Sub Domain
                            </li>
                            <li class="price-box__list-el">
                                Free Maintanance for 6 months
                            </li>
                            <li class="price-box__list-el">Admin Panel</li>
                            <li class="price-box__list-el">What else you need ?</li>
                        </ul>
                        <div class="price-box__btn">
                            <a class="btn btn--blue btn--width" href="#contact">Start now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sect sect--white" id="success">
        <div class="container">
            <div class="row">
                <h3 class="row__title">Success Stories</h3>
                <h5 class="row__sub">
                    Companies you <span class="row__sub--light">(will)</span> propably
                    know
                </h5>
            </div>
            <div class="row row--margin row--text-center">
                <div class="col-md-8 col-sm-10 col-xs-12 row__carousel">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="item__content">
                                    <!-- <img class="item__img" src="https://cdn.worldvectorlogo.com/logos/slack-1.svg" alt="Slack"> -->
                                    <span class="item__name">Wave Studio's</span>
                                    <p class="item__description">
                                        We almost reached every agency to minimize our budget ,
                                        but WEBER changed everything. It offered us all premium
                                        features , and lot's of guidance without any extra cost
                                        and i love it a lot. I'm still wondered that my website
                                        is far far expensive than my budget, that's really
                                        exellent.
                                    </p>
                                </div>
                                <div class="item__avatar"></div>
                                <!-- <p class="item__people">Josh Doe</p>
  <p class="item__occupation">Ceo of Google</p> -->
                            </div>

                            <div class="item">
                                <div class="item__content">
                                    <!-- <img class="item__img" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2d/Google-favicon-2015.png/150px-Google-favicon-2015.png" alt="Google"> -->
                                    <span class="item__name">PlanCell</span>
                                    <p class="item__description">
                                        Dedicated developer for this price range is really
                                        awesome. They are very polite and very talented . Sorry
                                        for struggling you for repeated changes, i actually
                                        unstable in decision making and really thanks a lot for
                                        bearing us. I even learn't a lot of technical things
                                        from you. Thanks Weber.
                                    </p>
                                </div>
                                <div class="item__avatar"></div>
                                <!-- <p class="item__people">Mary Tompson</p>
  <p class="item__occupation">Ceo of Dribbble</a> -->
                            </div>

                            <div class="item">
                                <div class="item__content">
                                    <!-- <img class="item__img" src="https://www.hrexaminer.com/wp-content/uploads/2016/10/2016-10-11-hrexaminer-stackoverflow-6-xxl-sq-250px.png" alt="Stackoverflow"> -->
                                    <span class="item__name">Skydi</span>
                                    <p class="item__description">
                                        I will definetely consider donating you further if i
                                        succeed in my startup. You supported and guided us even
                                        after finishing the project. All the best for you and i
                                        recommend only you for everyone.
                                    </p>
                                </div>
                                <div class="item__avatar"></div>
                                <!-- <p class="item__people">Andrew Palmer</p>
  <p class="item__occupation">Ceo of Slack</a> -->
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <img class="carousel-control__img" alt='prev'
                                src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMS4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDMxLjQ5NCAzMS40OTQiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDMxLjQ5NCAzMS40OTQ7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iMzJweCIgaGVpZ2h0PSIzMnB4Ij4KPHBhdGggZD0iTTEwLjI3Myw1LjAwOWMwLjQ0NC0wLjQ0NCwxLjE0My0wLjQ0NCwxLjU4NywwYzAuNDI5LDAuNDI5LDAuNDI5LDEuMTQzLDAsMS41NzFsLTguMDQ3LDguMDQ3aDI2LjU1NCAgYzAuNjE5LDAsMS4xMjcsMC40OTIsMS4xMjcsMS4xMTFjMCwwLjYxOS0wLjUwOCwxLjEyNy0xLjEyNywxLjEyN0gzLjgxM2w4LjA0Nyw4LjAzMmMwLjQyOSwwLjQ0NCwwLjQyOSwxLjE1OSwwLDEuNTg3ICBjLTAuNDQ0LDAuNDQ0LTEuMTQzLDAuNDQ0LTEuNTg3LDBsLTkuOTUyLTkuOTUyYy0wLjQyOS0wLjQyOS0wLjQyOS0xLjE0MywwLTEuNTcxTDEwLjI3Myw1LjAwOXoiIGZpbGw9IiM2Zjc5ZmYiLz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" />
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <img class="carousel-control__img" alt='next'
                                src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMS4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDMxLjQ5IDMxLjQ5IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCAzMS40OSAzMS40OTsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSIzMnB4IiBoZWlnaHQ9IjMycHgiPgo8cGF0aCBkPSJNMjEuMjA1LDUuMDA3Yy0wLjQyOS0wLjQ0NC0xLjE0My0wLjQ0NC0xLjU4NywwYy0wLjQyOSwwLjQyOS0wLjQyOSwxLjE0MywwLDEuNTcxbDguMDQ3LDguMDQ3SDEuMTExICBDMC40OTIsMTQuNjI2LDAsMTUuMTE4LDAsMTUuNzM3YzAsMC42MTksMC40OTIsMS4xMjcsMS4xMTEsMS4xMjdoMjYuNTU0bC04LjA0Nyw4LjAzMmMtMC40MjksMC40NDQtMC40MjksMS4xNTksMCwxLjU4NyAgYzAuNDQ0LDAuNDQ0LDEuMTU5LDAuNDQ0LDEuNTg3LDBsOS45NTItOS45NTJjMC40NDQtMC40MjksMC40NDQtMS4xNDMsMC0xLjU3MUwyMS4yMDUsNS4wMDd6IiBmaWxsPSIjNmY3OWZmIi8+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="sect sect--white sect--no-padding">
<div class="container">
  <div class="row row--center">
    <div class="col-md-3 col-xs-6 col-sm-6 partner">
      <a href="#" class="partner__link">
      <img class="partner_img" src="https://image.ibb.co/mOtHRw/fblogo.png">
      </a>
    </div>
    
<div class="col-md-3  col-xs-6 col-sm-6 partner">
      <a href="#" class="partner__link">
      <img class="partner_img" src="https://image.ibb.co/nfpXRw/twitterlogo.png">
      </a>
    </div>
    
    
<div class="col-md-3 col-xs-6 col-sm-6 partner">
      <a href="#" class="partner__link">
      <img class="partner_img" src="https://image.ibb.co/imgOYb/googlelogo.png">
      </a>
    </div>
    
<div class="col-md-3 col-xs-6 col-sm-6 partner">
      <a href="#" class="partner__link">
      <img class="partner_img" src="https://image.ibb.co/ebGAeG/dribbblelogo.png">
      </a>
    </div>
        
    
  </div>
  <div class="row row--center">
    <div class="col-md-3 col-xs-6 col-sm-6 partner">
      <a href="#" class="partner__link">
      <img class="partner_img" src="https://image.ibb.co/npV8Yb/gitlogo.png">
      </a>
    </div>
    
        <div class="col-md-3 col-xs-6 col-sm-6 partner">
      <a href="#" class="partner__link">
      <img class="partner_img" src="https://image.ibb.co/cGyZ6w/stacklogo.png">
      </a>
    </div>
    
    
        <div class="col-md-3 col-xs-6 col-sm-6 partner">
      <a href="#" class="partner__link">
      <img class="partner_img" src="https://image.ibb.co/ij03zG/inlogo.png">
      </a>
    </div>
    
        <div class="col-md-3 col-xs-6 col-sm-6 partner">
      <a href="#" class="partner__link">
      <img class="partner_img" src="https://image.ibb.co/ekqdzG/codepenlogo.png">
      </a>
    </div>
  </div>
</div>    
</div> -->

    <!-- <div class="sect sect--white">
<div class="container">
  <div class="row">
   <h1 class="row__title">
    Our blog
  </h1>
  <h2 class="row__sub">Sneak peeks from our writings</h2>
  </div>
  
  <div class="row row--margin">
    <div class="col-md-6 article-pre__col">
      <a href="#" class="article-pre ">
        <div class="article-pre__img article-pre__img--first"></div>
        <h2 class="article-pre__info">
          <span class="article-pre__cat">Protips • </span><span class="article-pre__aut"> by Ann Timothy</span> <span class="article-pre__date"> - 5 mins read</span>
        </h2>
        <h1 class="article-pre__title">How to improve analytics using few tools in Bricks<span class="article-pre__arrow--purple"> →</span></h1>
      </a>
    </div>
    
        <div class="col-md-6 article-pre__col">
      <a href="#" class="article-pre ">
        <div class="article-pre__img article-pre__img--second"></div>
        <h2 class="article-pre__info">
          <span class="article-pre__cat">Pricing • </span><span class="article-pre__aut"> by Josh Ford</span> <span class="article-pre__date"> - 5 mins read</span>
        </h2>
        <h1 class="article-pre__title">Rich Thornett & Dan Coderholm about Dribbble in early 2009<span class="article-pre__arrow--purple">→</span></h1>
      </a>
    </div>    
 </div>
  <div class="row">
     <div class="col-md-6 article-pre__col">
      <a href="#" class="article-pre ">
        <div class="article-pre__img article-pre__img--fourth"></div>
        <h2 class="article-pre__info">
          <span class="article-pre__cat">Success Stories • </span><span class="article-pre__aut"> by Andrew Lincoln</span> <span class="article-pre__date"> - 5 mins read</span>
        </h2>
        <h1 class="article-pre__title">Steward Butterfield told us about his startup Slack<span class="article-pre__arrow--purple"> →</span></h1>
      </a>
    </div>
    
        <div class="col-md-6 article-pre__col">
      <a href="#" class="article-pre ">
        <div class="article-pre__img article-pre__img--third"></div>
        <h2 class="article-pre__info">
          <span class="article-pre__cat">Protips • </span><span class="article-pre__aut"> by Ann Timothy</span> <span class="article-pre__date"> - 5 mins read</span>
        </h2>
        <h1 class="article-pre__title">How to improve analytics using few tools in Bricks<span class="article-pre__arrow--purple"> →</span></h1>
      </a>
    </div>     
  </div>
</div>
</div> -->

    <div class="sect sect--padding-bottom" id="contact">
        <div class="container">
            <div class="row">
                <h3 class="row__title">Contact Us</h3>
                <h5 class="row__sub">Feel free to ask any questions</h5>
            </div>
            <div class="row row--margin">
                <div class="col-md-1"></div>
                <div class="col-md-4">
                    <div class="contacts">
                        <a href="#" class="contacts__link"><img alt='weber logo' src="weber.svg" />
                            <p class="contacts_title-ag">
                                Weber<span class="contacts--light"> Websites</span>
                            </p>
                        </a>
                        <p class="contacts__address">
                            Cottonseeds.org<br />
                            India
                        </p>
                        <!-- <p class="contacts__info">
            tel. <a href="#" class="contacts__info-link">+1 234 567 890</a>
          </p> -->
                        <p class="contacts__info">
                            m.
                            <a class="contacts__info-link" id='email-obs' onclick="this.href=this.href
              .replace(/AT/,'&#64;')
              .replace(/DOT/,'&#46;')" href="reachweberATcottonseedsDOTorg"></a>

                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <form id="contact" class="form" method="POST" action="send">
                        <div class="form-group">
                            <select class="form__field form__select" name="type" required>
                                <option selected value>Choose topic*</option>
                                <option value="1">Weber Websites</option>
                                <option value="2">Weber Graphics</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="form__field--half">
                                <input type="text" placeholder="Name*" name="name" class="form__field form__text"
                                    required />
                            </div>
                            <div class="form__field--half">
                                <input type="text" placeholder="Surname" name="surname"
                                    class="form__field form__text" />
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form__field--half">
                                <input type="text" placeholder="Email address*" name="email"
                                    class="form__field form__text" required />
                            </div>
                            <div class="form__field--half">
                                <input type="text" placeholder="Phone number" name="contact"
                                    class="form__field form__text" />
                            </div>
                        </div>

                        <div class="form-group">
                            <textarea type="text" placeholder="Your messsage*" name="message"
                                class="form__field form__textarea" required></textarea>
                            <button class="btn btn--up btn--width" type="submit">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </div>

    <div class="sect sect--violet">
        <img alt='weber career' src="https://image.ibb.co/fWyVtb/path3762.png" class="career-img" />
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="career_title">
                        Oh! Your have digged our website in search for the Graphic
                        Designing ?
                    </h1>
                    <p class="career_sub">
                        We will pleased to have you onboard! Check Weber Graphics .
                    </p>
                    <a href="graphics" class="btn btn--white btn--width">Graphics</a>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-xs-6">
                    <img class="footer__img" alt='weber logo' src="weber.svg" />
                    <h5 class="footer__title">
                        Weber<span class="footer__light"> Websites</span>
                    </h5>
                </div>
                <div class="col-md-10 col-xs-6">
                    <div class="footer__social">
                        <a href="https://twitter.com/cottonseedsorg" class="footer__social-l">
                            <img alt='twitter'
                                src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTguMS4xLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDYxMiA2MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDYxMiA2MTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iMTZweCIgaGVpZ2h0PSIxNnB4Ij4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNNjEyLDExNi4yNThjLTIyLjUyNSw5Ljk4MS00Ni42OTQsMTYuNzUtNzIuMDg4LDE5Ljc3MmMyNS45MjktMTUuNTI3LDQ1Ljc3Ny00MC4xNTUsNTUuMTg0LTY5LjQxMSAgICBjLTI0LjMyMiwxNC4zNzktNTEuMTY5LDI0LjgyLTc5Ljc3NSwzMC40OGMtMjIuOTA3LTI0LjQzNy01NS40OS0zOS42NTgtOTEuNjMtMzkuNjU4Yy02OS4zMzQsMC0xMjUuNTUxLDU2LjIxNy0xMjUuNTUxLDEyNS41MTMgICAgYzAsOS44MjgsMS4xMDksMTkuNDI3LDMuMjUxLDI4LjYwNkMxOTcuMDY1LDIwNi4zMiwxMDQuNTU2LDE1Ni4zMzcsNDIuNjQxLDgwLjM4NmMtMTAuODIzLDE4LjUxLTE2Ljk4LDQwLjA3OC0xNi45OCw2My4xMDEgICAgYzAsNDMuNTU5LDIyLjE4MSw4MS45OTMsNTUuODM1LDEwNC40NzljLTIwLjU3NS0wLjY4OC0zOS45MjYtNi4zNDgtNTYuODY3LTE1Ljc1NnYxLjU2OGMwLDYwLjgwNiw0My4yOTEsMTExLjU1NCwxMDAuNjkzLDEyMy4xMDQgICAgYy0xMC41MTcsMi44My0yMS42MDcsNC4zOTgtMzMuMDgsNC4zOThjLTguMTA3LDAtMTUuOTQ3LTAuODAzLTIzLjYzNC0yLjMzM2MxNS45ODUsNDkuOTA3LDYyLjMzNiw4Ni4xOTksMTE3LjI1Myw4Ny4xOTQgICAgYy00Mi45NDcsMzMuNjU0LTk3LjA5OSw1My42NTUtMTU1LjkxNiw1My42NTVjLTEwLjEzNCwwLTIwLjExNi0wLjYxMi0yOS45NDQtMS43MjFjNTUuNTY3LDM1LjY4MSwxMjEuNTM2LDU2LjQ4NSwxOTIuNDM4LDU2LjQ4NSAgICBjMjMwLjk0OCwwLDM1Ny4xODgtMTkxLjI5MSwzNTcuMTg4LTM1Ny4xODhsLTAuNDIxLTE2LjI1M0M1NzMuODcyLDE2My41MjYsNTk1LjIxMSwxNDEuNDIyLDYxMiwxMTYuMjU4eiIgZmlsbD0iIzcyOTNiMyIvPgoJPC9nPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" />
                        </a>
                        <!-- <a href="#" class="footer__social-l">
                  <img
                    src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjE2cHgiIGhlaWdodD0iMTZweCIgdmlld0JveD0iMCAwIDk2LjEyNCA5Ni4xMjMiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDk2LjEyNCA5Ni4xMjM7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KPGc+Cgk8cGF0aCBkPSJNNzIuMDg5LDAuMDJMNTkuNjI0LDBDNDUuNjIsMCwzNi41Nyw5LjI4NSwzNi41NywyMy42NTZ2MTAuOTA3SDI0LjAzN2MtMS4wODMsMC0xLjk2LDAuODc4LTEuOTYsMS45NjF2MTUuODAzICAgYzAsMS4wODMsMC44NzgsMS45NiwxLjk2LDEuOTZoMTIuNTMzdjM5Ljg3NmMwLDEuMDgzLDAuODc3LDEuOTYsMS45NiwxLjk2aDE2LjM1MmMxLjA4MywwLDEuOTYtMC44NzgsMS45Ni0xLjk2VjU0LjI4N2gxNC42NTQgICBjMS4wODMsMCwxLjk2LTAuODc3LDEuOTYtMS45NmwwLjAwNi0xNS44MDNjMC0wLjUyLTAuMjA3LTEuMDE4LTAuNTc0LTEuMzg2Yy0wLjM2Ny0wLjM2OC0wLjg2Ny0wLjU3NS0xLjM4Ny0wLjU3NUg1Ni44NDJ2LTkuMjQ2ICAgYzAtNC40NDQsMS4wNTktNi43LDYuODQ4LTYuN2w4LjM5Ny0wLjAwM2MxLjA4MiwwLDEuOTU5LTAuODc4LDEuOTU5LTEuOTZWMS45OEM3NC4wNDYsMC44OTksNzMuMTcsMC4wMjIsNzIuMDg5LDAuMDJ6IiBmaWxsPSIjNzI5M2IzIi8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg=="
                  />
                </a> -->

                        <a href="https://www.instagram.com/cottonseedsorg/"" class=" footer__social-l">
                            <img alt='instagram' src="svg/instagram.svg" class="insta" />
                        </a>

                        <!-- <a href="" class="footer__social-l">
                  <img
                    src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjE2cHgiIGhlaWdodD0iMTZweCIgdmlld0JveD0iMCAwIDQzMC4xMTcgNDMwLjExNyIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNDMwLjExNyA0MzAuMTE3OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxnPgoJPHBhdGggaWQ9IkxpbmtlZEluIiBkPSJNNDMwLjExNywyNjEuNTQzVjQyMC41NmgtOTIuMTg4VjI3Mi4xOTNjMC0zNy4yNzEtMTMuMzM0LTYyLjcwNy00Ni43MDMtNjIuNzA3ICAgYy0yNS40NzMsMC00MC42MzIsMTcuMTQyLTQ3LjMwMSwzMy43MjRjLTIuNDMyLDUuOTI4LTMuMDU4LDE0LjE3OS0zLjA1OCwyMi40NzdWNDIwLjU2aC05Mi4yMTljMCwwLDEuMjQyLTI1MS4yODUsMC0yNzcuMzJoOTIuMjEgICB2MzkuMzA5Yy0wLjE4NywwLjI5NC0wLjQzLDAuNjExLTAuNjA2LDAuODk2aDAuNjA2di0wLjg5NmMxMi4yNTEtMTguODY5LDM0LjEzLTQ1LjgyNCw4My4xMDItNDUuODI0ICAgQzM4NC42MzMsMTM2LjcyNCw0MzAuMTE3LDE3Ni4zNjEsNDMwLjExNywyNjEuNTQzeiBNNTIuMTgzLDkuNTU4QzIwLjYzNSw5LjU1OCwwLDMwLjI1MSwwLDU3LjQ2MyAgIGMwLDI2LjYxOSwyMC4wMzgsNDcuOTQsNTAuOTU5LDQ3Ljk0aDAuNjE2YzMyLjE1OSwwLDUyLjE1OS0yMS4zMTcsNTIuMTU5LTQ3Ljk0QzEwMy4xMjgsMzAuMjUxLDgzLjczNCw5LjU1OCw1Mi4xODMsOS41NTh6ICAgIE01LjQ3Nyw0MjAuNTZoOTIuMTg0di0yNzcuMzJINS40NzdWNDIwLjU2eiIgZmlsbD0iIzcyOTNiMyIvPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo="
                  />
                </a> -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- partial -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="./script.js"></script>
</body>

</html>