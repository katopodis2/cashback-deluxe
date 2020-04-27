<script type="text/javascript" src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{asset('js/select2.min.js')}}"></script>

<!-- Main File-->
<script type="text/javascript">
    $(window).ready(function() {
        if (!isNaN(parseInt($('.disable-to-check').val()))) {
            console.log($('.disable-to-check').val());
            $('#isRequired').attr('disabled', true);
            $('#isUnique').attr('disabled', true);
        }
    });
    $('.disable-to-check').on('change', function(e) {
        if (!isNaN(parseInt($('.disable-to-check').val()))) {
            $('#isRequired').attr('disabled', true);
            $('#isUnique').attr('disabled', true);
        } else {
            $('#isRequired').removeAttr('disabled');
            $('#isUnique').removeAttr('disabled');
        }
    });

    $('form.delete-form').submit(function() {
        let msg = $(this).children('button').attr('message');
        if (confirm(msg)) {
            return true;
        }
        return false;
    });
</script>
@stack('bottom_js')
