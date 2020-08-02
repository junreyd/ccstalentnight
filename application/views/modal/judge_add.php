<div class="modal fade" id="judge_add">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add Judge</h4>
            </div>
            <div class="modal-body">
                <?php echo form_open('judge/add_judge'); ?>
                <div class="form-group">
                    <label for="subject">Username</label>
                    <input type="text" class="form-control" name="username">
                </div>     
                <div class="form-group">
                    <label for="subject">Name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                </div>
            <div class="modal-footer">
                <button type="submit" name="send" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
                </form>
            </div>
        </div>
    </div>
</div>