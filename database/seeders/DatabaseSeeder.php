<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $appname = getenv("APP_NAME");
        // THE ELEPHANT (HS8L)
        Product::factory()->create([
            "slug" => "elephant",
            "name" => "HS8L",
            "type" => "full-powered-hot-tubs",
            "caption" => "Includes Cover and Color-Matching Steps",
            "short_description" => "Our flagship model will transform your backyard.",
            "long_description" => "Meet the HS8L Hot Tub - the largest and most majestic spa in our collection. The HS8L is the epitome of luxury and grandeur. With its expansive size, advanced features, and superior performance, it is the ultimate choice for those seeking the best in spa relaxation.",
            "measurement" => '91" x 91"',
            "images" => ["1.jpg", "2.png", "3.png", "4.png", "5.png", "6.png", "7.png", "8.png", "9.png"],
            "features" => [
                ["img" => "ozone.jpg", "title" => "Ozone", "description" => "Our ozone system purifies water naturally, giving you peace of mind and crystal-clear water. "],
                ["img" => "bluetooth_audio.jpg", "title" => "Bluetooth Audio", "description" => "Dive into crystal clear audio with the HS8L's exclusive Crimson Cadence Bluetooth system."],
                ["img" => "balboa_controls.jpg", "title" => "Balboa Controls", "description" => "Take control of your spa experience with our intuitive Balboa control panel."],
                ["img" => "water_feature.jpg", "title" => "Water Feature", "description" => "Let the soothing sound of our cascade water feature transport you to a peaceful oasis."],
                ["img" => "hydrotherapy.jpg", "title" => "Hydrotherapy", "description" => "Rejuvenate your body and mind with our advanced hydrotherapy jets, strategically placed to target specific muscle groups."],
                ["img" => "ledlighting.jpg", "title" => "LED Lighting", "description" => "Choose the perfect hue to match your mood or event, and enjoy a personalized light show every time you soak."]
            ],
            "bottom_showcase" => [
                "elephant_bulldog_showcase_1.jpg",
                "elephant_bulldog_showcase_2.jpg",
                "elephant_bulldog_showcase_3.jpg"
            ],
            "about" => "<h2>Unparalleled Relaxation for All</h2><p>The HS8L Hot Tub is the largest and most luxurious spa in our lineup, delivering a spa experience that combines expansive comfort, advanced hydrotherapy, and a range of features designed for your complete relaxation. With seating for 5-6 people, including 4 ergonomically designed seats, a luxurious lounger for full-body support, and a versatile cool-down seat that doubles as an entry/exit step, the HS8L is perfect for both solo soaks and social gatherings. Its spacious layout provides ample room to stretch out, making it the ideal retreat for families, friends, or anyone seeking a peaceful sanctuary.</p><br /><h2>Powerful Hydrotherapy for Every Need</h2><p>At the heart of the HS8L Hot Tub is a hydrotherapy system designed to rejuvenate your body and mind. Boasting an impressive 57 jets, powered by three high-performance therapy pumps, the HS8L delivers a customized massage experience that targets sore muscles, eases tension, and promotes relaxation. Whether you're looking for a gentle, calming soak or a deep-tissue massage after a tough workout, the HS8L provides a range of intensities to suit every need. Each jet is precisely placed to target major muscle groups, ensuring that every seat delivers a unique and effective hydrotherapy experience.</p><br /><h2>Effortless Water Care</h2><p>With advanced water care features, the HS8L makes spa maintenance easy and worry-free. Its dual filtration system, ozone purification, and efficient circulation pump work together to keep your water crystal-clear and hygienic. Not only does this ensure a more enjoyable soak, but it also minimizes the need for frequent maintenance, letting you focus on relaxation. Plus, with the optional Frog Ease chemical kit, balancing your spa water is practically effortless.</p><br /><h2>Ambiance that Elevates Your Experience</h2><p>When it comes to setting the mood, the HS8L Hot Tub is in a class of its own. Full-perimeter LED lighting illuminates the spa, creating a soothing glow that enhances both nighttime soaks and social evenings. Add to that the calming sound of the Smooth Cascade Waterfall, and your backyard transforms into a true retreat. Whether you're seeking serenity or celebration, the HS8L's ambiance adapts to your needs. It even includes a complimentary Hydro Harmony Floating Speaker with an integrated underwater light show that syncs with your favorite music, turning your spa into a multisensory haven.</p><br /><h2>Built to Last, Backed by Warranty</h2><p>The HS8L Hot Tub is as durable as it is luxurious. With a reinforced shell, weather-resistant materials, and a comprehensive warranty that covers structure, components, and labor, you can enjoy peace of mind knowing your investment is protected. The robust construction ensures longevity, while the sleek exterior design, finished in timeless Weathered Gray, complements any outdoor setting.</p><br /><h2>Your Personal Wellness Oasis</h2><p>More than just a hot tub, the HS8L is a wellness sanctuary. It's designed to improve your physical health through hydrotherapy, enhance your mental well-being with its calming ambiance, and create lasting memories with those you care about. Whether you're soaking under the stars or hosting a weekend gathering, the HS8L delivers an experience that goes beyond relaxation—it transforms your backyard into a personal retreat.</p><br/>",
            "ambiance" => "<h2>A Luxurious Atmosphere Designed to Soothe the Senses</h2><p>Step into the HS8L Hot Tub, and you'll immediately be enveloped in an ambiance of tranquility and luxury. Every detail is carefully designed to heighten your senses and enhance the relaxation experience. Full-perimeter LED lighting creates a serene glow that illuminates the spa's interior, transforming your evening soaks into a soothing, visually stunning experience. Whether you're unwinding after a long day or enjoying a quiet evening under the stars, the lighting enhances the mood, creating an inviting atmosphere for you and your guests.</p><br /><h2>Smooth Cascade Waterfall for Ultimate Relaxation</h2><p>The Smooth Cascade Waterfall adds an extra dimension of relaxation to your spa experience. With a gentle, continuous flow of water, it brings both visual appeal and a calming, natural sound to the spa, helping you unwind. Whether you prefer to sit beneath the waterfall or simply enjoy the soothing sound in the background, this feature makes every soak in the HS8L a multi-sensory escape.</p><br /><h2>Ergonomics, Comfort, and Control</h2><p>The HS8L is designed with comfort in mind, featuring ergonomically sculpted seats and a lounger that cradle your body in all the right places. Plush headrests provide additional support, allowing you to fully relax and enjoy the hydrotherapy benefits. The cool-down seat offers a quick, easy exit option or a place to sit when you want to cool off, ensuring that every need is met. With easy-to-use touch controls, adjusting the jets, lights, and temperature is effortless, letting you personalize your spa experience with just a few taps.</p></br><h2>Hydro Harmony Floating Speaker</h2><p>As an added luxury, the HS8L Hot Tub comes with a complimentary Hydro Harmony Floating Speaker. This Bluetooth-enabled speaker delivers rich, immersive sound, perfect for creating the right ambiance. Paired with an underwater light show that dances to the beat of your music, the speaker turns your spa into an entertainment hub. Whether you're hosting friends or enjoying a solo retreat, the HS8L's ambiance is sure to elevate your experience to new heights.</p><br />",
            "water_care" => "<h2>Comprehensive Water Care for Crystal-Clear Perfection</h2><p>The HS8L Hot Tub is engineered with a top-of-the-line water care system, ensuring that your spa stays as pristine as it is luxurious. Designed to minimize maintenance, the system ensures sparkling clean water through cutting-edge filtration, ozone purification, and powerful circulation. Whether you're a daily soaker or an occasional user, the HS8L ensures that the water is always clear and inviting, allowing you to relax without worry.</p><br/><h2>Ozone Water Purification</h2><p>One of the standout features of the HS8L's water care system is its ozone purification technology. This natural, chemical-free method significantly reduces the need for harsh chemicals by breaking down contaminants at a molecular level. The ozone generator works continuously, eliminating bacteria, viruses, and other impurities, keeping your water pure, fresh, and healthy. Not only does this system improve the water's overall quality, but it also makes your spa safer for frequent use, ensuring a cleaner, gentler soak.</p><br/><h2>Efficient Circulation Pump</h2><p>The HS8L is powered by a high-efficiency circulation pump, which works tirelessly to maintain water flow, prevent stagnation, and keep your spa water crystal clear. This powerful yet energy-conscious pump continuously cycles water through the filtration system, reducing debris and improving water clarity. Thanks to its quiet operation, the circulation pump does its job without disturbing the tranquility of your spa environment, ensuring your HS8L Hot Tub remains clean and inviting.</p><br/><h2>Dual Filtration with Surface Skimming</h2><p>Maintaining perfect water clarity is a breeze with the HS8L's dual filtration system. This system not only filters particles from the water but also includes a surface skimmer to capture floating debris such as leaves, oils, and dirt. The dual filters trap impurities before they can settle, ensuring your spa water remains clear and refreshing. This multi-layered approach to filtration means that every soak is pure, soothing, and free from unwanted contaminants, giving you more time to relax.</p></br/><h2>Effortless Chemical Balance with FROG @ease</h2><p>$appname are fully compatible with the FROG @ease Floating Sanitizing System, a game-changer in spa maintenance. This innovative system combines minerals with SmartChlor Technology to keep your water consistently fresh and crystal-clear, using up to 75% less chlorine than traditional systems. The self-regulating formula means no more constant adjustments—just reliable, clear water that's soft on skin and free of harsh chemical odors. With regular use, your spa can stay balanced and easy to maintain for 3-4 months before needing a drain and refill. $appname also offers a digital punch card—buy 5 systems and get the 6th free—ensuring hassle-free maintenance for the long term.</p><br/>",
            "specifications" => [
                "features" => [
                    "Seating Configuration" => "4 Seats + 1 Lounger",
                    "Hydrotherapy Jets" => 57,
                    "Therapy Pumps" => 3,
                    "therapy_pump_hp" => "3",
                    "Quiet Circulation Pump" => "Yes",
                    "Ozone Generator" => "Yes",
                    "Water Feature" => "Smooth Waterfall",
                    "Surface LEDs" => "Yes",
                    "Master LED" => "Yes",
                    "Wi-Fi Compatible" => "Optional Upgrade",
                    "Comfort Headrest Pillows" => "3",
                    "Interior Color" => "Marble White",
                    "Exterior COlor" => "Weathered Gray"
                ],
                "technical" => [
                    "Dimensions" => '91" x 91" x 38"',
                    "Dry Weight" => 882,
                    "Filled Weight" => 4520,
                    "Water Capacity" => 436,
                    "Filters" => "1 x 100",
                    "Frame Construction" => "Stainless Steel",
                    "Cabinet Insulation" => "Fully Insulated",
                    "Base Insulation" => "Fully Insulated",
                    "Base Material" => "ABS",
                    "Plug-and-Play" => "No",
                    "Electrical Requirements" => "220/240V - 60 amp"
                ]
            ],
            "warranty" => [
                "Stainless Steel Frame" => "Lifetime",
                "Shell Surface" => "5 Years",
                "Shell Structure" => "5 Years",
                "Plumbing" => "2 Years",
                "Internal Components" => "2 Years",
                "Exterior Cabinet" => "2 Years",
                "Jets, Ozone, Lighting" => "1 Year",
                "Cover, Lifter, Steps" => "1 Year",
                "Filter Lids, Overlays, Pillows, Cover Locks" => "90 days"
            ],
            "free_delivery" => true,
            "free_cover" => true,
            "free_color_matching_step" => true,
            "free_starter_chemical_kit" => true,
            "person_capacity" => 6,
            "fully_powered" => "240V"
        ]);
        // THE BULLDOG (HS8NL)
        Product::factory()->create([
            "slug" => "bulldog",
            "name" => "HS8NL",
            "type" => "full-powered-hot-tubs",
            "short_description" => "Room for everyone, luxury redefined in your backyard.",
            "long_description" => "Meet the HS8NL Hot Tub - the largest and most majestic spa in our collection. The HS8NL is the epitome of luxury and grandeur. With its expansive size, advanced features, and superior performance, it is the ultimate choice for those seeking the best in spa relaxation.",
            "measurement" => '91" x 91"',
            "images" => ["1.png", "2.png", "3.png", "4.png", "5.png"],
            "features" => [
                ["img" => "ozone.jpg", "title" => "Ozone", "description" => "Our ozone system purifies water naturally, giving you peace of mind and crystal-clear water. "],
                ["img" => "bluetooth_audio.jpg", "title" => "Bluetooth Audio", "description" => "Dive into crystal clear audio with the HS8L's exclusive Crimson Cadence Bluetooth system."],
                ["img" => "balboa_controls.jpg", "title" => "Balboa Controls", "description" => "Take control of your spa experience with our intuitive Balboa control panel."],
                ["img" => "water_feature.jpg", "title" => "Water Feature", "description" => "Let the soothing sound of our cascade water feature transport you to a peaceful oasis."],
                ["img" => "hydrotherapy.jpg", "title" => "Hydrotherapy", "description" => "Rejuvenate your body and mind with our advanced hydrotherapy jets, strategically placed to target specific muscle groups."],
                ["img" => "ledlighting.jpg", "title" => "LED Lighting", "description" => "Choose the perfect hue to match your mood or event, and enjoy a personalized light show every time you soak."]
            ],
            "bottom_showcase" => [
                "elephant_bulldog_showcase_1.jpg",
                "elephant_bulldog_showcase_2.jpg",
                "elephant_bulldog_showcase_3.jpg"
            ],
            "about" => "<h2>Unparalleled Relaxation for All</h2><p>The HS8NL Hot Tub is the largest and most luxurious spa in our lineup, delivering a spa experience that combines expansive comfort, advanced hydrotherapy, and a range of features designed for your complete relaxation. With seating for 5-6 people, including 4 ergonomically designed seats, a luxurious lounger for full-body support, and a versatile cool-down seat that doubles as an entry/exit step, the HS8NL is perfect for both solo soaks and social gatherings. Its spacious layout provides ample room to stretch out, making it the ideal retreat for families, friends, or anyone seeking a peaceful sanctuary.</p><br /><h2>Powerful Hydrotherapy for Every Need</h2><p>At the heart of the HS8NL Hot Tub is a hydrotherapy system designed to rejuvenate your body and mind. Boasting an impressive 57 jets, powered by three high-performance therapy pumps, the HS8NL delivers a customized massage experience that targets sore muscles, eases tension, and promotes relaxation. Whether you're looking for a gentle, calming soak or a deep-tissue massage after a tough workout, the HS8NL provides a range of intensities to suit every need. Each jet is precisely placed to target major muscle groups, ensuring that every seat delivers a unique and effective hydrotherapy experience.</p><br /><h2>Effortless Water Care</h2><p>With advanced water care features, the HS8NL makes spa maintenance easy and worry-free. Its dual filtration system, ozone purification, and efficient circulation pump work together to keep your water crystal-clear and hygienic. Not only does this ensure a more enjoyable soak, but it also minimizes the need for frequent maintenance, letting you focus on relaxation. Plus, with the optional Frog Ease chemical kit, balancing your spa water is practically effortless.</p><br /><h2>Ambiance that Elevates Your Experience</h2><p>When it comes to setting the mood, the HS8NL Hot Tub is in a class of its own. Full-perimeter LED lighting illuminates the spa, creating a soothing glow that enhances both nighttime soaks and social evenings. Add to that the calming sound of the Smooth Cascade Waterfall, and your backyard transforms into a true retreat. Whether you're seeking serenity or celebration, the HS8NL's ambiance adapts to your needs. It even includes a complimentary Hydro Harmony Floating Speaker with an integrated underwater light show that syncs with your favorite music, turning your spa into a multisensory haven.</p><br /><h2>Built to Last, Backed by Warranty</h2><p>The HS8NL Hot Tub is as durable as it is luxurious. With a reinforced shell, weather-resistant materials, and a comprehensive warranty that covers structure, components, and labor, you can enjoy peace of mind knowing your investment is protected. The robust construction ensures longevity, while the sleek exterior design, finished in timeless Weathered Gray, complements any outdoor setting.</p><br /><h2>Your Personal Wellness Oasis</h2><p>More than just a hot tub, the HS8NL is a wellness sanctuary. It's designed to improve your physical health through hydrotherapy, enhance your mental well-being with its calming ambiance, and create lasting memories with those you care about. Whether you're soaking under the stars or hosting a weekend gathering, the HS8NL delivers an experience that goes beyond relaxation—it transforms your backyard into a personal retreat.</p><br/>",
            "ambiance" => "<h2>A Luxurious Atmosphere Designed to Soothe the Senses</h2><p>Step into the HS8NL Hot Tub, and you'll immediately be enveloped in an ambiance of tranquility and luxury. Every detail is carefully designed to heighten your senses and enhance the relaxation experience. Full-perimeter LED lighting creates a serene glow that illuminates the spa's interior, transforming your evening soaks into a soothing, visually stunning experience. Whether you're unwinding after a long day or enjoying a quiet evening under the stars, the lighting enhances the mood, creating an inviting atmosphere for you and your guests.</p><br /><h2>Smooth Cascade Waterfall for Ultimate Relaxation</h2><p>The Smooth Cascade Waterfall adds an extra dimension of relaxation to your spa experience. With a gentle, continuous flow of water, it brings both visual appeal and a calming, natural sound to the spa, helping you unwind. Whether you prefer to sit beneath the waterfall or simply enjoy the soothing sound in the background, this feature makes every soak in the HS8NL a multi-sensory escape.</p><br /><h2>Ergonomics, Comfort, and Control</h2><p>The HS8NL is designed with comfort in mind, featuring ergonomically sculpted seats and a lounger that cradle your body in all the right places. Plush headrests provide additional support, allowing you to fully relax and enjoy the hydrotherapy benefits. The cool-down seat offers a quick, easy exit option or a place to sit when you want to cool off, ensuring that every need is met. With easy-to-use touch controls, adjusting the jets, lights, and temperature is effortless, letting you personalize your spa experience with just a few taps.</p></br><h2>Hydro Harmony Floating Speaker</h2><p>As an added luxury, the HS8NL Hot Tub comes with a complimentary Hydro Harmony Floating Speaker. This Bluetooth-enabled speaker delivers rich, immersive sound, perfect for creating the right ambiance. Paired with an underwater light show that dances to the beat of your music, the speaker turns your spa into an entertainment hub. Whether you're hosting friends or enjoying a solo retreat, the HS8NL's ambiance is sure to elevate your experience to new heights.</p><br />",
            "water_care" => "<h2>Comprehensive Water Care for Crystal-Clear Perfection</h2><p>The HS8NL Hot Tub is engineered with a top-of-the-line water care system, ensuring that your spa stays as pristine as it is luxurious. Designed to minimize maintenance, the system ensures sparkling clean water through cutting-edge filtration, ozone purification, and powerful circulation. Whether you're a daily soaker or an occasional user, the HS8NL ensures that the water is always clear and inviting, allowing you to relax without worry.</p><br/><h2>Ozone Water Purification</h2><p>One of the standout features of the HS8NL's water care system is its ozone purification technology. This natural, chemical-free method significantly reduces the need for harsh chemicals by breaking down contaminants at a molecular level. The ozone generator works continuously, eliminating bacteria, viruses, and other impurities, keeping your water pure, fresh, and healthy. Not only does this system improve the water's overall quality, but it also makes your spa safer for frequent use, ensuring a cleaner, gentler soak.</p><br/><h2>Efficient Circulation Pump</h2><p>The HS8NL is powered by a high-efficiency circulation pump, which works tirelessly to maintain water flow, prevent stagnation, and keep your spa water crystal clear. This powerful yet energy-conscious pump continuously cycles water through the filtration system, reducing debris and improving water clarity. Thanks to its quiet operation, the circulation pump does its job without disturbing the tranquility of your spa environment, ensuring your HS8NL Hot Tub remains clean and inviting.</p><br/><h2>Dual Filtration with Surface Skimming</h2><p>Maintaining perfect water clarity is a breeze with the HS8NL's dual filtration system. This system not only filters particles from the water but also includes a surface skimmer to capture floating debris such as leaves, oils, and dirt. The dual filters trap impurities before they can settle, ensuring your spa water remains clear and refreshing. This multi-layered approach to filtration means that every soak is pure, soothing, and free from unwanted contaminants, giving you more time to relax.</p></br/><h2>Effortless Chemical Balance with FROG @ease</h2><p>$appname are fully compatible with the FROG @ease Floating Sanitizing System, a game-changer in spa maintenance. This innovative system combines minerals with SmartChlor Technology to keep your water consistently fresh and crystal-clear, using up to 75% less chlorine than traditional systems. The self-regulating formula means no more constant adjustments—just reliable, clear water that's soft on skin and free of harsh chemical odors. With regular use, your spa can stay balanced and easy to maintain for 3-4 months before needing a drain and refill. $appname also offers a digital punch card—buy 5 systems and get the 6th free—ensuring hassle-free maintenance for the long term.</p><br/>",
            "specifications" => [
                "features" => [
                    "Seating Configuration" => "4 Seats + 1 Lounger",
                    "Hydrotherapy Jets" => 57,
                    "Therapy Pumps" => 3,
                    "therapy_pump_hp" => "3",
                    "Quiet Circulation Pump" => "Yes",
                    "Ozone Generator" => "Yes",
                    "Water Feature" => "Smooth Waterfall",
                    "Surface LEDs" => "Yes",
                    "Master LED" => "Yes",
                    "Comfort Headrest Pillows" => "3",
                    "Interior Color" => "Marble White",
                    "Exterior COlor" => "Weathered Gray"
                ],
                "technical" => [
                    "Dimensions" => '91" x 91" x 38"',
                    "Dry Weight" => 882,
                    "Filled Weight" => 4520,
                    "Water Capacity" => 436,
                    "Filters" => "1 x 100",
                    "Frame Construction" => "Stainless Steel",
                    "Cabinet Insulation" => "Fully Insulated",
                    "Base Insulation" => "Fully Insulated",
                    "Base Material" => "ABS",
                    "Plug-and-Play" => "No",
                    "Electrical Requirements" => "220/240V - 60 amp"
                ]
            ],
            "warranty" => [
                "Stainless Steel Frame" => "Lifetime",
                "Shell Surface" => "5 Years",
                "Shell Structure" => "5 Years",
                "Plumbing" => "2 Years",
                "Internal Components" => "2 Years",
                "Exterior Cabinet" => "2 Years",
                "Jets, Ozone, Lighting" => "1 Year",
                "Cover, Lifter, Steps" => "1 Year",
                "Filter Lids, Overlays, Pillows, Cover Locks" => "90 days"
            ],
            "new" => true,
            "free_delivery" => true,
            "free_cover" => true,
            "free_color_matching_step" => true,
            "free_starter_chemical_kit" => true,
            "person_capacity" => "6",
            "fully_powered" => "240V"
        ]);
        // THE TIGER (HS7L)
        Product::factory()->create([
            "slug" => "tiger",
            "name" => "HS7L",
            "type" => "full-powered-hot-tubs",
            "caption" => "Includes Cover and Color-Matching Steps",
            "short_description" => "This crowd favorite will maximize your hydrotherapy.",
            "long_description" => "Immerse yourself in the opulence of The HS7L Hot Tub, where sophistication meets power, creating a sanctuary of relaxation in your own backyard. Tailored for socializing, The HS7L boasts a generous capacity of 5-6 individuals, with a seating configuration of 5 seats and 1 lounger. The dimensions of 85 x 85 x 36 inches strike a perfect balance, providing ample space for shared moments of rejuvenation or peaceful solitude. ",
            "measurement" => '85" x 85"',
            "images" => ["1.jpg", "2.png", "3.png", "4.png", "5.png", "6.png", "7.png", "8.png", "9.png"],
            "features" => [
                ["img" => "ozone.jpg", "title" => "Ozone", "description" => "Our ozone system purifies water naturally, giving you peace of mind and crystal-clear water."],
                ["img" => "comfort_pillow.jpg", "title" => "Comfort Pillows", "description" => "Sink into comfort with our deluxe headrests, designed to provide optimal support for full relaxation."],
                ["img" => "balboa_controls.jpg", "title" => "Balboa Controls", "description" => "Take control of your spa experience with our intuitive Balboa control panel."],
                ["img" => "water_feature.jpg", "title" => "Water Feature", "description" => "Enjoy the symphony of nature with the gentle Laminar water feature, providing a serene and relaxing backdrop for your spa sessions."],
                ["img" => "hydrotherapy.jpg", "title" => "Hydrotherapy", "description" => "Our advanced hydrotherapy jets are strategically positioned to target key muscle groups, providing relief from tension and stress."],
                ["img" => "ledlighting.jpg", "title" => "LED Lighting", "description" => "Choose the perfect hue to match your mood or event, and enjoy a personalized light show every time you soak."]
            ],
            "top_showcase" => ["tiger_top_showcase_1.jpg", "tiger_top_showcase_2.jpg", "tiger_top_showcase_3.jpg"],
            "bottom_showcase" => [
                "tiger_wolf_jaguar_bottom_showcase_1.jpg",
                "tiger_wolf_jaguar_bottom_showcase_2.jpg",
                "tiger_wolf_jaguar_bottom_showcase_3.jpg"
            ],
            "about" => "<h2>Unleash Relaxation with The HS7L</h2><p>The HS7L Hot Tub is designed to deliver a deeply immersive and luxurious spa experience, perfect for those who appreciate a combination of power and comfort. With seating for up to six people, with five bucket seats plus a full-body lounger, this spa offers ample room for relaxation and social gatherings. The HS7L is ideal for families or groups who want to enjoy the benefits of hydrotherapy together while still having personal space to unwind. Its ergonomic seating and spacious layout make it a versatile choice for anyone looking for both relaxation and therapeutic relief.</p><br/><h2>Powerful Hydrotherapy for Complete Rejuvenation</h2><p>At the core of The HS7L Hot Tub is a high-performance hydrotherapy system that targets key muscle groups, helping to relieve tension and promote relaxation. With 46 jets powered by two dedicated hydrotherapy pumps, The HS7L provides a wide range of massage intensities, from gentle relaxation to deep-tissue relief. The jets are strategically placed to target specific areas like the back, shoulders, and legs, offering a comprehensive full-body massage experience. Whether you're recovering after a long day or just looking to unwind, the HS7L offers an optimal hydrotherapy experience in every seat.</p><br/><h2>Effortless Water Care</h2><p>The HS7L Hot Tub is equipped with a high-efficiency water care system designed to keep your spa water crystal-clear and easy to maintain. Its dual filtration system, ozone purification, and powerful circulation pump ensure that your spa stays fresh and clean with minimal maintenance. For added convenience, the optional Frog Ease chemical kit makes balancing your water simple and worry-free, allowing you to focus on relaxation without the hassle of water care.</p><br/><h2>Ambiance that Elevates Your Experience</h2><p>When it comes to ambiance, The HS7L Hot Tub excels in creating a serene, inviting atmosphere that enhances every soak. Its full-perimeter LED lighting creates a soft, welcoming glow that makes nighttime spa sessions truly magical. The Elevated Cascade water feature adds a stunning visual and auditory element, with a gentle flow of water cascading from a raised point, creating a soothing backdrop to your relaxation experience. Whether you're seeking a quiet escape or hosting a gathering, The HS7L's ambiance makes every moment more enjoyable.</p><br/><h2>Built to Last, Backed by Warranty</h2><p>Durability meets elegance with The HS7L Hot Tub. Built with a reinforced shell and weather-resistant materials, it's designed to withstand the elements and provide years of enjoyment. The comprehensive warranty covering the structure, components, and labor ensures peace of mind, while the sleek design in Weathered Gray complements any outdoor space, making The HS7L as stylish as it is functional.</p><br/><h2>Your Personal Wellness Oasis</h2><p>The HS7L Hot Tub is more than just a spa—it's your personal wellness retreat. With its powerful hydrotherapy, serene ambiance, and spacious seating, The HS7L offers the perfect way to relax, recover, and reconnect. Whether you're soaking alone or with loved ones, The HS7L provides a space for ultimate relaxation and well-being.</p><br/>",
            "ambiance" => "<h2>A Luxurious Ambiance That Complements Your Spa Experience</h2><p>Step into The HS7L Hot Tub and be transported to a world of tranquility and luxury. Full-perimeter LED lighting creates a soft, ambient glow that enhances the atmosphere, whether you're soaking under the stars or enjoying a quiet evening with friends. The lighting reflects beautifully off the water, creating a calming ambiance that makes every soak a sensory experience.</p><br/><h2>Elevated Cascade Water Feature</h2><p>The Elevated Cascade water feature is a unique highlight of The HS7L Hot Tub, offering a stunning visual and soothing auditory experience. Water gently cascades from a raised point, creating a natural, tranquil sound that enhances the overall ambiance of the spa. This feature adds an extra layer of relaxation, making every soak in The HS7L feel like an escape to your personal oasis.</p><br/><h2>Ergonomics, Comfort, and Control</h2><p>Designed with both comfort and functionality in mind, The HS7L offers ergonomically sculpted seats, including a full-body lounger that provides optimal support. The spacious seating layout ensures that everyone has plenty of room to relax, while the plush headrests add an extra level of comfort. The intuitive touch controls allow you to easily adjust the jets, temperature, and lighting, giving you complete control over your spa experience.</p><br/>",
            "water_care" => "<h2>Comprehensive Water Care for Effortless Maintenance</h2><p>The HS8L Hot Tub is engineered with a top-of-the-line water care system, ensuring that your spa stays as pristine as it is luxurious. Designed to minimize maintenance, the system ensures sparkling clean water through cutting-edge filtration, ozone purification, and powerful circulation. Whether you're a daily soaker or an occasional user, the HS8L ensures that the water is always clear and inviting, allowing you to relax without worry.</p><br/><h2>Ozone Water Purification</h2><p>The integrated ozone purification system in The HS7L provides a chemical-free way to keep your water clean and safe. By breaking down contaminants at a molecular level, the ozone generator significantly reduces the need for harsh chemicals, ensuring your water is always gentle on the skin. This natural method keeps bacteria and impurities at bay, offering cleaner and healthier water with every soak.</p><br/><h2>Efficient Circulation Pump</h2><p>The HS7L Hot Tub features a high-efficiency circulation pump that ensures water is continuously flowing through the filtration system. This prevents stagnation and keeps your water clear, while also optimizing energy use. The quiet operation of the pump means you can enjoy the tranquility of your spa without any unwanted noise, knowing your water is being constantly cleaned.</p><br/><h2>Dual Filtration with Surface Skimming</h2><p>Maintaining water clarity is easy with The HS7L's dual filtration system. It captures particles and skims surface debris such as leaves and oils, ensuring that your spa water remains pristine. The surface skimmer works in conjunction with the filters to keep the water fresh and inviting, giving you more time to relax and less time worrying about water care.</p><br/><h2>Effortless Chemical Balance with FROG @ease</h2><p>$appname are fully compatible with the FROG @ease Floating Sanitizing System, a game-changer in spa maintenance. This innovative system combines minerals with SmartChlor Technology to keep your water consistently fresh and crystal-clear, using up to 75% less chlorine than traditional systems. The self-regulating formula means no more constant adjustments—just reliable, clear water that's soft on skin and free of harsh chemical odors. With regular use, your spa can stay balanced and easy to maintain for 3-4 months before needing a drain and refill. $appname also offers a digital punch card—buy 5 systems and get the 6th free—ensuring hassle-free maintenance for the long term.</p><br/>",
            "specifications" => [
                "features" => [
                    "Seating Configuration" => "5 Seats + 1 Lounger",
                    "Hydrotherapy Jets" => 46,
                    "Therapy Pumps" => 2,
                    "therapy_pump_hp" => "3",
                    "Quiet Circulation Pump" => "Yes",
                    "Ozone Generator" => "Yes",
                    "Water Feature" => "Elevated Cascade",
                    "Surface LEDs" => "Yes",
                    "Master LED" => "Yes",
                    "Wi-Fi Compatible" => "Optional Upgrade",
                    "Comfort Headrest Pillows" => "3",
                    "Interior Color" => "Marble White",
                    "Exterior COlor" => "Weathered Gray"
                ],
                "technical" => [
                    "Dimensions" => '85" x 85" x 36"',
                    "Dry Weight" => 618,
                    "Filled Weight" => 3484,
                    "Water Capacity" => 344,
                    "Filters" => "2 x 50",
                    "Frame Construction" => "Stainless Steel",
                    "Cabinet Insulation" => "Fully Insulated",
                    "Base Insulation" => "Fully Insulated",
                    "Base Material" => "ABS",
                    "Plug-and-Play" => "No",
                    "Electrical Requirements" => "220/240V - 50 amp"
                ]
            ],
            "warranty" => [
                "Stainless Steel Frame" => "Lifetime",
                "Shell Surface" => "5 Years",
                "Shell Structure" => "5 Years",
                "Plumbing" => "2 Years",
                "Internal Components" => "2 Years",
                "Exterior Cabinet" => "2 Years",
                "Jets, Ozone, Lighting" => "1 Year",
                "Cover, Lifter, Steps" => "1 Year",
                "Filter Lids, Overlays, Pillows, Cover Locks" => "90 days"
            ],
            "free_delivery" => true,
            "free_cover" => true,
            "free_color_matching_step" => true,
            "free_starter_chemical_kit" => true,
            "person_capacity" => "6",
            "fully_powered" => "240V"
        ]);
        // THE WOLF (HS7NL)
        Product::factory()->create([
            "slug" => "wolf",
            "name" => "HS7NL",
            "type" => "full-powered-hot-tubs",
            "caption" => "Includes Cover and Color-Matching Steps",
            "short_description" => "All-seater spa to maximize capacity and entertainment.",
            "long_description" => "Known for its reliability and performance, The HS7NL is a solid choice for those who want a durable and powerful hot tub. Its robust features make it a dependable option for long-term use.",
            "measurement" => '85" x 85"',
            "images" => ["1.jpg", "2.png", "3.png", "4.png", "5.png", "6.png", "7.png", "8.png", "9.png"],
            "features" => [
                ["img" => "ozone.jpg", "title" => "Ozone", "description" => "Our ozone system purifies water naturally, giving you peace of mind and crystal-clear water."],
                ["img" => "comfort_pillow.jpg", "title" => "Comfort Pillows", "description" => "Sink into comfort with our deluxe headrests, designed to provide optimal support for full relaxation."],
                ["img" => "balboa_controls.jpg", "title" => "Balboa Controls", "description" => "Take control of your spa experience with our intuitive Balboa control panel."],
                ["img" => "water_feature.jpg", "title" => "Water Feature", "description" => "Enjoy the symphony of nature with the gentle Laminar water feature, providing a serene and relaxing backdrop for your spa sessions."],
                ["img" => "hydrotherapy.jpg", "title" => "Hydrotherapy", "description" => "Our advanced hydrotherapy jets are strategically positioned to target key muscle groups, providing relief from tension and stress."],
                ["img" => "ledlighting.jpg", "title" => "LED Lighting", "description" => "Choose the perfect hue to match your mood or event, and enjoy a personalized light show every time you soak."]
            ],
            "top_showcase" => ["wolf_top_showcase_1.jpg", "wolf_top_showcase_2.jpg", "wolf_top_showcase_3.jpg"],
            "bottom_showcase" => [
                "tiger_wolf_jaguar_bottom_showcase_1.jpg",
                "tiger_wolf_jaguar_bottom_showcase_2.jpg",
                "tiger_wolf_jaguar_bottom_showcase_3.jpg"
            ],
            "about" => "<h2>Unparalleled Relaxation for All</h2><p>The HS7NL Hot Tub is the ideal choice for those seeking a spacious, open spa experience that delivers both comfort and powerful hydrotherapy. With room for 4-7 people, The HS7NL features a more expansive, open design equipped with bucket seats strategically placed around the perimeter, offering plenty of space for everyone to stretch out and relax. This versatile layout makes The HS7NL perfect for social gatherings or peaceful solo soaks, allowing you to enjoy a truly immersive spa experience with friends, family, or on your own.</p><br/><h2>Powerful Hydrotherapy for Every Need</h2><p>At the core of The HS7NL Hot Tub is an advanced hydrotherapy system designed to deliver a powerful, full-body massage. Equipped with 48 jets, powered by two high-performance hydrotherapy pumps, The HS7NL provides targeted relief to key muscle groups, helping to ease tension, soothe soreness, and promote relaxation. Whether you're looking for gentle relief or a more invigorating massage, The HS7NL ensures every seat offers a unique and revitalizing hydrotherapy experience.</p><br/><h2>Effortless Water Care</h2><p>Maintaining The HS7NL Hot Tub is simple, thanks to its advanced water care features. Its dual filtration system, ozone purification, and efficient circulation pump work seamlessly together to keep your water crystal-clear and hygienic. Not only does this provide a superior soaking experience, but it also minimizes the need for frequent maintenance. For added convenience, the optional Frog Ease chemical kit makes balancing your spa water even easier, giving you more time to relax.</p><br/><h2>Ambiance that Elevates Your Experience</h2><p>With its full-perimeter LED lighting, The HS7NL Hot Tub creates a serene and inviting ambiance that enhances every soak. Whether you're enjoying a quiet evening alone or hosting friends, the lighting casts a soft, welcoming glow that complements the spa's natural surroundings. The Laminar Flow water feature adds a smooth, arcing stream of water that enhances both the visual appeal and the soothing atmosphere of the spa, making every moment a true escape.</p><br/><h2>Built to Last, Backed by Warranty</h2><p>The HS7NL Hot Tub is built for long-lasting durability, with a reinforced shell and weather-resistant materials that ensure it can withstand the elements. With a comprehensive warranty that covers structure, components, and labor, you can rest easy knowing your investment is protected. Finished in sleek Weathered Gray, The HS7NL Hot Tub complements any outdoor space, blending seamlessly with your backyard environment.</p><br/><h2>Your Personal Wellness Oasis</h2><p>Designed to improve your physical health and enhance your mental well-being, The HS7NL Hot Tub transforms your backyard into a personal retreat. Its spacious, open design and soothing hydrotherapy make it the perfect sanctuary for relaxation, whether you're unwinding solo or spending quality time with loved ones. More than just a hot tub, The HS7NL is your gateway to an elevated lifestyle of comfort and wellness.</p><br/>",
            "ambiance" => "<h2>A Luxurious Atmosphere Designed to Soothe the Senses</h2><p>Step into The HS7NL Hot Tub, and you'll be enveloped in an atmosphere of relaxation and luxury. Full-perimeter LED lighting provides a soft, inviting glow that enhances every moment, whether you're soaking under the stars or hosting a casual gathering. The lighting reflects beautifully off the water, adding a peaceful, calming ambiance that helps you unwind from the stresses of daily life.</p><br/><h2>Laminar Flow Water Feature</h2><p>The Laminar Flow water feature is a standout addition to The HS7NL Hot Tub, creating a smooth, continuous arc of water that adds both visual beauty and a soothing sound to your spa experience. This elegant water feature enhances the tranquility of your soak, making it perfect for those looking to elevate their relaxation experience.</p><br/><h2>Ergonomics, Comfort, and Control</h2><p>Designed for ultimate comfort, The HS7NL features spacious bucket seats that support your body as you soak. With plush headrests and an open, versatile layout, The HS7NL ensures that every seat offers a comfortable and relaxing experience. Adjusting the jets, temperature, and lighting is effortless with the user-friendly touch controls, allowing you to fully customize your spa session to your preferences.</p><br/>",
            "water_care" => "<h2>Comprehensive Water Care for Crystal-Clear Perfection</h2><p>The HS7NL Hot Tub is equipped with an advanced water care system, designed to keep your spa water clean and clear with minimal effort. From its dual filtration system to the continuous circulation and ozone purification, every element works together to ensure that your spa water remains fresh, pure, and ready for use at any time.</p><br/><h2>Ozone Water Purification</h2><p>The HS7NL's ozone purification system provides a natural and chemical-free method of keeping your water clean and safe. By breaking down contaminants at a molecular level, the ozone generator significantly reduces the need for harsh chemicals, ensuring that your spa water is softer and gentler on the skin. This process continuously eliminates bacteria and impurities, allowing you to enjoy cleaner, healthier water with every soak.</p><br/><h2>Efficient Circulation Pump</h2><p>The HS7NL is powered by a high-efficiency circulation pump that ensures water is constantly flowing through the filtration system, preventing stagnation and keeping your water pristine. This quiet, energy-efficient pump operates smoothly in the background, ensuring that your spa water remains crystal-clear while consuming minimal power.</p><br/><h2>Dual Filtration with Surface Skimming</h2><p>With its dual filtration system, The HS7NL Hot Tub keeps water clear by capturing impurities and skimming debris from the water's surface. This system is designed to catch everything from leaves to oils, ensuring that your spa stays fresh and inviting. With its surface skimmer, floating debris is captured before it can affect water quality, allowing you to enjoy a perfectly clean and soothing spa experience every time.</p><br/><h2>Effortless Chemical Balance with FROG @ease</h2><p>$appname are fully compatible with the FROG @ease Floating Sanitizing System, a game-changer in spa maintenance. This innovative system combines minerals with SmartChlor Technology to keep your water consistently fresh and crystal-clear, using up to 75% less chlorine than traditional systems. The self-regulating formula means no more constant adjustments—just reliable, clear water that's soft on skin and free of harsh chemical odors. With regular use, your spa can stay balanced and easy to maintain for 3-4 months before needing a drain and refill. $appname also offers a digital punch card—buy 5 systems and get the 6th free—ensuring hassle-free maintenance for the long term.</p><br/>",
            "specifications" => [
                "features" => [
                    "Seating Configuration" => "7 Seats",
                    "Hydrotherapy Jets" => 48,
                    "Therapy Pumps" => 2,
                    "therapy_pump_hp" => "3",
                    "Quiet Circulation Pump" => "Yes",
                    "Ozone Generator" => "Yes",
                    "Water Feature" => "Laminar Flow",
                    "Surface LEDs" => "Yes",
                    "Master LED" => "Yes",
                    "Wi-Fi Compatible" => "Optional Upgrade",
                    "Comfort Headrest Pillows" => "4",
                    "Interior Color" => "Marble White",
                    "Exterior COlor" => "Weathered Gray"
                ],
                "technical" => [
                    "Dimensions" => '85" x 85" x 36"',
                    "Dry Weight" => 640,
                    "Filled Weight" => 4057,
                    "Water Capacity" => 410,
                    "Filters" => "2 x 50",
                    "Frame Construction" => "Stainless Steel",
                    "Cabinet Insulation" => "Fully Insulated",
                    "Base Insulation" => "Fully Insulated",
                    "Base Material" => "ABS",
                    "Plug-and-Play" => "No",
                    "Electrical Requirements" => "220/240V - 50 amp"
                ]
            ],
            "warranty" => [
                "Stainless Steel Frame" => "Lifetime",
                "Shell Surface" => "5 Years",
                "Shell Structure" => "5 Years",
                "Plumbing" => "2 Years",
                "Internal Components" => "2 Years",
                "Exterior Cabinet" => "2 Years",
                "Jets, Ozone, Lighting" => "1 Year",
                "Cover, Lifter, Steps" => "1 Year",
                "Filter Lids, Overlays, Pillows, Cover Locks" => "90 days"
            ],
            "free_delivery" => true,
            "free_cover" => true,
            "free_color_matching_step" => true,
            "free_starter_chemical_kit" => true,
            "person_capacity" => "4-7",
            "fully_powered" => "240V"
        ]);
        // THE JAGUAR (HS6L)
        Product::factory()->create([
            "slug" => "jaguar",
            "name" => "HS6L",
            "type" => "full-powered-hot-tubs",
            "caption" => "Includes Cover and Color-Matching Steps",
            "short_description" => "Compact yet big enough for the entire family.",
            "long_description" => "Introducing The HS6L Hot Tub - a comfortable retreat that combines elegance and comfort, creating the perfect haven for relaxation in your own backyard. Inspired by the sleek repose of a HS6L, The HS6L's lounge seat invites you into a realm of comfort and sophistication. Powered by 3.0HP dual-speed pumps, The HS6L boasts 41 rejuvenating jets, delivering a therapeutic massage experience that targets every inch of your body. The dual filtration system, equipped with two efficient filters, ensures pristine water quality, providing a consistently refreshing and revitalizing spa environment.",
            "measurement" => '79" x 79"',
            "images" => ["1.png", "2.png", "3.png", "4.png", "5.png", "6.png", "7.png", "8.png", "9.png"],
            "features" => [
                ["img" => "ozone.jpg", "title" => "Ozone", "description" => "Our ozone system purifies water naturally, giving you peace of mind and crystal-clear water."],
                ["img" => "comfort_pillow.jpg", "title" => "Comfort Pillows", "description" => "Sink into comfort with our deluxe headrests, designed to provide optimal support for full relaxation."],
                ["img" => "balboa_controls.jpg", "title" => "Balboa Controls", "description" => "Take control of your spa experience with our intuitive Balboa control panel."],
                ["img" => "water_feature.jpg", "title" => "Water Feature", "description" => "Enjoy the symphony of nature with the gentle Laminar water feature, providing a serene and relaxing backdrop for your spa sessions."],
                ["img" => "hydrotherapy.jpg", "title" => "Hydrotherapy", "description" => "Our advanced hydrotherapy jets are strategically positioned to target key muscle groups, providing relief from tension and stress."],
                ["img" => "ledlighting.jpg", "title" => "LED Lighting", "description" => "Choose the perfect hue to match your mood or event, and enjoy a personalized light show every time you soak."]
            ],
            "top_showcase" => ["jaguar_top_showcase_1.jpg", "jaguar_top_showcase_2.jpg", "jaguar_top_showcase_3.jpg"],
            "bottom_showcase" => [
                "tiger_wolf_jaguar_bottom_showcase_1.jpg",
                "tiger_wolf_jaguar_bottom_showcase_2.jpg",
                "tiger_wolf_jaguar_bottom_showcase_3.jpg"
            ],
            "about" => "<h2>Unleash the Power of Relaxation with The HS6L Hot Tub</h2><p>The HS6L Hot Tub offers a luxurious and spacious spa experience, perfect for those seeking a combination of comfort and power. With seating for 5 individuals plus a full-body lounger, The HS6L provides ample room for friends and family to enjoy hydrotherapy together. Whether you're hosting a social evening or simply looking for a solo retreat, The HS6L's ergonomic design ensures that every seat is crafted for optimal relaxation and therapeutic relief.</p><br/><h2>Hydrotherapy That Rejuvenates</h2><p>At the core of The HS6L Hot Tub is an advanced hydrotherapy system, featuring 41 precision-engineered jets powered by two high-performance hydrotherapy pumps. These jets are strategically positioned to target major muscle groups, relieving tension, easing soreness, and promoting overall relaxation. Whether you want a gentle massage or deeper, more invigorating relief, The HS6L offers a tailored spa experience in every seat and the lounger, ensuring that each user experiences the full benefits of hydrotherapy.</p><br/><h2>Effortless Water Care</h2><p>Maintaining The HS6L Hot Tub is simple and worry-free, thanks to its state-of-the-art water care system. Equipped with dual filtration, ozone purification, and a powerful circulation pump, The HS6L keeps your water crystal-clear and safe. For those seeking added convenience, the optional Frog Ease chemical system simplifies water maintenance, balancing your spa water so you can focus on relaxation.</p><br/><h2>Ambiance to Elevate Your Experience</h2><p>The HS6L Hot Tub isn't just about hydrotherapy—it's also about creating the perfect environment for relaxation. Full-perimeter LED lighting sets the stage for evening soaks, bathing the spa in a soft glow that enhances the overall experience. The Laminar Flow water feature adds a beautiful, arching stream of water that enhances both the visual and auditory appeal of the spa. Whether you're looking for a peaceful escape or a lively gathering, The HS6L ensures that every soak is memorable.</p><br/><h2>Built to Last, Backed by Warranty</h2><p>With durable construction and weather-resistant materials, The HS6L is designed to stand the test of time. The sleek, reinforced shell and comprehensive warranty covering structure, components, and labor give you peace of mind, while the elegant Weathered Gray finish complements any outdoor setting. The HS6L Hot Tub is built for both performance and style, ensuring you can enjoy it for years to come.</p><br/><h2>Your Personal Wellness Retreat</h2><p>More than just a hot tub, The HS6L is your gateway to personal wellness. Its blend of powerful hydrotherapy, soothing ambiance, and spacious seating make it a true oasis of relaxation and rejuvenation. Whether you're enjoying a solo soak or connecting with loved ones, The HS6L transforms your backyard into a luxurious retreat that promotes both physical and mental well-being.</p><br/>",
            "ambiance" => "<h2>A Spa Experience That Soothes the Senses</h2><p>Step into The HS6L Hot Tub and you'll be surrounded by an atmosphere of relaxation and tranquility. Full-perimeter LED lighting creates a calming, ambient glow that enhances your evening soaks, making it perfect for unwinding after a long day or enjoying a quiet night with friends. The soft light reflects off the water, adding a touch of magic to your spa experience.</p><br/><h2>Laminar Flow Water Feature</h2><p>The Laminar Flow water feature in The HS6L creates a smooth, arching stream of water that enhances both the look and feel of your spa environment. The gentle flow adds a peaceful auditory element while also providing a visually stunning centerpiece that sets The HS6L apart from ordinary spas. This feature adds an extra layer of relaxation, making every soak feel like an escape.</p><br/><h2>Ergonomics, Comfort, and Control</h2><p>Designed for comfort, The HS6L features five spacious seats and a full-body lounger that offer optimal support while soaking. Each seat is ergonomically designed to cradle your body, ensuring comfort as the jets work their magic. The intuitive touch controls make it easy to adjust the jets, temperature, and lighting to suit your preferences, putting you in full control of your spa experience.</p><br/>",
            "water_care" => "<h2>Comprehensive Water Care for Pristine Perfection</h2><p>The HS6L Hot Tub is designed to keep your spa water clear, clean, and ready for use with minimal effort. Its advanced water care system includes dual filtration, ozone purification, and a powerful circulation pump, ensuring that your water is always safe and sparkling.</p><br/><h2>Ozone Water Purification</h2><p>The HS6L's ozone purification system provides a natural, chemical-free method of keeping your water clean. By breaking down contaminants at a molecular level, the ozone generator reduces the need for harsh chemicals, ensuring that your water is softer, healthier, and gentler on the skin. This system continuously eliminates bacteria and impurities, offering cleaner, more enjoyable water every time you soak.</p><br/><h2>Efficient Circulation Pump</h2><p>The high-efficiency circulation pump in The HS6L ensures that water is always flowing through the filtration system, preventing stagnation and maintaining water clarity. This pump operates quietly and efficiently, keeping your spa water fresh while optimizing energy use. The continuous circulation also helps maintain the ideal water temperature, ensuring your spa is always ready for use.</p><br/><h2>Dual Filtration with Surface Skimming</h2><p>The dual filtration system in The HS6L is designed to capture debris and impurities, while the surface skimmer removes floating materials like leaves and oils. This multi-layered filtration keeps your spa water crystal-clear and free from unwanted particles, ensuring a consistently clean and refreshing experience every time.</p><br/><h2>Effortless Chemical Balance with FROG @ease</h2><p>$appname are fully compatible with the FROG @ease Floating Sanitizing System, a game-changer in spa maintenance. This innovative system combines minerals with SmartChlor Technology to keep your water consistently fresh and crystal-clear, using up to 75% less chlorine than traditional systems. The self-regulating formula means no more constant adjustments—just reliable, clear water that's soft on skin and free of harsh chemical odors. With regular use, your spa can stay balanced and easy to maintain for 3-4 months before needing a drain and refill. $appname also offers a digital punch card—buy 5 systems and get the 6th free—ensuring hassle-free maintenance for the long term.</p><br/>",
            "specifications" => [
                "features" => [
                    "Seating Configuration" => "5 Seats + 1 Lounger",
                    "Hydrotherapy Jets" => 41,
                    "Therapy Pumps" => 2,
                    "therapy_pump_hp" => "3",
                    "Quiet Circulation Pump" => "Yes",
                    "Ozone Generator" => "Yes",
                    "Water Feature" => "Laminar Flow",
                    "Surface LEDs" => "Yes",
                    "Master LED" => "Yes",
                    "Wi-Fi Compatible" => "Optional Upgrade",
                    "Comfort Headrest Pillows" => "3",
                    "Interior Color" => "Marble White",
                    "Exterior COlor" => "Weathered Gray"
                ],
                "technical" => [
                    "Dimensions" => '79" x 79" x 32"',
                    "Dry Weight" => 596,
                    "Filled Weight" => 2855,
                    "Water Capacity" => 271,
                    "Filters" => "2 x 50",
                    "Frame Construction" => "Stainless Steel",
                    "Cabinet Insulation" => "Fully Insulated",
                    "Base Insulation" => "Fully Insulated",
                    "Base Material" => "ABS",
                    "Plug-and-Play" => "No",
                    "Electrical Requirements" => "220/240V - 50 amp"
                ]
            ],
            "warranty" => [
                "Stainless Steel Frame" => "Lifetime",
                "Shell Surface" => "5 Years",
                "Shell Structure" => "5 Years",
                "Plumbing" => "2 Years",
                "Internal Components" => "2 Years",
                "Exterior Cabinet" => "2 Years",
                "Jets, Ozone, Lighting" => "1 Year",
                "Cover, Lifter, Steps" => "1 Year",
                "Filter Lids, Overlays, Pillows, Cover Locks" => "90 days"
            ],
            "free_delivery" => true,
            "free_cover" => true,
            "free_color_matching_step" => true,
            "free_starter_chemical_kit" => true,
            "person_capacity" => "3-6",
            "fully_powered" => "240V"
        ]);
        // THE HAWK (HS6LP)
        Product::factory()->create([
            "slug" => "hawk",
            "name" => "HS6LP",
            "type" => "plug-and-play-hot-tubs",
            "caption" => "Includes Cover and Color-Matching Steps",
            "short_description" => "Large plug-and-play so you can start relaxing right away.",
            "long_description" => "Inspired by the free-spirited elegance of a HS6LP, this hot tub takes your relaxation to new heights. With a seating configuration of 4 seats and 1 lounger, The HS6LP creates the perfect blend of socializing space and serene solitude.",
            "measurement" => '79" x 79"',
            "images" => ["1.png", "2.png", "3.png", "4.png", "5.png", "6.png", "7.png", "8.png", "9.png"],
            "features" => [
                ["img" => "ozone.jpg", "title" => "Ozone", "description" => "Harness the natural power of ozone to keep your spa water sparkling clean."],
                ["img" => "plug_and_play.jpg", "title" => "Plug-and-Play", "description" => "Transform any space into your personal retreat with an effortless setup."],
                ["img" => "balboa_controls.jpg", "title" => "Balboa Controls", "description" => "The Balboa Control Panel ensures easy and intuitive control of the spa."],
                ["img" => "hydrotherapy.jpg", "title" => "Hydrotherapy", "description" => "Our hydrotherapy jets are expertly crafted to target specific muscle groups, offering targeted relaxation and therapeutic benefits."],
                ["img" => "ledlighting.jpg", "title" => "LED Lighting", "description" => "Set the perfect mood with our color-changing LED lights."]
            ],
            "top_showcase" => ["hawk_top_showcase_1.jpg", "hawk_top_showcase_2.jpg", "hawk_top_showcase_3.jpg"],
            "bottom_showcase" => [
                "hawk_bottom_showcase_1.jpg",
                "hawk_bottom_showcase_2.jpg",
                "hawk_bottom_showcase_3.jpg"
            ],
            "about" => "<h2>Compact Yet Powerful Relaxation with The HS6LP Hot Tub</h2><p>The HS6LP Hot Tub is designed for those who seek the perfect balance between simplicity and effective hydrotherapy. With seating for 4 people plus a full-body lounger, The HS6LP offers a spacious yet intimate layout that's perfect for families or small gatherings. Whether you're looking for a tranquil retreat or an evening of social relaxation, The HS6LP's ergonomic design ensures comfort and enjoyment for all.</p><br/><h2>Effective Hydrotherapy in a Streamlined Design</h2><p>The HS6LP may be compact, but it doesn't skimp on hydrotherapy. With 25 carefully positioned jets powered by a single, dual-speed pump, this spa delivers targeted relief to key areas like the back, shoulders, and legs. The dual-speed pump offers flexibility, allowing you to switch between a gentle, relaxing soak or a more invigorating, deep-tissue massage. While it lacks some of the extra features of larger models, The HS6LP excels at providing the hydrotherapy essentials you need to unwind and rejuvenate.</p><br/><h2>Effortless Water Care</h2><p>Maintaining The HS6LP Hot Tub is simple and straightforward, thanks to its efficient water care system. While it does not feature a circulation pump, the dual-speed pump handles both hydrotherapy and water maintenance, ensuring consistent water flow and filtration. Its plug-and-play nature keeps things easy, with fewer components to manage, making it perfect for users looking for a more streamlined spa experience.</p><br/><h2>Ambiance and Comfort</h2><p>While The HS6LP Hot Tub forgoes features like water cascades or pillows, its focus on providing comfort through thoughtful seating and effective jet placement ensures a relaxing soak every time. The ergonomic seats and lounger cradle your body, allowing you to fully enjoy the therapeutic benefits of the jets. The HS6LP's simplicity doesn't sacrifice comfort—it enhances it, letting you focus purely on relaxation.</p><br/><h2>Durability and Peace of Mind</h2><p>Built to withstand the elements, The HS6LP Hot Tub is made with durable materials and a reinforced shell to ensure longevity. Its sleek Weathered Gray exterior blends seamlessly with any outdoor environment, making it as stylish as it is functional. The comprehensive warranty covers structure, components, and labor, ensuring your investment is protected for years to come.</p><br/><h2>Plug-and-Play Convenience</h2><p>One of the key features of The HS6LP Hot Tub is its plug-and-play setup. Designed for ultimate convenience, The HS6LP requires no additional electrical work or complicated installation—simply plug it into a standard 110V outlet, and you're ready to enjoy. This makes The HS6LP ideal for those looking for a hassle-free spa experience, whether it's your first hot tub or an addition to an existing setup. Its portability also makes it easy to relocate within your outdoor space as needed.</p><br/>",
            "ambiance" => "<h2>A Luxurious Atmosphere Designed to Soothe the Senses</h2><p>Step into the HS8L Hot Tub, and you'll immediately be enveloped in an ambiance of tranquility and luxury. Every detail is carefully designed to heighten your senses and enhance the relaxation experience. Full-perimeter LED lighting creates a serene glow that illuminates the spa's interior, transforming your evening soaks into a soothing, visually stunning experience. Whether you're unwinding after a long day or enjoying a quiet evening under the stars, the lighting enhances the mood, creating an inviting atmosphere for you and your guests.</p><br/><h2>Smooth Cascade Waterfall for Ultimate Relaxation</h2><p>The Smooth Cascade Waterfall adds an extra dimension of relaxation to your spa experience. With a gentle, continuous flow of water, it brings both visual appeal and a calming, natural sound to the spa, helping you unwind. Whether you prefer to sit beneath the waterfall or simply enjoy the soothing sound in the background, this feature makes every soak in the HS8L a multi-sensory escape.</p><br/>",
            "water_care" => "<h2>Simple, Efficient Water Care for a Low-Maintenance Spa</h2><p>The HS6LP Hot Tub features an efficient and streamlined water care system that makes maintenance a breeze. While it doesn't include a dedicated circulation pump, its dual-speed pump handles both water flow and jet power, ensuring the water remains fresh and filtered without extra effort on your part.</p><br/><h2>Ozone Water Purification</h2><p>The HS6LP is equipped with an ozone purification system, which provides a natural, chemical-free way to keep your water clean. By breaking down contaminants and bacteria, the ozone system reduces the need for heavy chemical treatments, ensuring your water stays cleaner and gentler on your skin. This eco-friendly method simplifies water care, giving you more time to enjoy your spa.</p><br/><h2>Dual Filtration for Crystal-Clear Water</h2><p>The dual filtration system in The HS6LP captures debris and impurities, keeping your water clean and clear. While The HS6LP lacks surface skimming, the dual filters ensure that particles are removed efficiently, reducing the need for frequent maintenance. With a straightforward water care system, The HS6LP makes it easy to keep your spa in pristine condition.</p><br/><h2>Effortless Chemical Balance with FROG @ease</h2><p>$appname are fully compatible with the FROG @ease Floating Sanitizing System, a game-changer in spa maintenance. This innovative system combines minerals with SmartChlor Technology to keep your water consistently fresh and crystal-clear, using up to 75% less chlorine than traditional systems. The self-regulating formula means no more constant adjustments—just reliable, clear water that's soft on skin and free of harsh chemical odors. With regular use, your spa can stay balanced and easy to maintain for 3-4 months before needing a drain and refill.$appname also offers a digital punch card—buy 5 systems and get the 6th free—ensuring hassle-free maintenance for the long term.</p><br/>",
            "specifications" => [
                "features" => [
                    "Seating Configuration" => "4 Seats + 1 Lounger",
                    "Hydrotherapy Jets" => 25,
                    "Therapy Pumps" => 1,
                    "therapy_pump_hp" => "2",
                    "Quiet Circulation Pump" => "No",
                    "Ozone Generator" => "Yes",
                    "Water Feature" => "No",
                    "Surface LEDs" => "Yes",
                    "Master LED" => "Yes",
                    "Wi-Fi Compatible" => "Optional Upgrade",
                    "Comfort Headrest Pillows" => "No",
                    "Interior Color" => "Marble White",
                    "Exterior COlor" => "Weathered Gray"
                ],
                "technical" => [
                    "Dimensions" => '79" x 79" x 32"',
                    "Dry Weight" => 662,
                    "Filled Weight" => 3241,
                    "Water Capacity" => 310,
                    "Filters" => "2 x 50",
                    "Frame Construction" => "Stainless Steel",
                    "Cabinet Insulation" => "Fully Insulated",
                    "Base Insulation" => "Fully Insulated",
                    "Base Material" => "ABS",
                    "Plug-and-Play" => "Yes",
                    "Electrical Requirements" => "110/120V - 16 amp"
                ]
            ],
            "warranty" => [
                "Stainless Steel Frame" => "Lifetime",
                "Shell Surface" => "5 Years",
                "Shell Structure" => "5 Years",
                "Plumbing" => "2 Years",
                "Internal Components" => "2 Years",
                "Exterior Cabinet" => "2 Years",
                "Jets, Ozone, Lighting" => "1 Year",
                "Cover, Lifter, Steps" => "1 Year",
                "Filter Lids, Overlays, Pillows, Cover Locks" => "90 days"
            ],
            "free_delivery" => true,
            "free_cover" => true,
            "free_color_matching_step" => true,
            "free_starter_chemical_kit" => true,
            "person_capacity" => "3-5",
            "plug_and_play" => "110V"
        ]);
        // THE FALCON (HS5L)
        Product::factory()->create([
            "slug" => "falcon",
            "name" => "HS5L",
            "type" => "plug-and-play-hot-tubs",
            "caption" => "Includes Cover and Color-Matching Steps",
            "short_description" => "Side-by-side spa perfect for couples or tight spaces.",
            "long_description" => "Start relaxing in no time with The HS5L hot tub, a sublime blend of luxury and convenience. This compact plug-and-play spa is perfectly designed for couples or tight spaces. Transform your backyard without overpowering it. Simply plug it in and slip into serenity.",
            "measurement" => '85" x 65"',
            "images" => ["1.png", "2.png", "3.png", "4.png", "5.png", "6.png", "7.png", "8.png", "9.png"],
            "features" => [
                ["img" => "ozone.jpg", "title" => "Ozone Integration", "description" => "Keep your spa water pristine with our ozone system, reducing the need for harsh chemicals."],
                ["img" => "plug_and_play.jpg", "title" => "Plug-and-Play", "description" => "Simply plug in your spa and unwind.<br/> The quick and easy setup means you can dive into relaxation without delay."],
                ["img" => "balboa_controls.jpg", "title" => "Balboa Controls", "description" => "The Balboa Control Panel ensures easy control of the spa's customizable settings."],
                ["img" => "hydrotherapy.jpg", "title" => "Hydrotherapy", "description" => "Our advanced hydrotherapy jets are strategically positioned to target key muscle groups, providing therapeutic relief from tension and stress."],
                ["img" => "ledlighting.jpg", "title" => "LED Lighting", "description" => "Enjoy dynamic LED lights that change colors seamlessly, creating a captivating ambiance perfect for any mood"]
            ],
            "top_showcase" => ["falcon_top_showcase_1.jpg", "falcon_top_showcase_2.jpg", "falcon_top_showcase_3.jpg"],
            "bottom_showcase" => [
                "falcon_bottom_showcase_1.jpg",
                "falcon_bottom_showcase_2.jpg",
                "falcon_bottom_showcase_3.jpg"
            ],
            "about" => "<h2>Compact and Powerful Relaxation with The HS5L Hot Tub</h2><p>The HS5L Hot Tub is designed for those seeking a compact yet effective spa experience, making it ideal for smaller backyards or spaces with limited delivery access. Whether you're a single bather or a couple, The HS5L offers an intimate and relaxing spa environment with seating for 2 and a full-body lounger for ultimate comfort. Its ergonomic design ensures that even in a smaller footprint, you enjoy the full benefits of hydrotherapy.</p><br/><h2>Efficient Hydrotherapy for Relaxation</h2><p>Despite its compact size, The HS5L doesn't compromise on hydrotherapy. With 25 jets powered by a single, high-performance hydrotherapy pump, this spa delivers targeted relief to key areas such as the back, shoulders, and legs. The dual-speed pump allows you to enjoy a gentle, soothing soak or a more invigorating massage, providing a versatile hydrotherapy experience suited to your needs.</p><br/><h2>Effortless Water Care</h2><p>The HS5L Hot Tub is easy to maintain, thanks to its straightforward water care system. Equipped with a dual filtration system and ozone purification, The HS5L keeps your water clean and clear with minimal maintenance. The single hydrotherapy pump ensures efficient water flow, combining hydrotherapy and water maintenance in a simple, streamlined design.</p><br/><h2>Ambiance and Comfort</h2><p>While The HS5L focuses on simplicity, it doesn't sacrifice comfort. Ergonomically designed seats and the lounger ensure that every bather enjoys the therapeutic benefits of the jets. The compact design is perfect for singles or couples who want a relaxing spa experience without the need for a large or complex model. Its minimalist features allow you to enjoy a peaceful soak without distraction.</p><br/><h2>Durability and Style</h2><p>The HS5L Hot Tub is built to last, with a durable, weather-resistant shell and sleek exterior that complements any outdoor space. Its compact size doesn't diminish its sturdiness, and the included warranty ensures that your investment is protected. The HS5L's stylish Weathered Gray finish allows it to blend seamlessly into your backyard environment.</p><br/><h2>Plug-and-Play Convenience</h2><p>One of The HS5L's standout features is its plug-and-play design. There's no need for complicated electrical work—simply plug it into a standard 110V outlet, and you're ready to enjoy. This makes The HS5L a convenient option for those who want a hassle-free spa experience, perfect for smaller outdoor spaces or homes that cannot accommodate larger, more complex installations.</p><br/>",
            "ambiance" => "<h2>Compact Comfort Focused on Simplicity</h2><p>The HS5L Hot Tub may be compact, but it doesn't compromise on comfort. With ergonomically designed seating and a lounger that offers full-body support, this spa is perfect for those seeking a relaxing escape without the need for extra features. Its minimalist design enhances the user experience by focusing on what matters most—effective hydrotherapy and relaxation.</p><br/><h2>Ergonomics and Easy Control</h2><p>The HS5L's intuitive control system makes it easy to adjust the jets and temperature, ensuring that you can fully customize your spa experience. The ergonomic seats are designed to cradle your body comfortably, while the lounger offers extra support for those long, relaxing soaks. Its simplicity allows you to focus entirely on your comfort and relaxation.</p><br/>",
            "water_care" => "<h2>Simple and Effective Water Care for a Compact Spa</h2><p>The HS5L Hot Tub is designed to provide efficient water care with minimal effort. Featuring a dual filtration system and ozone purification, this spa ensures that your water stays clear and clean. The single hydrotherapy pump handles both jet power and water circulation, simplifying maintenance and making it easy to keep your spa in great condition.</p><br/><h2>Ozone Water Purification</h2><p>The ozone purification system in The HS5L provides a chemical-free way to keep your water clean and free of contaminants. By breaking down bacteria and impurities at a molecular level, the ozone system significantly reduces the need for harsh chemical treatments, ensuring that your spa water remains gentle on the skin and healthier for frequent use.</p><br/><h2>Dual Filtration for Crystal-Clear Water</h2><p>The HS5L's dual filtration system captures debris and impurities, helping to keep your water fresh and clean. While the spa's compact size means there is no dedicated circulation pump, the dual-speed hydrotherapy pump efficiently handles both jet power and water filtration. This ensures that the water remains clear without adding complexity to the maintenance process.</p><br/><h2>Effortless Chemical Balance with FROG @ease</h2><p>$appname are fully compatible with the FROG @ease Floating Sanitizing System, a game-changer in spa maintenance. This innovative system combines minerals with SmartChlor Technology to keep your water consistently fresh and crystal-clear, using up to 75% less chlorine than traditional systems. The self-regulating formula means no more constant adjustments—just reliable, clear water that's soft on skin and free of harsh chemical odors. With regular use, your spa can stay balanced and easy to maintain for 3-4 months before needing a drain and refill. $appname also offers a digital punch card—buy 5 systems and get the 6th free—ensuring hassle-free maintenance for the long term.</p><br/>",
            "specifications" => [
                "features" => [
                    "Seating Configuration" => "2 Seats + 1 Lounger",
                    "Hydrotherapy Jets" => 25,
                    "Therapy Pumps" => 1,
                    "therapy_pump_hp" => "2",
                    "Quiet Circulation Pump" => "No",
                    "Ozone Generator" => "Yes",
                    "Water Feature" => "No",
                    "Surface LEDs" => "Yes",
                    "Master LED" => "Yes",
                    "Wi-Fi Compatible" => "Optional Upgrade",
                    "Comfort Headrest Pillows" => "No",
                    "Interior Color" => "Marble White",
                    "Exterior COlor" => "Weathered Gray"
                ],
                "technical" => [
                    "Dimensions" => '85" x 65" x 32"',
                    "Dry Weight" => 552,
                    "Filled Weight" => 2668,
                    "Water Capacity" => 254,
                    "Filters" => "2 x 50",
                    "Frame Construction" => "Stainless Steel",
                    "Cabinet Insulation" => "Fully Insulated",
                    "Base Insulation" => "Fully Insulated",
                    "Base Material" => "ABS",
                    "Plug-and-Play" => "Yes",
                    "Electrical Requirements" => "110/120V - 16 amp"
                ]
            ],
            "warranty" => [
                "Stainless Steel Frame" => "Lifetime",
                "Shell Surface" => "5 Years",
                "Shell Structure" => "5 Years",
                "Plumbing" => "2 Years",
                "Internal Components" => "2 Years",
                "Exterior Cabinet" => "2 Years",
                "Jets, Ozone, Lighting" => "1 Year",
                "Cover, Lifter, Steps" => "1 Year",
                "Filter Lids, Overlays, Pillows, Cover Locks" => "90 days"
            ],
            "free_delivery" => true,
            "free_cover" => true,
            "free_color_matching_step" => true,
            "free_starter_chemical_kit" => true,
            "person_capacity" => "2-3",
            "plug_and_play" => "110V"
        ]);
        // THE CROC (HS2C)
        Product::factory()->create([
            "slug" => "croc",
            "name" => "HS2C",
            "type" => "cold-spas",
            "caption" => "",
            "short_description" => "Dual power for champions—rise above with hot and cold therapy.",
            "long_description" => "Experience hydrotherapy like never before! Chill out effortlessly in our new cold spa! Designed to revitalize the performance and recovery of champions. Though it boasts a beautifully simplistic design, the HS2C spa isn't for the faint of heart. Are you brave enough to take the plunge?",
            "measurement" => '85" x 85"',
            "images" => ["1.png", "2.jpg", "3.jpg", "4.jpg", "5.jpg", "6.jpg", "7.jpg", "8.jpg", "9.jpg"],
            "features" => [],
            "top_showcase" => ["croc_top_showcase_1.jpg", "croc_top_showcase_2.jpg", "croc_top_showcase_1.jpg"],
            "bottom_showcase" => [],
            "about" => "<h2>Revolutionize Your Wellness Routine with The HS2C Cold Tub</h2><p>The HS2C Hot Tub, a dual-zone hot-and-cold solution, redefines wellness by combining the benefits of both heat and cold therapy. With a versatile temperature range of 41°F to 104°F, it's perfect for wellness enthusiasts, athletes, or anyone seeking the restorative benefits of controlled temperature immersion. Designed with minimal water movement, The HS2C's efficient circulation system keeps water clean and undisturbed, making it an ideal environment for both hot relaxation and cold immersion therapy.</p><br/><p>Built for individual use, The HS2C provides a private sanctuary for experiencing the benefits of temperature-based therapy, from reduced inflammation and improved circulation to accelerated muscle recovery. Its compact, user-centered design brings a rejuvenating spa experience directly to your home.</p><br/><h2>Advanced Control and Customizable Features</h2><p>With The HS2C's WiFi-enabled system, you have full control over your wellness experience. Manage up to six different modes—Smart Heating, Powerful Heating, Silent Heating, Smart Cooling, Powerful Cooling, and Silent Cooling—directly from your smartphone, allowing you to create the perfect environment for any therapy. Whether you're seeking cold therapy post-workout or a warm soak for relaxation, The HS2C adapts to meet your personal wellness needs with ease.</p>",
            "therapy" => "<h2>Designed for Comfort and Stability</h2><p>The HS2C Hot Tub prioritizes both comfort and stability to enhance your hot and cold therapy sessions. Featuring CrocGrip in the footwell—a rugged material inspired by sportboats—your footing stays secure, even during colder plunges. The sleek, crisp white interior provides a striking contrast to the spa's rich, deep-brown exterior, seamlessly complementing any outdoor setting while adding a contemporary, polished aesthetic.</p><br/><h2>Energy Efficiency at Its Best</h2><p>The HS2C Hot Tub is equipped with a highly energy-efficient heat exchange unit, ensuring that both hot and cold zones remain at ideal temperatures without excessive energy use. This energy-saving system allows for consistent temperature maintenance, making The HS2C perfect for regular therapeutic use or occasional relaxation without worrying about high utility costs.</p><br/><h2>Calming Underwater Lighting</h2><p>The HS2C includes an automatic underwater lighting system that activates with the circulation pump, gently cycling through an array of soothing colors. This soft lighting enhances the relaxation experience, adding a calming ambiance to each session, whether day or night. Visually serene and physically restorative, The HS2C is designed to elevate your wellness routine.</p>",
            "water_care" => "<h2>Effortless Water Care with Circulation Efficiency</h2><p>The HS2C Hot Tub, a versatile dual-zone hot-and-cold tub, ensures exceptional water quality with an efficient circulation pump and robust water care features. Its straightforward yet highly effective filtration system, powered by a circulation pump, keeps water clean and drives two dedicated circulation jets to maintain gentle water flow. This unique setup includes an ozone return and cold water return, totaling four inlets that collaborate to keep your water clean and clear, regardless of temperature.</p><br/><h2>Ozone Water Purification</h2><p>With an integrated ozone system, The HS2C takes water purity to a new level, breaking down contaminants to reduce the need for chemical additives. This natural, eco-friendly process ensures fresh, safe, and skin-friendly water. Continuous ozone purification delivers a gentle and hygienic water environment, enhancing every use, hot or cold.</p><br/><h2>Circulation Pump for Optimal Water Flow</h2><p>The HS2C Hot Tub relies on a high-efficiency circulation pump to manage both water flow and cleanliness. This pump drives the two jets for a gentle filtration process, making the cold zone ideal for therapy without significant water agitation, while keeping hot water zones efficiently filtered. The quiet and energy-efficient operation lets you focus on wellness, uninterrupted.</p><br/><h2>Customizable Filtration Settings</h2><p>With The HS2C, filtration schedules are customizable to fit your preferences, allowing control over timing and frequency. This flexibility ensures consistently fresh water and maximum energy efficiency, with continuous circulation ready for an invigorating plunge or a relaxing soak.</p><br/><h2>Effortless Chemical Balance with FROG @ease</h2><p>Dothan Hot Tubs are compatible with the FROG @ease Floating Sanitizing System, a game-changer in spa maintenance. This innovative system combines minerals with SmartChlor Technology to keep your water consistently fresh and crystal-clear, using up to 75% less chlorine than traditional systems. The self-regulating formula means no more constant adjustments—just reliable, clear water that's soft on skin and free of harsh chemical odors. With regular use, your spa can stay balanced and easy to maintain for 3-4 months before needing a drain and refill. Dothan Hot Tub Warehouse also offers a digital punch card—buy 5 systems and get the 6th free—ensuring hassle-free maintenance for the long term.</p><br/>",
            "specifications" => [
                "features" => [
                    "Seating Configuration" => "3 Person",
                    "Circulation Jets" => 2,
                    "Hydrotherapy Jets" => 12,
                    "Temperature Range" => "37°F to 104°F",
                    "Heat Exchanger" => "Yes",
                    "Therapy Pump" => "Yes",
                    "Quiet Circulation Pump" => "Yes",
                    "Ozone Generator" => "Yes",
                    "Water Feature" => "No",
                    "Surface LEDs" => "No",
                    "Master LED" => "Yes",
                    "Built-in Wi-Fi" => "Yes (cold zone only)",
                    "Comfort Headrest Pillows" => "No",
                    "Interior Color" => "White",
                    "Exterior COlor" => "Shadow Walnut"
                ],
                "technical" => [
                    "Dimensions" => '85" x 85" x 29.5"',
                    "Dry Weight" => 705,
                    "Filled Weight" => 3000,
                    "Water Capacity" => 264,
                    "Filters" => "2 x 50",
                    "Frame Construction" => "Stainless Steel",
                    "Cabinet Insulation" => "Fully Insulated",
                    "Base Insulation" => "Fully Insulated",
                    "Plumbing Insulation" => "Fully Insulated",
                    "Base Material" => "ABS",
                    "Condensation Drain" => "Yes",
                    "Plug-and-Play" => "Yes",
                    "Electrical Requirements" => "110/120V - 16 amp (x2)"
                ]
            ],
            "warranty" => [
                "Stainless Steel Frame" => "Lifetime",
                "Shell Surface" => "5 Years",
                "Shell Structure" => "5 Years",
                "Plumbing" => "2 Years",
                "Internal Components" => "2 Years",
                "Exterior Cabinet" => "2 Years",
                "Jets, Ozone, Lighting" => "1 Year",
                "Cover, Lifter, Steps" => "1 Year",
                "Filter Lids, Overlays, Pillows, Cover Locks" => "90 days"
            ],
            "new" => true,
            "free_delivery" => true,
            "free_cover" => true,
            "free_starter_chemical_kit" => true,
            "person_capacity" => "3",
            "plug_and_play" => "110V",
            "chilled_temperature" => "37°"
        ]);
        // THE GATOR (HS1C)
        Product::factory()->create([
            "slug" => "gator",
            "name" => "HS1C",
            "type" => "cold-spas",
            "caption" => "Includes Cover",
            "short_description" => "Icy relief, unleashed for champions.",
            "long_description" => "Experience hydrotherapy like never before! Chill out effortlessly in our new cold spa! Designed to revitalize the performance and recovery of champions. Though it boasts a beautifully simplistic design, the HS1C spa isn't for the faint of heart. Are you brave enough to take the plunge?",
            "measurement" => '79" x 39.5"',
            "images" => ["1.png"],
            "features" => [],
            "top_showcase" => ["gator_top_showcase_1.jpg", "gator_top_showcase_2.jpg", "gator_top_showcase_3.jpg"],
            "bottom_showcase" => [],
            "about" => "<h2>Revolutionize Your Wellness Routine with The HS1C Cold Tub</h2><p>The HS1C Cold Tub is a groundbreaking solution for cold therapy, designed to promote recovery and well-being with minimal water movement. With a wide temperature range from 41°F to 104°F, it's built for wellness enthusiasts, athletes, and anyone seeking the rejuvenating benefits of cold exposure. Unlike conventional hot tubs, The HS1C uses a simple but powerful circulation system that keeps the water clean and cool without unnecessary turbulence, making it ideal for cold immersion therapy.</p><br/><p>Designed for single-person use, The HS1C is a personal sanctuary, allowing you to experience the benefits of cold therapy, such as reduced inflammation, enhanced circulation, and quicker muscle recovery. Its compact yet thoughtfully engineered design brings an efficient and energizing recovery experience right to your backyard.</p><br/><h2>Advanced Control and Customizable Features</h2><p>Take control of your wellness routine with The HS1C's WiFi-enabled system. Using your smartphone, you can manage six different modes—Smart Heating, Powerful Heating, Silent Heating, Smart Cooling, Powerful Cooling, and Silent Cooling—giving you total flexibility in maintaining the perfect environment for your cold or warm soaks. Whether you need cold therapy after a workout or a warm soak for relaxation, The HS1C offers tailored settings to fit your needs.</p><br/>",
            "therapy" => "<h2>Designed for Comfort and Stability</h2><p>The HS1C Cold Tub is engineered for comfort and functionality, offering a stable and supportive environment for your recovery sessions. With HS1CGrip in the footwell—a durable material often used in sportboats—your footing remains secure, even in the coldest conditions. The sleek, pure white interior contrasts beautifully with the exterior's stylish Riberank Gray finish, blending seamlessly into any outdoor space while adding a modern, clean look.</p><br/><h2>Energy Efficiency at Its Best</h2><p>The HS1C is powered by an incredibly energy-efficient heat exchange unit, ensuring that your cold or warm soaks remain at the perfect temperature without inflating your energy costs. This efficient system makes it easy to maintain the ideal environment for cold therapy, making the HS1C an excellent choice for both regular users and those seeking occasional use without high energy consumption.</p><br/><h2>Calming Underwater Lighting</h2><p>The HS1C also includes an automatic underwater light that activates with the circulation pump. This light softly cycles through various colors, creating a calming ambiance that adds an extra layer of relaxation to your wellness routine. Whether you're using it during the day or at night, the lighting enhances the overall experience, making The HS1C as soothing visually as it is physically.</p><br/>",
            "water_care" => "<h2>Effortless Water Care with Circulation Efficiency</h2><p>The HS1C Cold Tub excels in maintaining pristine water quality with its efficient circulation pump and thoughtful water care features. Equipped with a simple yet highly effective filtration system, The HS1C's circulation pump not only keeps the water clean but also drives the two circulation jets, ensuring smooth water flow without agitation. Additionally, the spa includes an ozone return and a cold water return, providing four total inlets that work together to maintain water cleanliness and clarity.</p><br/><h2>Ozone Water Purification</h2><p>The integrated ozone system in The HS1C enhances water purity by breaking down contaminants and impurities, reducing the need for chemical treatments. This natural, eco-friendly method ensures that your water stays clean and safe, while maintaining a soft and gentle environment for your skin. Ozone purification works continuously, leaving your water feeling fresh and hygienic for every use.</p><br/><h2>Circulation Pump for Optimal Water Flow</h2><p>The HS1C relies solely on a high-efficiency circulation pump to maintain water flow and cleanliness. The circulation pump drives the two jets that gently move water through the filtration system, ensuring that your cold tub remains clear and free of debris. This gentle movement is ideal for cold therapy, where minimal water disturbance enhances the therapeutic experience. The circulation pump also operates quietly and efficiently, so you can focus on your wellness without distraction.</p><br/><h2>Customizable Filtration Settings</h2><p>The HS1C allows you to control filtration schedules, letting you choose when and how often filtration runs throughout the day. This feature ensures that your water stays fresh and clean at all times while maximizing energy efficiency. Combined with the circulation pump's continuous flow, your tub is always ready for a rejuvenating cold plunge.</p><br/><h2>Effortless Chemical Balance with FROG @ease</h2><p>Dothan Hot Tubs are compatible with the FROG @ease Floating Sanitizing System, a game-changer in spa maintenance. This innovative system combines minerals with SmartChlor Technology to keep your water consistently fresh and crystal-clear, using up to 75% less chlorine than traditional systems. The self-regulating formula means no more constant adjustments—just reliable, clear water that's soft on skin and free of harsh chemical odors. With regular use, your spa can stay balanced and easy to maintain for 3-4 months before needing a drain and refill. Dothan Hot Tub Warehouse also offers a digital punch card—buy 5 systems and get the 6th free—ensuring hassle-free maintenance for the long term.</p><br/>",
            "specifications" => [
                "features" => [
                    "Seating Configuration" => "1 Person",
                    "Circulation Jets" => 2,
                    "Temperature Range" => "41°F to 104°F",
                    "Heat Exchanger" => "Yes",
                    "Therapy Pump" => "No",
                    "Quiet Circulation Pump" => "Yes",
                    "Ozone Generator" => "Yes",
                    "Water Feature" => "No",
                    "Surface LEDs" => "No",
                    "Master LED" => "Yes",
                    "Built-in Wi-Fi" => "Yes",
                    "Comfort Headrest Pillows" => "No",
                    "Interior Color" => "White",
                    "Exterior COlor" => "Shadow Walnut"
                ],
                "technical" => [
                    "Dimensions" => '79" x 39.5" x 29.5"',
                    "Dry Weight" => 331,
                    "Filled Weight" => 1500,
                    "Water Capacity" => 106,
                    "Filters" => "1 x 50",
                    "Frame Construction" => "Stainless Steel",
                    "Cabinet Insulation" => "Fully Insulated",
                    "Base Insulation" => "Fully Insulated",
                    "Plumbing Insulation" => "Fully Insulated",
                    "Base Material" => "ABS",
                    "Condensation Drain" => "Yes",
                    "Plug-and-Play" => "Yes",
                    "Electrical Requirements" => "110/120V - 16 amp"
                ]
            ],
            "warranty" => [
                "Stainless Steel Frame" => "Lifetime",
                "Shell Surface" => "5 Years",
                "Shell Structure" => "5 Years",
                "Plumbing" => "2 Years",
                "Internal Components" => "2 Years",
                "Exterior Cabinet" => "2 Years",
                "Jets, Ozone, Lighting" => "1 Year",
                "Cover, Lifter, Steps" => "1 Year",
                "Filter Lids, Overlays, Pillows, Cover Locks" => "90 days"
            ],
            "free_delivery" => true,
            "free_cover" => true,
            "free_starter_chemical_kit" => true,
            "person_capacity" => "1",
            "plug_and_play" => "110V",
            "chilled_temperature" => "41°"
        ]);
    }
}
