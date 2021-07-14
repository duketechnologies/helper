<?php

namespace duke\helper\Tests;

use duke\helper\Rules\KZPhoneChecker;
use Orchestra\Testbench\TestCase;
use Validator;


class KZPhoneTest extends TestCase
{
    protected function validate($number, $rule)
    {
        return !(Validator::make(['attr' => $number], ['attr' => $rule])->fails());
    }

    public $incoming_phone = '+7 777 111 22 33';
    public $correct_phone_in_db = '+77771112233';

    public function testChecker()
    {
        $this->assertEquals(true, $this->validate(
            $this->incoming_phone,
            new KZPhoneChecker()
        ));
    }

    public function testClear()
    {
        var_dump(kz_clear_phone($this->incoming_phone));
        $this->assertTrue(true);
    }

    public function testFormat()
    {
        var_dump(kz_format_phone($this->correct_phone_in_db));
        $this->assertTrue(true);
    }

    public function testHidden()
    {
        var_dump(kz_hidden_phone($this->correct_phone_in_db));
        $this->assertTrue(true);
    }
}
