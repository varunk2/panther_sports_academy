<div class="banner1">
    <div class="wthree_banner1_info">
        <h3><span>R</span>egisration</h3>
    </div>
</div>

<!-- mail -->
<div class="team">
    <div class="container">

        <h3 class="w3l_header w3_agileits_header">Registration</h3>
        <p class="sub_para_agile">We are glad you chose us!</p>
        
        <br><br>

        <ul class="nav nav-tabs nav-justified">
            <li class="active"><a data-toggle="tab" href="#cricket">Cricket</a></li>
            <li><a data-toggle="tab" href="#football">Football</a></li>
            <li><a data-toggle="tab" href="#body_fitness">Body Fitness</a></li>
        </ul>

        <div class="tab-content">

            <!-- Cricket Form -->            
            <div id="cricket" class="tab-pane fade in active">
                <div class="row">
                    <div class="agile_team_grids_top">
                        <div class="col-md-12 agileinfo_mail_grid_left">

                            <form action="<?= base_url('/studentregistration/cricket') ?>" method="post" id="cricket_form">
                                <p style="font-size: 20px;">Fields marked with <span class="text-danger" style="font-size: larger;">*</span> are mandatory.</p>
                                <?= csrf_field() ?>

                                
                                <!-- Name -->
                                <div class="form-group">
                                    <label for="c_name">Name <span class="text-danger">*</span></label>
                                    <input class="form-control" name="name" type="text" id="c_name" />
                                </div>
                                <!-- ./Name -->

                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- Phone Number -->
                                        <div class="form-group">
                                            <label for="c_phone_no">Phone Number <span class="text-danger">*</span></label>
                                            <input class="form-control" name="phone_no" type="text" id="c_phone_no" />
                                        </div>
                                        <!-- ./Phone Number -->
                                    </div>

                                    <div class="col-md-6">
                                        <!-- Email -->
                                        <div class="form-group">
                                            <label for="c_email">Email <span class="text-danger">*</span></label>
                                            <input class="form-control" name="email" type="email" id="c_email" />
                                        </div>
                                        <!-- ./Email -->
                                    </div>
                                </div>

                                <!-- School -->
                                <div class="form-group">
                                    <label for="c_school">School <span class="text-danger">*</span></label>
                                    <input class="form-control" name="school" type="text" id="c_school" />
                                </div>
                                <!-- ./School -->
                                
                                <div class="row">
                                    <div class="col-md-4">
                                        <!-- Age -->
                                        <div class="form-group">
                                            <label for="c_age">Age <span class="text-danger">*</span></label>
                                            <input class="form-control" name="age" type="text" id="c_age" />
                                        </div>
                                        <!-- ./Age -->
                                    </div>

                                    <div class="col-md-4">
                                        <!-- Date Of Birth -->
                                        <div class="form-group">
                                            <label for="c_dob">Date Of Birth <span class="text-danger">*</span></label>
                                            <input class="form-control" name="dob" type="text" id="c_dob" />
                                        </div>
                                        <!-- ./Date Of Birth -->                                        
                                    </div>

                                    <div class="col-md-4">
                                        <!-- Gender -->
                                        <div class="form-group">
                                            <label for="c_gender">Gender <span class="text-danger">*</span></label>
                                            <select name="gender" id="c_gender" class="form-control">
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                        <!-- ./Gender -->                                        
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <!-- Height -->
                                        <div class="form-group">
                                            <label for="c_height">Height</label>
                                            <input class="form-control" name="height" type="text" id="c_height" />
                                        </div>
                                        <!-- ./Height -->
                                    </div>

                                    <div class="col-md-4">
                                        <!-- Weight -->
                                        <div class="form-group">
                                            <label for="c_weight">Weight</label>
                                            <input class="form-control" name="weight" type="text" id="c_weight" />
                                        </div>
                                        <!-- ./Weight -->                                        
                                    </div>

                                    <div class="col-md-4">
                                        <!-- Blood Group -->
                                        <div class="form-group">
                                            <label for="c_blood_group">Blood Group</label>
                                            <select name="blood_group" id="c_blood_group" class="form-control">
                                                <option value="O-">O-</option>
                                                <option value="O+">O+</option>
                                                <option value="A-">A-</option>
                                                <option value="A+">A+</option>
                                                <option value="B-">B-</option>
                                                <option value="B+">B+</option>
                                                <option value="AB-">AB-</option>
                                                <option value="AB+">AB+</option>
                                            </select>
                                        </div>
                                        <!-- ./Blood Group -->                                        
                                    </div>
                                </div>

                                <!-- Parents/Guardians Name -->
                                <div class="form-group">
                                    <label for="c_parents_name">Parent or Guardians Name <span class="text-danger">*</span></label>
                                    <input class="form-control" name="parents_name" type="text" id="c_parents_name" />
                                </div>
                                <!-- ./Parents/Guardians Name -->
                                
                                <!-- Referred By -->
                                <div class="form-group">
                                    <label for="c_referred_by">Referred By</label>
                                    <input class="form-control" name="referred_by" type="text" id="c_referred_by" />
                                </div>
                                <!-- ./Referred By -->

                                <!-- Address -->
                                <div class="form-group">
                                    <label for="c_address">Address <span class="text-danger">*</span></label>
                                    <textarea name="address" class="form-control" id="c_address" placeholder="Address *"></textarea>
                                </div>

                                <p>The information given above is correct to the best of my knowledge and if found wrong or misleading the application can be disqualified and the fees forfeited at once.</p>

                                <p>Any information provided to the Panther Sports Academy will be treated with the strictest of confidence.</p>

                                <p>My ward will be participating in practice session and competition at his/her own risk. I will not claim any compensation for his/her injury during playing. Management will not be responsible for any injury or loss of life.</p>

                                <p>Rules:</p>
                                <ol>
                                    <li>Players should be in proper dress and bring their own playing kits.</li>
                                    <li>Any misbehaviour or indiscipline on part of the player could lead him to serious disciplinary action by the authority.</li>
                                </ol>

                                <div class="checkbox">
                                    <label><input type="checkbox" class="cricket_rules_checkbox"><span> I agree to all the rules of Panther Sports Academy.</span></label>
                                </div>

                                <button class="btn btn-lg btn-block disabled cricket_form_submit coaching_form_button">Send</button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Cricket Form -->

            <!-- Football Form -->
            <div id="football" class="tab-pane fade">
                <div class="row">
                    <div class="agile_team_grids_top">
                        <div class="col-md-12 agileinfo_mail_grid_left">

                            <form action="<?= base_url('/studentregistration/football') ?>" method="post" id="football_form">
                                <p style="font-size: 20px;">Fields marked with <span class="text-danger" style="font-size: larger;">*</span> are mandatory.</p>
                                <?= csrf_field() ?>

                                <!-- Name -->
                                <div class="form-group">
                                    <label for="f_name">
                                        Name <span class="text-danger">*</span>
                                    </label>
                                    <input class="form-control" name="name" type="text" id="f_name" />
                                </div>
                                <!-- ./Name -->

                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- Phone Number -->
                                        <div class="form-group">
                                            <label for="input-21">
                                                Phone Number <span class="text-danger">*</span>
                                            </label>
                                            <input class="form-control" name="phone_no" type="text" id="input-21" />
                                        </div>
                                        <!-- ./Phone Number -->
                                    </div>

                                    <div class="col-md-6">
                                        <!-- Email -->
                                        <div class="form-group">
                                            <label for="input-21">
                                                Email <span class="text-danger">*</span>
                                            </label>
                                            <input class="form-control" name="email" type="email" id="input-21" />
                                        </div>
                                        <!-- ./Email -->                                        
                                    </div>
                                </div>

                                <!-- School -->
                                <div class="form-group">
                                    <label for="input-22">
                                        School <span class="text-danger">*</span>
                                    </label>
                                    <input class="form-control" name="school" type="text" id="input-22" />
                                </div>
                                <!-- ./School -->

                                <div class="row">
                                    <div class="col-md-4">
                                        <!-- Age -->
                                        <div class="form-group">
                                            <label for="input-21">
                                                Age <span class="text-danger">*</span></span>
                                            </label>
                                            <input class="form-control" name="age" type="text" id="input-21" />
                                        </div>
                                        <!-- ./Age -->
                                    </div>

                                    <div class="col-md-4">
                                        <!-- Date Of Birth -->
                                        <div class="form-group">
                                            <label for="input-21">
                                                Date Of Birth <span class="text-danger">*</span>
                                            </label>
                                            <input class="form-control" name="dob" type="text" id="f_dob" />
                                        </div>
                                        <!-- ./Date Of Birth -->                                        
                                    </div>

                                    <div class="col-md-4">
                                        <!-- Gender -->
                                        <label for="input-21">
                                            Gender <span class="text-danger">*</span>
                                        </label>
                                        <div class="form-group">
                                            <select name="gender" class="form-control">
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                        <!-- ./Gender -->                                        
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <!-- Height -->
                                        <div class="form-group">
                                            <label for="input-21">
                                                Height <span class="text-danger">*</span>
                                            </label>
                                            <input class="form-control" name="height" type="text" id="input-21" />
                                        </div>
                                        <!-- ./Height -->
                                    </div>

                                    <div class="col-md-4">
                                        <!-- Weight -->
                                        <div class="form-group">
                                            <label for="input-21">
                                                Weight <span class="text-danger">*</span>
                                            </label>
                                            <input class="form-control" name="weight" type="text" id="input-21" />
                                        </div>
                                        <!-- ./Weight -->                                        
                                    </div>

                                    <div class="col-md-4">
                                        <!-- Blood Group -->
                                        <div class="form-group">
                                            <label for="input-21">
                                                Blood Group <span class="text-danger">*</span>
                                            </label>
                                            <select name="blood_group" class="form-control">
                                                <option value="O-">O-</option>
                                                <option value="O+">O+</option>
                                                <option value="A-">A-</option>
                                                <option value="A+">A+</option>
                                                <option value="B-">B-</option>
                                                <option value="B+">B+</option>
                                                <option value="AB-">AB-</option>
                                                <option value="AB+">AB+</option>
                                            </select>
                                        </div>
                                        <!-- ./Blood Group -->                                        
                                    </div>
                                </div>

                                <!-- Parents/Guardians Name -->
                                <div class="form-group">
                                    <label for="input-20">
                                        Parents/Guardians Name <span class="text-danger">*</span>
                                    </label>
                                    <input class="form-control" name="parents_name" type="text" id="input-20" />
                                </div>
                                <!-- ./Parents/Guardians Name -->
                                
                                <!-- Referred By -->
                                <div class="form-group">
                                    <label for="input-20"> Referred By </label>
                                    <input class="form-control" name="referred_by" type="text" id="input-20" />
                                </div>
                                <!-- ./Referred By -->

                                <!-- Address -->
                                <div class="form-group">
                                    <label for="input-20"> Address <span class="text-danger">*</span></label>
                                    <textarea class="form-control" name="address"></textarea>
                                </div>
                                <!-- ./Address -->

                                <p>The information given above is correct to the best of my knowledge and if found wrong or misleading the application can be disqualified and the fees forfeited at once.</p>

                                <p>Any information provided to the Panther Sports Academy will be treated with the strictest of confidence.</p>

                                <p>My ward will be participating in practice session and competition at his/her own risk. I will not claim any compensation for his/her injury during playing. Management will not be responsible for any injury or loss of life.</p>

                                <p>Rules:</p>
                                <ol>
                                    <li>Players should be in proper dress and bring their own playing kits.</li>
                                    <li>Any misbehaviour or indiscipline on part of the player could lead him to serious disciplinary action by the authority.</li>
                                </ol>

                                <div class="checkbox">
                                    <label><input type="checkbox" class="football_rules_checkbox"><span> I agree to all the rules of Panther Sports Academy.</span></label>
                                </div>

                                <button class="btn btn-lg btn-block disabled football_form_submit coaching_form_button">Send</button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Football Form -->

            <!-- Body Fitness Form -->
            <div id="body_fitness" class="tab-pane fade">
                <div class="row">
                    <div class="agile_team_grids_top">
                        <div class="col-md-12 agileinfo_mail_grid_left">

                            <form action="<?= base_url('/studentregistration/body_fitness') ?>" method="post" id="bodyfitness_form">
                                <p style="font-size: 20px;">Fields marked with <span class="text-danger" style="font-size: larger;">*</span> are mandatory.</p>
                                <?= csrf_field() ?>

                                <!-- Name -->
                                <div class="form-group">
                                    <label for="input-20">
                                        Name <span class="text-danger">*</span>
                                    </label>
                                    <input class="form-control" name="name" type="text" id="input-20" />
                                </div>
                                <!-- ./Name -->

                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- Phone Number -->
                                        <div class="form-group">
                                            <label for="input-20">
                                                Phone Number <span class="text-danger">*</span>
                                            </label>
                                            <input class="form-control" name="phone_no" type="text" id="input-21" />
                                        </div>
                                        <!-- ./Phone Number -->
                                    </div>

                                    <div class="col-md-6">
                                        <!-- Email -->
                                        <div class="form-group">
                                            <label for="input-20">
                                                Email <span class="text-danger">*</span>
                                            </label>
                                            <input class="form-control" name="email" type="email" id="input-21" />
                                        </div>
                                        <!-- ./Email -->                                        
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <!-- Age -->
                                        <div class="form-group">
                                            <label for="input-20">
                                                Age <span class="text-danger">*</span>
                                            </label>
                                            <input class="form-control" name="age" type="text" id="input-21" />
                                        </div>
                                        <!-- ./Age -->
                                    </div>

                                    <div class="col-md-4">
                                        <!-- Date Of Birth -->
                                        <div class="form-group">
                                            <label for="input-20">
                                                Date Of Birth <span class="text-danger">*</span>
                                            </label>
                                            <input class="form-control" name="dob" type="text" id="b_dob" />
                                        </div>
                                        <!-- ./Date Of Birth -->                                        
                                    </div>

                                    <div class="col-md-4">
                                        <!-- Gender -->
                                        <div class="form-group">
                                            <label for="input-20">
                                                Gender <span class="text-danger">*</span>
                                            </label>
                                            <select name="gender" class="form-control">
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                        <!-- ./Gender -->                                        
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <!-- Height -->
                                        <div class="form-group">
                                            <label for="input-20">Height</label>
                                            <input class="form-control" name="height" type="text" id="input-21" />
                                        </div>
                                        <!-- ./Height -->
                                    </div>

                                    <div class="col-md-4">
                                        <!-- Weight -->
                                        <div class="form-group">
                                            <label for="input-20">Weight</label>
                                            <input class="form-control" name="weight" type="text" id="input-21" />
                                        </div>
                                        <!-- ./Weight -->                                        
                                    </div>

                                    <div class="col-md-4">
                                        <!-- Blood Group -->
                                        <div class="form-group">
                                            <label for="input-20">Blood Group</label>
                                            <select name="blood_group" class="form-control">
                                                <option value="O-">O-</option>
                                                <option value="O+">O+</option>
                                                <option value="A-">A-</option>
                                                <option value="A+">A+</option>
                                                <option value="B-">B-</option>
                                                <option value="B+">B+</option>
                                                <option value="AB-">AB-</option>
                                                <option value="AB+">AB+</option>
                                            </select>
                                        </div>
                                        <!-- ./Blood Group -->                                        
                                    </div>
                                </div>
                                
                                <!-- Referred By -->
                                <div class="form-group">
                                    <label for="input-20">Referred By</label>
                                    <input class="form-control" name="referred_by" type="text" id="input-20" />
                                </div>
                                <!-- ./Referred By -->

                                <!-- Address -->
                                <div class="form-group">
                                    <label for="input-20">Address <span class="text-danger">*</span></label>
                                    <textarea class="form-control" name="address"></textarea>
                                </div>
                                <!-- ./Address -->

                                <p>The information given above is correct to the best of my knowledge and if found wrong or misleading the application can be disqualified and the fees forfeited at once.</p>

                                <p>Any information provided to the Panther Sports Academy will be treated with the strictest of confidence.</p>

                                <p>I will be participating in all practice sessions my own risk. I will not claim any compensation for any injury during session. Management will not be responsible for any injury or loss of life.</p>

                                <p>Rules:</p>
                                <ol>
                                    <li>Participants should be in proper dress and bring their own accessories.</li>
                                    <li>Any misbehaviour or indiscipline on part of the participants could lead him/her to serious disciplinary action by the authority.</li>
                                </ol>

                                <div class="checkbox">
                                    <label><input type="checkbox" class="bodyfitness_checkbox_cricket"><span> I agree to all the rules of Panther Sports Academy.</span></label>
                                </div>

                                <button type="submit" class="btn btn-lg btn-block disabled bodyfitness_form_submit coaching_form_button">Send</button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Body Fitness Form -->

        </div>
    </div>
</div>