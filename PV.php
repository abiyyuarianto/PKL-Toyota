<!-- Modal -->
<div id="myPV" class="modall">
    <div class="modall-content" style="height: 480px;width:820px">
        <span class="close" id="close">&times;</span>
        <h5 style="text-align: left">Tracking PV</h5>
        <hr>
        <table class="danaPV" border="0">
            <form method="POST">
                <tr>
                    <td style="text-align: left;font-size:16px"><label class="col-form-label">Activity</label></td>
                    <td><input type="text" name="act" class="form-control" placeholder="Activity"></td>
                </tr>
                <tr>
                    <td style="text-align: left;font-size:16px"><label class="col-form-label">WBS Number</label></td>
                    <td><input type="text" name="wbs_number" class="form-control" placeholder="WBS Number"></td>
                </tr>
                <tr>
                    <td style="text-align: left;font-size:16px"><label class="col-form-label">No PV</label></td>
                    <td><input type="text" name="master_budget" class="form-control" placeholder="Master Budget"> </td>
                </tr>
                <tr>
                    <td style="text-align: left;font-size:16px"><label class="col-form-label">Nominal PV</label></td>
                    <td><input type="text" name="PV" class="form-control" placeholder="Dana PV"> </td>
                </tr>
                <tr>
                    <td style="text-align: left;font-size:16px"><label class="col-form-label">User</label></td>
                    <td><input type="text" name="user" class="form-control" placeholder="User"> </td>
                </tr>
                <tr>
                    <td style="text-align: left;font-size:16px"><label class="col-form-label">Status</label></td>
                    <td>
                        <select name="category" class="form-control" style="line-height: 6px;">
                            <option value="pilih">--Pilih---</option>
                            <option value="draft">Draft</option>
                            <option value="approval">Approval</option>
                            <option value="planning">Planning</option>
                            <option value="transfer">Transfer</option>
                            <option value="posted">Posted</option>
                        </select>
                    </td>

                </tr>
            </form>
        </table>
        <div style="margin-top:22px; margin-left:513px ">
            <button type="button" style="width: 130px" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" style="width: 130px" class="btn btn-info">Edit</button>
        </div>
    </div>
</div>