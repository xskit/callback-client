<?php
/**
 * Created by PhpStorm.
 * User: Yxs <250915790@qq.com>
 * Date: 2019/5/27
 * Time: 16:59
 */

namespace XsKit\Callback;


use XsKit\Callback\Contracts\AckUrlContract;
use XsKit\Callback\Contracts\InvokeUrlEntityContract;

class InvokeUrlEntity implements InvokeUrlEntityContract, AckUrlContract
{

    protected $method;

    protected $query;

    protected $body;

    protected $type;

    protected $userId;

    protected $bizId;

    protected $options;

    /** @var InvokeUrlEntityContract */
    protected $ackInvokeUrl;

    /**
     * InvokeUrlEntity constructor.
     * @param $query
     * @param array $body
     * @param string $method
     * @param null $userId 用户ID
     * @param null $bizId 业务ID
     * @param int $type 业务类型
     */
    public function __construct($query, $body = [], $method = 'POST', $userId = null, $bizId = null, $type = null, $options = [])
    {
        $this->query = $query;
        $this->body = $body;
        $this->method = $method;
        $this->userId = $userId;
        $this->bizId = $bizId;
        $this->type = $type;
        $this->options = $options;
    }

    /**
     * 设置应答回执
     * @param InvokeUrlEntityContract $invokeUrl
     * @return $this
     */
    public function setAckInvokeUrl(InvokeUrlEntityContract $invokeUrl)
    {
        $this->ackInvokeUrl = $invokeUrl;

        return $this;
    }

    /**
     * 回调请求方式,默认 POST
     * @return string
     */
    public function method(): string
    {
        return $this->method;
    }

    /**
     * 回调地址
     * @return string
     */
    public function query(): string
    {
        return $this->query;
    }

    /**
     * 数据体
     * @return array
     */
    public function body(): array
    {
        return $this->body;
    }

    /**
     * 用户ID
     * @return string
     */
    public function userId(): string
    {
        return $this->userId;
    }

    /**
     * 回调类型
     * @return int
     */
    public function type(): int
    {
        return (int)$this->type;
    }

    public function bizId()
    {
        return $this->bizId;
    }

    /**
     * @return InvokeUrlEntityContract|null
     */
    public function ackInvokeUrl(): ?InvokeUrlEntityContract
    {
        return $this->ackInvokeUrl;
    }

    /**
     * @return array|mixed
     */
    public function options(): array
    {
        return $this->options;
    }
}