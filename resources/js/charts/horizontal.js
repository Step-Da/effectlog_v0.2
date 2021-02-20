let name = $('#nameUnit').text(); //Наименование поставщика
let all = document.getElementById('all-field').textContent; //Статистика: числов всех компонентов обновления остатков
let success = document.getElementById('successful-field').textContent; //Статистика: число всех успешных компонетов обновления остатков
let error = document.getElementById('unsuccessful-field').textContent; //Ститистика: число всех проваленных компонетов обновления остатков 

//Формирование и вывод горизонтального графика
new Chart(document.getElementById("item-counter-chart"), {
    type: 'horizontalBar',
    data: {
      labels: ["Всего элементов", "Успешные", "Проваленные"],
      datasets: [
        {
          label: "Остатки обновления (тыс.)",
          backgroundColor: ["#fca656cb", "#2bff72c6","#e05353d1"],
          data: [ all, success, error],
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Графическое отображение остатков обновления поставщика (компании): '+ name
      }
    }
});