
<?php

$colors = Array("red", "blue","green","yellow","gray","purple");
$devs = Array("Hortense","Wikenson","Yohann","Thibault","Ludo","Clément");
$a = 0;
$b = 0;
$c = 0;

?>
<div class="container">
	<h1><?php echo $PAGE_TITLE; ?></h1>
	<p><?php echo $PAGE_DESCRIPTION; ?></p>
	<div class="row">
		<h2 class="col-12">Boucle <strong>foreach</strong></h2>

<?php
foreach ($colors as $color) {
?>	
	 <div class="col-4 my-4 text-center text-light">
	 	<p style="background-color: <?php echo $color ?>; height: 100px; line-height: 100px;">C'est une div de couleur <?php echo $color ?></p>
	 	<?php  monMsg($color);  ?>	 	
	 </div>		

<?php
}
?>
	</div>


<?php

for ($i=0; $i <5 ; $i++) { 
	$a+=100;
	$b+=50;
	$c+=10;
}
?>

<div class="row">
	<div class="col-12">
		<h2>Boucle <strong>for</strong></h2>
	</div>
	<div class="col-md-4 my-4 text-center text-light height50"><p class="bg-primary" style="margin: 2px;">La valeur de a est égale à <?php echo $a; ?></p></div>
	<div class="col-md-4 my-4 text-center text-light height50"><p class="bg-success" style="margin: 2px;">La valeur de b est égale à <?php echo $b; ?></p></div>
	<div class="col-md-4 my-4 text-center text-light height50"><p class="bg-secondary" style="margin: 2px;">La valeur de c est égale à <?php echo $c; ?></p></div>
</div>

<div class="row">
	<div class="col-12">
		<h2>Boucle <strong>while</strong></h2>
	</div>
<?php
$x=0;
while ($x <= 5) {
	$x++;
?>
<div class="col-md-4 my-4 text-center text-light height50"><p class="bg-primary" style="margin: 2px;">La valeur de x est égale à <?php echo $x; ?></p></div>

<?php
}
?>	
	
</div>


<div class="row">
		<h2 class="col-12">Un dev pour une couleur (Combinaison de 2 tableaux avec une boucle <strong>for</strong>)</h2>
		<?php 
			for ($i=0; $i <count($devs) ; $i++) {

				echo "<div class='col-4 my-4 text-center text-light'>
	 	<p style='background-color: $colors[$i]; height: 100px; line-height: 100px;'>$devs[$i]</p> 	
	 </div>";
				
			}?>

	</div>

<div class="row">
		<h2 class="col-12">Un dev pour une couleur (Combinaison de 2 tableaux avec une boucle <strong>foreach</strong>)</h2>
		<?php 
			$tabGlobales = array_combine($devs, $colors);
			foreach ($tabGlobales as $tabGlobale => $value) {
				$name = mb_substr($tabGlobale, 0, 3);
				echo "<div class='col-4 my-4 text-center text-light'>
	 	<p style='background-color: $value; height: 100px; line-height: 100px;'>$name</p> 	
	 </div>";
			}
				
			?>

	</div>




</div>


<?php

function monMsg($a='blue')
{
	echo "<p class='color lead' style='color:$a;'>Je suis ici grâce à une fonction PHP</p>";
}

?>




