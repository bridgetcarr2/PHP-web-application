<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 6 Countdown</title>
    <link rel="stylesheet" href="countdown.css">
 
</head>
<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="./flowers.html">flowers</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
</div>
<body>
    <h1>Welcome to First Lady Flowers!</h1>
    <p>
        Shop locally grown flower arrangements! Shop our vast variety of rose bushes. 
        We are a Family Owned Business!
    </p>
    
</body>
<body>
    <h1>Countdown to Valentines Day</h1>
   <div class="container">
        <div class="row">
            <div class="col">
                <h2>Countdown time</h2>
                <div id="counter" class="countdown"></div>
            </div>
        </div>
    </div>

<?php
    $dateTime = strtotime('February 14, 2024 12:00:00');
    $getDateTime = date("F d, Y H:i:s", $dateTime);
?>

<script>
    var countDownTime = new Date("<?php echo "$getDateTime"; ?>").getTime();

var interval = setInterval(function(){
    var current = new Date().getTime();

    console.log(current);

    //this is the difference between when we take off and the current time in seconds
    var diff = countDownTime - current;

    var days = Math.floor(diff / (1000 * 60 * 60 * 24));
    var hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
    var seconds =Math.floor((diff % (1000 * 60)) / 1000);

    document.getElementById("counter").innerHTML = days + " Days : " + hours + " hours " +
    minutes + " minutes " + seconds + " seconds ";
//the current time is past takeoff time, stop the intervsl and display a message
    if (diff < 0){
        clearInterval(interval);
        document.getElementById("counter").innerHTML = "You missed valenties day";
    }

}, 1000);

</script>
</body>
</html>