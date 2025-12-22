<?php

class PizzaPi
{
    public function calculateDoughRequirement($pizza, $person):int
    {
        return $pizza * (($person * 20) + 200);
    }

    public function calculateSauceRequirement($pizza, $can_vol):int
    {
        return $pizza * 125 / $can_vol;
    }

    public function calculateCheeseCubeCoverage($cube_dim, $thick, $pizza_diam)
    {
        return floor(($cube_dim ** 3) / ($thick * pi() * $pizza_diam));
    }

    public function calculateLeftOverSlices($pizza, $friend)
    {
        if ($pizza != 0){
            $slice = $pizza * 8;
            return round($slice % $friend);   
        }
        
    }
}