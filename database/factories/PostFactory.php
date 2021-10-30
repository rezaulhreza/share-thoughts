<?php

namespace Database\Factories;

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
            //create fake posts with 20 sentence. 
            //php artisan tinker
            // >>> App\Models\Post::factory()->times(50)->create(['user_id'=>2]);
            'body' => $this->faker->sentence(20),

        ];
    }
}
