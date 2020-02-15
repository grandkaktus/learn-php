"use strict";

/* Для задания 1 */
$('button#buttonForm1').on('click', function(){	
	$.ajax({
		type: "POST",
		url: "php/task1.php",
		dataType: 'json',
		data: {
			year: document.forms.form1.elements.year.value
		},
		error: function(){
			$('span#answer1').text('ОШИБКА ОТПРАВКИ');
		},
		success: function(data){
			$('span#answer1').text(data);
		}
	});	
} );

/* Для задания 2 */
$('button#buttonForm2').on('click', function(){	
	$.ajax({
		type: "POST",
		url: "php/task2.php",
		dataType: 'json',
		data: {
			pref: document.forms.form2.elements.pref.value
		},
		error: function(){
			$('#answer2').html('<li>ОШИБКА ОТПРАВКИ</li>');
		},
		success: function(data){
			$('#answer2').html(data);
		}
	});	
} );

/* Для задания 3 */
$('button#buttonForm3').on('click', function(){	
	$.ajax({
		type: "POST",
		url: "php/task3.php",
		dataType: 'json',
		data: {
			smuzy: document.forms.form3.elements.smuzy.value,
			hipsters: document.forms.form3.elements.hipsters.value
		},
		error: function(){
			$('#answer3').text('ОШИБКА ОТПРАВКИ');
		},
		success: function(data){
			$('#answer3').text(data);
		}
	});	
} );
