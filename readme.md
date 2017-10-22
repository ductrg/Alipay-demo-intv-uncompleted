Requirement:
- Have php installed
- From console, run
composer install
or if you don't have composer, then run
php composer.phar install

- Run file ... to start selenium sever
java -jar selenium-server-standalone-3.6.0.jar



Answers:
1. Benefit of automation test:
- Get direct notification when there is something wrong. This is very useful when integrate with CI, not only for QA but also for Dev.
For ex, when job failed (cause by failed script) it can send mail to recipients to come and check the result in time.
- Save time and cost. This is clear when apply to medium to large system, or a long term maintenance project.
For ex, when the system get feature change, itself needs to be tested again and also regression of related features.
- Take advantages of test running time, when integrate with CI.
For ex, it can be run at night (outside of working hour), or be triggered by a push anytime, so doesn't depend on allocation, or waiting for a QA to be available.
- Always exact as the way you implemented.
For ex, a QA when executes a list of regression test cases from time to time, can have mistake, but a script can not, it always run exactly as the way it is implemented.

2. Good automation test tool
- Tool is suitable to your purpose, with good community support, you need to know what do you want, then to select a tool that work right in that purpose.
ex: want to automate on web flows then selenium library is suitable
if you want to have more on api automation, selenium itself is not, you can check for some frameworks of unit test, or guzzle..
if you want to have more on image comparison, may be sikuli ?
- The tool needs to be scalable.
ex: way to write scripts or functions that can be common and reuse in another one.
- The tool needs to be maintainable: depend on the architecture, how to organize scripts and separation between end scripts & functions for easy maintenance later.
ex: when number of scripts is hundreds, then to update scripts should be still efficient but not a nightmare.
- On more modern approach, the tool should be able to adapt the purpose of that approach
ex: with TDD, test scripts are covered first then code are developing accordingly to fulfill the tests and also the spec to become a complete product
with BDD, from the base of TDD, plus a layer / annotation to make scripts become human readable language (given when then syntax)

A bad automation tool therefore doesn't satisfy some of above,
ex: do not fit to purpose of use, if you fail to recognize then it may take you time to re-choose another one
not scalable, maintainable: tests consume too much time to run / update, with many redundant & repeated same steps between scripts / suites, hard to maintain