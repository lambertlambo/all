<?php 

session_start();

if(isset($_SESSION['username'])) {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        #pa{
            background-color: transparent;
            margin-left: 800px;
            margin-top: 1px;
            color: black;
            text-shadow:2px 1px 2px cyan;
            font-weight:bolder;
            font-size: 20px;
            padding-left: 160px;
        }
        #pa:hover{
            visibility: hidden;
            color: transparent;
        }
        #pa:hover::before{
            visibility: hidden;
            color: transparent;
        }
        #pa:hover::after{
            visibility: hidden;
            color: transparent;
        }
        .all{
            width: 100%;
            background:black;
            height: 10vh;
            margin-top:-3px;
            border-radius:10px;
            border:none;
        }
        a{
        margin-left:0.2em;
        text-decoration: none;
        font-size: 20px;
        font-family:system-ui,'Segoe UI','Open Sans', 'Helvetica Neue', sans-serif;
        padding-left: 1.2em;
        font-weight: bold;
        color: blue;
        }
        a:active{
            color: red;
            font-size: 23px;
            text-decoration: underline;
        }
        a:hover{
            cursor: pointer;
            font-style: italic;
        }
        .links{
            margin-left: 70em;
        }
        a:visited{
            color: rgb(29, 29, 95);
        }
        body{
            background-size: cover;
            position: inherit;
        background-repeat: no-repeat;
        background-position: center; 
        background-image: url("newbg44.jpg");
        animation: bosy 5s 1;
        overflow:hidden;
        }
@keyframes bosy {
    0%{
        background-size: cover;
            position: inherit;
        background-repeat: no-repeat;
        background-position: center; 
        background-image: url("newbg2.png");
    }
    50%{
        background-size: cover;
            position: inherit;
        background-repeat: no-repeat;
        background-position: center; 
        background-image: url("newbg3.png");  
    }
    100%{
        background-size: cover;
            position: inherit;
        background-repeat: no-repeat;
        background-position: center; 
        background-image: url("newbg4.jpg");  
    }
}
        .ig{
            width: 2em;
            height: 2em;
            border-radius: 1em;
           margin-top: 28.7em;
           margin-left: 62em;
            transition: 0.7s ease-out;
            animation: ig 4s 1;
        }
        @keyframes ig {
          0%{
            margin-top: 90em;
            margin-left: 62em;
          }  
          100%{
            margin-top: 28.7em;
            margin-left: 62em;
          }
        }
        .ig:hover{
            width: 2.3em;
            height: 2.3em;
            border-radius: 1.3;
            transition: 0.6s ease-in;
        }
    .logo{
        width: 10em;
        background-color: black;
        height: 3.5em;
        margin-top:-66px;
        border-radius: 1.2em;
        outline: 2px solid blue;
        outline-offset: -9px;
        border: 2px solid green;
        animation: logo 4s 1;
    }
    @keyframes logo {
        0%{
            transform: rotate(0deg);
            background-color: black;
        }
        100%{
            background-color: black;
            transition: 1s ease;
            background: conic-gradient(transparent,transparent,transparent,transparent,transparent,blue,transparent,transparent,transparent,black);
        }
    }
    .content{
        margin-top: 20px;
    }
    .content::after{
        animation: conte 4s infinite;
        content: '';
        color: red;
        font-size:40px;
        font-weight:bolder;
        margin-left: 50px;
    }
    @keyframes conte {
        0%{
content: 'MTY';
font-weight:bolder;
font-size:40px;
color: red;
background-color: black;
text-transform: uppercase;
font-size: 10px;
        }
        100%{
content: 'Video';
text-transform: uppercase;
background:conic-gradient(blue,black,transparent);
color: white;
background-color: black;
background: conic-gradient(pink,transparent,purple);
font-size:20px
    }
}
.a{
    display: flex;
position: absolute;
}
.a input{
    margin-left: 870px;
    transition: 2s ease;
    margin-top: 10px;
    padding-left: 30px;
    width: 56px;
    border-radius: 9px;
    height: 1.5em;
    background-color: darkolivegreen;
}
.a input:hover{
    width: 120px;
    height: 1.6em;
    transition: 2s ease;
}
::placeholder{
    margin-left: 10px;
    color: black;
}
.chat{
    margin-top: 23em;
            margin-left: 72em;
            animation: chat 4s 1;
            color:green;
            font-weight:bolder;
}

@keyframes chat {
    0%{
margin-left: 8em;
font-weight:bolder;
color:green;

    }
    100%{
        font-weight:bolder;
            color:green;
        margin-left: 72em;
            animation: chat 4s 1;  
    }
}
.changing{
        width: 500px;
        height: 200px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 30px;
        color: black;
        text-shadow: 2px 3px 1px white;
        margin-left: 440px;
      }
      button{
        color: blueviolet;
        background-color: black;
        border-radius: 20px;
      }
      
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <style>
        /* Set the video container to cover the whole viewport */
        #video-container {
            position: fixed;
            width: 50%;
            height: 50%;
            margin-left: 350px;
            margin-top: 200px;
            object-fit: cover;
            border-radius:30px;
            background: url("pexels-pixabay-268533.jpg");
            height: 50%;
            z-index: 0.1; /* Make sure it's behind other content */
             overflow: hidden;/* Hide any overflow */
        }
        /* Style the video element to cover the whole container */
        video {
            width: 95%;
            height: 95%;
            margin-left: 14px;
            margin-top: 10px;
            object-fit: cover;
            border-radius:30px;
        }

        
        #play-button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 24px;
            padding: 10px 20px;
            background-color: rgba(0, 0, 0, 0.5);
            color: #ffffff;
            border: 2px solid green;
            border-radius: 4px;
            cursor: pointer;
        }
    .others{
margin-left:170px;

    }
    </style>
</head>
<body background="bg.jpeg">
    <div id="video-container">   
        <video id="background-video" controls loop>
            <source src="kwikwi.mp4" type="video/mp4">
            <!-- Add additional source elements for different video formats -->
        </video>
        <button id="play-button" onclick="playVideo()">Play</button>
    </div>
        <script>
        function playVideo() {
            var video = document.getElementById("background-video");
            video.play();
            document.getElementById("play-button").style.display = "none";
        }
    </script>
    <div class="all">
        <div class="links">
        <a href="login.php">Login</a>
        <a href="logout.php">Log out</a>
    </div>
    <div class="others">
        <a href="https://igiti.net/" target="_blank" title="igiti.net">Agasobanuye</a>
        <a href="https://gomovies.sx/genre/horror" target="_blank" title='Horror'>Horror</a>
        <a href="https://gomovies.sx/genre/action" target="_blank" title='Action'>Action</a>
        <a href="https://gomovies.sx/genre/adventure" target="_blank">Adventure</a>
    </div>
   <a href="https://www.instagram.com/brilliant_250" target="_blank">
    <img title="Chat with us " class="ig" id="ig" src="instagram.jpeg" alt=""></a>
</div>
    <div class="a">
    <div class="logo">
        <div class="content"></div>
    </div>
    <div class="search">
        <input type="text" name="search" placeholder="search...." id="search" class="search" autocomplete='no'>
        <button type="button" name="button" id="button" onclick="performsearch()">Search</button>
        <p id="pa" class="paa"></p>
    </div>
</div>
<div id="changing" class="changing">

</div>
<div class="chat">
    <h3>Chat with us </h3>
</div>
<script>
    function performsearch(){
        var  hello = document.getElementById('search').value;
        var website="https://gomovies.sx/search/"+ encodeURIComponent(hello);
        window.location.href= website;
    }
    var a= document.getElementById('pa');
    var b =document.getElementById('search');
    b.addEventListener('mouseover',one);
    b.addEventListener('mouseout',two);
    a.addEventListener('mouseover',function(){
        a.innerHTML='';
    })
    function verify(){
         a.innerHTML='Search your movie'
    }
    function one(){
        setTimeout(verify,1000)
    }
    function exit(){
a.innerHTML=''
    }
    function two(){
        setTimeout(exit,1000)
    }
    window.onload = function () {
        var words = ["Welcome to the world of movies", "Our movies are in all categories", "ANIME,", "ACTION,","AND ALL GENRES OF YOUR WISH","YOUR WISH IS OUR CONCERN"];
        var wordIndex = 0;
        var div = document.getElementById("changing");
        var intervalId;
        var durationInSeconds = 20; 

        intervalId = setInterval(function () {
          if (wordIndex >= words.length) {
            clearInterval(intervalId); // Stop the interval
            return;
          }

          div.textContent = words[wordIndex];
          wordIndex++;
        }, 2000);

        setTimeout(function () {
          clearInterval(intervalId); // Stop the interval after the duration
        }, durationInSeconds * 1000);
      };
</script>

    <?php
     $used2='654';
    $used='lambo';
    $useda ="01921";
    $used1="ert12";
    $host='localhost';
    $username='root';
    $used3=$used.$used1.$useda.$used2;
    $database='tri';
    $a = "connected";
    $conn=mysqli_connect($host,$username,$used3,$database);
    if(!$conn){
        // echo "failed to connect";
    }else{
        // echo $a;
    }
    ?>
</body>
</html>
<?php
} else {
    echo "<script>
        window.alert('Access Denied, Please first Login!!');
        window.location.href = 'login.php';
    </script>";
}

?>
