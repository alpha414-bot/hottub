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
        // GSS12
        Product::factory()->create([
            "slug" => "gss12",
            "name" => "GSS12",
            "type" => "Generation Hot Tubs",
            "caption" => "",
            "measurement" => '144" x 90" x 48"',
            "images" => ["1.png"],
            "specifications" => [
                "features" => [
                    "Seating Configuration" => "2 Seats",
                    "River Jets" => "1 - 200 gpm",
                    "Pumps" => 2,
                    "Ozone Ready" => "Yes",
                    "LED Lights" => "Yes",
                    "G90 Galvanized Steel Frame" => "Yes",
                    "Solid ABS Floor System" => "Yes",
                    "Topside Control, Digital Display" => "Yes",
                    "Balboa Electrical Equipment" => "Yes",
                    "EVA Foam" => "Yes"
                ],
                "technical" => [
                    "Dimensions" => '144" x 90" x 48"',
                    "Two Tone Jets" => 24,
                    "Sqft Filter" => 100,
                    "Volume" => "1100 US Gallons",
                    "Dry Weight" => 1500,
                    "Filled Weight" => 10300,
                ]
            ],
            "free_delivery" => true,
            "person_capacity" => 2,
        ]);
        // GSS 16XL
        Product::factory()->create([
            "slug" => "gss16xl",
            "name" => "GSS16XL",
            "type" => "Generation Hot Tubs",
            "caption" => "",
            "measurement" => '192" x 92" x 56"',
            "images" => ["1.png"],
            "specifications" => [
                "features" => [
                    "Seating Configuration" => "4 Seats",
                    "River Jets" => "3",
                    "Pumps" => 4,
                    "Ozone Ready" => "Yes",
                    "LED Lights" => "Yes",
                    "Balboa Electrical Equipment" => "Yes",
                    "Topside Control, Digital Display" => "Yes",
                    "LED Waterfalls" => "2",
                    "EVA Foam" => "Yes"
                ],
                "technical" => [
                    "Dimensions" => '192" x 92" x 56"',
                    "Two Tone Jets" => 27,
                    "Sqft Filter" => 100,
                    "Dry Weight" => 2400,
                    "Filled Weight" => 19500
                ]
            ]
        ]);
        // SS13
        Product::factory()->create([
            "slug" => "ss13",
            "name" => "SS13",
            "type" => "Gulfsouthspas",
            "long_description" => "<p>Swim, jog, walk, and exercise in water without the stress gravity has on your body. Relax with massaging spajets in the perfect water temperature, year-round. This alternative to a pool has benefits for you and your entire family.</p><h5>Insulation</h5><ul><li>Up to 7 times the R-value of other hot tubs</li><li>The isolating reflective panel redirects the heat</li><li>Added protection against freezing</li><li>Acts as sound barrier</li><li>The unique design protects equipment</li><li>Allows easy access for service and upgrading</li></ul>",
            "measurement" => '92" x 161" x 51"',
            "images" => ["1.png"],
            "specifications" => [
                "features" => [
                    "Seating Configuration" => "4 Seats",
                    "Swim Jets" => "3",
                    "Fountains" => "6",
                    "LED Lights" => "(12) LED Light",
                    "Exclusive Features" => 'Deluxe Cover, K.1000 Digital Topside, UV Ozonator, Rmax® Insulation, 5" LED Footwell Light, Ash or Coastal Gray Skirting, Comfortable Headrests, Sterling Marble Acrylic Standard.',
                    "Premium Options" => "Therapy & Fitness / Endurance",
                ],
                "technical" => [
                    "Dimensions" => '192" x 92" x 56"',
                    "OVO Jets" => 27,
                    "Dry Weight" => 2000,
                    "Filled Weight" => 13199,
                    "Gallons" => 1400,
                    "Power Requirement" => "220 volt (2) x 5 BHP and (1) x 7 BHP",
                ]
            ]
        ]);
        // SS14
        Product::factory()->create([
            "slug" => "ss14",
            "name" => "SS14",
            "type" => "Gulfsouthspas",
            "long_description" => "<p>Swim, jog, walk, and exercise in water without the stress gravity has on your body. Relax with massaging spajets in the perfect water temperature, year-round. This alternative to a pool has benefits for you and your entire family.</p><h5>Insulation</h5><ul><li>Up to 7 times the R-value of other hot tubs</li><li>The isolating reflective panel redirects the heat</li><li>Added protection against freezing</li><li>Acts as sound barrier</li><li>The unique design protects equipment</li><li>Allows easy access for service and upgrading</li></ul>",
            "measurement" => '92" x 168" x 55"',
            "images" => ["1.png"],
            "specifications" => [
                "features" => [
                    "Seating Configuration" => "5 Seats",
                    "Swim Jets" => "4",
                    "Fountains" => "6",
                    "LED Lights" => "(20) LED Light",
                    "Exclusive Features" => 'Exercise Equipment, Deluxe Cover, K.1000 Digital Topside, UV Ozonator, Rmax® Insulation, In.Stream Stereo, 5" LED Footwell Light, Ash or Coastal Gray Skirting, Comfortable Headrests, Sterling Marble Acrylic Standard.',
                    "Premium Options" => "Recreation & Swim & Fitness / Fast Sprint",
                ],
                "technical" => [
                    "Dimensions" => '92" x 168" x 55"',
                    "OVO Jets" => 27,
                    "Gallons" => 1400,
                    "Dry Weight" => 2200,
                    "Filled Weight" => 16195,
                    "Power Requirement" => "220 volt (2) x 5 BHP and (1) x 7 BHP",
                ]
            ]
        ]);
        // SS16
        Product::factory()->create([
            "slug" => "ss16",
            "name" => "SS16",
            "type" => "Gulfsouthspas",
            "long_description" => "<p>Swim, jog, walk, and exercise in water without the stress gravity has on your body. Relax with massaging spajets in the perfect water temperature, year-round. This alternative to a pool has benefits for you and your entire family.</p><h5>Insulation</h5><ul><li>Up to 7 times the R-value of other hot tubs</li><li>The isolating reflective panel redirects the heat</li><li>Added protection against freezing</li><li>Acts as sound barrier</li><li>The unique design protects equipment</li><li>Allows easy access for service and upgrading</li></ul>",
            "measurement" => '92" x 192" x 60"',
            "images" => ["1.png"],
            "specifications" => [
                "features" => [
                    "Seating Configuration" => "5 Seats",
                    "Swim Jets" => "3",
                    "Fountains" => "8",
                    "LED Lights" => "(26) LED Light",
                    "Exclusive Features" => 'Exercise Equipment, Deluxe Cover, K.1000 Digital Topside, UV Ozonator, Rmax® Insulation, In.Stream Stereo, 5" LED Footwell Light, Ash or Coastal Gray Skirting, Comfortable Headrests, Sterling Marble Acrylic Standard.',
                    "Premium Options" => "Recreation & Swim & Fitness",
                ],
                "technical" => [
                    "Dimensions" => '92" x 192" x 60"',
                    "OVO Jets" => 29,
                    "Gallons" => 2113,
                    "Dry Weight" => 2500,
                    "Filled Weight" => 18500,
                    "Power Requirement" => "220 volt (3) x 5 BHP and (1) x 7 BHP",
                ]
            ]
        ]);
        // SS19
        Product::factory()->create([
            "slug" => "ss19",
            "name" => "SS19",
            "type" => "Gulfsouthspas",
            "long_description" => "<p>Swim, jog, walk, and exercise in water without the stress gravity has on your body. Relax with massaging spajets in the perfect water temperature, year-round. This alternative to a pool has benefits for you and your entire family.</p><h5>Insulation</h5><ul><li>Up to 7 times the R-value of other hot tubs</li><li>The isolating reflective panel redirects the heat</li><li>Added protection against freezing</li><li>Acts as sound barrier</li><li>The unique design protects equipment</li><li>Allows easy access for service and upgrading</li></ul>",
            "measurement" => '92" x 244" x 55"',
            "images" => ["1.png"],
            "specifications" => [
                "features" => [
                    "Seating Configuration" => "6 Seats",
                    "Swim Jets" => "3",
                    "Fountains" => "8",
                    "LED Lights" => "(37) LED Light",
                    "Exclusive Features" => 'Exercise Equipment, Deluxe Cover, K.1000 Digital Topside, UV Ozonator, Rmax® Insulation, In.Stream Stereo, 5" LED Footwell Light, Ash or Coastal Gray Skirting, Comfortable Headrests, Sterling Marble Acrylic Standard.',
                    "Premium Options" => "Therapy & Fitness",
                ],
                "technical" => [
                    "Dimensions" => '92" x 244" x 55"',
                    "OVO Jets" => 39,
                    "Gallons" => 2430,
                    "Dry Weight" => 3500,
                    "Filled Weight" => 20300,
                    "Power Requirement" => "220 volt (3) x 5 BHP and (2) x 7 BHP",
                ]
            ]
        ]);
        // TSX15
        Product::factory()->create([
            "slug" => "tsx15",
            "name" => "TSX15",
            "type" => "PDC Spas",
            "long_description" => "Wide entry steps positioned to maximize fitness area. Sculpted massage seat, open barrier-free fitness area, patented dual prop propulsion fitness stream for the widest, smoothest most balanced workout in the industry. Designed for compact locations, most any deck, patio, sunroom or garage, this TSX15 with patented technology, swim spa fits perfectly into your home and lifestyle. Measuring an ample 15', this space conscious design offers the home fitness and relaxation you deserve. Underwater LED lighting, cascading water spouts, unparalleled aquatic fitness stream and a very vogue M Series™ cabinet complete this unique swim spa.",
            "measurement" => '180" x 92" x 56"',
            "images" => ["1.png"],
            "specifications" => [
                "features" => [
                    "Therapy Jets" => "8 hydrotherapy stainless Reflections Jets™ . Sculpted seat with shoulder, upper and lower back jetting.",
                    "Swim Spa Power" => "Fitness: Dual prop propulsion system,<br/> 5000 GPM Therapy: 4HP,<br/> single pump 5.5KW heater,<br/> 50 amps",
                    "Finish" => "Silver Marble acrylic shell, Smoke Gray or Willow Brown cabinet",
                    "Warranty" => "35 structure/15 finish/5 component/3 labor",
                    "Standard Features" => "TemperBase™ Insulation<br/>PowerFlo™ Filtration<br/>Patented TruSwim® Technology<br/>Reflections Jets™ Stainless Finish<br/>Highlights™ Lighting LED<br/>EverPure2™ Ozone with EverLite™<br/>TSX-SmartTouch™ Control Center<br/>Locking Safety Thermal Cover<br/>EverPure2™ Purification System<br/>AquaBar™ Stainless Grip Bar",
                    "Exclusive Add-Ons" => "Eclipse2™ Lighting<br/>BlueTune™ Audio<br/>WAVE™ WiFi Wireless Control<br/>AquaBalance™ Stainless Bars<br/>AquaForce™ Fitness Pulley<br/>MotionMat™ Fitness Mat<br/>MatTrax™ Step Treads"
                ],
                "technical" => [
                    "Dimensions" => '180" x 92" x 56", 114" fitness area',
                    "Gallons" => 2240,
                    "Dry Weight" => 1905,
                    "Filled Weight" => 16015,
                ]
            ]
        ]);
        // TSX17
        Product::factory()->create([
            "slug" => "tsx17",
            "name" => "TSX17",
            "type" => "PDC Spas",
            "long_description" => "Wide curved entry steps, deep recliner and sculpted massage seats, open barrier-free fitness area, patented dual prop propulsion fitness stream for the widest, smoothest most balanced workout in the industry. This very popular 17' TruSwim® model is the perfect fit for anyone striving for a healthier lifestyle. The patented dual prop technology offers an unmatched aquatic fitness stream with balance, width and resistance for athletes, fitness enthusiasts and those seeking a healthier lifestyle.",
            "measurement" => '204" x 92" x 56"',
            "images" => ["1.png"],
            "specifications" => [
                "features" => [
                    "Therapy Jets" => "18 hydrotherapy stainless Reflections Jets™ for shoulder, upper and lower back, and calf hydrotherapy.",
                    "Swim Spa Power" => "Fitness: Dual prop propulsion system,<br/> 5000 GPM Therapy: 4HP,<br/> single pump 5.5KW heater,<br/> 50 amps",
                    "Finish" => "Silver Marble acrylic shell, Smoke Gray or Willow Brown cabinet",
                    "Warranty" => "35 structure/15 finish/5 component/3 labor",
                    "Standard Features" => "TemperBase™ Insulation<br/>PowerFlo™ Filtration<br/>Patented TruSwim® Technology<br/>Reflections Jets™ Stainless Finish<br/>Highlights™ Lighting LED<br/>EverPure2™ Ozone with EverLite™<br/>TSX-SmartTouch™ Control Center<br/>Locking Safety Thermal Cover<br/>EverPure2™ Purification System<br/>AquaBar™ Stainless Grip Bar",
                    "Exclusive Add-Ons" => "Eclipse2™ Lighting<br/>BlueTune™ Audio<br/>WAVE™ WiFi Wireless Control<br/>AquaBalance™ Stainless Bars<br/>AquaForce™ Fitness Pulley<br/>MotionMat™ Fitness Mat<br/>MatTrax™ Step Treads"
                ],
                "technical" => [
                    "Dimensions" => '204" x 92" x 56", 124" fitness area',
                    "Gallons" => 2420,
                    "Dry Weight" => 2045,
                    "Filled Weight" => 21405,
                ]
            ]
        ]);
        // TSX19
        Product::factory()->create([
            "slug" => "tsx19",
            "name" => "TSX19",
            "type" => "PDC Spas",
            "long_description" => "Wide curved entry steps, deep recliner and sculpted massage seats, open barrier-free fitness area, patented dual prop propulsion fitness stream for the widest, smoothest most balanced workout in the industry. With an open fitness area of 148”, the TSX19 swim spa model delivers an aquatic fitness session rewarding to all body types. Water wellness whether swimming, running, jogging, lifting weights or relaxing tired over worked muscles, this model is the solution. Highlights Lighting™ LED, cascading water spouts, patented TruSwim® technology, PowerFlo™ filtration and designer M Series™ cabinet complete this one-of-a-kind home fitness machine.",
            "measurement" => '227" x 92" x 56"',
            "images" => ["1.png"],
            "specifications" => [
                "features" => [
                    "Therapy Jets" => "18 hydrotherapy stainless Reflections Jets™ for shoulder, upper and lower back, and calf hydrotherapy.",
                    "Swim Spa Power" => "Fitness: Dual prop propulsion system,<br/> 5000 GPM Therapy: 4HP,<br/> single pump 5.5KW heater,<br/> 50 amps",
                    "Finish" => "Silver Marble acrylic shell, Smoke Gray or Willow Brown cabinet",
                    "Warranty" => "35 structure/15 finish/5 component/3 labor",
                    "Standard Features" => "TemperBase™ Insulation<br/>PowerFlo™ Filtration<br/>Patented TruSwim® Technology<br/>Reflections Jets™ Stainless Finish<br/>Highlights™ Lighting LED<br/>EverPure2™ Ozone with EverLite™<br/>TSX-SmartTouch™ Control Center<br/>Locking Safety Thermal Cover<br/>EverPure2™ Purification System<br/>AquaBar™ Stainless Grip Bar",
                    "Exclusive Add-Ons" => "Eclipse2™ Lighting<br/>BlueTune™ Audio<br/>WAVE™ WiFi Wireless Control<br/>AquaBalance™ Stainless Bars<br/>AquaForce™ Fitness Pulley<br/>MotionMat™ Fitness Mat<br/>MatTrax™ Step Treads"
                ],
                "technical" => [
                    "Dimensions" => '227" x 92" x 56", 148" fitness area',
                    "Gallons" => 2700,
                    "Dry Weight" => 2250,
                    "Filled Weight" => 23850,
                ]
            ]
        ]);
        // TSX19
        Product::factory()->create([
            "slug" => "tsx219",
            "name" => "TSX219",
            "type" => "PDC Spas",
            "long_description" => "Fitness zone features side entry steps with sculpted massage seat, open barrier-free fitness area, and patented dual prop propulsion. Hot tub zone is a full featured 5 deep seat spa. Separate zones with filtration, heating, therapy and fitness action controls. patent pending dual prop propulsion fitness stream for the widest, smoothest most balanced workout in the industry. The dual zone TSX219 is the ultimate of aquatic fitness and warm water relaxation. Any season, any way you choose, there is plenty of space for the entire family in the 5 seat hot tub plus 102” of fitness area. You choose what best suits your lifestyle; enjoy both zones together or each separately. Hot tub in the winter, fitness in the summer or both all the time! Choosing the TSX219 is the solution to backyard fun and a healthier lifestyle.",
            "measurement" => '227" x 92" x 56"',
            "images" => ["1.png"],
            "specifications" => [
                "features" => [
                    "Therapy Jets" => "37 hydrotherapy stainless Reflections Jets™ for shoulder, upper and lower back, and calf hydrotherapy.",
                    "Dual Zone Power" => "Fitness Zone: Dual prop propulsion system, 5000 GPM, 5.5KW heater, 50 amps Hot Tub Zone: 12HP, 3 pumps, 5.5KW heater, 50 amps",
                    "Finish" => "Silver Marble acrylic shell, Smoke Gray or Willow Brown cabinet",
                    "Warranty" => "35 structure/15 finish/5 component/3 labor",
                    "Standard Features" => "TemperBase™ Insulation<br/>PowerFlo™ Filtration<br/>Patented TruSwim® Technology<br/>Reflections Jets™ Stainless Finish<br/>Highlights™ Lighting LED<br/>EverPure2™ Ozone with EverLite™<br/>TSX-SmartTouch™ Control Center<br/>Locking Safety Thermal Cover<br/>EverPure2™ Purification System<br/>AquaBar™ Molded Acrylic Grip",
                    "Exclusive Add-Ons" => "Eclipse2™ Lighting<br/>BlueTune™ Audio<br/>WAVE™ WiFi Wireless Control<br/>AquaBalance™ Stainless Bars<br/>AquaForce™ Fitness Pulley<br/>MotionMat™ Fitness Mat<br/>MatTrax™ Step Treads"
                ],
                "technical" => [
                    "Dimensions" => '227" x 92" x 56", 102" fitness area',
                    "Gallons" => 2525,
                    "Dry Weight" => 2735,
                    "Filled Weight" => 22935,
                ]
            ]
        ]);
        // SX15
        Product::factory()->create([
            "slug" => "sx15",
            "name" => "SX15",
            "type" => "PDC Spas",
            "long_description" => "Fitness zone features side entry steps with full body recliner and sculpted massage seat, open barrier-free fitness area, two RX6™ standing massage columns. The optimum in aquatic fitness is delivered in this space conscious 15’ model, the SX15. Three Elite Pro™ jets offer an advanced swim lane while the 36 stainless trimmed Reflections Jets™ assure the relaxation experience you deserve. Standard LED Highlights Lighting™ , cascading water spouts, and the designer cabinet make the SX15 choice, the right choice.",
            "measurement" => '108" x 92" x 56"',
            "images" => ["1.png"],
            "specifications" => [
                "features" => [
                    "Therapy Jets" => "36 hydrotherapy stainless Reflections Jets™ . Full body massage columns, reclining and sculpted seats with shoulder, upper and lower back, hips, calves and feet jetting",
                    "Dual Zone Power" => "Fitness Zone: Dual prop propulsion system, 5000 GPM, 5.5KW heater, 50 amps Hot Tub Zone: 12HP, 3 pumps, 5.5KW heater, 50 amps",
                    "Elite Pro™ Jets" => "Trio of high powered resistance swim jets",
                    "Finish" => "Silver Marble acrylic shell, Smoke Gray or Willow Brown cabinet",
                    "Warranty" => "35 structure/15 finish/5 component/3 labor",
                    "Standard Features" => "TemperBase™ Insulation<br/>Pristine Filtration™<br/>RX6™ Full Body Massage Columns<br/>Reflections Jets™ Stainless Finish<br/>Highlights Lighting™ LED<br/>EverPure2™ Ozone with EverLite™<br/>AquaCross™ Tether Trainer<br/>AquaBar™ Molded Acrylic Grip<br/>SX-SmartTouch™ Control Center<br/>Locking Safety Thermal Cover",
                    "Exclusive Add-Ons" => "Eclipse Lighting™<br/>Oasis Lighting™<br/>BlueTune™ Audio<br/>AquaBalance™ Stainless Side Balance Bars<br/>AquaForce™ Fitness Pulley<br/>WAVE™ WiFi Wireless Control<br/>MotionMat™ Fitness Mat<br/>MatTrax™ Step Treads"
                ],
                "technical" => [
                    "Dimensions" => '108" x 92" x 56", 112" fitness area',
                    "Gallons" => 2140,
                    "Dry Weight" => 1725,
                    "Filled Weight" => 18845,
                ]
            ]
        ]);
        // SX15s
        Product::factory()->create([
            "slug" => "sx15s",
            "name" => "SX15s",
            "type" => "PDC Spas",
            "long_description" => "Fitness zone features side entry steps with full body recliner and sculpted massage seat, open barrier-free fitness area, two RX6™ standing massage columns. The optimum in aquatic fitness is delivered in this space conscious 15’ model, the SX15. Three Elite Pro™ jets offer an advanced swim lane while the 36 stainless trimmed Reflections Jets™ assure the relaxation experience you deserve. Standard LED Highlights Lighting™ , cascading water spouts, and the designer cabinet make the SX15 choice, the right choice.",
            "measurement" => '108" x 92" x 56"',
            "images" => ["1.png"],
            "specifications" => [
                "features" => [
                    "Therapy Jets" => "36 hydrotherapy stainless Reflections Jets™ . Full body massage columns, reclining and sculpted seats with shoulder, upper and lower back, hips, calves and feet jetting",
                    "Dual Zone Power" => "Fitness Zone: Dual prop propulsion system, 5000 GPM, 5.5KW heater, 50 amps Hot Tub Zone: 12HP, 3 pumps, 5.5KW heater, 50 amps",
                    "Elite Pro™ Jets" => "Trio of high powered resistance swim jets",
                    "Finish" => "Silver Marble acrylic shell, Smoke Gray or Willow Brown cabinet",
                    "Warranty" => "35 structure/15 finish/5 component/3 labor",
                    "Standard Features" => "TemperBase™ Insulation<br/>Pristine Filtration™<br/>RX6™ Full Body Massage Columns<br/>Reflections Jets™ Stainless Finish<br/>Highlights Lighting™ LED<br/>EverPure2™ Ozone with EverLite™<br/>AquaCross™ Tether Trainer<br/>AquaBar™ Molded Acrylic Grip<br/>SX-SmartTouch™ Control Center<br/>Locking Safety Thermal Cover",
                    "Exclusive Add-Ons" => "Eclipse Lighting™<br/>Oasis Lighting™<br/>BlueTune™ Audio<br/>AquaBalance™ Stainless Side Balance Bars<br/>AquaForce™ Fitness Pulley<br/>WAVE™ WiFi Wireless Control<br/>MotionMat™ Fitness Mat<br/>MatTrax™ Step Treads"
                ],
                "technical" => [
                    "Dimensions" => '108" x 92" x 56", 112" fitness area',
                    "Gallons" => 2140,
                    "Dry Weight" => 1725,
                    "Filled Weight" => 18845,
                ]
            ]
        ]);
        // SX17
        Product::factory()->create([
            "slug" => "sx17",
            "name" => "SX17",
            "type" => "PDC Spas",
            "long_description" => "Fitness zone features side entry steps with full body recliner and sculpted massage seat, open barrier-free fitness area, two RX6™ standing massage columns. Our most popular size to meet all your fitness and wellness needs. The 17 foot SX17 delivers aquatic exercise, relaxation and family fun to your home and backyard. With plenty of room for play or fitness and multiple massage therapy options, including 2 comfortable seats, and the RX6™ massage columns, this swim spa truly has something for everyone to enjoy.",
            "measurement" => '204" x 92" x 56"',
            "images" => ["1.png"],
            "specifications" => [
                "features" => [
                    "Therapy Jets" => "36 hydrotherapy stainless Reflections Jets™. Full body massage columns, reclining and sculpted seats with shoulder, upper and lower back, hips, calves and feet jetting.",
                    "Swim Spa Power" => "22HP, 4 pumps, 5.5KW heater, 50 amps",
                    "Elite Pro™ Jets" => "Trio of high powered resistance swim jets",
                    "Finish" => "Silver Marble acrylic shell, Smoke Gray or Willow Brown cabinet",
                    "Warranty" => "35 structure/15 finish/5 component/3 labor",
                    "Standard Features" => "TemperBase™ Insulation<br/>Pristine Filtration™<br/>RX6™ Full Body Massage Columns<br/>Reflections Jets™ Stainless Finish<br/>Highlights Lighting™ LED<br/>EverPure2™ Ozone with EverLite™<br/>AquaCross™ Tether Trainer<br/>AquaBar™ Molded Acrylic Grip<br/>SX-SmartTouch™ Control Center<br/>Locking Safety Thermal Cover",
                    "Exclusive Add-Ons" => "Eclipse Lighting™<br/>Oasis Lighting™<br/>BlueTune™ Audio<br/>AquaBalance™ Stainless Side Balance Bars<br/>AquaForce™ Fitness Pulley<br/>WAVE™ WiFi Wireless Control<br/>MotionMat™ Fitness Mat<br/>MatTrax™ Step Treads"
                ],
                "technical" => [
                    "Dimensions" => '204" x 92" x 56", 136" fitness area',
                    "Gallons" => 2420,
                    "Dry Weight" => 1860,
                    "Filled Weight" => 21220,
                ]
            ]
        ]);
        // SX19
        Product::factory()->create([
            "slug" => "sx19",
            "name" => "SX19",
            "type" => "PDC Spas",
            "long_description" => "Fitness zone features side entry steps with full body recliner and sculpted massage seat, open barrier-free fitness area, two RX6™ standing massage columns. The SX19 offers the maximum area for fitness, relaxation and family fun with an open fitness area of 160”. Swim, run or walk against the resistance current, or simply unwind in a massage therapy seat or the dual RX6™ standing massage columns after a long day.",
            "measurement" => '227" x 92" x 56"',
            "images" => ["1.png"],
            "specifications" => [
                "features" => [
                    "Therapy Jets" => "36 hydrotherapy stainless Reflections Jets™. Full body massage columns, reclining and sculpted seats with shoulder, upper and lower back, hips, calves and feet jetting.",
                    "Swim Spa Power" => "22HP, 4 pumps, 5.5KW heater, 50 amps",
                    "Elite Pro™ Jets" => "Trio of high powered resistance swim jets",
                    "Finish" => "Silver Marble acrylic shell, Smoke Gray or Willow Brown cabinet",
                    "Warranty" => "35 structure/15 finish/5 component/3 labor",
                    "Standard Features" => "TemperBase™ Insulation<br/>Pristine Filtration™<br/>RX6™ Full Body Massage Columns<br/>Reflections Jets™ Stainless Finish<br/>Highlights Lighting™ LED<br/>EverPure2™ Ozone with EverLite™<br/>AquaCross™ Tether Trainer<br/>AquaBar™ Molded Acrylic Grip<br/>SX-SmartTouch™ Control Center<br/>Locking Safety Thermal Cover",
                    "Exclusive Add-Ons" => "Eclipse Lighting™<br/>Oasis Lighting™<br/>BlueTune™ Audio<br/>AquaBalance™ Stainless Side Balance Bars<br/>AquaForce™ Fitness Pulley<br/>WAVE™ WiFi Wireless Control<br/>MotionMat™ Fitness Mat<br/>MatTrax™ Step Treads"
                ],
                "technical" => [
                    "Dimensions" => '227" x 92" x 56", 160" fitness area',
                    "Gallons" => 2700,
                    "Dry Weight" => 2065,
                    "Filled Weight" => 23755,
                ]
            ]
        ]);
        // SX219
        Product::factory()->create([
            "slug" => "sx219",
            "name" => "SX219",
            "type" => "PDC Spas",
            "long_description" => "Fitness zone features side entry steps with full body recliner and sculpted massage seat, open barrier-free fitness area, two RX6™ standing massage columns. Hot tub zone is a full featured 5 deep seat spa. Separate zones with filtration, heating, therapy and fitness action controls.The Summit SX219 has something for everyone boasting a 5 seat hot tub plus a spacious swim spa in one. The ultimate in aquatic fitness and relaxation, the SX219 model features separate controls, heating and filtration systems so you can choose to enjoy both zones at once or separately. Made for use in any season, enjoy a healthier lifestyle year round!",
            "measurement" => '227" x 92" x 56"',
            "images" => ["1.png"],
            "specifications" => [
                "features" => [
                    "Therapy Jets" => "64 hydrotherapy stainless Reflections Jets™ . Full body massage columns. Shoulder, upper and lower back, hips, calves and feet in 7 seats.",
                    "Elite Pro™ Jets" => "Trio of high powered resistance swim jets",
                    "Dual Zone Power" => "Fitness Zone: 22HP, 4 pumps, 5.5KW heater, 50 amp<br/>Hot Tub Zone: 8HP, 2 pumps, 5.5KW heater, 50 amps",
                    "Finish" => "Silver Marble acrylic shell, Smoke Gray or Willow Brown cabinet",
                    "Warranty" => "35 structure/15 finish/5 component/3 labor",
                    "Standard Features" => "TemperBase™ Insulation<br/>Pristine Filtration™<br/>RX6™ Full Body Massage Columns<br/>Reflections Jets™ Stainless Finish<br/>Highlights Lighting™ LED<br/>EverPure2™ Ozone with EverLite™<br/>AquaCross™ Tether Trainer<br/>AquaBar™ Molded Acrylic Grip<br/>SX-SmartTouch™, SmartTouch™ Control Centers<br/>ProView™ Control Center<br/>Locking Safety Thermal Cover",
                    "Exclusive Add-Ons" => "Eclipse Lighting™<br/>Oasis Lighting™<br/>BlueTune™ Audio<br/>AquaBalance™ Stainless Side Balance Bars<br/>AquaForce™ Fitness Pulley<br/>MotionMat™ Fitness Mat<br/>MatTrax™ Step Treads<br/>WAVE™ WiFi Wireless Control"
                ],
                "technical" => [
                    "Dimensions" => '227" x 92" x 56", 100" fitness area',
                    "Gallons" => 2425,
                    "Dry Weight" => 2550,
                    "Filled Weight" => 21950,
                ]
            ]
        ]);
        // SX219s
        Product::factory()->create([
            "slug" => "sx219s",
            "name" => "SX219s",
            "type" => "PDC Spas",
            "long_description" => "Fitness zone features side entry steps with sculpted massage seat, open barrier-free fitness area, two RX6™ standing massage columns. Hot tub zone is a full featured 5 deep seat spa. Separate zones with filtration, heating, therapy and fitness action controls.The SX219s dual zone features a full, 5 seat hot tub and a 14' spacious swim spa in one unit! Our easy entry steps and single seat option add an extra 18” of barrier free fitness area, an ample total of 118” for all your swimming, fitness, and family fun adventures. Equipped with separate filtration, heating and control functions, you can enjoy both sides together or each separately in any season you choose.",
            "measurement" => '227" x 92" x 56"',
            "images" => ["1.png"],
            "specifications" => [
                "features" => [
                    "Therapy Jets" => "49 hydrotherapy stainless Reflections Jets™ . Full body massage columns. Shoulder, upper and lower back, and hips in 6 seats.",
                    "Elite Pro™ Jets" => "Trio of high powered resistance swim jets",
                    "Dual Zone Power" => "Fitness Zone: 22HP, 4 pumps, 5.5KW heater, 50 amp<br/>Hot Tub Zone: 8HP, 2 pumps, 5.5KW heater, 50 amps",
                    "Finish" => "Silver Marble acrylic shell, Smoke Gray or Willow Brown cabinet",
                    "Warranty" => "35 structure/15 finish/5 component/3 labor",
                    "Standard Features" => "TemperBase™ Insulation<br/>Pristine Filtration™<br/>RX6™ Full Body Massage Columns<br/>Reflections Jets™ Stainless Finish<br/>Highlights Lighting™ LED<br/>EverPure2™ Ozone with EverLite™<br/>AquaCross™ Tether Trainer<br/>AquaBar™ Molded Acrylic Grip<br/>SX-SmartTouch™, SmartTouch™ Control Centers<br/>ProView™ Control Center<br/>Locking Safety Thermal Cover",
                    "Exclusive Add-Ons" => "Eclipse Lighting™<br/>Oasis Lighting™<br/>BlueTune™ Audio<br/>AquaBalance™ Stainless Side Balance Bars<br/>AquaForce™ Fitness Pulley<br/>MotionMat™ Fitness Mat<br/>MatTrax™ Step Treads<br/>WAVE™ WiFi Wireless Control"
                ],
                "technical" => [
                    "Dimensions" => '227" x 92" x 56", 118" fitness area',
                    "Gallons" => 2525,
                    "Dry Weight" => 2550,
                    "Filled Weight" => 22750,
                ]
            ]
        ]);
        // FX15
        Product::factory()->create([
            "slug" => "fx15",
            "name" => "FX15",
            "type" => "PDC Spas",
            "long_description" => "Fitness zone features side entry steps with full body recliner and sculpted massage seat, open barrier-free fitness area, two RX6™ standing massage columns.So many features in this space saving 15' swim spa model. Full body hydrotherapy from 36 Reflection Jets™ in stainless finish, and high powered Elite Pro™ jets delivering just the right amount of water resistance for your aquatic fitness goals. Highlights Lighting™, 6 cascading water spouts, finished in a very vogue M Series™ cabinet and you have a swim spa others envy.",
            "measurement" => '108" x 92" x 56"',
            "images" => ["1.png"],
            "specifications" => [
                "features" => [
                    "Therapy Jets" => "36 hydrotherapy stainless Reflections Jets™ . Full body massage columns, reclining and sculpted seats with shoulder, upper and lower back, hips, calves and feet jetting.",
                    "Elite Pro™ Jets" => "Dual line up of high powered adjustable swim jets",
                    "Swim Spa Power" => "16HP, 3 pumps, 5.5KW heater, 50 amps",
                    "Finish" => "Silver Marble acrylic shell, Smoke Gray or Willow Brown cabinet",
                    "Warranty" => "35 structure/15 finish/5 component/3 labor",
                    "Standard Features" => "TemperBase™ Insulation<br/>Pristine Filtration™<br/>RX6™ Full Body Massage Columns<br/>Reflections Jets™ Stainless Finish<br/>Highlights Lighting™ LED<br/>EverPure2™ Ozone with EverLite™<br/>AquaCross™ Tether Trainer<br/>AquaBar™ Molded Acrylic Grip<br/>FX-Proview™ Control Center<br/>Locking Safety Thermal Cover<br/>EverPure2™ Purification System",
                    "Exclusive Add-Ons" => "Eclipse Lighting™<br/>Oasis Lighting™<br/>BlueTune™ Audio<br/>AquaBalance™ Stainless Side Balance Bars<br/>AquaForce™ Fitness Pulley<br/>MotionMat™ Fitness Mat<br/>MatTrax™ Step Treads<br/>WAVE™ WiFi Wireless Control"
                ],
                "technical" => [
                    "Dimensions" => '180" x 92" x 56", 112" fitness area',
                    "Gallons" => 2140,
                    "Dry Weight" => 1645,
                    "Filled Weight" => 18765,
                ]
            ]
        ]);
        // FX15s
        Product::factory()->create([
            "slug" => "fx15s",
            "name" => "FX15s",
            "type" => "PDC Spas",
            "long_description" => "Wide entry steps positioned to maximize fitness area. Sculpted massage seat, open barrier-free fitness area, two RX6™ standing massage columns. Designed for compact locations, most any deck, patio, sunroom or garage, this full featured FX15s swim spa model fits into your home and lifestyle. Measuring 15', this space conscious design offers the home fitness and relaxation you deserve. Underwater LED lighting, cascading water spouts, 20 shiny Reflections Jets™ for full body hydrotherapy, and 2 powerful Elite Pro™ fitness jets all standard with the FX15s.",
            "measurement" => '180" x 92" x 56"',
            "images" => ["1.png"],
            "specifications" => [
                "features" => [
                    "Therapy Jets" => "36 hydrotherapy stainless Reflections Jets™ . Full body massage columns, reclining and sculpted seats with shoulder, upper and lower back, hips, calves and feet jetting.",
                    "Elite Pro™ Jets" => "Dual line up of high powered adjustable swim jets",
                    "Swim Spa Power" => "16HP, 3 pumps, 5.5KW heater, 50 amps",
                    "Finish" => "Silver Marble acrylic shell, Smoke Gray or Willow Brown cabinet",
                    "Warranty" => "35 structure/15 finish/5 component/3 labor",
                    "Standard Features" => "TemperBase™ Insulation<br/>Pristine Filtration™<br/>RX6™ Full Body Massage Columns<br/>Reflections Jets™ Stainless Finish<br/>Highlights Lighting™ LED<br/>EverPure2™ Ozone with EverLite™<br/>AquaCross™ Tether Trainer<br/>AquaBar™ Molded Acrylic Grip<br/>FX-Proview™ Control Center<br/>Locking Safety Thermal Cover<br/>EverPure2™ Purification System",
                    "Exclusive Add-Ons" => "Eclipse Lighting™<br/>Oasis Lighting™<br/>BlueTune™ Audio<br/>AquaBalance™ Stainless Side Balance Bars<br/>AquaForce™ Fitness Pulley<br/>MotionMat™ Fitness Mat<br/>MatTrax™ Step Treads<br/>WAVE™ WiFi Wireless Control"
                ],
                "technical" => [
                    "Dimensions" => '180" x 92" x 56", 130" fitness area',
                    "Gallons" => 2240,
                    "Dry Weight" => 1645,
                    "Filled Weight" => 19565,
                ]
            ]
        ]);
        // FX17
        Product::factory()->create([
            "slug" => "fx17",
            "name" => "FX17",
            "type" => "PDC Spas",
            "long_description" => "Fitness zone features side entry steps with full body recliner and sculpted massage seat, open barrier-free fitness area, two RX6™ standing massage columns. With the touch of a button, the adjustable Elite Pro™ jets offer a fitness stream for a rewarding water workout. With the included AquaCross™ tether trainer, swim, run or jog, choose the best routine for you and your goals. After your fitness session relax those tired muscles with 36 hydrotherapy jets, soothing the entire body.",
            "measurement" => '204" x 92" x 56"',
            "images" => ["1.png"],
            "specifications" => [
                "features" => [
                    "Therapy Jets" => "36 hydrotherapy stainless Reflections Jets™ . Full body massage columns, reclining and sculpted seats with shoulder, upper and lower back, hips, calves and feet jetting.",
                    "Elite Pro™ Jets" => "Dual line up of high powered adjustable swim jets",
                    "Swim Spa Power" => "16HP, 3 pumps, 5.5KW heater, 50 amps",
                    "Finish" => "Silver Marble acrylic shell, Smoke Gray or Willow Brown cabinet",
                    "Warranty" => "35 structure/15 finish/5 component/3 labor",
                    "Standard Features" => "TemperBase™ Insulation<br/>Pristine Filtration™<br/>RX6™ Full Body Massage Columns<br/>Reflections Jets™ Stainless Finish<br/>Highlights Lighting™ LED<br/>EverPure2™ Ozone with EverLite™<br/>AquaCross™ Tether Trainer<br/>AquaBar™ Molded Acrylic Grip<br/>FX-Proview™ Control Center<br/>Locking Safety Thermal Cover<br/>EverPure2™ Purification System",
                    "Exclusive Add-Ons" => "Eclipse Lighting™<br/>Oasis Lighting™<br/>BlueTune™ Audio<br/>AquaBalance™ Stainless Side Balance Bars<br/>AquaForce™ Fitness Pulley<br/>MotionMat™ Fitness Mat<br/>MatTrax™ Step Treads<br/>WAVE™ WiFi Wireless Control"
                ],
                "technical" => [
                    "Dimensions" => '204" x 92" x 56", 136" fitness area',
                    "Gallons" => 2420,
                    "Dry Weight" => 1748,
                    "Filled Weight" => 21144,
                ]
            ]
        ]);
        // FX19
        Product::factory()->create([
            "slug" => "fx19",
            "name" => "FX19",
            "type" => "PDC Spas",
            "long_description" => "Fitness zone features side entry steps with full body recliner and sculpted massage seat, open barrier-free fitness area, two RX6™ standing massage columns. No limit to the fitness opportunities with the FX19 swim spa's unmatched 160” of open barrier-free fitness area. Whether you are an athlete in training, a fitness enthusiast or simply seeking a healthier lifestyle, look no further. Swim, jog, lift weights, strengthen your core and finish your workout with a relaxing hydrotherapy massage.",
            "measurement" => '227" x 92" x 56"',
            "images" => ["1.png"],
            "specifications" => [
                "features" => [
                    "Therapy Jets" => "36 hydrotherapy stainless Reflections Jets™ . Full body massage columns, reclining and sculpted seats with shoulder, upper and lower back, hips, calves and feet jetting.",
                    "Elite Pro™ Jets" => "Dual line up of high powered adjustable swim jets",
                    "Swim Spa Power" => "16HP, 3 pumps, 5.5KW heater, 50 amps",
                    "Finish" => "Silver Marble acrylic shell, Smoke Gray or Willow Brown cabinet",
                    "Warranty" => "35 structure/15 finish/5 component/3 labor",
                    "Standard Features" => "TemperBase™ Insulation<br/>Pristine Filtration™<br/>RX6™ Full Body Massage Columns<br/>Reflections Jets™ Stainless Finish<br/>Highlights Lighting™ LED<br/>EverPure2™ Ozone with EverLite™<br/>AquaCross™ Tether Trainer<br/>AquaBar™ Molded Acrylic Grip<br/>FX-Proview™ Control Center<br/>Locking Safety Thermal Cover<br/>EverPure2™ Purification System",
                    "Exclusive Add-Ons" => "Eclipse Lighting™<br/>Oasis Lighting™<br/>BlueTune™ Audio<br/>AquaBalance™ Stainless Side Balance Bars<br/>AquaForce™ Fitness Pulley<br/>MotionMat™ Fitness Mat<br/>MatTrax™ Step Treads<br/>WAVE™ WiFi Wireless Control"
                ],
                "technical" => [
                    "Dimensions" => '180" x 92" x 56", 112" fitness area',
                    "Gallons" => 2140,
                    "Dry Weight" => 1645,
                    "Filled Weight" => 18765,
                ]
            ]
        ]);
        // FX219
        Product::factory()->create([
            "slug" => "fx219",
            "name" => "FX219",
            "type" => "PDC Spas",
            "long_description" => "Fitness zone features side entry steps with full body recliner and sculpted massage seat, open barrier-free fitness area, two RX6™ standing massage columns. Hot tub zone is a full featured 5 deep seat spa. Separate zones with filtration, heating, therapy and fitness action controls. The FX219 offers a full size 5 seat hot tub plus a spacious swim spa in one. Enjoy pre and post workout massages with the hydrotherapy jets, a customizable workout against the swim jets or simply soak in the water, the choice is yours!",
            "measurement" => '227" x 92" x 56"',
            "images" => ["1.png"],
            "specifications" => [
                "features" => [
                    "Therapy Jets" => "65 hydrotherapy stainless Reflections Jets™ . Full body massage columns. Shoulder, upper and lower back, hips, calves and feet in 7 seats.",
                    "Elite Pro™ Jets" => "Dual line up of high powered adjustable swim jets",
                    "Dual Zone Power" => "Fitness Zone: 16HP, 3 pumps, 5.5KW heater, 50 amps<br/>Hot Tub Zone: 8HP, 2 pumps, 5.5KW heater, 50 amps",
                    "Finish" => "Silver Marble acrylic shell, Smoke Gray or Willow Brown cabinet",
                    "Warranty" => "35 structure/15 finish/5 component/3 labor",
                    "Standard Features" => "TemperBase™ Insulation<br/>Pristine Filtration™<br/>RX6™ Full Body Massage Columns<br/>Reflections Jets™ Stainless Finish<br/>Highlights Lighting™ LED<br/>EverPure2™ Ozone with EverLite™<br/>AquaCross™ Tether Trainer<br/>AquaBar™ Molded Acrylic Grip<br/>FX-ProView™ Control Center<br/>ProView™ Control Center<br/>Locking Safety Thermal Cover<br/>
                    EverPure2™ Purification System",
                    "Exclusive Add-Ons" => "Eclipse Lighting™<br/>Oasis Lighting™<br/>BlueTune™ Audio<br/>AquaBalance™ Stainless Side Balance Bars<br/>AquaForce™ Fitness Pulley<br/>MotionMat™ Fitness Mat<br/>MatTrax™ Step Treads"
                ],
                "technical" => [
                    "Dimensions" => '227" x 92" x 56", 100" fitness area',
                    "Gallons" => 2425,
                    "Dry Weight" => 2475,
                    "Filled Weight" => 21875,
                ]
            ]
        ]);
        // FX219s
        Product::factory()->create([
            "slug" => "fx219s",
            "name" => "FX219s",
            "type" => "PDC Spas",
            "long_description" => "Fitness zone features side entry steps with sculpted massage seat, open barrier-free fitness area, two RX6™ standing massage columns. Hot tub zone is a full featured 5 deep seat spa. Separate zones with filtration, heating, therapy and fitness action controls. The dual zone FX219s offers a full featured 5 seat hot tub and a spacious swim spa in one unit! Operate both zones together or separately, the choice is yours. Side entry steps assure an open barrier-free fitness space measuring an impressive 118”. Swim, run, jog, lift weights or just simply relax, there is something for everyone in this multi-use dual zone swim spa.",
            "measurement" => '227" x 92" x 56"',
            "images" => ["1.png"],
            "specifications" => [
                "features" => [
                    "Therapy Jets" => "49 hydrotherapy stainless Reflections Jets™ . Full body massage columns. Shoulder, upper and lower back, and hips in 6 seats.",
                    "Elite Pro™ Jets" => "Dual line up of high powered adjustable swim jets",
                    "Dual Zone Power" => "Fitness Zone: 16HP, 3 pumps, 5.5KW heater, 50 amps<br/>Hot Tub Zone: 8HP, 2 pumps, 5.5KW heater, 50 amps",
                    "Finish" => "Silver Marble acrylic shell, Smoke Gray or Willow Brown cabinet",
                    "Warranty" => "35 structure/15 finish/5 component/3 labor",
                    "Standard Features" => "TemperBase™ Insulation<br/>Pristine Filtration™<br/>RX6™ Full Body Massage Columns<br/>Reflections Jets™ Stainless Finish<br/>Highlights Lighting™ LED<br/>EverPure2™ Ozone with EverLite™<br/>AquaCross™ Tether Trainer<br/>AquaBar™ Molded Acrylic Grip<br/>FX-Proview™ Control Center<br/>Proview™ Control Center<br/>Locking Safety Thermal Cover",
                    "Exclusive Options" => "Eclipse Lighting™<br/>Oasis Lighting™<br/>BlueTune™ Audio<br/>AquaBalance™ Stainless Side Balance Bars<br/>AquaForce™ Fitness Pulley<br/>WAVE™ WiFi Wireless Control<br/>MotionMat™ Fitness Mat<br/>MatTrax™ Step Treads"
                ],
                "technical" => [
                    "Dimensions" => '227" x 92" x 56", 118" fitness area',
                    "Gallons" => 2525,
                    "Dry Weight" => 2475,
                    "Filled Weight" => 22675,
                ]
            ]
        ]);
        // BAJA 12
        Product::factory()->create([
            "slug" => "baja12",
            "name" => "BAJA 12",
            "type" => "PDC Spas",
            "long_description" => "Wide entry steps, full body therapy captain's chair, dual wide-open benches, contoured and corner seats. Up to 8 people. Immerse yourself in luxury with the Splash 12ft Model. This fitness pool hot tub hybrid offers seating for 8, including therapy bench seats, corner bench seats, and sculpted therapy seats, complete with a captain's chair featuring leg jets for ultimate relaxation. Indulge in 59 hydrotherapy jets that target sore muscles and tension, while the added fitness jet provides resistance for full-body workouts. Enhancing the ambiance are 4 lit waterspouts, creating a captivating water display. With Proview control and LED lighting, the Splash 12ft Model offers an exceptional experience that combines therapy, relaxation, and entertainment.",
            "measurement" => '144" x 92" x 50"',
            "images" => ["1.png"],
            "specifications" => [
                "features" => [
                    "Therapy Jets" => "59 hydrotherapy stainless Reflections Jets™. Shoulder, upper and lower back, calves, feet and neck jetting. Sculpted and bench seats.",
                    "Elite Pro™ Jets" => "High powered resistance fitness jet.",
                    "Fitness Spa Power" => "12HP, 2 pumps<br/>5.5KW heater, 50 amps",
                    "Finish" => "Silver Marble acrylic shell, Smoke Gray or Willow Brown cabinet",
                    "Warranty" => "35 structure/15 finish/5 component/3 labor",
                    "Standard Features" => "TemperBase™ Insulation<br/>Pristine Filtration<br/>Reflections Jets™ Stainless Finish<br/>Highlights™ Lighting LED<br/>EverPure™ Ozone System with EverLite™<br/>ProView™ Control Center<br/>Locking Safety Thermal Cover<br/>SplashTrax™ Step Treads",
                    "Exclusive Add-Ons" => "Eclipse™ Lighting<br/>WAVE™ WiFi Wireless Control<br/>AquaForce™ Pulley Trainer<br/>SplashMat Pak™ Steps, Seats, Floor Mat<br/>Oasis™ LED Lighting<br/>EverPure2™ UV-C Purification with EverLite2™<br/>BlueTune Audio<br/>AquaCross System"
                ],
                "technical" => [
                    "Dimensions" => '144" x 92" x 50" deep',
                    "Gallons" => 1100,
                    "Dry Weight" => 1125,
                    "Filled Weight" => 9925,
                ]
            ]
        ]);
        // BAJA 15
        Product::factory()->create([
            "slug" => "baja15",
            "name" => "BAJA 15",
            "type" => "PDC Spas",
            "long_description" => "Wide entry steps, full body therapy captain's chair, dual wide-open benches, contoured and corner seats. Up to 10 people. Discover the epitome of spa perfection with the Splash 15ft Model. Designed for larger gatherings and families, this fitness pool hot tub hybrid accommodates up to 10 people, featuring therapy bench seats, corner bench seats, and sculpted therapy seats, along with a captain's chair equipped with leg jets. Experience hydrotherapy at its finest with 67 therapy jets and an exclusive fitness jet that delivers the perfect amount of resistance for a workout. Revel in the beauty of 6 lit waterspouts, adding an enchanting touch to your spa sessions. The Splash 15ft Model offers the perfect balance of relaxation and fitness, making it your go-to destination for unforgettable family moments and social celebrations. With Proview control, LED lighting and simple water filtration, this hybrid series ensures effortless care, so you can focus on creating cherished memories.",
            "measurement" => '180" x 92" x 50"',
            "images" => ["1.png"],
            "specifications" => [
                "features" => [
                    "Therapy Jets" => "67 hydrotherapy Reflections Jets™. Shoulder, upper and lower back, calves, feet and neck jets. Sculpted and open bench seats.",
                    "Elite Pro™ Jets" => "High powered resistance fitness jet.",
                    "Fitness Spa Power" => "12HP, 2 pumps<br/>5.5KW heater, 50 amps",
                    "Finish" => "Silver Marble acrylic shell, Smoke Gray or Willow Brown cabinet",
                    "Warranty" => "35 structure/15 finish/5 component/3 labor",
                    "Standard Features" => "TemperBase™ Insulation<br/>Pristine Filtration<br/>Reflections Jets™ Stainless Finish<br/>Highlights™ Lighting LED<br/>EverPure™ Ozone System with EverLite™<br/>ProView™ Control Center<br/>Locking Safety Thermal Cover<br/>SplashTrax™ Step Treads",
                    "Exclusive Add-Ons" => "Eclipse™ Lighting<br/>WAVE™ WiFi Wireless Control<br/>AquaCross™ Tether Trainer<br/>AquaForce™ Pulley Trainer<br/>SplashMat Pak™ Steps, Seats, Floor Mat<br/>Oasis™ LED Lighting<br/>EverPure2™ UV-C Purification with EverLite2™<br/>BlueTune Audio<br/>AquaCross System"
                ],
                "technical" => [
                    "Dimensions" => '180" x 92" x 50" deep',
                    "Gallons" => 1465,
                    "Dry Weight" => 1525,
                    "Filled Weight" => 13245,
                ]
            ]
        ]);
    }
}
