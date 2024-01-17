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
        $data = [
            'name' => 'Bimo'
        ];

        $this->view('sonarqube', $data)->assertSeeText('Hello Sonarqube');
    }

    public function testSonarQubeFailed()
    {
        $this->view('sonarqube')->assertSeeText('Hello Sonarqube Failed');
    }

    public function testSonarQubeSuccess()
    {
        $data = [
            'name' => 'Bimo'
        ];

        $this->view('sonarqube')->assertSeeText('Hello Sonarqube');
    }
}
