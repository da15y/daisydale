$("form").submit(function(e){
    e.preventDefault();

	$.post("/cabinetHandler.php", $("form").serialize(), function(data){
       $(".message").html(data);
	});
});