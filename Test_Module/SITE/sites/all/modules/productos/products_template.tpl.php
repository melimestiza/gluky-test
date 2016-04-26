<?php if($view_mode == 'full'): ?>
	<h2>Información producto</h2>
	<ul>
		<li><strong><em>Nombre producto:</em></strong></li>
		<ul>
			<li><?php print $element->nombre; ?></li>
		</ul>
		<li><strong><em>SKU:</em></strong></li>
		<ul>
			<li><?php print $element->sku; ?></li>
		</ul>
		<li><strong><em>Categoría:</em></strong></li>
		<ul>
			<li><?php print $element->categoria->name->value(); ?></li>
		</ul>
		<li><strong><em>Programa:</em></strong></li>
		<ul>
			<li><strong>Nombre:</strong><?php print $element->program->nombre; ?></li>
			<!-- <li><strong>Valor punto:</strong><?php print $element->program->valor_punto; ?></li> -->
		</ul>
		<li><strong><em>Flete:</em></strong></li>
		<ul>
			<li><strong>Código flete:</strong><?php print $element->flete->codigo; ?></li>
		</ul>
	</ul>
	<h2>Valores calculados</h2>
	<ul>
		<li><strong><em>Precio Total:</em></strong> <?php print $element->total; ?></li>
		<li><strong><em>Precio en puntos:</em></strong> <?php print $element->puntos; ?></li>
	</ul>
<?php endif; ?>