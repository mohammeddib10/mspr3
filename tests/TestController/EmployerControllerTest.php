<?php

namespace App\Tests\TestController;

use http\Env\Response;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class EmployerControllerTest extends WebTestCase
{

    /**
     *
     */
    public function testEmployerViewPage(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/employer/');
        $this->assertResponseStatusCodeSame(200);
        //$this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h4', 'Project MSPR 3');
    }

    /**
     * function qui test la page de création d'un nouveau employeur
     */
    public function testEmployerNewPage(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/employer/new');
        $this->assertResponseStatusCodeSame(200);
        //$this->assertResponseIsSuccessful();
        //$this->assertSelectorTextContains('h1', 'Hello World');
    }
}
