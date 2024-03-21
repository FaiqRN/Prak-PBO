<?php

$menu = [
    [
        "Nama" => "Beranda"
    ],
    [
        "Nama" => "Berita",
        "subMenu" => [
            [
                "Nama" => "Wisata",
                "subMenu" => [
                    [
                        "Nama" => "Pantai"
                    ],
                    [
                        "Nama" => "Gunung"
                    ]
                ]
            ],
            [
                "Nama" => "Kuliner"
            ],
            [
                "Nama" => "Hiburan"
            ]
        ]
    ],
    [
        "Nama" => "Tentang"
    ],
    [
        "Nama" => "Kontak"
    ]
];

function tampilkanMenuBertingkat(array $menu) {
    echo "<ul>";
    foreach ($menu as $key => $item) {
        echo "<li>{$item['Nama']}</li>"; 
        if (isset($item['subMenu'])) {
            tampilkanMenuBertingkat($item['subMenu']); 
        }
    }
    echo "</ul>";
}
tampilkanMenuBertingkat($menu);
?>
