<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/


$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
}); 

$factory->define(App\Post::class, function (Faker\Generator $faker) {
    $post = $faker;
    $post->title = $faker->text(50);
    $post->slug = toAscii($post->title);
    $post->tags = convertArraytoData($faker->words(5));
    return [
        'title' => $post->title,
        'slug' => $post->slug,
        'tags' => $post->tags,
        'img' => $faker->imageUrl(600,300), 
        'content' => $faker->text(5000)
    ];
});

 
