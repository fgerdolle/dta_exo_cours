$(function () {

    const DEFAULT_COLOR = '#FF00FF';

    $("#wColorPicker").wColorPicker({
        
        color: DEFAULT_COLOR,
        
        onSelect: function(color){
            
            $("#wColorPicker_input").css("background", color).val(color);
        },
        
        onMouseover: function(color){
            $("#wColorPicker_input").css("background", color).val(color);
        },
        
        onMouseout: function(color){
            $("#wColorPicker_input").css("background", color).val(color);
        }
    });

    $("#wColorPicker_input").css("background", DEFAULT_COLOR).val(DEFAULT_COLOR);
});