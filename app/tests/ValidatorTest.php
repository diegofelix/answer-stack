<?php

use Champ\Core\Validation\StubValidator;

class ValidatorTest extends TestCase {

  public function testCreateSuccess()
  {
    $stub = new StubValidator;
    $this->assertTrue($stub->passes($this->getValidCreateData()));
  }

  public function testCreateFailure()
  {
    $stub = new StubValidator;
    $this->assertFalse($stub->passes($this->getInvalidCreateData()));
    $this->assertEquals(3, count($stub->errors()));
    $this->assertInstanceOf('Illuminate\Support\MessageBag', $stub->errors());
  }

  public function testValidUpdateData()
  {
    $stub = new StubValidator;
    $this->assertTrue($stub->passes($this->getInvalidCreateData(), 'update'));
  }

  public function getValidCreateData()
  {
    return [
      'username' => 'diegofelix',
      'email' => 'contato@diegofelix.com.br',
      'password' => 'my_password',
      'password_confirmation' => 'my_password'
    ];
  }

  public function getInvalidCreateData()
  {
    return [
      'username' => '<@)}}}><{',
      'email' => 'this is not an email',
      'password' => 'my_password',
      'password_confirmation' => 'blah_blah_blah'
    ];
  }

}