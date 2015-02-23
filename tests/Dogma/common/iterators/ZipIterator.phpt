<?php

namespace Dogma\Tests\ZipIterator;

use Dogma\ZipIterator;
use Tester\Assert;

require_once __DIR__ . '/../../bootstrap.php';

$values = [1, 2, 3];
$keys = [4, 5, 6];
$result = [];
foreach (new ZipIterator($keys, $values) as $k => $v) {
    $result[$k] = $v;
}
Assert::same($result, [4 => 1, 5 => 2, 6 => 3]);

$values = [1, 2, 3];
$keys = [4, 5];
$result = [];
foreach (new ZipIterator($keys, $values) as $k => $v) {
    $result[$k] = $v;
}
Assert::same($result, [4 => 1, 5 => 2]);

$values = [1, 2];
$keys = [4, 5, 6];
$result = [];
foreach (new ZipIterator($keys, $values) as $k => $v) {
    $result[$k] = $v;
}
Assert::same($result, [4 => 1, 5 => 2]);

$values = [1, 2, 3];
$keys = [];
$result = [];
foreach (new ZipIterator($keys, $values) as $k => $v) {
    $result[$k] = $v;
}
Assert::same($result, []);

$values = [];
$keys = [4, 5, 6];
$result = [];
foreach (new ZipIterator($keys, $values) as $k => $v) {
    $result[$k] = $v;
}
Assert::same($result, []);