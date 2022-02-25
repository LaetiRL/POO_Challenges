<?php

class Speedometer
{
    const ONE_MILEINKM = 1.60934; 
    const ONE_KMINMILE = 0.621371; 

    public static function convertKmToMiles($km)
    {
        $result = $km * self::ONE_KMINMILE;
        return round($result,2);
    }
    
    public static function convertMilesToKm($miles)
    {
        $result = $miles * self::ONE_MILEINKM;
        return round($result,2);
    }
}