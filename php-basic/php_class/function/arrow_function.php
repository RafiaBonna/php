<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrow function</title>
</head>
<body>
    <?php
    // anonymous function
    $add=function($a,$b){
        return $a+$b;
    };
    echo $add(40,80);
    echo "<br>";



    // arrow function
    $addArrow=fn($a,$b)=>$a+$b;
    echo $addArrow(50,40);
        echo "<br>";
        $calender =fn($m,$r) =>$m*$r;
        echo $calender(20,5);
    ?> 
    <!-- Details -->
     <p>In essence, arrow functions are a concise syntax for writing anonymous functions in JavaScript. Both are functions without a name, but arrow functions offer a shorter syntax and different behavior regarding the this keyword. 
Here's a breakdown of the key differences:
1. Syntax:
Anonymous Functions:
Typically use the function keyword followed by parentheses for parameters and curly braces for the function body (e.g., function(x) { return x * 2; }).
Arrow Functions:
Use => to separate the parameters and the function body (e.g., (x) => { return x * 2; }). They can also be even shorter with implicit return for single-expression functions (e.g., x => x * 2). 
2. this Binding:
Anonymous Functions:
The this keyword inside an anonymous function is determined by how the function is called (dynamic binding). It refers to the object that the function is a method of, or the global object if called directly.
Arrow Functions:
The this keyword inside an arrow function is lexically bound. It inherits the this value from the surrounding scope where the arrow function is defined. 
3. Hoisting:
Anonymous Functions:
Traditional function expressions (including anonymous ones) are not hoisted, meaning you can't call them before they are defined in the code.
Arrow Functions:
Arrow functions are also not hoisted and behave like const or let variable declarations, meaning they cannot be called before their declaration. 
4. Use Cases:
Anonymous Functions:
Can be used for immediately invoked function expressions (IIFEs), callbacks, event handlers, and other scenarios where a named function is not necessary. 
Arrow Functions:
Ideal for callbacks, array methods (map, filter, reduce), and situations where you want the this value to be lexically scoped. 
In summary: While both are nameless functions, arrow functions provide a more compact syntax and behave differently with this binding, making them a preferred choice in certain situations, particularly with callbacks and array methods. </p>
</body>
</html>