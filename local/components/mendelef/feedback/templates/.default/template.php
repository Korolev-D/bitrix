<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<? //
//\Bitrix\Main\Diag\Debug::dump($arParams);
//\Bitrix\Main\Diag\Debug::dump($arResult);
//?>

<div class="container">
    <div class="row">
        <div class="col-12 col-md-7">
            <form class="m_form" action="<?=POST_FORM_ACTION_URI
            ?>" method="post">
                <?=bitrix_sessid_post() ?>

                <div class="row">
                    <? if ($arResult["OK_MESSAGE"] <> '') { ?>
                        <div id="m_success" class="col-12 text-center text-success fs-4"><?=GetMessage("OK_MESSAGE")?></div>
                    <?  } elseif ($arResult["ERROR_MESSAGE"]) { ?>
                        <div class="col-12 text-center text-danger fs-4"><?=GetMessage("ERROR_MESSAGE_TEXT")?></div>
                    <? } ?>
                </div>

                <div class="row justify-content-between">
                    <div class="col-5"><label for="name"><?=GetMessage("M_NAME") ?></label></div>
                    <div class="col-7 text-end"><span><?=$arResult["ERROR_MESSAGE"]["NAME"] ?></span></div>
                    <div class="col-12">
                        <input class="<?=($arResult["ERROR_MESSAGE"]["NAME"]) ? "m_error" : "" ?>" type="text"
                               id="name" name="name" value="<?=$arResult["AUTHOR_NAME"] ?>">
                    </div>
                </div>

                <div class="row justify-content-between">
                    <div class="col-5"><label for="email"><?=GetMessage("M_EMAIL") ?></label></div>
                    <div class="col-7 text-end"><span><?=$arResult["ERROR_MESSAGE"]["EMAIL"] ?></span></div>
                    <div class="col-12">
                        <input class="<?=($arResult["ERROR_MESSAGE"]["EMAIL"]) ? "m_error" : "" ?>" type="email"
                               id="email" name="email" value="<?=$arResult["AUTHOR_EMAIL"] ?>">
                    </div>
                </div>

                <div class="row justify-content-between">
                    <div class="col-5"><label for="phone"><?=GetMessage("M_PHONE") ?></label></div>
                    <div class="col-7 text-end"><span><?=$arResult["ERROR_MESSAGE"]["PHONE"] ?></span></div>
                    <div class="col-12">
                        <input class="mask-phone <?=($arResult["ERROR_MESSAGE"]["PHONE"]) ? "m_error" : "" ?>" type="text"
                               id="phone" name="phone" value="<?=$arResult["AUTHOR_PHONE"] ?>">
                    </div>
                </div>

                <div class="row justify-content-between">
                    <div class="col-5"><label for="message"><?=GetMessage("M_MESSAGE") ?></label></div>
                    <div class="col-7 text-end"><span><?=$arResult["ERROR_MESSAGE"]["MESSAGE"] ?></span></div>
                    <div class="col-12">
                        <textarea class="m_textarea <?=($arResult["ERROR_MESSAGE"]["MESSAGE"]) ? "m_error" : "" ?>"
                                  name="message" id="" cols="10" rows="10"><?=$arResult["MESSAGE"] ?></textarea>
                    </div>
                </div>

                <input class="m_buttom" type="submit" name="submit" value="<?=GetMessage("M_BUTTON") ?>">
            </form>
        </div>
    </div>
</div>
