<div>
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg">
            <button type="submit"
                class="text-white bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 mb-3"
                x-show="type == 'list'">Tambah</button>
            <x-form.search />
            <div class="grid grid-cols-3 gap-4 mb-4">
                <x-card.product />
                <x-card.product />
                <x-card.product />
                <x-card.product />
                <x-card.product />
                <x-card.product />
            </div>
        </div>
    </div>
</div>
</div>
