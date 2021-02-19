<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="jquery.bxslider.css">
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="jquery.bxslider.min.js"></script>

	<script>
    $(document).ready(function(){
      $('.slider').bxSlider({
      	constrol : true
      });
    });
  </script>
  <style type="text/css">
  	.box{
  		width: 300px;
  		margin: 0px auto;
  	}
  </style>
</head>
<body>
	<div class="box">
		<div class="slider">
	    <div>
	    	<img src="1.jpg" height="200" width="300">
	    </div>
	    <div>
	    	<img src="2.jpg" height="200" width="300">
	    </div>
	    <div>
	    	<img src="3.jpg" height="200" width="300">
	    </div>
	    
	 </div>
	</div>
</body>
</html>