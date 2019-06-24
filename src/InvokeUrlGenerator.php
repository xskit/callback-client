<?php
/**
 * Created by PhpStorm.
 * User: Xingshun <250915790@qq.com>
 * Date: 2019/6/2
 * Time: 17:34
 */

namespace XsKit\CallbackClient;


use XsKit\CallbackClient\Contracts\InvokeUrlContract;

abstract class InvokeUrlGenerator
{
    private static $instance;

    protected $ackInvokeUrl;

    protected $query;

    protected $body = [];

    protected $method = 'POST';

    protected $userId;

    protected $bizId;

    protected $type;

    /**
     * @return InvokeUrlGenerator
     */
    public static function make()
    {
        if (is_null(self::$instance)) {
            self::$instance = new static();
        }
        return self::$instance;
    }

    /**
     * 设置应答回执
     * @param InvokeUrlContract $invokeUrl
     * @return $this
     */
    public function setAckInvokeUrl(InvokeUrlContract $invokeUrl)
    {
        $this->ackInvokeUrl = $invokeUrl;

        return $this;
    }

    public abstract function getInvokeUrlEntity(): InvokeUrlEntity;
}