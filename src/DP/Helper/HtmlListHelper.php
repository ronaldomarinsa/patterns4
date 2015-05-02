<?php

namespace DP\Helper;

class HtmlListHelper
{
    public function htmlList(array $data)
    {
        $output = '<ul>';
        
        foreach ($data as $name => $value) {
            $output .= "<li>" . ucfirst($name). ": {$value}</li>";
        }
        
        $output .= '</ul>';
        
        return $output;
    }
}
