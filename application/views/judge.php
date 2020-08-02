<div class="content-wrapper">
  <section class="content-header">
      <h1>
        Board
        <small>of Judges</small>
      </h1>
  </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">           
            <div class="box-body">                
              <?php echo form_open('judge/delete'); ?>
              <?php $this->load->view('modal/judge_delete'); ?>
                <div class="btn-group">
                <button type="button" class="btn btn-default btn-sm" data-target="#judge_add" data-toggle="modal"><i class="fa fa-plus"></i> Add</button>
                <button type="button" data-target="#judge_delete" data-toggle="modal" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i> Delete</button>
                </div>
                <div class="table-responsive mailbox-messages">
                  <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th></th>
                        <th>Username</th>
                        <th>Name</th>
                        <th>Action</th>                        
                    </tr>    
                </thead>
                    <tbody>                
                <?php foreach($judge as $row): ?>
                  <tr>                    
                    <td>                        
                        <input type="checkbox" name="judge_id[]" value="<?php echo $row->judge_id;?>">
                    </td>
                    <td><?php echo $row->username; ?></td>
                    <td><?php echo $row->name; ?></td>
                    <td>
                    <a href="#judge_edit" data-toggle="modal" class="view_judge" data-id="<?php echo $row->judge_id; ?>">
                    edit </a>|
                    <a href="#judge_view" data-toggle="modal" class="view_judge" data-id="<?php echo $row->judge_id; ?>">
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
<?php $this->load->view('modal/judge_add'); ?>
<?php $this->load->view('modal/judge_edit'); ?>
<?php $this->load->view('modal/judge_delete'); ?>
<?php $this->load->view('modal/judge_view'); ?>
<?php $this->load->view('script/judge'); ?>
<?php if(isset($_GET['delete'])): ?>
<?php endif; ?>
<?php if(isset($_GET['update'])): ?>
<?php endif; ?>
