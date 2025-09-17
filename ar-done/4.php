<a href="3.php">&#8592; الرجوع</a>
<?php
$data = json_decode(file_get_contents("data.json"), true);
$main_subjects = $data["main_subject"];
$side_texts = $data["text"];
foreach($main_subjects as $main_subject){
	$side_text = $side_texts[$main_subject];
	
	?><h1 class="main_subject"><?= $main_subject; ?></h1>
	<h3 class="side_text" >
		<?php
		$side_text_array = explode(" ",$side_text);
		foreach($side_text_array as $side_text_word){
			?>
			<div class="text_anm" style="animation-range-end: <?= rand(0,45); ?>vh;">
				<?= " ".$side_text_word; ?>
			</div>
			<?php
		}?>
	</h3>
<?php
}
?>
<h6>تم برمجة الموقع من احسان سميح الشريف</h6>
<style>
@media (prefers-color-scheme: light) {
:root{
	--color:#85c7ff;
	--color2:#d76363;
	--background: white;
}
}
@media (prefers-color-scheme: dark) {
:root{
	--color: #d1d1d1;
    --color2: #85c7ff;
	--background: black;
}
}
*{
	text-align: center;
}
.main_subject{
	animation-name: main;
    animation-timing-function: ease-in-out;
    animation-timeline: view();
    animation-range-end: 20vh;
	
	font-size: 5vh;
    color: var(--color2);
}
html,body{
	background: var(--background);
    color: white;
	direction: rtl;
}
.text_anm{
	display: inline-grid;
}
/*now the side text animation */
.text_anm{
	animation-name: side;
    animation-timing-function: ease-in-out;
    animation-timeline: view();
    animation-range-end: 20vh;
}
@keyframes side{
    from{opacity:0;     transform: translateY(20vh) rotate(-100deg);     scale: 1; color:white}
	to{opacity:1;     transform: translateY(0vh) rotate(0deg);     scale: 1; color:var(--color);}
}
.side_text{
	font-size:3vh;
	color:var(--color);
}
h3{
	margin-bottom:1vh;
}
/*now the big text animation */
.main_subject{
	display: inline-grid;
	animation-name: main;
    animation-timing-function: ease-in-out;
    animation-timeline: view();
    animation-range-end: 50vh;
}
@keyframes main{
    from{opacity:0.5;color:var(--background)}
	to{opacity:1; color:var(--color2);}
}
/* done with the animation */
h6{
margin-bottom: 40vh;
}
a{
	position: fixed;
	top:0px;
	left:0px;
	color: var(--color2);
	/*background: var(--color);*/
}
</style>