<?php

use Alqahtani\Example\Models\MyModel;

it('can return the uppercased value of a name', function(){
    $myModel = MyModel::factory()->create(['name'=> 'Ahmed']);

    expect($myModel->getUppercasedName())->toEqual('AHMED');
});
