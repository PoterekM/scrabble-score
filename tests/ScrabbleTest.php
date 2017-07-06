<?php
    require_once "src/Scrabble.php";
    class ScrabbleTest extends PHPUnit_Framework_TestCase
    {

        function testScrabbleOnePoint()

        {
            $test_scrabble = new Scrabble;
            $input = "A";

            $result = $test_scrabble->ScrabbleAtor($input);

            $this->assertEquals(1, $result);
        }

        function testScrabbleMath()

        {
            $test_scrabble = new Scrabble;
            $input = "QJA";

            $result = $test_scrabble->ScrabbleAtor($input);

            $this->assertEquals(19, $result);
        }





    }

        // <!-- function testScrabble()
        //
        // {
        //     $test_scrabble = new Scrabble;
        //     $input = "I";
        //
        //     $result = $test_scrabble->ScrabbleAtor($input);
        //
        //     $this->assertEquals(["I"], $result);
        // }
        //
        // function testScrabbleWord()
        //
        // {
        //     $test_scrabble = new Scrabble;
        //     $input = "word";
        //
        //     $result = $test_scrabble->ScrabbleAtor($input);
        //
        //     $this->assertEquals(["w", "o", "r", "d"], $result);
        // }
        //
        // function testScrabbleUpper()
        //
        // {
        //     $test_scrabble = new Scrabble;
        //     $input = "word";
        //
        //     $result = $test_scrabble->ScrabbleAtor($input);
        //
        //     $this->assertEquals(["W", "O", "R", "D"], $result);
        // }














// } -->
?>
