<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DigitalArt;

class DigitalArtSeeder extends Seeder
{
    public function run(): void
    {
        $arts = [
            [
                'title' => 'Cyberpunk City Dusk',
                'artist' => 'Alex Rivera',
                'resolution' => '3840 x 2160 (4K)',
                'price' => 250000,
                'image' => 'gambar1.jpeg',
                'software_used' => 'Adobe Photoshop, Blender'
            ],
            [
                'title' => 'Neon Dreams & Floating Islands',
                'artist' => 'Maya Lin',
                'resolution' => '7680 x 4320 (8K)',
                'price' => 450000,
                'image' => 'gambar2.jpeg',
                'software_used' => 'Procreate, Clip Studio Paint'
            ],
            [
                'title' => 'Galactic Horizon Concept',
                'artist' => 'Rian Hidayat',
                'resolution' => '3840 x 2160 (4K)',
                'price' => 300000,
                'image' => 'gambar3.jpeg',
                'software_used' => 'Photoshop, Krita'
            ],
            [
                'title' => 'Fantasy Forest Guardian',
                'artist' => 'Siti Nurhaliza',
                'resolution' => '2560 x 1440 (2K)',
                'price' => 180000,
                'image' => 'gambar4.jpeg',
                'software_used' => 'Corel Painter, Photoshop'
            ],
            [
                'title' => 'Abstract Mindscapes #09',
                'artist' => 'David Vance',
                'resolution' => '4000 x 4000 (Square)',
                'price' => 350000,
                'image' => 'gambar5.jpeg',
                'software_used' => 'Illustrator, Cinema 4D'
            ],
            [
                'title' => 'Surreal Ocean Above Clouds',
                'artist' => 'Elena Rostova',
                'resolution' => '3840 x 2160 (4K)',
                'price' => 280000,
                'image' => 'gambar6.jpeg',
                'software_used' => 'Procreate, Photoshop'
            ],
        ];

        foreach ($arts as $art) {
            DigitalArt::create($art);
        }
    }
}