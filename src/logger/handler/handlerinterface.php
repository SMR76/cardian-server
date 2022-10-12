<?php

namespace cardian\logger\handler;

interface HandlerInterface
{
    public const DEFAULT_FORMAT = '%timestamp% [%level%]: %message%';
    public function handle(array $vars): void;
}