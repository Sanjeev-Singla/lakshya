<?php

namespace App\DataTables;

use App\Models\Product;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class ProductDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);

        # Edit Is actvie column
        $dataTable->editColumn('is_active',function(Product $product){
            if ($product->is_active == \Config::get('constant.Product.is_active.true')) {
                return '<span class="bg-green" style="padding:5px;border-radius: 5px;">Active</span>';
            }else{
                return '<span class="bg-red" style="padding:5px;border-radius: 5px;">Inactive</span>';
            }
        })->rawColumns(['is_active','action']);
        # serial number
        $dataTable->addIndexColumn();

        return $dataTable->addColumn('action', 'admin.products.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Product $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Product $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->addAction(['width' => '120px', 'printable' => false])
            ->parameters([
                'dom'       => 'Bfrtip',
                'stateSave' => true,
                'order'     => [[1, 'desc']],
                'buttons'   => [
                    /* ['extend' => 'create', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'export', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'print', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'reset', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'reload', 'className' => 'btn btn-default btn-sm no-corner',], */
                ],
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'sr_no'         => ['data'  => 'DT_RowIndex','name'=>'DT_RowIndex','title'=>'Sr.No.','orderable'=>false,'searchable'=>false],
            'id'            => ['visible'=>false],
            'title',
            'descritpion',
            'currency',
            'price',
            'available_units',
            'is_active'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'products_datatable_' . time();
    }
}
