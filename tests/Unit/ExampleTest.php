<?php

test('example', function () {
    expect(true)->toBeTrue();
});

describe('this should be inteire number', function () {

    test('one plus one equals two', function () {
        expect(1 + 1)->toBe(2);
    });
});