const SPEEDCHART = document.getElementById("speedChart");
console.log(SPEEDCHART);
let speedChart = new Chart(SPEEDCHART, {
	type: 'line',
	data: {
		labels: [],
		datasets: [
			{
				label: "Download",
				fill: false,
				lineTension: 0.1,
				backgroundColor: "rgba(255,0,0,0.7)",
				borderColor: "rgba(255,0,0,1)",
				borderCapStyle: 'butt',
				borderDash: [],
				borderDashOffset: 0.0,
				borderJoinStyle: 'miter',
				pointBorderColor: "rgba(255,0,0,1)",
				pointBackgroundColor: "#fff",
				pointBorderWidth: 1,
				pointHoverRadius: 5,
				pointHoverBackgroundColor: "rgba(255,0,0,1)",
				pointBorderWidth: 2,
				pointRadius: 1,
				pointHitRadius: 10,
				data: [],
			},	{
					label: "Upload",
					fill: false,
					lineTension: 0.1,
					backgroundColor: "rgba(0,0,255,0.7)",
					borderColor: "rgba(0,0,255,1)",
					borderCapStyle: 'butt',
					borderDash: [],
					borderDashOffset: 0.0,
					borderJoinStyle: 'miter',
					pointBorderColor: "rgba(0,0,255,1)",
					pointBackgroundColor: "#fff",
					pointBorderWidth: 1,
					pointHoverRadius: 5,
					pointHoverBackgroundColor: "rgba(0,0,255,1)",
					pointBorderWidth: 2,
					pointRadius: 1,
					pointHitRadius: 10,
					data: [],
				}
		]
	}
});
