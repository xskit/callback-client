<?php
/**
 * Created by PhpStorm.
 * User: Yxs <250915790@qq.com>
 * Date: 2019/6/10
 * Time: 17:35
 */

namespace XsKit\CallbackClient\Contracts;

/**
 * 回调确认
 * Interface AckUrlContract
 * @package App\Contracts
 */
interface AckUrlContract
{
    /**
     * @return string|null
     */
    public function ackInvokeUrl();
}
