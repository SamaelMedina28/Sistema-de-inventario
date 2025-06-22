<x-admin-layout :breadcrumbs="[['name' => 'Dashboard', 'href' => route('admin.dashboard')], ['name' => 'Categories', 'href' => route('admin.categories.index')], ['name' => 'Create']]" title='Category'>
    <x-wireui-card>
        <form action="{{ route('admin.categories.store') }}" method="POST" class="space-y-4">
            @csrf
            <x-wireui-input name="name" label="Name" placeholder="Category name" value="{{ old('name') }}"/>
            <x-wireui-textarea name="description" label="Description" placeholder="Category description">
                {{ old('description') }}
            </x-wireui-textarea>
            <div class="flex justify-end space-x-2">
                <x-wireui-button flat negative label="Cancel" href="{{ route('admin.categories.index') }}" />
                <x-button type="submit">
                    Create
                </x-button>
            </div>
        </form>
    </x-wireui-card>
</x-admin-layout>
