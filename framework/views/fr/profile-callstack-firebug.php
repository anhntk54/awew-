<<<<<<< HEAD
<script type="text/javascript">
/*<![CDATA[*/
if(typeof(console)=='object')
{
	console.group("Profiling Callstack Report");
<?php
foreach($data as $index=>$entry)
{
	list($proc,$time,$level)=$entry;
	$proc=CJavaScript::quote($proc);
	$time=sprintf('%0.5f',$time);
	$spaces=str_repeat(' ',$level*8);
	echo "\tconsole.log(\"[$time]{$spaces}{$proc}\");\n";
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
	console.group("Profiling Callstack Report");
<?php
foreach($data as $index=>$entry)
{
	list($proc,$time,$level)=$entry;
	$proc=CJavaScript::quote($proc);
	$time=sprintf('%0.5f',$time);
	$spaces=str_repeat(' ',$level*8);
	echo "\tconsole.log(\"[$time]{$spaces}{$proc}\");\n";
}
?>
	console.groupEnd();
}
/*]]>*/
>>>>>>> 402c32a9249f3b941fa3a3a2066f3aa6277c3ec3
</script>