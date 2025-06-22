<x-admin-layout :breadcrumbs="[['name' => 'Dashboard', 'href' => route('admin.dashboard')], ['name' => 'Products']]" title='Products'>
    <x-slot name="actions">
        <x-wireui-button flat positive label="Create" href="{{ route('admin.products.create') }}" />
    </x-slot>
    <x-wireui-card>
        @livewire('admin.datatables.product-table')
    </x-wireui-card>
</x-admin-layout>
