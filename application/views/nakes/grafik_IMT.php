<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h3 class="m-0 text-primary"> <i class="nav-icon fas fa-user-alt"></i> Grafik </h3>
                  </div><!-- /.col -->
              </div><!-- /.row -->
          </div><!-- /.container-fluid -->
      </div>

      <!-- /.content-header -->
      <!-- Main content -->
      <div class="content">
          <div class="container-fluid">
              <div class="alert alert-secondary" role="alert">
                  <i class="nav-icon fas fa-chart-line"></i> Nakes &nbsp; &nbsp; > &nbsp; &nbsp; <i class="nav-icon fas fa-newspaper"></i> Grafik IMT 
              </div>
              <div class="row table-responsive">
                  <div class="col table-responsive">
                      <!-- Tabel -->
                      <div class="card">
            <?php

            $query = $this->db->query("SELECT COUNT(*) FROM data_kes_lansia WHERE analisis_IMT='kurus'");

            $totalKurus= $query->result_array(); 

           
            ?>

            <?php

            $query = $this->db->query("SELECT COUNT(*) FROM data_kes_lansia WHERE analisis_IMT='normal' ");

            $totalNormal = $query->result_array();
            
            ?>

            <?php

            $query = $this->db->query("SELECT COUNT(*) FROM data_kes_lansia WHERE analisis_IMT='gemuk' ");

            $totalGemuk = $query->result_array();
           
            ?>

            <?php

            $query = $this->db->query("SELECT COUNT(*) FROM data_kes_lansia WHERE analisis_IMT='obesitas' ");

            $totalObesitas = $query->result_array();
           
            ?>
            <?php             
            $totalData[0]['COUNT(*)'] = $totalGemuk[0]['COUNT(*)'] + $totalKurus[0]['COUNT(*)'] + $totalNormal[0]['COUNT(*)'] + $totalObesitas[0]['COUNT(*)'];

            $dataPoints = array( 
                array("label"=>"kurus", "y"=>(($totalKurus[0]['COUNT(*)']/$totalData[0]['COUNT(*)'])*100)),
                array("label"=>"normal", "y"=>(($totalNormal[0]['COUNT(*)']/$totalData[0]['COUNT(*)'])*100)),
                array("label"=>"gemuk", "y"=>(($totalGemuk[0]['COUNT(*)']/$totalData[0]['COUNT(*)'])*100)),
                array("label"=>"obesitas", "y"=>(($totalObesitas[0]['COUNT(*)']/$totalData[0]['COUNT(*)'])*100))
                )
            ?>
                        <!DOCTYPE HTML>
                        <html>
                        <head>
                            <script>
                            window.onload = function() {
 
 
                                var chart = new CanvasJS.Chart("chartContainer", {
                                    animationEnabled: true,
                                    title: {
                                        text: "Posyandu Lansia"
                                    },
                                    subtitles: [{
                                        text: "Data IMT Posyandu Lansia"
                                    }],
                                    data: [{
                                        type: "pie",
                                        yValueFormatString: "#,##0.00\"%\"",
                                        indexLabel: "{label} ({y})",
                                        dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                                    }]
                                });
                                chart.render();
                                
                            }
                            </script>
                        </head>

                        <body>
                            <div id="chartContainer" style="height: 300px; width: 100%;"></div>
                            <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
                        </body>

                        </html>