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







}
?>
