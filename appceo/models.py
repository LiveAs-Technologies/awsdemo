from django.db import models

# Create your models here.
class appceo_data(models.Model):
	name		=	models.CharField(max_length=120)
	timestamp	=	models.DateTimeField(auto_now=False)	
	def __str__(self):
		return self.name