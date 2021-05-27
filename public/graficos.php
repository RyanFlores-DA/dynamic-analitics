<?php 
include('dashboard/verifica_login.php');
$user = $_SESSION['usuario'];
?>
<html>
  <head>
     
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <!-- barchart  -->
    <script>
    google.charts.load('current', {'packages':['bar']});
    google.charts.setOnLoadCallback(drawStuff);    
    function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Município', 'IDH'],

          <?php 
            include 'dashboard/conectar.php';
            $sql = 'SELECT * FROM indicadores AS i INNER JOIN municipios AS m ON i.MunicipioID = m.MunicipioID';
            $search = mysqli_query($strcon, $sql);

            while($dados = mysqli_fetch_array($search)){
              $nome = $dados['NomeMunicipio'];
              $idh = $dados['IDH'];
          ?>

          ['<?php echo $nome?>', <?php echo $idh?>],
          
          <?php } ?>
            
           
        ]);

        var options = {
          width: 800,
          legend: { position: 'center' },
          chart: {
            title: '',
            subtitle: '' },
          axes: {
            x: {
              0: { side: 'top', label: 'Indice de desenvolvimento Humano'} // Top x-axis.
            }
          },
          bar: { groupWidth: "50%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
    </script> 
    <!-- corechart ou gráfico de Pizza -->
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Município', 'PIB'],

          <?php 
            include 'dashboard/conectar.php';
            $sql = 'SELECT * FROM indicadores AS i INNER JOIN municipios AS m ON i.MunicipioID = m.MunicipioID';
            $search = mysqli_query($strcon, $sql);

            while($dados = mysqli_fetch_array($search)){
              $nome = $dados['NomeMunicipio'];
              $pib = $dados['pib'];
              
          ?>
          ['<?php echo $nome?>', <?php echo $pib?>],
          
          <?php } ?>
            
           
        ]);
        var options = {
          title: 'Produto interno Bruto'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
  <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

<!-- Sidebar Toggle (Topbar) -->
<button id="sidebarToggleTop"  class="btn btn-link d-md-none rounded-circle mr-3">
    <i class="fa fa-bars"></i>
</button>

<!-- Topbar Search -->
<form 
    class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
    <div class="input-group" >
        <input type="text" class="form-control bg-light border-0 small" placeholder="Procurar por..."
            aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
            <button class="btn btn-primary" type="button">
                <i class="fas fa-search fa-sm"></i>
            </button>
        </div>
    </div>
</form>

<!-- Topbar Navbar -->
<ul class="navbar-nav ml-auto">

    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
    <li class="nav-item dropdown no-arrow d-sm-none">
        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-search fa-fw"></i>
        </a>
        <!-- Dropdown - Messages -->
        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
            aria-labelledby="searchDropdown">
            <form class="form-inline mr-auto w-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small"
                        placeholder="Search for..." aria-label="Search"
                        aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </li>

    <!-- Nav Item - Alerts -->
    

    <!-- Nav Item - Messages -->
    

    <div class="topbar-divider d-none d-sm-block"></div>
    <?php 
        $sql = "SELECT * FROM usuario where usuario = '{$user}'";
        $search = mysqli_query($strcon, $sql);
        
        while($dados = mysqli_fetch_array($search)){
            $priority = $dados['prioridade'];
            $usuario = $dados['usuario'];
              
            
     ?>

    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo 'Olá, ' . $usuario . ' Usuário nível - ' . $priority ?></span>
            
        </a>
        <?php  }?>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
            aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">
                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                Perfil
            </a>
            <a class="dropdown-item" href="#">
                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                Configurações
            </a>
            <a class="dropdown-item" href="dashboard/logout.php">
                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                Deslogar
            </a>
        </div>
    </li>

</ul>

</nav>
    <div class="container-fluid" style="margin-top: 40px">
      <div class="row">
        <div class="col-md-6">
        <div id="piechart" style="width: 800px; height: 500px;"></div>
        <hr>
        </div>
        <div class="col-md-4">
        <div id="top_x_div" style="width: 800px; height: 500px;"></div>
        <hr>
        </div>
      </div>
    </div>
      <!--<iframe src="https://open.spotify.com/embed/album/4yP0hdKOZPNshxUOjY0cZj" width="300" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media" style="border-radius: 8px;"></iframe>
      <iframe src="https://open.spotify.com/embed/album/5LuoozUhs2pl3glZeAJl89" width="300" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media" style="border-radius: 8px;"></iframe> -->
  </body>
</html>