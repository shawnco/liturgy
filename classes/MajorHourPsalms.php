<?php

/**
 * Wrapper for Matins and Vespers psalmodies. Back, forward, and confirm buttons to the end of the psalmody element, and saves current location to a file.
 */
class MajorHourPsalms extends Element {
    public function __construct(){
        parent::__construct();
    }
    
    public function display(){
        
    }
    
    /**
     * Opens the tracking file and advances it by the specified amount.
     */
    public function writeFile($step){
        $f = fopen('../config/tracker.txt', 'r+');
        $position = (string)fgets($f);
        $position += $step;
        fputs($f);
        fclose($f);
    }
    
    /**
     * Steps the psalms back one and reloads the psalms displayed.
     */
    public function goBack(){
        
    }
    
    /**
     * Steps forward a day
     */
    public function goForward(){
        
    }
    
    /**
     * Confirms you have read the psalms for the day. Unlike goForward, does NOT refresh the psalms.
     */
    public function confirm(){
        
    }
}
