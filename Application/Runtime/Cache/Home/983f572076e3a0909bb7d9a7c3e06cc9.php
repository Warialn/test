<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
	<head>
		<title>综合性医院科研管理系统</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Play-Offs Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() {setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!meta charset utf="8">
		<!--fonts
			<link href='http://fonts.useso.com/css?family=Monda:400,700' rel='stylesheet' type='text/css'>
			<link href='http://fonts.useso.com/css?family=Roboto+Slab:400,300,100,700' rel='stylesheet' type='text/css'>
		fonts-->
		<!--owlcss-->
		<link href="/Hospitalsrms/Public//bootstrap/css/owl.carousel.css" rel="stylesheet">
		<!--bootstrap-->
			<link href="/Hospitalsrms/Public//bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<!--coustom css-->
			<link href="/Hospitalsrms/Public//bootstrap/css/style.css" rel="stylesheet" type="text/css"/>
		<!--default-js-->
			<script src="/Hospitalsrms/Public//bootstrap/js/jquery-2.1.4.min.js"></script>
		<!--bootstrap-js-->
			<script src="/Hospitalsrms/Public//bootstrap/js/bootstrap.min.js"></script>
		<!--script-->
			<script type="text/javascript" src="/Hospitalsrms/Public//bootstrap/js/move-top.js"></script>
			<script type="text/javascript" src="/Hospitalsrms/Public//bootstrap/js/easing.js"></script>
		<!--script-->
	</head>
	<body>
		<div class="header" id="home">
			 <div class="header-top" style="background-color:black;height:30px;">
				<div class="container">
					<p class="pull-right">欢迎你，</p>
				</div>
			</div> 
			<div class="header_nav" id="home">
				<nav class="navbar navbar-default chn-gd" style="height:40px;">
					<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand logo-st" href="index.html">综合性医院科研管理系统</a>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li>
						<a href="#home" class="scroll">
						<span class="glyphicon glyphicon-home icn_pos hm" aria-hidden="true"></span><br>
						首页
						</a>
						</li>
						<!---->
						<li>
						<a href="#features" class="scroll">
						<span class="glyphicon glyphicon-cog icn_pos" aria-hidden="true"></span><br>
						科研统计
						</a>
						</li>
						<!---->
						<li>
						<a href="#doc" class="scroll">
						<span class="glyphicon glyphicon-briefcase icn_pos" aria-hidden="true"></span><br>
						项目申报
						</a>
						</li>
						<!---->
						<li>
						<a href="#acheive" class="scroll">
						<span class="glyphicon glyphicon-thumbs-up icn_pos hm2" aria-hidden="true"></span><br>
						费用报销
						</a>
						</li>
						<!---->
						<li>	
						<a href="#contact" class="scroll">
						<span class="glyphicon glyphicon-envelope icn_pos" aria-hidden="true"></span><br>
						学术活动
						</a>
						</li>
						<!--script-->
						<script type="text/javascript">
						jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
						event.preventDefault();
						$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
						});
						});
						</script>
						<!--script-->
					</ul>
					</div><!-- /.navbar-collapse -->
					<div class="clearfix"></div>
					</div><!-- /.container-fluid -->
				</nav>
			</div>
			<div class="header_banner">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
					<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
					</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active  image-wid">
					<img src="/Hospitalsrms/Public//bootstrap/images/1a.jpg" alt="..." class="img-responsive">
					<div class="carousel-caption">
						<h3>科研统计</h3>
						<p>Lorem Ipsum is simply dummy text of the typesetting industry</p>
						<button type="button" class="btn btn-info sld">进入</button>
					</div>
					</div>
					<div class="item  image-wid">
					<img src="/Hospitalsrms/Public//bootstrap/images/1d.jpg" alt="..." class="img-responsive">
					<div class="carousel-caption">
						<h3>项目申报</h3>
						<p>Lorem Ipsum is simply dummy text of the typesetting industry</p>
						<button type="button" class="btn btn-info sld">进入</button>
					</div>
					</div>
					<div class="item  image-wid">
					<img src="/Hospitalsrms/Public//bootstrap/images/1g.jpg" alt="..." class="img-responsive">
					<div class="carousel-caption">
						<h3>费用报销</h3>
						<p>Lorem Ipsum is simply dummy text of the typesetting industry</p>
						<button type="button" class="btn btn-info sld">进入</button>
					</div>
					</div>
					<div class="item  image-wid">
					<img src="/Hospitalsrms/Public//bootstrap/images/1l.jpg" alt="..." class="img-responsive">
					<div class="carousel-caption">
						<h3>学术活动</h3>
						<p>Lorem Ipsum is simply dummy text of the typesetting industry</p>
						<button type="button" class="btn btn-info sld">进入</button>
					</div>
					</div>
				</div>
				<!-- Controls -->
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
				</a>
				</div>
			</div>
		</div>
		<div class="style-label">
			<div class="container">
				<ul class="box-shadow effect2">
					<li class="col-md-3">
						<span class="glyphicon glyphicon-leaf flt" aria-hidden="true"></span>
						<div class="label-text">
						<h3>科研统计</h3>
						<p>医师的科研成果都发布在这里，让其他医师学习。</p>
						</div>
					</li>
					<li class="col-md-3">
						<span class="glyphicon glyphicon-eye-open flt" aria-hidden="true"></span>
						<div class="label-text">
						<h3>项目申报</h3>
						<p>医师申报项目，在这里申请。</p>
						</div>
					</li>
					<li class="col-md-3">
						<span class="glyphicon glyphicon-pencil flt" aria-hidden="true"></span>
						<div class="label-text">
						<h3>费用报销</h3>
						<p>医院的各种费用报销请来这里。</p>
						</div>
					</li>
					<li class="col-md-3">
						<span class="glyphicon glyphicon-cutlery flt" aria-hidden="true"></span>
						<div class="label-text">
						<h3>学术活动</h3>
						<p>近期的学术活动会展示在这里。</p>
						</div>
					</li>
					<div class="clearfix"></div>
				</ul>
			</div>
		</div>
		<div class="content">
			<div class="service_features" id="features">
				<div class="container">
					<div class="col-md-4 ser-fet">
						<h3>我们的服务</h3>
						<p>我们擅长</p>
						<span class="line"></span>
						<div class="services">
							<div class="menu-grid">
								<ul class="menu_drop">
									<li class="item1 plus"><a href="#" class="active">Therapy<span class="caret"></span></a>
										<ul>
											<li class="subitem1">
												<p> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
												Lorem Ipsum is simply dummy text of the printing and typesetting industry</p><br>
												<p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
												It has survived not only five centuries, but also the leap into electronic typesetting</p>
											</li>
										</ul>
									</li>
									<li class="item3 plus"><a href="#" class="active">Orthopedic<span class="caret"></span></a>
										<ul>
											<li class="subitem1">
												<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry,
												Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p><br>
												<p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
												It has survived not only five centuries, but also the leap into electronic typesetting</p>
											</li>
										</ul>
									</li>
									<li class="item4 plus"><a href="#" class="active">Heart specialist<span class="caret"></span></a>
										<ul>
											<li class="subitem1">
												<p> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
												Lorem Ipsum is simply dummy text of the printing and typesetting industry</p><br>
												<p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
												It has survived not only five centuries, but also the leap into electronic typesetting</p>
											</li>
										</ul>
									</li>
									<li class="item4 plus"><a href="#" class="active">kidney & Liver<span class="caret"></span></a>
										<ul>
											<li class="subitem1">
												<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
												Lorem Ipsum is simply dummy text of the printing and typesetting industry</p><br>
												<p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
												It has survived not only five centuries, but also the leap into electronic typesetting</p>
											</li>
										</ul>
									</li>
									<li class="item5 plus"><a href="#" class="active">Cancer Cell<span class="caret"></span></a>
										<ul>
											<li class="subitem1">
												<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
												Lorem Ipsum is simply dummy text of the printing and typesetting industry</p><br>
												<p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
												It has survived not only five centuries, but also the leap into electronic typesetting</p>
											</li>
										</ul>
									</li>
									<li class="item6 plus"><a href="#" class="active">Psychiatric Cell<span class="caret"></span></a>
										<ul>
											<li class="subitem1">
												<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
												Lorem Ipsum is simply dummy text of the printing and typesetting industry</p><br>
												<p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
												It has survived not only five centuries, but also the leap into electronic typesetting</p>
											</li>
										</ul>
									</li>
								</ul>
								<!-- script for tabs -->
								<script type="text/javascript">
									$(function() {
										var menu_ul = $('.menu_drop > li > ul'),
											menu_a  = $('.menu_drop > li > a');
												menu_ul.hide();
													menu_a.click(function(e) {
													e.preventDefault();
													if(!$(this).hasClass('active')) {
													menu_a.removeClass('active');
													menu_ul.filter(':visible').slideUp('normal');
													$(this).addClass('active').next().stop(true,true).slideDown('normal');
													} else {
													$(this).removeClass('active');
												$(this).next().stop(true,true).slideUp('normal');
											}
										});
									});
								</script>
							<!-- script for tabs -->
						</div>
						</div>
					</div>
                    <div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >企业网站模板</a></div>
					<div class="col-md-8 ser-fet">
						<h3>我们的未来</h3>
						<p>我们的目标</p>
						<span class="line"></span>
						<div class="features">
							<div class="col-md-6 fet-pad">
								<div class="div-margin">
									<div class="col-md-3 fet-pad wid">
										<span class="glyphicon glyphicon-user aim-icn" aria-hidden="true"></span>
									</div>
									<div class="col-md-9 fet-pad wid2">
										<h4>Patient Profile</h4>
										<p>Lorem Ipsum is simply dummy text of the printing.</p>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="div-margin">
									<div class="col-md-3 fet-pad wid">
										<span class="glyphicon glyphicon-screenshot aim-icn" aria-hidden="true"></span>
									</div>
									<div class="col-md-9 fet-pad wid2">
										<h4>Advanced Equipment</h4>
										<p>Lorem Ipsum is simply dummy text of the printing.</p>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="div-margin">
									<div class="col-md-3 fet-pad wid">
										<span class="glyphicon glyphicon-ok aim-icn" aria-hidden="true"></span>
									</div>
									<div class="col-md-9 fet-pad wid2">
										<h4>Operations sucessed</h4>
										<p>Lorem Ipsum is simply dummy text of the printing.</p>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="col-md-6 fet-pad">
								<div class="div-margin">
									<div class="col-md-3 fet-pad wid">
										<span class="glyphicon glyphicon-piggy-bank aim-icn" aria-hidden="true"></span>
									</div>
									<div class="col-md-9 fet-pad wid2">
										<h4>Health Insurance</h4>
										<p>Lorem Ipsum is simply dummy text of the printing.</p>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="div-margin">
									<div class="col-md-3 fet-pad wid">
										<span class="glyphicon glyphicon-education aim-icn" aria-hidden="true"></span>
									</div>
									<div class="col-md-9 fet-pad wid2">
										<h4>Recognised Doctors</h4>
										<p>Lorem Ipsum is simply dummy text of the printing.</p>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="div-margin">
									<div class="col-md-3 fet-pad wid">
										<span class="glyphicon glyphicon-heart aim-icn" aria-hidden="true"></span>
									</div>
									<div class="col-md-9 fet-pad wid2">
										<h4>Satisfaction</h4>
										<p>Lorem Ipsum is simply dummy text of the printing.</p>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		<div class="acheivments" id="acheive">
			<div class="container top">
					<h3>我们的成果</h3>
					<!--script-->
					<link rel="stylesheet" href="css/swipebox.css">
					<script src="js/jquery.swipebox.min.js"></script>
					<script type="text/javascript">
								jQuery(function($) {
									$(".swipebox").swipebox();
								});
					</script>
					<!--script-->
					<div class="gallery-grids">
						<ul>
							<li class="col-md-4 gal-alt">
								<a href="/Hospitalsrms/Public//bootstrap/images/1i.jpg" class="swipebox">
								<img src="/Hospitalsrms/Public//bootstrap/images/1i.jpg" alt="/"/>
									<span class="hide-box">
										<h4>Neutron collider Microscope</h4>
										<p>Great transparency Rate</p>
									</span>
							</li></a>
							<li class="col-md-4 gal-alt">
								<a href="/Hospitalsrms/Public//bootstrap/images/1p.jpg" class="swipebox">
								<img src="/Hospitalsrms/Public//bootstrap/images/1p.jpg" alt="/"/>
									<span class="hide-box">
										<h4>German made Ak-2000 Ct-Scan</h4>
										<p>Lorem is a dummy Text</p>
									</span>
							</li></a>
							<li class="col-md-4 gal-alt">
								<a href="/Hospitalsrms/Public//bootstrap/images/1n.jpg" class="swipebox">
								<img src="/Hospitalsrms/Public//bootstrap/images/1n.jpg" alt="/" />
								<span class="hide-box">
										<h4>Symbiosis Laser T-300</h4>
										<p>Lorem is a dummy Text</p>
								</span>
							</li></a>
							<li class="col-md-4 gal-alt">
								<a href="/Hospitalsrms/Public//bootstrap/images/1k.jpg" class="swipebox">
								<img src="/Hospitalsrms/Public//bootstrap/images/1k.jpg" alt="/" />
								<span class="hide-box">
										<h4>Angeo Blast</h4>
										<p>Lorem is a dummy Text</p>
								</span>	
							</li></a>
							<li class="col-md-4 gal-alt">
								<a href="/Hospitalsrms/Public//bootstrap/images/1o.jpg" class="swipebox">
								<img src="/Hospitalsrms/Public//bootstrap/images/1o.jpg" alt="/" />
								<span class="hide-box">
										<h4>Spacious Operatio Theater</h4>
										<p>Lorem is a dummy Text</p>
								</span>
							</li></a>
							<li class="col-md-4 gal-alt">
								<a href="/Hospitalsrms/Public//bootstrap/images/1f.jpg" class="swipebox">
								<img src="/Hospitalsrms/Public//bootstrap/images/1f.jpg" alt="/"/>
								<span class="hide-box">
										<h4>Latest Ventilators</h4>
										<p>Lorem is a dummy Text</p>
								</span>
							</li></a>
							<div class="clearfix"></div>
						</ul>
					</div>
			</div>
		</div>
		<div class="footer">
			<div class="container">
				<div class="footer-text">
				<h3><a href="index.html">Anesthesia</a></h3>
				<p>Copyright &copy; 2015.Company name All rights reserved.More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网站模板" target="_blank">网站模板</a></p>
				</div>
			</div>
		</div>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</body>
</html>