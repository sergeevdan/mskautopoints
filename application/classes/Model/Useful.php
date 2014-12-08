<?php defined('SYSPATH') or die('No direct script access.');

class Model_Useful {

        public function sendemail($to, $from, $subject, $message)
        {
            try
            {   
                
                $count = email::send($to, $from, $subject, $message, $html = false);
                return TRUE;
            }
            catch (Exception $e)
            {
                echo $e->getMessage();
                return FALSE;
            }
        }
	

} // End Welcome
