<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Box;

class BasicTest extends TestCase
{
    public function testBoxContents(){

        $box = new Box(['toy']);
        $this->assertTrue($box->has('toy'));
        $this->assertFalse($box->has('car'));
    }
}
