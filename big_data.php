<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('partials/head.php') ?>
    <title>Big Data</title>
</head>

<div class="background" ;>
    <?php include('partials/banner.php') ?>
    <div class="wrapper">
        <div>
            <!-- Heading -->
            <h1 style="text-align: center; padding-top: 30px;">Big Data</h1>
            <div class="tagcontainer">
                <h2>Machine Learning</h2>
                <h2>Python</h2>
                <h2>Data Analysis</h2>
            </div>
            <!-- First Bullet Points -->
            <ul class="headingbullets">
                <li>We conducted an explanatory and predictive analysis on a dataset using machine learning with Python.</li>
                <li>We cleaned, reduced and transformed the data set and used a non-linear decision tree classifier with an accuracy, precision and recall of 70%, 75% and 90%.
                </li>
            </ul>
            <img class="hero" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/big_data/decisiontree.png" alt="Heaven Scent">
            <h2>Method</h2>
            <p style="margin-top: 20px;">
                We sourced a data set about Las Vegas hotels in order to find out what factors affected hotel ratings. We used general linear regression to identify which of the categorical factors had the moset effect on a hotel's score. The dataset had 20 features.</p>
            <PRE class="code">glm_binom = sm.GLM(data.endog, data.exog, family=sm.families.Binomial())
res = glm_binom.fit()</PRE>
            <img class="hero" style="padding-bottom: 30px;" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/big_data/glmtable.png">
            <p style="margin-top: 5px;">A A non linear decision tree was implemented through 8 iterations. This gave the Maximum Depth as 4 and the Minimum Impurity Decrease as 0.01. </p>
            <PRE class="code">x_train_h, x_val_h, x_test_h = np.array(train_h[predictors]), np.array(val_h[predictors]) ,
 np.array(test_h[predictors])
y_train_h, y_val_h, y_test_h = np.array(train_h[target]), np.array(val_h[target]) , np.array(test_h[target]) 

r8 = tree.DecisionTreeClassifier(max_depth = 7, min_impurity_decrease= 0.005) # Our classification tree
r8 = r8.fit(x_train_h, y_train_h)
print('1. Train set accuracy: %.3f'%accuracy_score(y_train_h,r8.predict(x_train_h)))</PRE>
            <h2>Report</h2>
        </div>
        <!-- Slideshow container -->
        <div class="slideshow-container">

            <!-- Full-width images with number-->
            <div class="mySlides fade">
                <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/big_data/1.png" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/big_data/2.png" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/big_data/3.png" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/big_data/4.png" style="width:100%">
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
            <span class="dot" onclick="currentSlide(4)"></span>


        </div>
        <a href="https://olithompson.s3.eu-west-2.amazonaws.com/Media/big_data/BigDataGroup9-LasVegas.pdf" target="_blank" download="Oli_Thompson_Big_Data_Report">
            <h2 class="link">Click here to download full report</h2>
        </a>
    </div>
</div>
<?php include('partials/footer.php') ?>
<script src="../javascript/slideshow.js"></script>
<script src="../javascript/navbar.js"></script>

</html>