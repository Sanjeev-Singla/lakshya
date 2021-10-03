<?php

namespace App\DataTables;

use App\Models\User;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class UserDataTable extends DataTable
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
        # first name converted to full name
        $dataTable->editColumn('first_name',function(User $user){
            return $user->first_name." ".$user->last_name;
        });
        # Edit Is actvie column
        $dataTable->editColumn('is_active',function(User $user){
            if ($user->is_active == \Config::get('constant.User.is_active.true')) {
                return '<span class="bg-green" style="padding:5px;border-radius: 5px;">Active</span>';
            }else{
                return '<span class="bg-red" style="padding:5px;border-radius: 5px;">Inactive</span>';
            }
        })->rawColumns(['first_name','is_active','action']);
        # serial number
        $dataTable->addIndexColumn();

        return $dataTable->addColumn('action', 'admin.users.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(User $model)
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
            'first_name'    => ['title'=>'Name'],
            'email',
            'phone',
            'is_active'     => ['orderable'=>false,'searchable'=>false],
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'users_datatable_' . time();
    }
}
