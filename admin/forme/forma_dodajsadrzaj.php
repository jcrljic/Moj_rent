<?php
<form action="php_database/dodaj_link.php" name="myForm" id="myForm" method="post" enctype="multipart/form-data" align="center">
                <input type="hidden" name="_action_" value="add_content" align="center" />
                   <p align="center">kategorija:<br /><select id="content_link" name="content_link" class="InputText">
                     <option value=""></option><option value="15"></option><option value="16"></option><option value="17"></option><option value="1">Novosti</option><option value="2">Poslovna zona</option><option value="3">Zabava</option></select>
					</p>
                
                <p align="center">naslov:<br /><input type="text" id="content_title" name="content_title" class="InputText" /></p>
                <p align="center">tekst:<br /><textarea name="content_text" id="content_text" class="InputTextArea"></textarea></p>
                <p align="center">slika:<br /><input type="file" id="content_picture" name="content_picture" class="InputText" />
                <br /><small>Slika mora biti .gif, .png ili .jpg. Dimenzija slike mora biti 190x140px.</small></p>
                <p align="center">
					arhiva:<br />
				    <input type="radio" id="content_archive" name="content_archive" value="Y" /> Da &nbsp;&nbsp; 
					<input type="radio" id="content_archive" name="content_archive" value="N" checked="checked" /> Ne
				</p>
                <p align="center"><input type="submit" value="Pošalji" class="InputButton" /></p>
            </form>
			</div>
	?>