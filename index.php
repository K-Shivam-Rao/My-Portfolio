<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Image Gallery Using PHP</title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" 
rel="stylesheet" 
integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" 
crossorigin="anonymous">
<style>

  .nav-wrapper{
	border-radius:5px 5px 0 0;
	grid-area:nav-wrapper;
	border-bottom: 1px solid black;
	display: flex;
	justify-content: space-between;
	align-items: center;
	background-color: blanchedalmond;
}

.dots-wrapper{
	display: flex;
	padding: 10px 5px;
}

#dot-1{
	background-color:  #FC6058;
}

#dot-2{
	background-color:  #FEC02F;
}

#dot-3{
	background-color:  #2ACA3E;
}

.browser-dot{
	background-color: black;
	height: 15px;
	width: 15px;
	border-radius: 50%;
	margin: 5px;

	-webkit-box-shadow: -1px 1px 3px -1px rgba(0,0,0,0.75);
	-moz-box-shadow: -1px 1px 3px -1px rgba(0,0,0,0.75);
	box-shadow: -1px 1px 3px -1px rgba(0,0,0,0.75);

}
#navigation a{
	color:var(--mainText);
  font-family: 'Silkscreen', cursive;
}


#navigation{
	margin:0;
	padding: 10px;
}

#navigation li{
	display: inline-block;
	margin-right: 5px;
	margin-left:5px;
}

</style>
</head>

<body>

<div class="nav-wrapper">

      <!-- Link around dots-wrapper added after tutorial video -->
      <a href="https://k-shivam-rao.github.io/My-Portfolio/index.html">
        <div class="dots-wrapper">
          <div id="dot-1" class="browser-dot"></div>
          <div id="dot-2" class="browser-dot"></div>
          <div id="dot-3" class="browser-dot"></div>
        </div>
      </a>
  
      <ul id="navigation">
        <li><a href="https://k-shivam-rao.github.io/My-Portfolio/index.html#contact">Contact</a></li>
  
      </ul>

    </div>

  <div class="container-fluid">
  <h3 class="text-center mt-3">DISPLAY ALL IMAGES FROM DIRECTORY/FOLDER</h3>
  <h5 class="text-center">Responsive Grid Image Gallery Using PHP AND BOOTSTRAP</h5>
    <?php
    // Enter your Directry/Folder Name I have Given Folder Name As Images
      $files = scandir('images/');
      echo "<div class='row'>";
      foreach ($files as $file) {
        if ($file !== "." && $file !== "..") {
          // Give Image source -- src='folder-name/$file'
          echo "<div class='col-lg-3 col-md-4 col-6'>
          <a href='images/$file' class='d-block mb-4 h-100'>
            <img class='img-fluid img-thumbnail' src='images/$file' alt='image' width='100%'>
          </a>
        </div>";
        }
      }
      echo "</div>";
    ?>
  </div>

</body>
</html>