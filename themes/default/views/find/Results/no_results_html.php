<?php
/* ----------------------------------------------------------------------
 * themes/default/views/find/no_results_html.php
 * ----------------------------------------------------------------------
 * CollectiveAccess
 * Open-source collections management software
 * ----------------------------------------------------------------------
 *
 * Software by Whirl-i-Gig (http://www.whirl-i-gig.com)
 * Copyright 2009-2020 Whirl-i-Gig
 *
 * For more information visit http://www.CollectiveAccess.org
 *
 * This program is free software; you may redistribute it and/or modify it under
 * the terms of the provided license as published by Whirl-i-Gig
 *
 * CollectiveAccess is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTIES whatsoever, including any implied warranty of 
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  
 *
 * This source code is free and modifiable under the terms of 
 * GNU General Public License. (http://www.gnu.org/copyleft/gpl.html). See
 * the "license.txt" file for details, or visit the CollectiveAccess web site at
 * http://www.CollectiveAccess.org
 *
 * ----------------------------------------------------------------------
 */	
 
 	$t_subject = $this->getVar('t_subject');
 	$vs_search = $this->getVar('search');
 	

?>	
<div id="resultBox">
	<div class="subTitle">
		<?= $this->getVar('search') ? _t("Your search found no %1", $this->getVar('mode_type_plural')) : _t("Please enter a search"); ?>
	</div>
</div><!-- end resultbox -->