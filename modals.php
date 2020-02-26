<?php include 'connection.php' ?>

<head>
    <style>
        .table1 {
            font-family: sans-serif;
            color: #444;
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #f2f5f7;
        }

        .table1 tr th {
            background: #35A9DB;
            color: #fff;
            font-weight: normal;
        }

        .table1,
        th,
        td {
            padding: 8px 20px;
            text-align: center;
        }

        .table1 tr:hover {
            background-color: wheat;
        }

        .table1 tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<!-- The Modal -->
<div class="modal fade" id="modalSaya" tabindex="-1" role="dialog" aria-labelledby="modalSayaLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="width: 150%; margin-left:-109px">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="line-height: 12px">
                <table class="table1" border="0">
                    <form method="POST">
                        <tr>
                            <td style="text-align: left"><label class="col-form-label">Activity</label></td>
                            <td><input type="text" name="act" class="form-control" placeholder="Activity"></td>
                        </tr>
                        <tr>
                            <td style="text-align: left"><label class="col-form-label">WBS Number</label></td>
                            <td><input type="text" name="wbs_number" class="form-control" placeholder="WBS Number"></td>
                        </tr>
                        <tr>
                            <td style="text-align: left"><label class="col-form-label">Master Budget</label></td>
                            <td><input type="text" name="master_budget" class="form-control" placeholder="Master Budget"> </td>
                        </tr>
                        <tr>
                            <td style="text-align: left"><label class="col-form-label">PR</label></td>
                            <td><input type="text" name="PR" class="form-control" placeholder="Dana PR"></td>
                        </tr>
                        <!-- <tr>
                            <td style="text-align: left"><label class="col-form-label">PV</label></td>
                            <td><input type="text" name="PV" class="form-control" placeholder="Dana PV"> </td>
                        </tr> -->
                    </form>
                </table>
            </div>
            <div class="modal-footer">
                <div class="atur_tombol">
                    <button type="button" style="width: 130px" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button name="simpan" type="button" style="width: 130px" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>