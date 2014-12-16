<?php

/**
 * User: atkara
 * Date: 13/12/2014
 * Time: 11:18 SA
 */
class Mura
{

    /**
     * @var string
     */
    private static $log_file_name = 'mura.log';

    /**
     * @param $message
     */
    public static function log($message)
    {
        $fileName = self::getLogFileName();
        $date = gmdate('Y-d-d H:i:s', time());
        $message = $date . ' : ' . $message;
        self::writeFile($fileName, $message);
    }

    /**
     * @return string
     */
    public static function getLogFileName()
    {
        return self::$log_file_name;
    }

    /**
     * @param string $log_file_name
     */
    public static function setLogFileName($log_file_name)
    {
        self::$log_file_name = $log_file_name;
    }

    /**
     * @param $filePath
     * @param $content
     */
    private static function writeFile($filePath, $content)
    {
        try {

            //if (is_writable($filePath)) {
            if (!$handle = @fopen($filePath, 'a+')) {

                exit;
            }
            if (@fwrite($handle, $content) === FALSE) {

                exit;
            }


            @fclose($handle);

            //}
        } catch (Exception $ex) {


        }
    }

}