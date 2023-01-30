function spectrumize() {
    $(".input-color").spectrum({
        type: "component",
        showPalette: false,
        showInput: true,
        clickoutFiresChange: false,
        allowEmpty: false,
        chooseText: confirmLang,
        cancelText: cancelLang
    });
}

function change_legend() {
    $(".headerlink_name_input").on("change", function () {
        let thisValue;

        if (!$(this).val()) {
            thisValue = defaultLegendLang;
        } else {
            thisValue = $(this).val();
        }

        $(this).closest("fieldset").find("legend").text(thisValue);
    });
}

function toggle_options() {
    let inputHeight = $("#headerlink_links").find(".input-color").first().outerHeight();

    $("[data-has-toggler]").each(function () {
        let optionSelected = $("option:selected", $(this)),
            isTogglable = $(this).siblings().filter("[data-is-togglable=" + $(this).data("has-toggler") + "]");

        if (optionSelected.val() == 1) {
            isTogglable.show();
        } else {
            isTogglable.hide()
                .addClass("is-hidden")
                .find(".sp-colorize-container")
                .width(inputHeight + "px");
        }

        $("select", $(this)).on("change", function () {
            if ($(this).val() == 1) {
                isTogglable.slideDown(200).removeClass("is-hidden");
            } else if ($(this).val() == 0) {
                isTogglable.slideUp(200).addClass("is-hidden");
            }
        });
    });
}

function new_clone() {
    let $lastFieldset = $("#headerlink_links").find("fieldset").last();

    $lastFieldset.clone()
        .find("legend").text(defaultLegendLang).end()
        .find("input:text").val("").end()
        .find(".input-color").unwrap().end()
        .find(".sp-colorize-container").remove().end()
        .find(".transparent").val("transparent").end()
        .find("[data-text-color], [data-icon-color]").val("#105289").end()
        .appendTo("#headerlink_links");

    spectrumize();
    toggle_options();
    change_legend();
}

spectrumize();
toggle_options();
change_legend();

$("#clone_btn").on("click", function () {
    new_clone();
});
