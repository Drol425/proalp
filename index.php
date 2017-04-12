<?php
	$title = "Вывод тайтла из таблицы"; //пишет в тег <title>
	$desc = "Описание страницы";// пишет в мета тег описание
	$glav = "Выводит запись на главной"; //пишет на главной в тег h1
	$glav_text = "Заголовок текст"; //пишет заголовок текста на главной странице h2
	$text = "Текст.Текст.Текст.Текст.Текст.Текст.Текст.Текст.Текст.Текст.Текст.Текст.Текст.Текст.Текст.Текст.Текст.Текст.Текст.Текст.Текст.Текст.Текст.";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<title><?php echo $title ?></title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<meta name="yandex-verification" content="c9801ade6cbb2b6c" />
 <meta name="description" content="<?php echo $desc ?>">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="lib/device.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('body').on('click','#myElement',function(){
			var set = $('#set').val();
            $.ajax({
                url: "mail.php", 
                type: 'POST',
				//dataType: 'json',
                data: "set="+set,
                success: function(data){$('#rt').fadeIn(500);$("body").append("<div id='overlay'></div>");$('#overlay').show();
				//$('.popup').html(data);				
				}
            });
			});
			});
            </script>
			
			
			<!-- Put this script tag to the <head> of your page -->
<script type="text/javascript" src="https://vk.com/js/api/share.js?94" charset="windows-1251"></script>
</head>
<body>
		    <div style="height: 11%; opacity:0.9;" class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
      <div style="margin-top: 30px;" class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <!--  <a style="color:white; font-size: 32px;" class="navbar-brand" href="#">Pro-Alpinist</a>-->
        </div>
        <div class="collapse navbar-collapse">
          <ul style="margin-top: -10px;" class="nav navbar-nav">
            <li><a href="index.html">Главная</a></li>
            <li><a href="about.html">О нас</a></li>
            <li><a href="zakaz.html">Заказать</a></li>
	    <li><a href="cenu.html">Цены</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
	<!-- Put this script tag to the place, where the Share button will be -->
  	<div style="display: flex;flex-direction: row; justify-content: space-between;" class="my-flex-container">
		<div class="my-flex-block"><img class="logo" src="img/1-u663-1.png"></div>
		<div style="" class="my-flex-block">
		<!--<p style="text-align: right;"> -->
		<div style="display: flex;flex-direction: column;">
			<!--<a style="" href="https://www.facebook.com/proalpinist.ru/" target="_blank" rel="nofollow"><img src="img/tab/facebook.png">-->
			<a href="https://plus.google.com/u/0/110364724262487221629" target="_blank" rel="nofollow"><img height="50" src="img/tab/google-plus.png"></a>
			<a href="https://ok.ru/group57461541699634" target="_blank" rel="nofollow"><img height="50" src="img/tab/odnoklassniki.png"></a>
			<a href="https://twitter.com/ProAlpinist" target="_blank" rel="nofollow"><img height="50" src="img/tab/twitter.png"></a>
			<a href="https://vk.com/pro_alpinist" target="_blank" rel="nofollow"><img height="50" src="img/tab/vk_int.png"></a>
			<a href="https://www.youtube.com/c/ProalpinistRuS" target="_blank" rel="nofollow"><img height="50" src="img/tab/youtube.png"></a>
			
		</div>
		</div>
		
		<!--</p>--></div>
	</div>
	
<center> 
<h1 class="h1"><?php echo $glav ?></h1>
	 <form id="forms">
		<input type="text" id="set" class="form-control" style="width:35%; height: 35px; margin-right: 20px;" placeholder="Введите номер телефона. . .">
		<input type="submit" id="myElement" class="btn btn-success" value="Заказать" />
	 </form>
</center> 
		    <div style="opacity:0.6; margin-top: 1%;" class="navbar navbar-inverse" role="navigation">
  <div class="text">
	 <article>
	  <section id="demo">
	 <h2><?php echo $glav_text ?></h2>
	 <p style="text-align: justify; font-size: 16px; margin-left: 20px; margin-right: 20px;"><?php echo $text ?>
	 </p><br />
	 
	 
	 </section>
	 </article>
  </div>
  </div>
<div id="elem" class="is_overlay1"><video width="300" height="150" autoplay="autoplay" loop="loop"> 
<source src="video.mp4" type="video/mp4">
<source src="video.webm" type="video/webm">
</video></div>
	<script src="readmore.js"></script>
	<script>
		$('article').readmore({
			maxHeight: 108,
			moreLink: '<a style="color:blue;" id="readm" href="#">подробнее</a>',
			lessLink: '<a style="color:blue; margin-bottom: 100px;" href="#">скрыть</a>',
			expandedClass: 'open'
		});
		$('body').on('click','#readm',function(){
		
			$('.text').css("margin-top", "1px");
		
		});
	</script>
				<script>
				if(device.mobile()){
					document.getElementById('elem').style.display = 'none';
					//прописать для мобильного бэкграунд
					$("body").css("background", "url(img/SgZBPsfCLGM.jpg) no-repeat");
					$("body").css("background-size", "100%");
					//$("body").css("width", "auto");
					//$("body").css("height", "auto");
					//$("body").css("height", "auto");
				}
				//alert(device.mobile());
			</script>	
</body>
</html>
