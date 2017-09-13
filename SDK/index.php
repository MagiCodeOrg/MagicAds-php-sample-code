<?php
/**
 * Created by Magicode.
 * User: Mench
 */

include "SDK/config.php";
include "SDK/vendor/getAds.php";
include "SDK/vendor/goToAds.php";
include "SDK/vendor/strError.php";
include "tgClass.php";

function showAds($user_id = "")
{
    $result = getAds($user_id);
    if ($result['ok']) {
        $ok = true;
        $content = $result['content'];
        $url = goToAds($result["id"], $user_id)["url"];
    } else {
        $ok = false;
        $content = $result['content'];
        $url = "";
    }
    return ["ok" => $ok, "content" => $content, "url" => $url];
}

//my Bot Code
$update = json_decode(file_get_contents("php://input"));
$text = $update->message->text;
$from_id = $update->message->from->id;

$tg = new telegram(TELEGRAM_BOT_TOKEN);
if ($text == "/coin") {
    $tg->sendMessage([
        "chat_id" => $from_id,
        "text" => "جهت کسب سکه از دکمه های زیر استفاده کنید",
        "reply_markup" => json_encode(["keyboard" => [
            [["text" => "کسب سکه"]]
        ], "resize_keyboard" => true])
    ]);
} else if ($text == "کسب سکه") {
    $message = showAds($from_id);
    if ($message["ok"]) {
        $tg->sendMessage([
            "chat_id" => $from_id,
            "text" => "با دیدن ویدئو میتوانید سکه کسب کنید ، 100 سکه با دیدن ویدئوی زیر\n" . $message["content"] . "\n مشاهده تبلیغ و کسب سکه از طریق لینک زیر \n" . $message["url"],
        ]);
    } else {
        $tg->sendMessage([
            "chat_id" => $from_id,
            "text" => $message["content"]
        ]);
    }
}