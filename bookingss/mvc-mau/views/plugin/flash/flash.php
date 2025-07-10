<script type="text/javascript">
    $(document).ready(function(){
        var do_alert = function(){
            $('.mat').fadeOut(300);
        };
        setTimeout(do_alert, 1000);
    });
</script>
<div class="container-fluid mat" style="width: 100%; height: 100vh; position: fixed; z-index: 999;  top: 0px; left:0px">
    <div class="row h-100 bg-black ">
        <div class="d-flex justify-content-center align-items-center wow flash" data-wow-duration="1s">

                <img src="public/demo/chop.png" alt="">
        </div>
    </div>
</div>