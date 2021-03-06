<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            [
                'name' => 'iPhone',
                'img' => '/images/13.jpg',
                'description' => 'Серия смартфонов, разработанных корпорацией Apple. Работают под управлением операционной системы iOS, представляющей собой упрощённую и оптимизированную для функционирования на мобильном устройстве версию macOS.',
            ],
            [
                'name' => 'MacBook',
                'img' => '/images/maccat.jpg',
                'description' => 'Бренд ноутбуков линейки Macintosh на операционной системе macOS, разработанный корпорацией Apple. В 2006 году заменил бренды PowerBook и iBook во время перехода с PowerPC на Intel x86. Текущая линейка состоит из MacBook Air (с 2008 года) и MacBook Pro (с 2006 года)[1]. Ранее выпускались линейки под названием MacBook: первая версия с 2006 по 2012 год, вторая — с 2015 по 2019 год.',
            ],
            [
                'name' => 'Apple Watch',
                'img' => '/images/watch.jpg',
                'description' => 'Линейка умных часов, созданных корпорацией Apple и представленные 9 сентября 2014 года. Для их полноценной работы требуется смартфон iPhone 5 или новее с IOS 8 или новее.Apple Watch были выпущены в апреле 2015 года и быстро стали самым продаваемым носимым устройством: во втором квартале 2015 финансового года было продано 4,2 миллиона устройств, и, по оценкам, более 100 миллионов человек использовали Apple Watch по состоянию на декабрь 2020 года.',
            ],
            [
                'name' => 'iPad',
                'img' => '/images/ipad.jpg',
                'description' => 'Серия планшетов корпорации Apple, первый из которых был анонсирован 9 сентября 2015 года, представляющих собой совершенно новый вариант планшета iPad с самыми большими дисплеями в этом семействе — 9,7, 10,5 и 12,9 дюйма. iPad Pro 9.7 оборудован процессором Apple A9X, имеет 2 ГБ оперативной памяти, поддержку стилуса Apple Pencil и режима Split View в iOS 9, позволяющего запускать два приложения на экране одновременно',
            ],
            [
                'name' => 'Air Pods',
                'img' => '/images/pods.jpg',
                'description' => 'беспроводные Bluetooth наушники от корпорации Apple. Представляют собой два раздельных наушника (TWS), использующих жесты для взаимодействия с пользователем: вынимание наушника из уха приостанавливает воспроизведения (функция «пауза»); возврат его на место — продолжит воспроизведение; двойное касание запускает голосового ассистента Siri, либо управляет воспроизведением музыки',
            ],
        ]);
    }
}
