<?php
/**
 * Contains data pertaining to a single Student.
 *
 * @author Andrew
 */
class Student {
    /**
     * Constructor for Student.
     */
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    /**
     * Adds a given e-mail to this Student's list of e-mails at the given key.
     * 
     * @param type $which The key associated with the given e-mail address.
     * @param type $address The e-mail address to be added to the list.
     */
    function add_email($which,$address) {
        $this->emails[$which] = $address;
    }

    /**
     * Appends a given grade to this Student's list of grades.
     * 
     * @param type $grade The grade to be appended to the list.
     */
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    
    /**
     * Gets the average of all this Student's grades.
     * 
     * @return The average of all this Student's grades.
     */
    function average() {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }
    
    /**
     * Gets a String representation of this Student.
     * 
     * @return A String representation of this Student.
     */
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' ('.$this->average().")\n";
        foreach($this->emails as $which=>$what)
            $result .= $which . ': '. $what. "\n";
        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }
}
