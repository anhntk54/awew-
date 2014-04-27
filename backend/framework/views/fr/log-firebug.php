<<<<<<< HEAD
<script type="text/javascript">
/*<![CDATA[*/
if(typeof(console)=='object')
{
	console.<?php echo $this->collapsedInFireBug?'groupCollapsed':'group'; ?>("Application Log");
<?php
foreach($data as $index=>$log)
{
	$time=date('H:i:s.',$log[3]).(int)(($log[3]-(int)$log[3])*1000);
	if($log[1]===CLogger::LEVEL_WARNING)
		$func='warn';
	elseif($log[1]===CLogger::LEVEL_ERROR)
		$func='error';
	else
		$func='log';
	$content=CJavaScript::quote("[$time][$log[1]][$log[2]] $log[0]");
	echo "\tconsole.{$func}(\"{$content}\");\n";
}
?>
	console.groupEnd();
}
/*]]>*/
=======
<script type="text/javascript">
/*<![CDATA[*/
if(typeof(console)=='object')
{
	console.<?php echo $this->collapsedInFireBug?'groupCollapsed':'group'; ?>("Application Log");
<?php
foreach($data as $index=>$log)
{
	$time=date('H:i:s.',$log[3]).(int)(($log[3]-(int)$log[3])*1000);
	if($log[1]===CLogger::LEVEL_WARNING)
		$func='warn';
	elseif($log[1]===CLogger::LEVEL_ERROR)
		$func='error';
	else
		$func='log';
	$content=CJavaScript::quote("[$time][$log[1]][$log[2]] $log[0]");
	echo "\tconsole.{$func}(\"{$content}\");\n";
}
?>
	console.groupEnd();
}
/*]]>*/
>>>>>>> 402c32a9249f3b941fa3a3a2066f3aa6277c3ec3
</script>