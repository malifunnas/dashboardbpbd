// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ["Success Call", "Abandon Call"],
    datasets: [{
      data: [118012, 360],
      backgroundColor: ['#1cc88a', '#e74a3b'],
      hoverBackgroundColor: ['#20c9a6', '#800000'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    plugins: {
      datalabels: {
          formatter: (value, ctx) => {
              let sum = 0;
              let dataArr = ctx.chart.data.datasets[0].data;
              dataArr.map(data => {
                  sum += data;
              });
              let percentage = (value*100 / sum).toFixed(2)+"%";
              return percentage;
          },
          color: '#fff',
      }
  }, 
    legend: {
      display: false
    },
    cutoutPercentage: 00,
  },
});

// Pie Chart Example
var ctx = document.getElementById("myPieChart3");
var myPieChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ["Emergency", "Non-Emergency"],
    datasets: [{
      data: [652, 12654],
      backgroundColor: ['#ff0000', '#ffff00'],
      hoverBackgroundColor: ['B22222', '#ffd700'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    plugins: {
      datalabels: {
        formatter: (value, ctx) => {
            let sum = 0;
            let dataArr = ctx.chart.data.datasets[0].data;
            dataArr.map(data => {
                sum += data;
            });
            let percentage = (value*100 / sum).toFixed(2)+"%";
            return percentage;
        },
        color: '#fff',
    }
  }, 
    legend: {
      display: false
    },
    cutoutPercentage: 00,
  },
});

// Pie Chart Example
var ctx = document.getElementById("myPieChart4");
var myPieChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ["Complete Call", "Prank Call", "Drop Call"],
    datasets: [{
      data: [13295, 79342, 25380 ],
      backgroundColor: ['#1cc88a', '#ff0000', '#ffff00'],
      hoverBackgroundColor: ['#20c9a6', '#B22222', '#ffd700'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    plugins: {
  }, 
    legend: {
      display: false
    },
    cutoutPercentage: 00,
  },
});

// Pie Chart Example
var ctx = document.getElementById("myPieChart5");
var myPieChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ["Jakarta Utara", "Jakarta Timur", "Jakarta Barat", "Jakarta Pusat", "Jakarta Selatan"],
    datasets: [{
      data: [2086, 3914, 2635, 1343, 2671],
      backgroundColor: ['#1cc88a', '#e74a3b', '#ff4500', '#ee82ee', '#00ff00'],
      hoverBackgroundColor: ['#20c9a6', '#800000','#ff8c00', '#da70d6', '#32cd32'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    plugins: {
      datalabels: {
          formatter: (value, ctx) => {
              let sum = 0;
              let dataArr = ctx.chart.data.datasets[0].data;
              dataArr.map(data => {
                  sum += data;
              });
              let percentage = (value*100 / sum).toFixed(2)+"%";
              return percentage;
          },
          color: '#fff',
      }
  }, 
    legend: {
      display: false
    },
    cutoutPercentage: 00,
  },
});

// Pie Chart Example
var ctx = document.getElementById("myPieChart6");
var myPieChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ["Jakarta Utara", "Jakarta Timur", "Jakarta Barat", "Jakarta Pusat", "Jakarta Selatan"],
    datasets: [{
      data: [106, 175, 153, 82, 131],
      backgroundColor: ['#1cc88a', '#e74a3b', '#ff4500', '#ee82ee', '#00ff00'],
      hoverBackgroundColor: ['#20c9a6', '#800000','#ff8c00', '#da70d6', '#32cd32'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    plugins: {
      datalabels: {
          formatter: (value, ctx) => {
              let sum = 0;
              let dataArr = ctx.chart.data.datasets[0].data;
              dataArr.map(data => {
                  sum += data;
              });
              let percentage = (value*100 / sum).toFixed(2)+"%";
              return percentage;
          },
          color: '#fff',
      }
  }, 
    legend: {
      display: false
    },
    cutoutPercentage: 00,
  },
});