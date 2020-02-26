 <?php include 'header.php' ?>
 <?php include 'assets/buat_dasboard.php' ?>

 <body>
     <button onclick="topFunction()" id="myBtn" title="Go to top"> <i class="fas fa-arrow-up"></i> </button>

     <div class="awal">
         <div class="tagline" style="height: 180px; text-align:center; width:47vw; margin:15px 20px auto; border-radius: 4px">
             <div class="profile">
                 <img src="assets/gambar/new_logo.png" style="margin-bottom: 12px" alt="">
                 <br>
                 <label for="" style="color:white"><b>Fatimah Anandati</b> </label>
                 <br>
                 <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                     Edit
                 </button> -->
                 <button type="button" class=" btn btn-info" data-toggle="modal" data-target="#myModal" style="width: 130px;background-color:crimson">Edit</button>
             </div>


             <div style="text-align:left; margin-top:-110px;margin-left:148px">
                 <div class="judul col-lg-12 col-md-3">
                     <div style="animation-duration: 4s;" class="animated infinite flash">Start Your Impossible</div>
                 </div>
                 <div class="jud-bawah"> <b>PT TOYOTA ASTRA MOTOR</b></div>
             </div>
         </div>
     </div>

     <div class="menu">
         <div class="container" onclick="myFunction(this)">
             <div class="bar1" style="margin-left:374px"></div>
             <div class="bar2" style="margin-left:374px"></div>
             <div class="bar3" style="margin-left:374px"></div>
             <div class="bungkus">
                 <div class="card-body" style="color: papayawhip;float:left;">
                     <button type="button" class="btn btn-primary" style="width: 120px;" data-toggle="modal" data-target="#modalSaya">
                         <i class=" fas fa-plus" style="margin-right: 5px"></i>Add Data</button>
                 </div>

                 <div class="card-body" style="color: papayawhip;float:left; ">
                     <button class="btn btn-success" style="width: 120px; color:linen">
                         <i class="fas fa-file-excel" style="margin-right: 8px"></i>Excel</button>
                 </div>

                 <div class="card-body" style="color: papayawhip;float:left;top:0px">
                     <button class="btn btn-danger" style="width: 120px; color:linen">
                         <i class="fas fa-file-pdf" style="margin-right: 8px"></i>PDF</button>
                 </div>
                 <div class="card-body" style="color: papayawhip; float:left">
                     <button class="btn " style="width: 120px; color:linen;background-color:orangered;">
                         <i class="fas fa-chart-bar" style="margin-right: 2px"></i> Grafik
                     </button>
                 </div>

             </div>
         </div>

     </div>
     <?php include 'profile.php' ?>
     <?php include 'modals.php' ?>

     <?php include 'tracking.php' ?>
     <?php include 'table.php' ?>
     <?php include 'tableAct.php' ?>

     <script>
         //Get the button
         var mybutton = document.getElementById("myBtn");

         // When the user scrolls down 20px from the top of the document, show the button
         window.onscroll = function() {
             scrollFunction()
         };

         function scrollFunction() {
             if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                 mybutton.style.display = "block";
             } else {
                 mybutton.style.display = "none";
             }
         }

         // When the user clicks on the button, scroll to the top of the document
         function topFunction() {
             document.body.scrollTop = 0;
             document.documentElement.scrollTop = 0;
         }
     </script>
     <!-- Untuk Navigasi -->
     <script>
         function myFunction(x) {
             x.classList.toggle("change");
         }
     </script>
     <!-- show and hide me -->
     <script>
         function punyaku() {
             var x = document.getElementById("show");
             if (x.style.display === "none") {
                 x.style.display = "block";
             } else {
                 x.style.display = "none";
             }
         }
     </script>
     <!-- modals -->
     <!-- <script>
         // Get the modal
         var modal = document.getElementById("myModal");

         // Get the button that opens the modal
         var btn = document.getElementById("Mybut");

         // Get the <span> element that closes the modal
         var span = document.getElementById("close");

         // When the user clicks the button, open the modal 
         btn.onclick = function() {
             modal.style.display = "block";
         }

         // When the user clicks on <span> (x), close the modal
         span.onclick = function() {
             modal.style.display = "none";
         }

         // When the user clicks anywhere outside of the modal, close it
         window.onclick = function(event) {
             if (event.target == modal) {
                 modal.style.display = "none";
             }
         }
     </script> -->
     <!-- buat pv -->
     <script>
         // Get the modal
         var modal = document.getElementById("myPV");

         // Get the button that opens the modal
         var btn = document.getElementById("buatPV");

         // Get the <span> element that closes the modal
         var span = document.getElementById("close");

         // When the user clicks the button, open the modal 
         btn.onclick = function() {
             modal.style.display = "block";
         }

         // When the user clicks on <span> (x), close the modal
         span.onclick = function() {
             modal.style.display = "none";
         }

         // When the user clicks anywhere outside of the modal, close it
         window.onclick = function(event) {
             if (event.target == modal) {
                 modal.style.display = "none";
             }
         }
     </script>
     <div class="footer">
         Toyota Astra Motor &copy; 2020
         Designed by Muhammad Abiyyu Aly Arianto

     </div>

 </body>

 </html>