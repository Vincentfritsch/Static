<?php


class Speedometer
{   const  MILES = 1.60934;
    const  KM = 0.621371;
    /**
     * @param float $km
     * @return string
     */
    public static function convertKmToMiles(float $km) : string
    {
        return " 10 Km est égale à " . round($km * self::KM, 2) . "Miles";
    }

    /**
     * @param float $miles
     * @return string
     */
    public static function convertMilesToKm(float $miles) : string
    {
        return " 88 Miles est égale à " . round($miles * self::MILES, 2) . "Km";
    }

}

