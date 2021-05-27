<script>
    google.charts.load('current', {'packages':['bar']});
    google.charts.setOnLoadCallback(drawStuff);    
    function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Município', 'IDH'],

          <?php 
            include 'conectar.php';
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
          width: 900,
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