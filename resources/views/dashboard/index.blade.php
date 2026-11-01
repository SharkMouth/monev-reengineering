@extends('layouts.app')

@section('content')
<div class="space-y-6">
    <div>
        <h1 class="text-2xl font-bold text-gray-900">Dashboard</h1>
        <p class="mt-1 text-sm text-gray-500">
            Welcome back! Here's an overview of your cooperative.
        </p>
    </div>

    {{-- Summary cards --}}
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 xl:grid-cols-4">
        @foreach ([
        ['label' => 'Total Anggota', 'value' => '1,250', 'icon' => '👥'],
        ['label' => 'Total Pinjaman', 'value' => 'Rp 850 jt', 'icon' => '💰'],
        ['label' => 'Total Simpanan', 'value' => 'Rp 1,2 M', 'icon' => '🏦'],
        ['label' => 'Angsuran Hari Ini', 'value' => 'Rp 12,5 jt', 'icon' => '📈'],
        ] as $stat)
        <div class="rounded-xl border border-gray-200 bg-white p-5 shadow-sm">
            <div class="flex items-center justify-between">
                <p class="text-sm font-medium text-gray-500">
                    {{ $stat['label'] }}
                </p>
                <span class="text-xl">{{ $stat['icon'] }}</span>
            </div>

            <p class="mt-3 text-2xl font-bold text-gray-900">
                {{ $stat['value'] }}
            </p>
        </div>
        @endforeach
    </div>

    {{-- Main dashboard content --}}
    <div class="grid grid-cols-1 gap-6 xl:grid-cols-3">
        <div class="rounded-xl border border-gray-200 bg-white p-5 shadow-sm xl:col-span-2">
            <h2 class="text-lg font-semibold text-gray-900">
                Transaksi Terbaru
            </h2>

            <div class="mt-4 overflow-x-auto">
                <table class="w-full text-left text-sm">
                    <thead class="border-b border-gray-200 text-gray-500">
                        <tr>
                            <th class="px-3 py-3 font-medium">Anggota</th>
                            <th class="px-3 py-3 font-medium">Jenis</th>
                            <th class="px-3 py-3 font-medium">Tanggal</th>
                            <th class="px-3 py-3 text-right font-medium">Nominal</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-100">
                        @foreach ([
                        ['name' => 'Budi Santoso', 'type' => 'Simpanan', 'date' => '01 Nov 2026', 'amount' => 'Rp 500.000'],
                        ['name' => 'Siti Aminah', 'type' => 'Angsuran', 'date' => '01 Nov 2026', 'amount' => 'Rp 750.000'],
                        ['name' => 'Andi Wijaya', 'type' => 'Pinjaman', 'date' => '31 Okt 2026', 'amount' => 'Rp 5.000.000'],
                        ] as $transaction)
                        <tr>
                            <td class="px-3 py-4 font-medium text-gray-900">
                                {{ $transaction['name'] }}
                            </td>
                            <td class="px-3 py-4 text-gray-600">
                                {{ $transaction['type'] }}
                            </td>
                            <td class="px-3 py-4 text-gray-600">
                                {{ $transaction['date'] }}
                            </td>
                            <td class="px-3 py-4 text-right font-medium text-gray-900">
                                {{ $transaction['amount'] }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="rounded-xl border border-gray-200 bg-white p-5 shadow-sm">
            <h2 class="text-lg font-semibold text-gray-900">
                Periode Aktif
            </h2>

            <p class="mt-4 text-sm text-gray-500">Periode berjalan</p>
            <p class="mt-1 text-xl font-bold text-gray-900">
                November 2026
            </p>

            <div class="mt-5 rounded-lg bg-green-50 p-3">
                <p class="text-sm font-medium text-green-700">
                    Status: Aktif
                </p>
            </div>
        </div>
    </div>
</div>
@endsection