<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('partials/head.php') ?>
    <title>Mood Tracking Smart Mirror</title>
    <script src="javascript/jquery-3.4.1.min.js"></script>
    <script src="javascript/p5/p5.min.js"></script>
</head>

<div class="background">
    <?php include('partials/banner.php') ?>
    <div class="wrapper">
        <div>
            <!-- Heading -->
            <h1 style="text-align: center; padding-top: 30px;">Mood Tracking Smart Mirror with CNN and Web Interface</h1>
            <div class="tagcontainer">
                <h2>Machine&nbsp;Learning</h2>
                <h2>Web&nbsp;Dev</h2>
                <h2>Computer&nbsp;Vision</h2>
                <h2>Python</h2>
                <h2>JS</h2>
            </div>
            <!-- First Bullet Points -->
            <ul class="headingbullets">
                <li>I designed and built a mood tracking smart mirror that classifies the user's mood using computer vision and a neural network. </li>
                <li>The mirror collects data, uploads it to the cloud and plots it in real time on a web-app. The user can interact with the graphs and view data over different timescales.</li>
            </ul>
            <br>
            <video class="herovideo" controls autoplay>
                <source src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/smart_mirror/SIOT_OliThompson.mp4" type="video/mp4">
                Please change browser to view video.
            </video>
        </div>
        <h2>How it Works</h2>
        <p>The goal of the project was to collect emotion data over 2 weeks and conduct analysis and actuation of the data. I built a smart mirror with a built in Raspberry Pi camera, this was designed to be a non obtrusive way of collecting a user's mood data. The full code is available on my Github. </p>
        <h4 style="padding-bottom: 10px;"> Interface and Flow Diagram</h4>
        <img class="hero" style="padding-top: 10px; padding-bottom: 20px; max-width: 600px;" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/smart_mirror/flowandpic.png">
        <h4 style="padding-top: 20px;"> Convolutional Neural Network</h4>
        <p>Python was used to process a dataset of faces using multithreading. Once the training dataset had been split into testing and training data and saved as numpy arrays, Tensorflow and Keras were used to design, train, compile nd save a convolutional neural network model. </p>
        </p>
        <PRE class="code">model.add(Conv2D(num_features, kernel_size=(3, 3), activation='relu', input_shape=(width, height, 1), data_format='channels_last', kernel_regularizer=l2(0.01)))
model.add(Conv2D(num_features, kernel_size=(3, 3), activation='relu', padding='same'))
model.add(BatchNormalization())
model.add(MaxPooling2D(pool_size=(2, 2), strides=(2, 2))) #only single layer shown here
model.add(Dropout(0.5))
model.compile(loss=categorical_crossentropy, optimizer=Adam(), metrics=['accuracy'])
model.fit(X_train, y_train, batch_size=batch_size, epochs=epochs, verbose=1, validation_data=(X_test, y_test), shuffle=True)
with open("model.json", "w") as json_file:
    json_file.write(model_json)
model.save_weights("model_weights.h5")</PRE>
        <h4 style="padding-top: 20px;"> Computer Vision</h4>
        <p>This model was transferred to the smart mirror. The code below accepts an openCV video frame. Should a face be detected, the outputs of the neural network are saved to a CSV file and uploaded periodically to an S3 bucket. </p>
        <img class="hero" style="padding-top: 10px; padding-bottom: 20px; max-width: 750px;" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/smart_mirror/faces.jpg">
        <br>
        <PRE class="code"> for (x,y,w,h) in faces_detected:
            face=gray_img[y:y+w,x:x+h] #cropping region of interest 
        face=cv2.resize(face,(width,height)) #resize to 48 * 48
        img_pixels = image.img_to_array(face) #create pixel array
        img_pixels = np.expand_dims(img_pixels, axis = 0) 
        img_pixels = (img_pixels-min(img_pixels))/(max(img_pixels)-min(img_pixels)) #normalise data
        predictions = model.predict(img_pixels) #feed image data into CNN
        
        if predicted_emotion and predicted_emotion != 'neutral':
            data = {"DateTime": datetime.datetime.now(), "Angry": predictions[0,0], "Disgust": predictions[0,1], "Happy": predictions[0,3], "Sad": predictions[0,4], "Surprise": predictions[0,5], "Neutral": predictions[0,5], "Maximum Predicted Emotion": emotion[np.argmax(predictions[0])]}
            df = df.append(data, ignore_index=True)</PRE>
        <h4 style="padding-top: 20px;"> Webserver</h4>
        <p>The graph below is run from the same code from the mirrors webserver but using test emotion data from a csv. The user is able to choose how many datapoints are displayed on the chart by inputting a number into the text field. By clicking on the different timescales, the data is dynamically grouped into different timescales and averaged to allow the user to view data trends over longer or shorter time periods. On the mirror's web interface this graph would update automatically when new data is collected and appended to the database.</p>
        <br>
        <br>
        <div class="graphcontainer">
            <canvas id="Chart2" width="60vw"></canvas>
            <div style="padding-top: 10px;">
                <br>
                <div style="float: left; padding-left: 40px;">
                    <h3 class="heading">Choose timescale</h3>
                    <br>
                    <input name="Days" onclick="choose(16)" type="button" value="Days" />
                    <input name="Hours" onclick="choose(13)" type="button" value="Hours" />
                    <input name="Minutes" onclick="choose(10)" type="button" value="Minutes" />
                    <input name="Seconds" onclick="choose(7)" type="button" value="Seconds" />
                </div>
                
                <div style="float: right; padding-right: 80px;">
                    <h3 class="heading">Enter number of datapoints to display</h3>
                    
                <br>
                    <input name="textbox2" id="userinput2" type="number" />
                    <input name="buttonExecute" onclick="setup2()" type="button" value="Apply" />

                </div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
            </div>
        </div>
        <p>The code snippets below show how the data is parsed from the local CSV file into a Javascript array and how the data is dynamically averaged once it has been split into subarrays of unique timestamps given the value of the user defined variable 'timescale'</p>
        <PRE class="code">
function graph2(timescale, datapoints) {
    Papa.parse("emotion_data.csv", {
        download: true,
        complete: function (results) {
            var data = results.dataS
            console.log("data parsed");

for (var i = 1; i < array.length - 1; i++) {
    array[i][0] = array[i][0].substring(0, array[i][0].length - parseFloat(timescale));
    array[i][0] = array[i][0].replace('-', '/');

for (var i = 0; i < uniquetimes.length; i++) {
    for (var j = cumulativecountarray[i]; j < cumulativecountarray[i + 1]; j++) {
        for (var k = 1; k < 6; k++) {
           average[i][k] += parseFloat(array[j][k]);
           average[i][k] = average[i][k] / countarray[i + 1];
</PRE>
        <h3 style="padding-top: 20px;"> Report (Please note the report also details the <a href="ISS_tracker">ISS tracker project)</a></h3>
        <!-- Slideshow container -->
        <div class="slideshow-container">

            <!-- Full-width images with number-->
            <div class="mySlides fade">
                <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/smart_mirror/report/1.png" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/smart_mirror/report/2.png" style=" width:100%">
            </div>

            <div class="mySlides fade">
                <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/smart_mirror/report/3.png" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/smart_mirror/report/4.png" style=" width:100%">
            </div>

            <div class="mySlides fade">
                <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/smart_mirror/report/5.png" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/smart_mirror/report/6.png" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/smart_mirror/report/7.png" style="width:100%">
            </div>

            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

        <!-- The dots/circles -->
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
            <span class="dot" onclick="currentSlide(6)"></span>
            <span class="dot" onclick="currentSlide(7)"></span>
        </div>
        <a href="https://olithompson.s3.eu-west-2.amazonaws.com/Media/rollercoaster_optimisation/FinalReport_Group9.pdf" target="_blank">
            <h2 class="link">Click here to download full report</h2>
        </a>
    </div>
</div>

<?php include('partials/footer.php') ?>
<script src="javascript/slideshow.js"></script>
<script src="javascript/Chart.bundle.min.js"></script>
<script src="javascript/papaparse.min.js"></script>
<script src="javascript/Chart2.js"></script>
<script src="javascript/navbar.js"></script>

</html>