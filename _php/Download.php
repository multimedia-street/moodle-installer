<?php

class Download
{
    protected $url;

    protected $destination;

    protected $autodelete;

    public function __construct($url, $destination, $autodelete = true)
    {
        $this->url = $url;
        $this->destination = $destination;
        $this->autodelete = $autodelete;
    }

    public function download()
    {
        set_time_limit(0);
        $fp = fopen($this->destination, 'w+');
        $ch = curl_init(str_replace(" ", "%20", $this->url));
        curl_setopt($ch, CURLOPT_TIMEOUT, 0);
        curl_setopt($ch, CURLOPT_FILE, $fp);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_exec($ch);
        curl_close($ch);

        return fclose($fp);
    }
}
