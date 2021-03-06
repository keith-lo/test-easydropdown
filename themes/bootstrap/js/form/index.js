$(function(){

    $('#field-name').easyDropDown({
        //disabled: true, //Turn this on to disable easyDropDown
        onChange: function(obj){
            console.log('Selected', obj);
        },
        select: function(index){
			var self = this;

			if(typeof index === 'string'){
				index = self.$select.find('option[value='+index+']').index() - 1;
			};

			var	option = self.options[index],
                selectIndex = self.hasLabel ? index + 1 : index;

            //Custom code : start
            if( self.$select.find('option').eq(selectIndex).is(':disabled') ){ return false; }
            //Custom code : end

			self.$items.removeClass('active').eq(index).addClass('active');
			self.$active.text(option.title);
			self.$select
				.find('option')
				.removeAttr('selected')
				.eq(selectIndex)
				.prop('selected',true)
				.parent()
				.trigger('change');

			self.selected = {
				index: index,
				title: option.title
			};
			self.focusIndex = i;
			if(typeof self.onChange === 'function'){
				self.onChange.call(self.$select[0],{
					title: option.title,
					value: option.value
				});
			};
		}
    });

    function styleDropDown($select){
        $select.find('option').each(function(){
            $option = $(this);
            var optionText = $option.text();
            var optionClasses = $option.attr('class');
            if( optionClasses ){
                var $lis = $option.closest('.dropdown').find('li');
                if( $lis.length > 0 ){
                    $lis.each(function(){
                        var $li = $(this);

                        if( $li.text() == optionText ){
                            $li.attr('class', optionClasses);
                        }
                    });
                }
            }
        });
    }

    styleDropDown($('#field-name'));

    $('#clickme').click(function(e){
        e.preventDefault();

        var selectObj = $('#field-name');

        selectObj.easyDropDown('destroy');
        selectObj.empty();
        $.ajax({url: '/country.php'}).done(function(data){
            $.each(data.outlets, function(index, outlet){
                var attr = {};
                if( outlet.class ){ attr.class = outlet.class; }
                if( outlet.disabled ){ attr.disabled = outlet.disabled; }

                var $option = $("<option></option>").attr(attr).text(outlet.text).val(outlet.value);

                if( outlet.value == $('#field-name').data('value') ){
                    $option.attr('selected', 'selected');
                }
                selectObj.append($option);
            });

            selectObj.easyDropDown();
            styleDropDown(selectObj);
        });
    });
});