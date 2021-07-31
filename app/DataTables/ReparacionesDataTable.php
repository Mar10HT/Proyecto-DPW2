<?php

namespace App\DataTables;

use App\Models\Reparacione;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class ReparacionesDataTable extends DataTable
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
            ->addColumn('action', 'reparaciones.action');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Reparacione $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Reparacione $model)
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
                    ->setTableId('reparaciones-table')
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
            'id_reporte',
            'id_solucion',
            'id_ing',
            'fecha_reparacion',
            'comentario'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Reparaciones_' . date('YmdHis');
    }
}
