<div class="" id="loginModal">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3>Vous avez déjà un compte?</h3>
	</div>
	<div class="modal-body">
		<div class="well">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#login" data-toggle="tab">Login</a></li>
				<li><a href="#create" data-toggle="tab">Créer un compte</a></li>
			</ul>
			<div id="myTabContent" class="tab-content">
				<div class="tab-pane active in" id="login">
					<form class="form-horizontal" action='' method="POST">
						<fieldset>
							<div id="legend">
								<legend class="">Login</legend>
							</div>    
							<div class="control-group">
								<!-- Username -->
								<label class="control-label"  for="username">Utilisateur</label>
								<div class="controls">
									<input type="text" id="username" name="username" placeholder="" class="input-xlarge">
								</div>
							</div>
							
							<div class="control-group">
								<!-- Password-->
								<label class="control-label" for="password">Mot de passe</label>
								<div class="controls">
									<input type="password" id="password" name="password" placeholder="" class="input-xlarge">
								</div>
							</div>
							
							
							<div class="control-group">
								<!-- Button -->
								<div class="controls">
									<button class="btn btn-success" name="login">Login</button>
								</div>
							</div>
						</fieldset>
					</form>                
				</div>
				<div class="tab-pane fade" id="create">
					<form id="tab" action='' method="POST">
						<label>Pseudo</label>
						<input type="text" name="pseudo" value="" class="input-xlarge">
						<label>Mot de passe</label>
						<input type="password" name="mdp" value="" class="input-xlarge">
						<label>Prenom</label>
						<input type="text" name="prenom" value="" class="input-xlarge">
						<label>Nom</label>
						<input type="text" name="nom" value="" class="input-xlarge">
						<label>Email</label>
						<input type="text" name="email" value="" class="input-xlarge">
						<label>Adresse</label>
						<textarea value="" name="adresse" rows="3" class="input-xlarge"></textarea>
						
						<div>
							<button class="btn btn-primary" name="register">Envoyer</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>