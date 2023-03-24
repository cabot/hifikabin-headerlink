$(function () {
	$("#sub-toggler").on("click", function (e) {
		$(this).toggleClass("opened")
			   .next().toggleClass("is-open").slideToggle(200).css("display", "flex");
		$(this).attr("aria-expanded", $(this).attr("aria-expanded") === "true" ? "false" : "true");
		e.preventDefault();
	});
});

$(window).resize(function () {
	var windowwidth = $(window).innerWidth();
	if (windowwidth > responsiveWidth) {
		$('#headerlink').attr("style", "");
		$("#sub-toggler").attr("aria-expanded", "false").removeClass("opened")
			.next().removeClass("is-open");
	}
});
