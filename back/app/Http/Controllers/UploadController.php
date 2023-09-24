<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    //
    public function upload(Request $request,$type,$id){
        $fileName = substr(json_encode($request->all()), 2, -5);
        $file = $request->file($fileName);
        $name = time().$file->getClientOriginalName();
        if ($type=='shopUser'){
            $ruta=public_path('/images/'.$name);
            Image::make($file->getRealPath())
                ->resize(300,300
                    ,function ($constraint){
                        $constraint->aspectRatio();
                    }
                )
                ->save($ruta,72);
            return $name;
        }
        if ($type=='create'){
            error_log($name);
            $ruta=public_path('/images/');
            $file->move($ruta,$name);
            return $name;
        }
        if ($type=='editDocente'){
            $ruta=public_path('/images/');
            $file->move($ruta,$name);
            $category = Category::find($id);
            $category->imagen = $name;
            $category->save();
            return $name;
        }
        if ($type=='editproduct'){
            $ruta=public_path('/images/');
            $file->move($ruta,$name);
            $product = Product::find($id);
            $product->imagen = $name;
            $product->save();
            return $name;
        }
    }
    public function base64($photo){
        $path = public_path('/images/'.$photo);
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
        return $base64;
    }
}
