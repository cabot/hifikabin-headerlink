$(function () {

	let $headerlink = $("#headerlink"),
		hasSubListId = "has-sublist",
		togglerId = "sub-toggler",
		subListId = "sublist";

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

		let html = '<li id="'+ hasSubListId +'" class="headerlink-list-item has-sublist"><button id="'+ togglerId +'" class="headerlink-link sub-toggler" type="button" aria-controls="sublist" aria-expanded="false"><span class="sr-only">' + revealLang + '</span><svg viewBox="0 0 10 8" width="16" role="presentation" focusable="false"><path d="M1 1h8M1 4h 8M1 7h8" stroke="currentColor" stroke-width="1" stroke-linecap="round"/></svg></button><ul id="' + subListId + '" class="sublist">' + subListItem + '</ul></li>'

		$headerlink.append(html);

		if (subListItem === "") {
			$("#" + hasSubListId).hide();
		} else {
			$("#" + hasSubListId).show();
		}

		$("#" + togglerId).on("click", function (e) {
			e.preventDefault();
			$("#" + togglerId).toggleClass("opened-sub").attr("aria-expanded", $(this).attr("aria-expanded") === "true" ? "false" : "true");
			$("#" + subListId).toggleClass("is-open").slideToggle(200).css("display", "flex");
		});
	}

	function closeSubList() {
		$("body").on("keyup", function (e) {
			if (e.key === "Escape" || e.keyCode === 27) {
				e.preventDefault();
				if ($("#" + subListId).is(":visible")) {
					$("#" + togglerId).attr("aria-expanded", "false").removeClass("opened-sub").focus();
					$("#" + subListId).removeClass("is-open").slideUp(200);
				}
			}
		});
	}

	$(window).on("resize", function () {
		$headerlink.append($("#" + subListId).html());
		$("#" + hasSubListId).remove();
		$("#" + togglerId).attr("aria-expanded", "false");
		fitMenu();
	});

	fitMenu();
	closeSubList();
});
