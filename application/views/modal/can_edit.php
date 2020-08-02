<div class="modal fade" id="mrcan_edit">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><i class="fa fa-user"></i> Candidate</h4>
            </div>
            <?php echo form_open_multipart('candidate/update_mrcan'); ?>
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
                        <td class="text-danger">
                            <input type="file" name="mrprofile" size="20" />
                            <img class="mrcan_profile_here" style="height: 250px; width: 250px;" />
                        </td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i> Update</button>
            </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade" id="mscan_edit">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><i class="fa fa-user"></i> Candidate</h4>
            </div>
            <?php echo form_open_multipart('candidate/update_mscan'); ?>
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
                        <td class="text-danger">
                            <input type="file" name="msprofile" size="20" />
                            <img class="mscan_profile_here" style="height: 250px; width: 250px;" />
                        </td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i> Update</button>
            </div>
            </form>
        </div>
    </div>
</div>