<?php

class Start
{
    protected $url;

    protected $destination;

    protected $autodelete;

    protected $index;

    protected $path;

    public function __construct($url, $destination, $autodelete = true, $index = null)
    {
        $this->url = $url;
        $this->destination = PATH_INSTALL . $destination;
        $this->autodelete = $autodelete;
        $this->index = $index;
        $this->path = $this->createPath($this->destination);
    }

    public function now()
    {
        ini_set('max_execution_time', 0);
        set_time_limit(0);
        $dl = new Download($this->url, $this->destination);

        if ($dl->download()) {
            $this->unzip();
        }
    }

    protected function unzip()
    {
        $zip = new Zip();
        $zip->open($this->destination);
        $extract = (is_null($this->index)) ? $zip->extractTo($this->path) : $zip->extractSubdirTo($this->path, $zip->getNameIndex($this->index));

        if ($extract) {
            return $this->delete($zip);
        }

        return true;
    }

    protected function createPath($destination)
    {
        $a = explode("/", $destination);
        array_pop($a);

        return implode(DIRECTORY_SEPARATOR, $a);
    }

    protected function delete($zip)
    {
        $zip->close();

        return unlink($this->destination);
    }
}
