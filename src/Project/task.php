<?php
/**
 * Date: 7/18/15
 * Time: 6:58 PM
 */

namespace Project;

class task
{

    /**
     * @var self
     */
    protected static $instances = array();

    /**
     *
     */
    private function __construct()
    {
    }

    /**
     *
     */
    private function __clone()
    {
    }

    /**
     * @return self
     */
    public static function create() {
        $class = get_called_class();
        if(!isset(static::$instances[$class])) {
            static::$instances[$class] = new static();
        }
        return static::$instances[$class];

    }

    /**
     * @param string $filename
     * @param string $out
     */
    public function doIt($filename, $out)
    {
        $data = file_get_contents($filename);
        $data = json_decode($data);

        $data = new \RecursiveIteratorIterator(new \RecursiveArrayIterator($data));
        $finalData = $this->iterate($data);
        print_r($finalData);

        //encode and save it
        $data = json_encode($finalData);
        file_put_contents($out, $data);

    }

    /**
     * @param \RecursiveIteratorIterator $data
     *
     * @return array
     */
    protected function iterate($data)
    {
        $finalData = [];
        foreach($data as $element) {
            $finalData[] = $element;
        }
        return $finalData;
    }
}