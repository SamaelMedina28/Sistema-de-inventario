<x-admin-layout :breadcrumbs="[['name' => 'Dashboard', 'href' => route('admin.dashboard')], ['name' => 'Categories']]" title='Categories'>
    <x-slot name="action">
        <x-wireui-button color="blue" href="{{ route('admin.categories.create') }}" label="Create" />
    </x-slot>
    @livewire('admin.datatables.category-table')
</x-admin-layout>
