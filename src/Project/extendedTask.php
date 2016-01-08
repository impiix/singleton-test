<?php
/**
 * Date: 7/18/15
 * Time: 6:58 PM
 */

namespace Project;

class extendedTask extends task
{

    /**
     * rounds the numbers
     * {@inheritdoc}
     */
    protected function iterate($data)
    {
        $finalData = [];
        foreach($data as $element) {
            $finalData[] = round($element);
        }
        return $finalData;
    }
}