<?php
namespace CakeObject\HelloComposer;

/**
 * Class Hello
 * Test class
 * @package CakeObject\HelloComposer
 */
class Hello
{
    /**
     * @param string $message
     * @return int
     */
    public function say($message = 'Hello cake!')
    {
        echo $message;

        return 0;
    }
}
