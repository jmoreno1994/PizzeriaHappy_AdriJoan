<?php include("header.php") ?>

<form id="contact_form" action="#" method="POST" enctype="multipart/form-data">
	<div class="row">
		<label for="name">Nom:</label><br />
		<input id="name" class="input" name="name" type="text" value="" size="30" /><br />
	</div>
	<div class="row">
		<label for="email">E-mail:</label><br />
		<input id="email" class="input" name="email" type="text" value="" size="30" /><br />
	</div>
	<div class="row">
		<label for="message">Missatge:</label><br />
		<textarea id="message" class="input" name="message" rows="7" cols="30"></textarea><br />
		
		<input id="submit_button" type="submit" value="Enviar" />
	</div>
	
	<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d187.03443619057356!2d2.1683762587524296!3d41.405556798182396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sPizzer%C3%ADa+a+domicilio!5e0!3m2!1ses!2ses!4v1429797658020" width="600" height="450" frameborder="0" style="border:0"></iframe>
	
</form>	


<?php include("footer.php") ?>