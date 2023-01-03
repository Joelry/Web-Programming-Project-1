<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [[
            'nameProduct' => 'Azarine oil free Brigntening',
            'category' => 'Beauty',
            'description' => 'Oil-free moisturizer for morning and night which functions to nourish the skin and reduce acne scars.  This moisturizer can be used by oily and acne prone skin because it is oil and fragrance free.',
            'price' => '35554',
            'image' => 'https://lzd-img-global.slatic.net/g/p/b32c1a949d736d2574ddcb915e386038.jpg_720x720q80.jpg_.webp'
        ],
        [
            'nameProduct' => 'Azarine Hydrasoothe Sunscreen Gel',
            'category' => 'Beauty',
            'description' => 'Juicy Lip Balm is a moisturizing tinted balm lipstick with sun protection, Ester Oil, Vit E, and Vit C. ',
            'price' => '42185',
            'image' => 'https://lzd-img-global.slatic.net/g/p/abccb0301b9fc49a4f9b44905707c778.jpg_720x720q80.jpg_.webp'
        ],
        [
            'nameProduct' => 'Azarine Hydrasoothe Sunscreen Gel',
            'category' => 'Beauty',
            'description' => 'Facial sunscreen in the form of a gel ( water base) which is very light, cool and easily absorbed for all skin types including oily skin and acne prone skin.',
            'price' => '25158',
            'image' => 'https://lzd-img-global.slatic.net/g/p/00e511998c5541f81f1db5135ec53fb0.jpg_720x720q80.jpg_.webp'
        ],
        [
            'nameProduct' => 'Azarine Hydrasoothe Sunscreen Mist',
            'category' => 'Beauty',
            'description' => 'Liquid spray sunscreen that is practically used to moisturize and protect the skin from the bad effects of sunlight.',
            'price' => '19289',
            'image' => 'https://www.beautyhaul.com/assets/uploads/products/thumbs/800x800/AZARINE_Hydrasoothe_Sunscreen_Mist_%28New_Formula%29_Lee_Min_Ho.jpeg'
        ],
        [
            'nameProduct' => 'O.TWO.O Liquid Blush Swatches',
            'category' => 'Beauty',
            'description' => 'The O TWO O Liquid Blush is available in four different shades. Shade 01 Morning looks like a medium pink with a golden shimmer shift, 03 Orgasm is a bright watermelon pink and 04 Micro is a deep berry shade.',
            'price' => '42185',
            'image' => 'https://id-test-11.slatic.net/p/c4b29a52bb2014a765b7e5701596bd5a.jpg'
        ],
        [
            'nameProduct' => 'Canon EOS 6D Mark 2 DSLR Cameras',
            'category' => 'Camera',
            'description' => 'The Canon EOS 6D Mark II is equipped with a 26.2 Megapixel CMOS sensor and DIGIC 7 Image Processor to deliver outstanding shooting performance across all ISO ranges.',
            'price' => '24999000',
            'image' => 'https://lzd-img-global.slatic.net/g/p/5de704d1503dc3a4c446bc0d5e048470.jpg_720x720q80.jpg_.webp'
        ],
        [
            'nameProduct' => 'DRONE KAMERA TXD 8S 1080P',
            'category' => 'Camera',
            'description' => 'Drone already on camera, Wifi FPV, can stream,Distance 120m, (specs from the factory),Ready black',
            'price' => '322979',
            'image' => 'https://lzd-img-global.slatic.net/g/p/7c60405eb84d9f913026a9a15b056781.png_720x720q80.jpg_.webp'
        ],
        [
            'nameProduct' => 'Mini Tripod Vlog Meeting',
            'category' => 'Camera',
            'description' => 'Mini Tripod This is a tripod specifically for video conferencing needs such as Zoom Meetings or for Instagram and Youtube vlogs.  You can position the smartphone hinge to be portrait or landscape',
            'price' => '35000',
            'image' => 'https://lzd-img-global.slatic.net/g/p/9ee11087dc971abe0e275f5e9e394b0f.png_720x720q80.jpg_.webp'
        ],
        [
            'nameProduct' => 'Tomsis Bluetooth Remote',
            'category' => 'Camera',
            'description' => 'Capturing the moment when gathering with friends and family must be very fun.',
            'price' => '7768',
            'image' => 'https://lzd-img-global.slatic.net/g/p/adba28e6f1f0aceedc9bf41da691c76f.jpg_720x720q80.jpg_.webp'
        ],
        [
            'nameProduct' => 'KNF Concept 4-in-1 Cleaning Kit',
            'category' => 'Camera',
            'description' => 'K&F Concept Cleaning Kit 4 in 1 :
            Cleaning Pen, Blower, Cleaning Cloth,Cleaning fluid.',
            'price' => '140000',
            'image' => 'https://cf.shopee.co.id/file/c904747bb76bd8b771770b166d682f26'
        ]];
            DB::table('product')->insert($data);
    }
}
