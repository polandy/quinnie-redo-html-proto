<?php
include "layout/header.php";
include 'cinema.class.php';
?>
    <div class="row">
        <div class="col-sm-12">
            <h1>Kino Übersicht</h1>
        </div>
    </div>
    <div class="row">
    <?php
    $allCinemas = getAllCinemas();
    foreach ($allCinemas as $cinema) { ?>
        <a href="cinema-detail.php?cinemaId=<?=array_search($cinema, $allCinemas)?>">
            <div class="col-sm-12 col-lg-4" style="margin-top: 2rem">
                <div class="col-sm-12 " style="">
                    <img src="<?=$cinema->imgSrc?>" style="height: 20rem; width: 30rem" />
                    <div class="text-center"><?=$cinema->name.', '.$cinema->street ?></div>
                </div>
            </div>
        </a>
    <?php } ?>
    </div>
<?php include "layout/footer.php";