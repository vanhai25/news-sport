<style type="text/css">
	.box{
		margin: 100px auto;
		width: 400px;
		padding: 20px;
		border: 1px solid #cccccccc;
	}
	input{
		width: 80%;
		padding: 2px 5px;
		margin-top: 10px;
		font-size: 16px;
	}
	form{
		margin:30px auto;
	}
	span{
		font-size: 20px;
		font-weight: bold;

	}
	.btn{
		margin:10px;
	}
	button{
		padding: 5px 15px;
		margin-right: 10px;
	}
</style>
<div class="container">
	<div class="box" align="center">
		<span>Đăng nhập</span>
		<?php if(isset($mess)) echo $mess; if(isset($er)) echo $er; ?>
		<form method="POST">
			<input type="mail" name="mail" placeholder="Nhập email đăng ký"><br>
			<input type="password" name="pass" placeholder="Mật khẩu">
			<div class="btn">
				<button type="submit" name="sm">Đăng nhập</button><button type="button" onclick="location.href='dang-ky'">Đăng ký</button>
			</div>
		</form>
	</div>
</div>