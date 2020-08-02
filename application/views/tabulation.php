    <meta http-equiv="refresh" content="5">
    <script type="text/javascript">
        function PrintDiv(id) {
            var data=document.getElementById(id).innerHTML;
            var myWindow = window.open('', 'my div', 'height=400,width=600');
            myWindow.document.write('<html><head><title>my div</title>');
            myWindow.document.write('</head><body >');
            myWindow.document.write(data);
            myWindow.document.write('</body></html>');
            myWindow.document.close();

            myWindow.onload=function(){

                myWindow.focus();
                myWindow.print();
                myWindow.close();
            };
        }
    </script>



<div class="content-wrapper">
    <section class="content-header">
      <h1 class="pull-left">
        Mr CCS 
        <small>Tabulation</small>
      </h1>

<div class="pull-right">
      <input type="button" class="btn btn-info" value="Print" onclick="window.print()" />
</div>
    </section>
    <section class="content" id="content_for_print">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">           
            <div class="box-body">                
              <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>Candidate No.</th>
                        <th>Candidate Name</th>
                        <th>Judge 1</th> 
                        <th>Judge 2</th>  
                        <th>Judge 3</th>  
                        <th>Overall Total (10%)</th>      
                    </tr>    
                </thead>
                  <tbody>
                
                <?php foreach($mrtab as $row): ?>
                  <tr>                    
                  <td><?php echo $row->mrcan_no;?></td>
                    <td><?php echo $row->mrcan_name;?></td>
                    <td><?php echo $row->judge1;?></td>
                    <td><?php echo $row->judge2;?></td>
                    <td><?php echo $row->judge3;?></td>
                    <td><?= $row->total ?></td>
                  </tr>
                  <?php endforeach; ?>
                    
                  </tbody>
                </table>
              </div>
            </div>      
              </form>  
               </div>                       
            </div>
          </div>             

    <section class="content-header">
      <h1>
        Ms CCS
        <small>Tabulation</small>
      </h1>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">           
            <div class="box-body">               
              <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>Candidate No.</th>
                        <th>Candidate Name</th>
                        <th>Judge 1</th> 
                        <th>Judge 2</th>  
                        <th>Judge 3</th>  
                        <th>Overall Total (10%)</th>      
                    </tr>    
                </thead>
                  <tbody>
                
                <?php foreach($mstab as $row): ?>
                  <tr>                    
                  <td><?php echo $row->mscan_no;?></td>
                    <td><?php echo $row->mscan_name;?></td>
                    <td><?php echo $row->judge1;?></td>
                    <td><?php echo $row->judge2;?></td>
                    <td><?php echo $row->judge3;?></td>
                    <td><?= $row->total ?></td>
                  </tr>
                  <?php endforeach; ?>
                    
                  </tbody>
                </table>


              </div>
            </div>      
              </form> 

            </div>
          </div>             
      </div>

<center>&nbsp;&nbsp;&nbsp;&nbsp;____________________&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_____________________&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;______________________
<h4>Rene V. Marapo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Reanne J. Llenos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jake M. Caranzo</h4></center>
    </section>
</div>
