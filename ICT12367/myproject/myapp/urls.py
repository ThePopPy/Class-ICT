from django.urls import path
from myapp import views

urlpatterns = [
    path('', views.index),
    path('about/', views.about),
    path('form/',views.form, name='form'),
    path('contact/',views.contact)
]

