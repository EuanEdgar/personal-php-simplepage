<?php
echo	"<style>
			div.link{
	size:100%;
}

div.linksbar{
	width: 100%;
	background-color: #101010;
	border: 1px solid #050505;
	color: #ffffff
}

table.linksbar{
	width:100%;
}
td.link{
	width:10%;
	text-align: center;
	border-left: 1px solid #ff9900;
	border-right: 1px solid #ff9900;
}
td.link-spacer-1{
	width:33%;
}
td.link-spacer-2{
	width:2%;
}

a.link-bar{
	color: #ffffff;
	font-size: 15pt;
	text-decoration: none;
	width:100%;
	height:100%;
}
		</style>
		<div class=\"linksbar\">
			<table cellspacing=\"0\" cellpadding=\"0\" class=\"linksbar\">
				<tr>
					<td class=\"link-spacer-1\"></td>

					<td class=\"link\">
						<a class=\"link-bar\" href=\"http://localhost:8888/simplepage/home.php\">
							<div>
								Home
							</div>
						</a>
					</td>

					<td class=\"link-spacer-2\"></td>

					<td class=\"link\">
						<a class=\"link-bar\" href=\"http://google.co.uk\">
							<div>
								Google
							</div>
						</a>
					</td>

					<td class=\"link-spacer-2\"></td>

					<td class=\"link\">
						<a class=\"link-bar\" href=\"http://google.co.uk\">
							<div>
								Google
							</div>
						</a>
					</td>

					<td class=\"link-spacer-1\"></td>
				</tr>
			</table>
		</div><!-- End of linksbar -->";
?>