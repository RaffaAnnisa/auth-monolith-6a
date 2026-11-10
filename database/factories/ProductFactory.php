<?php
namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Modules\Products\Models\Product;
class ProductFactory extends Factory
{
 protected $model = Product::class;
 public function definition(): array
 {
    $names = [
        'Laptop ASUS Vivobook 14', 'Mouse Wireless Logitech M185',
        'Keyboard Mechanical Rexus', 'Monitor LG 24 Inch',
        'Flashdisk Sandisk 64GB', 'Headset Gaming Fantech',
        'Webcam Logitech C270', 'Speaker Bluetooth JBL Go 3',
        'Power Bank Anker 10000mAh', 'SSD Samsung 500GB',
    ];
 
    $name = fake()->unique()->randomElement($names);
 
    return [
        'name' => $name,
        'slug' => \Illuminate\Support\Str::slug($name),
        'description' => fake()->sentence(),
        'price' => fake()->numberBetween(50000, 8000000),
        'stock' => fake()->numberBetween(5, 100),
        'low_stock_threshold' => 5,
        'is_active' => true,
    ];
 }
}