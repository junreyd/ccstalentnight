<script>
$(function(){
        <?php echo "var url='".base_url()."';";?>
   
        $('.view_judge').on('click',function(){
            var id = $(this).data('id');
            view_judge(id,url);
            
        });
});
    
function view_judge(id,url){
    $.ajax({    
        url: url+'judge/read_judge', 
        type: 'POST',
        data: { id:id },
        success: function(dataJim) {                        
            data = jQuery.parseJSON(dataJim);
            console.log(data);
            $('.username_here').val(data[0]['username']);
            $('.name_here').val(data[0]['name']);
            $('.judge_id').val(id);
        }
    });   
}    

</script>