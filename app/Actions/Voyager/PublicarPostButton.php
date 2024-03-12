<?php

namespace App\Actions\Voyager;

use TCG\Voyager\Actions\AbstractAction;

class PublicarPostButton extends AbstractAction
{
    public function getTitle()
    {
        return 'Publicar';
    }

    public function getIcon()
    {
        return 'voyager-archive';
    }

    public function getAttributes()
    {
        return [
            'class' => 'btn btn-sm btn-dark pull-left',
        ];
    }

    public function getDefaultRoute()
    {
        return route('postagens.publicar', ['id' => $this->data->id]);
    }

    /**
     * Se Você só quer mostrar sua ação para telas especificas:
     */
    public function shouldActionDisplayOnDataType()
    {
        return $this->dataType->slug == 'posts';
    }

    //para ações em massa:
    // public function massAction($ids, $comingFrom)
    // {
    //     // Do something with the IDs
    //     dd($ids);
    //     // $filePath = \App\Http\Controllers\DocumentosController::gerarDocumento($ids);
    //     // return response()->download($filePath)->deleteFileAfterSend(true);
    //     return redirect()->back();
    // }
}