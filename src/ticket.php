<?php
include "layout/header.php";

$date = new DateTime($_REQUEST['dateTime']);

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
                    <h2>Reservationsbeleg</h2>
                    <p>Besten Dank für Ihre Reservation.</p>
                    <p>Bitte drucken Sie diesen Beleg aus und weisen sie ihn an der Kasse vor.</p>
                    <img src="../img/qr.png" style="float: left">
                    <p>&nbsp;</p>
                    <p>Ihre Reservationsnummer lautet:</p>
                    <h2>HDD34679</h2>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-lg-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h2>Buchungsdetails</h2>
                    <p><span class="res-label">Film:</span><span class="res-data"><?php echo $_REQUEST['name'] ?></span></p>
                    <p><span class="res-label">Kino:</span><span class="res-data"><?php echo $_REQUEST['location'] ?></span></p>
                    <p><span class="res-label">Datum:</span><span class="res-data"><?php echo $date->format('d.m.Y') ?></span></p>
                    <p><span class="res-label">Zeit:</span><span class="res-data"><?php echo $date->format('H:i') ?></span></p>
                    <p><span class="res-label">Sprache:</span><span class="res-data"><?php echo $_REQUEST['language'] ?></span></p>
                    <p><span class="res-label">Reihe:</span><span class="res-data"><?php echo $_REQUEST['row'] ?></span></p>
                    <p><span class="res-label">Sitzplatz:</span><span class="res-data"><?php echo $_REQUEST['seats'] ?></span></p>
                    <p><span class="res-label">Preis:</span><span class="res-data">CHF <?php echo $_REQUEST['price'] ?></span></p>
                </div>
            </div>
        </div>
    </div>

<?php include "layout/footer.php";