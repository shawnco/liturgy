<?php

/**
 * Gets the current week and season 
 */
function getSeason(){
    $season = array('season' => '', 'week' => '', 'day' => '');
    $today = date();
    $easter = easter_date(date('Y'));
    $christmas = date('December 25, ' . date('Y'));
    
    // Lent lasts 6 weeks
    if($today >= strtotime('-6 weeks', $easter) && $today < strtotime('-5 weeks', $easter)){
        $season['season'] = 'lent'; $season['week'] = 1;
    }else if($today >= strtotime('-5 weeks', $easter) && $today < strtotime('-4 weeks', $easter)){
        $season['season'] = 'lent'; $season['week'] = 2;
    }else if($today >= strtotime('-4 weeks', $easter) && $today < strtotime('-3 weeks', $easter)){
        $season['season'] = 'lent'; $season['week'] = 3;
    }else if($today >= strtotime('-3 weeks', $easter) && $today < strtotime('-2 weeks', $easter)){
        $season['season'] = 'lent'; $season['week'] = 4;
    }else if($today >= strtotime('-2 weeks', $easter) && $today < strtotime('-1 week', $easter)){
        $season['season'] = 'lent'; $season['week'] = 5;
    }else if($today >= strtotime('-1 week', $easter) && $today < $easter){
        $season['season'] = 'lent'; $season['week'] = 6;
    }else
    // Easter lasts 7 weeks
    if($today >= $easter && $today < strtotime('+1 week', $easter)){
        $season['season'] = 'easter'; $season['week'] = 1;
    }else if($today >= strtotime('+1 week', $easter) && $today < strtotime('+2 weeks', $easter)){
        $season['season'] = 'easter'; $season['week'] = 2;
    }else if($today >= strtotime('+2 week', $easter) && $today < strtotime('+3 weeks', $easter)){
        $season['season'] = 'easter'; $season['week'] = 3;
    }else if($today >= strtotime('+3 week', $easter) && $today < strtotime('+4 weeks', $easter)){
        $season['season'] = 'easter'; $season['week'] = 4;
    }else if($today >= strtotime('+4 week', $easter) && $today < strtotime('+5 weeks', $easter)){
        $season['season'] = 'easter'; $season['week'] = 5;
    }else if($today >= strtotime('+5 week', $easter) && $today < strtotime('+6 weeks', $easter)){
        $season['season'] = 'easter'; $season['week'] = 6;        
    }else if($today >= strtotime('+6 week', $easter) && $today < strtotime('+7 weeks', $easter)){
        $season['season'] = 'easter'; $season['week'] = 7;
    }
}

?>