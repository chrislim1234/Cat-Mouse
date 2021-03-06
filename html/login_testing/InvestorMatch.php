<!DOCTYPE html>
<html>
<title>Investor Match</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="signin1.css">
<link rel="stylesheet" href="home.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    /* The popup form - hidden by default */
/* The popup form - hidden by default */

/* Add some hover effects to buttons */

#myinput {
  background: linear-gradient(to right, #9228d8 0%, #9228d8 50%, #fff 50%, #fff 100%);
  border: solid 1px #9228d8;
  border-radius: 8px;
  height: 7px;
  width: 356px;
  outline: none;
  transition: background 450ms ease-in;
  -webkit-appearance: none;
}

.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
.imagetop{
    height: 100px;
    width: auto;
    border-radius: 0 0 7% 7%;
    padding: 0;
    border-color: lightblue;
    border-style:solid;
    background-color:lightblue !important;
}

input[type="range"] {
  -webkit-appearance: none;
  -moz-appearance: none;
  width: 300px;
  height: 5px;
  padding: 0;
  border-radius: 2px;
  outline: none;
  cursor: pointer;
}


/*Chrome thumb*/

input[type="range"]::-webkit-slider-thumb {
  -webkit-appearance: none;
  -moz-appearance: none;
  -webkit-border-radius: 5px;
  /*16x16px adjusted to be same as 14x14px on moz*/
  height: 16px;
  width: 16px;
  border-radius: 5px;
  background: #e7e7e7;
  border: 1px solid #c5c5c5;
}


/*Mozilla thumb*/

input[type="range"]::-moz-range-thumb {
  -webkit-appearance: none;
  -moz-appearance: none;
  -moz-border-radius: 5px;
  height: 14px;
  width: 14px;
  border-radius: 5px;
  background: #e7e7e7;
  border: 1px solid #c5c5c5;
}


/*IE & Edge input*/

input[type=range]::-ms-track {
  width: 300px;
  height: 6px;
  /*remove bg colour from the track, we'll use ms-fill-lower and ms-fill-upper instead */
  background: transparent;
  /*leave room for the larger thumb to overflow with a transparent border */
  border-color: transparent;
  border-width: 2px 0;
  /*remove default tick marks*/
  color: transparent;
}


/*IE & Edge thumb*/

input[type=range]::-ms-thumb {
  height: 14px;
  width: 14px;
  border-radius: 5px;
  background: #e7e7e7;
  border: 1px solid #c5c5c5;
}


/*IE & Edge left side*/

input[type=range]::-ms-fill-lower {
  background:#9228d8;
  border-radius: 2px;
}


/*IE & Edge right side*/

input[type=range]::-ms-fill-upper {
  background: #c5c5c5;
  border-radius: 2px;
}


/*IE disable tooltip*/

input[type=range]::-ms-tooltip {
  display: none;
}

input[type="text"] {
  border: none;
}

.range-field input[type=range]::-moz-range-thumb{background:#AA0029;}

html, body, h1, h2, h3, h4, h5 {font-family: "Open Sans", sans-serif}
</style>
<body>
<!-- Navbar -->
<div class="top">
  <div class="bar">
     <a class="baritem"></a>
     <a class="logodiv" title="Logo">
         <img src="logo.png" class="logo" alt="Logo">
       </a>
   <a href="InvestorHome.php" class="baritem" title="Home"><p class="word">Home<p></a>
   <a href="InvestorMatch.php" class="baritem" title="Matches"><p class="word">Matches<p></a>
   <a href="InvestorFavorite.php" class="baritem" title="Favorites"><p class="word">Favorites<p></a>
   <a href="InvestorSetting.php" class="baritem" title="Setting"><p class="word">Setting</p></a>
   <a href="InvestorAccount.php" class="baritem" title="Myaccount" style = "position: absolute; right: 16%; top: 0%"><p class="word">My Account<p></a>
    <a href="logout.php" class="baritem" style = "position: absolute; right: 10%" title="Logout"><p class="word">Sign out</p></a>
  </div>
</div>

<div class="w3-container w3-content" style="max-width:2000px; margin-top:80px; overflow: scroll;">    
    <!-- The Grid -->
    <div class="w3-row">
      <!-- Left Column -->
      <div class="w3-col m3" style = "margin-top: 2%; margin-left: 5%; max-height: 150vh; overflow: scroll;">
        <!-- Profile -->
        <div class="demo cursor" onclick="currentSlide(1)">
            <img src="byteimg.png" alt="profile" style="border-radius: 5% 5% 0 0;; display: block;margin-left: 0;margin-right: 0; margin-top: 0; width: 100%">
            <div class="imagetop"> 
                <div style="width: 30%; height: 30%; float:left; height:100px;">
                    <img src="salogo.png" alt="profile" style="display: block;margin-left: auto;margin-right: auto; width: 100%;">
                    </div>
                <div style="width: 50%; float:left; height:100px; margin-top: 5%; line-height: 70%;">
                        <h3>Squareark</h3>
                        <p>Ecommerce</p>
                </div>
            </div>
        </div>
        <br><br>
        <!-- Profile 2 -->
        <div class="demo cursor" onclick="currentSlide(2)">
            <img src="byteimg.png" alt="profile" style="border-radius: 5% 5% 0 0;; display: block;margin-left: 0;margin-right: 0; margin-top: 0; width: 100%">
            <div class="imagetop"> 
                <div style="width: 30%; height: 30%; float:left; height:100px;">
                    <img src="salogo.png" alt="profile" style="display: block;margin-left: auto;margin-right: auto; width: 100%;">
                    </div>
                <div style="width: 50%; float:left; height:100px; margin-top: 5%; line-height: 70%;">
                        <h3>Squareark</h3>
                        <p>Ecommerce</p>
                </div>
            </div>
        </div>
        <br><br>
        <div class="demo cursor" onclick="currentSlide(3)">
            <img src="byteimg.png" alt="profile" style="border-radius: 5% 5% 0 0;; display: block;margin-left: 0;margin-right: 0; margin-top: 0; width: 100%">
            <div class="imagetop"> 
                <div style="width: 30%; height: 30%; float:left; height:100px;">
                    <img src="salogo.png" alt="profile" style="display: block;margin-left: auto;margin-right: auto; width: 100%;">
                    </div>
                <div style="width: 50%; float:left; height:100px; margin-top: 5%; line-height: 70%;">
                        <h3>Squareark</h3>
                        <p>Ecommerce</p>
                </div>
            </div>
        </div>
        </div>
        <div class = "w3-col m1"><br><br></div> 
        <div class = "w3-col m7" style="margin-left: 5%; max-height: 150vh; height: 200vh; overflow: scroll; margin-right: 5%;">
            <div class="mySlides">
                <div class="numbertext" style="background-color:lightblue; border-radius: 5%; padding:0px 5px;">
                    <!--grid-->
                    <table style="width:95%; border-collapse:separate; margin-left: 8%;
                    border-spacing:3em;">
                        <tr>
                            <th>
                                <div style="width: 300px; height: 300px; background-color: #ffffff;
                                -webkit-box-shadow: 0 0 5px 2px darkgray; background-color: #FFFFFF;
          -moz-box-shadow: 0 0 5px 2px darkgray;
          box-shadow: 0 0 5px 2px darkgray;">
                                    <img src="doc1.png" style="width:95%; height: 85%">
                                </div>
                            </th>
                            <th>
                                <div style="width: 300px; height: 300px; background-color: #ffffff;
                                -webkit-box-shadow: 0 0 5px 2px darkgray; background-color: #FFFFFF;
          -moz-box-shadow: 0 0 5px 2px darkgray;
          box-shadow: 0 0 5px 2px darkgray;">
                                    <img src="doc2.png" style="width:95%; height: 85%">
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <div style="width: 300px; height: 300px; background-color: #ffffff;
                                -webkit-box-shadow: 0 0 5px 2px darkgray; background-color: #FFFFFF;
          -moz-box-shadow: 0 0 5px 2px darkgray;
          box-shadow: 0 0 5px 2px darkgray;">
                                    <img src="doc3.png" style="width:95%; height: 85%">
                                </div>
                            </th>
                            <th>
                                <div style="width: 300px; height: 300px; background-color: #ffffff;
                                -webkit-box-shadow: 0 0 5px 2px darkgray; background-color: #FFFFFF;
          -moz-box-shadow: 0 0 5px 2px darkgray;
          box-shadow: 0 0 5px 2px darkgray;">
                                    <img src="doc4.png" style="width:95%; height: 85%">
                                </div>
                            </th>
                        </tr>
                    </table>
                    <div style="margin-left: 10%; margin-right: 5%; margin-top: 0%;">
                    <h1>Scorecard</h1>
                    <p>Slide to see your custom startup valuation.</p>
                    <div class="w3-row">
                        <!-- Row 1 -->
                        <div class="w3-col m2">
                            Risk Type
                        </div>
                        <div class="w3-col m3">
                            Weight (1-10)
                        </div>
                        <div class="w3-col m5">
                            Compared to Others
                        </div>
                        <div class="w3-col m2">
                            Value 1-10
                        </div>
                    </div>
                    <br><br>
                    <div class="w3-row">
                        <!-- Row 2 -->
                        <div class="w3-col m2">
                            Product
                        </div>
                        <div class="w3-col m3">
                            <input type="number" id="num1"  value="5" placement="100" style="margin-top: 0%; color: #9228d8; width: 40%; height: 50%; font-size: 14px;"/>
                        </div>
                        <form>
                            <div class="w3-col m5">
                                <!--<input type="range" id="1" value="50" min="10" max="100" step="1" />-->
                                <input type="range" name="ageInputName" id="ageInputId" value="50" min="1" max="100" oninput="ageOutputId.value = ageInputId.value">
                        </div>
                        <div class="w3-col m2">
                            <input name="ageOutputName" value="50" id="ageOutputId" style="margin-top: 0%; color: #9228d8; width: 40%; height: 50%; font-size: 14px;"></input>
                        </div>
                        </form>
                    </div>
                    <br><br>
                    <div class="w3-row">
                        <!-- Row 3 -->
                        <div class="w3-col m2">
                            Market
                        </div>
                        <div class="w3-col m3">
                            <input type="number" id="num1"  value="5" placement="100" style="margin-top: 0%; color: #9228d8; width: 40%; height: 50%; font-size: 14px;"/>
                        </div>
                        <form>
                            <div class="w3-col m5">
                                <input type="range" name="ageInputName" id="ageInputId" value="50" min="1" max="100" oninput="ageOutputId.value = ageInputId.value">
                        </div>
                        <div class="w3-col m2">
                            <input name="ageOutputName" value="50" id="ageOutputId" style="margin-top: 0%; color: #9228d8; width: 40%; height: 50%; font-size: 14px;"></input>
                        </div>
                        </form>
                    </div>
                    <br><br>
                    <div class="w3-row">
                        <!-- Row 4 -->
                        <div class="w3-col m2">
                            Competition
                        </div>
                        <div class="w3-col m3">
                            <input type="number" id="num1"  value="5" placement="100" style="margin-top: 0%; color: #9228d8; width: 40%; height: 50%; font-size: 14px;"/>
                        </div>
                        <form>
                            <div class="w3-col m5">
                                <input type="range" name="ageInputName" id="ageInputId" value="50" min="1" max="100" oninput="ageOutputId.value = ageInputId.value">
                        </div>
                        <div class="w3-col m2">
                            <input name="ageOutputName" value="50" id="ageOutputId" style="margin-top: 0%; color: #9228d8; width: 40%; height: 50%; font-size: 14px;"></input>
                        </div>
                        </form>
                    </div>
                    <br><br>
                    <div class="w3-row">
                        <!-- Row 5 -->
                        <div class="w3-col m2">
                            Team
                        </div>
                        <div class="w3-col m3">
                            <input type="number" id="num1"  value="5" placement="100" style="margin-top: 0%; color: #9228d8; width: 40%; height: 50%; font-size: 14px;"/>
                        </div>
                        <form>
                            <div class="w3-col m5">
                                <input type="range" name="ageInputName" id="ageInputId" value="50" min="1" max="100" oninput="ageOutputId.value = ageInputId.value">
                        </div>
                        <div class="w3-col m2">
                            <input name="ageOutputName" value="50" id="ageOutputId" style="margin-top: 0%; color: #9228d8; width: 40%; height: 50%; font-size: 14px;"></input>
                        </div>
                        </form>
                    </div>
                        </form>
                        <br><br><br>
                    <div class="w3-row">
                        <div class="w3-col m2">
                            Total Valuation: 
                        </div>
                        <div class="w3-col m3">
                            <input type="number" id="total" style = "width: 80%">
                        </div>
                        <div class="w3-col m3">
                            <button class="gsbutton" type="button">Submit!</button>
                        </div>
                        <br><br><br><br>
                    </div>
                </div>
            </div>

              </div>
            
              <div class="mySlides">
                <div class="numbertext"></div>
                <form name="registrationForm">
                    <input type="range" name="ageInputName" id="ageInputId" value="24" min="1" max="100" oninput="ageOutputId.value = ageInputId.value">
                    <output name="ageOutputName" id="ageOutputId">24</output>
                </form>
                <img src="images/page2.jpg" style="width:100%">
                <img src="images/page2.jpg" style="width:100%">
              </div>

              <div class="mySlides">
                <div class="numbertext" style="background-color:lightblue; border-radius: 5%; padding:0px 5px;">
                    <!--grid-->
                    <table style="width:95%; border-collapse:separate; margin-left: 8%;
                    border-spacing:3em;">
                        <tr>
                            <th>
                                <div style="width: 300px; height: 300px; border-color: black; border-style: solid;">
                                    <img src="doc1.png" style="width:50%; height: 50%">
                                </div>
                            </th>
                            <th>
                                <div style="width: 300px; height: 300px; border-color: black; border-style: solid;">
                                    <img src="doc2.png" style="width:50%; height: 50%">
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <div style="width: 300px; height: 300px; border-color: black; border-style: solid;">
                                    <img src="doc3.png" style="width:50%; height: 50%">
                                </div>
                            </th>
                            <th>
                                <div style="width: 300px; height: 300px; border-color: black; border-style: solid;">
                                    <img src="doc4.png" style="width:50%; height: 50%">
                                </div>
                            </th>
                        </tr>
                    </table>
                    <div style="margin-left: 10%; margin-right: 5%; margin-top: 0%;">
                    <h1>Scorecard</h1>
                    <p>Slide to see your custom startup valuation.</p>
                    <div class="w3-row">
                        <!-- Row 1 -->
                        <div class="w3-col m2">
                            Risk Type
                        </div>
                        <div class="w3-col m3">
                            Weight (1-10)
                        </div>
                        <div class="w3-col m5">
                            Compared to Others
                        </div>
                        <div class="w3-col m2">
                            Value 1-10
                        </div>
                    </div>
                    <br><br>
                    <div class="w3-row">
                        <!-- Row 2 -->
                        <div class="w3-col m2">
                            Product
                        </div>
                        <div class="w3-col m3">
                            <input type="number" id="num1">
                        </div>
                        <div class="w3-col m5">
                        </div>
                        <div class="w3-col m2">
                            <input type="range" name="ageInputName" id="ageInputId" value="24" min="1" max="100" oninput="ageOutputId.value = ageInputId.value">
    <output name="ageOutputName" id="ageOutputId">24</output>
                        </div>
                    </div>
                    <br><br>
                    <div class="w3-row">
                        <!-- Row 3 -->
                        <div class="w3-col m2">
                            Market
                        </div>
                        <div class="w3-col m3">
                            <input type="number" id="num1">
                        </div>
                        <div class="w3-col m5">
                            <input type="range" min="1" max="100" value="50" class="slider" id="myRange3" style = "width: 90%"> 
                        </div>
                        <div class="w3-col m2">
                            <span id="demo"></span>
                            <script>
                                var slider = document.getElementById("myRange");
                                var output = document.getElementById("demo");
                                output.innerHTML = slider.value; // Display the default slider value
                    
                                // Update the current slider value (each time you drag the slider handle)
                                slider.oninput = function() {
                                output.innerHTML = this.value;
                            }
                              </script>
                        </div>
                    </div>
                    <br><br>
                    <div class="w3-row">
                        <!-- Row 4 -->
                        <div class="w3-col m2">
                            Competition
                        </div>
                        <div class="w3-col m3">
                             <input type="number" id="num1">
                        </div>
                        <div class="w3-col m5">
                            <input type="range" min="1" max="100" value="50" class="slider" id="myRange4" style = "width: 90%"> 
                        </div>
                        <div class="w3-col m2">
                            <span id="demo"></span>
                            <script>
                                var slider = document.getElementById("myRange");
                                var output = document.getElementById("demo");
                                output.innerHTML = slider.value; // Display the default slider value
                    
                                // Update the current slider value (each time you drag the slider handle)
                                slider.oninput = function() {
                                output.innerHTML = this.value;
                            }
                              </script>
                        </div>
                    </div>
                    <br><br>
                    <div class="w3-row">
                        <!-- Row 5 -->
                        <div class="w3-col m2">
                            Team
                        </div>
                        <div class="w3-col m3">
                            <input type="number" id="num5">
                        </div>
                        <div class="w3-col m5">
                            <input type="range" min="1" max="100" value="50" class="slider" id="myRange" style = "width: 90%"> 
                        </div>
                        <div class="w3-col m2">
                            <span id="demo"></span>
                            <script>
                                var slider = document.getElementById("myRange");
                                var output = document.getElementById("demo");
                                output.innerHTML = slider.value; // Display the default slider value
                    
                                // Update the current slider value (each time you drag the slider handle)
                                slider.oninput = function() {
                                output.innerHTML = this.value;
                            }
                              </script>
                        </div>
                        <br><br><br>
                    <div class="w3-row">
                        <div class="w3-col m2">
                            Total Valuation: 
                        </div>
                        <div class="w3-col m3">
                            <input type="number" id="total" style = "width: 80%">
                        </div>
                        <div class="w3-col m3">
                            <button type="button">Submit!</button>
                        </div>
                        <br><br><br><br>
                    </div>
                </div>
            </div>

              </div>
            </div>
            
                
        </div>
    </div>
</div>

<footer style="position: relative; margin-top: 0%;">
    <img src="foot.png" class="foot" alt="foot" style="display: block;margin-left: auto;margin-right: auto; width: 100%;">
</footer>
</body>


<script>
    var slideIndex = 1;
    showSlides(slideIndex);
    
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
    
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }
    
    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
    }

    /**
 * Sniffs for Older Edge or IE,
 * more info here:
 * https://stackoverflow.com/q/31721250/3528132
 */
function isOlderEdgeOrIE() {
  return (
    window.navigator.userAgent.indexOf("MSIE ") > -1 ||
    !!navigator.userAgent.match(/Trident.*rv\:11\./) ||
    window.navigator.userAgent.indexOf("Edge") > -1
  );
}

function valueTotalRatio(value, min, max) {
  return ((value - min) / (max - min)).toFixed(2);
}

function getLinearGradientCSS(ratio, leftColor, rightColor) {
  return [
    '-webkit-gradient(',
    'linear, ',
    'left top, ',
    'right top, ',
    'color-stop(' + ratio + ', ' + leftColor + '), ',
    'color-stop(' + ratio + ', ' + rightColor + ')',
    ')'
  ].join('');
}

function updateRangeEl(rangeEl) {
  var ratio = valueTotalRatio(rangeEl.value, rangeEl.min, rangeEl.max);

  rangeEl.style.backgroundImage = getLinearGradientCSS(ratio, '#9228d8', '#c5c5c5');
}

function initRangeEl() {
  var rangeEl = document.querySelector('input[type=range]');
  var textEl = document.querySelector('input[type=text]');

  /**
   * IE/Older Edge FIX
   * On IE/Older Edge the height of the <input type="range" />
   * is the whole element as oposed to Chrome/Moz
   * where the height is applied to the track.
   *
   */
  if (isOlderEdgeOrIE()) {
    rangeEl.style.height = "20px";
    // IE 11/10 fires change instead of input
    // https://stackoverflow.com/a/50887531/3528132
    rangeEl.addEventListener("change", function(e) {
      textEl.value = e.target.value;
    });
    rangeEl.addEventListener("input", function(e) {
      textEl.value = e.target.value;
    });
  } else {
    updateRangeEl(rangeEl);
    rangeEl.addEventListener("input", function(e) {
      updateRangeEl(e.target);
      textEl.value = e.target.value;
    });
  }
}

initRangeEl();
    </script>

</html>