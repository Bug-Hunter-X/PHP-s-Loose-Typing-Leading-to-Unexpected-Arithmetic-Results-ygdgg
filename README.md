# PHP Loose Typing Bug

This repository demonstrates a common issue in PHP caused by its loose typing system. The `bug.php` file contains a function that calculates the sum of an array of numbers. The problem arises when the array contains strings that look like numbers,  or a mix of numbers and strings that can't be directly typecast to numbers.  The function silently adds them up, leading to unexpected and potentially incorrect results. The `bugSolution.php` file showcases how to properly handle this situation to prevent such errors.