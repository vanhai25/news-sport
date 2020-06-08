<style type="text/css">
	.box{
		width: 80%;
		padding: 10px;
		border-radius: 10px;

		color:white;
	}
</style>
<div class="container">
	<div class="row">
		<div class="col-md-3" align="center">
			<div class="box" align="left" style="background: #800000">
				<div class="title" align="right">
					<p><i class="fas fa-file-word" style="margin-right: 40px; font-size: 50px"></i> Bài viết: <span style="font-size: 24px;"><?=$post->sl?></span></p>
				</div>
				<span><i class="fas fa-clipboard-list"></i> Bài viết, tin tức</span>
			</div>
		</div>

		<div class="col-md-3" align="center">
			<div class="box" align="left" style="background: #BFCA14">
				<div class="title" align="right">
					<p><i class="fas fa-user" style="margin-right: 40px; font-size: 50px"></i>Cầu thủ: <span style="font-size: 24px;"><?=$player->sl?></span></p>
				</div>
				<span><i class="fas fa-clipboard-list"></i> Thông tin cầu thủ </span>
			</div>
		</div>


		<div class="col-md-3" align="center">
			<div class="box" align="left" style="background: #072292">
				<div class="title" align="right">
					<p><i class="fas fa-user" style="margin-right: 40px; font-size: 50px"></i>Người dùng: <span style="font-size: 24px;"><?=$user->sl?></span></p>
				</div>
				<span><i class="fas fa-clipboard-list"></i> Đã đăng ký tài khoản</span>
			</div>
		</div>


		<div class="col-md-3" align="center">
			<div class="box" align="left" style="background: red">
				<div class="title" align="right">
					<p><i class="fas fa-comment" style="margin-right: 40px; font-size: 50px"></i>Bình luận: <span style="font-size: 24px;"><?=$comment->sl?></span></p>
				</div>
				<span><i class="fas fa-clipboard-list"></i> Người dùng đã comment</span>
			</div>
		</div>
	</div>
</div>