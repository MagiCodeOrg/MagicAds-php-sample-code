<?php
/**
 * Created by Magicode.
 * User: Mench
 */
function getAds($user_id)
{
    $res = json_decode(file_get_contents(MAGICODE_API_URL . "?api_key=" . MAGICODE_KEY . "&methode=" . GET_ADS . "&user_id=" . $user_id));
    if ($res->ok == true) {
        $response = ["ok" => true, "id" => $res->result->ads_id, "content" => $res->result->ads_title . "\n\n" . $res->result->ads_description];
    } else {
        $response = ["ok" => false, "content" => strError($res->error)];
    }
    return $response;
}