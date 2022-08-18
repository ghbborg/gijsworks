<?php
/** Custom login screen **/

function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo content_url().'/media/wordpress-login-logo.png' ?>);
            margin-bottom: 25%;
            width:70%;
            background-size: contain;
            background-repeat: no-repeat;
        }
        body.login{
            background-color: #000;
            color:
        }
        .login #wp-submit{
            background-color:#111;
            border: 1px solid #fff;
            box-shadow:none;
            text-shadow:none;
            color:#fff;
            font-weight:bold;
        }
        .login .message, .login #login_error{
            background-color:#000!important;
            color:#fff;
            border-color:#fff!important;
        }
        .login #login_error a{
            color:#cfb53b;
        }
        .login .input, .login .input:focus{
            background-color:transparent!important;
            border: none !Important;
            border-bottom: 1px solid #fff !important;
            outline:0;
            box-shadow:none!important;
            color: #fff !important;
        }
        .login .input:-webkit-autofill, 
        .login .input:-webkit-autofill:hover, 
        .login .input:-webkit-autofill:focus {
            -webkit-text-fill-color: white !important;
            transition: background-color 5000s ease-in-out 0s !important;
        }

        .login #loginform{
            background-color: #111;
            color: #fff !important;
            border-radius:10px;
        }
        #loginform label{
            color:white;
        }
        body.login #backtoblog a, body.login #nav a{
            color:white;
        }
        body.login #backtoblog a:hover, body.login #nav a:hover{
            color:white;
        }
        #lostpasswordform {
            background: #111;
            border-radius: 10px;
            border: 1px solid #fff;;
            color: white;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );