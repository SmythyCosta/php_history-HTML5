$(document).ready(function(){

	var nav, views, fetchAndInsert;

	nav 	= $('nav#main');
	views	= $('section#viewPage');

	//Fetches and inserts content into the container
	fetchAndInsert = function(href){
		$.ajax({
			url: 'http://localhost/php_history-HTML5/views/' + href.split('/').pop(),
			method:'GET',
			cache: false,
			success: function(data){
				views.html(data);
			},
			error: function(){
				console.log('Erro in GET Ajax function => fetchAndInsert');
			}
		});
	};

	//User goes back/forward 
	$(window).on('popstate', function(){
		fetchAndInsert(location.pathname);
	});


	nav.find('a').on('click', function(e) {
		var href = $(this).attr('href');
		
		//Manipulation History
		history.pushState(null, null, href);
		
		//Fetch and insert views
		fetchAndInsert(href);
		
		e.preventDefault();
	});

});	