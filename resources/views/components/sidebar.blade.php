<aside
    x-data="{ laporanOpen: false }"
    class="sticky top-0 h-screen w-[228px] shrink-0 overflow-y-auto border-r border-gray-200 bg-white max-md:w-[60px]">
    {{-- Sidebar brand --}}
    <div class="flex min-h-[55px] items-center gap-2.5 border-b border-gray-100 p-3 max-md:justify-center max-md:p-2">
        <div class="text-[30px] text-sky-600">
            <i class="bi bi-box"></i>
        </div>

        <div class="flex flex-col max-md:hidden">
            <strong class="text-xs font-semibold">
                KSP SEJAHTERA ABADI
            </strong>
            <small class="text-[11px] text-gray-600">
                ROYAL PARK
            </small>
        </div>
    </div>

    {{-- Sidebar search --}}
    <div class="flex p-3 max-md:hidden">
        <input
            type="text"
            placeholder="Search..."
            class="min-w-0 flex-1 rounded-l border border-gray-300 px-2.5 py-[7px] text-sm outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500">

        <button
            type="button"
            class="rounded-r border border-l-0 border-gray-300 bg-white px-3 hover:bg-gray-50">
            <i class="bi bi-search"></i>
        </button>
    </div>

    {{-- Navigation --}}
    <nav class="space-y-1">
        {{-- Dashboard --}}
        <a
            href="{{ url('/dashboard') }}"
            class="flex w-full items-center gap-2 rounded px-3.5 py-[11px] text-left text-sky-700 no-underline hover:bg-gray-100 max-md:justify-center max-md:px-1">
            <i class="bi bi-speedometer2"></i>
            <span class="max-md:hidden">Dashboard</span>
        </a>

        {{-- Jenis Laporan dropdown --}}
        <div>
            <button
                type="button"
                @click="laporanOpen = !laporanOpen"
                :aria-expanded="laporanOpen"
                class="flex w-full items-center gap-2 bg-white px-3.5 py-[11px] text-left text-sky-700 hover:bg-gray-100 max-md:justify-center max-md:px-1">
                <i class="bi bi-file-earmark-bar-graph"></i>

                <span class="max-md:hidden">
                    Jenis Laporan
                </span>

                <i
                    class="bi bi-chevron-down ml-auto text-[10px] transition-transform max-md:hidden"
                    :class="{ 'rotate-180': laporanOpen }"></i>
            </button>

            <div
                x-cloak
                x-show="laporanOpen"
                x-transition
                class="bg-gray-50">
                <a
                    href="{{ url('/laporan/kartu-angsuran-anggota') }}"
                    class="block px-3 py-2.5 pl-9 text-sm text-sky-700 no-underline hover:bg-gray-100 max-md:hidden">
                    Kartu Angsuran Anggota
                </a>

                <a
                    href="{{ url('/laporan/pinjaman-belum-bayar') }}"
                    class="block px-3 py-2.5 pl-9 text-sm text-sky-700 no-underline hover:bg-gray-100 max-md:hidden">
                    Pinjaman Belum Bayar
                </a>
            </div>
        </div>
    </nav>
</aside>