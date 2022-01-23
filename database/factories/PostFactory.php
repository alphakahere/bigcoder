<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => 1,
            'category_id'=> Category::factory(),
            'slug' => $this->faker->word(),
            'title' => $this->faker->word(),
            'excerpt' => $this->faker->paragraph(),
            'body' => '<p>'.implode('<p></p>',$this->faker->paragraphs(10)).'</p>',
            'time' => 10,
        ];
    }
}
