<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => 1,
            'post_id' => 1,
            'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque blanditiis laboriosam, distinctio reiciendis quidem officiis culpa asperiores. Molestiae accusantium.'
        ];
    }
}
