<?php

namespace App\DataTables;

use App\Models\Order;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class OrderDataTable extends DataTable
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
        
        $dataTable->editColumn('user_id', function(Order $order){
            return '<a href="'. route("users.show", $order->user->id) .'">'.$order->user->first_name.' '.$order->user->last_name.'</a>';
        });

        $dataTable->editColumn('product_id', function(Order $order){
            return '<a href="'. route("products.show", $order->product->id) .'">'.$order->product->title.'</a>';
        })->rawColumns(['product_id','user_id','action']);

        $dataTable->addIndexColumn();
        //return $dataTable;
        return $dataTable->addColumn('action', 'admin.orders.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Order $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Order $model)
    {
        return $model->newQuery()->with(['user']);
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
            'sr_no'         =>  ['data'  => 'DT_RowIndex','name'=>'DT_RowIndex','title'=>'Sr.No.','orderable'=>false,'searchable'=>false],
            'id'            =>  ['visible'=>false],
            'user_id'       =>  ['title'=>'Name','name'=>'user.first_name'],
            'product_id'    =>  ['title'=>'Product','name'=>'product.title'],
            'status'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'orders_datatable_' . time();
    }
}
