window.onload = function() {
    "use strict";
 

   $('.menuToggle1').on('click', function() {
       $('.menu').slideToggle(300, function() {
           if ($(this).css('display')==='none') {
               $(this).removeAttr('style');
           }
       });
   })
  
      
    $('.acc-head').on('click', f_acc);

    function f_acc(){
        if($( window ).width()<651){
        $(this).next().slideToggle(200, function() {
            if ($(this).css('display')==='none') {
                $(this).removeAttr('style');
            };

            
        });  
    }
}   
  

  $(function () {
	var elWrap = $('#slider'),
		el =  elWrap.find('img'), //находим все эл-ты img
		indexImg = 1,
		indexMax = el.length, // кол-во картинок
		phase = 3000;
	
	function change () {
		el.fadeOut(500); //скрываем img за 500 мс
		el.filter(':nth-child('+indexImg+')').fadeIn(500); // показываем отфильтрованные img с номером indexImg  за 500 мс
	}	
		
	function autoCange () {	     // автоматическая смена слайда
		indexImg++;
		if(indexImg > indexMax) {
			indexImg = 1;
		}			
		change ();
	}	
	var interval = setInterval(autoCange, phase);  // (setInterval- постоянный запуск) автоматическая смена слайда (задали функцию и время)

	elWrap.mouseover(function() { // мышка внутри- отключить автоматическую смену слайдов
		clearInterval(interval);
	});
	elWrap.mouseout(function() { // мышка за пределами слайда- включить автоматическую смену слайда
		interval = setInterval(autoCange, phase);
	});
	
	elWrap.append('<span class="next"></span><span class="prev"></span>'); // создаем кнопки
	var	btnNext = $('span.next'), // привязываем к переменным
		btnPrev = $('span.prev');
		
	btnNext.click(function() {
		indexImg++;
		if(indexImg > indexMax) {
			indexImg = 1;
		}
		change ();
	});
	btnPrev.click(function() {
		indexImg--;
		if(indexImg < 1) {
			indexImg = indexMax;
		}
		change ();
	});	
 });
}

        
           
