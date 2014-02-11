<?php
  function time_diff_all($firstTime,$lastTime)
    {

        // convert to unix timestamps
        $firstTime=strtotime($firstTime);
        $lastTime=strtotime($lastTime);

        // perform subtraction to get the difference (in seconds) between times
        $timeDiff=$lastTime-$firstTime;

        $day = intval($timeDiff/86400);
        $r = $timeDiff%86400;
        $hours = intval($r/3600);
        $r = $r%3600;
        $minute = intval($r/60);
        $week = intval($day/7);
        $month = intval($day / 30);
        $year = intval($day / 365);
        if ($timeDiff < 60 ) {
            return "Vài giây trước";
        }else if ( $day  == 0 && $hours == 0 ){
            return $minute.' phút trước';
        }elseif ($day == 0 && $hours != 0) {
            return "$hours giờ trước";
        }elseif( $day >0 && $day < 7){
            return "$day ngày trước";
        }elseif($week >0 && $week  < 4){
            return "$week tuần trước";
        }elseif ($month > 0 && $month <13) {
            return "$month tháng trước";
        }else{
            return "$year năm trước";
        }
    } 
    function formatPath($path){
        return str_replace("../","/",$path);
    }
    // clrean [!#@##^$&%*^] in string to tag input
    // convert string to : ex: add-comment-add
     function toSlug($string, $force_lowercase = true, $anal = false) {
            $strip = array("~", "`", "!", "@", "#", "$", "%", "^", "&", "*", "(", ")", "_", "=", "+", "[", "{", "]",
                           "}", "\\", "|", ";", ":", "\"","“","”", "'", "&#8216;", "&#8217;", "&#8220;", "&#8221;", "&#8211;", "&#8212;",
                           "â€”", "â€“", ",", "<", ".", ">", "/", "?","-");
            $clean = trim(str_replace($strip, "", strip_tags($string)));
            $clean = preg_replace('/\s+/', "-", $clean);
            $clean = ($anal) ? preg_replace("/[^a-zA-Z0-9]/", "", $clean) : $clean ;
            return ($force_lowercase) ?
                (function_exists('mb_strtolower')) ? mb_strtolower($clean, 'UTF-8') :strtolower($clean) :
        $clean;
    }
	
	function CutString($string,$leghth){
        if(strlen($string)<=$leghth)
        {
            return $string;
        }
        else{
            if(strpos($string," ",$leghth) > $leghth){
                $new_leghth=strpos($string," ",$leghth);
                $new_string = substr($string,0,$new_leghth);
                return $new_string."...";
            }
            
            $new_string = substr($string,0,$leghth);
            return $new_string."...";
        }
    } 
	
    function formatContent($value) {
        // Break line
        $str = nl2br(trim($value)); 
        return trim($str);
    }
?>