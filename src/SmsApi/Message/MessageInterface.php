<?php

namespace SmsApi\Message;

interface MessageInterface
{
    public function getFrom();
    public function getTo();
    public function getContent();
}
