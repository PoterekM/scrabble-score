<?php

    class Scrabble

    {

        function scrabbleAtor($input)
        {
            $word_to_upper = strtoupper($input);
            $word_split = str_split($word_to_upper);
            foreach($word_split as $split)
            {
                if ($split == "A" || $split == "E" || $split == "I" || $split == "O" || $split == "U" || $split == "L" || $split == "N" || $split == "R" || $split == "S" || $split == "T") {
                    return ["1"];
                } elseif ($split == "D" || $split == "G") {
                    return ["2"];
                } elseif ($split == "B" || $split == "C" || $split == "M" || $split == "P") {
                    return ["3"];
                } elseif ($split == "F" || $split == "H" || $split == "V" || $split == "W" || $split == "Y") {
                    return ["4"];
                } elseif ($split == "K") {
                    return ["5"];
                } elseif ($split == "J" || $split == "X") {
                    return ["8"];
                } elseif ($split == "Q" || $split == "Z") {
                    return ["10"];
                }
            }



            // return $word_split;
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
