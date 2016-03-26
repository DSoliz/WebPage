<!DOCTYPE html>

<?php
function Get_dsolizcaProjectIdea($index){
                if ($index == 0){
                        return ("Make a website to teach trig functions using a visual aproach.");
                }else{
                      	return ("Make a videogame in a website.");
                }
}
?>

<html>
<body>


<h1>Ideas for final project</h1>

	<ul>
		<li><?php echo Get_dsolizcaProjectIdea(0); ?></li>

		<li><?php echo Get_dsolizcaProjectIdea(1); ?></li>
	</ul>

</body>
</html>
