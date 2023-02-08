<?php $this->load->view('front/includes/header');?>
    <!--====== LOGIN PART START ======-->

    <section id="contact-page" class="pt-90 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <img src="<?=base_url()?>assets/front/images/home/login.png" class="girl img-responsive" width="500px" height="500px" alt="" />
                </div>
                <div class="col-lg-7">
                    <div class="contact-from mt-30">
                        <div class="section-title">
                            <h5>Login here</h5>
                        </div> <!-- section title -->
						<?php if(!empty($this->session->flashdata('msg'))):?>
							<div class="alert alert-success">
								<?=$this->session->flashdata('msg');?>
							</div>
						<?php endif;?>
                        <div class="main-form pt-45">
                            <form name="login-Form" id="login-Form" action="<?=base_url()."account/login/authenticate"?>" enctype="multipart/form-data"  method="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="singel-form form-group">
                                            <input type="email" name="email"
                                                placeholder="Username" data-error="email is required.">
                                            <div class="help-block with-errors"><?=form_error('email');?></div>
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-12">
                                        <div class="singel-form form-group">
                                            <input  type="password" name="password"
                                                placeholder="Password" data-error="Password is required.">
                                            <div class="help-block with-errors"><?=form_error('password');?></div>
                                        </div> <!-- singel form -->
                                    </div>


                                    <div class="col-md-12">
                                        <div class="singel-form">
                                            <button type="submit" name="submit" class="main-btn">Login</button>
                                        </div> <!-- singel form -->
                                    </div>
                                     <div class="col-md-12">
                                        <div class="singel-form justify-content-between d-flex">
                                            <a href="<?=base_url()."account/register"?>">I dont have an account? Login</a>
                                            <a href="<?=base_url()."account/forgotPassword"?>">Forget password</a>
                                        </div> <!-- singel form -->
                                    </div>
                                </div> <!-- row -->
                            </form>
                        </div> <!-- main form -->
                    </div> <!--  contact from -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== LOGIN PART ENDS ======-->
		<!-- <script>

		$("body").on("submit","#login-Form", function (e) {
			e.preventDefault();

			$.ajax({

				url: '<?=base_url()."account/login/authenticate"?>',
				type: 'POST',
				data: $(this).serializeArray(),
				dataType: 'json',
				success : function(response){

					if(response['status'] == 0)
					{
						if(response["email"] != "")
						{
							$('.email').html(response["email"]).addClass('invalid-feedback d-block');
							$('#email').addClass('is-invalid d-block');

						}else{

							$('.email').html("").removeClass('invalid-feedback d-block');
							$('#email').removeClass('is-invalid d-block');
						}

						if(response["password"] != "")
						{
							$('.password').html(response["password"]).addClass('invalid-feedback d-block');
							$('#password').addClass('is-invalid d-block');

						}else{

							$('.password').html("").removeClass('invalid-feedback d-block');
							$('#password').removeClass('is-invalid d-block');
						}

					}else{ 

						$('#ajaxresponseModel .ajaxResponse').html(response['message']);
						$('#ajaxresponseModel').modal("show");
						// location.reload();
						if(response['role'] == "admin")
						{
							window.location.replace("<?=base_url().'admin/dashboard'?>");
						}

						if(response['role'] == "student" || "instructor")
						{
							window.location.replace("<?=base_url().'elearning/dashboard'?>");
						}
						

						$('.email').html("").removeClass('invalid-feedback d-block');
						$('#email').removeClass('is-invalid d-block');

						$('.password').html("").removeClass('invalid-feedback d-block');
						$('#password').removeClass('is-invalid d-block');

					}
				}
			});
		});

	</script> -->

<?php $this->load->view('front/includes/footer');?>

