<?php
include "layout/header.php"; ?>

    <div class="row">
        <div class="col-sm-12">
            <h1>Gutscheine bestellen</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            Schenken Sie ein unvergessliches Erlebnis.
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-8">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h2>Kinogutschein à CHF 18</h2>
                            <img src="../img/quinnie-member.jpg" alt="Member Card"/>
                        </div>
                        <div class="col-md-6">
                            <div style="margin-top: 60%; float: right">
                                <span>Anzahl:</span>
                                <span><input type="number" value="2"></span>
                            </div>
                            <div style="clear: both"/>
                            <div style="float: right; margin-top: 1rem">
                                <a class="btn btn-default" href="#" role="button" onclick="$('.res-404').modal()">Bestellen</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="res-404 modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                            aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">Seite nicht gefunden</h4>
                </div>
                <div class="modal-body">
                    <p>Kaufen ist nicht Teil dieses Prototyps</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div><!-- /.modal -->

<?php include "layout/footer.php";