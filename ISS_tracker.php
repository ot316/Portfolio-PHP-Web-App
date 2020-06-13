<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('partials/head.php') ?>
    <title>ISS Tracker</title>
    <script src="javascript/jquery-3.4.1.min.js"></script>
    <script src="javascript/p5/p5.min.js"></script>
</head>

<body class="background">
    <?php include('partials/banner.php') ?>
    <div class="wrapper">
        <div>
            <!-- Heading -->
            <h1 style="text-align: center; padding-top: 30px;">International Space Station Tracker</h1>
            <div class="tagcontainer">
                <h2>Software</h2>
                <h2>Web Dev</h2>
                <h2>JS</h2>
                <h2>Raspberry Pi</h2>
                <h2>Python</h2>
            </div>
            <!-- First Bullet Points -->
            <ul class="headingbullets">
                <li>I used Javascript to retrieve, transform and display the latitude and longitude of the International Space Station every 1.5
                    seconds. </li>
                <li>I setup a Raspberry Pi to send me an email whenever the International Space Station is over London.</li>
            </ul>
            <div id="cnv" class="hero"></div>
            <div id="spacing">
                <div>
                    <h3 style="padding-bottom: 20px;" id="text"></h3>
                </div>
                <h2>How it Works</h2>
                <h3 style="padding-top: 10px;">Flow Diagram</h3>
                <img class="hero" style="padding: 10px; margin-bottom: 10px; max-width: 250px; background-color: white" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/ISS_tracker/flow.png">

                <p>The Javascript code below is running on the client device. It polls the ISS API every 1.5 seconds, converting the returned latitude and longitude into a mercator projection. Further code uses the P5 library to display the graphics on the webpage. All code can be viewed on my Github.
                </p>
                <PRE class="code">complete: function (data) {
if (data.readyState === 4 && data.status === 200) {
    Lat = data.responseJSON.latitude;
    Long = data.responseJSON.longitude;
    Velocity = data.responseJSON.velocity.toFixed(2).toString();
    Altitude = data.responseJSON.altitude.toFixed(2).toString();
    var x = (parseFloat(Long) + 180) * (MapWidth / 360);
    var latRad = (parseFloat(Lat) * Math.PI / 180);
    var mercN = (Math.log(Math.tan((Math.PI / 4) + (latRad / 2))));
    var y = (MapHeight / 2) - (MapWidth * mercN / (2 * Math.PI));</PRE>
                <br>
                <br>
                <h2>Python Email Notification</h2>
                <p>The Python code below sends an email if the latitude and longitude values are within a certain range. The "findISS" function works in a very similar way to the javascript implementation above. I run the code continuously on a Raspberry Pi. </p>
                <img class="hero" style="padding-top: 10px; padding-bottom: 20px; max-width: 500px;" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/ISS_tracker/pi.jpg">
                <h3 style="padding-bottom: 20px;"> Raspberry Pi Setup</h3>
                <PRE class="code">server = smtplib.SMTP('smtp.gmail.com', 587)
server.starttls()
while True:
    data = findISS()
    sleep(0.5)
    if (Latmin < float(data['iss_position']['latitude']) < Latmax) and (Longmin < float(data['iss_position']['latitude']) < Longmax):
        mmessage = """\
        Subject: ISS Tracker
        ISS overhead"""
        server.sendmail(sender_email, receiver_email, message)
        sleep(20)</PRE>
            </div>
        </div>
    </div>
</body>
<?php include('partials/footer.php') ?>
<script src="javascript/navbar.js"></script>
<script src="javascript/ISS_Tracker.js"></script>

</html>