<?php
/** Custom login screen **/

function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo content_url().'/media/wordpress-login-logo.png' ?>);
            margin-bottom: 10%;
            width:50%;
            background-size: contain;
            background-repeat: no-repeat;
        }
        body.login{
            background-color: #1C1C1C;
            color:
        }
        .login #wp-submit{
            background-color:#1C1C1C;
            border: 1px solid #fff;
            box-shadow:none;
            text-shadow:none;
            color:#fff;
            font-weight:bold;
        }
        .login .message, .login #login_error{
            background-color:#1C1C1C!important;
            color:#fff;
            border-color:#fff!important;
        }
        .login #login_error a{
            color:#F7A02D;
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
            background-color: #1C1C1C;
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
            background: #1C1C1C;
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