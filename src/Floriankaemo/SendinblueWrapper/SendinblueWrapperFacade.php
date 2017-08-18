<?php namespace Floriankaemo\SendinblueWrapper;

use Illuminate\Support\Facades\Facade;

/**
 * Class SendinblueWrapper
 */
class SendinblueWrapperFacade extends Facade
{
    protected static function getFacadeAccessor() { return 'sendinbluewrapper'; }
}