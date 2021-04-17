<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h3 class="m-0 text-primary"> <i class="nav-icon fas fa-user-alt"></i> Data Kesehatan Lansia </h3>
                  </div><!-- /.col -->
              </div><!-- /.row -->
          </div><!-- /.container-fluid -->
      </div>

      <!-- /.content-header -->
      <!-- Main content -->
      <div class="content">
          <div class="container-fluid">
              <div class="alert alert-secondary" role="alert">
                  <i class="nav-icon fas fa-chart-line"></i> Nakes &nbsp; &nbsp; > &nbsp; &nbsp; <i class="nav-icon fas fa-newspaper"></i> Data Kesehatan Lansia
              </div>
              <div class="row table-responsive">
                  <div class="col table-responsive">
                      <!-- Tabel -->
                      <div class="card">
            <?php

            $query = $this->db->query("SELECT COUNT(*) FROM data_kes_lansia WHERE analisis_IMT='kurus' ");

            $dataIMTkurusChart = $query->result(); 
            foreach ($dataIMTkurusChart as $k => $v) {
              $arrIMTkurus[] = ['y' => $v->total_bayar];
            }
            ?>

            <?php

            $query = $this->db->query("SELECT COUNT(*) FROM data_kes_lansia WHERE analisis_IMT='normal' ");

            $dataIMTnormalChart = $query->result();
            foreach ($dataIMTnormalChart as $k => $v) {
              $arrIMTnormal[] = ['y' => $v->total_bayar];
            }
            ?>

            <?php

            $query = $this->db->query("SELECT COUNT(*) FROM data_kes_lansia WHERE analisis_IMT='gemuk' ");

            $dataIMTgemukChart = $query->result();
            foreach ($dataIMTgemukChart as $k => $v) {
            $arrIMTgemuk[] = ['y' => $v->total_bayar];
            }
            ?>

            <?php

            $query = $this->db->query("SELECT COUNT(*) FROM data_kes_lansia WHERE analisis_IMT='obesitas' ");

            $dataIMTobesitasChart = $query->result();
            foreach ($dataIMTobesitasChart as $k => $v) {
            $arrIMTobesitas[] = ['y' => $v->total_bayar];
            }
            ?>
<br>
                        <!DOCTYPE HTML>
                        <html>
                        <head>
                            <script>
                            window.onload = function() {

                                var chart = new CanvasJS.Chart("chartContainer", {
                                    animationEnabled: true,
                                    theme: "light2",
                                    title: {
                                        text: "Transaksi Beras"
                                    },
                                    axisX: {
                                        //valueFormatString: "DD MMM",
                                        crosshair: {
                                            enabled: true,
                                            snapToDataPoint: true
                                        }
                                    },
                                    axisY: {
                                        title: "Total Pembayaran",
                                        includeZero: true,
                                        crosshair: {
                                            enabled: true
                                        }
                                    },
                                    toolTip: {
                                        shared: true
                                    },
                                    legend: {
                                        cursor: "pointer",
                                        verticalAlign: "top",
                                        horizontalAlign: "left",
                                        dockInsidePlotArea: false,
                                        itemclick: toogleDataSeries
                                    },
                                    data: [{
                                            type: "line",
                                            showInLegend: true,
                                            name: "Penggilingan Padi",
                                            markerType: "square",
                                            color: "#F08080",
                                            dataPoints:

                                                <?= json_encode($arrPenggilingan, JSON_NUMERIC_CHECK); ?>

                                        },
                                        {
                                            type: "line",
                                            showInLegend: true,
                                            name: "Penjualan Dedak",
                                            lineDashType: "dash",
                                            dataPoints:
                                                <?= json_encode($arrDedak, JSON_NUMERIC_CHECK); ?>

                                        }
                                    ]
                                });
                                chart.render();

                                function toogleDataSeries(e) {
                                    if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                                        e.dataSeries.visible = false;
                                    } else {
                                        e.dataSeries.visible = true;
                                    }
                                    chart.render();
                                }

                            }
                            </script>
                        </head>

                        <body>
                            <div id="chartContainer" style="height: 300px; width: 100%;"></div>
                            <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
                        </body>

                        </html>