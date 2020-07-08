(function($) {
	'use strict';
	$(function() {
		if ($("#incomeExpenseChart").length) {
			var SalesChartCanvas = $("#incomeExpenseChart").get(0).getContext("2d");
			var SalesChart = new Chart(SalesChartCanvas, {
				type: 'bar',
				data: {
					labels: ["Jan", "Feb", "Mar", "Apr", "May"],
					datasets: [{
						label: 'Income',
						data: [480, 230, 470, 210, 330],
						borderColor: 'rgba(54, 162, 235, 1)',
						backgroundColor: 'rgba(54, 162, 235, 0.2)'
					},
					{
						label: 'Expenses',
						data: [400, 340, 550, 480, 170],
						borderColor: 'rgba(255, 206, 86, 1)',
						backgroundColor: 'rgba(255, 206, 86, 0.2)'
					}
					],
					borderWidth: 1,
					fill: false
				},
				options: {
					responsive: true,
					maintainAspectRatio: true,
					layout: {
						padding: {
							left: 0,
							right: 0,
							top: 20,
							bottom: 0
						}
					},
					scales: {
						yAxes: [{
							display: true,
							gridLines: {
								display: false,
								drawBorder: false
							},
							ticks: {
								display: false,
								min: 0,
								max: 500
							}
						}],
						xAxes: [{
							stacked: false,
							ticks: {
								beginAtZero: true,
								fontColor: "#9fa0a2"
							},
							gridLines: {
								color: "rgba(0, 0, 0, 0)",
								display: false
							},
							barPercentage: 1
						}]
					},
					legend: {
						display: false
					},
					elements: {
						point: {
							radius: 0
						}
					}
				},
			});
			document.getElementById('iEC-legend').innerHTML = SalesChart.generateLegend();
		}
		var dataSetBoysGirls = {
			datasets: [{
				data: [187, 362],
				backgroundColor: [
				'rgba(255, 99, 132, 0.5)',
				'rgba(54, 162, 235, 0.5)',
				'rgba(255, 206, 86, 0.5)',
				'rgba(75, 192, 192, 0.5)',
				],
				borderColor: [
				'rgba(255,99,132,1)',
				'rgba(54, 162, 235, 1)',
				'rgba(255, 206, 86, 1)',
				'rgba(75, 192, 192, 1)'
				],
			}],
			labels: [
			'Girls',
			'Boys',
			]
		};
		var doughnutPieOptions = {
			responsive: true,
			animation: {
				animateScale: true,
				animateRotate: true
			}
		};
		if ($("#boysgirlsChart").length) {
			var doughnutChartCanvas = $("#boysgirlsChart").get(0).getContext("2d");
			var doughnutChart = new Chart(doughnutChartCanvas, {
				type: 'doughnut',
				data: dataSetBoysGirls,
				options: doughnutPieOptions
			});
		}
	});
})(jQuery);