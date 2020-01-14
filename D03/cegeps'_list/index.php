
<!DOCTYPE html>
<html lang="en">
<header>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1";
<h1>List of Cegeps</h1>
</header>
<main>
<nav>
<ul>
<?php 

$cegeps = array(
    "Collège Ahuntsic"              => "http://www.collegeahuntsic.qc.ca/accueil/accueil.html",
    "Collège de Bois-de-Boulogne"   => "http://www.bdeb.qc.ca/",
    "Champlain Regional Collège"    => "http://www.crc-sher.qc.ca/home/",
    "Dawson College"                => "http://www.dawsoncollege.qc.ca/",
    "Collège Édouard-Montpetit"     => "http://www.college-em.qc.ca/",
    "John Abbott College"           => "http://www.johnabbott.qc.ca/",
    "Cégep régional de Lanaudière"  => "http://www.cegep-lanaudiere.qc.ca/",
    "Collège Lionel-Groulx"         => "http://www.clg.qc.ca/");
	?>
<?php foreach($cegeps as $clgName => $clgWebsite):?>
	            <li><a href="<?php echo $clgWebsite; ?>"><?php echo $clgName; ?></a></li>
	      <?php endforeach; ?>
</ul>
</nav>
</main>
<footer>
</footer>
</div>
</body>
</html>

