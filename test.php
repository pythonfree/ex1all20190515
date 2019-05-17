<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("test");
?><?$APPLICATION->IncludeComponent("bitrix:system.auth.form", "def_auth_form", Array(
	"COMPONENT_TEMPLATE" => ".default",
		"REGISTER_URL" => "/login/",	// Страница регистрации
		"FORGOT_PASSWORD_URL" => "/login/",	// Страница забытого пароля
		"PROFILE_URL" => "/login/user.php",	// Страница профиля
		"SHOW_ERRORS" => "N",	// Показывать ошибки
	),
	false
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>