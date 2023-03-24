$(function () {

	let $headerlink = $("#headerlink");

	function fitMenu() {

		let itemWidth = 0,
			menuWidth = $headerlink.width() - 60,
			subListItem = "";

		$headerlink.children().each(function () {
			itemWidth += $(this).outerWidth();
			if (menuWidth < itemWidth) {
				subListItem += $("<div>").append($(this).clone()).html();
				$(this).remove();
			}
		});

		let subList = '<li id="has-sublist" class="has-sublist"><a href="#" role="button" id="sub-toggler" class="headerlink-link sub-toggler" aria-controls="sublist" aria-expanded="false" aria-pressed="false"><span class="sr-only">' + revealLang + '</span><svg viewBox="0 0 10 8" width="16" role="presentation" focusable="false"><path d="M1 1h8M1 4h 8M1 7h8" stroke="currentColor" stroke-width="1" stroke-linecap="round"/></svg></a><ul id="sublist" class="sublist">' + subListItem + '</ul></li>'

		$headerlink.append(subList);

		$("#sub-toggler").on("click", function (e) {
			$(this).toggleClass("opened")
				   .next().toggleClass("is-open").slideToggle(200).css("display", "flex");

			if ($(this).attr("aria-expanded") === "false") {
				$(this).attr({ "aria-expanded": (t = "true"), "aria-pressed": t });
			} else {
				$(this).attr({ "aria-expanded": (f = "false"), "aria-pressed": f });
			}

			e.preventDefault();
		});

		if (subListItem == "") {
			$("#has-sublist").hide();
		} else {
			$("#has-sublist").show();
		}

	}
	fitMenu();

	$(window).on("resize", function () {
		$headerlink.append($("#sublist").html());
		$("#has-sublist").remove();
		$("#sub-toggler").attr({ "aria-expanded": (f = "false"), "aria-pressed": f });
		fitMenu();
	});

});
