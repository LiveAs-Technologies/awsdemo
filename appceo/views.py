from django.shortcuts import render
from django.http import HttpResponse
import random
from .models import appceo_data
# Create your views here.

def app_ceos(request):
	data =	appceo_data.objects.all()
	context={
		"app_ceos" : data

	}
	return render(request, "list.html",context)

def index(request):
	num=random.randint(1,10000000000)
	return render(request, "home.html",{"num":num})

def about(request):
	num=random.randint(1,10000000000)
	return render(request, "about.html")

def contact(request):
	num=random.randint(1,10000000000)
	return render(request, "contact.html")