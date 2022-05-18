<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

class FeedbackClass extends CBitrixComponent
{
    public function validate(): void
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["submit"] <> '' && $this->arParams["REQUIRED_FIELDS"]) {
            if ($this->inArray('NAME') && $this->required($_POST["name"])) {
                $this->arResult["ERROR_MESSAGE"]["NAME"] = GetMessage("M_REQUIRE");
            }
            if ($this->inArray('EMAIL') && $this->required($_POST["email"])) {
                $this->arResult["ERROR_MESSAGE"]["EMAIL"] = GetMessage("M_REQUIRE");
            } elseif ($this->email($_POST["email"])) {
                $this->arResult["ERROR_MESSAGE"]["EMAIL"] = GetMessage("M_EMAIL_NO_VALID");
            }
            if ($this->inArray('PHONE') && $this->required($_POST["phone"])) {
                $this->arResult["ERROR_MESSAGE"]["PHONE"] = GetMessage("M_REQUIRE");
            }
            if ($this->inArray('MESSAGE') && $this->required($_POST["message"])) {
                $this->arResult["ERROR_MESSAGE"]["MESSAGE"] = GetMessage("M_REQUIRE");
            } elseif ($this->length($_POST["message"])) {
                $this->arResult["ERROR_MESSAGE"]["MESSAGE"] = GetMessage("M_LENGTH_TEXT");
            }
        }
    }

    public function session(): void
    {
        if (check_bitrix_sessid()) {
            $this->arResult["AUTHOR_NAME"]  = $_POST["name"];
            $this->arResult["AUTHOR_EMAIL"] = $_POST["email"];
            $this->arResult["AUTHOR_PHONE"] = $_POST["phone"];
            $this->arResult["MESSAGE"]      = $_POST["message"];
        }
    }

    public function inArray(string $val): bool
    {
        if (in_array($val, $this->arParams["REQUIRED_FIELDS"])) {
            return true;
        }
        return false;
    }

    public function required(string $val = null): bool
    {
        if (!$val || strval($val) == '') {
            return true;
        }
        return false;
    }

    public function email(string $val = null): bool
    {
        if (!preg_match("/^[a-zA-Z0-9]+(([a-zA-Z0-9_.-]+)?)@[a-zA-Z0-9+](([a-zA-Z0-9_.-]+)?)+\.+[a-zA-Z]{2,4}$/", $val)) {
            return true;
        }
        return false;
    }

    public function length(string $val, string $options = '50'): bool
    {
        if (mb_strlen(strval($val)) < $options) {
            return true;
        }
        return false;
    }

    public function onPrepareComponentParams($arParams)
    {
        $arParams["EVENT_NAME"] = trim($arParams["EVENT_NAME"]);
        if ($arParams["EVENT_NAME"] == '') $arParams["EVENT_NAME"] = "FEEDBACK_FORM";
        $arParams["EMAIL_TO"] = trim($arParams["EMAIL_TO"]);
        if ($arParams["EMAIL_TO"] == '') $arParams["EMAIL_TO"] = COption::GetOptionString("main", "email_from");
        $arParams["OK_TEXT"] = trim($arParams["OK_TEXT"]);
        if ($arParams["OK_TEXT"] == '') $arParams["OK_TEXT"] = GetMessage("MF_OK_MESSAGE");
        return $arParams;
    }

    public function send(): void
    {
        if (empty($this->arResult["ERROR_MESSAGE"]) && $this->arParams["EVENT_MESSAGE_ID"] && $_SERVER["REQUEST_METHOD"] == "POST" && $_POST["submit"] <> '') {
            $arFields = array("AUTHOR" => $_POST["user_name"], "AUTHOR_EMAIL" => $_POST["user_email"], "EMAIL_TO" => $this->arParams["EMAIL_TO"], "TEXT" => $_POST["message"],);
            CEvent::Send($this->arParams["EVENT_NAME"], SITE_ID, $arFields);
            $this->writting();
            $this->arResult["OK_MESSAGE"] = true;
        }else{
            $this->session();
        }
    }

    public function writting(){

        CModule::IncludeModule('iblock');

        $el = new CIBlockElement;

        $PROP = array();

        $PROP[30] =  $_POST['name'];
        $PROP[31] =  $_POST['email'];
        $PROP[32] =  $_POST['phone'];
        $PROP[33] =  $_POST['message'];

        $feedback = Array(
            "MODIFIED_BY"    => 1,
            "IBLOCK_SECTION_ID" => false,
            "IBLOCK_ID"      => 5,
            "PROPERTY_VALUES"=> $PROP,
            "NAME"           => "Форма с сайта ",
            "ACTIVE"         => "Y",
        );

        $el->Add($feedback);
    }

    public function executeComponent()
    {
        try {
            $this->validate();
            $this->send();
            $this->includeComponentTemplate();
        } catch (SystemException $e) {
            ShowError($e->getMessage());
        }
    }
}
