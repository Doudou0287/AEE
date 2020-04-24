document.getElementById("envoyer").addEventListener("click", function(event) {
	    var erreur;
	    var inputs = document.forms["contacter"];
	    var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;


	    var email = inputs["email"];
	    var msg = inputs["textarea"];

	    if ((email.value.match(regex) == null)) {
		            email.classList.add("invalid");
		            erreur = "email invalide"
		        }
	    email.addEventListener('input', function() {
		            if ((email.value.match(regex) == null)) {
				                email.classList.add("invalid");
				                erreur = "email invalide"
				            } else {
						                email.classList.remove("invalid");
						                erreur = ""
						            }
		        })
	    if (msg.value.length == 0) {
		            msg.classList.add("invalid");
		            erreur = "message trop court"
		        }
	    msg.addEventListener('input', function() {
		            if (msg.value.length == 0) {
				                msg.classList.add("invalid");
				                erreur = "message trop court"
				            } else {
						                msg.classList.remove("invalid");
						                erreur = ""
						            }
		        })

	    if (erreur) {
		            event.preventDefault();
		            document.getElementById("erreur").innerHTML = erreur;
		            return false;
		        }

});

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
	    showSlides(slideIndex += n);
}

function currentSlide(n) {
	    showSlides(slideIndex = n);
}

function showSlides(n) {
	    var i;
	    var slides = document.getElementsByClassName("mySlides");
	    var dots = document.getElementsByClassName("demo");
	    var captionText = document.getElementById("caption");
	    if (n > slides.length) { slideIndex = 1 }
	    if (n < 1) { slideIndex = slides.length }
	    for (i = 0; i < slides.length; i++) {
		            slides[i].style.display = "none";
		        }
	    for (i = 0; i < dots.length; i++) {
		            dots[i].className = dots[i].className.replace(" active", "");
		        }
	    slides[slideIndex - 1].style.display = "block";
	    dots[slideIndex - 1].className += " active";
	    captionText.innerHTML = dots[slideIndex - 1].alt;
}

var btnTop = document.getElementById("btnScrollToTop");

btnTop.addEventListener("click", function() {

	    window.scrollTo({
		            top: 0,
		            left: 100,
		            behavior: "smooth",


		        })


});

var i = 0,
	    text;
text = "Bienvenue sur notre site !"

function typing() {
	    if (i < text.length) {
		            document.getElementById("titlebine").innerHTML += text.charAt(i);
		            i++;
		        }
	    setTimeout(typing, 100);
}
typing();

function toggleSidebar() {
	    document.getElementById("sidebar").classList.toggle('active');
}

