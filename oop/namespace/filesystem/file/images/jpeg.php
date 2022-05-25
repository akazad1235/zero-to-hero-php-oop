<?php
namespace CloudStorage\FileSystem\File\Images;
use \CloudStorage\FileSystem\File\Contracts\ImageContract;

class Jpeg implements ImageContract{
    function getDimension()
    {
        return  "100*100";
    }
} 