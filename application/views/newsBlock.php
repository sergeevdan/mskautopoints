
<?php $auth = Auth::instance();
					$data = array();
					
					if ($auth->logged_in())
					{?>
					<h1 style="color:rgba(0, 150, 136, 1);">Вы авторизованы. Удачи!</h1>
					<?php } else { ?>
					  <h1 style="color:#D32F2F;">Вы не авторизованы!</h1>
<?php } ?>
