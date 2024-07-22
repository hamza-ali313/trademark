</body>

<!-- Modal -->
<div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="modal1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <!--<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">-->
                <!--    <i class="fa-solid fa-xmark"></i>-->
                <!--</button>-->
                <div class="text-center">
                    <h2>Basic</h2>
                    <h2>in Just <span>$35</span></h2>
                    <p>Register your trademark and save yourself from the risk of losing thousands of dollars in
                        lawsuits and rebranding efforts.</p>
                </div>
            </div>
            <div class="modal-body">
                <form class="form-get-quote" action="javascript:;" method="POST">
                    <input type="text" class="form-control" name="quote[name]" placeholder="name">
                    <input type="text" class="form-control" name="quote[email]" placeholder="email">
                    <input type="tel" class="form-control" name="quote[phone]" placeholder="phone number">
                    <!--hidden feilds-->
                    <input type="text" name="quote[ip]" hidden value=<?php echo $_SERVER["REMOTE_ADDR"]; ?>>
                    <input type="text" name="quote[date]" hidden value=<?php echo date("Y/m/d"); ?>>
                    <input type="hidden" name="quote[url]"
                        value="<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
                    <input type="text" name="quote[platfrom]" hidden value=<?php echo $platform; ?>>
                    <input type="text" name="quote[c_id]" hidden value=<?php echo $c_id; ?>>
                    <input type="text" name="quote[page_name]" hidden value="landing_page_1">
                    <!--hidden feilds-->
                    <div class="text-center">
                        <button href="" type="submit" class="btn3">
                            get started
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="js/jquery-3.6.3.min.js"></script>
<!--<script src="js/wow.min.js"></script>-->
<!-- <script>
    new WOW().init();
</script> -->
<!--<script src="js/aos.js"></script>-->
<script src="js/bootstrap.bundle.min.js"></script>
<!--<script src="js/fancybox.min.js"></script>-->
<!--<script src="js/owl.carousel.min.js"></script>-->
<script src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/slick.js"></script>
<!--<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>-->
<script src="js/custom.js"></script>


</html>

<script>
    $(document).ready(function(){
        // Show the modal after 15 seconds
        setTimeout(function(){
            $('#modal1').modal('show');
        }, 100); // 15000 milliseconds = 15 seconds
    });
    $('.form-get-quote').on('submit', function (e) {
        //$('.btn-quote').on('click' , function(e){        
        var obj = $(this);
        e.preventDefault();
        var data = $(obj).serialize();
        jQuery.ajax({
            url: "/sendmail_backup.php",
            // For Demo
            // url: window.location.origin + '/lvm-track-html/v6/sendmail.php',
            // For Live
            // url: window.location.origin + '/sendmail.php',
            type: "POST",
            data: data,
            async: false, // Has to be false to be able to return response
            dataType: "json", // Has to be false to be able to return response
            success: function (response) {
                if (response.status == 1) {
                    // $('#myModal').modal('hide');
                    // $('#myModal').modal('show');
                    // alert('Submit Successfully.');
                    window.location = "/steps/trademark-application-step-1.php";
                    obj.trigger("reset");
                } else {
                    return false;
                }
            },
            beforeSend: function () {
                // Loader.show();
            }
        });
        return false;
    });

    var video = document.getElementById("myVideo");
    // // Autoplay the video
    video.play();
</script>