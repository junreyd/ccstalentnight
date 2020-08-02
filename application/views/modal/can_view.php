<div class="modal fade" id="mrcan_view">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><i class="fa fa-user"></i> View Canidate</h4>
            </div>
            <?php echo form_open('candidate'); ?>
            <input type="hidden" name="mrcan_id" class="mrcan_id">
            <div class="modal-body">
                <table style="font-size:1.2em;" class="table table-striped">
                    <tr>
                        <td class="col-sm-5">Candidate No.</td>
                        <td>:</td>
                        <td class="text-danger"><input type="text" name="mrcan_no" class="mrcan_no_here form-control"></td>
                    </tr>
                    <tr>
                        <td class="col-sm-5">Candidate Name.</td>
                        <td>:</td>
                        <td class="text-danger"><input type="text" name="mrcan_name" class="mrcan_name_here form-control"></td>
                    </tr>
                    <tr>
                        <td class="col-sm-5">Profile</td>
                        <td>:</td>
                        <td><img name="profile" src="img/jino.png" style="height: 250px; width: 250px;" class="mrcan_profile_here"></td>
                    </tr>
                </table>
            </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="mscan_view">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><i class="fa fa-user"></i> View Canidate</h4>
            </div>
            <?php echo form_open('candidate'); ?>
            <input type="hidden" name="mscan_id" class="mscan_id">
            <div class="modal-body">
                <table style="font-size:1.2em;" class="table table-striped">
                    <tr>
                        <td class="col-sm-5">Candidate No.</td>
                        <td>:</td>
                        <td class="text-danger"><input type="text" name="mscan_no" class="mscan_no_here form-control"></td>
                    </tr>
                    <tr>
                        <td class="col-sm-5">Candidate Name.</td>
                        <td>:</td>
                        <td class="text-danger"><input type="text" name="mscan_name" class="mscan_name_here form-control"></td>
                    </tr>
                     <tr>
                        <td class="col-sm-5">Profile</td>
                        <td>:</td>
                        <td>
                            <img name="profile" src="img/sherlyn.png" style="height: 250px; width: 250px;" class="mscan_profile_here" />
                        </td>
                    </tr>
                </table>
            </div>
            </form>
        </div>
    </div>
</div>