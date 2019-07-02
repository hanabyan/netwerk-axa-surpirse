$(function() {

	//make sure that document height is same as window height
	var documentHeight = $(window).height();
	var mainContent = $('body');
	var footer = $('footer')
	if(mainContent.height() + footer.outerHeight(true) < documentHeight) {
		const minHeight = documentHeight - mainContent.height() + 24;
		footer.css("padding-top", minHeight);
	}
});