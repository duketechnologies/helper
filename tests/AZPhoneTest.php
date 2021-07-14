<?php

namespace duke\helper\Tests;

use duke\helper\Rules\AZPhoneChecker;
use Orchestra\Testbench\TestCase;
use Validator;


class AZPhoneTest extends TestCase
{
    protected function validate($number, $rule)
    {
        return !(Validator::make(['attr' => $number], ['attr' => $rule])->fails());
    }

    public $incoming_phone = '+994 11 222 33 44';
    public $correct_phone_in_db = '+994112223344';

    public function testChecker()
    {
        $this->assertEquals(true, $this->validate(
            $this->incoming_phone,
            new AZPhoneChecker()
        ));
    }

    public function testClear()
    {
        var_dump(az_clear_phone($this->incoming_phone));
        $this->assertTrue(true);
    }

    public function testFormat()
    {
        var_dump(az_format_phone($this->correct_phone_in_db));
        $this->assertTrue(true);
    }

    public function testHidden()
    {
        var_dump(az_hidden_phone($this->correct_phone_in_db));
        $this->assertTrue(true);
    }
}
