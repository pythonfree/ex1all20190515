<?php

function mydump2($arName)
{
    echo '<pre>';
    var_dump($arName);
    echo '</pre>';
}

// определим константу LOG_FILENAME, в которой зададим путь к лог-файлу
define("LOG_FILENAME", $_SERVER["DOCUMENT_ROOT"]."/log.txt");

// файл /bitrix/php_interface/init.php
// регистрируем обработчик
AddEventHandler("main", "OnAfterUserUpdate", Array("MyClass", "OnAfterUserUpdateHandler"));

class MyClass
{
    // создаем обработчик события "OnAfterUserUpdate"
    function OnAfterUserUpdateHandler(&$arFields)
    {
        if($arFields["RESULT"])
            AddMessage2Log("Запись с кодом ".$arFields["ID"]." изменена.");
            
$arEventFields = array(
    "ID"                  => $CONTRACT_ID,
    "MESSAGE"             => $mess,
    "EMAIL_TO"            => implode(",", $EMAIL_TO),
    "ADMIN_EMAIL"         => implode(",", $ADMIN_EMAIL),
    "ADD_EMAIL"           => implode(",", $ADD_EMAIL),
    "STAT_EMAIL"          => implode(",", $VIEW_EMAIL),
    "EDIT_EMAIL"          => implode(",", $EDIT_EMAIL),
    "OWNER_EMAIL"         => implode(",", $OWNER_EMAIL),
    "BCC"                 => implode(",", $BCC),
    "INDICATOR"           => GetMessage("AD_".strtoupper($arContract["LAMP"]."_CONTRACT_STATUS")),
    "ACTIVE"              => $arContract["ACTIVE"],
    "NAME"                => $arContract["NAME"],
    "DESCRIPTION"         => $description,
    "MAX_SHOW_COUNT"      => $arContract["MAX_SHOW_COUNT"],
    "SHOW_COUNT"          => $arContract["SHOW_COUNT"],
    "MAX_CLICK_COUNT"     => $arContract["MAX_CLICK_COUNT"],
    "CLICK_COUNT"         => $arContract["CLICK_COUNT"],
    "BANNERS"             => $arContract["BANNER_COUNT"],
    "DATE_SHOW_FROM"      => $arContract["DATE_SHOW_FROM"],
    "DATE_SHOW_TO"        => $arContract["DATE_SHOW_TO"],
    "DATE_CREATE"         => $arContract["DATE_CREATE"],
    "CREATED_BY"          => $CREATED_BY,
    "DATE_MODIFY"         => $arContract["DATE_MODIFY"],
    "MODIFIED_BY"         => $MODIFIED_BY
    );
$arrSITE =  CAdvContract::GetSiteArray($CONTRACT_ID);
CEvent::Send("ADV_CONTRACT_INFO", $arrSITE, $arEventFields);            
            
        else
            AddMessage2Log("Ошибка изменения записи ".$arFields["ID"]." (".$arFields["RESULT_MESSAGE"].").");
    }
}