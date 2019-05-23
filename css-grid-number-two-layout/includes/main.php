<style>
body {
  padding: 0;
  margin: 0;
  font-size: 14px;
  /*DEMO ONLY*/
  background: linear-gradient(140deg, rgba(76,181,70,0.30) 50%, rgba(0,0,0,0.30) 50%, rgba(255,255,255,1.00) 50.20%);
  background-attachment: fixed;
}
.label {
  text-align: center;
  background-color: rgba(0,0,0,1.00);
  color: rgba(255,255,255,1.00);
  text-transform: uppercase;
  width: 7em;
  height: 4vh;
}
.triplets {
  grid-template-columns: 1fr 2fr;
  display: flex;
}
.triplet1,
.triplet2,
.triplet3 {
  height: 20em;
  width: 33.3333%;
}
.masthead,
.feature,
.main-area,
.sidebar,
.colophon {
  padding: 1.2em;
  color: #fff;
}
.masthead {
  grid-row: 1;
  filter: drop-shadow(-5px 5px 0 rgba(255,255,255,1.00));
}
.masthead h1 {
  text-align: center;
}
.logo {
  height: 100px;
  width: 100px;
  margin: 0 auto;
  background-image: url("./images/TWDLOGO.png");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  border-radius: 50%;
  filter: drop-shadow(-5px 5px 0 rgba(0,0,0,0.40));
  box-shadow: 5px 5px 0 rgba(0,0,0,0.40);
}
/*FALLBACK!!!*/
.feature {
  background: hsl(10, 70%, 90%);
}
.main-area {
  background: hsl(0, 0%, 100%);
  filter: drop-shadow(-5px 5px 0 rgba(255,255,255,1.00));
/*
  border-top-left-radius: 1em 5em;
  border-bottom-left-radius: 3em;
  border-bottom-right-radius: 1em 5em;
  border-top-right-radius: 1.3em;
*/
}
.main-area p, .feature p, .sidebar p, .colophon p {
  background-color: rgb(255,255,255);
  color: rgb(0,0,0);
  padding: 1em;
  filter: drop-shadow(-5px 5px 0 rgba(0,0,0,0.40));
  box-shadow: 5px 5px 0 rgba(0,0,0,0.40);
}
.form {
filter: drop-shadow(-5px 5px 0 rgba(255,255,255,1.00));
}
.sidebar {
	background: hsl(100, 70%, 50%);
/*
  border-top-left-radius: 3em 1em;
  border-bottom-left-radius: 3em;
  border-bottom-right-radius: 4em 7em;
  border-top-right-radius: 1.3em;
  */
}
.colophon {
	padding: 2em;
	background: hsl(20, 40%, 60%);
	color: #fff;
	text-align: center;
  filter: drop-shadow(-5px 5px 0 rgba(0,0,0,0.30));
}
.btn {
  position: absolute;
  padding: 1em;
  color: rgb(134,83,0);
  font-size: 1rem;
  text-decoration: none;
  box-shadow: inset 5px 5px 3px rgb(99,153,50);
  background-color: rgb(119,182,58);
  border-top-left-radius: 1em 5em;
  border-bottom-left-radius: 3em;
  z-index: 5;
  position: fixed;
  top: 0;
  right: 0;
}
/* START responsive hack by Trikyas */
.site {
	max-width: 50em;
	margin: 0 auto;
  filter: drop-shadow(-5px 5px 0 rgba(0,0,0,0.30));
}
/* END responsive hack by Trikyas*/
@supports (grid-area: auto) {
	@media screen and (min-width: 50em) {
		.site {
			max-width: none;
			display: grid;
			grid-template-columns: 15em auto;
		}
		.masthead {
			grid-column: 1/2;
			grid-row: 1; /*add /4 to extend it full height*/
      padding: 10px;
		}
		.feature {
			grid-column: 2/3;
		}
		.main-area {
			grid-column: 2/3;
			grid-row: 2;
		}
		.sidebar {
			grid-column: 2/3;
			grid-row: 3;
		}
    .form {
			grid-column: 1/3;
			grid-row: 5;
    }
    .extra {
			grid-column: 1/4;
			grid-row: 4;
    }
		.colophon {
			grid-column: 1/3;
			grid-row: 6;
		}
	}
	@media screen and (min-width: 65em) {
		.site {
			grid-template-columns: 15em minmax(auto, 30em) 15em;
			justify-content: center;
		}
		.feature {
			grid-column: 2/4;
		}
		.main-area {
			grid-column: 2/3;
		}
		.sidebar {
			grid-column: 3/4;
			grid-row: 2;
		}
		.colophon {
			grid-column: 1/4;
		}
	}
}
</style>
