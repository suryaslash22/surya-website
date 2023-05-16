var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        labels: ['HTML/CSS', 'JavaScript', 'C++', 'Python', 'SQL', 'php', 'Photoshop'],
        datasets: [{
            label: 'Skills',
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: [3, 2, 3, 3, 1.5, 2, 2]
        }]
    },

    // Configuration options go here
    options: {}
});