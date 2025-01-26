```php
function calculateSum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    if (is_numeric($number)) {
      $sum += (float)$number; // Explicit type casting to float for safety
    } else {
       // Handle non-numeric values appropriately
      // You might throw an exception, ignore them, use a default value, or log an error
      trigger_error('Non-numeric value encountered in calculateSum()', E_USER_WARNING); 
    }
  }
  return $sum;
}

$numbers = [1, 2, 3, 4, 5];
echo calculateSum($numbers); // Output: 15

$numbers = ['1', '2', '3', '4', '5'];
echo calculateSum($numbers); // Output: 15

$numbers = ['1abc', 2, 3, 4, 5];
echo calculateSum($numbers); // Output: 12; Warning: Non-numeric value encountered in calculateSum()
```