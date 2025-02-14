const pendidikan = document.getElementById("chart-pendidikan");
const pendidikan_bar = document.getElementById("chart-pendidikan-bar");

fetch('http://127.0.0.1:8000/statistik')
  .then(response => response.json())
  .then(data => {
    new Chart(pendidikan, {
      type: "pie",
      data: {
        labels: data.pendidikan.labels,
        datasets: [
          {
            data: data.pendidikan.data,
            borderWidth: 1,
            backgroundColor: [
              '#FF6347', '#4682B4', '#3CB371', '#FFD700', '#6A5ACD', '#D2691E', '#A52A2A', '#C71585'
            ],
          },
        ],
      },
      options: {
        plugins: {
          title: {
            display: true,
            text: "Grafik Data Pendidikan",
          },
        },
      },
    });

    new Chart(pendidikan_bar, {
      type: "bar",
      data: {
        labels: data.pendidikan.labels,
        datasets: [
          {
            label: "Pendidikan",
            data: data.pendidikan.data,
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
            text: "Grafik Data Pendidikan",
          },
        },
      },
    });
  })
  .catch(error => console.error('Error fetching data:', error));