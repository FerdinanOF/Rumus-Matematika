<!DOCTYPE html>
<html>
<head>
	<title>Hasil Balok</title>
	<style type="text/css">
        .container{
        width:545px;
        height:225px;
        padding:10px;
        background:grey;
        position: fixed;
        top: 50%;
        left: 50%;
        margin-top: -250px;
        margin-left: -300px;
      }
      </style>
</head>
<body background="matik.jpg" style="background-size: 1400px">
	<div class="container"> 
            <div style="border : 2px solid white; width : 420px; padding: 0 60px 0px">
                <h1 style="color: white;">Hasil Luas Permukaan Balok<b></h1>
                <div style="margin: 30px" class="row"> 
                          <div style="height: 100px;">
                          	<h2 style="color: white;"><br><br>
                          	<?php  
							    @$panjang = $_POST['panjang']; 
							    @$lebar = $_POST['lebar']; 
							    @$tinggi = $_POST['tinggi']; 
							    @$luas = (2*$panjang* $lebar)+(2*$panjang*$tinggi)+(2*$lebar*$tinggi); 
							    echo "Luas = ".$luas." cm <sup>2</sup>";  
							?>
							</h2>
                          </div>
                </div>
            </div>
	</div>
</body>
</html>
