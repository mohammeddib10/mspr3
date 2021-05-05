<?php

namespace App\Tests\TestController;

use http\Env\Response;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ClientControllerTest extends WebTestCase
{

    /**
     *
     */
    public function testClientViewPage(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/client/');
        $this->assertResponseStatusCodeSame(200);
        //$this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h4', 'Project MSPR 3');
    }

    /**
     *
     */
    public function testClientNewage(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/client/new');
        $this->assertResponseStatusCodeSame(200);
        //$this->assertResponseIsSuccessful();
        //$this->assertSelectorTextContains('h1', 'Hello World');
    }

}
