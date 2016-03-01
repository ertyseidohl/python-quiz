vowels = "a,e,i,o,u".split(",")

words = "howl:eat:crick".split(":")

for word in words:
	for letter in word:
		if letter in vowels:
			print(letter)
