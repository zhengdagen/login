<?php
		include_once "admin/conn.php";
		$sign=1;
		if(!isset($_COOKIE['token']))
		{
			
			if(!isset($_COOKIE['tokenls']))
			{		
				$sign=0;
			exit("<script>
             location.href='login.html';
             </script>");	
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
								exit("<script>
								 location.href='login.html';
								 </script>");
							}   
				}
						else
						{
							$sign=0;
			 				exit("<script>
							 location.href='login.html';
							 </script>");
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
			 			exit("<script>
							 location.href='login.html';
							 </script>");
                    }   
                }
                else{
					$sign=0;
				 		exit("<script>
						 location.href='login.html';
						 </script>");
                }
               
        }

?>
<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link type="text/css" media="all" href="https://greenvalleyintl.com/wp-content/cache/autoptimize/css/autoptimize_a2916b143a59c1a522aee632d0997e80.css" rel="stylesheet" />
		<title>Software Downloads - LiDAR360 &amp; LiMapper - GreenValley International</title>
		<script src="./js/jquery.js"></script> 
		<link rel='stylesheet' id='font-awesome-5-css'  href='https://use.fontawesome.com/releases/v5.0.12/css/all.css' type='text/css' media='all' />
		<link rel='stylesheet' id='font-awesome-css'  href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' type='text/css' media='all' /> 
		<link rel="icon" type="image/x-icon" href="icon.ico" />
		<style>

		.box{
			
			width:90%;
			text-align: center;
			background-color:#f7f7f7;
		}			
		.userhead{
			
			width:90%;
			margin-top: 50px;
			margin-left:50px;
			background-color:#f7f7f7;						
		} 

		.usehe1{	
			padding:8px;
			background-color:rgba(0,0,0,0.5);
			border-radius:10px;	
		}

		.usehe2{	
			padding:8px;
			background-color:#F0F0F0;	
		}
			
		.userbox{
			width:90%;
			margin-top: 50px;
			margin-left:50px;
			background-color:#F0F0F0;
		}
			
		.usehe3{
			background-color:#F0F0F0;
			border-radius:20px;
		}
			
		.box ul{
			background-color:rgba(105,105,105,0.2);
			width:100%;
			list-style: none;
			list-style:none; 
			padding:8px;
			margin-bottom:0;
			border-radius:5px;
        }
			
		.box ul li{
			display: inline;
    		line-height: 50px;
			margin-left:10px;
			width:18%;
			float:left;
		}
			
		button{
			border-radius:8px;
			background-color:rgba(105,105,105,0.2);
			height:35px;
			padding: 4px;
		}
			
		.clear{
            clear:both;
    	}		
		</style> 
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
												echo "<a href='./login.html' title='Click login'>";
												echo 'log in';					
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
			<div>
				<div style="height:100px"><h1></h1></div>
				<div class="box">
					<div class="userhead">
						<div class="usehe1">My information</div>
						<div class="usehe3">
							<ul>
								<li>college</li>
								<li>username</li>
								<li>E-mail</li>
								<div class="clear"></div>
							</ul>
							<ul>
								<li>Wuhan college</li>	
								<li>green</li>
								<li>1435236447@qq.com</li>
								<div class="clear"></div>
							</ul>
						</div>					
					</div>
					<div class="userbox">
						<div class="usehe1">My software</div>
						<div class="usehe3">
							<ul>
								<li>product name</li>
								<li>Activation status</li>
								<li>Activation time</li>
								<li>Expiration time</li>
								<li> &nbsp;</li>
								<div class="clear"></div>
							</ul>
							<ul>
								<li>Lidar360 v2.2</li>
								<li>已激活 </li>
								<li>2019.09</li>
								<li>2020.09</li>
								<li style="border:0;"><div style="display:inline-block"><button id="lid360down">access</button></div></li>
								<div class="clear"></div>
							</ul>
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
		for ( var i = 0; i < arrcookie.length; i++) {
			var arr = arrcookie[i].split("=");
			if (arr[0] == name){
			return arr[1];
			}
		}
		return ;
	}		
	document.getElementById("lid360down").onclick=function()
		{
			if(getCookie('tokenls'))
			{
				window.location.href='http://54.71.19.189/owncloud/index.php/s/mtfbf288HSFDZ6b/download';			
			}
			else
			{
				alert("Please login before downloading");
				window.location.href='login.html';
			}
		}	
</script>
	</body>
	</html>