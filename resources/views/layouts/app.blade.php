<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Al-Reem</title>

<style>
body{
font-family: Arial;
margin:0;
}

nav{
display:flex;
justify-content:space-between;
padding:15px;
background:#0d3b66;
color:white;
}

nav a{
color:white;
margin:0 10px;
text-decoration:none;
}

.container{
padding:40px;
}

.gallery{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(300px,1fr));
gap:20px;
}

.gallery img{
width:100%;
border-radius:10px;
}

.branch-card{
border:1px solid #ddd;
padding:20px;
margin:10px 0;
border-radius:10px;
}
/* Footer */

.footer{
background:#0d3b66;
color:white;
margin-top:60px;
}

.footer-container{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
gap:30px;
padding:40px;
}

.footer-section h3,
.footer-section h4{
margin-bottom:10px;
}

.footer-section ul{
list-style:none;
padding:0;
}

.footer-section ul li{
margin-bottom:8px;
}

.footer-section a{
color:white;
text-decoration:none;
}

.footer-bottom{
border-top:1px solid rgba(255,255,255,0.2);
padding:15px;
text-align:center;
}

.signature{
opacity:0.9;
font-size:14px;
margin-top:5px;
}
/* Slideshow */

.slideshow-container{
position:relative;
max-width:100%;
margin:auto;
}

.slide{
display:none;
}

.slide img{
width:100%;
height:500px;
object-fit:cover;
border-radius:10px;
}

/* Fade animation */
.fade{
animation:fadeEffect 1s;
}

@keyframes fadeEffect{
from{opacity:.4}
to{opacity:1}
}

/* Navigation buttons */

.prev,.next{
cursor:pointer;
position:absolute;
top:50%;
padding:12px;
color:white;
font-size:22px;
font-weight:bold;
background:rgba(0,0,0,0.4);
border-radius:5px;
transform:translateY(-50%);
}

.next{ right:10px; }
.prev{ left:10px; }

/* Mobile responsiveness */

@media(max-width:768px){
.slide img{
height:250px;
}
}
</style>

</head>

<body>

<nav>
<div><strong>Al-Reem</strong></div>

<div>
<a href="/{{ app()->getLocale() }}">{{ __('messages.home') }}</a>
<a href="/{{ app()->getLocale() }}/about">{{ __('messages.about') }}</a>
<a href="/{{ app()->getLocale() }}/branches">{{ __('messages.branches') }}</a>
<a href="/{{ app()->getLocale() }}/contact">{{ __('messages.contact') }}</a>
</div>

<div>
<a href="/en">EN</a> | <a href="/ar">AR</a>
</div>
</nav>

<div class="container">
@yield('content')
</div>
<footer class="footer">

<div class="footer-container">

<!-- Company Info -->
<div class="footer-section">
<h3>Al-Reem</h3>
<p>{{ __('messages.footer_about') }}</p>
</div>

<!-- Branches -->
<div class="footer-section">
<h4>{{ __('messages.branches') }}</h4>
<ul>
<li>Lebanon — Lala, West Bekaa</li>
<li>Canada</li>
<li>Brazil</li>
</ul>
</div>

<!-- Quick Links -->
<div class="footer-section">
<h4>{{ __('messages.quick_links') }}</h4>
<ul>
<li><a href="/{{ app()->getLocale() }}">{{ __('messages.home') }}</a></li>
<li><a href="/{{ app()->getLocale() }}/about">{{ __('messages.about') }}</a></li>
<li><a href="/{{ app()->getLocale() }}/branches">{{ __('messages.branches') }}</a></li>
<li><a href="/{{ app()->getLocale() }}/contact">{{ __('messages.contact') }}</a></li>
</ul>
</div>

</div>

<!-- Bottom Bar -->
<div class="footer-bottom">
<p>
© {{ date('Y') }} Al-Reem. {{ __('messages.rights') }}
</p>

<p class="signature">
{{ __('messages.developed_by') }} <strong><a href="https://www.facebook.com/profile.php?id=100089528832612" style="color:#f0f8ff;">Web Weavers</a></strong>
</p>
</div>

</footer>
<script>
let slideIndex = 0;
showSlides();

function showSlides(){
let slides = document.getElementsByClassName("slide");

for(let i=0;i<slides.length;i++){
slides[i].style.display="none";
}

slideIndex++;
if(slideIndex > slides.length){ slideIndex = 1; }

slides[slideIndex-1].style.display="block";

setTimeout(showSlides,4000); // auto change every 4 seconds
}

function changeSlide(n){
slideIndex += n - 1;
showSlides();
}
</script>
</body>
</html>