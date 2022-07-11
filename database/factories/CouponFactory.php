<?php

namespace Database\Factories;

use App\Contracts\Coupon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Coupon>
 */
class CouponFactory extends Factory
{
    /**
     * @var array
     */
    private array $couponTypes = [
        0 => Coupon::COUPON_TYPE_DEPOSIT,
        1 => Coupon::COUPON_TYPE_DISCOUNT,
    ];

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'code'        => Str::random(10),
            'type'        => $this->faker->randomElement($this->couponTypes),
            'availableTo' => $this->faker->dateTimeBetween('-15 days', '+90 days'),
            'sum'         => $this->faker->randomFloat(2, 0.01, 50),
            'used'        => rand(0, 1),
        ];
    }
}
