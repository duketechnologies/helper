<?php

namespace duke\helper\Tests;

use duke\helper\Rules\GEPhoneChecker;
use Orchestra\Testbench\TestCase;
use Validator;


class GEPhoneTest extends TestCase
{
    protected function validate($number, $rule)
    {
        return !(Validator::make(['attr' => $number], ['attr' => $rule])->fails());
    }

    public $incoming_phone = '+995 111 22 33 44';
    public $correct_phone_in_db = '+995111223344';

    public function testChecker()
    {
        $this->assertEquals(true, $this->validate(
            $this->incoming_phone,
            new GEPhoneChecker()
        ));
    }

    public function testClear()
    {
        var_dump(ge_clear_phone($this->incoming_phone));
        $this->assertTrue(true);
    }

    public function testFormat()
    {
        var_dump(ge_format_phone($this->correct_phone_in_db));
        $this->assertTrue(true);
    }

    public function testHidden()
    {
        var_dump(ge_hidden_phone($this->correct_phone_in_db));
        $this->assertTrue(true);
    }
}
