{
    $(document).ready(function (){
        wizardType();

    });

    //Wizard Type function
    function wizardType(){

        //Variable
        var wizardDiv = $('.wizard');
        var btnNext = $('button[name="btn_wz_next"]');
        var btnPrev = $('button[name="btn_wz_previous"]');
        var arr = [];
        var count = 0;
        var prevcount = 0;
        var divClass = '#section_';

        //Hide all the div first
        wizardDiv.hide();

        //for each all the class .wizard to get there id and put it in array
        wizardDiv.each(function () { 
            var id = $(this).attr('id');
            arr.push(id);
        });

        //Show the first div that start with the 0
        //example "#section_0"
        $(divClass + count).show();


        btnNext.click( function () { 
            //prevcount is equal to previous count
            prevcount = count;
            count++;

            //check if there`s an id that exist
            //example "#section_0"
            if($(divClass + count).length){
                //Show the next div and hide the current div
                wizardShow(divClass,count);
                wizardHide(divClass,prevcount);
            }else{
                //if an id doest exist count is equal to prevcount
                //so that the count doest increment
                count = prevcount;
            }            
         })

         btnPrev.click( function () { 
             //prevcount is equal to previous count
            prevcount = count;
            count--;
            //Show the previous div and hide the current div
            wizardShow(divClass,count);
            wizardHide(divClass,prevcount);
            
         })
        
    }
    function wizardShow(div,count){
        $(div + count).show();
    }
    function wizardHide(div,prevcount){
        $(div + prevcount).hide();
    }
}