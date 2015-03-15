<div class="wrap">
	<h2>Utilisation</h2>
	<p>Pour utiliser ce plugin, merci de copier coller le code suivant : [mon-plugin]</p>
	<h2>Paramètres</h2>
	<form method="post" action="options.php">
		<?php
			@settings_fields('monPlugin-config');
			@do_settings_fields('monPlugin-config');
		?>
		<table class="form-table">
			<tr valign="top">
				<th scope="row">
					<label for="monPlugin-client">Client</label>
				</th>
				<td>
					<input type="text" name="monPlugin-client" id="monPlugin-client" value="<?php echo get_option('monPlugin-client'); ?>">
				</td>
			</tr>
			<tr valign="top">
				<th scope="row">
					<label for="monPlugin-annee">Année</label>
				</th>
				<td>
					<input type="text" name="monPlugin-annee" id="monPlugin-annee" value="<?php echo get_option('monPlugin-annee'); ?>">
				</td>
			</tr>
			<tr valign="top">
				<th scope="row">
					<label for="monPlugin-agence">Agence</label>
				</th>
				<td>
					<input type="text" name="monPlugin-agence" id="monPlugin-agence" value="<?php echo get_option('monPlugin-agence'); ?>">
				</td>
			</tr>
			<tr valign="top">
				<th scope="row">
					<label for="monPlugin-url">URL</label>
				</th>
				<td>
					<input type="text" name="monPlugin-url" id="monPlugin-url" value="<?php echo get_option('monPlugin-url'); ?>">
				</td>
			</tr>
		</table>
		<?php @submit_button(); ?>
	</form>
</div>