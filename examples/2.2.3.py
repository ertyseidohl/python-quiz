print("""def pow(x, p):
	return x ** p

print(pow(2,3))
	
# OR

def pow(x, p):
	acc = x
	index = p - 1
	while (index > 0):
		index = index - 1
		acc = acc * x
	return acc
	
print(pow(2,3))""")
		