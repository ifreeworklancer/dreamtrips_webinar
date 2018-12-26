<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Dreamtrips Webinar</title>

    <link rel="shortcut icon" href="/images/icon/favicon.png" type="image/png">
	<link rel="stylesheet" href="/fonts/fonts.css">
	<link rel="stylesheet" href="/dist/app.css">

    <script>
      !function (f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function () {
          n.callMethod ?
            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
      }(window, document, 'script',
        'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '589587831461778');
      fbq('track', 'PageView');
	  <?php if ($_SERVER['REQUEST_URI'] == '/') : ?>
      fbq('track', 'ViewContent');
	  <?php else : ?>
      fbq('track', 'CompleteRegistration');
	  <?php endif; ?>
    </script>
    <script src="//widget.manychat.com/187705778784962.js" async="async"></script>
</head>

<body>
<noscript>
    <img height="1" width="1" style="display:none"
         src="https://www.facebook.com/tr?id=589587831461778&ev=PageView&noscript=1"/>
</noscript>

<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
	<symbol id="facebook-icon" viewBox="0 0 448 512">
		<path d="M448 80v352c0 26.5-21.5 48-48 48h-85.3V302.8h60.6l8.7-67.6h-69.3V192c0-19.6 5.4-32.9 33.5-32.9H384V98.7c-6.2-.8-27.4-2.7-52.2-2.7-51.6 0-87 31.5-87 89.4v49.9H184v67.6h60.9V480H48c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48h352c26.5 0 48 21.5 48 48z"></path>
	</symbol>

	<symbol id="instagram-icon" viewBox="0 0 448 512">
		<path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>
	</symbol>

	<symbol id="youtube-icon" viewBox="0 0 576 512">
		<path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"></path>
	</symbol>

	<symbol id="calendar-icon" viewBox="0 0 511.634 511.634">
		<path d="M482.513,83.942c-7.225-7.233-15.797-10.85-25.694-10.85h-36.541v-27.41c0-12.56-4.477-23.315-13.422-32.261   C397.906,4.475,387.157,0,374.591,0h-18.268c-12.565,0-23.318,4.475-32.264,13.422c-8.949,8.945-13.422,19.701-13.422,32.261v27.41   h-109.63v-27.41c0-12.56-4.475-23.315-13.422-32.261C178.64,4.475,167.886,0,155.321,0H137.05   c-12.562,0-23.317,4.475-32.264,13.422c-8.945,8.945-13.421,19.701-13.421,32.261v27.41H54.823c-9.9,0-18.464,3.617-25.697,10.85   c-7.233,7.232-10.85,15.8-10.85,25.697v365.453c0,9.89,3.617,18.456,10.85,25.693c7.232,7.231,15.796,10.849,25.697,10.849h401.989   c9.897,0,18.47-3.617,25.694-10.849c7.234-7.234,10.852-15.804,10.852-25.693V109.639   C493.357,99.739,489.743,91.175,482.513,83.942z M137.047,475.088H54.823v-82.23h82.224V475.088z M137.047,374.59H54.823v-91.358   h82.224V374.59z M137.047,264.951H54.823v-82.223h82.224V264.951z M130.627,134.333c-1.809-1.809-2.712-3.946-2.712-6.423V45.686   c0-2.474,0.903-4.617,2.712-6.423c1.809-1.809,3.946-2.712,6.423-2.712h18.271c2.474,0,4.617,0.903,6.423,2.712   c1.809,1.807,2.714,3.949,2.714,6.423v82.224c0,2.478-0.909,4.615-2.714,6.423c-1.807,1.809-3.946,2.712-6.423,2.712H137.05   C134.576,137.046,132.436,136.142,130.627,134.333z M246.683,475.088h-91.365v-82.23h91.365V475.088z M246.683,374.59h-91.365   v-91.358h91.365V374.59z M246.683,264.951h-91.365v-82.223h91.365V264.951z M356.323,475.088h-91.364v-82.23h91.364V475.088z    M356.323,374.59h-91.364v-91.358h91.364V374.59z M356.323,264.951h-91.364v-82.223h91.364V264.951z M349.896,134.333   c-1.807-1.809-2.707-3.946-2.707-6.423V45.686c0-2.474,0.9-4.617,2.707-6.423c1.808-1.809,3.949-2.712,6.427-2.712h18.268   c2.478,0,4.617,0.903,6.427,2.712c1.808,1.807,2.707,3.949,2.707,6.423v82.224c0,2.478-0.903,4.615-2.707,6.423   c-1.807,1.809-3.949,2.712-6.427,2.712h-18.268C353.846,137.046,351.697,136.142,349.896,134.333z M456.812,475.088h-82.228v-82.23   h82.228V475.088z M456.812,374.59h-82.228v-91.358h82.228V374.59z M456.812,264.951h-82.228v-82.223h82.228V264.951z"
			  fill="#FFF" />
	</symbol>

	<symbol id="prev-icon" viewBox="0 0 129 129">
		<path d="m88.6,121.3c0.8,0.8 1.8,1.2 2.9,1.2s2.1-0.4 2.9-1.2c1.6-1.6 1.6-4.2 0-5.8l-51-51 51-51c1.6-1.6 1.6-4.2 0-5.8s-4.2-1.6-5.8,0l-54,53.9c-1.6,1.6-1.6,4.2 0,5.8l54,53.9z" />
	</symbol>

	<symbol id="next-icon" viewBox="0 0 129 129">
		<path d="m40.4,121.3c-0.8,0.8-1.8,1.2-2.9,1.2s-2.1-0.4-2.9-1.2c-1.6-1.6-1.6-4.2 0-5.8l51-51-51-51c-1.6-1.6-1.6-4.2 0-5.8 1.6-1.6 4.2-1.6 5.8,0l53.9,53.9c1.6,1.6 1.6,4.2 0,5.8l-53.9,53.9z" />
	</symbol>

	<symbol id="plane-icon" viewBox="0 0 16.125 16.125">
		<path d="M16.108,3.218c0.216,0.474-1.67,1.794-4.213,2.947c-0.163,0.072-0.345,0.155-0.541,0.241   l-2.432,8.406L8.238,15.12l0.288-7.545C6.593,8.344,4.446,9.136,3.13,9.512l-0.388,3.165L2.55,12.768L2.293,9.71   C2.056,9.747,1.912,9.744,1.886,9.682C1.858,9.621,1.948,9.51,2.131,9.358L0,7.155l0.196-0.09l2.637,1.792   c1.15-0.744,3.159-1.84,5.012-2.796L1.968,1.317l0.679-0.312L10.578,4.7c0.195-0.092,0.376-0.175,0.538-0.249   C13.659,3.295,15.894,2.745,16.108,3.218z" />
	</symbol>

</svg>

<header id="app-header">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-sm-5 col-lg-3">
				<a href="/" class="logo">
					<div class="logo__img" style="background-image: url('/images/icon/logo/logo.png');"></div>
				</a>
			</div>
			<div class="col-sm-6 col-lg-4 d-flex justify-content-between align-items-center py-2 px-sm-0 mt-3 mt-sm-0">
				<ul class="social-list list-unstyled d-flex">
					<li class="social-list-item social-list-item--facebook mr-2 mr-sm-3">
						<a href="https://www.facebook.com/dreamtripsua/" target="_blank">
							<svg width="15" height="15">
								<use xlink:href="#facebook-icon"></use>
							</svg>
						</a>
					</li>
					<li class="social-list-item social-list-item--instagram mr-2 mr-sm-3">
						<a href="https://www.instagram.com/dreamtrips_ukraine_official/" target="_blank">
							<svg width="15" height="15">
								<use xlink:href="#instagram-icon"></use>
							</svg>
						</a>
					</li>
					<li class="social-list-item social-list-item--youtube">
						<a href="https://www.youtube.com/channel/UC0tgV8JCzYNxGnjT67KPFEQ?view_as=subscriber"
                           target="_blank">
							<svg width="15" height="15">
								<use xlink:href="#youtube-icon"></use>
							</svg>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</header>