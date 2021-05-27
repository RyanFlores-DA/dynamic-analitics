<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Nome Municipio', 'Entrada', 'Saida'],
          <?php 
            include 'conectar.php';
            $sql = 'SELECT * FROM indicadores AS i INNER JOIN municipios AS m ON i.MunicipioID = m.MunicipioID';
            $search = mysqli_query($strcon, $sql);

            while($dados = mysqli_fetch_array($search)){
              $nome = $dados['NomeMunicipio'];
              $mve = $dados['MovPendularEntrada'];
              $mvs = $dados['MovPendularSaida'];
          ?>
          ['<?php echo $nome?>',  <?php echo $mve?>, <?php echo $mvs?>],
          <?php } ?>
        ]);

        var options = {
          title: 'Movimento Pendular',
          hAxis: {title: '',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>