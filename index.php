<?php include_once("common/config.php"); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <title><?php echo $sSiteTitle; ?></title>

    <meta name="description" content="<?php echo $sSiteTitle; ?>">
    <meta name="keywords" content="<?php echo $sSiteTitle; ?>">

    <!-- <meta http-equiv="refresh" content="600"> -->
    <meta name="author" content="<?php echo $sAuthor; ?>">
    <meta name="Developer" content="<?php echo $sDeveloper; ?>">
    <meta name="resource-type" content="document">
    <meta name="contact" content="<?php echo $sEmail; ?>">
    <meta name="copyright"
        content="Copyright (c) <?php echo date("Y"); ?>. All Rights &reg; Reserved by <?php echo $sSiteURL; ?>.">

    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="googlebot-news" content="index, follow">
    <meta name="msnbot" content="index, follow">

    <meta property="fb:app_id" content="<?php echo $sAppId; ?>">
    <meta property="og:site_name" content="<?php echo $sSiteName; ?>">
    <meta property="og:title" content="<?php echo $sSiteTitle; ?>">
    <meta property="og:description" content="<?php echo $sSiteTitle; ?>">
    <meta property="og:url" content="<?php echo $sSiteURL; ?>">
    <meta property="og:type" content="article">
    <meta property="og:image" content="<?php echo $sLogoURLfb; ?>">
    <meta property="og:locale" content="en_US">

    <link rel="image_src" href="<?php echo $sLogoURLfb; ?>">

    <link rel="canonical" href="<?php echo $sSiteURL; ?>">
    <link type="image/x-icon" rel="shortcut icon" href="<?php echo $sFavicon; ?>">
    <link type="image/x-icon" rel="icon" href="<?php echo $sFavicon; ?>">
    <link rel="stylesheet" type="text/css"
        href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/#[[latestVersion]]#/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">

    <?php echo $sCSSBootStrap;
    echo $sOwlCarouselCSS;
    // echo $sOwlCarouselDefaulTheme;
    echo $sCSSEMM;
    echo $sCSSKiron; ?>
</head>

<body>
    <?php echo $sFbRoot; ?>
    <?php include("common/headerHome.php"); ?>
    <main>
        <div class="DWelcomeBBC">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="DWelHeading">
                            <h1>Welcome to BBC.com</h1>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="DWelDate">
                            <h1>Wednesday 14 , 2022</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <a href="">
                            <div class="DWel1stImg">
                                <img class="img-fluid"
                                    src="https://ichef.bbc.co.uk/wwhp/800/cpsprodpb/14B2A/production/_126587748_canada_suspects_jpeg.png"
                                    alt="">
                                <div class="Desc">
                                    <h2>Police hunt suspects over deadly Canada stabbings</h2>
                                    <p>Police hunt two men after at least 10 people are killing in a wave of attacts
                                        that
                                        have shocked Canada.</p>
                                </div>
                                <h6 class="country">US & CANADA</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3">
                        <div class="row">
                            <div class="col-lg-12"><a href="">
                                    <div class="DWel2ndImg1">
                                        <img class="img-fluid"
                                            src="https://ichef.bbc.co.uk/wwhp/400/cpsprodpb/844C/production/_126586833_sunaktrussgetty.jpg"
                                            alt="">
                                        <div class="Desc">
                                            <h2>Truss or Sunak to be announced as UK's next PM</h2>
                                        </div>
                                        <h6 class="country">UK POLITICS</h6>
                                    </div>
                                </a></div>
                            <div class="col-lg-12">
                                <a href="">
                                    <div class="DWel2ndImg2">
                                        <img class="img-fluid"
                                            src="https://ichef.bbc.co.uk/wwhp/400/cpsprodpb/1192A/production/_126587917_peace-before-pieces.jpg"
                                            alt="">
                                        <div class="Desc">
                                            <h2>Artist removes Ukraine-Russia mural after backlash</h2>
                                        </div>
                                        <h6 class="country">AUSTRALIA</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="row">
                            <div class="col-lg-12"><a href="">
                                    <div class="DWel2ndImg1">
                                        <img class="img-fluid"
                                            src="https://ichef.bbc.co.uk/wwhp/400/cpsprodpb/1DA4/production/_126588570_indacc1.jpg"
                                            alt="">
                                        <div class="Desc">
                                            <h2>Inside India's 'factories of death'</h2>
                                        </div>
                                        <h6 class="country">INDIA</h6>
                                    </div>
                                </a></div>
                            <div class="col-lg-12">
                                <a href="">
                                    <div class="DWel2ndImg2">
                                        <img class="img-fluid"
                                            src="https://ichef.bbc.co.uk/wwhp/400/ibroadcast/images/live/p0/cx/r1/p0cxr1c4.jpg"
                                            alt="">
                                        <div class="Desc">
                                            <h2>The plwasure-based guide to life online</h2>
                                        </div>
                                        <h6 class="country">FUTURE</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="DNews">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="DNewsHeading">
                            <span></span>
                            <h1>News</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <a href="">
                            <div class="DNewsImg">
                                <img class="img-fluid"
                                    src="https://ichef.bbc.co.uk/wwhp/624/cpsprodpb/1756E/production/_126589559_mediaitem126589557.jpg"
                                    alt="">
                                <div class="Desc">
                                    <h2>Chris Mason: New PM needs to unify divided Tories</h2>
                                    <p>Will the Conservatives be able to come together after a long summer of public
                                        wrangling?</p>
                                </div>
                                <h6 class="country">US & CANADA</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="">
                            <div class="DNewsImg">
                                <img class="img-fluid"
                                    src="https://ichef.bbc.co.uk/wwhp/800/cpsprodpb/14B2A/production/_126587748_canada_suspects_jpeg.png"
                                    alt="">
                                <div class="Desc">
                                    <h2>Police hunt suspects over deadly Canada stabbings</h2>
                                    <p>Police hunt two men after at least 10 people are killing in a wave of attacts
                                        that
                                        have shocked Canada.</p>
                                </div>
                                <h6 class="country">US & CANADA</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="">
                            <div class="DNewsImg">
                                <img class="img-fluid"
                                    src="https://ichef.bbc.co.uk/wwhp/400/cpsprodpb/1192A/production/_126587917_peace-before-pieces.jpg"
                                    alt="">
                                <div class="Desc">
                                    <h2>Artiest removes Ukrine-Russia mural after backlash</h2>
                                    <p>The street mural in Australia controversially depicted Ukranian and Russian
                                        solidirs hugging.</p>
                                </div>
                                <h6 class="country">US & CANADA</h6>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="DSports">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="DSportsHeading">
                            <span></span>
                            <h1>Sports</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <a href="">
                            <div class="DSportsImg">
                                <img class="img-fluid"
                                    src="https://ichef.bbc.co.uk/wwhp/624/cpsprodpb/26A0/production/_126588890_gettyimages-1420778570.jpg"
                                    alt="">
                                <div class="Desc">
                                    <h2>Premier League reaction and latest news</h2>
                                    <p>Manchester United end Arsenal's 100% record, Brighton beat Leicester in thriller,
                                        controversial VAR decisions were wrong, plus all the latest news</p>
                                </div>
                                <h6 class="country">FOOTBALL</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="">
                            <div class="DSportsImg">
                                <img class="img-fluid"
                                    src="https://ichef.bbc.co.uk/wwhp/624/cpsprodpb/F2ED/production/_126498126_gettyimages-1390291613.jpg"
                                    alt="">
                                <div class="Desc">
                                    <h2>Country Chanpionship, day one - radio & text</h2>
                                    <p>Follow live text and BBC radio commentary from day one in the 13th round of 2022
                                        County Chanpionship</p>
                                </div>
                                <h6 class="country">CRICKET</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="">
                            <div class="DSportsImg">
                                <img class="img-fluid"
                                    src="https://ichef.bbc.co.uk/wwhp/624/cpsprodpb/17C6C/production/_126588379_nick_kyrgios_getty7.jpg"
                                    alt="">
                                <div class="Desc">
                                    <h2>Kyrgios ends Medvedev's reign at Us Open</h2>
                                    <p>Nick Kyrgios ends Daniil Medvedev's defence of the Us Open title as he earns and
                                        enthralling four-set win on an entertaining night in New York</p>
                                </div>
                                <h6 class="country">TANNIES</h6>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="DWeather">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="DWeatherHeader">
                            <h1>SINGAPOOR WEATHER</h1>
                            <button>EDIT</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="container">
                        <div class="WeatherImg">
                            <img src="https://freepngimg.com/thumb/weather/23527-3-weather.png" alt="">
                            <ul>
                                <li>mon</li>
                                <li>24*c</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="DReel">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <a href="">
                            <div class="DReelHeading">
                                <h1>REEL</h1>
                                <p>The most amazing video from the BBC</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <div class="DReelVisitBtn">
                            <button>VISIT <i class="fas fa-right-long"></i></button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <a href="">
                            <div class="card" style="width: 25rem;">
                                <img src="https://ychef.files.bbci.co.uk/432x243/p0cy0xqb.jpg" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <p class="card-text">The meteoric rise and framatic fall of Boris Johnson</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="">
                            <div class="card" style="width: 25rem;">
                                <img src="https://ychef.files.bbci.co.uk/432x243/p0cxzq5q.jpg" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <p class="card-text">What made the 'world's best warriors' so fierce?</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="">
                            <div class="card" style="width: 25rem;">
                                <img src="https://ychef.files.bbci.co.uk/432x243/p0cx8dbr.jpg" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <p class="card-text">When is the best time to work out?</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="DAsis">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="DAsiaHeading">
                            <span></span>
                            <h1>Asia</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <a href="">
                            <div class="DAsiaImg">
                                <img class="img-fluid"
                                    src="https://ichef.bbc.co.uk/wwhp/304/cpsprodpb/1DA4/production/_126588570_indacc1.jpg"
                                    alt="">
                                <div class="Desc">
                                    <h2>Inside India's 'factories of death'</h2>
                                    <p>Are the country's efforts to become an industrial powerhouse coming at the cost
                                        of workers' safety</p>
                                </div>
                                <h6 class="country">INDIA</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3">
                        <a href="">
                            <div class="DAsiaImg">
                                <img class="img-fluid"
                                    src="https://ichef.bbc.co.uk/wwhp/304/cpsprodpb/E80F/production/_126570495_p0cy1zv3.jpg"
                                    alt="">
                                <div class="Desc">
                                    <h2>Chinese motorcyclists join wildfire battle</h2>
                                    <p>The south-western city of Chongqing was one of the areas hit worst by the flames
                                        in August's heatwave.</p>
                                </div>
                                <h6 class="country">CHINA</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3">
                        <a href="">
                            <div class="DAsiaImg">
                                <img class="img-fluid"
                                    src="https://ichef.bbc.co.uk/wwhp/304/cpsprodpb/F8C8/production/_126588636_cyrusmistry.jpg"
                                    alt="">
                                <div class="Desc">
                                    <h2>Remembering India billionaire who died in car crash</h2>
                                    <p>Cyrus Mistry, 54, was the former chairman of India's largest conglomerate Tata
                                        Sons.</p>
                                </div>
                                <h6 class="country">INDIA</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3">
                        <a href="">
                            <div class="DAsiaImg">
                                <img class="img-fluid"
                                    src="https://ichef.bbc.co.uk/wwhp/304/cpsprodpb/16182/production/_126589409_murphy's.jpg"
                                    alt="">
                                <div class="Desc">
                                    <h2>Alcohol megastore offers 10-minute job interviews</h2>
                                    <p>Dan Murphy's in Australia is holdin quick 'on-the-spot' interviews to beat staff
                                        shortage</p>
                                </div>
                                <h6 class="country">BUSINESS</h6>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="DEditorsPick">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="DEditorsHeading">
                            <span></span>
                            <h1>Editor's Picks</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-12">
                                <a href="">
                                    <div class="DEditorsImg">
                                        <img class="" src="https://ychef.files.bbci.co.uk/width/790/p0cyk1c3.jpg"
                                            alt="">
                                        <div class="Desc">
                                            <h2>How many people can Earth handle?</h2>
                                            <p>BBC Future tales a look at one of the most controversial issues of our
                                                time.</p>
                                        </div>
                                        <h6 class="country">FUTURE</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <a href="">
                                    <div class="DEditors1stImg2">
                                        <img class="img-fluid"
                                            src="https://ychef.files.bbci.co.uk/width/790/p0cxhcps.jpg" alt="">
                                        <div class="Desc">
                                            <h2>The neglected trait that drives success</h2>
                                            <p>How cultivating curiosity leads to better learning, creativity and
                                                wellbeing</p>
                                        </div>
                                        <h6 class="country">CULTURE</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="">
                                    <div class="DEditors2ndImg3">
                                        <img class="img-fluid"
                                            src="https://ychef.files.bbci.co.uk/width/790/p0cyf7y5.jpg" alt="">
                                        <div class="Desc">
                                            <h2>The desert people who buit a US city</h2>
                                            <p>THe city's name pays homeage to their engineering prowess</p>
                                        </div>
                                        <h6 class="country">TRAVEL</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="">
                                    <div class="DEditors3rdImg4">
                                        <img class="img-fluid"
                                            src="https://ychef.files.bbci.co.uk/width/790/p0cyc5zs.jpg" alt="">
                                        <div class="Desc">
                                            <h2>Brendan Fraser's 'Oscar worthy' role</h2>
                                            <p>The actor 'richly deserves nominations' for his performance in The Whale
                                            </p>
                                        </div>
                                        <h6 class="country">WORKLIFE</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <a href="">
                                    <div class="DEditors1stImg2">
                                        <img class="img-fluid"
                                            src="https://ichef.bbc.co.uk/wwhp/304/ibroadcast/images/live/p0/cw/ng/p0cwng9p.jpg"
                                            alt="">
                                        <div class="Desc">
                                            <h2>LongShots 2022: Who will select the winner?</h2>
                                            <p>Four acclaimed industry experts will decide the winner of the Jury Award
                                            </p>
                                        </div>
                                        <h6 class="country">LONGSHOTS</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="">
                                    <div class="DEditors2ndImg3">
                                        <img class="img-fluid"
                                            src="https://ichef.bbc.co.uk/wwhp/304/cpsprodpb/2421/production/_126594290_393338.jpg"
                                            alt="">
                                        <div class="Desc">
                                            <h2>Drones capture avalanche live in Frozed Planet II</h2>
                                            <p>The BBC sequel contains never before seen footage of animals in the
                                                frozen world</p>
                                        </div>
                                        <h6 class="country">SCIENCE & ENVIRONMENT</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="">
                                    <div class="DEditors3rdImg4">
                                        <img class="img-fluid"
                                            src="https://ichef.bbc.co.uk/wwhp/304/cpsprodpb/0C25/production/_126590130_hi033719866.jpg"
                                            alt="">
                                        <div class="Desc">
                                            <h2>I officially have an EGO - Adele</h2>
                                            <p>The star has an emmy, Grammy and Oscar - after her award for TV show One
                                                Night Only
                                            </p>
                                        </div>
                                        <h6 class="country">ENTERTANMENT & ARTS</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="DEditors2ndHeading">
                                    <h2>LATEST BUSINESS NEWS</h2>
                                </div>
                            </div>
                        </div>
                        <div class="DEditors2ndSec1">
                            <a href="">
                                <div class="row">
                                    <div class="col-3 ">
                                        <div class="DEditorsTxtNum">
                                            <p>1</p>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="DEditorsTxt">
                                            <p>Interest rate 'rigger' guilty plea thrown out</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="DEditors2ndSec2">
                            <a href="">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="DEditorsTxtNum">
                                            <p>2</p>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="DEditorsTxt">
                                            <p>Russia blames sanctions for gas pipeline shutdown</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="DEditors2ndSec3">
                            <a href="">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="DEditorsTxtNum">
                                            <p>3</p>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="DEditorsTxt">
                                            <p>Instagram fines $405m over children's data privacy</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="DEditors2ndSec4">
                            <a href="">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="DEditorsTxtNum">
                                            <p>4</p>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="DEditorsTxt">
                                            <p>Germany vows $65bn package to combat energy crisis</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="DFuturePlate">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <a href="">
                            <div class="DPlanteHeading">
                                <h1><span>FUTURE PLANTE</span></h1>
                                <p>Solutions for a sustainable world</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <div class="DPlanteVisitBtn">
                            <button>VISIT FUTURE PLANTE <i class="fas fa-right-long"></i></button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <a href="">
                            <div class="card" style="width: 25rem;">
                                <img src="https://ychef.files.bbci.co.uk/624_351/p0cx83wm.jpg" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <p class="card-text">The ignored potential of human poo</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="">
                            <div class="card" style="width: 25rem;">
                                <img src="https://ychef.files.bbci.co.uk/624_351/p0cvtpfv.jpg" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <p class="card-text">Why Auckland is the 'spongiest' city</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="">
                            <div class="card" style="width: 25rem;">
                                <img src="https://ychef.files.bbci.co.uk/624_351/p0ctd3sr.jpg" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <p class="card-text">The elephant buses safeguarding kids</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="DTechBus">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-12">
                                <a href="">
                                    <div class="DTechBusHeading">
                                        <h1>TECHNOLOGY OF BUSINESS</h1>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <a href="">
                                    <div class="DTechBusImg">
                                        <img class="img-fluid"
                                            src="https://ichef.bbc.co.uk/wwhp/624/cpsprodpb/7A67/production/_126453313_image00005.jpg"
                                            alt="">
                                        <div class="Desc">
                                            <h6 class="country">BUSINESS</h6>
                                            <h2>How India is buiding a pearl farming industry</h2>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="DNewTech">
                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="">
                                        <div class="DTechBusHeading">
                                            <h1>NEW TECH ECONOMY</h1>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="">
                                        <div class="DTechBusImg">
                                            <img class="img-fluid"
                                                src="https://ichef.bbc.co.uk/wwhp/624/cpsprodpb/DC4E/production/_126589365_profile_machitakahashi_20210921_white2.jpg"
                                                alt="">
                                            <div class="Desc">
                                                <h6 class="country">BUSINESS</h6>
                                                <h2>'There were no women in my field so I found my own way'</h2>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="DNavTab">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="">
                            <div class="DVideo">
                                <div class="container">
                                    <img class="img-fluid"
                                        src="https://ichef.bbc.co.uk/wwhp/800/cpsprodpb/75D0/production/_126606103_p0cyndh7.jpg"
                                        alt="">
                                    <i class="fas fa-camera"></i>
                                </div>
                                <div class="Desc">
                                    <h2>How many people can Earth handle?</h2>
                                    <p>BBC Future tales a look at one of the most controversial issues of our
                                        time.</p>
                                    <h6 class="country">FUTURE</h6>
                                </div>
                            </div>
                        </a>
                        <div class="DToggleNavSec">
                            <div class="container">
                                <!-- Tabs navs -->
                                <ul class="nav nav-tabs" id="ex1" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="ex1-tab-1" data-mdb-toggle="tab"
                                            href="#ex1-tabs-1" role="tab" aria-controls="ex1-tabs-1"
                                            aria-selected="true">Recomended</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="ex1-tab-2" data-mdb-toggle="tab" href="#ex1-tabs-2"
                                            role="tab" aria-controls="ex1-tabs-2" aria-selected="false">Latest</a>
                                    </li>
                                </ul>
                                <!-- Tabs navs -->

                                <!-- Tabs content -->
                                <div class="tab-content" id="ex1-content">
                                    <div class="tab-pane fade show active" id="ex1-tabs-1" role="tabpanel"
                                        aria-labelledby="ex1-tab-1">
                                        <div class="owl-carousel owl-theme">
                                            <div class="item">
                                                <img class="img-fluid"
                                                    src="https://ichef.bbc.co.uk/wwhp/304/cpsprodpb/11B41/production/_126631527_p0cz2spj.jpg"
                                                    alt="">
                                                <div class="OwlDesc">
                                                    <p>Watch: Cambridge children arrive at new...</p>
                                                    <p class="country">UK</p>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <img class="img-fluid"
                                                    src="https://ichef.bbc.co.uk/wwhp/304/cpsprodpb/11B41/production/_126631527_p0cz2spj.jpg"
                                                    alt="">
                                                <div class="OwlDesc">
                                                    <p>Watch: Cambridge children arrive at new...</p>
                                                    <p class="country">UK</p>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <img class="img-fluid"
                                                    src="https://ichef.bbc.co.uk/wwhp/304/cpsprodpb/11B41/production/_126631527_p0cz2spj.jpg"
                                                    alt="">
                                                <div class="OwlDesc">
                                                    <p>Watch: Cambridge children arrive at new...</p>
                                                    <p class="country">UK</p>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <img class="img-fluid"
                                                    src="https://ichef.bbc.co.uk/wwhp/304/cpsprodpb/11B41/production/_126631527_p0cz2spj.jpg"
                                                    alt="">
                                                <div class="OwlDesc">
                                                    <p>Watch: Cambridge children arrive at new...</p>
                                                    <p class="country">UK</p>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <img class="img-fluid"
                                                    src="https://ichef.bbc.co.uk/wwhp/304/cpsprodpb/11B41/production/_126631527_p0cz2spj.jpg"
                                                    alt="">
                                                <div class="OwlDesc">
                                                    <p>Watch: Cambridge children arrive at new...</p>
                                                    <p class="country">UK</p>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <img class="img-fluid"
                                                    src="https://ichef.bbc.co.uk/wwhp/304/cpsprodpb/11B41/production/_126631527_p0cz2spj.jpg"
                                                    alt="">
                                                <div class="OwlDesc">
                                                    <p>Watch: Cambridge children arrive at new...</p>
                                                    <p class="country">UK</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="ex1-tabs-2" role="tabpanel"
                                        aria-labelledby="ex1-tab-2">
                                        <div class="owl-carousel owl-theme">
                                            <div class="item">
                                                <img class="img-fluid"
                                                    src="https://ichef.bbc.co.uk/wwhp/304/cpsprodpb/11B41/production/_126631527_p0cz2spj.jpg"
                                                    alt="">
                                                <div class="OwlDesc">
                                                    <p>Watch: Cambridge children arrive at new...</p>
                                                    <p class="country">UK</p>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <img class="img-fluid"
                                                    src="https://ichef.bbc.co.uk/wwhp/304/cpsprodpb/11B41/production/_126631527_p0cz2spj.jpg"
                                                    alt="">
                                                <div class="OwlDesc">
                                                    <p>Watch: Cambridge children arrive at new...</p>
                                                    <p class="country">UK</p>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <img class="img-fluid"
                                                    src="https://ichef.bbc.co.uk/wwhp/304/cpsprodpb/11B41/production/_126631527_p0cz2spj.jpg"
                                                    alt="">
                                                <div class="OwlDesc">
                                                    <p>Watch: Cambridge children arrive at new...</p>
                                                    <p class="country">UK</p>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <img class="img-fluid"
                                                    src="https://ichef.bbc.co.uk/wwhp/304/cpsprodpb/11B41/production/_126631527_p0cz2spj.jpg"
                                                    alt="">
                                                <div class="OwlDesc">
                                                    <p>Watch: Cambridge children arrive at new...</p>
                                                    <p class="country">UK</p>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <img class="img-fluid"
                                                    src="https://ichef.bbc.co.uk/wwhp/304/cpsprodpb/11B41/production/_126631527_p0cz2spj.jpg"
                                                    alt="">
                                                <div class="OwlDesc">
                                                    <p>Watch: Cambridge children arrive at new...</p>
                                                    <p class="country">UK</p>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <img class="img-fluid"
                                                    src="https://ichef.bbc.co.uk/wwhp/304/cpsprodpb/11B41/production/_126631527_p0cz2spj.jpg"
                                                    alt="">
                                                <div class="OwlDesc">
                                                    <p>Watch: Cambridge children arrive at new...</p>
                                                    <p class="country">UK</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Tabs content -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="DBBCOnAir">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p><span class="DRedSide">BBC WORLD SERVICE</span> <i class="fas fa-volume-high"></i> BBC ON
                            AIR SERVICE</p>

                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="DEditorsPick">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="DEditorsHeading">
                            <span></span>
                            <h1>More around the BBC</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="DEditors2ndHeading">
                                    <h2>From our correspondents</h2>
                                </div>
                            </div>
                        </div>
                        <div class="DEditors2ndSec1">
                            <a href="">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="DEditorsImg">
                                            <img src="https://ichef.bbc.co.uk/wwhp/144/ibroadcast/images/live/p0/7z/nr/p07znrkz.jpg"
                                                alt="" class="img-fluid img-bullet">
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="DEditorsTxt">
                                            <p>Interest rate 'rigger' guilty plea thrown out</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="DEditors2ndSec2">
                            <a href="">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="DEditorsImg">
                                            <img src="https://ichef.bbc.co.uk/wwhp/144/ibroadcast/images/live/p0/2x/05/p02x05mf.jpg"
                                                alt="" class="img-fluid img-bullet">
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="DEditorsTxt">
                                            <p>Russia blames sanctions for gas pipeline shutdown</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="DEditors2ndSec3">
                            <a href="">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="DEditorsImg">
                                            <img src="https://ichef.bbc.co.uk/wwhp/144/ibroadcast/images/live/p0/81/0t/p0810t8r.jpg"
                                                alt="" class="img-fluid img-bullet">
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="DEditorsTxt">
                                            <p>Instagram fines $405m over children's data privacy</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="DEditors2ndSec4">
                            <a href="">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="DEditorsImg">
                                            <img src="https://ichef.bbc.co.uk/wwhp/144/ibroadcast/images/live/p0/7z/nr/p07znrkz.jpg"
                                                alt="" class="img-fluid img-bullet">
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="DEditorsTxt">
                                            <p>Germany vows $65bn package to combat energy crisis</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-12">
                                <a href="">
                                    <div class="DEditorsImg">
                                        <img class="imgMain"
                                            src="https://ichef.bbc.co.uk/wwhp/999/cpsprodpb/125DD/production/_126592257_gettyimages-1317488623.jpg"
                                            alt="">
                                        <div class="Desc">
                                            <h2>How many people can Earth handle?</h2>
                                            <p>BBC Future tales a look at one of the most controversial issues of our
                                                time.</p>
                                        </div>
                                        <h6 class="country">FUTURE</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <a href="">
                                    <div class="DEditors1stImg2">
                                        <img class="img-fluid"
                                            src="https://ichef.bbc.co.uk/wwhp/304/cpsprodpb/B45B/production/_126617164_alangarnertreaclewalkercreditdavidheke.jpg"
                                            alt="">
                                        <div class="Desc">
                                            <h2>The neglected trait that drives success</h2>
                                            <p>How cultivating curiosity leads to better learning,</p>
                                        </div>
                                        <h6 class="country">CULTURE</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="">
                                    <div class="DEditors2ndImg3">
                                        <img class="img-fluid"
                                            src="https://ichef.bbc.co.uk/wwhp/304/cpsprodpb/1174A/production/_126589417_jetstar.jpg"
                                            alt="">
                                        <div class="Desc">
                                            <h2>The desert people who buit a US city</h2>
                                            <p>THe city's name pays homeage to their engineering prowess</p>
                                        </div>
                                        <h6 class="country">TRAVEL</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="">
                                    <div class="DEditors3rdImg4">
                                        <img class="img-fluid"
                                            src="https://ichef.bbc.co.uk/wwhp/304/cpsprodpb/ED89/production/_126590806_gettyimages-1242261648.jpg"
                                            alt="">
                                        <div class="Desc">
                                            <h2>Brendan Fraser's 'Oscar worthy' role</h2>
                                            <p>The actor 'richly deserves nominations'
                                            </p>
                                        </div>
                                        <h6 class="country">WORKLIFE</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <a href="">
                                    <div class="DEditors1stImg2">
                                        <img class="img-fluid"
                                            src="https://ichef.bbc.co.uk/wwhp/304/cpsprodpb/2421/production/_126594290_393338.jpg"
                                            alt="">
                                        <div class="Desc">
                                            <h2>LongShots 2022: Who will select the winner?</h2>
                                            <p>Four acclaimed industry experts will decide
                                            </p>
                                        </div>
                                        <h6 class="country">LONGSHOTS</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="">
                                    <div class="DEditors2ndImg3">
                                        <img class="img-fluid"
                                            src="https://ichef.bbc.co.uk/wwhp/304/cpsprodpb/A565/production/_126614324_mediaitem126614097.jpg"
                                            alt="">
                                        <div class="Desc">
                                            <h2>Drones capture avalanche live in Frozed Planet II</h2>
                                            <p>The BBC sequel contains never before seen</p>
                                        </div>
                                        <h6 class="country">SCIENCE & ENVIRONMENT</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="">
                                    <div class="DEditors3rdImg4">
                                        <img class="img-fluid"
                                            src="https://ichef.bbc.co.uk/wwhp/304/cpsprodpb/0C25/production/_126590130_hi033719866.jpg"
                                            alt="">
                                        <div class="Desc">
                                            <h2>I officially have an EGO - Adele</h2>
                                            <p>The star has an emmy, Grammy and Oscar -
                                            </p>
                                        </div>
                                        <h6 class="country">ENTERTANMENT & ARTS</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="DTechnology">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="DTechHeading">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h1>TECHNOLOGY OF BUSINESS</h1>
                                </div>
                            </div>
                        </div>
                        <div class="DTechImg">
                            <img class="img-fluid"
                                src="https://ichef.bbc.co.uk/wwhp/624/cpsprodpb/D309/production/_126452045_img_6873.jpg"
                                alt="">
                            <div class="Desc">
                                <h2>How many people can Earth handle?</h2>
                                <h6 class="country">FUTURE</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="DTechHeading">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h1>TECHNOLOGY OF BUSINESS</h1>
                                </div>
                            </div>
                        </div>
                        <div class="DTechImg">
                            <img class="img-fluid"
                                src="https://ichef.bbc.co.uk/wwhp/624/cpsprodpb/D309/production/_126452045_img_6873.jpg"
                                alt="">
                            <div class="Desc">
                                <h2>How many people can Earth handle?</h2>
                                <h6 class="country">FUTURE</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="DWorldPhoto">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="DWorldPhotoHeading">
                            <span></span>
                            <h1>WORLD IN PICURE</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="DWorldImg">
                            <img class="img-fluid"
                                src="https://ichef.bbc.co.uk/wwhp/624/cpsprodpb/174F8/production/_126608459_1_queen_getty.jpg"
                                alt="">
                            <i class="fas fa-camera"></i>
                            <div class="Desc">
                                <h2>How many people can Earth handle?</h2>
                                <h6 class="country">FUTURE</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="DWorldImg2">
                            <img class="img-fluid"
                                src="https://ichef.bbc.co.uk/wwhp/624/cpsprodpb/184B1/production/_126550599_02.jpg"
                                alt="">
                            <i class="fas fa-camera"></i>
                            <div class="Desc">
                                <h2>How many people can Earth handle?</h2>
                                <h6 class="country">FUTURE</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="DWorldRow2Img">
                            <img class="img-fluid"
                                src="https://ichef.bbc.co.uk/wwhp/624/cpsprodpb/0D08/production/_126563330_179cd99fab1ed11ae221efddc8f08ff1617cf9e8.jpg"
                                alt="">
                            <div class="Desc">
                                <h2>How many people can Earth handle?</h2>
                                <h6 class="country">FUTURE</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="DWorldRow2Img">
                            <img class="img-fluid"
                                src="https://ichef.bbc.co.uk/wwhp/624/cpsprodpb/15C92/production/_126543298_28.jpg"
                                alt="">
                            <div class="Desc">
                                <h2>How many people can Earth handle?</h2>
                                <h6 class="country">FUTURE</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="DWorldRow2Img">
                            <img class="img-fluid"
                                src="https://ichef.bbc.co.uk/wwhp/624/cpsprodpb/12037/production/_126538737_gallery_9_mikhail_gorbachev_split_getty.jpg"
                                alt="">
                            <div class="Desc">
                                <h2>How many people can Earth handle?</h2>
                                <h6 class="country">FUTURE</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <!-- MDB -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"
        integrity="sha512-jgqnY5wi2gxl4Yj4iXEEpVWrBI6JeJQc67LVC/a65X/TeMotFC0veqlMqYHAI3FfS3hCdx5z6fqKFzXqdnKXDw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="jquery.min.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>

    <?php include_once("common/footer.php"); ?>
    <?php echo $sJSjQuery;
    echo $sBackUpTop;
    echo $sCSSFontAwesome;
    // echo $sPopper;
    echo $sJSBootStrap;
    echo $sJSEMM;
    echo $sOwlCarouselJs; ?>


</body>

</html>