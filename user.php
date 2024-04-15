<!DOCTYPE html>
<?php
$PhoneNumber = $_GET['PhoneNumber'];
$conn = mysqli_connect('localhost','root','');
mysqli_select_db($conn,'1_db');
$sql_name = "select Username from user where PhoneNumber='$PhoneNumber' ";
$sql_icon = "select icon_link from user where PhoneNumber='$PhoneNumber' ";
$icon_rs = mysqli_query($conn, $sql_icon);
?>

<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="font/font_svcu02nytc/iconfont.css"/>
		<link rel="stylesheet" type="text/css" href="style/public.css"/>
		<link rel="stylesheet" type="text/css" href="style/user.css"/>
	</head>
	<body>
		<div class="header">
			<div class="container">
				<div class="logo"><a href="index.html"><img src="image/logoblack.png" ></a></div>
				<ul class="titlelist">
					<li><a href="index.html">Home</a></li>
					<li><a href="liao.html">Community</a></li>
					<li><a href="activity.html">Activity</a></li>
					<li><a href="photoshi.html">Rank</a></li>
					<li><a href="imglist.html">Library</a></li>
				</ul>
			</div>
		</div>
		<div class="banner" style="margin-top:80px;">
			<div class="user">
				<div class="user-img"><img src= "" ></div>
				<div class="user-text">
					<div>
					<?php
					if ($user_rs = mysqli_query($conn,$sql_name)) {
                      while ($obj = mysqli_fetch_object($user_rs)) {
                  printf("%s", $obj->Username);
                  }
                }?>
            <i class="iconfont icon-v"></i><span>+Fol</span><span>...</span></div>
					<p>Following 1<span>|</span>Followers 4396</p>
				</div>
			</div>
			<div class="fenxiang">
				Share:<a href="#"><i class="iconfont icon-weibo"></i></a><a href="#"><i class="iconfont icon-weixin"></i></a><a href="#"><i class="iconfont icon-kongjian"></i></a>
			</div>
		</div>
		<div class="user-nav">
			<ul>
				<li><a href="">Work 15</a></li>
				<li><a href="">album</a></li>
				<li><a href="">collect</a></li>
				<li><a href="">profolio</a></li>
				<li><a href="">honor</a></li>
			</ul>
			<div>
				<span>all tags<i class="iconfont icon-xia"></i></span>
				<span>all years<i class="iconfont icon-xia"></i></span>
			</div>
		</div>
		<div class="centerbox">
			<div class="container">
				<div class="centerbox-nav">
					<ul>
						<li><a href="#">all</a></li>
						<li><a href="#">picture</a></li>
						<li><a href="#">blog post</a></li>
					</ul>
					<form action="#">
						<input type="text" placeholder="Search for works">
						<i class="iconfont icon-btn_search"></i>
					</form>
				</div>
				<div class="opus">
					<ul>
						<li>
							<a href="#">
								<img src="image/20.png" alt="">
								<div>
									<div class="opus-time">November 23, 2022</div>
									<h3>blues snow</h3>
									<span class="opus-biao">winter colors</span>
									<div class="opus-static">
										<div><span><i class="iconfont icon-yanjing"></i>188865</span><span><i class="iconfont icon-xiaoxi"></i>25</span></div>
										<div><span><i class="iconfont icon-shoucang"></i>791</span></div>
									</div>
								</div>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="image/21.png" alt="">
								<div>
									<div class="opus-time">November 23, 2022</div>
									<h3>blues snow</h3>
									<span class="opus-biao">winter colors</span>
									<div class="opus-static">
										<div><span><i class="iconfont icon-yanjing"></i>188865</span><span><i class="iconfont icon-xiaoxi"></i>25</span></div>
										<div><span><i class="iconfont icon-shoucang"></i>791</span></div>
									</div>
								</div>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="image/43.jpg" alt="">
								<div>
									<div class="opus-time">November 23, 2022</div>
									<h3>blues snow</h3>
									<span class="opus-biao">winter colors</span>
									<div class="opus-static">
										<div><span><i class="iconfont icon-yanjing"></i>188865</span><span><i class="iconfont icon-xiaoxi"></i>25</span></div>
										<div><span><i class="iconfont icon-shoucang"></i>791</span></div>
									</div>
								</div>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="image/30.png" alt="">
								<div>
									<div class="opus-time">November 23, 2022</div>
									<h3>blues snow</h3>
									<span class="opus-biao">winter colors</span>
									<div class="opus-static">
										<div><span><i class="iconfont icon-yanjing"></i>188865</span><span><i class="iconfont icon-xiaoxi"></i>25</span></div>
										<div><span><i class="iconfont icon-shoucang"></i>791</span></div>
									</div>
								</div>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="image/31.png" alt="">
								<div>
									<div class="opus-time">November 23, 2022</div>
									<h3>blues snow</h3>
									<span class="opus-biao">winter colors</span>
									<div class="opus-static">
										<div><span><i class="iconfont icon-yanjing"></i>188865</span><span><i class="iconfont icon-xiaoxi"></i>25</span></div>
										<div><span><i class="iconfont icon-shoucang"></i>791</span></div>
									</div>
								</div>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="image/32.png" alt="">
								<div>
									<div class="opus-time">November 23, 2022</div>
									<h3>blues snow</h3>
									<span class="opus-biao">winter colors</span>
									<div class="opus-static">
										<div><span><i class="iconfont icon-yanjing"></i>188865</span><span><i class="iconfont icon-xiaoxi"></i>25</span></div>
										<div><span><i class="iconfont icon-shoucang"></i>791</span></div>
									</div>
								</div>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="image/40.jpg" alt="">
								<div>
									<div class="opus-time">November 23, 2022</div>
									<h3>blues snow</h3>
									<span class="opus-biao">winter colors</span>
									<div class="opus-static">
										<div><span><i class="iconfont icon-yanjing"></i>188865</span><span><i class="iconfont icon-xiaoxi"></i>25</span></div>
										<div><span><i class="iconfont icon-shoucang"></i>791</span></div>
									</div>
								</div>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="image/44.jpg" alt="">
								<div>
									<div class="opus-time">November 23, 2022</div>
									<h3>blues snow</h3>
									<span class="opus-biao">winter colors</span>
									<div class="opus-static">
										<div><span><i class="iconfont icon-yanjing"></i>188865</span><span><i class="iconfont icon-xiaoxi"></i>25</span></div>
										<div><span><i class="iconfont icon-shoucang"></i>791</span></div>
									</div>
								</div>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="image/48.png" alt="">
								<div>
									<div class="opus-time">November 23, 2022</div>
									<h3>blues snow</h3>
									<span class="opus-biao">winter colors</span>
									<div class="opus-static">
										<div><span><i class="iconfont icon-yanjing"></i>188865</span><span><i class="iconfont icon-xiaoxi"></i>25</span></div>
										<div><span><i class="iconfont icon-shoucang"></i>791</span></div>
									</div>
								</div>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="image/20.png" alt="">
								<div>
									<div class="opus-time">November 23, 2022</div>
									<h3>blues snow</h3>
									<span class="opus-biao">winter colors</span>
									<div class="opus-static">
										<div><span><i class="iconfont icon-yanjing"></i>188865</span><span><i class="iconfont icon-xiaoxi"></i>25</span></div>
										<div><span><i class="iconfont icon-shoucang"></i>791</span></div>
									</div>
								</div>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="image/18.png" alt="">
								<div>
									<div class="opus-time">November 23, 2022</div>
									<h3>blues snow</h3>
									<span class="opus-biao">winter colors</span>
									<div class="opus-static">
										<div><span><i class="iconfont icon-yanjing"></i>188865</span><span><i class="iconfont icon-xiaoxi"></i>25</span></div>
										<div><span><i class="iconfont icon-shoucang"></i>791</span></div>
									</div>
								</div>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="image/19.png" alt="">
								<div>
									<div class="opus-time">November 23, 2022</div>
									<h3>blues snow</h3>
									<span class="opus-biao">winter colors</span>
									<div class="opus-static">
										<div><span><i class="iconfont icon-yanjing"></i>188865</span><span><i class="iconfont icon-xiaoxi"></i>25</span></div>
										<div><span><i class="iconfont icon-shoucang"></i>791</span></div>
									</div>
								</div>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="image/44.jpg" alt="">
								<div>
									<div class="opus-time">November 23, 2022</div>
									<h3>blues snow</h3>
									<span class="opus-biao">winter colors</span>
									<div class="opus-static">
										<div><span><i class="iconfont icon-yanjing"></i>188865</span><span><i class="iconfont icon-xiaoxi"></i>25</span></div>
										<div><span><i class="iconfont icon-shoucang"></i>791</span></div>
									</div>
								</div>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="image/17.png" alt="">
								<div>
									<div class="opus-time">November 23, 2022</div>
									<h3>blues snow</h3>
									<span class="opus-biao">winter colors</span>
									<div class="opus-static">
										<div><span><i class="iconfont icon-yanjing"></i>188865</span><span><i class="iconfont icon-xiaoxi"></i>25</span></div>
										<div><span><i class="iconfont icon-shoucang"></i>791</span></div>
									</div>
								</div>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="image/18.png" alt="">
								<div>
									<div class="opus-time">November 23, 2022</div>
									<h3>blues snow</h3>
									<span class="opus-biao">winter colors</span>
									<div class="opus-static">
										<div><span><i class="iconfont icon-yanjing"></i>188865</span><span><i class="iconfont icon-xiaoxi"></i>25</span></div>
										<div><span><i class="iconfont icon-shoucang"></i>791</span></div>
									</div>
								</div>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer">
			<div class="container">
				<div class="footer-yi">
					<h3><img src="image/logoblack.png" ></h3>
					<div>
						<p>Love what you love.</p>
					</div>
				</div>
				<div class="footer-er">
					<div>
						<h3>Find Us</h3>
						<ul>
							<li><a href="https://weibo.com/u/7331761204"><i class="iconfont icon-weibo"></i></a></li>
							<li><a href="https://weixin.qq.com/g/AwYAACarXpFSt_QqK1n6OlgExsZmtEuki0FETQKLl8tvFDrGK_TKxcS8gTpebaEB"><i class="iconfont icon-weixin"></i></a></li>
						</ul>
					</div>
					<div>
						<h3>APP</h3>
						<img src="image/qqimg.png" >
					</div>
					<div>
						<div><a href="#"><i class="iconfont icon-pingguo"></i><span>iPhone</span></a></div>
						<div><a href="#"><i class="iconfont icon-android-fill"></i><span>Android</span></a></div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
