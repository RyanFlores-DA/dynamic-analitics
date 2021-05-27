<?php 
include('dashboard/verifica_login.php');
$user = $_SESSION['usuario'];

        include 'dashboard/conectar.php'; 
        $sql = "SELECT * FROM usuario where usuario = '{$user}'";
        $search = mysqli_query($strcon, $sql);
        
        while($dados = mysqli_fetch_array($search)){
            $priority = $dados['prioridade'];
            $usuario = $dados['usuario'];
              
            
?>
<!DOCTYPE html>
<html amp>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/css/images/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="dashboard/css/showgraph.css">
  <meta name="description" content="">
  <link href="dashboard/css/gstile.css" rel="stylesheet">
  <title>Dashboard</title>
 <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style>
<noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
 
  <script async  src="https://cdn.ampproject.org/v0.js"></script>
  <script async custom-template="amp-mustache" src="https://cdn.ampproject.org/v0/amp-mustache-0.2.js"></script>
  <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
  <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
  
  
</head>
<body>
    <amp-sidebar id="sidebar" class="cid-r1Dtil7YY5" layout="nodisplay" side="right">
		<div class="builder-sidebar" id="builder-sidebar">
			<button on="tap:sidebar.close" class="close-sidebar">
			<span></span>
			<span></span>
			</button>
		
				
				<!-- NAVBAR ITEMS -->
				<ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item">
					<li class="nav-item">
						<a class="nav-link mbr-bold link text-black display-7" href="#">
                        <?php echo ' Usuário nível - ' . $priority ?></a>
					</li></ul>
				<!-- NAVBAR ITEMS END -->
				<!-- SOCIAL ICON -->
				<div class="menu-social-list">
					
					
					
					
				<a href="https://www.youtube.com/channel/UCIl8JHjLsqZNOdgBOYC_MRQ" target="_blank" class="iconfont-wrapper">
						<span class="amp-iconfont animation-normal fa-youtube-square fa"><svg width="100%" height="100%" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><path d="M1047 1303v-157q0-50-29-50-17 0-33 16v224q16 16 33 16 29 0 29-49zm184-122h66v-34q0-51-33-51t-33 51v34zm-571-266v70h-80v423h-74v-423h-78v-70h232zm201 126v367h-67v-40q-39 45-76 45-33 0-42-28-6-17-6-54v-290h66v270q0 24 1 26 1 15 15 15 20 0 42-31v-280h67zm252 111v146q0 52-7 73-12 42-53 42-35 0-68-41v36h-67v-493h67v161q32-40 68-40 41 0 53 42 7 21 7 74zm251 129v9q0 29-2 43-3 22-15 40-27 40-80 40-52 0-81-38-21-27-21-86v-129q0-59 20-86 29-38 80-38t78 38q21 29 21 86v76h-133v65q0 51 34 51 24 0 30-26 0-1 .5-7t.5-16.5v-21.5h68zm-451-824v156q0 51-32 51t-32-51v-156q0-52 32-52t32 52zm533 713q0-177-19-260-10-44-43-73.5t-76-34.5q-136-15-412-15-275 0-411 15-44 5-76.5 34.5t-42.5 73.5q-20 87-20 260 0 176 20 260 10 43 42.5 73t75.5 35q137 15 412 15t412-15q43-5 75.5-35t42.5-73q20-84 20-260zm-755-651l90-296h-75l-51 195-53-195h-78q7 23 23 69l24 69q35 103 46 158v201h74v-201zm289 81v-130q0-58-21-87-29-38-78-38-51 0-78 38-21 29-21 87v130q0 58 21 87 27 38 78 38 49 0 78-38 21-27 21-87zm181 120h67v-370h-67v283q-22 31-42 31-15 0-16-16-1-2-1-26v-272h-67v293q0 37 6 55 11 27 43 27 36 0 77-45v40zm503-304v960q0 119-84.5 203.5t-203.5 84.5h-960q-119 0-203.5-84.5t-84.5-203.5v-960q0-119 84.5-203.5t203.5-84.5h960q119 0 203.5 84.5t84.5 203.5z"></path></svg></span>
					</a><a href="https://www.youtube.com/channel/UCIl8JHjLsqZNOdgBOYC_MRQ" target="_blank" class="iconfont-wrapper">
						<span class="amp-iconfont animation-normal fa-youtube-square fa"><svg width="100%" height="100%" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><path d="M1047 1303v-157q0-50-29-50-17 0-33 16v224q16 16 33 16 29 0 29-49zm184-122h66v-34q0-51-33-51t-33 51v34zm-571-266v70h-80v423h-74v-423h-78v-70h232zm201 126v367h-67v-40q-39 45-76 45-33 0-42-28-6-17-6-54v-290h66v270q0 24 1 26 1 15 15 15 20 0 42-31v-280h67zm252 111v146q0 52-7 73-12 42-53 42-35 0-68-41v36h-67v-493h67v161q32-40 68-40 41 0 53 42 7 21 7 74zm251 129v9q0 29-2 43-3 22-15 40-27 40-80 40-52 0-81-38-21-27-21-86v-129q0-59 20-86 29-38 80-38t78 38q21 29 21 86v76h-133v65q0 51 34 51 24 0 30-26 0-1 .5-7t.5-16.5v-21.5h68zm-451-824v156q0 51-32 51t-32-51v-156q0-52 32-52t32 52zm533 713q0-177-19-260-10-44-43-73.5t-76-34.5q-136-15-412-15-275 0-411 15-44 5-76.5 34.5t-42.5 73.5q-20 87-20 260 0 176 20 260 10 43 42.5 73t75.5 35q137 15 412 15t412-15q43-5 75.5-35t42.5-73q20-84 20-260zm-755-651l90-296h-75l-51 195-53-195h-78q7 23 23 69l24 69q35 103 46 158v201h74v-201zm289 81v-130q0-58-21-87-29-38-78-38-51 0-78 38-21 29-21 87v130q0 58 21 87 27 38 78 38 49 0 78-38 21-27 21-87zm181 120h67v-370h-67v283q-22 31-42 31-15 0-16-16-1-2-1-26v-272h-67v293q0 37 6 55 11 27 43 27 36 0 77-45v40zm503-304v960q0 119-84.5 203.5t-203.5 84.5h-960q-119 0-203.5-84.5t-84.5-203.5v-960q0-119 84.5-203.5t203.5-84.5h960q119 0 203.5 84.5t84.5 203.5z"></path></svg></span>
					</a></div>
				<!-- SOCIAL ICON END -->
				<!-- SHOW BUTTON -->
				<div class="navbar-buttons mbr-section-btn"><a class="btn btn-md btn-black mbr-bold display-7" href="#">Planos<br></a></div>
				<!-- SHOW BUTTON END -->
			</div>
	</amp-sidebar>
  <section class="menu1 menu horizontal-menu cid-r1Dtil7YY5" id="menu1-d">
	
	<!-- <div class="menu-wrapper"> -->
	<nav class="navbar navbar-dropdown navbar-expand-lg navbar-fixed-top">
		<div class="menu-container container">
			<!-- SHOW LOGO -->
			<div class="navbar-brand">
				
				<span class="navbar-caption-wrap"><a class="navbar-caption mbr-bold text-black display-5"><?php echo 'Olá, ' . $usuario ?></a></span>
			</div>
			<!-- SHOW LOGO END -->
			<!-- COLLAPSED MENU -->
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				
				<!-- NAVBAR ITEMS -->
				<ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item">
					<li class="nav-item">
						<a class="nav-link mbr-bold link text-black display-7" href="#contacts6-5">
                        <?php echo ' Usuário nível - ' . $priority ?></a>
					</li></ul>
                    <?php  }?>
				<!-- NAVBAR ITEMS END -->
				<!-- SOCIAL ICON -->
				<div class="menu-social-list">
					
					
					
					
				<a href="https://www.youtube.com/channel/UCIl8JHjLsqZNOdgBOYC_MRQ" target="_blank" class="iconfont-wrapper">
						<span class="amp-iconfont animation-normal fa-youtube-square fa"><svg width="100%" height="100%" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><path d="M1047 1303v-157q0-50-29-50-17 0-33 16v224q16 16 33 16 29 0 29-49zm184-122h66v-34q0-51-33-51t-33 51v34zm-571-266v70h-80v423h-74v-423h-78v-70h232zm201 126v367h-67v-40q-39 45-76 45-33 0-42-28-6-17-6-54v-290h66v270q0 24 1 26 1 15 15 15 20 0 42-31v-280h67zm252 111v146q0 52-7 73-12 42-53 42-35 0-68-41v36h-67v-493h67v161q32-40 68-40 41 0 53 42 7 21 7 74zm251 129v9q0 29-2 43-3 22-15 40-27 40-80 40-52 0-81-38-21-27-21-86v-129q0-59 20-86 29-38 80-38t78 38q21 29 21 86v76h-133v65q0 51 34 51 24 0 30-26 0-1 .5-7t.5-16.5v-21.5h68zm-451-824v156q0 51-32 51t-32-51v-156q0-52 32-52t32 52zm533 713q0-177-19-260-10-44-43-73.5t-76-34.5q-136-15-412-15-275 0-411 15-44 5-76.5 34.5t-42.5 73.5q-20 87-20 260 0 176 20 260 10 43 42.5 73t75.5 35q137 15 412 15t412-15q43-5 75.5-35t42.5-73q20-84 20-260zm-755-651l90-296h-75l-51 195-53-195h-78q7 23 23 69l24 69q35 103 46 158v201h74v-201zm289 81v-130q0-58-21-87-29-38-78-38-51 0-78 38-21 29-21 87v130q0 58 21 87 27 38 78 38 49 0 78-38 21-27 21-87zm181 120h67v-370h-67v283q-22 31-42 31-15 0-16-16-1-2-1-26v-272h-67v293q0 37 6 55 11 27 43 27 36 0 77-45v40zm503-304v960q0 119-84.5 203.5t-203.5 84.5h-960q-119 0-203.5-84.5t-84.5-203.5v-960q0-119 84.5-203.5t203.5-84.5h960q119 0 203.5 84.5t84.5 203.5z"></path></svg></span>
					</a><a href="https://www.youtube.com/channel/UCIl8JHjLsqZNOdgBOYC_MRQ" target="_blank" class="iconfont-wrapper">
						<span class="amp-iconfont animation-normal fa-youtube-square fa"><svg width="100%" height="100%" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><path d="M1047 1303v-157q0-50-29-50-17 0-33 16v224q16 16 33 16 29 0 29-49zm184-122h66v-34q0-51-33-51t-33 51v34zm-571-266v70h-80v423h-74v-423h-78v-70h232zm201 126v367h-67v-40q-39 45-76 45-33 0-42-28-6-17-6-54v-290h66v270q0 24 1 26 1 15 15 15 20 0 42-31v-280h67zm252 111v146q0 52-7 73-12 42-53 42-35 0-68-41v36h-67v-493h67v161q32-40 68-40 41 0 53 42 7 21 7 74zm251 129v9q0 29-2 43-3 22-15 40-27 40-80 40-52 0-81-38-21-27-21-86v-129q0-59 20-86 29-38 80-38t78 38q21 29 21 86v76h-133v65q0 51 34 51 24 0 30-26 0-1 .5-7t.5-16.5v-21.5h68zm-451-824v156q0 51-32 51t-32-51v-156q0-52 32-52t32 52zm533 713q0-177-19-260-10-44-43-73.5t-76-34.5q-136-15-412-15-275 0-411 15-44 5-76.5 34.5t-42.5 73.5q-20 87-20 260 0 176 20 260 10 43 42.5 73t75.5 35q137 15 412 15t412-15q43-5 75.5-35t42.5-73q20-84 20-260zm-755-651l90-296h-75l-51 195-53-195h-78q7 23 23 69l24 69q35 103 46 158v201h74v-201zm289 81v-130q0-58-21-87-29-38-78-38-51 0-78 38-21 29-21 87v130q0 58 21 87 27 38 78 38 49 0 78-38 21-27 21-87zm181 120h67v-370h-67v283q-22 31-42 31-15 0-16-16-1-2-1-26v-272h-67v293q0 37 6 55 11 27 43 27 36 0 77-45v40zm503-304v960q0 119-84.5 203.5t-203.5 84.5h-960q-119 0-203.5-84.5t-84.5-203.5v-960q0-119 84.5-203.5t203.5-84.5h960q119 0 203.5 84.5t84.5 203.5z"></path></svg></span>
					</a></div>
				<!-- SOCIAL ICON END -->
				<!-- SHOW BUTTON -->
				<div class="navbar-buttons mbr-section-btn"><a class="btn btn-md btn-black mbr-bold display-7" href="#">Planos<br></a></div>
				<!-- SHOW BUTTON END -->
			</div>
			<!-- COLLAPSED MENU END -->
			
			<button on="tap:sidebar.toggle" class="ampstart-btn hamburger">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</button>
		</div>
	</nav>
	<!-- AMP plug -->
	
	<!-- </div> -->
</section>

<section class="features1 cid-r88LW0Kn0Y" id="features1-l">
    

    
    <div class="container-fluid">
        <div class="title-wrap mbr-pb-4 align-center">
            <h3 class="mbr-section-title mbr-bold mbr-fonts-style display-2">Dashboard</h3>
            <h4 class="mbr-section-subtitle mbr-fonts-style mbr-pt-2 display-5">Escolha um tipo de gráfico.</h4>
        </div>
        <div class="mbr-row mbr-jc-c">
            <div class="card mbr-col-sm-12 mbr-col-md-8 mbr-col-lg-4 md-pb">
                <div class="card-wrapper mbr-flex mbr-column mbr-pt-3 mbr-pb-3 mbr-px-4">
                    <div class="card-img mbr-pb-3">
                        <div class="iconfont-wrapper">
                            <span class="amp-iconfont fa-heart fa"><svg width="100%" height="100%" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><path d="M896 1664q-26 0-44-18l-624-602q-10-8-27.5-26t-55.5-65.5-68-97.5-53.5-121-23.5-138q0-220 127-344t351-124q62 0 126.5 21.5t120 58 95.5 68.5 76 68q36-36 76-68t95.5-68.5 120-58 126.5-21.5q224 0 351 124t127 344q0 221-229 450l-623 600q-18 18-44 18z"></path></svg></span>
                        </div>
                    </div>
                    <div class="card-box">
                        <h3 class="card-title mbr-bold mbr-fonts-style display-5">Copywriting</h3>
                        <h4 class="card-subtitle mbr-pt-3 mbr-fonts-style mbr-bold display-7">Card Subtitle</h4>
                        <p class="card-text mbr-fonts-style mbr-pt-2 display-7">I write articles, product descriptions, texts for advertising and<br>letters.</p>
                        <div class="card-btn mbr-section-btn mbr-pt-2">
                            <a class="btn btn-lg btn-primary display-7" href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mbr-col-sm-12 mbr-col-md-8 mbr-col-lg-4 md-pb">
                <div class="card-wrapper mbr-flex mbr-column mbr-pt-3 mbr-pb-3 mbr-px-4">
                    <div class="card-img mbr-pb-3">
                        <div class="iconfont-wrapper">
                            <span class="amp-iconfont fa-suitcase fa"><svg width="100%" height="100%" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><path d="M640 384h512v-128h-512v128zm-352 0v1280h-64q-92 0-158-66t-66-158v-832q0-92 66-158t158-66h64zm1120 0v1280h-1024v-1280h128v-160q0-40 28-68t68-28h576q40 0 68 28t28 68v160h128zm384 224v832q0 92-66 158t-158 66h-64v-1280h64q92 0 158 66t66 158z"></path></svg></span>
                        </div>
                    </div>
                    <div class="card-box">
                        <h3 class="card-title mbr-bold mbr-fonts-style display-5">Illustration</h3>
                        <h4 class="card-subtitle mbr-pt-3 mbr-fonts-style mbr-bold display-7">Card Subtitle</h4>
                        <p class="card-text mbr-fonts-style mbr-pt-2 display-7">I'll draw cute illustrations for your project. My favorite techniques are graphics and watercolor.</p>
                        <div class="card-btn mbr-section-btn mbr-pt-2"><a class="btn btn-lg btn-primary display-7" href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mbr-col-sm-12 mbr-col-md-8 mbr-col-lg-4 last-child">
                <div class="card-wrapper mbr-flex mbr-column mbr-pt-3 mbr-pb-3 mbr-px-4">
                    <div class="card-img mbr-pb-3">
                        <div class="iconfont-wrapper">
                            <span class="amp-iconfont fa-camera fa"><svg width="100%" height="100%" viewBox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><path d="M1024 672q119 0 203.5 84.5t84.5 203.5-84.5 203.5-203.5 84.5-203.5-84.5-84.5-203.5 84.5-203.5 203.5-84.5zm704-416q106 0 181 75t75 181v896q0 106-75 181t-181 75h-1408q-106 0-181-75t-75-181v-896q0-106 75-181t181-75h224l51-136q19-49 69.5-84.5t103.5-35.5h512q53 0 103.5 35.5t69.5 84.5l51 136h224zm-704 1152q185 0 316.5-131.5t131.5-316.5-131.5-316.5-316.5-131.5-316.5 131.5-131.5 316.5 131.5 316.5 316.5 131.5z"></path></svg></span>
                        </div>
                    </div>
                    <div class="card-box">
                        <h3 class="card-title mbr-bold mbr-fonts-style display-5">Website Development</h3>
                        <h4 class="card-subtitle mbr-pt-3 mbr-fonts-style mbr-bold display-7">Card Subtitle</h4>
                        <p class="card-text mbr-fonts-style mbr-pt-2 display-7">Examples of works are available in the portfolio. I will make a modern responding site.</p>
                        <div class="card-btn mbr-section-btn mbr-pt-2">
                            <a class="btn btn-lg btn-primary display-7" href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<section class="features1 cid-rbfmXWztry" id="features1-o">
    

    
    <div class="container-fluid">
        
        <div class="mbr-row mbr-jc-c">
            <div class="card mbr-col-sm-12 mbr-col-md-8 mbr-col-lg-4 md-pb">
                <div class="card-wrapper mbr-flex mbr-column mbr-pt-3 mbr-pb-3 mbr-px-4">
                    <div class="card-img mbr-pb-3">
                        <div class="iconfont-wrapper">
                            <span class="amp-iconfont fa-heart fa"><svg width="100%" height="100%" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><path d="M896 1664q-26 0-44-18l-624-602q-10-8-27.5-26t-55.5-65.5-68-97.5-53.5-121-23.5-138q0-220 127-344t351-124q62 0 126.5 21.5t120 58 95.5 68.5 76 68q36-36 76-68t95.5-68.5 120-58 126.5-21.5q224 0 351 124t127 344q0 221-229 450l-623 600q-18 18-44 18z"></path></svg></span>
                        </div>
                    </div>
                    <div class="card-box">
                        <h3 class="card-title mbr-bold mbr-fonts-style display-5">Design</h3>
                        <h4 class="card-subtitle mbr-pt-3 mbr-fonts-style mbr-bold display-7">Card Subtitle</h4>
                        <p class="card-text mbr-fonts-style mbr-pt-2 display-7">Design of sites, booklets, mailings, any printed production, and banners.</p>
                        <div class="card-btn mbr-section-btn mbr-pt-2">
                            <a class="btn btn-lg btn-primary display-7" href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mbr-col-sm-12 mbr-col-md-8 mbr-col-lg-4 md-pb">
                <div class="card-wrapper mbr-flex mbr-column mbr-pt-3 mbr-pb-3 mbr-px-4">
                    <div class="card-img mbr-pb-3">
                        <div class="iconfont-wrapper">
                            <span class="amp-iconfont fa-suitcase fa"><svg width="100%" height="100%" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><path d="M640 384h512v-128h-512v128zm-352 0v1280h-64q-92 0-158-66t-66-158v-832q0-92 66-158t158-66h64zm1120 0v1280h-1024v-1280h128v-160q0-40 28-68t68-28h576q40 0 68 28t28 68v160h128zm384 224v832q0 92-66 158t-158 66h-64v-1280h64q92 0 158 66t66 158z"></path></svg></span>
                        </div>
                    </div>
                    <div class="card-box">
                        <h3 class="card-title mbr-bold mbr-fonts-style display-5">Branding</h3>
                        <h4 class="card-subtitle mbr-pt-3 mbr-fonts-style mbr-bold display-7">Card Subtitle</h4>
                        <p class="card-text mbr-fonts-style mbr-pt-2 display-7">Brand name, trademark, information basis, strategy for promoting a future brand.</p>
                        <div class="card-btn mbr-section-btn mbr-pt-2"><a class="btn btn-lg btn-primary display-7" href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mbr-col-sm-12 mbr-col-md-8 mbr-col-lg-4 last-child">
                <div class="card-wrapper mbr-flex mbr-column mbr-pt-3 mbr-pb-3 mbr-px-4">
                    <div class="card-img mbr-pb-3">
                        <div class="iconfont-wrapper">
                            <span class="amp-iconfont fa-camera fa"><svg width="100%" height="100%" viewBox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><path d="M1024 672q119 0 203.5 84.5t84.5 203.5-84.5 203.5-203.5 84.5-203.5-84.5-84.5-203.5 84.5-203.5 203.5-84.5zm704-416q106 0 181 75t75 181v896q0 106-75 181t-181 75h-1408q-106 0-181-75t-75-181v-896q0-106 75-181t181-75h224l51-136q19-49 69.5-84.5t103.5-35.5h512q53 0 103.5 35.5t69.5 84.5l51 136h224zm-704 1152q185 0 316.5-131.5t131.5-316.5-131.5-316.5-316.5-131.5-316.5 131.5-131.5 316.5 131.5 316.5 316.5 131.5z"></path></svg></span>
                        </div>
                    </div>
                    <div class="card-box">
                        <h3 class="card-title mbr-bold mbr-fonts-style display-5">Development</h3>
                        <h4 class="card-subtitle mbr-pt-3 mbr-fonts-style mbr-bold display-7">Card Subtitle</h4>
                        <p class="card-text mbr-fonts-style mbr-pt-2 display-7">We will help you to implement your ideas graphically. Check examples in our portfolio.</p>
                        <div class="card-btn mbr-section-btn mbr-pt-2">
                            <a class="btn btn-lg btn-primary display-7" href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<section class="header2 cid-r1xXC1gI5j" id="header2-8">
    
    
    <div class="container">
        <div class="mbr-row mbr-black">
            <div class="title-wrap mbr-col-md-12 mbr-col-sm-12 mbr-col-lg-8 align-left mbr-flex">
                <div class="title-block">
                    <h1 class="mbr-section-title mbr-fonts-style mbr-bold display-2">
                        Mais informações?</h1>
                    
                    <p class="mbr-text mbr-fonts-style mbr-pt-2 display-7">Quer ter acesso a mais dados? Que tal experimentar os outros níveis! Subindo de nível você tem acesso ao ranking dos municípios da região metropolitana do Recife, além de uma API para desfrutar de todos os nosso dados.</p>
                    <div class="mbr-section-btn mbr-pt-4"><a class="btn btn-white-outline display-4" href="#">Saber mais</a></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="footer1 cid-r1xXaOCx6M" id="footer1-7">
    
    
    <div class="footer-container container">
        
        <div class="copyright mbr-px-2 mbr-flex mbr-jc-c">
            <p class="mbr-text mbr-fonts-style mbr-white align-center display-7">
                © <span>2021</span> <span>Dynamic Analitics</span></p>
        </div>
    </div>
</section>
</body>
</html>