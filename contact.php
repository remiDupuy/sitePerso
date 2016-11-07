<form id="ajax-contact" method="post" action="mailer.php">
				    <div class="field">
				        <label for="name">Nom :</label><br/>
				        <input type="text" id="name" name="name" required size="40">
				    </div>

				    <div class="field">
				        <label for="email">Email :</label><br/>
				        <input type="email" id="email" name="email" required>
				    </div>

				    <div class="field">
				        <label for="objet">Objet :</label><br/>
				        <input type="text" id="objet" name="objet" required>
				    </div>

				    <div class="field">
				        <label for="message">Message :</label><br/>
				        <textarea id="message" name="message" required></textarea>
				    </div>

				    <div class="buttonInput">
				        <button type="submit" class="btn">ENVOYER</button>
				    </div>
				</form>
				<div id="form-messages"></div>
