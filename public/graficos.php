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
  <script defer src="dashboard/js/showcharts.js"></script>
  <meta name="description" content="">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">



  <link href="dashboard/css/gstile.css" rel="stylesheet">
  <title>Dashboard</title>
 <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style>
<noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
 
  <script async  src="https://cdn.ampproject.org/v0.js"></script>
  <script async custom-template="amp-mustache" src="https://cdn.ampproject.org/v0/amp-mustache-0.2.js"></script>
  <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
  <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  
  
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
                        <?php echo ' Usu??rio n??vel - ' . $priority ?></a>
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
				
				<span class="navbar-caption-wrap"><a class="navbar-caption mbr-bold text-black display-5"><?php echo 'Ol??, ' . $usuario ?></a></span>
			</div>
			<!-- SHOW LOGO END -->
			<!-- COLLAPSED MENU -->
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				
				<!-- NAVBAR ITEMS -->
				<ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item">
					<li class="nav-item">
						<a class="nav-link mbr-bold link text-black display-7" href="#contacts6-5">
                        <?php echo ' Usu??rio n??vel - ' . $priority ?></a>
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
            <h4 class="mbr-section-subtitle mbr-fonts-style mbr-pt-2 display-5">Escolha um tipo de gr??fico.</h4>
        </div>
        <div class="mbr-row mbr-jc-c">
            <div class="card mbr-col-sm-12 mbr-col-md-8 mbr-col-lg-4 md-pb">
                <div class="card-wrapper mbr-flex mbr-column mbr-pt-3 mbr-pb-3 mbr-px-4">
                    <div class="card-img mbr-pb-3">
                        <div class="iconfont-wrapper">
                        </div>
                    </div>
                    <div class="card-box">
                        <h3 class="card-title mbr-bold mbr-fonts-style display-5" >IDH</h3>
                        <p class="card-text mbr-fonts-style mbr-pt-2 display-7">Indice de desenvolvimento Humano.</p>
                        <div class="card-btn mbr-section-btn mbr-pt-2"><a class="btn btn-lg btn-primary display-7" href="./graficos.php?p=idh">Mostrar</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="card mbr-col-sm-12 mbr-col-md-8 mbr-col-lg-4 md-pb">
                <div class="card-wrapper mbr-flex mbr-column mbr-pt-3 mbr-pb-3 mbr-px-4">
                    <div class="card-img mbr-pb-3">
                        <div class="iconfont-wrapper">
                            <span class="amp-iconfont fa-suitcase fa"></span>
                        </div>
                    </div>
                    <div class="card-box">
                        <h3 class="card-title mbr-bold mbr-fonts-style display-5">PIB</h3>
                        <p class="card-text mbr-fonts-style mbr-pt-2 display-7">Produto interno bruto</p>
                        <div class="card-btn mbr-section-btn mbr-pt-2"><a class="btn btn-lg btn-primary display-7" href="./graficos.php?p=pib">Mostrar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mbr-col-sm-12 mbr-col-md-8 mbr-col-lg-4 last-child">
                <div class="card-wrapper mbr-flex mbr-column mbr-pt-3 mbr-pb-3 mbr-px-4">
                    <div class="card-img mbr-pb-3">
                        <div class="iconfont-wrapper">
                        </div>
                    </div>
                    <div class="card-box">
                        <h3 class="card-title mbr-bold mbr-fonts-style display-5">Movimento Pendular</h3>
                        <p class="card-text mbr-fonts-style mbr-pt-2 display-7">Movimento pendular da RMR</p>
                        <div class="card-btn mbr-section-btn mbr-pt-2">
                            <a class="btn btn-lg btn-primary display-7" href="./graficos.php?p=pendular">Mostrar</a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
<?php 
    $valor = @$_GET['p'];
    if($valor == 'idh'){require_once 'showidh.php';}
    if($valor == 'pib'){require_once 'showpib.php';}
    if($valor == 'pendular'){require_once 'showpendular.php';}
?>
<!-- PARTE DOS GR??FICOS 
<div class="container-fluid" style="margin-top: 40px">
      <div class="row">
        <div class="col-md-6">
          <?php include('dashboard/js/demo/pibchart.php');?>
        <div class="collapse"id="piechart" style="width: 800px; height: 500px;"></div>
        <hr>
        </div>
        <div class="col-md-4">
        <?php include('dashboard/js/demo/idhchart.php');?>
        <div id="top_x_div" style="width: 800px; height: 500px;"></div>
        <hr>
        </div>
</div>
-->


<section class="header2 cid-r1xXC1gI5j" id="header2-8">
    
    
    <div class="container">
        <div class="mbr-row mbr-black">
            <div class="title-wrap mbr-col-md-12 mbr-col-sm-12 mbr-col-lg-8 align-left mbr-flex">
                <div class="title-block">
                    <h1 class="mbr-section-title mbr-fonts-style mbr-bold display-2">
                        Mais informa????es?</h1>
                    
                    <p class="mbr-text mbr-fonts-style mbr-pt-2 display-7">Quer ter acesso a mais dados? Que tal experimentar os outros n??veis! Subindo de n??vel voc?? tem acesso ao ranking dos munic??pios da regi??o metropolitana do Recife, al??m de uma API para desfrutar de todos os nosso dados.</p>
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
                ?? <span>2021</span> <span>Dynamic Analitics</span></p>
        </div>
    </div>
</section>

</body>
</html>