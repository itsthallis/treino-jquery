
$(document).ready(function(){
	$("#greetings p:first").css("color", "blue");
	$("#buttons1 button").css("color", "white");
});

$(function(){ // Abreviatura para (document).ready function()
	$("#greetings p").on("mouseleave mouseover", zoom);
	
	function zoom (evt){
		$(this).toggleClass("zoom");
	}

});


$("#buttons1 #botao1").click(function(){
	$("#greetings p:nth-of-type(2)").css("font-weight", "bold");
});

$("#buttons1 #botao2").one("click", function() { // Método one() faz algo acontecer uma única vez
	$("#greetings p:last").before("<h1>Oieee!</h1>"); // before() pega formatação html
});

$("#buttons1 #botao3").click(function(){
	$("#greetings p").each(function(index,element){
		$(element).css("font-size", "25px")
		.css('color', 'red');
	})
});

$("#buttons1 #botao4").click(function(){
	var parent = $("#greetings p").parent(); // Método parent() seleciona pai de um elemento
	(parent).css("border", "solid red 2px");
});

$("#buttons1 #botao5").click(function(){
	$("#greetings p").eq(2) // Seleciona um objeto com na mesma hierarquia pelo index. Neste caso foi o 3º <p>. 
	.css('border', 'dashed aquamarine 2px');
});

$("#buttons1 #botao6").click(function(){
	if ($("#greetings input").val()!=""){ // Verifica se o valor do input é igual a ="" e executa a função apenas se tiver algo escrito.
		var name = $("#greetings input").val(); // Método Val() pega valor do input.
		$("#greetings #title span").text(name + "!"); // Valor do input vai no título após clique no botão.
	}
	else{}
});


// ---- Row 2 -----------------------------------------------------------------------------------------------

$("#buttons2 #botao1").on("click", function(){
	var txt = "Olá";
	alert(txt);
});

$("#buttons2 #botao2").click(function(){
	$("#greetings p").eq(1).hide(500);
	$(this).hide(500)
});