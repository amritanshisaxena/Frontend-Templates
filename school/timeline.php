<?php
include('includes/header.php');
?>
<style>
/* ================ The Timeline ================ */

.timeline {
  position: relative;
  width: 660px;
  margin: 0 auto;
  margin-top: 20px;
  padding: 1em 0;
  list-style-type: none;
}

.timeline:before {
  position: absolute;
  left: 50%;
  top: 0;
  content: ' ';
  display: block;
  width: 6px;
  height: 100%;
  margin-left: -3px;
  background: rgb(80,80,80);
  background: -moz-linear-gradient(top, rgba(80,80,80,0) 0%, rgb(80,80,80) 8%, rgb(80,80,80) 92%, rgba(80,80,80,0) 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(30,87,153,1)), color-stop(100%,rgba(125,185,232,1)));
  background: -webkit-linear-gradient(top, rgba(80,80,80,0) 0%, rgb(80,80,80) 8%, rgb(80,80,80) 92%, rgba(80,80,80,0) 100%);
  background: -o-linear-gradient(top, rgba(80,80,80,0) 0%, rgb(80,80,80) 8%, rgb(80,80,80) 92%, rgba(80,80,80,0) 100%);
  background: -ms-linear-gradient(top, rgba(80,80,80,0) 0%, rgb(80,80,80) 8%, rgb(80,80,80) 92%, rgba(80,80,80,0) 100%);
  background: linear-gradient(to bottom, rgba(80,80,80,0) 0%, rgb(80,80,80) 8%, rgb(80,80,80) 92%, rgba(80,80,80,0) 100%);
  
  z-index: 5;
}

.timeline li {
  padding: 1em 0;
}

.timeline li:after {
  content: "";
  display: block;
  height: 0;
  clear: both;
  visibility: hidden;
}

.direction-l {
  position: relative;
  width: 300px;
  float: left;
  text-align: right;
}

.direction-r {
  position: relative;
  width: 300px;
  float: right;
}

.flag-wrapper {
  position: relative;
  display: inline-block;
  font-size: 16px;
  text-align: center;
}

.flag {
  position: relative;
  display: inline;
  background: #f9d121cc;
  padding: 6px 10px;
  border-radius: 5px;
  font-family: PT serif;
  font-weight: 600;
  text-align: left;
  font-size: 20px;
}

.direction-l .flag {
  -webkit-box-shadow: -1px 1px 1px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
  -moz-box-shadow: -1px 1px 1px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
  box-shadow: -1px 1px 1px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
}

.direction-r .flag {
  -webkit-box-shadow: 1px 1px 1px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
  -moz-box-shadow: 1px 1px 1px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
  box-shadow: 1px 1px 1px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
}

.direction-l .flag:before,
.direction-r .flag:before {
  position: absolute;
  top: 50%;
  right: -40px;
  content: ' ';
  display: block;
  width: 12px;
  height: 12px;
  margin-top: -10px;
  background: #fff;
  border-radius: 10px;
  border: 4px solid rgb(255,80,80);
  z-index: 10;
}

.direction-r .flag:before {
  left: -40px;
}

.direction-l .flag:after {
  content: "";
  position: absolute;
  left: 100%;
  top: 50%;
  height: 0;
  width: 0;
  margin-top: -8px;
  border: solid transparent;
  border-left-color: rgb(248,248,248);
  border-width: 8px;
  pointer-events: none;
}

.direction-r .flag:after {
  content: "";
  position: absolute;
  right: 100%;
  top: 50%;
  height: 0;
  width: 0;
  margin-top: -8px;
  border: solid transparent;
  border-right-color: rgb(248,248,248);
  border-width: 8px;
  pointer-events: none;
}

.time-wrapper {
  display: inline;
  
  line-height: 1em;
  font-size: 0.66666em;
  color: rgb(250,80,80);
  vertical-align: middle;
}

.direction-l .time-wrapper {
  float: left;
}

.direction-r .time-wrapper {
  float: right;
}

.time {
  display: inline-block;
  padding: 4px 6px;
  background: rgb(248,248,248);
}

.desc {
  margin: 1em 0.75em 0 0;
  
  font-size: 0.77777em;
  font-style: italic;
  line-height: 1.5em;
}

.direction-r .desc {
  margin: 1em 0 0 0.75em;
}

/* ================ Timeline Media Queries ================ */

@media screen and (max-width: 660px) {

.timeline {
 	width: 100%;
	padding: 4em 0 1em 0;
}

.timeline li {
	padding: 2em 0;
}

.direction-l,
.direction-r {
	float: none;
	width: 100%;

	text-align: center;
}

.flag-wrapper {
	text-align: center;
}

.flag {
	background: rgb(255,255,255);
	z-index: 15;
}

.direction-l .flag:before,
.direction-r .flag:before {
  position: absolute;
  top: -30px;
	left: 50%;
	content: ' ';
	display: block;
	width: 12px;
	height: 12px;
	margin-left: -9px;
	background: #fff;
	border-radius: 10px;
	border: 4px solid rgb(255,80,80);
	z-index: 10;
}

.direction-l .flag:after,
.direction-r .flag:after {
	content: "";
	position: absolute;
	left: 50%;
	top: -8px;
	height: 0;
	width: 0;
	margin-left: -8px;
	border: solid transparent;
	border-bottom-color: rgb(255,255,255);
	border-width: 8px;
	pointer-events: none;
}

.time-wrapper {
	display: block;
	position: relative;
	margin: 4px 0 0 0;
	z-index: 14;
}

.direction-l .time-wrapper {
	float: none;
}

.direction-r .time-wrapper {
	float: none;
}

.desc {
	position: relative;
	margin: 1em 0 0 0;
	padding: 1em;
	background: rgb(245,245,245);
	-webkit-box-shadow: 0 0 1px rgba(0,0,0,0.20);
	-moz-box-shadow: 0 0 1px rgba(0,0,0,0.20);
	box-shadow: 0 0 1px rgba(0,0,0,0.20);
	
  z-index: 15;
}

.direction-l .desc,
.direction-r .desc {
	position: relative;
	margin: 1em 1em 0 1em;
	padding: 1em;
	
  z-index: 15;
}

}

@media screen and (min-width: 400px ?? max-width: 660px) {

.direction-l .desc,
.direction-r .desc {
	margin: 1em 4em 0 4em;
}

}
</style>
<section>
    <div class="container-fluid" style="background-image: url(./assets/images/bghd.jpg);background-attachment: fixed;background-size:cover;background-repeat: no-repeat;height: 220px;">
        <h1 style="font-family: PT serif;font-weight: 800;color: white;margin-left:20%;padding-top:3%;">TIMELINE</h1>
        <h3 style="font-family: PT serif;font-weight: 800;color: white;margin-left:20%;padding-top: 1%;">Home&nbsp;/&nbsp; Pages</h3>
    </div>
</section>

<section>
<ul class="timeline">

	<li>
		<div class="direction-r">
			<div class="flag-wrapper">
				<span class="flag">Child Learn</span>
				<span class="time-wrapper"><span class="time">2018 - present</span></span>
			</div>
			<div class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis dicta eum officia enim rem quibusdam, culpa, rerum eaque odio reiciendis ipsa quas, odit quisquam ducimus?</div>
		</div>
	</li>
	<li>
		<div class="direction-l">
			<div class="flag-wrapper">
				<span class="flag">My School</span>
				<span class="time-wrapper"><span class="time">2015-2018</span></span>
			</div>
			<div class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis dicta eum officia enim rem quibusdam, culpa, rerum eaque odio reiciendis ipsa quas, odit quisquam ducimus?</div>
		</div>
	</li>
	<li>
		<div class="direction-r">
			<div class="flag-wrapper">
				<span class="flag">High Education</span>
				<span class="time-wrapper"><span class="time">2013 - 2015</span></span>
			</div>
			<div class="desc">Lorem ipsum dolor, sitn adipisicing elit. Nobis  quibusdam, culpa, rerum eaque odio reiciendis ipsa quas, odit quisquam ducimus?</div>
		</div>
	</li>
	<li>
		<div class="direction-l">
			<div class="flag-wrapper">
				<span class="flag">Studies</span>
				<span class="time-wrapper"><span class="time">2011-2013</span></span>
			</div>
			<div class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque odio reiciendis ipsa quas, odit quisquam ducimus?</div>
		</div>
  </li>
  <li>
		<div class="direction-r">
			<div class="flag-wrapper">
				<span class="flag">Classwork</span>
				<span class="time-wrapper"><span class="time">2009-2011</span></span>
			</div>
			<div class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis dicta eum officia enim rem quibusdam, culpa, rerum eaque odio reiciendis ipsa quas, odit quisquam ducimus?</div>
		</div>
	</li>
	<li>
		<div class="direction-l">
			<div class="flag-wrapper">
				<span class="flag">Tutorage</span>
				<span class="time-wrapper"><span class="time">2007-2009</span></span>
			</div>
			<div class="desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis dicta eum officia enim rem quibusdam, culpa, rerum eaque odio reiciendis ipsa quas, odit quisquam ducimus?</div>
		</div>
	</li>
  
</ul>
</section>s
<?php
include('includes/footer.php');
?>