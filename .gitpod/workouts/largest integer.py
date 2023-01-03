def sum_of_two_highest(numbers):
  numbers.sort(reverse=True)
  return numbers[0] + numbers[1]

print(sum_of_two_highest([19, 5, 42, 2, 77]))  
