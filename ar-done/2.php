<div>
<h1 id="from">من عمل</h1>
<h1 id="Ihsan">احسان</h1>
<h1 id="project">مشروع لغتي</h1>
</div>
<style>
:root{
--color:white;
--color2:#ababab;
--color3:black;
}
@media (prefers-color-scheme: light) {
:root{
--color:white;
--color2:black;
--color3:white;
}
}
@media (prefers-color-scheme: dark) {
:root{
--color:black;
--color2:#00b2ff;
--color3:#00ffee40;
}
}
html{
	background:var(--color);
}
body{
	margin:0px;
}
div{
    width: -webkit-fill-available;
    text-align: center;
    transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg);
    color: var(--color2);
	position: absolute;
	font-size:calc(1vh + 1vw);
}
*{
	perspective: 1000px;
    transform-style: preserve-3d;
}
#from{
	position: relative;
	width: fit-content;
	animation-name: from;
    animation-duration: 5s;
    animation-timing-function: ease-in-out;
	
	transform: rotateY(30deg);
	left:50vw;
	/*
	animation-name: from;
    animation-duration: 6s;
    animation-timing-function: linear;
    /* animation-iteration-count: infinite; */
}
@keyframes from{
	0%{
		transform: rotateY(-180deg);
		left:0vw;
		color:var(--color3);
	}
	100%{
		color:var(--color2);
		transform: rotateY(30deg);
		left:50vw;
	}
}
#project{
	position: relative;
	width: fit-content;
	animation-name: project;
    animation-duration: 5s;
    animation-timing-function: ease-in-out;
	
	transform: rotateY(30deg);
	left:50vw;
}
@keyframes project{
	0%{
		transform: rotateY(-190deg);
		left:-2.5vw;
		/*opacity: -10000000;*/
		color:var(--color3);
	}
	20%{
		color:var(--color3);
		transform: rotateY(-180deg);
		left:0vw;
	}
	100%{
		color:var(--color2);
		transform: rotateY(30deg);
		left:50vw;
	}
}
#Ihsan{
	position: relative;
	width: fit-content;
	animation-name: Ihsan;
    animation-duration: 5s;
    animation-timing-function: ease-in-out;
	
	transform: rotateY(-30deg);
	left:40vw;
}
@keyframes Ihsan{
	0%{
		color:var(--color3);
		transform: rotateY(180deg);
		left:100vw;
	}
	100%{
		color:var(--color2);
		transform: rotateY(-30deg);
		left:40vw;
	}
}
</style>
<script>
url = "3.php"
const project = document.getElementById("project");

project.addEventListener("animationend", () => {
	setTimeout(() => {
		load_2();
	},2000);
})

function load_2(){
window.open(url, "_self");
}
/*
var myWindow = window.open("", "_self");
myWindow.document.write(url);
*/
</script>