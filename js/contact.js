$(function () {
	$("#contactForm").find("textarea,input,select").jqBootstrapValidation({
		preventSubmit: !0, submitError: function (t, e, s) {
		}
		, submitSuccess: function (t, e) {
			e.preventDefault(), e.stopPropagation();

			grecaptcha.execute('6LcnRIEpAAAAAFBGwp7K4RH4N--msnkcNy8YKV9v', { action: 'submit' }).then(function (token) {
				$("#token").val(token);

				$.ajax({
					url: "/mail/contact.php", type: "POST", data: t.serialize(), cache: !1,
					success: function (res) {
						const response = JSON.parse(res);
						if (response.code == 200) {
							$("#success").html("<div class='alert alert-success alert-dismissible'>"), $("#success > .alert-success").html("<button type='button' class='btn-close' data-bs-dismiss='alert' aria-hidden='true'>").append("</button>"), $("#success > .alert-success").append("<strong>Your message has been sent! </strong>"), $("#success > .alert-success").append("</div>"), $("#contactForm").trigger("reset");
						} else {
							$("#success").html("<div class='alert alert-danger alert-dismissible'>"), $("#success > .alert-danger").html("<button type='button' class='btn-close' data-bs-dismiss='alert' aria-hidden='true'>").append("</button>"), $("#success > .alert-danger").append("<strong>Sorry, verification failed. Please try again later!"), $("#success > .alert-danger").append("</div>"), $("#contactForm").trigger("reset");
						}
					}, error: function () {
						$("#success").html("<div class='alert alert-danger alert-dismissible'>"), $("#success > .alert-danger").html("<button type='button' class='btn-close' data-bs-dismiss='alert' aria-hidden='true'>").append("</button>"), $("#success > .alert-danger").append("<strong>Sorry, it seems that my mail server is not responding. Please try again later!"), $("#success > .alert-danger").append("</div>"), $("#contactForm").trigger("reset");
					}
				})
			})
		}
		, filter: function () {
			return $(this).is(":visible")
		}
	});
});