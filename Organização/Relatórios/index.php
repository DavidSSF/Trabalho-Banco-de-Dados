<?php
include("relatorios.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório com Gráficos</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<body>
    <div id="titulos_chart" style="width: 400px; height: 300px;"></div>
    <div id="jogadores_chart" style="width: 600px; height: 400px;"></div>
    <div id="gols_chart" style="width: 600px; height: 400px;"></div>
    <div id="partidas_chart" style="width: 800px; height: 400px;"></div>

    <script type="text/javascript">
        google.charts.load('current', {packages: ['corechart']});
        google.charts.setOnLoadCallback(drawCharts);

        function drawCharts() {
            // Gráfico de Combinação (Títulos dos Times)
            var titulosData = new google.visualization.DataTable();
            titulosData.addColumn('string', 'Time');
            titulosData.addColumn('number', 'Quantidade de Títulos');
            titulosData.addRows(<?php echo json_encode($dadosTimes); ?>);
            var titulosOptions = {
                title: 'Comparação de Títulos dos Times',
                seriesType: 'bars',
                series: {1: {type: 'line'}}
            };
            var titulosChart = new google.visualization.ComboChart(document.getElementById('titulos_chart'));
            titulosChart.draw(titulosData, titulosOptions);

            // Gráfico de Barras (Jogos dos Jogadores)
            var jogadoresData = new google.visualization.DataTable();
            jogadoresData.addColumn('string', 'Jogador');
            jogadoresData.addColumn('number', 'Jogos Ganhos');
            jogadoresData.addColumn('number', 'Jogos Empatados');
            jogadoresData.addColumn('number', 'Jogos Perdidos');
            jogadoresData.addRows(<?php echo json_encode($dadosJogadores); ?>);
            var jogadoresOptions = {
                title: 'Comparação de Jogos dos Jogadores',
                isStacked: true
            };
            var jogadoresChart = new google.visualization.BarChart(document.getElementById('jogadores_chart'));
            jogadoresChart.draw(jogadoresData, jogadoresOptions);

            // Gráfico de Barras (Total de Gols dos Jogadores)
            var golsData = new google.visualization.DataTable();
            golsData.addColumn('string', 'Jogador');
            golsData.addColumn('number', 'Total de Gols');
            golsData.addRows(<?php echo json_encode($dadosGols); ?>);
            var golsOptions = {
                title: 'Total de Gols por Jogador'
            };
            var golsChart = new google.visualization.BarChart(document.getElementById('gols_chart'));
            golsChart.draw(golsData, golsOptions);

            // Gráfico de Barras (Partidas por Data)
            var partidasData = new google.visualization.DataTable();
            partidasData.addColumn('string', 'Data da Partida');
            partidasData.addColumn('number', 'Quantidade de Partidas');
            partidasData.addRows(<?php echo json_encode($dadosPartidas); ?>);
            var partidasOptions = {
                title: 'Quantidade de Partidas por Data',
                isStacked: true
            };
            var partidasChart = new google.visualization.BarChart(document.getElementById('partidas_chart'));
            partidasChart.draw(partidasData, partidasOptions);
        }
    </script>
</body>
</html>
