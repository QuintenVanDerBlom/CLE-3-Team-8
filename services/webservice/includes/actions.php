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
                ]
            ]
        ]
    ];
    return $tags[$id];
}