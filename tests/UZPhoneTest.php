<?php

namespace duke\helper\Tests;

use duke\helper\Rules\UZPhoneChecker;
use Orchestra\Testbench\TestCase;
use Validator;


class UZPhoneTest extends TestCase
{
    protected function validate($number, $rule)
    {
        return !(Validator::make(['attr' => $number], ['attr' => $rule])->fails());
    }

    public $incoming_phone = '+998 11 222 33 44';
    public $correct_phone_in_db = '+998112223344';

    public function testChecker()
    {
        $this->assertEquals(true, $this->validate(
            $this->incoming_phone,
            new UZPhoneChecker()
        ));
    }

    public function testClear()
    {
        var_dump(uz_clear_phone($this->incoming_phone));
        $this->assertTrue(true);
    }

    public function testFormat()
    {
        var_dump(uz_format_phone($this->correct_phone_in_db));
        $this->assertTrue(true);
    }

    public function testHidden()
    {
        var_dump(uz_hidden_phone($this->correct_phone_in_db));
        $this->assertTrue(true);
    }
}
