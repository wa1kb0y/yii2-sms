<?php

namespace walkboy\sms;

use yii\base\Event;

/**
 * SmsEvent represents the event parameter used for events triggered by [[BaseSms]].
 *
 * By setting the [[isValid]] property, one may control whether to continue running the action.
 */
class SmsEvent extends Event
{
    /**
     * @var \walkboy\sms\SmsInterface the message being sent.
     */
    public $message;

    /**
     * @var bool if message was sent successfully.
     */
    public $isSuccessful;

    /**
     * @var bool whether to continue sending an SMS. Event handlers of
     * [[\walkboy\sms\BaseSms::EVENT_BEFORE_SEND]] may set this property to decide whether
     * to continue send or not.
     */
    public $isValid = true;
}
