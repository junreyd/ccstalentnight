<script>
$(document).ready(function () {
    var count_down_timer = new Date().getTime() + 10000;
    var $count_down = $('#count_down');
    var $count_down_modal = $('#count_down_modal');
    var $top_5_modal = $('#top_5_modal');

    $count_down_modal.modal('show');

    $count_down.countdown(count_down_timer, { elapse: true })
    .on('update.countdown', function(event) {
        var $this = $(this);
        if (event.elapsed) {
            $count_down.countdown('stop');
            $count_down_modal.modal('hide');
            $top_5_modal.modal('show');
        } else {
            $this.html(event.strftime('To end: <span>%H:%M:%S</span>'));
        }
    });
});
</script>