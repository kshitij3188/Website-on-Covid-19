<?php include_once 'config/init.php';?>
<!DOCTYPE html>
<html>
<head>
    <title>WP Project</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="theme-color" content="#ffffff">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://bootswatch.com/4/slate/bootstrap.css">
    <link rel="stylesheet" href="css/st.css">
    <style>
        
    input[type=text] {
        width: 450px;
        box-sizing: border-box;
        border: 2px solid #1e1e30;
        border-radius: 6px;
        font-size: 16px;
        background-color: #1e1e30;
        padding: 12px 20px 12px 20px;
    }

    form {
        margin-top: 50px;
        margin-left: 400px;
    }

    body {
        font-family: 'Ubuntu', sans-serif;
        color: gray;
    }

    #p1{
        margin-bottom: 0px;
        letter-spacing: 1px;
        text-align: center;
        font-size: 15px;
        color: #BDBDBD;
        }

    #p2{
        margin-top: 0px;
        text-align: center;
        font-size: 12px;
        letter-spacing: 1px;
        color:  #4c75f2;
    }

    .sidenav {
        width: 130px;
        position: fixed;
        background-color: #1e1e30;
        padding: 70px 0;
    }

    .sidenav a {
        padding: 30px 12px 10px 16px;
        text-align: center;
        text-decoration: none;
        font-size: 22px;
        color: gray;
        display: block;
    }

    .sidenav a:hover {
        color: #4c75f2;
    }

    .main {
        margin-left: 140px; 
        font-size: 28px;
        padding: 15px 10px;
    }

    .main ::placeholder { 
        color:rgba(65, 69, 82); 
    }

    #about {
        font-size : 25px;
        border-radius : 10px;
        color : gray;
        padding: 10px;
        float: left;
    }

    #about:hover {
        color: #4c75f2;
    }

    #search {
        float: left;
        height: 15px;
        
    }

    #up{
        margin-left: 150px;
        text-align: center;
        margin-top: 20px;
    }

    * {
    box-sizing: border-box;
    }

    .column {
        float: left;
        width: 25%;
        padding: 10px;
        height: 200px; 
    }

    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    .row {
        margin-left: 30%;
        margin-right: 18%;
        text-align: center;
        font-size: small;
    }

    .inline{
        display: inline;
    }

    button{
        font-size: 20px;
        background-color: #161625;
        border: none;
        color: gray;
    }

    .border{
        background-color: #6C757D10;
        border-radius: 6px;
        padding: 0px 0px 1px 6px;
    }

    #s{
        margin: 10px;
    }

    .pad{
        margin: 8px;
    }

    img {
        margin-left: 43.5%;
    }

    </style>
</head>

<body style = "background-color:#161625">
    <!-- The Modal -->
    <div id="myModal" class="modal">
      <!-- Modal content -->
      <div class="modal-content">
        <div class="modal-body">
            <span class="close">&times;</span>
            <p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.</p>
            <p>Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.  Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.</p>
            <p>The best way to prevent and slow down transmission is to be well informed about the COVID-19 virus, the disease it causes and how it spreads. Protect yourself and others from infection by washing your hands or using an alcohol based rub frequently and not touching your face. </p>
            <p>The COVID-19 virus spreads primarily through droplets of saliva or discharge from the nose when an infected person coughs or sneezes, so it’s important that you also practice respiratory etiquette</p>
        </div>
      </div>
    </div>



    <div id = "side" class="sidenav">
    <p id = "p1">COVID19</p>
        <p id = "p2">INDIA</p>
        <a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019" target="_blank"><i class="fas fa-viruses"></i></a>
        <a href="#"></a>
        <a href="homepage.php"><i class="fas fa-home"></i></a>
        <a href="#" id="about" style="margin: 20px; margin-left: 44px; font-size: x-large;"><i class="far fa-question-circle"></i></a>
        <a href="index.php" style="font-size: x-large;"><i class="far fa-hospital"></i></a>
        <a href="donate.php"><i class="fas fa-hand-holding-usd"></i></a>
    </div>

    <button style="color: #FDB813; margin-left: 97%;" onclick="sun()" id = "sun">&#9728;</button>
    <button style="color: gray; margin-left: 97%;" onclick="moon()" id = "moon"><i class="far fa-moon fa-xs"></i></button>

    <h2 style="margin-left: 51%; padding-top: 30px;">DONATE</h2>
    <br><br>
    <p style="margin-left: 15%;">The world has never faced a crisis like COVID-19. The pandemic is impacting communities everywhere.
        Help fight covid 19 by donating to save lives!
    <h3 style="margin-left: 43%;">Would you like To Donate?</h3>
    <div class="c-donate-new__tabs"></div>
      <br><br>  

    <h3 style="margin-left: 47%;">Enter the Amount</h3>
    </p>
     
    <input class="inp" id = "donate" style="background-color:#1e1e30; margin-left: 38%; color : #808080;" type="text"  placeholder="e.g. 1000" />
                <br>
                <br>
                  <a href="https://www.akshayapatra.org/covid-relief-services" id = "donate_btn" class="btn btn-lg " style="color:gray; background-color: #1E1E30;border:None;border-radius:3px;margin-left: 50%;">Donate Now</a>
              </div>
          </div>
  <br><br>
    <img src="data:image/jpeg;base64,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" alt="image" >
  </figure>
 
    <footer style="margin-left: 140px;">
        <br>
        <div style="text-align: center;">
        <p style="color: #4c75f2; letter-spacing: 0.8px; font-size: 15px; margin-bottom: 0px;"><strong>COVID19INDIA</strong></p>
        <p style="font-size: 12px; letter-spacing: 0.4px; word-spacing: 0.8px;">We stand with everyone fighting on the frontlines</p>
        <br>
        <a href="https://github.com/" target="__blank"><i class="fab fa-github fa-lg" style="color: gray;"></i></a>
        <a href="https://www.instagram.com/" target="__blank"><i class="fab fa-instagram fa-lg" style="color: rgb(131,58,180)"></i></a>
        <a href="https://www.facebook.com/" target="__blank"><i class="fab fa-facebook-square fa-lg" style="color: #3b5998"></i></a>
        <a href="https://twitter.com/" target="__blank"><i class="fab fa-twitter fa-lg" style="color:rgba(29,161,242,1.00)"></i></a>
        <a href="mailto:poojamangal15@.com" target="__blank"><i class="fas fa-paper-plane fa-lg" style="color:rgba(50, 41, 180, 0.918)"></i></a>
        </div>
    </footer>

</body>

<script>
    function sun(){
     document.body.style.backgroundColor  = "white";  
     document.getElementById("side").style.backgroundColor = "#F6F6F7";
     document.getElementById("donate").style.backgroundColor = "#F6F6F7";
     document.getElementById("sun").style.backgroundColor = "white";
     document.getElementById("moon").style.backgroundColor = "white";
     document.getElementById("donate_btn").style.backgroundColor = "#6C757D10";
     alt_gray();
 }

 // entire page is again black
 function moon(){
     document.body.style.backgroundColor  = "#161625";  
     document.getElementById("side").style.backgroundColor = "#1e1e30";
     document.getElementById("donate").style.backgroundColor = "#1E1E30";
     document.getElementById("sun").style.backgroundColor = "#161625";
     document.getElementById("moon").style.backgroundColor = "#161625";
     document.getElementById("donate_btn").style.backgroundColor = "#1E1E30";
     alt_black();
 }
</script>
</html>
