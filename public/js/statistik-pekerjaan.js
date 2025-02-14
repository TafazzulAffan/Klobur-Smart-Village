const pekerjaan = document.getElementById("chart-pekerjaan");
const pekerjaan_bar = document.getElementById("chart-pekerjaan-bar");

fetch('http://127.0.0.1:8000/statistik')
  .then(response => response.json())
  .then(data => {
    new Chart(pekerjaan, {
      type: "pie",
      data: {
        labels: data.pekerjaan.labels,
        datasets: [
          {
            data: data.pekerjaan.data,
            borderWidth: 1,
            backgroundColor: [
              '#FF6347', '#4682B4', '#3CB371', '#FFD700', '#6A5ACD', '#D2691E', '#A52A2A', '#C71585', '#FF8C00'
            ],
          },
        ],
      },
      options: {
        plugins: {
          title: {
            display: true,
            text: "Grafik Data Pekerjaan",
          },
        },
      },
    });

    new Chart(pekerjaan_bar, {
      type: "bar",
      data: {
        labels: data.pekerjaan.labels,
        datasets: [
          {
            label: "Pekerjaan",
            data: data.pekerjaan.data,
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
            text: "Grafik Data Pekerjaan",
          },
        },
      },
    });
  })
  .catch(error => console.error('Error fetching data:', error));