<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TradingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $ltp = $this->faker->randomFloat(2, 100, 9000);
        $high = $this->faker->randomFloat(2, $ltp, $ltp + 100);
        $low = $this->faker->randomFloat(2, $ltp - 100, $ltp);
        $close_price = $this->faker->randomFloat(2, $low, $ltp);
        $ycp = $this->faker->randomFloat(2, $ltp, $high);
        $change = $ltp - $ycp;
        $trade = $this->faker->randomDigitNotNull;
        $value_mn = $this->faker->randomFloat(2, 0, 1000);
        $volume = $this->faker->randomFloat(2, 0, 1000);
        return [
            'code' => Str::random(10),
            'ltp' => $ltp,
            'high' => $high,
            'low' => $low,
            'close_price' => $close_price,
            'ycp' => $ycp,
            'change' => $change,
            'trade' => $trade,
            'value_mn' => $value_mn,
            'volume' => $volume,
        ];
    }
}
