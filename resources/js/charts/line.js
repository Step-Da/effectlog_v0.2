let name = $('#nameUnit').text();

new Chart(document.getElementById("line-chart"), {
    type: 'line',
    data: {
      labels: [1500,1600,1700,1750,1800,1850,1900,1950,1999,2050],
      datasets: [{ 
          data: [86,114,106,106,107,111,133,221,783,2478],
          label: "Успешные",
          borderColor: "#2bff72c6",
          fill: false
        }, { 
          data: [282,350,411,502,635,809,947,1402,3700,5267],
          label: "Проваленные",
          borderColor: "#e05353d1",
          fill: false
        }, 
      ]
    },
    options: {
      title: {
        display: true,
        text: 'Период фиксации остатков обновления поставщика (компании): ' + name,
      }
    }
  }); 