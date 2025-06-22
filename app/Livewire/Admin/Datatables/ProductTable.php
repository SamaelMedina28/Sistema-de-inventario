<?php

namespace App\Livewire\Admin\Datatables;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;

class ProductTable extends DataTableComponent
{
    // protected $model = Product::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setDefaultSort('id', 'desc');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Name", "name")
                ->sortable()
                ->searchable(),
            Column::make("Category", "category.name")
                ->sortable()
                ->searchable(),
            Column::make("Price", "price")
                ->sortable(),
            Column::make('Actions')
                ->label(function ($row) {
                    return view('admin.products.actions', ['product' => $row]);
                })
        ];
    }

    public function builder(): Builder
    {
        return Product::query()->with('category');
    }
}
