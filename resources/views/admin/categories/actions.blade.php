<div class="flex items-center space-x-2">
    <x-wireui-button href="{{ route('admin.categories.edit', $category->id) }}" label="Edit" color="blue" />
    <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" class="delete-form">
        @csrf
        @method('DELETE')
        <x-wireui-button type="submit" label="Delete" color="red" />
    </form>
</div>