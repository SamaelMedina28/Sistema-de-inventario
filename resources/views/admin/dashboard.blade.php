<x-admin-layout :breadcrumbs="[['name' => 'Dashboard', 'href' => route('admin.dashboard')], ['name' => 'Home']]" title='Dashboard'>
    <x-slot name="action">
        <a href="{{ route('admin.dashboard') }}"
            class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
            <i class="fas fa-users me-2"></i> Users
        </a>
    </x-slot>
    <h1>Dashboard</h1>
    <x-button>
        <i class="fas fa-users me-2"></i> Users
    </x-button>
    <x-wireui-button>
        <i class="fas fa-users me-2"></i> Users
    </x-wireui-button>
</x-admin-layout>
