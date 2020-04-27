    <!-- ======================================
    ******* Page Wrapper Area Start **********
    ======================================= -->
    <div class="main-content- h-100vh">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12">
                    <!-- Middle Box -->
                    <div class="middle-box">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="xs-d-none mb-50-xs break-320-576-none">
                                            <img src="<?=base_url()?>assets/img/bg-img/2.png" alt="">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <h4 class="font-18 mb-30">Your must login first!</h4>

                                        <form action="#"  id="form_login">
                                            <div class="form-group">
                                                <label class="lock-text text-dark">Email</label>
                                                <input type="email" class="form-control height-50" name="email" placeholder="Email" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <input class="form-control" type="password" required name="pass" placeholder="Password">
                                            </div>

                                            <div class="form-group mb-0">
                                                <button class="btn btn-primary btn-block" type="button" id="btn_login" data="form_login">Login</button>
                                            </div>
                                        </form>

				</div> <!-- end card-body -->
                                </div>
                                <!-- end card -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

	<div id="dropDownSelect1"></div>

<!-- <script src="<?=base_url()?>assets/login/vendor/jquery/jquery-3.2.1.min.js"></script> -->
<!--===============================================================================================-->
<script src="<?=base_url()?>assets/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="<?=base_url()?>assets/login/vendor/bootstrap/js/popper.js"></script>
<script src="<?=base_url()?>assets/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="<?=base_url()?>assets/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="<?=base_url()?>assets/login/vendor/daterangepicker/moment.min.js"></script>
<script src="<?=base_url()?>assets/login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="<?=base_url()?>assets/login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->

<!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
<script src="<?=base_url()?>assets/login/js/main.js"></script>


<script type="text/javascript">
$(document).on("click", "#btn_login", function(e){
  e.stopPropagation();
  var id = $(this).attr('data');
  var ax = $("#"+id)[0];
  var dat = new FormData(ax);
  //if($("#"+id).valid()==true){
    $.ajax({
        dataType:'json',
        type: 'POST',
        url: '<?php echo base_url(); ?>sekolah/in',
        data: dat,
        processData: false,
        contentType: false,
        enctype: 'multipart/form-data',
        success: function(data){
          if(data.status=='success'){
            ax.reset();
            // swal(data.pesan, "", data.class);
            Swal.fire({
                title:"Perhatian!",
                text:data.pesan,
                type:data.class,
                confirmButtonClass:"btn btn-confirm mt-2"
            })
            document.location=data.redirect;
          }else{
            Swal.fire({
                title:"Perhatian!",
                text:data.pesan,
                type:data.class,
                confirmButtonClass:"btn btn-confirm mt-2"
            })
            // swal(data.pesan, "", data.class);
          }
        }
    });
  //}
});
</script>
