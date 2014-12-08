<ul id="mainMenu">
    <?php $auth = Auth::instance();
            $data = array();
	
    if ($auth->logged_in()) {?>
	<li><a href="#" data-reveal-id="profile">Профиль</a></li>
	<li><a href="/auth/logout">Выйти</a></li>
    <?php } else { ?>
        <li><a href="#" data-reveal-id="enter">Войти</a></li>
        <li><a href="#" data-reveal-id="signup">Регистрация</a></li>
    <?php } ?> 
</ul>


<div id="enter" class="reveal-modal" style="padding:15px 40px 20px;">			
    <?php echo View::factory('forms/login'); ?>  
    <div class="nullbar2"></div>
    <a class="close-reveal-modal">&#215;</a>
</div>

<div id="signup" class="reveal-modal" style="width:auto;">
         <?php echo View::factory('forms/regview'); ?>
         
         <div class="nullbar2"></div>
         <a class="close-reveal-modal">&#215;</a>
        </div>

<div id="profile" class="reveal-modal">
            <h1>Профиль</h1>
                    <p>Здесь информация о пользователе</p>
            <?php $auth = Auth::instance();
		$data = array();
		
		if ($auth->logged_in('admin') == 1)
		{?>
            <a href="/admin">Войти в админку</a>
                <?php } ?>
         <div class="nullbar2"></div>
         <a class="close-reveal-modal">&#215;</a>
        </div>
