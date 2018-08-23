<?php
		include_once "admin/conn.php";
		$sign=1;
		if(!isset($_COOKIE['token']))
		{
			
			if(!isset($_COOKIE['tokenls']))
			{		
				$sign=0;
			// 	exit("<script>
            // alert('请先登录1');
            // location.href='login.html';
            // </script>");	
			}
			else
			{
				$str=$_COOKIE['tokenls'];
				$var=explode(":",$str);              
				$username=$var[0];
				$sql="SELECT * FROM `tb_students` WHERE username='$username'" ;
				$result=mysqli_query($conn,$sql);
				
				if (mysqli_num_rows($result) ==1)
				{
							$row=mysqli_fetch_assoc($result);
							$username=$row['username'];
							$password=$row['password'];
							$key='zheng';
							$tokenstr=$username.':'.md5($password.$key);
							if($str!=$tokenstr)
							{	
								$sign=0;
			// 					exit("<script>
            // alert('$tokenstr');
            // location.href='login.html';
            // </script>");
							}   
				}
						else
						{
							$sign=0;
			// 				exit("<script>
            // alert('请先登录3');
            // location.href='login.html';
            // </script>");
						}
        	}
		}
        else
        {
        //校验用户登录凭证
                $token=$_COOKIE['token'];
                $username=$_COOKIE['username'];
                $sql="SELECT * FROM `tb_students` WHERE username='$username'" ;
                $result=mysqli_query($conn,$sql);
                if (mysqli_num_rows($result) ==1)
                {
                    $row=mysqli_fetch_assoc($result);
                    $username=$row['username'];
                    $password=$row['password'];
                    $key='zheng';
                    $tokenstr=md5($username.$password.$key);
                    if($token!=$tokenstr)
                    {
						$sign=0;
			// 			exit("<script>
            // alert('请先登录4');
            // location.href='login.html';
            // </script>");
                    }   
                }
                else{
					$sign=0;
			// 		exit("<script>
            // alert('请先登录5');
            // location.href='login.html';
            // </script>");
                }
               
        }

?>
<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script data-cfasync="false" type="text/javascript">
			WebFontConfig={google:{families:['Ubuntu%3A300','Sans+Pro%3A400%2C400italic%2C600','Raleway%3Asemibold','Ubuntu%3A400%2C300'] },classes:false, events:false, timeout:1500};
			(function() {
				var wf = document.createElement('script');
				wf.src='https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
				wf.type='text/javascript';
				wf.defer='true';
				var s=document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(wf, s);})();
		</script>
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="https://greenvalleyintl.com/xmlrpc.php">
		<link type="text/css" media="all" href="https://greenvalleyintl.com/wp-content/cache/autoptimize/css/autoptimize_a2916b143a59c1a522aee632d0997e80.css" rel="stylesheet" />
		<title>Software Downloads - LiDAR360 &amp; LiMapper - GreenValley International</title>
		<meta name="description" content="30-day free trial on all our post-processing software downloads. Need more time to analyze your data? Contact us. LiDAR360 and LiMapper 30 day free trial. After 30 days LiDAR360 will continue to provide visualization and data management functions."/>
		<link rel="canonical" href="https://greenvalleyintl.com/software/software-downloads/" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Software Downloads - LiDAR360 &amp; LiMapper - GreenValley International" />
		<meta property="og:description" content="30-day free trial on all our post-processing software downloads. Need more time to analyze your data? Contact us. LiDAR360 and LiMapper 30 day free trial. After 30 days LiDAR360 will continue to provide visualization and data management functions." />
		<meta property="og:url" content="https://greenvalleyintl.com/software/software-downloads/" />
		<meta property="og:site_name" content="GreenValley International" />
		<meta property="article:publisher" content="http://facebook.com/greenvalleyintl" />
		<meta property="og:image" content="http://greenvalleyint.com/wp-content/uploads/2017/08/电力线.png" />
		<meta property="og:image" content="https://greenvalleyintl.com/wp-content/uploads/2017/08/电力线-1.png" />
		<meta property="og:image:secure_url" content="https://greenvalleyintl.com/wp-content/uploads/2017/08/电力线-1.png" />
		<meta property="og:image:width" content="545" />
		<meta property="og:image:height" content="396" />
		<meta property="og:image:alt" content="LiMapper - import" />
		<meta property="og:image" content="https://greenvalleyintl.com/wp-content/uploads/2017/09/图片12.png" />
		<meta property="og:image:secure_url" content="https://greenvalleyintl.com/wp-content/uploads/2017/09/图片12.png" />
		<meta property="og:image:width" content="1485" />
		<meta property="og:image:height" content="746" />
		<meta property="og:image:alt" content="terrain and buildings" />
		<meta name="twitter:card" content="summary" />
		<meta name="twitter:description" content="30-day free trial on all our post-processing software downloads. Need more time to analyze your data? Contact us. LiDAR360 and LiMapper 30 day free trial. After 30 days LiDAR360 will continue to provide visualization and data management functions." />
		<meta name="twitter:title" content="Software Downloads - LiDAR360 &amp; LiMapper - GreenValley International" />
		<meta name="twitter:site" content="@greenvalleyintl" />
		<meta name="twitter:image" content="http://greenvalleyint.com/wp-content/uploads/2017/08/电力线.png" />
		<meta name="twitter:creator" content="@greenvalleyintl" /> 
		<script type='application/ld+json'>
			{"@context":"https:\/\/schema.org","@type":"Organization","url":"https:\/\/greenvalleyintl.com\/","sameAs":["http:\/\/facebook.com\/greenvalleyintl","https:\/\/twitter.com\/greenvalleyintl"],"@id":"https:\/\/greenvalleyintl.com\/#organization","name":"Greenvalley International","logo":""}
		</script> 
		<link rel='dns-prefetch' href='//maxcdn.bootstrapcdn.com' />
		<link href='https://fonts.gstatic.com' crossorigin='anonymous' rel='preconnect' />
		<link href='https://ajax.googleapis.com' rel='preconnect' />
		<link href='https://fonts.googleapis.com' rel='preconnect' />
		<link rel="alternate" type="application/rss+xml" title="GreenValley International &raquo; Feed" href="https://greenvalleyintl.com/feed/" />
		<link rel="alternate" type="application/rss+xml" title="GreenValley International &raquo; Comments Feed" href="https://greenvalleyintl.com/comments/feed/" /> 
		<script src="./js/jquery.js"></script> 
		<script type="text/javascript" data-cfasync="false">var mi_track_user = true;
	
				var disableStr = 'ga-disable-UA-80174959-1';

				/* Function to detect opted out users */
				function __gaTrackerIsOptedOut() {
					return document.cookie.indexOf(disableStr + '=true') > -1;
				}

				/* Disable tracking if the opt-out cookie exists. */
				if ( __gaTrackerIsOptedOut() ) {
					window[disableStr] = true;
				}

				/* Opt-out function */
				function __gaTrackerOptout() {
				  document.cookie = disableStr + '=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
				  window[disableStr] = true;
				}
				
				if ( mi_track_user ) {
					(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
						(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
						m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
					})(window,document,'script','//www.google-analytics.com/analytics.js','__gaTracker');

					__gaTracker('create', 'UA-80174959-1', 'auto');
					__gaTracker('set', 'forceSSL', true);
					__gaTracker('require', 'displayfeatures');
					__gaTracker('require', 'linkid', 'linkid.js');
					__gaTracker('send','pageview');
				} else {
					console.log( "" );
					(function() {
						/* https://developers.google.com/analytics/devguides/collection/analyticsjs/ */
						var noopfn = function() {
							return null;
						};
						var noopnullfn = function() {
							return null;
						};
						var Tracker = function() {
							return null;
						};
						var p = Tracker.prototype;
						p.get = noopfn;
						p.set = noopfn;
						p.send = noopfn;
						var __gaTracker = function() {
							var len = arguments.length;
							if ( len === 0 ) {
								return;
							}
							var f = arguments[len-1];
							if ( typeof f !== 'object' || f === null || typeof f.hitCallback !== 'function' ) {
								console.log( 'Not running function __gaTracker(' + arguments[0] + " ....) because you\'re not being tracked. ");
								return;
							}
							try {
								f.hitCallback();
							} catch (ex) {

							}
						};
						__gaTracker.create = function() {
							return new Tracker();
						};
						__gaTracker.getByName = noopnullfn;
						__gaTracker.getAll = function() {
							return [];
						};
						__gaTracker.remove = noopfn;
						window['__gaTracker'] = __gaTracker;
					})();
					}
		</script>  
		<!--[if lte IE 9]><link rel='stylesheet' id='sydney-ie9-css'  href='https://greenvalleyintl.com/wp-content/themes/sydney/css/ie9.css' type='text/css' media='all' /> <![endif]-->
		<link rel='stylesheet' id='font-awesome-5-css'  href='https://use.fontawesome.com/releases/v5.0.12/css/all.css' type='text/css' media='all' />
		<link rel='stylesheet' id='font-awesome-css'  href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' type='text/css' media='all' /> 
		<script type='text/javascript' src='https://greenvalleyintl.com/wp-includes/js/jquery/jquery.js'></script> 
		<script type='text/javascript'>var monsterinsights_frontend = {"js_events_tracking":"true","is_debug_mode":"false","download_extensions":"doc,exe,js,pdf,ppt,tgz,zip,xls,lidata","inbound_paths":"","home_url":"https:\/\/greenvalleyintl.com","track_download_as":"event","internal_label":"int","hash_tracking":"false"};</script> 
		<script type='text/javascript'>
			var _EPYT_ = {"ajaxurl":"https:\/\/greenvalleyintl.com\/wp-admin\/admin-ajax.php","security":"2eff283a14","gallery_scrolloffset":"20","eppathtoscripts":"https:\/\/greenvalleyintl.com\/wp-content\/plugins\/youtube-embed-plus\/scripts\/","epresponsiveselector":"[\"iframe.__youtube_prefs_widget__\"]","epdovol":"1","version":"12.1","evselector":"iframe.__youtube_prefs__[src], iframe[src*=\"youtube.com\/embed\/\"], iframe[src*=\"youtube-nocookie.com\/embed\/\"]","ajax_compat":"","stopMobileBuffer":"1"};
		</script> 
		<link rel='https://api.w.org/' href='https://greenvalleyintl.com/wp-json/' />
		<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://greenvalleyintl.com/xmlrpc.php?rsd" />
		<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://greenvalleyintl.com/wp-includes/wlwmanifest.xml" />
		<meta name="generator" content="WordPress 4.9.8" />
		<link rel='shortlink' href='https://greenvalleyintl.com/?p=76' />
		<link rel="alternate" type="application/json+oembed" href="https://greenvalleyintl.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fgreenvalleyintl.com%2Fsoftware%2Fsoftware-downloads%2F" />
		<link rel="alternate" type="text/xml+oembed" href="https://greenvalleyintl.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fgreenvalleyintl.com%2Fsoftware%2Fsoftware-downloads%2F&#038;format=xml" />
		<link rel="icon" href="https://greenvalleyintl.com/wp-content/uploads/2017/08/cropped-Ranch99NW01scanbw-32x32.jpg" sizes="32x32" />
		<link rel="icon" href="https://greenvalleyintl.com/wp-content/uploads/2017/08/cropped-Ranch99NW01scanbw-192x192.jpg" sizes="192x192" />
		<link rel="apple-touch-icon-precomposed" href="https://greenvalleyintl.com/wp-content/uploads/2017/08/cropped-Ranch99NW01scanbw-180x180.jpg" />
		<meta name="msapplication-TileImage" content="https://greenvalleyintl.com/wp-content/uploads/2017/08/cropped-Ranch99NW01scanbw-270x270.jpg" />  
		<script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
			  ga('create', 'UA-80174959-1', 'auto');
			  ga('send', 'pageview');
		</script> 
	</head>
	<body class="page-template page-template-page-templates page-template-page_front-page page-template-page-templatespage_front-page-php page page-id-76 page-child parent-pageid-17 custom-background fl-builder group-blog">
		<div class="preloader">
			<div class="spinner">
				<div class="pre-bounce1"></div>
				<div class="pre-bounce2"></div>
			</div>
		</div>
		<div id="page" class="hfeed site"> 
			<a class="skip-link screen-reader-text" href="#content">Skip to content</a>
			<div class="header-clone"></div>
			<header id="masthead" class="site-header" role="banner">
				<div class="header-wrap">
					<div class="container">
						<div class="row">
							<div class="col-md-4 col-sm-8 col-xs-12"> 
								<a href="https://greenvalleyintl.com/" title="GreenValley International">
									<img class="site-logo" src="https://greenvalleyintl.com/wp-content/uploads/2017/09/hengpai-Proxima-Nova-2.png" alt="GreenValley International" />
								</a>
							</div>
							<div class="col-md-8 col-sm-4 col-xs-12">
								<div class="btn-menu"></div>
								<nav id="mainnav" class="mainnav" role="navigation">
									<div class="menu-menu-1-container">
										<ul id="menu-menu-1" class="menu">
											
										<?php 
											if($sign==1)
											{
												$str=$_COOKIE['tokenls'];
												$var=explode(":",$str);
												echo "<li id='menu-item-43' class='menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-43'>";
												echo "<a href=''>";
												echo "<img src='images/user.png' style='height:32px; width:32px' alt=''> $var[0]";					
												echo "</a>";
												echo 	"<ul id='yui_3_5_1_1_1534745658690_289' class='sub-menu'>
												 			<li id='menu-item-3536' class='menu-item menu-item-type-post_type menu-item-object-page menu-item-3536'>
																<a href='./user.php'>My account</a>
															</li>
															<li id='menu-item-3536' class='menu-item menu-item-type-post_type menu-item-object-page menu-item-3536'>
																<a href='./admin/logincheck.php?state=exitlogin'>log out</a>
															</li>
														</ul>
													</li>";
																			
											}
											else 
											{
												echo "<li id='menu-item-43' class='menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-43'>";
												echo "<a href='./login.html' title='Please login' style='color:red;'>";
												echo "<img src='images/user.png' style='height:32px; width:32px' alt=''> log in";					
												echo "</a></li>";
											}	
										?>											
										</ul>
									</div>
								</nav>
								<nav id="mainnav" class="mainnav" role="navigation" style="float:left">
									<div class="menu-menu-1-container">
										<ul id="menu-menu-1" class="menu">
											<li id="menu-item-48" class="menu-item menu-item-type-post_type menu-item-object-page current-page-ancestor current-menu-ancestor current-menu-parent current-page-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-48">
											<a href="./index.php">Product</a>	
											</li>
										</ul>
									</div>
								</nav>
								
							</div>
						</div>
					</div>
				</div>
			</header>
			<div class="sydney-hero-area">
				<div class="header-image"> 
					<img class="header-inner" src="" width="1920" alt="GreenValley International" title="GreenValley International">
				</div>
			</div>
			<div id="content" class="page-wrap">
				<div class="container content-wrapper">
					<div class="row">
						<div id="primary" class="fp-content-area">
							<main id="main" class="site-main" role="main">
								<div class="entry-content">
									<div class="fl-builder-content fl-builder-content-76 fl-builder-content-primary fl-builder-global-templates-locked" data-post-id="76">
										<div class="fl-row fl-row-full-width fl-row-bg-photo fl-node-5a684e6476192 fl-row-bg-overlay" data-node="5a684e6476192">
											<div class="fl-row-content-wrap">
												<div class="fl-row-content fl-row-fixed-width fl-node-content">
													<div class="fl-col-group fl-node-5a684e6476203" data-node="5a684e6476203">
														<div class="fl-col fl-node-5a684e647628e" data-node="5a684e647628e">
															<div class="fl-col-content fl-node-content">
																<div class="fl-module fl-module-heading fl-node-5a684e64762c7" data-node="5a684e64762c7">
																	<div class="fl-module-content fl-node-content">
																		 <h4 style="text-align: center;"><span class="fl-heading-text">GreenValley is committed to supporting university faculty and students.</span> </h4>
																	</div>
																</div>
																<div class="fl-module fl-module-heading fl-node-5a684e64762c7" data-node="5a684e64762c7">
																	<div class="fl-module-content fl-node-content">
																		<h5 class="fl-heading"> 
																			<a href="http://greenvalleyintl.com/about/" title="30-day free trial on all our pre &	amp; post-processing software. Need more time to analyze your data? Contact us." 		target="_self"> 
																				<span class="fl-heading-text"> 30-day free trial on all our pre & post-processing software. Need more time to analyze your data? Contact us.
																				</span> 
																			</a>
																		</h5>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="fl-row fl-row-full-width fl-row-bg-none fl-node-5996a2795bf18" data-node="5996a2795bf18">
											<div class="fl-row-content-wrap">
												<div class="fl-row-content fl-row-fixed-width fl-node-content">
													<div class="fl-col-group fl-node-5996a27964fa0" data-node="5996a27964fa0">
														<div class="fl-col fl-node-5996a27965388 fl-col-has-cols" data-node="5996a27965388">
															<div class="fl-col-content fl-node-content">
																<div class="fl-col-group fl-node-5996a51c1cf48 fl-col-group-nested" data-node="5996a51c1cf48">
																	<div class="fl-col fl-node-5996a51324c48" data-node="5996a51324c48">
																		<div class="fl-col-content fl-node-content">
																			<div class="fl-module fl-module-heading fl-node-599fda54cce20" data-node="599fda54cce20">
																				<div class="fl-module-content fl-node-content">
																					<h2 class="fl-heading"> <span class="fl-heading-text">LiDAR360</span></h2>
																				</div>
																			</div>
																			<div class="fl-module fl-module-rich-text fl-node-59c1e9efb82ca" data-node="59c1e9efb82ca">
																				<div class="fl-module-content fl-node-content">
																					<div class="fl-rich-text">
																						<p style="text-align: center;">
																							<span style="color: #993300; font-size: 20px;">
																								<strong>v2.2</strong>
																							</span>
																						</p>
																						<p style="text-align: center;">
																							<span style="font-size: 18px;">30 day free trial of the comprehensive LiDAR360 software including: 
																							</span>
																						</p>
																						<p style="text-align: center;">
																							<span style="font-size: 18px;">Framework</span>
																						</p>
																						<p style="text-align: center;">
																							<span style="font-size: 18px;">Powerline</span>
																						</p>
																						<p style="text-align: center;">
																							<span style="font-size: 18px;">Terrain</span>
																						</p>
																						<p style="text-align: center;">
																							<span style="font-size: 18px;">ALS Forest &amp; TLS Forest</span>
																						</p>
																						<p style="text-align: center;">
																							<span style="font-size: 18px;">After 30 days LiDAR360 will continue to provide visualization and data management, 
																								<strong>absolutely free</strong>.
																							</span>
																						</p>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="fl-col fl-node-599f8a5ba8818 fl-col-small" data-node="599f8a5ba8818">
																		<div class="fl-col-content fl-node-content">
																			<div class="fl-module fl-module-photo fl-node-59c1ee63e38e8 fl-animation fl-slide-left" data-node="59c1ee63e38e8" data-animation-delay="0.5">
																				<div class="fl-module-content fl-node-content">
																					<div class="fl-photo fl-photo-crop-landscape fl-photo-align-center" itemscope itemtype="https://schema.org/ImageObject">
																						<div class="fl-photo-content fl-photo-img-png"> 
																							<img class="fl-photo-img wp-image-658" src="https://greenvalleyintl.com/wp-content/uploads/bb-plugin/cache/电力线-landscape.png" alt="lidar360 - powerline" itemprop="image" title="lidar360 - powerline"  />
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="fl-col-group fl-node-5b6375b99b1a5 fl-col-group-nested" data-node="5b6375b99b1a5">
																	<div class="fl-col fl-node-5b6375b99b330 fl-col-small" data-node="5b6375b99b330">
																		<div class="fl-col-content fl-node-content">
																			<div class="fl-module fl-module-button fl-node-599f8a5ba8430" data-node="599f8a5ba8430">
																				<div class="fl-module-content fl-node-content">
																					<div class="fl-button-wrap fl-button-width-custom fl-button-center fl-button-has-icon"> 
<!-- lidar360文档 --><!-- lidar360文档 --><!-- lidar360文档 --><!-- lidar360文档 --><!-- lidar360文档 --><!-- lidar360文档 --><!-- lidar360文档 -->
																						<a href="#" class="fl-button fl-button-lightbox" id="lid360down" role="button"> 
																							<i class="fl-button-icon fl-button-icon-before fa fa-cloud-download">	
																							</i> 
																							access
																							<!-- <span class="fl-button-text"></span>  -->
																						</a>
<!-- lidar360文档 --><!-- lidar360文档 --><!-- lidar360文档 --><!-- lidar360文档 --><!-- lidar360文档 --><!-- lidar360文档 --><!-- lidar360文档 -->
																					</div>
																					<script>
																						document.getElementById("lid360down").onclick=function(){
																							window.location.href='http://54.71.19.189/owncloud/index.php/s/mtfbf288HSFDZ6b/download';
																						        console.log(11);
																						}//window.location.href='http://54.71.19.189/owncloud/index.php/s/iCGTwGlDFKD7wHV/download';
																					</script>
																				</div>
																			</div>
																		</div>
																	</div>
																<div class="fl-col fl-node-5b6375b99b373 fl-col-small" data-node="5b6375b99b373">
																	<div class="fl-col-content fl-node-content">
																		<div class="fl-module fl-module-button fl-node-5ab9a51b8e125" data-node="5ab9a51b8e125">
																			<div class="fl-module-content fl-node-content">
																				<div class="fl-button-wrap fl-button-width-custom fl-button-center fl-button-has-icon">
<!-- lidar360文档 --><!-- lidar360文档 --><!-- lidar360文档 --><!-- lidar360文档 --><!-- lidar360文档 --><!-- lidar360文档 --><!-- lidar360文档 -->
																					<a href="https://greenvalleyintl.com/wp-content/lidar360_en/index.html" target="_blank" class="fl-button" role="button" rel="noopener" > 
																						<i class="fl-button-icon fl-button-icon-before fa fa-cloud-download"></i> 
																						<span class="fl-button-text">User Guide</span> 
																					</a>
<!-- lidar360文档 --><!-- lidar360文档 --><!-- lidar360文档 --><!-- lidar360文档 --><!-- lidar360文档 --><!-- lidar360文档 --><!-- lidar360文档 -->
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="fl-col fl-node-5b6375b99b3b3 fl-col-small" data-node="5b6375b99b3b3">
																	<div class="fl-col-content fl-node-content">
																		<div class="fl-module fl-module-button fl-node-5b63754a65637" data-node="5b63754a65637">
																			<div class="fl-module-content fl-node-content">
																				<div class="fl-button-wrap fl-button-width-custom fl-button-center fl-button-has-icon">
<!-- lidar360文档 --><!-- lidar360文档 --><!-- lidar360文档 --><!-- lidar360文档 --><!-- lidar360文档 --><!-- lidar360文档 --><!-- lidar360文档 -->
																					<a href="https://greenvalleyintl.com/wp-content/uploads/2018/08/GVI-End-User-License-Agreement-rev_20180725-1.pdf" target="_blank" class="fl-button" role="button" rel="noopener" > 
																						<i class="fl-button-icon fl-button-icon-before fa fa-cloud-download"></i> 
																						<span class="fl-button-text">User Agreement</span> 
																					</a>
<!-- lidar360文档 --><!-- lidar360文档 --><!-- lidar360文档 --><!-- lidar360文档 --><!-- lidar360文档 --><!-- lidar360文档 --><!-- lidar360文档 -->
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<script>
											
											function getCookie(name)
											{
												var strcookie = document.cookie;//获取cookie字符串
												var arrcookie = strcookie.split("; ");//分割
												//遍历匹配
												for ( var i = 0; i < arrcookie.length; i++) 
												{
													var arr = arrcookie[i].split("=");
													if (arr[0] == name)
													{
														return arr[1];
													}
												}
												return ;
											}
												
												document.getElementById("lid360down").onclick=function()
													{
														if(getCookie('tokenls'))
														{
															window.location.href='./user.php';
															//window.location.href='http://54.71.19.189/owncloud/index.php/s/mtfbf288HSFDZ6b/download';
														}
														else
														{
															 alert("Please login before downloading");
															 window.location.href='login.html';
														}
													}//window.location.href='http://54.71.19.189/owncloud/index.php/s/iCGTwGlDFKD7wHV/download';		
								</script>
									<div class="fl-row fl-row-full-width fl-row-bg-color fl-node-59c1ed8a9453f" data-node="59c1ed8a9453f">
										<div class="fl-row-content-wrap">
											<div class="fl-row-content fl-row-fixed-width fl-node-content">
												<div class="fl-col-group fl-node-59c1ed8a947b8" data-node="59c1ed8a947b8">
													<div class="fl-col fl-node-59c1ed8a947f3 fl-col-has-cols" data-node="59c1ed8a947f3">
														<div class="fl-col-content fl-node-content">
															<div class="fl-col-group fl-node-59c1ed8a9482b fl-col-group-nested" data-node="59c1ed8a9482b">
																<div class="fl-col fl-node-59c1ed8a94864 fl-col-small" data-node="59c1ed8a94864">
																	<div class="fl-col-content fl-node-content">
																		<div class="fl-module fl-module-photo fl-node-59c1ee95645bb fl-animation fl-slide-right" data-node="59c1ee95645bb" data-animation-delay="0.5">
																			<div class="fl-module-content fl-node-content">
																				<div class="fl-photo fl-photo-crop-landscape fl-photo-align-center" itemscope itemtype="https://schema.org/ImageObject">
																					<div class="fl-photo-content fl-photo-img-png"> 
																						<img class="fl-photo-img wp-image-669" src="https://greenvalleyintl.com/wp-content/uploads/bb-plugin/cache/电力线-1-landscape.png" alt="LiMapper - import" itemprop="image" title="LiMapper - import"  />
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="fl-module fl-module-button fl-node-5b6377e65d0ca" data-node="5b6377e65d0ca">
																			<div class="fl-module-content fl-node-content">
																				<div class="fl-button-wrap fl-button-width-custom fl-button-center fl-button-has-icon"> 
																					<a href="https://greenvalleyintl.com/wp-content/uploads/2018/08/GVI-End-User-License-Agreement-rev_20180725.pdf" target="_blank" class="fl-button" role="button" rel="noopener" > 
																						<i class="fl-button-icon fl-button-icon-before fa fa-cloud-download"></i> 
																						<span class="fl-button-text">User Agreement</span> 
																					</a>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="fl-col fl-node-59c1ed8a94944" data-node="59c1ed8a94944">
																	<div class="fl-col-content fl-node-content">
																		<div class="fl-module fl-module-heading fl-node-59c1ed8a9497c" data-node="59c1ed8a9497c">
																			<div class="fl-module-content fl-node-content">
																				<h2 class="fl-heading"> <span class="fl-heading-text">LiMapper</span></h2>
																			</div>
																		</div>
																		<div class="fl-module fl-module-rich-text fl-node-59c1ed8a949b5" data-node="59c1ed8a949b5">
																			<div class="fl-module-content fl-node-content">
																				<div class="fl-rich-text">
																					<h2 style="text-align: center;">
																						<span style="font-size: 20px; color: #993300;">
																							<strong>v2.4</strong>
																						</span>
																					</h2>
																					<p style="text-align: center;">
																						<span style="font-size: 18px;">30 day free trial of LiMapper Photogrammetry software including all functions: </span>
																						<span style="font-size: 18px;">high resolution image processing, surface modeling &amp; orthomosaics.</span>
																					</p>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="fl-col-group fl-node-5b51b7aacc8c4 fl-col-group-nested" data-node="5b51b7aacc8c4">
																<div class="fl-col fl-node-5b51b7aaccd83 fl-col-small" data-node="5b51b7aaccd83"><div class="fl-col-content fl-node-content">
																	<div class="fl-module fl-module-button fl-node-5b6377c81c9b5" data-node="5b6377c81c9b5">
																		<div class="fl-module-content fl-node-content">
																			<div class="fl-button-wrap fl-button-width-custom fl-button-center fl-button-has-icon"> 
																				<a href="https://greenvalleyintl.com/wp-content/uploads/2018/08/GVI-End-User-License-Agreement-rev_20180725-1.pdf" target="_blank" class="fl-button" role="button" rel="noopener" > 
																					<i class="fl-button-icon fl-button-icon-before fa fa-cloud-download"></i> 
																					<span class="fl-button-text">User Guide</span> 
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="fl-col fl-node-5b51b7aaccea2 fl-col-small" data-node="5b51b7aaccea2">
																<div class="fl-col-content fl-node-content">
																	<div class="fl-module fl-module-button fl-node-59c1ed8a949ed" data-node="59c1ed8a949ed">
																		<div class="fl-module-content fl-node-content">
																			<div class="fl-button-wrap fl-button-width-custom fl-button-center fl-button-has-icon"> 
																				<a href="http://www.baidu.com" class="fl-button fl-button-lightbox" role="button"> 
																					<i class="fl-button-icon fl-button-icon-before fa fa-cloud-download"></i> 
																					<span class="fl-button-text">Download</span> 
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="fl-row fl-row-full-width fl-row-bg-none fl-node-5b51a75c6169c" data-node="5b51a75c6169c">
									<div class="fl-row-content-wrap">
										<div class="fl-row-content fl-row-fixed-width fl-node-content">
											<div class="fl-col-group fl-node-5b51a75c619f4" data-node="5b51a75c619f4">
												<div class="fl-col fl-node-5b51a75c61a2f fl-col-has-cols" data-node="5b51a75c61a2f">
													<div class="fl-col-content fl-node-content">
														<div class="fl-col-group fl-node-5b51a75c61a68 fl-col-group-nested" data-node="5b51a75c61a68">
															<div class="fl-col fl-node-5b51a75c61aa0" data-node="5b51a75c61aa0">
																<div class="fl-col-content fl-node-content">
																	<div class="fl-module fl-module-heading fl-node-5b51a75c61ad8" data-node="5b51a75c61ad8">
																		<div class="fl-module-content fl-node-content">
																			<h2 class="fl-heading"> 
																				<span class="fl-heading-text">LiGeoreference</span>
																			</h2>
																		</div>
																	</div>
																	<div class="fl-module fl-module-rich-text fl-node-5b51a75c61b10" data-node="5b51a75c61b10">
																		<div class="fl-module-content fl-node-content">
																			<div class="fl-rich-text">
																				<p style="text-align: center;">
																					<span style="color: #993300; font-size: 20px;">
																						<strong>v1.0</strong>
																					</span>
																				</p>
																				<p style="text-align: center;">
																					<span style="font-size: 18px;">15 day free trial. Merge range measurements quickly and accurately from your UAV, mobile or handheld LiDAR system. Please note trial version only functions with .lidata file format (GVI's proprietary format), Full License will function in other formats such as .las</span>
																				</p>
																			</div>
																		</div>
																	</div>
																	<div class="fl-module fl-module-button fl-node-5b7319d36113f" data-node="5b7319d36113f">
																		<div class="fl-module-content fl-node-content">
																			<div class="fl-button-wrap fl-button-width-custom fl-button-center fl-button-has-icon"> 
																				<a href="http://54.71.19.189/owncloud/index.php/s/QuXloPWaTzW6xQv/download" target="_blank" class="fl-button" role="button" rel="noopener" > 
																					<i class="fl-button-icon fl-button-icon-before fa fa-cloud-download"></i> 
																					<span class="fl-button-text">Free Trial</span> 
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="fl-col fl-node-5b51a75c61bb8 fl-col-small" data-node="5b51a75c61bb8">
																<div class="fl-col-content fl-node-content">
																	<div class="fl-module fl-module-photo fl-node-5b51a75c61bf0 fl-animation fl-slide-left" data-node="5b51a75c61bf0" data-animation-delay="0.5">
																		<div class="fl-module-content fl-node-content">
																			<div class="fl-photo fl-photo-crop-landscape fl-photo-align-center" itemscope itemtype="https://schema.org/ImageObject">
																				<div class="fl-photo-content fl-photo-img-png"> 
																					<img class="fl-photo-img wp-image-3565 size-full" src="https://greenvalleyintl.com/wp-content/uploads/bb-plugin/cache/图片12-landscape.png" alt="terrain and buildings" itemprop="image" height="746" width="1485" title="terrain and buildings"  />
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="fl-module fl-module-button fl-node-5b6377bbc0f86" data-node="5b6377bbc0f86">
																		<div class="fl-module-content fl-node-content">
																			<div class="fl-button-wrap fl-button-width-custom fl-button-center fl-button-has-icon"> 
																				<a href="https://greenvalleyintl.com/wp-content/uploads/2018/08/GVI-End-User-License-Agreement-rev_20180725-1.pdf" target="_blank" class="fl-button" role="button" rel="noopener" > 
																					<i class="fl-button-icon fl-button-icon-before fa fa-cloud-download"></i> 
																					<span class="fl-button-text">User Agreement</span> 
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</main>
				</div>
			</div>
		</div>
	</div> 
	<a class="go-top">
		<i class="fa fa-angle-up"></i>
	</a>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container" style="height:35px;overflow:hidden;"> 
			<a href="http://greenvalleyintl.com/">GreenValley International©</a> 
			<span class="sep"> | </span> 
			Email: info@greenvalleyintl.com | Phone: +1 (209) 720-4054<br />
			<a href="http://greenvalleyintl.com/wp-content/index.php">dress shoes</a>
		</div>
	</footer>
	</div> 
<script type="text/javascript" defer src="https://greenvalleyintl.com/wp-content/cache/autoptimize/js/autoptimize_b659163121113fda01a45d91f4246ed4.js"></script>
	</body>
	</html>