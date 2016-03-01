class Repeater:
	echo = ""
	def repeat(self, str):
		Repeater.echo += str
		print(Repeater.echo)

bounce = Repeater()
bounce.repeat("hello")
bounce.repeat("world")

spring = Repeater()
spring.repeat("thanks")