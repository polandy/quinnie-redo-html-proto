<?php
include "layout/header.php";

$chairs = array(
    array_fill(0, 15, 0),
    array_fill(0, 15, 0),
    array_fill(0, 15, 0),
    array_fill(0, 15, 0),
    array_fill(0, 15, 0),
    array(0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0),
    array(0, 0, 0, 0, 0, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0),
    array(0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0),
    array(0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0),
    array(0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0),
    array(0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0),
    array(0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0),
    array(0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0),
)

?>
    <div class="row">
        <div class="col-sm-12">
            <h1>Reservation / Kauf</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-lg-8">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div id="res-canvas">Leinwand</div>
                    <div class="res-chairs">
                        <?php
                        foreach ($chairs as $row) {
                            ?>
                            <div class="res-chair-row">
                                <?php
                                foreach ($row as $chair) {
                                    ?>
                                    <div class="res-chair<?php echo $chair ? ' occupied' : '' ?>"></div>
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
        <div class="col-sm-12 col-lg-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h2>Sitzplätze wählen</h2>
                    <p>Bitte wählen Sie die Anzahl Sitzplätze und klicken Sie auf den gewünschten Sitz</p>
                    <label for="numSeats">Anzahl Sitzplätze:</label>
                    <input id="numSeats" type="number" min="1" max="15" name="numSeats" value="2">
                    <p>&nbsp;</p>
                    <p><b>Hinweis:</b> Falls Sie mehr als eine Sitz reservieren möchten, wählen Sie den linksten Sitz an.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-lg-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h2>Buchungsdetails</h2>
                    <p id="res-name"><span class="res-label">Film:</span><span class="res-data"></span></p>
                    <p id="res-location"><span class="res-label">Kino:</span><span class="res-data"></span></p>
                    <p id="res-date"><span class="res-label">Datum:</span><span class="res-data"></span></p>
                    <p id="res-time"><span class="res-label">Zeit:</span><span class="res-data"></span></p>
                    <p id="res-language"><span class="res-label">Sprache:</span><span class="res-data"></span></p>
                    <p id="res-row" class="res-seat-field"><span class="res-label">Reihe:</span><span class="res-data"></span></p>
                    <p id="res-seats" class="res-seat-field"><span class="res-label">Sitzplatz:</span><span class="res-data"></span></p>
                    <p id="res-price" class="res-seat-field"><span class="res-label">Preis:</span><span class="res-data"></span></p>
                    <p id="res-choose-seat" class="alert alert-danger" role="alert">Bitte wählen Sie eine Sitzplatz</p>
                    <input id="res-reservation" class="res-btn btn btn-success" type="button" value="Reservieren" disabled>
                    <input id="res-buy" class="res-btn btn btn-success" type="button" value="Kaufen" disabled>
                </div>
            </div>
        </div>
    </div>

    <div class="res-dialog modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">Fehler</h4>
                </div>
                <div class="modal-body">
                    <p>Dieser Sitz kann nicht als Startsitz für Ihre Anzahl Sitze gewählt werden.</p>
                    <p>Wählen Sie einen anderen Startsitz oder verringern Sie die Anzahl Sitze.</p>
                    <p>Falls Sie mehr als eine Sitz reservieren möchten, wählen Sie den linksten Sitz an.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="res-404 modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">Seite nicht gefunden</h4>
                </div>
                <div class="modal-body">
                    <p>Kaufen ist nicht Teil dieses Prototyps</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

<?php include "layout/footer.php";