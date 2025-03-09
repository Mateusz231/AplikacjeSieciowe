<?php
/* Smarty version 3.1.31, created on 2025-03-10 00:25:17
  from "cms_stylesheet:ChessCSS" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_67ce235dcd0b21_98928293',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3dd7eed5a4062f77a92efedc62f25d77844de758' => 
    array (
      0 => 'cms_stylesheet:ChessCSS',
      1 => '1741562715',
      2 => 'cms_stylesheet',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ce235dcd0b21_98928293 (Smarty_Internal_Template $_smarty_tpl) {
?>
/* cmsms stylesheet: ChessCSS modified: 10.03.2025 00:25:15 */
@import url("https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700,800");
@import url("C:\xampp\htdocs\AplikacjeSieciowe\cmsms\template\assets\cssfontawesome-all.min.css");

/*
	ZeroFour by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
*/

html, body, div, span, applet, object,
iframe, h1, h2, h3, h4, h5, h6, p, blockquote,
pre, a, abbr, acronym, address, big, cite,
code, del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var, b,
u, i, center, dl, dt, dd, ol, ul, li, fieldset,
form, label, legend, table, caption, tbody,
tfoot, thead, tr, th, td, article, aside,
canvas, details, embed, figure, figcaption,
footer, header, hgroup, menu, nav, output, ruby,
section, summary, time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;}

#leaderboard {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#leaderboard td, #leaderboard th {
  border: 1px solid #ddd;
  padding: 8px;
}

#leaderboard tr:nth-child(even){background-color: #f2f2f2;}

#leaderboard tr:hover {background-color: #ddd;}

#leaderboard th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}



article, aside, details, figcaption, figure,
footer, header, hgroup, menu, nav, section {
	display: block;}

body {
	line-height: 1;
}

ol, ul {
	list-style: none;
}

blockquote, q {
	quotes: none;
}

	blockquote:before, blockquote:after, q:before, q:after {
		content: '';
		content: none;
	}

table {
	border-collapse: collapse;
	border-spacing: 0;
}

body {
	-webkit-text-size-adjust: none;
}

mark {
	background-color: transparent;
	color: inherit;
}

input::-moz-focus-inner {
	border: 0;
	padding: 0;
}

input, select, textarea {
	-moz-appearance: none;
	-webkit-appearance: none;
	-ms-appearance: none;
	appearance: none;
}

/* Basic */

	html {
		box-sizing: border-box;
	}

	*, *:before, *:after {
		box-sizing: inherit;
	}

	@-ms-viewport {
		width: device-width;
	}

	body {
		background: #303238 url("images/bg01.png");
	}

		body.is-preload * {
			-moz-transition: none !important;
			-webkit-transition: none !important;
			-ms-transition: none !important;
			transition: none !important;
			-moz-animation: none !important;
			-webkit-animation: none !important;
			-ms-animation: none !important;
			animation: none !important;
		}

	body, input, select, textarea {
		font-family: 'Open Sans', sans-serif;
		color: #7b818c;
		font-weight: 400;
		font-size: 11pt;
		line-height: 1.85em;
	}

	a {
		color: inherit;
		text-decoration: underline;
	}

		a:hover {
			text-decoration: none;
		}

	h1, h2, h3, h4, h5, h6 {
		text-transform: uppercase;
		font-weight: 800;
		letter-spacing: 0.04em;
		color: #404248;
		margin: 0 0 1em 0;
	}

	h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {
		color: inherit;
		text-decoration: none;
		outline: 0;
	}

	h2 {
		font-size: 2em;
		margin: 0 0 1.5em 0;
		line-height: 1em;
	}

		h2.icon {
			line-height: 48px;
		}

			h2.icon:before {
				position: relative;
				top: 0.05em;
				margin-right: 0.5em;
				opacity: 0.25;
			}

	h3 {
		font-size: 1.35em;
		margin-top: 2em;
	}

	b, strong {
		color: #404248;
		font-weight: 700;
	}

	i, em {
		font-style: italic;
	}

	br.clear {
		clear: both;
	}

	sub {
		position: relative;
		top: 0.5em;
		font-size: 0.8em;
	}

	sup {
		position: relative;
		top: -0.5em;
		font-size: 0.8em;
	}

	hr {
		border: 0;
		border-top: solid 1px #ddd;
	}

	blockquote {
		border-left: solid 0.5em #ddd;
		padding: 1em 0 1em 2em;
		font-style: italic;
	}

	p, ul, ol, dl, table {
		margin-bottom: 2em;
	}

	.date {
		display: block;
		text-transform: uppercase;
		font-weight: 700;
		letter-spacing: 0.065em;
		font-size: 0.9em;
		color: #696969;
		margin: 0 0 0.25em 0;
	}

/* Container */

	.container {
		margin: 0 auto;
		max-width: calc(100% - 100px);
		width: 1200px;
	}

		@media screen and (max-width: 1280px) {

			.container {
				width: 100%;
			}

		}

		@media screen and (max-width: 980px) {

			.container {
				width: 100%;
			}

		}

		@media screen and (max-width: 736px) {

			.container {
				width: 100%;
				max-width: 100%;
			}

		}

/* Row */

	.row {
		display: flex;
		flex-wrap: wrap;
		box-sizing: border-box;
		align-items: stretch;
	}

		.row > * {
			box-sizing: border-box;
		}

		.row.gtr-uniform > * > :last-child {
			margin-bottom: 0;
		}

		.row.aln-left {
			justify-content: flex-start;
		}

		.row.aln-center {
			justify-content: center;
		}

		.row.aln-right {
			justify-content: flex-end;
		}

		.row.aln-top {
			align-items: flex-start;
		}

		.row.aln-middle {
			align-items: center;
		}

		.row.aln-bottom {
			align-items: flex-end;
		}

		.row > .imp {
			order: -1;
		}

		.row > .col-1 {
			width: 8.33333%;
		}

		.row > .off-1 {
			margin-left: 8.33333%;
		}

		.row > .col-2 {
			width: 16.66667%;
		}

		.row > .off-2 {
			margin-left: 16.66667%;
		}

		.row > .col-3 {
			width: 25%;
		}

		.row > .off-3 {
			margin-left: 25%;
		}

		.row > .col-4 {
			width: 33.33333%;
		}

		.row > .off-4 {
			margin-left: 33.33333%;
		}

		.row > .col-5 {
			width: 41.66667%;
		}

		.row > .off-5 {
			margin-left: 41.66667%;
		}

		.row > .col-6 {
			width: 50%;
		}

		.row > .off-6 {
			margin-left: 50%;
		}

		.row > .col-7 {
			width: 58.33333%;
		}

		.row > .off-7 {
			margin-left: 58.33333%;
		}

		.row > .col-8 {
			width: 66.66667%;
		}

		.row > .off-8 {
			margin-left: 66.66667%;
		}

		.row > .col-9 {
			width: 75%;
		}

		.row > .off-9 {
			margin-left: 75%;
		}

		.row > .col-10 {
			width: 83.33333%;
		}

		.row > .off-10 {
			margin-left: 83.33333%;
		}

		.row > .col-11 {
			width: 91.66667%;
		}

		.row > .off-11 {
			margin-left: 91.66667%;
		}

		.row > .col-12 {
			width: 100%;
		}

		.row > .off-12 {
			margin-left: 100%;
		}

		.row.gtr-0 {
			margin-top: 0px;
			margin-left: 0px;
		}

			.row.gtr-0 > * {
				padding: 0px 0 0 0px;
			}

			.row.gtr-0.gtr-uniform {
				margin-top: 0px;
			}

				.row.gtr-0.gtr-uniform > * {
					padding-top: 0px;
				}

		.row.gtr-25 {
			margin-top: -12.5px;
			margin-left: -12.5px;
		}

			.row.gtr-25 > * {
				padding: 12.5px 0 0 12.5px;
			}

			.row.gtr-25.gtr-uniform {
				margin-top: -12.5px;
			}

				.row.gtr-25.gtr-uniform > * {
					padding-top: 12.5px;
				}

		.row.gtr-50 {
			margin-top: -25px;
			margin-left: -25px;
		}

			.row.gtr-50 > * {
				padding: 25px 0 0 25px;
			}

			.row.gtr-50.gtr-uniform {
				margin-top: -25px;
			}

				.row.gtr-50.gtr-uniform > * {
					padding-top: 25px;
				}

		.row {
			margin-top: -50px;
			margin-left: -50px;
		}

			.row > * {
				padding: 50px 0 0 50px;
			}

			.row.gtr-uniform {
				margin-top: -50px;
			}

				.row.gtr-uniform > * {
					padding-top: 50px;
				}

		.row.gtr-150 {
			margin-top: -75px;
			margin-left: -75px;
		}

			.row.gtr-150 > * {
				padding: 75px 0 0 75px;
			}

			.row.gtr-150.gtr-uniform {
				margin-top: -75px;
			}

				.row.gtr-150.gtr-uniform > * {
					padding-top: 75px;
				}

		.row.gtr-200 {
			margin-top: -100px;
			margin-left: -100px;
		}

			.row.gtr-200 > * {
				padding: 100px 0 0 100px;
			}

			.row.gtr-200.gtr-uniform {
				margin-top: -100px;
			}

				.row.gtr-200.gtr-uniform > * {
					padding-top: 100px;
				}

		@media screen and (max-width: 1280px) {

			.row {
				display: flex;
				flex-wrap: wrap;
				box-sizing: border-box;
				align-items: stretch;
			}

				.row > * {
					box-sizing: border-box;
				}

				.row.gtr-uniform > * > :last-child {
					margin-bottom: 0;
				}

				.row.aln-left {
					justify-content: flex-start;
				}

				.row.aln-center {
					justify-content: center;
				}

				.row.aln-right {
					justify-content: flex-end;
				}

				.row.aln-top {
					align-items: flex-start;
				}

				.row.aln-middle {
					align-items: center;
				}

				.row.aln-bottom {
					align-items: flex-end;
				}

				.row > .imp-large {
					order: -1;
				}

				.row > .col-1-large {
					width: 8.33333%;
				}

				.row > .off-1-large {
					margin-left: 8.33333%;
				}

				.row > .col-2-large {
					width: 16.66667%;
				}

				.row > .off-2-large {
					margin-left: 16.66667%;
				}

				.row > .col-3-large {
					width: 25%;
				}

				.row > .off-3-large {
					margin-left: 25%;
				}

				.row > .col-4-large {
					width: 33.33333%;
				}

				.row > .off-4-large {
					margin-left: 33.33333%;
				}

				.row > .col-5-large {
					width: 41.66667%;
				}

				.row > .off-5-large {
					margin-left: 41.66667%;
				}

				.row > .col-6-large {
					width: 50%;
				}

				.row > .off-6-large {
					margin-left: 50%;
				}

				.row > .col-7-large {
					width: 58.33333%;
				}

				.row > .off-7-large {
					margin-left: 58.33333%;
				}

				.row > .col-8-large {
					width: 66.66667%;
				}

				.row > .off-8-large {
					margin-left: 66.66667%;
				}

				.row > .col-9-large {
					width: 75%;
				}

				.row > .off-9-large {
					margin-left: 75%;
				}

				.row > .col-10-large {
					width: 83.33333%;
				}

				.row > .off-10-large {
					margin-left: 83.33333%;
				}

				.row > .col-11-large {
					width: 91.66667%;
				}

				.row > .off-11-large {
					margin-left: 91.66667%;
				}

				.row > .col-12-large {
					width: 100%;
				}

				.row > .off-12-large {
					margin-left: 100%;
				}

				.row.gtr-0 {
					margin-top: 0px;
					margin-left: 0px;
				}

					.row.gtr-0 > * {
						padding: 0px 0 0 0px;
					}

					.row.gtr-0.gtr-uniform {
						margin-top: 0px;
					}

						.row.gtr-0.gtr-uniform > * {
							padding-top: 0px;
						}

				.row.gtr-25 {
					margin-top: -8.75px;
					margin-left: -8.75px;
				}

					.row.gtr-25 > * {
						padding: 8.75px 0 0 8.75px;
					}

					.row.gtr-25.gtr-uniform {
						margin-top: -8.75px;
					}

						.row.gtr-25.gtr-uniform > * {
							padding-top: 8.75px;
						}

				.row.gtr-50 {
					margin-top: -17.5px;
					margin-left: -17.5px;
				}

					.row.gtr-50 > * {
						padding: 17.5px 0 0 17.5px;
					}

					.row.gtr-50.gtr-uniform {
						margin-top: -17.5px;
					}

						.row.gtr-50.gtr-uniform > * {
							padding-top: 17.5px;
						}

				.row {
					margin-top: -35px;
					margin-left: -35px;
				}

					.row > * {
						padding: 35px 0 0 35px;
					}

					.row.gtr-uniform {
						margin-top: -35px;
					}

						.row.gtr-uniform > * {
							padding-top: 35px;
						}

				.row.gtr-150 {
					margin-top: -52.5px;
					margin-left: -52.5px;
				}

					.row.gtr-150 > * {
						padding: 52.5px 0 0 52.5px;
					}

					.row.gtr-150.gtr-uniform {
						margin-top: -52.5px;
					}

						.row.gtr-150.gtr-uniform > * {
							padding-top: 52.5px;
						}

				.row.gtr-200 {
					margin-top: -70px;
					margin-left: -70px;
				}

					.row.gtr-200 > * {
						padding: 70px 0 0 70px;
					}

					.row.gtr-200.gtr-uniform {
						margin-top: -70px;
					}

						.row.gtr-200.gtr-uniform > * {
							padding-top: 70px;
						}

		}

		@media screen and (max-width: 980px) {

			.row {
				display: flex;
				flex-wrap: wrap;
				box-sizing: border-box;
				align-items: stretch;
			}

				.row > * {
					box-sizing: border-box;
				}

				.row.gtr-uniform > * > :last-child {
					margin-bottom: 0;
				}

				.row.aln-left {
					justify-content: flex-start;
				}

				.row.aln-center {
					justify-content: center;
				}

				.row.aln-right {
					justify-content: flex-end;
				}

				.row.aln-top {
					align-items: flex-start;
				}

				.row.aln-middle {
					align-items: center;
				}

				.row.aln-bottom {
					align-items: flex-end;
				}

				.row > .imp-medium {
					order: -1;
				}

				.row > .col-1-medium {
					width: 8.33333%;
				}

				.row > .off-1-medium {
					margin-left: 8.33333%;
				}

				.row > .col-2-medium {
					width: 16.66667%;
				}

				.row > .off-2-medium {
					margin-left: 16.66667%;
				}

				.row > .col-3-medium {
					width: 25%;
				}

				.row > .off-3-medium {
					margin-left: 25%;
				}

				.row > .col-4-medium {
					width: 33.33333%;
				}

				.row > .off-4-medium {
					margin-left: 33.33333%;
				}

				.row > .col-5-medium {
					width: 41.66667%;
				}

				.row > .off-5-medium {
					margin-left: 41.66667%;
				}

				.row > .col-6-medium {
					width: 50%;
				}

				.row > .off-6-medium {
					margin-left: 50%;
				}

				.row > .col-7-medium {
					width: 58.33333%;
				}

				.row > .off-7-medium {
					margin-left: 58.33333%;
				}

				.row > .col-8-medium {
					width: 66.66667%;
				}

				.row > .off-8-medium {
					margin-left: 66.66667%;
				}

				.row > .col-9-medium {
					width: 75%;
				}

				.row > .off-9-medium {
					margin-left: 75%;
				}

				.row > .col-10-medium {
					width: 83.33333%;
				}

				.row > .off-10-medium {
					margin-left: 83.33333%;
				}

				.row > .col-11-medium {
					width: 91.66667%;
				}

				.row > .off-11-medium {
					margin-left: 91.66667%;
				}

				.row > .col-12-medium {
					width: 100%;
				}

				.row > .off-12-medium {
					margin-left: 100%;
				}

				.row.gtr-0 {
					margin-top: 0px;
					margin-left: 0px;
				}

					.row.gtr-0 > * {
						padding: 0px 0 0 0px;
					}

					.row.gtr-0.gtr-uniform {
						margin-top: 0px;
					}

						.row.gtr-0.gtr-uniform > * {
							padding-top: 0px;
						}

				.row.gtr-25 {
					margin-top: -12.5px;
					margin-left: -12.5px;
				}

					.row.gtr-25 > * {
						padding: 12.5px 0 0 12.5px;
					}

					.row.gtr-25.gtr-uniform {
						margin-top: -12.5px;
					}

						.row.gtr-25.gtr-uniform > * {
							padding-top: 12.5px;
						}

				.row.gtr-50 {
					margin-top: -25px;
					margin-left: -25px;
				}

					.row.gtr-50 > * {
						padding: 25px 0 0 25px;
					}

					.row.gtr-50.gtr-uniform {
						margin-top: -25px;
					}

						.row.gtr-50.gtr-uniform > * {
							padding-top: 25px;
						}

				.row {
					margin-top: -50px;
					margin-left: -50px;
				}

					.row > * {
						padding: 50px 0 0 50px;
					}

					.row.gtr-uniform {
						margin-top: -50px;
					}

						.row.gtr-uniform > * {
							padding-top: 50px;
						}

				.row.gtr-150 {
					margin-top: -75px;
					margin-left: -75px;
				}

					.row.gtr-150 > * {
						padding: 75px 0 0 75px;
					}

					.row.gtr-150.gtr-uniform {
						margin-top: -75px;
					}

						.row.gtr-150.gtr-uniform > * {
							padding-top: 75px;
						}

				.row.gtr-200 {
					margin-top: -100px;
					margin-left: -100px;
				}

					.row.gtr-200 > * {
						padding: 100px 0 0 100px;
					}

					.row.gtr-200.gtr-uniform {
						margin-top: -100px;
					}

						.row.gtr-200.gtr-uniform > * {
							padding-top: 100px;
						}

		}

		@media screen and (max-width: 736px) {

			.row {
				display: flex;
				flex-wrap: wrap;
				box-sizing: border-box;
				align-items: stretch;
			}

				.row > * {
					box-sizing: border-box;
				}

				.row.gtr-uniform > * > :last-child {
					margin-bottom: 0;
				}

				.row.aln-left {
					justify-content: flex-start;
				}

				.row.aln-center {
					justify-content: center;
				}

				.row.aln-right {
					justify-content: flex-end;
				}

				.row.aln-top {
					align-items: flex-start;
				}

				.row.aln-middle {
					align-items: center;
				}

				.row.aln-bottom {
					align-items: flex-end;
				}

				.row > .imp-small {
					order: -1;
				}

				.row > .col-1-small {
					width: 8.33333%;
				}

				.row > .off-1-small {
					margin-left: 8.33333%;
				}

				.row > .col-2-small {
					width: 16.66667%;
				}

				.row > .off-2-small {
					margin-left: 16.66667%;
				}

				.row > .col-3-small {
					width: 25%;
				}

				.row > .off-3-small {
					margin-left: 25%;
				}

				.row > .col-4-small {
					width: 33.33333%;
				}

				.row > .off-4-small {
					margin-left: 33.33333%;
				}

				.row > .col-5-small {
					width: 41.66667%;
				}

				.row > .off-5-small {
					margin-left: 41.66667%;
				}

				.row > .col-6-small {
					width: 50%;
				}

				.row > .off-6-small {
					margin-left: 50%;
				}

				.row > .col-7-small {
					width: 58.33333%;
				}

				.row > .off-7-small {
					margin-left: 58.33333%;
				}

				.row > .col-8-small {
					width: 66.66667%;
				}

				.row > .off-8-small {
					margin-left: 66.66667%;
				}

				.row > .col-9-small {
					width: 75%;
				}

				.row > .off-9-small {
					margin-left: 75%;
				}

				.row > .col-10-small {
					width: 83.33333%;
				}

				.row > .off-10-small {
					margin-left: 83.33333%;
				}

				.row > .col-11-small {
					width: 91.66667%;
				}

				.row > .off-11-small {
					margin-left: 91.66667%;
				}

				.row > .col-12-small {
					width: 100%;
				}

				.row > .off-12-small {
					margin-left: 100%;
				}

				.row.gtr-0 {
					margin-top: 0px;
					margin-left: 0px;
				}

					.row.gtr-0 > * {
						padding: 0px 0 0 0px;
					}

					.row.gtr-0.gtr-uniform {
						margin-top: 0px;
					}

						.row.gtr-0.gtr-uniform > * {
							padding-top: 0px;
						}

				.row.gtr-25 {
					margin-top: -2.5px;
					margin-left: -2.5px;
				}

					.row.gtr-25 > * {
						padding: 2.5px 0 0 2.5px;
					}

					.row.gtr-25.gtr-uniform {
						margin-top: -2.5px;
					}

						.row.gtr-25.gtr-uniform > * {
							padding-top: 2.5px;
						}

				.row.gtr-50 {
					margin-top: -5px;
					margin-left: -5px;
				}

					.row.gtr-50 > * {
						padding: 5px 0 0 5px;
					}

					.row.gtr-50.gtr-uniform {
						margin-top: -5px;
					}

						.row.gtr-50.gtr-uniform > * {
							padding-top: 5px;
						}

				.row {
					margin-top: -10px;
					margin-left: -10px;
				}

					.row > * {
						padding: 10px 0 0 10px;
					}

					.row.gtr-uniform {
						margin-top: -10px;
					}

						.row.gtr-uniform > * {
							padding-top: 10px;
						}

				.row.gtr-150 {
					margin-top: -15px;
					margin-left: -15px;
				}

					.row.gtr-150 > * {
						padding: 15px 0 0 15px;
					}

					.row.gtr-150.gtr-uniform {
						margin-top: -15px;
					}

						.row.gtr-150.gtr-uniform > * {
							padding-top: 15px;
						}

				.row.gtr-200 {
					margin-top: -20px;
					margin-left: -20px;
				}

					.row.gtr-200 > * {
						padding: 20px 0 0 20px;
					}

					.row.gtr-200.gtr-uniform {
						margin-top: -20px;
					}

						.row.gtr-200.gtr-uniform > * {
							padding-top: 20px;
						}

		}

/* Section/Article */

	section, article {
		margin-bottom: 5em;
	}

	section > :last-child,
	article > :last-child,
	section:last-child,
	article:last-child {
		margin-bottom: 0;
	}

	header {
		margin: 0 0 2em 0;
	}

		header h2, header h3 {
			margin: 0 0 0.25em 0;
		}

		header p {
			display: block;
			text-transform: uppercase;
			font-weight: 700;
			letter-spacing: 0.065em;
			font-size: 0.9em;
			color: #696969;
			margin: 0;
		}

			header p strong {
				color: #404248;
				font-weight: 800;
			}

	footer {
		margin: 2.5em 0 0 0;
	}

	
		

		header.major h2, header.major h3 {
			margin: 0 0 1.2em 0;
		}

		header.major p {
			margin: 0 0 1.5em 0;
			position: relative;
			top: -1em;
		}

/* Forms */

	form label {
		display: block;
		text-transform: uppercase;
		font-weight: 800;
		letter-spacing: 0.04em;
		color: #404248;
		margin: 0 0 1em 0;
		font-size: 0.8em;
	}

	form input[type="text"],
	form input[type="email"],
	form input[type="password"],
	form select,
	form textarea {
		-webkit-appearance: none;
		display: block;
		width: 100%;
		border-radius: 8px;
		border: solid 1px #eee;
	}

	form input[type="text"]:focus,
	form input[type="email"]:focus,
	form input[type="password"]:focus,
	form select:focus,
	form textarea:focus {
		box-shadow: 0 0 2px 1px #4091bf;
	}

	form input[type="text"],
	form input[type="email"],
	form input[type="password"] {
		line-height: 3em;
		padding: 0 1em;
	}

	form select {
		line-height: 3em;
		padding: 0 1em;
	}

	form textarea {
		min-height: 9em;
		padding: 1em;
	}

	form ::-webkit-input-placeholder,
	form :-moz-placeholder,
	form ::-moz-placeholder,
	form :-ms-input-placeholder {
		color: #555 !important;
	}

	form ::-moz-focus-inner {
		border: 0;
	}

/* Tables */

	table {
		width: 100%;
	}

		table.default {
			width: 100%;
		}

			table.default tr {
				border-top: solid 1px #eee;
			}

				table.default tr:first-child {
					border-top: 0;
				}

			table.default td {
				padding: 0.5em 1em 0.5em 1em;
			}

			table.default th {
				text-align: left;
				padding: 0.5em 1em 0.5em 1em;
				text-transform: uppercase;
				font-weight: 800;
				letter-spacing: 0.04em;
				margin: 0 0 1em 0;
				font-size: 0.8em;
			}

			table.default thead {
				background: #404248;
				color: #fff;
			}

/* Image */

	.image {
		position: relative;
		display: inline-block;
	}

		.image img {
			display: block;
			width: 100%;
			border-radius: 8px;
		}

		.image:before {
			content: '';
			display: block;
			position: absolute;
			left: 0;
			top: 0;
			background: url("images/bg01.png");
			width: 100%;
			height: 100%;
			opacity: 0.75;
		}

		.image.fit {
			display: block;
			width: 100%;
		}

		.image.featured {
			display: block;
			width: 100%;
			margin: 0 0 2.5em 0;
		}

		.image.left {
			float: left;
			margin: 0 2em 2em 0;
		}

		.image.centered {
			display: block;
			margin: 0 0 2.5em 0;
		}

			.image.centered img {
				margin: 0 auto;
				width: auto;
			}

/* Button */

	input[type="button"],
	input[type="submit"],
	input[type="reset"],
	button,
	.button {
		background-image: -moz-linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.2)), url("images/bg02.png");
		background-image: -webkit-linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.2)), url("images/bg02.png");
		background-image: -ms-linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.2)), url("images/bg02.png");
		background-image: linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.2)), url("images/bg02.png");
		-moz-transition: background-color 0.2s ease-in-out;
		-webkit-transition: background-color 0.2s ease-in-out;
		-ms-transition: background-color 0.2s ease-in-out;
		transition: background-color 0.2s ease-in-out;
		-webkit-appearance: none;
		position: relative;
		display: inline-block;
		background-color: #4091bf;
		border-radius: 8px;
		box-shadow: inset 0px 0px 0px 1px rgba(0, 0, 0, 0.35), inset 0px 2px 1px 0px rgba(255, 255, 255, 0.35);
		text-shadow: -1px -1px 0 rgba(0, 0, 0, 0.5);
		color: #fff !important;
		text-decoration: none;
		text-transform: uppercase;
		font-weight: 800;
		font-size: 0.95em;
		letter-spacing: 0.075em;
		padding: 1em 2em;
		outline: 0;
		border: 0;
		white-space: nowrap;
		cursor: pointer;
	}

		input[type="button"].icon:before,
		input[type="submit"].icon:before,
		input[type="reset"].icon:before,
		button.icon:before,
		.button.icon:before {
			opacity: 0.5;
			margin-right: 0.5em;
			position: relative;
			top: 0.05em;
		}

		input[type="button"]:hover,
		input[type="submit"]:hover,
		input[type="reset"]:hover,
		button:hover,
		.button:hover {
			background-color: #50a1cf;
		}

		input[type="button"]:active,
		input[type="submit"]:active,
		input[type="reset"]:active,
		button:active,
		.button:active {
			background-color: #3081af;
		}

		input[type="button"].medium,
		input[type="submit"].medium,
		input[type="reset"].medium,
		button.medium,
		.button.medium {
			font-size: 1.25em;
			padding: 1em 2.25em;
		}

		input[type="button"].large,
		input[type="submit"].large,
		input[type="reset"].large,
		button.large,
		.button.large {
			font-size: 1.5em;
			padding: 1em 2.25em;
		}

		input[type="button"].alt,
		input[type="submit"].alt,
		input[type="reset"].alt,
		button.alt,
		.button.alt {
			background-color: #464a52;
		}

			input[type="button"].alt:hover,
			input[type="submit"].alt:hover,
			input[type="reset"].alt:hover,
			button.alt:hover,
			.button.alt:hover {
				background-color: #565a62;
			}

			input[type="button"].alt:active,
			input[type="submit"].alt:active,
			input[type="reset"].alt:active,
			button.alt:active,
			.button.alt:active {
				background-color: #363a42;
			}

/* List */

	dl.contact dt {
		display: block;
		text-transform: uppercase;
		font-weight: 700;
		letter-spacing: 0.065em;
		font-size: 0.9em;
		color: #696969;
		float: left;
		width: 6em;
	}

	dl.contact dd {
		margin: 0 0 1em 6em;
	}

	ul.default {
		list-style: disc;
		padding-left: 1em;
	}

		ul.default li {
			padding-left: 0.5em;
		}

	ul.actions li {
		display: inline-block;
		padding: 0 0 0 0.25em;
		margin: 0 0 0 0.25em;
	}

		ul.actions li:first-child {
			margin-left: 0;
			padding-left: 0;
		}

	ul.menu li {
		border-left: solid 1px #eee;
		display: inline-block;
		padding: 0 0 0 1em;
		margin: 0 0 0 1em;
	}

		ul.menu li:first-child {
			border-left: 0;
			margin-left: 0;
			padding-left: 0;
		}

	ul.divided li {
		border-top: solid 1px #eee;
		padding: 0.5em 0 0 0;
		margin: 0.5em 0 0 0;
	}

		ul.divided li:first-child {
			border-top: 0 !important;
			padding-top: 0 !important;
			margin-top: 0 !important;
		}

	ol.default {
		list-style: decimal;
		padding-left: 1.25em;
	}

		ol.default li {
			padding-left: 0.25em;
		}

/* Box */

	.box.excerpt {
		position: relative;
		overflow: hidden;
	}

		.box.excerpt header {
			margin: 0 0 1em 0;
		}

		.box.excerpt .image, .box.excerpt p {
			margin-bottom: 0;
		}

	.box.feature1 {
		text-align: center;
	}

		.box.feature1 header {
			margin-bottom: 3em;
		}

			.box.feature1 header.first h2 {
				font-size: 2.5em;
			}

			.box.feature1 header.first p {
				font-size: 1.2em;
			}

			.box.feature1 header.second {
				position: relative;
				display: inline-block;
				text-align: left;
				margin: 0 auto;
				white-space: nowrap;
				left: 24px;
			}

				.box.feature1 header.second p {
					line-height: 1em;
				}

				.box.feature1 header.second:before {
					font-size: 48px;
					position: absolute;
					right: 100%;
					margin-right: 18px;
					opacity: 0.5;
					bottom: -4px;
				}

	.box.feature2 {
		text-align: center;
	}

	.box.article-list article {
		border-bottom: solid 1px #dbdbdb;
		margin: 0 0 2.75em 0;
		padding: 0 0 2.75em 0;
	}

		.box.article-list article:last-child {
			border-bottom: 0;
			margin-bottom: 0;
			padding-bottom: 0;
		}

/* Icons */

	.icon {
		text-decoration: none;
		text-decoration: none;
	}

		.icon:before {
			-moz-osx-font-smoothing: grayscale;
			-webkit-font-smoothing: antialiased;
			display: inline-block;
			font-style: normal;
			font-variant: normal;
			text-rendering: auto;
			line-height: 1;
			text-transform: none !important;
			font-family: 'Font Awesome 5 Free';
			font-weight: 400;
		}

		.icon.solid:before {
			font-weight: 900;
		}

		.icon.brands:before {
			font-family: 'Font Awesome 5 Brands';
		}

		.icon > .label {
			display: none;
		}

/* Nav */

	#nav {
		position: absolute;
		right: 2em;
		top: 0;
		line-height: 5.5em;
	}

		#nav > ul > li {
			float: left;
			padding: 0 0.8em 0 0.8em;
		}

			#nav > ul > li > a, #nav > ul > li > span {
				color: #fff;
				text-decoration: none;
				text-transform: uppercase;
				font-weight: 800;
				font-size: 0.95em;
				letter-spacing: 0.075em;
				padding: 0.5em 0.8em 0.5em 0.8em;
				border-radius: 6px;
				outline: 0;
			}

			#nav > ul > li.active > a,
			#nav > ul > li.current_page_item > a,
			#nav > ul > li.active > span,
			#nav > ul > li.current_page_item > span {
				background: rgba(0, 0, 0, 0.15);
				box-shadow: inset 1px 1px 0px 0px rgba(0, 0, 0, 0.025), 1px 1px 0px 0px rgba(255, 255, 255, 0.025);
			}

			#nav > ul > li:last-child {
				padding-right: 0;
			}

			#nav > ul > li > ul {
				display: none;
			}

	.dropotron {
		background-image: -moz-linear-gradient(top, rgba(0, 0, 0, 0.35), rgba(0, 0, 0, 0)), url("images/bg02.png");
		background-image: -webkit-linear-gradient(top, rgba(0, 0, 0, 0.35), rgba(0, 0, 0, 0)), url("images/bg02.png");
		background-image: -ms-linear-gradient(top, rgba(0, 0, 0, 0.35), rgba(0, 0, 0, 0)), url("images/bg02.png");
		background-image: linear-gradient(top, rgba(0, 0, 0, 0.35), rgba(0, 0, 0, 0)), url("images/bg02.png");
		position: relative;
		background-color: #3B3E45;
		background-color: rgba(59, 62, 69, 0.9);
		border-radius: 8px;
		box-shadow: inset 0px 0px 0px 1px rgba(0, 0, 0, 0.5), inset 0px 0px 0px 2px rgba(255, 255, 255, 0.075), inset 0px 2px 1px 0px rgba(255, 255, 255, 0.2), 0px 2px 14px 0px rgba(0, 0, 0, 0.4);
		text-shadow: -1px -1px 0 rgba(0, 0, 0, 0.5);
		padding: 1.5em;
		line-height: 2.5em;
		min-width: 15em;
	}

		.dropotron.level-0 {
			border-top-left-radius: 0;
			border-top-right-radius: 0;
			margin-top: -2px;
			box-shadow: inset 0px 0px 0px 1px rgba(0, 0, 0, 0.5), inset 0px 0px 0px 2px rgba(255, 255, 255, 0.075), 0px 2px 14px 0px rgba(0, 0, 0, 0.4);
		}

		.dropotron a, .dropotron span {
			color: #aaa;
			text-decoration: none;
			text-transform: uppercase;
			font-weight: 800;
			font-size: 0.8em;
			letter-spacing: 0.075em;
			outline: 0;
		}

		.dropotron li:hover > a, .dropotron li:hover > span {
			color: #fff;
		}

/* Banner */

	#banner {
		text-align: center;
		width: 940px;
		margin: 0 auto;
		overflow: hidden;
		padding: 9em 0 6em 0;
	}

		#banner h2 {
			border: solid 1px rgba(255, 255, 255, 0.25);
			border-left: 0;
			border-right: 0;
			color: #fff;
			color: rgba(255, 255, 255, 0.75);
			font-size: 2.35em;
			font-weight: 700;
			line-height: 1.3em;
			margin: 0 0 1.5em 0;
		}

			#banner h2 strong {
				font-weight: 800;
				color: inherit;
			}

			#banner h2:before {
				content: '';
				display: block;
				border-top: solid 1px;
				border-color: #888;
				border-color: rgba(255, 255, 255, 0.25);
				margin: 10px 0 1.25em 0;
			}

			#banner h2:after {
				content: '';
				display: block;
				border-bottom: solid 1px;
				border-color: #888;
				border-color: rgba(255, 255, 255, 0.25);
				margin: 1.25em 0 10px 0;
			}

		#banner p {
			text-transform: uppercase;
			color: #fff;
			color: rgba(255, 255, 255, 0.75);
			font-size: 1.5em;
			font-weight: 700;
			line-height: 1.3em;
			letter-spacing: 0.04em;
			float: left;
			text-align: right;
			width: 60%;
			line-height: 1.5em;
			margin: 0;
		}

/* Sidebar */

	#sidebar h2 {
		font-size: 1.5em;
	}

/* Wrappers */
/*Tu link */
	#header-wrapper {
		background: url("images/bg01.png"), url("../../images/header.jpg");
		background-position: top left, center center;
		background-size: auto, cover;
		padding: 3em 0;
	}

	#main-wrapper {
		background: #fff;
	}

	#footer-wrapper {
		background-image: -moz-linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.5)), url("images/bg03.png"), url("images/bg02.png");
		background-image: -webkit-linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.5)), url("images/bg03.png"), url("images/bg02.png");
		background-image: -ms-linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.5)), url("images/bg03.png"), url("images/bg02.png");
		background-image: linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.5)), url("images/bg03.png"), url("images/bg02.png");
		position: relative;
		background-repeat: repeat-x, no-repeat, repeat;
		background-size: 100% 100%, 100% 15em, auto auto;
		background-position: top left, top center, top left;
		padding: 7em 0 7em 0;
	}

	.wrapper {
		padding: 7em 0 7em 0;
	}

		.wrapper > .inner {
			position: relative;
			z-index: 2;
		}

		.wrapper.style1 {
			position: relative;
			text-shadow: 1px 1px 0 #fff;
			background-color: #fff;
			background-image: url("images/bg03.png"), url("images/bg04.png"), url("images/bg02.png");
			background-repeat: no-repeat, no-repeat, repeat;
			background-size: 100% 15em, 100% 15em, auto auto;
			background-position: top center, bottom center, top left;
		}

		.wrapper.style3 {
			position: relative;
			text-shadow: 1px 1px 0 #fff;
			background-color: #fff;
			background-image: url("images/bg03.png"), url("images/bg02.png");
			background-repeat: no-repeat, repeat;
			background-size: 100% 15em, auto auto;
			background-position: top center, top left;
		}

/* Header */

	#header {
		position: relative;
		border-radius: 10px;
		background: rgba(255, 255, 255, 0.1);
		padding: 0.75em;
		margin-bottom: 0;
	}

		#header .inner {
			background-image: -moz-linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.35)), url("images/bg02.png");
			background-image: -webkit-linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.35)), url("images/bg02.png");
			background-image: -ms-linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.35)), url("images/bg02.png");
			background-image: linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.35)), url("images/bg02.png");
			position: relative;
			height: 5.5em;
			background-color: #3B3E45;
			background-color: rgba(59, 62, 69, 0.9);
			border-radius: 8px;
			box-shadow: inset 0px 0px 0px 1px rgba(0, 0, 0, 0.45), inset 0px 2px 1px 0px rgba(255, 255, 255, 0.15);
			text-shadow: -1px -1px 0 rgba(0, 0, 0, 0.5);
		}

		#header h1 {
			position: absolute;
			left: 1.75em;
			top: 50%;
			margin-top: -0.65em;
			font-size: 1.5em;
			color: #fff;
		}

/* Footer */

	#footer {
		margin-bottom: 0;
		text-shadow: -1px -1px 0 rgba(0, 0, 0, 0.5);
		position: relative;
		z-index: 2;
	}

		#footer h2 {
			font-size: 1.35em;
			color: #fff;
		}

		#footer strong {
			color: #fff;
		}

		#footer a {
			color: #acb2bf;
		}

		#footer .button.alt {
			box-shadow: inset 0px 0px 0px 1px rgba(0, 0, 0, 0.75), inset 0px 2px 1px 0px rgba(255, 255, 255, 0.25);
		}

		#footer ul.divided li, #footer ul.menu li {
			border-color: #444;
			border-color: rgba(255, 255, 255, 0.075);
		}

		#footer ul.divided li a {
			text-decoration: none;
		}

		#footer ul.menu {
			margin: 0;
		}

		#footer dl.contact dt {
			color: #ddd;
		}

	#copyright {
		border-top: solid 1px;
		border-color: #444;
		border-color: rgba(255, 255, 255, 0.075);
		text-align: center;
		margin-top: 2em;
		padding: 3em 0 4em 0;
		color: inherit;
	}

		#copyright a {
			color: inherit;
		}

/* Large */

	@media screen and (max-width: 1280px) {

		/* Basic */

			body {
				line-height: 1.75em;
				font-size: 10.75pt;
			}

			input, select, textarea {
				line-height: 1.75em;
				font-size: 10.75pt;
			}

		/* Wrappers */

			#header-wrapper {
				padding: 2em 0;
			}

			body.homepage #header-wrapper {
				height: auto;
			}

			#footer-wrapper {
				padding: 4.5em 0 4.5em 0;
			}

			.wrapper {
				padding: 4.5em 0 4.5em 0;
			}

		/* Banner */

			#banner {
				width: 100%;
				padding: 4em 0 2em 0;
			}

				#banner h2 {
					font-size: 2.2em;
					line-height: 1.3em;
					margin: 0 0 1em 0;
				}

				#banner p {
					font-size: 1.25em;
					line-height: 1.75em;
					letter-spacing: 0.04em;
					float: none;
					text-align: center;
					width: 100%;
					margin: 0 0 2em 0;
				}

	}

/* Medium */

	#navPanel, #titleBar {
		display: none;
	}

	@media screen and (max-width: 980px) {

		/* Basic */

			html, body {
				overflow-x: hidden;
			}

		/* Box */

			.box.feature2 section {
				margin: 1em 0;
			}

		/* Nav */

			#page-wrapper {
				-moz-backface-visibility: hidden;
				-webkit-backface-visibility: hidden;
				-ms-backface-visibility: hidden;
				backface-visibility: hidden;
				-moz-transition: -moz-transform 0.5s ease;
				-webkit-transition: -webkit-transform 0.5s ease;
				-ms-transition: -ms-transform 0.5s ease;
				transition: transform 0.5s ease;
				padding-bottom: 1px;
			}

			#titleBar {
				-moz-backface-visibility: hidden;
				-webkit-backface-visibility: hidden;
				-ms-backface-visibility: hidden;
				backface-visibility: hidden;
				background-image: -moz-linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.35)), url("images/bg02.png");
				background-image: -webkit-linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.35)), url("images/bg02.png");
				background-image: -ms-linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.35)), url("images/bg02.png");
				background-image: linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.35)), url("images/bg02.png");
				-moz-transition: -moz-transform 0.5s ease;
				-webkit-transition: -webkit-transform 0.5s ease;
				-ms-transition: -ms-transform 0.5s ease;
				transition: transform 0.5s ease;
				background-color: rgba(59, 62, 69, 0.9);
				box-shadow: inset 0px 0px 0px 1px rgba(0, 0, 0, 0.5), inset 0px 0px 0px 2px rgba(255, 255, 255, 0.075), 0px 1px 6px 0px rgba(0, 0, 0, 0.35);
				display: block;
				height: 44px;
				left: 0;
				position: fixed;
				text-shadow: -1px -1px 0 black;
				top: 0;
				width: 100%;
				z-index: 10001;
			}

				#titleBar .title {
					display: block;
					text-transform: uppercase;
					font-weight: 800;
					letter-spacing: 0.04em;
					color: #fff;
					line-height: 44px;
					text-align: center;
				}

				#titleBar .toggle {
					text-decoration: none;
					position: absolute;
					left: 0;
					top: 0;
					width: 60px;
					height: 44px;
					opacity: 0.25;
				}

					#titleBar .toggle:before {
						-moz-osx-font-smoothing: grayscale;
						-webkit-font-smoothing: antialiased;
						display: inline-block;
						font-style: normal;
						font-variant: normal;
						text-rendering: auto;
						line-height: 1;
						text-transform: none !important;
						font-family: 'Font Awesome 5 Free';
						font-weight: 900;
					}

					#titleBar .toggle:before {
						display: inline-block;
						text-decoration: none;
						font-size: 18px;
						width: 44px;
						height: 44px;
						line-height: 44px;
						text-align: center;
						color: #fff;
						content: '\f0c9';
					}

					#titleBar .toggle:active {
						opacity: 0.5;
					}

			#navPanel {
				-moz-backface-visibility: hidden;
				-webkit-backface-visibility: hidden;
				-ms-backface-visibility: hidden;
				backface-visibility: hidden;
				background-image: -moz-linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.35)), url("images/bg01.png");
				background-image: -webkit-linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.35)), url("images/bg01.png");
				background-image: -ms-linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.35)), url("images/bg01.png");
				background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.35)), url("images/bg01.png");
				-moz-transform: translateX(-275px);
				-webkit-transform: translateX(-275px);
				-ms-transform: translateX(-275px);
				transform: translateX(-275px);
				-moz-transition: -moz-transform 0.5s ease;
				-webkit-transition: -webkit-transform 0.5s ease;
				-ms-transition: -ms-transform 0.5s ease;
				transition: transform 0.5s ease;
				background-color: #303238;
				box-shadow: inset -1px 0px 0px 0px rgba(0, 0, 0, 0.5), inset -2px 0px 0px rgba(255, 255, 255, 0.15), inset -2px 0px 10px 0px rgba(0, 0, 0, 0.35);
				display: block;
				height: 100%;
				left: 0;
				overflow-y: auto;
				position: fixed;
				top: 0;
				width: 275px;
				z-index: 10002;
			}

				#navPanel .link {
					display: block;
					color: #aaa;
					text-decoration: none;
					height: 44px;
					line-height: 44px;
					border-top: solid 1px rgba(255, 255, 255, 0.05);
					border-bottom: solid 1px rgba(0, 0, 0, 0.15);
					padding: 0 1em 0 1em;
					text-transform: uppercase;
					font-weight: 700;
					font-size: 0.95em;
					letter-spacing: 0.075em;
				}

					#navPanel .link:first-child {
						border-top: 0;
					}

					#navPanel .link:last-child {
						border-bottom: 0;
					}

				#navPanel .indent-1 {
					display: inline-block;
					width: 1em;
				}

				#navPanel .indent-2 {
					display: inline-block;
					width: 2em;
				}

				#navPanel .indent-3 {
					display: inline-block;
					width: 3em;
				}

				#navPanel .indent-4 {
					display: inline-block;
					width: 4em;
				}

				#navPanel .indent-5 {
					display: inline-block;
					width: 5em;
				}

				#navPanel .depth-0 {
					color: #fff;
				}

			body.navPanel-visible #page-wrapper {
				-moz-transform: translateX(275px);
				-webkit-transform: translateX(275px);
				-ms-transform: translateX(275px);
				transform: translateX(275px);
			}

			body.navPanel-visible #titleBar {
				-moz-transform: translateX(275px);
				-webkit-transform: translateX(275px);
				-ms-transform: translateX(275px);
				transform: translateX(275px);
			}

			body.navPanel-visible #navPanel {
				-moz-transform: translateX(0);
				-webkit-transform: translateX(0);
				-ms-transform: translateX(0);
				transform: translateX(0);
			}

		/* Header */

			#header, #nav {
				display: none;
			}

		/* Wrappers */

			#header-wrapper {
				display: none;
			}

			.homepage #header-wrapper {
				display: block;
				padding-top: 44px;
			}

			#main-wrapper {
				padding-top: 44px;
			}

			.homepage #main-wrapper {
				padding-top: 0;
			}

		/* Banner */

			#banner {
				padding: 8em 0 4em 0;
			}

				#banner br {
					display: none;
				}

		/* Sidebar */

			#sidebar {
				margin-top: 1em;
			}

	}

/* Small */

	@media screen and (max-width: 736px) {

		/* Basic */

			body, input, select, textarea {
				line-height: 1.75em;
				font-size: 10pt;
				letter-spacing: 0;
			}

			h2, h3, h4, h5, h6 {
				font-size: 13pt !important;
			}

			h2 {
				line-height: 1.5em;
			}

		/* Section/Article */

			section, article {
				margin-bottom: 3em;
			}

		/* Image */

			.image.left {
				width: 25%;
			}

		/* Button */

			.button {
				width: 100%;
				font-size: 1.1em;
				text-align: center;
				padding: 1em 0 1em 0;
				border-radius: 8px;
			}

		/* List */

			ul.menu li {
				display: block;
				border: 0 !important;
				padding: 0 !important;
				margin: 0 !important;
			}

			ul.actions li {
				display: block;
				padding: 0;
				margin: 1em 0 0 0;
			}

				ul.actions li:first-child {
					margin-top: 0;
				}

		/* Box */

			.box.excerpt .image-left {
				margin-right: 0;
			}

			.box.excerpt header {
				margin-left: 32%;
			}

			.box.excerpt p {
				clear: both;
			}

			.box.feature1 section {
				margin-bottom: 2em !important;
			}

			.box.spotlight {
				margin-top: 2em;
			}

		/* Wrappers */

			#header-wrapper {
				background-position: 35% 50%;
			}

			#footer-wrapper {
				padding: 3em 20px 3em 20px;
			}

				#footer-wrapper section, #footer-wrapper article {
					margin-bottom: 3em !important;
				}

			.wrapper {
				padding: 3em 20px 3em 20px;
			}

		/* Banner */

			#banner {
				padding: 40px 20px 40px 20px;
			}

				#banner h2 {
					font-size: 18pt !important;
				}

		/* Sidebar */

			#sidebar {
				margin-top: 2em;
			}

		/* Footer */

			#copyright {
				margin-top: 0;
				padding: 3em 0 1em 0;
			}

	}
<?php }
}
