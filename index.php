<?php
	session_start();
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ruta del Sillar</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Sen&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">

	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine0/style.css" />
	<!--script type="text/javascript" src="engine0/jquery.js"></script-->
	<!-- End WOWSlider.com HEAD section --></head>
<body>

<div >
	
	<div>
		<div id="slider" style="margin-top: 90px">
	<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
	<div id="wowslider-container0">
	<div class="ws_images"><ul>
		<li><img src="data0/images/img1.jpg" alt="img1" title="img1" id="wows0_0"/></li>
		<li><img src="data0/images/img2.jpg" alt="img2" title="img2" id="wows0_1"/></li>
		<li><a href="http://wowslider.net"><img src="data0/images/img3.jpg" alt="bootstrap slider" title="img3" id="wows0_2"/></a></li>
		<li><img src="data0/images/img4.jpg" alt="img4" title="img4" id="wows0_3"/></li>
	</ul></div>
	<div class="ws_thumbs">
<div>
		<a href="#" title="img1"><img src="data0/tooltips/img1.jpg" alt="" /></a>
		<a href="#" title="img2"><img src="data0/tooltips/img2.jpg" alt="" /></a>
		<a href="#" title="img3"><img src="data0/tooltips/img3.jpg" alt="" /></a>
		<a href="#" title="img4"><img src="data0/tooltips/img4.jpg" alt="" /></a>
	</div>
</div>
<div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">##</a>##</div>
	<div class="ws_shadow"></div>
	</div>	
	<script type="text/javascript" src="engine0/wowslider.js"></script>
	<script type="text/javascript" src="engine0/script.js"></script>
	<!-- End WOWSlider.com BODY section -->
			
		</div>
	</div>
</div>


	<?php include("layouts/_main-header.php"); ?>
	<div class="main-content">
		<div class="content-page">
			<div class="title-section">Productos destacados</div>

			<div class="products-list" id="space-list">
			</div>
		</div>
	</div>
	<?php include("layouts/_footer.php"); ?>
	<script type="text/javascript" src="js/main-scripts.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$.ajax({
				url:'servicios/producto/get_all_products.php',
				type:'POST',
				data:{},
				success:function(data){
					console.log(data);
					let html='';
					for (var i = 0; i < data.datos.length; i++) {
						html+=
						'<div class="product-box">'+
							'<a href="producto.php?p='+data.datos[i].codpro+'">'+
								'<div class="product">'+
									'<img src="assets/products/'+data.datos[i].rutimapro+'">'+
									'<div class="detail-title">'+data.datos[i].nompro+'</div>'+
									'<div class="detail-description">'+data.datos[i].despro+'</div>'+
									'<div class="detail-price">'+formato_precio(data.datos[i].prepro)+'</div>'+
								'</div>'+
							'</a>'+
						'</div>';
					}
					document.getElementById("space-list").innerHTML=html;
				},
				error:function(err){
					console.error(err);
				}
			});
		});
		function formato_precio(valor){
			//10.99
			let svalor=valor.toString();
			let array=svalor.split(".");
			return "S/. "+array[0]+".<span>"+array[1]+"</span>";
		}
	</script>
</body>
</html>