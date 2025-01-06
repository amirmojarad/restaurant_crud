<?php

namespace Database\Factories;

use App\Models\Menu;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MenuItem>
 */
class MenuItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $foodNames = [
            'Pancakes',
            'Scrambled Eggs',
            'Burger',
            'Pizza',
            'Sushi',
            'Tacos',
            'Salad',
            'Spaghetti',
            'Ice Cream',
            'Fried Chicken',
        ];


        return [
            'title' => $this->faker->randomElement($foodNames),
            'menu_id' => Menu::factory(),
            'waiting_time' => $this->faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]),
            'price' =>$this->faker->randomFloat(2, 10, 100),
        ];
    }
}
