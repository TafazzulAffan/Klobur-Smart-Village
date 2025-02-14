const agama = document.getElementById("chart-agama");
const agama_bar = document.getElementById("chart-agama-bar");

fetch('http://127.0.0.1:8000/statistik')
  .then(response => response.json())
  .then(data => {
    new Chart(agama, {
      type: "pie",
      data: {
        labels: data.agama.labels,
        datasets: [
          {
            data: data.agama.data,
            borderWidth: 1,
            backgroundColor: [
              '#FF6347', '#4682B4', '#3CB371', '#FFD700', '#6A5ACD', '#D2691E', '#A52A2A'
            ],
          },
        ],
      },
      options: {
        plugins: {
          title: {
            display: true,
            text: "Grafik Data Agama",
          },
        },
      },
    });
    // Chart Agama Pie End

    // Chart Agama Bar Start
    new Chart(agama_bar, {
      type: "bar",
      data: {
        labels: data.agama.labels,
        datasets: [
          {
            label: "Agama",
            data: data.agama.data,
            borderWidth: 1,
            backgroundColor: [
                '#FF6347', '#4682B4', '#3CB371', '#FFD700'
            ],
          },
        ],
      },
      options: {
        scales: {
          y: {
            beginAtZero: true,
          },
        },
        plugins: {
          title: {
            display: true,
            text: "Grafik Data Agama",
          },
        },
      },
    });
  })
  .catch(error => console.error('Error fetching data:', error));