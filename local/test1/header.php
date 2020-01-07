<html>
<head> 
<title>Тестовое задание</title>
<?$APPLICATION->ShowHead();?>

  <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" /> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<style>
body{background-color:WhiteSmoke;}

a{color:black;}
a:visited {color: black;}
a:active{color: black;}
#footer a{color: white;} 
.footer {


margin-top:10px;
}

</style>
</head>
<body>
<div id="panel"> <?$APPLICATION->ShowPanel();?> </div>
<nav class="navbar navbar-expand-sm navbar-light"  style="background-color: Azure;">
<ul class="navbar-nav w-100 nav-fill">
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
Ваш город
</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="#">Город 1</a>
<a class="dropdown-item" href="#">Город 2</a>
</div>
</li>
<li class="nav-item">
<a class="nav-link" href="#"><img src="https://image.flaticon.com/icons/svg/252/252025.svg" width=16 >Найти аптеку</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#"><img src="https://image.flaticon.com/icons/svg/867/867454.svg" width=16 >Бонусная карта</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#"><img src="https://image.flaticon.com/icons/svg/2001/2001580.svg" width=16 >Оформление заказа</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#"><img src="https://image.flaticon.com/icons/svg/616/616489.svg" width=16 >Избранное</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#"><img src="https://image.flaticon.com/icons/svg/1170/1170576.svg" width=16 >Корзина</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#"><img src="https://image.flaticon.com/icons/svg/1828/1828506.svg" width=16 >Войти</a>
</li>
</ul>
</nav>
<div style="background-color: white;" >
<div class="container"><div class="row">
<div class="col-sm-2 col-md-2 col-lg-2 mt-5 align-middle"> <img src="https://vitaexpress.ru/img/logo.svg" width="100%"></div>
<div class="col-sm-4 col-md-4 col-lg-3 mt-5 align-middle"style="font-size:138%"> <a  href="tel:+78007550003"><img src="https://i.pinimg.com/originals/27/fc/b5/27fcb5092a32fb4a9e627c3c549f5cd8.png" width=15%><b>8 800 755 00 03</b></a></div>
<div class="col-sm-6 col-md-6 col-lg-7 mt-5 align-middle"> <form class="form-inline" action="<?=$arResult["FORM_ACTION"]?>">
<?if($arParams["USE_SUGGEST"] === "Y"):?><?$APPLICATION->IncludeComponent(
"bitrix:search.suggest.input","",array("NAME" => "q","VALUE" => "","INPUT_SIZE" => 15,"DROPDOWN_SIZE" => 10,),$component, array("HIDE_ICONS" => "Y")
);?><?else:?><input class="form-control w-100" type="text" name="q" value="" maxlength="50" placeholder="Найти"><?endif;?>&nbsp; </form> </div>
</div> </div>	</div>
<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"menu2", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "top",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_THEME" => "red",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "menu2"
	),
	false
);?>






