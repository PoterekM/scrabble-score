<?php
    require_once "src/Scrabble.php";
    class ScrabbleTest extends PHPUnit_Framework_TestCase
    {

        function testScrabble()

        {
            $test_scrabble = new Scrabble;
            $input = "IQ";

            $result = $test_scrabble->ScrabbleAtor($input);

            $this->assertEquals(["I","Q"], $result);
        }







}
?>
