<?php

namespace ktarila\ParameterValidatorBundle\Tests\Validation;

use ktarila\ParameterValidatorBundle\Tests\Kernel;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RequestValidationTest extends WebTestCase
{
    /** @test */
    public function testGetRequestViolations()
    {
        $client = static::createClient();
        $client->request('GET', '/get-request-violations', [
            'name' => 'ktarila',
            'email' => 'ktarila@gmail.com',
        ]);

        $content = json_decode($client->getResponse()->getContent(), true);
        $this->assertResponseIsSuccessful();
        $this->assertEquals('ktarila', $content['name']);
    }

    protected static function getKernelClass(): string
    {
        return Kernel::class;
    }
}
