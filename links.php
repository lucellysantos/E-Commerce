<?php

require_once('funcoes.php');

?>
<!DOCTYPE html>
<html>

	<?php
	echo iniciaPagina();
	echo criaCabecalho();
	echo criaMenu();

	?>
			<div class="content" id="links">
				<!--REGIAO 3-->

				<?php 
					echo "<a href=".$link[0][0].">".$link[0][1]."</a>";
				?>
				<br>
				<br>
				<?php 
					echo "<a href=".$link[1][0].">".$link[1][1]."</a>";
				?>
				<br>
				<br>
				<?php 
					echo "<a href=".$link[2][0].">".$link[2][1]."</a>";
				?>
				<br>
				<br>
				<?php 
					echo "<a href=".$link[3][0].">".$link[3][1]."</a>";
				?>
				<br>
				<br>
				
				<!--colocar links-->

			</div>
			<div>

			</div>
			<?php
	echo finalizaPagina();
	?>
</html>