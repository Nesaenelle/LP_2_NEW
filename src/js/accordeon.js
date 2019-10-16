import $ from 'jquery';

export default class Dropdown {
   constructor() {
      const accordeons = $('.accordeon');
      const tabs = $('[data-accordeon-tab]');
      const cacheContent = [];
      const closeAll = $('[data-accordeon-close]');

      closeAll.on('click', function() {
         // tabs.removeClass('active');
         accordeons.each((i, accordeon) => {
            const titles = $(accordeon).find('[data-accordeon-title]');
            titles.removeClass('active').next().hide();
         });
      });

      tabs.on('click', function () {
         tabs.removeClass('active');
         $(this).addClass('active');
         let index = $(this).data('accordeon-tab');
         accordeons.removeClass('active');
         $(`[data-accordeon=${index}]`).addClass('active');
      });
      
      accordeons.each((i, accordeon) => {
         const titles = $(accordeon).find('[data-accordeon-title]');

         cacheContent.push(titles.next().clone());

         titles.on('click', function (e) {
            e.stopPropagation();
            $(this).toggleClass('active');
            $(this).next().stop().slideToggle(200);
         });
      });

      $('[data-accordeon-search] input').on('input', function () {
         let value = this.value;
         let re = new RegExp(value, "g");
         let accordeon = accordeons.filter(':visible');//.filter('.active');
         let titles = $(accordeon).find('[data-accordeon-title]');
         let accordeonId = accordeon.filter(':visible').data('accordeon');
         let resultLength = 0;

         titles.next().filter((i, elem) => {
            elem.innerHTML = cacheContent[accordeonId][i].innerHTML;
            let match = elem.innerHTML.match(re);
            resultLength += match ? match.length : 0;
            if (value.length && match) {
               $(elem).stop().slideDown(200);
               $(titles[i]).addClass('active');
               
               $(`:contains(${value})`, elem).each(function () {
                  $(this).html($(this).html().replace(new RegExp(value, 'g'), '<span class="highlighted">' + value + '</span>'));
               });

            } else {
               $(elem).stop().slideUp(200);
               $(titles[i]).removeClass('active');
            }
         });

         if (resultLength && value.length) {
            $('[data-accordeon-search-result]').text(`Found ${resultLength} matches`);
         } else {
            $('[data-accordeon-search-result]').empty();
         }

      });


   }
}