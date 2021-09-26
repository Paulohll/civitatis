<?php

namespace Database\Factories;

use App\Models\Note;
use Illuminate\Database\Eloquent\Factories\Factory;

class NoteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Note::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'data' => $this->faker->text($maxNbChars = 250),
            'status' => $this->faker->randomElement(['published','draft','null']),
            'collection' => $this->faker->randomElement(['clients','contacts','leads']),
            'modified_by' => $this->faker->uuid, // TODO - this must by replace by id valid
        ];
    }
}
