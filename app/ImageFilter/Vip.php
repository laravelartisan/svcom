<?php
/**
 * Created by PhpStorm.
 * User: Raja
 * Date: 5/22/2015
 * Time: 1:05 PM
 */

namespace App\ImageFilter;
use Intervention\Image\Image;
use Intervention\Image\Filters\FilterInterface;

class Vip implements FilterInterface {

    public function applyFilter(Image $image)
    {
        return $image->fit(143,107);
    }

} 