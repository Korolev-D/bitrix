<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;

$arComponentDescription = [
    "NAME"        => Loc::getMessage("M_FORM_NAME"),
    "DESCRIPTION" => Loc::getMessage("M_FORM_DESCRIPTION"),
    "COMPLEX"     => "N",
    "PATH"        => [
        "ID"   => Loc::getMessage("M_FORM_PATH_ID"),
        "NAME" => Loc::getMessage("M_FORM_PATH_NAME"),
    ],
];
?>