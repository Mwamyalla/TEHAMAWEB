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
                            <h5>Register here</h5>
                        </div> <!-- section title -->
						<?php if(!empty($this->session->flashdata('msg'))):?>
							<div class="alert alert-success">
								<?=$this->session->flashdata('msg');?>
							</div>
						<?php endif;?>
                        <div class="main-form pt-45">
                            <form name="login-Form" id="login-Form" action="<?=base_url()."account/register/register"?>" enctype="multipart/form-data"  method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <input type="firstname" name="firstname"
                                                placeholder="Firstname" data-error="firstname is required." id="firstname" value="<?php echo set_value('firstname'); ?>">
                                            <div class="help-block with-errors"><?=form_error('firstname');?></div>
                                        </div> <!-- singel form -->
                                    </div>    
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <input type="lastname" name="lastname"
                                                placeholder="Lastname" data-error="lastname is required." id="lastname" value="<?php echo set_value('lastname'); ?>">
                                            <div class="help-block with-errors"><?=form_error('lastname');?></div>
                                        </div> <!-- singel form -->
                                    </div> 
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <input type="email" name="email"
                                                placeholder="Email" data-error="email is required." id="email" value="<?php echo set_value('email'); ?>">
                                            <div class="help-block with-errors"><?=form_error('email');?></div>
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <input type="phone" name="phone"
                                                placeholder="Phone" data-error="phone is required." id="phone" value="<?php echo set_value('phone'); ?>">
                                            <div class="help-block with-errors"><?=form_error('phone');?></div>
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <input  type="password" name="password"
                                                placeholder="Password" data-error="Password is required." id="password" value="<?php echo set_value('password'); ?>">
                                            <div class="help-block with-errors"><?=form_error('password');?></div>
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <input  type="password" 
                                                placeholder="Confirm Password" data-error="Password is required."  id="password_confirm" name="password_confirm" value="<?php echo set_value('password_confirm'); ?>">
                                            <div class="help-block with-errors"><?=form_error('password_confirm');?></div>
                                        </div> <!-- singel form -->
                                    </div> 
                                    <div class="col-md-12">
                                        <div class="singel-form form-group">
                                            <select class="form-control" placeholder="Role" data-error="role is required."  id="role" name="role">
                                                <option <?php echo set_select('role', '', false); ?> value="">Are register as student or Instructor</option>
                                                <option <?php echo set_select('role', '', false); ?> value="instructor">Instructor</option>
                                                <option <?php echo set_select('role', '', false); ?> value="student">Student</option>
                                            </select>
                                           <div class="help-block with-errors"><?=form_error('role');?></div>
                                        </div> <!-- singel form -->
                                    </div>


                                    <div class="col-md-12">
                                        <div class="singel-form">
                                            <button type="submit" name="submit" class="main-btn">Register</button>
                                        </div> <!-- singel form -->
                                    </div>
                                    
                                     <div class="col-md-12">
                                        <div class="singel-form justify-content-between d-flex">
                                            <a href="<?=base_url()."account/login"?>" >Already have an account? Login</a>
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

<?php $this->load->view('front/includes/footer');?>

