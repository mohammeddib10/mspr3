<?php

namespace App\Tests\TestController;

use http\Env\Response;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class IndexTest extends WebTestCase
{
    /**
     *
     */
    public function testIndexPage(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');
        $this->assertResponseStatusCodeSame(200);
        //$this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Hello');
    }

}
