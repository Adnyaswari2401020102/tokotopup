<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopupController extends Controller
{

    private $games = [
        1 => [
            'nama' => 'Mobile Legends',
            'produk' => [
                ['id' => 1, 'nama' => '86 Diamond', 'harga' => 20000],
                ['id' => 2, 'nama' => '172 Diamond', 'harga' => 40000],
            ]
        ],
        2 => [
            'nama' => 'Free Fire',
            'produk' => [
                ['id' => 3, 'nama' => '70 Diamond', 'harga' => 10000],
                ['id' => 4, 'nama' => '140 Diamond', 'harga' => 20000],
            ]
        ]
    ];

    public function index()
    {
        return view('topup', [
            'games' => $this->games,
            'transactions' => session('transactions', [])
        ]);
    }

    public function store(Request $request)
    {
        $data = [
            'nama' => $request->nama,
            'user_id' => $request->user_id,
            'game' => $request->game,
            'produk' => $request->produk,
            'status' => 'pending'
        ];

        session()->push('transactions', $data);

        return redirect()->back()->with('success', 'Top Up Berhasil (Simulasi)');
    }
}
