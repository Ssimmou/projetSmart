<?php
session_start();
if($_SESSION["loggedIn"] != true) {
    echo("Access denied!");
    header('Location:login.php');//b db jbdhb jd
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Page Title</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link href="https://fonts.googleapis.com/css?family=Orbitron:900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div>
      <H1> PMV DASHBOARD</H1>
      <H3><a href="logout.php">log out</a></H3>
    </div>
    <div
      style="position: absolute; top:0; bottom: 0; left: 0; right: 0; margin: auto;"
    >
      <form method="post" enctype="multipart/form-data" action="page1.php">
        <div id="div1">
          <label for="sel1">Choose Widget For Block Number 1 </label>
          <select
            class="form-control"
            id="sel1"
            name="zone1"
            onchange="showDiv()"
            required
          >
            <option value="">please select an option</option>
            <option>Image</option>
            <option>Text</option>
            <option>Clock</option>
          </select>
          <input
            type="file"
            name="myFile"
            style="display : none ;"
            id="myFile"
          />
          <input
            type="text"
            id="myText"
            name="myText"
            style="display : none ;"
          />
        </div>

        <div id="div2">
          <label for="sel2">Choose Widget For Block Number 2 </label>
          <select
            class="form-control"
            id="sel2"
            name="zone2"
            onchange="showDiv2()"
            required
            ><option value="">please select an option</option>
            <option>Image</option>
            <option>Text</option>
            <option>Clock</option>
          </select>
          <input
            type="file"
            name="myFile2"
            style="display : none ;"
            id="myFile2"
          />
          <input
            type="text"
            id="myText2"
            name="myText2"
            style="display : none ;"
          />
        </div>
        <div id="div3">
          <label for="sel3">Choose Widget For Block Number 3 </label>
          <select
            class="form-control"
            id="sel3"
            name="zone3"
            onchange="showDiv3()"
            required
          >
            <option value="">please select an option</option>
            <option>Image</option>
            <option>Text</option>
            <option>Clock</option>
          </select>
          <input
            type="file"
            name="myFile3"
            style="display : none ;"
            id="myFile3"
          />
          <input
            type="text"
            id="myText3"
            name="myText3"
            style="display : none ;"
          />
        </div>
        <div id="div4">
          <label for="sel4">Choose Widget For Block Number 4 </label>
          <select
            class="form-control"
            id="sel4"
            name="zone4"
            onchange="showDiv4()"
            required
          >
            <option value="">please select an option</option>
            <option>Image</option>
            <option>Text</option>
            <option>Clock</option>
          </select>
          <input
            type="file"
            name="myFile4"
            style="display : none ;"
            id="myFile4"
          />
          <input
            type="text"
            id="myText4"
            name="myText4"
            style="display : none ;"
          />
        </div>
        <input id="submit" style="margin-left: 45%" type="submit" />
      </form>
      <script>
        var div1Text = "";
        var div2Text = "";
        var div3Text = "";
        var div4Text = "";

        function showDiv() {
          div1Text = document.getElementById("sel1").value;

          //alert(x);
          if (div1Text == "Image") {
            document.getElementById("myFile").style.display = "block";
          } else if (div1Text == "Text") {
            document.getElementById("myText").style.display = "block";
          } else if (div1Text == "please select an option") {
            alert("please select an option");
          }
        }
        function showDiv2() {
          div2Text = document.getElementById("sel2").value;
          //alert(div2Text);
          if (div2Text == "Image") {
            document.getElementById("myFile2").style.display = "block";
          } else if (div2Text == "Text") {
            document.getElementById("myText2").style.display = "block";
          }
        }
        function showDiv3() {
          div3Text = document.getElementById("sel3").value;
          //alert(div3Text);
          if (div3Text == "Image") {
            document.getElementById("myFile3").style.display = "block";
          } else if (div3Text == "Text") {
            document.getElementById("myText3").style.display = "block";
          }
        }
        function showDiv4() {
          div4Text = document.getElementById("sel4").value;
          //alert(div4Text);
          if (div4Text == "Image") {
            document.getElementById("myFile4").style.display = "block";
          } else if (div4Text == "Text") {
            document.getElementById("myText4").style.display = "block";
          }
        }
      </script>
    </div>
  </body>
</html>
