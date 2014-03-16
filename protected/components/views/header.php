<header id="masthead" class="clearfix">
	<div class="prl-header-logo"><a href=""><img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/logo.png" alt="Original" /></a></div>
	<form id="login-header">
		<div>
			<div class="head-login-username">
				<p>Tài khoản đăng nhập</p>
				<input type="text" placeholder="Username" class="input-login">
			</div>
			<div class="head-login-password">
				<p>Mật khẩu người dùng</p>
				<input type="password" placeholder="Password" class="input-login">
			</div>	
			<button class="submit-login" type="submit">Đăng nhập</button>
		</div>
		<label >
			<input type="checkbox" id="form-s-mix1" checked="checked"> Remember me
		</label>
		<a href="#">Lost your password?</a>
	</form>
</header>
<style type="text/css">
	#login-header div{
		display: inline-block;
	}
	#login-header div p{
		margin-bottom: 0px;
	}
	.prl-header-logo{
		float: left;
	}
	#login-header a:hover{
		color: #fff;
	}
	#login-header label{
		display: inline-block;
		margin-right: 32px;
	}
	.submit-login{
		padding: 4px 9px;
		margin-bottom: 3px;
	}
	.input-login{
		padding: 3px 9px !important;
	}
	#login-header{
		margin-right: 40px;
		float: right;
		width: 40%;
		padding-top: 5px;
	}
</style>