<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("test page");
?>


<?$APPLICATION->IncludeComponent(
    "mendelef:feedback",
    "",
    Array(
        "USE_CAPTCHA" => "Y",
        "OK_TEXT" => "Спасибо, ваше сообщение принято.",
        "EMAIL_TO" => "",
        "REQUIRED_FIELDS" => Array("NAME","EMAIL","PHONE","MESSAGE"),
        "EVENT_MESSAGE_ID" => Array("7"),
        "AJAX_MODE" => "Y",
        "AJAX_OPTION_SHADOW" => "Н",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "AJAX_OPTION_HISTORY" => "N",
    )
);?>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
