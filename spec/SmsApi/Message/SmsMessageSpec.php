<?php

namespace spec\SmsApi\Message;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SmsMessageSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('SmsApi\Message\SmsMessage');
        $this->shouldImplement('SmsApi\Message\MessageInterface');
    }

    function it_is_empty_when_constructed()
    {
        $this->getFrom()->shouldReturn(null);
        $this->getTo()->shouldReturn(null);
        $this->getContent()->shouldReturn(null);
    }

    function it_has_fluent_interface()
    {
        $this->setFrom('from')->shouldReturn($this);
        $this->getFrom()->shouldReturn('from');

        $this->setTo('to')->shouldReturn($this);
        $this->getTo()->shouldReturn('to');

        $this->setContent('content')->shouldReturn($this);
        $this->getContent()->shouldReturn('content');
    }
}
