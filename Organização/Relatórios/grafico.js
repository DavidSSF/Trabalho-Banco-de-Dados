// grafico.js

google.charts.load('current', { packages: ['corechart'] });
google.charts.setOnLoadCallback(desenharGrafico);

function desenharGrafico() {
    fetch('relatorios.php')
        .then(response => response.json())
        .then(data => {
            const times = data.times;
            const dataTable = new google.visualization.DataTable();

            dataTable.addColumn('string', 'Time');
            dataTable.addColumn('number', 'Títulos');

            times.forEach(time => {
                dataTable.addRow([time.nome_time, time.quantidade_titulos]);
            });

            const options = {
                title: 'Comparação de Títulos por Time',
                vAxis: { title: 'Títulos' },
                hAxis: { title: 'Time' },
                seriesType: 'bars',
                series: { 5: { type: 'line' } },
            };

            const chart = new google.visualization.ComboChart(document.getElementById('graficoComparacaoTitulos'));
            chart.draw(dataTable, options);
        })
        .catch(error => console.error('Erro ao buscar dados:', error));
}
