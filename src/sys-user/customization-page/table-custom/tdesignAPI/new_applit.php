<link href='https://fonts.googleapis.com/css?family=Nosifer|League+Script|Yellowtail|Permanent+Marker|Codystar|Eater|Molle:400italic|Snowburst+One|Shojumaru|Frijole|Gloria+Hallelujah|Calligraffitti|Tangerine|Monofett|Monoton|Arbutus|Chewy|Playball|Black+Ops+One|Rock+Salt|Pinyon+Script|Orbitron|Sacramento|Sancreek|Kranky|UnifrakturMaguntia|Creepster|Pirata+One|Seaweed+Script|Miltonian|Herr+Von+Muellerhoff|Rye|Jacques+Francois+Shadow|Montserrat+Subrayada|Akronim|Faster+One|Megrim|Cedarville+Cursive|Ewert|Plaster' rel='stylesheet' type='text/css'>

<link href="tdesignAPI/css/api.css?v=<?php echo time(); ?>" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<script type="text/javascript" src="tdesignAPI/js/html2canvas.js"></script>

<script src="tdesignAPI/js/jquery.form.js"></script>
<script src="tdesignAPI/js/mainapp.js?v=<?php echo time(); ?>"></script>
<link rel="stylesheet" href="tdesignAPI/css/jquery-ui.css" />
<script src="tdesignAPI/js/jquery-ui.js"></script>

<script type="text/javascript">
	function changeval() {
		$total = parseInt($("#small").val()) + parseInt($("#medium").val()) + parseInt($("#large").val()) + parseInt($("#xlarge").val()) + parseInt($("#xxlarge").val());
		//alert($total);
		$('.small').val($("#small").val());
		$('.medium').val($("#medium").val());
		$('.large').val($("#large").val());
		$('.xlarge').val($("#xlarge").val());
		$('.total').val($total);
	}

	function changeval2() {
		$total = parseInt($("#small2").val()) + parseInt($("#medium2").val()) + parseInt($("#large2").val()) + parseInt($("#xlarge2").val()) + parseInt($("#xxlarge2").val());
		//alert($total);
		$('.small').val($("#small2").val());
		$('.medium').val($("#medium2").val());
		$('.large').val($("#large2").val());
		$('.xlarge').val($("#xlarge2").val());
		$('.total').val($total);
	}

	function b() {
		$('#custom_text').toggleClass('bold_text');
		$("#bold_button").toggleClass('box-shadow', '0 0 10px inset #3c3c3c');
	}

	function i() {
		$('#custom_text').toggleClass('italic_text');
	}

	function changeFont(_name) {
		$('#custom_text').css("font-family", _name);
	}

	function changeFontSize(_size) {
		$('#custom_text').css("font-size", _size);
	}

	function changeColor(_color) {
		$('#custom_text').css("color", _color);
	}
</script>
<div class="container design_api_container">
	<div class='design_api'>
		<!--=============================================================-->
		<div id="menu">
			<div class="menu_option sel_type" title="Choose Door">

			</div>
			<div class="menu_option sel_color" title="Choose Color">
				<i class="fa fa-paint-brush fa-3x"></i>

			</div>
			<div class="menu_option sel_art" title="Choose Style">
				<i class="fa fa-puzzle-piece fa-3x"></i>
			</div>
			<div class="menu_option sel_custom_icon" title="Upload Image">
				<span class="glyphicon glyphicon-open"></span>
			</div>
		</div>
		<!--=============================================================-->
		<div id='options'>
			<div class="T_type">
				<div id="radio1" ><img src="tdesignAPI/images/menu_icons/submenu/chairone.png" width="100%" height="100%" />
				</div>
				<div id="radio2" ><img src="tdesignAPI/images/menu_icons/submenu/chairtwo.png" width="100%" height="100%" />
				</div>
				<div id="radio3" ><img src="tdesignAPI/images/menu_icons/submenu/chairthree.png" width="100%" height="100%" />
				</div>
				<div id="radio4" ><img src="tdesignAPI/images/menu_icons/submenu/chairfour.png" width="100%" height="100%" />
				</div>
				<div id="radio5" ><img src="tdesignAPI/images/menu_icons/submenu/chairfive.png" width="100%" height="100%" />
				</div>
			</div>

			<div class="color_pick">
				<div class="color_radio_div" id="colorone"></div>
				<div class="color_radio_div" id="colortwo"></div>
				<div class="color_radio_div" id="colorthree"></div>
				<div class="color_radio_div" id="colorfour"></div>
				<div class="color_radio_div" id="colorfive"></div>
				<div class="color_radio_div" id="colorsix"></div>
				<div class="color_radio_div" id="colorseven"></div>
				<div class="color_radio_div" id="coloreight"></div>
				<div class="color_radio_div" id="colornine"></div>
				<div class="color_radio_div" id="colorten"></div>
				<div class="color_radio_div" id="coloreleven"></div>
				<div class="color_radio_div" id="colortwelve"></div>
				<div class="color_radio_div" id="colorthirteen"></div>
				<div class="color_radio_div" id="colorfifteen"></div>
				<div class="color_radio_div" id="colorsixteen"></div>
			</div>
			<div class="default_samples">
				<?php
					$dir    = 'tdesignAPI/images/Images';
					$files1 = scandir($dir);
					//$files2 = scandir($dir, 1);
					foreach ($files1 as &$value) {
						if (strpos($value,'.png') !== false) {
							//echo 'true';
							echo '<div class="sample_icons"><img src="tdesignAPI/images/Images/' .$value. '" width="100%" height="100%" /></div>' ;
						}elseif(strpos($value,'.') === false){
							echo '<div class="sample_icons"><img src="tdesignAPI/images/folder.png" width="100%" height="100%" />' .$value. '</div>' ;
						}
							//echo "Value: $value<br />\n";
					}
				?>
			</div>
			<div class="custom_icon">
				<form id="form1" runat="server">
					<span class="btn btn-default btn-file"> Browse
						<input type='file' id="imgInp" />
					</span>

				</form>
			</div>

		</div>
		<!--=============================================================-->
		<!--=========================preview start====================================-->

		<div id='preview_t'>
			<div id="preview_front">
				<div class="front_print">

				</div>
			</div>
			<div id="preview_back">
				<div class="back_print">

				</div>
			</div>

		</div>
		<!--=============================================================-->
		<!--======================view start=======================================-->

		<div id='view_mode'>
			<div  class="mode"><img id="o_front" src="tdesignAPI/images/product/chair-one/1-color/1-color_front.png" width="100%" height="80%" />TABLE
			</div>
			<div  class="mode"><img id="o_back" src="tdesignAPI/images/product/chair-one/1-color/1-color_back.png" width="100%" height="80%" />CHAIR
			</div>
			<div class="mode">
				<i class="fa fa-binoculars fa-4x preview_images" id="preview_images" data-toggle="modal" data-target=".bs-example-modal-lg"></i>Preview
			</div>
			<div class="menu_option sel_text" title="Text">
				<i class="fa fa-font fa-3x"></i>Label

			</div>
		</div>
		<!--=====================View Ends========================================-->
		<div id="overview">
			<div class="">

				<button type="button" class="btn btn-primary btn-block preview_images"  data-toggle="modal" data-target=".bs-example-modal-lg">
					Proceed
				</button>
				<button type="button" class="btn btn-primary btn-block" onclick="myHelp()" >
					Help
				</button>

				<div class="pricing">
					<table style="width: 100%;">
						<tr style="border-bottom: 1px solid #ffffff;">
							<th><h4><b>Price List</b></h4></th>
						</tr>

						<tr style="border-bottom: 1px solid #ffffff;">
							<th><h5><b>Size</b></h5></th>
						</tr>
						<tr style="border-bottom: 1px solid #ffffff;">
							<td><p>2 Seater</p></td>
							<td><p><b>3600.00</b></p></td>
						</tr>
						<tr style="border-bottom: 1px solid #ffffff;">
							<td><p>4 Seater</p></td>
							<td><p><b>5100.00</b></p></td>
						</tr>
						<tr style="border-bottom: 1px solid #ffffff;">
							<td><p>6 Seater</p></td>
							<td><p><b>5800.00</b></p></td>
						</tr>
						<tr style="border-bottom: 1px solid #ffffff;">
							<td><p>8 Seater</p></td>
							<td><p><b>6500.00</b></p></td>
						</tr>
						<tr style="border-bottom: 1px solid #ffffff;">
							<td><p>10 Seater</p></td>
							<td><p><b>8100.00</b></p></td>
						</tr>

						<tr style="border-bottom: 1px solid #ffffff;">
							<th><h5><b>Type(Wood)</b></h5></th>
						</tr>
						<tr style="border-bottom: 1px solid #ffffff;">
							<td><p>Akasya</p></td>
							<td><p><b>+800.00</b></p></td>
						</tr>
						<tr style="border-bottom: 1px solid #ffffff;">
							<td><p>Mahogany</p></td>
							<td><p><b>+500.00</b></p></td>
						</tr>
			
						<tr>
							<td colspan="2"><p style="font-size: .9rem; color: #FF0000; margin-top: 10px;">Note: Expect additional charges from the shop depending on the carved design.</p></td>
						</tr>
						<tr>
							<td colspan="2"><p style="font-size: .9rem; color: #FF0000; margin-top: 10px;">Note: The price of the chair will be given by the shop upon your conversation through message.</p></td>
						</tr>
					</table>
				</div>
				<div class="custom_font">

				<select id="fs" onchange="changeFont(this.value);">
					<option value="arial">Arial</option>
					<option value="Nosifer, cursive">Nosifer</option>
					<option value="League Script, cursive">League Script</option>
					<option value="Yellowtail, cursive">Yellowtail</option>
					<option value="Permanent Marker, cursive">Permanent Marker</option>
					<option value="Codystar, cursive">Codystar</option>
					<option value="'Eater', cursive">Eater</option>
					<option value="Molle, cursive">Molle</option>
					<option value="Snowburst One, cursive">Snowburst One</option>
					<option value="Shojumaru, cursive">Shojumaru</option>
					<option value="Frijole, cursive">Frijole</option>
					<option value="Gloria Hallelujah, cursive">Gloria Hallelujah</option>
					<option value="Calligraffitti, cursive">Calligraffitti</option>
					<option value="Tangerine, cursive">Tangerine</option>
					<option value="Monofett, cursive">Monofett</option>
					<option value="Monoton, cursive">Monoton</option>
					<option value="Arbutus, cursive">Arbutus</option>
					<option value="Chewy, cursive">Chewy</option>
					<option value="Playball, cursive">Playball</option>
					<option value="Black Ops One, cursive">Black Ops One</option>
					<option value="'Rock Salt', cursive">Rock Salt</option>
					<option value=" 'Pinyon Script', cursive">Pinyon Script</option>
					<option value="'Orbitron', sans-serif">Orbitron</option>
					<option value="'Sacramento', cursive">acramento</option>
					<option value="'Sancreek', cursive">Sancreek</option>
					<option value="'Kranky', cursive">Kranky</option>
					<option value="'UnifrakturMaguntia', cursive">UnifrakturMaguntia</option>
					<option value="'Creepster', cursive">Creepster</option>
					<option value="'Pirata One', cursive">Pirata One</option>
					<option value=" 'Seaweed Script', cursive">Seaweed Script</option>
					<option value=" 'Miltonian', cursive">Miltonian</option>
					<option value=" 'Herr Von Muellerhoff', cursive">Herr Von Muellerhoff</option>
					<option value=" 'Rye', cursive"> 'Rye'</option>
					<option value=" 'Jacques Francois Shadow', cursive">Jacques Francois Shadow</option>
					<option value=" 'Montserrat Subrayada', sans-serif">Montserrat Subrayada</option>
					<option value=" 'Akronim', cursive">Akronim</option>
					<option value=" 'Faster One', cursive">Faster One</option>
					<option value=" 'Megrim', cursive">Megrim</option>
					<option value=" 'Cedarville Cursive', cursive">Cedarville Cursive</option>
					<option value=" 'Ewert', cursive">Ewert</option>
					<option value="'Plaster', cursive">Plaster</option>
					<option value="verdana">Verdana</option>
					<option value="impact">Impact</option>
					<option value="ms comic sans">MS Comic Sans</option>
				</select>
				<input type="color" name="favcolor" onChange="changeColor(this.value);" placeholder="Color Name" />
				<div class="font_styling">

					<span id="bold_button" onclick="b();"><b>B</b></span>
					<span id="italic_button" onclick="i();"><i>I</i></span>

					<select id="font_size" onchange="changeFontSize(this.value);">
						<?php
							for($i=10;$i<=140;$i+=2){
						?>
							
							<option value="<?php echo $i; ?>px"><?php echo $i; ?>px</option>
						<?php		
							}
						?>
					</select>
				</div>
				<textarea id="custom_text" style="color: #000000;" placeholder="Put label..."></textarea>
				<button type="button" class="btn btn-primary" id="apply_text">
					Apply
				</button>

			</div>
			</div>
		</div>
	</div>

	<div class="layer">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close close_img" data-dismiss="modal">
					<span aria-hidden="true">&times;</span><span class="sr-only close_img">Close</span>
				</button>
				<h4 class="modal-title">Submit Form</h4>
			</div>
			<div class="modal-body">

				<div id="image_reply"></div>
				<div class="modal-footer">
					<div class="row">
						<form method="POST" enctype="multipart/form-data" id="imageFileForm" action="../customizePlacement.php">
							<div class="col-md-1">
								<button type="button" class="btn btn-default close_img" data-dismiss="modal">
									Close
								</button>
							</div>
							<div class="col-md-2">
							</div>

							<div class="col-md-6">
								<center>
									<table class="table">

										<tr>
											<td><b>Size</b></td>
											<td><b></b></td>
											<td><b>Type(Wood)</b></td>
											<td><b>Qty</b></td>
										</tr>
										<tr>
											<td colspan="2">
											<select name="size" id="small2" onchange="changeval2()" class="form-control small input-md">
												<option value="">Select...</option>
												<option value="2 Seater">2 Seater</option>
												<option value="4 Seater">4 Seater</option>
												<option value="6 Seater">6 Seater</option>
												<option value="8 Seater">8 Seater</option>
												<option value="10 Seater">10 Seater</option>
											</select>
											</td>

											<td>
											<select name="type" id="large2" onchange="changeval2()" class="form-control large input-md">
												<option value="">Select...</option>
												<option value="Akasya">Akasya</option>
												<option value="Mahogany">Mahogany</option>
											</select>
											</td>

											<td>
											<input id="xlarge2" onchange="changeval2()"  name="qty" type="number" value="0" class="form-control xlarge input-md" min=0 max=20 />
											</td>
										</tr>
										<tr>
											<td colspan="4">
												<input id="xxlarge2" onchange="changeval2()" placeholder="Write a note..."  name="note" type="text" class="form-control xxlarge mw-100" />
											</td>
										</tr>

								</center>
								</table>
							</div>
							<div class="col-md-2">
								<input type="hidden" name="img_front" id="img_front" value="" />
								<input type="hidden" name="img_back" id="img_back" value="" />
								<button type="submit" name="door" class="btn btn-primary">
									Save
								</button>
							</div>
						</form>

					</div>
				</div>
			</div>

		</div>
	</div>

</div>
<script>
	function readURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e) {
				image_icon(e.target.result);
			}

			reader.readAsDataURL(input.files[0]);
		}
	}


	$("#imgInp").change(function() {
		readURL(this);
	});

</script>

