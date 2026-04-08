<?php

namespace foodeater12\attachments\events;

use yii\base\Event;

class FileEvent extends Event
{
    /**
     * @var foodeater12\attachments\models\File[]
     */
    private $_files;

    /**
     * @return foodeater12\attachments\models\File[]
     */
    public function getFiles()
    {
        return $this->_files;
    }

    /**
     * @param foodeater12\attachments\models\File[] $files
     */
    public function setFiles($files)
    {
        $this->_files = $files;
    }
}
