$(document).ready(function() {
	$('.mobile-v .form-progress h4').bind('click', function(e) {
		e.preventDefault();
		$(this).parent().toggleClass('opened');
	});

	$('.getVal').click(function(){
		$('.finanse-res h4.price span.pricess').html(Math.floor($('.price-bind').val()).toString().replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 '));
		$('.finanse-res h4.price span.pricess').attr('data-attr-price', Math.floor($('.price-bind').val()));
		$('.finanse-res h4.price span.pricess').attr('data-attr-price');

		$('.finanse-res h4.perv-vznos span').html(Math.floor($('.slide span.sum').attr('data-val')*0.01*$('.finanse-res h4.price span.pricess').attr('data-attr-price') ).toString().replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 ')+'<em>С</em>');
		$('.finanse-res h4.sum span').html(Math.floor($('.finanse-res h4.price span.pricess').attr('data-attr-price') - $('.slide span.sum').attr('data-val')*0.01*$('.finanse-res h4.price span.pricess').attr('data-attr-price')).toString().replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 ')+'<em>С</em>');

		var a = Math.pow((1+0.4/12), $('.slide span.per').attr('data-val'))-1;
		var platej = ($('.finanse-res h4.price span.pricess').attr('data-attr-price') - $('.slide span.sum').attr('data-val')*0.01*$('.finanse-res h4.price span.pricess').attr('data-attr-price'))*(0.4/12+0.4/12/a);

		$('.finanse-res h4.ezh-platej span').html(Math.floor(platej).toString().replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 ')+'<em>С</em>');
		$('.finanse-res h4.itogo span').html(Math.floor(platej*$('.slide span.per').attr('data-val')-($('.finanse-res h4.price span.pricess').attr('data-attr-price') - $('.slide span.sum').attr('data-val')*0.01*$('.finanse-res h4.price span.pricess').attr('data-attr-price'))).toString().replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 ')+'<em>С</em>');
	});

	$('.calc-credit .slide > div').each(function() {
		var t = $(this);
		t.slider({
			min: eval(t.attr('data-min')),
			max: eval(t.attr('data-max')),
			step: eval(t.attr('data-step')),
			value: eval(t.attr('data-default')),
			range: 'min',
			slide: function(event, ui) {
				if ( t.siblings('span.sum').length > 0 ) {
					var v = ui.value.toString();
					t.siblings('span.sum').html(v.replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 ')+' %');
				}
				if ( t.siblings('span.per').length > 0 ) {
					if ( ui.value == 1 ) {
						a = 'месяц'
					} else if ( ui.value >=5 ) {
						a = 'месяцев'
					} else {
						a = 'месяца'
					}
					t.siblings('span.per').html(ui.value+' '+a);
				}
				t.siblings('span').attr('data-val', ui.value);

				$('.finanse-res h4.perv-vznos span').html(Math.floor($('.slide span.sum').attr('data-val')*0.01*$('.finanse-res h4.price span.pricess').attr('data-attr-price')).toString().replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 ')+'<em>С</em>');
				$('.finanse-res h4.sum span').html(Math.floor($('.finanse-res h4.price span.pricess').attr('data-attr-price') - $('.slide span.sum').attr('data-val')*0.01*$('.finanse-res h4.price span.pricess').attr('data-attr-price')).toString().replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 ')+'<em>С</em>');

				var a = Math.pow((1+0.3/12), $('.slide span.per').attr('data-val'))-1;
				var platej = ($('.finanse-res h4.price span.pricess').attr('data-attr-price') - $('.slide span.sum').attr('data-val')*0.01*$('.finanse-res h4.price span.pricess').attr('data-attr-price'))*(0.3/12+0.3/12/a);

				$('.finanse-res h4.ezh-platej span').html(Math.floor(platej).toString().replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 ')+'<em>С</em>');
				$('.finanse-res h4.itogo span').html(Math.floor(platej*$('.slide span.per').attr('data-val')-($('.finanse-res h4.price span.pricess').attr('data-attr-price') - $('.slide span.sum').attr('data-val')*0.01*$('.finanse-res h4.price span.pricess').attr('data-attr-price'))).toString().replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 ')+'<em>С</em>');
			}
		});
		if ( t.siblings('span.sum').length > 0 ) {
			t.siblings('span.sum').html(t.attr('data-default').replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 ')+' %');
		}
		if ( t.siblings('span.per').length > 0 ) {
			if ( eval(t.attr('data-default')) == 1 ) {
				a = 'месяц'
			} else if ( eval(t.attr('data-default')) >=5 ) {
				a = 'месяцев'
			} else {
				a = 'месяца'
			}
			t.siblings('span.per').html(t.attr('data-default')+' '+a);
		}
		t.siblings('span').attr('data-val', eval(t.attr('data-default')));
		$('.finanse-res h4.perv-vznos span').html(Math.floor($('.slide span.sum').attr('data-val')*0.01*$('.finanse-res h4.price span.pricess').attr('data-attr-price')).toString().replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 ')+'<em>С</em>');
		$('.finanse-res h4.sum span').html(Math.floor($('.finanse-res h4.price span.pricess').attr('data-attr-price') - $('.slide span.sum').attr('data-val')*0.01*$('.finanse-res h4.price span.pricess').attr('data-attr-price')).toString().replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 ')+'<em>С</em>');

		var a = Math.pow((1+0.3/12), $('.slide span.per').attr('data-val'))-1;
		var platej = ($('.finanse-res h4.price span.pricess').attr('data-attr-price') - $('.slide span.sum').attr('data-val')*0.01*$('.finanse-res h4.price span.pricess').attr('data-attr-price'))*(0.3/12+0.3/12/a);

		$('.finanse-res h4.ezh-platej span').html(Math.floor(platej).toString().replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 ')+'<em>С</em>');
		$('.finanse-res h4.itogo span').html(Math.floor(platej*$('.slide span.per').attr('data-val')-($('.finanse-res h4.price span.pricess').attr('data-attr-price') - $('.slide span.sum').attr('data-val')*0.01*$('.finanse-res h4.price span.pricess').attr('data-attr-price'))).toString().replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 ')+'<em>С</em>');


		t.siblings('input').focusin(function() {
			var s = $(this).siblings('.val');
			s.css({
				'color': 'transparent'
			});
			$(this).attr('data-val', s.attr('data-val')).css({
				'color': '#333333'
			}).val(s.attr('data-val').toString().replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 '));
		});
		t.siblings('input').focusout(function() {
			var s = $(this).siblings('.val');
			s.css({
				'color': '#333333'
			});
			$(this).css({
				'color': 'transparent'
			});
		});
		t.siblings('input').keyup(function() {
			$(this).attr('data-val', $(this).val().replace(/\s/g, ''));
			$(this).val($(this).attr('data-val').toString().replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 '));
			$(this).siblings('.val').attr('data-val', $(this).attr('data-val'));
			$(this).siblings('.val').html($(this).attr('data-val').toString().replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 ')+' %');
			t.slider('value', $(this).attr('data-val'));
		});
	});

	$('.calc-credit .invest-t .category ul li').bind('click', function(e) {
		e.preventDefault();
		$(this).addClass('active').siblings().removeClass();
	}).filter(':first').click();
});
