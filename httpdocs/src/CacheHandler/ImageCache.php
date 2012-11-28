<?php

namespace CacheHandler;

use Imagine\Gd\Imagine;

/**
 * Class that creates some cached files...  like images.
 */
class ImageCache
{
    private $baseDir;
    private $cachePrefix;

    public function __construct($baseDir)
    {
        $this->baseDir = $baseDir;
    }

    public function getImage(\SplFileInfo $fileInfo, $width = 50, $height = 50)
    {
        $this->cachePrefix = $width . 'x' . $height . '-';
        //check if exist cache image...
        $cachedFile = $fileInfo->getPathName() . '/cache/' . $this->cachePrefix . $fileInfo->getFilename();
        if (file_exists($cachedFile)) {
            return $cachedFile;
        } else {
            return $this->generateCacheFile($fileInfo, $width, $height);
        }
    }

    public function generateCacheFile(\SplFileInfo $fileInfo, $width, $height)
    {
        @mkdir($fileInfo->getPath() . '/cache');
        $imagine = new Imagine();
        $image = $imagine->open($fileInfo->getRealPath());
        $th = $image->thumbnail(new \Imagine\Image\Box($width,$height));
        $th->save($fileInfo->getPath() . '/cache/'.$this->cachePrefix . $fileInfo->getFilename());

        return '/cache/' . $this->cachePrefix . $fileInfo->getFilename();
    }
}