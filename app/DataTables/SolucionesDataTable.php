<?php

namespace App\DataTables;

use App\Models\Solucione;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class SolucionesDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('action', 'soluciones.action');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Solucione $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Solucione $model)
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
                    ->setTableId('soluciones-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                   
                    ->orderBy(1);
                   
                    
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
           'id',
           'materiales',
           'soluciones'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Soluciones_' . date('YmdHis');
    }
}
