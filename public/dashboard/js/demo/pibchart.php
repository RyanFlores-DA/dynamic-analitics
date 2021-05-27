<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Município', 'PIB'],

          <?php 
            include 'conectar.php';
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