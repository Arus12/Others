<!DOCTYPE html>
<html lang="cs">

<head>
	<title>Přihlášení</title>
	<link href="style-upload.css" rel="stylesheet" />
	<link rel="icon" href="../img/logo.jpg">
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="author" content="Jan Černý" />
	<script src="https://kit.fontawesome.com/afcc9b0842.js" crossorigin="anonymous"></script>
</head>

<body>
	<div class="container" id="container">
			<form action="../php/form/get_login.php" method="post">
			<div class="form-container sign-in-container">
				<h1>Základní informace</h1>
				<input type="text" placeholder="Název obrázku" name="name" />
				<?php echo('<input type="date" id="date" name="date"value="'.date("Y-m-d").'"min="1800-01-01" max="'.date("Y-m-d").'">')?>
				<p>Vyberte možnost zobrazení:</p>
                    <select id="state" name="state">
                        <option value="private">Soukromé</option>
                        <option value="public">Vyřejné</option>
                    </select>
						<p>Vyberte složku/y do které chcete nahrát obrázek (pro výběr vícero složek držte CTRL):</p>
                    <select id="folder" name="folder" multiple>
                    	<option value="private">Soukromé</option>
                    	<option value="public">Vyřejné</option>
                    </select>
				</div>

				<div class="form-container sign-up-container">
				<h1>Nahrání obrázku</h1>
				<p>Nahrát obrázek</p>
				<div class = "upload_image">
				<input type="file" id="image" name="image" accept=".png, .jpg">
				</div>
                <p>nebo</p>
                <input type = "file" accept=".png, .jpg"><p>sem vložte obrázek</p><div id="image_drop_area"></div><p id="file_name"></p>
				<div class = "submit">
				<button type="submit">Nahrát obrázek</button>
				</div>

				
		</div>

			</form>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-left">
					<button class="ghost" id="signin">Zpět</button>
				</div>
				<div class="overlay-panel overlay-right">
					<h1>Přejít na další část</h1>
					<button class="ghost" id="signup">Další</button>
				</div>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript" src="form.js"></script>
<script type="text/javascript" src="DragAndDrop.js"></script>
</html>