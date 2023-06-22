<?php

namespace Models;

use \Illuminate\Database\Eloquent\Model;

class Test extends Model {
    protected $table = "users";
    protected $fillable = ["login", "password"];

    public $timestamps = false;
}