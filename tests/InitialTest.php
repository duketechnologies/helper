<?php

namespace duke\helper\Tests;

use duke\helper\Rules\AZPhoneChecker;
use duke\helper\Rules\BYPhoneChecker;
use duke\helper\Rules\GEPhoneChecker;
use duke\helper\Rules\KZPhoneChecker;
use duke\helper\Rules\UZPhoneChecker;
use Orchestra\Testbench\TestCase;
use Validator;


class InitialTest extends TestCase
{
    protected function validate($number, $rule)
    {
        return !(Validator::make(['attr' => $number], ['attr' => $rule])->fails());
    }

    public function testAZPhone()
    {
        $this->assertEquals(true, $this->validate('+994 11 222 33 44', new AZPhoneChecker()));
    }

    public function testBYPhone()
    {
        $this->assertEquals(true, $this->validate('+375 11 222 33 44', new BYPhoneChecker()));
    }

    public function testGEPhone()
    {
        $this->assertEquals(true, $this->validate('+995 111 22 33 44', new GEPhoneChecker()));
    }

    public function testKZPhone()
    {
        $this->assertEquals(true, $this->validate('+7 777 111 22 33', new KZPhoneChecker()));
    }

    public function testUZPhone()
    {
        $this->assertEquals(true, $this->validate('+998 11 222 33 44', new UZPhoneChecker()));
    }
}
