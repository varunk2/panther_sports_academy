<div class="banner1">
    <div class="wthree_banner1_info">
        <h3><span>C</span>ontact Us</h3>
    </div>
</div>

<!-- mail -->
<div class="team">
    <div class="container">

        <h3 class="w3l_header w3_agileits_header">Contact <span>Us</span></h3>
        <p class="sub_para_agile">Add Some Short Description</p>
        
        <br><br>
        
        <?php if(!empty($message)): ?>
        <!-- Message Alert -->
        <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong><?= $message ?></strong>
        </div>
        <!-- ./Message Alert -->
        <?php endif; ?>

        <div class="agile_team_grids_top">
            <div class="col-md-6 agileinfo_mail_grid_left">

                <form action="<?= base_url('/home/contact') ?>" method="post">
                    <?= csrf_field() ?>

                    <!-- Name -->
                    <span class="input input--nariko">
                        <input class="input__field input__field--nariko" name="name" type="text" id="input-20" placeholder=" " required="" />
                        <label class="input__label input__label--nariko" for="input-20">
                            <span class="input__label-content input__label-content--nariko">Name</span>
                        </label>
                    </span>
                    <!-- ./Name -->

                    <!-- Phone Number -->
                    <span class="input input--nariko">
                        <input class="input__field input__field--nariko" name="phone_no" type="text" id="input-21" placeholder=" " required="" />
                        <label class="input__label input__label--nariko" for="input-21">
                            <span class="input__label-content input__label-content--nariko">Phone Number</span>
                        </label>
                    </span>
                    <!-- ./Phone Number -->

                    <!-- Email -->
                    <span class="input input--nariko">
                        <input class="input__field input__field--nariko" name="email" type="email" id="input-21" placeholder=" " required="" />
                        <label class="input__label input__label--nariko" for="input-21">
                            <span class="input__label-content input__label-content--nariko">Email</span>
                        </label>
                    </span>
                    <!-- ./Email -->

                    <!-- Subject -->
                    <span class="input input--nariko">
                        <input class="input__field input__field--nariko" name="subject" type="text" id="input-22" placeholder=" " required="" />
                        <label class="input__label input__label--nariko" for="input-22">
                            <span class="input__label-content input__label-content--nariko">Subject</span>
                        </label>
                    </span>
                    <!-- ./Subject -->

                    <!-- Message -->
                    <textarea name="message" placeholder="Message..." id="contact_message"></textarea>
                    <input type="submit" value="Send">
                    <!-- ./Message -->

                </form>

            </div>

            <!-- Info Section -->
            <div class="col-md-6 agileinfo_mail_grid_right">
                <div class="agileinfo_mail_social_right">

                    <!-- Address -->
                    <div class="row info_section">
                        <div class="col-md-2 col-xs-2 icons_section">
                            <i class="fas fa-address-card"></i>
                        </div>
                        <div class="col-md-10 col-xs-10 info_content_section">
                            <p>Behind Village Badhkhalsa, Near Ansal's Sunshine County, Sector-62, Rai, Sonepat, Haryana</p>
                        </div>
                    </div>
                    <!-- ./Address -->

                    <!-- Phone number -->
                    <div class="row info_section">
                        <div class="col-md-2 col-xs-2 icons_section">
                            <i class="fas fa-phone-square"></i>
                        </div>
                        <div class="col-md-10 col-xs-10 info_content_section">
                            <p>Vishesh Dahiya: 7027027902, Praveen Dahiya: 9050790607</p>
                        </div>
                    </div>
                    <!-- ./Phone number -->
                    
                    <!-- Email -->
                    <div class="row info_section">
                        <div class="col-md-2 col-xs-2 icons_section">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="col-md-10 col-xs-10 info_content_section">
                            <p>redpanthersportsacademy@gmail.com</p>
                        </div>
                    </div>
                    <!-- ./Email -->
                </div>
                        
                <div class="clearfix"> </div>
                    
                <div class="agileinfo_mail_social_right">
                    <div class="agileinfo_mail_social_rightl">
                        <a href="https://www.facebook.com/panthersportsacademytdi" class="w3_contact_facebook">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                            <p>Facebook</p>
                        </a>
                    </div>
                    <div class="agileinfo_mail_social_rightr">
                        <a href="#" class="w3_contact_twitter">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                            <p>Twitter</p>
                        </a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <!-- ./Info Section -->
        </div>
    </div>
</div>

<!--- Map --->
<div class="agile_map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3492.478029831309!2d77.1220691149301!3d28.913855182307707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390dad1a67401133%3A0x168649dceac5ec51!2sPanther%20sports%20academy!5e0!3m2!1sen!2sin!4v1608220671511!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
<!--- Map --->