<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use App\Model;
use Faker\Generator as Faker;


$factory->define(Post::class, function (Faker $faker) {
    return [
      'title'     => $faker -> catchPhrase(),
      'text'      => $faker -> realText($maxNbChars = 200, $indexSize = 2),
      'category'  => $faker -> word(),
      'like'      => $faker -> numberBetween($min = 1, $max = 9000),
      'dislike'   => $faker -> numberBetween($min = 1, $max = 9000)
    ];
});
