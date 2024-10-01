<?php
    $menu = [
      [
        "nama" => "Beranda"
      ],
      [
        "nama" => "Berita",
        "SubMenu" => [
            [
                "nama" => "Wisata",
                "subMenu" => [
                    [
                        "nama" => "Pantai"
                    ],
                    [
                        "nama" => "Gunung"
                    ]
                ]
            ],
            [
                "nama" => "Kuliner"
            ],
            [
                "nama" => "Hiburan"
            ]
        ]
      ],
      [
        "nama" => "Tentang"
      ],
      [
        "nama" => "Kontak"
      ],
    ];

    function tampilkanMenubertingkat (array $menu){
        echo "<ul>";
        foreach ($menu as $key => $item) {
            echo "<li> {$item['nama']} </li>";
            // Cek submenu
            if (isset($item['SubMenu'])) {
                tampilkanMenubertingkat($item['SubMenu']);
            } else if (isset($item['subMenu'])) { 
                tampilkanMenubertingkat($item['subMenu']);
            }
        };
        echo "</ul>";
    }

    tampilkanMenubertingkat($menu);
?>