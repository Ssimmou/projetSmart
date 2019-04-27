<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Orbitron:900" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="css/style.css">
<style>
  html, body { height: 100%; padding: 0; margin: 0; }
div { width: 50%; height: 50%; float: left; position: relative ;}
#div1 { background: #000; }
#div2 { background: #000; }
#div3 { background: #000; }
#div4 { background: #000; }
div img{
    height: 100%;
   width: 100%;
}

@font-face { font-family:"sevenseg"; src: url("sevenseg.ttf") format("truetype"); }

</style>
</head>
<body>
<div  id="div1">
    <?php
if(isset($_POST['zone1'])){
  if($_POST['zone1']=="Image"){
    $imageData = file_get_contents($_FILES['myFile']['tmp_name']);
    echo sprintf('<img src="data:image/png;base64,%s" />', base64_encode($imageData));
  }else if($_POST['zone1']=="Clock")
  {
      echo "
      <div style='position: absolute; top: 30%;' id='app'></div>
      <script src='https://npmcdn.com/react@15.3.0/dist/react.min.js'></script>
      <script src='https://npmcdn.com/react-dom@15.3.0/dist/react-dom.min.js'></script>
      <script src='js/index.js'></script>
      ";
    
  }else{    
      echo '<marquee  style = "width = 100% ; height = 100%; color : #FF0000 ;font-size:30vw; font-family:sevenseg, sans-serif;" behavior="scroll" direction="left">';
      echo $_POST["myText"];
      echo '</marquee>';
      // echo "<p style = 'width = 100% ; height = 100%;font-size: 4vw;'>SOUFIANE SIMMOU</p> ";
  }
}


?>
</div>

<div id="div2">
<?php
if(isset($_POST['zone2'])){
  if($_POST['zone2']=="Image"){
    $imageData = file_get_contents($_FILES['myFile2']['tmp_name']);
    echo sprintf('<img src="data:image/png;base64,%s" />', base64_encode($imageData));
  }else if($_POST['zone2']=="Clock")
  {
    echo "
    <div style='position: absolute; top: 30%;' id='app'></div>
    <script src='https://npmcdn.com/react@15.3.0/dist/react.min.js'></script>
    <script src='https://npmcdn.com/react-dom@15.3.0/dist/react-dom.min.js'></script>
    <script src='js/index.js'></script>
    ";
    
  }else{    
    echo '<marquee  style = "width = 100% ; height = 100%; color : #FF0000 ;font-size:30vw; font-family:sevenseg, sans-serif;" behavior="scroll" direction="left">';
    echo $_POST["myText2"];
    echo '</marquee>';
    // echo "<p style = 'width = 100% ; height = 100%;font-size: 4vw;'>SOUFIANE SIMMOU</p> ";
}
}


?>
</div>

<div id="div3">
<?php
if(isset($_POST['zone3'])){
  if($_POST['zone3']=="Image"){
    $imageData = file_get_contents($_FILES['myFile3']['tmp_name']);
    echo sprintf('<img src="data:image/png;base64,%s" />', base64_encode($imageData));
  }else if($_POST['zone3']=="Clock")
  {
    echo "
    <div style='position: absolute; top: 30%;' id='app'></div>
    <script src='https://npmcdn.com/react@15.3.0/dist/react.min.js'></script>
    <script src='https://npmcdn.com/react-dom@15.3.0/dist/react-dom.min.js'></script>
    <script src='js/index.js'></script>
    ";
    
  }else{    
    echo '<marquee  style = "width = 100% ; height = 100%; color : #FF0000 ;font-size:30vw; font-family:sevenseg, sans-serif;" behavior="scroll" direction="left">';
    echo $_POST["myText3"];
    echo '</marquee>';
    // echo "<p style = 'width = 100% ; height = 100%;font-size: 4vw;'>SOUFIANE SIMMOU</p> ";
}
}


?>
</div>

<div id="div4">
<?php
if(isset($_POST['zone4'])){
  if($_POST['zone4']=="Image"){
    $imageData = file_get_contents($_FILES['myFile4']['tmp_name']);
    echo sprintf('<img src="data:image/png;base64,%s" />', base64_encode($imageData));
  }else if($_POST['zone4']=="Clock")
  {
    echo "
    <div style='position: absolute; top: 30%;' id='app'></div>
    <script src='https://npmcdn.com/react@15.3.0/dist/react.min.js'></script>
    <script src='https://npmcdn.com/react-dom@15.3.0/dist/react-dom.min.js'></script>
    <script src='js/index.js'></script>
    ";
    
  }else{    
      echo '<marquee  style = "width = 100% ; height = 100%; color : #FF0000 ;font-size:30vw; font-family:sevenseg, sans-serif;" behavior="scroll" direction="left">';
      echo $_POST["myText4"];
      echo '</marquee>';
      // echo "<p style = 'width = 100% ; height = 100%;font-size: 4vw;'>SOUFIANE SIMMOU</p> ";
  }
}


?>
</div>