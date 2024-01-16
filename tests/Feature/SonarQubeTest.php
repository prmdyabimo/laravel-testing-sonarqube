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
}
