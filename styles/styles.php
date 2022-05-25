<?
header('Content-Type: text/css');
?>
* {
  box-sizing: border-box;
  margin: 0;
}
.kvazi-body{
	border: 3px solid #aca6b2;
	background-color: #282528;
	display: grid;
	grid-template-columns: repeat(3, 1fr);
	grid-template-rows: 1fr 2fr;
	grid-column-gap: 5px;
}
h1{
	text-align: center;
	color: grey;
}
p{
	color: #aaa1ad;
}
.foto{
	grid-row: 1/4;
}
.img-me{
	object-fit: contain;
  width: 100%;
  height: 100%;
}
.about-me, .impres{
padding: 5px;
}
.logo{
	object-fit: contain;
  width: 100%;
  height: 100%;
  justify-content: center;
  align-items: center;
}
.img-logo{
	object-fit: contain;
  width: 100%;
  height: 100%;
}
.fio{
grid-column: 2/4;
display: flex;
align-items: center;
justify-content: center;
}
.menu{
	display: grid;
	grid-template-columns: repeat(4, 1fr);
	grid-column-gap: 1px;
	padding: 1px;
	margin: 1px;
}
.flex-container1{
	background-color: #ccded7;
	flex-direction: row;
	flex-wrap: nowrap;	
	justify-content:space-evenly;
	border: 3px solid black;
}
.flex-container1, .flex2-container1, .flex2-container2, .flex-div1, .flex-div1-img, .flex-div1-txt{
	display: flex;
	padding: 3px;
	margin: 1px;
}
.flex-div1{
	flex: 1;
	flex-direction: column;
	flex-wrap: nowrap;	
	justify-content:space-evenly;
	border: 2px solid black;
}
.div1-img{
	object-fit: cover;
  width: 100%;
  height: 100%;
  justify-content: center;
  align-items: center;
  border: 1px solid black;
}
.flex-div1-txt{
	border: 1px solid black;
}
.flex2-container2{
	flex-direction: row;
	flex-wrap: nowrap;	
	justify-content:space-evenly;
}
.flex2-container1{
	background-color:#9bf2d0;
	flex-direction: column;
	flex-wrap: nowrap;	
	justify-content:space-evenly;
	border: 3px solid black;
}
.grid1{
	border: 3px solid yellow;
	background-color: #ff00f7;
	display: grid;
	grid-template-columns: repeat(4, 1fr);
	grid-column-gap: 0;
}
.grid-div,  .grid-div-img, .grid-div-txt{
	border: 1px solid black;
	margin: 1px;
	padding: 1px;
}
.grid-div{
	display: grid;
	grid-template-columns: 1fr;
	grid-column-gap: 1px;
}
.grid-img{
  object-fit: contain;
  width: 100%;
  height: 100%;
}
.grid2{
	border: 3px solid green;
	background-color: skyblue;
	display: grid;
	grid-template-columns: repeat(2, 1fr);
	grid-column-gap: 0;
}
.grid-header{
	margin-top: 20px;
	background-color: #aca6b2;
	display: grid;
	grid-template-columns: 10fr 2fr 1fr 1fr;
	grid-column-gap: 5px;
}
.menu-el, .reg_back{
	margin: auto;
	text-align: center;
	font-size: 16pt;
}
.grid-footer{
	margin-top: 5px;
	margin-bottom: 5px;
	background-color: #aca6b2;
	display: grid;
	grid-template-columns: 4fr 1fr;
	grid-column-gap: 5px;
}
.copyright{
	margin: auto;
}
.copyright p{
	text-align: center;
	color: black;
	font-size: 10pt;
}
.social{
	display: grid;
	grid-template-columns: repeat(4, 1fr);
	grid-column-gap: 10px;
}
.social-ic{
	margin: auto;
	padding-top: 2px;
}
.social-ic-im{
	object-fit: contain;
  width: 50px;
  /*height: 100%;*/
  justify-content: center;
  align-items: center;
}


@media screen and (max-width: 480px){
	.menu{
	display: grid;
	grid-template-columns: repeat(2, 1fr);
	grid-column-gap: 1px;
	}
	.menu-el{
	border: 1px solid  #282528;
	padding: 2px;
	margin: 2px;
	text-align: center;
	}
	.kvazi-body{
	border: 1px solid #aca6b2;
	background-color: #282528;
	display: grid;
	grid-template-columns: 1fr 1fr;
	grid-template-rows: 0.5fr 2fr 1fr 0.5fr;
	grid-column-gap: 2px;
	}
	.fio{
		grid-column: 1/3;
		grid-row: 1/1;
		display: flex;
		align-items: center;
		justify-content: center;
	}
	.foto{
		grid-column: 1/3;
		grid-row: 2/2;
	}
	.about-me{
		grid-column: 1/3;
		grid-row: 3/3;
	}
	.impres{
		grid-column: 1/3;
		grid-row: 4/4;
	}
	.fio, .foto, .about-me, .impres{
		display: flex;
	align-items: center;
	justify-content: center;
	}
	p{
		font-size: 16pt;
	}
	.flex-container1{
	background-color: #ccded7;
	flex-wrap: nowrap;	
	justify-content:space-evenly;
	border: 3px solid black;
	}
	.flex2-container2{
		flex-wrap: wrap;
	}
	.flex-div1, .flex-container1, .flex2-container2{
		flex-direction: column;
	}
	.grid1, .grid2{
	grid-template-columns: 1fr;
	}
	.menu-el{
		font-size: 12pt;
	}
}
@media screen and (min-width: 480px) and (max-width: 768px){
	.kvazi-body{
	border: 1px solid #aca6b2;
	background-color: #282528;
	display: grid;
	grid-template-columns: 1fr 1fr;
	grid-template-rows: 0.5fr 3fr 0.5fr;
	/*grid-template-rows: repeat(4, 1fr);
	grid-column-gap: 2px;*/
	}
	.fio{
		grid-column: 1/3;
		grid-row: 1/2;
		display: flex;
		align-items: center;
		justify-content: center;
	}
	.foto{
		grid-column: 1/2;
		grid-row: 2/3;
	}
	.about-me{
		grid-column: 2/3;
		grid-row: 2/3;
	}
	.impres{
		grid-column: 1/3;
		grid-row: 3/4;
	}
	.fio, .foto, .about-me, .impres{
		display: flex;
	align-items: center;
	justify-content: center;
	}
	p{
		font-size: 20pt;
	}
	.flex-container1{
	background-color: #ccded7;
	flex-wrap: wrap;
	flex-direction: column;	
	justify-content:space-evenly;
	border: 3px solid black;
	grid-template-rows: repeat(4, 1fr);
	}
	.flex2-container2{
		flex-direction: column;
		flex-wrap: wrap;
	}
	.grid1, .grid2{
	grid-template-columns: 1fr;
	}
	.menu-el{
		font-size: 14pt;
	}
}
/*task1*/
<? $color_1 = dechex(mt_rand()); ?>
.task1{
 color: <? echo'#'.$color_1; ?>;
}