def invert(lst):
  return [-x for x in lst]
print(invert([1,2,3,4,5])) # [-1,-2,-3,-4,-5]
print(invert([1,-2,3,-4,5])) # [-1,2,-3,4,-5]