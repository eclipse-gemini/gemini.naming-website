<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
/*******************************************************************************
 * Copyright (c) 2009 
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    Mike Keith
 *******************************************************************************/

	$pageTitle 		= "Gemini Naming Downloads";
	#$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="/gemini/naming/style.css"/>');

	$html  = <<<EOHTML
<div id="midcolumn">
<h2>$pageTitle</h2>
<p>All downloads are provided under the terms and conditions of the <a href="/legal/epl/notice.php">Eclipse Foundation Software User Agreement</a> unless otherwise specified.</p>

<h2>Latest Milestone</h2>
 <p>
     <strong>1.0.0.RC1</strong> - 
     <a href="http://www.eclipse.org/downloads/download.php?file=/gemini/naming/r1.0/milestones/gemini-naming-1.0.0.RC1.zip">Download</a>
 </p>
 <p>Bug list is available <a href="https://bugs.eclipse.org/bugs/buglist.cgi?classification=RT;query_format=advanced;bug_status=RESOLVED;bug_status=VERIFIED;bug_status=CLOSED;target_milestone=1.0.0.RC1;product=Gemini.Naming" target="_self">here</a>.</p>

<h3>Previous Milestones</h3>
<p>
     <strong>1.0.0.M02</strong> - 
     <a href="http://www.eclipse.org/downloads/download.php?file=/gemini/naming/r1.0/milestones/gemini-naming-1.0.0.M02.zip">Download</a>
</p>
<p>Bug list is available <a href="https://bugs.eclipse.org/bugs/buglist.cgi?classification=RT;query_format=advanced;bug_status=RESOLVED;bug_status=VERIFIED;bug_status=CLOSED;target_milestone=1.0.0.M02;product=Gemini.Naming" target="_self">here</a>.</p>

<p>
     <strong>1.0.0.M01-incubation</strong> - 
     <a href="http://www.eclipse.org/downloads/download.php?file=/gemini/naming/r1.0/milestones/gemini-naming-1.0.0.M01-incubation.zip">Download</a>
</p>
<p>Bug list is available <a href="https://bugs.eclipse.org/bugs/buglist.cgi?classification=RT;query_format=advanced;bug_status=RESOLVED;bug_status=VERIFIED;bug_status=CLOSED;target_milestone=1.0.0.M01;product=Gemini.Naming" target="_self">here</a>.</p>
</div>

<div id="rightcolumn">
</div>

EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>