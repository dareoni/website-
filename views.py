from django.shortcuts import render
from django.views import View
from django.http import HttpResponse
from django.template import loader
from .models import Member
from .forms import ContactForm

class Home(View):
    def get(self, request):
        return render(request, 'home.html')

class About(View):
    def get(self, request):
        pips = Member.objects.all().values()
        return render(request, 'about.html', {'pips': pips})

class Contact(View):
    def get(self, request):
        return render(request, 'contact.html')

    def post(self, request):
        if request.method == "POST":
            form = ContactForm(request.POST)
            if form.is_valid():
                name = form.cleaned_data["name"]
                email = form.cleaned_data["email"]
                message = form.cleaned_data["message"]
                return HttpResponse('Form submitted successfully.')
            return render(request, 'contact.html', {'form': form})
