<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ComprobarRolUsuarioTest extends TestCase
{
   /** @test **/

    public function ComprobarRolUsuario()
    {
         $this->assertDatabaseHas('users',
         ['rol' => 'admin']
        );
}
}
