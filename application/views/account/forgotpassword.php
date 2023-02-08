<?php $this->load->view('front/includes/header');?>

    <section id="contact-page" class="pt-90 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <img src="<?=base_url()?>assets/front/images/home/login.png" class="girl img-responsive" width="500px" height="500px" alt="" />
                </div>
                <div class="col-lg-7">
                    <div class="contact-from mt-30">
                        <div class="section-title">
                            <h5>Forgot Password</h5>
                        </div> <!-- section title -->
						<?php if(!empty($this->session->flashdata('msg'))):?>
							<div class="alert alert-success">
								<?=$this->session->flashdata('msg');?>
							</div>
						<?php endif;?>
                        <div class="main-form pt-45">
                            <form name="login-Form" id="login-Form" action="<?=base_url()."account/forgotPassword/forgot"?>" enctype="multipart/form-data"  method="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="singel-form form-group">
                                            <input type="email" name="email"
                                                placeholder="Username" data-error="email is required.">
                                            <div class="help-block with-errors"><?=form_error('email');?></div>
                                        </div> <!-- singel form -->
                                    </div>


                                    <div class="col-md-12">
                                        <div class="singel-form">
                                            <button type="submit" name="submit" class="main-btn">Submit</button>
                                        </div> <!-- singel form -->
                                    </div>
                                     <div class="col-md-12">
                                        <div class="singel-form justify-content-between d-flex">
                                            <a href="<?=base_url()."account/login"?>">Go back? Login</a>
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

<?php $this->load->view('front/includes/footer');?>

