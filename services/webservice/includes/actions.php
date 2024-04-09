 <?php
/**
 * @return array
 */
function getStores()
{
    return [
        [
            "id" => 1,
            "name" => "Albert Heijn",
        ],
        [
            "id" => 2,
            "name" => "Jumbo",
        ],
        [
            "id" => 3,
            "name" => "Lidl",
        ],
        [
            "id" => 4,
            "name" => "Plus",
        ],
        [
            "id" => 5,
            "name" => "Spar",
        ],
        [
            "id" => 6,
            "name" => "Coop",
        ],
        [
            "id" => 7,
            "name" => "Dirk",
        ],
        [
            "id" => 8,
            "name" => "Hoogvliet",
        ],
    ];
}

/**
 * @param $id
 * @return mixed
 */
function getStoreDetails($id)
{
    $tags = [
        1 => [ //Appie
            "locatie" => "Snelleweg 45",
            "telnr" => "+31 0612345678",
            "type" => ['In Store Winkelen', 'In Store Pickup'],
            "openingstijden" => ['Ma/Za: 8:00 - 22:00', 'Zo: 9:00 - 18:00']
        ],
        2 => [ //Jumbo
            "locatie" => "Kantoorrand 12",
            "telnr" => "+31 0622446688",
            "type" => ['In Store Winkelen'],
            "openingstijden" => ['Ma/Za: 8:00 - 20:00', 'Zo: 9:00 - 17:00']
        ],
        3 => [ //Lidl
            "locatie" => "Pentra 99",
            "telnr" => "+31 0687654321",
            "type" => ['In Store Winkelen', 'In Store Pickup'],
            "openingstijden" => ['Ma/Za: 8:00 - 21:00']
        ],
        4 => [ //Plus
            "locatie" => "MLK Straat 01",
            "telnr" => "+31 0611223344",
            "type" => ['In Store Winkelen', 'In Store Pickup'],
            "openingstijden" => ['Ma/Za: 12:00 - 24:00', 'Zo: 7:00 - 15:00']
        ],
        5 => [ //Spar
            "locatie" => "Mandrieweg 02",
            "telnr" => "+31 0666778899",
            "type" => ['In Store Winkelen'],
            "openingstijden" => ['Ma/Za: 9:00 - 20:00']
        ],
        6 => [ //Coop
            "locatie" => "Anariastraat 22",
            "telnr" => "+31 0698789864",
            "type" => ['In Store Winkelen'],
            "openingstijden" => ['Ma/Za: 8:00 - 22:00']
        ],
        7 => [ //Dirk
            "locatie" => "Kannier 9",
            "telnr" => "+31 0678594302",
            "type" => ['In Store Winkelen'],
            "openingstijden" => ['Ma/Za: 8:00 - 22:00']
        ],
        8 => [ //Hoogvliet
            "locatie" => "Langejanweg 35",
            "telnr" => "+31 0657483920",
            "type" => ['In Store Winkelen', 'In Store Pickup'],
            "openingstijden" => ['Ma/Za: 8:00 - 22:00', 'Zo: 9:00 - 18:00']
        ],
    ];

    return $tags[$id];
}

/**
 * @param $id
 * @return mixed
 */
function getStoreProductDetails($id)
{
    $tags = [
        // Appie
        1 => [
            "products" => [
                [
                    "naam" => "Wortels",
                    "product_type" => "Groenten",
                    "prijs" => "€0.80",
                    "prijs_per_kilo" => "€0.60"
                ],
                [
                    "naam" => "Broccoli",
                    "product_type" => "Groenten",
                    "prijs" => "€1.20",
                    "prijs_per_kilo" => "€1.00"
                ],
                [
                    "naam" => "Spinazie",
                    "product_type" => "Groenten",
                    "prijs" => "€1.00",
                    "prijs_per_kilo" => "€0.80"
                ],
                [
                    "naam" => "Tomaat",
                    "product_type" => "Groenten",
                    "prijs" => "€0.50",
                    "prijs_per_kilo" => "€0.40"
                ],
                [
                    "naam" => "Komkommer",
                    "product_type" => "Groenten",
                    "prijs" => "€0.70",
                    "prijs_per_kilo" => "€0.60"
                ],
                [
                    "naam" => "Paprika",
                    "product_type" => "Groenten",
                    "prijs" => "€1.00",
                    "prijs_per_kilo" => "€0.80"
                ],
                [
                    "naam" => "Aubergine",
                    "product_type" => "Groenten",
                    "prijs" => "€1.20",
                    "prijs_per_kilo" => "€1.00"
                ],
                [
                    "naam" => "Courgette",
                    "product_type" => "Groenten",
                    "prijs" => "€0.90",
                    "prijs_per_kilo" => "€0.70"
                ],
                [
                    "naam" => "Bloemkool",
                    "product_type" => "Groenten",
                    "prijs" => "€1.50",
                    "prijs_per_kilo" => "€1.20"
                ],
                [
                    "naam" => "Sperziebonen",
                    "product_type" => "Groenten",
                    "prijs" => "€1.80",
                    "prijs_per_kilo" => "€1.50"
                ],
                [
                    "naam" => "Appels",
                    "product_type" => "Fruit",
                    "prijs" => "€1.20",
                    "prijs_per_kilo" => "€1.00"
                ],
                [
                    "naam" => "Bananen",
                    "product_type" => "Fruit",
                    "prijs" => "€1.50",
                    "prijs_per_kilo" => "€1.20"
                ],
                [
                    "naam" => "Druiven",
                    "product_type" => "Fruit",
                    "prijs" => "€2.00",
                    "prijs_per_kilo" => "€2.50"
                ],
                [
                    "naam" => "Sinaasappels",
                    "product_type" => "Fruit",
                    "prijs" => "€1.80",
                    "prijs_per_kilo" => "€1.20"
                ],
                [
                    "naam" => "Aardbeien",
                    "product_type" => "Fruit",
                    "prijs" => "€2.50",
                    "prijs_per_kilo" => "€5.00"
                ],
                [
                    "naam" => "Kiwi's",
                    "product_type" => "Fruit",
                    "prijs" => "€1.00",
                    "prijs_per_kilo" => "€1.50"
                ],
                [
                    "naam" => "Peren",
                    "product_type" => "Fruit",
                    "prijs" => "€1.80",
                    "prijs_per_kilo" => "€1.20"
                ],
                [
                    "naam" => "Mango's",
                    "product_type" => "Fruit",
                    "prijs" => "€2.00",
                    "prijs_per_kilo" => "€2.50"
                ],
                [
                    "naam" => "Ananas",
                    "product_type" => "Fruit",
                    "prijs" => "€1.50",
                    "prijs_per_kilo" => "€1.00"
                ],
                [
                    "naam" => "Bosbessen",
                    "product_type" => "Fruit",
                    "prijs" => "€3.00",
                    "prijs_per_kilo" => "€6.00"
                ],
                [
                    "naam" => "Wit Brood",
                    "product_type" => "Bakkerij",
                    "prijs" => "€1.20",
                    "prijs_per_kilo" => "€3.00"
                ],
                [
                    "naam" => "Volkoren Brood",
                    "product_type" => "Bakkerij",
                    "prijs" => "€1.50",
                    "prijs_per_kilo" => "€3.00"
                ],
                [
                    "naam" => "Croissants",
                    "product_type" => "Bakkerij",
                    "prijs" => "€1.80",
                    "prijs_per_kilo" => "€4.00"
                ],
                [
                    "naam" => "Baguettes",
                    "product_type" => "Bakkerij",
                    "prijs" => "€1.00",
                    "prijs_per_kilo" => "€2.50"
                ],
                [
                    "naam" => "Volkoren Broodjes",
                    "product_type" => "Bakkerij",
                    "prijs" => "€1.20",
                    "prijs_per_kilo" => "€3.00"
                ],
                [
                    "naam" => "Donuts",
                    "product_type" => "Bakkerij",
                    "prijs" => "€1.50",
                    "prijs_per_kilo" => "€7.50"
                ],
                [
                    "naam" => "Maisbrood",
                    "product_type" => "Bakkerij",
                    "prijs" => "€1.80",
                    "prijs_per_kilo" => "€4.00"
                ],
                [
                    "naam" => "Muffins",
                    "product_type" => "Bakkerij",
                    "prijs" => "€1.20",
                    "prijs_per_kilo" => "€6.00"
                ],
                [
                    "naam" => "Ciabatta",
                    "product_type" => "Bakkerij",
                    "prijs" => "€1.70",
                    "prijs_per_kilo" => "€4.25"
                ],
                [
                    "naam" => "Rozijnenbrood",
                    "product_type" => "Bakkerij",
                    "prijs" => "€1.50",
                    "prijs_per_kilo" => "€3.00"
                ],
                [
                    "naam" => "Zalmfilet",
                    "product_type" => "Vis",
                    "prijs" => "€15.99",
                    "prijs_per_kilo" => "€31.98"
                ],
                [
                    "naam" => "Tonijnsteak",
                    "product_type" => "Vis",
                    "prijs" => "€12.50",
                    "prijs_per_kilo" => "€25.00"
                ],
                [
                    "naam" => "Garnalen",
                    "product_type" => "Vis",
                    "prijs" => "€9.99",
                    "prijs_per_kilo" => "€19.98"
                ],
                [
                    "naam" => "Kabeljauwfilet",
                    "product_type" => "Vis",
                    "prijs" => "€11.75",
                    "prijs_per_kilo" => "€23.50"
                ],
                [
                    "naam" => "Forel",
                    "product_type" => "Vis",
                    "prijs" => "€8.25",
                    "prijs_per_kilo" => "€16.50"
                ],
                [
                    "naam" => "Makreelfilet",
                    "product_type" => "Vis",
                    "prijs" => "€6.99",
                    "prijs_per_kilo" => "€13.98"
                ],
                [
                    "naam" => "Sardines",
                    "product_type" => "Vis",
                    "prijs" => "€4.75",
                    "prijs_per_kilo" => "€9.50"
                ],
                [
                    "naam" => "Pangasiusfilet",
                    "product_type" => "Vis",
                    "prijs" => "€7.50",
                    "prijs_per_kilo" => "€15.00"
                ],
                [
                    "naam" => "Koolvisfilet",
                    "product_type" => "Vis",
                    "prijs" => "€6.50",
                    "prijs_per_kilo" => "€13.00"
                ],
                [
                    "naam" => "Scholfilet",
                    "product_type" => "Vis",
                    "prijs" => "€9.25",
                    "prijs_per_kilo" => "€18.50"
                ],
                [
                    "naam" => "Kipfilet",
                    "product_type" => "Vlees",
                    "prijs" => "€7.99",
                    "prijs_per_kilo" => "€15.98"
                ],
                [
                    "naam" => "Rundergehakt",
                    "product_type" => "Vlees",
                    "prijs" => "€6.50",
                    "prijs_per_kilo" => "€13.00"
                ],
                [
                    "naam" => "Varkenskarbonade",
                    "product_type" => "Vlees",
                    "prijs" => "€8.99",
                    "prijs_per_kilo" => "€17.98"
                ],
                [
                    "naam" => "Kalkoenfilet",
                    "product_type" => "Vlees",
                    "prijs" => "€9.75",
                    "prijs_per_kilo" => "€19.50"
                ],
                [
                    "naam" => "Lamsvlees",
                    "product_type" => "Vlees",
                    "prijs" => "€12.50",
                    "prijs_per_kilo" => "€25.00"
                ],
                [
                    "naam" => "Gehaktballen",
                    "product_type" => "Vlees",
                    "prijs" => "€5.99",
                    "prijs_per_kilo" => "€11.98"
                ],
                [
                    "naam" => "Speklapjes",
                    "product_type" => "Vlees",
                    "prijs" => "€7.25",
                    "prijs_per_kilo" => "€14.50"
                ],
                [
                    "naam" => "Kalfsvlees",
                    "product_type" => "Vlees",
                    "prijs" => "€11.99",
                    "prijs_per_kilo" => "€23.98"
                ],
                [
                    "naam" => "Gebraden Kip",
                    "product_type" => "Vlees",
                    "prijs" => "€6.75",
                    "prijs_per_kilo" => "€13.50"
                ],
                [
                    "naam" => "Biefstuk",
                    "product_type" => "Vlees",
                    "prijs" => "€15.99",
                    "prijs_per_kilo" => "€31.98"
                ],
                [
                    "naam" => "pizza",
                    "product_type" => "Diepvries",
                    "prijs" => "€2.50",
                    "prijs_per_kilo" => "€5.00"
                ],
                [
                    "naam" => "Erwten",
                    "product_type" => "Diepvries",
                    "prijs" => "€1.20",
                    "prijs_per_kilo" => "€2.40"
                ],
                [
                    "naam" => "vissticks",
                    "product_type" => "Diepvries",
                    "prijs" => "€3.99",
                    "prijs_per_kilo" => "€7.98"
                ],
                [
                    "naam" => "aardappelschijfjes",
                    "product_type" => "Diepvries",
                    "prijs" => "€1.75",
                    "prijs_per_kilo" => "€3.50"
                ],
                [
                    "naam" => "kroketten",
                    "product_type" => "Diepvries",
                    "prijs" => "€2.25",
                    "prijs_per_kilo" => "€4.50"
                ],
                [
                    "naam" => "Aardbeien",
                    "product_type" => "Diepvries",
                    "prijs" => "€2.80",
                    "prijs_per_kilo" => "€5.60"
                ],
                [
                    "naam" => "kipfilet",
                    "product_type" => "Diepvries",
                    "prijs" => "€6.99",
                    "prijs_per_kilo" => "€13.98"
                ],
                [
                    "naam" => "bladerdeeg",
                    "product_type" => "Diepvries",
                    "prijs" => "€1.50",
                    "prijs_per_kilo" => "€3.00"
                ],
                [
                    "naam" => "hamburgers",
                    "product_type" => "Diepvries",
                    "prijs" => "€4.50",
                    "prijs_per_kilo" => "€9.00"
                ],
                [
                    "naam" => "friet",
                    "product_type" => "Diepvries",
                    "prijs" => "€2.00",
                    "prijs_per_kilo" => "€4.00"
                ],
                [
                    "naam" => "Cola",
                    "product_type" => "Dranken",
                    "prijs" => "€1.00",
                    "prijs_per_kilo" => "€0.50"
                ],
                [
                    "naam" => "Sinas",
                    "product_type" => "Dranken",
                    "prijs" => "€0.80",
                    "prijs_per_kilo" => "€0.40"
                ],
                [
                    "naam" => "Appelsap",
                    "product_type" => "Dranken",
                    "prijs" => "€1.50",
                    "prijs_per_kilo" => "€0.75"
                ],
                [
                    "naam" => "Water",
                    "product_type" => "Dranken",
                    "prijs" => "€0.50",
                    "prijs_per_kilo" => "€0.25"
                ],
                [
                    "naam" => "IJsthee",
                    "product_type" => "Dranken",
                    "prijs" => "€1.20",
                    "prijs_per_kilo" => "€0.60"
                ],
                [
                    "naam" => "Energy Drink",
                    "product_type" => "Dranken",
                    "prijs" => "€2.00",
                    "prijs_per_kilo" => "€1.00"
                ],
                [
                    "naam" => "Sinaasappelsap",
                    "product_type" => "Dranken",
                    "prijs" => "€1.80",
                    "prijs_per_kilo" => "€0.90"
                ],
                [
                    "naam" => "Melk",
                    "product_type" => "Dranken",
                    "prijs" => "€1.20",
                    "prijs_per_kilo" => "€0.60"
                ],
                [
                    "naam" => "Koffie",
                    "product_type" => "Dranken",
                    "prijs" => "€3.50",
                    "prijs_per_kilo" => "€7.00"
                ],
                [
                    "naam" => "Thee",
                    "product_type" => "Dranken",
                    "prijs" => "€1.00",
                    "prijs_per_kilo" => "€0.50"
                ],
                [
                    "naam" => "Haribo Goudberen",
                    "product_type" => "Snoep",
                    "prijs" => "€1.20",
                    "prijs_per_kilo" => "€2.40"
                ],
                [
                    "naam" => "M&M's",
                    "product_type" => "Snoep",
                    "prijs" => "€1.50",
                    "prijs_per_kilo" => "€3.00"
                ],
                [
                    "naam" => "Lolly's",
                    "product_type" => "Snoep",
                    "prijs" => "€0.50",
                    "prijs_per_kilo" => "€5.00"
                ],
                [
                    "naam" => "Zure Wormen",
                    "product_type" => "Snoep",
                    "prijs" => "€1.00",
                    "prijs_per_kilo" => "€2.00"
                ],
                [
                    "naam" => "Zuurstokken",
                    "product_type" => "Snoep",
                    "prijs" => "€0.80",
                    "prijs_per_kilo" => "€8.00"
                ],
                [
                    "naam" => "Zachte Drop",
                    "product_type" => "Snoep",
                    "prijs" => "€1.20",
                    "prijs_per_kilo" => "€2.40"
                ],
                [
                    "naam" => "Chocoladerepen",
                    "product_type" => "Snoep",
                    "prijs" => "€2.00",
                    "prijs_per_kilo" => "€8.00"
                ],
                [
                    "naam" => "Kauwgom",
                    "product_type" => "Snoep",
                    "prijs" => "€0.75",
                    "prijs_per_kilo" => "€7.50"
                ],
                [
                    "naam" => "Zuurtjes",
                    "product_type" => "Snoep",
                    "prijs" => "€0.90",
                    "prijs_per_kilo" => "€9.00"
                ],
                [
                    "naam" => "Gekleurde Snoepjes",
                    "product_type" => "Snoep",
                    "prijs" => "€1.25",
                    "prijs_per_kilo" => "€2.50"
                ],
                [
                    "naam" => "Chips (Naturel)",
                    "product_type" => "Snacks",
                    "prijs" => "€1.50",
                    "prijs_per_kilo" => "€3.00"
                ],
                [
                    "naam" => "Pinda's",
                    "product_type" => "Snacks",
                    "prijs" => "€1.20",
                    "prijs_per_kilo" => "€6.00"
                ],
                [
                    "naam" => "Popcorn",
                    "product_type" => "Snacks",
                    "prijs" => "€1.00",
                    "prijs_per_kilo" => "€5.00"
                ],
                [
                    "naam" => "Nachos",
                    "product_type" => "Snacks",
                    "prijs" => "€1.80",
                    "prijs_per_kilo" => "€9.00"
                ],
                [
                    "naam" => "Mini-Saucijzenbroodjes",
                    "product_type" => "Snacks",
                    "prijs" => "€2.50",
                    "prijs_per_kilo" => "€12.50"
                ],
                [
                    "naam" => "Kaasblokjes",
                    "product_type" => "Snacks",
                    "prijs" => "€3.00",
                    "prijs_per_kilo" => "€12.00"
                ],
                [
                    "naam" => "Olijven",
                    "product_type" => "Snacks",
                    "prijs" => "€2.20",
                    "prijs_per_kilo" => "€11.00"
                ],
                [
                    "naam" => "Crackers",
                    "product_type" => "Snacks",
                    "prijs" => "€1.80",
                    "prijs_per_kilo" => "€4.50"
                ],
                [
                    "naam" => "Worstjes",
                    "product_type" => "Snacks",
                    "prijs" => "€2.25",
                    "prijs_per_kilo" => "€11.25"
                ],
                [
                    "naam" => "Mini-Quiches",
                    "product_type" => "Snacks",
                    "prijs" => "€3.50",
                    "prijs_per_kilo" => "€14.00"
                ]
            ]
        ],

        // Jumbo
        2 => [
            "products" => [
                [
                    "naam" => "Rode Paprika",
                    "product_type" => "Groenten",
                    "prijs" => "€1.20",
                    "prijs_per_kilo" => "€1.00"
                ],
                [
                    "naam" => "Verse Spinazie",
                    "product_type" => "Groenten",
                    "prijs" => "€1.50",
                    "prijs_per_kilo" => "€1.20"
                ],
                [
                    "naam" => "Courgette",
                    "product_type" => "Groenten",
                    "prijs" => "€0.80",
                    "prijs_per_kilo" => "€0.60"
                ],
                [
                    "naam" => "Verse Broccoli",
                    "product_type" => "Groenten",
                    "prijs" => "€1.80",
                    "prijs_per_kilo" => "€1.50"
                ],
                [
                    "naam" => "Wortels",
                    "product_type" => "Groenten",
                    "prijs" => "€0.90",
                    "prijs_per_kilo" => "€0.70"
                ],
                [
                    "naam" => "Tomaten",
                    "product_type" => "Groenten",
                    "prijs" => "€1.00",
                    "prijs_per_kilo" => "€0.80"
                ],
                [
                    "naam" => "Komkommer",
                    "product_type" => "Groenten",
                    "prijs" => "€0.60",
                    "prijs_per_kilo" => "€0.50"
                ],
                [
                    "naam" => "Verse Champignons",
                    "product_type" => "Groenten",
                    "prijs" => "€1.70",
                    "prijs_per_kilo" => "€3.40"
                ],
                [
                    "naam" => "Sla",
                    "product_type" => "Groenten",
                    "prijs" => "€1.30",
                    "prijs_per_kilo" => "€2.60"
                ],
                [
                    "naam" => "Verse Knoflook",
                    "product_type" => "Groenten",
                    "prijs" => "€0.50",
                    "prijs_per_kilo" => "€2.50"
                ],
                [
                    "naam" => "Perziken",
                    "product_type" => "Fruit",
                    "prijs" => "€1.80",
                    "prijs_per_kilo" => "€2.40"
                ],
                [
                    "naam" => "Kersen",
                    "product_type" => "Fruit",
                    "prijs" => "€2.50",
                    "prijs_per_kilo" => "€5.00"
                ],
                [
                    "naam" => "Abrikozen",
                    "product_type" => "Fruit",
                    "prijs" => "€1.70",
                    "prijs_per_kilo" => "€2.80"
                ],
                [
                    "naam" => "Pruimen",
                    "product_type" => "Fruit",
                    "prijs" => "€1.90",
                    "prijs_per_kilo" => "€2.50"
                ],
                [
                    "naam" => "Mandarijnen",
                    "product_type" => "Fruit",
                    "prijs" => "€1.20",
                    "prijs_per_kilo" => "€1.80"
                ],
                [
                    "naam" => "Peren",
                    "product_type" => "Fruit",
                    "prijs" => "€1.80",
                    "prijs_per_kilo" => "€1.20"
                ],
                [
                    "naam" => "Nectarines",
                    "product_type" => "Fruit",
                    "prijs" => "€1.60",
                    "prijs_per_kilo" => "€2.00"
                ],
                [
                    "naam" => "Dadelpruimen",
                    "product_type" => "Fruit",
                    "prijs" => "€2.20",
                    "prijs_per_kilo" => "€3.00"
                ],
                [
                    "naam" => "Lychees",
                    "product_type" => "Fruit",
                    "prijs" => "€3.50",
                    "prijs_per_kilo" => "€7.00"
                ],
                [
                    "naam" => "Passievruchten",
                    "product_type" => "Fruit",
                    "prijs" => "€2.00",
                    "prijs_per_kilo" => "€4.00"
                ],
                [
                    "naam" => "Croissant",
                    "product_type" => "Bakkerij",
                    "prijs" => "€0.80",
                    "prijs_per_stuk" => "€0.40"
                ],
                [
                    "naam" => "Donut",
                    "product_type" => "Bakkerij",
                    "prijs" => "€1.00",
                    "prijs_per_stuk" => "€0.50"
                ],
                [
                    "naam" => "Bagel",
                    "product_type" => "Bakkerij",
                    "prijs" => "€1.20",
                    "prijs_per_stuk" => "€0.60"
                ],
                [
                    "naam" => "Muffin",
                    "product_type" => "Bakkerij",
                    "prijs" => "€1.50",
                    "prijs_per_stuk" => "€0.75"
                ],
                [
                    "naam" => "Pretzel",
                    "product_type" => "Bakkerij",
                    "prijs" => "€1.20",
                    "prijs_per_stuk" => "€0.60"
                ],
                [
                    "naam" => "Pannenkoeken",
                    "product_type" => "Bakkerij",
                    "prijs" => "€2.00",
                    "prijs_per_stuk" => "€0.40"
                ],
                [
                    "naam" => "Wafels",
                    "product_type" => "Bakkerij",
                    "prijs" => "€2.50",
                    "prijs_per_stuk" => "€0.50"
                ],
                [
                    "naam" => "Eclair",
                    "product_type" => "Bakkerij",
                    "prijs" => "€1.80",
                    "prijs_per_stuk" => "€0.90"
                ],
                [
                    "naam" => "Cinnamon Roll",
                    "product_type" => "Bakkerij",
                    "prijs" => "€1.50",
                    "prijs_per_stuk" => "€0.75"
                ],
                [
                    "naam" => "Scone",
                    "product_type" => "Bakkerij",
                    "prijs" => "€1.20",
                    "prijs_per_stuk" => "€0.60"
                ],
                [
                    "naam" => "Makreel",
                    "product_type" => "Vis",
                    "prijs" => "€2.50",
                    "prijs_per_stuk" => "€2.50"
                ],
                [
                    "naam" => "Forel",
                    "product_type" => "Vis",
                    "prijs" => "€3.00",
                    "prijs_per_stuk" => "€3.00"
                ],
                [
                    "naam" => "Schol",
                    "product_type" => "Vis",
                    "prijs" => "€2.80",
                    "prijs_per_stuk" => "€2.80"
                ],
                [
                    "naam" => "Tonijnsteak",
                    "product_type" => "Vis",
                    "prijs" => "€4.00",
                    "prijs_per_stuk" => "€4.00"
                ],
                [
                    "naam" => "Zalmfilet",
                    "product_type" => "Vis",
                    "prijs" => "€3.50",
                    "prijs_per_stuk" => "€3.50"
                ],
                [
                    "naam" => "Gamba's",
                    "product_type" => "Vis",
                    "prijs" => "€5.00",
                    "prijs_per_stuk" => "€5.00"
                ],
                [
                    "naam" => "Pangasiusfilet",
                    "product_type" => "Vis",
                    "prijs" => "€2.20",
                    "prijs_per_stuk" => "€2.20"
                ],
                [
                    "naam" => "Kabeljauwfilet",
                    "product_type" => "Vis",
                    "prijs" => "€3.80",
                    "prijs_per_stuk" => "€3.80"
                ],
                [
                    "naam" => "Sardines",
                    "product_type" => "Vis",
                    "prijs" => "€2.00",
                    "prijs_per_stuk" => "€2.00"
                ],
                [
                    "naam" => "Heilbotfilet",
                    "product_type" => "Vis",
                    "prijs" => "€4.50",
                    "prijs_per_stuk" => "€4.50"
                ],
                [
                    "naam" => "Lamskoteletten",
                    "product_type" => "Vlees",
                    "prijs" => "€12.50",
                    "prijs_per_stuk" => "€12.50"
                ],
                [
                    "naam" => "Kippenworstjes",
                    "product_type" => "Vlees",
                    "prijs" => "€3.00",
                    "prijs_per_stuk" => "€3.00"
                ],
                [
                    "naam" => "Kalfsschnitzel",
                    "product_type" => "Vlees",
                    "prijs" => "€9.00",
                    "prijs_per_stuk" => "€9.00"
                ],
                [
                    "naam" => "Runderrollade",
                    "product_type" => "Vlees",
                    "prijs" => "€8.50",
                    "prijs_per_stuk" => "€8.50"
                ],
                [
                    "naam" => "Varkenshaas",
                    "product_type" => "Vlees",
                    "prijs" => "€10.00",
                    "prijs_per_stuk" => "€10.00"
                ],
                [
                    "naam" => "Gehaktballen",
                    "product_type" => "Vlees",
                    "prijs" => "€6.00",
                    "prijs_per_stuk" => "€6.00"
                ],
                [
                    "naam" => "Kalkoenfilet",
                    "product_type" => "Vlees",
                    "prijs" => "€7.20",
                    "prijs_per_stuk" => "€7.20"
                ],
                [
                    "naam" => "Lamsschouder",
                    "product_type" => "Vlees",
                    "prijs" => "€11.00",
                    "prijs_per_stuk" => "€11.00"
                ],
                [
                    "naam" => "Varkensribbetjes",
                    "product_type" => "Vlees",
                    "prijs" => "€8.80",
                    "prijs_per_stuk" => "€8.80"
                ],
                [
                    "naam" => "Rundertartaar",
                    "product_type" => "Vlees",
                    "prijs" => "€5.50",
                    "prijs_per_stuk" => "€5.50"
                ],
                [
                    "naam" => " garnalencocktail",
                    "product_type" => "Diepvries",
                    "prijs" => "€6.99",
                    "prijs_per_doos" => "€6.99"
                ],
                [
                    "naam" => " kippenvingers",
                    "product_type" => "Diepvries",
                    "prijs" => "€4.25",
                    "prijs_per_doos" => "€4.25"
                ],
                [
                    "naam" => " aardappelgratin",
                    "product_type" => "Diepvries",
                    "prijs" => "€3.50",
                    "prijs_per_schaal" => "€3.50"
                ],
                [
                    "naam" => " fruitsmoothie",
                    "product_type" => "Diepvries",
                    "prijs" => "€4.75",
                    "prijs_per_fles" => "€4.75"
                ],
                [
                    "naam" => "kabeljauwkroketten",
                    "product_type" => "Diepvries",
                    "prijs" => "€5.99",
                    "prijs_per_doos" => "€5.99"
                ],
                [
                    "naam" => " sperziebonen",
                    "product_type" => "Diepvries",
                    "prijs" => "€2.49",
                    "prijs_per_zak" => "€2.49"
                ],
                [
                    "naam" => " appeltaart",
                    "product_type" => "Diepvries",
                    "prijs" => "€7.50",
                    "prijs_per_taart" => "€7.50"
                ],
                [
                    "naam" => "pangasiusfilet",
                    "product_type" => "Diepvries",
                    "prijs" => "€3.99",
                    "prijs_per_pak" => "€3.99"
                ],
                [
                    "naam" => "kersen",
                    "product_type" => "Diepvries",
                    "prijs" => "€4.20",
                    "prijs_per_zak" => "€4.20"
                ],
                [
                    "naam" => "groentelasagne",
                    "product_type" => "Diepvries",
                    "prijs" => "€5.99",
                    "prijs_per_schaal" => "€5.99"
                ],
                [
                    "naam" => "Cola",
                    "product_type" => "Dranken",
                    "prijs" => "€1.00",
                    "prijs_per_fles" => "€1.00"
                ],
                [
                    "naam" => "Sinaasappelsap",
                    "product_type" => "Dranken",
                    "prijs" => "€2.50",
                    "prijs_per_fles" => "€2.50"
                ],
                [
                    "naam" => "Appelsap",
                    "product_type" => "Dranken",
                    "prijs" => "€2.00",
                    "prijs_per_fles" => "€2.00"
                ],
                [
                    "naam" => "Water",
                    "product_type" => "Dranken",
                    "prijs" => "€0.75",
                    "prijs_per_fles" => "€0.75"
                ],
                [
                    "naam" => "IJsthee",
                    "product_type" => "Dranken",
                    "prijs" => "€1.50",
                    "prijs_per_fles" => "€1.50"
                ],
                [
                    "naam" => "Energy Drink",
                    "product_type" => "Dranken",
                    "prijs" => "€2.75",
                    "prijs_per_blik" => "€2.75"
                ],
                [
                    "naam" => "Milkshake",
                    "product_type" => "Dranken",
                    "prijs" => "€3.50",
                    "prijs_per_beker" => "€3.50"
                ],
                [
                    "naam" => "Koffie",
                    "product_type" => "Dranken",
                    "prijs" => "€1.80",
                    "prijs_per_beker" => "€1.80"
                ],
                [
                    "naam" => "Thee",
                    "product_type" => "Dranken",
                    "prijs" => "€1.20",
                    "prijs_per_kopje" => "€1.20"
                ],
                [
                    "naam" => "Chocolademelk",
                    "product_type" => "Dranken",
                    "prijs" => "€2.25",
                    "prijs_per_beker" => "€2.25"
                ],
                [
                    "naam" => "Gummyberen",
                    "product_type" => "Snoep",
                    "prijs" => "€1.50",
                    "prijs_per_zak" => "€1.50"
                ],
                [
                    "naam" => "Zure wormen",
                    "product_type" => "Snoep",
                    "prijs" => "€1.75",
                    "prijs_per_zak" => "€1.75"
                ],
                [
                    "naam" => "Zure kersen",
                    "product_type" => "Snoep",
                    "prijs" => "€1.25",
                    "prijs_per_zak" => "€1.25"
                ],
                [
                    "naam" => "Lolly's",
                    "product_type" => "Snoep",
                    "prijs" => "€0.99",
                    "prijs_per_stuk" => "€0.99"
                ],
                [
                    "naam" => "Chocoladerepen",
                    "product_type" => "Snoep",
                    "prijs" => "€1.99",
                    "prijs_per_reep" => "€1.99"
                ],
                [
                    "naam" => "Kauwgom",
                    "product_type" => "Snoep",
                    "prijs" => "€0.50",
                    "prijs_per_pakje" => "€0.50"
                ],
                [
                    "naam" => "Drop",
                    "product_type" => "Snoep",
                    "prijs" => "€1.20",
                    "prijs_per_zak" => "€1.20"
                ],
                [
                    "naam" => "Chocoladekogels",
                    "product_type" => "Snoep",
                    "prijs" => "€2.25",
                    "prijs_per_zak" => "€2.25"
                ],
                [
                    "naam" => "Fruitgom",
                    "product_type" => "Snoep",
                    "prijs" => "€1.50",
                    "prijs_per_zak" => "€1.50"
                ],
                [
                    "naam" => "Marshmallows",
                    "product_type" => "Snoep",
                    "prijs" => "€1.99",
                    "prijs_per_zak" => "€1.99"
                ],
                [
                    "naam" => "Nachos",
                    "product_type" => "Snacks",
                    "prijs" => "€2.99",
                    "prijs_per_zak" => "€2.99"
                ],
                [
                    "naam" => "Pretzels",
                    "product_type" => "Snacks",
                    "prijs" => "€1.75",
                    "prijs_per_zak" => "€1.75"
                ],
                [
                    "naam" => "Popcorn",
                    "product_type" => "Snacks",
                    "prijs" => "€1.50",
                    "prijs_per_zak" => "€1.50"
                ],
                [
                    "naam" => "Chips",
                    "product_type" => "Snacks",
                    "prijs" => "€2.25",
                    "prijs_per_zak" => "€2.25"
                ],
                [
                    "naam" => "Kaasblokjes",
                    "product_type" => "Snacks",
                    "prijs" => "€3.50",
                    "prijs_per_bakje" => "€3.50"
                ],
                [
                    "naam" => "Groentesticks met hummus",
                    "product_type" => "Snacks",
                    "prijs" => "€4.25",
                    "prijs_per_portie" => "€4.25"
                ],
                [
                    "naam" => "Olijven",
                    "product_type" => "Snacks",
                    "prijs" => "€2.99",
                    "prijs_per_pot" => "€2.99"
                ],
                [
                    "naam" => "Mini-saucijzenbroodjes",
                    "product_type" => "Snacks",
                    "prijs" => "€3.75",
                    "prijs_per_portie" => "€3.75"
                ],
                [
                    "naam" => "Notenmix",
                    "product_type" => "Snacks",
                    "prijs" => "€3.99",
                    "prijs_per_zak" => "€3.99"
                ],
                [
                    "naam" => "Gevulde Jalapeño poppers",
                    "product_type" => "Snacks",
                    "prijs" => "€5.50",
                    "prijs_per_portie" => "€5.50"
                ],


            ]
        ],

        // Lidl
        3 => [
            "products" => [
                [
                    "naam" => "Asperges",
                    "product_type" => "Groenten",
                    "prijs" => "€2.50",
                    "prijs_per_kilo" => "€5.00"
                ],
                [
                    "naam" => "Artisjokken",
                    "product_type" => "Groenten",
                    "prijs" => "€1.80",
                    "prijs_per_kilo" => "€3.60"
                ],
                [
                    "naam" => "Radicchio",
                    "product_type" => "Groenten",
                    "prijs" => "€1.90",
                    "prijs_per_kilo" => "€3.80"
                ],
                [
                    "naam" => "Rettich",
                    "product_type" => "Groenten",
                    "prijs" => "€1.30",
                    "prijs_per_kilo" => "€2.60"
                ],
                [
                    "naam" => "Snijbiet",
                    "product_type" => "Groenten",
                    "prijs" => "€1.40",
                    "prijs_per_kilo" => "€2.80"
                ],
                [
                    "naam" => "Waterkers",
                    "product_type" => "Groenten",
                    "prijs" => "€1.20",
                    "prijs_per_kilo" => "€2.40"
                ],
                [
                    "naam" => "Prei",
                    "product_type" => "Groenten",
                    "prijs" => "€1.00",
                    "prijs_per_kilo" => "€2.00"
                ],
                [
                    "naam" => "Rodekool",
                    "product_type" => "Groenten",
                    "prijs" => "€1.50",
                    "prijs_per_kilo" => "€3.00"
                ],
                [
                    "naam" => "Koolraap",
                    "product_type" => "Groenten",
                    "prijs" => "€1.20",
                    "prijs_per_kilo" => "€2.40"
                ],
                [
                    "naam" => "Paksoi",
                    "product_type" => "Groenten",
                    "prijs" => "€1.70",
                    "prijs_per_kilo" => "€3.40"
                ],
                [
                    "naam" => "Ananas",
                    "product_type" => "Fruit",
                    "prijs" => "€1.80",
                    "prijs_per_kilo" => "€1.20"
                ],
                [
                    "naam" => "Mango",
                    "product_type" => "Fruit",
                    "prijs" => "€2.00",
                    "prijs_per_kilo" => "€2.00"
                ],
                [
                    "naam" => "Papaja",
                    "product_type" => "Fruit",
                    "prijs" => "€2.50",
                    "prijs_per_kilo" => "€2.50"
                ],
                [
                    "naam" => "Passievrucht",
                    "product_type" => "Fruit",
                    "prijs" => "€0.80",
                    "prijs_per_kilo" => "€4.00"
                ],
                [
                    "naam" => "Kiwi",
                    "product_type" => "Fruit",
                    "prijs" => "€0.50",
                    "prijs_per_kilo" => "€2.50"
                ],
                [
                    "naam" => "Guave",
                    "product_type" => "Fruit",
                    "prijs" => "€1.20",
                    "prijs_per_kilo" => "€2.40"
                ],
                [
                    "naam" => "Pruimen",
                    "product_type" => "Fruit",
                    "prijs" => "€1.60",
                    "prijs_per_kilo" => "€3.20"
                ],
                [
                    "naam" => "Perziken",
                    "product_type" => "Fruit",
                    "prijs" => "€1.70",
                    "prijs_per_kilo" => "€1.70"
                ],
                [
                    "naam" => "Abrikozen",
                    "product_type" => "Fruit",
                    "prijs" => "€1.90",
                    "prijs_per_kilo" => "€3.80"
                ],
                [
                    "naam" => "Vijgen",
                    "product_type" => "Fruit",
                    "prijs" => "€1.40",
                    "prijs_per_kilo" => "€2.80"
                ],
                [
                    "naam" => "Appeltaart",
                    "product_type" => "Bakkerij",
                    "prijs" => "€12.50",
                    "prijs_per_stuk" => "€12.50"
                ],
                [
                    "naam" => "Gevulde koek",
                    "product_type" => "Bakkerij",
                    "prijs" => "€1.20",
                    "prijs_per_stuk" => "€1.20"
                ],
                [
                    "naam" => "Krentenbol",
                    "product_type" => "Bakkerij",
                    "prijs" => "€0.80",
                    "prijs_per_stuk" => "€0.80"
                ],
                [
                    "naam" => "Appelflap",
                    "product_type" => "Bakkerij",
                    "prijs" => "€1.50",
                    "prijs_per_stuk" => "€1.50"
                ],
                [
                    "naam" => "Boterkoek",
                    "product_type" => "Bakkerij",
                    "prijs" => "€1.80",
                    "prijs_per_stuk" => "€1.80"
                ],
                [
                    "naam" => "Gebakje",
                    "product_type" => "Bakkerij",
                    "prijs" => "€2.00",
                    "prijs_per_stuk" => "€2.00"
                ],
                [
                    "naam" => "Tompouce",
                    "product_type" => "Bakkerij",
                    "prijs" => "€1.75",
                    "prijs_per_stuk" => "€1.75"
                ],
                [
                    "naam" => "Stroopwafel",
                    "product_type" => "Bakkerij",
                    "prijs" => "€1.00",
                    "prijs_per_stuk" => "€1.00"
                ],
                [
                    "naam" => "Mergpijpje",
                    "product_type" => "Bakkerij",
                    "prijs" => "€0.90",
                    "prijs_per_stuk" => "€0.90"
                ],
                [
                    "naam" => "Roggebrood",
                    "product_type" => "Bakkerij",
                    "prijs" => "€1.20",
                    "prijs_per_stuk" => "€1.20"
                ],
                [
                    "naam" => "Forelfilet",
                    "product_type" => "Vis",
                    "prijs" => "€3.20",
                    "prijs_per_stuk" => "€3.20"
                ],
                [
                    "naam" => "Koolvisfilet",
                    "product_type" => "Vis",
                    "prijs" => "€2.50",
                    "prijs_per_stuk" => "€2.50"
                ],
                [
                    "naam" => "Gestoomde mosselen",
                    "product_type" => "Vis",
                    "prijs" => "€4.50",
                    "prijs_per_stuk" => "€4.50"
                ],
                [
                    "naam" => "Zeebaarsfilet",
                    "product_type" => "Vis",
                    "prijs" => "€5.00",
                    "prijs_per_stuk" => "€5.00"
                ],
                [
                    "naam" => "Sint-Jakobsschelpen",
                    "product_type" => "Vis",
                    "prijs" => "€7.00",
                    "prijs_per_stuk" => "€7.00"
                ],
                [
                    "naam" => "Ansjovisfilet",
                    "product_type" => "Vis",
                    "prijs" => "€2.80",
                    "prijs_per_stuk" => "€2.80"
                ],
                [
                    "naam" => "Tilapiafilet",
                    "product_type" => "Vis",
                    "prijs" => "€3.00",
                    "prijs_per_stuk" => "€3.00"
                ],
                [
                    "naam" => "Forel gerookt",
                    "product_type" => "Vis",
                    "prijs" => "€3.80",
                    "prijs_per_stuk" => "€3.80"
                ],
                [
                    "naam" => "Mosselen",
                    "product_type" => "Vis",
                    "prijs" => "€2.20",
                    "prijs_per_stuk" => "€2.20"
                ],
                [
                    "naam" => "Gestoomde garnalen",
                    "product_type" => "Vis",
                    "prijs" => "€6.50",
                    "prijs_per_stuk" => "€6.50"
                ],
                [
                    "naam" => "Runderstoofvlees",
                    "product_type" => "Vlees",
                    "prijs" => "€9.50",
                    "prijs_per_kilo" => "€8.00"
                ],
                [
                    "naam" => "Kippenbouten",
                    "product_type" => "Vlees",
                    "prijs" => "€6.00",
                    "prijs_per_kilo" => "€4.50"
                ],
                [
                    "naam" => "Lamsgehakt",
                    "product_type" => "Vlees",
                    "prijs" => "€10.20",
                    "prijs_per_kilo" => "€9.00"
                ],
                [
                    "naam" => "Varkenskoteletten",
                    "product_type" => "Vlees",
                    "prijs" => "€7.80",
                    "prijs_per_kilo" => "€6.50"
                ],
                [
                    "naam" => "Kalfslever",
                    "product_type" => "Vlees",
                    "prijs" => "€12.00",
                    "prijs_per_kilo" => "€10.00"
                ],
                [
                    "naam" => "Eendenborst",
                    "product_type" => "Vlees",
                    "prijs" => "€11.50",
                    "prijs_per_kilo" => "€9.80"
                ],
                [
                    "naam" => "Gevulde kipfilet",
                    "product_type" => "Vlees",
                    "prijs" => "€8.50",
                    "prijs_per_kilo" => "€7.20"
                ],
                [
                    "naam" => "Runderribeye",
                    "product_type" => "Vlees",
                    "prijs" => "€13.50",
                    "prijs_per_kilo" => "€11.50"
                ],
                [
                    "naam" => "Varkensrollade",
                    "product_type" => "Vlees",
                    "prijs" => "€9.80",
                    "prijs_per_kilo" => "€8.50"
                ],
                [
                    "naam" => "Kippenworst",
                    "product_type" => "Vlees",
                    "prijs" => "€5.80",
                    "prijs_per_kilo" => "€4.80"
                ],
                [
                    "naam" => "kippenpoten",
                    "product_type" => "Diepvries",
                    "prijs" => "€3.99",
                    "prijs_per_verpakking" => "€3.99"
                ],
                [
                    "naam" => "mengeling van bessen",
                    "product_type" => "Diepvries",
                    "prijs" => "€4.50",
                    "prijs_per_zak" => "€4.50"
                ],
                [
                    "naam" => "spinazie en ricotta gevulde pasta",
                    "product_type" => "Diepvries",
                    "prijs" => "€5.75",
                    "prijs_per_doos" => "€5.75"
                ],
                [
                    "naam" => "braadworst",
                    "product_type" => "Diepvries",
                    "prijs" => "€6.25",
                    "prijs_per_pak" => "€6.25"
                ],
                [
                    "naam" => "appelbeignets",
                    "product_type" => "Diepvries",
                    "prijs" => "€3.25",
                    "prijs_per_doos" => "€3.25"
                ],
                [
                    "naam" => "zwezerik",
                    "product_type" => "Diepvries",
                    "prijs" => "€8.99",
                    "prijs_per_portie" => "€8.99"
                ],
                [
                    "naam" => "kalkoenburgers",
                    "product_type" => "Diepvries",
                    "prijs" => "€5.50",
                    "prijs_per_verpakking" => "€5.50"
                ],
                [
                    "naam" => "chocolade lava cake",
                    "product_type" => "Diepvries",
                    "prijs" => "€4.99",
                    "prijs_per_doos" => "€4.99"
                ],
                [
                    "naam" => "kibbeling",
                    "product_type" => "Diepvries",
                    "prijs" => "€4.75",
                    "prijs_per_verpakking" => "€4.75"
                ],
                [
                    "naam" => "aardappelkroketten",
                    "product_type" => "Diepvries",
                    "prijs" => "€2.99",
                    "prijs_per_doos" => "€2.99"
                ],
                [
                    "naam" => "Smoothie",
                    "product_type" => "Dranken",
                    "prijs" => "€3.99",
                    "prijs_per_fles" => "€3.99"
                ],
                [
                    "naam" => "Witte wijn",
                    "product_type" => "Dranken",
                    "prijs" => "€8.50",
                    "prijs_per_fles" => "€8.50"
                ],
                [
                    "naam" => "Rode wijn",
                    "product_type" => "Dranken",
                    "prijs" => "€9.25",
                    "prijs_per_fles" => "€9.25"
                ],
                [
                    "naam" => "Rosé",
                    "product_type" => "Dranken",
                    "prijs" => "€7.99",
                    "prijs_per_fles" => "€7.99"
                ],
                [
                    "naam" => "Bier",
                    "product_type" => "Dranken",
                    "prijs" => "€1.50",
                    "prijs_per_fles" => "€1.50"
                ],
                [
                    "naam" => "Gin",
                    "product_type" => "Dranken",
                    "prijs" => "€12.99",
                    "prijs_per_fles" => "€12.99"
                ],
                [
                    "naam" => "Wodka",
                    "product_type" => "Dranken",
                    "prijs" => "€10.75",
                    "prijs_per_fles" => "€10.75"
                ],
                [
                    "naam" => "Rum",
                    "product_type" => "Dranken",
                    "prijs" => "€11.50",
                    "prijs_per_fles" => "€11.50"
                ],
                [
                    "naam" => "Whisky",
                    "product_type" => "Dranken",
                    "prijs" => "€15.99",
                    "prijs_per_fles" => "€15.99"
                ],
                [
                    "naam" => "Cognac",
                    "product_type" => "Dranken",
                    "prijs" => "€17.50",
                    "prijs_per_fles" => "€17.50"
                ],
                [
                    "naam" => "Chocoladekoekjes",
                    "product_type" => "Snoep",
                    "prijs" => "€2.50",
                    "prijs_per_pak" => "€2.50"
                ],
                [
                    "naam" => "Suikerspin",
                    "product_type" => "Snoep",
                    "prijs" => "€1.75",
                    "prijs_per_portie" => "€1.75"
                ],
                [
                    "naam" => "Fudge",
                    "product_type" => "Snoep",
                    "prijs" => "€2.99",
                    "prijs_per_zak" => "€2.99"
                ],
                [
                    "naam" => "Karamelblokjes",
                    "product_type" => "Snoep",
                    "prijs" => "€1.99",
                    "prijs_per_zak" => "€1.99"
                ],
                [
                    "naam" => "Winegums",
                    "product_type" => "Snoep",
                    "prijs" => "€1.50",
                    "prijs_per_zak" => "€1.50"
                ],
                [
                    "naam" => "Zure tape",
                    "product_type" => "Snoep",
                    "prijs" => "€1.25",
                    "prijs_per_zak" => "€1.25"
                ],
                [
                    "naam" => "Kauwbare snoepketting",
                    "product_type" => "Snoep",
                    "prijs" => "€0.99",
                    "prijs_per_ketting" => "€0.99"
                ],
                [
                    "naam" => "Chocolade-munten",
                    "product_type" => "Snoep",
                    "prijs" => "€2.25",
                    "prijs_per_zak" => "€2.25"
                ],
                [
                    "naam" => "Zure colaflesjes",
                    "product_type" => "Snoep",
                    "prijs" => "€1.75",
                    "prijs_per_zak" => "€1.75"
                ],
                [
                    "naam" => "Kauwsnoep",
                    "product_type" => "Snoep",
                    "prijs" => "€1.00",
                    "prijs_per_zak" => "€1.00"
                ],
                [
                    "naam" => "Mini-kaassoufflés",
                    "product_type" => "Snacks",
                    "prijs" => "€4.25",
                    "prijs_per_portie" => "€4.25"
                ],
                [
                    "naam" => "Knoflookbrood",
                    "product_type" => "Snacks",
                    "prijs" => "€3.99",
                    "prijs_per_portie" => "€3.99"
                ],
                [
                    "naam" => "Mini-frikandellen",
                    "product_type" => "Snacks",
                    "prijs" => "€3.50",
                    "prijs_per_portie" => "€3.50"
                ],
                [
                    "naam" => "Kippenvleugeltjes",
                    "product_type" => "Snacks",
                    "prijs" => "€5.99",
                    "prijs_per_portie" => "€5.99"
                ],
                [
                    "naam" => "Mini-kaasplankje",
                    "product_type" => "Snacks",
                    "prijs" => "€6.50",
                    "prijs_per_portie" => "€6.50"
                ],
                [
                    "naam" => "Gevulde champignons",
                    "product_type" => "Snacks",
                    "prijs" => "€4.75",
                    "prijs_per_portie" => "€4.75"
                ],
                [
                    "naam" => "Bruschetta",
                    "product_type" => "Snacks",
                    "prijs" => "€3.25",
                    "prijs_per_portie" => "€3.25"
                ],
                [
                    "naam" => "Mini-quiches",
                    "product_type" => "Snacks",
                    "prijs" => "€4.50",
                    "prijs_per_portie" => "€4.50"
                ],
                [
                    "naam" => "Kipnuggets",
                    "product_type" => "Snacks",
                    "prijs" => "€4.99",
                    "prijs_per_portie" => "€4.99"
                ],
                [
                    "naam" => "Mini-loempia's",
                    "product_type" => "Snacks",
                    "prijs" => "€3.75",
                    "prijs_per_portie" => "€3.75"
                ]

            ]
        ],

        // Plus
        4 => [
            "products" => [
                [
                    "naam" => "Spinazie",
                    "product_type" => "Groenten",
                    "prijs" => "€1.20",
                    "prijs_per_kilo" => "€2.40"
                ],
                [
                    "naam" => "Spruitjes",
                    "product_type" => "Groenten",
                    "prijs" => "€1.80",
                    "prijs_per_kilo" => "€3.60"
                ],
                [
                    "naam" => "Aubergine",
                    "product_type" => "Groenten",
                    "prijs" => "€1.50",
                    "prijs_per_kilo" => "€3.00"
                ],
                [
                    "naam" => "Courgette",
                    "product_type" => "Groenten",
                    "prijs" => "€1.00",
                    "prijs_per_kilo" => "€2.00"
                ],
                [
                    "naam" => "Pastinaak",
                    "product_type" => "Groenten",
                    "prijs" => "€1.20",
                    "prijs_per_kilo" => "€2.40"
                ],
                [
                    "naam" => "Rode bieten",
                    "product_type" => "Groenten",
                    "prijs" => "€1.30",
                    "prijs_per_kilo" => "€2.60"
                ],
                [
                    "naam" => "Selderij",
                    "product_type" => "Groenten",
                    "prijs" => "€1.40",
                    "prijs_per_kilo" => "€2.80"
                ],
                [
                    "naam" => "Wortelen",
                    "product_type" => "Groenten",
                    "prijs" => "€1.20",
                    "prijs_per_kilo" => "€2.40"
                ],
                [
                    "naam" => "Rode paprika",
                    "product_type" => "Groenten",
                    "prijs" => "€1.80",
                    "prijs_per_kilo" => "€3.60"
                ],
                [
                    "naam" => "Groene paprika",
                    "product_type" => "Groenten",
                    "prijs" => "€1.80",
                    "prijs_per_kilo" => "€3.60"
                ],
                [
                    "naam" => "Ananas",
                    "product_type" => "Fruit",
                    "prijs" => "€1.80",
                    "prijs_per_kilo" => "€1.20"
                ],
                [
                    "naam" => "Mango",
                    "product_type" => "Fruit",
                    "prijs" => "€2.00",
                    "prijs_per_kilo" => "€2.00"
                ],
                [
                    "naam" => "Papaja",
                    "product_type" => "Fruit",
                    "prijs" => "€2.50",
                    "prijs_per_kilo" => "€2.50"
                ],
                [
                    "naam" => "Passievrucht",
                    "product_type" => "Fruit",
                    "prijs" => "€0.80",
                    "prijs_per_kilo" => "€4.00"
                ],
                [
                    "naam" => "Kiwi",
                    "product_type" => "Fruit",
                    "prijs" => "€0.50",
                    "prijs_per_kilo" => "€2.50"
                ],
                [
                    "naam" => "Guave",
                    "product_type" => "Fruit",
                    "prijs" => "€1.20",
                    "prijs_per_kilo" => "€2.40"
                ],
                [
                    "naam" => "Pruimen",
                    "product_type" => "Fruit",
                    "prijs" => "€1.60",
                    "prijs_per_kilo" => "€3.20"
                ],
                [
                    "naam" => "Perziken",
                    "product_type" => "Fruit",
                    "prijs" => "€1.70",
                    "prijs_per_kilo" => "€1.70"
                ],
                [
                    "naam" => "Abrikozen",
                    "product_type" => "Fruit",
                    "prijs" => "€1.90",
                    "prijs_per_kilo" => "€3.80"
                ],
                [
                    "naam" => "Vijgen",
                    "product_type" => "Fruit",
                    "prijs" => "€1.40",
                    "prijs_per_kilo" => "€2.80"
                ],
                [
                    "naam" => "Pistolet",
                    "product_type" => "Bakkerij",
                    "prijs" => "€0.50",
                    "prijs_per_stuk" => "€0.50"
                ],
                [
                    "naam" => "Kaiserbroodje",
                    "product_type" => "Bakkerij",
                    "prijs" => "€0.60",
                    "prijs_per_stuk" => "€0.60"
                ],
                [
                    "naam" => "Ciabatta",
                    "product_type" => "Bakkerij",
                    "prijs" => "€1.00",
                    "prijs_per_stuk" => "€1.00"
                ],
                [
                    "naam" => "Pain au chocolat",
                    "product_type" => "Bakkerij",
                    "prijs" => "€1.20",
                    "prijs_per_stuk" => "€1.20"
                ],
                [
                    "naam" => "Stokbrood",
                    "product_type" => "Bakkerij",
                    "prijs" => "€1.50",
                    "prijs_per_stuk" => "€1.50"
                ],
                [
                    "naam" => "Zuurdesembrood",
                    "product_type" => "Bakkerij",
                    "prijs" => "€2.00",
                    "prijs_per_stuk" => "€2.00"
                ],
                [
                    "naam" => "Brioche",
                    "product_type" => "Bakkerij",
                    "prijs" => "€1.80",
                    "prijs_per_stuk" => "€1.80"
                ],
                [
                    "naam" => "Tijgerbrood",
                    "product_type" => "Bakkerij",
                    "prijs" => "€1.20",
                    "prijs_per_stuk" => "€1.20"
                ],
                [
                    "naam" => "Koffiekoek",
                    "product_type" => "Bakkerij",
                    "prijs" => "€1.50",
                    "prijs_per_stuk" => "€1.50"
                ],
                [
                    "naam" => "Pita broodje",
                    "product_type" => "Bakkerij",
                    "prijs" => "€0.80",
                    "prijs_per_stuk" => "€0.80"
                ],
                [
                    "naam" => "Goudbrasem",
                    "product_type" => "Vis",
                    "prijs" => "€6.50",
                    "prijs_per_stuk" => "€6.50"
                ],
                [
                    "naam" => "Haringfilet",
                    "product_type" => "Vis",
                    "prijs" => "€2.00",
                    "prijs_per_stuk" => "€2.00"
                ],
                [
                    "naam" => "Inktvisringen",
                    "product_type" => "Vis",
                    "prijs" => "€3.50",
                    "prijs_per_stuk" => "€3.50"
                ],
                [
                    "naam" => "Forelsalade",
                    "product_type" => "Vis",
                    "prijs" => "€4.00",
                    "prijs_per_stuk" => "€4.00"
                ],
                [
                    "naam" => "Rogvleugel",
                    "product_type" => "Vis",
                    "prijs" => "€8.00",
                    "prijs_per_stuk" => "€8.00"
                ],
                [
                    "naam" => "Pijlinktvis",
                    "product_type" => "Vis",
                    "prijs" => "€5.50",
                    "prijs_per_stuk" => "€5.50"
                ],
                [
                    "naam" => "Mosselsoep",
                    "product_type" => "Vis",
                    "prijs" => "€3.20",
                    "prijs_per_stuk" => "€3.20"
                ],
                [
                    "naam" => "Ansjovisfilet in olie",
                    "product_type" => "Vis",
                    "prijs" => "€2.80",
                    "prijs_per_stuk" => "€2.80"
                ],
                [
                    "naam" => "Hollandse nieuwe",
                    "product_type" => "Vis",
                    "prijs" => "€1.50",
                    "prijs_per_stuk" => "€1.50"
                ],
                [
                    "naam" => "Witvismix",
                    "product_type" => "Vis",
                    "prijs" => "€4.50",
                    "prijs_per_stuk" => "€4.50"
                ],
                [
                    "naam" => "Kippenvleugels",
                    "product_type" => "Vlees",
                    "prijs" => "€3.50",
                    "prijs_per_kilo" => "€2.80"
                ],
                [
                    "naam" => "Lamskoteletten",
                    "product_type" => "Vlees",
                    "prijs" => "€11.00",
                    "prijs_per_kilo" => "€9.50"
                ],
                [
                    "naam" => "Varkensvleesreepjes",
                    "product_type" => "Vlees",
                    "prijs" => "€4.20",
                    "prijs_per_kilo" => "€3.80"
                ],
                [
                    "naam" => "Rundergehaktballen",
                    "product_type" => "Vlees",
                    "prijs" => "€5.80",
                    "prijs_per_kilo" => "€4.50"
                ],
                [
                    "naam" => "Kalfssaucijsjes",
                    "product_type" => "Vlees",
                    "prijs" => "€8.00",
                    "prijs_per_kilo" => "€6.80"
                ],
                [
                    "naam" => "Eendenvleugels",
                    "product_type" => "Vlees",
                    "prijs" => "€6.50",
                    "prijs_per_kilo" => "€5.20"
                ],
                [
                    "naam" => "Varkenshaasjes",
                    "product_type" => "Vlees",
                    "prijs" => "€10.50",
                    "prijs_per_kilo" => "€9.00"
                ],
                [
                    "naam" => "Lamsbout",
                    "product_type" => "Vlees",
                    "prijs" => "€14.00",
                    "prijs_per_kilo" => "€11.80"
                ],
                [
                    "naam" => "Kalfsschnitzels",
                    "product_type" => "Vlees",
                    "prijs" => "€9.50",
                    "prijs_per_kilo" => "€8.20"
                ],
                [
                    "naam" => "Runderbiefstuk",
                    "product_type" => "Vlees",
                    "prijs" => "€12.80",
                    "prijs_per_kilo" => "€10.50"
                ],
                [
                    "naam" => "gehaktballen",
                    "product_type" => "Diepvries",
                    "prijs" => "€4.99",
                    "prijs_per_doos" => "€4.99"
                ],
                [
                    "naam" => "zalmfilet",
                    "product_type" => "Diepvries",
                    "prijs" => "€7.25",
                    "prijs_per_pak" => "€7.25"
                ],
                [
                    "naam" => "spinazie à la crème",
                    "product_type" => "Diepvries",
                    "prijs" => "€2.50",
                    "prijs_per_zak" => "€2.50"
                ],
                [
                    "naam" => "mango smoothie mix",
                    "product_type" => "Diepvries",
                    "prijs" => "€3.75",
                    "prijs_per_zak" => "€3.75"
                ],
                [
                    "naam" => "kipnuggets",
                    "product_type" => "Diepvries",
                    "prijs" => "€4.50",
                    "prijs_per_doos" => "€4.50"
                ],
                [
                    "naam" => "blauwe bessen",
                    "product_type" => "Diepvries",
                    "prijs" => "€3.20",
                    "prijs_per_zak" => "€3.20"
                ],
                [
                    "naam" => "ravioli met kaasvulling",
                    "product_type" => "Diepvries",
                    "prijs" => "€5.99",
                    "prijs_per_doos" => "€5.99"
                ],
                [
                    "naam" => "kabeljauwfilet",
                    "product_type" => "Diepvries",
                    "prijs" => "€6.80",
                    "prijs_per_pak" => "€6.80"
                ],
                [
                    "naam" => "pannenkoeken",
                    "product_type" => "Diepvries",
                    "prijs" => "€2.25",
                    "prijs_per_doos" => "€2.25"
                ],
                [
                    "naam" => "wafels",
                    "product_type" => "Diepvries",
                    "prijs" => "€3.99",
                    "prijs_per_doos" => "€3.99"
                ],
                [
                    "naam" => "Tequila",
                    "product_type" => "Dranken",
                    "prijs" => "€14.75",
                    "prijs_per_fles" => "€14.75"
                ],
                [
                    "naam" => "Champagne",
                    "product_type" => "Dranken",
                    "prijs" => "€25.99",
                    "prijs_per_fles" => "€25.99"
                ],
                [
                    "naam" => "Mojito",
                    "product_type" => "Dranken",
                    "prijs" => "€6.99",
                    "prijs_per_fles" => "€6.99"
                ],
                [
                    "naam" => "Martini",
                    "product_type" => "Dranken",
                    "prijs" => "€9.25",
                    "prijs_per_fles" => "€9.25"
                ],
                [
                    "naam" => "Bloody Mary",
                    "product_type" => "Dranken",
                    "prijs" => "€7.50",
                    "prijs_per_fles" => "€7.50"
                ],
                [
                    "naam" => "Margarita",
                    "product_type" => "Dranken",
                    "prijs" => "€8.99",
                    "prijs_per_fles" => "€8.99"
                ],
                [
                    "naam" => "Caipirinha",
                    "product_type" => "Dranken",
                    "prijs" => "€6.75",
                    "prijs_per_fles" => "€6.75"
                ],
                [
                    "naam" => "Daiquiri",
                    "product_type" => "Dranken",
                    "prijs" => "€7.25",
                    "prijs_per_fles" => "€7.25"
                ],
                [
                    "naam" => "Piña Colada",
                    "product_type" => "Dranken",
                    "prijs" => "€8.50",
                    "prijs_per_fles" => "€8.50"
                ],
                [
                    "naam" => "Whiskey Sour",
                    "product_type" => "Dranken",
                    "prijs" => "€9.99",
                    "prijs_per_fles" => "€9.99"
                ],
                [
                    "naam" => "Kauwsnoep",
                    "product_type" => "Snoep",
                    "prijs" => "€1.00",
                    "prijs_per_zak" => "€1.00"
                ],
                [
                    "naam" => "Lakritz",
                    "product_type" => "Snoep",
                    "prijs" => "€1.49",
                    "prijs_per_zak" => "€1.49"
                ],
                [
                    "naam" => "Gom-snoep",
                    "product_type" => "Snoep",
                    "prijs" => "€1.25",
                    "prijs_per_zak" => "€1.25"
                ],
                [
                    "naam" => "Pepermuntjes",
                    "product_type" => "Snoep",
                    "prijs" => "€0.75",
                    "prijs_per_zakje" => "€0.75"
                ],
                [
                    "naam" => "Zure kauwbare snoepjes",
                    "product_type" => "Snoep",
                    "prijs" => "€1.50",
                    "prijs_per_zak" => "€1.50"
                ],
                [
                    "naam" => "Gekleurde lolly's",
                    "product_type" => "Snoep",
                    "prijs" => "€1.25",
                    "prijs_per_stuk" => "€1.25"
                ],
                [
                    "naam" => "Kauwbare juwelen",
                    "product_type" => "Snoep",
                    "prijs" => "€1.99",
                    "prijs_per_zak" => "€1.99"
                ],
                [
                    "naam" => "Kauwbaar fruit",
                    "product_type" => "Snoep",
                    "prijs" => "€1.25",
                    "prijs_per_zak" => "€1.25"
                ],
                [
                    "naam" => "Sour Patch Kids",
                    "product_type" => "Snoep",
                    "prijs" => "€1.99",
                    "prijs_per_zak" => "€1.99"
                ],
                [
                    "naam" => "Chocoladekussentjes",
                    "product_type" => "Snoep",
                    "prijs" => "€2.50",
                    "prijs_per_zak" => "€2.50"
                ],
                [
                    "naam" => "Kipnuggets",
                    "product_type" => "Snacks",
                    "prijs" => "€4.99",
                    "prijs_per_portie" => "€4.99"
                ],
                [
                    "naam" => "Mini-loempia's",
                    "product_type" => "Snacks",
                    "prijs" => "€3.75",
                    "prijs_per_portie" => "€3.75"
                ],
                [
                    "naam" => "Kibbeling",
                    "product_type" => "Snacks",
                    "prijs" => "€5.25",
                    "prijs_per_portie" => "€5.25"
                ],
                [
                    "naam" => "Gevulde dadels",
                    "product_type" => "Snacks",
                    "prijs" => "€3.99",
                    "prijs_per_portie" => "€3.99"
                ],
                [
                    "naam" => "Mini-springrolls",
                    "product_type" => "Snacks",
                    "prijs" => "€4.25",
                    "prijs_per_portie" => "€4.25"
                ],
                [
                    "naam" => "Chili cheese bites",
                    "product_type" => "Snacks",
                    "prijs" => "€4.75",
                    "prijs_per_portie" => "€4.75"
                ],
                [
                    "naam" => "Gebakken inktvisringen",
                    "product_type" => "Snacks",
                    "prijs" => "€5.50",
                    "prijs_per_portie" => "€5.50"
                ],
                [
                    "naam" => "Zalmhapjes",
                    "product_type" => "Snacks",
                    "prijs" => "€6.25",
                    "prijs_per_portie" => "€6.25"
                ],
                [
                    "naam" => "Gevulde eieren",
                    "product_type" => "Snacks",
                    "prijs" => "€3.25",
                    "prijs_per_portie" => "€3.25"
                ],
                [
                    "naam" => "Bruschetta met tomaat en basilicum",
                    "product_type" => "Snacks",
                    "prijs" => "€3.99",
                    "prijs_per_portie" => "€3.99"
                ]


            ]
        ],

        // Spar
        5 => [
            "products" => [
                [
                    "naam" => "Bloemkool",
                    "product_type" => "Groenten",
                    "prijs" => "€2.00",
                    "prijs_per_kilo" => "€2.00"
                ],
                [
                    "naam" => "Broccoli",
                    "product_type" => "Groenten",
                    "prijs" => "€1.50",
                    "prijs_per_kilo" => "€3.00"
                ],
                [
                    "naam" => "Koolrabi",
                    "product_type" => "Groenten",
                    "prijs" => "€1.20",
                    "prijs_per_kilo" => "€2.40"
                ],
                [
                    "naam" => "Raapstelen",
                    "product_type" => "Groenten",
                    "prijs" => "€1.80",
                    "prijs_per_kilo" => "€3.60"
                ],
                [
                    "naam" => "Schorseneren",
                    "product_type" => "Groenten",
                    "prijs" => "€2.50",
                    "prijs_per_kilo" => "€5.00"
                ],
                [
                    "naam" => "Spitskool",
                    "product_type" => "Groenten",
                    "prijs" => "€1.30",
                    "prijs_per_kilo" => "€2.60"
                ],
                [
                    "naam" => "Taugé",
                    "product_type" => "Groenten",
                    "prijs" => "€1.00",
                    "prijs_per_kilo" => "€4.00"
                ],
                [
                    "naam" => "Witte kool",
                    "product_type" => "Groenten",
                    "prijs" => "€1.20",
                    "prijs_per_kilo" => "€2.40"
                ],
                [
                    "naam" => "Snijbonen",
                    "product_type" => "Groenten",
                    "prijs" => "€1.70",
                    "prijs_per_kilo" => "€3.40"
                ],
                [
                    "naam" => "Rode kool",
                    "product_type" => "Groenten",
                    "prijs" => "€1.60",
                    "prijs_per_kilo" => "€3.20"
                ],
                [
                    "naam" => "Kersen",
                    "product_type" => "Fruit",
                    "prijs" => "€2.20",
                    "prijs_per_kilo" => "€4.40"
                ],
                [
                    "naam" => "Bramen",
                    "product_type" => "Fruit",
                    "prijs" => "€2.50",
                    "prijs_per_kilo" => "€5.00"
                ],
                [
                    "naam" => "Blauwe bessen",
                    "product_type" => "Fruit",
                    "prijs" => "€3.00",
                    "prijs_per_kilo" => "€6.00"
                ],
                [
                    "naam" => "Aardbeien",
                    "product_type" => "Fruit",
                    "prijs" => "€1.80",
                    "prijs_per_kilo" => "€3.60"
                ],
                [
                    "naam" => "Frambozen",
                    "product_type" => "Fruit",
                    "prijs" => "€2.80",
                    "prijs_per_kilo" => "€5.60"
                ],
                [
                    "naam" => "Peren",
                    "product_type" => "Fruit",
                    "prijs" => "€1.20",
                    "prijs_per_kilo" => "€2.40"
                ],
                [
                    "naam" => "Pruimen",
                    "product_type" => "Fruit",
                    "prijs" => "€1.50",
                    "prijs_per_kilo" => "€3.00"
                ],
                [
                    "naam" => "Druiven",
                    "product_type" => "Fruit",
                    "prijs" => "€2.00",
                    "prijs_per_kilo" => "€4.00"
                ],
                [
                    "naam" => "Meloen",
                    "product_type" => "Fruit",
                    "prijs" => "€2.50",
                    "prijs_per_kilo" => "€2.50"
                ],
                [
                    "naam" => "Appels",
                    "product_type" => "Fruit",
                    "prijs" => "€1.00",
                    "prijs_per_kilo" => "€2.00"
                ],
                [
                    "naam" => "Koffiebroodje",
                    "product_type" => "Bakkerij",
                    "prijs" => "€1.20",
                    "prijs_per_stuk" => "€1.20"
                ],
                [
                    "naam" => "Rozijnenbrood",
                    "product_type" => "Bakkerij",
                    "prijs" => "€1.80",
                    "prijs_per_stuk" => "€1.80"
                ],
                [
                    "naam" => "Gevuld speculaas",
                    "product_type" => "Bakkerij",
                    "prijs" => "€2.50",
                    "prijs_per_stuk" => "€2.50"
                ],
                [
                    "naam" => "Krakeling",
                    "product_type" => "Bakkerij",
                    "prijs" => "€0.60",
                    "prijs_per_stuk" => "€0.60"
                ],
                [
                    "naam" => "Pretzelbrood",
                    "product_type" => "Bakkerij",
                    "prijs" => "€1.00",
                    "prijs_per_stuk" => "€1.00"
                ],
                [
                    "naam" => "Berlinerbol",
                    "product_type" => "Bakkerij",
                    "prijs" => "€1.50",
                    "prijs_per_stuk" => "€1.50"
                ],
                [
                    "naam" => "Honingkoek",
                    "product_type" => "Bakkerij",
                    "prijs" => "€1.20",
                    "prijs_per_stuk" => "€1.20"
                ],
                [
                    "naam" => "Speculaasstaaf",
                    "product_type" => "Bakkerij",
                    "prijs" => "€1.80",
                    "prijs_per_stuk" => "€1.80"
                ],
                [
                    "naam" => "Krakeling met chocolade",
                    "product_type" => "Bakkerij",
                    "prijs" => "€0.80",
                    "prijs_per_stuk" => "€0.80"
                ],
                [
                    "naam" => "Kaneelstok",
                    "product_type" => "Bakkerij",
                    "prijs" => "€1.00",
                    "prijs_per_stuk" => "€1.00"
                ],
                [
                    "naam" => "Zeebaars",
                    "product_type" => "Vis",
                    "prijs" => "€7.50",
                    "prijs_per_stuk" => "€7.50"
                ],
                [
                    "naam" => "Makreelfilet",
                    "product_type" => "Vis",
                    "prijs" => "€4.00",
                    "prijs_per_stuk" => "€4.00"
                ],
                [
                    "naam" => "Palingfilet",
                    "product_type" => "Vis",
                    "prijs" => "€10.00",
                    "prijs_per_stuk" => "€10.00"
                ],
                [
                    "naam" => "Sardinefilet",
                    "product_type" => "Vis",
                    "prijs" => "€3.50",
                    "prijs_per_stuk" => "€3.50"
                ],
                [
                    "naam" => "Mosselvlees",
                    "product_type" => "Vis",
                    "prijs" => "€6.50",
                    "prijs_per_stuk" => "€6.50"
                ],
                [
                    "naam" => "Zalmforel",
                    "product_type" => "Vis",
                    "prijs" => "€5.50",
                    "prijs_per_stuk" => "€5.50"
                ],
                [
                    "naam" => "Mosselkroket",
                    "product_type" => "Vis",
                    "prijs" => "€2.80",
                    "prijs_per_stuk" => "€2.80"
                ],
                [
                    "naam" => "Zwaardvissteak",
                    "product_type" => "Vis",
                    "prijs" => "€8.00",
                    "prijs_per_stuk" => "€8.00"
                ],
                [
                    "naam" => "Gebakken visfilet",
                    "product_type" => "Vis",
                    "prijs" => "€6.00",
                    "prijs_per_stuk" => "€6.00"
                ],
                [
                    "naam" => "Haringzakje",
                    "product_type" => "Vis",
                    "prijs" => "€2.50",
                    "prijs_per_stuk" => "€2.50"
                ],
                [
                    "naam" => "Kipfilethaasjes",
                    "product_type" => "Vlees",
                    "prijs" => "€7.50",
                    "prijs_per_kilo" => "€6.00"
                ],
                [
                    "naam" => "Lamsrack",
                    "product_type" => "Vlees",
                    "prijs" => "€16.00",
                    "prijs_per_kilo" => "€13.50"
                ],
                [
                    "naam" => "Varkensschnitzels",
                    "product_type" => "Vlees",
                    "prijs" => "€8.50",
                    "prijs_per_kilo" => "€7.00"
                ],
                [
                    "naam" => "Runderpoulet",
                    "product_type" => "Vlees",
                    "prijs" => "€6.80",
                    "prijs_per_kilo" => "€5.50"
                ],
                [
                    "naam" => "Kalfskoteletten",
                    "product_type" => "Vlees",
                    "prijs" => "€12.50",
                    "prijs_per_kilo" => "€10.00"
                ],
                [
                    "naam" => "Eendenborstfilet",
                    "product_type" => "Vlees",
                    "prijs" => "€9.80",
                    "prijs_per_kilo" => "€8.00"
                ],
                [
                    "naam" => "Varkenskarbonades",
                    "product_type" => "Vlees",
                    "prijs" => "€7.00",
                    "prijs_per_kilo" => "€5.80"
                ],
                [
                    "naam" => "Lamsboutsteak",
                    "product_type" => "Vlees",
                    "prijs" => "€14.50",
                    "prijs_per_kilo" => "€12.00"
                ],
                [
                    "naam" => "Kippenrollade",
                    "product_type" => "Vlees",
                    "prijs" => "€5.50",
                    "prijs_per_kilo" => "€4.50"
                ],
                [
                    "naam" => "Runderbraadworst",
                    "product_type" => "Vlees",
                    "prijs" => "€4.20",
                    "prijs_per_kilo" => "€3.50"
                ],
                [
                    "naam" => "pizza Margherita",
                    "product_type" => "Diepvries",
                    "prijs" => "€3.50",
                    "prijs_per_doos" => "€3.50"
                ],
                [
                    "naam" => "groentenmix",
                    "product_type" => "Diepvries",
                    "prijs" => "€2.75",
                    "prijs_per_zak" => "€2.75"
                ],
                [
                    "naam" => "vissticks",
                    "product_type" => "Diepvries",
                    "prijs" => "€4.20",
                    "prijs_per_doos" => "€4.20"
                ],
                [
                    "naam" => "kipfilet",
                    "product_type" => "Diepvries",
                    "prijs" => "€6.50",
                    "prijs_per_pak" => "€6.50"
                ],
                [
                    "naam" => "aardbeien",
                    "product_type" => "Diepvries",
                    "prijs" => "€3.80",
                    "prijs_per_zak" => "€3.80"
                ],
                [
                    "naam" => "friet",
                    "product_type" => "Diepvries",
                    "prijs" => "€2.99",
                    "prijs_per_zak" => "€2.99"
                ],
                [
                    "naam" => "kroketten",
                    "product_type" => "Diepvries",
                    "prijs" => "€4.75",
                    "prijs_per_doos" => "€4.75"
                ],
                [
                    "naam" => "lasagne",
                    "product_type" => "Diepvries",
                    "prijs" => "€5.25",
                    "prijs_per_schaal" => "€5.25"
                ],
                [
                    "naam" => "mango stukjes",
                    "product_type" => "Diepvries",
                    "prijs" => "€3.50",
                    "prijs_per_zak" => "€3.50"
                ],
                [
                    "naam" => "spinazie",
                    "product_type" => "Diepvries",
                    "prijs" => "€1.99",
                    "prijs_per_pak" => "€1.99"
                ],
                [
                    "naam" => "Gin & Tonic",
                    "product_type" => "Dranken",
                    "prijs" => "€7.25",
                    "prijs_per_fles" => "€7.25"
                ],
                [
                    "naam" => "Vodka Red Bull",
                    "product_type" => "Dranken",
                    "prijs" => "€6.75",
                    "prijs_per_blik" => "€6.75"
                ],
                [
                    "naam" => "Moscow Mule",
                    "product_type" => "Dranken",
                    "prijs" => "€8.99",
                    "prijs_per_fles" => "€8.99"
                ],
                [
                    "naam" => "Long Island Iced Tea",
                    "product_type" => "Dranken",
                    "prijs" => "€10.50",
                    "prijs_per_fles" => "€10.50"
                ],
                [
                    "naam" => "Mint Julep",
                    "product_type" => "Dranken",
                    "prijs" => "€9.75",
                    "prijs_per_fles" => "€9.75"
                ],
                [
                    "naam" => "Mai Tai",
                    "product_type" => "Dranken",
                    "prijs" => "€11.25",
                    "prijs_per_fles" => "€11.25"
                ],
                [
                    "naam" => "Bellini",
                    "product_type" => "Dranken",
                    "prijs" => "€8.25",
                    "prijs_per_fles" => "€8.25"
                ],
                [
                    "naam" => "Manhattan",
                    "product_type" => "Dranken",
                    "prijs" => "€10.99",
                    "prijs_per_fles" => "€10.99"
                ],
                [
                    "naam" => "Bourbon Sour",
                    "product_type" => "Dranken",
                    "prijs" => "€9.50",
                    "prijs_per_fles" => "€9.50"
                ],
                [
                    "naam" => "Cosmopolitan",
                    "product_type" => "Dranken",
                    "prijs" => "€8.75",
                    "prijs_per_fles" => "€8.75"
                ],
                [
                    "naam" => "Zure regenboogslierten",
                    "product_type" => "Snoep",
                    "prijs" => "€1.99",
                    "prijs_per_zak" => "€1.99"
                ],
                [
                    "naam" => "Snoepkikkers",
                    "product_type" => "Snoep",
                    "prijs" => "€2.25",
                    "prijs_per_zak" => "€2.25"
                ],
                [
                    "naam" => "Karamelchocolaatjes",
                    "product_type" => "Snoep",
                    "prijs" => "€2.75",
                    "prijs_per_zak" => "€2.75"
                ],
                [
                    "naam" => "Kauwgom-ballon",
                    "product_type" => "Snoep",
                    "prijs" => "€1.50",
                    "prijs_per_stuk" => "€1.50"
                ],
                [
                    "naam" => "Fruitige kauwgomballen",
                    "product_type" => "Snoep",
                    "prijs" => "€1.25",
                    "prijs_per_zak" => "€1.25"
                ],
                [
                    "naam" => "Candy Canes",
                    "product_type" => "Snoep",
                    "prijs" => "€0.99",
                    "prijs_per_stuk" => "€0.99"
                ],
                [
                    "naam" => "Suikerhartjes",
                    "product_type" => "Snoep",
                    "prijs" => "€1.75",
                    "prijs_per_zak" => "€1.75"
                ],
                [
                    "naam" => "Zure kersenlolly",
                    "product_type" => "Snoep",
                    "prijs" => "€1.49",
                    "prijs_per_stuk" => "€1.49"
                ],
                [
                    "naam" => "Kauwbare colaflesjes",
                    "product_type" => "Snoep",
                    "prijs" => "€1.25",
                    "prijs_per_zak" => "€1.25"
                ],
                [
                    "naam" => "Melkchocolade truffels",
                    "product_type" => "Snoep",
                    "prijs" => "€3.50",
                    "prijs_per_zak" => "€3.50"
                ],
                [
                    "naam" => "Kaasstengels",
                    "product_type" => "Snacks",
                    "prijs" => "€4.50",
                    "prijs_per_portie" => "€4.50"
                ],
                [
                    "naam" => "Mini-pizza's",
                    "product_type" => "Snacks",
                    "prijs" => "€4.99",
                    "prijs_per_portie" => "€4.99"
                ],
                [
                    "naam" => "Gezouten pinda's",
                    "product_type" => "Snacks",
                    "prijs" => "€2.25",
                    "prijs_per_zak" => "€2.25"
                ],
                [
                    "naam" => "Gefrituurde kikkererwten",
                    "product_type" => "Snacks",
                    "prijs" => "€3.75",
                    "prijs_per_portie" => "€3.75"
                ],
                [
                    "naam" => "Gefrituurde kaasballetjes",
                    "product_type" => "Snacks",
                    "prijs" => "€4.25",
                    "prijs_per_portie" => "€4.25"
                ],
                [
                    "naam" => "Kipspiesjes",
                    "product_type" => "Snacks",
                    "prijs" => "€5.50",
                    "prijs_per_portie" => "€5.50"
                ],
                [
                    "naam" => "Gevulde champignonkopjes",
                    "product_type" => "Snacks",
                    "prijs" => "€4.99",
                    "prijs_per_portie" => "€4.99"
                ],
                [
                    "naam" => "Mini-kaasflapjes",
                    "product_type" => "Snacks",
                    "prijs" => "€4.75",
                    "prijs_per_portie" => "€4.75"
                ],
                [
                    "naam" => "Mozzarella sticks",
                    "product_type" => "Snacks",
                    "prijs" => "€4.99",
                    "prijs_per_portie" => "€4.99"
                ],
                [
                    "naam" => "Gevulde mini-paprika's",
                    "product_type" => "Snacks",
                    "prijs" => "€4.25",
                    "prijs_per_portie" => "€4.25"
                ]



            ]
        ],
        // Coop
        6 => [
            "products" => [
                [
                    "naam" => "Romaine sla",
                    "product_type" => "Groenten",
                    "prijs" => "€1.20",
                    "prijs_per_kilo" => "€2.40"
                ],
                [
                    "naam" => "Witlof",
                    "product_type" => "Groenten",
                    "prijs" => "€1.50",
                    "prijs_per_kilo" => "€3.00"
                ],
                [
                    "naam" => "Rode bieten",
                    "product_type" => "Groenten",
                    "prijs" => "€1.80",
                    "prijs_per_kilo" => "€3.60"
                ],
                [
                    "naam" => "Rammenas",
                    "product_type" => "Groenten",
                    "prijs" => "€1.40",
                    "prijs_per_kilo" => "€2.80"
                ],
                [
                    "naam" => "Groene asperges",
                    "product_type" => "Groenten",
                    "prijs" => "€2.00",
                    "prijs_per_kilo" => "€4.00"
                ],
                [
                    "naam" => "Savooiekool",
                    "product_type" => "Groenten",
                    "prijs" => "€1.60",
                    "prijs_per_kilo" => "€3.20"
                ],
                [
                    "naam" => "Tomaat",
                    "product_type" => "Groenten",
                    "prijs" => "€1.30",
                    "prijs_per_kilo" => "€2.60"
                ],
                [
                    "naam" => "Paprika",
                    "product_type" => "Groenten",
                    "prijs" => "€1.80",
                    "prijs_per_kilo" => "€3.60"
                ],
                [
                    "naam" => "Courgette",
                    "product_type" => "Groenten",
                    "prijs" => "€1.70",
                    "prijs_per_kilo" => "€3.40"
                ],
                [
                    "naam" => "Venkel",
                    "product_type" => "Groenten",
                    "prijs" => "€1.90",
                    "prijs_per_kilo" => "€3.80"
                ],
                [
                    "naam" => "Bananen",
                    "product_type" => "Fruit",
                    "prijs" => "€1.20",
                    "prijs_per_kilo" => "€1.20"
                ],
                [
                    "naam" => "Druiven",
                    "product_type" => "Fruit",
                    "prijs" => "€2.00",
                    "prijs_per_kilo" => "€2.00"
                ],
                [
                    "naam" => "Kiwi",
                    "product_type" => "Fruit",
                    "prijs" => "€0.50",
                    "prijs_per_kilo" => "€0.50"
                ],
                [
                    "naam" => "Appels",
                    "product_type" => "Fruit",
                    "prijs" => "€1.00",
                    "prijs_per_kilo" => "€1.00"
                ],
                [
                    "naam" => "Peren",
                    "product_type" => "Fruit",
                    "prijs" => "€1.20",
                    "prijs_per_kilo" => "€1.20"
                ],
                [
                    "naam" => "Sinaasappels",
                    "product_type" => "Fruit",
                    "prijs" => "€1.50",
                    "prijs_per_kilo" => "€1.50"
                ],
                [
                    "naam" => "Mandarijnen",
                    "product_type" => "Fruit",
                    "prijs" => "€1.20",
                    "prijs_per_kilo" => "€1.20"
                ],
                [
                    "naam" => "Perziken",
                    "product_type" => "Fruit",
                    "prijs" => "€1.70",
                    "prijs_per_kilo" => "€1.70"
                ],
                [
                    "naam" => "Ananas",
                    "product_type" => "Fruit",
                    "prijs" => "€1.80",
                    "prijs_per_kilo" => "€1.80"
                ],
                [
                    "naam" => "Kersen",
                    "product_type" => "Fruit",
                    "prijs" => "€2.00",
                    "prijs_per_kilo" => "€2.00"
                ],
                [
                    "naam" => "Appelbeignet",
                    "product_type" => "Bakkerij",
                    "prijs" => "€1.50",
                    "prijs_per_stuk" => "€1.50"
                ],
                [
                    "naam" => "Kruimelkoek",
                    "product_type" => "Bakkerij",
                    "prijs" => "€1.20",
                    "prijs_per_stuk" => "€1.20"
                ],
                [
                    "naam" => "Kokosmakroon",
                    "product_type" => "Bakkerij",
                    "prijs" => "€0.80",
                    "prijs_per_stuk" => "€0.80"
                ],
                [
                    "naam" => "Havermoutkoekje",
                    "product_type" => "Bakkerij",
                    "prijs" => "€0.50",
                    "prijs_per_stuk" => "€0.50"
                ],
                [
                    "naam" => "Kaasbroodje",
                    "product_type" => "Bakkerij",
                    "prijs" => "€1.20",
                    "prijs_per_stuk" => "€1.20"
                ],
                [
                    "naam" => "Volkorenbrood",
                    "product_type" => "Bakkerij",
                    "prijs" => "€2.00",
                    "prijs_per_stuk" => "€2.00"
                ],
                [
                    "naam" => "Marsepein",
                    "product_type" => "Bakkerij",
                    "prijs" => "€2.50",
                    "prijs_per_stuk" => "€2.50"
                ],
                [
                    "naam" => "Bokkenpootje",
                    "product_type" => "Bakkerij",
                    "prijs" => "€1.80",
                    "prijs_per_stuk" => "€1.80"
                ],
                [
                    "naam" => "Boterkoekje",
                    "product_type" => "Bakkerij",
                    "prijs" => "€0.60",
                    "prijs_per_stuk" => "€0.60"
                ],
                [
                    "naam" => "Vruchtentaartje",
                    "product_type" => "Bakkerij",
                    "prijs" => "€2.00",
                    "prijs_per_stuk" => "€2.00"
                ],
                [
                    "naam" => "Mosselen in tomatensaus",
                    "product_type" => "Vis",
                    "prijs" => "€4.50",
                    "prijs_per_stuk" => "€4.50"
                ],
                [
                    "naam" => "Sardines in olijfolie",
                    "product_type" => "Vis",
                    "prijs" => "€3.80",
                    "prijs_per_stuk" => "€3.80"
                ],
                [
                    "naam" => "Forelfilet gerookt",
                    "product_type" => "Vis",
                    "prijs" => "€5.20",
                    "prijs_per_stuk" => "€5.20"
                ],
                [
                    "naam" => "Makreelfilet gerookt",
                    "product_type" => "Vis",
                    "prijs" => "€4.80",
                    "prijs_per_stuk" => "€4.80"
                ],
                [
                    "naam" => "Zalmsteak",
                    "product_type" => "Vis",
                    "prijs" => "€9.50",
                    "prijs_per_stuk" => "€9.50"
                ],
                [
                    "naam" => "Krabbenpoten",
                    "product_type" => "Vis",
                    "prijs" => "€6.00",
                    "prijs_per_stuk" => "€6.00"
                ],
                [
                    "naam" => "Ansjovisfilet in olie",
                    "product_type" => "Vis",
                    "prijs" => "€2.80",
                    "prijs_per_stuk" => "€2.80"
                ],
                [
                    "naam" => "Sint-Jakobsschelpen in knoflooksaus",
                    "product_type" => "Vis",
                    "prijs" => "€8.50",
                    "prijs_per_stuk" => "€8.50"
                ],
                [
                    "naam" => "Makreelsalade",
                    "product_type" => "Vis",
                    "prijs" => "€3.20",
                    "prijs_per_stuk" => "€3.20"
                ],
                [
                    "naam" => "Zalmforel gerookt",
                    "product_type" => "Vis",
                    "prijs" => "€5.80",
                    "prijs_per_stuk" => "€5.80"
                ],
                [
                    "naam" => "Kippenpoten",
                    "product_type" => "Vlees",
                    "prijs" => "€4.00",
                    "prijs_per_kilo" => "€3.20"
                ],
                [
                    "naam" => "Lamsboutfilet",
                    "product_type" => "Vlees",
                    "prijs" => "€13.50",
                    "prijs_per_kilo" => "€11.00"
                ],
                [
                    "naam" => "Varkensbraadworst",
                    "product_type" => "Vlees",
                    "prijs" => "€3.80",
                    "prijs_per_kilo" => "€3.00"
                ],
                [
                    "naam" => "Runderribbetjes",
                    "product_type" => "Vlees",
                    "prijs" => "€9.00",
                    "prijs_per_kilo" => "€7.50"
                ],
                [
                    "naam" => "Kalfsentrecote",
                    "product_type" => "Vlees",
                    "prijs" => "€15.00",
                    "prijs_per_kilo" => "€12.50"
                ],
                [
                    "naam" => "Eendenbout",
                    "product_type" => "Vlees",
                    "prijs" => "€8.50",
                    "prijs_per_kilo" => "€7.00"
                ],
                [
                    "naam" => "Varkenssaté",
                    "product_type" => "Vlees",
                    "prijs" => "€6.50",
                    "prijs_per_kilo" => "€5.20"
                ],
                [
                    "naam" => "Lamsfilet",
                    "product_type" => "Vlees",
                    "prijs" => "€12.80",
                    "prijs_per_kilo" => "€10.50"
                ],
                [
                    "naam" => "Kippenrollade",
                    "product_type" => "Vlees",
                    "prijs" => "€5.80",
                    "prijs_per_kilo" => "€4.80"
                ],
                [
                    "naam" => "Runderbraadstuk",
                    "product_type" => "Vlees",
                    "prijs" => "€10.50",
                    "prijs_per_kilo" => "€9.00"
                ],
                [
                    "naam" => "hamburgers",
                    "product_type" => "Diepvries",
                    "prijs" => "€5.00",
                    "prijs_per_doos" => "€5.00"
                ],
                [
                    "naam" => "kipfilet",
                    "product_type" => "Diepvries",
                    "prijs" => "€6.50",
                    "prijs_per_pak" => "€6.50"
                ],
                [
                    "naam" => "groentesoep",
                    "product_type" => "Diepvries",
                    "prijs" => "€3.80",
                    "prijs_per_zak" => "€3.80"
                ],
                [
                    "naam" => "zalmfilet",
                    "product_type" => "Diepvries",
                    "prijs" => "€7.50",
                    "prijs_per_pak" => "€7.50"
                ],
                [
                    "naam" => "kabeljauwfilet",
                    "product_type" => "Diepvries",
                    "prijs" => "€8.20",
                    "prijs_per_pak" => "€8.20"
                ],
                [
                    "naam" => "kipnuggets",
                    "product_type" => "Diepvries",
                    "prijs" => "€4.00",
                    "prijs_per_doos" => "€4.00"
                ],
                [
                    "naam" => "friet",
                    "product_type" => "Diepvries",
                    "prijs" => "€2.50",
                    "prijs_per_zak" => "€2.50"
                ],
                [
                    "naam" => "kroketten",
                    "product_type" => "Diepvries",
                    "prijs" => "€3.20",
                    "prijs_per_zak" => "€3.20"
                ],
                [
                    "naam" => "perzikpartjes",
                    "product_type" => "Diepvries",
                    "prijs" => "€2.80",
                    "prijs_per_pak" => "€2.80"
                ],
                [
                    "naam" => "bladerdeeg",
                    "product_type" => "Diepvries",
                    "prijs" => "€1.50",
                    "prijs_per_pak" => "€1.50"
                ],
                [
                    "naam" => "Iced Coffee",
                    "product_type" => "Drank",
                    "prijs" => "€3.25",
                    "prijs_per_glas" => "€3.25"
                ],
                [
                    "naam" => "Limoncello",
                    "product_type" => "Drank",
                    "prijs" => "€12.99",
                    "prijs_per_fles" => "€12.99"
                ],
                [
                    "naam" => "Baileys Irish Cream",
                    "product_type" => "Drank",
                    "prijs" => "€15.50",
                    "prijs_per_fles" => "€15.50"
                ],
                [
                    "naam" => "Amaretto",
                    "product_type" => "Drank",
                    "prijs" => "€11.75",
                    "prijs_per_fles" => "€11.75"
                ],
                [
                    "naam" => "Aperol",
                    "product_type" => "Drank",
                    "prijs" => "€9.99",
                    "prijs_per_fles" => "€9.99"
                ],
                [
                    "naam" => "Campari",
                    "product_type" => "Drank",
                    "prijs" => "€10.25",
                    "prijs_per_fles" => "€10.25"
                ],
                [
                    "naam" => "Prosecco",
                    "product_type" => "Drank",
                    "prijs" => "€11.99",
                    "prijs_per_fles" => "€11.99"
                ],
                [
                    "naam" => "Pina Colada Mocktail",
                    "product_type" => "Drank",
                    "prijs" => "€4.50",
                    "prijs_per_glas" => "€4.50"
                ],
                [
                    "naam" => "Virgin Mojito",
                    "product_type" => "Drank",
                    "prijs" => "€3.75",
                    "prijs_per_glas" => "€3.75"
                ],
                [
                    "naam" => "Virgin Piña Colada",
                    "product_type" => "Drank",
                    "prijs" => "€4.25",
                    "prijs_per_glas" => "€4.25"
                ],[
                    "naam" => "Zure kauwgomwormen",
                    "product_type" => "Snoep",
                    "prijs" => "€1.50",
                    "prijs_per_zak" => "€1.50"
                ],
                [
                    "naam" => "Fruitige zuurstokken",
                    "product_type" => "Snoep",
                    "prijs" => "€1.25",
                    "prijs_per_stuk" => "€1.25"
                ],
                [
                    "naam" => "Carameltoffee",
                    "product_type" => "Snoep",
                    "prijs" => "€2.25",
                    "prijs_per_zak" => "€2.25"
                ],
                [
                    "naam" => "Kauwbare druivensnoepjes",
                    "product_type" => "Snoep",
                    "prijs" => "€1.99",
                    "prijs_per_zak" => "€1.99"
                ],
                [
                    "naam" => "Marsepein",
                    "product_type" => "Snoep",
                    "prijs" => "€2.99",
                    "prijs_per_zak" => "€2.99"
                ],
                [
                    "naam" => "Zure snoepmix",
                    "product_type" => "Snoep",
                    "prijs" => "€1.75",
                    "prijs_per_zak" => "€1.75"
                ],
                [
                    "naam" => "Kauwbare aardbeiensnoepjes",
                    "product_type" => "Snoep",
                    "prijs" => "€1.50",
                    "prijs_per_zak" => "€1.50"
                ],
                [
                    "naam" => "Witte chocoladerepen",
                    "product_type" => "Snoep",
                    "prijs" => "€2.50",
                    "prijs_per_reep" => "€2.50"
                ],
                [
                    "naam" => "Gekleurde chocoladesnoepjes",
                    "product_type" => "Snoep",
                    "prijs" => "€2.25",
                    "prijs_per_zak" => "€2.25"
                ],
                [
                    "naam" => "Zure watermeloenstukjes",
                    "product_type" => "Snoep",
                    "prijs" => "€1.49",
                    "prijs_per_zak" => "€1.49"
                ],
                [
                    "naam" => "Gefrituurde kaasballetjes",
                    "product_type" => "Snack",
                    "prijs" => "€4.25",
                    "prijs_per_portie" => "€4.25"
                ],
                [
                    "naam" => "Kipspiesjes",
                    "product_type" => "Snack",
                    "prijs" => "€5.50",
                    "prijs_per_portie" => "€5.50"
                ],
                [
                    "naam" => "Gevulde champignonkopjes",
                    "product_type" => "Snack",
                    "prijs" => "€4.99",
                    "prijs_per_portie" => "€4.99"
                ],
                [
                    "naam" => "Mini-kaasflapjes",
                    "product_type" => "Snack",
                    "prijs" => "€4.75",
                    "prijs_per_portie" => "€4.75"
                ],
                [
                    "naam" => "Mozzarella sticks",
                    "product_type" => "Snack",
                    "prijs" => "€4.99",
                    "prijs_per_portie" => "€4.99"
                ],
                [
                    "naam" => "Gevulde mini-paprika's",
                    "product_type" => "Snack",
                    "prijs" => "€4.25",
                    "prijs_per_portie" => "€4.25"
                ],
                [
                    "naam" => "Sushirolletjes",
                    "product_type" => "Snack",
                    "prijs" => "€6.50",
                    "prijs_per_portie" => "€6.50"
                ],
                [
                    "naam" => "Bladerdeeghapjes",
                    "product_type" => "Snack",
                    "prijs" => "€4.25",
                    "prijs_per_portie" => "€4.25"
                ],
                [
                    "naam" => "Gevulde cherrytomaatjes",
                    "product_type" => "Snack",
                    "prijs" => "€3.99",
                    "prijs_per_portie" => "€3.99"
                ],
                [
                    "naam" => "Aardappelwedges",
                    "product_type" => "Snack",
                    "prijs" => "€3.50",
                    "prijs_per_portie" => "€3.50"
                ]

            ]
        ],
        // Dirk
        7 => [
            "products" => [
                [
                    "naam" => "Snijbonen",
                    "product_type" => "Groenten",
                    "prijs" => "€1.80",
                    "prijs_per_kilo" => "€3.60"
                ],
                [
                    "naam" => "Rode kool",
                    "product_type" => "Groenten",
                    "prijs" => "€1.60",
                    "prijs_per_kilo" => "€3.20"
                ],
                [
                    "naam" => "Komkommer",
                    "product_type" => "Groenten",
                    "prijs" => "€0.90",
                    "prijs_per_kilo" => "€1.80"
                ],
                [
                    "naam" => "Boerenkool",
                    "product_type" => "Groenten",
                    "prijs" => "€1.50",
                    "prijs_per_kilo" => "€3.00"
                ],
                [
                    "naam" => "Groene paprika",
                    "product_type" => "Groenten",
                    "prijs" => "€1.80",
                    "prijs_per_kilo" => "€3.60"
                ],
                [
                    "naam" => "Rode ui",
                    "product_type" => "Groenten",
                    "prijs" => "€1.20",
                    "prijs_per_kilo" => "€2.40"
                ],
                [
                    "naam" => "Bospeen",
                    "product_type" => "Groenten",
                    "prijs" => "€1.70",
                    "prijs_per_kilo" => "€3.40"
                ],
                [
                    "naam" => "Verse spinazie",
                    "product_type" => "Groenten",
                    "prijs" => "€2.00",
                    "prijs_per_kilo" => "€4.00"
                ],
                [
                    "naam" => "Paprika",
                    "product_type" => "Groenten",
                    "prijs" => "€1.80",
                    "prijs_per_kilo" => "€3.60"
                ],
                [
                    "naam" => "Prei",
                    "product_type" => "Groenten",
                    "prijs" => "€1.00",
                    "prijs_per_kilo" => "€2.00"
                ],
                [
                    "naam" => "Appels",
                    "product_type" => "Fruit",
                    "prijs" => "€1.20",
                    "prijs_per_kilo" => "€1.50"
                ],
                [
                    "naam" => "Sinaasappels",
                    "product_type" => "Fruit",
                    "prijs" => "€1.50",
                    "prijs_per_kilo" => "€1.80"
                ],
                [
                    "naam" => "Bananen",
                    "product_type" => "Fruit",
                    "prijs" => "€0.90",
                    "prijs_per_kilo" => "€1.20"
                ],
                [
                    "naam" => "Druiven",
                    "product_type" => "Fruit",
                    "prijs" => "€2.00",
                    "prijs_per_kilo" => "€2.50"
                ],
                [
                    "naam" => "Peren",
                    "product_type" => "Fruit",
                    "prijs" => "€1.40",
                    "prijs_per_kilo" => "€1.80"
                ],
                [
                    "naam" => "Mandarijnen",
                    "product_type" => "Fruit",
                    "prijs" => "€1.00",
                    "prijs_per_kilo" => "€1.20"
                ],
                [
                    "naam" => "Aardbeien",
                    "product_type" => "Fruit",
                    "prijs" => "€2.50",
                    "prijs_per_kilo" => "€6.00"
                ],
                [
                    "naam" => "Perziken",
                    "product_type" => "Fruit",
                    "prijs" => "€1.70",
                    "prijs_per_kilo" => "€2.20"
                ],
                [
                    "naam" => "Kiwi",
                    "product_type" => "Fruit",
                    "prijs" => "€0.60",
                    "prijs_per_kilo" => "€1.00"
                ],
                [
                    "naam" => "Watermeloen",
                    "product_type" => "Fruit",
                    "prijs" => "€3.00",
                    "prijs_per_kilo" => "€0.80"
                ],
                [
                    "naam" => "Hazelnootschuimgebakje",
                    "product_type" => "Bakkerij",
                    "prijs" => "€1.70",
                    "prijs_per_stuk" => "€1.70"
                ],
                [
                    "naam" => "Tompoes",
                    "product_type" => "Bakkerij",
                    "prijs" => "€1.80",
                    "prijs_per_stuk" => "€1.80"
                ],
                [
                    "naam" => "Bramentaart",
                    "product_type" => "Bakkerij",
                    "prijs" => "€2.20",
                    "prijs_per_stuk" => "€2.20"
                ],
                [
                    "naam" => "Mueslibol",
                    "product_type" => "Bakkerij",
                    "prijs" => "€1.30",
                    "prijs_per_stuk" => "€1.30"
                ],
                [
                    "naam" => "Kaasstengel",
                    "product_type" => "Bakkerij",
                    "prijs" => "€0.90",
                    "prijs_per_stuk" => "€0.90"
                ],
                [
                    "naam" => "Amandelcroissant",
                    "product_type" => "Bakkerij",
                    "prijs" => "€1.50",
                    "prijs_per_stuk" => "€1.50"
                ],
                [
                    "naam" => "Puddingbroodje",
                    "product_type" => "Bakkerij",
                    "prijs" => "€1.20",
                    "prijs_per_stuk" => "€1.20"
                ],
                [
                    "naam" => "Roggebrood met noten",
                    "product_type" => "Bakkerij",
                    "prijs" => "€1.80",
                    "prijs_per_stuk" => "€1.80"
                ],
                [
                    "naam" => "Bananenbrood",
                    "product_type" => "Bakkerij",
                    "prijs" => "€2.00",
                    "prijs_per_stuk" => "€2.00"
                ],
                [
                    "naam" => "Appelstrudel",
                    "product_type" => "Bakkerij",
                    "prijs" => "€2.50",
                    "prijs_per_stuk" => "€2.50"
                ],
                [
                    "naam" => "Gebakken garnalen",
                    "product_type" => "Vis",
                    "prijs" => "€7.50",
                    "prijs_per_stuk" => "€7.50"
                ],
                [
                    "naam" => "Gestoomde zeebaars",
                    "product_type" => "Vis",
                    "prijs" => "€6.80",
                    "prijs_per_stuk" => "€6.80"
                ],
                [
                    "naam" => "Gerookte forelfilet",
                    "product_type" => "Vis",
                    "prijs" => "€4.20",
                    "prijs_per_stuk" => "€4.20"
                ],
                [
                    "naam" => "Gefrituurde inktvisringen",
                    "product_type" => "Vis",
                    "prijs" => "€5.50",
                    "prijs_per_stuk" => "€5.50"
                ],
                [
                    "naam" => "Tonijn in zonnebloemolie",
                    "product_type" => "Vis",
                    "prijs" => "€3.70",
                    "prijs_per_stuk" => "€3.70"
                ],
                [
                    "naam" => "Gepaneerde vissticks",
                    "product_type" => "Vis",
                    "prijs" => "€2.90",
                    "prijs_per_stuk" => "€2.90"
                ],
                [
                    "naam" => "Zeevruchtensalade",
                    "product_type" => "Vis",
                    "prijs" => "€6.50",
                    "prijs_per_stuk" => "€6.50"
                ],
                [
                    "naam" => "Zalmburger",
                    "product_type" => "Vis",
                    "prijs" => "€4.80",
                    "prijs_per_stuk" => "€4.80"
                ],
                [
                    "naam" => "Kabeljauwburger",
                    "product_type" => "Vis",
                    "prijs" => "€5.20",
                    "prijs_per_stuk" => "€5.20"
                ],
                [
                    "naam" => "Gerookte haring",
                    "product_type" => "Vis",
                    "prijs" => "€3.20",
                    "prijs_per_stuk" => "€3.20"
                ],
                [
                    "naam" => "Kipkarbonades",
                    "product_type" => "Vlees",
                    "prijs" => "€4.50",
                    "prijs_per_kilo" => "€3.50"
                ],
                [
                    "naam" => "Lamsgehakt",
                    "product_type" => "Vlees",
                    "prijs" => "€8.00",
                    "prijs_per_kilo" => "€6.50"
                ],
                [
                    "naam" => "Varkenshaasmedaillons",
                    "product_type" => "Vlees",
                    "prijs" => "€10.50",
                    "prijs_per_kilo" => "€9.00"
                ],
                [
                    "naam" => "Runderworstjes",
                    "product_type" => "Vlees",
                    "prijs" => "€5.20",
                    "prijs_per_kilo" => "€4.00"
                ],
                [
                    "naam" => "Kalfslever",
                    "product_type" => "Vlees",
                    "prijs" => "€9.80",
                    "prijs_per_kilo" => "€8.50"
                ],
                [
                    "naam" => "Eendenborstfilet",
                    "product_type" => "Vlees",
                    "prijs" => "€11.00",
                    "prijs_per_kilo" => "€9.80"
                ],
                [
                    "naam" => "Varkensribeye",
                    "product_type" => "Vlees",
                    "prijs" => "€7.80",
                    "prijs_per_kilo" => "€6.50"
                ],
                [
                    "naam" => "Lamsschouderlapjes",
                    "product_type" => "Vlees",
                    "prijs" => "€8.50",
                    "prijs_per_kilo" => "€7.20"
                ],
                [
                    "naam" => "Kippenvinken",
                    "product_type" => "Vlees",
                    "prijs" => "€6.20",
                    "prijs_per_kilo" => "€5.00"
                ],
                [
                    "naam" => "Runderstooflapjes",
                    "product_type" => "Vlees",
                    "prijs" => "€7.00",
                    "prijs_per_kilo" => "€5.80"
                ],
                [
                    "naam" => "lasagne",
                    "product_type" => "Diepvries",
                    "prijs" => "€4.50",
                    "prijs_per_stuk" => "€4.50"
                ],
                [
                    "naam" => "groentepizza",
                    "product_type" => "Diepvries",
                    "prijs" => "€3.80",
                    "prijs_per_stuk" => "€3.80"
                ],
                [
                    "naam" => "visfilets",
                    "product_type" => "Diepvries",
                    "prijs" => "€5.20",
                    "prijs_per_pak" => "€5.20"
                ],
                [
                    "naam" => "kipschnitzels",
                    "product_type" => "Diepvries",
                    "prijs" => "€6.00",
                    "prijs_per_doos" => "€6.00"
                ],
                [
                    "naam" => "aardappelrösti",
                    "product_type" => "Diepvries",
                    "prijs" => "€2.80",
                    "prijs_per_zak" => "€2.80"
                ],
                [
                    "naam" => "groentelasagne",
                    "product_type" => "Diepvries",
                    "prijs" => "€4.20",
                    "prijs_per_doos" => "€4.20"
                ],
                [
                    "naam" => "taart met slagroom",
                    "product_type" => "Diepvries",
                    "prijs" => "€6.50",
                    "prijs_per_stuk" => "€6.50"
                ],
                [
                    "naam" => "gehaktballen",
                    "product_type" => "Diepvries",
                    "prijs" => "€7.00",
                    "prijs_per_stuk" => "€7.00"
                ],
                [
                    "naam" => "vegetarische burgers",
                    "product_type" => "Diepvries",
                    "prijs" => "€3.50",
                    "prijs_per_doos" => "€3.50"
                ],
                [
                    "naam" => "spinazie",
                    "product_type" => "Diepvries",
                    "prijs" => "€1.50",
                    "prijs_per_pak" => "€1.50"
                ],
                [
                    "naam" => "Watermeloen Limonade",
                    "product_type" => "Dranken",
                    "prijs" => "€2.99",
                    "prijs_per_glas" => "€2.99"
                ],
                [
                    "naam" => "Matcha Latte",
                    "product_type" => "Dranken",
                    "prijs" => "€3.99",
                    "prijs_per_glas" => "€3.99"
                ],
                [
                    "naam" => "Gemberbier",
                    "product_type" => "Dranken",
                    "prijs" => "€1.99",
                    "prijs_per_fles" => "€1.99"
                ],
                [
                    "naam" => "Cranberrysap",
                    "product_type" => "Dranken",
                    "prijs" => "€2.75",
                    "prijs_per_fles" => "€2.75"
                ],
                [
                    "naam" => "Mojito Slush",
                    "product_type" => "Dranken",
                    "prijs" => "€5.50",
                    "prijs_per_glas" => "€5.50"
                ],
                [
                    "naam" => "Ananassap",
                    "product_type" => "Dranken",
                    "prijs" => "€2.25",
                    "prijs_per_fles" => "€2.25"
                ],
                [
                    "naam" => "Wortelsap",
                    "product_type" => "Dranken",
                    "prijs" => "€3.49",
                    "prijs_per_fles" => "€3.49"
                ],
                [
                    "naam" => "Groene Thee",
                    "product_type" => "Dranken",
                    "prijs" => "€1.50",
                    "prijs_per_kopje" => "€1.50"
                ],
                [
                    "naam" => "Kombucha",
                    "product_type" => "Dranken",
                    "prijs" => "€4.99",
                    "prijs_per_fles" => "€4.99"
                ],
                [
                    "naam" => "Perensap",
                    "product_type" => "Dranken",
                    "prijs" => "€2.50",
                    "prijs_per_fles" => "€2.50"
                ],
                [
                    "naam" => "Fudge met zeezout",
                    "product_type" => "Snoep",
                    "prijs" => "€3.25",
                    "prijs_per_zak" => "€3.25"
                ],
                [
                    "naam" => "Fruitige lollies",
                    "product_type" => "Snoep",
                    "prijs" => "€1.25",
                    "prijs_per_stuk" => "€1.25"
                ],
                [
                    "naam" => "Gevulde chocoladekoekjes",
                    "product_type" => "Snoep",
                    "prijs" => "€3.50",
                    "prijs_per_pak" => "€3.50"
                ],
                [
                    "naam" => "Kauwbare frambozensnoepjes",
                    "product_type" => "Snoep",
                    "prijs" => "€1.75",
                    "prijs_per_zak" => "€1.75"
                ],
                [
                    "naam" => "Karamelstokken",
                    "product_type" => "Snoep",
                    "prijs" => "€2.25",
                    "prijs_per_zak" => "€2.25"
                ],
                [
                    "naam" => "Kauwgom met muntsmaak",
                    "product_type" => "Snoep",
                    "prijs" => "€1.00",
                    "prijs_per_pakje" => "€1.00"
                ],
                [
                    "naam" => "Chocolade-amandelen",
                    "product_type" => "Snoep",
                    "prijs" => "€2.99",
                    "prijs_per_zak" => "€2.99"
                ],
                [
                    "naam" => "Zure cola-kauwgom",
                    "product_type" => "Snoep",
                    "prijs" => "€1.25",
                    "prijs_per_zak" => "€1.25"
                ],
                [
                    "naam" => "Marshmallow truffels",
                    "product_type" => "Snoep",
                    "prijs" => "€3.75",
                    "prijs_per_zak" => "€3.75"
                ],
                [
                    "naam" => "Kauwbare perzikringen",
                    "product_type" => "Snoep",
                    "prijs" => "€1.99",
                    "prijs_per_zak" => "€1.99"
                ],
                [
                    "naam" => "Mini-bitterballen",
                    "product_type" => "Snacks",
                    "prijs" => "€4.99",
                    "prijs_per_portie" => "€4.99"
                ],
                [
                    "naam" => "Pittige kippenvleugels",
                    "product_type" => "Snacks",
                    "prijs" => "€5.75",
                    "prijs_per_portie" => "€5.75"
                ],
                [
                    "naam" => "Gefrituurde kaasstengels",
                    "product_type" => "Snacks",
                    "prijs" => "€4.50",
                    "prijs_per_portie" => "€4.50"
                ],
                [
                    "naam" => "Garnalenkroketjes",
                    "product_type" => "Snacks",
                    "prijs" => "€6.25",
                    "prijs_per_portie" => "€6.25"
                ],
                [
                    "naam" => "Mini-satéspiesjes",
                    "product_type" => "Snacks",
                    "prijs" => "€5.50",
                    "prijs_per_portie" => "€5.50"
                ],
                [
                    "naam" => "Gevulde bladerdeeghapjes",
                    "product_type" => "Snacks",
                    "prijs" => "€4.75",
                    "prijs_per_portie" => "€4.75"
                ],
                [
                    "naam" => "Courgette-frietjes",
                    "product_type" => "Snacks",
                    "prijs" => "€4.25",
                    "prijs_per_portie" => "€4.25"
                ],
                [
                    "naam" => "Mini-kaasbroodjes",
                    "product_type" => "Snacks",
                    "prijs" => "€4.50",
                    "prijs_per_portie" => "€4.50"
                ],
                [
                    "naam" => "Gevulde mini-pizza's",
                    "product_type" => "Snacks",
                    "prijs" => "€5.25",
                    "prijs_per_portie" => "€5.25"
                ],
                [
                    "naam" => "Gebakken camembert",
                    "product_type" => "Snacks",
                    "prijs" => "€6.99",
                    "prijs_per_portie" => "€6.99"
                ]

            ]
        ],
        // Hoogvliet
        8 => [
            "products" => [
                [
                    "naam" => "Pastinaak",
                    "product_type" => "Groenten",
                    "prijs" => "€1.50",
                    "prijs_per_kilo" => "€3.00"
                ],
                [
                    "naam" => "Venkel",
                    "product_type" => "Groenten",
                    "prijs" => "€1.80",
                    "prijs_per_kilo" => "€3.60"
                ],
                [
                    "naam" => "Spruitjes",
                    "product_type" => "Groenten",
                    "prijs" => "€1.70",
                    "prijs_per_kilo" => "€3.40"
                ],
                [
                    "naam" => "Rucola",
                    "product_type" => "Groenten",
                    "prijs" => "€1.20",
                    "prijs_per_kilo" => "€2.40"
                ],
                [
                    "naam" => "Paksoi",
                    "product_type" => "Groenten",
                    "prijs" => "€1.60",
                    "prijs_per_kilo" => "€3.20"
                ],
                [
                    "naam" => "Savooikool",
                    "product_type" => "Groenten",
                    "prijs" => "€1.90",
                    "prijs_per_kilo" => "€3.80"
                ],
                [
                    "naam" => "Chinese kool",
                    "product_type" => "Groenten",
                    "prijs" => "€1.50",
                    "prijs_per_kilo" => "€3.00"
                ],
                [
                    "naam" => "Rode bieten",
                    "product_type" => "Groenten",
                    "prijs" => "€1.80",
                    "prijs_per_kilo" => "€3.60"
                ],
                [
                    "naam" => "Koolrabi",
                    "product_type" => "Groenten",
                    "prijs" => "€1.40",
                    "prijs_per_kilo" => "€2.80"
                ],
                [
                    "naam" => "Waterkers",
                    "product_type" => "Groenten",
                    "prijs" => "€1.70",
                    "prijs_per_kilo" => "€3.40"
                ],
                [
                    "naam" => "Meloen",
                    "product_type" => "Fruit",
                    "prijs" => "€2.50",
                    "prijs_per_kilo" => "€1.00"
                ],
                [
                    "naam" => "Appelsienen",
                    "product_type" => "Fruit",
                    "prijs" => "€1.80",
                    "prijs_per_kilo" => "€1.20"
                ],
                [
                    "naam" => "Kersen",
                    "product_type" => "Fruit",
                    "prijs" => "€2.20",
                    "prijs_per_kilo" => "€3.00"
                ],
                [
                    "naam" => "Pruimen",
                    "product_type" => "Fruit",
                    "prijs" => "€1.60",
                    "prijs_per_kilo" => "€2.00"
                ],
                [
                    "naam" => "Perzimmon",
                    "product_type" => "Fruit",
                    "prijs" => "€2.00",
                    "prijs_per_kilo" => "€2.50"
                ],
                [
                    "naam" => "Mango",
                    "product_type" => "Fruit",
                    "prijs" => "€1.90",
                    "prijs_per_kilo" => "€3.00"
                ],
                [
                    "naam" => "Passievrucht",
                    "product_type" => "Fruit",
                    "prijs" => "€1.50",
                    "prijs_per_kilo" => "€4.00"
                ],
                [
                    "naam" => "Peren",
                    "product_type" => "Fruit",
                    "prijs" => "€1.20",
                    "prijs_per_kilo" => "€1.80"
                ],
                [
                    "naam" => "Bramen",
                    "product_type" => "Fruit",
                    "prijs" => "€2.80",
                    "prijs_per_kilo" => "€4.00"
                ],
                [
                    "naam" => "Ananas",
                    "product_type" => "Fruit",
                    "prijs" => "€1.80",
                    "prijs_per_kilo" => "€1.50"
                ],
                [
                    "naam" => "Aardbeientaart",
                    "product_type" => "Bakkerij",
                    "prijs" => "€15.00",
                    "prijs_per_stuk" => "€15.00"
                ],
                [
                    "naam" => "Worstenbroodje",
                    "product_type" => "Bakkerij",
                    "prijs" => "€1.50",
                    "prijs_per_stuk" => "€1.50"
                ],
                [
                    "naam" => "Kruimelvlaai",
                    "product_type" => "Bakkerij",
                    "prijs" => "€10.00",
                    "prijs_per_stuk" => "€10.00"
                ],
                [
                    "naam" => "Honingkoek",
                    "product_type" => "Bakkerij",
                    "prijs" => "€2.00",
                    "prijs_per_stuk" => "€2.00"
                ],
                [
                    "naam" => "Oliebol",
                    "product_type" => "Bakkerij",
                    "prijs" => "€1.20",
                    "prijs_per_stuk" => "€1.20"
                ],
                [
                    "naam" => "Vruchtengebakje",
                    "product_type" => "Bakkerij",
                    "prijs" => "€2.50",
                    "prijs_per_stuk" => "€2.50"
                ],
                [
                    "naam" => "Rozijnenstol",
                    "product_type" => "Bakkerij",
                    "prijs" => "€8.00",
                    "prijs_per_stuk" => "€8.00"
                ],
                [
                    "naam" => "Speculaaskoek",
                    "product_type" => "Bakkerij",
                    "prijs" => "€1.50",
                    "prijs_per_stuk" => "€1.50"
                ],
                [
                    "naam" => "Krentenwegge",
                    "product_type" => "Bakkerij",
                    "prijs" => "€3.50",
                    "prijs_per_stuk" => "€3.50"
                ],
                [
                    "naam" => "Kaas-uienbroodje",
                    "product_type" => "Bakkerij",
                    "prijs" => "€1.80",
                    "prijs_per_stuk" => "€1.80"
                ],
                [
                    "naam" => "Gepaneerde kabeljauwfilet",
                    "product_type" => "Vis",
                    "prijs" => "€4.50",
                    "prijs_per_stuk" => "€4.50"
                ],
                [
                    "naam" => "Zeebaarsfilet in citroenbotersaus",
                    "product_type" => "Vis",
                    "prijs" => "€6.20",
                    "prijs_per_stuk" => "€6.20"
                ],
                [
                    "naam" => "Gerookte makreel",
                    "product_type" => "Vis",
                    "prijs" => "€3.80",
                    "prijs_per_stuk" => "€3.80"
                ],
                [
                    "naam" => "Gestoomde forelfilet met kruiden",
                    "product_type" => "Vis",
                    "prijs" => "€5.50",
                    "prijs_per_stuk" => "€5.50"
                ],
                [
                    "naam" => "Visnuggets",
                    "product_type" => "Vis",
                    "prijs" => "€3.00",
                    "prijs_per_stuk" => "€3.00"
                ],
                [
                    "naam" => "Tonijnsteak in teriyakisaus",
                    "product_type" => "Vis",
                    "prijs" => "€7.00",
                    "prijs_per_stuk" => "€7.00"
                ],
                [
                    "naam" => "Zalmfilet met kruidenkorst",
                    "product_type" => "Vis",
                    "prijs" => "€8.50",
                    "prijs_per_stuk" => "€8.50"
                ],
                [
                    "naam" => "Gestoomde sardines",
                    "product_type" => "Vis",
                    "prijs" => "€4.20",
                    "prijs_per_stuk" => "€4.20"
                ],
                [
                    "naam" => "Mosselkroketjes",
                    "product_type" => "Vis",
                    "prijs" => "€2.80",
                    "prijs_per_stuk" => "€2.80"
                ],
                [
                    "naam" => "Garnalensalade",
                    "product_type" => "Vis",
                    "prijs" => "€6.00",
                    "prijs_per_stuk" => "€6.00"
                ],
                [
                    "naam" => "Kippenfilet",
                    "product_type" => "Vlees",
                    "prijs" => "€5.50",
                    "prijs_per_kilo" => "€4.20"
                ],
                [
                    "naam" => "Lamsboutsteak",
                    "product_type" => "Vlees",
                    "prijs" => "€12.80",
                    "prijs_per_kilo" => "€10.50"
                ],
                [
                    "naam" => "Varkensrollade",
                    "product_type" => "Vlees",
                    "prijs" => "€9.80",
                    "prijs_per_kilo" => "€8.50"
                ],
                [
                    "naam" => "Runderbraadstuk",
                    "product_type" => "Vlees",
                    "prijs" => "€10.50",
                    "prijs_per_kilo" => "€9.00"
                ],
                [
                    "naam" => "Kalfsschnitzels",
                    "product_type" => "Vlees",
                    "prijs" => "€9.50",
                    "prijs_per_kilo" => "€8.20"
                ],
                [
                    "naam" => "Eendenvleugels",
                    "product_type" => "Vlees",
                    "prijs" => "€6.50",
                    "prijs_per_kilo" => "€5.20"
                ],
                [
                    "naam" => "Varkenshaasjes",
                    "product_type" => "Vlees",
                    "prijs" => "€10.50",
                    "prijs_per_kilo" => "€9.00"
                ],
                [
                    "naam" => "Lamsbout",
                    "product_type" => "Vlees",
                    "prijs" => "€14.00",
                    "prijs_per_kilo" => "€11.80"
                ],
                [
                    "naam" => "Kippenrollade",
                    "product_type" => "Vlees",
                    "prijs" => "€5.50",
                    "prijs_per_kilo" => "€4.50"
                ],
                [
                    "naam" => "Runderbiefstuk",
                    "product_type" => "Vlees",
                    "prijs" => "€12.80",
                    "prijs_per_kilo" => "€10.50"
                ],
                [
                    "naam" => "pizza Margherita",
                    "product_type" => "Diepvries",
                    "prijs" => "€3.50",
                    "prijs_per_stuk" => "€3.50"
                ],
                [
                    "naam" => "groentemix",
                    "product_type" => "Diepvries",
                    "prijs" => "€2.80",
                    "prijs_per_pak" => "€2.80"
                ],
                [
                    "naam" => "vissticks",
                    "product_type" => "Diepvries",
                    "prijs" => "€4.20",
                    "prijs_per_doos" => "€4.20"
                ],
                [
                    "naam" => "kipnuggets",
                    "product_type" => "Diepvries",
                    "prijs" => "€3.00",
                    "prijs_per_doos" => "€3.00"
                ],
                [
                    "naam" => "aardappelkroketten",
                    "product_type" => "Diepvries",
                    "prijs" => "€2.50",
                    "prijs_per_zak" => "€2.50"
                ],
                [
                    "naam" => "groenteburgers",
                    "product_type" => "Diepvries",
                    "prijs" => "€3.80",
                    "prijs_per_doos" => "€3.80"
                ],
                [
                    "naam" => "fruittaart",
                    "product_type" => "Diepvries",
                    "prijs" => "€5.50",
                    "prijs_per_stuk" => "€5.50"
                ],
                [
                    "naam" => "biefstuk",
                    "product_type" => "Diepvries",
                    "prijs" => "€8.00",
                    "prijs_per_stuk" => "€8.00"
                ],
                [
                    "naam" => "pasta met saus",
                    "product_type" => "Diepvries",
                    "prijs" => "€4.50",
                    "prijs_per_pak" => "€4.50"
                ],
                [
                    "naam" => "broccoli",
                    "product_type" => "Diepvries",
                    "prijs" => "€1.80",
                    "prijs_per_pak" => "€1.80"
                ],[
                    "naam" => "Groene Thee",
                    "product_type" => "Dranken",
                    "prijs" => "€1.50",
                    "prijs_per_kopje" => "€1.50"
                ],
                [
                    "naam" => "Kombucha",
                    "product_type" => "Dranken",
                    "prijs" => "€4.99",
                    "prijs_per_fles" => "€4.99"
                ],
                [
                    "naam" => "Perensap",
                    "product_type" => "Dranken",
                    "prijs" => "€2.50",
                    "prijs_per_fles" => "€2.50"
                ],
                [
                    "naam" => "Aloë Vera drank",
                    "product_type" => "Dranken",
                    "prijs" => "€3.75",
                    "prijs_per_fles" => "€3.75"
                ],
                [
                    "naam" => "Kersenlimonade",
                    "product_type" => "Dranken",
                    "prijs" => "€3.25",
                    "prijs_per_fles" => "€3.25"
                ],
                [
                    "naam" => "Cactusvijgensap",
                    "product_type" => "Dranken",
                    "prijs" => "€4.50",
                    "prijs_per_fles" => "€4.50"
                ],
                [
                    "naam" => "Hibiscusthee",
                    "product_type" => "Dranken",
                    "prijs" => "€2.99",
                    "prijs_per_kopje" => "€2.99"
                ],
                [
                    "naam" => "Ginseng drank",
                    "product_type" => "Dranken",
                    "prijs" => "€5.99",
                    "prijs_per_fles" => "€5.99"
                ],
                [
                    "naam" => "Kefir",
                    "product_type" => "Dranken",
                    "prijs" => "€3.25",
                    "prijs_per_fles" => "€3.25"
                ],
                [
                    "naam" => "Chai Latte",
                    "product_type" => "Dranken",
                    "prijs" => "€4.50",
                    "prijs_per_glas" => "€4.50"
                ],
                [
                    "naam" => "Kauwbare frambozensnoepjes",
                    "product_type" => "Snoep",
                    "prijs" => "€1.75",
                    "prijs_per_zak" => "€1.75"
                ],
                [
                    "naam" => "Karamelstokken",
                    "product_type" => "Snoep",
                    "prijs" => "€2.25",
                    "prijs_per_zak" => "€2.25"
                ],
                [
                    "naam" => "Kauwgom met muntsmaak",
                    "product_type" => "Snoep",
                    "prijs" => "€1.00",
                    "prijs_per_pakje" => "€1.00"
                ],
                [
                    "naam" => "Chocolade-amandelen",
                    "product_type" => "Snoep",
                    "prijs" => "€2.99",
                    "prijs_per_zak" => "€2.99"
                ],
                [
                    "naam" => "Zure cola-kauwgom",
                    "product_type" => "Snoep",
                    "prijs" => "€1.25",
                    "prijs_per_zak" => "€1.25"
                ],
                [
                    "naam" => "Marshmallow truffels",
                    "product_type" => "Snoep",
                    "prijs" => "€3.75",
                    "prijs_per_zak" => "€3.75"
                ],
                [
                    "naam" => "Kauwbare perzikringen",
                    "product_type" => "Snoep",
                    "prijs" => "€1.99",
                    "prijs_per_zak" => "€1.99"
                ],
                [
                    "naam" => "Chocolade-hazelnootpraliné",
                    "product_type" => "Snoep",
                    "prijs" => "€3.50",
                    "prijs_per_zak" => "€3.50"
                ],
                [
                    "naam" => "Zure aardbeilinten",
                    "product_type" => "Snoep",
                    "prijs" => "€1.75",
                    "prijs_per_zak" => "€1.75"
                ],
                [
                    "naam" => "Kauwgom met fruitsmaak",
                    "product_type" => "Snoep",
                    "prijs" => "€0.75",
                    "prijs_per_pakje" => "€0.75"
                ],
                [
                    "naam" => "Mini-sushi assortiment",
                    "product_type" => "Snacks",
                    "prijs" => "€7.50",
                    "prijs_per_portie" => "€7.50"
                ],
                [
                    "naam" => "Knoflookgarnalen",
                    "product_type" => "Snacks",
                    "prijs" => "€6.75",
                    "prijs_per_portie" => "€6.75"
                ],
                [
                    "naam" => "Gebakken auberginestroken",
                    "product_type" => "Snacks",
                    "prijs" => "€4.99",
                    "prijs_per_portie" => "€4.99"
                ],
                [
                    "naam" => "Mini-bruschetta met mozzarella",
                    "product_type" => "Snacks",
                    "prijs" => "€5.25",
                    "prijs_per_portie" => "€5.25"
                ],
                [
                    "naam" => "Gefrituurde calamari",
                    "product_type" => "Snacks",
                    "prijs" => "€6.50",
                    "prijs_per_portie" => "€6.50"
                ],
                [
                    "naam" => "Mini-pommes duchesse",
                    "product_type" => "Snacks",
                    "prijs" => "€4.25",
                    "prijs_per_portie" => "€4.25"
                ],
                [
                    "naam" => "Gevulde mini-paprika's met roomkaas",
                    "product_type" => "Snacks",
                    "prijs" => "€5.50",
                    "prijs_per_portie" => "€5.50"
                ],
                [
                    "naam" => "Gefrituurde mozzarellasticks",
                    "product_type" => "Snacks",
                    "prijs" => "€4.75",
                    "prijs_per_portie" => "€4.75"
                ],
                [
                    "naam" => "Mini-gehaktballetjes in pittige saus",
                    "product_type" => "Snacks",
                    "prijs" => "€5.99",
                    "prijs_per_portie" => "€5.99"
                ],
                [
                    "naam" => "Gevulde jalapeño's met roomkaas",
                    "product_type" => "Snacks",
                    "prijs" => "€5.25",
                    "prijs_per_portie" => "€5.25"
                ],
                [
                    "naam" => "Mini-worstenbroodjes",
                    "product_type" => "Snacks",
                    "prijs" => "€4.50",
                    "prijs_per_portie" => "€4.50"
                ]

            ]
        ]
    ];
    return $tags[$id];
}