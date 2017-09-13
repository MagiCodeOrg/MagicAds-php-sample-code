<?php

/**
 * Created by telegram & PhPBots & SellGate.
 * Creators: Morteza Bagheri
 * Powred by @mench
 * Any copying is forbidden and is for personal use only
 */
class telegram
{
    private $token;

    public function __construct($api_key)
    {
        $this->token = $api_key;
        return $this->token;
    }

    /**
     * @param $method
     * @param array $datas
     * @return mixed
     * Work All Telegram Methode By Below Methode
     */
    public function telegram($method, $datas = [])
    {

        $url = "https://api.telegram.org/bot" . $this->token . "/" . $method;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
        $res = curl_exec($ch);
        if (curl_error($ch)) {
            var_dump(curl_error($ch));
        } else {
            return json_decode($res);
        }
        return $res;
    }

    /*
     * Datas : https://core.telegram.org/bots/api#sendmessage
     * t.me/phpbots
     * t.me/sellgate
     * c4b.ir
     * return : Json
     */
    public function sendMessage($datas = [])
    {
        return $this->telegram("sendMessage", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#sendphoto
     * t.me/phpbots
     * t.me/sellgate
     * c4b.ir
     * return : Json
     */
    public function sendPhoto($datas = [])
    {
        return $this->telegram("sendPhoto", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#sendvideo
     * t.me/phpbots
     * t.me/sellgate
     * c4b.ir
     * return : Json
     */
    public function sendVideo($datas = [])
    {
        return $this->telegram("sendVideo", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#senddocument
     * t.me/phpbots
     * t.me/sellgate
     * c4b.ir
     * return : Json
     */
    public function sendDocument($datas = [])
    {
        return $this->telegram("sendDocument", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#sendaudio
     * t.me/phpbots
     * t.me/sellgate
     * c4b.ir
     * return : Json
     */
    public function sendAudio($datas = [])
    {
        return $this->telegram("sendAudio", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#sendvoice
     * t.me/phpbots
     * t.me/sellgate
     * c4b.ir
     * return : Json
     */
    public function sendVoice($datas = [])
    {
        return $this->telegram("sendVoice", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#getme
     * t.me/phpbots
     * t.me/sellgate
     * c4b.ir
     * return : Json
     */
    public function getMe()
    {
        return $this->telegram("getMe");
    }

    /*
     * Datas : https://core.telegram.org/bots/api#sendsticker
     * t.me/phpbots
     * t.me/sellgate
     * c4b.ir
     * return : Json
     */
    public function sendSticker($datas = [])
    {
        return $this->telegram("sendSticker", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#sendvideonote
     * t.me/phpbots
     * t.me/sellgate
     * c4b.ir
     * return : Json
     */
    public function sendVideoNote($datas = [])
    {
        return $this->telegram("sendVideoNote", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#sendlocation
     * t.me/phpbots
     * t.me/sellgate
     * c4b.ir
     * return : Json
     */
    public function sendLocation($datas = [])
    {
        return $this->telegram("sendLocation", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#sendvenue
     * t.me/phpbots
     * t.me/sellgate
     * c4b.ir
     * return : Json
     */
    public function sendVenue($datas = [])
    {
        return $this->telegram("sendVenue", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#sendcontact
     * t.me/phpbots
     * t.me/sellgate
     * c4b.ir
     * return : Json
     */
    public function sendContact($datas = [])
    {
        return $this->telegram("sendContact", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#getfile
     * t.me/phpbots
     * t.me/sellgate
     * c4b.ir
     * return : Json
     */
    public function getFile($datas = [])
    {
        return $this->telegram("getFile", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#kickchatmember
     * t.me/phpbots
     * t.me/sellgate
     * c4b.ir
     * return : Json
     */
    public function kickChatMember($datas = [])
    {
        return $this->telegram("kickChatMember", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#unbanchatmember
     * t.me/phpbots
     * t.me/sellgate
     * c4b.ir
     * return : Json
     */
    public function unbanChatMember($datas = [])
    {
        return $this->telegram("unbanChatMember", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#restrictchatmember
     * t.me/phpbots
     * t.me/sellgate
     * c4b.ir
     * return : Json
     */
    public function restrictChatMember($datas = [])
    {
        return $this->telegram("restrictChatMember", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#forwardmessage
     * t.me/phpbots
     * t.me/sellgate
     * c4b.ir
     * return : Json
     */
    public function forwardMessage($datas = [])
    {
        return $this->telegram("forwardMessage", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#promotechatmember
     * t.me/phpbots
     * t.me/sellgate
     * c4b.ir
     * return : Json
     */
    public function promoteChatMember($datas = [])
    {
        return $this->telegram("promoteChatMember", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#exportchatinvitelink
     * t.me/phpbots
     * t.me/sellgate
     * c4b.ir
     * return : Json
     */
    public function exportChatInviteLink($datas = [])
    {
        return $this->telegram("exportChatInviteLink", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#setchatphoto
     * t.me/phpbots
     * t.me/sellgate
     * c4b.ir
     * return : Json
     */
    public function setChatPhoto($datas = [])
    {
        return $this->telegram("setChatPhoto", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#deletechatphoto
     * t.me/phpbots
     * t.me/sellgate
     * c4b.ir
     * return : Json
     */
    public function deleteChatPhoto($datas = [])
    {
        return $this->telegram("deleteChatPhoto", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#setchattitle
     * t.me/phpbots
     * t.me/sellgate
     * c4b.ir
     * return : Json
     */
    public function setChatTitle($datas = [])
    {
        return $this->telegram("setChatTitle", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#setchatdescription
     * t.me/phpbots
     * t.me/sellgate
     * c4b.ir
     * return : Json
     */
    public function setChatDescription($datas = [])
    {
        return $this->telegram("setChatDescription", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#pinchatmember
     * t.me/phpbots
     * t.me/sellgate
     * c4b.ir
     * return : Json
     */
    public function pinChatMessage($datas = [])
    {
        return $this->telegram("pinChatMessage", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#unpinchatmember
     * t.me/phpbots
     * t.me/sellgate
     * c4b.ir
     * return : Json
     */
    public function unpinChatMessage($datas = [])
    {
        return $this->telegram("unpinChatMessage", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#leavechat
     * t.me/phpbots
     * t.me/sellgate
     * c4b.ir
     * return : Json
     */
    public function leaveChat($datas = [])
    {
        return $this->telegram("leaveChat", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#getchatadminstators
     * t.me/phpbots
     * t.me/sellgate
     * c4b.ir
     * return : Json
     */
    public function getChatAdministrators($datas = [])
    {
        return $this->telegram("getChatAdministrators", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#getchatmemberscount
     * t.me/phpbots
     * t.me/sellgate
     * c4b.ir
     * return : Json
     */
    public function getChatMembersCount($datas = [])
    {
        return $this->telegram("getChatMembersCount", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#getchatmember
     * t.me/phpbots
     * t.me/sellgate
     * c4b.ir
     * return : Json
     */
    public function getChatMember($datas = [])
    {
        return $this->telegram("getChatMember", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#answercallbackquery
     * t.me/phpbots
     * t.me/sellgate
     * c4b.ir
     * return : Json
     */
    public function answerCallbackQuery($datas = [])
    {
        return $this->telegram("answerCallbackQuery", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#editmessagetext
     * t.me/phpbots
     * t.me/sellgate
     * c4b.ir
     * return : Json
     */
    public function editMessageText($datas = [])
    {
        return $this->telegram("editMessageText", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#editmessagecaption
     * t.me/phpbots
     * t.me/sellgate
     * c4b.ir
     * return : Json
     */
    public function editMessageCaption($datas = [])
    {
        return $this->telegram("editMessageCaption", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#editmessagereplymarkup
     * t.me/phpbots
     * t.me/sellgate
     * c4b.ir
     * return : Json
     */
    public function editMessageReplyMarkup($datas = [])
    {
        return $this->telegram("editMessageReplyMarkup", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#deletemessage
     * t.me/phpbots
     * t.me/sellgate
     * c4b.ir
     * return : Json
     */
    public function deleteMessage($datas = [])
    {
        return $this->telegram("deleteMessage", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#answerinlinequery
     * t.me/phpbots
     * t.me/sellgate
     * c4b.ir
     * return : Json
     */
    public function answerInlineQuery($datas = [])
    {
        return $this->telegram("answerInlineQuery", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#getuserprofilephotos
     * t.me/phpbots
     * t.me/sellgate
     * c4b.ir
     * return : Json
     */
    public function getUserProfilePhotos($datas = [])
    {
        return $this->telegram("getUserProfilePhotos", $datas);
    }

    /*
     * Datas : https://core.telegram.org/bots/api#sendchataction
     * t.me/phpbots
     * t.me/sellgate
     * c4b.ir
     * return : Json
     */
    public function sendChatAction($datas = [])
    {
        return $this->telegram("sendChatAction", $datas);
    }
}


// instructions (DEMO)
/*
    define("API_KEY", "Telegram Bot Token");

    $telegram = new telegram(API_KEY);

    $data = [
       "chat_id" => 322242763,
       "text" => "Your Text"
    ];

    $telegram->sendMessage($data);
                ----- OR -----
    $telegram = new telegram("Telegram Bot Token");

    $telegram->sendMessage([
       "chat_id" => 322242763,
       "text" => "Your Text"
    ]);
*/
// Powered By @Mench