let nameUnit = $('#nameUnit').text();

new Chart(document.getElementById("item-counter-chart"), {
    type: 'horizontalBar',
    data: {
      labels: ["Всего элементов", "Успешные", "Проваленные"],
      datasets: [
        {
          label: "Остатки обновления (тыс.)",
          backgroundColor: ["#fca656cb", "#2bff72c6","#e05353d1"],
          data: [2478,520,73,]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Графическое отображение остатков обновления поставщика (компании): '+ nameUnit
      }
    }
});