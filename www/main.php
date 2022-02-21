<?php
include_once('./_common.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
?>
<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&display=swap" rel="stylesheet">
	<link href='http://spoqa.github.io/spoqa-han-sans/css/SpoqaHanSansNeo.css' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
	<script src="/js/jquery-3.6.0.min.js"></script>
	<script src="/js/jquery-ui.min.js"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<title>주식회사 담하</title>
</head>

<body>
	<header id="pc_header">
		<div class="nav_wrap">
			<a href="/main.php" class="img_wrap">
				<img src="/img/main/logo_horizon.jpg" alt="">
			</a>
			<ul class="nav">
				<li><a href="#part1" >주요사업소개</a></li>
				<li><a href="#part2" >상품구성</a></li>
				<li><a href="#part3" >핵심강점과 경쟁력</a></li>
				<li><a href="#part4" >주요 마케팅타겟</a></li>
			</ul>
		</div>
	</header>

	<header id="mob_header">
		<div class="header">
			<a href="/main.php" class="img_wrap">
				<img src="/img/main/logo_horizon.jpg" alt="">
			</a>

			<div class="menu_open toggleBtn">
				<img src="/img/main/menu.png" alt="">
			</div>
			<!-- <div class="menu_close toggleBtn">
				<img src="/img/main/close.png" alt="">
			</div> -->
		</div>

			<div class="nav">
				<ul class="slide_menu">
					<li><a href="#part1" >주요사업소개</a></li>
					<li><a href="#part2" >상품구성</a></li>
					<li><a href="#part3" >핵심강점과 경쟁력</a></li>
					<li><a href="#part4" >주요 마케팅타겟</a></li>
				</ul>
			</div>
			<div class="nav_bg"></div>
			
	</header>



	<!-- 담하 로고 탑 시작 -->
	<section class="section_style logo_top">
		<div class="w-1400">
			<div class="logo" >
				<img src="/img/main/logo_top.png" alt="">
			</div>
			<div class="text_box block">
				<p data-aos="fade-up">브랜드에 노을을 입히다</p>
				<h1 class="en_num" data-aos="fade-up">DAMHA</h1>
			</div>
		</div>
	</section>
	<!-- 담하 로고 탑 끝 -->

	<!-- 이미지슬라이드 시작 -->
	<section class="section_style img_slide">
		<div class="section_title">
			<h1 class="strong en_num">What We Do?</h1>
		</div>
		<div class="swiper myswiper">
			<div class="swiper-wrapper">
				<?php echo latest('main_slide','gallery','5','30');?>
			</div>
		</div>
	</section>
	<!-- swiper JS -->
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
	<!-- 이미지슬라이드 끝 -->

	<!-- 블로그스킨&포스팅 시작 -->
	<!-- <section class="section_style blog_posting">
		<img src="/img/main/blog.jpg" alt="">
	</section> -->
	<!-- 블로그스킨&포스팅 끝 -->

	<!-- 홈페이지 제작 시작 -->
	<!-- <section class="section_style hp_creating">
		<img src="/img/main/hp_creating.jpg" alt="">
	</section> -->
	<!-- 홈페이지 제작 끝 -->

	<!-- 주요사업소개 시작 -->
	<section class="section_style services" id="part1">
		<div class="w-1400">
			<div class="title_txt" data-aos="fade-up">
				<h2 class="title">주요사업소개<span class="gray_fade en_num">01</span></h2>
			</div>
			<div class="section_txt slide-bottom">
				<div class="con">
					<b data-aos="fade-up">우리는 브랜드를 기획합니다.</b>
					<span data-aos="fade-up">
					우리들의 생각을 자신이 가진 가장 큰 능력으로 확신하며 그 확신으로 브랜드를 만들어 갑니다.
					고객이 만들어 낸 상품을 가장 필요로 하는 사람에게 가장 정확한 전달 방법을 설계합니다.
					그리고 그 설계를 가치로 담아 경영방향을 설정하고 운영, 실행, 평가 등을 통해 가치를 알리는데 집중합니다.
					<br>
					<br><strong class="strong" data-aos="fade-up">우리는 이것을 브랜드 기획이라 합니다.</strong>
					</span>
				</div>
				
			</div>
			<div class="img_wrap1" data-aos="fade-up">
				<img src="/img/main/services_01.jpg" alt="">
			</div>
			<div class="img_wrap2" data-aos="fade-up">
				<img src="/img/main/service_01_mob.png" alt="">
			</div>
			<div class="depart" data-aos="fade-up">
				<img src="/img/main/services_02.jpg" alt="">
			</div>
		</div>
		
	</section>
	<!-- 주요사업소개 끝 -->

	<!-- 상품구성 탭 시작 -->
	<section class="section_style component" id="part2">
		<div class="w-1400">
			<div class="title_txt" data-aos="fade-up">
				<h2 class="title">상품구성<span class="gray_fade en_num">02</span></h2>
			</div>
			<div class="tabs" data-aos="fade-up">
				<ul class="tab_nav">
					<li><a href="#tab-01">브랜딩 <span class="strong en_num">BRANDING</span><i></i></a></li>
					<li><a href="#tab-02">마케팅 <span class="strong en_num">MARKETING</span><i></i></a></li>
					<li><a href="#tab-03">컨설팅 <span class="strong en_num">CONSULTING</span><i></i></a></li>
				</ul>
				<ul class="tab_content">
					<li id="tab-01">
						<div class="content ">
							<div class="marble_container">
								<div class="marble_wrap" data-aos="fade-up">
									<ul class="marble_graphic_wrap">
										<li class="marble_graphic gray_bg">
											<div class="txt_wrap">
												<p class="fz19"><span class="en_num strong">VI</span>
													<br>비주얼 아이덴티티</p>
											</div>
										</li>
										<li class="marble_graphic gray_bg">
											<div class="txt_wrap">
												<p class="fz19"><span class="en_num strong">HOMEPAGE</span>
													<br>홈페이지 제작</p>
											</div>
										</li>
										<li class="marble_graphic gray_bg">
											<div class="txt_wrap">
												<p class="fz19"><span class="en_num strong">SHOPPINGMALL</span>
													<br>쇼핑몰제작</p>
											</div>
										</li>
									</ul>
									<div class="marble_title" data-aos="fade-up">
										<ul class="marble_title_ul">
											<li class="black_bd">&nbsp;</li>
											<li class="en_num strong">CI/BI</li>
											<li class="black_bd">&nbsp;</li>
										</ul>
										<h3 class="marble_title_h3">아이덴티티 개발</h3>
									</div>
								</div>
								<div class="marble_wrap">
									<ul class="marble_graphic_wrap" data-aos="fade-up">
										<li class="marble_graphic orange_bg">
											<div class="txt_wrap">
												<p class="fz19"><span class="en_num strong">PHOTOGRAPHY</span>
													<br>사진</p>
											</div>
										</li>
										<li class="marble_graphic orange_bg">
											<div class="txt_wrap">
												<p class="fz19"><span class="en_num strong">MOTION</span>
													<br>모션그래픽</p>
											</div>
										</li>
									</ul>
									<div class="marble_title" data-aos="fade-up">
										<ul class="marble_title_ul">
											<li class="orange_bd">&nbsp;</li>
											<li class="en_num strong orange">MEDIA</li>
											<li class="orange_bd">&nbsp;</li>
										</ul>
										<h3 class="marble_title_h3 orange">미디어컨텐츠 개발</h3>
									</div>
								</div>
							</div>
							
						</div>
					</li>
					<li id="tab-02">
						<div class="content ">
							<div class="marble_graphic_wrap" data-aos="fade-up">
								<div class="marble_graphic gray_bg">
									<div class="txt_wrap">
										<p class="fz19"><span class="en_num strong">BLOG</span>
											<br>블로그</p>
									</div>
								</div>
								<div class="marble_graphic orange_bg">
									<div class="txt_wrap">
										<p class="fz19"><span class="en_num strong">CAFE</span>
											<br>카페</p>
									</div>
								</div>
								<div class="marble_graphic gray_bg">
									<div class="txt_wrap">
										<p class="fz19"><span class="en_num strong">SNS</span>
											<br>소셜미디어</p>
									</div>
								</div>
								<div class="marble_graphic orange_bg">
									<div class="txt_wrap">
										<p class="fz19"><span class="en_num strong">NEWS</span>
											<br>언론보도</p>
									</div>
								</div>
								<div class="marble_graphic gray_bg">
									<div class="txt_wrap">
										<p class="fz19"><span class="en_num strong">SEARCH AD</span>
											<br>검색광고</p>
									</div>
								</div>
								<div class="marble_graphic orange_bg">
									<div class="txt_wrap">
										<p class="fz19"><span class="en_num strong">APP</span>
											<br>앱</p>
									</div>
								</div>
								<div class="marble_graphic gray_bg">
									<div class="txt_wrap">
										<p class="fz19"><span class="en_num strong">YOUTUBE</span>
											<br>유튜브</p>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li id="tab-03">
						<div class="content ">
							<div class="marble_container">
								<div class="marble_wrap" data-aos="fade-up">
									<ul class="marble_graphic_wrap">
										<li class="marble_graphic gray_bg">
											<div class="txt_wrap">
												<p class="fz19"><span class="en_num strong">DWSIGN</span>
													<br>디자인 컨설팅</p>
											</div>
										</li>
										<li class="marble_graphic gray_bg">
											<div class="txt_wrap">
												<p class="fz19"><span class="en_num strong">CONTENTS</span>
													<br>콘텐츠 컨설팅</p>
											</div>
										</li>
										<li class="marble_graphic gray_bg">
											<div class="txt_wrap">
												<p class="fz19"><span class="en_num strong">PLANNING</span>
													<br>기획 컨설팅</p>
											</div>
										</li>
									</ul>
									<div class="marble_title" data-aos="fade-up">
										<ul class="marble_title_ul">
											<li class="black_bd">&nbsp;</li>
											<li class="en_num strong">BRAND CONSULTING</li>
											<li class="black_bd">&nbsp;</li>
										</ul>
										<h3 class="marble_title_h3">브랜드컨설팅</h3>
									</div>
								</div>
								<div class="marble_wrap" data-aos="fade-up">
									<ul class="marble_graphic_wrap">
										<li class="marble_graphic orange_bg">
											<div class="txt_wrap">
												<p class="fz19"><span class="en_num strong">FOUNDATION<br>/PUBLIC</span>
													<br>설립/행정 컨설팅</p>
											</div>
										</li>
										<li class="marble_graphic orange_bg">
											<div class="txt_wrap">
												<p class="fz19"><span class="en_num strong">MOTION</span>
													<br>모션그래픽</p>
											</div>
										</li>
										<li class="marble_graphic orange_bg">
											<div class="txt_wrap">
												<p class="fz19"><span class="en_num strong">MOTION</span>
													<br>모션그래픽</p>
											</div>
										</li>
										<li class="marble_graphic orange_bg">
											<div class="txt_wrap">
												<p class="fz19"><span class="en_num strong">MOTION</span>
													<br>모션그래픽</p>
											</div>
										</li>
									</ul>
									<div class="marble_title" data-aos="fade-up">
										<ul class="marble_title_ul">
											<li class="orange_bd">&nbsp;</li>
											<li class="en_num strong orange">MANAGEMENT CONSULTING</li>
											<li class="orange_bd">&nbsp;</li>
										</ul>
										<h3 class="marble_title_h3 orange">경영컨설팅</h3>
									</div>
								</div>
							</div>
							<p class="txt" data-aos="fade-up">브랜드와 콘텐츠의 기획으로 보여지는 외형적인 모습보다 내부 모습이 더욱 중요합니다.
								<br>기업의 방향성을 외형적으로 설계하고 HR, 재무, 행정 전분야를 비롯하여
								직원들의 서비스 실행까지 브랜드에 걸맞는 기업이 되도록 설계하고 기획하며
								<br>그 효율성이
								고객유치와 매출로 이어지도록 관리합니다. <span class="strong">우리는 이것을 컨설팅이라 합니다.</span></p>
						</div>
					</li>
				</ul>
			</div>

			<ul class="mob_component">
				<li class="mob_li">
					<div class="li_title" data-aos="fade-up">
						<p>브랜딩 <span class="strong en_num">BRANDING</span><i></i></p>
					</div>
					<div class="li_con">
						<div class="marble_container">
							<div class="marble_wrap">
								<ul class="marble_graphic_wrap">
									<li class="marble_graphic gray_bg" data-aos="fade-up">
										<div class="txt_wrap">
											<p class="fz19"><span class="en_num strong">VI</span>
												<br>비주얼 아이덴티티</p>
										</div>
									</li>
									<li class="marble_graphic gray_bg" data-aos="fade-up">
										<div class="txt_wrap">
											<p class="fz19"><span class="en_num strong">HOMEPAGE</span>
												<br>홈페이지 제작</p>
										</div>
									</li>
									<li class="marble_graphic gray_bg" data-aos="fade-up">
										<div class="txt_wrap">
											<p class="fz19"><span class="en_num strong">SHOPPINGMALL</span>
												<br>쇼핑몰제작</p>
										</div>
									</li>
								</ul>
								<div class="marble_title" data-aos="fade-up">
									<ul class="marble_title_ul">
										<li class="black_bd">&nbsp;</li>
										<li class="en_num strong">CI/BI</li>
										<li class="black_bd">&nbsp;</li>
									</ul>
									<h3 class="marble_title_h3">아이덴티티 개발</h3>
								</div>
							</div>
							<div class="marble_wrap" >
								<ul class="marble_graphic_wrap">
									<li class="marble_graphic orange_bg" data-aos="fade-up">
										<div class="txt_wrap">
											<p class="fz19"><span class="en_num strong">PHOTOGRAPHY</span>
												<br>사진</p>
										</div>
									</li>
									<li class="marble_graphic orange_bg" data-aos="fade-up">
										<div class="txt_wrap">
											<p class="fz19"><span class="en_num strong">MOTION</span>
												<br>모션그래픽</p>
										</div>
									</li>
								</ul>
								<div class="marble_title" data-aos="fade-up">
									<ul class="marble_title_ul">
										<li class="orange_bd">&nbsp;</li>
										<li class="en_num strong orange">MEDIA</li>
										<li class="orange_bd">&nbsp;</li>
									</ul>
									<h3 class="marble_title_h3 orange">미디어컨텐츠 개발</h3>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li class="mob_li">
					<div class="li_title" data-aos="fade-up">
						<p>마케팅 <span class="strong en_num">MARKETING</span><i></i></p>
					</div>
					<div class="li_con">
						<div class="marble_graphic_wrap">
							<div class="marble_graphic gray_bg" data-aos="fade-up">
								<div class="txt_wrap">
									<p class="fz19"><span class="en_num strong">BLOG</span>
										<br>블로그</p>
								</div>
							</div>
							<div class="marble_graphic orange_bg" data-aos="fade-up">
								<div class="txt_wrap">
									<p class="fz19"><span class="en_num strong">CAFE</span>
										<br>카페</p>
								</div>
							</div>
							<div class="marble_graphic gray_bg" data-aos="fade-up"> 
								<div class="txt_wrap">
									<p class="fz19"><span class="en_num strong">SNS</span>
										<br>소셜미디어</p>
								</div>
							</div>
							<div class="marble_graphic orange_bg" data-aos="fade-up">
								<div class="txt_wrap">
									<p class="fz19"><span class="en_num strong">NEWS</span>
										<br>언론보도</p>
								</div>
							</div>
							<div class="marble_graphic gray_bg" data-aos="fade-up">
								<div class="txt_wrap">
									<p class="fz19"><span class="en_num strong">SEARCH AD</span>
										<br>검색광고</p>
								</div>
							</div>
							<div class="marble_graphic orange_bg" data-aos="fade-up">
								<div class="txt_wrap">
									<p class="fz19"><span class="en_num strong">APP</span>
										<br>앱</p>
								</div>
							</div>
							<div class="marble_graphic gray_bg" data-aos="fade-up">
								<div class="txt_wrap">
									<p class="fz19"><span class="en_num strong">YOUTUBE</span>
										<br>유튜브</p>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li class="mob_li">
					<div class="li_title" data-aos="fade-up">
						<p>컨설팅 <span class="strong en_num">CONSULTING</span><i></i></p>
					</div>
					<div class="li_con">
						<div class="content ">
							<div class="marble_container">
								<div class="marble_wrap" >
									<ul class="marble_graphic_wrap">
										<li class="marble_graphic gray_bg" data-aos="fade-up">
											<div class="txt_wrap">
												<p class="fz19"><span class="en_num strong">DWSIGN</span>
													<br>디자인 컨설팅</p>
											</div>
										</li>
										<li class="marble_graphic gray_bg" data-aos="fade-up">
											<div class="txt_wrap">
												<p class="fz19"><span class="en_num strong">CONTENTS</span>
													<br>콘텐츠 컨설팅</p>
											</div>
										</li>
										<li class="marble_graphic gray_bg" data-aos="fade-up">
											<div class="txt_wrap">
												<p class="fz19"><span class="en_num strong">PLANNING</span>
													<br>기획 컨설팅</p>
											</div>
										</li>
									</ul>
									<div class="marble_title" data-aos="fade-up">
										<ul class="marble_title_ul">
											<li class="black_bd">&nbsp;</li>
											<li class="en_num strong">BRAND CUNSULTING</li>
											<li class="black_bd">&nbsp;</li>
										</ul>
										<h3 class="marble_title_h3">브랜드컨설팅</h3>
									</div>
								</div>
								<div class="marble_wrap">
									<ul class="marble_graphic_wrap">
										<li class="marble_graphic orange_bg" data-aos="fade-up">
											<div class="txt_wrap">
												<p class="fz19"><span class="en_num strong">FOUNDATION<br>/PUBLIC</span>
													<br>설립/행정 컨설팅</p>
											</div>
										</li>
										<li class="marble_graphic orange_bg" data-aos="fade-up">
											<div class="txt_wrap">
												<p class="fz19"><span class="en_num strong">MOTION</span>
													<br>모션그래픽</p>
											</div>
										</li>
										<li class="marble_graphic orange_bg" data-aos="fade-up">
											<div class="txt_wrap">
												<p class="fz19"><span class="en_num strong">MOTION</span>
													<br>모션그래픽</p>
											</div>
										</li>
										<li class="marble_graphic orange_bg" data-aos="fade-up">
											<div class="txt_wrap">
												<p class="fz19"><span class="en_num strong">MOTION</span>
													<br>모션그래픽</p>
											</div>
										</li>
									</ul>
									<div class="marble_title" data-aos="fade-up"> 
										<ul class="marble_title_ul">
											<li class="orange_bd">&nbsp;</li>
											<li class="en_num strong orange">MANAGEMENT CUNSULTING</li>
											<li class="orange_bd">&nbsp;</li>
										</ul>
										<h3 class="marble_title_h3 orange">경영컨설팅</h3>
									</div>
								</div>
							</div>
							<p class="txt" data-aos="fade-up">
								브랜드와 콘텐츠의 기획으로 보여지는 외형적인 모습보다 내부 모습이 더욱 중요합니다.
								기업의 방향성을 외형적으로 설계하고 HR, 재무, 행정 전분야를 비롯하여
								직원들의 서비스 실행까지 브랜드에 걸맞는 기업이 되도록 설계하고 기획하며
								그 효율성이
								고객유치와 매출로 이어지도록 관리합니다.
								<br><span class="strong">우리는 이것을 컨설팅이라 합니다.</span></p>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</section>
	<!-- 상품구성 탭 끝 -->

	<!-- 강점 시작 -->
	<section class="section_style strength" id="part3" >
		
		<div class="w-1400">
			<div class="title_txt" data-aos="fade-up">
				<h2 class="title">핵심강점과 경쟁력<span class="white_fade en_num">03</span></h2>
			</div>
			<div class="pcwrap">
				<div class="strength_point_wrap strength_pc">
					<div class="strength_point" data-aos="fade-up">
						<div class="img_wrap">
							<img src="/img/main/strength01.png" alt="">
						</div>
						<em class="en_num strong gray_fade">strength 01</em>
						<h4 class="strength_h4 strong">브랜드 기획 및 설계부터 마케팅 실행까지 <i></i></h4>
						<div class="txt_box">
							<p>- 고객사의 현재 브랜드 가치 분석을 통한 브랜드 방향성 제시</p>
							<br>
							<p>- 방향성에 따른 브랜드 확립을 위한 마케팅 설계</p>
							<br>
							<p>- 마케팅 설계를 통한 가장 효율적인 매체 선정 및 집행</p>
							<br>
							<i>&nbsp;&nbsp;(검색광고, 블로그, 카페, 인스타, 페이스북, 유튜브, 언론보도 등)</i>
						</div>
					</div>
					<div class="strength_point" data-aos="fade-up">
						<div class="img_wrap">
							<img src="/img/main/strength03.png" alt="">
						</div>
						<em class="en_num strong gray_fade">strength 03</em>
						<h4 class="strength_h4 strong">데이터 및 시장분석 마케팅 <i></i></h4>
						<div class="txt_box">
							<p>- 석사 이상 학력의 실무자가 직접 조사 분석</p>
							<br>
							<p>- 대조군 조사, 소비타겟 조사, 비주얼리터러시, 사업의 차별성 등의 조사를 통한 분석 마케팅</p>
							
						</div>
					</div>
					<div class="strength_point" data-aos="fade-up">
						<div class="img_wrap">
							<img src="/img/main/strength05.png" alt="">
						</div>
						<em class="en_num strong gray_fade">strength 05</em>
						<h4 class="strength_h4 strong">퀄리티 높은 identity 디자인 <i></i></h4>
						<div class="txt_box">
							<p>- 다양한 퀄리티 및 스타일의 디자인 레퍼런스 제공</p>
							<br>
							<p>- CI/BI/HI 모든 업종의 identity 기획</p>
							<br>
							<p>- 홈페이지, 컨텐츠 자체 디자인을 통한 고객사 브랜드 identity에 맞춘 디자인 기획</p>
						</div>
					</div>
					
				</div>
				<div class="strength_point_wrap strength_pc">
					<div class="strength_point" data-aos="fade-up">
						<div class="img_wrap">
							<img src="/img/main/strength02.png" alt="">
						</div>
						<em class="en_num strong gray_fade">strength 02</em>
						<h4 class="strength_h4 strong">사업체 설립부터 운영, 평가까지
							<br>다양한 경력의 실무진 및 자문단의 소통능력 <i></i></h4>
						<div class="txt_box">
							<p>- 각 파트별(기획, 디자이너, 마케터) 전담 배치인력과 고객사의 소통(방문, 화상, 메신저)</p>
							<br>
							<p>- 10년 이상 행정/기획/홍보 경력자, 간호사, 간호조무사로 구성된 실무진</p>
							<br>
							<p>- 10년 이상 웹디자인 및 컨텐츠디자인 경력의 실무진</p>
							<br>
							<p>- 대형검색광고플랫폼(N사) 파트너 강사 출신의 검색광고 전문 실무진</p>
							<br>
							<p>- 현직 대학교수 (겸임)으로 구성된 교육 컨설팅 실무진</p>
							<br>
							<p>- 공기업, 회계사무소 경력 행정컨설팅 실무진</p>
							<br>
							<p>- 외식 서비스 전문기업(대기업, 중소기업) 책임자 경력의 실무진</p>
							<br>
							<p>- 현직 병원행정 책임자로 구성된 병원경영 자문단</p>
							<br>
							<p>- 현직 의사, 간호사, 간호조무사로 구성된 자문단</p>
						</div>
					</div>
					<div class="strength_point" data-aos="fade-up">
						<div class="img_wrap">
							<img src="/img/main/strength04.png" alt="">
						</div>
						<em class="en_num strong gray_fade">strength 04</em>
						<h4 class="strength_h4 strong">커스터마이징 솔루션 개발 <i></i></h4>
						<div class="txt_box">
							<p>- 빠른 피드백을 위한 자체 피드백 솔루션 개발</p>
							<br>
							<p>- 고객사 맞춤형(커스터마이징) 광고평가 개발 시스템 개발</p>
						</div>
					</div>
					<div class="strength_point" data-aos="fade-up">
						<div class="img_wrap">
							<img src="/img/main/strength06.png" alt="">
						</div>
						<em class="en_num strong gray_fade">strength 06</em>
						<h4 class="strength_h4 strong">HR, 재무, 회계, 경영관리 <i></i></h4>
						<div class="txt_box">
							<p>- 공기업 총무팀, 회계사무소 실무, 종합병원 행정경력자로 구성된 실무자의 기업 정부지원금, 재무회계관리, 행정관리, 경영기획 관리 및 컨설팅</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="w-mob">
			<div class="title_txt" data-aos="fade-up">
				<h2 class="title">핵심강점과 경쟁력<span class="gray_fade en_num white">03</span></h2>
			</div>
			<div class="strength_point_wrap">
				<div class="strength_point" data-aos="fade-up">
					<h4 class="strength_h4 strong">브랜드 기획 및 설계부터 마케팅 실행까지 <i></i></h4>
					<div class="txt_box">
						<p>- 고객사의 현재 브랜드 가치 분석을 통한 브랜드 방향성 제시</p>
						<br>
						<p>- 방향성에 따른 브랜드 확립을 위한 마케팅 설계</p>
						<br>
						<p>- 마케팅 설계를 통한 가장 효율적인 매체 선정 및 집행
							<i>(검색광고, 블로그, 카페, 인스타, 페이스북, 유튜브, 언론보도 등)</i>
						</p>
					</div>
				</div>
				<div class="strength_point" data-aos="fade-up">
					<h4 class="strength_h4 strong">사업체 설립부터 운영, 평가까지 다양한 경력의 실무진 및 자문단의 소통능력 <i></i></h4>
					<div class="txt_box">
						<p>- 각 파트별(기획, 디자이너, 마케터) 전담 배치 인력과 고객사의 소통(방문, 화상, 메신저)</p>
						<br>
						<p>- 10년 이상 행정/기획/홍보 경력자, 간호사, 간호조무사로 구성된 실무진</p>
						<br>
						<p>- 10년 이상 웹디자인 및 컨텐츠디자인 경력의 실무진</p>
						<br>
						<p>- 대형검색광고플랫폼(N사) 파트너 강사 출신의 검색광고 전문 실무진</p>
						<br>
						<p>- 현직 대학교수(겸임)으로 구성된 교육컨설팅 실무진</p>
						<br>
						<p>- 공기업, 회계사무소 경력 행정컨설팅 실무진</p>
						<br>
						<p>- 외식 서비스 전문기업(대기업, 중소기업) 책임자 경력의 실무진</p>
						<br>
						<p>- 현직 병원행정 책임자로 구성된 병원경영 자문단</p>
						<br>
						<p>	- 현직 의사, 간호사, 간호조무사로 구성된 자문단</p>
					</div>
				</div>
				<div class="strength_point" data-aos="fade-up">
					<h4 class="strength_h4 strong">데이터 및 시장분석 마케팅 <i></i></h4>
					<div class="txt_box">
						<p>- 석사 이상 학력의 실무자가 직접 조사 분석</p>
						<br>
						<p>- 대조군 조사, 소비타겟 조사, 비주얼리터러시, 사업의 차별성 등의 조사를 통한 분석 마케팅</p>
					</div>
				</div>
				<div class="strength_point" data-aos="fade-up">
					<h4 class="strength_h4 strong">커스터마이징 솔루션 개발 <i></i></h4>
					<div class="txt_box">
						<p>- 빠른 피드백을 위한 자체 피드백 솔루션 개발</p>
						<br>
						<p>- 고객사 맞춤형(커스터마이징) 광고평가 개발 시스템 개발</p>
					</div>
				</div>
				<div class="strength_point" data-aos="fade-up">
					<h4 class="strength_h4 strong">퀄리티높은 identity 디자인 <i></i></h4>
					<div class="txt_box">
						<p>- 다양한 퀄리티 및 스타일의 디자인 레퍼런스 제공</p>
						<br>
						<p>- CI/BI/HI 모든 업종의 identity 기획</p>
						<br>
						<p>- 홈페이지, 컨텐츠 자체 디자인을 통한 고객사 브랜드 identity에 맞춘 디자인 기획</p>
					</div>
				</div>
				<div class="strength_point" data-aos="fade-up">
					<h4 class="strength_h4 strong">HR, 재무, 회계, 경영관리 <i></i></h4>
					<div class="txt_box">
						<p>- 공기업 총무팀, 회계사무소 실무, 종합병원 행정경력자로 구성된 실무자의 기업 정부지원금, 재무회계관리, 행정관리, 경영기획 관리 및 컨설팅</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- 강점 끝 -->

	<!-- 주요 마케팅 타겟 시작 -->
	<section class="section_style main_target_wrap" id="part4">
		<div class="w-1400">
			<div class="title_txt" data-aos="fade-up">
				<h2 class="title">주요 마케팅 타겟<span class="gray_fade en_num">04</span></h2>
			</div>
			<div class="grid_table" data-aos="fade-up">
				<div class="grid_item grid_th em">업종</div>
				<div class="grid_item grid_th em">구분</div>
				<div class="grid_item grid_th em">세부내용</div>
				<div class="grid_item grid_th em">매체</div>

				<div class="grid_item grid_td em">병의원</div>

				<div class="grid_item grid_td em">종합병원</div>
				<div class="grid_item grid_txt">의료기관<br>전문센터</div>
				<div class="grid_item grid_txt">의료진스타마케팅, 수술 및 시술 마케팅, Mission & Vision 마케팅, 의료정보 마케팅, 급여/비급여 집중 마케팅,
					검진마케팅, 상품 분산(주요상품, 서브상품) 마케팅, 사회조사 마케팅</div>
				<div class="grid_item grid_txt">홈페이지
					<br>랜딩페이지
					<br>블로그
					<br>카페
					<br>SNS
					<br>지식인
					<br>언론보도</div>

				<div class="grid_item grid_td em">병원</div>
				<div class="grid_item grid_txt">의료기관<br>전문과목</div>
				<div class="grid_item grid_txt">의료진스타마케팅, 수술 및 시술 마케팅, Mission & Vision 마케팅, 의료정보 마케팅, 급여/비급여 집중 마케팅,
					상품 분산(주요상품, 서브상품) 마케팅, 사회조사 마케팅</div>

				<div class="grid_item grid_txt">성형외과</div>
				<div class="grid_item grid_td em">의원</div>
				<div class="grid_item grid_txt">개원마케팅, 브랜드마케팅, 의료진스타마케팅, 상품세분화 마케팅(신체별 성형수술), 소비타겟 마케팅, 대조군 마케팅,
					차별성마케팅, 사회조사마케팅, 인플루언서마케팅</div>

				<div class="grid_item grid_txt">피부과</div>
				<div class="grid_item grid_txt">개원마케팅, 브랜드마케팅, 의료진스타마케팅, 피부질환별(급여)마케팅, 시술(비급여)마케팅, 의료장비마케팅, 소비타겟 마케팅,
					대조군 마케팅, 차별성마케팅, 인플루언서마케팅, 사회조사마케팅</div>

				<div class="grid_item grid_txt">내과계열</div>
				<div class="grid_item grid_txt">개원마케팅, 의료진스타마케팅, 질환정보 마케팅, 검진 마케팅, 구전효과 마케팅</div>

				<div class="grid_item grid_txt">외과계열</div>
				<div class="grid_item grid_txt">개원마케팅, 브랜드마케팅, 의료진스타마케팅, 시술 및 치료마케팅, 구전효과 마케팅</div>

				<div class="grid_item grid_td em">치과병의원</div>
				<div class="grid_item grid_txt">세부진료과목</div>
				<div class="grid_item grid_txt">개원마케팅, 브랜드마케팅, 의료진스타마케팅, 상품세분화 마케팅(치과교정과, 치과보철과, 치과보존과, 치주과, 구강악안면외과,
					소아치과, 구강내과, 종합진료, 통합치의학과), DB마케팅, 대조군 마케팅, 차별성 마케팅, 사회조사마케팅</div>

				<div class="grid_item grid_td em">한방</div>
				<div class="grid_item grid_txt">한방병원
					<br>양한방협진
					<br>한의원</div>
				<div class="grid_item grid_txt">개원마케팅, 브랜드마케팅, 의료진스타마케팅, DB마케팅, 대조군마케팅, 차별성마케팅, 사회적조사마케팅,
					의료정보마케팅, 급여/비급여 집중 마케팅, 상품분산(주요상품, 서브상품)마케팅, 사회조사마케팅</div>
			</div>
		</div>
		<div class="w-1400">
			<div class="title_txt" data-aos="fade-up">
				<h2 class="title">주요 마케팅 타겟<span class="gray_fade en_num">05</span></h2>
			</div>
			<div class="grid_table" data-aos="fade-up">
				<div class="grid_item">
					<p class="grid_txt grid_th em">업종</p>
				</div>
				<div class="grid_item">
					<p class="grid_txt grid_th em">세부내용</p>
				</div>
				<div class="grid_item">
					<p class="grid_txt grid_th em">매체</p>
				</div>
				<div class="grid_item">
					<p class="grid_txt grid_td em">일반기업</p>
				</div>
				<div class="grid_item">
					<p class="grid_txt grid_td">브랜드마케팅, 제품마케팅, 서비스마케팅, 인플루언서 마케팅, 리뷰형마케팅, 소비타겟마케팅, 정보형 마케팅, 방문형마케팅</p>
				</div>
				<div class="grid_item">
					<p class="grid_txt grid_td">
						홈페이지
						<br>랜딩페이지
						<br>블로그
						<br>카페
						<br>SNS
						<br>지식인
						<br>언론보도
					</p>
				</div>
				<div class="grid_item">
					<p class="grid_txt grid_td em">소상공인</p>
				</div>
				<div class="grid_item">
					<p class="grid_txt grid_td">브랜드마케팅, 제품마케팅, 서비스마케팅, 인플루언서 마케팅, 리뷰형마케팅, 소비타겟마케팅, 정보형 마케팅, 방문형마케팅</p>
				</div>
			</div>
		</div>


		<div class="w-mob">
			<div class="title_txt" data-aos="fade-up">
				<h2 class="title">주요 마케팅 타겟<span class="gray_fade en_num">04</span></h2>
			</div>
			<div class="main_target">
				<div class="sub_title" data-aos="fade-up">
					<div class="img_wrap">
						<img src="/img/main/icon_head.png" alt="">
					</div>
					<h5 class="h5">병의원</h5>
				</div>
				<div class="sub_txt_wrap" data-aos="fade-up">
					<p class="txt_box_head"><span class="medium">종합병원</span>의료기관 전문센터</p>
					<div class="txt_box">
						<p>의료진스타마케팅, 수술 및 시술 마케팅, Mission & Vision 마케팅, 의료정보 마케팅, 급여/비급여 집중 마케팅, 검진마케팅, 상품 분산(주요상품, 서브상품) 마케팅, 사회조사 마케팅</p>
					</div>
				</div>
				<div class="sub_txt_wrap" data-aos="fade-up">
					<p class="txt_box_head"><span class="medium">병원</span>의료기관 전문과목</p>
					<div class="txt_box">
						<p>의료진스타마케팅, 수술 및 시술 마케팅, Mission & Vision 마케팅, 의료정보 마케팅, 급여/비급여 집중 마케팅, 검진마케팅, 상품 분산(주요상품, 서브상품) 마케팅, 사회조사 마케팅</p>
					</div>
				</div>
				<div class="sub_txt_wrap" data-aos="fade-up">
					<p class="txt_box_head"><span class="medium">의원</span>성형외과</p>
					<div class="txt_box">
						<p>개원마케팅, 브랜드마케팅, 의료진스타마케팅,
							상품세분화 마케팅(신체별 성형수술), 소비타겟 마케팅,
							대조군 마케팅, 차별성마케팅, 사회조사마케팅, 인플루언서마케팅</p>
					</div>
				</div>
				<div class="sub_txt_wrap" data-aos="fade-up">
					<p class="txt_box_head"><span class="medium">의원</span>피부과</p>
					<div class="txt_box">
						<p>개원마케팅, 브랜드마케팅, 의료진스타마케팅,
							피부질환별(급여)마케팅, 시술(비급여)마케팅, 의료장비마케팅,
							소비타겟 마케팅, 대조군 마케팅, 차별성마케팅,
							인플루언서마케팅, 사회조사마케팅</p>
					</div>
				</div>
				<div class="sub_txt_wrap" data-aos="fade-up">
					<p class="txt_box_head"><span class="medium">의원</span>내과계열</p>
					<div class="txt_box">
						<p>개원마케팅, 의료진스타마케팅, 질환정보 마케팅,
							검진 마케팅, 구전효과 마케팅</p>
					</div>
				</div>
				<div class="sub_txt_wrap" data-aos="fade-up">
					<p class="txt_box_head"><span class="medium">의원</span>외과계열</p>
					<div class="txt_box">
						<p>개원마케팅, 브랜드마케팅, 의료진스타마케팅, 시술 및
							치료마케팅, 구전효과 마케팅</p>
					</div>
				</div>
				
			</div>
			<div class="main_target">
				<div class="sub_title" data-aos="fade-up">
					<div class="img_wrap">
						<img src="/img/main/icon_head.png" alt="">
					</div>
					<h5 class="h5">치과병의원</h5>
				</div>
				<div class="sub_txt_wrap" data-aos="fade-up">
					<p class="txt_box_head"><span class="medium">세부진료과목</span></p>
					<div class="txt_box">
						<p>개원마케팅, 브랜드마케팅, 의료진스타마케팅,
							상품세분화 마케팅(치과교정과, 치과보철과, 치과보존과, 치주과,
							구강악안면외과, 소아치과, 구강내과, 종합진료, 통합치의학과),
							DB마케팅, 대조군 마케팅, 차별성 마케팅, 사회조사마케팅</p>
					</div>
				</div>
			</div>
			<div class="main_target">
				<div class="sub_title" data-aos="fade-up">
					<div class="img_wrap">
						<img src="/img/main/icon_head.png" alt="">
					</div>
					<h5 class="h5">한방</h5>
				</div>
				<div class="sub_txt_wrap" data-aos="fade-up">
					<p class="txt_box_head">한방병원 / 양한방협진 / 한의원</p>
					<div class="txt_box">
						<p>개원마케팅, 브랜드마케팅, 의료진스타마케팅, DB마케팅,
							대조군마케팅, 차별성마케팅, 사회적조사마케팅, 의료정보마케팅,
							급여/비급여 집중 마케팅, 상품분산(주요상품, 서브상품)마케팅,
							사회조사마케팅</p>
					</div>
				</div>
			</div>
		</div>
		<div class="w-mob">
			<div class="main_target">
				<div class="sub_title" data-aos="fade-up">
					<div class="img_wrap">
						<img src="/img/main/icon_head.png" alt="">
					</div>
					<h5 class="h5">기업</h5>
				</div>
				<div class="sub_txt_wrap" data-aos="fade-up">
					<p class="txt_box_head ECF1FD">일반기업</p>
					<div class="txt_box">
						<p>브랜드마케팅, 제품마케팅, 서비스마케팅, 인플루언서 마케팅,
							리뷰형마케팅, 소비타겟마케팅, 정보형 마케팅, 방문형마케팅</p>
					</div>
				</div>
			</div>
			<div class="main_target" >
				<div class="sub_txt_wrap" data-aos="fade-up">
					<p class="txt_box_head D9E2FA">소상공인</p>
					<div class="txt_box">
						<p>브랜드마케팅, 제품마케팅, 서비스마케팅, 인플루언서 마케팅,
							리뷰형마케팅, 소비타겟마케팅, 정보형 마케팅, 방문형마케팅</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- 주요 마케팅 타겟 끝 -->

	<!-- contact 구간 시작 -->
	<section class="section_style contact_us">
		<div class="w-1400">
			<div class="txt_box">
				<p class="en_num" data-aos="fade-up">Contact<i></i></p>
			</div>
			<div class="contact_address">
				<p class="strong" data-aos="fade-up">주식회사 담하</p>
				<br>
				<p data-aos="fade-up">부산 연제구 과정로 166, 3층(연산동)</p>
				<p data-aos="fade-up">damha2021@nate.com</p>
				<br>
				<p class="en_num strong" data-aos="fade-up">051.757.0719</p>
				<p class="en_num strong" data-aos="fade-up">010.2983.4744</p>
			</div>
		</div>
		
	</section>
	<!-- contact 구간 끝 -->

	<!-- 고정 문의구간 시작 -->
	<section class="bottom_db">
		<button class="toggleBtn open">빠른상담하기</button>
		<button class="toggleBtn close">닫기</button>
		<div class="db_form_wrap">
			<form action="" class="db_form">
				<input type="text" class="input_txt" placeholder=" 이름">
				<input type="text" class="input_txt" placeholder=" 연락처">
				<select class="select_box">
					<option selected disabled hidden>&nbsp;&nbsp;상담채널</option>
					<option>브랜드 블로그</option>
					<option>상위노출 블로그</option>
					<option>인플루언서 광고</option>
					<option>SNS광고</option>
					<option>검색광고</option>
					<option>언론홍보</option>
					<option>홈페이지 제작</option>
				</select>
				<textarea type="textarea" class="input_txtarea" style="resize:none;" placeholder="문의내용을 입력해주세요."></textarea>
				<label class="checkbox"><input type="checkbox">개인정보 수집 및 이용에 동의합니다.</label>
				<button class="submit">문의하기</button>
			</form>
			
		</div>
	</section>
	<!-- 고정 문의구간 끝 -->

	<script>

	//메인메뉴
	$(function(){
		$(".menu_open").on('click' , function(){  
		$('.nav').toggleClass('on');
		$('.nav_bg').toggleClass('on');
		$('.nav').animate();
		$('.nav_bg').animate();
	});

	$('.menu_close').on('click' , function(){
		$('.nav').toggleClass('on');
		$('.nav_bg').toggleClass('on');
		$('.nav').animate();
		$('.nav_bg').animate();
		});
  });


// 	$(function(){
//   $(".menu_open").click(function(){
// 		if($(".nav").hasClass('on')){
//  		$(".menu_open").removeClass('on');
// 	 	$(".nav").removeClass('on');
//  	}
// 		else{
// 	 	 $(".menu_open").addClass('on');
// 		$(".nav").addClass('on'); 
// 	  }
//   });
  
// });

	//탭메뉴
	$('.tabs').tabs();

	//바닥고정 db
	$(function(){
		$(".open").on('click' , function(){  
		$('.bottom_db').toggleClass('active');
		$('.db_form_wrap').show();
	});

	$('.close').on('click' , function(){
		$('.bottom_db').toggleClass('active');
		$('.db_form_wrap').hide();
		});
  });

	//스와이퍼
	var swiper = new Swiper(".myswiper", {
			slidesPerView: 1,
			spaceBetween: 10,
			centeredSlides: true,
			loop : true,
			autoplay: {
				delay: 2000,
				disableOnInteraction: false,
			},
			breakpoints: {
				640: {
					slidesPerView: 2,
					spaceBetween: 20,
				},
				768: {
					slidesPerView: 4,
					spaceBetween: 40,
				},
				1024: {
					slidesPerView: 5,
					spaceBetween: 50,
				},
			},
			navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
			},
  });

	// AOS
	AOS.init();


	</script>
</body>
</html>