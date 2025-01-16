```php
function processData(array $data): array {
  // Check if the array is empty
  if (empty($data)) {
    return [];
  }

  return array_map(function ($item) {
    if (is_array($item)) {
      return processData($item);
    } elseif (is_numeric($item)) {
      return $item * 2;
    } else {
      // Handle non-numeric values
      return null; // Or throw an exception: throw new InvalidArgumentException('Non-numeric value encountered.');
    }
  }, $data);
}

// Example Usage
$data = [1, 2, [3, 4, 'a'], 5];
$processedData = processData($data);
print_r($processedData); // Output will gracefully handle the 'a'
```