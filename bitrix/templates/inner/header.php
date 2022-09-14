<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<?$APPLICATION->ShowHead();?>
	<title><?$APPLICATION->ShowTitle()?></title>
	<link rel="stylesheet" href="template_style.css"/>
	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery-1.8.2.min.js"></script>
	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/slides.min.jquery.js"></script>
	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery.carouFredSel-6.1.0-packed.js"></script>
	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/functions.js"></script>

	<link rel="shortcut icon" type="image/x-icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico">
	
	<!--[if gte IE 9]><style type="text/css">.gradient {filter: none;}</style><![endif]-->
</head>
<body>
	<?$APPLICATION->ShowPanel();?>
	<div class="wrap">
		<div class="hd_header_area">
			<div class="hd_header">
				<table>
					<tr>
						<td rowspan="2" class="hd_companyname">
							<h1><a href="">Ìåáåëüíûé ìàãàçèí</a></h1>
						</td>
						<td rowspan="2" class="hd_txarea">
							<span class="tel">8 (495) 212-85-06</span>	<br/>	
							<?GetMessage('WORKING_TIME')?> <span class="workhours">åæåäíåâíî ñ 9-00 äî 18-00</span>						
						</td>
						<td style="width:232px">
							<form action="">
								<div class="hd_search_form" style="float:right;">
									<input placeholder="Ïîèñê" type="text"/>
									<input type="submit" value=""/>
								</div>
							</form>
						</td>
					</tr>
					<tr>
						<td style="padding-top: 11px;">
							<span class="hd_singin"><a id="hd_singin_but_open" href="">Âîéòè íà ñàéò</a>
							<div class="hd_loginform">
								<span class="hd_title_loginform">Âîéòè íà ñàéò</span>
								<form name="" method="" action="">
					
									<input placeholder="Ëîãèí"  type="text">
									<input  placeholder="Ïàðîëü"  type="password">			
									<a href="/" class="hd_forgotpassword">Çàáûëè ïàðîëü</a>
									
									<div class="head_remember_me" style="margin-top: 10px">
										<input id="USER_REMEMBER_frm" name="USER_REMEMBER" value="Y" type="checkbox">
										<label for="USER_REMEMBER_frm" title="Çàïîìíèòü ìåíÿ íà ýòîì êîìïüþòåðå">Çàïîìíèòü ìåíÿ</label>
									</div>				
									<input value="Âîéòè" name="Login" style="margin-top: 20px;" type="submit">
									</form>
								<span class="hd_close_loginform">Çàêðûòü</span>
							</div>
							</span><br>
							<a href="" class="hd_signup">Çàðåãèñòðèðîâàòüñÿ</a>
						</td>
					</tr>
				</table>
				<div class="nv_topnav">
					<ul>
						<li><a href=""   class="menu-img-fon"  style="background-image: url(images/nv_home.png);" ><span></span></a></li>
						<li><a href=""><span>Êîìïàíèÿ</span></a>
							<ul>
								<li><a href="">Ïóíêò 1</a></li>
								<li><a href="">Ïóíêò 2</a></li>
								<li><a href="">Ïóíêò 3</a></li>
								<li><a href="">Ïóíêò 4</a></li>
							</ul>
						</li>
						<li><a href=""><span>Íîâîñòè</span></a></li>
						<li><a href=""><span>Êàòàëîã</span></a></li>
						<li><a href=""><span>Àêöèè</span></a>
							<ul>
								<li><a href="">Ïóíêò 1</a>
									<ul>
										<li><a href="">Ïóíêò 1</a></li>
										<li><a href="">Ïóíêò 2</a></li>
									</ul>
								</li>
								<li><a href="">Ïóíêò 2</a></li>
								<li><a href="">Ïóíêò 3</a></li>
								<li><a href="">Ïóíêò 4</a></li>
							</ul>
						</li>
						<li><a href=""><span>Ïàðòíåðàì</span></a></li>
						<li><a href=""><span>Êîíòàêòû</span></a></li>
						<div class="clearboth"></div>
					</ul>
				</div>
			</div>
		</div>
		
		<!--- // end header area --->
		<div class="bc_breadcrumbs">
			<ul>
				<li><a href="">Êàòàëîã</a></li>
				<li><a href="">Ìåáåëü</a></li>
				<li><a href="">Âûñòàâêè è ñîáûòèÿ</a></li>
			</ul>
			<div class="clearboth"></div>
		</div>
		<div class="main_container page">
			<div class="mn_container">
				<div class="mn_content">
					<div class="main_post">
						<div class="main_title">
							<p class="title">Çàãîëîâîê ñòðàíèöû</p>
						</div>