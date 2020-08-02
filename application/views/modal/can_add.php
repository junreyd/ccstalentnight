<div class="modal fade" id="mrcan_add">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add Candidate</h4>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('candidate/add_mrcan'); ?>
                <div class="form-group">
                    <label for="subject">Candidate No.</label>
                    <input type="text" class="form-control" name="mrcan_no">
                </div>     
                <div class="form-group">
                    <label for="subject">Candidate Name</label>
                    <input type="text" class="form-control" name="mrcan_name">
                </div>
                  <div class="form-group">
                    <label>Upload Image</label>
                    <input type="file" name="mrprofile" size="20">
                    </div>  
                </div>
            <div class="modal-footer">
                <button type="submit" name="send" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="mscan_add">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add Candidate</h4>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('candidate/add_mscan'); ?>
                <div class="form-group">
                    <label for="subject">Candidate No.</label>
                    <input type="text" class="form-control" name="mscan_no">
                </div>     
                <div class="form-group">
                    <label for="subject">Candidate Name</label>
                    <input type="text" class="form-control" name="mscan_name">
                </div>
                  <div class="form-group">
                    <label>Upload Image</label>
                    <input type="file" name="msprofile" size="20">
                    </div>  
                </div>
            <div class="modal-footer">
                <button type="submit" name="send" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
                </form>
            </div>
        </div>
    </div>
</div>