<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Aplikasi Simulasi Penjualan</title>
<link href="assets/font/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="assets/css/style.css" rel="stylesheet" type="text/css" /> 

<script type="text/javascript">
function validasi(form){
if (form.username.value == ""){
alert("Anda belum mengisikan Username");
form.username.focus();
return (false);
}
     
if (form.password.value == ""){
alert("Anda belum mengisikan Password");
form.password.focus();
return (false);
}
return (true);
}
</script>
</head>
<body class="body-login" OnLoad="document.login.username.focus();">
<div class="body-wrapper">
<div id="login-page">
<h2 class="login-header"><i style="font-size:30px;color:#fff;" class="fa fa-windows"></i> <span style="font-size:20px;font-weight:400;color:#fff;font-family: 'Source Sans Pro','Helvetica Neue',Helvetica,Arial,sans-serif;">APLIKASI SIMULASI PENJUALAN</span></h2>
<div class="login-triangle"></div>
<div id="login">


<form name="form1" method="post" action="loginaksi.php" onSubmit="return validasi(this)">
  <p style="position: relative;">
  <input name="username" type="text" id="username" placeholder="Username">
  <i class="fa fa-user icon-login"></i>
  </p>
  
  <p style="position: relative;">
  <input name="password" type="password" id="password" placeholder="Password">
  <i class="fa fa-lock icon-login"></i>
  </p>
  
  <p>
  <input type="submit" name="Submit" value="LOGIN">
  </p>
</form>

</div>
</div>
</div>
</body>
</html>