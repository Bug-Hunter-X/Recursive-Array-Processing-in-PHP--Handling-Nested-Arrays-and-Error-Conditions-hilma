# Recursive Array Processing in PHP

This repository contains a PHP example demonstrating a recursive function to process an array of numbers. The function doubles non-array elements and recursively handles nested arrays.  The example also shows how to improve the function's error handling and robustness.

## Bug Description:

The original `processData` function lacks comprehensive error handling.  It doesn't gracefully handle non-numeric input or circular references within the nested arrays.  This can lead to unexpected results such as type errors or infinite recursion.

## Solution:

The solution addresses these issues by adding input validation and handling potential exceptions during recursion.  This ensures that the function operates reliably even with varied and potentially problematic input data.
