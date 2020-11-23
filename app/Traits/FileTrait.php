<?php

namespace App\Traits;
use File;
use Illuminate\Support\Facades\Storage;
use Response;

trait FileTrait
{
    public function uploadFile($request, $directory, $column){
        $extension = $request->file($column)->getClientOriginalExtension();
        $filenamestore = time().'.'.$extension;
        $request->file($column)->storeAs('public/'.$directory,$filenamestore);
        return $filenamestore;
    }

    public function updateFile($request, $model, $directory, $column){
        File::delete('storage/'. $directory . '/' .$model);

        $extension = $request->file($column)->getClientOriginalExtension();
        $filenamestore = time().'.'.$extension;
        $request->file($column)->storeAs('public/'.$directory,$filenamestore);
        return $filenamestore;
    }

    public function deleteFile($model, $directory){
        File::delete('storage/'. $directory . '/' .$model);
    }

    public function downloadFilePdf($urlName,$file){
        $folder= "storage/$urlName/$file";

        $headers = array(
                  'Content-Type: application/pdf',
                );
    
        return Response::download($folder, $file, $headers);
    }
}