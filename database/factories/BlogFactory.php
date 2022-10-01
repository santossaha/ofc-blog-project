<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Blog::class;
    public function definition()
    {

        return [
            'title'=>$this->faker->name,
            'slug'=>Str::slug($this->faker->name),
            'image'=>'images/solution-deliver-img3',
            'description'=>$this->faker->text,
            'meta_title'=>$this->faker->text,
            'meta_keyword'=>$this->faker->text,
            'meta_description'=>$this->faker->text,
            'meta_robots'=>$this->faker->text,
            'image_title'=>$this->faker->text,
            'image_alt'=>$this->faker->text,
            'front_image'=>'images/solution-deliver-img3',
            'front_image_title'=>$this->faker->text,
            'front_image_alt'=>$this->faker->text,
            'publish_date'=>$this->faker->dateTime('now'),
            'publish_by'=>'Doorway',
        ];
    }
}
