<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="globals.css" />
  <link rel="stylesheet" href="" />
</head>
<style>

  .box {
  width: 5px;
  height: 29px;
}

.box .rectangle {
  position: fixed;
  width: 5px;
  height: 29px;
  top: 0;
  left: 0;
  background-color: #002a5b;
}


  .box {
    width: 700px;
    height: 379px;
  }

  .box .admin-login {
    position: fixed;
    width: 700px;
    height: 379px;
    top: 0;
    left: 0;
  }

  .label {
  width: 181px;
  height: 31px;
}

.label .admin-access {
  position: fixed;
  width: 181px;
  top: 0;
  left: 0;
  font-family: "Inter-Bold", Helvetica;
  font-weight: 400;
  color: #000000;
  font-size: 24px;
  letter-spacing: 0;
  line-height: normal;
}

.label .text-wrapper {
  font-weight: 700;
}

.label .span {
  font-family: "Inter-Regular", Helvetica;
}


</style>
<body>
  <div class="box"><div class="rectangle"></div></div>
  <div class="box"><img class="admin-login" src="img/admin-login.svg" /></div>
  <div class="label">
      <p class="admin-access"><span class="text-wrapper">Admin</span> <span class="span"> Access</span></p>
    </div>
</body>
</html>
