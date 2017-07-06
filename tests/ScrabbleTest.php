<?php
    require_once "src/Scrabble.php";
    class ScrabbleTest extends PHPUnit_Framework_TestCase
    {

        function testScrabble()

        {
            $test_scrabble = new Scrabble;
            $input = "I";

            $result = $test_scrabble->ScrabbleAtor($input);

            $this->assertEquals(["I"], $result);
        }

        function testScrabbleWord()

        {
            $test_scrabble = new Scrabble;
            $input = "word";

            $result = $test_scrabble->ScrabbleAtor($input);

            $this->assertEquals(["w", "o", "r", "d"], $result);
        }

        function testScrabbleUpper()

        {
            $test_scrabble = new Scrabble;
            $input = "word";

            $result = $test_scrabble->ScrabbleAtor($input);

            $this->assertEquals(["W", "O", "R", "D"], $result);
        }





    }



        // function testScrabbleOnePoint()
        //
        // {
        //     $test_scrabble = new Scrabble;
        //     $input = "A";
        //
        //     $result = $test_scrabble->ScrabbleAtor($input);
        //
        //     $this->assertEquals(["1"], $result);
        // }






// }
?>
