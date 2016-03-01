class Shape:
	def __init__(self, sides):
		self.sides = sides
	def sumOfInteriorAngles(self):
		return (self.sides - 2) * 180
	
square = Shape(4)
print(square.sumOfInteriorAngles())

triangle = Shape(3)
print(triangle.sumOfInteriorAngles())