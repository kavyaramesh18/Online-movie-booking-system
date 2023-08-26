
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Theater | Seat Reservation</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ysabeau+Infant:ital,wght@0,100;0,500;1,300&display=swap" rel="stylesheet">
</head>
<body>
    <form action="register.php" method="post" enctype="multipart/form-data">
    <form action="reservation.php" method="post" enctype="multipart/form-data">
    <div class="head">
        <h2>Movie Theater Seat Reservation</h2>
        <div class="link">
           <p><a href="">Home</a></p>
           <p><a href="">Movies</a></p>
        </div>
    </div>
    <div class="mainsection">
    <div class="main">
        <img src="sathyaprem.jpg" alt="3 idiots">
    </div>
    <div class="main2">
          <div class="description">
            <h1 class="i1">Sathyaprem Ki Katha</h1>
            <p>Description:<i>Sathyaprem Ki Katha</i></p>
            <p>Duration:<i>02:26 mins</i></p>
          </div>
          <div class="reservation">
            <h2 class="a1">Reserve your seat here</h2>

        <div class="name">
            <div class="inputs">
            <label class="l2" >First_name</label>
            <input type="text" name="fn">
            </div>
          <div class="inputs">
            <label class="l1">Last_name</label>
            <input type="text" class="" name="ln">
        </div>
        <div class="inputs">
            <label class="l3">Contact_no</label>
            <input type="text" class="r2" name="c"><br><br>
        </div>
        </div>
            <label style="margin-left:15px">Theater</label><br>
            <select name="theater" id="" class="select">
                <option value="">3D</option>
                <option value="">Cinema 2</option>
                <option value="">Theatre 1</option>
            </select><br><br>
            <label style="margin-left:15px">Choose seat group<br></label>
            <select name="seat" id="" class="select">
                <option value="">Fixed back</option>
                <option value="">Swing back</option>
                <option value="">VIP Cinema seating</option>
            </select><br><br>
        <div class="name second">
            <div class="inputs">
            <label>Qty</label>
            <input type="number" name="qty">
        </div>
        <div class="inputs">
            <label>Date</label>
            <input type="date" name="date" id="">
        </div>
          <div class="inputs">
            <label>Time</label>
            <input type="time" name="time" id=""><br><br>
            <strong>Status:</strong>
            <?php
            echo $status;
            ?>
        </div>
    </div>
           <button type="submit" class="b1">Book</button>

          </div>
    </div>
    </div>
</form>
</body>
</html>