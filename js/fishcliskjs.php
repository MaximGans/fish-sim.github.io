<script>
$(document).ready(function () {
	var cena = 50;
	var money = 0;
	/*cena*/
	var kilca_cena = 50;
	var tynec_cena = 50;
	var treska_cena = 50;
	var semga_cena = 50;
	var okyn_cena = 50;

	/*cena*/
	/*fish*/
	var	kilca = 0;
	var	tynec = 0;
	var	treska = 0;
	var	semga = 0;
	var	okyn = 0;
	/*fish click*/
	var kilca_click= 1;
	var tynec_click= 1;
	var treska_click= 1;
	var semga_click= 1;
	var okyn_click= 1;
	/*fish click*/

	$("#fish").click(function () {
		kilca += kilca_click;
		$('#kilka').text(kilca);

	});

	$("sell").click(function () {
		if (kilca > 0){
			
			kilca -=1;
			money +=5;
			$('money').text(money);
			$('#kilka').text(kilca);
		}


	});


	$("sell5").click(function () {
		if (kilca >=5){
			
			kilca -=5;
			money +=25;
			$('money').text(money);
			$('#kilka').text(kilca);
		}


	});

	$("sell10").click(function () {
		if (kilca >=10){
			
			kilca -=10;
			money +=50;
			$('money').text(money);
			$('#kilka').text(kilca);
		}


	});

	/*$("up1").click(function () {
		if (money >=cena){
			
			fishcl *=2;
			money -=cena;
			cena *=2;
			$('money').text(money);
			$('fish').text(fish);
		}


	});*/
	

});
</script>
	