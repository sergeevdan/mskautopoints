<!doctype html>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>MoscowAutoPoints</title>
	<link href="/css/style.css" type="text/css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto&subset=latin,cyrillic,latin-ext' rel='stylesheet' type='text/css'>
    <link rel="icon" href="http://mskautopoints.ru/favicon.ico" type="image/x-icon" /> 
	<link rel="shortcut icon" href="http://mskautopoints.ru/favicon.ico" type="image/x-icon" />
	<script src="http://api-maps.yandex.ru/2.1/?lang=ru_RU&load=Map" type="text/javascript"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js"></script>
		<script type="text/javascript" src="js/jquery.reveal.js"></script>

</head>

<body>
    
	<div id="header">
            <a href="/"><img src="/images/logo.png" class="logo"></a>
            <?php echo View::factory('mainMenu'); ?>  
	</div>
		
        <div id="news" class="news">			
            <?php echo View::factory('newsBlock'); ?>  
        </div>
    
        <div id="map">
            <script type="text/javascript">
        
                var myMap;
    
                // Дождёмся загрузки API и готовности DOM.
                ymaps.ready(init);
    
                function init () {
                    // Создание экземпляра карты и его привязка к контейнеру с
                    // заданным id ("map").
                    myMap = new ymaps.Map('map', {
                        // При инициализации карты обязательно нужно указать
                        // её центр и коэффициент масштабирования.
                        center: [55.76, 37.64], // Москва
                        zoom: 11
                    });
    
                    
                    
    
                }
                </script>
        </div>

    
    <div id="contentMain">
        
            
        <?php if(isset($content) == 0) { ?>
    
        <?php } else { ?>
	<div class="contentMain">
            <?php echo $content ?>
            <a class="close-contenMain">&#215;</a>
        </div>
        <?php } ?>
    </div>
    
        <div id="footer">
            <div class="copy">2014 &copy Команда разработчиков VEDA</div> 
        </div>
   
    <script type="text/javascript">
$(document).ready(function() {
    
          $('#news').reveal({animation: 'fade'});
            this.handler = setTimeout(function () {
            $('#news').trigger('reveal:close');
            }, 3000);
            
          $('#contentMain').reveal({dismissmodalclass: 'close-contenMain'});
});
</script>
</body>
</html>
