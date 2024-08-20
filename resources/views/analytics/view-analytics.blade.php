@extends('layouts.dashboard-layout')

@section('title', 'Analytics')

@section('content')

@if(session('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('status') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="main">

    <div class="info-data">
        <div class="card">
            <div class="head">
                <div>
                    <h2>Artits</h2>
                    {{ $breadcrumbs['artists'] }}
                </div>
                <i class='bx bx-user-check h1'></i>
            </div>

        </div>
        <div class="card">
            <div class="head">
                <div>
                    <h2>Regular</h2>
                    {{ $breadcrumbs['regular'] }}
                </div>
                <i class='bx bx-user-x h1'></i>
            </div>

        </div>
        <div class="card">
            <div class="head">
                <div>
                    <h2>Discussions</h2>
                    {{ $breadcrumbs['discussions'] }}
                </div>
                <i class='bx bx-chat h1'></i>
            </div>

        </div>
        <div class="card">
            <div class="head">
                <div>
                    <h2>Engagements</h2>
                    {{ $breadcrumbs['engagements'] }}
                </div>
                <i class='bx bx-bar-chart-alt-2 h1'></i>
            </div>

        </div>
    </div>
</div>
<div class="d-flex">
    <div class="row">
        <div class="col-6 ">
            <h5 class="text-center">Content overview</h5>
            <div style="width: 250px; margin-left:125px">
                <canvas id="pieChart"></canvas>
            </div>



        </div>



        <div class="col-6 ">

            <h5 class="text-center" style=" margin-left:150px;">Content overview</h5>
            <div style="width: 550px; margin-left:100px;">

                <canvas id="lineChart"></canvas>

            </div>

        </div>



    </div>




</div>








<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        // Data from PHP variables
        let moviesCount = <?php echo json_encode($movies->count()); ?>;
        let seriesCount = <?php echo json_encode($series->count()); ?>;
        let podcastsCount = <?php echo json_encode($podcasts->count()); ?>;
        let engagementsByDate = <?php echo json_encode($engagementsByDate); ?>;

        // Prepare data for line chart
        let likes = [];
        let dislikes = [];
        let dates = [];
        engagementsByDate.forEach((engagement) => {
            dates.push(engagement.date);
            likes.push(engagement.positive_reactions);
            dislikes.push(engagement.negative_reactions);
        });

        // Pie chart configuration
        const pieData = {
            labels: ['Movies', 'Series', 'Podcasts'],
            datasets: [{
                label: 'Content',
                data: [moviesCount, seriesCount, podcastsCount],
                backgroundColor: ['rgb(255, 99, 132)', 'rgb(54, 162, 235)', 'rgb(255, 205, 86)'],
                hoverOffset: 4
            }]
        };

        const pieConfig = {
            type: 'pie',
            data: pieData,
            options: {
                plugins: {
                    legend: {
                        display: false // Disable the legend
                    },
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                const dataset = tooltipItem.dataset;
                                const total = dataset.data.reduce((sum, value) => sum + value, 0);
                                const value = dataset.data[tooltipItem.dataIndex];
                                const percentage = ((value / total) * 100).toFixed(2);
                                return `${percentage}%`;
                            }
                        }
                    },
                    datalabels: {
                        formatter: (value, ctx) => {
                            const total = ctx.chart.data.datasets[0].data.reduce((sum, val) => sum + val, 0);
                            const percentage = ((value / total) * 100).toFixed(2);
                            return `${percentage}%`;
                        },
                        color: '#fff',
                    }
                }
            },
            plugins: [ChartDataLabels]
        };

        var pieChart = document.getElementById('pieChart').getContext('2d');
        let endPieChart = new Chart(pieChart, pieConfig);

        // Line chart configuration
        const lineData = {
            labels: dates,
            datasets: [{
                    label: 'Likes',
                    data: likes,
                    fill: false,
                    borderColor: 'green',
                    pointBackgroundColor: 'green', // Set point background color to match line color
                    tension: 0.1
                },
                {
                    label: 'Dislikes',
                    data: dislikes,
                    fill: false,
                    borderColor: 'red',
                    pointBackgroundColor: 'red', // Set point background color to match line color
                    tension: 0.1
                }
            ]
        };

        const lineConfig = {
            type: 'line',
            data: lineData,
            options: {
                scales: {
                    x: {
                        grid: {
                            display: true // Hide x-axis grid lines
                        }
                    },
                    y: {
                        grid: {
                            display: true // Hide y-axis grid lines
                        },
                        beginAtZero: true,
                        ticks: {
                            precision: 0 // Display y-axis labels without decimal places
                        }
                    }
                },
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            usePointStyle: true, // Use point style (circles)
                        }
                    },
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                const dataset = tooltipItem.dataset;
                                const value = dataset.data[tooltipItem.dataIndex];
                                return `${value} reactions`; // Customize tooltip label
                            }
                        }
                    }
                }
            }
        };

        var lineChart = document.getElementById('lineChart').getContext('2d');
        let endLineChart = new Chart(lineChart, lineConfig);
    });
</script>

@endsection