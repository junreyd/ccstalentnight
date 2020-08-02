<div class="modal fade" id="judge_view">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><i class="fa fa-user"></i> View Judge</h4>
            </div>
            <?php echo form_open('judge'); ?>
            <input type="hidden" name="judge_id" class="judge_id">
            <div class="modal-body">
                <table style="font-size:1.2em;" class="table table-striped">
                    <tr>
                        <td class="col-sm-5">Username</td>
                        <td>:</td>
                        <td class="text-danger"><input type="text" name="username" class="username_here form-control"></td>
                    </tr>
                    <tr>
                        <td class="col-sm-5">Name</td>
                        <td>:</td>
                        <td class="text-danger"><input type="text" name="name" class="name_here form-control"></td>
                    </tr>
                </table>
            </div>
            </form>
        </div>
    </div>
</div>