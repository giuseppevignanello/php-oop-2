<?php

$computers = [
    new Personal(
        "Lenovo",
        "ThinkPad X1 Carbon",
        new Monitor("FHD IPS Display", 14),
        new Keyboard("Backlit Keyboard", "English"),
        16,
        "512GB NVMe SSD",
        "Intel Core i7-1165G7",
        "https://picsum.photos/300/200",
        "4-cell Li-Polymer",
        "TrackPoint and multi-touch touchpad",
        "Carbon Fiber Chassis"
    ),

    new Desktop(
        "Dell",
        "XPS Tower",
        new Monitor("UltraSharp U2720Q", 24),
        new Keyboard("KB216 Wired Keyboard", "English"),
        16,
        "1TB",
        "Intel Core i7",
        "https://picsum.photos/300/200",
        "ASUS Prime Z590-A",
        "NVIDIA GeForce RTX 3080",
        "850w Power Supply"
    ),


    new Personal(
        "Apple",
        "MacBook Pro",
        new Monitor("13.3\" Retina Display", 13),
        new Keyboard("Magic Keyboard", "English"),
        16,
        "1TB SSD",
        "Intel Core i7",
        "https://picsum.photos/300/200",
        "Li-Poly",
        "Force Touch trackpad",
        "Aluminum Chassis"
    ),

    new Desktop(
        "HP",
        "Pavilion Gaming Desktop",
        new Monitor("24\" Full HD Display", 24),
        new Keyboard("HP Gaming Keyboard", "English"),
        8,
        "512GB SSD",
        "AMD Ryzen 5 3600",
        "https://picsum.photos/300/200",
        "ASUS Prime B475M-A",
        "NVIDIA GeForce GTX 1660 Ti",
        "750W Power Supply"
    ),




];
