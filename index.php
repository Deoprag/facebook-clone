<!DOCTYPE html>

<html lang="en-US">

    <head>
        <title>Login Facebook</title>
        <meta charset="UTF-8" />
        <meta name="description" content="My website description"/>
        <meta name="keywords" content="Words, separate, by, comma" />
        <meta name="author" content="Deoprag"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
        <link href="css/style.css" rel="stylesheet"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    </head>

    <body>
        <header>
            <div class="center">
                <div class="logo">
                    <h2>facebook</h2>
                </div> <!--Logo-->
                <form method="post" class="form-login">

                    <div class="form-element">
                        <p>Email or Phone</p>
                        <input type="email" />
                    </div><!--Form-Element-->

                    <div class="form-element">
                            <p>Password</p>
                            <input type="password" />
                    </div><!--Form-Element-->

                    <div class="form-element">
                        <input type="submit" name="action" value="Log In"/>
                    </div>

                </form> <!--Form-Login-->
            <div class="clear"></div><!--Clear-->
            </div> <!--Center-->
        </header>

        <section class="main">
            <div class="center">

                <div class="img-people">
                    <h2>Connect with friends and the
                        world around you on Facebook.</h2>
                    <img src="assets/world.png" />
                </div> <!--Img-People-->

                <div class="sign-up">
                    <h2>Sign Up</h2>
                    <h3>It’s free and always will be.</h3>

                    <form class="create-account">

                        <div class="w50">
                            <input placeholder="First name" type="text"  />
                        </div> <!--W50-->

                        <div class="w50">
                            <input placeholder="Last name" type="text"  />
                        </div> <!--W50-->

                        <div class="w100">
                            <input placeholder="Mobile number or email" type="email"  />
                        </div> <!--W100-->

                        <div class="w100">
                            <input placeholder="New password" type="password"  />
                        </div> <!--W100-->

                        <div class="w100">

                            <h3>Birthday</h3>

                            <select name="month" class="birthday">
                                <!--Aplicar depois o PHP-->
                                <option value="0" selected="1">Month</option>
                                <option value="1">Jan</option>
                                <option value="2">Feb</option>
                                <option value="3">Mar</option>
                                <option value="4">Apr</option>
                                <option value="5">May</option>
                                <option value="6">Jun</option>
                                <option value="7">Jul</option>
                                <option value="8">Aug</option>
                                <option value="9">Sep</option>
                                <option value="0">Oct</option>
                                <option value="11">Nov</option>
                                <option value="12">Dec</option>
                            </select>

                            <select name="day" class="birthday">
                                <option value="0">Day</option>
                                <?php
                                    for($i = 1; $i <= 31; $i++){
                                ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php } ?>
                            </select>

                            <select name="year" class="birthday">
                                <option value="0">Year</option>
                                <?php
                                    for($i = 1905; $i <= 2022; $i++){
                                ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php } ?>
                            </select>

                        </div> <!--W100-->

                        <div class="w100">
                            <div class="input-radio">
                                <input type="radio" value="female"/>
                                <h3>Female</h3>
                            </div> <!--Radio-->
                            
                            <div class="input-radio">
                                <input type="radio" value="male"/>
                                <h3>Male</h3>
                            </div> <!--Radio-->
                            <div class="clear"></div><!--Clear-->
                        </div>

                        <div class="w100">
                            <input type="submit" name="action" value="Sign Up"/>
                        </div> <!--W100-->
                        <div class="clear"></div><!--Clear-->

                    </form> <!--Create-Account-->
                </div> <!--Sign-Up-->


            <div class="clear"></div> <!--Clear-->
            </div> <!--Center-->
        </section> <!--Main-->
        
    </body>

</html>
