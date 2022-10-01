<?php

namespace Database\Factories;

use App\Models\Page;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Page::class;
    public function definition()
    {
        return [
            'title'=>$this->faker->name,
            'slug'=>Str::slug($this->faker->name),
            'image'=>$this->faker->text,
        ];
    }
}
