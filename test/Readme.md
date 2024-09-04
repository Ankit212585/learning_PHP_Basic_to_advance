<!-- There are 10 types of data type in php -->

PHP supports several data types that you can use to store and
manipulate data. These are divided into two main categories: scalar
and compound types.

<!-- Scalar Data Types:- -->

?Integer: Represents whole numbers (e.g., 1, 100).

?Float (Double): Represents decimal numbers (e.g., 3.14, 2.718).

?String: Represents sequences of characters (e.g., "Hello, world!").

?Boolean: Represents two possible values: true or false.

<!-- Compound Data Types -->

?Array: Represents a collection of values, which can be indexed by
numbers or strings (associative arrays).

?Object: Represents instances of classes (OOP in PHP).

?Callable: Represents a function that can be called (e.g., closures or
anonymous functions).

?Iterable: Represents any value that can be looped over (e.g., arrays,
objects implementing Traversable).

<!-- Special Data Types -->

?Resource: Holds references to external resources (e.g., database
connections, file handles).

?NULL: Represents a variable with no value.

?These ten data types form the foundation of data handling in PHP.

<!-- --------------------------------------------------------------------------------------------------- -->

PHP provides several types of operators that allow you to perform
different operations on variables and values. These operators are
grouped into categories:

<!-- --------------------------------------------------------------------------------------------------- -->

<!-- 1. Arithmetic Operators -->

Perform mathematical operations.

Examples: + (addition), - (subtraction), \* (multiplication), /
(division), % (modulus), \*\* (exponentiation).

<!-- 2. Assignment Operators/ -->

Assign values to variables.

Examples: = (assignment), += (addition assignment), -= (subtraction
assignment), \*= (multiplication assignment), /= (division
assignment), .%= (modulus assignment).

<!-- 3. Comparison Operators -->

Compare two values and return a boolean result.

Examples: == (equal), === (identical), != (not equal), !== (not
identical), < (less than), > (greater than), <= (less than or equal
to), >= (greater than or equal to), <=> (spaceship operator).

<!-- 4. Increment/Decrement Operators -->

Increment or decrement a variable's value.

Examples:
++$variable (pre-increment), $variable++ (post-increment), --$variable
(pre-decrement), $variable-- (post-decrement).

<!-- 5. Logical Operators -->

Combine conditional statements.

Examples: && (and), || (or), ! (not), and, or, xor (exclusive or).

<!-- 6. String Operators -->

Operate on strings.

Examples: . (concatenation), .= (concatenation assignment).

<!-- 7. Array Operators -->

Operate on arrays.

Examples: + (union), == (equality), === (identity), != (inequality),
!== (non-identity).

<!-- Array pop, push and splice method -->

<!--array_pop() -->

?array_pop(): Removes and returns the last element of an array.

<!--array_push() -->

?array_push(): Adds elements to the end of an array.

<!--array_splice() -->

?array_splice(): Removes, replaces, or inserts elements into an array
at a specific position.

<!-- 8. Type Operators -->

Test the type of a variable or object. Example: instanceof (checks if
an object is an instance of a specific class).

<!-- 9. Bitwise Operators -->

Operate on binary representations of numbers.

Examples: & (and), | (or), ^ (xor), ~ (not), << (left shift), >>
(right shift).

<!-- 10. Error Control Operator -->

Suppress errors.

Example: @ (used to suppress error messages).

<!-- 11. Execution Operators -->

Used to execute shell commands.

Example: `command` (backticks to execute shell command).

<!-- 12. Null Coalescing Operator -->

Returns the first operand if it exists and is not null; otherwise,
returns the second operand. Example: ?? (null coalescing).

<!-- 13. Ternary Operator -->

Shorthand for an if-else statement.

Example: condition ? value_if_true : value_if_false. These are the
main categories of operators in PHP, helping you perform various types
of operations within your code.

<!-- --------------------------------------------------------------------------------------------------- -->

<!-- Loops -->

PHP have four types of loop , while loop, do_while loop, for loop and
foreach loop

<!-- --------------------------------------------------------------------------------------------------- -->

<!-- Here is specified -->

<!-- 1. while Loop -->

Description: The while loop executes a block of code as long as the
specified condition is true.

<!-- 2. do...while Loop -->

Description: The do...while loop is similar to the while loop, but it
guarantees that the code block is executed at least once before the
condition is tested.

<!-- 3. for Loop -->

Description: The for loop is ideal when you know the exact number of
iterations beforehand. It consists of three expressions:
initialization, condition, and increment/decrement.

<!-- 4. foreach Loop -->

Description: The foreach loop is used to iterate over arrays. It loops
through each element in the array without needing to manage the
array's index manually.

<!-- --------------------------------------------------------------------------------------------------- -->

<!-- --------------------------------------functions in php-------------------------------------------- -->

In PHP, functions are divided into two main categories:

<!-- --------------------------------------------------------------------------------------------------- -->

<!-- 1. Built-in Functions -->

These are functions provided by PHP itself, and there are thousands of
them across various categories such as string handling, arrays, math,
file handling, date/time, etc.

Examples:

strlen() for string length

array_merge() for merging arrays

date() for formatting dates

<!-- 2. User-defined Functions -->

These are functions that you define yourself to perform specific
tasks. You can create custom functions to organize your code, avoid
repetition, and increase reusability.

<!-- --------------------------------------------------------------------------------------------------- -->

In PHP, arrays are a versatile data structure and can be categorized
into three main types based on their usage:

<!-- --------------------------------------------------------------------------------------------------- -->

<!-- 1. Indexed Arrays (Numeric Arrays) -->

These are arrays where each element is associated with an index number
(starting from 0).

Example: php Copy code
$fruits = array("Apple", "Banana", "Cherry");
// or using the shorthand syntax:
$fruits
= ["Apple", "Banana", "Cherry"];

echo $fruits[1]; // Output: Banana

<!-- 2. Associative Arrays -->

These arrays use named keys (strings) instead of numeric indices to
access their values.

Example: php Copy code
$person = array("name" => "Ankit", "age" => 25, "city" => "Delhi");
// or using the shorthand syntax:
$person
= ["name" => "Ankit", "age" => 25, "city" => "Delhi"];

echo $person["name"]; // Output: Ankit

<!-- 3. Multidimensional Arrays -->

These are arrays that contain one or more arrays as elements. They are
often used to represent more complex data structures like matrices or
nested data.

Example: php Copy code $students = array( array("name" => "Ankit",
"age" => 25), array("name" => "Rahul", "age" => 22), array("name" =>
"Priya", "age" => 23) );

echo $students[1]["name"]; // Output: Rahul

<!-- Summary: -->

Indexed Arrays: Use numeric indices to store and access elements.

Associative Arrays: Use named keys (strings) to store and access
elements.

Multidimensional Arrays: Arrays containing other arrays, allowing
complex data representation. These array types allow you to store and
manipulate data in a flexible and organized way in PHP.

<!-- ---------------------------------------------------------------------------------------------------- -->

Question-: what is the difference between include or include once and
require or require once

<!-- 1. include -->

Description: The include statement includes and evaluates the
specified file. If the file is not found, PHP will emit a warning
(E_WARNING), but the script will continue to execute.

Use Case: Use include when the file is not critical to the application
and you want the script to continue executing even if the file is
missing.

<!-- 2. include_once -->

Description: The include_once statement works similarly to include,
but it ensures that the file is included only once during the script
execution. If the file has already been included, it will not be
included again.

Use Case: Use include_once when you want to ensure that the file is
included only once, even if you try to include it multiple times. This
helps prevent redeclaration errors.

<!-- ---------------------------------------------------------------------------------------------------- -->

<!-- 3. require -->

Description: The require statement also includes and evaluates the
specified file, but with a key difference: if the file is not found,
PHP will emit a fatal error (E_COMPILE_ERROR) and stop the script from
executing.

Use Case: Use require when the file is critical to the application and
you want the script to halt if the file is missing.

<!-- 4. require_once -->

Description: The require_once statement is similar to require, but it
ensures that the file is included only once during the script
execution. If the file has already been included, it will not be
included again.

Use Case: Use require_once when the file is essential and should be
included only once, preventing potential redeclaration errors and
ensuring that the script stops if the file is missing.

<!-- ---------------------------------------------------------------------------------------------------- -->

<!-- Super Global Variables -->

Superglobal variables in PHP are built-in global arrays that are
always accessible, regardless of the scope. You can access these
variables from any function, class, or file without needing to declare
them as global.

<!-- ---------------------------------------------------------------------------------------------------- -->

<!-- The main superglobal variables in PHP are: -->

$\_GLOBALS: Contains all global variables.

$\_SERVER: Provides information about the server environment and the
current request.

$\_GET: Stores data sent via the URL query string (HTTP GET method).

$\_POST: Contains data submitted through an HTML form using the POST
method.

$\_FILES: Manages information about file uploads.

$\_COOKIE: Contains cookie values sent by the user's browser.

$\_SESSION: Stores session data for the user's session.

$\_REQUEST: Combines data from $\_GET, $\_POST, and $\_COOKIE.

$\_ENV: Contains environment variables passed to the script.

These superglobals provide a convenient way to handle user input,
server information, and other data across your PHP applications.

%

In PHP, cookies are a mechanism to store data on the client's
computer, which can be retrieved later. Cookies are useful for storing
small amounts of data that persist across different pages and even
browser sessions, such as user preferences, login sessions, or
tracking information.

## %

% How Cookies Work:

1. Setting a Cookie: PHP can send a cookie to the client by using the
   setcookie() function. Once sent, the browser stores the cookie and
   sends it back to the server with every subsequent request to the
   same domain.

2. Retrieving a Cookie: PHP can access cookies that have been sent
   back by the client's browser using the $\_COOKIE superglobal array.

3. Cookie Lifetime: You can specify the lifetime of a cookie (in
   seconds). By default, cookies are deleted when the browser is
   closed (session cookies), but you can create cookies that persist
   across sessions by setting an expiration time.

$name: The name of the cookie.

$value: The value of the cookie.

$expire: The expiration time (in Unix timestamp). For example,
time() + 3600 sets the cookie to expire in one hour.

$path: The path on the server in which the cookie will be available.
By default, it is the current directory.

$domain: The domain that the cookie is available to.

$secure: If true, the cookie will only be sent over HTTPS connections.

$httponly: If true, the cookie will only be accessible through the
HTTP protocol (not JavaScript), which helps mitigate certain kinds of
attacks like XSS (Cross-Site Scripting).
