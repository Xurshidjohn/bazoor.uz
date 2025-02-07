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