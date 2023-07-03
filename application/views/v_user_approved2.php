

<!DOCTYPE html>
<html lang="en">
<head>
  <style>* {
	padding: 0;
	margin: 0;
	box-sizing: border-box;
}
body {
	display: flex;
	align-items: center;
	justify-content: center;
	overflow: hidden;
	min-height: 100vh;
	background: #00beac;
}
.container {
	height: 350px;
	width: 350px;
	background: #4ed4c6;
	position: relative;
	top: 150px;
    right: 570px;
	border-radius: 50%;
	overflow: hidden;
	box-shadow: 0 0 10px gray;
	transition: 3s all;
}
.container div {
	height: 50%;
	width: 200px;
	clip-path: polygon(100% 0, 50% 100%, 0 0);
	transform: translateX(-50%);
	transform-origin: bottom;
	position: absolute;
	left: 21%;
	display: flex;
	align-items: center;
	justify-content: center;
	font-size: 20px;
	font-family: monospace;
	font-weight: 1000;
	color: #008276;
	writing-mode: vertical-rl;
}
.container .one:nth-child(1) {
	background: #baf4ee;
	left: 50%;
}
.container .one:nth-child(2) {
	background: #4ed4c6;
	transform: rotate(60deg);
}
.container .one:nth-child(3) {
	background: #baf4ee;
	transform: rotate(120deg);
}
.container .one:nth-child(4) {
	background: #4ed4c6;
	transform: rotate(180deg);
}
.container .one:nth-child(5) {
	background: #baf4ee;
	transform: rotate(240deg);
}
.container .one:nth-child(6) {
	background: #4ed4c6;
	transform: rotate(300deg);
}
.container .one:nth-child(7) {
	background: #4ed4c6;
	transform: rotate(330deg);
}
.container .one:nth-child(8) {
	background: #4ed4c6;
	transform: rotate(360deg);
}
.mid {
	height: 25px;
	width: 25px;
	top: 310px;
    right: 730px;
	border-radius: 50%;
	position: absolute;
	background: #008276;
}
#spin {
	height: 100px;
	width: 200px;
	background: #4ed4c6;
	position: absolute;
	margin-top: 170px;
    right: 650px;
	font-size: 30px;
	color: white;
	font-weight: 1000;
	letter-spacing: 4px;
	border: 1px solid white;
	cursor: pointer;
	box-shadow: 0 5px 10px gray;
	transition: 0.2s all;
}
#spin:hover {
	box-shadow: none;
}
.stoper {
	height: 50px;
	width: 40px;
	background: #ffd600;
	position: absolute;
	clip-path: polygon(100% 0, 50% 100%, 0 0);
	margin-top: -200px;
    right: 720px;
}

</style>

  <!-- jQuery -->
  <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="<?php echo base_url(); ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body class="">

  		<div class="container">
			<div class="one" data-name="two">Motor</div>
			<div class="one" data-name="two">TV</div>
			<div class="one" data-name="three">Kipas</div>
			<div class="one" data-name="four">jkll</div>
			<div class="one" data-name="five">Support</div>
			<div class="one" data-name="six">Coba Lagi</div>
      	</div>
		
		  <div id="spin">
                <div id="inner-spin"></div>
            </div>
      <span class="mid"></span>
      <button id="spin">Nama</button>
      <div class="stoper"></div>
        <div id="txt"></div>
    </div>
	
	<a href="javascript:void(0);" id="save" type="submit" class="btnx" style="padding: 9px 17px; font-size: 14px;" tabindex="3">Export</a>
<script>
    
//set default degree (360*5)
var degree = 1800;
//number of clicks = 0
var clicks = 0;
var position=[];
var position_name=[];
var position_left=[];

$(document).ready(function(){
	
	
	jQuery("#save").click(function() {
        
		let container = document.querySelector(".container");
          let nama = document.getElementById("spin");
          let number = Math.ceil(Math.random() * 10000);

          let flash = document.querySelector(".container div");
        //   if(data.spin == '1'){
        //     $('#modaldatang').modal('show');
        //   }else{
            // nama.innerHTML = data.nama;
            container.style.transform = "rotate(" + number + "deg)";
            number += Math.ceil(Math.random() * 10000);
			$('#wheel').each(function(){
			var t = $(this);
			console.log('ans',$('.container').data('name'));
			});
        //   }
      });
	
});//DOCUMENT READY 



</script>
</body>
</html>
