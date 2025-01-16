```php
function processData(array $data): array {
  // Check if the array is empty
  if (empty($data)) {
    return []; // Return an empty array if the input is empty
  }

  // Use array_map to apply a function to each element
  return array_map(function ($item) {
    // Check if the item is an array
    if (is_array($item)) {
      return processData($item); // Recursively call processData to handle nested arrays
    } else {
      return $item * 2; // Double the value if it is not an array
    }
  }, $data);
}

// Example usage
$data = [1, 2, [3, 4], 5];
$processedData = processData($data);
print_r($processedData); // Output: Array ( [0] => 2 [1] => 4 [2] => Array ( [0] => 6 [1] => 8 ) [3] => 10 )
```