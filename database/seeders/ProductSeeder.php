<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Azarine oil free Brightening',
                'category' => 'beauty',
                'description' => 'Oil-free moisturizer for morning and night which functions to nourish the skin and reduce acne scars.  This moisturizer can be used by oily and acne prone skin because it is oil and fragrance free.',
                'stock' => 10,
                'price' => '35000',
                'image' => 'b32c1a949d736d2574ddcb915e386038.jpg'
            ],
            [
                'name' => 'Azarine Hydrasoothe Sunscreen Gel',
                'category' => 'beauty',
                'description' => 'Juicy Lip Balm is a moisturizing tinted balm lipstick with sun protection, Ester Oil, Vit E, and Vit C. ',
                'stock' => 10,
                'price' => '42000',
                'image' => 'abccb0301b9fc49a4f9b44905707c778.jpg'
            ],
            [
                'name' => 'Azarine Hydrasoothe Sunscreen Gel',
                'category' => 'beauty',
                'description' => 'Facial sunscreen in the form of a gel (water base) which is very light, cool and easily absorbed for all skin types including oily skin and acne prone skin.',
                'stock' => 10,
                'price' => '25000',
                'image' => '00e511998c5541f81f1db5135ec53fb0.jpg'
            ],
            [
                'name' => 'Azarine Hydrasoothe Sunscreen Mist',
                'category' => 'beauty',
                'description' => 'Liquid spray sunscreen that is practically used to moisturize and protect the skin from the bad effects of sunlight.',
                'stock' => 10,
                'price' => '20000',
                'image' => 'AZARINE_Hydrasoothe_Sunscreen_Mist_%28New_Formula%29_Lee_Min_Ho.jpeg'
            ],
            [
                'name' => 'O.TWO.O Liquid Blush Swatches',
                'category' => 'beauty',
                'description' => 'The O TWO O Liquid Blush is available in four different shades. Shade 01 Morning looks like a medium pink with a golden shimmer shift, 03 Orgasm is a bright watermelon pink and 04 Micro is a deep berry shade.',
                'stock' => 10,
                'price' => '42000',
                'image' => 'c4b29a52bb2014a765b7e5701596bd5a.jpg'
            ],
            [
                'name' => 'Canon EOS 6D Mark 2 DSLR Cameras',
                'category' => 'camera',
                'description' => 'The Canon EOS 6D Mark II is equipped with a 26.2 Megapixel CMOS sensor and DIGIC 7 Image Processor to deliver outstanding shooting performance across all ISO ranges.',
                'stock' => 10,
                'price' => '25000000',
                'image' => '5de704d1503dc3a4c446bc0d5e048470.jpg'
            ],
            [
                'name' => 'DRONE KAMERA TXD 8S 1080P',
                'category' => 'camera',
                'description' => 'Drone already on camera, Wifi FPV, can stream,Distance 120m, (specs from the factory),Ready black',
                'stock' => 10,
                'price' => '320000',
                'image' => '7c60405eb84d9f913026a9a15b056781.png'
            ],
            [
                'name' => 'Mini Tripod Vlog Meeting',
                'category' => 'camera',
                'description' => 'Mini Tripod This is a tripod specifically for video conferencing needs such as Zoom Meetings or for Instagram and Youtube vlogs.  You can position the smartphone hinge to be portrait or landscape',
                'stock' => 10,
                'price' => '35000',
                'image' => '9ee11087dc971abe0e275f5e9e394b0f.png'
            ],
            [
                'name' => 'Tomsis Bluetooth Remote',
                'category' => 'camera',
                'description' => 'Capturing the moment when gathering with friends and family must be very fun.',
                'stock' => 10,
                'price' => '7700',
                'image' => 'adba28e6f1f0aceedc9bf41da691c76f.jpg'
            ],
            [
                'name' => 'KNF Concept 4-in-1 Cleaning Kit',
                'category' => 'camera',
                'description' => 'K&F Concept Cleaning Kit 4 in 1: Cleaning Pen, Blower, Cleaning Cloth,Cleaning fluid.',
                'stock' => 10,
                'price' => '140000',
                'image' => 'c904747bb76bd8b771770b166d682f26.jfif'
            ],
            [
                'name' => 'ASUS ROG STRIX Z690-E Gaming WiFi (Intel LGA 1700, Gen12)',
                'category' => 'motherboard',
                'description' => 'Intel® Z690 LGA 1700 ATX motherboard with PCIe® 5.0, 18+1 power stages, DDR5, Two-Way AI Noise Cancelation, WiFi 6E, Intel® 2.5 Gb Ethernet, five M.2 slots with heatsinks (including two on the bundled ROG Hyper M.2 card), PCIe® 5.0 NVMe® SSD support, M.2 Combo-Sink, M.2 backplate, PCIe® Slot Q-Release, USB 3.2 Gen 2x2 Type-C®, SATA and Aura Sync RGB lighting<br><br>Ready for 12th Gen Intel® Core™, Pentium® Gold and Celeron® processors',
                'stock' => 10,
                'price' => '8690000',
                'image' => '3ccca727-86ef-48e1-ab47-aed678f710e7.jpg'
            ],
            [
                'name' => 'Motherboard NZXT N7 Z690 WIFI DDR4 - Wi-Fi and CAM Features - LGA 1700',
                'category' => 'motherboard',
                'description' => 'This motherboard enables a visually seamless backdrop for any build with all the features of the new Intel Z690 chipset.<br><br>All-metal cover completes the look of your build<br>Wi-Fi 6E connectivity with updated specs for Z690 chipset<br>Digital RGB lighting control through NZXT CAM<br>Digital fan control with profiles within NZXT CAM for seven independent fan channels<br>Integrated rear I/O shield and efficient layout ensures optimal setup with upgradeability',
                'stock' => 10,
                'price' => '4675000',
                'image' => '13c8143f-79dd-4c75-8402-e0b490ac3bde.jpg'
            ],
            [
                'name' => 'GIGABYTE Z690 AORUS ELITE DDR4 (Socket LGA 1700, Gen 12)',
                'category' => 'motherboard',
                'description' => 'CPU<br>LGA1700 socket: Support for 12th Generation Intel® Core™, Pentium® Gold and Celeron® Processors*<br>L3 cache varies with CPU<br>* Please refer to "CPU Support List" for more information.<br><br>Chipset<br>Intel® Z690 Express Chipset',
                'stock' => 10,
                'price' => '4810000',
                'image' => 'c49805a3-22b5-4861-bbec-262730a65003.jpg'
            ],
            [
                'name' => 'GIGABYTE B660M DS3H AX DDR4 (Intel LGA 1700, Gen12)',
                'category' => 'motherboard',
                'description' => 'CPU<br>LGA1700 socket: Support for 12th Generation Intel® Core™, Pentium® Gold and Celeron® Processors*<br>L3 cache varies with CPU<br>* Please refer to "CPU Support List" for more information.<br><br>Chipset<br>Intel® B660 Express Chipset',
                'stock' => 10,
                'price' => '2170000',
                'image' => 'f5ecbda1-fb34-413c-9042-0daf5550b1cb.jpg'
            ],
            [
                'name' => 'ASRock H610M-HDV DDR4 (Intel LGA 1700, Gen12)',
                'category' => 'motherboard',
                'description' => 'Supports 12th Gen Intel® Core™ Processors (LGA1700)<br>5 Phase Power Design<br>Supports DDR4 3200MHz<br>1 PCIe 4.0 x16, 1 PCIe 3.0 x1<br>Graphics Output Options: HDMI, DisplayPort, D-Sub<br>Realtek ALC887/897 7.1 CH HD Audio Codec<br>4 SATA3<br>4 USB 3.2 Gen1 (2 Rear, 2 Front)<br>6 USB 2.0 (4 Rear, 2 Front)<br>Realtek Gigabit LAN',
                'stock' => 10,
                'price' => '1320000',
                'image' => '16f90adf-1a94-4bb0-833b-e4cbff1b3ad4.png'
            ],
            [
                'name' => 'GIGABYTE B560M DS3H (Socket Intel LGA 1200, Gen11, Gen 10)',
                'category' => 'motherboard',
                'description' => 'LGA1200 package:<br>11th Generation Intel® Core™ i9 processors / Intel® Core™ i7 processors / Intel® Core™ i5 processors<br>10th Generation Intel® Core™ i9 processors / Intel® Core™ i7 processors / Intel® Core™ i5 processors / Intel® Core™ i3 processors/ Intel® Pentium® processors / Intel® Celeron® processors*<br>* Limited to processors with 4 MB Intel® Smart Cache, Intel® Celeron® G5xx5 family.<br>L3 cache varies with CPU<br>(Please refer to "CPU Support List" for more information.)<br>Chipset<br>Intel® B560 Express Chipset',
                'stock' => 10,
                'price' => '1795000',
                'image' => '794667cf-b97e-424c-903e-91fe5d286fad.jpg'
            ],
            [
                'name' => 'Processor Intel Core i9 13900K 24 Core 32 Threads 5.80GHz (LGA 1700)',
                'category' => 'processor',
                'description' => 'CPU Specifications<br>Total Cores : 24<br># of Performance-cores : 8<br># of Efficient-cores : 16<br>Total Threads : 32<br>Max Turbo Frequency : 5.80 GHz<br>Intel® Thermal Velocity Boost Frequency : 5.80 GHz<br>Intel® Turbo Boost Max Technology 3.0 Frequency : 5.70 GHz<br>Performance-core Max Turbo Frequency : 5.40 GHz<br>Efficient-core Max Turbo Frequency : 4.30 GHz<br>Performance-core Base Frequency : 3.00 GHz<br>Efficient-core Base Frequency : 2.20 GHz<br>Cache : 36 MB Intel® Smart Cache<br>Total L2 Cache : 32 MB<br>Processor Base Power : 125 W<br>Maximum Turbo Power : 253 W<br><br>Memory Specifications :<br>Max Memory Size (dependent on memory type) : 128 GB<br>Memory Types :<br>Up to DDR5 5600 MT/s<br>Up to DDR4 3200 MT/s<br>Max # of Memory Channels : 2<br>Max Memory Bandwidth : 89.6 GB/s<br><br>Processor Graphics<br>Processor Graphics : Intel® UHD Graphics 770<br>Graphics Base Frequency : 300 MHz<br>Graphics Max Dynamic Frequency : 1.65 GHz<br>Graphics Output : eDP 1.4b, DP 1.4a, HDMI 2.1<br>Execution Units : 32<br>Max Resolution (HDMI) : 4096 x 2160 @ 60Hz<br>Max Resolution (DP)‡ :7680 x 4320 @ 60Hz<br>Max Resolution (eDP - Integrated Flat Panel) :5120 x 3200 @ 120Hz<br>DirectX* Support : 12<br>OpenGL* Support : 4.5<br>OpenCL* Support : 3.0<br>Multi-Format Codec Engines : 2<br>Intel® Quick Sync Video : Yes<br>Intel® Clear Video HD Technology : Yes<br># of Displays Supported : 4<br>Device : ID0xA780<br><br>Expansion Options<br>Direct Media Interface (DMI) Revision : 4.0<br>Max # of DMI Lanes : 8<br>Scalability : 1S Only<br>PCI Express Revision : 5.0 and 4.0<br>PCI Express Configurations : Up to 1x16+4, 2x8+4<br>Max # of PCI Express Lanes : 20<br><br>Package Specifications<br>Sockets Supported : FCLGA1700<br>Max CPU Configuration : 1<br>TJUNCTION : 100°C',
                'stock' => 10,
                'price' => '10880000',
                'image' => '24f720e8-de8e-40b3-95c4-b8fa1f8dc158.jpg'
            ],
            [
                'name' => 'Processor Intel Core i7 13700K 16 Core 24 Threads 5.40GHz (LGA 1700)',
                'category' => 'processor',
                'description' => 'CPU Specifications<br>Total Cores 16<br># of Performance-cores8<br># of Efficient-cores8<br>Total Threads 24<br>Max Turbo Frequency 5.40 GHz<br>Intel® Turbo Boost Max Technology 3.0 Frequency ‡ 5.40 GHz<br>Performance-core Max Turbo Frequency 5.30 GHz<br>Efficient-core Max Turbo Frequency 4.20 GHz<br>Performance-core Base Frequency3.40 GHz<br>Efficient-core Base Frequency2.50 GHz<br>Cache 30 MB Intel® Smart Cache<br>Total L2 Cache24 MB<br>Processor Base Power 125 W<br>Maximum Turbo Power 253 W<br><br>Memory Specifications<br>Max Memory Size (dependent on memory type) 128 GB<br>Memory Types Up to DDR5 5600 MT/s<br>Up to DDR4 3200 MT/s<br>Max # of Memory Channels 2<br>Max Memory Bandwidth 89.6 GB/s<br>ECC Memory Supported ‡ Yes<br><br>Processor Graphics<br>Processor Graphics ‡ Intel® UHD Graphics 770<br>Graphics Base Frequency 300 MHz<br>Graphics Max Dynamic Frequency 1.60 GHz<br>Graphics Output eDP 1.4b, DP 1.4a, HDMI 2.1<br>Execution Units 32<br>Max Resolution (HDMI)‡ 4096 x 2160 @ 60Hz<br>Max Resolution (DP)‡ 7680 x 4320 @ 60Hz<br>Max Resolution (eDP - Integrated Flat Panel)‡ 5120 x 3200 @ 120Hz<br>DirectX* Support 12<br>OpenGL* Support 4.5<br>OpenCL* Support 3.0<br>Multi-Format Codec Engines 2<br>Intel® Quick Sync Video Yes<br>Intel® Clear Video HD Technology Yes<br># of Displays Supported ‡4<br>Device ID0xA780',
                'stock' => 10,
                'price' => '7425000',
                'image' => '230aa5b5-eb9f-4242-8a0e-195c347ea842.jpg'
            ],
            [
                'name' => 'Processor Intel Core i5 13600K 14 Core 20 Threads 5.10GHz (LGA 1700)',
                'category' => 'processor',
                'description' => 'CPU Specifications<br>Total Cores : 14<br># of Performance-cores : 6<br># of Efficient-cores : 8<br>Total Threads : 20<br>Max Turbo Frequency : 5.10 GHz<br>Performance-core Max Turbo Frequency : 5.10 GHz<br>Efficient-core Max Turbo Frequency : 3.90 GHz<br>Performance-core Base Frequency : 3.50 GHz<br>Efficient-core Base Frequency : 2.60 GHz<br>Cache : 24 MB Intel® Smart Cache<br>Total L2 Cache : 20 MB<br>Processor Base Power : 125 W<br>Maximum Turbo Power : 181 W<br><br>Memory Specifications :<br>Max Memory Size (dependent on memory type) : 128 GB<br>Memory Types :<br>Up to DDR5 5600 MT/s<br>Up to DDR4 3200 MT/s<br>Max # of Memory Channels : 2<br>Max Memory Bandwidth : 89.6 GB/s<br><br>Processor Graphics<br>Processor Graphics : Intel® UHD Graphics 770<br>Graphics Base Frequency : 300 MHz<br>Graphics Max Dynamic Frequency : 1.50 GHz<br>Graphics Output : eDP 1.4b, DP 1.4a, HDMI 2.1<br>Execution Units : 32<br>Max Resolution (HDMI) : 4096 x 2160 @ 60Hz<br>Max Resolution (DP)‡ :7680 x 4320 @ 60Hz<br>Max Resolution (eDP - Integrated Flat Panel) :5120 x 3200 @ 120Hz<br>DirectX* Support : 12<br>OpenGL* Support : 4.5<br>OpenCL* Support : 3.0<br>Multi-Format Codec Engines : 2<br>Intel® Quick Sync Video : Yes<br>Intel® Clear Video HD Technology : Yes<br># of Displays Supported : 4<br>Device : ID0xA780<br><br>Expansion Options<br>Direct Media Interface (DMI) Revision : 4.0<br>Max # of DMI Lanes : 8<br>Scalability : 1S Only<br>PCI Express Revision : 5.0 and 4.0<br>PCI Express Configurations : Up to 1x16+4, 2x8+4<br>Max # of PCI Express Lanes : 20<br><br>Package Specifications<br>Sockets Supported : FCLGA1700<br>Max CPU Configuration : 1<br>TJUNCTION : 100°C',
                'stock' => 10,
                'price' => '5760000',
                'image' => '022b0296-fb2d-4a90-9072-a31198b9e43c.jpg'
            ],
            [
                'name' => 'Processor INTEL CORE i9 12900K Box (LGA 1700)',
                'category' => 'processor',
                'description' => 'CPU Specifications<br><br>Total Cores 16<br># of Performance-cores 8<br># of Efficient-cores 8<br>Total Threads 24<br>Max Turbo Frequency 5.20 GHz<br>Intel® Turbo Boost Max Technology 3.0 Frequency ‡ 5.20 GHz<br>Performance-core Max Turbo Frequency 5.10 GHz<br>Efficient-core Max Turbo Frequency 3.90 GHz<br>Performance-core Base Frequency 3.20 GHz<br>Efficient-core Base Frequency 2.40 GHz<br>Cache 30 MB Intel® Smart Cache<br>Total L2 Cache 14 MB<br>Processor Base Power 125 W<br>Maximum Turbo Power 241 W<br><br>Supplemental Information<br><br>Embedded Options Available No<br><br>Memory Specifications<br><br>Max Memory Size (dependent on memory type) 128 GB<br>Memory Types Up to DDR5 4800 MT/s<br>Up to DDR4 3200 MT/s<br>Max # of Memory Channels 2<br>Max Memory Bandwidth 76.8 GB/s<br><br>Processor Graphics<br><br>Processor Graphics ‡ Intel® UHD Graphics 770<br>Graphics Base Frequency 300 MHz<br>Graphics Max Dynamic Frequency 1.55 GHz<br>Graphics Output eDP 1.4b, DP 1.4a, HDMI 2.1<br>Execution Units 32<br>Max Resolution (HDMI)‡ 4096 x 2160 @ 60Hz<br>Max Resolution (DP)‡ 7680 x 4320 @ 60Hz<br>Max Resolution (eDP - Integrated Flat Panel)‡ 5120 x 3200 @ 120Hz<br>DirectX* Support 12<br>OpenGL* Support 4.5<br>Multi-Format Codec Engines 2<br>Intel® Quick Sync Video Yes<br>Intel® Clear Video HD Technology Yes<br># of Displays Supported ‡ 4<br>Device ID 0x4680<br>OpenCL* Support 2.1',
                'stock' => 10,
                'price' => '10295000',
                'image' => 'db2bc755-c660-4ab8-b721-f7ba0dae0ef4.jpg'
            ],
            [
                'name' => 'Processor Intel Core i7 12700K Box (LGA 1700)',
                'category' => 'processor',
                'description' => 'CPU Specifications<br>Total Cores : 12<br># of Performance-cores : 8<br># of Efficient-cores : 4<br>Total Threads : 20<br>Max Turbo Frequency : 5.00 GHz<br>Intel® Turbo Boost Max Technology 3.0 Frequency : 5.00 GHz<br>Performance-core Max Turbo Frequency : 4.90 GHz<br>Efficient-core Max Turbo Frequency : 3.80 GHz<br>Performance-core Base Frequency : 3.60 GHz<br>Efficient-core Base Frequency : 2.70 GHz<br>Cache : 25 MB Intel® Smart Cache<br>Total L2 Cache : 12 MB<br>Processor Base Power : 125 W<br>Maximum Turbo Power : 190 W<br><br>Memory Specifications<br>Max Memory Size (dependent on memory type) : 128 GB<br>Memory Types :<br>Up to DDR5 4800 MT/s<br>Up to DDR4 3200 MT/s<br>Max # of Memory Channels : 2<br>Max Memory Bandwidth : 76.8 GB/s<br><br>Processor Graphics<br>Processor Graphics : Intel® UHD Graphics 770<br>Graphics Base Frequency : 300 MHz<br>Graphics Max Dynamic Frequency : 1.50 GHz<br>Graphics Output : eDP 1.4b, DP 1.4a, HDMI 2.1<br>Execution Units : 32<br>Max Resolution (HDMI) : 4096 x 2160 @ 60Hz<br>Max Resolution (DP) : 7680 x 4320 @ 60Hz<br>Max Resolution (eDP - Integrated Flat Panel) : 5120 x 3200 @ 120Hz<br>DirectX* Support : 12<br>OpenGL* Support : 4.5<br>Multi-Format Codec Engines : 2<br>Intel® Quick Sync Video : Yes<br>Intel® Clear Video HD Technology : Yes<br># of Displays Supported : 4<br>Device ID : 0x4680<br>OpenCL* Support : 2.1<br><br>Expansion Options<br>Direct Media Interface (DMI) Revision : 4.0<br>Max # of DMI Lanes : 8<br>Scalability : 1S Only<br>PCI Express Revision : 5.0 and 4.0<br>PCI Express Configurations : Up to 1x16+4, 2x8+4<br>Max # of PCI Express Lanes : 20',
                'stock' => 10,
                'price' => '6850000',
                'image' => 'bd103958-5bd2-4465-9864-10d71580a627.jpg'
            ],
            [
                'name' => 'Intel Core i5 12600K BOX 3.4GHz 10 Core 16 Threads (LGA 1700)',
                'category' => 'processor',
                'description' => 'Frequency 3.40 GHz<br>CPU Cores 10<br>CPU Threads 16<br>Turbo (1 Core) 4.90 GHz<br>Turbo (10 Cores): 4.50 GHz<br>Hyperthreading Yes check<br>Overclocking Yes check<br>Core Architecture hybrid (big.LITTLE)<br><br>Internal Graphics<br>Memory type DDR4-3200<br>DDR5-4800<br>GPU name Intel Iris Xe Graphics 32 (Alder Lake S)<br>GPU frequency 0.40 GHz<br>GPU (Turbo) 1.45 GHz<br>Generation<br>DirectX Version 12<br>Execution units 32<br>Shader 256<br>Max memory<br>Max. displays 3<br>Technology 10 nm',
                'stock' => 10,
                'price' => '5150000',
                'image' => '59136696-bcf0-42ba-815e-e212c5209811.jpg'
            ],
        ];
        DB::table('products')->insert($data);
    }
}
