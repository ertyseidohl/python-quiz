def a(b):
	if (b == 0):
		return 1
	return b * a(b - 1);

print(a(3))