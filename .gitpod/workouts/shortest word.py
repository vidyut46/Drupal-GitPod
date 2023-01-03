def findShort(s):
  words = s.split()
  shortest = min(len(word) for word in words)
  return shortest
print(findShort("bitcoin take over the world maybe who knows perhaps"))
print(findShort("turns out random test cases are easier than writing out basic ones"))
print(findShort("lets talk about javascript the best language"))
print(findShort("i want to travel the world writing code one day"))
print(findShort("Lets all go on holiday somewhere very cold"))
print(findShort("Let's travel abroad shall we"))
