<?php
require __DIR__ . '/vendor/autoload.php';

$connection = new \Domnikl\Statsd\Connection\UdpSocket('graph.traderonline.com', 8125);
$statsd = new \Domnikl\Statsd\Client($connection, "test.namespace");

// the global namespace is prepended to every key (optional)
// $statsd->setNamespace("test");

// simple counts
$statsd->increment("foo.bar");
$statsd->decrement("foo.bar");
$statsd->count("foo.bar", 1111);
