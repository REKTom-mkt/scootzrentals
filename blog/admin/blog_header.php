<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?=$meta_title;?></title>
    <?php if ($bloginfo->search_engine_visibility == 0) { ?>
        <meta name="robots" content="noindex" />
    <?php } ?>

    <meta name="title" content="<?php echo $meta_title; ?>">
    <meta name="description" content="<?php echo $meta_desc; ?>">
    <meta name="author" content="<?php echo $meta_author; ?>">

	<link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
	<link rel="manifest" href="/favicon/site.webmanifest">
	<link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#6beded">
	<link rel="shortcut icon" href="/favicon/favicon.ico">
	<meta name="msapplication-TileColor" content="#222222">
	<meta name="msapplication-config" content="favicon/browserconfig.xml">
	<meta name="theme-color" content="#222222">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" integrity="sha512-H9jrZiiopUdsLpg94A333EfumgUBpO9MdbxStdeITo+KEIMaNfHNvwyjjDJb+ERPaRS6DpyRlKbvPUasNItRyw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="/css/style.css">
</head>

<body id="top">
	<span class="header-height"></span>
	<header>
		<div class="top_header">
			<div class="container-xl">
				<span class="skyblue bold">FREE DELIVERY/PICK-UP</span> to all Disney, Universal and surrounding hotels/resorts. As well as Airbnb, VRBO's and vacation homes within 18 miles!<br/>
				<span class="fst-italic small">*For deliveries outside of the Disney, Universal, Sea World areas, please contact our office to confirm your delivery address prior to booking.</span>
			</div>
		</div>
		<nav class="navbar navbar-expand-md">
			<div class="container-xl cntr">
				<a href="/index.html" class="navbar-brand"><img src="/images/misc/scootz-mobility-scooter-rentals.png" alt="Scootz Mobility Scooter Rentals"></a>

				<div class="navbar-wrap">
					<a href="tel:(407) 270-9900" class="btn-tel"><span><i class="icon-phone"></i> (407) 270-9900</span></a>
	
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<b>MENU</b><span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse ms-md-auto" id="navbarNav">
						<ul class="navbar-nav">
							<li class="nav-item">
								<a class="nav-link" href="/index.html" title="Home">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="/rentals.html" title="Rentals">Rentals</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="/rental-add-ons.html" title="Rental Add-ons">Rental Add-ons</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="/our-fleet.html" title="Our Fleet">Our Fleet</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle active" href="/about.html" role="button" data-bs-toggle="dropdown" aria-expanded="false" title="About Us">About Us</a>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="/about.html" title="About Us">About Us</a></li>
									<li><a class="dropdown-item" href="/blog" title="Blog">Blog</a></li>
								</ul>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="/faqs.html" title="FAQs">FAQs</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="/sales.html" title="Sales">Sales</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="/contact.html" title="Contact Us">Contact Us</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</nav>
	</header>

	<section class="page_banner py-4 py-md-5">
		<div class="container-xl">
			<div class="banner_caption py-4 py-md-5">
				<?php if($htmlfile):?>
                    <h1><?=$blog_title;?></h1>
                    <p class="mb-0"><?=$blog_sub_title;?></p>
                <?php else:?>
                    <h1>Blog</h1>
                <?php endif;?>
			</div>
		</div>
		</div>
	</section>
	<section class="page_banner_bottom text-center bg-dgrey white py-4 py-md-5">
		<div class="container-xl ">
			<h4 class="medium">SAME & NEXT DAY RENTALS</h4>
			<h5 class="normal mb-4">We offer same/next day rentals and delivery. <br class="d-none d-sm-block">Please contact our office for reservations less than 48 hours in advance for availability prior to checkout.</h5>

			<div class="row justify-content-center row-cols-1 row-cols-sm-2 row-cols-lg-4 gy-3">
				<div class="col">
					<a href="tel:(407) 270-9900" class="btn btn-skyblue w-100 semib py-3 h-100 d-inline-flex align-items-center justify-content-center"><span class="icon-phone"></span> (407) 270-9900</a>
				</div>
				<div class="col">
					<a href="/rentals.html" class="btn btn-skyblue w-100 semib py-3">BOOK NOW from <span class="fs-5">$35/day</span></a>
				</div>
			</div>
		</div>
	</section>