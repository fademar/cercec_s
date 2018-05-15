<form role="search" method="get" id="searchform" class="search-form" action="<?php echo home_url( '/' ); ?>">
    <label>
	<span class="screen-reader-text">Search for:</span>
	<input type="search" class="search-field" placeholder="" value="" name="s"/>
    </label>
	<input type="submit" class="search-submit" value="Search" />
</form>
<?php do_action( 'wpml_add_language_form_field' ); ?>