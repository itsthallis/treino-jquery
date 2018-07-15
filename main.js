$(document).ready(function(){
	$("#greetings p:first").css("color", "blue");
	$("#buttons1 a").css("color", "white");
});

$("#buttons1 #botao1").click(function(){
	$("#greetings p:nth-of-type(2)").css("font-weight", "bold");
});

$("#buttons1 #botao2").click(function(){
	$("#greetings p:last").before("<h1>Oieee!</h1>") //.before() pega formatação html
});

$("#buttons1 #botao3").click(function(){
	$("#greetings p").each(function(index,element){
		$(element).css("font-size", "25px")
		.css('color', 'red');
	})
});