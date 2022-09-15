<?php include_once("common/class.banglaDate.php");
$bn = new BanglaDate(time());
$bn->set_time(time(), 6);
$date = $bn->get_date();
$dtDateBN = $date[1] . "&nbsp;" . $date[0] . "&nbsp;" . $date[2];
?>
<header>
    <div id="myHeader">
        <div class="DHeader">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="DLogo" href="<?php echo $sSiteURL; ?>"><img src="<?php echo $sLogoURL; ?>" alt="<?php echo $sSiteTitle; ?>" title="<?php echo $sSiteTitle; ?>" class="img-fluid"></a>
                            <a class="singin" href="#"><i class="fas fa-user"></i> sing in</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <div class="DToggleBtn">
                                    <span><i class="fas fa-bars"></i></span>
                                </div>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav ms-lg-5 me-lg-0 mx-3">
                                    <li class="nav-item"><a class="nav-link" href="<?php echo $sSiteURL ?>about">Home</a></li>
                                    <li class="nav-item"><a class="nav-link" href="<?php echo $sSiteURL ?>work">News</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="<?php echo $sSiteURL ?>video">Sports</a></li>
                                    <li class="nav-item"><a class="nav-link" href="<?php echo $sSiteURL ?>installation">Reel</a></li>
                                    <li class="nav-item"><a class="nav-link" href="<?php echo $sSiteURL; ?>contact">Worklife</a></li>
                                    <li class="nav-item"><a class="nav-link" href="<?php echo $sSiteURL; ?>contact">Travel</a></li>
                                    <li class="nav-item"><a class="nav-link" href="<?php echo $sSiteURL; ?>contact">Future</a></li>
                                    <li class="nav-item"><a class="nav-link" href="<?php echo $sSiteURL; ?>contact">Culture</a></li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                                            <i class="fas fa-ellipsis"></i>
                                        </a>
                                    </li>
                                </ul>
                                <form class="d-flex serachSec">
                                    <i class="fas fa-magnifying-glass"></i>
                                    <input type="search" placeholder="Search">
                                </form>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>
<div class="ToggleNav">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-6">
                <div class="ToggleNavItems">
                    <a href="">TV</a>
                    <a href="">Weather</a>
                    <a href="">Sound</a>
                </div>
            </div>
            <div class="col-lg-6 col-6">
                <div class="ToggleClose">
                    <a href="">X</a>
                </div>
            </div>
        </div>
    </div>
</div>