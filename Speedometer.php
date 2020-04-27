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
        return round($km * self::KM, 2);
    }

    /**
     * @param float $miles
     * @return string
     */
    public static function convertMilesToKm(float $miles) : string
    {
        return round($miles * self::MILES, 2);
    }

}

