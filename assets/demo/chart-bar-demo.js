// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily =
  '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = "#292b2c";

// Bar Chart Example
const REGIONES = [
  'BR1',
  'EUN1',
  'EUW1',
  'JP1',
  'KR',
  'LA1',
  'LA2',
  'NA1',
  'OC1',
  'TR1',
  'RU'
];
var ctx = document.getElementById("myBarChart");
var myLineChart = new Chart(ctx, {
  type: "bar",
  data: {
    labels: REGIONES,
    datasets: [
      {
        label: "Cantidad de jugadores",
        backgroundColor: "rgba(2,117,216,1)",
        borderColor: "rgba(2,117,216,1)",
        data: cantidadUsuariosPorRegion,
      },
    ],
  },
  options: {
    legend: {
      display: false,
    },
  },
});
