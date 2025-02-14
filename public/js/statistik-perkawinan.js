const perkawinan = document.getElementById("chart-perkawinan");
const perkawinan_bar = document.getElementById("chart-perkawinan-bar");

fetch('http://127.0.0.1:8000/statistik')
  .then(response => response.json())
  .then(data => {
    new Chart(perkawinan, {
      type: "pie",
      data: {
        labels: data.perkawinan.labels,
        datasets: [
          {
            data: data.perkawinan.data,
            borderWidth: 1,
            backgroundColor: [
              '#FF6347', '#4682B4', '#3CB371', '#FFD700'
            ],
          },
        ],
      },
      options: {
        plugins: {
          title: {
            display: true,
            text: "Grafik Data Perkawinan",
          },
        },
      },
    });

    new Chart(perkawinan_bar, {
      type: "bar",
      data: {
        labels: data.perkawinan.labels,
        datasets: [
          {
            label: "Pernikahan",
            data: data.perkawinan.data,
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
            text: "Grafik Data Perkawinan",
          },
        },
      },
    });
  })
  .catch(error => console.error('Error fetching data:', error));