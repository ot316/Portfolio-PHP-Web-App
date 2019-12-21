<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('partials/head.php') ?>
    <title>Autonomous Drone</title>
</head>

<div class="background">
    <?php include('partials/banner.php') ?>
    <div class="wrapper">
        <!-- Heading -->
        <h1 style="text-align: center; padding-top: 30px;">Autonomous Drone</h1>
        <div class="tagcontainer">
            <h2>Robotics</h2>
            <h2>Computer Vision</h2>
            <h2>Python</h2>
            <h2>Computing</h2>
        </div>
        <!-- First Bullet Points -->
        <ul class="headingbullets">
            <li>I interfaced with a Parrot drone using ROS and implemented my own computer vision algorithms on the video stream transmitted by the drone.</li>
            <li>I setup a physics simulation of the drone in Gazebo to test my work. This is an ongoing project as part of my internship.
            </li>
        </ul>
        <video class="herovideo" loop muted autoplay>
            <source src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/autonomous_drone/parkflight.mp4" type="video/mp4">
            Please change browser to view video.
        </video>
        <h3 style="padding-top: 20px;">A preprogrammed flight path tested firstly in gazebo and then on the real drone.
        </h3>
        <p>I created a set of motion primitives than could be published to the drone over wifi.and setup a dummy network port on my PC to interface with the virtual drone. Primitives could then be called in sequence to follow a path.
        </p>
        <PRE class="code">
def turnanticlockwise(angle):
  start=time.time()
  pub = rospy.Publisher('bebop/cmd_vel', Twist, queue_size = 10)
  twist = Twist()
  twist.linear.x = 0; twist.linear.y = 0; twist.linear.z = 0
  twist.angular.x = 0; twist.angular.y = 0; twist.angular.z = 0.3
  rate = rospy.Rate(10) # 10hz
  while not rospy.is_shutdown():
      pub.publish(twist)
      rate.sleep()
      end = time.time()
      if (end-start) >= 0.0104*angle: #0.013 for simulated drone
          rospy.loginfo("Turned "+str(angle)+" degrees")
          break</PRE>
        <p>The drone's camera was setup as a node in ROS and converted to an HSV colourspace. I needed to track a coloured marker so I set upper and lower colour threshold boundaries.
        </p>
        <PRE class="code">
bridge = CvBridge()
    sub_image = rospy.Subscriber("/bebop/image_raw", Image, image_callback)
    cv2.namedWindow("Image Window", 1)
    Lower = (115, 179, 55)  #minimum threshld
    Upper = (125, 240, 170) #maximum threshld</PRE>
        <video class="herovideo" loop muted autoplay>
            <source src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/autonomous_drone/imrec.mp4" type="video/mp4">
            Please change browser to view video.
        </video>
        <p>I processed each frame of the image and masked away the areas that were not relevant.</p>
        <PRE class="code">blurred = cv2.GaussianBlur(live_image.copy(), (11,11),0)
hsv = cv2.cvtColor(blurred, cv2.COLOR_BGR2HSV)
mask = cv2.inRange(hsv, Lower, Upper)
mask = cv2.erode(mask, None, iterations=2)
mask = cv2.dilate(mask, None, iterations=2)</PRE>
        <p>I then identified the center of the marker by drawing a circle around it and appending its center to a list.
        </p>
        <PRE class="code">if len(curves) > 0:
c = max(curves, key=cv2.contourArea)
((x, y), radius) = cv2.minEnclosingCircle(c)
M = cv2.moments(c)
center = (int(M["m10"] / M["m00"]), int(M["m01"] / M["m00"]))
pts.appendleft(center)</PRE>
        <p>Finally I added a graphical overlay and called the motion primitives to allow the drone to actively track the marker.
        </p>
        <PRE class="code">try:
  topleft = ((center[0]-90),(center[1]+30))
  bottomright = ((center[0]+90),(center[1]+70) )
  cv2.putText(RGB_image, ('x=' + str(center[0]) + ', y=' + str(480-center[1])), ((center[0]-80),(center[1]+55)), font, 0.7, (255, 255, 255),2,cv2.LINE_AA)
  cv2.rectangle(RGB_image, topleft, bottomright, (255,255,255), 3)
  cv2.circle(RGB_image, center, 10, (255, 0, 0), -1)
  if i % 5 == 0:
    if  (center[0] &lt 350):
       turnanticlockwise(1)
    if  (center[0] > 556):
       turnclockwise(1)
except:
  cv2.putText(RGB_image, ('No Object Found'), (350,480/2), font, 0.7, (255, 255, 255),2,cv2.LINE_AA)
  show_image(1, RGB_image)</PRE>
    </div>
</div>
<?php include('partials/footer.php') ?>
<script src="../javascript/navbar.js"></script>

</html>