def areYouPlayingBanjo(name):
  if name[0].upper() == 'R':
    return name + " plays banjo"
  else:
    return name + " does not play banjo"
print(areYouPlayingBanjo("Adam")) 
print(areYouPlayingBanjo("Paul")) 
print(areYouPlayingBanjo("Ringo")) 
print(areYouPlayingBanjo("bravo")) 
print(areYouPlayingBanjo("rolf")) 
