function spectrumize() {
	$(".input-color").spectrum({
		type: "component",
		showPalette: false,
		showInput: true,
		showButtons: false,
		allowEmpty: false
	});
}

// Show/hide responsive input width
$(function () {
	let $responsiveChoice = $("#headerlink_responsive"),
		responsiveVal = $responsiveChoice.val(),
		$responsiveWidthWrap = $responsiveChoice.closest("dl").next();

	if (responsiveVal == 1) {
		$responsiveWidthWrap.show();
	} else {
		$responsiveWidthWrap.hide();
	}

	$responsiveChoice.on("change", function () {
		responsiveVal = $(this).val();

		if (responsiveVal == 1) {
			$responsiveWidthWrap.slideDown(200);
		} else {
			$responsiveWidthWrap.slideUp(200);
		}
	});
});


function preview() {
	let $hoverBgColor = $("#headerlink_hover_colour"),
		$mainPreview = $("#headerlink-preview"),
		inputHeight = $hoverBgColor.outerHeight();

	// Live preview of background-color on hover
	$hoverBgColor.on("change", function () {
		$("#acp_board").css("--headerlink-hover-bg", $(this).val());
	});

	// Live preview of links alignment
	$("#headerlink_align").on("change", function () {
		if ($(this).val() == 0) {
			$mainPreview.css("--justify-content", "start");
		} else if ($(this).val() == 1) {
			$mainPreview.css("--justify-content", "center");
		} else if ($(this).val() == 2) {
			$mainPreview.css("--justify-content", "end");
		}
	});

	$(".link-row").each(function () {
		let $linkRow = $(this),
			$legendRow = $("legend", $linkRow),
			$mainPreviewItem = $mainPreview.find("[data-row=" + $linkRow.attr("id") + "]");

		// Live preview of link name
		$(".headerlink_name_input", $linkRow).each(function () {
			$(this).on("input", function () {
				let linkName;

				if (!$(this).val()) {
					linkName = defaultLegendLang;
				} else {
					linkName = $(this).val();
				}
				$("span", $legendRow).text(linkName);
				$mainPreviewItem.find("span").text(linkName);
			});
		});

		// Live preview of link title
		$(".headerlink_hover", $linkRow).each(function () {
			$(this).on("change", function () {
				let titleValue;

				if (!$(this).val()) {
					titleValue = "";
				} else {
					titleValue = $(this).val();
				}
				$legendRow.attr("title", titleValue);
				$mainPreviewItem.find("a").attr("title", titleValue);
			});
		});

		// Live preview of link background-color
		$(".input-color", $linkRow).each(function () {
			if ($(this).data("css-var")) {
				$(this).on("change", function () {
					$legendRow.css($(this).data("css-var"), $(this).val());
					$mainPreviewItem.css($(this).data("css-var"), $(this).val());
				});
			}
		});

		// Show/hide text-shadow settings
		// Live preview of link text-shadow
		$('[data-has-toggler*="text_shadow_"]', $linkRow).each(function () {
			let optionSelected = $("option:selected", $(this)),
				$siblings = $(this).siblings().filter("[data-is-togglable=" + $(this).data("has-toggler") + "]"),
				shadowDataAttr = $siblings.find(".text-shadow").data("css-var");

			if (optionSelected.val() == 1) {
				$siblings.show();
			} else {
				$siblings.hide().find(".sp-colorize-container").width(inputHeight + "px");
			}

			$("select", $(this)).on("change", function () {
				if ($(this).val() == 1) {
					$legendRow.css(shadowDataAttr, $siblings.find(".text-shadow").val());
					$siblings.slideDown(200);
					$mainPreviewItem.css(shadowDataAttr, $siblings.find(".text-shadow").val());
				} else if ($(this).val() == 0) {
					$legendRow.css(shadowDataAttr, "transparent");
					$siblings.slideUp(200);
					$mainPreviewItem.css(shadowDataAttr, "transparent");
				}
			});
		});

		// Show/hide icon settings
		// Live preview of icon settings
		$('[data-has-toggler*="icon_sw_"]', $linkRow).each(function () {
			let optionSelected = $("option:selected", $(this)),
				$siblings = $(this).siblings().filter("[data-is-togglable=" + $(this).data("has-toggler") + "]"),
				cssClass = "";

			if (optionSelected.val() == 1) {
				$siblings.show();
				$legendRow.find("i").attr("class", "icon fa-fw " + $siblings.find(".input-fa-icon").val() + "");
			} else {
				$siblings.hide().find(".sp-colorize-container").width(inputHeight + "px");
			}

			// Live preview of icon
			$siblings.find(".input-fa-icon").on("input", function () {
				if (!$(this).val()) {
					cssClass = "";
				} else {
					cssClass = "icon fa-fw " + $(this).val() + "";
				}
				$legendRow.find("i").attr("class", cssClass);
				$mainPreviewItem.find("i").attr("class", cssClass);
			});

			// Show/hide icon settings
			$("select", $(this)).on("change", function () {
				if ($(this).val() == 1) {
					cssClass = "icon fa-fw " + $siblings.find(".input-fa-icon").val() + "";
					$siblings.slideDown(200);
				} else {
					cssClass = "";
					$siblings.slideUp(200);
				}
				$legendRow.find("i").attr("class", cssClass);
				$mainPreviewItem.find("i").attr("class", cssClass);
			});
		});

	});
}

function new_clone() {
	let $lastFieldset = $("#headerlink_links").find("fieldset").last();

	$lastFieldset.clone()
		.find("legend").attr("style", "").end()
		.find("legend").attr("title", "").end()
		.find("legend span").text(defaultLegendLang).end()
		.find("legend i").attr("class", "").end()
		.find("input:text, input[type='url']").val("").end()
		.find(".input-color").unwrap().end()
		.find(".sp-colorize-container").remove().end()
		.find(".transparent").val("transparent").end()
		.find("[data-text-color], [data-icon-color]").val("#105289").end()
		.appendTo("#headerlink_links");

	spectrumize();
	preview();
}

$(function () {
	spectrumize();
	preview();
	$("#clone_btn").on("click", function () {
		new_clone();
	});
});
