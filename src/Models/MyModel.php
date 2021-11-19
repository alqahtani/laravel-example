<?php

namespace Alqahtani\Example\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MyModel extends Model
{
    use HasFactory;

    public $guarded = [];

    public function getUppercasedName(): string
    {
        return strtoupper($this->name);
    }
}
