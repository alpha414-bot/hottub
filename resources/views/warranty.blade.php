<x-layout>
    <x-slot:title>
        Warranty
    </x-slot>
    <x-slot:meta>
        <meta name="description" content="Look through our warranty to know our coverages.">
        <meta name="keywords" content="contact, inquiries, services, company">
        <meta property="og:title" content="Contact Us">
        <meta property="og:description" content="Look through our warranty to know our coverages.">
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:image" content="{{ asset('images/contactus.jpg') }}">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Contact Us">
        <meta name="twitter:description" content="Look through our warranty to know our coverages.">
        <meta name="twitter:image" content="{{ asset('images/contactus.jpg') }}">
    </x-slot:meta>
    <div class="py-8 px-4 space-y-6 md:space-y-12 md:px-24">
        {{ $appname }} offers a best-in-class warranty on all hot tubs, though the specific warranty periods may
        vary by model.
        @php
            $warranties = [
                'Stainless Steel Frame' => 'Lifetime',
                'Shell Surface' => '5 Years',
                'Shell Structure' => '5 Years',
                'Plumbing' => '2 Years',
                'Internal Components' => '2 Years',
                'Exterior Cabinet' => '2 Years',
                'Jets, Ozone, Lighting' => '1 Year',
                'Cover, Lifter, Steps' => '1 Year',
                'Filter Lids, Overlays, Pillows, Cover Locks' => '90 days',
            ];
        @endphp
        <div class="space-y-2 py-6 md:space-y-4">
            @foreach ($warranties as $key => $value)
                <p class="space-x-1 text-2xl md:text-4xl text-center">
                    <span class="font-bold">{{ $key }}:</span>
                    <span class="">{{ $value }}</span>
                </p>
            @endforeach
        </div>
        <div class="space-y-3">
            <h3 class="text-3xl">Limitations and Exclusions</h3>
            <ul class="list-decimal list-outside ms-8 md:ms-12">
                <li>
                    The warranty does not cover damage caused by chemical abuse, misuse, lack of maintenance, limescale
                    deposits or corrosive acidic staining and fading caused by water chemistry imbalance.
                </li>
                <li>
                    The shell surface warranty does not cover damage caused by the use of household cleaning chemicals,
                    exposure to direct sunlight, use of chlorine tablets or other Trichlor products, or excessive water
                    chemistry imbalance.
                </li>
                <li>
                    We reserve the right to replace the defective parts with factory or remanufactured parts.
                </li>
                <li>
                    We are not responsible for any damage caused by alterations or modifications by the user. Such
                    alterations may void the warranty in whole or in part. For example, the installation of a salt
                    generator
                    will void the warranty in whole.
                </li>
                <li>
                    Bluetooth reception is not covered by the warranty as signal strength may vary depending on local
                    conditions. For example, if there are high voltage lines near the spa, then radio/Bluetooth signals
                    may
                    deteriorate.
                </li>
                <li>
                    The warranty of the spa does not cover defects, damage or failure caused by the common carrier,
                    installer, user or other persons, pets, or rodents, or resulting from, without limitations, any of
                    the
                    following: careless handling (lifting unit plumbing, abrading finish, etc.) including its own
                    negligence; modification of any type for any reason (including modification to meet local codes);
                    improper installation (including installation not in accordance with instructions and specifications
                    provided with the unit); connections supplied by the installer of the equipment; improper voltage
                    supply
                    or unauthorized electrical modification; misuse; incorrect operation, or lack of proper routine
                    maintenance; operation of the unit without the specified minimum amount of water or at inappropriate
                    water temperature; use of abrasive or improper cleaners; or acts of nature, such as lightning,
                    floods,
                    earthquakes etc.
                </li>
                <li>
                    In addition, The manufacturer will not be responsible for incidental or consequential damages or
                    losses
                    arising from any cause (e.g. water damage to carpet, ceiling, tiles, hard surfaces, loss of use
                    etc.)
                    Material or cosmetic damages resulting from the spa being an ex-display unit are not included in
                    this
                    warranty and should be noted with your dealer prior to delivery and installation.
                </li>
                <li>
                    This warranty does not include labor to rectify a faulty spa; transportation or other costs incurred
                    in
                    the removal and/ or reinstallation of the original unit and/or installation of a replacement unit;
                    any
                    costs relating to obtaining access for repair; or loss of use damage, including loss of sales,
                    profit or
                    business advantage of any kind under any circumstances. Spa units are excluded from any warranty
                    coverage in any addition, deletion or modification of any kind whatsoever has been made to the unit
                    (or
                    to any component).
                </li>
                <li>
                    The warranty does not cover defects or damage due to normal wear and tear, improper installation,
                    alterations without the manufacturer written consent, accident, misuse, abuse, commercial or
                    industrial
                    use, use of an accessory not approved by the manufacturer, failure to follow the user manual, or
                    repairs
                    made or attempted by anyone other than an authorized representative of the manufacturer.
                </li>
                <li>
                    The manufacturer will not provide compensation for delays in rectifying a faulty/broken spa.
                </li>
                <li>
                    The cover, cover lifter, and steps must be purchased with the hot tub to receive a 6-month warranty.
                    Otherwise, these items are limited to a 90-day warranty.
                </li>
                <li>
                    In the event of any ambiguity or discrepancy between two provisions outlined within this warranty,
                    it
                    shall be construed that the provision with the shorter duration prevails. All other items not
                    specifically mentioned in this warranty will receive a 90-day warranty.
                </li>
                <li>
                    {{ $appname }} offers extended warranties, included the 3-Year Extended Warranty and the
                    1-Year Extended Warranty. These extended warranties apply to the following component warranties:
                    Shell
                    Surface; Shell Structure; Plumbing; Internal Components; Exterior Cabinet; Jets, Ozone, Lighting.
                    Extended warranties should be purchased at the same time as the hot tub. Extended warranties should
                    be
                    purchased at the same time as the hot tub. If not purchased concurrently, customers may still
                    purchase
                    the extended warranty within 30 days of hot tub delivery, provided that the hot tub was delivered
                    via an
                    authorized backyard delivery service (not curbside delivery), and no warranty claims have been made,
                    and
                    no tickets have been opened for the hot tub.
                </li>
            </ul>
        </div>
        <div class="space-y-3">
            <h3 class="text-3xl">Extent of Warranty</h3>
            <p>
                This warranty is exclusively applicable to the original consumer purchaser of the spa upon invoicing and
                delivery. Any transfer of ownership prior to the expiration of the warranty period will result in the
                nullification of the warranty. Modifications made to the spa will similarly render the warranty void.
                <br /></br />
                It is imperative to specify that the term "lifetime" coverage, as delineated in the warranty, pertains
                specifically to the expected lifespan of the stainless steel frame, estimated to be approximately
                fifteen years.
            </p>
        </div>
    </div>
</x-layout>
