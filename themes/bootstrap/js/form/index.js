$(function(){
    $('select.mydropdown').easyDropDown({
        onChange: function(obj){
            console.log('Selected', obj);
        }
    });

    $('select.mydropdown option').each(function(){
        var $option = $(this);
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
});