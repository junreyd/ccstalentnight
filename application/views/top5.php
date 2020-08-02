
<!--<link rel="stylesheet" href="<?php //echo base_url();?>bootstrap/css/bootstrap.min.css">
<script src="<?php //echo base_url();?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
<style>
.content {
  display:none;
}

.preload {
  margin:0;
  position:absolute;
  top:50%;
  left:50%;
  margin-right: -50%;
  transform:translate(-50%, -50%);
}
</style>
     <div class="preload">
      <img src="img/giphy.gif" />
    </div>

<script>
  $(function() {
    $(".preload").fadeOut(8000, function() {
      $(".content").fadeIn(5000);
    });
  });
</script>
-->

<div class="content-wrapper">
  <center><section class="content-header">
      <h1>Mr & Ms CCS Talent Top 5</h1>
  </section></center>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">           
            <div class="box-body">                
                  <table class="table table-hover table-striped">
                <thead>

                      <tr>
                        <th>Candidate No.</th>
                        <th>Candidate Name</th>   
                        <th>Profile</th>
                        <th>Total</th>
                    </tr>
                </thead>
                    <tbody>                
                <?php foreach($mrtop as $row): ?>
                  <tr>                 
                    <td><?php echo $row->mrcan_no; ?></td>
                    <td><?php echo $row->mrcan_name; ?></td>
                    <td><img class="img-responsive" src="<?= base_url($row->mrprofile) ?>" width="50" /></td>
                    <td><?= $row->total ?></td>
                  </tr>
                  </tbody>
                  <?php endforeach; ?>
                  <?php foreach($mstop as $row): ?>
                    <tbody>
                  <tr>                 
                    <td><?php echo $row->mscan_no; ?></td>
                    <td><?php echo $row->mscan_name; ?></td>  
                    <td><img class="img-responsive" src="<?= base_url($row->msprofile) ?>" width="50" /></td>
                    <td><?= $row->total ?></td>
                  </tr>
                <?php endforeach; ?>
                    </tbody>
                  </table>
                  </div>
              </div>
          </div>
        </div>
    </section>
</div>


<div class="modal fade" id="count_down_modal" tabindex="-1" role="dialog" aria-labelledby="count_down_modal_label">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="count_down_modal_label">Count Down</h4>
            </div>
            <div class="modal-body">
                <div id="count_down"></div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="top_5_modal" tabindex="-1" role="dialog" aria-labelledby="top_5_modal_label">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <center><h4 class="modal-title" id="top_5_modal_label">Top 5</h4></center>
            </div>
            <div class="modal-body">

                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <?php $i = 0 ?>

                    <ol class="carousel-indicators">
                        <?php foreach ($mrtop_asc as $j => $row) : ?>
                            <li class="<?= $j == 0 ? 'active' : '' ?>" data-target="#myCarousel" data-slide-to="<?= $i ?>"></li>
                            <?php $i++ ?>
                        <?php endforeach; ?>

                        <?php foreach ($mstop_asc as $j => $row) : ?>
                            <li data-target="#myCarousel" data-slide-to="<?= $i ?>"></li>
                            <?php $i++ ?>
                        <?php endforeach; ?>
                    </ol>

                    <div class="carousel-inner">
                        <!--?php $k = 5 ?-->
                        <?php foreach ($mrtop_asc as $j => $row) : ?>
                            <div class="item <?= $j == 0 ? 'active' : '' ?>">
                                <img alt="<?= $row->mrcan_name ?>" class="img-responsive" src="<?= base_url($row->mrprofile) ?>" />
                                <div class="carousel-caption">
                                    <!--h3><?= $k ?></h3-->
                                    <h1><p><?= $row->mrcan_name ?></p></h1>
                                </div>
                            </div>
                            <!--?php $k-- ?-->
                        <?php endforeach; ?>

                        <!--?php $k = 5 ?-->
                        <?php foreach ($mstop_asc as $j => $row) : ?>
                            <div class="item">
                                <img alt="<?= $row->mscan_name ?>" class="img-responsive" src="<?= base_url($row->msprofile) ?>" />
                                <div class="carousel-caption">
                                    <!--h3><?= $k ?></h3-->
                                    <h1><p><?= $row->mscan_name ?></p></h1>
                                </div>
                            </div>
                            <!--?php $k-- ?-->
                        <?php endforeach; ?>
                    </div>
                    
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>

<?php $this->load->view('top5.js.php') //view ?>
