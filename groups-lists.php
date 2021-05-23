<?php /*
*    Pi-hole: A black hole for Internet advertisements
*    (c) 2019 Pi-hole, LLC (https://pi-hole.net)
*    Network-wide ad blocking via your own hardware.
*
*    This file is copyright under the latest version of the EUPL.
*    Please see LICENSE file for your rights under this license. */
    require "scripts/pi-hole/php/header.php";
?>

<!-- Title -->
<div class="page-header">
    <h1>Lists management</h1>
</div>

<!-- Domain Input -->
<div class="row">
    <div class="col-md-12">
        <div class="box" id="add-group">
            <!-- /.box-header -->
            <div class="box-header with-border">
                <h3 class="box-title">
                    Add a new list
                </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="new_address">Address:</label>
                        <input id="new_address" type="text" class="form-control" placeholder="URL or space-separated URLs" autocomplete="off" spellcheck="false" autocapitalize="none" autocorrect="off">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="new_comment">Comment:</label>
                        <input id="new_comment" type="text" class="form-control" placeholder="List description (optional)">
                    </div>
                </div>
            </div>
            <div class="box-footer clearfix">
                <strong>Hints:</strong>
                <ol>
                    <li>Please run <code>pihole -g</code> or update <a href="gravity.php">online</a> after modifying your lists.</li>
                    <li>Multiple lists can be added by separating each <i>unique</i> URL with a space. Multi-line pasting into the field is supported for mass-insertion.</li>
                    <li>Deleting a list here automatically removes the associated domains.</li>
                    <li>Click on the icon in the first column to get additional information about your lists. The icons correspond to the health of the list.</li>
                </ol>
                <button type="button" id="btnAdd" class="btn btn-primary pull-right">Add</button>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="box" id="lists-list">
            <div class="box-header with-border">
                <h3 class="box-title">
                    Lists used by your Pi-hole
                </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="listsTable" class="table table-striped table-bordered" width="100%"></table>
                <button type="button" id="resetButton" class="btn btn-default btn-sm text-red hidden">Reset sorting</button>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>

<script src="scripts/vendor/bootstrap-select.min.js?v=<?=$cacheVer?>"></script>
<script src="scripts/vendor/bootstrap-toggle.min.js?v=<?=$cacheVer?>"></script>
<script src="scripts/pi-hole/js/utils.js?v=<?=$cacheVer?>"></script>
<script src="scripts/pi-hole/js/groups-common.js?v=<?=$cacheVer?>"></script>
<script src="scripts/pi-hole/js/groups-lists.js?v=<?=$cacheVer?>"></script>

<?php
require "scripts/pi-hole/php/footer.php";
?>
