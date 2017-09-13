<?php
/**
 * Created by Magicode.
 * User: Mench
 */
include "SDK/config.php";
$update = json_decode(file_get_contents("php://input"));
if (isset($update->api_key) && isset($update->token)) {

    $api_key = $update->api_key; // کلیدی که از Magicode دریافت کردید

    $token = $update->token; // توکن ربات شما

    $user_id = $update->user_id; // آیدی عددی کاربری که ویدئو رو دیده

    $view_amount = $update->view_amount;// پولی که توسط مشاهده ویدئو به شما تعلق گرفته

    if ($api_key == MAGICODE_KEY && $token == TELEGRAM_BOT_TOKEN) {
        if ($update->ok) {
            // در این قسمت باید کد های مربوط به افزودن سکه به کاربر و ... باشد
        }
    }
}