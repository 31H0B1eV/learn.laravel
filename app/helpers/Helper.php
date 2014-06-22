<?php


class Helper {

    private static $instance = null;
    private $content = null;

    public function setContent($content)
    {
        return $this->content = $content;
    }

    public function getContent()
    {
        return $this->content;
    }

    private function __construct($url)
    {

        // create curl resource
        $ch = curl_init();

        // set url
        curl_setopt($ch, CURLOPT_URL, $url);

        //return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        //set encoding
        curl_setopt($ch, CURLOPT_ENCODING, 'UTF-8');

        // $output contains the output string
        $output = curl_exec($ch);

        // Check if any error occurred
        if(curl_errno($ch)) {
            echo 'Curl error: ' . curl_error($ch);
        }

        // close curl resource to free up system resources
        curl_close($ch);

        return $this->setContent($output);
    }


    public static function getHelperInstance($url)
    {
        if (self::$instance === NULL)
            self::$instance = new Helper($url);
        return self::$instance;
    }

    function __toString()
    {
        return 'Helper instance';
    }


} 