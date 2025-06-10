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

        Specialization::factory()
            ->count(51)
            ->sequence(
                [
                    'name' => 'Стилист',
                    'subcategory_id' => 1,
                ],
                [
                    'name' => 'Топ-стилист',
                    'subcategory_id' => 1,
                ],
                [
                    'name' => 'Арт-стилист',
                    'subcategory_id' => 1,
                ],
                [
                    'name' => 'Стилист',
                    'subcategory_id' => 2,
                ],
                [
                    'name' => 'Топ-стилист',
                    'subcategory_id' => 2,
                ],
                [
                    'name' => 'Арт-стилист',
                    'subcategory_id' => 2,
                ],
                [
                    'name' => 'Стилист',
                    'subcategory_id' => 3,
                ],
                [
                    'name' => 'Топ-стилист',
                    'subcategory_id' => 3,
                ],
                [
                    'name' => 'Арт-стилист',
                    'subcategory_id' => 3,
                ],
                [
                    'name' => 'Стилист',
                    'subcategory_id' => 4,
                ],
                [
                    'name' => 'Топ-стилист',
                    'subcategory_id' => 4,
                ],
                [
                    'name' => 'Арт-стилист',
                    'subcategory_id' => 4,
                ],
                [
                    'name' => 'Стилист',
                    'subcategory_id' => 5,
                ],
                [
                    'name' => 'Топ-стилист',
                    'subcategory_id' => 5,
                ],
                [
                    'name' => 'Арт-стилист',
                    'subcategory_id' => 5,
                ],
                [
                    'name' => 'Стилист',
                    'subcategory_id' => 6,
                ],
                [
                    'name' => 'Топ-стилист',
                    'subcategory_id' => 6,
                ],
                [
                    'name' => 'Арт-стилист',
                    'subcategory_id' => 6,
                ],
                [
                    'name' => 'Стилист',
                    'subcategory_id' => 7,
                ],
                [
                    'name' => 'Топ-стилист',
                    'subcategory_id' => 7,
                ],
                [
                    'name' => 'Арт-стилист',
                    'subcategory_id' => 7,
                ],
                [
                    'name' => 'Стилист',
                    'subcategory_id' => 8,
                ],
                [
                    'name' => 'Топ-стилист',
                    'subcategory_id' => 8,
                ],
                [
                    'name' => 'Арт-стилист',
                    'subcategory_id' => 8,
                ],
                [
                    'name' => 'Стилист',
                    'subcategory_id' => 9,
                ],
                [
                    'name' => 'Топ-стилист',
                    'subcategory_id' => 9,
                ],
                [
                    'name' => 'Арт-стилист',
                    'subcategory_id' => 9,
                ],
                [
                    'name' => 'Стилист',
                    'subcategory_id' => 10,
                ],
                [
                    'name' => 'Топ-стилист',
                    'subcategory_id' => 10,
                ],
                [
                    'name' => 'Арт-стилист',
                    'subcategory_id' => 10,
                ],
                [
                    'name' => 'Стилист',
                    'subcategory_id' => 11,
                ],
                [
                    'name' => 'Топ-стилист',
                    'subcategory_id' => 11,
                ],
                [
                    'name' => 'Арт-стилист',
                    'subcategory_id' => 11,
                ],
                [
                    'name' => 'Стилист',
                    'subcategory_id' => 12,
                ],
                [
                    'name' => 'Топ-стилист',
                    'subcategory_id' => 12,
                ],
                [
                    'name' => 'Арт-стилист',
                    'subcategory_id' => 12,
                ],
                [
                    'subcategory_id' => 13,
                ],
                [
                    'subcategory_id' => 14,
                ],
                [
                    'subcategory_id' => 15,
                ],
                [
                    'subcategory_id' => 16,
                ],
                [
                    'subcategory_id' => 17,
                ],
                [
                    'subcategory_id' => 18,
                ],
                [
                    'subcategory_id' => 19,
                ],
                [
                    'subcategory_id' => 20,
                ],
                [
                    'subcategory_id' => 21,
                ],
                [
                    'subcategory_id' => 22,
                ],
                [
                    'subcategory_id' => 23,
                ],
                [
                    'subcategory_id' => 24,
                ],
                [
                    'subcategory_id' => 25,
                ],
                [
                    'subcategory_id' => 26,
                ],
                [
                    'subcategory_id' => 27,
                ],
            )
            ->create();

        Service::factory()
            ->count(90)
            ->sequence(
                [
                    'specialization_id' => 1,
                    'length_id' => 1,
                    'price' => 1000,
                ],
                [
                    'specialization_id' => 1,
                    'length_id' => 2,
                    'price' => 1200,
                ],
                [
                    'specialization_id' => 1,
                    'length_id' => 3,
                    'price' => 1500,
                ],
                [
                    'specialization_id' => 2,
                    'length_id' => 1,
                    'price' => 1200,
                ],
                [
                    'specialization_id' => 2,
                    'length_id' => 2,
                    'price' => 1500,
                ],
                [
                    'specialization_id' => 2,
                    'length_id' => 3,
                    'price' => 2000,
                ],
                [
                    'specialization_id' => 3,
                    'length_id' => 1,
                    'price' => 1500,
                ],
                [
                    'specialization_id' => 3,
                    'length_id' => 2,
                    'price' => 2000,
                ],
                [
                    'specialization_id' => 3,
                    'length_id' => 3,
                    'price' => 2500,
                ],
                [
                    'specialization_id' => 4,
                    'price' => 1000,
                ],
                [
                    'specialization_id' => 5,
                    'price' => 1200,
                ],
                [
                    'specialization_id' => 6,
                    'price' => 1500,
                ],
                [
                    'specialization_id' => 7,
                    'price' => 1500,
                ],
                [
                    'specialization_id' => 8,
                    'price' => 2000,
                ],
                [
                    'specialization_id' => 9,
                    'price' => 2500,
                ],
                [
                    'specialization_id' => 10,
                    'price' => 300,
                ],
                [
                    'specialization_id' => 11,
                    'price' => 500,
                ],
                [
                    'specialization_id' => 12,
                    'price' => 800,
                ],
                [
                    'specialization_id' => 13,
                    'price' => 1000,
                ],
                [
                    'specialization_id' => 14,
                    'price' => 1200,
                ],
                [
                    'specialization_id' => 15,
                    'price' => 1500,
                ],
                [
                    'specialization_id' => 16,
                    'length_id' => 1,
                    'price' => 2000,
                ],
                [
                    'specialization_id' => 16,
                    'length_id' => 2,
                    'price' => 2500,
                ],
                [
                    'specialization_id' => 16,
                    'length_id' => 3,
                    'price' => 4000,
                ],
                [
                    'specialization_id' => 17,
                    'length_id' => 1,
                    'price' => 2500,
                ],
                [
                    'specialization_id' => 17,
                    'length_id' => 2,
                    'price' => 3000,
                ],
                [
                    'specialization_id' => 17,
                    'length_id' => 3,
                    'price' => 5000,
                ],
                [
                    'specialization_id' => 18,
                    'length_id' => 1,
                    'price' => 3000,
                ],
                [
                    'specialization_id' => 18,
                    'length_id' => 2,
                    'price' => 4000,
                ],
                [
                    'specialization_id' => 18,
                    'length_id' => 3,
                    'price' => 6000,
                ],
                [
                    'specialization_id' => 19,
                    'length_id' => 1,
                    'price' => 4000,
                ],
                [
                    'specialization_id' => 19,
                    'length_id' => 2,
                    'price' => 5000,
                ],
                [
                    'specialization_id' => 19,
                    'length_id' => 3,
                    'price' => 6000,
                ],
                [
                    'specialization_id' => 20,
                    'length_id' => 1,
                    'price' => 5000,
                ],
                [
                    'specialization_id' => 20,
                    'length_id' => 2,
                    'price' => 6000,
                ],
                [
                    'specialization_id' => 20,
                    'length_id' => 3,
                    'price' => 7000,
                ],
                [
                    'specialization_id' => 21,
                    'length_id' => 1,
                    'price' => 6000,
                ],
                [
                    'specialization_id' => 21,
                    'length_id' => 2,
                    'price' => 7000,
                ],
                [
                    'specialization_id' => 21,
                    'length_id' => 3,
                    'price' => 9000,
                ],
                [
                    'specialization_id' => 22,
                    'length_id' => 1,
                    'price' => 5000,
                ],
                [
                    'specialization_id' => 22,
                    'length_id' => 2,
                    'price' => 6000,
                ],
                [
                    'specialization_id' => 22,
                    'length_id' => 3,
                    'price' => 7000,
                ],
                [
                    'specialization_id' => 23,
                    'length_id' => 1,
                    'price' => 6000,
                ],
                [
                    'specialization_id' => 23,
                    'length_id' => 2,
                    'price' => 7000,
                ],
                [
                    'specialization_id' => 23,
                    'length_id' => 3,
                    'price' => 8000,
                ],
                [
                    'specialization_id' => 24,
                    'length_id' => 1,
                    'price' => 7000,
                ],
                [
                    'specialization_id' => 24,
                    'length_id' => 2,
                    'price' => 8000,
                ],
                [
                    'specialization_id' => 24,
                    'length_id' => 3,
                    'price' => 10000,
                ],
                [
                    'specialization_id' => 25,
                    'length_id' => 1,
                    'price' => 6000,
                ],
                [
                    'specialization_id' => 25,
                    'length_id' => 2,
                    'price' => 7000,
                ],
                [
                    'specialization_id' => 25,
                    'length_id' => 3,
                    'price' => 8000,
                ],
                [
                    'specialization_id' => 26,
                    'length_id' => 1,
                    'price' => 7000,
                ],
                [
                    'specialization_id' => 26,
                    'length_id' => 2,
                    'price' => 10000,
                ],
                [
                    'specialization_id' => 26,
                    'length_id' => 3,
                    'price' => 15000,
                ],
                [
                    'specialization_id' => 27,
                    'length_id' => 1,
                    'price' => 10000,
                ],
                [
                    'specialization_id' => 27,
                    'length_id' => 2,
                    'price' => 15000,
                ],
                [
                    'specialization_id' => 27,
                    'length_id' => 3,
                    'price' => 20000,
                ],
                [
                    'specialization_id' => 28,
                    'length_id' => 2,
                    'price' => 7000,
                ],
                [
                    'specialization_id' => 28,
                    'length_id' => 3,
                    'price' => 8000,
                ],
                [
                    'specialization_id' => 29,
                    'length_id' => 2,
                    'price' => 10000,
                ],
                [
                    'specialization_id' => 29,
                    'length_id' => 3,
                    'price' => 15000,
                ],
                [
                    'specialization_id' => 30,
                    'length_id' => 2,
                    'price' => 15000,
                ],
                [
                    'specialization_id' => 30,
                    'length_id' => 3,
                    'price' => 20000,
                ],
                [
                    'specialization_id' => 31,
                    'length_id' => 2,
                    'price' => 1800,
                ],
                [
                    'specialization_id' => 31,
                    'length_id' => 3,
                    'price' => 2000,
                ],
                [
                    'specialization_id' => 32,
                    'length_id' => 2,
                    'price' => 1800,
                ],
                [
                    'specialization_id' => 32,
                    'length_id' => 3,
                    'price' => 2000,
                ],
                [
                    'specialization_id' => 33,
                    'length_id' => 2,
                    'price' => 1800,
                ],
                [
                    'specialization_id' => 33,
                    'length_id' => 3,
                    'price' => 2000,
                ],
                [
                    'specialization_id' => 34,
                    'price' => 2000,
                ],
                [
                    'specialization_id' => 35,
                    'price' => 2500,
                ],
                [
                    'specialization_id' => 36,
                    'price' => 3000,
                ],
                [
                    'specialization_id' => 37,
                    'price' => 150,
                ],
                [
                    'specialization_id' => 37,
                    'price' => 180,
                ],
                [
                    'specialization_id' => 38,
                    'price' => 2500,
                ],
                [
                    'specialization_id' => 39,
                    'price' => 8000,
                ],
                [
                    'specialization_id' => 40,
                    'price' => 7000,
                ],
                [
                    'specialization_id' => 41,
                    'price' => 2000,
                ],
                [
                    'specialization_id' => 42,
                    'price' => 2000,
                ],
                [
                    'specialization_id' => 43,
                    'price' => 4000,
                    'additionally' => 1500,
                ],
                [
                    'specialization_id' => 44,
                    'price' => 6000,
                    'additionally' => 2000,
                ],
                [
                    'specialization_id' => 45,
                    'price' => 6000,
                    'additionally' => 6500,
                ],
                [
                    'specialization_id' => 46,
                    'price' => 1000,
                    'additionally' => 250,
                ],
                [
                    'specialization_id' => 47,
                    'price' => 2000,
                    'additionally' => 800,
                ],
                [
                    'specialization_id' => 48,
                    'price' => 800,
                ],
                [
                    'specialization_id' => 49,
                    'price' => 1000,
                ],
                [
                    'specialization_id' => 49,
                    'price' => 1300,
                ],
                [
                    'specialization_id' => 50,
                    'price' => 800,
                ],
                [
                    'specialization_id' => 50,
                    'price' => 1000,
                ],
                [
                    'specialization_id' => 51,
                    'price' => 1500,
                ],
            )
            ->create();
    }
}
