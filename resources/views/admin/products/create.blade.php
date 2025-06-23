<x-admin-layout :breadcrumbs="[['name' => 'Dashboard', 'href' => route('admin.dashboard')], ['name' => 'Products', 'href' => route('admin.products.index')], ['name' => 'Create']]" title='Product'>
    <x-wireui-card>
        <form action="{{ route('admin.products.store') }}" method="POST" class="space-y-4">
            @csrf
            <x-wireui-input name="name" label="Name" placeholder="Product name" value="{{ old('name') }}"/>
            <x-wireui-input name="description" label="Description" placeholder="Product description" value="{{ old('description') }}"/>
            <x-wireui-input name="price" type="number" step="0.01" label="Price" placeholder="Product price" value="{{ old('price') }}"/>
            <x-wireui-native-select name="category_id" label="Category">
                <option selected disabled>Select a category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" @selected(old('category_id')==$category->id)>
                        {{ $category->name }}
                    </option>
                @endforeach
            </x-wireui-native-select>

            <div class="flex justify-end space-x-2">
                <x-wireui-button flat negative label="Cancel" href="{{ route('admin.products.index') }}" />
                <x-button type="submit">
                    Create
                </x-button>
            </div>
        </form>
    </x-wireui-card>
</x-admin-layout>
