<?php
/**
 * Created by PhpStorm.
 * User: vaube
 * Date: 24/09/2018
 * Time: 14:30
 */

namespace App\metier;
use Exception;
use Throwable;


class MonException extends Exception
{
    protected $message = 'Unknown exception';
    private $string;
    protected $code = 0;
    protected $file;
    protected $line;
    private $trace;

    public function __construct(string $message, $code = 0, Exception $previous = null)
    {
        if(!$message){
            throw new $this('Unknown '. get_class($this));
        }
        parent::__construct($message, $code);
    }

    public function __toString()
    {
        return get_class($this) . " '{$this->message}' in {$this->file} ({$this->line}) \n" . "{$this->getTraceAsString()}";
    }



}