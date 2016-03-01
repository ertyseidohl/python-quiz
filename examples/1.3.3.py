class Wizard:
	def __init__(self, magic):
		self.magic = magic
	def cast(self, otherWizard):
		otherWizard.magic = otherWizard.magic - self.magic
		
merlin = Wizard(100)
gandalf = Wizard(25)

gandalf.cast(merlin)

print(merlin.magic)