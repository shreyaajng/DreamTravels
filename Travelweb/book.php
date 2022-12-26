<!DOCTYPE html>
<html lang="en">

<head>
    <title>DreamTravels</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>

<body>

    <?php include 'menu.php'; ?>

    <div class="jumbotron">
        <h1>Dream Travels :)</h1>
        <p>We are the Dream Travels Travel Agency..</p>
    </div>

    <!--Booking section starts-->
    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Book your trip!</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="images/cc3.jpg" class="img-fluid" style="width:100%; height: 380px;">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <form action="book_form.php" method="post">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" autocomplete="off" placeholder="enter your name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" autocomplete="off" placeholder="enter your email">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="phone">Phone</label>
                                <input type="number" class="form-control" name="phone" autocomplete="off" placeholder="enter your number">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" name="address" autocomplete="off" placeholder="enter your address">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="location">Where to :</label>
                                <input type="text" class="form-control" name="location" autocomplete="off" placeholder="place you want to visit">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="guests">How many :</label>
                                <input type="number" class="form-control" name="guests" autocomplete="off" placeholder="number of guests">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="arrivals">arrival :</label>
                                <input type="date" class="form-control" name="arrivals" autocomplete="off">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="leaving">leaving :</label>
                                <input type="date" class="form-control" name="leaving" autocomplete="off">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!--Booking section ends-->




    <!--Footer section starts-->
    <footer class="mt-5">
        <p class="p-3 text-center bg-dark text-white">@DreamTravels</p>
    </footer>

    <!--Footer section ends-->

</body>

</html>