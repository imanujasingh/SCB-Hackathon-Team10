/* globals Chart:false, feather:false */

(function () {
  'use strict'

  feather.replace()

  var ctx = document.getElementById("bar-chart")
  
  var myChart = new Chart(ctx, {
    // type: 'line',
    type: "bar",
    data: {
      labels: [
        'Mon',
        'Tues',
        'Wed',
        'Thurs',
        'Fri',
      ],
      datasets: [
        {
          borderColor:"#9077F4",
          backgroundColor: '#9077F4',
          data: [
          38,
          40,
          48,
          45,
          33,
        ],
        // lineTension: 0,
        // borderColor: '#007bff',
        // borderWidth: 4,
        // pointBackgroundColor: '#007bff'
      }]
    },
    options: {
      scales: {
        xAxes: [{
          barThickness: 8,
        }],
        yAxes: [{
          ticks: {
            beginAtZero: false
          }
        }]
      },
      legend: {
        display: false
      }
    }
  })
})()
