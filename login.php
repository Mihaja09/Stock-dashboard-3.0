<?php 
$title = "Login";
require 'docshead.php'; ?>
<body>
    <div class="tout">
		<div class="container">
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<div class="formlog mx-auto d-block">
						<div class="ikon">
							<i class="fa fa-user-circle"></i>
						</div>
                        <div class="guidelog">
                            <p>Veuillez vous identifier pour accéder à l’application</p>
                        </div>
						<form>
							<div class="form-group">
								<label for="email">Nom d'utilisateur*</label>
								<input type="email" class="form-control" id="email" placeholder="Entrer votre login" name="email">
							</div>
							<div class="form-group">
								<label for="pwd">Mot de passe*</label>
								<input type="password" class="form-control" id="pwd" placeholder="Entrer votre mot de passe" name="pswd">
							</div>
							<div>
								<ul class="connect">
									<li><a href="#">Se connecter</a></li>
								</ul>
							</div>
						</form>
						<p><a href="">Mot de passe oublié ?</a></p>
					</div>
				</div>
				<div class="col-md-3"></div>
			</div>
		</div>		
	</div>
</body>
</html>