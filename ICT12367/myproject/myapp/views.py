from django.shortcuts import render
from django.http import HttpResponse

# Create your views here.
def index(request):
    return HttpResponse("<h1>Hello, world. You're at the polls index.</h1>")

def about(request):
    return HttpResponse("<h1>This is the about page</h1>")

def form(request):
    return render(request, 'form.html')

def contact(request):
    return HttpResponse("<h1>ติดต่อ ผู้สอน</h1>") 