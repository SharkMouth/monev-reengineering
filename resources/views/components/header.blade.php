<header class="flex h-[55px] items-center justify-between border-b border-gray-200 bg-white px-5 max-md:px-2.5">
    <div class="flex flex-col">
        <strong class="text-[13px] font-medium">
            KSP SEJAHTERA ABADI
        </strong>

        <span class="text-[11px]">
            ROYAL PARK
        </span>
    </div>

    <div class="flex items-center gap-3">
        <span class="text-[13px] max-md:hidden">
            Last access : {{ now()->format('Y M d') }}
        </span>

        <button
            type="button"
            class="rounded bg-red-600 px-3 py-1.5 text-xs font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
            Logout
        </button>
    </div>
</header>