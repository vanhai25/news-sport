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
		<span>Đăng ký</span>
		<?php if(isset($mess)) echo $mess; if(isset($er)) echo $er; ?>
		<form method="POST">
			<input type="text" name="name" value="<?php if(isset($name)) echo $name; ?>" placeholder="Nhập tên"><br>
			<input type="mail" name="mail" value="<?php if(isset($mail)) echo $mail; ?>" placeholder="Nhập email đăng ký"><br>
			<input type="password" name="pass"  placeholder="Mật khẩu">
			<input type="password" name="rpass" placeholder="Nhập lại mật khẩu">
			<div class="btn">
				<?php if(isset($mess)): ?><button type="button" onclick="location.href='dang-nhap'">Đăng nhập</button><?php endif ?><button type="submit" name="sm" >Đăng ký</button>
			</div>
		</form>
	</div>
</div>