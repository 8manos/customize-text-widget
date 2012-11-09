				<label>Title</label>
				<input class="widefat" id="ktitle" name="ktitle" type="text" value="<?php if($ktitle)echo $ktitle; ?>" />
				<label>Min Range</label>
				<input class="widefat" id="kminrange" name="kminrange" type="text" value="<?php if($kminrange) echo $kminrange; ?>" />
				<label>Max Range</label>
				<input class="widefat" id="kmaxrange" name="kmaxrange" type="text" value="<?php if($kmaxrange) echo $kmaxrange; ?>" />
				<label>Css Selector</label>
				<input class="widefat" id="kcselector" name="kcselector" type="text" value="<?php if($kcselector) echo $kcselector; ?>" />
				<label>Base Color 1</label>
				<input class="widefat" id="kbasecolor1" name="kbasecolor1" type="text" value="<?php if($kbasecolor1) echo $kbasecolor1; ?>" />
				<label>Base Color 2</label>
				<input class="widefat" id="kbasecolor2" name="kbasecolor2" type="text" value="<?php if($kbasecolor2) echo $kbasecolor2; ?>" />
				<label>Base Color 3</label>
				<input class="widefat" id="kbasecolor3" name="kbasecolor3" type="text" value="<?php if($kbasecolor3) echo $kbasecolor3; ?>" />
				<label>Base Color 4</label>
				<input class="widefat" id="kbasecolor4" name="kbasecolor4" type="text" value="<?php if($kbasecolor4) echo $kbasecolor4; ?>" />
				<label>Base Color 5</label>
				<input class="widefat" id="kbasecolor5" name="kbasecolor5" type="text" value="<?php if($kbasecolor5) echo $kbasecolor5; ?>" />
				<label>Fonts</label>
				<select class="widefat" name="ktxtfonts[]" multiple="multiple"> 
					<option value="Verdana" <?php if($kfont1 == 'Verdana' || $kfont2 == 'Verdana' || $kfont3 == 'Verdana' ){?> selected="selected" <?php } ?>>Verdana</option>
					<option value="Times New Roman" <?php if($kfont1 == 'Times New Roman'|| $kfont2 == 'Times New Roman' || $kfont3 == 'Times New Roman' ){?> selected="selected" <?php } ?>>Times New Roman</option>
					<option value="Courier" <?php if($kfont1 == 'Courier' || $kfont2 == 'Courier' || $kfont3 == 'Courier' ){?> selected="selected" <?php } ?>>Courier</option>
					<option value="Tahoma" <?php if($kfont1 == 'Tahoma' || $kfont2 == 'Tahoma' || $kfont3 == 'Tahoma' ){?> selected="selected" <?php } ?>>Tahoma</option>
					<option value="Arial" <?php if($kfont1 == 'Arial' || $kfont2 == 'Arial' || $kfont3 == 'Arial' ){?> selected="selected" <?php } ?>>Arial</option>
				</select>	
				<input type="hidden" name="kwidget[submit]" value="1" />