// Define Chart Gender Start
const gender = document.getElementById("chart-gender");
const gender_bar = document.getElementById("chart-gender-bar");
// Define Chart Gender End

// Chart Gender Pie Start
new Chart(gender, {
    type: "pie",
    data: {
        labels: ["Laki-Laki", "Perempuan"],
        datasets: [
            {
                data: [160, 40],
                borderWidth: 1,
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
                text: "Grafik Data Jenis Kelamin",
            },
        },
    },
});
// Chart Gender Pie Start

// Chart Gender Bar Start
new Chart(gender_bar, {
    type: "bar",
    data: {
        labels: ["Laki-Laki", "Perempuan"],
        datasets: [
            {
                label: "Jenis Kelamin",
                data: [160, 40],
                borderWidth: 1,
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
                text: "Grafik Data Jenis Kelamin",
            },
        },
    },
});
// Chart Gender Bar Start
