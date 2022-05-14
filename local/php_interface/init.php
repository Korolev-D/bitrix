<?php
//Функция отладки
function d(&$data,$defaultUserId = "1"){
    global $USER;
    if($USER->GetId() == $defaultUserId){
        echo "<pre>".print_r($data,true)."</pre>";
    }
}
//Функция  Reflection API, получение всех методов, и свойств
function classDump($className,$defaultUserId = "1"){
    global $USER;
    if($USER->GetId() == $defaultUserId){
        $reflection = new ReflectionClass($className);
        $methods = $reflection->getMethods();
        $props = $reflection->getProperties();
        $statics = $reflection->getStaticProperties();
        $arReflection["NAME"] = $className;
        $arReflection["METHODS"] = $methods;
        $arReflection["PROPERTIES"] = $props;
        $arReflection["STATIC_PROPERTIES"] = $statics;
        echo "<pre>".print_r($arReflection,true)."</pre>";
    }
}
//Функция отладки в файл
define("LOG_FILENAME", $_SERVER["DOCUMENT_ROOT"]."/log.txt");
function fileDump(&$arFields,$paramName = "arrName"){
    AddMessage2Log($paramName.' = '.print_r($arFields, true),'');
}