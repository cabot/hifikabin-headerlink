$(function () {
	let $toggler = $("#sub-toggler"),
		$subList = $toggler.next();

	$toggler.on("click", function (e) {
		e.preventDefault();
		$(this).attr("aria-expanded", $(this).attr("aria-expanded") === "true" ? "false" : "true").toggleClass("opened-sub");
		$subList.toggleClass("is-open").slideToggle(200).css("display", "flex");
	});

	var closeSubList = function () {
		if ($subList.is(":visible")) {
			$toggler.attr("aria-expanded", "false").removeClass("opened-sub").focus();
			$subList.removeClass("is-open").slideToggle(200);
		}
	};

	$("body").on("keyup", function (e) {
		if (e.key === "Escape" || e.keyCode === 27) {
			e.preventDefault();
			closeSubList();
		}
	});

	$(window).resize(function () {
		var windowwidth = $(window).innerWidth();
		if (windowwidth > responsiveWidth) {
			$("#headerlink").attr("style", "");
			$toggler.attr("aria-expanded", "false").removeClass("opened-sub");
			$subList.removeClass("is-open");
		}
	});
});
