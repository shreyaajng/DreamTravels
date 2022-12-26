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

</body>

</html>