<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Length;
use App\Models\Role;
use App\Models\Service;
use App\Models\Specialization;
use App\Models\Subcategory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Role::factory()
            ->count(3)
            ->sequence(
                ['name' => 'user'],
                ['name' => 'employee'],
                ['name' => 'admin'],
            )
            ->create();

        Length::factory()
            ->count(3)
            ->sequence(
                ['name' => 'S'],
                ['name' => 'M'],
                ['name' => 'L'],
            )
            ->create();

        Specialization::factory()
            ->count(3)
            ->sequence(
                ['name' => 'Стилист'],
                ['name' => 'Топ-стилист'],
                ['name' => 'Арт-стилист'],
            )
            ->create();

        Category::factory()
            ->count(6)
            ->sequence(
                ['name' => 'Стрижки'],
                ['name' => 'Окрашивание'],
                ['name' => 'Укладки'],
                ['name' => 'Наращивание'],
                ['name' => 'Афро косы'],
                ['name' => 'Для мужчин'],
            )
            ->create();

        Subcategory::factory()
            ->count(27)
            ->sequence(
                [
                    'name' => 'Женская',
                    'category_id' => 1,
                ],
                [
                    'name' => 'Ровный срез',
                    'category_id' => 1,
                ],
                [
                    'name' => 'Полировка',
                    'category_id' => 1,
                ],
                [
                    'name' => 'Коррекция',
                    'category_id' => 1,
                ],
                [
                    'name' => 'Детская',
                    'category_id' => 1,
                ],
                [
                    'name' => 'Один тон / тонирование',
                    'category_id' => 2,
                ],
                [
                    'name' => 'Total blonde',
                    'category_id' => 2,
                ],
                [
                    'name' => 'Мелирование / балаяж',
                    'category_id' => 2,
                ],
                [
                    'name' => 'Air touch',
                    'category_id' => 2,
                ],
                [
                    'name' => 'Укладка',
                    'category_id' => 3,
                ],
                [
                    'name' => 'Вечерня причёска',
                    'category_id' => 3,
                ],
                [
                    'name' => 'Свадебная причёска',
                    'category_id' => 3,
                ],
                [
                    'name' => 'Цветные пряди',
                    'category_id' => 4,
                ],
                [
                    'name' => 'Чёлка',
                    'category_id' => 4,
                ],
                [
                    'name' => 'Капсульное',
                    'category_id' => 4,
                ],
                [
                    'name' => 'Ленточное',
                    'category_id' => 4,
                ],
                [
                    'name' => 'Снятие волос',
                    'category_id' => 4,
                ],
                [
                    'name' => 'Перекапсуляция',
                    'category_id' => 4,
                ],
                [
                    'name' => 'Детские',
                    'category_id' => 5,
                ],
                [
                    'name' => 'Взрослые',
                    'category_id' => 5,
                ],
                [
                    'name' => 'На брейдинге',
                    'category_id' => 5,
                ],
                [
                    'name' => 'Две косы',
                    'category_id' => 5,
                ],
                [
                    'name' => 'Афро затылок',
                    'category_id' => 5,
                ],
                [
                    'name' => 'Плетение виска',
                    'category_id' => 5,
                ],
                [
                    'name' => 'Мужская',
                    'category_id' => 6,
                ],
                [
                    'name' => 'Детская',
                    'category_id' => 6,
                ],
                [
                    'name' => 'Камуфляж седины',
                    'category_id' => 6,
                ],
            )
            ->create();

        Service::factory()
            ->count(90)
            ->sequence(
                [
                    'specialization_id' => 1,
                    'subcategory_id' => 1,
                    'length_id' => 1,
                    'price' => 1000,
                ],
                [
                    'specialization_id' => 1,
                    'subcategory_id' => 1,
                    'length_id' => 2,
                    'price' => 1200,
                ],
                [
                    'specialization_id' => 1,
                    'subcategory_id' => 1,
                    'length_id' => 3,
                    'price' => 1500,
                ],
                [
                    'specialization_id' => 2,
                    'subcategory_id' => 1,
                    'length_id' => 1,
                    'price' => 1200,
                ],
                [
                    'specialization_id' => 2,
                    'subcategory_id' => 1,
                    'length_id' => 2,
                    'price' => 1500,
                ],
                [
                    'specialization_id' => 2,
                    'subcategory_id' => 1,
                    'length_id' => 3,
                    'price' => 2000,
                ],
                [
                    'specialization_id' => 3,
                    'subcategory_id' => 1,
                    'length_id' => 1,
                    'price' => 1500,
                ],
                [
                    'specialization_id' => 3,
                    'subcategory_id' => 1,
                    'length_id' => 2,
                    'price' => 2000,
                ],
                [
                    'specialization_id' => 3,
                    'subcategory_id' => 1,
                    'length_id' => 3,
                    'price' => 2500,
                ],
                [
                    'specialization_id' => 1,
                    'subcategory_id' => 2,
                    'price' => 1000,
                ],
                [
                    'specialization_id' => 2,
                    'subcategory_id' => 2,
                    'price' => 1200,
                ],
                [
                    'specialization_id' => 3,
                    'subcategory_id' => 2,
                    'price' => 1500,
                ],
                [
                    'specialization_id' => 1,
                    'subcategory_id' => 3,
                    'price' => 1500,
                ],
                [
                    'specialization_id' => 2,
                    'subcategory_id' => 3,
                    'price' => 2000,
                ],
                [
                    'specialization_id' => 3,
                    'subcategory_id' => 3,
                    'price' => 2500,
                ],
                [
                    'specialization_id' => 1,
                    'subcategory_id' => 4,
                    'price' => 300,
                ],
                [
                    'specialization_id' => 2,
                    'subcategory_id' => 4,
                    'price' => 500,
                ],
                [
                    'specialization_id' => 3,
                    'subcategory_id' => 4,
                    'price' => 800,
                ],
                [
                    'specialization_id' => 1,
                    'subcategory_id' => 5,
                    'price' => 1000,
                ],
                [
                    'specialization_id' => 2,
                    'subcategory_id' => 5,
                    'price' => 1200,
                ],
                [
                    'specialization_id' => 3,
                    'subcategory_id' => 5,
                    'price' => 1500,
                ],
                [
                    'specialization_id' => 1,
                    'subcategory_id' => 6,
                    'length_id' => 1,
                    'price' => 2000,
                ],
                [
                    'specialization_id' => 1,
                    'subcategory_id' => 6,
                    'length_id' => 2,
                    'price' => 2500,
                ],
                [
                    'specialization_id' => 1,
                    'subcategory_id' => 6,
                    'length_id' => 3,
                    'price' => 4000,
                ],
                [
                    'specialization_id' => 2,
                    'subcategory_id' => 6,
                    'length_id' => 1,
                    'price' => 2500,
                ],
                [
                    'specialization_id' => 2,
                    'subcategory_id' => 6,
                    'length_id' => 2,
                    'price' => 3000,
                ],
                [
                    'specialization_id' => 2,
                    'subcategory_id' => 6,
                    'length_id' => 3,
                    'price' => 5000,
                ],
                [
                    'specialization_id' => 3,
                    'subcategory_id' => 6,
                    'length_id' => 1,
                    'price' => 3000,
                ],
                [
                    'specialization_id' => 3,
                    'subcategory_id' => 6,
                    'length_id' => 2,
                    'price' => 4000,
                ],
                [
                    'specialization_id' => 3,
                    'subcategory_id' => 6,
                    'length_id' => 3,
                    'price' => 6000,
                ],
                [
                    'specialization_id' => 1,
                    'subcategory_id' => 7,
                    'length_id' => 1,
                    'price' => 4000,
                ],
                [
                    'specialization_id' => 1,
                    'subcategory_id' => 7,
                    'length_id' => 2,
                    'price' => 5000,
                ],
                [
                    'specialization_id' => 1,
                    'subcategory_id' => 7,
                    'length_id' => 3,
                    'price' => 6000,
                ],
                [
                    'specialization_id' => 2,
                    'subcategory_id' => 7,
                    'length_id' => 1,
                    'price' => 5000,
                ],
                [
                    'specialization_id' => 2,
                    'subcategory_id' => 7,
                    'length_id' => 2,
                    'price' => 6000,
                ],
                [
                    'specialization_id' => 2,
                    'subcategory_id' => 7,
                    'length_id' => 3,
                    'price' => 7000,
                ],
                [
                    'specialization_id' => 3,
                    'subcategory_id' => 7,
                    'length_id' => 1,
                    'price' => 6000,
                ],
                [
                    'specialization_id' => 3,
                    'subcategory_id' => 7,
                    'length_id' => 2,
                    'price' => 7000,
                ],
                [
                    'specialization_id' => 3,
                    'subcategory_id' => 7,
                    'length_id' => 3,
                    'price' => 9000,
                ],
                [
                    'specialization_id' => 1,
                    'subcategory_id' => 8,
                    'length_id' => 1,
                    'price' => 5000,
                ],
                [
                    'specialization_id' => 1,
                    'subcategory_id' => 8,
                    'length_id' => 2,
                    'price' => 6000,
                ],
                [
                    'specialization_id' => 1,
                    'subcategory_id' => 8,
                    'length_id' => 3,
                    'price' => 7000,
                ],
                [
                    'specialization_id' => 2,
                    'subcategory_id' => 8,
                    'length_id' => 1,
                    'price' => 6000,
                ],
                [
                    'specialization_id' => 2,
                    'subcategory_id' => 8,
                    'length_id' => 2,
                    'price' => 7000,
                ],
                [
                    'specialization_id' => 2,
                    'subcategory_id' => 8,
                    'length_id' => 3,
                    'price' => 8000,
                ],
                [
                    'specialization_id' => 3,
                    'subcategory_id' => 8,
                    'length_id' => 1,
                    'price' => 7000,
                ],
                [
                    'specialization_id' => 3,
                    'subcategory_id' => 8,
                    'length_id' => 2,
                    'price' => 8000,
                ],
                [
                    'specialization_id' => 3,
                    'subcategory_id' => 8,
                    'length_id' => 3,
                    'price' => 10000,
                ],
                [
                    'specialization_id' => 1,
                    'subcategory_id' => 9,
                    'length_id' => 1,
                    'price' => 6000,
                ],
                [
                    'specialization_id' => 1,
                    'subcategory_id' => 9,
                    'length_id' => 2,
                    'price' => 7000,
                ],
                [
                    'specialization_id' => 1,
                    'subcategory_id' => 9,
                    'length_id' => 3,
                    'price' => 8000,
                ],
                [
                    'specialization_id' => 2,
                    'subcategory_id' => 9,
                    'length_id' => 1,
                    'price' => 7000,
                ],
                [
                    'specialization_id' => 2,
                    'subcategory_id' => 9,
                    'length_id' => 2,
                    'price' => 10000,
                ],
                [
                    'specialization_id' => 2,
                    'subcategory_id' => 9,
                    'length_id' => 3,
                    'price' => 15000,
                ],
                [
                    'specialization_id' => 3,
                    'subcategory_id' => 9,
                    'length_id' => 1,
                    'price' => 10000,
                ],
                [
                    'specialization_id' => 3,
                    'subcategory_id' => 9,
                    'length_id' => 2,
                    'price' => 15000,
                ],
                [
                    'specialization_id' => 3,
                    'subcategory_id' => 9,
                    'length_id' => 3,
                    'price' => 20000,
                ],
                [
                    'specialization_id' => 1,
                    'subcategory_id' => 10,
                    'length_id' => 2,
                    'price' => 7000,
                ],
                [
                    'specialization_id' => 1,
                    'subcategory_id' => 10,
                    'length_id' => 3,
                    'price' => 8000,
                ],
                [
                    'specialization_id' => 2,
                    'subcategory_id' => 10,
                    'length_id' => 2,
                    'price' => 10000,
                ],
                [
                    'specialization_id' => 2,
                    'subcategory_id' => 10,
                    'length_id' => 3,
                    'price' => 15000,
                ],
                [
                    'specialization_id' => 3,
                    'subcategory_id' => 10,
                    'length_id' => 2,
                    'price' => 15000,
                ],
                [
                    'specialization_id' => 3,
                    'subcategory_id' => 10,
                    'length_id' => 3,
                    'price' => 20000,
                ],
                [
                    'specialization_id' => 1,
                    'subcategory_id' => 11,
                    'length_id' => 2,
                    'price' => 1800,
                ],
                [
                    'specialization_id' => 1,
                    'subcategory_id' => 11,
                    'length_id' => 3,
                    'price' => 2000,
                ],
                [
                    'specialization_id' => 2,
                    'subcategory_id' => 11,
                    'length_id' => 2,
                    'price' => 1800,
                ],
                [
                    'specialization_id' => 2,
                    'subcategory_id' => 11,
                    'length_id' => 3,
                    'price' => 2000,
                ],
                [
                    'specialization_id' => 3,
                    'subcategory_id' => 11,
                    'length_id' => 2,
                    'price' => 1800,
                ],
                [
                    'specialization_id' => 3,
                    'subcategory_id' => 11,
                    'length_id' => 3,
                    'price' => 2000,
                ],
                [
                    'specialization_id' => 1,
                    'subcategory_id' => 12,
                    'price' => 2000,
                ],
                [
                    'specialization_id' => 2,
                    'subcategory_id' => 12,
                    'price' => 2500,
                ],
                [
                    'specialization_id' => 3,
                    'subcategory_id' => 12,
                    'price' => 3000,
                ],
                [
                    'subcategory_id' => 13,
                    'price' => 150,
                ],
                [
                    'subcategory_id' => 13,
                    'price' => 180,
                ],
                [
                    'subcategory_id' => 14,
                    'price' => 2500,
                ],
                [
                    'subcategory_id' => 15,
                    'price' => 8000,
                ],
                [
                    'subcategory_id' => 16,
                    'price' => 7000,
                ],
                [
                    'subcategory_id' => 17,
                    'price' => 2000,
                ],
                [
                    'subcategory_id' => 18,
                    'price' => 2000,
                ],
                [
                    'subcategory_id' => 19,
                    'price' => 4000,
                    'additionally' => 1500,
                ],
                [
                    'subcategory_id' => 20,
                    'price' => 6000,
                    'additionally' => 2000,
                ],
                [
                    'subcategory_id' => 21,
                    'price' => 6000,
                    'additionally' => 6500,
                ],
                [
                    'subcategory_id' => 22,
                    'price' => 1000,
                    'additionally' => 250,
                ],
                [
                    'subcategory_id' => 23,
                    'price' => 2000,
                    'additionally' => 800,
                ],
                [
                    'subcategory_id' => 24,
                    'price' => 800,
                ],
                [
                    'subcategory_id' => 25,
                    'price' => 1000,
                ],
                [
                    'subcategory_id' => 25,
                    'price' => 1300,
                ],
                [
                    'subcategory_id' => 26,
                    'price' => 800,
                ],
                [
                    'subcategory_id' => 26,
                    'price' => 1000,
                ],
                [
                    'subcategory_id' => 27,
                    'price' => 1500,
                ],
            )
            ->create();
    }
}
