$(function () {
	$("#subscribeForm").find("textarea,input,select").jqBootstrapValidation({
		preventSubmit: !0, submitError: function (t, e, s) {
		}
		, submitSuccess: function (t, e) {
			e.preventDefault(), e.stopPropagation();

			grecaptcha.execute('6LcnRIEpAAAAAFBGwp7K4RH4N--msnkcNy8YKV9v', { action: 'submit' }).then(function (token) {
				$("#token2").val(token);

				$.ajax({
					url: "/mail/subscribe.php", type: "POST", data: t.serialize(), cache: !1,
					success: function (res) {
						const response = JSON.parse(res);
						if (response.code == 200) {
							$("#success2").html("<div class='alert alert-success alert-dismissible mt-3'>"), $("#success2 > .alert-success").html("<button type='button' class='btn-close' data-bs-dismiss='alert' aria-hidden='true'>").append("</button>"), $("#success2 > .alert-success").append("<strong>Thank you for subscribing! </strong>"), $("#success2 > .alert-success").append("</div>"), $("#subscribeForm").trigger("reset");
						} else {
							$("#success2").html("<div class='alert alert-danger alert-dismissible mt-3'>"), $("#success2 > .alert-danger").html("<button type='button' class='btn-close' data-bs-dismiss='alert' aria-hidden='true'>").append("</button>"), $("#success2 > .alert-danger").append("<strong>Sorry, verification failed. Please try again later!"), $("#success2 > .alert-danger").append("</div>"), $("#subscribeForm").trigger("reset");
						}
					}, error: function () {
						$("#success2").html("<div class='alert alert-danger alert-dismissible mt-3'>"), $("#success2 > .alert-danger").html("<button type='button' class='btn-close' data-bs-dismiss='alert' aria-hidden='true'>").append("</button>"), $("#success2 > .alert-danger").append("<strong>Sorry, it seems that my mail server is not responding. Please try again later!"), $("#success2 > .alert-danger").append("</div>"), $("#subscribeForm").trigger("reset");
					}
				})
			})
		}
		, filter: function () {
			return $(this).is(":visible")
		}
	});
});