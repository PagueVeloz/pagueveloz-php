#!/bin/sh

# check wich config file to use .xml or .xml.dist
if [ -f "./phpunit.xml" ]
then
    TESTFILE="./phpunit.xml"
else
    TESTFILE="./phpunit.xml.dist"
fi

# number of parallel jobs
NUMJOBS="$(($(nproc)+1))"

# run tests
./vendor/bin/paratest --coverage-clover="coverage.xml" --processes $NUMJOBS --phpunit ./vendor/bin/phpunit --no-test-tokens --runner ParaTest\\Runners\\WrapperRunner
