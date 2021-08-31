<?php

namespace duke\helper\Tests;

use duke\helper\Rules\AMPhoneChecker;
use Orchestra\Testbench\TestCase;
use Validator;


class AMPhoneTest extends TestCase
{
    protected function validate($number, $rule)
    {
        return !(Validator::make(['attr' => $number], ['attr' => $rule])->fails());
    }

    public $incoming_phone = '+374 11 22 33 44';
    public $correct_phone_in_db = '+37411223344';

    public function testChecker()
    {
        $this->assertEquals(true, $this->validate(
            $this->incoming_phone,
            new AMPhoneChecker()
        ));
    }

    public function testClear()
    {
        var_dump(am_clear_phone($this->incoming_phone));
        $this->assertTrue(true);
    }

    public function testFormat()
    {
        var_dump(am_format_phone($this->correct_phone_in_db));
        $this->assertTrue(true);
    }

    public function testHidden()
    {
        var_dump(am_hidden_phone($this->correct_phone_in_db));
        $this->assertTrue(true);
    }
}
