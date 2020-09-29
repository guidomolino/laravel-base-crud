<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

use App\Post;

$factory->define(Post::class, function (Faker $faker) {
    return [
      'title'     => $faker -> catchPhrase(),
      'text'      => $faker -> realText($maxNbChars = 200, $indexSize = 2),
      'category'  => $faker -> word(),
      'like'      => $faker -> randomNumber($nbDigits = 10000, $strict = false),
      'dislike'   => $faker -> randomNumber($nbDigits = 10000, $strict = false)
    ];
});
