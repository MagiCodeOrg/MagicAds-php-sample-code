<?php
/**
 * Created by Magicode.
 * User: Mench
 */
function strError($error)
{
    $str = str_replace("-1", "کلیدی یافت نشد", $error);
    $str = str_replace("-2", "تبلیغی جهت نمایش وجود ندارد", $str);
    $str = str_replace("-3", "لطفا متدی را انتخای نمایید", $str);
    $str = str_replace("1", "ورودی ها نباید خالی باشد", $str);
    $str = str_replace("2", "یک آیدی تبلیغ را ارسال نمایید", $str);
    $str = str_replace("3", "تبلیغی یافت نشد", $str);
    $str = str_replace("6", "کاربر مدنظر یافت نشد", $str);
    return $str;
}