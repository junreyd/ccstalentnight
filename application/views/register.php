<div class="content-wrapper">
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
                <div class="register-box-body col-sm-offset-3 col-sm-6">                    
                    <p class="login-box-msg">Register</p>
                  <?php echo form_open('register'); ?>
                      <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Username" name="username" autocomplete="off">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                      </div>
                      <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="Password" name="password" >
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                      </div>
                      <div class="row">
                        <div class="col-xs-offset-8 col-xs-4">
                          <button type="submit" class="btn btn-primary btn-block btn-flat"><i class="fa fa-save"></i> Save</button>
                        </div>
                      </div>
                    </form>
                  </div>      
            </section>
          </div>           
        </div>
      </div>                  
<?php if(isset($_GET['success'])): ?>
<?php endif; ?>

      

      
