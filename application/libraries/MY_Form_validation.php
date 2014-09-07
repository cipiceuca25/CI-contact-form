<?php

class MY_Form_validation extends CI_Form_validation{
    function __construct($rules = array()) {
        parent::__construct($rules);
    }
    /**
     * Inputs a string and returns whatever is not taken out of it based on a whitelist.
     * @param string $string
     * @return string
     */
    function sanitize($string){
    $whitelist = '/[^a-zA-Z0-9а-яА-ЯéüртхцчшщъыэюьЁуфҐ \.\*\\\n|#;:!"%@{} _-]/';
    return preg_replace($whitelist, '', $string);
}

}