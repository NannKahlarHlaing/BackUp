<?php

use Faker\Generator as Faker;

$factory->define() {
    return [
        'title' => $this->faker->setence,
        'body' => $this->faker->paragraph,
        'category_id' => rand(1, 5),
    ];
});
