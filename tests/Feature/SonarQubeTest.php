<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SonarQubeTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testSonarQube()
    {
        $this->view('sonarqube')->assertSeeText('Hello Sonarqube');
    }

    public function testSonarQubeFailed()
    {
        $data = [];

        $this->view('sonarqube')->assertSeeText('Hello Sonarqube Failed');
    }

    public function testSonarQubeSuccess()
    {
        $response = $this->get('/sonarqube');

        $response->assertStatus(200);
        $response->assertViewIs('sonarqube');
        $response->assertSeeText('Hello Sonarqube');
    }
}
