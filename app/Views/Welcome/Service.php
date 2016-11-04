<div class="page-header">
	<h2><?=$title;?></h2>

</div>
<div class="mdl-grid portfoli-max-width">
<form action="#">
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" id="sample3">
    <label class="mdl-textfield__label" for="sample3">Text...</label>
  </div>
</form>
</div>
<div class="mdl-cell2 mdl-card  portfolio-card">
                    <div class="mdl-card__media">
                        <img class="article-image" src='<?=template_url('images/example.jpg', 'default')?>' border="0" alt="">
                    </div>
                    <div class="mdl-card__title">
                    <button class="mdl-button mdl-button--raised mdl-js-button dialog-button">Show Dialog</button>
                        <h2 class="mdl-card__title-text"><a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" href='<?= site_url('subpage'); ?>'>Enter Now</a></h2>
                    </div>
                    
                </div>





<dialog id="dialog" class="mdl-dialog" style="width: 380px;">
  <h3 class="mdl-dialog__title">MDL Dialog</h3>
  <div class="mdl-dialog__content">
    <p>
      This is an example of the Material Design Lite dialog component.
      Please use responsibly.
    </p>
  </div>
  <div class="mdl-dialog__actions">
  
    <button type="button" class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
      <i class="material-icons">close</i>
    </button>
    <button type="button" class="mdl-button">Close</button>
    <button type="button" class="mdl-button">Disabled </button>
    
  </div>
 
</dialog>