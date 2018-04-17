//app.js

// method ready
$(document).ready(function(){

	// lazyload plugin
	$("img.lazy").lazyload({
			effect : "fadeIn"
	});

  // formulario
  $("#formSent").hide();

  $("#submit").click(function(){

		$(".error").hide();

    var hasError = false;
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

    // bloco de validação
    var assuntoVal = $(".formAssunto");
    if(assuntoVal.val() === '') {
      assuntoVal.attr('placeholder','Ops! Você esqueceu de preencher o assunto!');
      hasError = true;
    }

    var nameVal = $(".formName");
    if(nameVal.val() === '') {
      nameVal.attr('placeholder','Ops! Você esqueceu de preencher seu nome!');
      hasError = true;
    }

    var emailFromVal = $(".formAdress");
    if(emailFromVal.val() === '') {
      emailFromVal.attr('placeholder', 'Ops! Você esqueceu de preencher seu e-mail!');
      hasError = true;
    } else if(!emailReg.test(emailFromVal.val())) {
      emailFromVal.val('').attr('placeholder','Por favor preencha um e-mail válido!');
      hasError = true;
    }

    var messageVal = $(".message");
    if(messageVal.val() === '') {
      messageVal.attr('placeholder','Por favor escreva alguma mensagem!');
      hasError = true;
    }

    // se nao tem erros
    if(hasError === false) {

      // esconde o btn de submit
      $(this).hide();

      // faz o ajax
      $.ajax({
        type: 'POST',
        url: 'sendmail.php',
        data: { name: nameVal.val(), emailFrom: emailFromVal.val(), message: messageVal.val(), subject: assuntoVal.val() },
        success: 	function(data){
          // effects
          $("#formToSend").slideUp('slow');
          $("#formSent").slideDown('slow');
        },
        //dataType: dataType
      });

    }

    return false;

  });

  // load modal image code
  lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true
    });

	// set content in the middle
	setContent();

	// Language dropdown

	///hover container lang menu
	$("#lang-menu").hover(
		function(){
			$(this).addClass("cls-border-lang");
			$(this).children().eq(0).addClass("cls-borderbottom-lang");
			$("#lang-menu ul").stop().slideToggle(100);
		},
		function(){
			$(this).removeClass("cls-border-lang");
			$(this).children().eq(0).removeClass("cls-borderbottom-lang");
			$("#lang-menu ul").stop().slideToggle(100);
		}
	);

	/// click languages
	$("#lang-menu ul li").on("click", function(){
		//select lang and apply changes
		$lang = $(this).text();
		$("#lang-menu div").text($lang);
	});

	$('.lang-pt').on('click', function() {
		$(".text-pt").show();
		$(".text-en").hide();
	});

	$('.lang-en').on('click', function() {
		$(".text-en").show();
		$(".text-pt").hide();
	});

});

// method load
$(window).load(function() {

  // loading effect
  $(".loader").fadeOut(2000);

});

// method resize
$(window).resize(function() {

  // set content in the middle
  setContent();

});

// funcoes
function getWindowHeight() {
	var windowHeight = 0;
	if (typeof(window.innerHeight) == 'number') {
		windowHeight = window.innerHeight;
	}
	else {
		if (document.documentElement && document.documentElement.clientHeight) {
			windowHeight = document.documentElement.clientHeight;
		}
		else {
			if (document.body && document.body.clientHeight) {
				windowHeight = document.body.clientHeight;
			}
		}
	}
	return windowHeight;
}

function setContent() {
	if (document.getElementById('contentHome')) {
		var windowHeight = getWindowHeight();
		if (windowHeight > 0) {
			var contentElement = document.getElementById('contentHome');
			var contentHeight = contentElement.offsetHeight;
			if (windowHeight - contentHeight > 0) {
				contentElement.style.position = 'relative';
				contentElement.style.top = ((windowHeight / 2) - (contentHeight / 2)) + 'px';
			}
			else {
				contentElement.style.position = 'static';
			}
		}
	}
}
