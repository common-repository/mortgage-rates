<!-- Copyright 2008-2019 MLCALC.com --><div id="MLCalcRatesForm<?php echo $SECTION["alias"]; ?>" class="MLCalcRatesForm"><!--[if lte IE 6]> <script type="text/javascript" src="<?php echo plugins_url("jquery.pngFix.js", __FILE__); ?>"></script> <![endif]--><table cellpadding="0" cellspacing="0" width="150"><tr><td colspan="3" class="zeroHeight"><img src="<?php echo plugins_url("images/top-small.png", __FILE__); ?>" width="150" height="13" alt=""/></td></tr><tr><td style="background: url(<?php echo plugins_url("images/left-bg.png", __FILE__); ?>) repeat-y" width="7"></td><td class="formPlaceHolder" width="136"><form action="<?php echo $SECTION["url"]; ?>" method="post" id="MLCalcRatesFormTrend<?php echo $SECTION["alias"]; ?>" target="MLCalcRatesFrame"><input type="hidden" name="state" value="<?php echo $SECTION["alias"]; ?>"/> <input type="hidden" name="wg" value="widget"/></form><table cellpadding="0" cellspacing="0" width="136"><tr><td width="7"></td><td colspan="4"><?php if ($SECTION['alias'] == "XX") {echo '<div class="name">US Average<a href="' . $SECTION['url'] . '" class="nameB">Mortgage Rates</a></div>';} else {echo '<a href="' . $SECTION['url'] . '" class="name">' . $SECTION['name'] . ' <b>Mortgage Rates</b></a>';} ?></td></tr><tr><td width="7" height="5"></td></tr><tr class="odd" id="type30yf"><td width="7"></td><td width="83">30 Year Fixed</td><td width="36" class="mlrvalue"><span class="loading">loading...</span></td><td width="5" class="mlrchange"></td><td width="5"></td></tr><tr class="even" id="type15yf"><td width="7"></td><td width="83">15 Year Fixed</td><td width="36" class="mlrvalue"><span class="loading">loading...</span></td><td width="5" class="mlrchange"></td><td width="5"></td></tr><tr class="odd" id="type51arm"><td width="7"></td><td width="83">5/1 ARM</td><td width="36" class="mlrvalue"><span class="loading">loading...</span></td><td width="5" class="mlrchange"></td><td width="5"></td></tr><tr><td width="7" height="4" colspan="5"></td></tr><tr><td colspan="5"><center><table cellpadding="0" cellspacing="0"><tr><td valign="bottom"><img src="<?php echo plugins_url("images/icon-trend-small.gif", __FILE__); ?>" width="15" height="12" alt=""/></td><td width="5"></td><td id="trendLink">View Trend</td></tr></table></center></td></tr></table></td><td style="background: url(<?php echo plugins_url("images/right-bg.png", __FILE__); ?>) repeat-y" width="7"></td></tr><tr><td colspan="3" class="zeroHeight"><img src="<?php echo plugins_url("images/bottom-small.png", __FILE__); ?>" width="150" height="13" alt=""/></td></tr></table></div>