<?php
/**
 * Created by Magicode.
 * User: Mench
 */
function goToAds($ads_id, $user_id)
{
    $res = json_decode(file_get_contents(MAGICODE_API_URL . "?api_key=" . MAGICODE_KEY . "&methode=" . GO_TO_ADS . "&user_id=" . $user_id . "&ads_id=" . $ads_id));
    if ($res->ok == true) {
        $response = ["ok" => true, "url" => $res->result->url];
    } else {
        $response = ["ok" => false, "error" => strError($res->error)];
    }
    return $response;
}