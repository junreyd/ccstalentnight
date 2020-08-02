<script>
$(function(){
        <?php echo "var url='".base_url()."';";?>
   
        $('.view_mrcan').on('click',function(){
            var id = $(this).data('id');
            view_mrcan(id,url);
            
        });

          $('.view_mscan').on('click',function(){
            var id = $(this).data('id');
            view_mscan(id,url);
            
        });
});
    
function view_mrcan(id,url){
    $.ajax({    
        url: url+'candidate/read_mrcandidate', 
        type: 'POST',
        data: { id:id },
        success: function(dataJim) {                        
            data = jQuery.parseJSON(dataJim);
            console.log(data);
            $('.mrcan_no_here').val(data[0]['mrcan_no']);
            $('.mrcan_name_here').val(data[0]['mrcan_name']);
            $('.mrcan_profile_here').attr('src', url+data[0]['mrprofile']);
            $('.mrcan_id').val(id);
        }
    });
}  

function view_mscan(id,url){
    $.ajax({    
        url: url+'candidate/read_mscandidate', 
        type: 'POST',
        data: { id:id },
        success: function(dataJim) {                        
            data = jQuery.parseJSON(dataJim);
            console.log(data);
            $('.mscan_no_here').val(data[0]['mscan_no']);
            $('.mscan_name_here').val(data[0]['mscan_name']);
            $('.mscan_profile_here').attr('src', url+data[0]['msprofile']);
            $('.mscan_id').val(id);
        }
    }); 
}    

</script>