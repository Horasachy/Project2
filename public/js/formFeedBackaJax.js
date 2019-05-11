$(document).ready(function(){
	$("#send").on("click", function(){
		var email = $("#email").val().trim();
		var name = $("#name").val().trim();
		var message = $("#message").val().trim();

		if (email == "") {
			$("#error").text("Введите Email");
			return false;
		}
		else if (name == "") {
			$("#error").text("Введите Имя");
			return false;
		}
		else if (message.lenght < 5) {
			$("#error").text("Введите сообщение");
			return false;
		}

		$("error").text("");

		$.ajax({
			url:'feedback/feedBack',
			type: 'POST',
			cache: false,
			data: {'email': email, 'name': name, 'message': message},
			dataType: 'html',
			beforeSend: function(){
				$("send").prop("disabled", true);
			},
			success: function(data){
				if(!data)
					alert("Были ошибки, сообщение не отправлено!")
				else
					$("#formajax").trigger("resets");
				alert('Ваше сообщение отправленно, ждите обратной связи.');
				$("send").prop("disabled", false);
			}
		})
	});
});
