
<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.4
Version: 3.3.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <title>Formular Login</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
    <link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="../assets/admin/pages/css/login2.css" rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN THEME STYLES -->
    <link href="../assets/global/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
    <link href="../assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/admin/layout/css/themes/darkblue.css" rel="stylesheet" type="text/css" id="style_color"/>
    <link href="../assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">

<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGO -->
<div class="logo" style="margin-top:50px;">
    <a href="index.html" >
        <img src="../assets/admin/layout/img/govithub000.png" style="width: 400px;" alt=""/>
    </a>
</div>

<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content">
    <!-- BEGIN LOGIN FORM -->
    <form class="login-form" action="../user/index.php" method="post">
		<div class="form-title">
			<span class="form-title">Bine ai venit!</span>
			<span class="form-subtitle">Va rugam sa va logati.</span>
		</div>

		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Password</label>
			<input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="Cod aplicatie" name="codApp" id="codApp"/>
		</div>

		<div class="create-account">

				<input type="submit" value="Valideaza!"></input>

		</div>

	</form>





    <!-- END LOGIN FORM -->
    <!-- BEGIN FORGOT PASSWORD FORM -->
    <form class="forget-form" action="index.html" method="post">
        <div class="form-title">
            <span class="form-title">Ati uitat parola ?</span>
            <span class="form-subtitle">Introduceti adresa de Email pentru a reseta parola.</span>
        </div>
        <div class="form-group">
            <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email"/>
        </div>
        <div class="form-actions">
            <button type="button" id="back-btn" class="btn btn-default">Inapoi</button>
            <button type="submit" class="btn btn-default uppercase pull-right">Trimite</button>
        </div>
    </form>
    <!-- END FORGOT PASSWORD FORM -->
    <!-- BEGIN REGISTRATION FORM -->
    <form class="register-form" action="#" method="post">
        <div class="form-title">
            <span class="form-title">Inregistrare</span>
        </div>
        <p class="hint">
            Te rugam sa introduci datele:
        </p>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Nume</label>
            <input class="form-control placeholder-no-fix" type="text" placeholder="Popescu" name="name"/>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Prenume</label>
            <input class="form-control placeholder-no-fix" type="text" placeholder="Ion" name="surname"/>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">CNP</label>
            <input class="form-control placeholder-no-fix" type="text" placeholder="1910831510032" name="cnp"/>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Email</label>
            <input class="form-control placeholder-no-fix" type="text" placeholder="gmail@popescu.ro" name="email"/>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Telefon</label>
            <input class="form-control placeholder-no-fix" type="text" placeholder="0722555333" name="phone"/>
        </div>
        <p class="hint">
            Detaliile contului:
        </p>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Parola</label>
            <input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="register_password" placeholder="Parola" name="password"/>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Rescrie parola</label>
            <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Rescrie parola" name="rpassword"/>
        </div>
        <div class="form-group margin-top-20 margin-bottom-20">
            <label class="check">
                <input type="checkbox" name="tnc"/>
                <span class="loginblue-font">Sunt de de acord cu </span>
                <a href="javascript:;" class="loginblue-link">termenii si conditiile</a>

            </label>
            <div id="register_tnc_error">
            </div>
        </div>
        <div class="form-actions">
            <input type="hidden" value="register" name="method"/>
            <button type="button" id="register-back-btn" class="btn btn-default">Inapoi</button>
            <button type="submit" id="register-submit-btn" class="btn btn-primary uppercase pull-right">Inregistreaza-ma</button>
        </div>
    </form>

    <!-- END REGISTRATION FORM -->
</div>

<div class="logo" style="margin: 1px 0px 0px;">

</div>
<div class="copyright hide">

</div>
<!-- END LOGIN -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
<script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="../assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="../assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="../assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="../assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="../assets/admin/pages/scripts/login.js" type="text/javascript"></script>
<script>

    $(document).ready(function() {
        $('input[type=radio][name=authMethod]').change(function() {
            switch(this.value)
            {
                case "QR":
                    document.getElementById("qrDiv").style.display = "block";
                    document.getElementById("emailDiv").style.display = "none";
                    document.getElementById("smsDiv").style.display = "none";
                    break;
                case "email":
                    document.getElementById("qrDiv").style.display = "none";
                    document.getElementById("emailDiv").style.display = "block";
                    document.getElementById("smsDiv").style.display = "none";
                    break;
                case 'SMS':
                    document.getElementById("smsDiv").style.display = "block";
                    document.getElementById("emailDiv").style.display = "none";
                    document.getElementById("qrDiv").style.display = "none";
                    break;
            }
        });
    });

</script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
    jQuery(document).ready(function() {
        Metronic.init(); // init metronic core components
        Layout.init(); // init current layout
        Login.init();
        Demo.init();
    });
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>