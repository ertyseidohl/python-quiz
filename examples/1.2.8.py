def getTax(amt):
	return amt * 0.1

def getTip(amt):
	return amt * 0.8

print(getTax(getTip(100)))