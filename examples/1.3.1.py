class Image:
	def __init__(self, url):
		self.source = url

img = Image("cat.jpeg")
print(img.url)