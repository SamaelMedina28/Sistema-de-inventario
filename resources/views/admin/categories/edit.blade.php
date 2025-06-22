<x-admin-layout :breadcrumbs="[['name' => 'Dashboard', 'href' => route('admin.dashboard')], ['name' => 'Categories', 'href' => route('admin.categories.index')], ['name' => 'Edit']]" title='Category'>
    <x-wireui-card>
        <form action="{{ route('admin.categories.update', $category->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')
            <x-wireui-input name="name" label="Name" placeholder="Category name" value="{{ old('name', $category->name) }}"/>
            <x-wireui-input name="description" label="Description" placeholder="Category description" value="{{ old('description', $category->description) }}"/>
            <div class="flex justify-end space-x-2">
                <x-wireui-button flat negative label="Cancel" href="{{ route('admin.categories.index') }}" />
                <x-button type="submit">
                    Update
                </x-button>
            </div>
        </form>
    </x-wireui-card>
</x-admin-layout>
