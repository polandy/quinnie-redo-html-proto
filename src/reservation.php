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
                    <h2>Reservation</h2>
                    <p>Anzahl Sitzplätze</p>
                    <input type="number" min="1" max="15" name="numSeats" value="2">
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
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

<?php include "layout/footer.php";