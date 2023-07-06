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

    document.getElementById("counter").innerHtML = days + " Days : " + hours + " hours " +
    minutes + " minutes " + seconds + " seconds ";
//the current time is past takeoff time, stop the intervsl and display a message
    if (diff < 0){
        clearInterval(interval);
        document.getElementById("counter").innerHtML = "You missed the sale";
    }

}, 1000);
