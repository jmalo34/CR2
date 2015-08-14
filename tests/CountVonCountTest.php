<?php

    require_once "src/CountVonCount.php";

    class CountVonCountTest extends PHPUnit_Framework_TestCase
    {

        function test_countInstances_idWord()
        {
            //Arrange
            $test_CountVonCount = new CountVonCount;
            $input = "Sesame";

            //Act
            $result = $test_CountVonCount->countInstances($input);

            //Assert
            $this->assertEquals("1", $result);
        }
    }

    
 ?>
