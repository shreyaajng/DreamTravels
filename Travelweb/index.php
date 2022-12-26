 <!DOCTYPE html>
 <html lang="en">

 <head>
   <title>DreamTravels</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="css/style.css">
 </head>

 <body>

   <?php include 'menu.php'; ?>

   <!-- CAROUSAL starts -->
   <div id="demo" class="carousel slide" data-ride="carousel">
     <ul class="carousel-indicators">
       <li data-target="#demo" data-slide-to="0" class="active"></li>
       <li data-target="#demo" data-slide-to="1"></li>
       <li data-target="#demo" data-slide-to="2"></li>
     </ul>
     <div class="carousel-inner">
       <div class="carousel-item active">
         <img src="images/c4.jpg" alt="Himalayas" width="1100" height="500">
         <div class="carousel-caption">
           <h3>Himalayas</h3>
           <p>Discover the new places!</p>
         </div>
       </div>
       <div class="carousel-item">
         <img src="images/cc3.jpg" alt="Dolomites" width="1100" height="500">
         <div class="carousel-caption">
           <h3>Dolomites</h3>
           <p>Travel around the world!</p>
         </div>
       </div>
       <div class="carousel-item">
         <img src="images/c2.jpg" alt="Taiwan" width="1100" height="500">
         <div class="carousel-caption">
           <h3>Taiwan</h3>
           <p>Make your tour worthwhile!</p>
         </div>
       </div>
     </div>
     <a class="carousel-control-prev" href="#demo" data-slide="prev">
       <span class="carousel-control-prev-icon"></span>
     </a>
     <a class="carousel-control-next" href="#demo" data-slide="next">
       <span class="carousel-control-next-icon"></span>
     </a>
   </div>
   <!-- CAROUSAL ends -->

   <!-- About section starts -->
   <section class="my-5">
     <div class="py-5">
       <h2 class="text-center">About Us</h2>
     </div>
     <div class="container-fluid">
       <div class="row">
         <div class="col-lg-6 col-md-6 col-12">
           <img src="images/c5.jpg" class="img-fluid aboutimg">
         </div>
         <div class="col-lg-6 col-md-6 col-12">
           <h2 class="display-4">We are DreamTravels.</h2>
           <p class="py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, eaque facere. Facere et corporis magnam, repudiandae tempora dolores laudantium. Placeat fugit minima quis saepe animi commodi dolore aliquam repellat doloribus?
           </p>
           <a href="about.php" class="btn btn-success">Read More</a>
         </div>
       </div>
     </div>
   </section>
   <!-- About section ends -->

   <!--Packages section starts-->
   <section class="my-5">
     <div class="py-5">
       <h2 class="text-center">Our Packages</h2>
     </div>
     <div class="container-fluid">
       <div class="row">
         <div class="col-lg-4 col-md-4 col-12">
           <div class="card">
             <img class="card-img-top" src="images/g1.jpg" alt="Card image" style="width:100%">
             <div class="card-body text-center">
               <h4 class="card-title">Adventure & Tour</h4>
               <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
               <a href="book.php" class="btn btn-success stretched-link">Book Now</a>
             </div>
           </div>
         </div>
         <div class="col-lg-4 col-md-4 col-12">
           <div class="card">
             <img class="card-img-top" src="images/t3.jpg" alt="Card image" style="width:100%">
             <div class="card-body text-center">
               <h4 class="card-title">Adventure & Tour</h4>
               <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
               <a href="book.php" class="btn btn-success stretched-link">Book Now</a>
             </div>
           </div>
         </div>
         <div class="col-lg-4 col-md-4 col-12">
           <div class="card">
             <img class="card-img-top" src="images/b2.jpg" alt="Card image" style="width:100%">
             <div class="card-body text-center">
               <h4 class="card-title">Adventure & Tour</h4>
               <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
               <a href="book.php" class="btn btn-success stretched-link">Book Now</a>
             </div>
           </div>
         </div>
       </div>
     </div>
     <!--Packeges section ends-->

     <!--Gallery section starts-->
     <section class="my-5">
       <div class="py-5">
         <h2 class="text-center">Gallery</h2>
       </div>
       <div class="container-fluid">
         <div class="row">
           <div class="col-lg-4 col-md-4 col-12">
             <img src="images/cc4.jpg" class="img-fluid pb-3">
           </div>
           <div class="col-lg-4 col-md-4 col-12">
             <img src="images/cc4.jpg" class="img-fluid pb-3">
           </div>
           <div class="col-lg-4 col-md-4 col-12">
             <img src="images/cc4.jpg" class="img-fluid pb-3">
           </div>
           <div class="col-lg-4 col-md-4 col-12">
             <img src="images/cc4.jpg" class="img-fluid pb-3">
           </div>
           <div class="col-lg-4 col-md-4 col-12">
             <img src="images/cc4.jpg" class="img-fluid pb-3">
           </div>
           <div class="col-lg-4 col-md-4 col-12">
             <img src="images/cc4.jpg" class="img-fluid pb-3">
           </div>
           <div class="col-lg-4 col-md-4 col-12">
             <img src="images/cc4.jpg" class="img-fluid pb-3">
           </div>
           <div class="col-lg-4 col-md-4 col-12">
             <img src="images/cc4.jpg" class="img-fluid pb-3">
           </div>
           <div class="col-lg-4 col-md-4 col-12">
             <img src="images/cc4.jpg" class="img-fluid pb-3">
           </div>
         </div>
       </div>

       <!--Gallery section ends-->

       <!--Contact section starts-->

       <section class="my-5 contactus">
         <div class="py-5">
           <h2 class="text-center">Contact Us</h2>
         </div>

         <div class="w-50 m-auto">
           <form action="userinfo.php" method="post">
             <div class="form-group">
               <label>Username</label>
               <input type="text" name="username" autocomplete="off" class="form-control">
             </div>
             <div class="form-group">
               <label>Email Id</label>
               <input type="text" name="email" autocomplete="off" class="form-control">
             </div>
             <div class="form-group">
               <label>Mobile</label>
               <input type="text" name="mobile" autocomplete="off" class="form-control">
             </div>
             <div class="form-group">
               <label>Comments</label>
               <textarea class="form-control" name="comments">
                </textarea>
             </div>
             <button type="submit" class="btn btn-success">Submit</button>
           </form>
         </div>


       </section>

       <!--Contact section ends-->


       <!--Footer section starts-->


       <footer>
         <p class="p-3 text-center bg-dark text-white">@DreamTravels</p>
       </footer>

       <!--Footer section ends-->

       <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
       <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
 </body>

 </html>