class Shape:
	def __init__(self, sides):
		self.sides = sides
		
	def __str__(self):
		return "This shape has " + str(self.sides) + " sides"
	
class Square(Shape):
	def __init__(self):
		super().__init__(4)

f = Square()
print(f)