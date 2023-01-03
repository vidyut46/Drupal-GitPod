def number(bus_stops):
  people_in_bus = 0
  for stop in bus_stops:
    people_in_bus += stop[0] - stop[1]
  return people_in_bus
print(number([[10,0],[3,5],[5,8]]))
print(number([[3,0],[9,1],[4,10],[12,2],[6,1],[7,10]]))
print(number([[3,0],[9,1],[4,8],[12,2],[6,1],[7,8]])) 
