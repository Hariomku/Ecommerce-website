<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Upload</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
	<style type="text/css">
      body{
          font-family: 'Tangerine', serif;
  /*font-size: 48px;*/
  text-shadow: 4px 4px 4px #aaa;
      }
		.login-wrp{
   max-width: 400px;
   width: 100%;
   margin: 50px auto;
}
.top{
   background: #131BE1;
   height: 300px;
   position: relative
}
.logo{
   position: absolute;
   max-width: 100px;
   top: 28%;
   left: 50%;
   transform: translateX(-50%);
   -webkit-transform: translateX(-50%);
}
.bottom{
   background: #eee;
   height: 300px;
   position:relative;
}
.bottom .login-form{
   background: #fff;
   position: absolute;
   box-shadow: 1px 1px 10px #999;
   width: 90%;
   top:-38%;
   left: 5%;
   border-radius: 5px;
   padding: 50px 40px;
}
.btn{
   border-radius: 30px
}
.btn-primary{
   background: #F8C407;
   border-color: #F8C407;
}
.btn-primary:hover,.btn-primary:focus{
   background: #F8C407;
   border-color: #F8C407
}
.checkbox-inline{
   cursor: pointer;
}
.btn-link{
   color: #999;
   margin-top: 10px;
   display: block
}
.btn-link:hover,.btn-link:focus{
   color: #777;
}
	</style>
</head>
<body>
<div class="login-wrp">
   <div class="top">
      <div class="logo">
         <img src="https://upload.wikimedia.org/wikipedia/commons/3/33/Pringles_logo.png" alt="" width="100px">
      </div>
   </div>
   <div class="bottom">
      <form action="" class="login-form">
         <div class="form-group">
            <input type="text" class="form-control" placeholder="Username">
         </div>
         <div class="form-group">
            <input type="password" class="form-control" placeholder="Password">
         </div>
<!--          <div class="form-group">
            <label class="checkbox-inline"><input type="checkbox" value=""> Keep me sign in</label>
         </div> -->
         <a href="#" class="btn btn-primary btn-block">Login</a>
         <p class="text-center"><small><a href="#" class="btn-link">Forgot password</a></small></p>
      </form>
   </div>
</div>
</body>
</html>