	<footer id="footer" class="footer w-100" style=" background-color: deepskyblue; color: white;">
      <div class="container">
        <div class="row">
	<div class="col mt-3"> <b>Подпишитесь и узнавайте первыми о выгодных предложениях!</b>  </div>
<div class="col"> <?$APPLICATION->IncludeComponent(
	"bitrix:main.feedback", 
	"email.form", 
	array(
		"COMPONENT_TEMPLATE" => "email.form",
		"USE_CAPTCHA" => "Y",
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"EMAIL_TO" => "bruss.serials@gmail.com",
		"REQUIRED_FIELDS" => array(
		),
		"EVENT_MESSAGE_ID" => array(
		)
	),
	false
);?> </div>
</div>
<div class="row">
	<div class="col mb-3"> <div><b>Для покупателя!</b></div> <div><a href="#">Оформление заказа</a></div> <div><a href="#">Бонусная карта</a></div> <div><a href="#">Акции</a></div> <div><a href="#">Новинки</a></div> <div><a href="#">Статьи</a></div> </div>
	<div class="col mb-3"> <div><b>О компании</b></div> <div><a href="#">Единая справочная</a></div> <div><a href="#">Найти аптеку</a></div> <div><a href="#">О компании</a></div> <div><a href="#">Вакансии</a></div> <div><a href="#">Новости</a></div>  </div>
<div class="col mb-3"> <br> <div><a href="#">Политика конфиденциальности</a></div> <div><a href="#">Сотрудничество</a></div> <div><a href="#">Программа лояльности</a></div>  </div>
	<div class="col mb-3"> <br> <div><a href="#"><b>8 800 755 00 03</b></a></div> <div><a href="#">Напишите нам</a></div> <div><a href="#"> Мы ВКонтакте</a></div> <div><a href="#">Инстаграм</a></div> </div> 
</div>
      </div>
    </footer>
</body>
</html>
