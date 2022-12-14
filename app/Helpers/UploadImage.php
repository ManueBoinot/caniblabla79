<?php

    /**
     * UploadImage helper
     *
     * @param  $request

     */

function uploadImage($image)
{

    // on donne un nom à l'image en temps Unix + extension
    $imageName = time() . '.' . $image->extension();

    // on déplace l'image dans public/images
    $image->move(public_path('images'), $imageName);

    // on retourne le nom de l'image
    return $imageName;
}
