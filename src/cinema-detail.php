<?php
include "layout/header.php";
include 'cinema.class.php';
$cinema = getAllCinemas()[$_GET['cinemaId']];
?>
    <div class="row">
        <div class="col-sm-12">
            <h1><?= $cinema->name ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-lg-6">
            <!-- carousel -->
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="<?= getImgUrls()[0] ?>" alt="...">

                        <div class="carousel-caption">
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?= getImgUrls()[1] ?>" alt="...">

                        <div class="carousel-caption">
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-sm-12 col-lg-6">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-sm-12"><h2><?= $cinema->street ?> </h2></div>
                    <div class="col-sm-12"><h2> <?= $cinema->zipCode ?> </h2></div>
                    <div class="col-sm-12"><h2> Tel: <?= $cinema->tel ?> </h2></div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-sm-12"><h2>Über das Kino</h2></div>
                    <div class="col-md-4 text-right">Sitzplätze:</div><div class="col-md-8 text-left"><?=$cinema->seats?></div>
                    <div class="col-md-4 text-right">Tonanlage:</div><div  class="col-md-8 text-left"><?=$cinema->soundSystem?></div>
                    <div class="col-md-4 text-right">Projektion:</div><div class="col-md-8 text-left"><?=$cinema->projector?></div>
                    <div class="col-md-4 text-right">3 D:</div><div        class="col-md-8 text-left"><?=$cinema->_3d?></div>
                    <div class="col-md-4 text-right">Besonderheiten:</div><div class="col-md-8 text-left"><?=$cinema->special?></div>
                </div>
            </div>
        </div>
    </div>
<?php include "layout/footer.php";