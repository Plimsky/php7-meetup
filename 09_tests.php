<?php

// Expectation

assert(1 == 2, 'Not good');
assert(1 == 2, new AssertionError());

class EqualityError extends AssertionError {}

assert(1 == 2, new EqualityError());