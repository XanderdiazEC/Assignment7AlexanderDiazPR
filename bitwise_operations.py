#!/usr/bin/env python3
import sys

# Get inputs from command line arguments
integers_str = sys.argv[1]
threshold = int(sys.argv[2])

# Convert input string to list of integers
integers = [int(num.strip()) for num in integers_str.split(',')]

# Calculate bitwise operations
bitwise_and = integers[0]
bitwise_or = integers[0]
bitwise_xor = integers[0]

for num in integers[1:]:
    bitwise_and &= num
    bitwise_or |= num
    bitwise_xor ^= num

# Filter numbers greater than threshold
filtered_numbers = [num for num in integers if num > threshold]

# Print results
print(f"Bitwise AND: {bitwise_and}")
print(f"Bitwise OR: {bitwise_or}")
print(f"Bitwise XOR: {bitwise_xor}")
print(f"Numbers greater than threshold: {filtered_numbers}")