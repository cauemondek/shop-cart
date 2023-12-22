$(document).ready(() => {
    console.log("JQuery Loaded");

    if ($("#cartEmpty").length == 1) {
        $("#purshace").css("visibility", "hidden");
    } else {
        $("#purshace").css("visibility", "visible");
    }

    const cart = $(".cart");
    let cartOpen = 0;

    $("#clickCart").on("click", () => {
        if (cartOpen == 0) {
            cartOpen++;

            $(cart).css("display", "flex");
            setTimeout(() => {
                $(cart).width(600);
            }, 130);
        } else {
            cartOpen--;

            $(cart).width(0);
            setTimeout(() => {
                $(cart).hide();
            }, 360);
        }
    });

    if ($("#purshaceComplete").length == 1) {
        $("body").css("cursor","wait");
        confetti(
            {
                particleCount: 400,
                spread: 300,
            }
        );

        setTimeout(() => {
            window.location.reload();
        }, 3500);
    }
});
