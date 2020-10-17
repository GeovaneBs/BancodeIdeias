/**
*
* Script de perfil
*
* @author Code Universe
*
**/

(function($, URL, Helpers){

	var form = $('#formIdea')

	var masks = function(){
		//Helpers.cpfMask($('input[name=cpf]'));
	}
	var menuResponsive = function(){
		$('body').on('click', '.fa-bars', function(){
			$('.link-responsive a').toggle()
		})
	}

	var submitIdea = function(){
		$('body').on('click', '#btnSave', function(){
			var name = $('input[name="name"]').val()
			var titleIdea = $('input[name="title-idea"]').val()
			var category = $('input[name="category"]').val()
			var email = $('input[name="email"]').val()
			var description = $('textarea[name="description"]').val()

			if (name == '') {
				swal({
					type: 'error',
					text: 'digite seu nome',
					title: 'Erro!'
				});

				return false;
			}
			if (titleIdea == '') {
				swal({
					type: 'error',
					text: 'Enter title',
					title: 'Erro!'
				});

				return false;
			}
			if (category == '') {
				swal({
					type: 'error',
					text: 'Enter name',
					title: 'Erro!'
				});

				return false;
			}
			if (email == '') {
				swal({
					type: 'error',
					text: 'Enter email',
					title: 'Erro!'
				});

				return false;
			}
			if (description == '') {
				swal({
					type: 'error',
					text: 'Enter description',
					title: 'Erro!'
				});

				return false;
			}
			$.ajax({
				url : URL + '/submitIdea',
				method: 'post',
				dataType: 'json',
				data: form.serialize(),
				complete: function(response) {
					if (response.responseJsin.result) {
						swal({
							type: 'sucess', text: 'Idea sucess', title: 'Sucess'
						}).then(function(){
							window.location.reload();
							return true;
						})
					}else{
						swal({
							type: 'error', text:'Failed Idea', title: 'Erro!!'
						})
						return false;
					}
				}
			})

		})
	} 

	$( document ).ready(function() {
		masks()
		menuResponsive()
		submitIdea()
	});

})($, URL, Helpers);