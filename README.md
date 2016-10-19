This gives several examples of using Symfony decorators in Drupal 8.

See the Phase2 blog for details.

To play with this, first enable the `test_decorator_core` module, which
provides the core service being overridden.

Then, enable different combination of the other decorator modules and run
the `drush php-eval "test_decorator_core()"` command to see which order the
different services run.

For example, enable `test_decorator_a` and run `drush php-eval "test_decorator_core()"` and you should see:
```
Decorator A Public
Core Protected
Core Public
```
which shows that the test_decorator_a ran first followed by the normal
core service.

## test_decorator_a
A simple decorator that extends the core service.

## test_decorator_inter
Implements the core service interface rather than subclassing.

## test_decorator_lower
A subclass decorator with a lower priority than decorator_a.

## test_decorator_higher
A subclass decorator with a higher priorty than decorator_a.

## test_decorator_chain
Yet another subclass decorator with the same priority as decorator_a.

## test_decorator_protect
A subclass decorator that overrides a protected method.