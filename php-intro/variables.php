<!-- PHP - Variable And Data Types -->

<?php
    // You can withdraw the the semicolon if the there's a closing php tag
    // echo - output strings, numbers, etc
    
    echo 'Hello';

    // print - works like echo, but only takes in a single argument

    print 123;

    // print_r() - returns more info like data type and length

    print_r([1,2,3,4]);

    // var_dump() - Returns more info like data type and length

    var_dump(true);

    // var_export() - similar to var_dump(). Outputs a string representation of a variable

    var_export('Hello');
?>

<!-- Cleaner version of doing a single echo line -->

<!-- These two tags are the same thing and outputs the same thing -->
<!-- <?php echo 'hello' ?> -->
<!-- <? 'hello' ?>  -->


<!-------- VARIABLE RULES START -------- >
    - Variables must be prefixed with $
    - Variables must start with a letter or the underscore character
    - Variables can't start with a number
    - Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
    - Variables are case-sensitive ($name and $NAME are two different variables)

<!-- VARIABLE RULES END -->
<?php
$name = 'Musse'; // string
$age = 40; // integer
$thisIsAVariable = true; // boolean

// var_dump($thisIsAVariable); // Output = bool(true)

?>