<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';
?>

<section class="section">
  <div class="section-header d-block text-center">
    <h1 class="mb-2">Smart Trash</h1>
    <h6 class="text-info">Building a Cleaner Environment - More Hygienic and Managed with Smart Technology.</h6>
  </div>
  <div class="column">
    <div class="row">
      <div class="col-lg-12 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="fa fa-percent"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Capacity</h4>
            </div>
            <div class="card-body" id="data1">
              
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-12 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="fa fa-recycle"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Condition</h4>
            </div>
            <div class="card-body" id="data2">
          
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-12 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="fa fa-trash"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Object Distance</h4>
            </div>
            <div class="card-body" id="data3">
      
            </div>
          </div>
        </div>
      </div>


      <script src="https://cdnjs.cloudflare.com/ajax/libs/paho-mqtt/1.0.1/mqttws31.js" type="text/javascript"></script>

      <div class="chartt">
        <canvas id="myChart"></canvas>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      <script>
        const ctx = document.getElementById('myChart');
        var yValues = [0, 0, 0, 0, 0, 0];
        const data = {
          labels: ['Data', 'Data', 'Data', 'Data', 'Data','Data'],
          datasets: [{
            label: 'Dataset',
            data: yValues,
            borderColor: "rgba(255,0,0,0.4)",
            backgroundColor: "rgba(255,0,0,0.4)",
            pointStyle: 'circle',
            pointRadius: 10,
            pointHoverRadius: 15
          }]
        };
        var myChart = new Chart(ctx, {
          type: 'line',
          data: data,
          options: {
            responsive: true,
            plugins: {
              title: {
                display: true,
                text: (ctx) => 'Point Style: ' +
                  ctx.chart.data.datasets[0].pointStyle,
              }
            }
          }
        });
      </script>

      <script>
        client = new Paho.MQTT.Client("localhost", 8083, "clientId");

        client.onConnectionLost = onConnectionLost;
        client.onMessageArrived = onMessageArrived;

        client.connect({
          onSuccess: onConnect
        });

        function onConnect() {
          console.log("onConnect");
          client.subscribe("sensor1");
          client.subscribe("sensor2");
          client.subscribe("sensor3");
        }

        function onConnectionLost(responseObject) {
          if (responseObject.errorCode !== 0) {
            console.log("onConnectionLost: " + responseObject.errorMessage);
          }
        }

        // var capacity = document.getElementById("data1"); 
        // var cond = document.getElementById("data2");
        // var dist = document.getElementById("data3");
        function onMessageArrived(message) {
          if (message.destinationName == "sensor1") {
            document.getElementById("data1").innerHTML = message.payloadString;
          }
          if (message.destinationName == "sensor2") {
            document.getElementById("data2").innerHTML = message.payloadString;
          }
          if (message.destinationName == "sensor3") {
            document.getElementById("data3").innerHTML = message.payloadString;
          }

          console.log("onMessageArrived:" + message.payloadString);
          myChart.data.datasets[0].data.push(parseInt(message.payloadString)); // Menampilkan data baru di chart
          myChart.data.datasets[0].data.splice(0, 1); // Menghapus data pertama dalam chart
          myChart.update(); // update chart
          console.log(myChart.data.datasets[0].data);
        }
      </script>

    </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>