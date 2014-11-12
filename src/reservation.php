<?php
include "layout/header.php";



?>
    <div class="row">
        <div class="col-sm-12">
            <h1>Reservation</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-lg-8">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div id="res-canvas">Leinwand</div>
                    <div class="res-chairs">
                    <?php
                    for ($i = 0; $i < 10; $i++) {
                        ?>
                        <div class="res-chair-row">
                            <?php
                            for ($j = 0; $j < 15; $j++) {
                                ?>
                                <div class="res-chair"></div>
                            <?php
                            }
                            ?>
                        </div>
                    <?php
                    }
                    ?>
                    </div>
                </div>
            </div>
        </div>

    </div>


<?php include "layout/footer.php";