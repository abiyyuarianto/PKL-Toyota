<!-- <button onclick="punyaku()" class="show">Show Me</button> -->
<div style="margin-top: 29px; width:98vw;margin-bottom:12px;margin-left:5px">
    <div class="col-lg-12 col-md-12 col-xs-12" id="myDiv">
        <div class="card shadow h-100 py-2" style=" box-shadow: 7px 7px 7px rgba(0,0,0,0.8);opacity:1; ">
            <div class="card-body">
                <div>
                    <h4 class="modal-title" id="exampleModalLabel" style="width:200px;border-radius:5px;margin-top: -6px;margin-right:525px; text-align:center;float:right;background-color:darkorange;color:mintcream">Tabel Planning</h4>
                    <div style="text-align: left;margin-left:-15px;">
                        <input type="text" id="myInput" style="border: 4px solid blue;" placeholder="Search..">
                    </div>
                </div>
                <div class="row no-gutters align-items-center">
                    <div style="overflow-x:auto;">
                        <div style="overflow: scroll;height:50vh">
                            <table border="0" class="tabel2">
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
                                        <th style="width: 30px">Ratio</th>
                                        <th style="width: 5px">Aksi</th>
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
                                    <td>
                                        <div class="anim">
                                            <div class="icon">
                                                <i class="fas fa-chevron-left" style="font-size:21px;margin-top:6px;"></i>
                                            </div>
                                            <div class="icon2">
                                                <i class="fas fa-chevron-right" style="font-size:21px;margin-top:6px;"></i>
                                            </div>

                                            <div class="tulisan">
                                                <button type="button" id="buatPV" style="width: 27px;border:none;margin-left:-4px;margin-right:4px;background:none">
                                                    <i class="fas fa-info" style="color:lawngreen; font-size:21px; margin:auto;border:none;"></i>
                                                </button>
                                                <?php include 'PV.php' ?>

                                                <a href="#">
                                                    <i class="fas fa-edit" style="color:dodgerblue;font-size:21px; margin-right:9px"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fas fa-trash" style="color:firebrick;font-size:21px;"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
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
                                    <td>
                                        <div class="anim">
                                            <div class="icon">
                                                <i class="fas fa-chevron-left" style="font-size:21px;margin-top:6px;"></i>
                                            </div>
                                            <div class="icon2">
                                                <i class="fas fa-chevron-right" style="font-size:21px;margin-top:6px;"></i>
                                            </div>

                                            <div class="tulisan">
                                                <button type="button" id="buatPV" style="width: 27px;border:none;margin-left:-4px;margin-right:4px;background:none">
                                                    <i class="fas fa-info" style="color:lawngreen; font-size:21px; margin:auto;border:none;"></i>
                                                </button>
                                                <?php include 'PV.php' ?>

                                                <a href="#">
                                                    <i class="fas fa-edit" style="color:dodgerblue;font-size:21px; margin-right:9px"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fas fa-trash" style="color:firebrick;font-size:21px;"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
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
                                    <td>
                                        <div class="anim">
                                            <div class="icon">
                                                <i class="fas fa-chevron-left" style="font-size:21px;margin-top:6px;"></i>
                                            </div>
                                            <div class="icon2">
                                                <i class="fas fa-chevron-right" style="font-size:21px;margin-top:6px;"></i>
                                            </div>

                                            <div class="tulisan">
                                                <button type="button" id="buatPV" style="width: 10px;border:none;margin-left:-4px;margin-right:15px">
                                                    <i class="fas fa-info" style="color:lawngreen; font-size:21px; margin-right:12px;border:none;"></i>
                                                </button>
                                                <?php include 'PV.php' ?>

                                                <a href="#">
                                                    <i class="fas fa-edit" style="color:dodgerblue;font-size:21px; margin-right:9px"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fas fa-trash" style="color:firebrick;font-size:21px;"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
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
                                    <td>
                                        <div class="anim">
                                            <div class="icon">
                                                <i class="fas fa-chevron-left" style="font-size:21px;margin-top:6px;"></i>
                                            </div>
                                            <div class="icon2">
                                                <i class="fas fa-chevron-right" style="font-size:21px;margin-top:6px;"></i>
                                            </div>

                                            <div class="tulisan">
                                                <button type="button" id="buatPV" style="width: 10px;border:none;margin-left:-4px;margin-right:15px">
                                                    <i class="fas fa-info" style="color:lawngreen; font-size:21px; margin-right:12px;border:none;"></i>
                                                </button>
                                                <?php include 'PV.php' ?>

                                                <a href="#">
                                                    <i class="fas fa-edit" style="color:dodgerblue;font-size:21px; margin-right:9px"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fas fa-trash" style="color:firebrick;font-size:21px;"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
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
                                    <td>
                                        <div class="anim">
                                            <div class="icon">
                                                <i class="fas fa-chevron-left" style="font-size:21px;margin-top:6px;"></i>
                                            </div>
                                            <div class="icon2">
                                                <i class="fas fa-chevron-right" style="font-size:21px;margin-top:6px;"></i>
                                            </div>

                                            <div class="tulisan">
                                                <button type="button" id="buatPV" style="width: 10px;border:none;margin-left:-4px;margin-right:15px">
                                                    <i class="fas fa-info" style="color:lawngreen; font-size:21px; margin-right:12px;border:none;"></i>
                                                </button>
                                                <?php include 'PV.php' ?>

                                                <a href="#">
                                                    <i class="fas fa-edit" style="color:dodgerblue;font-size:21px; margin-right:9px"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fas fa-trash" style="color:firebrick;font-size:21px;"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
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
                                    <td>
                                        <div class="anim">
                                            <div class="icon">
                                                <i class="fas fa-chevron-left" style="font-size:21px;margin-top:6px;"></i>
                                            </div>
                                            <div class="icon2">
                                                <i class="fas fa-chevron-right" style="font-size:21px;margin-top:6px;"></i>
                                            </div>

                                            <div class="tulisan">
                                                <button type="button" id="buatPV" style="width: 10px;border:none;margin-left:-4px;margin-right:15px">
                                                    <i class="fas fa-info" style="color:lawngreen; font-size:21px; margin-right:12px;border:none;"></i>
                                                </button>
                                                <?php include 'PV.php' ?>

                                                <a href="#">
                                                    <i class="fas fa-edit" style="color:dodgerblue;font-size:21px; margin-right:9px"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fas fa-trash" style="color:firebrick;font-size:21px;"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
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
                                    <td>
                                        <div class="anim">
                                            <div class="icon">
                                                <i class="fas fa-chevron-left" style="font-size:21px;margin-top:6px;"></i>
                                            </div>
                                            <div class="icon2">
                                                <i class="fas fa-chevron-right" style="font-size:21px;margin-top:6px;"></i>
                                            </div>

                                            <div class="tulisan">
                                                <button type="button" id="buatPV" style="width: 10px;border:none;margin-left:-4px;margin-right:15px">
                                                    <i class="fas fa-info" style="color:lawngreen; font-size:21px; margin-right:12px;border:none;"></i>
                                                </button>
                                                <?php include 'PV.php' ?>

                                                <a href="#">
                                                    <i class="fas fa-edit" style="color:dodgerblue;font-size:21px; margin-right:9px"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fas fa-trash" style="color:firebrick;font-size:21px;"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
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
                                    <td>
                                        <div class="anim">
                                            <div class="icon">
                                                <i class="fas fa-chevron-left" style="font-size:21px;margin-top:6px;"></i>
                                            </div>
                                            <div class="icon2">
                                                <i class="fas fa-chevron-right" style="font-size:21px;margin-top:6px;"></i>
                                            </div>

                                            <div class="tulisan">
                                                <button type="button" id="buatPV" style="width: 10px;border:none;margin-left:-4px;margin-right:15px">
                                                    <i class="fas fa-info" style="color:lawngreen; font-size:21px; margin-right:12px;border:none;"></i>
                                                </button>
                                                <?php include 'PV.php' ?>

                                                <a href="#">
                                                    <i class="fas fa-edit" style="color:dodgerblue;font-size:21px; margin-right:9px"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fas fa-trash" style="color:firebrick;font-size:21px;"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
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
                                    <td>
                                        <div class="anim">
                                            <div class="icon">
                                                <i class="fas fa-chevron-left" style="font-size:21px;margin-top:6px;"></i>
                                            </div>
                                            <div class="icon2">
                                                <i class="fas fa-chevron-right" style="font-size:21px;margin-top:6px;"></i>
                                            </div>

                                            <div class="tulisan">
                                                <button type="button" id="buatPV" style="width: 10px;border:none;margin-left:-4px;margin-right:15px">
                                                    <i class="fas fa-info" style="color:lawngreen; font-size:21px; margin-right:12px;border:none;"></i>
                                                </button>
                                                <?php include 'PV.php' ?>

                                                <a href="#">
                                                    <i class="fas fa-edit" style="color:dodgerblue;font-size:21px; margin-right:9px"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fas fa-trash" style="color:firebrick;font-size:21px;"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>