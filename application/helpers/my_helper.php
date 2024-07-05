<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('humanTiming'))
{
     function humanTiming($time){
        $time = time() - $time; // to get the time since that moment  
        $tokens = array (
            31536000 => 'year',
            2592000 => 'month',
            604800 => 'week',
            86400 => 'day',
            3600 => 'hour',
            60 => 'minute',
            1 => 'second',
            0 => 'second'
        );
        foreach ($tokens as $unit => $text) {
            if ($time < $unit) continue;
            $numberOfUnits = @floor($time / $unit);
            return $numberOfUnits.' '.$text.(($numberOfUnits>=0)?'s':'');
        }
      }
}

if ( ! function_exists('modifiedDate'))
{
     
        function modifiedDate($givenDate=null)
        {
            /* if($givenDate){
                $today = new DateTime('now');
                $todayDate = $today->format('Y-m-d'); 
                $newDate = new DateTime($givenDate);
                $recordDate = $newDate->format('Y-m-d');
                if($recordDate == $today){
                    $recordDate = $newDate->format('g:i a');
                }else{
                    $recordDate = $newDate->format('M j,Y');
                }
                return $recordDate;
            } */
			if($givenDate){
			 //	$date = date('m-d-Y', strtotime($givenDate));                              
			//	$nextday =  date('m-d-Y', strtotime($givenDate . " +1 days"));
			$nextday =  date('Y-m-d', strtotime($givenDate . " +1 days"));
				if($nextday > date('Y-m-d')){
					$recordDate =  date('h:i A', strtotime($givenDate));
				}else{
					$recordDate =  date('M j, Y', strtotime( $givenDate));
				}
				return $recordDate;
			}
          
        }
      
}

if ( ! function_exists('phoneFormat'))
{
        // Create a formatting function
        function phoneFormat($number) {
            if(ctype_digit($number) && strlen($number) == 10) {
              $number = substr($number, 0, 3) .'-'. substr($number, 3, 3) .'-'. substr($number, 6);
            } else {
                if(ctype_digit($number) && strlen($number) == 7) {
                    $number = substr($number, 0, 3) .'-'. substr($number, 3, 4);
                }
            }
            return $number;
        }
}
