<?php

namespace App\Controllers;

class Display extends BaseController
{
    public function index()
    {
        $data = [
            'kelompok' => session()->get('kelompok') ?? 'Kelompok 1',
            'grup' => session()->get('grup') ?? 'Grup 1',

            'instansi' => [
                [
                    'nama' => 'BAPENDA',
                    'logo' => 'bapenda.png',
                    'nomor' => '11',
                    'status' => 'Aktif',
                ],
                [
                    'nama' => 'BPKD',
                    'logo' => 'bpkd.png',
                    'nomor' => '-',
                    'status' => 'Menunggu',
                ],
                [
                    'nama' => 'BPJS TK',
                    'logo' => 'bpjstk.png',
                    'nomor' => '-',
                    'status' => 'Menunggu',
                ],
                [
                    'nama' => 'KEJARI',
                    'logo' => 'kejari.png',
                    'nomor' => '-',
                    'status' => 'Menunggu',
                ],
            ],

            'antrean' => [
                [
                    'nomor' => 'A-002',
                    'jam' => '10:17',
                    'loket' => 'SAMSAT',
                ],
                [
                    'nomor' => 'B-001',
                    'jam' => '10:16',
                    'loket' => 'BPKD',
                ],
                [
                    'nomor' => 'A-006',
                    'jam' => '10:20',
                    'loket' => 'DISNAKER',
                ],
                [
                    'nomor' => 'C-003',
                    'jam' => '10:19',
                    'loket' => 'BPJS TK',
                ],
                [
                    'nomor' => 'D-004',
                    'jam' => '10:20',
                    'loket' => 'PENGADILAN AGAMA',
                ],
                [
                    'nomor' => 'E-005',
                    'jam' => '10:20',
                    'loket' => 'PDAM',
                ],
                [
                    'nomor' => 'F-012',
                    'jam' => '14:28',
                    'loket' => 'DUKCAPIL',
                ],
                [
                    'nomor' => 'G-013',
                    'jam' => '14:37',
                    'loket' => 'BAPENDA',
                ],
            ],
        ];

        return view('display/index', $data);
    }
}
