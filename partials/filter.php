<p style="padding-bottom: 5px;" class="mobilehidetext"> Here you can find all my personal and university projects. Please use the drop down filter or search box below to sort through my projects by skillset.</p>
<div class="dropdown">
    <button onclick="myFunction()" id="dropbtn" class="dropbtn"><img class="dropdowngraphic" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/Misc/dropdowngraphic.png">Filter</button>
    
    <?php if(find_file() != '/projects') { echo('
    <a href="/projects">
        <button style="margin-bottom: 25px;" class="dropbtn"><img class="dropdowngraphic" src="https://olithompson.s3.eu-west-2.amazonaws.com/Media/Misc/closemenugraphic.png">Remove Filter</button>
    </a>
    ');}
    ?>

    <div class="searchcontainer">
        <form method="post" action="search.php">
            <div style="float: right;">
                <input class="search" name="query" type="text" onkeyup="show()" placeholder="Search..." required>
                <p style="margin: 1px; display: none" id="searchDropdown">e.g. Python, SQL etc</p>
            </div>
        </form>
    </div>
    <div id="myDropdown" class="dropdown-content">
        <div class="dropdownhover">
            <a href="filter_software">
                <h2>Software</h2>
            </a>
            <div class="dropdown-content-hover">
                <a href="filter_computer_vision">Computer Vision</a>
                <a href="filter_machine_learning">Machine Learning</a>
                <a href="filter_robotics">Robotics</a>
                <a href="filter_web_and_network">Web and Network</a>
            </div>
        </div>
        <h3>|</h3>
        <div class="dropdownhover">
            <a href="filter_electronics">
                <h2>Electronics</h2>
            </a>
            <div class="dropdown-content-hover">
                <a href="filter_pcb_design">PCB Design</a>
                <a href="filter_signal_processing">Signal Processing</a>
                <a href="filter_control">Control</a>
                <a href="filter_mechatronics">Mechatronics</a>
            </div>
        </div>
        <h3>|</h3>
        <div class="dropdownhover">
            <a href="filter_mechanical">
                <h2>Mechanical</h2>
            </a>
            <div class="dropdown-content-hover">
                <a href="filter_technical_drawing">Technical Drawings</a>
                <a href="filter_analytical_engineering">Analytical Engineering</a>
                <a href="filter_cad">CAD</a>
                <a href="filter_cfd">CFD</a>
                <a href="filter_fea">FEA</a>
            </div>
        </div>
        <h3>|</h3>

        <div class="dropdownhover">
            <a href="filter_design">
                <h2>Design</h2>
            </a>
            <div class="dropdown-content-hover">
                <a href="filter_product_design">Product Design</a>
                <a href="filter_systems_design">Systems Design</a>
                <a href="filter_prototyping">Prototyping</a>
                <a href="filter_ux">UX</a>
            </div>
        </div>
    </div>
</div>

<script>
    function show() {
        console.log("activated")
        var x = document.getElementById("searchDropdown");
        if (x.style.display === "none") {
            x.style.display = "block";
        }
    }

    $(window).click(function() {
        var x = document.getElementById("searchDropdown");
        if (x.style.display === "block") {
            x.style.display = "none";
        }
    });

    $("#menucontainer").click(function(event) {
        event.stopPropagation();
    });
</script>
