<!DOCTYPE html>
<html lang="en">
<head>
  <style>      
      label {
        font-size: 20px;
        font-weight: 140px;
        color: white;
       font-family: "Lucida Console", "Courier New", monospace;
      }
      SORU{

        font-weight:40px ;
      }
      
      </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://d3js.org/d3.v6.min.js"></script>
    <link rel ="stylesheet" href="style.css" >
</head>
<body>
<div class="navbar">
<ul>

    <li class="active" ><a href="#"> <i class="fas fa-home"></i>  Home</a></li>
    <li><a href="#"> <i   class="fas fa-plus-square">    </i> up to date</a> </li>
    <li><a href="#"><i   class="fas fa-user">    </i> for student</a></li>
    <li><a href="#"><i   class="fas fa-user-plus">    </i> for mentor  </a>    </li>
    <li><a href="#"><i   class="fas fa-map-marker-alt">    </i>  nearby </a>    </li>
    <li><a href="#"><i   class="fas fa-star">    </i> top   </a>    </li>
    <li><a href="#"><i   class="fas fa-book-open">    </i> Blog   </a>    </li>

</ul>    



</div>



<?php

include"tutd.php";
?>
<form action=""  method="post" id="form" >

<br>soru=1<br>                                                                 <svg  width="100" height="26">  
<rect width="300" height="100" style="fill:rgb(0,0,255);stroke-width:3;stroke:rgb(0,0,0)" />
                                                                          </svg> 
  <input type="radio" id="no" name="q1" value="no"  class="form">
  <label for="no">no</label><br>
  <input type="radio" id="other" name="q1" value="other"  class="form">
  <label for="other">other</label><br>
  <br>
  
  <br>
  
<br>
<!-- burada id ler bozuk sanırım tekrar kontrol lazım  -->
  <input type="radio" id="yes" name="q2" value="1"  class="form">    <br><br><br><br> <svg width="600" height="100">
                                                                     <rect width="<?($q1_yes_satir*100)?>  " height="100" stroke="black" fill="blue" stroke-width="10" />
                                                                     <g color="purple">
                                                                      </svg>
  <label for="1">   1 year</label><br>
  <input type="radio" id="no" name="q2" value="2"  class="form">
  <label for="2">2 year</label><br>  
  <input type="radio" id="other" name="q2" value="3 & 3+"  class="form">
  <label for="3 ">3  more year</label> <br>
  
<br>
<br>
<br>
    <br><label  class="SORU"> katıldınız mı? <br><br></label>
  <input type="radio" id="yes" name="q3" value="yes"  class="form">
  <label for="yes">  yes</label><br>
  <input type="radio" id="no" name="q3" value="no"  class="form">
  <label for="no"> no</label><br>
  <input type="radio" id="kararsızız" name="q3" value="kararsızız"  class="form">
  <label for="kararsızız"> kararsısız </label> <br>
 
<br>
<br>
  <input type=submit  value="gönder"  class="form">
</form>
<br>

</body>
 <script  src="graph.js"></script>
</html>