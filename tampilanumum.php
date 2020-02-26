<?php include 'header.php' ?>
<style>
    body {
        background: url('assets/gambar/rene.jpg');
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

    .tabelumum {
        border-collapse: collapse;
        border-spacing: 0;
        border: 1px solid #ddd;
        color: #000000;
        width: 100%;
        border: none;
        border-bottom-style: groove;
    }

    .tabelumum th {
        font-size: 18px;
        width: 200px;
        height: 30px;
        font-weight: bold;
        font-style: italic;
        background-color: darkkhaki;

    }

    .tabelumum tr {
        height: 50px;
        font-size: 17px;
        border-radius: 29px;
    }

    .tabelumum td {
        height: 50px;
        font-size: 17px;
        font-family: sans-serif;
    }

    .tabelumum tr:nth-child(even) {
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
        background-color: #ddd;
        border: 3px solid darkslateblue;
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

    .judul {
        font-family: 'Oleo Script', cursive;
        font-size: 38pt;
        text-align: left;
        margin-left: 12px;
        color: black;
        margin-top: 21px
    }

    .jud-bawah {
        font-size: 12pt;
        text-align: center;
        color: black;
        margin: -1px 0 0 0;
    }

    .atas {
        overflow-y: scroll;
        height: 53vh;
        width: 100%;
    }
</style>

<body>
    <div class="awal">
        <div class="tagline">
            <div style="text-align:left; margin-top:10px;">
                <div class="judul">
                    <h1>Flow Dana PV</h1>
                </div>
                <hr style=" border: 2px solid darkblue;width:46%;margin-left:10px;margin-top:13px">
                <!-- <div class="jud-bawah"> <b>PT TOYOTA ASTRA MOTOR</b></div> -->
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
                    <div style="overflow-x:auto;margin-left:-12px">
                        <div class="atas">
                            <table border="0" class="tabelumum">
                                <thead>
                                    <tr style="text-align: center;">
                                        <th>Activity</th>
                                        <th>WBS Number</th>
                                        <th>No PV</th>
                                        <th>Nominal PV</th>
                                        <th>PIC</th>
                                        <th>Status</th>

                                    </tr>
                                </thead>
                                <tr>
                                    <td>Travelling (Medan) </td>
                                    <td>J-03-20-KB</td>
                                    <td>5001298</td>
                                    <td>Rp. 500.000</td>
                                    <td>faizal Diaz</td>
                                    <td>Draft</td>
                                </tr>
                                <tr>
                                    <td>Travelling (Bali) </td>
                                    <td>J-03-20-KB</td>
                                    <td>3009821</td>
                                    <td>Rp. 800.000</td>
                                    <td>Siti Haminah</td>
                                    <td>Posted</td>

                                </tr>
                                <tr>
                                    <td>Travelling (Surabaya) </td>
                                    <td>J-03-20-KB</td>
                                    <td>4001239</td>
                                    <td>Rp. 500.000</td>
                                    <td>Wildan Pramodya</td>
                                    <td>Draft</td>

                                </tr>
                                <tr>
                                    <td>Travelling (Samarinda) </td>
                                    <td>J-03-20-KB</td>
                                    <td>7801007</td>
                                    <td>Rp. 1.000.000</td>
                                    <td>Dea Nessa Putri</td>
                                    <td>Draft</td>
                                </tr>
                                <tr>
                                    <td>Travelling (Bali) </td>
                                    <td>J-03-20-KB</td>
                                    <td>3009821</td>
                                    <td>Rp. 800.000</td>
                                    <td>Siti Haminah</td>
                                    <td>Posted</td>

                                </tr>
                                <tr>
                                    <td>Travelling (Surabaya) </td>
                                    <td>J-03-20-KB</td>
                                    <td>4001239</td>
                                    <td>Rp. 500.000</td>
                                    <td>Wildan Pramodya</td>
                                    <td>Draft</td>

                                </tr>
                                <tr>
                                    <td>Travelling (Samarinda) </td>
                                    <td>J-03-20-KB</td>
                                    <td>7801007</td>
                                    <td>Rp. 1.000.000</td>
                                    <td>Dea Nessa Putri</td>
                                    <td>Draft</td>
                                </tr>
                                <tr>
                                    <td>Travelling (Bali) </td>
                                    <td>J-03-20-KB</td>
                                    <td>3009821</td>
                                    <td>Rp. 800.000</td>
                                    <td>Siti Haminah</td>
                                    <td>Posted</td>

                                </tr>
                                <tr>
                                    <td>Travelling (Surabaya) </td>
                                    <td>J-03-20-KB</td>
                                    <td>4001239</td>
                                    <td>Rp. 500.000</td>
                                    <td>Wildan Pramodya</td>
                                    <td>Draft</td>

                                </tr>
                                <tr>
                                    <td>Travelling (Samarinda) </td>
                                    <td>J-03-20-KB</td>
                                    <td>7801007</td>
                                    <td>Rp. 1.000.000</td>
                                    <td>Dea Nessa Putri</td>
                                    <td>Draft</td>
                                </tr>
                                <tr>
                                    <td>Travelling (Bali) </td>
                                    <td>J-03-20-KB</td>
                                    <td>3009821</td>
                                    <td>Rp. 800.000</td>
                                    <td>Siti Haminah</td>
                                    <td>Posted</td>

                                </tr>
                                <tr>
                                    <td>Travelling (Surabaya) </td>
                                    <td>J-03-20-KB</td>
                                    <td>4001239</td>
                                    <td>Rp. 500.000</td>
                                    <td>Wildan Pramodya</td>
                                    <td>Draft</td>

                                </tr>
                                <tr>
                                    <td>Travelling (Samarinda) </td>
                                    <td>J-03-20-KB</td>
                                    <td>7801007</td>
                                    <td>Rp. 1.000.000</td>
                                    <td>Dea Nessa Putri</td>
                                    <td>Draft</td>
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