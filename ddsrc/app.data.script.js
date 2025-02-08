$(document).ready(function() {
	var data1 = "";
	$.ajax({
		url: "./ppsrc/ppsrc.php",
		type: "GET",
		data: {name: "Xurshid"},
		success: function(data) {
			data = JSON.parse(data);
			$(data).each(function(index, element) {
				data1 += `
				<div class="card">
					<img class="cd_img" src="${element.pr_image}" alt="">
					<div class="cd_body">
						<span class="cd_title">${element.pr_title}</span>
						<hr class="cd_hr">
					<span class="cd_price">${element.pr_price}$</span>
					<hr class="cd_hr-2">
					<button class="cd_btn">Ko'proq</button>
					</div>
				</div>
			`;
			})
			$("#cards").html(data1);
		}
	})
})

$("#search_field").on('keyup', function(e) {
	if($("#search_field").val() == "") {
	var data1 = "";
	$.ajax({
		url: "./ppsrc/ppsrc.php",
		type: "GET",
		data: {name: "Xurshid"},
		success: function(data) {
			data = JSON.parse(data);
			$(data).each(function(index, element) {
				data1 += `
				<div class="card">
					<img class="cd_img" src="${element.pr_image}" alt="">
					<div class="cd_body">
						<span class="cd_title">${element.pr_title}</span>
						<hr class="cd_hr">
					<span class="cd_price">${element.pr_price}$</span>
					<hr class="cd_hr-2">
					<button class="cd_btn">Ko'proq</button>
					</div>
				</div>
			`;
			})
			$("#cards").html(data1);
		}
	})	
	}
})

$(document).ready(function() {
	$(".icon_search").click(function(e) {
		var data1 = "";
		var cards = $(".cards");
		e.preventDefault();
		var search = $("#search_field").val();
		if(search != "") {
			$.ajax({
				type: "POST",
				url: "./ppsrc/ddscript.php",
				data: {search: search},
				success:function(data) {
					var data = JSON.parse(data);
					$(cards).html("");
					$(data).each(function(index, element) {
						data1+=`
						<div class="card">
							<img class="cd_img" src="${element.pr_image}" alt="">
							<div class="cd_body">
								<span class="cd_title">${element.pr_title}</span>
								<hr class="cd_hr">
								<span class="cd_price">${element.pr_price}$</span>
								<hr class="cd_hr-2">
								<button class="cd_btn">Ko'proq</button>
							</div>
						</div>
						`;
					})
					if(data1 == "") {
						var text = "<p>hozircha bunday maxsulot yo'q!</p>";
						$(cards).html(text);
					}else if(data1 != "") {
						$(cards).html(data1);
					}
				}
			})
		}
	})
})