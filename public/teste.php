<html>
  <head>
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
      <div id="piechart" style="width: 900px; height: 500px;"></div>
      <div id="top_x_div" style="width: 900px; height: 500px;"></div>
      <!--<iframe src="https://open.spotify.com/embed/album/4yP0hdKOZPNshxUOjY0cZj" width="300" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media" style="border-radius: 8px;"></iframe>
      <iframe src="https://open.spotify.com/embed/album/5LuoozUhs2pl3glZeAJl89" width="300" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media" style="border-radius: 8px;"></iframe> -->
  </body>
</html>