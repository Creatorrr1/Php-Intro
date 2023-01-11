<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If & If-Else Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

$age = 20;

if($age = 17) {
    echo 'You are old enough to take the driving test';
} elseif($age >=18) {
    echo 'You are old enough to drive';}
else {
    echo 'You are not old enough';
};

$age = 17;

/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/

$posts = ['First Post'];

if(!empty($posts)) {
    echo $posts[0];
} else {
    echo 'No Posts';
};

echo !empty($posts) ? $posts[0] : 'No Posts';

$firstPost = !empty($posts) ? $posts[0] : 'No Posts';

$firstPost = $posts[0] ?? null;
// Output => if there isn't index 0 in the array
// then null will be the result of the echo

echo $firstPost;


/* -------- Switch Statements ------- */

$favColor = 'blue';
$favColor = 'red';
$favColor = 'purple';

switch($favColor) {
    case 'blue':
        echo 'Your favourite color is blue';
        break;
    case 'red':
        echo 'Your favourite color is red';
        break;
    case 'purple':
        echo 'Your favourite color is purple';
        break;
    default:
        echo 'Your favourite color is not blue, red, purple';
}

?>