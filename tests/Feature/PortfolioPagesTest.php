<?php

namespace Tests\Feature;

use Tests\TestCase;

class PortfolioPagesTest extends TestCase
{
    public function test_all_portfolio_pages_render_successfully(): void
    {
        $pages = [
            '/' => 'Rizki Zonanta',
            '/karya' => 'Yang sudah',
            '/tentang' => 'Halo,',
            '/kontak' => 'Mari mulai',
            '/jelajahi' => 'Mau membuka',
            '/sertifikat' => 'Sertifikat akan ditambahkan.',
        ];

        foreach ($pages as $path => $content) {
            $this->get($path)
                ->assertOk()
                ->assertSee($content);
        }
    }
}
