<div class="content-wrapper">
  <section class="content-header">
      <h1>
        Mr
        <small>CCS Candidates</small>
      </h1>
  </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">           
            <div class="box-body">                
              <?php echo form_open('candidate/delete_mrcan'); ?>
              <?php $this->load->view('modal/can_mr_delete'); ?>
                <div class="btn-group">
                <button type="button" class="btn btn-default btn-sm" data-target="#mrcan_add" data-toggle="modal"><i class="fa fa-plus"></i> Add</button>
                <button type="button" data-target="#delete_mrcan" data-toggle="modal" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i> Delete</button>
                </div>
                <div class="table-responsive mailbox-messages">
                  <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th></th>
                        <th>Candidate No.</th>
                        <th>Candidate Name</th>
                        <th>Profile</th>
                        <th>Action</th>
                    </tr>
                </thead>
                    <tbody>                
                <?php foreach($mrcan as $row): ?>
                  <tr>                    
                    <td>                        
                        <input type="checkbox" name="mrcan_id[]" value="<?php echo $row->mrcan_id;?>">
                    </td>
                    <td><?php echo $row->mrcan_no; ?></td>
                    <td><?php echo $row->mrcan_name; ?></td>
                    <td>
                        <?php if ($row->mrprofile) : ?>
                            <img height="50" src="<?= base_url($row->mrprofile) ?>" width="50"/>
                        <?php endif; ?>
                    </td>
                    <td>
                    <a href="#mrcan_edit" data-toggle="modal" class="view_mrcan" data-id="<?php echo $row->mrcan_id; ?>">
                    edit </a>|
                    <a href="#mrcan_view" data-toggle="modal" class="view_mrcan" data-id="<?php echo $row->mrcan_id; ?>">
                    view</a>
                    </td>                 
                  </tr>                      
                <?php endforeach; ?>  
                    </tbody>
                  </table>
                </div>
              </form>              
            </div>
          </div>          
        </div>
      </div>
    </section>
    <section class="content-header">
      <h1>
        Ms
        <small>CCS Candidates</small>
      </h1>
  </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">           
            <div class="box-body">                
              <?php echo form_open('candidate/delete_mscan'); ?>
              <?php $this->load->view('modal/can_ms_delete'); ?>
                <div class="btn-group">
                <button type="button" class="btn btn-default btn-sm" data-target="#mscan_add" data-toggle="modal"><i class="fa fa-plus"></i> Add</button>
                <button type="button" data-target="#delete_mscan" data-toggle="modal" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i> Delete</button>
                </div>
                <div class="table-responsive mailbox-messages">
                  <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th></th>
                        <th>Candidate No.</th>
                        <th>Candidate Name</th>
                        <th>Profile</th>
                        <th>Action</th>                        
                    </tr>    
                </thead>
                    <tbody>                
                <?php foreach($mscan as $row): ?>
                  <tr>                    
                    <td>                        
                        <input type="checkbox" name="mscan_id[]" value="<?php echo $row->mscan_id;?>">
                    </td>
                    <td><?php echo $row->mscan_no; ?></td>
                    <td><?php echo $row->mscan_name; ?></td>
                    <td>
                        <?php if ($row->msprofile) : ?>
                            <img height="50" src="<?= base_url($row->msprofile) ?>" width="50"/>
                        <?php endif; ?>
                    </td>
                    <td>
                    <a href="#mscan_edit" data-toggle="modal" class="view_mscan" data-id="<?php echo $row->mscan_id; ?>">
                    edit </a>|
                    <a href="#mscan_view" data-toggle="modal" class="view_mscan" data-id="<?php echo $row->mscan_id; ?>">
                    view</a>
                    </td>                 
                  </tr>                      
                <?php endforeach; ?>  
                    </tbody>
                  </table>
                </div>
              </form>              
            </div>
          </div>          
        </div>
      </div>
    </section>
</div>
<?php $this->load->view('modal/can_add'); ?>
<?php $this->load->view('modal/can_edit'); ?>
<?php $this->load->view('modal/can_view'); ?>
<?php $this->load->view('script/candidate'); ?>
<?php if(isset($_GET['delete'])): ?>
<?php endif; ?>
<?php if(isset($_GET['update'])): ?>
<?php endif; ?>
