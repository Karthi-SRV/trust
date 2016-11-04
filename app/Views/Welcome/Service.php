<div class="page-header">
	<h2><?=$title;?></h2>

<div class="mdl-grid portfoli-max-width">
<?php
foreach ($forms as $forms)  {
    
    echo "<div class='mdl-cell mdl-card mdl-shadow--4dp portfolio-card'><div class='mdl-card__media'>";
echo "<img class='article-image' src='". template_url('images/service.jpg', 'default') . "' border='0' alt=''>";
echo "</div><div class='mdl-card__title'>";
echo "<h2 class='mdl-card__title-text'>".$forms->form_name ."</h2>";
echo "</div><div class='mdl-card__supporting-text'>";
                    echo $forms->form_description;
                    echo "</div>
                    <div class='mdl-card__actions mdl-card--border'>";
                    echo "<a class='mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent' href='".site_url('service/birth') ."'>Enter Now</a>";
                    echo "</div></div></div>";
}
?>

            
                        
                    
                        
                  