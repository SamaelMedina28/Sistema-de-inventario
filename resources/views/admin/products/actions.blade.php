<div class="flex items-center space-x-2">
    <x-wireui-button href="{{ route('admin.products.edit', $product->id) }}" label="Edit" color="blue" />
    <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" class="delete-form">
        @csrf
        @method('DELETE')
        <x-wireui-button type="submit" label="Delete" color="red" />
    </form>
</div>