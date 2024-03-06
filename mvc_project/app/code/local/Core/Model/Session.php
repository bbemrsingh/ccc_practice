<?php
class Core_Model_Session
{
    public function __construct()
    {
        // if(is_null($_SESSION)){
        // if (is_null($_SESSION) || !isset($_SESSION)) {
        session_start();
        // }
    }
    public function getId()
    {
        if (!is_null($_SESSION)) {
            return session_id();
        }
        return false;
    }
    public function set($key, $value)
    {
        // Sets the specified key-value pair in the session. It returns the instance of the current object, allowing method chaining.
        $_SESSION[$key] = $value;
        return $this;
    }
    public function get($key)
    {
        //  Checks if specified key exists in the session. If it does, returns it's value.
        if (array_key_exists($key, $_SESSION)) {
            return $_SESSION[$key];
        }
        return false;
    }
    public function remove($key)
    {
        // Removes the specified key-value pair from the session
        if (isset($_SESSION[$key])) {
            unset($_SESSION[$key]);
        }
    }
    // Called when the object is destroyed, and it destroys the session.
    public function __destruct()
    {

    }
}

