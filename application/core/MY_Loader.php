<?php

/**
* /application/core/MY_Loader.php
*
*/
class MY_Loader extends CI_Loader {
    public function template($template_name, $vars = array(), $return = FALSE) {
        $content  = $this->view('_header', $vars, $return);
        $content .= $this->view($template_name, $vars, $return);
        $content .= $this->view('_footer', $vars, $return);

        if ($return) return $content;
    }
}
