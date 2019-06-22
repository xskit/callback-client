<?php
/**
 * Created by PhpStorm.
 * User: Yxs <250915790@qq.com>
 * Date: 2019/5/27
 * Time: 16:47
 */

namespace XsKit\CallbackClient\Contracts;


interface InvokeUrlContract
{
    /**
     * 回调请求方式,默认 POST
     * @return string
     */
    public function method(): string;

    /**
     * 回调地址
     * @return string
     */
    public function query(): string;

    /**
     * 数据体
     * @return iterable
     */
    public function body(): iterable;

    /**
     * 用户ID
     * @return string
     */
    public function userId(): string;

    /**
     * 回调类型
     * @return int
     */
    public function type(): int;

    /**
     * 业务ID
     * @return mixed
     */
    public function bizId();
}