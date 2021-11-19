<?php

use Alqahtani\Example\Http\Controllers\MyController;

it('has a route', function(){
    $this
        ->get(action([MyController::class, 'index']))
        ->assertOk()
        ->assertSee('Hi from View in the package!');
});
