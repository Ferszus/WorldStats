file = open('./data.txt')
ile = 1
print("INSERT INTO `data`(`Country`, `year`, `yearone`, `yeartwo`, `yearthree`, `yearfour`, `yearfive`, `yearsix`, `yearseven`, `yeareight`, `yearnine`, `yearten`) VALUES ")
for line in file:
    line = line.strip().split(" ")
    print(line)
    print(f" ('{line[0]}',{line[1]},{line[2]},{line[3]},{line[4]},{line[5]},{line[6]},{line[7]},{line[8]},{line[9]},{line[10]},{line[11]}) ")

