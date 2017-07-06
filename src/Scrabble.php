<?php

    class Scrabble

    {

        function scrabbleAtor($input)
        {
            $word_to_upper = strtoupper($input);
            $word_split = str_split($word_to_upper);
            return $word_split;
        }



        // // function scoreAtor($word)
        // // {
        //     // $points = array();
        //     // $points = "1";
        //     // $one_point = array("A" => 1, "E" => 1, "I" => 1, "O" => 1, "U" => 1, "L" => 1, "N" => 1, "R" => 1, "S" => 1, "T" => 1);
        //     foreach($word as $letter)
        //     {
        //         if($letter == "A") {
        //             // array_push($points);
        //         }
        //     return "1";
        //     }
         }
    // }
 ?>
