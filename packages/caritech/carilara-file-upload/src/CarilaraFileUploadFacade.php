<?php

namespace Caritech\CarilaraFileUpload;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Caritech\CarilaraFileUpload\Skeleton\SkeletonClass
 */
class CarilaraFileUploadFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'carilara-file-upload';
    }
}
