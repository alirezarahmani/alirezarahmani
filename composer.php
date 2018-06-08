<?php

/*
Challenge 2: Implement AnswerInterface and get Question to echo "4".
*/

class Equation
{
    public function __construct($e)
    {
        try {
            throw $e;
        } catch (Exception | Exception $e) {
            echo "What positive value of 2 - 12?\n";
            if (is_object($answer = $e->find()->the()->result())) {
                echo $answer . PHP_EOL;
            }
        }
    }
}


// start editing here

class Answer extends Exception
{
    private $response;

    public function __construct(int $answer = 4)
    {
        $this->response = $answer;
    }

    public function find(): self
    {
        return $this;
    }

    public function the(): self
    {
        return $this;
    }

    public function result(): self
    {
        return $this;
    }

    public function __toString():string
    {
        return  abs(2-12);
    }

}
$e = new Answer;

// end editing here
$question = new Equation($e);
