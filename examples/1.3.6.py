class Quilt:
	def __init__(self, width, height):
		self.width = width
		self.height = height
		
	def getArea(self):
		return self.width * self.height
	
comforter = Quilt(6, 6)

area = comforter.getArea

print(area())
		
	