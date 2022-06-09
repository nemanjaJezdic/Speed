<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageUpload
{
    use HasFactory;
    public static function upload($image){
        $imageName = time() . '_' . $image->getClientOriginalName();

        $result = $image->move(public_path() . "/assets/images/", $imageName);

        if($result) {
            return $imageName;
        }

        return false;

    }

    public static function delete($product, $prop){

        $oldImagePath = public_path() . "/assets/images/" . $product->$prop;

        if(file_exists($oldImagePath)) {
            return unlink($oldImagePath);
        }
    }
}
