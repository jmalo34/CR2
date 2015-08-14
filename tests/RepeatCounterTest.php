<?php

    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {

        function test_countInstances_idWord()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input = "Sesame";

            //Act
            $result = $test_RepeatCounter->countRepeats($input);

            //Assert
            $this->assertEquals("1", $result);
        }

        function test_countInstances_howMany()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input = "How to get to Sesame Street";

            //Act
            $result = $test_RepeatCounter->countRepeats($input);

            //Assert
            $this->assertEquals("1", $result);
        }
    }


 ?>
