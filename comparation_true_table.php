<!DOCTYPE html>
<html>
<head>
<title>Comparation is_null() vs isset() vs empty() vs isEmpty()</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="comparation.css" type="text/css">
</head>
<body>
<?php
$true = true;
$false = false;
$null = null;
$emptyString = '';
$emptyArray = [];
$nonEmptyArray = ['hello', 'world'];
$zeroString = '0';
$zero = 0;
$minusOne = -1;
$one = 1;
$minusOneString = '-1';
$oneString = '1';
$emptyx8F = '\x8F'; //Outputs an empty string unicoide
$emptyhex = '&#0';  //Outputs an empty string hex
$space = ' ';
$text = 'some text';
$capitaltext = 'SOME text';
$hack = '); /*';
?>
<div id="version"><b>PHP Version: <?php echo phpversion(); ?></b></div>
<h1>Comparations of true tables</h1>
<p>In this document we see the different comparations of true tables, using ==, ===, != and !==.<p>
<ul>
	<li><a href="#iqual">True table using ==</a></li>
	<li><a href="#siqual">True table using ===</a></li>
	<li><a href="#notiqual">True table using !=</a></li>
	<li><a href="#snotiqual">True table using !==</a></li>
</ul>
<a name="iqual" id="iqual"></a><h2> True table using == </h2>
<table border="1px">
	<thead>
		<tr>
			<th>Value</th>
			<th>true</th>
			<th>false</th>
			<th>null</th>
			<th>undefined</th>
			<th>''</th>
			<th>[]</th>
			<th>['hello', 'world']</th>
			<th>'0'</th>
			<th>0</th>
			<th>-1</th>
			<th>1</th>
			<th>'-1'</th>
			<th>'1'</th>
			<th>\x8F</th>
			<th>&amp;#0;</th>
			<th>space</th>
			<th>text</th>
			<th>TExt</th>
			<th>hack</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="left">true</td>
			<?php echo ($true == $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true == $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true == $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true == $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true == $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true == $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true == $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true == $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true == $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true == $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true == $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true == $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true == $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true == $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true == $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true == $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true == $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true == $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true == $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">false</td>
			<?php echo ($false == $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false == $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false == $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false == $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false == $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false == $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false == $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false == $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false == $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false == $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false == $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false == $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false == $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false == $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false == $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false == $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false == $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false == $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false == $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">null</td>
			<?php echo ($null == $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null == $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null == $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null == $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null == $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null == $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null == $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null == $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null == $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null == $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null == $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null == $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null == $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null == $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null == $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null == $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null == $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null == $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null == $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">undefined</td>
			<?php echo ($undefined == $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined == $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined == $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined == $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined == $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined == $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined == $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined == $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined == $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined == $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined == $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined == $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined == $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined == $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined == $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined == $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined == $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined == $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined == $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">''</td>
			<?php echo ($emptyString == $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString == $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString == $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString == $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString == $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString == $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString == $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString == $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString == $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString == $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString == $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString == $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString == $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString == $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString == $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString == $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString == $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString == $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString == $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">[]</td>
			<?php echo ($emptyArray == $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray == $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray == $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray == $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray == $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray == $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray == $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray == $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray == $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray == $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray == $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray == $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray == $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray == $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray == $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray == $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray == $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray == $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray == $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">['hello', 'world']</td>
			<?php echo ($nonEmptyArray == $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray == $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray == $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray == $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray == $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray == $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray == $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray == $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray == $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray == $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray == $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray == $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray == $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray == $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray == $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray == $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray == $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray == $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray == $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">'0'</td>
			<?php echo ($zeroString == $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString == $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString == $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString == $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString == $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString == $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString == $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString == $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString == $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString == $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString == $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString == $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString == $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString == $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString == $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString == $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString == $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString == $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString == $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">0</td>
			<?php echo ($zero == $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero == $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero == $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero == $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero == $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero == $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero == $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero == $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero == $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero == $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero == $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero == $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero == $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero == $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero == $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero == $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero == $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero == $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero == $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">-1</td>
			<?php echo ($minusOne == $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne == $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne == $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne == $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne == $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne == $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne == $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne == $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne == $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne == $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne == $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne == $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne == $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne == $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne == $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne == $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne == $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne == $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne == $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">1</td>
			<?php echo ($one == $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one == $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one == $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one == $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one == $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one == $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one == $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one == $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one == $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one == $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one == $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one == $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one == $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one == $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one == $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one == $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one == $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one == $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one == $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">'-1'</td>
			<?php echo ($minusOneString == $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString == $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString == $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString == $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString == $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString == $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString == $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString == $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString == $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString == $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString == $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString == $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString == $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString == $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString == $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString == $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString == $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString == $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString == $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">'1'</td>
			<?php echo ($oneString == $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString == $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString == $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString == $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString == $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString == $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString == $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString == $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString == $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString == $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString == $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString == $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString == $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString == $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString == $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString == $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString == $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString == $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString == $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">\x8F</td>
			<?php echo ($emptyx8F == $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F == $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F == $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F == $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F == $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F == $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F == $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F == $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F == $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F == $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F == $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F == $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F == $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F == $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F == $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F == $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F == $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F == $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F == $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">&amp;#0;</td>
			<?php echo ($emptyhex == $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex == $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex == $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex == $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex == $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex == $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex == $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex == $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex == $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex == $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex == $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex == $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex == $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex == $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex == $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex == $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex == $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex == $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex == $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">space</td>
			<?php echo ($space == $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space == $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space == $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space == $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space == $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space == $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space == $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space == $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space == $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space == $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space == $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space == $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space == $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space == $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space == $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space == $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space == $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space == $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space == $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">text</td>
			<?php echo ($text == $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text == $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text == $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text == $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text == $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text == $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text == $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text == $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text == $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text == $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text == $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text == $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text == $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text == $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text == $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text == $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text == $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text == $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text == $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">TExt</td>
			<?php echo ($capitaltext == $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext == $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext == $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext == $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext == $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext == $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext == $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext == $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext == $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext == $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext == $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext == $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext == $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext == $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext == $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext == $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext == $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext == $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext == $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">hack</td>
			<?php echo ($hack == $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack == $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack == $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack == $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack == $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack == $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack == $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack == $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack == $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack == $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack == $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack == $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack == $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack == $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack == $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack == $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack == $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack == $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack == $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
	</tbody>
</table>
<a name="siqual" id="siqual"></a><h2> True table using === </h2>
<table border="1px">
	<thead>
		<tr>
			<th>Value</th>
			<th>true</th>
			<th>false</th>
			<th>null</th>
			<th>undefined</th>
			<th>''</th>
			<th>[]</th>
			<th>['hello', 'world']</th>
			<th>'0'</th>
			<th>0</th>
			<th>-1</th>
			<th>1</th>
			<th>'-1'</th>
			<th>'1'</th>
			<th>\x8F</th>
			<th>&amp;#0;</th>
			<th>space</th>
			<th>text</th>
			<th>TExt</th>
			<th>hack</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="left">true</td>
			<?php echo ($true === $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true === $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true === $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true === $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true === $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true === $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true === $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true === $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true === $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true === $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true === $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true === $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true === $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true === $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true === $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true === $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true === $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true === $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true === $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">false</td>
			<?php echo ($false === $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false === $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false === $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false === $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false === $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false === $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false === $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false === $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false === $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false === $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false === $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false === $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false === $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false === $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false === $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false === $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false === $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false === $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false === $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">null</td>
			<?php echo ($null === $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null === $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null === $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null === $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null === $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null === $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null === $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null === $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null === $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null === $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null === $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null === $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null === $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null === $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null === $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null === $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null === $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null === $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null === $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">undefined</td>
			<?php echo ($undefined === $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined === $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined === $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined === $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined === $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined === $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined === $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined === $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined === $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined === $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined === $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined === $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined === $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined === $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined === $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined === $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined === $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined === $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined === $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">''</td>
			<?php echo ($emptyString === $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString === $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString === $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString === $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString === $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString === $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString === $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString === $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString === $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString === $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString === $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString === $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString === $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString === $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString === $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString === $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString === $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString === $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString === $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">[]</td>
			<?php echo ($emptyArray === $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray === $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray === $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray === $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray === $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray === $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray === $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray === $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray === $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray === $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray === $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray === $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray === $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray === $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray === $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray === $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray === $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray === $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray === $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">['hello', 'world']</td>
			<?php echo ($nonEmptyArray === $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray === $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray === $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray === $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray === $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray === $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray === $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray === $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray === $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray === $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray === $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray === $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray === $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray === $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray === $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray === $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray === $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray === $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray === $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">'0'</td>
			<?php echo ($zeroString === $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString === $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString === $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString === $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString === $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString === $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString === $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString === $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString === $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString === $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString === $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString === $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString === $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString === $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString === $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString === $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString === $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString === $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString === $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">0</td>
			<?php echo ($zero === $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero === $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero === $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero === $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero === $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero === $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero === $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero === $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero === $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero === $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero === $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero === $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero === $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero === $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero === $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero === $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero === $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero === $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero === $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">-1</td>
			<?php echo ($minusOne === $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne === $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne === $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne === $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne === $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne === $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne === $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne === $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne === $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne === $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne === $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne === $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne === $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne === $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne === $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne === $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne === $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne === $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne === $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">1</td>
			<?php echo ($one === $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one === $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one === $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one === $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one === $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one === $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one === $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one === $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one === $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one === $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one === $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one === $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one === $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one === $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one === $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one === $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one === $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one === $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one === $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">'-1'</td>
			<?php echo ($minusOneString === $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString === $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString === $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString === $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString === $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString === $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString === $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString === $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString === $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString === $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString === $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString === $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString === $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString === $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString === $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString === $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString === $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString === $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString === $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">'1'</td>
			<?php echo ($oneString === $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString === $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString === $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString === $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString === $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString === $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString === $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString === $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString === $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString === $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString === $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString === $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString === $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString === $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString === $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString === $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString === $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString === $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString === $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">\x8F</td>
			<?php echo ($emptyx8F === $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F === $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F === $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F === $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F === $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F === $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F === $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F === $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F === $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F === $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F === $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F === $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F === $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F === $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F === $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F === $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F === $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F === $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F === $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">&amp;#0;</td>
			<?php echo ($emptyhex === $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex === $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex === $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex === $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex === $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex === $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex === $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex === $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex === $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex === $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex === $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex === $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex === $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex === $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex === $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex === $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex === $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex === $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex === $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">space</td>
			<?php echo ($space === $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space === $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space === $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space === $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space === $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space === $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space === $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space === $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space === $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space === $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space === $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space === $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space === $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space === $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space === $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space === $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space === $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space === $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space === $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">text</td>
			<?php echo ($text === $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text === $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text === $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text === $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text === $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text === $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text === $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text === $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text === $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text === $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text === $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text === $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text === $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text === $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text === $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text === $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text === $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text === $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text === $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">TExt</td>
			<?php echo ($capitaltext === $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext === $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext === $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext === $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext === $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext === $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext === $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext === $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext === $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext === $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext === $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext === $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext === $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext === $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext === $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext === $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext === $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext === $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext === $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">hack</td>
			<?php echo ($hack === $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack === $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack === $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack === $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack === $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack === $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack === $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack === $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack === $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack === $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack === $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack === $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack === $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack === $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack === $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack === $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack === $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack === $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack === $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
	</tbody>
</table>
</tbody>
<a name="notiqual" id="notiqual"></a><h2> True table using != </h2>
<table border="1px">
	<thead>
		<tr>
			<th>Value</th>
			<th>true</th>
			<th>false</th>
			<th>null</th>
			<th>undefined</th>
			<th>''</th>
			<th>[]</th>
			<th>['hello', 'world']</th>
			<th>'0'</th>
			<th>0</th>
			<th>-1</th>
			<th>1</th>
			<th>'-1'</th>
			<th>'1'</th>
			<th>\x8F</th>
			<th>&amp;#0;</th>
			<th>space</th>
			<th>text</th>
			<th>TExt</th>
			<th>hack</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="left">true</td>
			<?php echo ($true != $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true != $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true != $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true != $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true != $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true != $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true != $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true != $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true != $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true != $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true != $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true != $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true != $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true != $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true != $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true != $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true != $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true != $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true != $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">false</td>
			<?php echo ($false != $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false != $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false != $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false != $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false != $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false != $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false != $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false != $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false != $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false != $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false != $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false != $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false != $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false != $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false != $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false != $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false != $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false != $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false != $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">null</td>
			<?php echo ($null != $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null != $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null != $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null != $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null != $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null != $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null != $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null != $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null != $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null != $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null != $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null != $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null != $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null != $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null != $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null != $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null != $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null != $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null != $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">undefined</td>
			<?php echo ($undefined != $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined != $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined != $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined != $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined != $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined != $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined != $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined != $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined != $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined != $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined != $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined != $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined != $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined != $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined != $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined != $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined != $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined != $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined != $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">''</td>
			<?php echo ($emptyString != $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString != $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString != $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString != $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString != $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString != $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString != $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString != $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString != $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString != $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString != $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString != $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString != $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString != $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString != $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString != $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString != $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString != $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString != $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">[]</td>
			<?php echo ($emptyArray != $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray != $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray != $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray != $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray != $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray != $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray != $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray != $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray != $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray != $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray != $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray != $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray != $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray != $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray != $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray != $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray != $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray != $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray != $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">['hello', 'world']</td>
			<?php echo ($nonEmptyArray != $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray != $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray != $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray != $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray != $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray != $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray != $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray != $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray != $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray != $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray != $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray != $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray != $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray != $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray != $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray != $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray != $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray != $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray != $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">'0'</td>
			<?php echo ($zeroString != $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString != $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString != $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString != $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString != $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString != $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString != $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString != $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString != $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString != $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString != $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString != $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString != $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString != $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString != $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString != $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString != $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString != $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString != $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">0</td>
			<?php echo ($zero != $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero != $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero != $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero != $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero != $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero != $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero != $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero != $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero != $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero != $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero != $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero != $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero != $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero != $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero != $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero != $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero != $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero != $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero != $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">-1</td>
			<?php echo ($minusOne != $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne != $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne != $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne != $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne != $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne != $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne != $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne != $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne != $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne != $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne != $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne != $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne != $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne != $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne != $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne != $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne != $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($ninusOne != $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne != $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">1</td>
			<?php echo ($one != $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one != $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one != $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one != $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one != $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one != $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one != $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one != $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one != $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one != $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one != $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one != $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one != $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one != $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one != $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one != $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one != $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one != $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one != $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">'-1'</td>
			<?php echo ($minusOneString != $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString != $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString != $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString != $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString != $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString != $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString != $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString != $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString != $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString != $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString != $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString != $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString != $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString != $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString != $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString != $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString != $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString != $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString != $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">'1'</td>
			<?php echo ($oneString != $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString != $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString != $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString != $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString != $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString != $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString != $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString != $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString != $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString != $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString != $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString != $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString != $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString != $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString != $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString != $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString != $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString != $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString != $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">\x8F</td>
			<?php echo ($emptyx8F != $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F != $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F != $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F != $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F != $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F != $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F != $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F != $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F != $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F != $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F != $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F != $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F != $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F != $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F != $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F != $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F != $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F != $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F != $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">&amp;#0;</td>
			<?php echo ($emptyhex != $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex != $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex != $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex != $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex != $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex != $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex != $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex != $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex != $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex != $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex != $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex != $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex != $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex != $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex != $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex != $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex != $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex != $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex != $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">space</td>
			<?php echo ($space != $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space != $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space != $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space != $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space != $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space != $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space != $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space != $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space != $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space != $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space != $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space != $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space != $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space != $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space != $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space != $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space != $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space != $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space != $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">text</td>
			<?php echo ($text != $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text != $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text != $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text != $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text != $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text != $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text != $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text != $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text != $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text != $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text != $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text != $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text != $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text != $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text != $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text != $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text != $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text != $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text != $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">TExt</td>
			<?php echo ($capitaltext != $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext != $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext != $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext != $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext != $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext != $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext != $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext != $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext != $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext != $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext != $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext != $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext != $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext != $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext != $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext != $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext != $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext != $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext != $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">hack</td>
			<?php echo ($hack != $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack != $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack != $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack != $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack != $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack != $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack != $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack != $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack != $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack != $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack != $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack != $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack != $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack != $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack != $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack != $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack != $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack != $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack != $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
	</tbody>
</table>
<a name="snotiqual" id="snotiqual"></a><h2> True table using !== </h2>
<table border="1px">
	<thead>
		<tr>
			<th>Value</th>
			<th>true</th>
			<th>false</th>
			<th>null</th>
			<th>undefined</th>
			<th>''</th>
			<th>[]</th>
			<th>['hello', 'world']</th>
			<th>'0'</th>
			<th>0</th>
			<th>-1</th>
			<th>1</th>
			<th>'-1'</th>
			<th>'1'</th>
			<th>\x8F</th>
			<th>&amp;#0;</th>
			<th>space</th>
			<th>text</th>
			<th>TExt</th>
			<th>hack</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="left">true</td>
			<?php echo ($true !== $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true !== $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true !== $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true !== $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true !== $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true !== $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true !== $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true !== $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true !== $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true !== $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true !== $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true !== $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true !== $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true !== $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true !== $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true !== $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true !== $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true !== $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($true !== $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">false</td>
			<?php echo ($false !== $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false !== $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false !== $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false !== $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false !== $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false !== $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false !== $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false !== $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false !== $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false !== $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false !== $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false !== $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false !== $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false !== $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false !== $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false !== $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false !== $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false !== $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($false !== $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">null</td>
			<?php echo ($null !== $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null !== $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null !== $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null !== $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null !== $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null !== $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null !== $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null !== $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null !== $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null !== $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null !== $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null !== $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null !== $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null !== $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null !== $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null !== $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null !== $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null !== $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($null !== $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">undefined</td>
			<?php echo ($undefined !== $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined !== $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined !== $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined !== $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined !== $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined !== $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined !== $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined !== $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined !== $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined !== $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined !== $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined !== $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined !== $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined !== $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined !== $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined !== $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined !== $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined !== $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($undefined !== $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">''</td>
			<?php echo ($emptyString !== $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString !== $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString !== $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString !== $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString !== $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString !== $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString !== $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString !== $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString !== $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString !== $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString !== $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString !== $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString !== $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString !== $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString !== $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString !== $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString !== $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString !== $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyString !== $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">[]</td>
			<?php echo ($emptyArray !== $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray !== $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray !== $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray !== $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray !== $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray !== $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray !== $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray !== $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray !== $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray !== $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray !== $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray !== $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray !== $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray !== $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray !== $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray !== $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray !== $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray !== $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyArray !== $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">['hello', 'world']</td>
			<?php echo ($nonEmptyArray !== $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray !== $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray !== $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray !== $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray !== $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray !== $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray !== $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray !== $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray !== $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray !== $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray !== $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray !== $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray !== $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray !== $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray !== $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray !== $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray !== $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray !== $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($nonEmptyArray !== $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">'0'</td>
			<?php echo ($zeroString !== $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString !== $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString !== $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString !== $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString !== $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString !== $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString !== $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString !== $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString !== $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString !== $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString !== $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString !== $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString !== $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString !== $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString !== $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString !== $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString !== $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString !== $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zeroString !== $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">0</td>
			<?php echo ($zero !== $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero !== $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero !== $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero !== $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero !== $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero !== $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero !== $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero !== $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero !== $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero !== $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero !== $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero !== $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero !== $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero !== $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero !== $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero !== $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero !== $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero !== $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($zero !== $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">-1</td>
			<?php echo ($minusOne !== $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne !== $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne !== $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne !== $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne !== $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne !== $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne !== $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne !== $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne !== $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne !== $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne !== $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne !== $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne !== $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne !== $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne !== $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne !== $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne !== $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne !== $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOne !== $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">1</td>
			<?php echo ($one !== $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one !== $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one !== $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one !== $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one !== $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one !== $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one !== $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one !== $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one !== $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one !== $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one !== $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one !== $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one !== $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one !== $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one !== $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one !== $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one !== $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one !== $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($one !== $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">'-1'</td>
			<?php echo ($minusOneString !== $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString !== $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString !== $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString !== $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString !== $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString !== $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString !== $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString !== $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString !== $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString !== $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString !== $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString !== $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString !== $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString !== $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString !== $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString !== $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString !== $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString !== $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($minusOneString !== $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">'1'</td>
			<?php echo ($oneString !== $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString !== $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString !== $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString !== $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString !== $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString !== $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString !== $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString !== $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString !== $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString !== $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString !== $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString !== $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString !== $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString !== $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString !== $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString !== $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString !== $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString !== $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($oneString !== $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">\x8F</td>
			<?php echo ($emptyx8F !== $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F !== $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F !== $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F !== $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F !== $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F !== $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F !== $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F !== $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F !== $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F !== $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F !== $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F !== $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F !== $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F !== $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F !== $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F !== $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F !== $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F !== $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyx8F !== $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">&amp;#0;</td>
			<?php echo ($emptyhex !== $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex !== $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex !== $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex !== $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex !== $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex !== $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex !== $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex !== $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex !== $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex !== $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex !== $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex !== $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex !== $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex !== $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex !== $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex !== $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex !== $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex !== $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($emptyhex !== $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">space</td>
			<?php echo ($space !== $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space !== $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space !== $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space !== $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space !== $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space !== $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space !== $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space !== $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space !== $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space !== $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space !== $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space !== $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space !== $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space !== $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space !== $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space !== $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space !== $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space !== $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($space !== $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">text</td>
			<?php echo ($text !== $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text !== $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text !== $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text !== $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text !== $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text !== $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text !== $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text !== $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text !== $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text !== $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text !== $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text !== $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text !== $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text !== $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text !== $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text !== $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text !== $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text !== $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($text !== $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">TExt</td>
			<?php echo ($capitaltext !== $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext !== $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext !== $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext !== $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext !== $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext !== $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext !== $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext !== $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext !== $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext !== $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext !== $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext !== $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext !== $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext !== $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext !== $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext !== $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext !== $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext !== $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($capitaltext !== $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
		<tr>
			<td class="left">hack</td>
			<?php echo ($hack !== $true) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack !== $false) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack !== $null) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack !== $undefined) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack !== $emptyString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack !== $emptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack !== $nonEmptyArray) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack !== $zeroString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack !== $zero) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack !== $minusOne) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack !== $one) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack !== $minusOneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack !== $oneString) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack !== $emptyx8F) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack !== $emptyhex) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack !== $space) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack !== $text) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack !== $capitaltext) ? '<td class="true">true' : '<td class="false">false'; ?></td>
			<?php echo ($hack !== $hack) ? '<td class="true">true' : '<td class="false">false'; ?></td>
		</tr>
	</tbody>
</table>
</body>
</html>