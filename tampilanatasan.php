<?php include 'header.php' ?>
<style>
    body {
        background: url('assets/gambar/tim.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    .navigasi {
        margin-top: 12px;
        text-align: left;
        margin-left: -12px;
    }

    .tabelatasan {
        border-collapse: collapse;
        border-spacing: 0;
        border: 1px solid #ddd;
        color: #000000;
        width: 120%;
        border: none;
        border-bottom-style: groove;
    }

    .tabelatasan th {
        font-size: 18px;
        width: 300px;
        height: 30px;
        font-weight: bold;
        font-style: italic;
        background-color: darkkhaki;

    }

    .tabelatasan tr {
        height: 50px;
        font-size: 17px;
        border-radius: 29px;
    }

    .tabelatasan td {
        height: 50px;
        font-size: 17px;
        font-family: sans-serif;
    }

    .tabelatasan tr:nth-child(even) {
        background-color: rgb(221, 221, 221);
        border-radius: 20px;
    }

    .container {
        width: 80vw;
        height: 50vh;
        margin-top: 32px;
        margin-left: 120px;
        transform: skewY(-2deg);
    }

    .atur {
        box-shadow: 3px 4px 7px 4px rgba(0, 0, 0, 0.6);
        /* background-color: dodgerblue; */
        border-radius: 10px;
        margin-left: -5px;
        width: 80vw;
        height: 67vh;
        transform: skewY(2deg);
        background-color: aliceblue;
    }

    #Inputumum {
        background-image: url('./assets/gambar/search-2.png');
        background-color: whitesmoke;
        border-radius: 4px;
        background-position: 10px 12px;
        background-repeat: no-repeat;
        font-size: 16px;
        padding: 12px 20px 12px 40px;
        border: 4px solid darkcyan;
        margin-bottom: 12px;
        margin-top: -15px;
        font-family: 'Oleo Script', cursive;
        width: 150px;
        -webkit-transition: width 0.7s ease-in-out;
        transition: width 0.4s ease-in-out;
    }

    /* When the input field gets focus, change its width to 100% */
    #Inputumum:focus {
        width: 23%;
    }

    .tagline {
        /* background: rgb(9, 255, 0);
        background: -moz-linear-gradient(163deg, rgba(9, 255, 0, 1) 0%, rgba(0, 35, 255, 1) 0%, rgba(0, 164, 255, 1) 96%);
        background: -webkit-linear-gradient(163deg, rgba(9, 255, 0, 1) 0%, rgba(0, 35, 255, 1) 0%, rgba(0, 164, 255, 1) 96%);
        background: linear-gradient(163deg, rgba(9, 255, 0, 1) 0%, rgba(0, 35, 255, 1) 0%, rgba(0, 164, 255, 1) 96%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#09ff00", endColorstr="#00a4ff", GradientType=1); */
        /* background-color: transparent; */
        background-color: honeydew;
        border: 3px solid darkolivegreen;
        height: 113px;
        text-align: center;
        width: 80vw;
        border-radius: 8px;
        margin-left: -179px;
        margin-top: 30px;
        box-shadow: 2px 7px 7px 4px rgba(0, 0, 0, 0.3);
    }

    .awal {
        width: 60vw;
        margin-left: 325px;
    }

    .atas {
        overflow-y: scroll;
        height: 53vh;
        width: 100%;
    }

    .bungkus {
        margin-left: 290px;
        margin-top: 15px;
    }
</style>

<body>
    <div class="awal">
        <div class="tagline">
            <div class="bungkus">
                <div class="card-body" style="color: papayawhip;float:left;">
                    <button class="btn btn-success" style="width: 120px; color:linen;border:4px solid darkblue">
                        <i class="fas fa-file-excel" style="margin-right: 8px"></i>Excel</button>
                </div>

                <div class="card-body" style="color: papayawhip;float:left;top:0px">
                    <button class="btn btn-danger" style="width: 120px; color:linen;border:4px solid darkblue">
                        <i class="fas fa-file-pdf" style="margin-right: 8px"></i>PDF</button>
                </div>
                <div class="card-body" style="color: papayawhip; float:left">
                    <button class="btn " style="width: 120px; color:linen;background-color:orangered;border:4px solid darkblue">
                        <i class="fas fa-chart-bar" style="margin-right: 2px"></i> Grafik
                    </button>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="col-lg-12 col-md-12 col-xs-12">
            <div class="atur">
                <div class="card-body" style="text-align:center;width:100%;">
                    <div class="navigasi">
                        <input type="text" class="input" id="Inputumum" placeholder="Search..">
                    </div>
                    <!-- <div class="row no-gutters align-items-center" style="margin-left: -12px"> -->
                    <div style="margin-left:-12px">
                        <div class="atas">
                            <table border="0" class="tabelatasan">
                                <thead>
                                    <tr style="text-align: center; padding:20px">
                                        <th style="width: 300px">Activity</th>
                                        <th>WBS Number</th>
                                        <th>Master Budget</th>
                                        <th>PR</th>
                                        <th>PV</th>
                                        <!-- <th>PV Real</th> -->
                                        <!-- <th>Status</th> -->
                                        <!-- <th style="width: 280px">Budget Available Sementara</th> -->
                                        <th>Realization</th>
                                        <th style="width: 200px">Budget Available</th>
                                        <th style="width: 190px">Ratio</th>
                                    </tr>
                                </thead>
                                <tr>
                                    <td>Travelling (Medan) </td>
                                    <td>J-03-20-KB</td>
                                    <td>Rp. 10.000.000</td>
                                    <td>Rp. 2.000.000</td>
                                    <td>Rp. 500.000</td>
                                    <td>Rp. 2.500.000</td>
                                    <td>Rp. 7.500.000</td>
                                    <td>25%</td>

                                </tr>
                                <tr>
                                    <td>Travelling (Bali) </td>
                                    <td>J-03-20-KB</td>
                                    <td>Rp. 10.000.000</td>
                                    <td>Rp. 2.000.000</td>
                                    <td>Rp. 800.000</td>
                                    <td>Rp. 2.800.000</td>
                                    <td>Rp. 7.200.000</td>
                                    <td>28%</td>
                                </tr>
                                <tr>
                                    <td>Travelling (Surabaya) </td>
                                    <td>J-03-20-KB</td>
                                    <td>Rp. 10.000.000</td>
                                    <td>Rp. 2.000.000</td>
                                    <td>Rp. 500.000</td>
                                    <td>Rp. 2.500.000</td>
                                    <td>Rp. 7.500.000</td>
                                    <td>25%</td>
                                </tr>
                                <tr>
                                    <td>Travelling (Samarinda) </td>
                                    <td>J-03-20-KB</td>
                                    <td>Rp. 10.000.000</td>
                                    <td>Rp. 2.000.000</td>
                                    <td>Rp. 1.000.000</td>
                                    <td>Rp. 3.000.000</td>
                                    <td>Rp. 7.000.000</td>
                                    <td>30%</td>
                                </tr>
                                <tr>
                                    <td>Travelling (Samarinda) </td>
                                    <td>J-03-20-KB</td>
                                    <td>Rp. 10.000.000</td>
                                    <td>Rp. 2.000.000</td>
                                    <td>Rp. 1.000.000</td>
                                    <td>Rp. 3.000.000</td>
                                    <td>Rp. 7.000.000</td>
                                    <td>30%</td>
                                </tr>
                                <tr>
                                    <td>Travelling (Samarinda) </td>
                                    <td>J-03-20-KB</td>
                                    <td>Rp. 10.000.000</td>
                                    <td>Rp. 2.000.000</td>
                                    <td>Rp. 1.000.000</td>
                                    <td>Rp. 3.000.000</td>
                                    <td>Rp. 7.000.000</td>
                                    <td>30%</td>
                                </tr>
                                <tr>
                                    <td>Travelling (Samarinda) </td>
                                    <td>J-03-20-KB</td>
                                    <td>Rp. 10.000.000</td>
                                    <td>Rp. 2.000.000</td>
                                    <td>Rp. 1.000.000</td>
                                    <td>Rp. 3.000.000</td>
                                    <td>Rp. 7.000.000</td>
                                    <td>30%</td>
                                </tr>
                                <tr>
                                    <td>Travelling (Samarinda) </td>
                                    <td>J-03-20-KB</td>
                                    <td>Rp. 10.000.000</td>
                                    <td>Rp. 2.000.000</td>
                                    <td>Rp. 1.000.000</td>
                                    <td>Rp. 3.000.000</td>
                                    <td>Rp. 7.000.000</td>
                                    <td>30%</td>
                                </tr>

                            </table>
                        </div>

                    </div>
                    <!-- </div> -->
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>
</body>

</html>