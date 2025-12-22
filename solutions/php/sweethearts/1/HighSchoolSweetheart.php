<?php

class HighSchoolSweetheart
{
    public function firstLetter(string $name): string
    {
        //throw new \BadFunctionCallException("Implement the function");
        $tname = trim($name);
        return substr($tname, 0, 1);
    }

    public function initial(string $name): string
    {
        //throw new \BadFunctionCallException("Implement the function");
        return mb_strtoupper($this->firstLetter($name)) . ".";
    }

    public function initials(string $name): string
    {
        //throw new \BadFunctionCallException("Implement the function");
        $seprate_name = explode(" ", $name);
        //list($seprate_name_a, $seprate_name_b) = $seprate_name;
        
        return ($this->initial($seprate_name[0])) . " " . 
            ($this->initial($seprate_name[1]));
    }

    public function pair(string $sweetheart_a, string $sweetheart_b): string
    {
        //throw new \BadFunctionCallException("Implement the function");
        $names = $this->initials($sweetheart_a) . "  +  " . $this->initials($sweetheart_b);
        
        return <<<EXPECTED_HEART
         ******       ******
       **      **   **      **
     **         ** **         **
    **            *            **
    **                         **
    **     $names     **
     **                       **
       **                   **
         **               **
           **           **
             **       **
               **   **
                 ***
                  *
    EXPECTED_HEART;
    }
}
