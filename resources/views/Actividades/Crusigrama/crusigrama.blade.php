@extends('layouts.app')
@section('content')

<html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>Características de los virus</title>
<style type="text/css"><!--

body, h1, h2, h3, h4, h5, h6
{
	font-family: "Segoe UI", "Franklin Gothic Medium", "Arial", sans-serif;
}

h1, h2, h3, h4, h5, h6
{
	color: #5d6a86;
}

body
{
	cursor: default;
	font-size: small;
}

.ecw-answerbox
{
	color: black;
	background-color: #FFFAF0;
	border-color: #808080;
	border-style: solid;
	border-width: 1px;
	display: block;
	padding: .75em;
	width: 240pt;
}

.ecw-box
{
	border-style: solid;
	border-width: 1pt;
	cursor: pointer;
	font-size: .12in;
	font-weight: bold;
	height: .30in;
	overflow: hidden;
	text-align: center;
	width: .30in;
}

.ecw-boxcheated_sel
{
	background-color: #FFF1D7;
	border-color: #C00000;
	color: #2080D0;
}

.ecw-boxcheated_unsel
{
	background-color: #ffffff;
	border-color: #606060;
	color: #2080D0;
}

.ecw-boxerror_sel
{
	background-color: #FFF1D7;
	border-color: #C00000;
	color: #BF0000;
}

.ecw-boxerror_unsel
{
	background-color: #FFF0F0;
	border-color: #606060;
	color: #BF0000;
}

.ecw-boxnormal_sel
{
	background-color: #FFF1D7;
	border-color: #C00000;
	color: #000000;
}

.ecw-boxnormal_unsel
{
	background-color: #ffffff;
	border-color: #606060;
	color: #000000;
}

.ecw-button
{
	width: 64pt;
}

.ecw-cluebox
{
	border-bottom-width: 1px;
	border-color: #c0c0c0;
	border-left-width: 0px;
	border-right-width: 0px;
	border-style: solid;
	border-top-width: 1px;
	margin-top: 1em;
	padding-bottom: .5em;
	padding-left: 0pt;
	padding-right: 0pt;
	padding-top: .5em;
}

.ecw-crosswordarea
{
	background-color: white;
	border-color: #808080;
	border-style: solid;
	border-width: 2px;
	padding: .5em;
	font-family: "Segoe UI", "Verdana", "Arial", sans-serif;
	font-size: small;
}

.ecw-copyright
{
	margin-bottom: 1em;
	font-size: x-small;
	font-family: "Segoe UI", "Franklin Gothic Medium", "Arial", sans-serif;
}

.ecw-input
{
	font-family: "Segoe UI", "Verdana", "Arial", sans-serif;
}

.ecw-wordlabel
{
	text-transform: uppercase;
	margin: 0;
}

.ecw-wordinfo
{
	font-size: 8pt;
	color: #808080;
}

.ecw-worderror
{
	color: #c00000;
	font-weight: bold;
	display: none;
	margin-top: 1em;
}

--></style>

</head><body>

<h1>Características de los Virus</h1>
<h3 style="margin-top: -1em;"></h3>

<div id="waitmessage" class="ecw-answerbox">
	Este crucigrama interactivo requiere de JavaScript y cualquier navegador web reciente.
	Si tienes desabilitados los scripts en tu navegador, reactivalo y recarga la página nuevamente.
</div>

<table cellpadding="0" cellspacing="0" border="0"><tr>

<td class="ecw-crosswordarea">

<script type="text/javascript"><!--
	CrosswordWidth = 24;
	CrosswordHeight = 25;
	Words = 8;
	WordLength = new Array(13, 10, 4, 9, 4, 7, 11, 5);
	Word = new Array("BACTERIOFAGOS", "HELICOIDAL", "SIDA", "FITOVIRUS", "SEIS", "VIROSIS", "ELECTRONICO", "VIRUS");
	Clue = new Array("Son los tipos de virus que atacan e infectan bacterias.", 
"En este tipo de estructura, los viris toman forma de una hélice cerrada, como lo vemos en el genoma.", 
"Es una enfermedad venérea causada por un virus.", 
"Los virus de vegetales afectan a las células de las plantas y se denominan", 
"En cuantos órdenes están clasificados los virus.", 
"Las enfermedades ocasionadas por virus se llaman.", 
"Que tipo de microscopio es necesario para observar la morfología de los virus.", 
"Es un pequeño agente infeccioso que es incluso más pequeño que una bacteria. Consiste básicamente en un ácido nucleico rodeado por una envoltura de proteínas denominada cápsida.");
	AnswerHash = new Array(16693, 27673, 15865, 23233, 10855, 47595, 5875, 23573);
	WordX = new Array(2, 2, 2, 0, 14, 8, 3, 5);
	WordY = new Array(3, 7, 13, 15, 0, 2, 5, 6);
	LastHorizontalWord = 3;
	OnlyCheckOnce = false;
//-->
</script>

<script type="text/javascript"><!--

var BadChars = "`~!@^*()_={[}]\\|:;\"',<>/?";
var TableAcrossWord, TableDownWord;
var CurrentWord, PrevWordHorizontal, x, y, i, j;
var CrosswordFinished, Initialized;

if (document.getElementById("waitmessage") != null)
{
	document.getElementById("waitmessage").innerHTML = "Por favor espera mientras se carga el crucigrama...";
	
	CurrentWord = -1;
	PrevWordHorizontal = false;
	
	TableAcrossWord = new Array(CrosswordWidth);
	for (var x = 0; x < CrosswordWidth; x++) TableAcrossWord[x] = new Array(CrosswordHeight);
	TableDownWord = new Array(CrosswordWidth);
	for (var x = 0; x < CrosswordWidth; x++) TableDownWord[x] = new Array(CrosswordHeight);
	for (var y = 0; y < CrosswordHeight; y++)
		for (var x = 0; x < CrosswordWidth; x++)
		{
			TableAcrossWord[x][y] = -1;
			TableDownWord[x][y] = -1;
		}
	for (var i = 0; i <= LastHorizontalWord; i++)
	{
		x = WordX[i];
		y = WordY[i];
		for (var j = 0; j < WordLength[i]; j++)
		{
			TableAcrossWord[x + j][y] = i;
		}
	}
	
	for (var i = LastHorizontalWord + 1; i < Words; i++)
	{
		x = WordX[i];
		y = WordY[i];
		for (var j = 0; j < WordLength[i]; j++)
		{
			TableDownWord[x][y + j] = i;
		}
	}
	
	document.writeln("<table id=\"crossword\" cellpadding=\"0\" cellspacing=\"0\" style=\"display: none; border-collapse: collapse;\">");
	for (var y = 0; y < CrosswordHeight; y++)
	{
		document.writeln("<tr>");
		for (var x = 0; x < CrosswordWidth; x++)
		{
			if (TableAcrossWord[x][y] >= 0 || TableDownWord[x][y] >= 0)
				document.write("<td id=\"c" + PadNumber(x) + PadNumber(y) + "\" class=\"ecw-box ecw-boxnormal_unsel\" onclick=\"SelectThisWord(event);\">&nbsp;</td>");
			else
				document.write("<td><\/td>");
		}
		document.writeln("<\/tr>");
	}
	document.writeln("<\/table>");
	
	Initialized = true;
	document.getElementById("waitmessage").style.display = "none";
	document.getElementById("crossword").style.display = "block";
}

function WordEntryKeyPress(event)
{
	if (CrosswordFinished) return;
	if (CurrentWord >= 0 && event.keyCode == 13) OKClick();
}
function BeginCrossword()
{
	if (Initialized)
	{
		document.getElementById("welcomemessage").style.display = "";
		document.getElementById("checkbutton").style.display = "";
	}
}

function ContainsBadChars(theirWord)
{
	for (var i = 0; i < theirWord.length; i++)
		if (BadChars.indexOf(theirWord.charAt(i)) >= 0) return true;
	return false;
}

function PadNumber(number)
{
	if (number < 10)
		return "00" + number;
	else if (number < 100)
		return "0" + number;
	else
		return "" +  number;
}

function CellAt(x, y)
{
	return document.getElementById("c" + PadNumber(x) + PadNumber(y));
}

function DeselectCurrentWord()
{
	if (CurrentWord < 0) return;
	var x, y, i;
	
	document.getElementById("answerbox").style.display = "none";
	ChangeCurrentWordSelectedStyle(false);
	CurrentWord = -1;
	
}

function ChangeWordStyle(WordNumber, NewStyle)
{
	if (WordNumber< 0) return;
	var x = WordX[WordNumber];
	var y = WordY[WordNumber];
	
	if (WordNumber<= LastHorizontalWord)
		for (i = 0; i < WordLength[WordNumber]; i++)
			CellAt(x + i, y).className = NewStyle;
	else
		for (i = 0; i < WordLength[WordNumber]; i++)
			CellAt(x, y + i).className = NewStyle;
}

function ChangeCurrentWordSelectedStyle(IsSelected)
{
	if (CurrentWord < 0) return;
	var x = WordX[CurrentWord];
	var y = WordY[CurrentWord];
	
	if (CurrentWord <= LastHorizontalWord)
		for (i = 0; i < WordLength[CurrentWord]; i++)
			CellAt(x + i, y).className = CellAt(x + i, y).className.replace(IsSelected ? "_unsel" : "_sel", IsSelected ? "_sel" : "_unsel");
	else
		for (i = 0; i < WordLength[CurrentWord]; i++)
			CellAt(x, y + i).className = CellAt(x, y + i).className.replace(IsSelected ? "_unsel" : "_sel", IsSelected ? "_sel" : "_unsel");
}

function SelectThisWord(event)
{
	if (CrosswordFinished) return;
	var x, y, i, TheirWord, TableCell;
	
	document.getElementById("welcomemessage").style.display = "none";
	if (CurrentWord >= 0) OKClick();
	DeselectCurrentWord();
	
	var target = (event.srcElement ? event.srcElement: event.target);
	x = parseInt(target.id.substring(1, 4), 10);
	y = parseInt(target.id.substring(4, 7), 10);
	
	if (TableAcrossWord[x][y] >= 0 && TableDownWord[x][y] >= 0)
		CurrentWord = PrevWordHorizontal ? TableDownWord[x][y] : TableAcrossWord[x][y];
	else if (TableAcrossWord[x][y] >= 0)
		CurrentWord = TableAcrossWord[x][y];
	else if (TableDownWord[x][y] >= 0)
		CurrentWord = TableDownWord[x][y];

	PrevWordHorizontal = (CurrentWord <= LastHorizontalWord);
	
	ChangeCurrentWordSelectedStyle(true);
	
	x = WordX[CurrentWord];
	y = WordY[CurrentWord];
	TheirWord = "";
	var TheirWordLength = 0;
	for (i = 0; i < WordLength[CurrentWord]; i++)
	{
		if (CurrentWord <= LastHorizontalWord)
			TableCell = CellAt(x + i, y);
		else
			TableCell = CellAt(x, y + i);
		if (TableCell.innerHTML != null && TableCell.innerHTML.length > 0 && TableCell.innerHTML != " " && TableCell.innerHTML.toLowerCase() != "&nbsp;")
		{
			TheirWord += TableCell.innerHTML.toUpperCase();
			TheirWordLength++;
		}
		else
		{
			TheirWord += "&bull;";
		}
	}
	
	document.getElementById("wordlabel").innerHTML = TheirWord;
	document.getElementById("wordinfo").innerHTML = ((CurrentWord <= LastHorizontalWord) ? "Horizontal, " : "Vertical, ") + WordLength[CurrentWord] + " letras.";
	document.getElementById("wordclue").innerHTML = Clue[CurrentWord];
	document.getElementById("worderror").style.display = "none";
	document.getElementById("cheatbutton").style.display = (Word.length == 0) ? "none" : "";
	if (TheirWordLength == WordLength[CurrentWord])
		document.getElementById("wordentry").value = TheirWord.replace(/&AMP;/g, '&');
	else
		document.getElementById("wordentry").value = "";
	
	document.getElementById("answerbox").style.display = "block";
	try
	{
		document.getElementById("wordentry").focus();
		document.getElementById("wordentry").select();
	}
	catch (e)
	{
	}
	
}

function OKClick()
{
	var TheirWord, x, y, i, TableCell;
	if (CrosswordFinished) return;
	if (document.getElementById("okbutton").disabled) return;
	
	TheirWord = document.getElementById("wordentry").value.toUpperCase();
	if (TheirWord.length == 0)
	{
		DeselectCurrentWord();
		return;
	}
	if (ContainsBadChars(TheirWord))
	{
		document.getElementById("worderror").innerHTML = "La palabra que has escrito contiene caracteres inválidos. Por favor escribe únicamente letras";
		document.getElementById("worderror").style.display = "block";
		return;
	}
	if (TheirWord.length < WordLength[CurrentWord])
	{
		document.getElementById("worderror").innerHTML  = "No escribiste todas las letras. Esta respuesta necesita de " + WordLength[CurrentWord] + " letras.";
		document.getElementById("worderror").style.display = "block";
		return;
	}
	if (TheirWord.length > WordLength[CurrentWord])
	{
		document.getElementById("worderror").innerHTML = "Has escrito muchas letras para esta respuesta. Esta respuesta necesita solo " + WordLength[CurrentWord] + " letras.";
		document.getElementById("worderror").style.display = "block";
		return;
	}
	
	x = WordX[CurrentWord];
	y = WordY[CurrentWord];
	for (i = 0; i < TheirWord.length; i++)
	{
		TableCell = CellAt(x + (CurrentWord <= LastHorizontalWord ? i : 0), y + (CurrentWord > LastHorizontalWord ? i : 0));
		TableCell.innerHTML = TheirWord.substring(i, i + 1);
	}
	DeselectCurrentWord();
}

function CheckClick()
{
	var i, j, x, y, UserEntry, ErrorsFound = 0, EmptyFound = 0, TableCell;
	if (CrosswordFinished) return;
	DeselectCurrentWord();
	
	for (y = 0; y < CrosswordHeight; y++)
	for (x = 0; x < CrosswordWidth; x++)
		if (TableAcrossWord[x][y] >= 0 || TableDownWord[x][y] >= 0)
		{
			TableCell = CellAt(x, y);
			if (TableCell.className == "ecw-box ecw-boxerror_unsel") TableCell.className = "ecw-box ecw-boxnormal_unsel";
		}
		
	for (i = 0; i < Words; i++)
	{
		UserEntry = "";
		for (j = 0; j < WordLength[i]; j++)
		{
			if (i <= LastHorizontalWord)
				TableCell = CellAt(WordX[i] + j, WordY[i]);
			else
				TableCell = CellAt(WordX[i], WordY[i] + j);
			if (TableCell.innerHTML.length > 0 && TableCell.innerHTML.toLowerCase() != "&nbsp;")
			{
				UserEntry += TableCell.innerHTML.toUpperCase();
			}
			else
			{
				UserEntry = "";
				EmptyFound++;
				break;
			}
		}
		UserEntry = UserEntry.replace(/&AMP;/g, '&');
		// If this word doesn't match, it's an error.
		if (HashWord(UserEntry) != AnswerHash[i] && UserEntry.length > 0)
		{
			ErrorsFound++;
			ChangeWordStyle(i, "ecw-box ecw-boxerror_unsel");
		}
	}
	
	if ( OnlyCheckOnce )
	{
		CrosswordFinished = true;
		document.getElementById("checkbutton").style.display = "none";
	}
	
	if (ErrorsFound > 0 && EmptyFound > 0)
		document.getElementById("welcomemessage").innerHTML = ErrorsFound + (ErrorsFound > 1 ? " errores" : " error") + " y " + EmptyFound + (EmptyFound > 1 ? " palabras incompletas" : " palabra incompleta");
	else if (ErrorsFound > 0)
		document.getElementById("welcomemessage").innerHTML = ErrorsFound + (ErrorsFound > 1 ? " errores fueron" : " error fue") + " encontrado.";
	else if (EmptyFound > 0)
		document.getElementById("welcomemessage").innerHTML = "No encontramos errores, pero " + EmptyFound + (EmptyFound > 1 ? " palabras están incompletas" : " palabra está incompleta");
	
	if (ErrorsFound + EmptyFound > 0)
	{
		document.getElementById("welcomemessage").style.display = "";
		return;
	}
			
	CrosswordFinished = true;
	document.getElementById("checkbutton").style.display = "none";
	document.getElementById("congratulations").style.display = "block";
	document.getElementById("welcomemessage").style.display = "none";
}

function CheatClick()
{
	if (CrosswordFinished) return;
	var OldWord = CurrentWord;
	document.getElementById("wordentry").value = Word[CurrentWord];
	OKClick();
	ChangeWordStyle(OldWord, "ecw-box ecw-boxcheated_unsel");
}

function HashWord(Word)
{
	var x = (Word.charCodeAt(0) * 719) % 1138;
	var Hash = 837;
	var i;
	for (i = 1; i <= Word.length; i++)
		Hash = (Hash * i + 5 + (Word.charCodeAt(i - 1) - 64) * x) % 98503;
	return Hash;
}

//-->
</script>

</td>

<td valign="top" style="padding-left: 1em;">

<div id="welcomemessage" class="ecw-answerbox" style="display:none;">
<h3>Bienvenido!</h3>
<p>Da click en cualquier espacio del crucigrama para comenzar.</p>
</div>

<div id="answerbox" class="ecw-answerbox" style="display:none;">
<h3 id="wordlabel" class="ecw-wordlabel"> &nbsp;</h3>
<div id="wordinfo" class="ecw-wordinfo"> </div>
<div id="wordclue" class="ecw-cluebox"> </div>
<div style="margin-top: 1em;">
	<input class="ecw-input" id="wordentry" type="text" size="24" style="font-weight: bold; text-transform:uppercase;" onkeypress="WordEntryKeyPress(event)" onchange="WordEntryKeyPress(event)" />
</div>
<div id="worderror" class="ecw-worderror"></div>

<table border="0" cellspacing="0" cellpadding="0" width="100%" style="margin-top:1em;"><tbody><tr><td>
<button id="cheatbutton" type="button" class="ecw-input ecw-button" onclick="CheatClick();">Solucionar</button>
</td><td align="right">
<button id="okbutton" type="button" class="ecw-input ecw-button" onclick="OKClick();" style="font-weight: bold;">OK</button> &nbsp;
<button id="cancelbutton" type="button" class="ecw-input ecw-button" onclick="DeselectCurrentWord();">Cancelar</button>
</td></tr></tbody></table>

</div>

<div id="congratulations" class="ecw-answerbox" style="display:none;">
<h3>Felicidades!</h3>
<p> Haz completado correctamente este crucigrama.</a>.
</p>
</div>

</td></tr></table>

<div style="margin-top: 1em;">
	<button id="checkbutton" type="button" onclick="CheckClick();" style="display: none;">Evaluar respuestas</button>
	<form> <input type='button' onclick='window.print();' value='Imprimir' /></form> 
</div>

<script type="text/javascript"><!--
BeginCrossword();
//-->
</script>

</body></html>
@endsection