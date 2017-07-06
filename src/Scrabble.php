<?php

    class Scrabble

    {

        function scrabbleAtor($input)
        {
            $word_to_upper = strtoupper($input);
            $word_split = str_split($word_to_upper);

            $array_of_letters = [];
            foreach($word_split as $split)
            {
                if ($split == "A" || $split == "E" || $split == "I" || $split == "O" || $split == "U" || $split == "L" || $split == "N" || $split == "R" || $split == "S" || $split == "T") {
                    $this->score = 1;
                    array_push($array_of_letters, $this->score);
                } elseif ($split == "D" || $split == "G") {
                    $this->score = 2;
                    array_push($array_of_letters, $this->score);
                } elseif ($split == "B" || $split == "C" || $split == "M" || $split == "P") {
                    $this->score = 3;
                    array_push($array_of_letters, $this->score);
                } elseif ($split == "F" || $split == "H" || $split == "V" || $split == "W" || $split == "Y") {
                    $this->score = 4;
                    array_push($array_of_letters, $this->score);
                } elseif ($split == "K") {
                    $this->score = 5;
                    array_push($array_of_letters, $this->score);
                } elseif ($split == "J" || $split == "X") {
                    $this->score = 8;
                    array_push($array_of_letters, $this->score);
                } elseif ($split == "Q" || $split == "Z") {
                    $this->score = 10;
                    array_push($array_of_letters, $this->score);
                }
            }
            $totalScore = array_sum($array_of_letters);
            return $totalScore;
            var_dump($totalScore);


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
