// Записываем в перемную форму для отправки отзывов
var reviewForm = document.querySelector("#review_form");
// Записываем в перемную форму для поиска отзывов
var searchFeedback = document.querySelector("#search_feedback");

/* -------------  Ajax запрос для отправки отзывов-------------*/
if(reviewForm != null) {
	reviewForm.onsubmit = function(event) {
		event.preventDefault();
		// console.dir(event);
		var ot = reviewForm.querySelector("input[name='user_id']");
		// var img = reviewForm.querySelector("input[name='img']");
		var review = reviewForm.querySelector("textarea");
		// console.dir(img);

			var data = 	"user_id=" + ot.value +
							"&review=" + review.value;
						console.dir(data);		
		var ajax = new XMLHttpRequest();
			ajax.open("POST", reviewForm.action, false);
			ajax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
			ajax.send(data);
			// console.dir(ajax);

		var feedbackBlocks = document.querySelector("#feedback_blocks");
			feedbackBlocks.innerHTML = ajax.response;
			review.value = null;
			// alert("Review successfully sent");
			reviewModal.style.display = "block";
	}
}

/* -------------  Ajax запрос для поиска отзывов-------------*/
if(searchFeedback != null) {
	searchFeedback.onsubmit = function(event) {
	event.preventDefault();
	
	var search = searchFeedback.querySelector("input[name='search-feedback']");
	console.dir(search);

		var data = 	"search-feedback=" + search.value;
		
	var ajax = new XMLHttpRequest();
		ajax.open("POST", searchFeedback.action, false);
		ajax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		ajax.send(data);
		console.dir(ajax);

	var feedbackBlocks = document.querySelector("#feedback_blocks");
		feedbackBlocks.innerHTML = ajax.response;
		search.value = "";
	}
}
/*----------------------------End Ajax запрос для поиска отзывов-------------------*/

var reviewModal = document.querySelector("#review-modal");
// Закрыть модальное окно
var reviewModalCloseBtn = document.querySelector("#review-modal .close");
reviewModalCloseBtn.onclick = function() {
	reviewModal.style.display = "none";
}

var reviewModalEnterBtn = document.querySelector("#review-modal .enter-btn");
reviewModalEnterBtn.onclick = function() {
	reviewModal.style.display = "none";
}

